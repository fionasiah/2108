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
                            <h4 class="title">Available Job</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST">
                                <div class="table-responsive col-md-12 col-sm-12 col-xs-12">
                                    <!--Table-->
                                    <table id="tblJobs" class="table table-bordered table-hover">
                                        <thead>
                                            <tr id="ddlJobs">
                                                <th rowspan="2">Urgency</th>
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
                                                <td>Edinburgh</td>
                                                <td><a href="jobDetail.php?jobid=#0100">#0100</a></td>
                                                <td>Unassigned</td>
                                                <td>2 hours</td>
                                                <td>Type 6</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="danger">1 - Urgent</td>
                                                <td>Edinburgh</td>
                                                <td><a href="jobDetail.php?jobid=#0101">#0101</a></td>
                                                <td>Unassigned</td>
                                                <td>2 hours</td>
                                                <td>Type 8</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="warning">2 - Average</td>
                                                <td>Kirkwall</td>
                                                <td><a href="jobDetail.php?jobid=#0102">#0102</a></td>
                                                <td>Unassigned</td>
                                                <td>2 hours</td>
                                                <td>Type 10</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="warning">2 - Average</td>
                                                <td>Elgin</td>
                                                <td><a href="jobDetail.php?jobid=#0103">#0103</a></td>
                                                <td>Unassigned</td>
                                                <td>2 hours</td>
                                                <td>Type 3</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="success">3 - Normal</td>
                                                <td>Fort William</td>
                                                <td><a href="jobDetail.php?jobid=#0105">#0105</a></td>
                                                <td>Unassigned</td>
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