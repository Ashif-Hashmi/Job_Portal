<?php
include 'include/header.php';
?>

    <section class="w3l-inner-banner">
        <div class="wrapper">
        </div>
    </section>
    <!-- w3l-forms-31 -->
    <section class="w3l-forms-31">
        <div id="w3l-forms-31_sur">
            <div class="wrapper">
                <div class="d-grid">
                    <div class="w3l-forms-31-top">
                        <h4>Using social accounts</h4>
                        <p>Donec sed tempus enim, a congue risus. euismod massa a quam viverra interdum.</p>
                        <form action="#" method="post" class="signin-form">
                            <div class="form-input">
                                <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span> Signin with
                                    facebook</a>
                            </div>
                            <div class="form-input">
                                <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span> Signin with
                                    linkedin</a>
                            </div>
                            <div class="form-input">
                                <a href="#google-plus" class="google"><span class="fa fa-google-plus"></span> Signin
                                    with google</a>
                            </div>
                            <p class="no-margin"> Click “Login” to accept our Terms of Service & Privacy Policy.</p>
                        </form>
                    </div>
                    <div class="w3l-forms-31-right">
                        <h4>Login using email</h4>
                        <form action="Crud_register.php" method="post" class="login-form">
                            <div class="form-input">
                                <input type="email" name="Email" placeholder="Enter your email" required="" />
                            </div>
                            <div class="form-input">
                                <input type="password" name="Password" placeholder="Enter your password" required="" />
                            </div>
                            <a href="#url" class="forgot">forgot password? </a>
                            <button type="submit" name="insert" class="btn">Login </button>
                            <div class="clear"></div>
                            <p class="form_acunt text-center">Don't have an account? <a href="signup.php">Sign up
                                    now</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- w3l-forms-31 -->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <?php
include 'include/footer.php';
?>