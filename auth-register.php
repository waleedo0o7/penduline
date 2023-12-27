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

                        <div class="col-md-6">
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

                            <div class="form-group mb-0 relative">
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

                    <div class="d-flex mb-2">
                        <button type="submit" class=" btn btn--primary "> انشاء حساب </button>
                    </div>


                    <div class="d-flex">
                        <p> لديك حساب بالفعل ؟ <a href="auth-signin.php" class="btn btn-link p-2"> تسجيل الدخول </a> </p>
                    </div>

                </form>

            </div><!-- form-wrapper -->

        </div><!-- co-page-content -->

    </div> <!-- container -->
</main>


<?php include 'layout-footer.php'; ?>