<!-- Done by Jerome 16SIC015U -->
<?php

//if (isset($_SESSION['email'])) {
    
    include('header.php');
//    $conn = dbconnect();
//    $user = $_SESSION['email'];
//
//    $retrievedata = "SELECT * FROM user WHERE Email = '$user' ";
//    $datastmt = $conn->prepare($retrievedata);
//    $datastmt->execute();
//    
//    $username = "";
//    $email = "";
//    $firstName = "";
//    $lastName = "";
//    $address = "";
//
//    foreach ($datastmt->fetchAll() as $datarow) {
//        $username = $datarow['UserID'];
//        $email = $datarow['Email'];
//        $firstName = $datarow['FirstName'];
//        $lastName = $datarow['LastName'];
//        $address = $datarow['Address'];
//    }


?>

    <div class="wrapper">
        <?php include('sidebar.php'); ?>
        
        <div class="main-panel">
            <nav class="navbar navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="user.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <?php include('logout.php'); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="assets/img/faces/marc.jpg" alt="Profile photo"/>
                                    </a>
                                </div>
<!--                                <div class="content">
                                    <a href="userSetting.php" class="btn button btn-round">Edit Profile</a>
                                </div>-->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Engineer Profile</h4>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Employee ID</label>
                                                    <input type="text" name="username" class="form-control" value="EN-1234567<?php //echo $username ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
<!--                                        <div class="row">                                        
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" name="email" class="form-control" value="<?php //echo $email ?>" disabled>
                                                </div>
                                            </div>
                                        </div>-->
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" name="firstName" class="form-control" value="John<?php //echo $firstName ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-offset-2">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" name="lastName" class="form-control" value="Doe<?php //echo $lastName ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
<!--                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" name="address" class="form-control" value="<?php echo $address ?>" disabled>
                                                </div>
                                            </div>
                                        </div>-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Available Jobs</h4>
                                    <p class="category">List of Fault Jobs Available</p>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr class="text-success">
                                                    <th>Urgency</th>
                                                    <th>Job No.</th>
                                                    <th>Fault Type</th>
                                                    <th>Location</th>
                                                    <th>Accept Job</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
    //                                                $retrieveDataQuery = "SELECT * FROM card WHERE UserID = $id ";
    //                                                 echo $retrieveDataQuery;
    //                                                $retrieveData = $conn->prepare($retrieveDataQuery);
    //                                                $retrieveData->execute();
    //                                                $retrieveCount = $retrieveData->rowCount();
    //                                                 echo $retrieveCount;
    //                                                if ($retrieveData->rowCount() > 0) {
    //                                                    foreach ($retrieveData->fetchAll() as $row) {
    //                                                        ?>
                                                            <tr>
                                                                <td> 
<!--                                                                    <div class="">
                                                                        <span class="badge"></span>
                                                                    </div>-->
                                                                    <?php //echo $row['CardHolder']  ?>
                                                                </td>
                                                                <td><?php echo $row['CardType']    ?></td>
                                                                <td><?php echo $row['CardNumber']  ?></td>
                                                                <td><?php echo $row['ExpiryDate']  ?></td>
                                                            </tr>
                                                            <?php
    //                                                    }
    //                                                    
    //                                                } else {
    //                                                    ?>
                                                        <tr>
                                                            <th>Urgency</th>
                                                            <th>Job No.</th>
                                                            <th>Fault Type</th>
                                                            <th>Location</th>
                                                            <th>Accept Job</th>
                                                        </tr>
                                                       <?php
    //                                                }                                               
    //                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
<!--                                    <div class="">
                                        <a><button type="button" class="btn button" data-toggle="modal" data-target="#addCardModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Card</button></a>
                                    </div>-->
                                    <div id="addCardModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
<!--                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Modal Header</h4>-->
                                                    <h4 class="modal-title">Add a card</h4>
                                                    <p><small>Enter your card details below</small></p>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="paymentSetting.php">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group label-floating">
                                                                    <label for="cardHolder" class="control-label">Card Holder Name</label>
                                                                    <input type="text" name="cardHolder" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group label-floating">
                                                                    <label for="cardNo" class="control-label">Card No.</label>
                                                                    <input type="text" name="cardNo" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group label-floating">
                                                                    <label for class="control-label">Card Type</label>
                                                                    <select name="cardType" class="form-control">
                                                                        <option>Visa</option>
                                                                        <option>Master Card</option>
                                                                        <option>American Express</option>
                                                                        <option>Debit</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- <div class="col-md-6">
                                                                <div class="form-group label-floating">
                                                                    <label for class="control-label">CV2</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div> -->
                                                            <div class="col-md-6">
                                                                <div class="form-group label-floating">
                                                                    <label for="expiryDate" class="control-label">Expiry Date</label>
                                                                    <input type="text" name="expiryDate" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <button type="button" class="btn button btn-danger" data-dismiss="modal">Close</button>
                                                                <button type="submit" name="addCardBtn" class="btn button">Add Card</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">        
                        <p class="copyright pull-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            ICT2108 Team 3.
                        </p>
                    </div>
                </footer>
            </div>
        </div>
    </div>

<?php
include('footer.php');
//} else {
//    echo "You are not authorized to view this page.";
//}
?>