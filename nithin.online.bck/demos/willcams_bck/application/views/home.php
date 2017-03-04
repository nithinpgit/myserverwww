<?php include_once('header.php');?>
      <!-- room tile -->
      <div class="c-1 endless_page_template">
         <div>
            <h2></h2>
         </div>
         <div class="searching-note" style="display:none">
            <p>Searching for models matching your preferences...</p>
         </div>
         <div class="searching-keyword" style="display:none">
            <p>Search results for ""</p>
         </div>
         <ul class="list">
         <?php for($i=0;$i<20;$i++){?>
            <li>
               <a href="<?php echo base_folder();?>room/join/1234">
               <img src="<?php echo upload_url();?>thumbs/1234.png" width="180" height="148" alt="hotfallingdevil's chat room" class="png"></a>
               <div class="thumbnail_label thumbnail_label_c_hd">HD</div>
               <div class="details">
                  <div class="title">
                     <a href="<?php echo base_folder();?>room/join/1234"> nithin</a>
                     <span class="age genderf">26</span>
                  </div>
                  <ul class="subject" style="height: 32px;">
                     <li title="sample tittle">sample tittle</li>
                  </ul>
                  <ul class="sub-info">
                     <li class="location">india</li>
                     <li class="cams">17 mins, 4676 viewers</li>
                  </ul>
               </div>
            </li>
          <?php } ?>  
         </ul>
         <ul class="paging">
            <li><a href="#" class="prev">prev</a></li>
            <li class="active"><a class="endless_page_link" href="/?_=1469732855808">1</a></li>
            <li><a class="endless_page_link" href="/?page=2&amp;_=1469732855808">2</a></li>
            <li><a class="endless_page_link" href="/?page=3&amp;_=1469732855808">3</a></li>
            <li><a class="endless_page_link" href="/?page=4&amp;_=1469732855808">4</a></li>
            <span class="endless_separator">...</span>
            <li><a class="endless_page_link" href="/?page=27&amp;_=1469732855808">27</a></li>
            <li><a href="/?page=2&amp;_=1469732855808" class="next endless_page_link">next</a></li>
            <link rel="next" href="/?page=2&amp;_=1469732855808">
            <link rel="next" href="/?page=3&amp;_=1469732855808">
            <link rel="next" href="/?page=4&amp;_=1469732855808">
            <link rel="next" href="/?page=27&amp;_=1469732855808">
         </ul>
      </div>
   </body>
</html>
