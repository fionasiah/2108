<!-- Done by Nurulhuda Nasir 16SIC049H -->
<?php
session_start();
if (isset($_SESSION['userid'])) {
    include('header.php');
    include('dbfunction.php');

    $conn = dbconnect();

    $curryear = "2017";
    $currmonth = "October";

// retrieve all monthly statement data
    $statementsql = "SELECT * FROM monthlystatement WHERE Year = '$curryear' ORDER BY DateRead ASC";
    $statement = $conn->prepare($statementsql);
    $statement->execute();

// retrieve monthly statement for october
    $octsql = "SELECT * FROM monthlystatement WHERE Year = '$curryear' AND Month = '$currmonth'";
    $octstmt = $conn->prepare($octsql);
    $octstmt->execute();
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
                        <a class="navbar-brand" href="MonthlyStatement.php"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monthly Statement </a>
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
                        <form method="POST">
                            <h4>Select the monthly statement to be viewed:</h4>
                            <hr>
                            <?php
                            foreach ($statement->fetchAll() as $statementrow) {
                                $stmtmonth = $statementrow['Month'];
                                $stmtmonth = substr($stmtmonth, 0, 3);
                                $stmtyear = $statementrow['Year'];
                                $stmtid = $statementrow['StatementID'];
                                $btntext = "";

                                if ($stmtmonth == "Nov" || $stmtmonth == "Dec") {
                                    $btntext .= "<button disabled class='date-as-calendar-disabled position-em size1_75x'>
                                        <span class='month'>$stmtmonth</span>
                                        <span class='year'>$stmtyear</span>
                                        <span class='ref'>Reference No: $stmtid</span>
                                    </button>";
                                } else if ($stmtmonth == "Oct") {
                                    $btntext .= "<span name='octpay' id='btn_activate' class='date-as-calendar position-em size1_75x'>
                                        <span class='month'>$stmtmonth</span>
                                        <span class='year'>$stmtyear</span>
                                        <span class='ref'>Reference No: $stmtid</span>
                                    </span>";
                                } else {
                                    $btntext .= "<button disabled class='date-as-calendar position-em size1_75x'>
                                        <span class='month'>$stmtmonth</span>
                                        <span class='year'>$stmtyear</span>
                                        <span class='ref'>Reference No: $stmtid</span>
                                    </button>";
                                }
                                ?>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <?php echo $btntext ?>
                                </div>
                            <?php } ?>
                        </form>
                    </div>

                    <div id="statement_table" class="table-responsive">
                        <table class="monthlystatement table table-bordered table-condensed" style="max-width: initial;">
                            <thead>
                                <tr>
                                    <th id='electricity'>
                                        <h5 class="textLabel"><i class="material-icons">flash_on</i> ELECTRICITY</h5>
                                    </th>
                                    <th id='water'>
                                        <h5 class="textLabel"><i class="material-icons">invert_colors</i> WATER</h5>
                                    </th>
                                    <th id='gas'>
                                        <h5 class="textLabel"><i class="material-icons">whatshot</i> GAS</h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($octstmt->fetchAll() as $octrow) {
                                    $SID = $octrow['StatementID'];
                                    $readdate = new DateTime($octrow['DateRead']);
                                    $WFUsage = $octrow['WaterborneFeeUsage'];
                                    $WFRate = $octrow['WaterborneFeeRate'];
                                    $WFTotal = round($WFUsage * $WFRate, 2);
                                    $SAUsage = $octrow['SanitaryApplianceUsage'];
                                    $SARate = $octrow['SanitaryApplianceRate'];
                                    $SATotal = round($SAUsage * $SARate, 2);
                                    $RRUsage = $octrow['RefuseRemovalUsage'];
                                    $RRRate = $octrow['RefuseRemovalRate'];
                                    $RRTotal = round($RRUsage * $RRRate, 2);
                                    $WCRate = $octrow['WaterConservationRate'];
                                }
                                // usage sum and price sum -> electricity
                                $esql = "SELECT SUM(`Usage`) AS etotalusage, SUM(Price) AS etotalprice FROM electricity WHERE StatementID = $SID GROUP BY StatementID";
                                $estmt = $conn->prepare($esql);
                                $estmt->execute();
                                foreach ($estmt->fetchAll() as $erow) {
                                    $eusage = round($erow['etotalusage'], 2);
                                    $eprice = round($erow['etotalprice'], 2);
                                }

                                // RATE -> electricity
                                $eratesql = "SELECT DISTINCT `Rate` FROM electricity WHERE StatementID = $SID";
                                $eratestmt = $conn->prepare($eratesql);
                                $eratestmt->execute();
                                foreach ($eratestmt->fetchAll() as $eraterow) {
                                    $erate = $eraterow['Rate'];
                                }

                                // usage sum and price sum -> water
                                $wsql = "SELECT SUM(`Usage`) AS wtotalusage, SUM(Price) AS wtotalprice FROM water WHERE StatementID = $SID GROUP BY StatementID";
                                $wstmt = $conn->prepare($wsql);
                                $wstmt->execute();
                                foreach ($wstmt->fetchAll() as $wrow) {
                                    $wusage = round($wrow['wtotalusage'], 2);
                                    $wprice = round($wrow['wtotalprice'], 2);
                                }

                                // RATE -> water
                                $wratesql = "SELECT DISTINCT `Rate` FROM water WHERE StatementID = $SID";
                                $wratestmt = $conn->prepare($wratesql);
                                $wratestmt->execute();
                                foreach ($wratestmt->fetchAll() as $wraterow) {
                                    $wrate = $wraterow['Rate'];
                                }

                                // usage sum and price sum -> gas
                                $gsql = "SELECT SUM(`Usage`) AS gtotalusage, SUM(Price) AS gtotalprice FROM gas WHERE StatementID = $SID GROUP BY StatementID";
                                $gstmt = $conn->prepare($gsql);
                                $gstmt->execute();
                                foreach ($gstmt->fetchAll() as $grow) {
                                    $gusage = round($grow['gtotalusage'], 2);
                                    $gprice = round($grow['gtotalprice'], 2);
                                }

                                // RATE -> gas
                                $gratesql = "SELECT DISTINCT `Rate` FROM gas WHERE StatementID = $SID";
                                $gratestmt = $conn->prepare($gratesql);
                                $gratestmt->execute();
                                foreach ($gratestmt->fetchAll() as $graterow) {
                                    $grate = $graterow['Rate'];
                                }
                                $WCTotal = round($wprice * ($WCRate / 100), 2);
                                ?>
                                <tr class="rowTest">
                                    <td>
                                        <b>Reading taken on <?php echo date_format($readdate, "d/m/Y") ?></b><br>
                                        <b>Usage:</b> <?php echo "$eusage kWh" ?><br>
                                        <b>Rate:</b> <?php echo "$$erate/kWh" ?><br>
                                    </td>
                                    <td>
                                        <b>Reading taken on <?php echo date_format($readdate, "d/m/Y") ?></b><br>
                                        <b>Usage:</b> <?php echo "$wusage CuM" ?><br>
                                        <b>Rate:</b> <?php echo "$$wrate/CuM" ?><br>
                                    </td>
                                    <td>
                                        <b>Reading taken on <?php echo date_format($readdate, "d/m/Y") ?></b><br>
                                        <b>Usage:</b> <?php echo "$gusage kWh" ?><br>
                                        <b>Rate:</b> <?php echo "$$grate/kWh" ?><br>
                                    </td>
                                </tr>
                                <tr class="rowTest" id='price'>
                                    <td>
                                        <?php echo "$" . round($eprice, 2) ?>
                                    </td>
                                    <td>
                                        <?php echo "$" . round($wprice, 2) ?>
                                    </td>
                                    <td>
                                        <?php echo "$" . round($gprice, 2) ?>
                                    </td>
                                </tr>
                                <tr class="rowTest">
                                    <td colspan='3'>
                                        <h6><u><b>Additional Charges:</b></u></h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <dl>
                                                    <dt><?php echo "Waterborne Fee: $$WFTotal" ?></dt>
                                                    <dd><?php echo "- $WFUsage CuM @ $$WFRate/CuM" ?><dd>
                                                    <dt><?php echo "Water Conservation Tax: $$WCTotal" ?></dt> 
                                                    <dd><?php echo "- $WCRate% of water bill" ?></dd>
                                                </dl>
                                            </div>
                                            <div class="col-md-6">
                                                <dl>
                                                    <dt><?php echo "Sanitary Appliance Fee: $$SATotal" ?></dt>
                                                    <dd><?php echo "- $SAUsage fittings @ $$SARate/fitting" ?></dd>
                                                    <dt><?php echo "Refuse Removal <small>(by SembWaste Pte Ltd)</small>: $$RRTotal" ?></dt>
                                                    <dd><?php echo "- $RRUsage Quantity @ $$RRRate/quantity" ?></dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $AmtDue = round($eprice + $wprice + $gprice + $WFTotal + $WCTotal + $SATotal + $RRTotal, 2); ?>
                                <tr>
                                    <td colspan='3'>
                                        <span class="total"><?php echo "Total Amount Payable (including 7% GST): $$AmtDue" ?></span>
                                        <?php if (isset($_SESSION['paid'])) { ?>
                                            <button disabled class='btn pull-right'><i class="material-icons">check_circle</i><b> Fully Paid</b></button>
                                        <?php } else { ?>
                                            <a href='MakePayment.php?sid=<?php echo $SID ?>&total=<?php echo $AmtDue ?>&month=<?php echo $currmonth ?>&year=<?php echo $curryear ?>'><button class='button pull-right'><b>Pay Bill</b> <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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

    <?php
    include('footer.php');
} else {
    echo "You are not authorized to view this page.";
}
?>