<?php include 'layout-header.php'; ?>


<main class="main bg-light">

    <div class="container-sm container-admin">

        <div class="co-page-content py-5 ">

            <h3 class="mb-4 text-center"> My Orders </h3>


            <div class="co-orders">

                <div href="#" class="order">
                    <div class="co-label">
                        <p class="label delivered"> تم التوصيل </p>
                    </div>
                    <div class="order-details">
                        <img src="other/img/products/xyz-001.jpg" class="order-image img-fluid " alt="">
                        <p class="lead m-0"> كريم مرطب بندولين للوجه والجسم </p>
                    </div>
                    <div class="order-actions">
                        <a class="btn btn-primary btn-action" href="view-cpanel-my-orders-order-details.php"> <i class="fa fa-eye"></i> </a>
                    </div><!-- order-actions -->
                </div><!-- order -->


                <div href="#" class="order">
                    <div class="co-label">
                        <p class="label in-progress"> في الطريق </p>
                    </div>
                    <div class="order-details">
                        <img src="other/img/products/xyz-001.jpg" class="order-image img-fluid " alt="">
                        <p class="lead m-0"> كريم مرطب بندولين للوجه والجسم </p>
                    </div>
                    <div class="order-actions">
                        <a class="btn btn-primary btn-action" href="view-cpanel-my-orders-order-details.php"> <i class="fa fa-eye"></i> </a>
                    </div><!-- order-actions -->
                </div><!-- order -->

            </div><!-- co-orders -->

        </div><!-- co-page-content -->

    </div> <!-- container -->
</main>


<?php include 'layout-footer.php'; ?>