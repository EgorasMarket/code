<?php require_once("public/page-parts/site-header.php") ?>
<?php require_once("public/page-parts/sidebar.php") ?>
<?php require_once("public/page-parts/navbar.php") ?>
    
    <form  id="form" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label  class="font-weight-bold">Brand</label>
          <select class="form-control" id="brand" name="brand">
            
        </select>
        </div>
        

        <div class="form-group">
            <input type="text" class="form-control" name="model" placeholder="Model" id="">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="OS" placeholder="Operating system" id="">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="sim" placeholder="Sim" id="">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="card_slot" placeholder="SD card slot" id="">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="main_cam" placeholder="Rear camera" id="">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="selfie_cam" placeholder="Selfie camera" id="">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="battery" placeholder="Battery capacity" id="">
        </div>
        <input type="submit" class="btn btn-orange" value="Submit">
    </form>

<?php require_once("public/page-parts/site-footer.php") ?>
<script src="/public/static/js/new-model.js"></script>
<script src="/public/static/js/use-phonedetails.js"></script>