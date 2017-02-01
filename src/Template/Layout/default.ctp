<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'LIH - HRMS';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION --
        <title>GENFLUX</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION --

        <!-- CSS INCLUDE --
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
    <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
        <?= $cakeDescription ?>
        </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('default.css') ?>

    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="#">LIH-SW</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <!--<img src="assets/images/users/avatar.jpg" alt="John Doe"/>-->
                        </a>
                        <div class="profile">
                            <div class="profile-data">
                                <div class="profile-data-name">Kwaku Mens</div>
                                <div class="profile-data-title">Valuation Officer</div>
                            </div>
                        </div>
                    </li>
                    <!--<li class="xn-title">Navigation</li>-->
                    <li>
                        <a href="#"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">PIM</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-th"></span> <span class="xn-text">Leave</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-dot-circle-o"></span> <span class="xn-text">Recruitment</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-check-square-o"></span> <span class="xn-text">Performance</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-credit-card"></span> <span class="xn-text">Payroll</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Admin</span></a>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- END SIGN OUT -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-globe"></span></a>
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2>Declaration</h2>
                    <div class="pull-right">
                        <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span> Options</button>
                    </div>
                </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->Flash->render() ?>
                            <div class="container clearfix">
                            <?= $this->fetch('content') ?>
                            </div>
                        </div>
                    </div>
                    <!-- PAGE CONTENT WRAPPER -->
                </div>
                <!-- END PAGE CONTENT -->
            </div>
            <!-- END PAGE CONTAINER -->
            <!-- MESSAGE BOX-->
            <?php echo $this->element('logout');?>
            <!-- END MESSAGE BOX-->

            <!-- START PRELOADS --
<?= $this->Html->media('audio.mp3') ?>
            <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
            <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
            <!-- END PRELOADS -->

            <!-- START SCRIPTS -->
            <!-- START PLUGINS -->
<?= $this->Html->script('plugins/jquery/jquery.min'); ?>
<?= $this->Html->script('plugins/jquery/jquery-ui.min'); ?>
<?= $this->Html->script('plugins/bootstrap/bootstrap.min'); ?>
            <!-- END PLUGINS -->

            <!-- THIS PAGE PLUGINS -->
<?= $this->Html->script('plugins/icheck/icheck.min'); ?>
<?= $this->Html->script('plugins/mcustomscrollbar/jquery.mCustomScrollbar.min'); ?>

<?= $this->Html->script('plugins/bootstrap/bootstrap-datepicker'); ?>
<?= $this->Html->script('plugins/bootstrap/bootstrap-timepicker.min'); ?>
<?= $this->Html->script('plugins/bootstrap/bootstrap-colorpicker'); ?>
<?= $this->Html->script('plugins/bootstrap/bootstrap-file-input'); ?>
<?= $this->Html->script('plugins/bootstrap/bootstrap-select'); ?>

<?= $this->Html->script('plugins/tagsinput/jquery.tagsinput.min'); ?>
<?= $this->Html->script('plugins/maskedinput/jquery.maskedinput.min'); ?>

<?= $this->Html->script('plugins/smartwizard/jquery.smartWizard-2.0.min.js'); ?>
<?= $this->Html->script('plugins/jquery-validation/jquery.validate'); ?>
            <!-- END PAGE PLUGINS -->

            <!-- START TEMPLATE -->
<?= $this->Html->script(['settings', 'plugins', 'actions']); ?>
            <!-- END TEMPLATE -->

            <!-- END SCRIPTS -->

    </body>
</html>