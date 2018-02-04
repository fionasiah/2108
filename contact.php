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
                        <a class="navbar-brand" href="contact.php"><i class="material-icons">call</i> Contact Us </a>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact Us</h4>
                                    <p class="category">Here are ways to reach us</p>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-success">
                                            <th>Name</th>
                                            <th>Contact</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Billing / Utilities Account Enquiries</td>
                                                    <td> 1800 222 2333</td> 
                                                </tr>
                                                <tr>
                                                    <td>Credit Management Enquiries</td>
                                                    <td> +65 6671 7100 </td>
                                                </tr>
                                                <tr>
                                                    <td>Market Support Services for Contestable Customers</td>
                                                    <td> 1800 233 8000 </td> 
                                                </tr>
                                                <tr>
                                                    <td>Gas Installation Appointments</td>
                                                    <td> 1800 555 1661 </td>
                                                </tr>
                                                <tr>
                                                    <td>Electricity Supply Interruption</td>
                                                    <td> 1800 778 8888 </td>  
                                                </tr>
                                                <tr>
                                                    <td>Gas Supply Interruption, Leakage & Pressure Issues</td>
                                                    <td> 1800 752 1800 </td> 
                                                </tr>
                                                <tr>
                                                    <td>Water Supply Interruption, Quality & Pressure Issues</td>
                                                    <td> 1800 225 5782 </td> 
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="card">
                            <div class="card-header" data-background-color="green">
                                <i class="material-icons pull-left" data-notify="icon">location_city</i><h4 class="title"> Find Us</h4>
                                <p class="category">Here are ways to get to us</p>
                            </div>

                            <div class="card-content table-responsive">
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="blue">
                                        <i class="material-icons top-icon">location_on</i>
                                        <p><b>Customer Service Centre (HQ)</b></p>
                                        <address><small>8 Cross Street<br> #02-01 to 03<br>PWC Building<br>Singapore 048424</small></address>
                                        <b>Opening Hours:</b>
                                        <ul class="list-unstyled">
                                            <li><small>- Mon to Fri (8:30am to 6pm)</small></li>
                                            <li><small>- Sat (8:30am to 1pm)</small></li>
                                            <li><small>- Closed on Sun & Public Holidays</small></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="orange">
                                        <i class="material-icons top-icon">location_on</i>
                                        <p><b>Customer Service Centre (HDB Hub)</b></p>
                                        <address><small>480 Lor 6 Toa Payoh<br> #02-08<br>HDB Hub<br>Singapore 310480</small></address>
                                        <b>Opening Hours:</b>
                                        <ul class="list-unstyled">
                                            <li><small>- Mon to Fri (8:30am to 5pm)</small></li>
                                            <li><small>- Sat (8:30am to 1pm)</small></li>
                                            <li><small>- Closed on Sun & Public Holidays</small></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="alert alert-info alert-with-icon" data-background-color="red">
                                        <i class="material-icons top-icon">location_on</i>
                                        <p><b>Customer Service Centre (Woodlands)</b></p>
                                        <address><small>900 South Woodlands Dr<br> #03-07<br>Woodlands Civic Centre<br>Singapore 730900</small></address>
                                        <b>Opening Hours:</b>
                                        <ul class="list-unstyled">
                                            <li><small>- Mon to Fri (8:30am to 5pm)</small></li>
                                            <li><small>- Sat (8:30am to 1pm)</small></li>
                                            <li><small>- Closed on Sun & Public Holidays</small></li>
                                        </ul>
                                    </div>
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

    <?php
    include('footer.php');
//} else {
//    echo "You are not authorized to view this page.";
//}
?>