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

<div class="page-content-wrap">
    <div class="row">
        <!-- PAGE TITLE -->
        <div class="page-title" style="margin-top: 10px">
            <h2>Employees</h2>
            <div class="pull-right" style="margin-top: 3px">
                <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span> Options</button>
            </div>
        </div>
        <div class="col-md-12">

            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Employees</h3>
                    <ul class="panel-controls">
                        <!--<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>-->
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <!--<li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>-->
                    </ul>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('employe_number') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('middle_name') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('nick_name') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employees as $employee): ?>
                                <tr>
                                    <td><?= $this->Number->format($employee->employe_number) ?></td>
                                    <td><?= h($employee->lastname) ?></td>
                                    <td><?= h($employee->firstname) ?></td>
                                    <td><?= h($employee->middle_name) ?></td>
                                    <td><?= h($employee->nick_name) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->

            <!-- END SIMPLE DATATABLE -->

        </div>
    </div>

</div>

<!--<!DOCTYPE html>
<html>
<head>
<?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
<?= $cakeDescription ?>:
<?= $this->fetch('title') ?>
    </title>
<?= $this->Html->meta('icon') ?>

<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('cake.css') ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>
<body>
<?= $this->Flash->render() ?>
    <div class="container clearfix">
<?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>-->
