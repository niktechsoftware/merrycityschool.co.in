<?php $this->load->view("header");?>
<?php $this->load->view("menu");?>
    
  <script type="text/javascript">  
        function validate() {
          
         
            var name = document.getElementById('ctl00_ContentPlaceHolder1_txtName').value;
            var email = document.getElementById('ctl00_ContentPlaceHolder1_txtEmail').value;
            var phone = document.getElementById('ctl00_ContentPlaceHolder1_txtPhone').value;
            var address = document.getElementById('ctl00_ContentPlaceHolder1_txtAddress').value;
            var comment = document.getElementById('ctl00_ContentPlaceHolder1_txtComment').value;
          
            if (name == "" || name == "Name...") {
                alert("Please enter your name.");
                document.getElementById('ctl00_ContentPlaceHolder1_txtName').focus();
                return false;
            }
            if (email == ""||email=="Email id...") {
                alert("Please enter your email address.");
                document.getElementById('ctl00_ContentPlaceHolder1_txtEmail').focus();
                return false;
            }
            else {

                if (!isValidEmail(email)) {

                    alert("Please enter a valid email id");

                    document.getElementById('ctl00_ContentPlaceHolder1_txtEmail').focus();
                     return false;
                 }
             }

            if (phone == "" || phone == "Phone...") {
                alert("Please enter your phone number.");
                document.getElementById('ctl00_ContentPlaceHolder1_txtPhone').focus();
                return false;
            }
            else {
                var valint = phone;
                var numbers = /^[0-9-()+]{9,20}/;
                if (valint != "") {
                    if (!valint.match(numbers)) {
                        alert("Please enter a valid 10 digit number");
                        document.getElementById('ctl00_ContentPlaceHolder1_txtPhone').focus();
                        return false;
                    }
                }

            }

            if (address == "" || address == "Enter your address...") {
                alert("Please enter your address.");
                document.getElementById('ctl00_ContentPlaceHolder1_txtAddress').focus();
                return false;
            }
            if (comment == "" || comment == "Enter your comments here...") {
                alert("Please enter your comment.");
                document.getElementById('ctl00_ContentPlaceHolder1_txtComment').focus();
                return false;
            }


        }
        function isValidEmail(emailText) {

            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailText);
        }
        </script>
  <script type="text/javascript">
      $(function () {

          if ($.browser.msie && $.browser.version.substr(0, 1) == 6) {
              DD_belatedPNG.fix('#navigation a, #navigation a:hover, #navigation a.active, .dd-b, .dd');
          }

          $('#navigation > ul > li').hover(function () {
              $(this).find('.dd-holder').show();
              $(this).find('a:eq(0)').addClass('hover');
          },
  function () {
      $(this).find('.dd-holder').hide();
      $(this).find('a:eq(0)').removeClass('hover');
  });

          $('.slider-content ul').jcarousel({
              start: 1,
              auto: 10,
              wrap: "last",
              scroll: 1,
              visible: 1,
              initCallback: mycarousel_initCallback,
              itemFirstInCallback: mycarousel_itemFirstInCallback,
              buttonNextHTML: null,
              buttonPrevHTML: null
          });



      });

