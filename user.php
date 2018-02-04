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
                                <div class="content">
                                    <a href="userSetting.php" class="btn button btn-round">Edit Profile</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">User Profile</h4>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">User ID</label>
                                                    <input type="text" name="username" class="form-control" value="<?php echo $username ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">                                        
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" name="email" class="form-control" value="<?php echo $email ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" name="firstName" class="form-control" value="<?php echo $firstName ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-offset-2">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" name="lastName" class="form-control" value="<?php echo $lastName ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" name="address" class="form-control" value="<?php echo $address ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                            The SWEG way of life.
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