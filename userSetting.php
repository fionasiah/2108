<!-- Done by Jerome 16SIC015U -->
<?php

//if (isset($_SESSION['email'])) {
    include('dbfunction.php');
    include('header.php');
    $conn = dbconnect();
    $user = $_SESSION['email'];
    $uid = $_SESSION['userid'];

    $retrievedata = "SELECT * FROM user WHERE Email = '$user' ";
    $datastmt = $conn->prepare($retrievedata);
    $datastmt->execute();

    // $username = "";
    $email = "";
    $firstName = "";
    $lastName = "";
    $address = "";

    foreach ($datastmt->fetchAll() as $datarow) {
        $username = $datarow['UserID'];
        $email = $datarow['Email'];
        $firstName = $datarow['FirstName'];
        $lastName = $datarow['LastName'];
        $address = $datarow['Address'];
    }


    if(isset($_POST['updatebtn'])){
        // $username = $_POST['username'];
        $email = $_POST['email'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];  

        $updateStatement = "UPDATE user SET "
                            . "Email = '$email', "
                            . "FirstName = '$firstName', "
                            . "LastName = '$lastName',"
                            . "Address = '$address' "
                            . "WHERE UserID = $uid ";
            
        $updatestmt = $conn->prepare($updateStatement);
        
       if($updatestmt->execute()){
         echo "<script type='text/javascript'>alert('Profile has been updated');</script>";
         header("location: user.php");

       }else{
            echo "<script type='text/javascript'>alert('Error: something went wrong, please try again');</script>";
        }
    }

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
                            <?php include('logout.php'); ?>
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
                                    <button type="button" class="btn button btn-round">Change Profile Photo</button>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">Edit Profile</h4>
                                    <p class="category">Complete your profile</p>
                                </div>
                                <div class="card-content">
                                    <form method="POST" action="userSetting.php">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">User ID</label>
                                                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $username ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">                                        
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $email ?>"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-offset-2">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" name="address" id="address" class="form-control" value="<?php echo $address ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <button type="button" class="btn button col-md-12">Change Password</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-md-offset-1 card-content">
                                            <button type="submit" name="updatebtn" class="btn button">Update Profile</button>
                                            <a href="user.php" class="btn btn-danger">Cancel Changes</a>
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