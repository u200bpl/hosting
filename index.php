        <?php
            require_once 'head.php';
            require_once 'header.php';
            require_once 'backend/conn.php';
        ?>

        <main>
            <section>
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <section class="stn-minecraft">
                            <div class="wrapper">
                                <div class="flex-box">
                                    <div class="text-box">
                                        <div class="topborder"></div>
                                        <br>
                                        <h5>MINECRAFT <span>HOSTING</span></h5>
                                        <p>Host your own Minecraft <span>1.19</span> server on our <span>premium</span> and modern hardware. Pay, Play and Survive!</p>
                                        <a href="minecraft.php" class="btn4">VIEW PLANS</a>
                                    </div>

                                    <div class="text-box-none"></div>
                                </div> 
                            </div>
                        </section>
                    </div>

                    <div class="mySlides fade">
                        <section class="stn-discord">
                            <div class="wrapper">
                                <div class="flex-box">
                                    <div class="text-box">
                                        <div class="topborder"></div>
                                        <br>
                                        <h5>DISCORD BOT <span>HOSTING</span></h5>
                                        <p>Host your own Discord Bot on our <span>premium</span> and modern hardware. Pay, Make and Start!</p>
                                        <a href="discord.php" class="btn4">VIEW PLANS</a>
                                    </div>
                                    <div class="text-box-none"></div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="dots">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                    </div>
                </div>
            </section>
            
            <section class="space">
                <div class="wrapper">
                    <div class="space2">
                        <h2>Choose a plan</h2>
                    </div>
                    <div class="services-flex">
                        <div class="banner">
                            <img src="<?php echo $base_url; ?>/img/minecraft2.jpg" alt="">
                            <div class="banner-box">
                                <h5>MINECRAFT JAVA</h5>
                                <p>Starting at <span>2,50 / Mo</span>, Explore, craft and conquer on our premium minecraft servers.</p>
                                <a class="btn3" href="minecraft.php">Get Started</a>
                            </div>
                        </div>

                        <div class="banner">
                            <img src="<?php echo $base_url; ?>/img/fivem2.jpg" alt="">
                            <div class="banner-box">
                                <h5>FIVEM</h5>
                                <p>Starting at <span>6,00 / Mo</span>, Explore, escape and roleplay on our premium fivem servers.</p>
                                <a class="btn3">Coming Soon</a>
                            </div>
                        </div>

                        <div class="banner">
                            <img src="<?php echo $base_url; ?>/img/discord2.jpg" alt="">
                            <div class="banner-box">
                                <h5>DISCORD</h5>
                                <p>Starting at <span>1,50 / Mo</span>, Make your Discord cummunity better on our premium discord bot hosting.</p>
                                <a class="btn3" href="discord.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php require_once 'layout/services.php'; ?>

            <?php require_once 'layout/gamepanel.php'; ?>
        </main>

        <?php require_once 'footer.php'; ?>