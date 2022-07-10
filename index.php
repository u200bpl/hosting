        <?php
            require_once 'head.php';
            require_once 'header.php';
            require_once 'backend/conn.php';

            basename($_SERVER['PHP_SELF']) == "index.php"
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
                                        <h2>MINECRAFT <span>HOSTING</span></h2>
                                        <p>Minecraft Hosting so easy and fast that you can start building and survive as fast as you can.</p>
                                        <a href="minecraft.php" class="btn4">VIEW PLANS</a>
                                    </div>

                                    <div class="text-box-none"></div>
                                </div> 
                            </div>
                        </section>
                    </div>

                    <div class="mySlides fade">
                        <section class="stn-fivem">
                            <div class="wrapper">
                                <div class="flex-box">
                                    <div class="text-box">
                                        <div class="topborder"></div>
                                        <br>
                                        <h2>FIVEM <span>HOSTING</span></h2>
                                        <p>FiveM Hosting so easy and fast that you can start making and roleplaying as fast as you can.</p>
                                        <a href="fivem.php" class="btn4">VIEW PLANS</a>
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
                                        <h2>DISCORD BOT <span>HOSTING</span></h2>
                                        <p>Discord Bot Hosting so easy and fast that you can start making and roleplaying as fast as you can.</p>
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
                        <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>
                </div>
            </section>
            <section class="space">
                <div class="wrapper">
                    <h3 class="space2">Choose a plan</h3>
                    <div class="services-flex">
                        <div class="banner">
                            <img src="img/minecraft2.jpg" alt="">
                            <div class="banner-box">
                                <h2>MINECRAFT JAVA</h2>
                                <p>Starting at <span>4,00 / Mo</span>, Explore, craft and conquer on our premium minecraft servers.</p>
                                <a class="btn3" href="minecraft.php">Get Started</a>
                            </div>
                        </div>

                        <div class="banner">
                            <img src="img/fivem2.jpg" alt="">
                            <div class="banner-box">
                                <h2>FIVEM</h2>
                                <p>Starting at <span>3,50 / Mo</span>, Explore, escape and roleplay on our premium fivem servers.</p>
                                <a class="btn3" href="fivem.php">Get Started</a>
                            </div>
                        </div>

                        <div class="banner">
                            <img src="img/discord2.jpg" alt="">
                            <div class="banner-box">
                                <h2>DISCORD</h2>
                                <p>Starting at <span>3,50 / Mo</span>, Make your Discord cummunity better on our premium discord bot hosting.</p>
                                <a class="btn3" href="discord.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="space">
                <div class="wrapper">
                    <h3>Our Services</h3>
                    <div class="services-flex">
                        <div class="services">
                            <i class="fa-solid fa-tags"></i>
                            <h5>Quality and Price</h5>
                            <p>At galaxynode you get the best performance for your money.</p>
                        </div>

                        <div class="services">
                            <i class="fa-solid fa-gauge-high"></i>
                            <h5>Fast deployment</h5>
                            <p>Thanks to our automated system, your server will be deployed within minutes!</p>
                        </div>

                        <div class="services">
                            <i class="fa-solid fa-shield"></i>
                            <h5>DDoS Protection</h5>
                            <p>Thanks to our high anti ddos protection we can provide an uptime of 99.9%!</p>
                        </div>

                        <div class="services">
                            <i class="fa-solid fa-table-columns"></i>
                            <h5>Control Panel</h5>
                            <p>At Galaxynode we provide a fast and stable game panel.</p>
                        </div>

                        <div class="services">
                            <i class="fa-solid fa-database"></i>
                            <h5>Free MySQL</h5>
                            <p>At Galaxynode we provide a fast and free MySQL Database by every server!</p>
                        </div>

                        <div class="services">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            <h5>99.9% Uptime</h5>
                            <p>At galaxynode we can guarantee 99.9% uptime through our strong servers, DDoS Protection and more!</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="space stn-game-panel">
                <div class="wrapper">
                    <div class="panel-box">
                        <div class="panel-box-text">
                            <div class="topborder"></div>
                            <br>
                            <h4>Game Server Control Panel</h4>
                            <p>A panel thats fast and effecient while still look amazing!</p>
                            <ul>
                                <li><span><i class="fa-solid fa-circle-check"></i></span> Manage all of your game servers</li>
                                <li><span><i class="fa-solid fa-circle-check"></i></span> Pre made installer</li>
                                <li><span><i class="fa-solid fa-circle-check"></i></span> Fast Responsive Panel</li>
                            </ul>

                            <button class="btn" onclick="window.location.href='https://panel.galaxynode.net/';">Go to our panel</button>
                        </div>

                        <div class="panel-box-img">
                            <img src="img/panel.jpg" alt="Game Panel Screenshot">
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include('footer.php') ?>