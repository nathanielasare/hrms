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

//$cakeDescription = 'LIH - HRMS';
?>

<div class="page-content-wrap">

    <div class="page-title" style="margin-top: 10px">
        <h2>System Analytics </h2>
        <div class="pull-right" style="margin-top: 3px">
            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span> Options</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <!-- START LINE CHART -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Performance</h3>
                </div>
                <div class="panel-body">
                    <div id="morris-line-example" style="height: 300px;"></div>
                </div>
            </div>
            <!-- END LINE CHART -->

        </div>
        <div class="col-md-6">

            <!-- START Area CHART -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Payroll</h3>
                </div>
                <div class="panel-body">
                    <div id="morris-area-example" style="height: 300px;"></div>
                </div>
            </div>
            <!-- END Area CHART -->

        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <!-- START BAR CHART -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Leave</h3>
                </div>
                <div class="panel-body">
                    <div id="morris-bar-example" style="height: 300px;"></div>
                </div>
            </div>
            <!-- END BAR CHART -->

        </div>
        <div class="col-md-6">

            <!-- START DONUT CHART -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Employees By Subsidiaries</h3>
                </div>
                <div class="panel-body">
                    <div id="morris-donut-example" style="height: 300px;"></div>
                </div>
            </div>
            <!-- END DONUT CHART -->

        </div>
    </div>

</div>



