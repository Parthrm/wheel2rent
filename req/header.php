

<!-- header -->
    <header>
            <div class="logo"></div>
            <div class="header-links-wrap">
                <div class="header-links">
                    <a href="http://localhost/wheel2rent/vehicles.php">Find Ride</a>
                    <a href="http://localhost/wheel2rent/support.html">Support</a>
                    <a href="http://localhost/wheel2rent/admin/addvehicle.php">Contact Us</a>
                </div>
                <div class="user">
                    <a href="authentication/login.php" style="color: black;" >
                        <?php 
                            if(!isset($_SESSION))session_start();
                            if(!isset($_SESSION['username']))
                            {
                                echo "?";
                            }
                            else{
                                echo strtoupper(substr($_SESSION['username'],0,1));
                            }
                        ?>
                    </a>
                </div>
            </div>
        </header>