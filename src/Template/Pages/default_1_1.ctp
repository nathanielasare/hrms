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

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">IDF Number</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="idfnumber" placeholder="IDF Number" required />
                                        </div>
                                        <label class="col-md-3 control-label">Submission Date</label>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input type="text" id="dp-32" class="form-control" data-date-format="dd-mm-yyyy" data-date-viewmode="years"/>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12"><hr /></div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Importer</label>
                                        <div class="col-md-6">
                                            <select class="form-control select" data-live-search="true" required>
                                                <option>Lorem ipsum dolor</option>
                                                <option>Sit amet sicors</option>
                                                <option>Mostoly stofu tiro</option>
                                                <option>Vico sante fara</option>
                                                <option>Delomo ponto si</option>
                                            </select>
                                        </div>
                                        <label class="col-md-1 control-label">TIN</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="login" placeholder="TIN" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Address</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="login" placeholder="Address" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="Contact Person">Contact</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Contact" required/>
                                        </div>
                                        <label class="col-md-1 control-label">Tel.</label>
                                        <div class="col-md-5">
                                            <select multiple class="form-control select" required>
                                                <option>96675355</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Exporter</label>
                                        <div class="col-md-6">
                                            <select class="form-control select" data-live-search="true" required>
                                                <option>Exporter</option>
                                                <option>Sit amet sicors</option>
                                                <option>Mostoly stofu tiro</option>
                                                <option>Vico sante fara</option>
                                                <option>Delomo ponto si</option>
                                            </select>
                                        </div>
                                        <label class="col-md-2 control-label">Country</label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" name="login" placeholder="Country" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Address</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="login" placeholder="Address" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="Contact Person">Contact</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Contact" required/>
                                        </div>
                                        <label class="col-md-1 control-label">Tel.</label>
                                        <div class="col-md-5">
                                            <select multiple class="form-control select" required>
                                                <option>099888332</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12"><hr /></div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="Supply Country"> S. Country</label>
                                        <div class="col-md-4">
                                            <select class="form-control select" required>
                                                <option>Country</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                        <label class="col-md-2 control-label">Currency</label>
                                        <div class="col-md-4">
                                            <select class="form-control select">
                                                <option>Currency</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="Delivery Term"> D. Term</label>
                                        <div class="col-md-4">
                                            <select class="form-control select" required>
                                                <option>Term</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                        <label class="col-md-2 control-label">Item Term</label>
                                        <div class="col-md-4">
                                            <select class="form-control select" required>
                                                <option>Term</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Invoice #</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Invoice Number" required/>
                                        </div>
                                        <label class="col-md-2 control-label" title="Total Value">Total Value</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Total Value" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="Contact Person">Invoice Type</label>
                                        <div class="col-md-4">
                                            <select class="form-control select" required>
                                                <option>Type</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <label class="col-md-2 control-label">Invoice Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" id="dp-33" class="form-control" data-date-format="dd-mm-yyyy" data-date-viewmode="years"/>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12"><hr /></div>

                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Ex-Works</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Ex-Works" required/>
                                        </div>
                                        <label class="col-md-2 control-label">Cost to FOB</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Cost to FOB" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="Contact Person">FOB</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="FOB" required/>
                                        </div>
                                        <label class="col-md-2 control-label">Freight</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Freight" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="Other Dutiables">O. Dutiables</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="O. Dutiables" required/>
                                        </div>
                                        <label class="col-md-2 control-label" title="Total Value">Insurance</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="Insurance" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" title="Not Dutiable">N. Dutiable</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="N. Dutiable" required/>
                                        </div>
                                        <label class="col-md-2 control-label" title="Not Dutiable Type">N.D. Type</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="login" placeholder="N.D. Type" required/>
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-bottom: 10px">
                                        <label class="col-md-6">&nbsp;</label>
                                        <label class="col-md-6">
                                            <button class="btn btn-primary btn-block">6000404</button>
                                        </label>
                                    </div>

                                    <div class="form-group has-warning">
                                        <label class="col-md-2 control-label">Rollback</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="4">User rollback details</textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label" title="Supply Country"> Mode of Payment</label>
                                        <div class="col-md-7">
                                            <select class="form-control select" required>
                                                <option>Payment</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 control-label" title="Supply Country"> Importer's Commercial Level</label>
                                        <div class="col-md-7">
                                            <select class="form-control select" required>
                                                <option>Commercial Level</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 control-label" title="Supply Country"> Exporter's Commercial Level</label>
                                        <div class="col-md-7">
                                            <select class="form-control select" required>
                                                <option>Commercial Level</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-bottom: 15px">
                                        <label class="col-md-5 control-label" title="Supply Country"> Buyer/Seller Relationship</label>
                                        <div class="col-md-7">
                                            <select class="form-control select">
                                                <option>Relationship</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <label class="check"><input type="checkbox" class="icheckbox" checked /> A Sale for Export?</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="check"><input type="checkbox" class="icheckbox"/> Discount Stated on Invoice?</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <label class="check"><input type="checkbox" class="icheckbox"/> Restrictions to Use of Goods?</label>
                                        </div>
                                        <div class="col-md-6">
                                            <!--<label class="col-md-6 control-label" title="Total Value">Discount(%)</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="login" placeholder="10"/>
                                            </div>-->
                                            <label class="check"><input type="checkbox" class="icheckbox"/> Discount Deducted Already?</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <label class="check"><input type="checkbox" class="icheckbox"/> Proceeds Acruing to Seller?</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="check"><input type="checkbox" class="icheckbox"/> Invoice Value is FULL Price?</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <label class="check"><input type="checkbox" class="icheckbox"/> Relationship Price Influence?</label>
                                        </div>
                                        <div class="col-md-6">
                                            &nbsp;
                                        </div>
                                    </div>

                                </div>
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