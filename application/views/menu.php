  <div> 
    <!--Navigation Panel-->
    <div class="navbar">
      <div class="navigationPanel">
        <div class="logoinTop"> <a href="<?php echo base_url();?>AdminPanel/" target="_blank" title="Login">LOGIN</a> </div>
        <div class="menu menu_desktop">
          <ul>
            <li style="background-image: none;">
            <a href="<?php echo base_url();?>" id="homeIndex" title="Merry Home">Home</a></li>
            <li><a href="#" id="ctl00_scH">School</a>
              <ul>
                <li><a href="#" title="Our Founder" onclick="javascript:function1('scH');">Our Founder</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/aboutUs" title="About us" onclick="javascript:function1('scH');">About us</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/vision" title="Vision" onclick="javascript:function1('scH');">Vision</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/objective" title="Objective" onclick="javascript:function1('scH');">Objective</a></li>
                
                <li><a href="#" title="Affiliation" onclick="javascript:function1('scH');"> Affiliation</a></li>
                <!-- <li><a href="#" title="Alumni Registration" onclick="javascript:function1('scH');"> Alumni Registration</a></li>-->
              </ul>
            </li>
            <li><a href="#" id="ctl00_mang" style="background-image: none;">Management</a>
              <ul>
                <li><a href="#" title="Advisory Board" onclick="javascript:function1('mang');">Advisory Board</a></li>
                <li><a href="#" title="Members of Society" onclick="javascript:function1('mang');">Members of Society</a></li>
              </ul>
            </li>
            <li><a href="#" id="ctl00_facl" style="background-image: none;">Facilities</a>
              <ul>
                <li><a href="<?php echo base_url();?>index.php/welcome/medical" title="Medical Facilities" onclick="javascript:function1('facl');">Medical Facilities</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/transpotation" title="Transportation" onclick="javascript:function1('facl');">Transportation</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/classRoom" title="Classrooms" onclick="javascript:function1('facl');">Classrooms</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/playGround" title="Computer Lab" onclick="javascript:function1('facl');">Play Ground</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/computerLab" title="Library" onclick="javascript:function1('facl');">Computer Lab</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/library" title="Science Lab" onclick="javascript:function1('facl');">Library</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/cctv" title="Swimming Pool" onclick="javascript:function1('facl');">CCTV Camera</a></li>
              </ul>
            </li>
            <li><a href="#" id="ctl00_adm" style="background-image: none;">Admissions</a>
              <ul>
                <li><a href="<?php echo base_url();?>index.php/welcome/generalRule" title="Admissions" onclick="javascript:function1('adm');"> General Rule</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/parentsRule" title="Application Procedure" onclick="javascript:function1('adm');"> Parents Rule</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/feeRule" title="Fee Structure" onclick="javascript:function1('adm');"> Fee Rule</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/uniformRule" title="Fee Structure" onclick="javascript:function1('adm');">Uniform Rule</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/examRule" title="Fee Structure" onclick="javascript:function1('adm');">Examination Rule</a></li>
                 <!--<li><a href="online-brochure.aspx" title="Online Brochure" onclick="javascript:function1('adm');">  Online Brochure</a></li>-->
              </ul>
            </li>
            <li><a href="<?php echo base_url();?>index.php/welcome/gallery" id="ctl00_msg" style="background-image: none;">Gallery</a></li>
            <li><a href="#" id="ctl00_msg" style="background-image: none;">Messages</a>
              <ul>
                <li><a href="<?php echo base_url();?>index.php/welcome/Cmessage" title="Message from Chairman" onclick="javascript:function1('msg');"> Message from Chairman</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/Mmessage" title="Message from Director" onclick="javascript:function1('msg');"> Message from Manager</a></li>
                <!-- <li><a href="<?php echo base_url();?>index.php/welcome/Mmessage" title="Message from Secretary" onclick="javascript:function1('msg');"> Message from Manager</a></li>-->
                <li><a href="<?php echo base_url();?>index.php/welcome/Pmessage" title="Message from Principal" onclick="javascript:function1('msg');"> Message from Principal</a></li>
              </ul>
            </li>
            <li><a href="#" id="ctl00_cca" style="background-image: none;">Co-curricular Activities</a>
              <ul>
                <li><a href="<?php echo base_url();?>index.php/welcome/mdt" onclick="javascript:function1('cca');" title="Music, Dance &amp; Theatre">Music, Dance &amp; Theatre</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/aircraft" onclick="javascript:function1('cca');" title="Art &amp; Craft">Art &amp; Craft</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/sportYoga" onclick="javascript:function1('cca');" title="Sports &amp; Yoga">Sports &amp; Yoga</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/perDev" onclick="javascript:function1('cca');" title="Personality Development">Personality Development</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/HouseActivity" onclick="javascript:function1('cca');" title="House Activities">House Activities</a></li>
               
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--Navigation Panel END--> 
    <!--Menu Mobile open-->
    <ul id="gn-menu" class="gn-menu-main menu_mob">
      <li class="gn-trigger"> <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
        <nav class="gn-menu-wrapper">
          <div class="gn-scroller"> 
            <!--Menu open-->
            <ul class="gn-menu">
              <li style="background-image: none;"><a href="index-2.html" id="homeIndex" title="Merry Home"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="javascript:void(0)" id="ctl00_scH1" class="toggler"><i class="fa fa-building font16"></i> School <i class="fa fa-angle-right pull-right"></i></a>
                <ul class="gn-submenu toggled_content">
                  <li><a href="#" title="Our Founder" onClick="javascript:function1('scH');"><i class="fa fa-circle-o-notch"></i> Our Founder</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/aboutUs" title="About us" onClick="javascript:function1('scH');"><i class="fa fa-circle-o-notch"></i> About us</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/vision" title="Vision" onClick="javascript:function1('scH');"><i class="fa fa-circle-o-notch"></i> Vision</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/objective" title="Objective" onClick="javascript:function1('scH');"><i class="fa fa-circle-o-notch"></i> Objective</a></li>
                  
                  <li><a href="#" title="Affiliation" onClick="javascript:function1('scH');"><i class="fa fa-circle-o-notch"></i> Affiliation</a></li>
                  <!-- <li><a href="#" title="Alumni Registration" onclick="javascript:function1('scH');"> Alumni Registration</a></li>-->
                </ul>
              </li>
              <li><a href="javascript:void(0)" id="ctl00_mang1" style="background-image: none;" class="toggler"><i class="fa fa-user-md"></i> Management <i class="fa fa-angle-right pull-right"></i></a>
                <ul class="gn-submenu toggled_content">
                  <li><a href="#" title="Advisory Board" onClick="javascript:function1('mang');"><i class="fa fa-circle-o-notch"></i> Advisory Board</a></li>
                  <li><a href="#" title="Members of Society" onClick="javascript:function1('mang');"><i class="fa fa-circle-o-notch"></i> Members of Society</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)" id="ctl00_facl1" style="background-image: none;" class="toggler"><i class="fa fa-hospital-o"></i> Facilities <i class="fa fa-angle-right pull-right"></i></a>
                <ul class="gn-submenu toggled_content">
                  <li><a href="<?php echo base_url();?>index.php/welcome/medical" title="Medical Facilities" onClick="javascript:function1('facl');"><i class="fa fa-circle-o-notch"></i> Medical Facilities</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/transpotation" title="Transportation" onClick="javascript:function1('facl');"><i class="fa fa-circle-o-notch"></i> Transportation</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/classRoom" title="Classrooms" onClick="javascript:function1('facl');"><i class="fa fa-circle-o-notch"></i> Classrooms</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/playGround" title="Play Ground" onClick="javascript:function1('facl');"><i class="fa fa-circle-o-notch"></i> Play Ground</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/computerLab" title="Library" onClick="javascript:function1('facl');"><i class="fa fa-circle-o-notch"></i> Computer Lab</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/library" title="Science Lab" onClick="javascript:function1('facl');"><i class="fa fa-circle-o-notch"></i> Library</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/cctv" title="Swimming Pool" onClick="javascript:function1('facl');"><i class="fa fa-circle-o-notch"></i> CCTV Camera</a></li>
                </ul>
              </li>
              <li><a href="#" id="ctl00_adm1" style="background-image: none;" class="toggler"><i class="fa fa-mortar-board"></i> Admissions <i class="fa fa-angle-right pull-right"></i></a>
                <ul class="gn-submenu toggled_content">
                  <li><a href="<?php echo base_url();?>index.php/welcome/generalRule" title="Admissions" onClick="javascript:function1('adm');"> <i class="fa fa-circle-o-notch"></i> Admissions</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/parentsRule" title="Application Procedure" onClick="javascript:function1('adm');"> <i class="fa fa-circle-o-notch"></i> Application Procedure</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/feeRule" title="Fee Structure" onClick="javascript:function1('adm');"> <i class="fa fa-circle-o-notch"></i> Fee Structure</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/uniformRule" title="Online Application Form" onClick="javascript:function1('adm');"> <i class="fa fa-circle-o-notch"></i> Uniform Rule</a></li>
                  <!--<li><a href="#" title="Online Brochure" onclick="javascript:function1('adm');">  Online Brochure</a></li>-->
                </ul>
              </li>
             
              </li>
              <li><a href="#" id="ctl00_msg1" style="background-image: none;" class="toggler"><i class="fa fa-envelope font16"></i> Messages <i class="fa fa-angle-right pull-right"></i></a>
                <ul class="gn-submenu toggled_content">
                  <li><a href="<a href="<?php echo base_url();?>index.php/welcome/Cmessage" title="Message from Chairman" onClick="javascript:function1('msg');"> <i class="fa fa-circle-o-notch"></i> Message from Chairman</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/Mmessage" title="Message from Director" onClick="javascript:function1('msg');"> <i class="fa fa-circle-o-notch"></i> Message from Director</a></li>
                  <!-- <li><a href="#" title="Message from Secretary" onclick="javascript:function1('msg');"> Message from Secretary</a></li>-->
                  <li><a href="<?php echo base_url();?>index.php/welcome/Pmessage" title="Message from Principal" onClick="javascript:function1('msg');"> <i class="fa fa-circle-o-notch"></i> Message from Principal</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)" id="ctl00_cca1" style="background-image: none;" class="toggler"><i class="fa fa-music"></i> Co-curricular Activities <i class="fa fa-angle-right pull-right"></i></a>
                <ul class="gn-submenu toggled_content">
                  <li><a href="<?php echo base_url();?>index.php/welcome/mdt" onClick="javascript:function1('cca');" title="Music, Dance &amp; Theatre"><i class="fa fa-circle-o-notch"></i> Music, Dance &amp; Theatre</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/aircraft" onClick="javascript:function1('cca');" title="Art &amp; Craft"><i class="fa fa-circle-o-notch"></i> Art &amp; Craft</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/sportYoga" onClick="javascript:function1('cca');" title="Sports &amp; Yoga"><i class="fa fa-circle-o-notch"></i> Sports &amp; Yoga</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/perDev" onClick="javascript:function1('cca');" title="Personality Development"><i class="fa fa-circle-o-notch"></i> Personality Development</a></li>
                  <li><a href="<?php echo base_url();?>index.php/welcome/HouseActivity" onClick="javascript:function1('cca');" title="House Activities"><i class="fa fa-circle-o-notch"></i> House Activities</a></li>
                  </ul>
              </li>
            </ul>
          </div>
        </nav>
      </li>
    </ul>    
    <!--Menu Mobile End-->
    <div class="wrapper_header">
      <div class="header">
        <div class="logopanel"> <a href="index-2.html" title="Merry"> 
        <img src="<?php echo base_url();?>assets/images/merrylogo.png" class="logo" /><span style="padding-left: 10px;">
        <img src="<?php echo base_url();?>assets/images/logoTxt.png" /></span></a></div>
        <div class="headerRtPane">
          <div class="contactIcon" style="width:100px; display:none;"> <a href="#" title="Merry Home">
          <img src="<?php echo base_url();?>assets/images/icon_home.png" alt="Merry Home" /></a> <a href="#" title="Sitemap">
          <img src="<?php echo base_url();?>assets/images/icon_sitemap.png" alt="" /></a> 
          <a href="ContactUs.html" title="Contact Us"><img src="<?php echo base_url();?>assets/images/icon_contact.png" alt="Contact Us" /></a> </div>
          <div class="contact-info">
            <p> contact us for further information</p>
            <div> <img src="<?php echo base_url();?>assets/images/phoneIcon.png" alt="Merry Call" style="vertical-align:middle" /> +919198909095</br>
              Email:- mcsgzp@gmail.com</div>
            
          </div>
        </div>
      </div>
      <!--Footer End--> 
    </div>