<!-- Done by Mohamed Ashik 16SIC044J -->
<?php

include('dbfunction.php');
$conn = dbconnect();

include('header.php');

if (isset($_POST['login'])) {
    $loginuser = $_POST['login_email'];
    $loginpwd = $_POST['login_pwd'];

    $checklogin = "SELECT * FROM user WHERE Email = '$loginuser' AND Password = '$loginpwd'";
    $loginstmt = $conn->prepare($checklogin);
    $loginstmt->execute();
    $loginresult = $loginstmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['email'] = $loginresult['Email'];
    $_SESSION['firstname'] = $loginresult['FirstName'];
    $_SESSION['lastname'] = $loginresult['LastName'];
    $_SESSION['userid'] = $loginresult['UserID'];

    $resultcount = $loginstmt->rowCount();

    if ($resultcount == 1) {
        //echo "<script type='text/javascript'>alert('Login Successful!');</script>";
        header("location: dashboard.php");
    } else {
        echo "<script type='text/javascript'>alert('No such user found');</script>";
    }
    $conn = NULL;
}
?>
<div class="body-bg-white">
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="wrapper" >
                <div class="content">
                    <div class="card login-card" style="background-color: #4CAF50">
                        <div class="card-header" style="background-color: white">
                            <div class="login-logo">   
                                <img src="images/SWEG logo.png" class="img-responsive" align="center">
                            </div>
                            <p class="category">Find out how SWEG are you</p>
                        </div> 
                        <div class="card-content login-input">
                            <form method="POST">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">mail_outline</i>
                                    </span>
                                    <input type="text" name="login_email" class="form-control" placeholder="Email">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <input type="password" name="login_pwd" class="form-control" placeholder="Password">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <button type="submit" value="Submit" class="btn btn-block btn-primary" name="login">LOGIN <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>