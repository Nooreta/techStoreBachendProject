
<?php 
require_once("inc/header.php");
use techStore\clases\Models\product;
use techStore\clases\Models\Cat;
use techStore\clases\Models\order;
$pr=new product;
$prodCount=$pr->getCount();
// echo $prodCount;

$cat=new Cat;
$catCount=$cat->getCount();
// echo $catCount;

$order=new order;
$orderCount=$order->getCount();
// echo $orderCount;


?>
    <div class="container py-5">
        <div class="row">

            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5><?= $prodCount ?></h5>
                          <a href="<?= AURL  ?>products.php" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5><?= $catCount  ?></h5>
                          <a href="#" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Orders</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5><?= $orderCount  ?></h5>
                          <a href="#" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
   
<?php 
require_once("inc/footer.php");
?>
