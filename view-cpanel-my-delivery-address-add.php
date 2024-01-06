<?php include 'layout-header.php'; ?>


<main class="main bg-light">

    <div class="container-sm container-admin pt-5">

        <div class="co-page-content card  p-4">

            <h3 class="mb-4 text-center"> Add New Address </h3>

            <div class="form-group mb-3">

                <p> Address type</p>



                <div class="d-flex">
                    <div class="option mr-4">
                        <label class="option-container">
                            <input type="radio" checked="checked" name="target-gender" value="1">
                            <span class="checkmark"></span>
                            Apartment
                        </label>
                    </div><!-- option -->


                    <div class="option mr-4">
                        <label class="option-container">
                            <input type="radio" name="target-gender" value="1">
                            <span class="checkmark"></span>
                            House
                        </label>
                    </div><!-- option -->


                    <div class="option mr-4">
                        <label class="option-container">
                            <input type="radio" name="target-gender" value="1">
                            <span class="checkmark"></span>
                            Office
                        </label>
                    </div><!-- option -->

                </div><!-- inline-items -->


            </div>

            <div class="form-group mb-3">
                <label> Address name (Optional) </label>
                <input type="text" class="form-control" required="">
            </div>

            <div class="form-group mb-3">
                <label> Area </label>
                <input type="text" class="form-control" required="">
            </div>

            <div class="form-group mb-3">
                <label> Block </label>
                <input type="text" class="form-control" required="">
            </div>

            <div class="d-flex inline-inputs-group">

                <div class="form-group mb-3 w-100 me-3">
                    <label> Street </label>
                    <input type="text" class="form-control" required="">
                </div>


                <div class="form-group mb-3 w-100 me-3">
                    <label> Avenue (Optional) </label>
                    <input type="text" class="form-control" required="">
                </div>


                <div class="form-group mb-3 w-100">
                    <label> Building N </label>
                    <input type="text" class="form-control" required="">
                </div>

            </div>

            <div class="d-flex inline-inputs-group">

                <div class="form-group mb-3 w-100 me-3">
                    <label> Floor N </label>
                    <input type="text" class="form-control" required="">
                </div>


                <div class="form-group mb-3 w-100">
                    <label> Apartment N </label>
                    <input type="text" class="form-control" required="">
                </div>

            </div>

            <div class="form-group mb-3 w-100">
                <label> Additional Instructions (Optional) </label>
                <textarea type="text" class="form-control" id="name" placeholder="Full Address" rows="7" value=""></textarea>
            </div>

            <div class="form-check form-switch mb-4 ">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault"> Leave order at the door </label>
            </div>


            <div class="text-center">
                <a href="view-cpanel-my-delivery-address.php" class="btn btn--primary d-block"> Save </a>
            </div>

        </div><!-- co-page-content -->

    </div> <!-- container -->
</main>
 

<?php include 'layout-footer.php'; ?>