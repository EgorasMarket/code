<?php require_once("public/page-parts/site-header.php") ?>
<?php require_once("public/page-parts/wallet-cookie.php") ?>
<?php require_once("public/page-parts/sidebar.php") ?>
<?php require_once("public/page-parts/navbar.php") ?>
<div class="container-fluid mt-2" id="topBanner">
    <?php

    // var_dump($data);

    // $id = $data['id'];

    $first_name = "Enter first name";
    $last_name = "Enter last name";
    $email = "Enter email";
    $address = "Enter address";

    if (!empty($data['first_name'])) {
        $first_name = $data['first_name'];
    }
    if (!empty($data['last_name'])) {
        $last_name = $data['last_name'];
    }
    if (!empty($data['email'])) {
        $email = $data['email'];
    }
    if (!empty($data['address'])) {
        $address = $data['address'];
    }
    if (!empty($data['state'])) {
        $state = $data['state'];
    }


    ?>
    <div class="row my-3">
        <div class="col-md-2 ">
            <div class="bg-white products-spec">
                <ul class="m-0" style="list-style-type: none;">
                    <a href="/my_account/">
                        <li class="pl-2 bg-gray">
                            <p class=""><i class="fas fa-user-alt mr-1"></i> My Account</p>
                        </li>
                    </a>
                    <a href="/orders/">
                        <li class="pl-2">
                            <p class=""><i class="fas fa-box mr-1"></i> Orders</p>
                        </li>
                    </a>
                    <!-- <a href="/wallet/">
                        <li class="pl-2">
                            <p class=""><i class="fas fa-wallet mr-1"></i> Wallet</p>
                        </li>
                    </a> -->
                    <a href="/my_listing/">
                        <li class="pl-2">
                            <p class=""><i class="fas fa-business-time mr-1"></i> My Listings</p>
                        </li>
                    </a>
                    <a href="/messages/">
                        <li class="pl-2 ">
                            <p class=""><i class="far fa-comments mr-1"></i> Messages</p>
                        </li>
                    </a>
                    <a href="/vault/">
                        <li class="pl-2 border-bottom">
                            <p class=""><i class="fas fa-shield-alt mr-1"></i> Vault</p>
                        </li>
                    </a>
                    <!-- <a href=""><li><p class="font-weight-bold"><i class="fas fa-business-time mr-1"></i> Egoras Earnings</p></li></a> -->
                    <a href="">
                        <li>
                            <p class="font-weight-bold text-warning text-center"> LOGOUT</p>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="col-md-7">
            <div class="bg-white">
                <div class="p-1 mx-2 border-bottom">
                    <h5>Account Information</h5>
                </div>
                <div class="p-3">
                    <form id="form" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">First Name</label>
                                    <input type="text" name="first_name" value="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Email Address</label>
                                    <input type="text" name="email" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Last Name</label>
                                    <input type="text" name="last_name" value="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">State</label>
                                    <select id="inputState" name="state" class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="Abia">Abia</option>
                                        <option value="Adamawa">Adamawa</option>
                                        <option value="Akwa Ibom">Akwa Ibom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="Bayelsa">Bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross River">Cross River</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Ebonyi">Ebonyi</option>
                                        <option value="Enugu">Enugu</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="Jigawa">Jigawa</option>
                                        <option value="Kaduna">Kaduna</option>
                                        <option value="Kano">Kano</option>
                                        <option value="Katsina">Katsina</option>
                                        <option value="Kebbi">Kebbi</option>
                                        <option value="Kogi">Kogi</option>
                                        <option value="Kwara">Kwara</option>
                                        <option value="Lagos">Lagos</option>
                                        <option value="Nasarawa">Nasarawa</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Ogun">Ogun</option>
                                        <option value="Ondo">Ondo</option>
                                        <option value="Osun">Osun</option>
                                        <option value="Oyo">Oyo</option>
                                        <option value="Plateau">Plateau</option>
                                        <option value="Rivers">Rivers</option>
                                        <option value="Sokoto">Sokoto</option>
                                        <option value="Taraba">Taraba</option>
                                        <option value="Yobe">Yobe</option>
                                        <option value="Zamfara">Zamfara</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="font-weight-bold">Address</label>
                                    <textarea class="form-control" value="" id="address" name="address" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mx-5">
                            <input class="btn btn-orange btn-block" type="submit" value="Save">
                        </div>
                    </form>
                    <div class="mt-3 border">
                        <div class="p-2 border-bottom">
                            <h6>Egoras Balance</h6>
                        </div>
                        <div class="p-3">
                            <h6><i class="fas fa-wallet"></i> <span>&#8358;0.00</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">


            <div class="">
                <!-- Wallet Balances -->


                <?php require_once "public/page-parts/wallet-balances.php" ?>
            </div>
        </div>
    </div>
</div>



<?php require_once("public/page-parts/site-footer.php") ?>

<script>
    $("#form").on('submit', (function(e) {
        e.preventDefault();
        var formData = new FormData(this)

        $.ajax({
            url: "/account_reg/",
            type: "POST",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,

            success: function(response) {

                console.log(response);

                var data = JSON.parse(response);

                if (data.error) {
                    var error = data.error.msg;



                } else if (data.success) {
                    var error = data.success.msg;
                    $("#form")[0].reset();


                }

            },
            error: function(e) {

            }
        });

    }))
</script>