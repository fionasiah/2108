<?php include('header.php'); ?>

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
                    <a class="navbar-brand" href="paymentSetting.php"><i class="material-icons">local_atm</i> Job History </a>
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
                                <h4 class="title">Job History</h4>
                                <p class="category">List of Past Jobs</p>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="tblHistory" class="table table-bordered table-hover">
                                        <thead>
                                            <tr id="ddlHistory" class="text-success">
                                                <th rowspan="2">Job No.</th>
                                                <th></th>
                                                <th rowspan="2">Start Time</th>
                                                <th rowspan="2">End Time</th>
                                                <th rowspan="2">Location</th>
                                                <th rowspan="2">Travel Time</th>
                                                <th rowspan="2">Job Payout</th>
                                            </tr>
                                            <tr class="text-success">
                                                <th>Fault Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<!--                                            <tr>
                                                <td><?php echo $row['CardHolder']  ?></td>
                                                <td><?php echo $row['CardType']    ?></td>
                                                <td><?php echo $row['CardNumber']  ?></td>
                                                <td><?php echo $row['ExpiryDate']  ?></td>
                                            </tr>-->
                                            <tr>
                                                <th>0001</th>
                                                <th>Type 5</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Princeton Road</th>
                                                <th>2H</th>
                                                <th>$10,000</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="addCardModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
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

<?php include('footer.php'); ?>