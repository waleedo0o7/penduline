<?php include 'layout-header.php'; ?>


<main class="main bg-light">

    <div class="container-sm pt-5">

        <div class="co-page-content card p-4">

            <div class="title-wrapper text-center mb-4 ">
                <h2 class="title bold"> تسجيل حساب جديد </h2>
            </div>

            <div class="form-wrapper register">

                <form>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label for="username"> الاسم </label>
                                <input type="text" class="form-control" id="username" placeholder=" اسم المستخدم ">
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="email"> البريد الإلكتروني </label>
                                <input type="text" class="form-control" id="email" placeholder=" البريد الإلكتروني  ">
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="date"> رقم الجوال </label>
                                <input type="text" class="form-control" id=" " placeholder=" رقم الجوال  ">
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="date"> تاريخ الميلاد </label>
                                <input type="text" class="form-control" id=" " placeholder="  تاريخ الميلاد   ">
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="date"> كلمة المرور </label>
                                <input type="password" class="form-control" id="date" placeholder="   كلمة المرور      ">
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="date"> تأكيد كلمة المرور </label>
                                <input type="password" class="form-control" id="date" placeholder="  تأكيد كلمة المرور     ">
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">

                            <div class="form-group mt-2 mb-0 relative">
                                <label class="text-left"> Gender </label>



                                <div class="d-flex">
                                    <div class="option mr-4">
                                        <label class="option-container">
                                            <input type="radio" checked="checked" name="target-gender" value="1">
                                            <span class="checkmark"></span>
                                            Male
                                        </label>
                                    </div><!-- option -->


                                    <div class="option mr-4">
                                        <label class="option-container">
                                            <input type="radio" name="target-gender" value="1">
                                            <span class="checkmark"></span>
                                            female
                                        </label>
                                    </div><!-- option -->

                                </div><!-- inline-items -->

                            </div><!-- form-group  -->

                        </div> <!-- col-md-6 -->


                    </div> <!-- row -->


                    <div class="text-center mb-4">
                        <a href="view-cpanel-dashbaord.php" class="btn btn--primary w-75 "> انشاء حساب </a>
                    </div>

                    <div class="text-center">

                        <p class="color-gray mb-2"> او يمكنك تسجيل حساب جديد من خلال </p>

                        <ul class="co-social-links reset-list co-social-links--primary justify-content-center mb-3">
                            <li class="co-social-links__item">
                                <a href="https://www.facebook.com" target="_blank" aria-label="facebook">
                                    <i class="icon icon-facebook"></i>
                                </a>
                            </li>
                            <li class="co-social-links__item">
                                <a href="https://www.twitter.com" target="_blank" aria-label="twitter">
                                    <i class="icon icon-google"></i>
                                </a>
                            </li>
                            <li class="co-social-links__item">
                                <a href="https://www.instagram.com" target="_blank" aria-label="instagram">
                                    <i class="icon icon-twitter-1"></i>
                                </a>
                            </li>
                        </ul>

                        <hr>

                        <p> لديك حساب بالفعل ؟ <a href="view-auth-login.php" class="btn-link"> تسجيل دخول </a> </p>

                    </div> <!-- col-md-12 -->

                </form>

            </div><!-- form-wrapper -->

        </div><!-- co-page-content -->

    </div> <!-- container -->
</main>


<?php include 'layout-footer.php'; ?>