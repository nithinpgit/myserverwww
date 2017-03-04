/*
**
*** socket scripts
****
*/
var NODE_URL = 'https://nithin.online:2087';
var socket = io.connect(NODE_URL);
var callStatus = 0;   // 0 means free, 1 means calling, 2 means busy
    socket.on("connect", function (id) {
        var userData        = {};
        userData.name       = name;
        userData.room       = room;
        userData.userId     = userId;
        userData.mode       = mode;
        socket.emit('addUser',userData);
    });

     socket.on('onUserList', function (data) {
        var userListHtml   = '';
        data               = data[room];
        var count = 0;
        for (var key in data) {
            count++;
            userListHtml  +=   '<div id="user-'+data[key].id+'" class="text"><strong class="color-m">'+data[key].name+'</strong></div>';
        };
        $('.usercount').html(count);
        $('.users-list').html(userListHtml);
     });
/*
**
*** socket scripts end
****
*/
var popupActive = 0;
$('document').ready(function(){
     if(mode == '0' ){
   		   $('.tip_button').click(function(){
                 popupActive = 1;
                 $('.tip_popup').show();
		   })
           $('.tip_popup').click(function(){
                 popupActive = 1;

           })
           $('body').click(function(){
                if(popupActive == 0){
                 $('.tip_popup').hide();
                }
                popupActive = 0;
             })
                      
     }
     $('body').click(function(){
                if(popupActive == 0){
                 $('.emote_popup').hide();
                }
                popupActive = 0;
             })
     $('.smile').click(function(){
                 popupActive = 1;
                 $('.emote_popup').show();
        })
     $('.emote_popup').click(function(){
             popupActive = 1;

       })
     $('.imot').click(function(event) {
        var imotion = $(this).attr('id');
        var current_chat = $('#chat_input').val();
        var newchat      = current_chat+' '+imotion+' ';
        $('#chat_input').val(newchat);
     });
     $('.button_send').click(function(){
           var msg = $('#chat_input').val();
           loadChat('Me',msg,true);
           $('#chat_input').val('');
     })
     $("#chat_input").keypress(function(event){
        if(event.keyCode == 13)
        {
           var msg = $('#chat_input').val();
           loadChat('Me',msg,true);
           $('#chat_input').val('');
           event.preventDefault();
           return false;
        }

    });
     
});

function loadChat(nm,msg,me){
  if(msg == '')
    return;
    var chat_html = '<div  id="0" class="text chatdiv" style="color: rgb(73, 73, 73);">';
       chat_html += '<span class="username messagelabel hostmessagelabel">'+nm+': </span>';
       chat_html += ' '+msg+'</div>';
       $('.chat-content').append(chat_html);
       emojify.setConfig({emojify_tag_type:'div'});
       emojify.run();
       if(me){
          var chatData = {};
              chatData['method']= 'public_chat';
              chatData['name']= name;
              chatData['msg'] = msg;
              chatData['room'] = room;
              socket.emit('sendToAll',chatData);
       }
    $(".chat-list").scrollTop($(".chat-list").prop("scrollHeight"));
}
function sendTip(a,b){
    var msg = $('#id_tip_msg_input').val();
    $('#id_tip_msg_input').val('');
    msg = " :ring: Send "+a+" tips to broadcaster Message : "+msg+'  :ring: ';
    loadChat(name,msg,true);
    popupActive = 0;
    $('.tip_popup').hide();
}
socket.on('onReceivesendtoAll', function (data) {
         var roomsend = data.room;
         if(roomsend == room){
             var method = data.method;
             if(method == 'public_chat'){
                loadChat(data.name,data.msg,false);
             }
         }
         
 });

function showRightContainerView(val){
	$('#chat').removeClass('active');
	$('#user').removeClass('active');
	$('#settings').removeClass('active');
	$('.users-list').hide();
	$('.chat-list').hide();
	$('.settings-list').hide();
     if(val == 1){
        $('#chat').addClass('active');
        $('.chat-list').show();
     }else if(val == 2){
        $('#user').addClass('active');
        $('.users-list').show();
     }else{
        $('#settings').addClass('active');
        $('.settings-list').show();
     }
}

