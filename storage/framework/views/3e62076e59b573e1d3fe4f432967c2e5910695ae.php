

<?php $__env->startSection('content'); ?>
<!--
<script>
    function showHideOption() {
        var parentSelect = document.getElementById ("parent-select");
        var childSelect = document.getElementById ("child-select");

        if (parentSelect.value !== "") {
            childSelect.style.display = "block";
        } else {
            childSelect.style.display = "none";
        }
    }
    </script>
    
    <style>
        .custom-select{
            width:200px;
            padding:8px;
            font-size:16px;
            border:1px solid #ccc;
            border-radius:4px;
            background-color:#fff;
            color:#333;
        }
        /*for the dropdown arrow*/
        .custom-select: :after {
            content: "\25BC";
            position:absolute;
            top:50%;
            right:10px;
            transform:translateY(-50%);
            pointer-events:none;
        }

        </style>
    -->
<div class="row">
    <div class="container">
        <div class="col-12" style="font-family: 'Quicksand', sans-serif;">
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px; margin-bottom:40px;"><b>SANKT GEORG INTERNATIONAL SCHOOL </br>
                (ACADEMIC CALENDAR)</b></h1>
        </div>
    </div>
</div>




<div class="row">
    <div class="container">
        <div class="col-12 container-sm" style="margin-top: 20px; margin-bottom: 20px; font-family: 'Quicksand', sans-serif;" >
        <div class="row">
        <!--
        <div class="col-sm-12 col-md-6" style="display:flex; justify-content:center; align-items:center; margin-bottom:20px;">    
        <select class = "custon-select" id = "parent-select" onchange="showHideOption()">
            <option value ="Select the Session"> Select Session </option>
            <option value ="option 1"> 2022-2023 </option>
            <option value ="option 2"> 2023-2024 </option>
</select>
</div>

<div class="col-sm-12 col-md-6" style="display:flex; justify-content:center; align-items:center;margin-bottom:20px;"> 
<select id = "child-select" style ="display:none;">
            <option value ="Select the term"> Select Term </option>
            <option value ="option 1"> First Term </option>
            <option value ="option 2"> Second Term </option>
            <option value ="option 3"> Third Term </option>
</select>
</div>

<div class="col-sm-12 col-md-6" style="display:flex; justify-content:center; align-items:center;margin-bottom:20px;"> 
<div class="dropdown">
                                    <button class="btn btn-primary rounded-pill dropdown-toggle"  type="button" id = " child-select" data-bs-toggle="dropdown" aria-expanded="false" style = "display:none;">Select Section
                                    <span class="caret"></span> </button>

                                        <ul class="dropdown-menu" aria-labelledby = "dropdownMenu">
                                            <li><a class = "dropdown-item" href="#">Nursery and Primary Section</a></li>
                                            <li><a class = "dropdown-item" href="#">Secondary Section</a></li>
                                            <li><a class = "dropdown-item" href="#">Parents' Calendar</a></li>
                                        </ul>
                                </div> 
</div>

           About Principal of School --> 
                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h5 class = "text-danger"><b>Name</b></h5>
                        </div>
                        <div class="col-9" style = "padding-left:30px;">
                            <h5 class = "text-danger"><b>Date</b></h5>
                        </div>
                    </div>
                </div>
                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h6 style="color:#4A0404;"><b>Autumn Term</br>
                        </b></h6>
                        </div>
                        <div class="col-9" style = "padding-left:30px;">
                            <h6>Details will be communicated appropriately and on time</h6>
                            
                        </div>
                    </div>
                </div>
                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h6 style="color:#4A0404;"><b>First Term</b></h6>
                        </div>
                        <div class="col-9" style = "padding-left:30px;">
                            <h6>Thursday 7th of September 2023 - Friday 15th of December 2023</h6>
                            <p>School Resumes: Thursday 7 September 2023
                            </br>Boarders return on Sunday, 10th September 2023</p>



                            <div class = "col-3">
                                <div class="dropdown">
                                    <button class="btn btn-primary rounded-pill dropdown-toggle"  type="button" id = "dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">View Calendar
                                    <span class="caret"></span> </button>

                                    <ul class="dropdown-menu" aria-labelledby = "dropdownMenu">
                                            <li><a class = "dropdown-item" href= "<?php echo e(route('priviewcalendarfirst')); ?>" routerLink="/priviewcalendarfirst" routerLinkActive="active">Nursery and Primary Section</a></li>
                                            <li><a class = "dropdown-item" href="<?php echo e(route('secviewcalendarfirst')); ?>" routerLink="/secviewcalendarfirst" routerLinkActive="active">Secondary Section</a></li>
                                            <li><a class = "dropdown-item" href="<?php echo e(route('parviewcalendarfirst')); ?>" routerLink="/parviewcalendarfirst" routerLinkActive="active">Parents' Calendar</a></li>
                                        </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>


                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h6 style="color:#4A0404;"><b>Second Term</b></h6>
                        </div>
                        <div class="col-9" style = "padding-left:30px;">
                            <h6>Details will be communicated appropriately and on time</h6>

                            <!--
                            <div class = "col-3">

                                <div class="dropdown">
                                    <button class="btn btn-primary rounded-pill dropdown-toggle"  type="button" id = "dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">View Calendar
                                    <span class="caret"></span> </button>

                                        <ul class="dropdown-menu" aria-labelledby = "dropdownMenu">
                                            <li><a class = "dropdown-item" href="#">Nursery and Primary Section</a></li>
                                            <li><a class = "dropdown-item" href="#">Secondary Section</a></li>
                                            <li><a class = "dropdown-item" href="#">Parents' Calendar</a></li>
                                        </ul>
                                </div> 
                            </div> -->
                        </div>
                    </div>
                </div>
                  
                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h6 style="color:#4A0404;"><b>Third Term </br>
                        </b></h6>
                        </div>
                        <div class="col-9" style = "padding-left:30px;">
                            <h6>Details will be communicated appropriately and on time</h6>

                            <!--

                            <div class = "col-3">
                                <div class="dropdown">
                                    <button class="btn btn-primary rounded-pill dropdown-toggle"  type="button" id = "dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">View Calendar
                                    <span class="caret"></span> </button>

                                        <ul class="dropdown-menu" aria-labelledby = "dropdownMenu">
                                            <li><a class = "dropdown-item" href= "<?php echo e(route('priviewcalendarthird')); ?>" routerLink="/priviewcalendarthird" routerLinkActive="active">Nursery and Primary Section</a></li>
                                            <li><a class = "dropdown-item" href="<?php echo e(route('secviewcalendarthird')); ?>" routerLink="/secviewcalendarthird" routerLinkActive="active">Secondary Section</a></li>
                                            <li><a class = "dropdown-item" href="<?php echo e(route('parviewcalendarthird')); ?>" routerLink="/parviewcalendarthird" routerLinkActive="active">Parents' Calendar</a></li>
                                        </ul>
                                </div> 
                            </div> -->

                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                   
                    <p class="text-danger">2023-2024 Session</p>
                </div>
               
              
            </div>
        </div>
    </div>
</div>
<!-- end of about Principal of School-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\sanktgeorg\resources\views/calendar.blade.php ENDPATH**/ ?>