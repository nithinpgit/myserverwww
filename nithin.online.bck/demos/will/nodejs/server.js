var port;
var express    = require('express');
var app        = express();
var https      = require('https');
var fs         = require('fs');
/**
 * configuration variables read from CONFIG.json
 */
var room_port,key_path,cert_path;
setConfig();
var options             = {
                            key:  fs.readFileSync(key_path),
                            cert: fs.readFileSync(cert_path)
                         };
var httpsServer 	= https.createServer(options,app).listen(room_port);
var io         		= require('socket.io')(httpsServer);
var clients 		= {};
var userRegistary 	= {};
var ststusArray   	= {};
io.sockets.on('connection', function (socket) 
{	
/**
 *   Socket connection success callback for room server
 */
	socket.on('addUser', function (data) 
	{
		console.log('userId:'+data.userId+' room:'+data.room+' name:'+data.name);
				clients[data.userId] = socket;
				socket.userId    	 = data.userId;
				var room         	 = data.room;
				socket.room      	 = room;
				data.id          	 = socket.id;
				var userArray        = {};
				if(userRegistary.hasOwnProperty(room)){
					userArray               = userRegistary[room];
				}
				userArray[data.userId]      = data;
				userRegistary[room]         = userArray;		
				io.sockets.emit('onUserList', userRegistary);
	});

/**
 * function for sending data to all
*/
	socket.on('sendToAll', function (data) 
	{
		socket.broadcast.emit('onReceivesendtoAll', data);
	});
/**
 * API function for user listing
 * @param id
 */	
	app.get('/userListServer/:room', function(request, result) {
	  var userArrayList	   = {};
	  var room 			   = request.params.room;
	  userArrayList    	   = userRegistary[room];
	  result.end(JSON.stringify(userArrayList));
	});

/**
 * Function for disconnect 
 */	
	socket.on('disconnect', function () 
	{
         socket.broadcast.emit('onDisconnectUser', socket.userId);
         var room       = socket.room;
         if(userRegistary.hasOwnProperty(room)){
            userArray          = userRegistary[room];
            if(userArray.hasOwnProperty(socket.userId)){
               delete userArray[socket.userId];
               userRegistary[room] = userArray;	
               io.sockets.emit('onUserList', userRegistary);
            }
         }
   	});
});
/**
 * Generate unique ID, used for generating new rooms
 * @returns {string}
 */
 function setConfig(){
    config_data         = fs.readFileSync('CONFIG.json', 'utf8');
    config_obj          = JSON.parse(config_data);
    room_port           = config_obj['room_port'];
    cert_path           = config_obj['cert_path'];
    key_path            = config_obj['key_path'];
    
 }
//console.log("SERVER RUNNING AT "+room_port+" PORT");
