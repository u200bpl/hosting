    <header>
        <nav>
            <div class="wrapper">
                <div class="navbar">
                    <div class="navbarleft">
                        <a href="<?php echo $base_url; ?>/index.php"><h1><span>GALAXYNODE</span></h1></a>
                    </div>

                    <div class="navbarright">
                        <a class="<?php if(isset($index)){echo "nav-active-2";} ?>" href="<?php echo $base_url; ?>/index.php">Home</a>

                        <div class="dropdown">
                            <button class="dropbtn <?php if(isset($dropdown)){echo "nav-active-2";} ?>">Game Hosting</button>
                            <div class="dropdown-content">
                                <div class="dropdown-cat">
                                    <a href="<?php echo $base_url; ?>/minecraft.php">
                                        <div class="cat-game">
                                            <div class="cat-game-img">
                                                <img src="<?php echo $base_url; ?>/img/minecraft/grassblock.png" alt="">
                                            </div>
                                            <div class="<?php if(isset($minecraft)){echo "nav-active";} ?> cat-game-info">
                                                <a href="<?php echo $base_url; ?>/minecraft.php">Minecraft</a>
                                                <p>Minecraft Java Servers</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="<?php echo $base_url; ?>/fivem.php">
                                        <div class="cat-game">
                                            <div class="cat-game-img">
                                                <img src="<?php echo $base_url; ?>/img/fivem/snale1.png" alt="">
                                            </div>
                                            <div class="<?php if(isset($fivem)){echo "nav-active";} ?> cat-game-info">
                                                <a href="<?php echo $base_url; ?>/fivem.php">Fivem</a>
                                                <p>COMING SOON</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="dropbtn <?php if(isset($dropdown2)){echo "nav-active-2";} ?>">Other Hosting</button>
                            <div class="dropdown-content">
                                <div class="dropdown-cat">
                                    <a href="<?php echo $base_url; ?>/discord.php">
                                        <div class="cat-game">
                                            <div class="cat-game-img">
                                                <img src="<?php echo $base_url; ?>/img/discord/discord.png" alt="">
                                            </div>
                                            <div class="<?php if(isset($discord)){echo "nav-active";} ?> cat-game-info">
                                                <a href="<?php echo $base_url; ?>/discord.php">Discord Bot</a>
                                                <p>COMING SOON</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="buttons">
                        <button class="btn2" onclick="window.location.href='https://panel.galaxynode.net/';">GAME PANEL</button>

                        <div class="dropdown">
                            <?php if(!isset($_SESSION['user_id'])) { ?>
                                <button class="btn">Login <i class="fa-solid fa-angle-down"></i></button>
                                <div class="dropdown-content">
                                    <div class="dropdown-cat">
                                        <a href="<?php echo $base_url; ?>/login/login.php">
                                            <div class="cat-game">
                                                <div class="cat-game-img">
                                                    <img src="<?php echo $base_url; ?>/img/other/login.png" alt="">
                                                </div>
                                                <div class="<?php if(isset($login)){echo "nav-active";} ?> cat-game-info">
                                                    <a href="<?php echo $base_url; ?>/login/login.php">Login</a>
                                                    <p>Already has a account?</p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="<?php echo $base_url; ?>/register/register.php">
                                            <div class="cat-game">
                                                <div class="cat-game-img">
                                                    <img src="<?php echo $base_url; ?>/img/other/login.png" alt="">
                                                </div>
                                                <div class="<?php if(isset($register)){echo "nav-active";} ?> cat-game-info">
                                                    <a href="<?php echo $base_url; ?>/register/register.php">Register</a>
                                                    <p>Make here your own account</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <button class="btn">Account <i class="fa-solid fa-angle-down"></i></button>
                                <div class="dropdown-content">
                                    <div class="dropdown-cat">
                                        <a href="<?php echo $base_url; ?>/">
                                            <div class="cat-game">
                                                <div class="cat-game-img">
                                                    <img src="<?php echo $base_url; ?>/img/other/login.png" alt="">
                                                </div>
                                                <div class="<?php if(isset($login)){echo "nav-active";} ?> cat-game-info">
                                                    <a href="<?php echo $base_url; ?>/dashboard/">Dashboard</a>
                                                    <p>Go to our customer dashboard</p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="<?php echo $base_url; ?>/logout/">
                                            <div class="cat-game">
                                                <div class="cat-game-img">
                                                    <img src="<?php echo $base_url; ?>/img/other/logout.png" alt="">
                                                </div>
                                                <div class="<?php if(isset($login)){echo "nav-active";} ?> cat-game-info">
                                                    <a href="<?php echo $base_url; ?>/logout/">Logout</a>
                                                    <p>Log out to your account</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>