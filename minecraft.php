        <?php
            require_once 'head.php';
            require_once 'header.php';
            require_once 'backend/conn.php';

            $query = "SELECT * FROM products_mc";
            $statement = $conn->prepare($query);
            $statement->execute();
            $productlist = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <main>
            <section class="stn-minecraft">
                <div class="wrapper">
                    <div class="flex-box">
                        <div class="text-box">
                            <div class="topborder"></div>
                            <br>
                            <h5>MINECRAFT <span>HOSTING</span></h5>
                            <p>Host your own Minecraft <span>1.19</span> server on our <span>premium</span> and modern hardware. Pay, Play and Survive!</p>
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
                                    <h5><?php echo $product['name']; ?></h5>
                                    <?php if ($product['recommended'] == true) { ?>
                                        <p>Recomende for <span>1.16</span> and above</p>
                                    <?php } else { ?>
                                        <p><span>NOT</span> recomende for <span>1.16</span> and above</p>
                                    <?php } ?>
                                    <p><span>Ram: </span><?php echo $product['ram']; ?> MB</p>
                                    <p><span>Players: </span><?php echo $product['players']; ?></p>
                                    <p><span>Storage: </span><?php echo $product['storage']; ?> MB</p>
                                    <p><span>MySQL: </span>Free MySQL</p>
                                    <a href="<?php echo $product['purchare_link']; ?>" class="btn5">€<?php echo $product['price']; ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            
            <?php require_once 'layout/services.php'; ?>

            <?php require_once 'layout/gamepanel.php'; ?>
        </main>

        <?php require_once 'footer.php'; ?>