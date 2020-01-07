<?php require_once("public/page-parts/site-header.php") ?>
<?php require_once("public/page-parts/sidebar.php") ?>
<?php require_once("public/page-parts/navbar.php") ?>
<div class="container mt-2" id="topBanner">
  <div class="row">
    <div class="col-md-12 reset-padding " style="">
      <div class="row mt-3">
        <div class="col-md-3 desktop-side-link">
            <div class="bg-white p-3 products-spec">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="bold">Brand</label>
                    <select class="form-control">
                    <option>Select Brand</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="bold">Model</label>
                    <select class="form-control">
                    <option>Select Model</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="bold">Condition</label>
                    <select class="form-control">
                    <option>Select Condition</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="bold">RAM</label>
                    <select class="form-control">
                    <option>Select RAM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="bold">Storage Capacity</label>
                    <select class="form-control">
                    <option>Select Storage Capacity</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="bold">Screen Size</label>
                    <select class="form-control">
                    <option>Select Screen Size</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="bold">Colour</label>
                    <select class="form-control">
                    <option>Select Colour</option>
                    </select>
                </div>
          </div>
        </div>
        <div class="col-md-9 reset-padding">
          <div class="col-sm-12 ">
            <ul class="list-group">
<?php
$rs = json_decode($data['response']['data'], true);

// echo "<pre>";

// var_dump($rs);
// echo "</pre>";


if ($rs == NULL) {
?>
                <li class="list-group-item mb-4">
                    
                        <div class="media align-items-lg-center flex-column flex-lg-row">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2 text-center">You have no buy order</h5>
                                <p class="font-italic text-muted mb-0 text-center">Please add a buy order</p>
                                
                            </div>
                        </div>
                    
                </li> 
<?php
} else {
    
    foreach ($rs as $key => $value) {
        $id = $value['id'];
        $walletId = $value['walletId'];
        $is_lock = $value['is_lock'];
        $brand = $value['brand'];
        $d_condition = $value['d_condition'];
        $storage_capacity = $value['storage_capacity'];
        $screen_size = $value['screen_size'];
        $selfie_camera = $value['selfie_camera'];
        $main_camera = $value['main_camera'];
        $model = $value['model'];
        $ram = $value['ram'];
        $colour = $value['colour'];
        $operaing_system = $value['operaing_system'];
        $sim = $value['sim'];
        $card_slot = $value['card_slot'];
        $battery = $value['battery'];
        $description = $value['description'];
        $img = $value['img'];
        $slug = $value['slug'];
        $price = $value['price'];

        // echo $walletId;
     
        $phone_name = $brand." ".$model;

?>

                <li class="list-group-item mb-4 products-items">
                    
                    <a href="/phone_item/<?php echo $slug; ?>">
                        <div class="media align-items-lg-center flex-column flex-lg-row">
                            <img src="/public/static/phones/<?php echo $img; ?>" alt="Generic placeholder image" width="100" class="mr-3 order-lg-1">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2"><?php echo $phone_name; ?> (<?php echo $colour.", ".$storage_capacity; ?>)</h5>
                                <p class="font-italic text-muted mb-0 "><?php echo $storage_capacity; ?> ROM | <?php echo $screen_size; ?> Display <?php echo $main_camera; ?> Rear Camera | <?php echo $selfie_camera; ?> Front Camera A12 Bionic Chip Processor</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">&#8358;<?php echo $price ?></h6>
                                    <!-- <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </a> 
                    
                </li> 

<?php
     
    }

}
?>

            </ul> 
          </div>
        </div>
      </div>
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mb-5">
            <li class="page-item">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Next</a>
            </li>
        </ul>
        </nav>
    </div>
  </div>
</div>

  
<?php require_once("public/page-parts/site-footer.php") ?>