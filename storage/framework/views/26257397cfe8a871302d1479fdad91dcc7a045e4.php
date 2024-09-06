


<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
    /*
::::::::::::::::::::::::::::::::::::::::::::::::::::
Bootstrap 4 breakpoints
*/
/* Small devices (landscape phones, 544px and up) */
@media (min-width: 300px) {  
    #banner{
        width: 100%; 
        height: 200px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 7%; 
        margin-top: 7%;
        font-size: 13px;
      }
      .banner_write{
        font-size:16px;
      }
  
  }
   
  /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
  @media (min-width: 768px) {  
      #banner{
        width: 100%; 
        height: 450px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 10%; 
        margin-top: 10%;
        font-size: 20px;
      }

      .banner_write{
        font-size:30px;
      }
   
  }
   
  /* Large devices (desktops, 992px and up) */
  @media (min-width: 1000px) { 
    #banner{
        width: 100%; 
        height: 650px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 12%; 
        margin-top: 12%;
        font-size: 25px;
      }

      .banner_write{
        font-size:40px;
      }
     
  }
  
  
   
  /* Extra large devices (large desktops, 1200px and up) */
  @media (min-width: 1000px) {  
    h1 {
        font-size:40px; /*1rem = 16px*/
    }    
  }

  @media (min-width: 768px) {  
    h1 {
        font-size:22px; /*1rem = 16px*/
    }    
  }

  @media (min-width: 544px) {  
    h1 {
        font-size:16px; /*1rem = 16px*/
    }    
  }

  
  
  .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
  }
  
  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
  }
  
  .card:hover .image {
    opacity: 0.3;
  }
  
  .card:hover .middle {
    opacity: 1;
  }
  
  .text {
    background-color: #a40606;
    color: white;
    font-size: 16px;
    padding: 16px 32px;
  }


    .modal-dialog {
    max-width: 600px;
    }

    .modal-body {
    text-align: center;
    }
    
  .modal-landscape .modal-dialog {
    max-width: 90vw;
    max-height: 60vh;
  }

  .card{
      height:300px;
      margin-bottom:20px;
    }
     
  /*
  ::::::::::::::::::::::::::::::::::::::::::::::::::::
  Custom media queries
  */
</style>


<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-landscape">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style = "font-weight:bold;">SGIS Welcomes you to her Page</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="text-align:justify; font-family: 'Quicksand', sans-serif;">
        <b>Dear Visitors</b><br /> <br />
        Sankt Georg International School (SGIS), Avu Imo State welcomes you to her website. Whether you are a prospective student, a parent, a community member, or simply someone interested in learning more about us, we are delighted you have taken the time to explore our site. 
        <br /> <br />
        At SGIS, we believe in providing an exceptional education that not only prepares our students for the future but also enriches their lives in the present. Our dedicated faculty and staff work tirelessly to create a learning environment that is engaging, challenging, and supportive. Our mission is to provide an environment that inspires our students to achieve their full potential. 
