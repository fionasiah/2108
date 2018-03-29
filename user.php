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
                    <a class="navbar-brand" href="user.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile </a>
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
                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img" src="assets/img/faces/arielle.jpg" alt="Profile photo"/>
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title">Area Manager</h4>
                                <br>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title">Profile</h4>
                            </div>
                            <div class="card-content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Employee ID</label>
                                                <input type="text" name="username" class="form-control" value="AM-1234567" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">First Name</label>
                                                <input type="text" name="firstName" class="form-control" value="Arielle" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-md-offset-2">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Last Name</label>
                                                <input type="text" name="lastName" class="form-control" value="Christine" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Contact</label>
                                                <input type="text" name="contact" class="form-control" value="9122 8444" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-md-offset-2">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email</label>
                                                <input type="text" name="email" class="form-control" value="arielle_christine@gmail.com" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title">Next-Of-Kin</h4>
                            </div>
                            <div class="card-content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">First Name</label>
                                                <input type="text" name="firstName" class="form-control" value="James" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-md-offset-2">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Last Name</label>
                                                <input type="text" name="lastName" class="form-control" value="Speare" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Relationship</label>
                                                <input type="text" name="relationship" class="form-control" value="Spouse" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Contact</label>
                                                <input type="text" name="contact" class="form-control" value="9922 8444" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-md-offset-2">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email</label>
                                                <input type="text" name="email" class="form-control" value="james_speare@gmail.com" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
</div>

<?php
include('footer.php');
?>