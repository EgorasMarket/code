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
                    <form id="form">
                        <div class="send-wrap ">
                            <input type="hidden" id="slug" name="slug" value="<?php echo $data; ?>">
                            <textarea class="form-control send-message" id="disputeMessage"  name="disputeMessage" rows="3" placeholder="Write your message here..."></textarea>
                        </div>
                        <div class="btn-panel mb-3">
                            <!-- <a href="" class=" col-lg-3 btn send-message-btn " role="button"><i class="fas fa-cloud-upload-alt"></i> Add Files</a> -->
                            <input type="file" name="file" class="form-control-file col-lg-3 btn" id="img">
                            <button class=" col-lg-6 btn send-message-btn " type="submit"><i class="fa fa-plus"></i> Send Message</button>
                            <!-- <button class=" col-lg-4 text-right btn send-message-btn right" role="button"><i class="fa fa-plus"></i> Send Message</button> -->
                        </div>
                    </form>
                    <div class="row ">
                        <!-- <div class="col-md-6">
                            <button type="button" class="btn btn-outline-orange btn-block">Report Transaction</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-outline-orange btn-block">Cancel Transaction</button>
                        </div> -->

                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="row">

                        <div class="message-wrap col-lg-12">
                            <div class="msg-wrap" id="disputemsg">
                                
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
<script src="/public/static/js/lacalstorage.js"></script>
<script src="/public/static/js/submit-dispute.js"></script>
<script src="/public/static/js/supply-dispute.js"></script>

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