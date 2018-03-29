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
                    <a class="navbar-brand" href="jobHistory.php"><i class="material-icons">local_atm</i> Job History </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php include('welcome.php'); ?>
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
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title">Job History</h4>
                                <p class="category">List of Past Jobs</p>
                            </div>
                            <div class="card-content">
                                <form method="POST">
                                    <div class="table-responsive col-md-12 col-sm-12 col-xs-12">
                                        <table id="tblHistory" class="table table-bordered table-hover" >
                                            <thead>
                                                <tr id="ddlHistory">
                                                    <th rowspan="2">Job No.</th>
                                                    <th></th>
                                                    <th rowspan="2">Start Time</th>
                                                    <th rowspan="2">End Time</th>
                                                    <th rowspan="2">Location</th>
                                                    <th rowspan="2">Travel Time</th>
                                                    <th rowspan="2">Job Payout</th>
                                                </tr>
                                                <tr>
                                                    <th>Fault Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="completedJobDetail.php?jobid=#0001">#0001</a></td>
                                                    <td>Type 5</td>
                                                    <td>05/02/18 09:00AM</td>
                                                    <td>05/02/18 07:00PM</td>
                                                    <td>Princeton Road</td>
                                                    <td>10 hours</td>
                                                    <td>$500.00</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="completedJobDetail.php?jobid=#0098">#0098</a></td>
                                                    <td>Type 6</td>
                                                    <td>28/03/18 01:00PM</td>
                                                    <td>28/03/18 08:00PM</td>
                                                    <td>Gem White Road</td>
                                                    <td>7 hours</td>
                                                    <td>$350.00</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="completedJobDetail.php?jobid=#0072">#0072</a></td>
                                                    <td>Type 10</td>
                                                    <td>29/03/18 01:00PM</td>
                                                    <td>29/03/18 08:00PM</td>
                                                    <td>Houseton White Road</td>
                                                    <td>7 hours</td>
                                                    <td>$350.00</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="completedJobDetail.php?jobid=#0008">#0008</a></td>
                                                    <td>Type 6</td>
                                                    <td>29/03/18 01:00PM</td>
                                                    <td>29/03/18 08:00PM</td>
                                                    <td>Housetone White Road</td>
                                                    <td>7 hours</td>
                                                    <td>$350.00</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="completedJobDetail.php?jobid=#0007">#0007</a></td>
                                                    <td>Type 3</td>
                                                    <td>29/03/18 09:00AM</td>
                                                    <td>30/03/18 09:00AM</td>
                                                    <td>Princeton Road</td>
                                                    <td>24 hours</td>
                                                    <td>$1,200.00</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="completedJobDetail.php?jobid=#0002">#0002</a></td>
                                                    <td>Type 2</td>
                                                    <td>29/03/18 01:00PM</td>
                                                    <td>29/03/18 08:00PM</td>
                                                    <td>Housetone White Road</td>
                                                    <td>7 hours</td>
                                                    <td>$350.00</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="completedJobDetail.php?jobid=#0081">#0081</a></td>
                                                    <td>Type 1</td>
                                                    <td>29/03/18 09:00AM</td>
                                                    <td>30/03/18 09:00AM</td>
                                                    <td>Princeton Road</td>
                                                    <td>24 hours</td>
                                                    <td>$1,200.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
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

<?php include('footer.php'); ?>