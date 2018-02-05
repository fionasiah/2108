<?php

include('header.php');

    //$conn = dbconnect();

    //include('queries.php');
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
                        <a class="navbar-brand" href="index.php"><i class="material-icons">dashboard</i> Dashboard </a>
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
                        <div class="col-sm-6 col-md-4">
<!--                            <div class="card card-stats">
                                <div class="card-content">
                                    <div class="card-header dashboard-card-header" data-background-color="green">
                                        <i class="material-icons">monetization_on</i>
                                    </div>
                                    <p class="category">Expected Expenditure</p>
                                    <h3 class="title dashboard-title">100<small><p><span class="badge">February</span>Current Month</p></small></h3>
                                </div>
                            </div>-->
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title text-center">Fault Incident type</h4>
                                </div>
                                <div class="card-content">
                                    <canvas id="doughnut_chart"  height="298"></canvas>
                                    <h4 class="title">Total Faults</h4>
                                    <p class="category"><span class="text-success"><i class="fa fa-wrench"></i> </span><?php // echo round(($totalSumPrev +13.22), 2); ?></p>
                                </div>
                                <div class="card-footer">
                                    <span class="dashboard-title"><p><span class="badge badge-danger">February</span>Previous Month</p></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">2018 Fault frequency</h4>
                                </div>
                                <div class="card-content">
                                    <canvas id="line_chart" height="260"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-stats">
                        <div class="card-content">
                            <div class="row mb20">
                                <div class="col-md-3">
                                    <h4 class="dashboard-progress-title">This Week's Faults:<br><small>175</small></h4>
                                </div>
                                <div class="col-md-9">
                                    <div class="progress dashboard-progress">
                                        <div class="progress-bar" data-background-color="orange" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            20%
                                        </div>
                                        <div class="progress-bar" data-background-color="blue" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            40%
                                        </div>
                                        <div class="progress-bar" data-background-color="purple" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            30%
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 class="dashboard-progress-title">Average Daily Faults:<br><small>30 </small></h4>
                                </div>
                                <div class="col-md-9">
                                    <div class="progress dashboard-progress-two">
                                        <div class="progress-bar" data-background-color="orange" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                            35%
                                        </div>
                                        <div class="progress-bar" data-background-color="blue" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            40%
                                        </div>
                                        <div class="progress-bar" data-background-color="purple" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            25%
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
                            ICT2108 Team 3.
                        </p>
                    </div>
                </footer>
            </div>
        </div>

        <?php
        include('footer.php');
//    } else {
//        echo "You are not authorized to view this page.";
//    }
    ?>

    <script type="text/javascript">
        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                        data: [55,35,15]<?php // echo json_encode($data); ?>
                        ,
                        backgroundColor: [
                            '#26c6da',
                            '#ffa726',
                            '#ab47bc',
                        ],
                        label: 'Dataset 1'
                    }],
                labels: [
                    "Mechanical",
                    "Electrical",
                    "Telecommunication",
                ]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: false,
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        };

        var ctx = document.getElementById("doughnut_chart").getContext("2d");
        var myDoughnut = new Chart(ctx, config);

        // Line chart
        var speedCanvas = document.getElementById("line_chart").getContext("2d");
        var speedData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"],
            datasets: [{
                    label: "Amount",
                    data: [55,72,107,45,53,64,250,400,10,35,51,90]<?php //echo json_encode($lineData); ?>,
                    lineTension: 0,
                    fill: true,
                    borderColor: 'orange',
                    backgroundColor: 'rgba(0,0,0,0.05)',
                    borderDash: [5, 5],
                    pointBorderColor: 'orange',
                    pointBackgroundColor: 'rgba(255,150,0,0.5)',
                    pointRadius: 5,
                    pointHoverRadius: 10,
                    pointHitRadius: 30,
                    pointBorderWidth: 2,
                    pointStyle: 'rectRounded'
                }]
        };

        var chartOptions = {
            legend: {
                display: false,
                position: 'top',
                labels: {
                    boxWidth: 80,
                    fontColor: 'black'
                }
            },
            tooltips: {
                callbacks: {
                    label: function (tooltipItem) {
                        //console.log(tooltipItem)
                        return tooltipItem.yLabel + " SGD";
                    }
                }
            }
        };

        var lineChart = new Chart(speedCanvas, {
            type: 'line',
            data: speedData,
            options: chartOptions
        });
    </script>
