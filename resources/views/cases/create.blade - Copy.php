@extends('layouts.app')
@section('content')

	              
<div class="main-body">
    <div class="page-wrapper">
      
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                    
                    
                    <!--  Vtiger -->

                  
                    
                       
                            <div class="card-block">
                                <h4 class="sub-title">CASE INFORMATION</h4>

                                <form id="__vtigerWebForm" name="Plevin Introducers SA" 
                                action="https://anthonycasetoanswercom.od2.vtiger.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" 
                                enctype="multipart/form-data">
                                
                                <input type="hidden" name="__vtrftk" value="sid:5433244c6dac04f3babd9f96ea68cbe42686ee10,1593613416">
                                <input type="hidden" name="publicid" value="f37f65650dc24a174aaac994f567d17b">
                                <input type="hidden" name="urlencodeenable" value="1">
                                <input type="hidden" name="name" value="Plevin Introducers SA">
                                <input type="hidden" name="__vtCurrency" value="1">
                                	
                                    <div class="row">
                                    	<div class="col-sm-6">
                                         <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Title *</label>
                                                <div class="col-sm-12">
                                                    <select name="salutationtype" data-label="salutationtype" class="form-control">
                                                       <option value=""></option>
                                                        <option value="Dr.">Dr.</option>
                                                        <option value="Mr.">Mr.</option>
                                                        <option value="Mrs.">Mrs.</option>
                                                        <option value="Ms.">Ms.</option>
                                                        <option value="Prof.">Prof.</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">First Name *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="firstname" maxlength="40" data-label="" value="" required=""> 
                                                </div>
                                            </div>
                                         </div>   
                                        
                                      </div>
                                      
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Last Name *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="lastname" maxlength="80" data-label="" value="" required="">  
                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Date Of Birth </label>
                                                <div class="col-sm-12">
                                                    <input type="date" class="form-control" name="cf_leads_clientdateofbirth" 
                                                    maxlength="data-label=&quot;&quot;" value="">
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Postcode</label>
                                                <div class="col-sm-12">
													<input type="text" class="form-control" name="city" maxlength="30" data-label="" value="">  																			                                                </div>                                            
                                             </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Address </label>
                                                <div class="col-sm-12">
                                                   <input type="text" class="form-control" name="cf_leads_addressline1" maxlength="100" data-label="" value=""> 
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Email Address *</label>
                                                <div class="col-sm-12">
												<input type="email" class="form-control" name="email" data-label="Primary Email" value="" required="" />                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Phone Number*</label>
                                                <div class="col-sm-12">
                                                	<input type="text" class="form-control" name="phone" maxlength="50" data-label="" value=""> 
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Mobile Number</label>
                                                <div class="col-sm-12">
                                                	<input type="text" class="form-control" name="mobile" maxlength="50" data-label="" value="" required=""> 
                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Lead Source *</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="leadsource" data-label="leadsource" required="">
                                                    <option value="Aims Legal &amp; Bank Charge">Aims Legal &amp; Bank Charge</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      </div>    
                                      
                                      <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Comments </label>
                                                <div class="col-sm-12">
                                                   <textarea rows="5" cols="5" class="form-control" name="cf_leads_comments"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                      </div>    
                                      
                                       <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                            <label class="col-sm-12 col-form-label">  </label>
                                            <div class="col-sm-12">
                                               <input type="hidden" name="cf_leads_ipaddress" maxlength="100" data-label="" value="" required="">
                                               <input type="submit" class="btn btn-primary" id="vtigerFormSubmitBtn" value="Submit"></button>
                                            </div>
                                            </div>
                                        </div>
                                      </div>      
                                      
                                      
                                      
                                      
                                                
                                        
                                        </form>

                                            
                                            
                                        </div>
                                    </div>
                                    <!-- Basic Form Inputs card end -->
            
                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Page body end -->
                                        </div>
</div>

<script  type="text/javascript">window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.getElementById("__vtigerWebForm"), inputs = form.elements; form.onsubmit = function() { document.getElementById("vtigerFormSubmitBtn").disabled=true;var required = [], att, val; var startDate;var endDate;var endDate1;for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(inputs[i].name == "birthday"){birthdayDate = new Date(inputs[i].value);todayDate = new Date();todayDate.setHours(0,0,0,0);birthdayDate.setHours(0,0,0,0);if(birthdayDate >= todayDate){alert("Date of Birth should be less than Today's Date.");document.getElementById("vtigerFormSubmitBtn").disabled=false;return false;}}if(inputs[i].name=="support_start_date" || inputs[i].name=="startdate"){startDate = inputs[i].value;}if(inputs[i].name=="support_end_date" || inputs[i].name=="targetenddate" || inputs[i].name=="enddate"){endDate = inputs[i].value;}if(inputs[i].name=="actualenddate"){endDate1 = inputs[i].value;}if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("data-label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); document.getElementById("vtigerFormSubmitBtn").disabled=false; return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters"); document.getElementById("vtigerFormSubmitBtn").disabled=false; return false;}}}if(startDate){if(typeof startDate !== "undefined") {if(endDate){if(typeof endDate !== "undefined") {startDate = new Date(startDate);endDate = new Date(endDate);if(endDate < startDate){alert("End Date should be greater than or equal to Start Date");document.getElementById("vtigerFormSubmitBtn").disabled = false;return false;}}}if(endDate1){if(typeof endDate1 !== "undefined") {startDate = new Date(startDate);endDate1 = new Date(endDate1);if(endDate1 < startDate){alert("End Date should be greater than or equal to Start Date");document.getElementById("vtigerFormSubmitBtn").disabled = false;return false;}}}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); document.getElementById("vtigerFormSubmitBtn").disabled=false;return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("label");var elemDataType = numberTypeInputs[i].getAttribute("datatype");if(val != "") {if(elemDataType == "double") {var numRegex = /^[+-]?\d+(\.\d+)?$/;}else{var numRegex = /^[+-]?\d+$/;}if (!numRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); document.getElementById("vtigerFormSubmitBtn").disabled=false; return false;}}}var dateTypeInputs = document.querySelectorAll("input[type=date]");for (var i = 0; i < dateTypeInputs.length; i++) {dateVal = dateTypeInputs[i].value;var elemLabel = dateTypeInputs[i].getAttribute("label");if(dateVal != "") {var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;if(!dateRegex.test(dateVal)) {alert("For "+ elemLabel +" field please enter valid date in required format"); document.getElementById("vtigerFormSubmitBtn").disabled=false; return false;}}}var inputElems = document.getElementsByTagName("input");var totalFileSize = 0;for(var i = 0; i < inputElems.length; i++) {if(inputElems[i].type.toLowerCase() === "file") {var file = inputElems[i].files[0];if(typeof file !== "undefined") {var totalFileSize = totalFileSize + file.size;}}}if(totalFileSize > 52428800) {alert("Maximum allowed file size including all files is 50MB.");document.getElementById("vtigerFormSubmitBtn").disabled=false;return false;}var inputElem = document.querySelectorAll("input[type=file]");var fileSize = 0;for(var i = 0; i < inputElem.length; i++) {if(inputElem[i].type.toLowerCase() ===  "file") {if(inputElem[i].hasAttribute("selectedTypeImage")) {var imageFile = inputElem[i].files[0];var fileSize = imageFile.size;}}if(fileSize > 5242880) {alert("Maximum allowed image size is 5MB.");document.getElementById("vtigerFormSubmitBtn").disabled=false;return false;}}}; }</script>

								
@stop 
