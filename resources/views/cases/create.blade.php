@extends('layouts.app')
@section('content')
	              
<div class="main-body">
    <div class="page-wrapper">
      
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
        
                    
                    @if(request()->get('success'))
                    <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   	<p>The record has been saved successfully!</p>
                    </div>
                    @endif
                    
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                    
                    <!--  Vtiger -->

                            <div class="card-block">
                                <h4 class="sub-title">CAMPAIGN INFORMATION</h4>

                                <form id="__vtigerWebForm" name="Plevin Introducers SA" 
                                action="https://anthonycasetoanswercom.od2.vtiger.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" 
                                enctype="multipart/form-data">
                                  @csrf
                                
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
                                                    <select name="salutationtype" data-label="salutationtype" class="form-control" required="">
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
                                                <label class="col-sm-12 col-form-label">Postcode </label>
                                                <div class="col-sm-12">
<!--													<input type="text" id="lookup_field" class="form-control" name="city" maxlength="30" data-label="" value="">  
-->													<div id="postcode_lookup_field"></div>
                                                </div>                                            
                                             </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Address </label>
                                                <div class="col-sm-12">
                                                   <textarea id="output_field" class="form-control" id="output_field" name="cf_leads_addressline1"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Email Address </label>
                                                <div class="col-sm-12">
												<input type="email" class="form-control" name="email" data-label="Primary Email" value="" />                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Phone Number *</label>
                                                <div class="col-sm-12">
                                                	<input type="number" class="form-control" name="phone" maxlength="50" data-label="" value="" required=""> 
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Mobile Number *</label>
                                                <div class="col-sm-12">
                                                	<input type="number" class="form-control" name="mobile" maxlength="50" data-label="" value="" required=""> 
                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Happy to be referred to CTA?</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="cf_leads_happytobereferredtocta" 
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
                                                   <textarea rows="2" cols="" class="form-control" name="cf_leads_comments"></textarea>
                                                   <input type="hidden" name="cf_leads_username" maxlength="100" data-label="" 
                                                   value="{{Auth::user()->firstname}} {{Auth::user()->lastname}}">                                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Lead Source *</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="leadsource" data-label="cf_leads_leadsources" required>
                                                    	@foreach($leadsources as $leadsource)
                                                        <option value="{{$leadsource->lead_source}}">{{$leadsource->lead_source}}</option>
                                                        @endforeach
                                                        <option value="Undisclosed">Undisclosed</option>
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
@stop 