<br /> <br />
We are committed to ensuring that every student who enters our doors feels valued, supported, and empowered to succeed. To us, education is not only about acquiring knowledge but also about developing the skills and character traits necessary to become responsible and contributing members of society. 
<br /> <br />
As you navigate our website, SGIS hopes that you will gain a sense of the unique culture and community that we have made possible. From our academic programs to our extracurricular activities, we strive to provide our students with a well-rounded and enriching experience that prepares them for success in whatever path they choose. 
<br /> <br />
Thank you for taking the time to visit our website. If you have any questions or would like to learn more about Sankt Georg Int. School, please do not hesitate to contact us. We would be honoured to have the opportunity to share our story with you. 
</p>
</br>
<h5 style = "font-weight:bold; text-align:left;">SGIS Management </h5>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--  Carousol -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" >
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/about.png');">
                            <div class="row">
                                 <div class="col-8" style = "margin-top: 5px;">
                                     <div id="banner_left"> 
                         <h1 class = "banner_write" style="color:wheat; font-family: monospace;  font-style:opaque; font-weight:Bold;">
                            WELCOME TO </h1>
                            <h1 class = "banner_write" style="color:white; font-family: monospace;  font-style:opaque; font-weight:Bold;">
                             SANKT GEORG INTERNATIONAL SCHOOL</h1>
                        <p  style="color:wheat; font-weight:bold;"> Where your child's education is our priority</p>
                      
                                    </div>
                               </div>
                           </div>
                        </div>                      
                    </div>

                    <div class="carousel-item ">
                   
                        <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)),url('../assets/img/p1.jpg');"> 
                            <div class="row">
                                <div class="col-8">
                                    <div id="banner_left">
                        <h1 class = "banner_write" style="color: white; font-family: monospace;  font-style:normal;">
                           <b> Empowering <br> Children to Believe in Themselves.</b>
                        </h1>
                        <p style="color:wheat;"> <b>We bring out the best in them and make sure they are outstanding.</b></p>
                        <button onclick="visit()" class="btn btn-warning btn-sm rounded-pill">Book a Visit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/nur.jpg');">
                            <div class="row">
                                 <div class="col-8" style = "margin-top: 15px;">
                                     <div id="banner_left"> 
                           <h1 class = "banner_write" style = "color:white; font-family: monospace;  font-style:normal"> <b>OUR KIDS IN <br> NURSERY SECTION </b>
                        </h1>
                        <p style="color:wheat; font-weight:bold;"> LEARNING IN THEIR CLASSROOM</p>

                                    </div>
                               </div>
                           </div>
                        </div>                      
                    </div>

                    <div class="carousel-item">
                        <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/pri.jpg');">
                            <div class="row">
                                 <div class="col-8" style = "margin-top: 15px;">
                                     <div id="banner_left"> 
                                     <h1 class = "banner_write" style = "color:white; font-family: monospace;  font-style:normal"> <b>PRIMARY SECTION OF </b>
                        </h1>
                        <p style="color:wheat; font-weight:bold;"> SANKT GEORG INTERNATIONAL SCHOOL</p>
                                    </div>
                               </div>
                           </div>
                        </div>                      
                    </div>

                    <div class="carousel-item">
                        <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/p2.jpg');">
                            <div class="row">
                                 <div class="col-9">
                                     <div id="banner_left"> 
                                     <h1 class = "banner_write" style = "color:white; font-family: monospace;  font-style:normal"> <b>STUDENTS IN THE </br> SECONDARY SECTION </b>
                        </h1>
                        <p style="color:wheat; font-weight:bold;"> LEARNING IN THEIR CLASSROOM </br> 
                        AT SANKT GEORG INTERNATIONAL SCHOOL</p>
                      
                                    </div>
                               </div>
                           </div>
                        </div>                      
                    </div>                
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>
</div>
<!-- end of Carousol -->

<!-- Banner 
<div class="row">
    <div class="container-fluid">
        <div class="col-12" id="banner" style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)),url('../assets/img/v62_5898.png');">
            <div class="row">
                <div class="col-7">
                    <div id="banner_left">
                        <h1 style="color: white; font-family: monospace;  font-style:normal;">
                            Empowering <br> Children to Believe in Themselves.
                        </h1>
                        <p style="color:wheat;"> We bring the best in them and make sure they are outstanding.</p>
                        <button onclick="visit()" class="btn btn-warning btn-sm rounded-pill d-none d-md-block">Book a Visit</button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
 end of banner -->

<!-- About -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" >
            <div class="row">
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                   
                   <img class="rounded img-fluid float-end" src="<?php echo e(url('/assets/img/cover.png')); ?>" width="800px" />
                </div>

                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-left: 5px solid; border-left-color:#FFE5B4;">
                    <div style="padding-left: 15px; padding-right: 10px;">
                        
                        <h3 style="color:#4A0404; text-align:center;"><b>About Sankt Georg International School</b></h3>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        Sankt Georg International School (SGIS) Avu, Owerri West Local Government Area, Imo State, Nigeria, 
                        is a co-educational School owned by Echidime Hope For Future Foundation Nigeria, 
                        in collaboration with Echidime Hoffnung fuer die Zukunft Germany. SGIS is duly acquired, 
                        officially and legally registered, 
                        and approved by the Imo State Government.
                        <br>
                        SGIS is a model school of international standards with a mission for quality academic standards and personalized attention. The Secondary Section of SGIS is exclusively for boarders.   <br /> <br />
                        SGIS is known for its Conducive Learning Environment, Qualified Teachers, Personalized Attention, Activity Based Learning, Modern Approach, etc.

                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of about -->


