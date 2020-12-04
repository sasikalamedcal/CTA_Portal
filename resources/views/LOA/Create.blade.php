@extends('layouts.app')
@section('content')
	 xcvxcvx             
<div class="main-body">
    <div class="page-wrapper">
      
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
        
                    
                   @include('layouts.notify')
                    
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                    
                    <!--  Vtiger -->

                            <div class="card-block">
                                <h4 class="sub-title">LOA INFORMATION</h4>

                                <form action="{{ url('loas/store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="esign_document_name" value="Letter of Authority">
                                <input type="hidden" name="reminder_scheme" value="183">
                                <input type="hidden" name="message_template_id" value="221">
                                <input type="hidden" name="is_esign" value="1">
                                <input type="hidden" name="esign_template_id" value="72233">
                                 <input type="hidden" name="case_ref" value="<?php echo uniqid(); ?>">
                                <input type="hidden" name="Authorization" value="931562c0-d0c1-11ea-9876-cd469a6d8f22" />
                                	
                                	
                                    <div class="row">
                                    	<div class="col-sm-6">
                                         <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Title *</label>
                                                <div class="col-sm-12">
                                                    <select name="title" data-label="salutationtype" class="form-control" required="">
                                                       <option value=""></option>
                                                        <option value="Dr">Dr</option>
                                                        <option value="Mr">Mr</option>
                                                        <option value="Mrs">Mrs</option>
                                                        <option value="Ms">Ms</option>
                                                        <option value="Prof">Prof</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">First Name *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="forename" maxlength="40" data-label="" value="" required=""> 
                                                </div>
                                            </div>
                                         </div>   
                                        
                                      </div>
                                      
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Last Name *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="surname" maxlength="80" data-label="" value="" required="">  
                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Date Of Birth *</label>
                                                <div class="col-sm-12">
                                                    <input type="date" class="form-control" name="dob" 
                                                    maxlength="data-label=&quot;&quot;" value="" required="required">
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Postcode *</label>
                                                <div class="col-sm-12">
													<input type="text" id="lookup_field" class="form-control" name="postcode" maxlength="30" data-label="" 
                                                    value="" required="required">  
                                                  
                                                </div>                                            
                                             </div>
                                         </div>   
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Address Line 1 * </label>
                                                <div class="col-sm-12">
                                                <input type="text" id="output_field" class="form-control" name="address_line_1"  
                                                    value="" required="required">  
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Address Line 2 </label>
                                                <div class="col-sm-12">
                                                <input type="text" id="output_field" class="form-control" name="address_line_2"  
                                                    value="">  
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Town *</label>
                                                <div class="col-sm-12">
													<input type="text" id="lookup_field" class="form-control" name="town" data-label="" 
                                                    value="" required="required">  
                                                </div>                                            
                                             </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">County  </label>
                                                <div class="col-sm-12">
                                                <input type="text" id="output_field" class="form-control" name="county"  
                                                    value="">  
                                                </div>
                                            </div>
                                        </div>
                                      </div>  
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Email Address </label>
                                                <div class="col-sm-12">
												<input type="email" class="form-control" name="email" data-label="Primary Email" value=""/>                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Phone Number *</label>
                                                <div class="col-sm-12">
                                                	<input type="tel" class="form-control" name="phone" maxlength="11" 
                                                    pattern="^(\(?0|\+44)((( ?\(?([12356789]))( ?\(?\d\)?){9})|( ?\(?(1\d\d|500|800)( ?\(?\d\)?){6}))( ?#\(?\d{3,4}\)?)?$" 
                                                    value="" required="required"> 
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Mobile Number *</label>
                                                <div class="col-sm-12">
                                                	<input type="tel" class="form-control" name="mobile" min="10" maxlength="11" 
                                                    pattern="^(\(?0|\+44)((( ?\(?([12356789]))( ?\(?\d\)?){9})|( ?\(?(1\d\d|500|800)( ?\(?\d\)?){6}))( ?#\(?\d{3,4}\)?)?$" value="" required=""> 
                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Happy to be referred to CTA?</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="fld_happytobereferredtocta_1918" 
                                                    data-label="label:Happy+to+be+referred+to+CTA%3F">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <input type="hidden" class="form-control" name="leadsource" data-label="leadsource"  
                                                    value="Aims Legal &amp; Bank Charge">
                                                 
                                                </div>
                                            </div>
                                        </div>
                                      </div>    
                                      
                                      <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Comments </label>
                                                <div class="col-sm-12">
                                                   <textarea rows="2" cols="" class="form-control" name="cf_vtcmloa_comments"></textarea>
                                                   <input type="hidden" name="cf_leads_username" maxlength="100" data-label="" 
                                                   value="">                                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Lead Source *</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="fld_leadsource" required>
                                                       <option value="">Please Select Lead Source</option>
                                                       <option value="146">Aims Legal</option>
                                                                                                                <option value="147">Bank Charges</option>
                                                                                                                <option value="145">Goodwin Barrett</option>
                                                                                                                <option value="148">FMS Data</option>
                                                                                                                <option value="149">JPS Data</option>
                                                                                                                <option value="150">Fuse Data</option>
                                                                                                                <option value="151">Star Advice Group</option>
                                                                                                                <option value="152">Undisclosed</option>
                                                                                                                <option value="164">Impakt Claims</option>
                                                    	
                                                    </select>
                                                    
                                                  
												</div>
                                            </div>
                                        </div>
                                      </div>  
                                      
                                      <div class="row">
                                      
                                         <div class="col-sm-12">
                                           
                                          
                                      		
                                            <table class="table table table-bordered" id="order">
					                    <thead>
					                        <tr>
                                                <th>Lender</th>
					                            <th>Account Type</th>
                                                <th></th>
					                        </tr>
					                    </thead>
					                    <tbody>
                                        
                                        
					                        <tr id="rowcount">
                                               <!-- <td><span id='sn'>1</span></td>-->
                                                <td>
                                                <select id="lender" class="form-control" name="data[1][lender]">
                                                    	<option value="">Please Select Lender</option>
                                                       
                                                    </select> 
                                                 </td>
                                                <td>
                                                  <select class="form-control col-sm-12" name="data[1][account]" id="account"> 
                                                    	<option value="">Please Select Account Type</option>
                                                       
                                                    </select>
                                                    
                                                </td>
                                                <td></td>
                                            </tr>
                                
                                            <tr class="order-list"></tr>
                                            <tr>
                                            <td colspan="7">
                                          	 <a class="demo-delete-row btn btn-success addmore" id="addmore" >Add new</a>
                                            </td>
                                           </tr>
                                           
										</tbody>
					                </table>
                                    
                                           
                                    
                                         </div>
                                      	
                                      </div>
                                      
                                      
                                      
                                      
                                      
                                      
                                      <div class="row">
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Eligible for Plevin & LOA Out?</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="loa">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
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



					                    
					               		
					            
                                
                                


