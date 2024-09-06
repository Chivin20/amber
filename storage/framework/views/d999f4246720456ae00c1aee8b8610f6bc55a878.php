


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
/* Small devices (protriate phones, 344px and up) */
@media (min-width: 344px) {  
    #banner{
        width: 100%; 
        height: 170px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 7%; 
        margin-top: 100px;
        font-size: 10px;
      }
  
  }
   
  /* Medium devices (landscape ph, 468px and up) The navbar toggle appears at this breakpoint */
  @media (min-width: 468px) {  
      #banner{
        width: 100%; 
        height: 300px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 10%; 
        margin-top: 100px;
        font-size: 16px;
      }
   
  }

   /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
   @media (min-width: 768px) {  
      #banner{
        width: 100%; 
        height: 400px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 10%; 
        margin-top: 300px;
        font-size: 18px;
      }
   
  }
   
  /* Large devices (desktops, 950px and up) */
  @media (min-width: 950px) { 
    #banner{
        width: 100%; 
        height: 550px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 15%; 
        margin-top: 450px;
        font-size: 22px;
      }
     
  }
  
  
   
  /* Extra large devices (large desktops, 1200px and up) */
  @media (min-width: 950px) {  
    h1 {
        font-size:22px; /*1rem = 16px*/
    }    
  }

  @media (min-width: 768px) {  
    h1 {
        font-size:18px; /*1rem = 16px*/
    }    
  }

  @media (min-width: 468px) {  
    h1 {
        font-size:16px; /*1rem = 16px*/
    }    
  }


  @media (min-width: 300px) {  
    h1 {
        font-size:10px; /*1rem = 16px*/
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

  .scrolling-text{
      white-space: nowrap;
      overflow: hidden;
      animation: scroll-text 10s linear infinite;
  }

  @keyframes  scroll-text {
      0%{
          transfom: translateX(0);
      }
      100% {
          transform:
          translateX(-100%);
      }
  }
     
  /*
  ::::::::::::::::::::::::::::::::::::::::::::::::::::
  Custom media queries
  */
</style>

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
                        <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 1)), url('../assets/img/s1.jpg');">
                            <div class="row">
                                 <div class="col-12">
                                     <div id="banner_left" class = "scrolling-text"> 
                         <p  style="color:white; font-family: sans-seriff;  font-style:opaque; font-weight:Bold;"> 
                         <b>WELCOME TO AMBER AND DUQUAYS FOUNDATION:</b> <br> Committed to Uplifting, Motivating and Empowering 
                         Lives </p>
                                    </div>
                               </div>
                           </div>
                        </div>                      
                    </div>

                    <div class="carousel-item ">
                   
                        <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.9)),url('../assets/img/s2.jpg');"> 
                            <div class="row">
                                <div class="col-12">
                                    <div id="banner_left" class = "scrolling-text">
                        <p style="color:white; font-family: sans-serriff;  font-style:opaque;">
                           <b> Free Medical Outreach</b> 
                        </p>
                        <!--<p style="color:white;"> <b>We are solving the problem of isolation and <br>
                        lack of support in professional development</b></p> -->
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

               <div class="carousel-item ">
                   
                   <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.8)),url('../assets/img/s3.jpg');"> 
                       <div class="row">
                           <div class="col-8">
                           <div id="banner_left" class = "scrolling-text">
                   <p style="color:white; font-family: sans-serriff;  font-style:opaque;">
                      <b> Free Medical Consultation </b> 
                   </p>
                   <!--<p style="color:white;"> <b>We are solving the problem of isolation and <br>
                   lack of support in professional development</b></p> -->
                   
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="carousel-item ">
                   
                   <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.8)),url('../assets/img/s4.jpg');"> 
                       <div class="row">
                           <div class="col-12">
                               <div id="banner_left" class = "scrolling-text">
                   <p style="color:white; font-family: sans-serriff;  font-style:opaque;">
                      <b> Free Blood Pressure Test</b> 
                   </p>
                   <!--<p style="color:white;"> <b>We are solving the problem of isolation and <br>
                   lack of support in professional development</b></p> -->
                   
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="carousel-item ">
                   
                   <div class="col-12" id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.8)),url('../assets/img/s5.jpg');"> 
                       <div class="row">
                           <div class="col-12">
                           <div id="banner_left" class = "scrolling-text">
                 <p style="color:white; font-family: sans-serriff;  font-style:opaque;">
                      <b> Free Malaria Parasite Test</b> 
                   </p>
                    <!-- <p style="color:white;"> <b>We are solving the problem of isolation and <br>
                   lack of support in professional development</b></p> -->
                   
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

