<?php include 'layout-header.php'; ?>


<main class="main bg-light">

    <div class="container-sm pt-5">

        <div class="co-page-content card p-4">

            <div class="title-wrapper text-center mb-4 ">
                <h2 class="title bold"> تسجيل دخول </h2>
            </div>

            <div class="form-wrapper register">

                <form>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label for="email"> البريد الإلكتروني </label>
                                <input type="text" class="form-control" id="email" placeholder=" البريد الإلكتروني  ">
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->



                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label for="date"> كلمة المرور </label>
                                <input type="password" class="form-control" id="date" placeholder="   كلمة المرور      ">
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->



                    </div> <!-- row -->

                    <div class="text-center mb-4">
                        <a href="view-cpanel-dashbaord.php" class="btn btn--primary w-75 "> دخول </a>
                    </div>

                    <div class="text-center">

                        <p class="color-gray mb-2"> او يمكنك الدخول من خلال </p>

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

                        <p> ليس لديك اي حساب ؟ <a href="view-auth-register.php" class="btn-link"> تسجيل حساب جديد </a> </p>

                    </div> <!-- col-md-12 -->



                </form>

            </div><!-- form-wrapper -->

        </div><!-- co-page-content -->

    </div> <!-- container -->
</main>


<?php include 'layout-footer.php'; ?>