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
                            <?php include('welcome.php'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">Pending Job</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST">
                                <div class="table-responsive col-md-12 col-sm-12 col-xs-12">
                                    <!--Table-->
                                    <table id="tblPendingJobs" class="table table-bordered table-hover">
                                        <thead>
                                            <tr id="ddlPendingJobs">
                                                <th rowspan="2">Urgency</th>
                                                <th rowspan="2">Engineer Name</th>
                                                <th rowspan="2">Location</th>
                                                <th rowspan="2">Job Number</th>
                                                <th rowspan="2">Job Status</th>
                                                <th rowspan="2">Traveling Time</th>

                                                <!--For filter bar-->
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th>Fault Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="danger">1 - Urgent</td>
                                                <td>John Doe</td>
                                                <td>Princeton Road</td>
                                                <td><a href="pendingJobDetail.php?jobid=#0051">#0051</a></td>
                                                <td>Pending</td>
                                                <td>2 hours</td>
                                                <td>Type 5</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="danger">1 - Urgent</td>
                                                <td>David Jarvis</td>
                                                <td>Clarence Road</td>
                                                <td><a href="pendingJobDetail.php?jobid=#0052">#0052</a></td>
                                                <td>Pending</td>
                                                <td>2 hours</td>
                                                <td>Type 10</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="warning">2 - Average</td>
                                                <td>Samuel James</td>
                                                <td>Dover Drive</td>
                                                <td><a href="pendingJobDetail.php?jobid=#0053">#0053</a></td>
                                                <td>Pending</td>
                                                <td>2 hours</td>
                                                <td>Type 10</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="success">3 - Normal</td>
                                                <td>Joel Jarvis</td>
                                                <td>Fwahla Tone Road</td>
                                                <td><a href="pendingJobDetail.php?jobid=#0054">#0054</a></td>
                                                <td>Pending</td>
                                                <td>2 hours</td>
                                                <td>Type 6</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="success">3 - Normal</td>
                                                <td>James Writes</td>
                                                <td>Balestier Road</td>
                                                <td><a href="pendingJobDetail.php?jobid=#0055">#0055</a></td>
                                                <td>Pending</td>
                                                <td>2 hours</td>
                                                <td>Type 7</td>
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