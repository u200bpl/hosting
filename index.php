<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <title>Galaxynode | Home</title>

            <meta name="description" content="Cheap and affordable hosting for everyone on premium hardware!">
            <link href="img/logo.png" rel="shortcut icon">
            <meta name="keywords" content="minecraft, minecraft hosting, minecraft server, minecraft server hosting, mc, mc hosting, mc server, mc server hosting, fivem, fivem hosting, fivem server, fivem server hosting, fivem txadmin, fivem server txadmin, fivem server hosting txadmin, fivem hosting txadmin, discord, discord hosting, discord server, discord server hosting, discord bot, discord bot server, discord bot hosting">
            <meta name="author" content="Dennis Overman">

            <link rel="stylesheet" href="css/style.css">
            <script src="https://kit.fontawesome.com/268c8277db.js" crossorigin="anonymous"></script>
        </head>
    <body>
        <script type="text/javascript" src="js/slideshow.js"></script>

        <header>
            <nav>
                <div class="wrapper">
                    <div class="navbar">
                        <div class="navbarleft">
                            <a href="index.php"><h1><span>GALAXYNODE</span></h1></a>
                        </div>

                        <div class="navbarright">
                            <a href="index.php" class="nav-active">Home</a>
                            <a href="minecraft.php">Minecraft</a>
                            <a href="fivem.php">Fivem</a>
                            <a href="discord.php">Discord Bot</a>
                            <a href="">Contact Us</a>
                        </div>

                        <div class="buttons">
                            <button class="btn2" onclick="window.location.href='https://panel.galaxynode.net/';">GAME PANEL</button>
                            <button class="btn">LOGIN <i class="fa-solid fa-angle-down"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
        
            <?php include('layout/header.php') ?>
        </header>

        <main>
            <section class="space">
                <div class="wrapper">
                    <h3 class="space2">Choose a plan</h3>
                    <div class="services-flex">
                        <div class="banner">
                            <img src="img/minecraft2.jpg" alt="">
                            <div class="banner-box">
                                <h5>MINECRAFT JAVA</h5>
                                <p>Starting at <span>4,00 / Mo</span>, Explore, craft and conquer on our premium minecraft servers.</p>
                                <a class="btn3" href="minecraft.php">Get Started</a>
                            </div>
                        </div>

                        <div class="banner">
                            <img src="img/fivem2.jpg" alt="">
                            <div class="banner-box">
                                <h5>FIVEM</h5>
                                <p>Starting at <span>3,50 / Mo</span>, Explore, escape and roleplay on our premium fivem servers.</p>
                                <a class="btn3" href="fivem.php">Get Started</a>
                            </div>
                        </div>

                        <div class="banner">
                            <img src="img/discord2.jpg" alt="">
                            <div class="banner-box">
                                <h5>DISCORD</h5>
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

        <?php include('layout/footer.php') ?>