<?php include 'layout-header.php'; ?>


<main class="main bg-light">

    <div class="container-sm container-admin">

        <div class="co-page-content py-5 ">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="mb-0 text-center"> My delivery address </h3>
                <a href="view-cpanel-my-delivery-address-add.php" class="btn btn--secondary "> Add new address</a>
            </div>

            <div class="all-addresses mb-4">

                <div class="card one-address p-3 mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <label class="option-container mb-1">
                            <input type="radio" checked="checked" name="address" value="1">
                            <span class="checkmark"></span>
                            <p class="lead mb-0"> عنوان المنزل </p>
                        </label>
                        <a class="btn btn-danger   btn-action me-2" href="#"> <i class="icon icon-trash"></i> </a>
                        <a class="btn btn-primary  btn-action" href="#"> <i class="fa fa-pen"></i> </a>
                    </div> <!-- d-flex -->
                    <p> 5 شارع الازهر - سيدي بشر - الاسكندرية </p>
                </div><!-- one-address -->

                <div class="card one-address p-3 mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <label class="option-container mb-1">
                            <input type="radio" name="address" value="1">
                            <span class="checkmark"></span>
                            <p class="lead mb-0"> عنوان المنزل </p>
                        </label>
                        <a class="btn btn-danger   btn-action me-2" href="#"> <i class="icon icon-trash"></i> </a>
                        <a class="btn btn-primary  btn-action" href="#"> <i class="fa fa-pen"></i> </a>
                    </div> <!-- d-flex -->
                    <p> 5 شارع الازهر - سيدي بشر - الاسكندرية </p>
                </div><!-- one-address -->

            </div> <!-- all-addresses -->

        </div><!-- co-page-content -->

    </div> <!-- container -->

</main>


<?php include 'layout-footer.php'; ?>