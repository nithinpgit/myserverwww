<?php include_once('header.php');?>
      <script>
         var viewer   = 0;
      </script>
      <script type="text/javascript" src="<?php echo assets_url();?>js/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo assets_url();?>js/index.js"></script>
      
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
               <object type="application/x-shockwave-flash" id="xmovie" name="movie" align="middle" data="<?php echo assets_url();?>swf/WillBroadcaster.swf" width="100%" height="100%">
                  <param name="allowScriptAccess" value="always">
                  <param name="allowFullScreen" value="true">
                  <param name="quality" value="high">
                  <param name="wmode" value="opaque">
                  <param name="id" value="movie">
                  <param name="scale" value="noborder">
                  <param name="FlashVars" value="rtmp=<?php echo rtmp();?>&amp;userId=12345&amp;publishname=mp4:12345.f4v&amp;mode=1">
               </object>
               <div class="ui-resizable-handle ui-resizable-e"></div>
               <div class="ui-resizable-handle ui-resizable-s"></div>
               <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 1001;"></div>
            </div>
            <div class="tip_shell">
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
</tbody></table></div>
</div>
            
               <div style="display: none;" class="overlay_popup tip_popup">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tbody>
                        <tr>
                           <td class="formborder">
                              <div class="title">Send a tip</div>
                              <div class="body">
                                 <div class="purchase_tokens">
                                    <a href="/tipping/purchase_tokens/">Purchase Tokens</a>
                                 </div>
                                 <div class="balance">
                                    Your current balance: <span><span class="tokencount">0</span> tokens</span>
                                 </div>
                                 <form method="post" action="/tipping/send_tip/sellapink/">
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
                                    <input type="submit" value="Send tip to broadcaster" onclick="play_html_sounds(this.form.tip_amount.value, this.form.tip_v.value)" class="button" id="id_tip_message" style="margin: 10px 0 0 0; float: right;">
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
         </div>
         <div class="chat-holder" style="margin-left: 589px;">
            <div class="chat-box">
               <ul class="buttons">
                  <li id="chat" onclick="showRightContainerView(1)" class="active"><a data-tab="chat" class="nooverlay">CHAT <span class="counter" style="display:none;">(<span class="val">0</span>)</span></a></li>
                  <li id="user" onclick="showRightContainerView(2)"><a  data-tab="users" class="nooverlay">USERS (<span class="usercount">1</span>)</a></li>
                  <li id="settings" onclick="showRightContainerView(3)"><a  data-tab="settings" class="nooverlay"><img src="https://ssl-ccstatic.highwebmedia.com/images/ico-preferences.png" width="16" height="16" class="png"></a></li>
               </ul>
               <!-- User list container -->
               <div class="users-list" style="height: 498px;display:none">
                  
                  <div class="text" data-nick="god2020"><strong class="color-m">god2020</strong></div>
               </div>
               <!-- Chat list container -->
               <div class="chat-list" style="height: 498px; font-size: 9pt;">
                <div id="0" class="text" style="color: rgb(73, 73, 73);"><span class="username messagelabel hostmessagelabel" data-nick="nithinnpk">nithinnpk:</span>hii</div>  
               </div>
               <!-- settings-->
               <div class="settings-list" style="height: 498px; font-size:9pt;display:none">
