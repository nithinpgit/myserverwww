<?php
$name   = $_GET['name'];
$userId = $_GET['userId'];
$room   = $_GET['room'];
$mode   = $_GET['mode'];
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>will cam</title>
      <script src="js/emojify.js"></script>
     <link href="css/emojify-emoticons.css" rel="stylesheet" type="text/css">
     <style>
       .emoji { width: 1.5em; height: 1.5em; display: inline-block; margin-bottom: -.25em; background-size: 1.5em; }
     </style>
      <link href="css/style.css?t=1" rel="stylesheet" />
      <script>
         var name       = '<?php echo $name;?>';
         var userId     = '<?php echo $userId;?>';
         var room       = '<?php echo $room;?>';
         var mode       = '<?php echo $mode;?>';
      </script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script src="js/socket.io.js"></script>
      <script type="text/javascript" src="js/index.js?t=7"></script>
   </head>
   <body>
      <div class="section" style="height: 575px;">
         <div class="video-box" style="width: 579px;">
            <div class="title">
               <div style="display:none" id="report_popup">
                  <img src="https://ssl-ccstatic.highwebmedia.com/images/report_div_carrot.gif" alt="div" width="354" height="9" class="carrot">
                  <form method="post" action="/abuse/report/sellapink/">
                     <input type="hidden" name="csrfmiddlewaretoken" value="XL1o0gN0QqCaOiN9QlTHmQ92jODdgEWb">
                     <div class="report_formborder">
                           <p class="report_select">
                           Choose a category:
                           <select name="category" id="id_abuse_category_select">
                              <option value="">---</option>
                              <option value="underage">Broadcaster is underage</option>
                              <option value="advertising">Broadcaster is advertising</option>
                              <option value="abusive">Broadcaster is abusive</option>
                              <option value="drinking">Broadcaster is using alcohol or drugs</option>
                              <option value="large toy">Broadcaster is using a toy that is too large</option>
                              <option value="offline payments">Broadcaster is asking for offline payments</option>
                              <option value="public broadcast">Broadcaster is broadcasting in public</option>
                              <option value="service uniform">Broadcaster is broadcasting in service uniform</option>
                              <option value="sleeping">Broadcaster is sleeping</option>
                              <option value="gender">Broadcaster is wrong gender</option>
                              <option value="other">Other</option>
                           </select>
                        </p>
                        <p class="report_comments">Additional Comments
                           <span style="display: none; color: red;" id="comments_required"> (Required for category Other)</span>:
                           <br>
                           <textarea id="id_additional_comments" name="additional_comments" draggable="false" maxlength="2048"></textarea>
                        </p>
                        <div class="button_abuse_report" style="width: auto;">
                           <a href="#" class="abuse_report_button" id="abuse_report_button" style="color:#FFF;">REPORT</a>
                        </div>
                        <div class="button_abuse_cancel">
                           <a href="#" class="abuse_cancel_button" id="abuse_cancel_button" style="color:#FFF;">CANCEL</a>
                        </div>
                     </div>
                  </form>
               </div>
               
               <h2 id="roomtitle">This is my status</h2>
            </div>
            <!--  Player Area -->
            <div id="player" style="width: 579px; height: 466px;" class="ui-resizable">
               <div id="still_video_container"></div>
               <object type="application/x-shockwave-flash" id="xmovie" name="movie" align="middle" data="flash/WillBroadcaster.swf" width="100%" height="100%">
                  <param name="allowScriptAccess" value="always">
                  <param name="allowFullScreen" value="true">
                  <param name="quality" value="high">
                  <param name="wmode" value="opaque">
                  <param name="id" value="movie">
                  <param name="scale" value="noborder">
                  <param name="FlashVars" value="rtmp=rtmp://173.230.133.232:1935/cam&amp;userId=<?php echo $userId;?>&amp;publishname=mp4:<?php echo $room;?>.f4v&amp;mode=<?php echo $mode;?>">
               </object>
               <div class="ui-resizable-handle ui-resizable-e"></div>
               <div class="ui-resizable-handle ui-resizable-s"></div>
               <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 1001;"></div>
            </div>
            <div class="tip_shell">
            <?php if($mode == '1'){?>
                     <div class="broadcaster_panel_goal_display" style="display: block;">
                     <div class="goal_display"><table class="goal_display_table">
                     <tbody><tr class="dark_blue">
                     <th><div class="counter_label_green"></div></th>
                     <td class="data"></td>
                     </tr>
                     <tr class="dark_light_blue">
                     <th><div class="counter_label"></div></th>
                     <td class="data"></td>
                     </tr>
                     <tr class="dark_blue">
                     <th><div class="counter_label"></div></th>
                     <td class="data"></td>
                     </tr>
                     </tbody></table></div></div></div>
            <?php } else{?>
<div class="goal_display">
                  <style>.panel .dark_blue{background-color:#d5ebf8;}.panel .light_blue{background-color:#f2f9fd;}.panel .center{text-align:center;}.goal_display_table{width:270px;}</style>
                  <!--   Bottom token display -->
                  <table class="goal_display_table panel">
                     <tbody>
                        <tr class="dark_blue">
                           <td class="data center"><strong></strong></td>
                        </tr>
                        <tr class="light_blue">
                           <td class="data center"></td>
                        </tr>
                        <tr class="dark_blue">
                           <td class="data center"></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="token_options">
                  <!--<div class="token_balance">
                     You currently have:
                     <div class="tokens tokencount">0</div>
                     tokens
                  </div>-->
                  <a href="https://api.nld1.ccbill.com/wap-frontflex/flexforms/3a409e98-2342-4737-917c-d6406baae40f?clientSubacc=0000&initialPrice=1.19&initialPeriod=3&currencyCode=840&formDigest=04a7a6dfbd5093103282b558fc80ae47&widgetInstanceUUID=0647a4f4b234453189767710ff23700c" target="_blank">purchase token</a>
                  <br>
                  <!--<div class="private_show_controls">
                     <a href="#" class="start_private_show" style="display: inline;">Start Private Show</a>
                     <span class="start_private_show_processing" style="display: none">Processing . . .</span>
                     <span class="start_private_show_waiting" style="display: none">Waiting for broadcaster
                     <br> (<a href="#" class="start_private_show_cancel">cancel private show</a>)</span>
                     <span class="start_private_show_active" style="display: none">In private show
                     <br> (<a href="#" class="start_private_show_cancel">leave private show</a>)
                     </span>
                  </div>
                  <div class="group_show_controls" style="display: none;" data-forcehidden="1">
                     <span class="start_group_show">
                     <a href="#">Join Group Show</a> (
                     <span class="num_users_waiting_for_group">0</span>/
                     <span class="num_users_required_for_group">2</span>)
                     </span>
                     <span class="start_group_show_processing" style="display: none;">
                     Processing
                     </span>
                     <span class="start_group_show_waiting" style="display: none;">
                     Waiting for group (
                     <span class="num_users_waiting_for_group">0</span>/
                     <span class="num_users_required_for_group">2</span>)
                     <br> (
                     <a href="#" class="start_group_show_cancel">cancel group show</a>)
                     </span>
                     <span class="start_group_show_active" style="display: none;">
                     In group show (
                     <span class="num_users_waiting_for_group">0</span>/
                     <span class="num_users_required_for_group">2</span>)
                     <br> (
                     <a href="#" class="start_group_show_cancel">leave group show</a>)
                     </span>
                  </div>-->
               </div>
               <div class="green_button_tip"><a href="#" class="tip_button">SEND TIP</a></div>
               <div style="display: none;" class="overlay_popup tip_popup">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tbody>
                        <tr>
                           <td class="formborder">
                              <div class="title">Send a tip</div>
                              <div class="body">
                                 <a href="https://api.nld1.ccbill.com/wap-frontflex/flexforms/3a409e98-2342-4737-917c-d6406baae40f?clientSubacc=0000&initialPrice=1.19&initialPeriod=3&currencyCode=840&formDigest=04a7a6dfbd5093103282b558fc80ae47&widgetInstanceUUID=0647a4f4b234453189767710ff23700c" target="_blank">purchase token</a>
                                 <div class="balance">
                                    Your current balance: <span><span class="tokencount">100</span> tokens</span>
                                 </div>
                                 <form>
                                    <input type="hidden" name="csrfmiddlewaretoken" value="XL1o0gN0QqCaOiN9QlTHmQ92jODdgEWb">
                                    <label>Enter tip amount:</label>
                                    <input type="text" id="id_tip_amount" name="tip_amount" value="25" style="width: 30px; margin-bottom: 5px;"><br>
                                    <div id="tip_message">
                                       <label>Include an optional message:</label><br>
                                       <textarea style="width: 360px; height: 30px; margin-bottom: 3px;" id="id_tip_msg_input" name="message" maxlength="255"></textarea>
                                    </div>
                                    <div id="tip_options" style="display:none;">
                                       <label id="tip_options_select_label"></label><br>
                                       <select name="tip_options" id="tip_options_select" style="width: 360px; height: 30px; ">
                                       </select>
                                    </div>
                                    <input type="hidden" id="id_tip_room_type" name="tip_room_type" value="public">
                                    <input type="hidden" id="id_v" name="tip_v" value="100">
                                    <span id="invalid_tip_message" style="display: none">Invalid tip amount!</span>
                                    <input  type="button" value="Send tip to broadcaster" onclick="sendTip(this.form.tip_amount.value, this.form.tip_v.value)" class="button" id="id_tip_message" style="margin: 10px 0 0 0; float: right;">
                                 </form>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <img src="https://ssl-ccstatic.highwebmedia.com/images/emoticon_div_carrot_left.gif" alt="div" width="396" height="12" class="divider">
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <?php } ?>
         </div>
         <div class="chat-holder" style="margin-left: 589px;">
            <div class="chat-box">
               <ul class="buttons">
                  <li id="chat" onclick="showRightContainerView(1)" class="active"><a href="#" data-tab="chat" class="nooverlay">CHAT <span class="counter" style="display:none;">(<span class="val">0</span>)</span></a></li>
                  <li id="user" onclick="showRightContainerView(2)"><a href="#" data-tab="users" class="nooverlay">USERS (<span class="usercount">1</span>)</a></li>
                  <li style="display:none;" id="settings" onclick="showRightContainerView(3)"><a href="#" data-tab="settings" class="nooverlay"><img src="https://ssl-ccstatic.highwebmedia.com/images/ico-preferences.png" width="16" height="16" class="png"></a></li>
               </ul>
               <!-- User list container -->
               <div class="users-list" style="height: 498px;width:100%;display:none">
                  
                  <div class="text" data-nick="god2020"><strong class="color-m">god2020</strong></div>
               </div>
               <!-- Chat list container -->
               <div class="chat-list" style="height: 498px; font-size: 9pt;">
                 <div class="chat-content">
                 </div>
               </div>
               <!-- settings-->
               <div class="settings-list" style="height: 498px; font-size: 9pt width: 100%;display:none">

               </div>
               <!-- settings end-->
               <div style="display:none" class="overlay_popup emote_popup"> 
                 <div width="100%">
                  <div class="formborder">
                         <div class="title">Standard Emoticons</div>
                        <div class="popup_imgs">
                           <div id=":)" class="imot">:)</div>
                           <div id=":o" class="imot">:o</div>
                           <div id=":-o" class="imot">:-o</div>
                           <div id=":P" class="imot">:P</div>
                           <div id=":stuck_out_tongue_winking_eye:" class="imot">:stuck_out_tongue_winking_eye:</div>
                           <div id=":angry:" class="imot">:angry:</div>
                           <div id=":imp:" class="imot">:imp:</div>
                           <div id=":heart:" class="imot">:heart:</div>
                           <div id=":family:" class="imot">:family:</div>

                           <div id=":)" class="imot">:)</div>
                           <div id=":o" class="imot">:o</div>
                           <div id=":-o" class="imot">:-o</div>
                           <div id=":P" class="imot">:P</div>
                           <div id=":stuck_out_tongue_winking_eye:" class="imot">:stuck_out_tongue_winking_eye:</div>
                           <div id=":angry:" class="imot">:angry:</div>
                           <div id=":imp:" class="imot">:imp:</div>
                           <div id=":heart:" class="imot">:heart:</div>
                           <div id=":family:" class="imot">:family:</div>

                           <div id=":)" class="imot">:)</div>
                           <div id=":o" class="imot">:o</div>
                           <div id=":-o" class="imot">:-o</div>
                           <div id=":P" class="imot">:P</div>
                           <div id=":stuck_out_tongue_winking_eye:" class="imot">:stuck_out_tongue_winking_eye:</div>
                           <div id=":angry:" class="imot">:angry:</div>
                           <div id=":imp:" class="imot">:imp:</div>
                           <div id=":heart:" class="imot">:heart:</div>
                           <div id=":family:" class="imot">:family:</div>

                           <div id=":)" class="imot">:)</div>
                           <div id=":o" class="imot">:o</div>
                           <div id=":-o" class="imot">:-o</div>
                           <div id=":P" class="imot">:P</div>
                           <div id=":stuck_out_tongue_winking_eye:" class="imot">:stuck_out_tongue_winking_eye:</div>
                           <div id=":angry:" class="imot">:angry:</div>
                           <div id=":imp:" class="imot">:imp:</div>
                           <div id=":heart:" class="imot">:heart:</div>
                           <div id=":family:" class="imot">:family:</div>

                           <div id=":)" class="imot">:)</div>
                           <div id=":o" class="imot">:o</div>
                           <div id=":-o" class="imot">:-o</div>
                           <div id=":P" class="imot">:P</div>
                           <div id=":stuck_out_tongue_winking_eye:" class="imot">:stuck_out_tongue_winking_eye:</div>
                           <div id=":angry:" class="imot">:angry:</div>
                           <div id=":imp:" class="imot">:imp:</div>
                           <div id=":heart:" class="imot">:heart:</div>
                           <div id=":family:" class="imot">:family:</div>

                           <div id=":)" class="imot">:)</div>
                           <div id=":o" class="imot">:o</div>
                           <div id=":-o" class="imot">:-o</div>
                           <div id=":P" class="imot">:P</div>
                           <div id=":stuck_out_tongue_winking_eye:" class="imot">:stuck_out_tongue_winking_eye:</div>
                           <div id=":angry:" class="imot">:angry:</div>
                           <div id=":imp:" class="imot">:imp:</div>
                           <div id=":heart:" class="imot">:heart:</div>
                           <div id=":family:" class="imot">:family:</div>

                           <div id=":)" class="imot">:)</div>
                           <div id=":o" class="imot">:o</div>
                           <div id=":-o" class="imot">:-o</div>
                           <div id=":P" class="imot">:P</div>
                           <div id=":stuck_out_tongue_winking_eye:" class="imot">:stuck_out_tongue_winking_eye:</div>
                           <div id=":angry:" class="imot">:angry:</div>
                           <div id=":imp:" class="imot">:imp:</div>
                           <div id=":heart:" class="imot">:heart:</div>
                           <div id=":family:" class="imot">:family:</div>
                        </div>
                    </div>
                    <div>
                         <img src="https://ssl-ccstatic.highwebmedia.com/images/emoticon_div_carrot.gif" alt="div" width="396" height="12" class="divider">
                     </div>
                  </div>
               </div>
               <form class="chat-form" name="chat_form" autocomplete="off">
                  <fieldset>
                     <div class="row">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tbody>
                              <tr>
                                 <td><input id="chat_input" type="text" class="text" autocomplete="off" maxlength="1024"></td>
                                 <td width="1"></td>
                                 <td width="20">
                                    <a class="smile emoticon_button nooverlay">smile</a>
                                 </td>
                                 <td width="40" class="smilesubmit">
                                    <div class="button_send">
                                       <a href="#" class="send_message_button nooverlay">SEND</a>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </fieldset>
               </form>
            </div>
         </div>
         <div id="report_emoticon" style="display: none">
            <div style="text-align: center;">
               <img title="" src="" style="max-width: 480px; max-height: 480px;"><br>
               <a class="report_abuse_link" href="#"></a>
               <div class="emoticon_abuse_categories" style="display: none;">
                  <span id="abuse_category_options">
                     Choose a category:
                     <select class="abuse_category">
                        <option value="ignore">Just ignore this emoticon</option>
                        <option value="offensive">Offensive</option>
                        <option value="disgusting">Disgusting</option>
                        <option value="fake_tip">Fake Tip</option>
                        <option value="advertising">Advertising</option>
                     </select>
                  </span>
                  <div class="button_abuse_report"><a href="#">REPORT</a></div>
                  <div class="button_abuse_cancel"><a href="#">CANCEL</a></div>
               </div>
            </div>
         </div>
         <img style="display: none;" id="loading_image" src="https://ssl-ccstatic.highwebmedia.com/images/loading.png">
         <div id="settings_notice" style="display:none;"></div>
      </div>
   </body>
</html>
<script>
      emojify.setConfig({emojify_tag_type:'div'});
      emojify.run();
</script>