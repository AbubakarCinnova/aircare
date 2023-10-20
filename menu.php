<header>

    <div class="clearfix"></div>

    <div class="container mid_header">
        <div class="row">

            <div class="col-md-4 text-center site-logo-wrap-mobile"> <a href="<?php echo $base_url ?>"><img
                        src="<?php echo $base_url ?>/img/aacs-logo.png" width="220" /></a> </div>

            <div class="col-md-3 ">
                <div>
                    <h3 style="font-weight:600;">Call for Appointment</h3>
                    <div class="header-phone">
                        <a href="tel:18883043828" style="color:black;">
                            <h2>1-888-304-3828</h2>
                        </a>
                    </div>

                </div>

            </div>

            <div class="col-md-6 text-center site-logo-wrap-desktop"> <a href="<?php echo $base_url ?>"><img
                        src="<?php echo $base_url ?>/img/aacs-logo.png" width="230" /></a> </div>

            <div class="col-md-3  header-btn-wrap">
                <a href="<?php echo $base_url ?>/contact-us.php" class="btn btn-warning" style="">Request Service</a>
            </div>
        </div>
    </div>

    <!-- <div class="col-xs-12 mid_header">

     

</div> -->

    <div class="clearfix"></div>

    <nav class="navbar">

        <div class="container">



            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed custom-toggler" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="menu-icon">

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <!--   <span class="navi-gat"><i class="fa fa-bars" aria-hidden="true"></i></span> --> </button>

                <!--  <a href="<?php echo $base_url ?>" class="navbar-brand visible-xs"> <img
          src="<?php echo $base_url ?>/img/aacs-logo.png" class="img-responsive" /></a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">

                    <li><a href="<?php echo $base_url ?>/"><img src="<?php echo $base_url ?>/img/home_1.png"></a></li>

                    <li><a href="<?php echo $base_url ?>/about.php">About

                        </a></li>



                    <!--    <li><a class="dropdown-toggle">Services<span class="material-symbols-outlined arrow-dropdown">
                                arrow_drop_down
                            </span></a>
                        <ul class="dropdown-menu">

                            <li><a href="<?php echo $base_url ?>/tin-man-club.php">Annual Tin Man Service Club</a></li>
                            <li><a href="<?php echo $base_url ?>/water-heater.php">Water Heaters</a></li>
                        </ul>
                    </li>
 -->

                    <li><a href="<?php echo $base_url ?>/duct-cleaning.php">Duct Cleaning </a>
                    </li>
                    <li><a href="<?php echo $base_url ?>/dryer-vent-cleaning.php">Dryer Vent Cleaning</a>
                    </li>


                    <li><a href="<?php echo $base_url ?>/service-area.php">Service Area</a></li>

                    <li><a href="<?php echo $base_url ?>/specials.php">Specials</a></li>

                    <li><a class="dropdown-toggle">Learn More <span class="material-symbols-outlined arrow-dropdown">
                                arrow_drop_down
                            </span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $base_url ?>/powervac-truck.php">PowerVac Truck</a>
                            </li>


                        </ul>
                    </li>

                    <li><a href="<?php echo $base_url ?>/contact-us.php">Contact</a>

                    </li>
                </ul>

            </div>

            <!-- /.navbar-collapse -->

        </div>

    </nav>


</header>


<script>
var menuIcon = document.getElementById('menu-icon');
menuIcon.addEventListener('click', function() {
    menuIcon.classList.toggle('open');
});
</script>