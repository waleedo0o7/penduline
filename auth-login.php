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

                    <div class="d-flex mb-2">
                        <button type="submit" class=" btn btn--primary "> دخول </button>
                    </div>


                    <div class="d-flex">
                        <p> ليس لديك حساب؟ <a href="auth-signin.php" class="btn btn-link p-2"> تسجيل حساب جديد </a> </p>
                    </div>

                </form>

            </div><!-- form-wrapper -->

        </div><!-- co-page-content -->

    </div> <!-- container -->
</main>


<?php include 'layout-footer.php'; ?>