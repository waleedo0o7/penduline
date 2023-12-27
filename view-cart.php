<?php include 'layout-header.php'; ?>


<main class="main bg-light">

    <div class="container">

        <div class="co-page-content">

            <div class="row">

                <div class="col-md-7">
                    <div class="co-cart py-5">

                        <div class="co-cart-header">
                            <h3 class="mb-4"> عربة التسوق </h3>
                        </div>

                        <div class="co-how-to-deliver bg-white card p-4 mb-3">

                            <p> كيف تريد استلام طلب ؟ </p>

                            <div class="form-inline">

                                <div class="option">
                                    <label class="option-container">
                                        <input type="radio" checked="checked" name="target-gender" value="1">
                                        <span class="checkmark"></span>
                                        توصيل منزلي
                                    </label>
                                </div><!-- option -->

                                <div class="option">
                                    <label class="option-container">
                                        <input type="radio" name="target-gender" value="1">
                                        <span class="checkmark"></span>
                                        توصيل من الفرع
                                    </label>
                                </div><!-- option -->

                                <div class="option">
                                    <label class="option-container">
                                        <input type="radio" name="target-gender" value="1">
                                        <span class="checkmark"></span>
                                        توصيل سريع
                                    </label>
                                </div><!-- option -->

                            </div> <!-- form-inline -->

                        </div><!-- co-how-to-deliver -->


                        <div class="co-cart-items">

                            <div class="co-cart-item bg-white card p-4 mb-3">
                                <div class="co-cart-item-header d-flex justify-content-between align-items-center">
                                    <a href="view-products-details.php" class="mb-3"> بندولين كريم للشعر </a>
                                    <a href="#" class="co-action">
                                        <i class="icon icon-lg icon-trash color-danger"></i>
                                    </a>
                                </div><!-- co-cart-item-header -->

                                <div class="co-cart-item-details w-100">


                                    <div class="row w-100">
                                        <div class="col-md-6">

                                            <div class="co-item-select-and-offer">

                                                <div class="co-select">
                                                    <select class="select">
                                                        <option value="0"> 000 </option>
                                                        <option value="0"> 2 </option>
                                                        <option value="0"> 3 </option>
                                                        <option value="0"> 4 </option>
                                                    </select>
                                                </div>

                                                <div class="co-product-current-price">
                                                    <p class="current-price mb-0 lead bold"> $199 </p>
                                                </div><!-- co-product-current-price -->

                                                <div class="co-product-old-price">
                                                    <p class="old-price mb-0"> 250 $ </p>
                                                </div><!-- co-product-current-price -->

                                                <div class="co-product-offer">
                                                    <div class="colored-label label-primary label-md">
                                                        خصم 20%
                                                    </div>
                                                </div>

                                            </div> <!-- co-item-select-and-offer -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-inline-flex align-items-center">

                                                <i class="me-2 icon icon-xl icon-availability"></i>

                                                <p class="mb-0"> سيتم توصيل المنتج في خلال من يومان الي اربع ايام عمل </p>

                                            </div>

                                        </div>
                                    </div>




                                </div><!-- co-cart-item-details -->

                            </div> <!-- co-cart-item -->


                            <div class="co-cart-item bg-white card p-4 mb-3">
                                <div class="co-cart-item-header d-flex justify-content-between align-items-center">
                                    <a href="view-products-details.php" class="mb-3"> بندولين كريم للشعر </a>
                                    <a href="#" class="co-action">
                                        <i class="icon icon-lg icon-trash color-danger"></i>
                                    </a>
                                </div><!-- co-cart-item-header -->

                                <div class="co-cart-item-details w-100">


                                    <div class="row w-100">
                                        <div class="col-md-6">

                                            <div class="co-item-select-and-offer">

                                                <div class="co-select">
                                                    <select class="select">
                                                        <option value="0"> 1111 </option>
                                                        <option value="0"> 2 </option>
                                                        <option value="0"> 3 </option>
                                                        <option value="0"> 4 </option>
                                                    </select>
                                                </div>

                                                <div class="co-product-current-price">
                                                    <p class="current-price mb-0 lead bold"> $199 </p>
                                                </div><!-- co-product-current-price -->

                                                <div class="co-product-old-price">
                                                    <p class="old-price mb-0"> 250 $ </p>
                                                </div><!-- co-product-current-price -->

                                                <div class="co-product-offer">
                                                    <div class="colored-label label-primary label-md">
                                                        خصم 20%
                                                    </div>
                                                </div>

                                            </div> <!-- co-item-select-and-offer -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-inline-flex align-items-center">

                                                <i class="me-2 icon icon-xl icon-availability"></i>

                                                <p class="mb-0"> سيتم توصيل المنتج في خلال من يومان الي اربع ايام عمل </p>

                                            </div>

                                        </div>
                                    </div>




                                </div><!-- co-cart-item-details -->

                            </div> <!-- co-cart-item -->






                        </div><!-- co-cart-items -->

                    </div> <!-- co-cart -->
                </div> <!-- col-->


                <div class="col-md-5">
                    <div class="co-order-pref p-5">

                        <div class="co-cart-header">
                            <h3 class="mb-4"> ملخص الطلب </h3>
                        </div>

                        <div class="form-group mb-4">
                            <label class="bold" for="name"> كود الخصم </label>
                            <div class="input-with-submit-button">
                                <input type="text" class="form-control" id="name" placeholder=" ادخل كود الخصم">
                                <a href="#" class="btn btn-link"> تطبيق </a>
                            </div>
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
                            <a href="view-checkout-1.php" class="btn btn--secondary w-75 m-auto"> شراء الأن </a>
                        </div>


                    </div> <!-- co-order-pref -->
                </div> <!-- col-->


            </div>




        </div><!-- co-page-content -->

    </div> <!-- container -->
</main>


<?php include 'layout-footer.php'; ?>