<!-- Section Header -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12 text-center mt-5 text-danger" >
            
            <h1><b>Sankt Georg International School</b></h1>
        </div>
    </div>
</div>
<!-- end of section Header -->


<!-- About Pre-School Nurser-->
<!-- <div class="row">
    <div class="container-fluid">
        <div class="col-12" >
            <div class="row">
                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-right: 5px solid; border-right-color:#FFE5B4;">
                    <div class="text-center" style="padding-left: 40px; padding-right: 20px;">
                        <h2 style="color:#4A0404;">Sankt Georg School Pre-School Nursery</h2>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        FUTO, as the Oldest University of Technology in Nigeria, was established in 1980 by Executive fiat with the 
                        composition and appointment of the first provisional Council by Nigeria’s First Executive President, Shehu Shagari. 
                        It became the first of three such Universities set up by the Federal Government of Nigeria who sought to establish a 
                        University of Technology in each geo-political region and particularly 
                        in a State which did not have a conventional University.
                        <br>
                        FUTO is surrounded by a number of autonomous communities and homesteads all of which had contributed land acquired for the development of the University. 
                        These communities are Ihiagwa, Obinze, Umuoma, Nekede, Eziobodo, Avu, Okolochi, Obibiezena, and Emeabiam.  It is bisected by a new road between Obinze and Naze which connects the two mentioned major roads. 
                        The Otamiri River traverses the site from North to South and with the beautiful vegetation in its river basin forms an important physical feature.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                   <img class="rounded img-fluid float-start" src="../assets/img/v62_6033.png" width="500px" />
                </div>

                
            </div>
        </div>
    </div>
</div> -->
<!-- end of about Pre-School Nurser-->

<!-- About Our Vision and Mission -->
<div class="row" style = "background-color:#FFFEFA;">
    <div class="container-fluid">
        <div class="col-12" >
            <div class="row">

            <div class="col-sm-12 col-md-6"  style=" margin-top: 50px; border-right: 5px solid; border-right-color:#FFE5B4;">
                   <img class="rounded img-fluid float-start" src="../assets/img/facility1.png" width="800px" />
                </div>

                <div class="col-sm-12 col-md-6" style="margin-top: 50px;">
                    <div class="text-center" style="padding-left: 40px; padding-right: 20px;">
                        <h2 style="color:#4A0404;"><b>Our Vision </b> </h2>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        To create opportunities for excellence by preparing young people to consistently and positively impact our world for the present and future generations. 
                        This would entail motivating and inspiring our students to access and imbibe knowledge that shapes their thought processes, 
                        sharpens their quest for integrity, and ensures their well-being in every aspect of human endeavour. 
                        <br>
                        To create a world shaped by empowerment, innovation, technology, and passion for positive change and development. 
                        </p>
                    </div>
                    <div class="text-center" style="padding-left: 40px; padding-right: 20px;">
                        <h2 style="color:#4A0404;"><b>Our Mission </b></h2>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        To inspire and motivate our students, through the establishment of adequate behavioural support, to meet the moral, 
                        economic, academic, sociocultural, 
                        and emotional challenges of our time.
                        </p>
                    </div>
                </div>
                

                
            </div>
        </div>
    </div>
</div>
<!-- end of Our Vision and Mission -->


<!-- About Primary School -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" >
            <div class="row">

                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-right: 5px solid; border-right-color:#FFE5B4;">
                    <div style="padding-left: 40px; padding-right: 20px;">
                        <h2 style="color:#4A0404; font-family: 'Quicksand', sans-serif; text-align:center;"><b>Sankt Georg International School</b></h2> 
                        <h2 style="color:#4A0404; font-family: 'Quicksand', sans-serif; text-align:center;"><b>(Nursery and Primary Section)</b></h2>
                        
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        At Sankt Georg International School (Nursery/Primary Section), every child is valued and encouraged to reach their full potential. 
                        The school has a strong focus on personalized learning, with teachers working closely with students to identify their strengths and weaknesses and develop individualized learning plans. 
                        Students are also provided with a range of extracurricular activities, 
                        including sports, music, drama, and art, to explore their interests and talents.
                        <br><br />
                        The school's campus is an inviting and welcoming space that encourages students to learn, play, and explore. The classrooms are spacious and equipped with modern technology, 
                        providing an ideal learning environment for students. The school also has a well-stocked library, science labs, and computer rooms, allowing students to develop a well-rounded education.                  
                        <br><br />
                        The Nursery/Primary Section has a strong commitment to its community, with regular events and programs designed to foster a sense of belonging and collaboration among students, parents, and staff. 
                        The school's friendly and supportive atmosphere is reflected in its dedicated and passionate teachers, who go above and beyond to ensure that every child is supported and challenged to achieve their goals.
                        </p>
                        
                        <button  class="btn btn-warning rounded-pill"><a href="/primary"><b>Read more</b></a></button>

                    </div>
                </div>
                
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                   
                   <img class="rounded img-fluid float-end" src="../assets/img/pri.jpg" width="800px" />
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end of about Primary School-->


