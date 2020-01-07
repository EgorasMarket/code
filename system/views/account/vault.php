<?php require_once("public/page-parts/site-header.php") ?>
<?php require_once("public/page-parts/wallet-cookie.php") ?>
<?php require_once("public/page-parts/sidebar.php") ?>
<?php require_once("public/page-parts/navbar.php") ?>
<div class="container-fluid mt-2" id="topBanner">
    <div class="row mt-3">
        <div class="col-md-2 ">
            <div class="bg-white products-spec">
                <ul class="mx-0" style="list-style-type: none;">
                    <a href="/my_account/"><li class="pl-2"><p class=""><i class="fas fa-user-alt mr-1"></i> My Account</p></li></a>
                    <a href="/orders/"><li class="pl-2"><p class=""><i class="fas fa-box mr-1"></i> Orders</p></li></a>
                    <!-- <a href="/wallet/"><li class="pl-2"><p class=""><i class="fas fa-wallet mr-1"></i> Wallet</p></li></a> -->
                    <a href="/my_listing/"><li class="pl-2"><p class=""><i class="fas fa-business-time mr-1"></i> My Listings</p></li></a>
                    <a href="/messages/"><li class="pl-2"><p class=""><i class="far fa-comments mr-1"></i> Messages</p></li></a>
                    <a href="/vault/"><li class="pl-2 bg-gray border-bottom"><p class=""><i class="fas fa-shield-alt mr-1"></i> Vault</p></li></a>
                    <!-- <a href=""><li><p class="font-weight-bold"><i class="fas fa-business-time mr-1"></i> Egoras Earnings</p></li></a> -->
                    <a href=""><li><p class="font-weight-bold text-warning text-center"> LOGOUT</p></li></a>
                </ul>
            </div>
        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    <div class="bg-white border">
                        <div class="p-2">
                            <h5 class="text-center">
                                <img src="/public/static/assets/company/user2.png" alt="" width="25" class="img-fluid left">
                                Vault
                                <img src="/public/static/assets/company/settings-cog.png" alt="" width="25" class="img-fluid right">
                            </h5>
                        </div>
                        <div class="p-3 my-4 text-center">
                            <div class="row">
                                <div class="col-md-4 col-4">
                                    <button type="button" class="btn exchange"><span id="send" class="send"></span></button>
                                    <div class="form-group">
                                        <input type="email" class="form-control vault mt-1" id="" placeholder="INPUT AMOUNT">
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <button type="button" class="btn swap" id="swap"><img src="/public/static/assets/company/swap.png" alt="" width="25" class="img-fluid"></button>
                                </div>
                                <div class="col-md-4 col-4">
                                    <button type="button" class="btn exchange"><span id="receive" class="receive"></span></button>
                                    <div class="form-group">
                                        <input type="email" class="form-control vault mt-1" id="" placeholder="OUTPUT AMOUNT">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-orange btn-block" type="button"><span id="finalact"></span> EUSD</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-white products-spec">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Assets</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Send</th>
                            <th scope="col">Unlock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <span class="font-weight-bold">GOR</span><br>
                                <span>USD</span>
                            </td>
                            <td class="text-center">
                                <span class="font-weight-bold">0.000</span><br>
                                <span>&#36;0.00</span>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-light"><i class="fas fa-share"></i></button>
                            </td>
                            <td class="text-center">
                                <div class="switchToggle">
                                    <input type="checkbox" id="switch1">
                                    <label for="switch1">Toggle</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="font-weight-bold">EGR</span><br>
                                <span>USD</span>
                            </td>
                            <td class="text-center">
                                <span class="font-weight-bold">0.000</span><br>
                                <span>&#36;0.00</span>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-light"><i class="fas fa-share"></i></button>
                            </td>
                            <td class="text-center">
                                <div class="switchToggle">
                                    <input type="checkbox" id="switch2">
                                    <label for="switch2">Toggle</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bg-white my-4">
                <div class="p-2">
                    <h5>System Info</h5>
                    <p>COLLATERALIZATION RATIO <span class="right">262.32%</span></p>
                    <p>TOTAL EUSD SUPPLY <span class="right">19,552,023.67 EUSD</span></p>
                    <!-- <p>ACTIVE VAULTS <span class="right">1,504 Vaults</span></p> -->
                </div>
            </div>
            <!-- <div class="bg-white">
                
            </div> -->
        </div>
    </div>
</div>


  
<?php require_once("public/page-parts/site-footer.php") ?>
<script>
$(document).ready(function(){
    var send = '<img src="/public/static/assets/company/ethereum.png" alt="" width="25" class="img-fluid"><p>0.00 ETH</p>'
    $("#send").html(send);
    var receive = '<img src="/public/static/assets/company/egoras-face.png" alt="" width="25" class="img-fluid"><p>2.22 ETH</p>'
    $("#receive").html(receive);
    var generate = 'Generate';
    var redeem = 'Redeem';
    $("#finalact").html(generate);

    $("#swap").on('click', (function(){
        
        if ($("#send").html() === send) {
            $("#send").html(receive);
            $("#receive").html(send);
            $("#finalact").html(redeem);
        } else {
            $("#send").html(send);
            $("#receive").html(receive);
            $("#finalact").html(generate);
        }
    }));
})
    
</script>
