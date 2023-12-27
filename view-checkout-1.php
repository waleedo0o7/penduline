<?php include 'layout-header.php'; ?>


<main class="main bg-light">

    <div class="container">

        <div class="co-page-content">




            <div class="row">

                <div class="col-md-7">

                    <div class="py-5">

                        <div class="co-cart-header">
                            <h3 class="mb-4"> تفاصيل التوصيل </h3>
                        </div>

                        <div class="form-wrapper">

                            <form>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="name"> الاسم بالكامل </label>
                                            <input type="text" class="form-control" id="name" placeholder=" الاسم  بالكامل  ">
                                        </div><!-- form-group -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="phone"> رقم الجوال </label>
                                            <input type="text" class="form-control " id="phone" placeholder="   رقم الجوال      ">
                                        </div><!-- form-group -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="address"> العنوان </label>
                                            <textarea rows="7" class="form-control" id="address" placeholder="   العنوان"> </textarea>
                                        </div><!-- form-group -->
                                    </div>
                                </div>
                            </form>
                        </div><!-- form-wrapper -->

                    </div> <!-- co-cart -->
                </div> <!-- col-md -->
                <div class="col-md-5">

                    <div class="co-order-pref p-5">

                        <div class="co-cart-header">
                            <h3 class="mb-4"> ملخص الطلب </h3>
                        </div>


                        <div class="checkout-pref mb-5">

                            <p class="d-flex justify-content-between align-items-center mb-2"> <strong> المجموع الفرعي (2 منتج) </strong> <span class="bold"> 98 جنية </span> </p>
                            <p class="d-flex justify-content-between align-items-center mb-2"> <strong> المبلغ الخصم والكاش باك </strong> <span class=" bold"> 98 جنية </span> </p>
                            <p class="d-flex justify-content-between align-items-center mb-2"> <strong> التوصيل العادي </strong> <span class=" bold"> 98 جنية </span> </p>
                            <p class="d-flex justify-content-between align-items-center mb-2"> <strong> التوصيل العادي </strong> <span class="color-success bold"> مجانا </span> </p>

                            <hr>

                            <div class="checkout-total-wrapper">

                                <div class="checkout-total">

                                    <p class="lead mb-1"> الإجمالي <small> ( يشمل ضريبة القيمة المضافة ) </small></p>

                                    <div class="price">
                                        <p class="current-price"> 500 جنية </p>
                                        <div class="discount">
                                            <p class="old-price"> 800 جنية </p>
                                        </div><!-- discount -->
                                    </div>

                                </div><!-- checkout-total -->

                            </div><!-- checkout-total -->

                        </div> <!-- checkout-pref -->


                        <div class="d-flex">
                            <a href="view-order-successful.php" class="btn btn--secondary w-75 m-auto"> شراء الأن </a>
                        </div>


                    </div> <!-- co-order-pref -->
                </div> <!-- col-md -->

            </div>




        </div><!-- co-page-content -->

    </div> <!-- container -->
</main>


<?php include 'layout-footer.php'; ?>