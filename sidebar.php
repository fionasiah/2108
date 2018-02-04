
<div class="sidebar" data-color="green" data-image="assets/img/sidebar-3.jpg" style="max-width: 260px">
    <div class="logo">
        <a href="index.php" class="simple-text" style="max-width: 230px; left: 20px">
            <!-- S . W . E . G -->
            <img src="images/SWEG logo.png" style="max-width: 190px">
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
                            <p>Payment Settings</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'dashboard.php') !== false) : ?>class="active"<?php endif; ?>>
                <a href="dashboard.php">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'MonthlyStatement.php') !== false) : ?>class="active"<?php endif; ?>>
                <a href="MonthlyStatement.php">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <p>Monthly Statement</p>
                </a>
            </li>
            <li class="dropdown sidebar-dropdown">
                <a href="#" class="dropdown-toggle <?php if ((strpos($_SERVER['SCRIPT_NAME'], 'utility-electricity.php') !== false) || (strpos($_SERVER['SCRIPT_NAME'], 'utility-water.php') !== false) || (strpos($_SERVER['SCRIPT_NAME'], 'utility-gas.php') !== false)) : ?>ddown-active<?php endif; ?>" data-toggle="dropdown">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    <p>My Utilities<b class="caret"></b></p>
                </a>
                <ul class="dropdown-menu">
                    <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'utility-electricity.php') !== false) : ?>class="active"<?php endif; ?>>
                        <a href="utility-electricity.php">
                            <i class="material-icons">battery_charging_full</i>
                            <p>Electricity</p>
                        </a>
                    </li>
                    <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'utility-water.php') !== false) : ?>class="active"<?php endif; ?>>
                        <a href="utility-water.php">
                            <i class="material-icons">invert_colors</i>
                            <p>Water</p>
                        </a>
                    </li>
                    <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'utility-gas.php') !== false) : ?>class="active"<?php endif; ?>>
                        <a href="utility-gas.php">
                            <i class="material-icons">whatshot</i>
                            <p>Gas</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'costsaving.php') !== false) : ?>class="active"<?php endif; ?>>
                <a href="costsaving.php">
                    <i class="material-icons" d>monetization_on</i>
                    <p>Cost Saving Tips</p>
                </a>
            </li>
            <li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'contact.php') !== false) : ?>class="active"<?php endif; ?>>
                <a href="contact.php">
                    <i class="material-icons">call</i>
                    <p>Contact Us</p>
                </a>
            </li>
            <li class="visible-xs">
                <a href="login.php">
                    <i class="material-icons">forward</i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>