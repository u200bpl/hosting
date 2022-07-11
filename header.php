    <header>
        <nav>
            <div class="wrapper">
                <div class="navbar">
                    <div class="navbarleft">
                        <a href="index.php"><h1><span>GALAXYNODE</span></h1></a>
                    </div>

                    <div class="navbarright">
                        <a class="<?php if(isset($index)){echo "nav-active-2";} ?>" href="index.php">Home</a>

                        <div class="dropdown">
                            <button class="dropbtn <?php if(isset($dropdown)){echo "nav-active-2";} ?>">Game Hosting</button>
                            <div class="dropdown-content">
                                <div class="dropdown-cat">
                                    <a href="minecraft.php">
                                        <div class="cat-game">
                                            <div class="cat-game-img">
                                                <img src="img/minecraft/grassblock.png" alt="">
                                            </div>
                                            <div class="<?php if(isset($minecraft)){echo "nav-active";} ?> cat-game-info">
                                                <a href="minecraft.php">Minecraft</a>
                                                <p>Minecraft Java Servers</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="fivem.php">
                                        <div class="cat-game">
                                            <div class="cat-game-img">
                                                <img src="img/fivem/snale1.png" alt="">
                                            </div>
                                            <div class="<?php if(isset($fivem)){echo "nav-active";} ?> cat-game-info">
                                                <a href="fivem.php">Fivem</a>
                                                <p>Fivem Servers</p>
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
                                    <a href="fivem.php">
                                        <div class="cat-game">
                                            <div class="cat-game-img">
                                                <img src="img/discord/discord.png" alt="">
                                            </div>
                                            <div class="red <?php if(isset($discord)){echo "nav-active";} ?> cat-game-info">
                                                <a href="discord.php">Discord Bot</a>
                                                <p>Discord Bot</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="buttons">
                        <button class="btn2" onclick="window.location.href='https://panel.galaxynode.net/';">GAME PANEL</button>
                        <button class="btn">LOGIN <i class="fa-solid fa-angle-down"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </header>