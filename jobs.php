<?php
include('header.php');
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
                    <a class="navbar-brand" href="jobs.php"><i class="fa fa-folder-open" aria-hidden="true"></i> Jobs </a>
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
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                test
                            </div>
                        <?php// } ?>
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
?>