<!-- Done by Jerome 16SIC015U -->
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
                    <a class="navbar-brand" href="payment.php"><i class="material-icons">local_atm</i> Payment Settings </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="login.php" class="dropdown-toggle" data-toggle="dropdown">
                                Logout <i class="material-icons">forward</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Your Credit Cards</h4>
                                <p class="category">Add or Remove a Payment Method</p>
                            </div>
                            <div class="card-content">
                                <table class="table">
                                    <thead>
                                        <tr class="text-primary">
                                            <th>Card Holder</th>
                                            <th>Card Type</th>
                                            <th>Card No.</th>
                                            <th>Expiry Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Visa</td>
                                            <td>xxxx-xxxx-xxxx-0004</td>
                                            <td>02/18</td>
                                        </tr>
                                        <tr>
                                            <td>Mary Jane</td>
                                            <td>MasterCard</td>
                                            <td>xxxx-xxxx-xxxx-0021</td>
                                            <td>09/20</td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>American Express</td>
                                            <td>xxxx-xxxx-xxxx-0056</td>
                                            <td>05/19</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="button" class="btn" data-background-color="purple" style="float:right">+ Add Card</button>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php include('footer.php'); ?>