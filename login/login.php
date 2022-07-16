<?php
            require_once '../head.php';
            require_once '../header.php';
            require_once '../backend/conn.php';

            if(isset($_SESSION['user_id'])){
                header("location: ../index.php");
            }
        ?>

        <main>
            <section>
                <div class="wrapper">
                    <div class="form-center">
                    <h2 class="space">Login</h2>
                        <form action="../backend/controllers/loginController.php" method="post">
                            <div class="form-group">
                                <label for="email">Email:</label>
			                    <input type="email" name="email" placeholder="Email" id="email" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
			                    <input type="password" name="password" placeholder="Password" id="password" onkeydown="keyDown(event)" onpaste="checkWhitespace(event)" required>
                            </div>

                            <div class="form-group">
                                <?PHP if(isset($_GET['msg'])) {
                                    echo "<div class='error'><span>ERROR: </span>" .$_GET['msg']. "</div>";
                                } ?>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Login">
                            </div>

                            <div class="form-group already">
                                <p>Dont have a account? <a href="<?php echo $base_url; ?>/register/register.php">Register here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>