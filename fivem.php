        <?php
            require_once 'head.php';
            require_once 'header.php';
            require_once 'backend/conn.php';

            $query = "SELECT * FROM products";
            $statement = $conn->prepare($query);
            $statement->execute();
            $productlist = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <main>
            <section class="stn-fivem">
                <div class="wrapper">
                    <div class="flex-box">
                        <div class="mc-text-box">
                            <div class="topborder"></div>
                            <br>
                            <h2>FiveM <span>HOSTING</span></h2>
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
                            <?php if ($product['category'] == "fivem") { ?>
                                <div class="mc-banner">
                                    <img src="<?php echo $base_url; ?><?php echo $product['img']; ?>" alt="">

                                    <div class="mc-banner-box">
                                        <h5><?php echo $product['name']; ?> | <span>€<?php echo $product['price']; ?></span></h5>

                                        <p><span>Ram: </span><?php echo $product['ram']; ?> MB</p>
                                        <p><span>Cores: </span><?php echo $product['cores']; ?>%</p>
                                        <p><span>Storage: </span><?php echo $product['storage']; ?> MB</p>
                                        <p><span>MySQL: </span>Free MySQL</p>

                                        <a href="<?php echo $product['purchare_link']; ?>" class="btn5">Purchase</a>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
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
                        </div>>
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