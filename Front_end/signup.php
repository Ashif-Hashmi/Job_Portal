<?php
include 'include/header.php';
?>

    <section class="w3l-inner-banner">
        <div class="wrapper">
        </div>
    </section>

    <section class="w3l-price-2 register-block">
        <div class="price-main register-block-main">
            <div class="wrapper">
                            
                            <form action="Crud_register.php" method="post" class="register-form">
                                <div class="form-input">
                                    <label>Your Full Name</label>
                                    <input type="text" name="Name" placeholder="Enter your name" required="" />
                                </div>
                                <div class="form-input">
                                    <label>Email Address</label>
                                    <input type="email" name="Email" placeholder="Enter your email" required="" />
                                </div>
                                <div class="form-input">
                                    <label>Mobile Number</label>
                                    <div class="p-relative">
                                        <span class="p-absolute"> 91</span>
                                        <input type="number" name="Phone" placeholder="Mobile number" required="" />
                                    </div>
                                </div>
                               
                                <div class="form-input">
                                    <label>Create Password</label>
                                    <input type="password" name="Password" placeholder="Minimum 6 characters"
                                        required="" />
                                </div>
                                 <button type="submit" name="btnlogin1" class="btn">Register now </button>
                              
                            </form>
                        </div>
                    </div>
    </section>

    <script>
        var e = document.getElementById("filt-monthly"),
            d = document.getElementById("filt-hourly"),
            t = document.getElementById("switcher"),
            m = document.getElementById("monthly"),
            y = document.getElementById("hourly");

        e.addEventListener("click", function () {
            t.checked = false;
            e.classList.add("toggler--is-active");
            d.classList.remove("toggler--is-active");
            m.classList.remove("hide");
            y.classList.add("hide");
        });

        d.addEventListener("click", function () {
            t.checked = true;
            d.classList.add("toggler--is-active");
            e.classList.remove("toggler--is-active");
            m.classList.add("hide");
            y.classList.remove("hide");
        });

        t.addEventListener("click", function () {
            d.classList.toggle("toggler--is-active");
            e.classList.toggle("toggler--is-active");
            m.classList.toggle("hide");
            y.classList.toggle("hide");
        })
    </script>
    <script src="../assets/js/jquery-3.3.1.min.html"></script>


    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <?php
include 'include/footer.php';
?>