<?php include 'layout-header.php'; ?>


<main class="main bg-light">

    <div class="container-sm container-admin">

        <div class="co-page-content py-5 ">

            <h3 class="mb-4 text-center"> Change password </h3>

            <div class="row">

                <div class="col-md-12 mb-3">

                    <div class="form-group mb-2">
                        <label for="name"> Old password </label>
                        <input type="text" class="form-control" id="name" placeholder="New password" value="">
                    </div><!-- form-group -->

                </div> <!-- col-md-12 -->

                <div class="col-md-12 mb-3">

                    <div class="form-group mb-2">
                        <label for="name"> New password </label>
                        <input type="text" class="form-control" id="name" placeholder="Old password" value="">
                    </div><!-- form-group -->

                </div> <!-- col-md-12 -->

            </div> <!-- row -->


            <div class="text-center">
                <a href="#" class="btn btn--primary d-block"> Save </a>
            </div>


        </div><!-- co-page-content -->

    </div> <!-- container -->
</main>


<?php include 'layout-footer.php'; ?>