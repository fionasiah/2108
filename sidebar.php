<div class="sidebar" data-color="green" data-image="assets/img/sidebar-3.jpg" style="max-width: 260px">
    <div class="logo">
        <a href="index.php" class="simple-text" style="max-width: 230px; left: 20px">
            <!-- S . W . E . G -->
            <img src="images/generic logo.png" style="max-width: 190px">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="dropdown sidebar-dropdown">
                <a href="#" class="dropdown-toggle <?php if ((strpos($_SERVER['SCRIPT_NAME'], 'user.php') !== false) || (strpos($_SERVER['SCRIPT_NAME'], 'paymentSetting.php') !== false)) : ?>ddown-active<?php endif; ?>" data-toggle="dropdown">
                    <i class="material-icons">person_pin</i>
                    <p>Profile<b class="caret"></b></p>
                </a>
                <ul class="dropdown-menu">
                    <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'user.php') !== false) : ?>class="active"<?php endif; ?>>
                        <a href="user.php">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <p>Profile Settings</p>
                        </a>
                    </li>
                    <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'paymentSetting.php') !== false) : ?>class="active"<?php endif; ?>>
                        <a href="paymentSetting.php">
                            <i class="material-icons">local_atm</i>
                            <p>Job History</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) : ?>class="active"<?php endif; ?>>
                <a href="index.php">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'jobs.php') !== false) : ?>class="active"<?php endif; ?>>
                <a href="jobs.php">
                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                    <p>Jobs</p>
                </a>
            </li>
            <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'maps.php') !== false) : ?>class="active"<?php endif; ?>>
                <a href="maps.php">
                    <i class="fa fa-compass" aria-hidden="true"></i>
                    <p>Locations</p>
                </a>
            </li>
        </ul>
    </div>
</div>