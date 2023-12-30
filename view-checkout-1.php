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



                                <div class="card all-addresses mb-4 p-3">

                                    <p class="lead mb-2 d-flex justify-content-between align-items-center mb-3"> <span> العنوان : </span> <a href="#" class="btn btn--secondary "> اضافة </a> </p>

                                    <div class="one-address">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="option-container mb-1">
                                                <input type="radio" checked="checked" name="address" value="1">
                                                <span class="checkmark"></span>
                                                <p class="lead mb-0"> عنوان المنزل </p>
                                            </label>
                                            <a class="btn btn-danger   btn-action" href="#"> <i class="icon icon-trash"></i> </a>
                                            <a class="btn btn-primary  btn-action mr-2" href="#"> <i class="fa fa-pen"></i> </a>
                                        </div> <!-- d-flex -->
                                        <p> 5 شارع الازهر - سيدي بشر - الاسكندرية </p>
                                    </div><!-- one-address -->


                                    <div class="one-address">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="option-container mb-1">
                                                <input type="radio" name="address" value="1">
                                                <span class="checkmark"></span>
                                                <p class="lead mb-0"> عنوان العمل </p>
                                            </label>
                                            <a class="btn btn-danger  btn-action" href="#"> <i class="icon icon-trash"></i> </a>
                                            <a class="btn btn-primary btn-action mr-2" href="#"> <i class="fa fa-pen"></i> </a>
                                        </div> <!-- d-flex -->
                                        <p> 5 شارع الازهر - سيدي بشر  </p>
                                    </div><!-- one-address -->


                                    

                                </div> <!-- all-addresses -->




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