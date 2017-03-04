function filterRooms(roomid){
	$('li').removeClass('active');
	$('#'+roomid).addClass('active');
  request("welcome/generateRoomList",{ roomid: roomid},function(result){
    if(result)
        {
            $('.list').html(result);
        }
  });
}

$('#broadcast-button').click(function(){

 if(loggedIn == 'false'){
   $('#log-nav').trigger('click');
 }else{
    $('.cd-user-modal').removeClass('is-visible');
    window.location = rootfolder+'broadcast/';
 }
});

  


function login_selected(mainNav){
    mainNav.children('ul').removeClass('is-visible');
    formModal.addClass('is-visible');
    formLogin.addClass('is-selected');
    formSignup.removeClass('is-selected');
    formForgotPassword.removeClass('is-selected');
    tabLogin.addClass('selected');
    tabSignup.removeClass('selected');
  }
/*$('#login').click(function(){
    var userId = $('#signin-email').val();
    var password = $('#signin-password').val();
    request("welcome/login",{ userId: userId,password:password},function(result){
    if(result)
        {
            if(result == 'success'){
                loggedIn = 'true';
                alert(result);
            }
        }
    });
});*/

function request(url,param,callback){
  $.ajax({
          url: rootfolder+url,
          data: param,
          method: "POST",
          success: callback
        });
}
