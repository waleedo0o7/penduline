<?php include 'layout-header.php'; ?>


<main class="main bg-light">

    <div class="container-sm container-admin">

        <div class="co-page-content py-5 ">

            <h3 class="mb-4 text-center"> Add New Address </h3>

            <div class="row">

                <div class="col-md-12 mb-3">

                    <div class="form-group mb-2">
                        <label for="name"> Address Name </label>
                        <input type="text" class="form-control" id="name" placeholder="Address Name" value="">
                    </div><!-- form-group -->

                </div> <!-- col-md-12 -->

                <div class="col-md-12 mb-3">

                    <div class="form-group mb-2">
                        <label for="name"> Full Address </label>
                        <textarea type="text" class="form-control" id="name" placeholder="Full Address" rows="7" value=""></textarea>
                    </div><!-- form-group -->

                </div> <!-- col-md-12 -->

            </div> <!-- row -->

            <div class="text-center">
                <a href="view-cpanel-my-delivery-address.php" class="btn btn--primary d-block"> Save </a>
            </div>

        </div><!-- co-page-content -->

    </div> <!-- container -->
</main>


<?php include 'layout-footer.php'; ?>