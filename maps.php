<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('header.php');
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/js/google-direction.js"></script>

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
                        <a class="navbar-brand" href="maps.php"><i class="fa fa-compass"> Location</i></a>
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
                    <div id="googleMap" style="width:100%;height:700px;"></div>
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

        <?php
        include('footer.php');
//    } else {
//        echo "You are not authorized to view this page.";
//    }
    ?>
    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4dNkSAR94RnKv491aTmwgVXVy02Xvzes&callback=initMap">
    </script>
    <!-- <script type="text/javascript">
        function myMap() {
        var gMaps= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),gMaps);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI5ThgQS5CxpTEi6qvdEmOcDMtujZ5vzk&callback=myMap"></script> -->
