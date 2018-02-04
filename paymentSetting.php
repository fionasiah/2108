<!-- Done by Jerome 16SIC015U -->
<?php
session_start();
if (isset($_SESSION['email'])) {
    include('dbfunction.php');
    include('header.php'); 
    $conn = dbconnect();
    $user = $_SESSION['email'];
    $id = $_SESSION['userid'];

    if(isset($_POST['addCardBtn'])){
        $cardHolder = $_POST['cardHolder'];
        $cardNo = $_POST['cardNo'];   
        $cardType = $_POST['cardType'];
        $expiryDate = $_POST['expiryDate']; 

        // $existSql = "SELECT * FROM card WHERE CardNumber = '$cardNo' ";

        // $existSqlStmt = $conn->prepare($existSql); //SQL Statement in here
        // $existSqlStmt->execute();
        // $result = $existSqlStmt->fetch(PDO::FETCH_ASSOC);

        // $count = $existSqlStmt->rowCount(); //Count the number of column in the statement

        $addCardSql = "INSERT INTO card(CardNumber, CardHolder, ExpiryDate, CardType, UserID) " . 
            "VALUES( $cardNo, '$cardHolder', '$expiryDate', '$cardType', $id)";
        // $conn->exec($addCardSql);

        try {
            // use exec() because no results are returned
            $conn->exec($addCardSql);
            echo "New record created successfully";
            }
        catch(PDOException $e)
            {
            echo $addCardSql . "<br>" . $e->getMessage();
            }

        // if ($count <= 0){ 
            
            // echo "<script type='text/javascript'>alert('Card has been added.');</script>";
        // }else{
            // echo "<script type='text/javascript'>alert('Error: This card already exists!');</script>";
        // }
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
                    <a class="navbar-brand" href="paymentSetting.php"><i class="material-icons">local_atm</i> Payment Settings </a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="green">
                                <h4 class="title">Your Credit Cards</h4>
                                <p class="category">Add or Remove a Payment Method</p>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="text-success">
                                                <th>Card Holder</th>
                                                <th>Card Type</th>
                                                <th>Card No.</th>
                                                <th>Expiry Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $retrieveDataQuery = "SELECT * FROM card WHERE UserID = $id ";
                                                // echo $retrieveDataQuery;
                                                $retrieveData = $conn->prepare($retrieveDataQuery);
                                                $retrieveData->execute();
                                                $retrieveCount = $retrieveData->rowCount();
                                                // echo $retrieveCount;
                                                if ($retrieveData->rowCount() > 0) {
                                                    foreach ($retrieveData->fetchAll() as $row) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['CardHolder']  ?></td>
                                                            <td><?php echo $row['CardType']    ?></td>
                                                            <td><?php echo $row['CardNumber']  ?></td>
                                                            <td><?php echo $row['ExpiryDate']  ?></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    
                                                } else {
                                                    ?>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td>Card Type</td>
                                                        <td>Card No.</td>
                                                        <td>Expiry Date</td>
                                                    </tr>
                                                    <?php
                                                }                                               
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="">
                                    <a><button type="button" class="btn button" data-toggle="modal" data-target="#addCardModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Card</button></a>
                                </div>
                                <div id="addCardModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>
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

<?php
    include('footer.php');
} else {
    echo "You are not authorized to view this page.";
}
?>