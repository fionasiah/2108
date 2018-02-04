<!-- Done by Nur Iffahizzati 16SIC048C, Mohamed Ashik 16SIC044J -->
<?php
//session_start();
//if (isset($_SESSION['email'])) {
//    include('dbfunction.php');
    include('header.php'); 
    
//    $conn = dbconnect();
    
    // Current Month Electricity Amount
//    $currElecUsage = "SELECT SUM(Price) AS SumOfE FROM electricity WHERE MONTH(Date) = MONTH(CURRENT_DATE())";
//    $electricitySum = $conn->prepare($currElecUsage);
//    $electricitySum->execute();
//    
//    foreach ($electricitySum->fetchAll() as $electEach) { 
//        $eSum = $electEach['SumOfE'];
//    }
//        
//    // Current Day Usage
//    $dayUsage = "SELECT * FROM electricity WHERE Date = '2017-11-16'";
//    $dayElectUsage = $conn->prepare($dayUsage);
//    $dayElectUsage->execute();
//    
//    foreach ($dayElectUsage->fetchAll() as $usageEach) { 
//        $eDaySum = $usageEach['Price']; // Current Day Electricity Amount
//        $eUsage = $usageEach['Usage'];
//        
//        $barData[] = $eUsage;
//    }
//    
//    // For line bar chart
//    $eachBar = "SELECT * FROM electricity WHERE MONTH(Date) = MONTH(CURRENT_DATE())";
//    $eachLineBar = $conn->prepare($eachBar);
//    $eachLineBar->execute();
//    
//    $barData = array();
//    foreach ($eachLineBar->fetchAll() as $eBar) { 
//        $eLineBar = $eBar['Usage'];
//        
//        $barData[] = $eLineBar;
//    }
    
    //print json_encode($barData);
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
                    <a class="navbar-brand" href="utility-electricity.php"><i class="material-icons">battery_charging_full</i> Individual Utility - Electricity </a>
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
                            <div class="card-header" data-background-color="orange">
                                <i class="material-icons">monetization_on</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Current Month Amount</p>
                                <h3 class="title"><?php echo $eSum; ?> <small>SGD</small></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="orange">
                                <i class="material-icons">monetization_on</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Current Day Amount</p>
                                <h3 class="title"><?php echo $eDaySum; ?> <small>SGD</small></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="orange">
                                <i class="material-icons">flash_on</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Current Day Usage</p>
                                <h3 class="title"><?php echo $eUsage; ?> <small>kWh</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        Daily Electricity Usage for current month
                    </div>
                    <div class="card-content">
                        <canvas id="electricity_utility_1" class="hidden-xs"  height="110"></canvas>
                        <canvas id="electricity_utility" class="visible-xs"  height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
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
    var utilityelectricity1 = document.getElementById("electricity_utility_1").getContext('2d');
    var myChart1 = new Chart(utilityelectricity1, {
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
    
    var utilityelectricity = document.getElementById("electricity_utility").getContext('2d');
    var myChart = new Chart(utilityelectricity, {
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
            }
        }
    });
</script>