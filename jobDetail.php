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
                    <a class="navbar-brand" href="jobDetail.php?jobid=#0100"> Job Details</a>
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
                        <h4 class="title">Job #0100</h4>
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
                                            Job Details
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="col-md-10">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Job Number</label>
                                                            <input type="text" name="jobId" class="form-control" value="#0100" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Job Description</label>
                                                            <textarea type="text" name="jobId" class="form-control" rows="10" disabled>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-md-offset-1">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Urgency</label>
                                                            <input type="text" name="urgency" class="form-control" value="Urgent" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-md-offset-2">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Fault Type</label>
                                                            <input type="text" name="status" class="form-control" value="Type 6" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Status</label>
                                                            <input type="text" name="jobId" class="form-control" value="Unassigned" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-md-offset-1">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Start Date</label>
                                                            <input type="datetime" name="contact" class="form-control" value="-" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-md-offset-2">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">End Date</label>
                                                            <input type="datetime" name="lastName" class="form-control" value="-" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            Client Profile
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <div class="card card-profile">
                                                <div class="card-avatar">
                                                    <a href="#pablo">
                                                        <img class="img" src="assets/img/faces/monteluke.jpg" alt="Profile photo"/>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title">Director</h4>
                                                    <br>
                                                </div>
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
                                                                    <label class="control-label">Client ID</label>
                                                                    <input type="text" name="username" class="form-control" value="CI-1234567" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 col-md-offset-1">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">First Name</label>
                                                                    <input type="text" name="firstName" class="form-control" value="Monte" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-md-offset-2">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Last Name</label>
                                                                    <input type="text" name="lastName" class="form-control" value="Luke" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 col-md-offset-1">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Contact Number</label>
                                                                    <input type="number" name="contact" class="form-control" value="95769264" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-md-offset-2">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Email</label>
                                                                    <input type="text" name="email" class="form-control" value="monteluke@company.com" disabled>
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

                        </div><!-- panel-group -->
                        <!-- accordion end -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>