<!-- About -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" >
            <div class="row">
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                <div class = "section">
                   <img class="rounded img-fluid float-end" id = "banner" src="<?php echo e(url('/assets/img/aboutus.jpg')); ?>" width="800px"/>
                </div>
                </div>

                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-left: 5px solid; border-left-color:cyan;">
                    <div style="padding-left: 15px; padding-right: 10px; font-size:18px">
                    <div class = "section">      
                        <h1 class = "text-primary" style="text-align:center;"><b>About Amber & Duquays Foundation</b></h1>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.60;">
                        The Amber and Duqays Foundation is a non-profit organisation, which was founded by Chief. Dr Ndukwo Bassey Kalu 
                        and his wife Amber Lea Kalu. It is a leading Community and Human Oriented Non-Profit Organisation 
                        committed to the Social and Economic Welfare of the Less Privileged in Developing Nations. 
                        <br> <br>
                        The Foundation provides basic human needs such as food, clean and safe drinking water, 
                        and medical assistance to improve the lives of Children, Individuals and Families including 
                        supporting their education, skills and job training to cross the bridge from basic human needs 
                        to Independence and self-sufficiency. 
                        </p>
                        <button  class="btn btn-danger rounded-pill d-none d-md-block"><a href="/aboutus" class = "hov">
                        <b>Read more</b></a></button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end of about -->



<!-- About us -->
<div class="row" style = "margin-top:50px; background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 10)),url('../assets/img/contact-bg.jpg');">
    <div class="container-fluid" >
    <div class = "section">
        <div class="col-12" style = "margin-top:50px;">
            <h1 class = "text-warning" style = "text-align:center; color: darkblue;" ><b>Objectives of Amber & Duquays Foundation</b></h1> 

            <h5 style="text-align: center; color:white; font-family: 'Quicksand', sans-serif; padding-left:70px; 
            padding-right:70px; margin-bottom:70px; line-height: 1.60;">
            To provide basic human needs such as food, clean and safe drinking water, and medical assistance to improve the lives of Children, 
            Individuals and Families including supporting their education, skills and job training to cross the bridge from 
            basic human needs to Independence and self-sufficiency </h5>

        </div>
    </div>
    </div>
</div>
<!-- end of About us -->

<!-- About Our Vision and Mission -->
<div class="row" >
    <div class="container-fluid">
        <div class="col-12">
        <div class = "section">
            <div class="row">
                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-right: 5px solid; 
                border-right-color:cyan;">
                    <div class="text-center" style="padding-left: 40px; padding-right: 20px;">
                        <h1 class = "text-primary" style="color:darkblue;"><b>Our Vision</b> </h1>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.60;">
                        To be part and partner in creating a World where human race will conquer hunger. To create 
                        opportunities for excellence by preparing young people to consistently and positively impact our 
                        world for the present and future generations. 
                        <br>
                        Thereby motivating and inspiring people in small scale businesses to have access to capitals inorder
                        to promote their business and also imbibe knowledge that shapes their thought processes, sharpens 
                        their quest for integrity, and ensures their well-being in every aspect of human endeavour.  
                        </h5>
                    </div>
                    <div class="text-center" style="padding-left: 40px; padding-right: 20px;">
                        <h1 class = "text-primary"><b>Our Mission</b> </h1>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.60;">
                        To promote and protect the dignity of those who seek our support and intervention. To work 
                        with highly motivated staff who serves with compassion and empathy in assisting and supporting people 
                        in need to improve their lives. 
                        <br>
                        To provide and offer essential community resources and leadership to support Children, Individuals 
                        and Families in time of needs, emergencies and crisis.
                        </h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                   <img class="rounded img-fluid float-start" id = "banner" src="../assets/img/v1.jpg" width="800px" />
                </div>

                
            </div>
        </div>
    </div>
