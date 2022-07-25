        <?php
            require_once 'head.php';
            require_once 'header.php';
            require_once 'backend/conn.php';

            $query = "SELECT * FROM products_fivem";
            $statement = $conn->prepare($query);
            $statement->execute();
            $productlist = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <main>
            <section class="stn-fivem">
                <div class="wrapper">
                    <div class="flex-box">
                        <div class="text-box">
                            <div class="topborder"></div>
                            <br>
                            <h5>FiveM <span>HOSTING</span></h5>
                            <p>Host your own FiveM server on our <span>premium</span> and modern hardware. Pay, Play and Survive!</p>
                        </div>

                        <div class="text-box-none"></div>
                    </div> 
                </div>
            </section>

            <section class="space">
                <div class="wrapper">
                    <div class="services-flex">
                        <?php foreach($productlist as $product) { ?>
                            <div class="plan-banner">
                                <img src="<?php echo $base_url; ?>/<?php echo $product['img']; ?>" alt="">
                                <div class="plan-banner-box">
                                    <h5><?php echo $product['name']; ?> | <span>€<?php echo $product['price']; ?></span></h5>
                                    <p><span>Ram: </span><?php echo $product['ram']; ?> MB</p>
                                    <p><span>Cores: </span><?php echo $product['cores']; ?></p>
                                    <p><span>Storage: </span><?php echo $product['storage']; ?> MB</p>
                                    <p><span>MySQL: </span>Free MySQL</p>
                                    <a href="<?php echo $product['purchare_link']; ?>" class="btn5"><?php echo $product['button_txt']; ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            
            <?php require_once 'layout/services.php'; ?>

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

        <?php require_once 'footer.php'; ?>