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
                    <a class="navbar-brand" href="jobs.php"><i class="fa fa-folder-open" aria-hidden="true"></i> Engineers </a>
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
                            <h4 class="title">All Engineers</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST">
                                <div class="table-responsive col-md-12 col-sm-12 col-xs-12">
                                    <!--Table-->
                                    <table id="tblEngineers" class="table table-bordered table-hover">
                                        <thead>
                                            <tr id="ddlEngineers">
                                                <th rowspan="2">Employee ID</th>
                                                
                                                <!--For filter bar-->
                                                <th></th>
                                                
                                                <th rowspan="2">Job ID</th>

                                                
                                            </tr>
                                            <tr>
                                                <th>Engineer Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>EN-0000001</td>
                                                <td>John Doe</td>
                                                <td><a href="engineerDetail.php?jobid=#0001">#0001</a></td>
                                            </tr>
                                           
                                            <tr>
                                                <td>EN-0000001</td>
                                                <td>John Doe</td>
                                                <td><a href="engineerDetail.php?jobid=#0098">#0098</a></td>                                                
                                            </tr>
                                            
                                            <tr>
                                                <td>EN-6789012</td>
                                                <td>James Writes</td>
                                                <td><a href="engineerDetail.php?jobid=#0002">#0002</a></td>
                                            </tr>
                                           
                                            <tr>
                                                <td>EN-6789012</td>
                                                <td>James Writes</td>
                                                <td><a href="engineerDetail.php?jobid=#0081">#0081</a></td>                                                
                                            </tr>
                                            
                                            <tr>
                                                <td>EN-3456789</td>
                                                <td>Joel Jarvis</td>
                                                <td><a href="engineerDetail.php?jobid=#0007">#0007</a></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>EN-0123456</td>
                                                <td>David Jarvis</td>
                                                <td><a href="engineerDetail.php?jobid=#0072">#0072</a></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>EN-1234567</td>
                                                <td>Samuel James</td>
                                                <td><a href="engineerDetail.php?jobid=#0008">#0008</a></td>
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