<!-- About Pre-School Nurser-->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" >
            <div class="row">
                <div class="col-sm-12 col-md-6" style="margin-top: 50px; margin-bottom: 20px; border-right: 5px solid; border-right-color:#FFE5B4;">
                    <div  style="padding-left: 40px; padding-right: 20px; padding-bottom: 25px;">
                        <h2 style="color:#4A0404; text-align:center;"><b>Sankt Georg International School </b></h2>
                        <h2 style="color:#4A0404; text-align:center;"><b>(Secondary Section)</b></h2>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        At Sankt Georg International School (Secondary Section), academic excellence is the top priority. The school offers a rigorous and comprehensive curriculum that challenges students to reach their full potential. 
                        The teachers are highly qualified and experienced, 
                        providing students with individualized attention and guidance that help them to achieve their academic goals.
                        
                        <br /><br />
                        The school also offers various extracurricular activities, from sports to clubs and community service programs. 
                        These activities provide students with opportunities to develop their leadership skills, build friendships, and explore new interests. Many of these programs are led by passionate and knowledgeable teachers, 
                        who are committed to helping students grow and succeed in all aspects of their lives.
                        Another critical feature of the Secondary Section is its modern facilities. The school's campus is spacious and well-equipped, 
                        with state-of-the-art classrooms, science labs, computer rooms, and sports facilities. These resources provide students with the tools they need to learn, explore, and excel in their academic and extracurricular pursuits.
                        <br /><br />
                        Perhaps most importantly, our Secondary Section has a strong culture of respect, inclusivity, and kindness. 
                        Students are encouraged to treat each other with empathy and understanding, and the school provides a safe and supportive environment for all students to learn and grow. 
                        This culture is fostered by the school's dedicated faculty and staff, who serve as role models for students and help to create a positive and welcoming school community.
                            
                        </p>

                        <button class="btn btn-warning rounded-pill bg-none"><a href="/secondary"><b>Read more</b></a></button>

                        </div>
                        </div>
                  
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                   <img class="rounded img-fluid float-start" src="../assets/img/p2.jpg" width="800px" />
                </div>
                </div>               
            </div>
        </div>
    </div>

<!-- end of about Pre-School Nurser-->


<!--  Carosol Header-->
<div class="row" style = "background-color:#FFFEFA;">
    <div class="container-fluid mt-5">
        <div class="col-12 text-center mt-5 text-danger" >
            <h1><b>What our parent says</b></h1>
            
        </div>
    </div>
</div>
<!-- end of Carosol Header -->



<!--  Carousol -->
<div class="row" style = "background-color:#FFFEFA;">
    <div class="container-fluid">
        <div class="col-12" >
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner text-center mt-5" style = "font-size:20px;">
                    <div class="carousel-item active">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <p style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif; ">
                            My daughter went from struggling with Mathematics before  I brought her here to winning ways.<br />
                            Today, she can confidently take part in Maths competitions at her level with a high chance of doing very well.<br />
                             Thanks to the transformation from members and staff of Sankt Georg International School. 
                            Sankt Georg International School is the best place to be
                            </p>
                        <h5><b>MRS NWOKO CHINYERE</b></h5>
                        
                    </div>

                    <div class="carousel-item ">
                        
                        <p style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                            I got involved with Sankt Georg International School when my son improved academically after a few weeks of their free summer lesson. <br />
                            I had to pull him out of his previous school to continue at Sankt Georg International School. After the first term here,<br />
                             he has improved tremendously both morally and academically
                        </p>
                        <h5><b>DR. MRS. EBE TOCHUKWU</b></h5>
                    </div>

                    <div class="carousel-item">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <p style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                            My joy is the fact that after just one term, my daughter is now more outspoken,<br />
                             confident, and shows her eagerness to learn. <br />
                            It’s beautiful to watch as a parent                      
                        </p>
                        <h5><b>MRS LILIAN OGUOMA</b></h5>
                    </div>

                    <div class="carousel-item">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <p style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                            Among other things, one area I love about the administration is how spontaneous <br />
                            they are with improvement in areas parents raise concerns
                        </p>
                        <h5><b>DR OGUOMA OKECHUKWU</b></h5>
                    </div>
                 
                </div>
                <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style = "background-color:red;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style = "background-color:red;"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>
