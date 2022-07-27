        <?php
            require_once 'head.php';
            require_once 'header.php';
            require_once 'backend/conn.php';
        ?>

        <main>
            <section class="stn-serverspecs">
                <div class="wrapper">
                    <div class="flex-box">
                        <div class="text-box">
                            <div class="topborder"></div>
                            <br>
                            <h5>SERVER <span>SPECIFICATION</span></h5>
                            <p>See our <span>premium</span> and modern hardware.</p>
                        </div>

                        <div class="text-box-none"></div>
                    </div> 
                </div>
            </section>

            <section class="space">
                <div class="wrapper">
                    <div class="services-flex">
                        <div class="plan-banner">
                            <img src="<?php echo $base_url; ?>/img/serverspecs/customer.png" alt="">

                            <div class="plan-banner-box">
                                <h5>Customer Panel</h5>
                                <p><span>CPU: </span>Ryzen 5 3600</p>
                                <p><span>Ram: </span>8GB</p>
                                <p><span>Storage: </span>80GB</p>

                                <a href="" class="btn5">See Status</a>
                            </div>
                        </div>

                        <div class="plan-banner">
                            <img src="<?php echo $base_url; ?>/img/serverspecs/db.png" alt="">

                            <div class="plan-banner-box">
                                <h5>SQL-01 (MySQL)</h5>
                                <p><span>CPU: </span>Ryzen 5 3600</p>
                                <p><span>Ram: </span>8GB</p>
                                <p><span>Storage: </span>80GB</p>

                                <a href="" class="btn5">See Status</a>
                            </div>
                        </div>

                        <div class="plan-banner">
                            <img src="<?php echo $base_url; ?>/img/minecraft/stone.png" alt="">

                            <div class="plan-banner-box">
                            <h5>MC-FRA-01</h5>
                                <p><span>CPU: </span>Ryzen 7 3800x</p>
                                <p><span>Ram: </span>128GB</p>
                                <p><span>Storage: </span>2TB NVMe SSD</p>

                                <a href="https://stats.uptimerobot.com/wRz4jcvlyD/792343967" class="btn5">See Status</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php require_once 'layout/services.php'; ?>
            
            <?php require_once 'layout/gamepanel.php'; ?>
        </main>

        <?php require_once 'footer.php'; ?>