</div>
</div>
<!-- end of Our Vision and Mission -->


<!-- About our event -->
<div class="row">
<div class = "section">
    <div class="container-fluid" >
        <div class="col-12" style = "margin-top:40px;">
            <h1 class = "text-danger" style = "text-align:center;" ><b>Our Events</b></h1> 

        </div>
    </div>
    </div>


<div class="row">
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-12 col-md-6"  style=" margin-top: 40px;">
                   
                   <img class="rounded img-fluid float-end" id = "banner" src="../assets/img/event.jpg" width="800px" />
                </div>

                <div class="col-sm-12 col-md-6" style="margin-top: 30px;border-left: 5px solid; border-left-color:cyan;">
                    <div style="padding-left: 40px; padding-right: 20px;">
                        <h2 class = "text-primary" style="font-family: 'Quicksand', sans-serif;"><b>Our Event</b></h2>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.60;">
                        On 28th July 2024 The Redeemed Chritian Church of God in conjunction with Amber & Duquays 
                        Foundation held a free medical outreach where people received free medical consultation, 
                        free blood pressure test, free blood group test, free malaria parasite test and much more. 
                        <br><br />
                        The Management of Amber & Duquays Foundation
                        calls on everyone to join hands with the Foundation in building equitable and 
                        sustainable communities on the principles of Love and Empathy for the human race. 
                        The Foundation is thankful to their donors who have continued to support their efforts in 
                        helping and empowering vulnerable individuals in the communities.</h5>                 
                        <button  class="btn btn-danger rounded-pill d-none d-md-block"><a href="/ourevent" class = "hov">
                        <b>Read more</b></a></button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end of our event-->


<!--  Carosol Header-->
<div class = "row" style = "margin-top:50px; 
background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 15)),url('../assets/img/contact-bg.jpg');">
<div class="section">
    <div class="container-fluid">
        <div class="col-12 text-center mt-8 text-danger" style = "margin-top:30px; margin-bottom:20px;">
            <h1>_____ Testimonials_____</h1>
            
        </div>
    </div>
</div>

<!-- end of Carosol Header -->

<!--  Carousol -->
    <div class = "row">
    <div class = "section">
    <div class="container-fluid" style = "margin-bottom:50px; color:white;">
        <div class="col-12" >
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner text-center mt-8">
                    <div class="carousel-item active">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <h5 style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                        Amber & Duquays Foundation has been able to provide food for the needy in the community as well as supporting
                           small scale businesses with capitals to boost their businesses.
                        </h5>
                        <h4>MRS OKOYE CHINYERE</h4>
                        
                    </div>

                    <div class="carousel-item">
                        
                        <h5 style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                        Amber & Duquays Foundation as a Non-Governmental Organization (NGO) with liited resources and with 
                            a genuine purpose of improving the living standard of the less priviledged
                            children by giving them shelter, food, healthy conditions, education etc. 
                        </h5>
                        <h4>DR. MRS. UDEANYA CHIKA</h4>
                    </div>

                    <div class="carousel-item">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <h5 style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                        Amber & Duquays Foundation has helped in supporting destitute elderly women by giving them food
                            every day and instilling a hope in them that they too are wanted. <br> struggling women with a lot of
                            responsibilities have an avenue to work and earn with dignity through tailoring centers and other
                            businesses.                       
                        </h5>
                        <h4>MRS LILIAN OGUOMA</h4>
                    </div>

                    <div class="carousel-item">
                        <!-- <img class="rounded-circle" width="120px" height="120px" src="../assets/img/v62_5996.png" alt="..."> -->
                        <h5 style="margin-left: 10%; margin-right: 10%; font-family: 'Quicksand', sans-serif;">
                        The Foundation has helped to provides basic human needs such as food, clean and safe drinking water, and 
                        medical assistance inorder to improve the lives of Children, Individuals and Families including supporting their education, skills and 
                        job training to cross the bridge from basic human needs to Independence and self-sufficiency.  
                        </h5>
                        <h4>DR OGUOMA OKECHUKWU</h4>
                    </div>
                 
                </div>
                <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- end of Carousol -->