</div>
<!-- end of Carousol -->


<!--  Staff Header-->
<div class="row" style=" margin-top: 50px;">
    <div class="container-fluid  ">
        <div class="col-12 text-center text-danger" >
            <h1 style = "font-weight:bold;">Meet our Staff</h1>
        </div>
    </div>
</div>
<!-- end of Staff Header -->

<!-- About Principal of School -->
<div class="row" style = "margin-top:30px;">
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
            <div class="col-sm-12 col-md-6"  style="border-right: 5px solid; border-right-color:#FFE5B4; padding-left:30px; padding-right:20px;">
                   <img class="rounded img-fluid float-start" src="../assets/img/schoolproprietor2.jpg" width="600px" />
                </div>

                    

            <div class="col-sm-12 col-md-6" style="margin-top: 20px;">
                    <div  style="padding-left: 50px; padding-right: 20px; padding-bottom: 25px;">
                        
                        <h5 style = "color:#4A0404; font-weight: Bold; text-align:center;">Our Staff</h5>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        In the bid to actualize and realize our mission and vision, SGIS set out in search of quality in terms of Staff. 
                        It is evident, that the successes recorded by any organization eloquently testify to the high degree of commitment and tenacity of purpose of its staff and evidence of the administrative know-how of its managers 
                        in actualizing the goals and aspirations of the organization. SGIS prioritized a warm, cordial, and motivating organizational climate, thereby ensuring that the spirit of the employees is vibrant, peaceful, and inspiring. 
         
                        </p>

                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        SGIS engaged the services of great teachers who inspire their pupils to greater heights of intellectual inquiry, creativity, and productivity. Our teachers are well-qualified, exposed, and experienced. 
                        This is not surprising, given our benchmarks of a minimum of a Bachelor’s degree and Nigerian Certificate of Education (NCE) for secondary and primary school teachers respectively. 
        
                        </p>

                        <!-- <h6>About the Staff</h6> -->
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The quality of our staff is clearly evident in the glittering academic, spiritual, and social transformation parents are witnessing in their children since the inception of the school.                
                        </p>
                        <button  class="btn btn-warning rounded-pill bg-none"><a href="/staff"><b>Read more</b></a></button>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
<!-- end of about Principal of School-->



<!-- About Principal of School -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" style="margin-top: 50px; margin-bottom: 20px;" >
        <div class="row d-flex flex-row">

        <div class="col-sm-12 col-md-3"  >

<div class="card">
    
        <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/schoolproprietor.jpg" />
        <div class="middle">
            <div class="text rounded">
                
                <p>School Administrator</p>
            </div>
            
        </div>

    <div class="card-body text-center">
        <h5 class="card-title"><b>Rev. Fr. Collins Anoka</b></h5>
      </div>
    </div>
    </div>

                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/schoolprincipal.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    <p>School Principal</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> <b>Mr. Jonathan O. Onwumere</b> </h5>
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/primaryHeadTeacher.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    <p>Head Teacher (Primary)</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> <b>Mrs. Josephine Kelechi Onyenwe </b></h5>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/schoolmanager.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    
                                    <p>Admissions</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>Mrs. Angela Ezebuiro</b></h5>
                          </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end of about Principal of School-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function visit(){
        window.location = '/visit'
    }
</script>

<script>
  setTimeout(function() {
    var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
      keyboard: false
    })
    myModal.show()
  }, 9000) // 60,000 milliseconds = 1 minute
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\sanktgeorg\resources\views/home.blade.php ENDPATH**/ ?>