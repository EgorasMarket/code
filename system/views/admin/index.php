<?php require_once("public/page-parts/site-header.php") ?>
<?php require_once("public/page-parts/sidebar.php") ?>
<?php require_once("public/page-parts/navbar.php") ?>
<style>
/* .project-tab {
    padding: 10%;
    margin-top: -8%;
} */
.project-tab #tabs{
    background: #007b5e;
    color: #eee;
}
.project-tab #tabs h6.section-title{
    color: #eee;
}
.project-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #0062cc;
    background-color: transparent;
    border-color: transparent transparent #f3f3f3;
    border-bottom: 3px solid !important;
    font-size: 16px;
    font-weight: bold;
}
.project-tab .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: #0062cc;
    font-size: 16px;
    font-weight: 600;
}
.project-tab .nav-link:hover {
    border: none;
}
.project-tab thead{
    background: #f3f3f3;
    color: #333;
}
.project-tab a{
    text-decoration: none;
    color: #333;
    font-weight: 600;
}
</style>

<section id="tabs" class="project-tab">
    <!-- <div class="container"> -->
        <div class="bg-white mx-3">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Add Phones/Models</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Add Country</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Dispute</a>
                            <a class="nav-item nav-link" id="nav-users-tab" data-toggle="tab" href="#nav-users" role="tab" aria-controls="nav-users" aria-selected="false">Users</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form id="newphone" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label  class="font-weight-bold">Phone Name</label>
                                                        <input type="text" class="form-control" name="phone" placeholder="Phone name" id="">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="button" id="addphone" class="btn btn-orange" value="Submit">
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form  id="form" method="post" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label  class="font-weight-bold">Brand</label>
                                                        <select class="form-control" id="brand" name="brand">
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="font-weight-bold">Model</label>
                                                        <input type="text" class="form-control" name="model" placeholder="Model" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="font-weight-bold">Card Slot</label>
                                                        <input type="text" class="form-control" name="card_slot" placeholder="SD card slot" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="font-weight-bold">Main Camera</label>
                                                        <input type="text" class="form-control" name="main_cam" placeholder="Rear camera" id="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label  class="font-weight-bold">Operating System</label>
                                                        <input type="text" class="form-control" name="OS" placeholder="Operating system" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="font-weight-bold">Sim</label>
                                                        <input type="text" class="form-control" name="sim" placeholder="Sim" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="font-weight-bold">Selfie Camera</label>
                                                        <input type="text" class="form-control" name="selfie_cam" placeholder="Selfie camera" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="font-weight-bold">Battery</label>
                                                        <input type="text" class="form-control" name="battery" placeholder="Battery capacity" id="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Model image</label>
                                                        <input type="file" name="file" class="form-control-file" id="img">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <input type="submit" class="btn btn-orange" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Employer</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">Work 1</a></td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 2</a></td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 3</a></td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Contest Name</th>
                                        <th>Date</th>
                                        <th>Award Position</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">Work 1</a></td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 2</a></td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 3</a></td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
</section>

    
    

<?php require_once("public/page-parts/site-footer.php") ?>
<script src="/public/static/js/new-model.js"></script>
<script src="/public/static/js/new-phone.js"></script>
<script src="/public/static/js/use-phonedetails.js"></script>