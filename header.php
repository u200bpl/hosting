    <header>
        <nav>
            <div class="wrapper">
                <div class="navbar">
                    <div class="navbarleft">
                        <a href="index.php"><h1><span>GALAXYNODE</span></h1></a>
                    </div>

                    <div class="navbarright">
                        <a class="<?php if(isset($index)){echo "nav-active";} ?>" href="index.php">Home</a>
                        <a class="<?php if(isset($minecraft)){echo "nav-active";} ?>" href="minecraft.php">Minecraft</a>
                        <a class="<?php if(isset($fivem)){echo "nav-active";} ?>" href="fivem.php">Fivem</a>
                        <a class="<?php if(isset($discord)){echo "nav-active";} ?>" href="discord.php">Discord Bot</a>
                        <a class="<?php if(isset($cotact)){echo "nav-active";} ?>" href="">Contact Us</a>
                    </div>

                    <div class="buttons">
                        <button class="btn2" onclick="window.location.href='https://panel.galaxynode.net/';">GAME PANEL</button>
                        <button class="btn">LOGIN <i class="fa-solid fa-angle-down"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </header>