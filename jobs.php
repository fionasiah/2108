<?php 
include('header.php');

function jobs($jobId) {
    //include("db.php");
    $jobQUERY = "SELECT * FROM jobs WHERE jobId = $jobId";
    $jobRESULT = mysqli_query($conn, $jobQUERY) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($jobRESULT);
    return $row['jobId'];
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
                    <div class="card">
                        <div class="card-header" data-background-color="green">
                            <h4 class="title">Available Job</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST">
                                <div class="table-responsive col-md-12 col-sm-12 col-xs-12">
                                    <!--Table-->
                                    <table id="tblJobs" class="table table-bordered table-hover">
                                        <thead>
                                            <tr id="ddlJobs"  class="text-success">
                                                <th rowspan="2">Urgency</th>
                                                <th rowspan="2">Engineer Name</th>
                                                <th rowspan="2">Location</th>
                                                <th rowspan="2">Job Number</th>
                                                <th rowspan="2">Traveling Time</th>

                                                <!--For filter bar-->
                                                <th></th>
                                            </tr>
                                            <tr class="text-success">
                                                <th>Fault Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
        <!--                                        <td id = "showurgency<?//php echo $row['jobId'] ?>"><?//php echo $row['urgency'] ?></td>
                                                <td id = "showengineerName<?//php echo $row['jobId'] ?>"> <?//php echo $row['engineerName'] ?></td>
                                                <td id = "showlocation<?//php echo $row['jobId'] ?>"> <?//php echo $row['location'] ?></td>
                                                <td><a href="jobDetail.php?jobid=<?//php echo $row1['jobId']; ?>"><?//php echo $row1['jobNumber']; ?></a></td>
                                                <td id = "showtravelingtime<?//php echo $row['jobId'] ?>"><?//php echo $row1['travelingTime']; ?></td>
                                                <td id = "showfaulttype<?//php echo $row['jobId'] ?>"><?//php echo $row1['faulttype']; ?></td>-->
                                                <td>Urgent</td>
                                                <td>John Doe</td>
                                                <td>Princeton Road</td>
                                                <td><a href="jobDetail.php?jobid=0001">0001</a></td>
                                                <td>2 hours</td>
                                                <td>Type 5</td>

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

<?php 
include('footer.php');
?>