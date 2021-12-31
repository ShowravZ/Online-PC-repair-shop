<?php include('partials/menu.php'); ?>
        
        <!-- Section Starts Here -->
        <div class="main-content">
            <div class="wrapper">
                <h1 class="text-center">DASHBOARD</h1>
                <br><br>

    <?php
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        } 
    ?>

    <br><br>

                <div class="boxes">
                    <h1>5</h1>
                    Categories
                </div>

                <div class="boxes">
                    <h1>5</h1>
                    Categories
                </div>

                <div class="boxes">
                    <h1>5</h1>
                    Categories
                </div>

                <div class="boxes">
                    <h1>5</h1>
                    Categories
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Section End Here -->
        
 <?php include('partials/end.php'); ?>      