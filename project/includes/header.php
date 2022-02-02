<?php

$que = "SELECT * FROM category";
$result = mysqli_query($con, $que);
?>
<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <?php
                                if(isset($_SESSION['is_user_logged_in']))
                                { ?>

                                    <a href="profile.php">My Profile</a>
                                    <a href="#"><?= $_SESSION['name'] ?></a>
                                    <a href="logout.php">Logout</a>


                                <?php 
                                }
                                else
                                { ?>

                                        <a href="signup.php">Signup</a>
                                        <a href="login.php">Login</a>


                                <?php 
                                }
                                ?>
                                
                               
                                
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="index.php">Home Page</a></li>
                            
                            <li><a href="#">Category</a>
                                <ul class="dropdown">
                                    <?php
                                        while($data=mysqli_fetch_assoc($result))
                                        {
                                            echo "<li><a href='#'>".$data['name']."</a></li>";
                                        }
                                    ?>
                                    <!-- <li><a href="./about.html">About Us</a></li> -->
                                    
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>