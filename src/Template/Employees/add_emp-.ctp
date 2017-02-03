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

            <!-- START WIZARD WITH VALIDATION -->
            <div class="panel panel-primary block">
                <!--<h4>Wizard with form validation</h4>-->
                <form action="javascript:alert('Validated!');" role="form" class="form-horizontal" id="wizard-validation">
                    <div class="wizard show-submit wizard-validation">
                        <ul class="panel-heading" style="padding: 0px 10px 20px 10px;margin-bottom: 15px;">
                            <li>
                                <a href="#step-7">
                                    <span class="stepNumber">1</span>
                                    <span class="stepDesc">Import Details<br /><!--<small>Information</small>--></span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-8">
                                    <span class="stepNumber">2</span>
                                    <span class="stepDesc">Item Details<br /><!--<small>Personal data</small>--></span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-9">
                                    <span class="stepNumber">3</span>
                                    <span class="stepDesc">Shipping Details<br /><!--<small>Personal data</small>--></span>
                                </a>
                            </li>
                        </ul>

                        <div id="step-7" class="row">
                            <fieldset>
                                <legend>Add Employee</legend>
                                <div class="input number required">
                                    <label for="employe-number">Employe Number</label>
                                    <input type="number" name="employe_number" required="required" id="employe-number" value="0"></div>
                                    <div class="input text required"><label for="lastname">Lastname</label><input type="text" name="lastname" required="required" maxlength="100" id="lastname" value=""></div>
                                    <div class="input text required"><label for="firstname">Firstname</label><input type="text" name="firstname" required="required" maxlength="100" id="firstname" value=""></div>
                                    <div class="input text required"><label for="middle-name">Middle Name</label><input type="text" name="middle_name" required="required" maxlength="100" id="middle-name" value=""></div>
                                    <div class="input text"><label for="nick-name">Nick Name</label><input type="text" name="nick_name" maxlength="100" id="nick-name" value=""></div>
                                    <div class="input date"><label>Birthday</label><select name="birthday[year]"><option value="" selected="selected"></option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option></select><select name="birthday[month]"><option value="" selected="selected"></option><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="birthday[day]"><option value="" selected="selected"></option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div>
                                    <div class="input select"><label for="country-id">Country</label><select name="country_id" id="country-id"><option value=""></option><option value="1">Ghana</option></select></div>
                                    <div class="input number"><label for="gender">Gender</label><input type="number" name="gender" id="gender"></div>
                                    <div class="input select"><label for="marital-status-id">Marital Status</label><select name="marital_status_id" id="marital-status-id"></select></div>
                                    <div class="input text"><label for="ssn-num">Ssn Num</label><input type="text" name="ssn_num" maxlength="50" id="ssn-num" value=""></div>
                                    <div class="input text"><label for="drv-lin-num">Drv Lin Num</label><input type="text" name="drv_lin_num" maxlength="100" id="drv-lin-num" value=""></div><div class="input date"><label>Drv Lin Exp Date</label><select name="drv_lin_exp_date[year]"><option value="" selected="selected"></option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option></select><select name="drv_lin_exp_date[month]"><option value="" selected="selected"></option><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="drv_lin_exp_date[day]"><option value="" selected="selected"></option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div>
                                    <div class="input date"><label>Joined Date</label><select name="joined_date[year]"><option value="" selected="selected"></option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option></select><select name="joined_date[month]"><option value="" selected="selected"></option><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="joined_date[day]"><option value="" selected="selected"></option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div>
                                    <div class="input number"><label for="status">Status</label><input type="number" name="status" id="status"></div>
                                    <div class="input select"><label for="job-title-id">Job Title</label><select name="job_title_id" id="job-title-id"></select></div>
                                    <div class="input text"><label for="street1">Street1</label><input type="text" name="street1" maxlength="100" id="street1" value=""></div>
                                    <div class="input text"><label for="street2">Street2</label><input type="text" name="street2" maxlength="100" id="street2" value=""></div>
                                    <div class="input text"><label for="city-code">City Code</label><input type="text" name="city_code" maxlength="100" id="city-code" value=""></div>
                                    <div class="input text"><label for="coun-code">Coun Code</label><input type="text" name="coun_code" maxlength="100" id="coun-code" value=""></div>
                                    <div class="input text"><label for="provin-code">Provin Code</label><input type="text" name="provin_code" maxlength="100" id="provin-code" value=""></div>
                                    <div class="input text"><label for="zipcode">Zipcode</label><input type="text" name="zipcode" maxlength="20" id="zipcode"></div>
                                    <div class="input text"><label for="home-telephone">Home Telephone</label><input type="text" name="home_telephone" maxlength="50" id="home-telephone"></div>
                                    <div class="input text"><label for="mobile">Mobile</label><input type="text" name="mobile" maxlength="50" id="mobile"></div>
                                    <div class="input text"><label for="work-telephone">Work Telephone</label><input type="text" name="work_telephone" maxlength="50" id="work-telephone"></div>
                                    <div class="input text"><label for="work-email">Work Email</label><input type="text" name="work_email" maxlength="50" id="work-email"></div>
                                <div class="input text"><label for="other-email">Other Email</label><input type="text" name="other_email" maxlength="50" id="other-email"></div>
                                <div class="input number"><label for="smoker">Smoker</label><input type="number" name="smoker" id="smoker" value="0">
                                </div>   
                            </fieldset>
                        </div>

                        <div id="step-8" class="row">
                            <div class="col-md-12">
                                <!-- START TABLE HOVER ROWS -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="padding: 6px;font-size: smaller;">
                                        <h5 class="panel-title" style="margin: 0px;font-size: small;font-weight: bold;">Declared Item</h5>
                                        <ul class="panel-controls">
                                            <li><a href="#" title="Import"><span class="fa fa-download"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body scroll" style="height: 285px;padding-right: 15px;">
                                        <table class="table table-hover table-bordered" style="margin-bottom: 0px;">
                                            <thead>
                                                <tr>
                                                    <th>#</th><th>Item Description</th><th>Declared HSCode</th><th>Declared Value</th><th>Declared Quantity</th><th>Country of Origin</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END TABLE HOVER ROWS -->

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="Item Description">Item Descp.</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="login" placeholder="Item Description" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Brand</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Brand" required/>
                                        </div>
                                        <label class="col-md-2 control-label">Model</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Model" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="Country of Origin">Country</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Country" required/>
                                        </div>
                                        <label class="col-md-2 control-label">HSCode</label>
                                        <div class="col-md-4">
                                            <input type="text" class="mask_hsc form-control" placeholder="Login" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Value</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Value" required/>
                                        </div>
                                        <label class="col-md-2 control-label">Quantity</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Quantity" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="Unit of Measure">Unit</label>
                                        <div class="col-md-4">
                                            <select class="form-control select" data-live-search="true">
                                                <option>Unit of Measure</option>
                                                <option>Sit amet sicors</option>
                                                <option>Mostoly stofu tiro</option>
                                                <option>Vico sante fara</option>
                                                <option>Delomo ponto si</option>
                                            </select>
                                        </div>
                                        <label class="col-md-2 control-label">Packing</label>
                                        <div class="col-md-4">
                                            <select class="form-control select" data-live-search="true">
                                                <option>Packing</option>
                                                <option>Sit amet sicors</option>
                                                <option>Mostoly stofu tiro</option>
                                                <option>Vico sante fara</option>
                                                <option>Delomo ponto si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="State of Good(s)">Category</label>
                                        <div class="col-md-4">
                                            <select class="form-control select">
                                                <option>Category</option>
                                                <option>Used</option>
                                            </select>
                                        </div>
                                        <label class="col-md-2 control-label" title="Packing Specification">Packing Spc.</label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" name="login" placeholder="20"/>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" name="login" placeholder="20"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="State of Good(s)">State</label>
                                        <div class="col-md-2">
                                            <select class="form-control select" required>
                                                <option>New</option>
                                                <option>Used</option>
                                            </select>
                                        </div>
                                        <label class="col-md-1 control-label" title="Contact Person">Sale</label>
                                        <div class="col-md-3">
                                            <select class="form-control select" required>
                                                <option>Free</option>
                                                <option>Paid</option>
                                            </select>
                                        </div>
                                        <label class="col-md-1 control-label" title="Year of Manufacture">Year</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="login" placeholder="Year" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">&nbsp;</label>
                                        <div class="col-md-7">
                                            <label class="col-md-12 control-label btn btn-primary" style="text-align: center">998790</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 panel-footer" style="padding: 5px;margin: 18px 0px 10px 0px">
                                    <a href="#" class="btn btn-primary pull-right" disabled="disable">Delete</a>
                                    <a href="#" class="btn btn-primary pull-right" style="margin-right: 5px;">Save</a>
                                </div>
                            </div>
                        </div>

                        <div id="step-9" class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">IDF</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" readonly placeholder="1234567890"/>
                                        </div>
                                        <label class="col-md-2 control-label">Office</label>
                                        <div class="col-md-4">
                                            <select class="form-control select">
                                                <option>Office 1</option>
                                                <option>Office 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Importer</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" readonly value="Importer A"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Exporter</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" readonly value="Exmp Exporter"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Delivery</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" readonly value="Delivery Term"/>
                                        </div>
                                        <label class="col-md-2 control-label">Sequence</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control"  readonly value="Sequence"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Total FOB</label>
                                        <div class="col-md-6">
                                            <label class="col-md-12 control-label btn btn-primary" style="text-align: center">998790</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Total Invoice Value</label>
                                        <div class="col-md-6">
                                            <label class="col-md-12 control-label btn btn-primary" style="text-align: center">998790</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">

                                    <!-- START VERTICAL TABS WITH HEADING -->
                                    <div class="panel panel-default nav-tabs-vertical">
                                        <div class="tabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab19" data-toggle="tab" style="font-size: 12px;font-weight: bold;">Transport Details</a></li>
                                                <li><a href="#tab20" data-toggle="tab" style="font-size: 12px;font-weight: bold;">Price Composition</a></li>
                                                <li><a href="#tab21" data-toggle="tab" style="font-size: 12px;font-weight: bold;">Container Details</a></li>
                                                <li><a href="#tab22" data-toggle="tab" style="font-size: 12px;font-weight: bold;">Invoice Details</a></li>
                                            </ul>
                                            <div class="panel-body tab-content" style="border-left: 1px solid #f5f5f5;width: 82%">

                                                <div class="tab-pane active" id="tab19">
                                                    <div class="col-md-12 scroll" style="height: 185px;">
                                                        <div class="col-md-12 row">
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Transport Mode</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="Mode"/>
                                                                </div>
                                                                <label class="col-md-2 control-label">Transport Method</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="Method"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Doc. Type</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="Type"/>
                                                                </div>
                                                                <label class="col-md-2 control-label">D. Number</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="1234567890"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Doc. Date</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="1234567890"/>
                                                                </div>
                                                                <label class="col-md-2 control-label">Vessel</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="1234567890"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Voyage No</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="1234567890"/>
                                                                </div>
                                                                <label class="col-md-2 control-label">P. Loading</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="1234567890"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">S. Country</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="1234567890"/>
                                                                </div>
                                                                <label class="col-md-2 control-label">Trans. Port</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="1234567890"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Entry Port</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="1234567890"/>
                                                                </div>
                                                                <label class="col-md-2 control-label">G. Weight</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Packing</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                                <label class="col-md-2 control-label">Net Weight</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="1234567890"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--<div class="col-md-12" style="width: 585px">&nbsp</div>-->
                                                </div>
                                                <div class="tab-pane" id="tab20">
                                                    <div class="col-md-12 scroll" style="height: 185px;">
                                                        <div class="col-md-12 row">
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Delivery Term</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="Term"/>
                                                                </div>
                                                                <label class="col-md-2 control-label">Item Term</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="Term"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Ex-Works</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" value="0.00"/>
                                                                </div>
                                                                <label class="col-md-2 control-label">FOB Cost</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="0.00"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">FOB</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="0.00"/>
                                                                </div>
                                                                <label class="col-md-2 control-label">Freight</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="0.00"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Insurance</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" readonly value="0.00"/>
                                                                </div>
                                                                <label class="col-md-2 control-label">O. Dutiables</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control"  placeholder="0.00"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">O.N. Dutiables</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control"  placeholder="0.00"/>
                                                                </div>
                                                                <label class="col-md-2 control-label">Currency</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" disabled value="USD DOLLAR"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab21">
                                                    <div class="col-md-12" style="height: 185px;">

                                                        <div class="col-md-12 scroll" style="height: 145px">
                                                            <table class="table table-hover table-bordered" style="margin-bottom: 0px;">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Type</th><th>Size</th><th>Number</th><th>Seal</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Otto</td>
                                                                        <td>@mdo</td>
                                                                        <td>Otto</td>
                                                                        <td>@mdo</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Thornton</td>
                                                                        <td>@fat</td>
                                                                        <td>Otto</td>
                                                                        <td>@mdo</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Thornton</td>
                                                                        <td>@fat</td>
                                                                        <td>Otto</td>
                                                                        <td>@mdo</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group" style="margin-top: 10px;padding-left: 5px">
                                                                <div class="col-md-2">
                                                                    <select class="form-control select">
                                                                        <option>Type</option>
                                                                        <option>Office 2</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <select class="form-control select">
                                                                        <option>Size</option>
                                                                        <option>Office 2</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control" name="login" placeholder="Number"/>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control" name="login" placeholder="Seal"/>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <a href="#" class="btn btn-primary"><i class="fa fa-plus-square"></i> Add</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab22">
                                                    <div class="col-md-12" style="height: 185px;">

                                                        <div class="col-md-12 scroll" style="height: 145px">
                                                            <table class="table table-hover table-bordered" style="margin-bottom: 0px;">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Invoice #</th><th>Date</th><th>Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Otto</td>
                                                                        <td>@mdo</td>
                                                                        <td>Otto</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Thornton</td>
                                                                        <td>@fat</td>
                                                                        <td>Otto</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Thornton</td>
                                                                        <td>@fat</td>
                                                                        <td>Otto</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group" style="margin-top: 10px;padding-left: 5px">
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control" name="login" placeholder="Invoice #"/>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="input-group" >
                                                                        <input type="text" class="form-control" value="07-07-2014" id="dp-5" data-date="07-07-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="months"/>
                                                                        <span class="input-group-addon add-on"><span class="fa-calendar"></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="login" placeholder="Seal"/>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <a href="#" class="btn btn-primary"><i class="fa fa-plus-square"></i> Add</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END VERTICAL TABS WITH HEADING -->

                                </div>
                                <!-- START TABLE HOVER ROWS -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="padding: 6px;">
                                        <h5 class="panel-title" style="margin: 0px;font-size: small;font-weight: bold;">Declared Item</h5>
                                        <ul class="panel-controls">
                                            <li><a href="#" title="Import"><span class="fa fa-refresh"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body scroll" style="height: 255px;padding-right: 15px;">
                                        <table class="table table-hover table-bordered" style="margin-bottom: 0px;">
                                            <thead>
                                                <tr>
                                                    <th>#</th><th>Item Description</th><th>Declared HSCode</th><th>Declared Value</th><th>Declared Quantity</th><th>Country of Origin</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END WIZARD WITH VALIDATION -->

        </div>

    </div>

</div>
<!-- PAGE CONTENT WRAPPER -->