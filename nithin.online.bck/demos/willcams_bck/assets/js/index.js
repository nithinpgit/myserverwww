$('document').ready(function(){

     if(viewer == 1 ){
   		   $('.tip_button').click(function(){
                 $('.tip_popup').show();
		   })
     }else{

     }
    
});
function filterRooms(val){
   window.location = rootfolder;
}
$( window ).load(function() {
  // Run code
   $("body").scrollTop(100);
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
