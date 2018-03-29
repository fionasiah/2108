<?php include('header.php'); ?>

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
                    <a class="navbar-brand" href="engineerDetail.php?jobid=#0001"> Engineer Details</a>
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
        <div class='content'>
            <div class='container-fluid'>
                <div class="card">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Engineer EN-1234567</h4>
                    </div>
                    <div class="card-content">
                        <!-- accordion start -->
                    <!-- ================ -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        Engineer Profile
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="col-md-4">
                                        <div class="card card-profile">
                                            <div class="card-avatar">
                                                <a href="#pablo">
                                                    <img class="img" src="assets/img/faces/marc.jpg" alt="Profile photo"/>
                                                </a>
                                            </div>
                                            <div class="content"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-content">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-10 col-md-offset-1">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Employee ID</label>
                                                                <input type="text" name="username" class="form-control" value="EN-1234567" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-md-offset-1">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">First Name</label>
                                                                <input type="text" name="firstName" class="form-control" value="John" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-md-offset-2">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Last Name</label>
                                                                <input type="text" name="lastName" class="form-control" value="Doe" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-md-offset-1">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Contact Number</label>
                                                                <input type="number" name="contact" class="form-control" value="12345678" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-md-offset-2">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Email</label>
                                                                <input type="text" name="email" class="form-control" value="johndoe@gmal.com" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        Job Payout
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="col-md-10">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Job Number</label>
                                                        <input type="text" name="jobId" class="form-control" value="0001" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Start Date $ Time</label>
                                                        <input type="datetime" name="startDate" class="form-control" value="05/02/2018 09:00AM" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">End Date & Time</label>
                                                        <input type="datetime" name="endDate" class="form-control" value="05/02/2018 7:00PM" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Number of Hours</label>
                                                        <input type="text" name="jobId" class="form-control" value="10 hours" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Rate</label>
                                                        <input type="text" name="rate" class="form-control" value="$50.00/hour" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Total Payment</label>
                                                        <input type="text" name="jobId" class="form-control" value="$500.00" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- panel-group -->
                    <!-- accordion end -->
                    </div>
                </div>
                
        </div>
    </div>
</div>

<?php include('footer.php'); ?>