<form action="/choose_broadcaster_chat_color/">
<input type="hidden" name="csrfmiddlewaretoken" value="H41P51ZrXIFNv7IMVMuvRtcV5DTBcHC3">
<label>Chat Color:</label>
<input type="hidden" id="chat_color_id" name="color" value="#494949" data-hex="true" data-text="hidden" style="height:20px; width:20px;" class="mColorPicker"><span style="cursor: pointer; border: 1px solid black; float: none; width: 20px; height: 20px; display: inline-block; background-color: rgb(73, 73, 73);" id="icp_chat_color_id" class="mColorPickerTrigger" data-mcolorpicker="true">&nbsp;</span>
</form>
<form method="post" id="chat_settings" action="/api/broadcasterchatsettings/"><input type="hidden" name="csrfmiddlewaretoken" value="H41P51ZrXIFNv7IMVMuvRtcV5DTBcHC3">
<p><label for="id_font_family">Font Family:</label> <select id="id_font_family" name="font_family">
<option value="default" selected="selected">Default</option>
<option value="Arial, Helvetica">Arial</option>
<option value="Bookman Old Style">Bookman Old Style</option>
<option value="&quot;Comic Sans MS&quot;, cursive">Comic Sans</option>
<option value="&quot;Courier New&quot;">Courier</option>
<option value="Lucida">Lucida</option>
<option value="Palantino">Palantino</option>
<option value="Tahoma, Geneva">Tahoma</option>
<option value="&quot;Times New Roman&quot;">Times New Roman</option>
</select></p>
<p><label for="id_font_size">Font Size:</label> <select id="id_font_size" name="font_size">
<option value="9pt" selected="selected">9pt</option>
<option value="10pt">10pt</option>
<option value="11pt">11pt</option>
<option value="12pt">12pt</option>
<option value="13pt">13pt</option>
<option value="14pt">14pt</option>
<option value="15pt">15pt</option>
<option value="16pt">16pt</option>
<option value="17pt">17pt</option>
<option value="18pt">18pt</option>
<option value="19pt">19pt</option>
<option value="20pt">20pt</option>
</select></p>
<p><label for="id_show_emoticons">Show Emoticons:</label> <select id="id_show_emoticons" name="show_emoticons">
<option value="false">No</option>
<option value="true" selected="selected">Yes</option>
</select></p>
<p><label for="id_emoticon_autocomplete_delay">Emoticon Autocomplete Delay:</label> <select id="id_emoticon_autocomplete_delay" name="emoticon_autocomplete_delay">
<option value="-1">Turn Off Autocomplete</option>
<option value="0" selected="selected">No Delay - 0 Seconds</option>
<option value="500">Short - 0.5 Seconds</option>
<option value="1000">Medium - 1 Second</option>
<option value="1500">Long - 1.5 Seconds</option>
</select></p>
<p><label for="id_highest_token_color">Highest Token Color:</label> <select id="id_highest_token_color" name="highest_token_color">
<option value="darkpurple" selected="selected">Dark Purple (Tipped 1000 recently)</option>
<option value="lightpurple">Light Purple (Tipped 250 recently)</option>
<option value="darkblue">Dark Blue (Tipped 50 recently)</option>
<option value="lightblue">Light Blue (Owns or purchased tokens)</option>
</select></p>
<p><label for="id_sort_users">Sort Users:</label> <select id="id_sort_users" name="sort_users">
<option value="a" selected="selected">Alphabetically</option>
<option value="t">By Tokens</option>
</select></p>
<p title="Only age verified broadcasters can change this setting."><label for="id_allowed_chat" style="color: rgb(136, 136, 136);">Chat Allowed By: (Age Verifcation Required)</label> <select id="id_allowed_chat" name="allowed_chat" disabled="">
<option value="all" selected="selected">All Users</option>
<option value="tip_recent">Users who tipped me today</option>
<option value="tip_anytime">Users who have tipped me</option>
<option value="tokens">Users who have tokens</option>
</select><input type="hidden" name="allowed_chat" value="all"></p>
<p><label for="id_mod_expire">Moderators Expire After:</label> <select id="id_mod_expire" name="mod_expire">
<option value="1" selected="selected">1 Day</option>
<option value="2">2 Days</option>
<option value="7">1 Week</option>
<option value="14">2 Weeks</option>
<option value="30">1 Month</option>
<option value="60">2 Months</option>
<option value="180">6 Months</option>
</select></p>
<p><label for="id_enter_notify">Notify on Entry For:</label> <select id="id_enter_notify" name="enter_notify">
<option value="orgb" selected="selected">Mods, Fans, and Users With Tokens</option>
<option value="org">Mods and Fans</option>
<option value="none">No Users</option>
</select></p>
<p><label for="id_leave_notify">Notify on Leave For:</label> <select id="id_leave_notify" name="leave_notify">
<option value="orgb" selected="selected">Mods, Fans, and Users With Tokens</option>
<option value="org">Mods and Fans</option>
<option value="none">No Users</option>
</select></p>
<p><label for="id_silence_broadcasters">Silence Other Broadcasters:</label> <select id="id_silence_broadcasters" name="silence_broadcasters">
<option value="false" selected="selected">No</option>
<option value="true">Yes</option>
</select><input id="id_viewer_tip_volume" name="viewer_tip_volume" type="hidden" value="60"><input id="id_broadcaster_tip_volume" name="broadcaster_tip_volume" type="hidden" value="60"></p>
<label id="tip_slider_label" for="tip_slider">Tip Volume (60%)</label>
<div class="slider" id="tip_slider-slider" style="position: relative; box-sizing: border-box; min-height: 18px; margin-left: 9px; margin-right: 9px;"><div class="track" style="position: absolute; top: 50%; cursor: pointer; width: 100%; margin-top: -3px;"></div><div class="dragger" style="position: absolute; top: 50%; cursor: pointer; margin-top: -9px; margin-left: -9px; left: 180px;"></div></div><input id="tip_slider" type="text" value="10" class="" style="display: none;">
</form>
<table>
<tbody><tr><td>
<a href="#" class="clear_all_banned_ips">Clear All Bans and Silences</a><br>
<span style="display: none;" class="ban_result">Bans Cleared</span>
</td></tr>
<tr><td>
<a href="#" id="mod_list_link">View/Edit Moderators</a><br>
</td></tr>
<tr><td>
<a href="#" id="fan_list_link">View Fan Club Members</a><br>
</td></tr>
<tr><td>
<a href="#" id="geo_list_link">View/Edit Region Block Exemptions</a><br>
</td></tr>
<tr><td>
<a href="#" id="ignored_users_id">View/Edit Ignored Users</a><br>
</td></tr>
</tbody></table>
<style>.chat_setting_link{padding-left:10px;}.slider{width:300px;}.slider>.dragger{background:#dde9f5;background:-webkit-linear-gradient(top,#dde9f5,#8bb3da);background:-moz-linear-gradient(top,#dde9f5,#8bb3da);background:linear-gradient(top,#dde9f5,#8bb3da);-webkit-box-shadow:inset 0 2px 2px rgba(255,255,255,0.5),0 2px 8px rgba(0,0,0,0.2);-moz-box-shadow:inset 0 2px 2px rgba(255,255,255,0.5),0 2px 8px rgba(0,0,0,0.2);box-shadow:inset 0 2px 2px rgba(255,255,255,0.5),0 2px 8px rgba(0,0,0,0.2);-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;border:1px solid #5e81a4;width:16px;height:16px;}.slider>.dragger:hover{background:-webkit-linear-gradient(top,#dde9f5,#8bb3da);}.slider>.track,.slider>.highlight-track{background:#ccc;background:-webkit-linear-gradient(top,#bbb,#ddd);background:-moz-linear-gradient(top,#bbb,#ddd);background:linear-gradient(top,#bbb,#ddd);-webkit-box-shadow:inset 0 2px 4px rgba(0,0,0,0.1);-moz-box-shadow:inset 0 2px 4px rgba(0,0,0,0.1);box-shadow:inset 0 2px 4px rgba(0,0,0,0.1);-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px;border:1px solid #aaa;height:4px;}.slider>.highlight-track{background-color:#dde9f5;background:-webkit-linear-gradient(top,#dde9f5,#8bb3da);background:-moz-linear-gradient(top,#dde9f5,#8bb3da);background:linear-gradient(top,#dde9f5,#8bb3da);border-color:#5e81a4;}</style>
</div>
<!-- settings end-->
               <div style="display:none" class="overlay_popup emote_popup"> </div>
               <form action="#" class="chat-form" name="chat_form" autocomplete="off">
                  <fieldset>
                     <div class="row">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tbody>
                              <tr>
                                 <td><input id="chat_input" type="text" class="text" autocomplete="off" maxlength="1024"></td>
                                 <td width="1"></td>
                                 <td width="20">
                                    <a href="#" class="smile emoticon_button nooverlay">smile</a>
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