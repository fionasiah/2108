<!-- Done by Mohamed Ashik 16SIC044J -->
<?php
//session_start();
//if (isset($_SESSION['email'])) {
//    include('dbfunction.php');
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
                        <a class="navbar-brand" href="costsaving.php"><i class="material-icons">monetization_on</i> Cost Saving Tips & Tricks </a>
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
                                <h4 class="title">Cost Saving Tips & Tricks</h4>
                                <p class="category">Here are ways to be SWEG</p>
                            </div>
                            <div class="card-content">
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="orange">
                                        <i class="material-icons" data-notify="icon">battery_charging_full</i>
                                        <p>Switch off TV rather than putting on standby to save electricity.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="blue">
                                        <i class="material-icons" data-notify="icon">invert_colors</i>
                                        <p>Take shorter showers to save more water.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="purple">
                                        <i class="material-icons" data-notify="icon">whatshot</i>
                                        <p>Use low fire while cooking to save unwanted gas leaks.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="orange">
                                        <i class="material-icons" data-notify="icon">battery_charging_full</i>
                                        <p>Choose a laptop over a desktop to consume less electricity.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="blue">
                                        <i class="material-icons" data-notify="icon">invert_colors</i>
                                        <p>Use a mug filled with water while brushing teeth.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="purple">
                                        <i class="material-icons" data-notify="icon">whatshot</i>
                                        <p>Switch off the stove completely to prevent unwanted gas leak.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="orange">
                                        <i class="material-icons" data-notify="icon">battery_charging_full</i>
                                        <p>Switch off your power socket when appliances are not in use.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="blue">
                                        <i class="material-icons" data-notify="icon">invert_colors</i>
                                        <p>Use half flushes after each toilet use.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="purple">
                                        <i class="material-icons" data-notify="icon">whatshot</i>
                                        <p>Prevent gas wastage by checking gas pipes for leakage.</p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="orange">
                                        <i class="material-icons" data-notify="icon">battery_charging_full</i>
                                        <p>Boil water only when needed and store them in a thermal flask.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="blue">
                                        <i class="material-icons" data-notify="icon">invert_colors</i>
                                        <p>Run the washing machine only on a full load.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="purple">
                                        <i class="material-icons" data-notify="icon">whatshot</i>
                                        <p>Cover the pot while cooking food. Cooks faster and saves gas.</p>
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