$(document).ready(function(){
	 var loc = window.location;
     var filename = loc.pathname.split("index.html");
		if(filename[1] == 'index.aspx' || filename[1] == ''){
			$('.menu ul li a').removeAttr('style');
			$('.menu ul li:first-child a#homeIndex').css('background-color', '#3e6f2d');
		}
	});
    </script>
  <style type="text/css">
  ul.qlink li a:hover{ color:#375aa0}
  .enqTxtAddressPane {
    color: #121212;
    float: left;
    padding: 2px 0;
    width: 280px;
}
	  .lrnexpList ul li{padding-top:5px; padding-bottom: 4px;}
  </style>
   <script src="<?php echo base_url();?>assets/script/jquery-latest.pack.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/script/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
  <script type="text/javascript">
      var jQuery_new = $.noConflict(true);
      jQuery_new(function () {
          jQuery_new(".newsticker-jcarousellite").jCarouselLite({
              vertical: true,
              hoverPause: true,
              visible: 3,
              auto: 500,
              speed: 1000
          });
      });
    </script>
  <div class="wrapper">
    <div class="sliderPanel"> 
      <!-- Slider -->
      <div id="slider">
        <div class="shell">
          <div class="slider-right">
            <div class="slider-content">
              <ul>
                <!-- Slide Content 1-->
                <li class="slbg1">
                 
                </li>
                <!-- Slide Content 2-->
                <li class="slbg2">
                 
                </li>
                <!-- Slide Content 3-->
                <li class="slbg3">
                 
                </li>
                <!-- Slide Content 4-->
                <li class="slbg4">
                 
                </li>
                <!-- Slide Content 5-->
                <li class="slbg5">
                  
                </li>
              </ul>
            </div>
            <div class="slider-nav">
              <ul>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#" class="active">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
            </div>
          </div>
        </div>
     
      </div>
      <!-- End Slider --> 
    </div>
    <div class="facilitiesPane">
      <div class="facilitiesMid">
        <div class="facilityTitle"> Information on Our Facilities</div>
        <div class="facilityCategory">
          <div class="facilityContBlock"> <a href="#" title="School Tour"> <img src="<?php echo base_url();?>assets/images/schoolTour_icon.png" alt="" /></a>
            <p> <a href="#" title="School Tour">School Tour</a></p>
          </div>
          <div class="facilityContBlock"> <a href="#" title="Boarding House"> <img src="<?php echo base_url();?>assets/images/hostelIcon.png" alt="Boarding House" /></a>
            <p> <a href="#" title="Boarding House">Boarding House</a></p>
          </div>
          <div class="facilityContBlock"> <a href="#" title="Uniforms"> <img src="<?php echo base_url();?>assets/images/uniform.png" alt="Uniforms" /></a>
            <p> <a href="#" title="Uniforms">Uniforms</a></p>
          </div>
          <div class="facilityContBlock"> <a href="<?php echo base_url();?>index.php/welcome/medical" title="Medical Check-up"> <img src="<?php echo base_url();?>assets/images/medCheckup.png" alt="" /></a>
            <p> <a href="#" title="Medical Check-up">Medical Check-up</a></p>
          </div>
          <div class="facilityContBlock"> <a href="#" title="Faculty"> <img src="<?php echo base_url();?>assets/images/faculty.png" alt="Faculty" /></a>
            <p> <a href="#" title="Faculty">Faculty</a></p>
          </div>
          <div class="facilityContBlock"> <a href="<?php echo base_url();?>index.php/welcome/library" title="Library Facility"> <img src="<?php echo base_url();?>assets/images/libraryIcon.png" alt="Library Facility" /></a>
            <p> <a href="#" title="Library Facility">Library Facility</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="contentPane_home">
        <div id="ctl00_ContentPlaceHolder1_divAnnouncements" class="announcement"><h2>Announcement</h2><marquee  behavior='scroll' direction='up'  scrollamount='2' height='313' onMouseOver='this.stop();' OnMouseOut='this.start();'>
          <?php foreach($this->db->get("notice")->result() as $row):?> 
        <ul><li><span><b><strong><?php echo $row->message;?></strong></b></span><p><span id="ctl00_ContentPlaceHolder1_grdAnnouncements_ctl02_lblgrdDescription"><?php echo $row->subject;?></span></p></li>
       
         <?php endforeach;?>
       </li></ul></marquee></div>
      
                        	
        <div class="lrng_exp">
          <h3 align="center">PLEDGE</h3>
          <hr>
        <p style="font-size:120%;"><br>
           India is my country. All Indians are my brothers and 
sisters. </p><br>
<p style="font-size:120%;">I love my country and I am proud of its rich and varied heritage. I shall always strive to be worthy of it.</p><br><p style="font-size:120%;"> I shall give my parents, teachers and all elders respect and treat everyone with courtesy.</p><br><p style="font-size:120%;"> To my country and people, I pledge my devotion. In their well-being and prosperity along lies my happiness. 
          </p>
        </div>
        <div class="admform">
          <div><a href="#" target="_blank" title="Download Form"> <img src="<?php echo base_url();?>assets/images/admission_open.gif" alt="" /></a></div>
          <div class="mt20"><a href="#-"><img src="<?php echo base_url();?>assets/images/Announcement.gif" alt="" style="border-radius:5px;" /></a></div>
        </div>
        <div class="homeFeedbackFrom">
          <h2> Your Feedback</h2>
          <input name="ctl00$ContentPlaceHolder1$txtName" type="text" value="Name..." id="ctl00_ContentPlaceHolder1_txtName" />
          <input name="ctl00$ContentPlaceHolder1$txtEmail" type="text" value="Email id..." id="ctl00_ContentPlaceHolder1_txtEmail" />
          <input name="ctl00$ContentPlaceHolder1$txtPhone" type="text" value="Phone..." maxlength="12" id="ctl00_ContentPlaceHolder1_txtPhone"  />
          <textarea name="ctl00$ContentPlaceHolder1$txtAddress" rows="2" cols="20" id="ctl00_ContentPlaceHolder1_txtAddress" name="address" >
Enter your address...</textarea>
          <textarea name="ctl00$ContentPlaceHolder1$txtComment" rows="2" cols="20" id="ctl00_ContentPlaceHolder1_txtComment" name="comments" >
Enter your comments here...</textarea>
          <div class="sendBtn">
            <input type="image" name="ctl00$ContentPlaceHolder1$btnSubmit" id="ctl00_ContentPlaceHolder1_btnSubmit" src="<?php echo base_url();?>assets/images/sendBtn.png" onclick="return validate();" style="border-width:0px;" />
          </div>
          <div class="clear red ptop10">
            <span id="ctl00_ContentPlaceHolder1_Label1"></span>
          </div>
        </div>
        <div class="newsHpane">
          <h2>Happy Birthday</h2>
          <div class="news">
            
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider.css" type="text/css" />
<body>
 <!---new Slider Js and CSS --->
 

      <div class="image_slider">
              <div class="clear">
                <div class="popular_box"> <a class="prev">prev</a> <a class="next">next</a>
                  <div class="top_carousel">
                            <ul id="ctl00_ContentPlaceHolder1_TitleBar1_uList">
                            
                            <li><img  src='<?php echo base_url();?>assets/birthday/1.jpg'/><span class='tittle'>
                            Sunita</span><span class='tittle'>
                          Class-2nd </span></li>
                            
                            <li><img  src='<?php echo base_url();?>assets/birthday/2.jpg'/><span class='tittle'>
                          Mamta </span><span class='tittle'>
                          Class-5th</span></li>
                            
                            <li><img  src='<?php echo base_url();?>assets/birthday/3.jpg'/><span class='tittle'>
                         Rani</span><span class='tittle'>
                            class-1th</span></li>
                            
                         
                            </ul>
                   
                  </div>
                </div>
              </div>
            </div>  

  <script src="<?php echo base_url();?>assets/js/jcarousellite_1.3.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
  <script language="javascript" type="text/javascript">
      $(document).ready(function () {
          $(".top_carousel").jCarouselLite({
              btnNext: ".next",
              btnPrev: ".prev",
              scroll: 1,
              visible: 1,
              speed: 1500,
              auto: true,
              circular: true,
              easing: "easeInOutCubic"
          });
      });
</script>
    </body>
          </div>
        </div>
        <div class="whtasinc">
          <h2> What's Included?</h2>
          <ul>
            <li><a href="#" title="Health Care Students health regularly... ">Health Care<span>Students health regularly... </span></a></li>
            <li><a href="#" title="Living school strongly believes... ">Living<span>school strongly believes... </span></a> </li>
            <li><a href="#" title="For Parents Parents are requested to... ">For Parents<span>Parents are requested to... </span> </a></li>
            <li><a href="#" title="Affiliation S.R.M.P.S is affiliated to... ">Affiliation<span>S.R.M.P.S is affiliated to... </span></a></li>
          </ul>
          <div class="fullfeature"> <a href="#" title="View Full Features">View Full Features<span><img src="<?php echo base_url();?>assets/images/fullFeatureIcon.png" alt="" /></span></a></div>
        </div>

    </div>
    <!--Content Pane--> 
  </div>
 
  

  </div>
  <div class="tcdPane">
    <div class="salientPane">
      <div class="workingPane">
        <div class="workingIcon"><a href="#" target="_blank" title="Teacher's Application Form"><img src="<?php echo base_url();?>assets/images/working_icon.png" /></a></div>
        <div class="scholarshiptitle"> <a href="#" target="_blank" title="Teacher's Application Form">Teacher's Application Form</a> <span class="title2"><a href="#" title="Working at Merry">Working at Merry</a></span> </div>
      </div>
        <div class="cbseBox">
        <div class="workingIcon"> <a href="#" title="Board Results" target="_blank"> <img src="<?php echo base_url();?>assets/images/cbse-icon.png" alt="" /></a> </div>
        <div class="scholarshiptitle"> <span class="title2"><a href="#" title="Board Results" target="_blank"> Results</a> </span></div>
      </div>
      <div class="downldFrm">
        <div class="workingIcon"> <a href="" target="_blank" title="Admission Form"> <img src="<?php echo base_url();?>assets/images/dwnldIcon.png" /></a></div>
        <div class="scholarshiptitle"><span class="title2"> <a href="#" target="_blank" title="Admission Form">Download <br>
          Admission Form </a></span></div>
      </div>
     
    </div>
    <div class="clear"></div>
  </div>
  <!--Footer Start-->
  <?php $this->load->view("footer");?>
 