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
                        <h4>Available Jobs:</h4>
                        <hr>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!--Table-->
                            <table id="tblJobs" class="table table-bordered table-hover">
                                <thead>
                                    <tr id="ddlJobs">
                                        <th rowspan="2">Urgency</th>
                                        <th rowspan="2">Engineer Name</th>
                                        <th rowspan="2">Location</th>
                                        <th rowspan="2">Job Number</th>
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
                                        <td>Urgent</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>Tiger Nixon</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Urgent</td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Urgent</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>5</td>
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

<?php 
include('footer.php');
?>