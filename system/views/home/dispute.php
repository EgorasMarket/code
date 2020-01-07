<?php require_once("public/page-parts/site-header.php") ?>
<?php require_once("public/page-parts/wallet-cookie.php") ?>
<?php require_once("public/page-parts/sidebar.php") ?>
<?php require_once("public/page-parts/navbar.php") ?>
<div class="container mt-2" id="topBanner">
    <div class="row">
        <div class="col-md-12" style="">
            <div class="text-center mt-2">
                <h3>We're waiting for your phone, <span id="user_name"></span></h3>
                <p>To unlock your funds ensure you send phone to the delivery location below.</p>
            </div>


            <?php
            // var_dump($data);
            $current_date = date("Y-m-d");

            ?>

            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="send-wrap ">
                        <textarea class="form-control send-message" rows="3" placeholder="Write your message here..."></textarea>
                    </div>
                    <div class="btn-panel mb-3">
                        <a href="" class=" col-lg-3 btn send-message-btn " role="button"><i class="fas fa-cloud-upload-alt"></i> Add Files</a>
                        <a href="" class=" col-lg-4 text-right btn send-message-btn right" role="button"><i class="fa fa-plus"></i> Send Message</a>
                    </div>
                    <div class="row ">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-outline-orange btn-block">Report Transaction</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-outline-orange btn-block">Cancel Transaction</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="row">

                        <div class="message-wrap col-lg-12">
                            <div class="msg-wrap">


                                <div class="media msg ">
                                    <a class="pull-left" href="#">
                                        <img class="media-object mt-2 mr-2" data-src="holder.js/64x64" alt="64x64" style="width: 35px; height: 35px;" src="/public/static/assets/company/user.png">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>
                                        <h5 class="media-heading">Naimish Sakhpara</h5>
                                        <small class="col-lg-10">Location H-2, Ayojan Nagar, Near Gate-3, Near
                                            Shreyas Crossing Dharnidhar Derasar,
                                            Paldi, Ahmedabad 380007, Ahmedabad,
                                            India
                                            Phone 091 37 669307
                                            Email aapamdavad.district@gmail.com</small>
                                    </div>
                                </div>
                                <div class="media msg">
                                    <a class="pull-left" href="#">
                                        <img class="media-object mt-2 mr-2" data-src="holder.js/64x64" alt="64x64" style="width: 35px; height: 35px;" src="/public/static/assets/company/user.png">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>

                                        <h5 class="media-heading">Naimish Sakhpara</h5>
                                        <small class="col-lg-10">Arnab Goswami: "Some people close to Congress Party and close to the government had a #secret #meeting in a farmhouse in Maharashtra in which Anna Hazare send some representatives and they had a meeting in the discussed how to go about this all fast and how eventually this will end."</small>
                                    </div>
                                </div>
                                <div class="media msg">
                                    <a class="pull-left" href="#">
                                        <img class="media-object mt-2 mr-2" data-src="holder.js/64x64" alt="64x64" style="width: 35px; height: 35px;" src="/public/static/assets/company/user.png">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>

                                        <h5 class="media-heading">Naimish Sakhpara</h5>
                                        <small class="col-lg-10">Arnab Goswami: "Some people close to Congress Party and close to the government had a #secret #meeting in a farmhouse in Maharashtra in which Anna Hazare send some representatives and they had a meeting in the discussed how to go about this all fast and how eventually this will end."</small>
                                    </div>
                                </div>

                                <div class="media msg">
                                    <a class="pull-left" href="#">
                                        <img class="media-object mt-2 mr-2" data-src="holder.js/64x64" alt="64x64" style="width: 35px; height: 35px;" src="/public/static/assets/company/user.png">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>
                                        <h5 class="media-heading">Naimish Sakhpara</h5>

                                        <small class="col-lg-10">Arnab Goswami: "Some people close to Congress Party and close to the government had a #secret #meeting in a farmhouse in Maharashtra in which Anna Hazare send some representatives and they had a meeting in the discussed how to go about this all fast and how eventually this will end."</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once("public/page-parts/site-footer.php") ?>
<script src="/public/static/js/account-details.js"></script>

<script>
    $(document).ready(function() {
        let retrievedObject = JSON.parse(JSON.parse((localStorage.getItem('phoneObject'))));

        $("#nameOfProduct").html(retrievedObject.brand + " " + retrievedObject.model + " " + retrievedObject.screen_size);
        $("#storageOfProduct").html("(" + retrievedObject.ram + " RAM , " + retrievedObject.storage_capacity + " ROM ) (" + retrievedObject.selfie_camera + " +" + retrievedObject.main_camera + ")");
        $("#subTotalPrice").html(retrievedObject.price);
        $("#totalPrice").html(retrievedObject.price);
        $("#address").html(retrievedObject.address);
        $("#state_o").html(retrievedObject.lister_state);
        // console.log(retrievedObject);

    });
    // Retrieve the object from storage
</script>