<!--  Team Header-->
<div class="row" style="margin-top: 50px;">
<div class = "section">
    <div class="container-fluid ">
        <div class="col-12 text-center text-danger" >
            <h1><b>Meet our Team</b></h1>
        </div>
    </div>
</div>
</div>
<!-- end of Team Header -->

<!-- About Our Team -->
<div class="row">
<div class = "section">
    <div class="container">
        <div class="col-12" style="margin-top: 10px; margin-bottom: 20px;" >
            <div class="row">
            <div class="col-sm-12 col-md-5" >
                    <div class="container card" style = "margin-top: 40px;">
                        <img class="rounded img-fluid mx-auto image" id = "banner" src="../assets/img/founder.jpg" width="300px" />
                        <div class="middle">
                            <div class="text rounded">
                            Chief. Dr Ndukwo Bassey Kalu and his wife Amber Lea Kalu
                                <p>Founder</p>
                            </div>
                            
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-7" style="margin-top: 30px;border-left: 5px solid; border-left-color:cyan;">
                    <div style="padding-left: 40px; padding-right: 10px; font-size: 18px;">
                        
                        <h2 class = "text-primary" style = "font-weight: Bold;">Amber & Duquays Foundation </h2>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height:1.60;">
                        There is no doubt that the successes recorded by any organization are eloquent testimonies of the high degree of commitment and 
                        tenacity of the purpose of its staff and evidence of the administrative know-how of its managers in actualizing the goals and aspirations of 
                        the organization.<br><br>
                        Likewise, when the organizational climate is warm, cordial, and motivating, when the spirit of the employees is vibrant, 
                        peaceful, and inspiring there is no limit to the stretch of the potential and expertise of the employees in actualizing the visions of the founders of the establishment. 
                        Hence, producing an amazing work for the cause of providing food to the poor and needy in our communities.
         
                        </h5>
                        <button  class="btn btn-danger rounded-pill d-none d-md-block"><a href="/ourteam"class = "hov">
                        <b>Read more</b></a></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row" style="margin-top: 50px; margin-bottom: 20px;">
    <div class="container-fluid">
        <div class="col-12" >
        <div class="row d-flex flex-row flex-nowrap overflow-auto">

                <div class="col-sm-12 col-md-3"  >

                    <div class="card" id = "arrange">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/nneka.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    <p>Admin Manager</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> <b> Mrs. Treasure Nneka </b> </h5>
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3"  >

                    <div class="card" id = "arrange">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/chuks.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    <p>Admin Officer</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> <b> Mr. Chuks </b> </h5>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card" id = "arrange">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/precious.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    
                                    <p>Admin Officer</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> <b> Udeanya Precious Zoe </b> </h5>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card" id = "arrange">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:195px ; width:200px;" src="../assets/img/uche.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    
                                    <p>Admin Officer</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"> <b> Uche Maximus </b> </h5>
                          </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>

<!-- end of out team-->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\websites\amber\resources\views\home.blade.php ENDPATH**/ ?>