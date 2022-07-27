        <?php
            require_once 'head.php';
            require_once 'header.php';
            require_once 'backend/conn.php';

            $query = "SELECT * FROM products_dc";
            $statement = $conn->prepare($query);
            $statement->execute();
            $productlist = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <main>
            <section class="stn-discord">
                <div class="wrapper">
                    <div class="flex-box">
                        <div class="text-box">
                            <div class="topborder"></div>
                            <br>
                            <h5>DISCORD BOT <span>HOSTING</span></h5>
                            <p>Host your own Discord Bot on our <span>premium</span> and modern hardware. Pay, Make and Start!</p>
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
                                    <p><span>Ram: </span><?php echo $product['ram']; ?> MB</p>
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