<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="{{ asset('backend/assets/js/postcodes.min.js') }}" ></script>

<script type="text/javascript">
var counter=$('table#order tr#rowcount').length;
$("#addmore").on('click',function(){
	counter++;
	
	$('tr.order-list').before(html);
	i++;
});

//deletes the selected table rows
$(document).on('click','a#delete', function() {
	$(this).closest("tr").remove();
	//$('.case:checkbox:checked').parents("tr").remove();
	//$('#check_all').prop("checked", false); 
	//calculateTotal();
});


</script>

<script>
$('#postcode_lookup_field').setupPostcodeLookup({
  api_key: 'ak_k8pwwjngF2y9rTbOzKJK0dDTSzTK5',
  output_fields: {},
  onAddressSelected: address => {
   const result = [
     address.line_1,
     address.line_2,
     address.line_3,
     address.post_town,
     address.postcode,
   ].filter(elem => elem !== "")
    .join("\n");
   $("#output_field").html(result);
  }
});

</script>
<script>
$('select').selectpicker();
</script>

<style>
input#idpc_input
{
	font-size: 14px;
    border-radius: 2px;
    border: 1px solid #cccccc;
	display: block;
    width: 60%;
    padding: .5rem .75rem;
    line-height: 1.25;
    color: #495057;
    background-color: #fff;
    background-image: none;
    background-clip: padding-box;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	float:left;

}
button#idpc_button
{
	background-color: #f5ac31;
    border-color: #f5ac31;
    color: #fff;
    cursor: pointer;
    transition: all ease-in 0.3s;
    /* border-radius: 2px; */
    text-transform: capitalize;
    font-size: 14px;;
    padding: 0.3rem 1rem;
	width:40%;
	float:right;
}
select#idpc_dropdown
{
	font-size: 14px;
    border-radius: 2px;
    border: 1px solid #cccccc;
	display: block;
    width: 100%;
    padding: .5rem .75rem;
    line-height: 1.25;
    color: #495057;
    background-color: #fff;
    background-image: none;
    background-clip: padding-box;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;

}
</style>
<script>

$(document).ready(function() {
    $("select").change(function(){
			
			if($("#lender" ).val() == "Others")
            {
               $('#lender_others').css('display', ($("#lender" ).val() == 'Others') ? 'block' : 'none');
            }else 
			{
				$('#lender_others').css('display', ($("#lender" ).val() != 'Others') ? 'none' : 'block');
			}
			
			if($("#account" ).val() == "Others")
            {
               $('#account_others').css('display', ($("#account" ).val() == 'Others') ? 'block' : 'none');
            }else 
			{
				$('#account_others').css('display', ($("#account" ).val() != 'Others') ? 'none' : 'block');
			}
		
        });
		
		
});


//$('#lender').change(function() {
//	
//    $('#lender_others').css('display', ($(this).val() == 'Others') ? 'block' : 'none');
//});
//$('#account').change(function() {
//    $('#account_others').css('display', ($(this).val() == 'Others') ? 'block' : 'none');
//});
     
</script>
<style>
table#order {
    width: 97% !important;
    margin: 0 auto !important;
}
</style>
@stop 
