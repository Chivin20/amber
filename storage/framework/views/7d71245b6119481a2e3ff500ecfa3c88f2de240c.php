

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
        height: 180px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 10%; 
        margin-top: 10%;
      }
     
     
  
  }
   
  /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
  @media (min-width: 768px) {  
      #banner{
        width: 100%; 
        height: 250px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 20%; 
        margin-top: 20%;
      }
     
   
  }
   
  /* Large devices (desktops, 992px and up) */
  @media (min-width: 1000px) { 
    #banner{
        width: 100%; 
        height: 400px; 
        background-repeat: no-repeat; 
        background-size: 100%;
      }
      #banner_left{
        margin-left: 20%; 
        margin-top: 20%;
      }
     
  }
   
  /* Extra large devices (large desktops, 1200px and up) */
  @media (min-width: 1200px) {  
    h1 {font-size:3rem;} /*1rem = 16px*/    
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

  .carousel-indicators li {
    background-color: #bbb;
    border-radius: 50%;
    width:10px;
    height:10px;
    margin:0 2px;
  }

  .carousel-indicators .active {
    background-color: red;
  }


  
   
  /*
  ::::::::::::::::::::::::::::::::::::::::::::::::::::
  Custom media queries
  */
</style>

<div class="row">
    <div class="container">
        <div class="col-6" style="font-family: 'Quicksand', sans-serif;">
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px;"><b>FACILITIES</b></h1>
        </div>
    </div>
</div>



<!-- About Principal of School -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" style="margin-top: 50px; margin-bottom: 20px;" >
                <div class = "row">
                <div class="col-sm-12 col-md-6" >
                   <!--  Carousol -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="15"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="16"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="17"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="18"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/facility2.png');">
                      
                       
                    </div>

                    <div class="carousel-item ">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/facility3.png');">
                    
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/facility4.png');">
                    
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/facility5.png');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f1.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f2.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f3.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f4.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f5.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f6.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f7.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f8.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f9.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f10.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f11.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f12.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f13.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f14.jpg');">
                     
                    </div>

                    <div class="carousel-item">
                    <img id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.20),rgba(0, 0, 0, 0.3)), url('../assets/img/f15.jpg');">
                     
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style = "background-color:red;"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style = "background-color:red;"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
  
<!-- end of Carousol -->
                <div class="col-sm-12 col-md-5">
                    <div style="padding-left: 40px; padding-right: 20px; padding-top:20px; font-size: 16px;">
                        
                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Science Laboratories</b></h5>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        There are separate purpose-built laboratories for Physics, Chemistry, Basic Technology, Biology, and Mathematics subjects.
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Art Laboratories</b></h5>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                         There are separate purpose-built laboratories for Geography and Home Economics subjects.
                         SGIS equally has a well equipped Fine Arts Studio and Music Studio.
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Library</b></h5>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                         The secondary school section has a well-equipped spacious library with books from various fields to enable students to perform any research work. 
                        The library also serves as a quiet zone for students to study.
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Audio-Visual Laboratory</b></h5>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The laboratory is equipped with a smart interactive board, projectors, surround sound system, and purpose-designed furniture
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Language Laboratory</b></h5>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The laboratory serves to enable students to learn new languages more effectively by using equipment that monitors their abilities in pronunciation and comprehension.
                        Languages taught at SGIS include Igbo, English, French and German. The Spanish language will be introduced by September 2024.
                        </p>
                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Agriculture</b></h5>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        There is a school farm and fish pond to promote the learning of agricultural science
                        </p>

                        
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
            <div class="row">
                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/facility6.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    Multipurpose Hall
                                </div>
                                
                            </div>
                    
                        
                    </div>
                </div>

                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/facility2.png" />
                            <div class="middle">
                                <div class="text rounded">
                                Play Ground
                                </div>
                                
                            </div>
                    
                       
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/facility3.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    Nursery Classroom
                                </div>
                                
                            </div>
                    
                        
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img style="height:200px" class="rounded img-fluid mx-auto image" src="../assets/img/facility4.png" />
                            <div class="middle">
                                <div class="text rounded">
                                    Primary Classroom
                                </div>
                                
                            </div>
                    
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3, d-flex align-items-center justify-content-center" style = "padding-bottom: 25px;">
    <button class="btn btn-primary rounded-pill bg-primary"><a href="/gallery">View More</a></button>
    </div>
</div>
<!-- end of about Principal of School-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\sanktgeorg\resources\views/facilities.blade.php ENDPATH**/ ?>