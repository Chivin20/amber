

<?php $__env->startSection('content'); ?>

<style>
      
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
</style>
<div class="row">
    <div class="container">
        <div class="col-6" style="font-family: 'Quicksand', sans-serif;">
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px;"><b>ABOUT US</b></h1>
        </div>
    </div>
</div>


<div class="row">
    <div class="container-fluid">
        <div class="col-12" >
            <div class="row">
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px;">
                   
                   <img class="rounded img-fluid float-end" src="<?php echo e(url('/assets/img/aboutus.jpg')); ?>" style =" width:600px; margin-bottom:20px;" />
                </div>

                <div class="col-sm-12 col-md-6" style="margin-top: 50px;border-left: 5px solid; border-left-color:#FFE5B4;">
                    <div style="padding-left: 40px; padding-right: 40px;">
                        
                        <h1 class = "text-primary" style="text-align:center;"><b>About Amber & Duquays Foundation </b></h1>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.60;">
                        The Amber and Duqays Foundation is a non-profit organisation, which was founded by Chief. Dr Ndukwo Bassey Kalu 
                        and his wife Amber Lea Kalu. It is a leading Community and Human Oriented Non-Profit Organisation 
                        committed to the Social and Economic Welfare of the Less Privileged in Developing Nations. 
                        <br> <br>
                        The Foundation provides basic human needs such as food, clean and safe drinking water, 
                        and medical assistance to improve the lives of Children, Individuals and Families including 
                        supporting their education, skills and job training to cross the bridge from basic human needs 
                        to Independence and self-sufficiency. 
                        </h5>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" style = "background-color:#FFFEFA;">
    <div class="container-fluid">
        <div class="col-12" >
            <div class="row">
                <div class="col-sm-12 col-md-6" style="margin-top: 50px; ">
                    <div class="text-center" style="padding-left: 40px; padding-right: 40px;">
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
                    <div class="text-center" style="padding-left: 40px; padding-right: 40px;">
                    <h1 class = "text-primary"><b>Our Mission</b> </h1>
                        <h5 style="text-align: justify; font-family: 'Quicksand', sans-serif; line-height: 1.50;">
                        To promote and protect the dignity of those who seek our support and intervention. To work 
                        with highly motivated staff who serves with compassion and empathy in assisting and supporting people 
                        in need to improve their lives. 
                        <br>
                        To provide and offer essential community resources and leadership to support Children, Individuals 
                        and Families in time of needs, emergencies and crisis.
                        </h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6"  style=" margin-top: 50px; margin-bottom: 60px; border-left: 5px solid; border-left-color:#FFE5B4;">
                   <img class="rounded img-fluid float-start" src="../assets/img/mission.jpg" style =" width:600px;" />
                </div>

                
            </div>
        </div>
    </div>

<!-- end of Our Vision and Mission -->

<?php $__env->stopSection(); ?>
<!-- end of about -->
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\websites\amber\resources\views\aboutus.blade.php ENDPATH**/ ?>