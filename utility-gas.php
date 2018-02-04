<!-- Done by Nur Iffahizzati 16SIC048C, Mohamed Ashik 16SIC044J -->
<?php
//session_start();
//if (isset($_SESSION['email'])) {
    //include('dbfunction.php');
    include('header.php'); 
    
//    $conn = dbconnect();
//    
//    // Current Month Gas Amount
//    $currGasUsage = "SELECT SUM(Price) AS SumOfG FROM gas WHERE MONTH(Date) = MONTH(CURRENT_DATE())";
//    $gasSum = $conn->prepare($currGasUsage);
//    $gasSum->execute();
//    
//    foreach ($gasSum->fetchAll() as $gasEach) { 
//        $gSum = $gasEach['SumOfG'];
//    }
//        
//    // Current Day Usage
//    $dayUsage = "SELECT * FROM gas WHERE Date = '2017-11-16'";
//    $dayGasUsage = $conn->prepare($dayUsage);
//    $dayGasUsage->execute();
//    
//    foreach ($dayGasUsage->fetchAll() as $usageEach) { 
//        $gDaySum = $usageEach['Price']; // Current Day Electricity Amount
//        $gUsage = $usageEach['Usage'];
//        
//        $barData[] = $gUsage;
//    }
//    
//    // For line bar chart
//    $eachBar = "SELECT * FROM gas WHERE MONTH(Date) = MONTH(CURRENT_DATE())";
//    $eachLineBar = $conn->prepare($eachBar);
//    $eachLineBar->execute();
//    
//    $barData = array();
//    foreach ($eachLineBar->fetchAll() as $gBar) { 
//        $gLineBar = $gBar['Usage'];
//        
//        $barData[] = $gLineBar;
//    }
    
    ///print json_encode($barData); 
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
                    <a class="navbar-brand" href="utility-gas.php"><i class="material-icons">whatshot</i> Individual Utility - Gas </a>
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
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="purple">
                                <i class="material-icons">monetization_on</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Current Month Amount</p>
                                <h3 class="title"><?php echo $gSum; ?> <small>SGD</small></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="purple">
                                <i class="material-icons">monetization_on</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Current Day Amount</p>
                                <h3 class="title"><?php echo $gDaySum; ?> <small>SGD</small></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="purple">
                                <i class="material-icons">whatshot</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Current Day Usage</p>
                                <h3 class="title"><?php echo $gUsage; ?> <small>KwH</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        Daily Gas Usage for current month
                    </div>
                    <div class="card-content">
                        <canvas id="gas_utility_1" class="hidden-xs" height="110"></canvas>
                        <canvas id="gas_utility" class="visible-xs"  height="200"></canvas>
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

<?php
    include('footer.php');
//} else {
//    echo "You are not authorized to view this page.";
//}
?>

<script type="text/javascript">
    var utilitywater1 = document.getElementById("gas_utility_1").getContext('2d');
    var myChartWater1 = new Chart(utilitywater1, {
        type: 'bar',
        data: {
            labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17",
                    "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30"],
            datasets: [{
                label: 'November 2017',
                data: <?php echo json_encode($barData); ?>,
                backgroundColor: '#999'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.yLabel + " kWh";
                    }
                }
            }
        }
    });
    
    var utilitywater = document.getElementById("gas_utility").getContext('2d');
    var myChartWater = new Chart(utilitywater, {
        type: 'bar',
        data: {
            labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17",
                    "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30"],
            datasets: [{
                label: 'November 2017',
                data: [12, 19, 13, 10, 9, 7, 15, 24, 8, 19, 13, 10, 9],
                backgroundColor: '#999'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>