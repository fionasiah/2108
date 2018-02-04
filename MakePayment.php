<!-- Done by Nurulhuda Nasir 16SIC049H -->
<?php

//if (isset($_SESSION['userid'])) {
    include('header.php');
//    include('dbfunction.php');

//    $conn = dbconnect();
//    $user = $_SESSION['userid'];
//
//    if (isset($_GET['sid'], $_GET['total'], $_GET['month'], $_GET['year'])) {
//        $sid = $_GET['sid'];
//        $totalamt = $_GET['total'];
//        $month = $_GET['month'];
//        $year = $_GET['year'];
//    }
//
//    // TODO: Get VISA card details to be displayed
//    $visasql = "SELECT * FROM card WHERE UserID = $user AND CardType = 'VISA'";
//    $visastmt = $conn->prepare($visasql);
//    $visastmt->execute();
//
//    // TODO: Get MASTERCARD card details to be displayed
//    $mastersql = "SELECT * FROM card WHERE UserID = $user AND CardType = 'MASTERCARD'";
//    $masterstmt = $conn->prepare($mastersql);
//    $masterstmt->execute();
//
//    // TODO: Get AMEX card details to be displayed
//    $amexsql = "SELECT * FROM card WHERE UserID = $user AND CardType = 'AMERICAN EXPRESS'";
//    $amexstmt = $conn->prepare($amexsql);
//    $amexstmt->execute();
//
//    // TODO: Get user email for OTP
//    $emailsql = "SELECT Email FROM user WHERE UserID = $user";
//    $emailstmt = $conn->prepare($emailsql);
//    $emailstmt->execute();
//    foreach ($emailstmt->fetchAll() as $emailrow) {
//        $useremail = $emailrow['Email'];
//    }

    // TODO: JAVASCRIPT FOR: when user type text, it should not remain there, when user select card, it should also be reflected.
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
                        <a class="navbar-brand" href="MakePayment.php"> Make Payment </a>
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
            <div class='content'>
                <div class='container-fluid'>
                    <div class="card card-stats">
                        <div class="card-header payment-card-header" data-background-color="green">
                            <i class="material-icons" style="font-size: 55px;">monetization_on</i>
                        </div>
                        <div class="card-content">
                            <h6 class='paymenthead'>Payment Information for <b><?php echo $month . " " . $year ?></b><span class="label testlabel"><?php echo "Reference Number: $sid" ?></span></h6>
                        </div>
                        <hr>
                        <div class='card-content'>
                            <!-- Assuming User always pay bills in full at the end of every month-->
                            <p class="text-left"><b>Amount Brought Forward: </b>$0.00</p>
                            <p class="text-left"><b>Overall Outstanding Amount: </b><?php echo "$" . round($totalamt, 2) ?></p>
                            <div class="form-group text-left">
                                <label for="payamount" class="amountpaylabel">Amount You Wish To Pay: </label>
                                <input class="form-control" type='text' name="payamount" placeholder="<?php echo "E.g $" . round($totalamt, 2) ?>">
                            </div>
                        </div>
                        <br>
                        <form method="POST">
                            <div class='cardtext button-select'>
                                <p><i class="material-icons">credit_card</i><b> Select Payment Method:</b></p>
                                <button type="button" class="btn-default btn-select btn-none" id="visa" name="visa"><img src="images/visa.png" width="100" alt="Visa"></button>
                                <button type="button" class="btn-default btn-select btn-none" id="master" name="master"><img src="images/mastercard.png" width="100" alt="MasterCard"></button>
                                <button type="button" class="btn-default btn-select btn-none" id="amex" name="amex"><img src="images/americanexpress.png" width="100" alt="American Express"></button>
                                <button type="button" class="btn-default btn-select btn-none" id="paypal" name="paypal"><img src="images/paypal.png" width="100" alt="PayPal"></button>
                                <button type="button" class="btn-default btn-select btn-none" id="paynow" name="paynow"><img src="images/paynow.png" width="100" alt="PayNow"></button>
                            </div>
                        </form>
                        <br>
                        <form method="POST" name="getotpform">
                            <div class='cardtext' id='visa_content'>
                                <p><b>Which Credit Card Do You Wish To Use? </b></p>
                                <div class='dropdown'>
                                    <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>-- SELECT CARD --
                                        <span class='caret'></span></button>
                                    <button class="btn btn-primary dropdown-toggle btn-block visible-xs btn-mg" type="button" data-toggle="dropdown">-- SELECT CARD --
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">

                                        <?php
                                        foreach ($visastmt->fetchAll() as $visarow) {
                                            $visaNum = "XXXXXXXXXXXX" . substr($visarow['CardNumber'], -4);
                                            $visaholder = $visarow['CardHolder'];
                                            $visatype = $visarow['CardType'];
                                            ?>
                                            <li><a href='#'><i class='fa fa-cc-visa' aria-hidden='true'></i> <?php echo $visaholder . " " . $visaNum ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="card-content">
                                    <a href='#'><button name="otpmail" type="submit" class='button' align="right">Proceed to payment <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                                </div>
                            </div>
                            <div class='cardtext' id='master_content'>
                                <p><b>Which Credit Card Do You Wish To Use? </b></p>
                                <div class='dropdown'>
                                    <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>-- SELECT CARD --
                                        <span class='caret'></span></button>
                                    <button class="btn btn-primary dropdown-toggle btn-block visible-xs btn-mg" type="button" data-toggle="dropdown">-- SELECT CARD --
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <?php
                                        foreach ($masterstmt->fetchAll() as $masterrow) {
                                            $masterNum = "XXXXXXXXXXXX" . substr($masterrow['CardNumber'], -4);
                                            $masterholder = $masterrow['CardHolder'];
                                            $mastertype = $masterrow['CardType'];
                                            ?>
                                            <li><a href='#'><i class='fa fa-cc-mastercard' aria-hidden='true'></i> <?php echo $masterholder . " " . $masterNum ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="card-content">
                                    <a href='#'><button name="otpmail" type="submit" class='button' align="right">Proceed to payment <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                                </div>
                            </div>
                            <div class='cardtext' id="amex_content">
                                <p><b>Which Credit Card Do You Wish To Use? </b></p>
                                <div class='dropdown'>
                                    <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>-- SELECT CARD --
                                        <span class='caret'></span></button>
                                    <button class="btn btn-primary dropdown-toggle btn-block visible-xs btn-mg" type="button" data-toggle="dropdown">-- SELECT CARD --
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <?php
                                        foreach ($amexstmt->fetchAll() as $amexrow) {
                                            $amexNum = "XXXXXXXXXXXX" . substr($amexrow['CardNumber'], -4);
                                            $amexholder = $amexrow['CardHolder'];
                                            $amextype = $amexrow['CardType'];
                                            ?>
                                            <li><a href='#'><i class='fa fa-cc-mastercard' aria-hidden='true'></i> <?php echo $amexholder . " " . $amexNum ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="card-content">
                                    <a href='#'><button name="otpmail" type="submit" class='button' align="right">Proceed to payment <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                                </div>
                            </div>
                            <div class="card-content" id="other_content">
                                <a href='#'><button name="otpmail" type="submit" class='button' align="right">Proceed to payment <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                            </div>
                        </form>
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

    <?php include('footer.php'); ?>

    <?php
    if (isset($_POST['otpmail'])) {
        $_SESSION['paid'] = "paid";
        $seed = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()');
        $rand = '';
        foreach (array_rand($seed, 4) as $k)
            $rand .= $seed[$k];

        $recipient = $useremail;
        $subject = "Cardholder Verification";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From: SWEG OTP";
        $message = 'Your One Time Password is: ' . $rand . '';

        if (mail($recipient, $subject, $message, $headers)) {
            ?>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#myModal').modal('show');
                });
            </script>
        <?php } else { ?>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#errorModal').modal('show');
                });
            </script>
            <?php
        }
    }
    ?>

    <!-- Modal for OTP-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cardholder Verification</h4>
                </div>
                <div class="modal-body">
                    A One-Time-Password (OTP) has been sent to your email - "<?php echo $useremail ?>". 
                    Before proceeding, please verify that you are the cardholder by entering the OTP:

                    <div class="form-group text-left">
                        <label for="otp" class="amountpaylabel">Your 4-digit OTP: </label>
                        <input class="form-control" type='text' name="otp" placeholder="enter here">
                    </div>
                    <small><i>Didn't receive OTP? <a href="#">Resend OTP.</a></i></small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a href="MonthlyStatement.php"><button type="button" class="btn btn-primary">Confirm</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for error-->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cardholder Verification</h4>
                </div>
                <div class="modal-body">
                    Uh-oh! It seems something went wrong! try again later!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <?php
//} else {
//    echo "You are not authorized to view this page.";
//}
?>