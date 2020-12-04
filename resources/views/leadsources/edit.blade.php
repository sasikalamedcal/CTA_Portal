@extends('layouts.app')
@section('content')
<div class="main-body">
    <div class="page-wrapper">
     
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic Form Inputs card start -->
                    @include('layouts.notify')
                      @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div>
                    @endif
                    <div class="card">
                                         
                            <div class="card-block">
                                <h4 class="sub-title">LEAD SOURCE INFORMATION</h4>

                                <form id="demo-bvd-notempty" method="post" action="{{ url('leadsources/update', $leadsource->id) }}">
                                 @csrf
                                 @method('PATCH')
					
                            	
                                       <div class="row">
                                       
                                       <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Campaign *</label>
                                                <div class="col-sm-12">
                                                                                                        
                                                     <select class="form-control" name="campaign_id">
                                                       <?php foreach($campaigns as $campaign) {
														$selected =''; 
														if($campaign->id==$leadsource->campaign_id)
														$selected='selected'; ?>
														<option value="{{$campaign->id}}" <?php echo $selected; ?>>{{$campaign->name}} </option>
														<?php } ?>
                                                    </select>
                                                    
                                                  
												</div>
                                            </div>
                                        </div>
                                    	 
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Lead Source ID *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="lead_id" value="{{$leadsource->lead_id}}" required=""> 
                                                                                          
                                                </div>
                                            </div>
                                         </div>  
                                        
                                           
                                         
                                        
                                        
                                      </div>
                                      
                                      
                                       <div class="row">
                                       
                                       <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Lead Source *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="lead_source" value="{{$leadsource->lead_source}}" required=""> 
                                                    <!--<div class="col-form-label">Sorry, that username's taken.</div>-->                                                                                               
                                                </div>
                                            </div>
                                         </div>
                                       
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Contact Name</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="contact_name" value="{{$leadsource->contact_name}}">  
                                                </div>
                                            </div>
                                         </div> 
                                       
                                           
                                         
                                         </div>
                                         
                                         <div class="row">  
                                         
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Phone Number</label>
                                                <div class="col-sm-12">
												<input type="number" class="form-control" name="contact_number" value="{{$leadsource->contact_number}}"/>
                                                 </div>
                                            </div>
                                         </div>
                                                                                
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Email Address</label>
                                                <div class="col-sm-12">
                                                	<input type="email" class="form-control" name="company_email" value="{{$leadsource->company_email}}"> 
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                   
                                    
                                       <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                            <label class="col-sm-12 col-form-label">  </label>
                                            <div class="col-sm-12">
                                               <input type="submit" class="btn btn-primary" value="Update"></button>
                                               <button class="btn btn-danger"  type="button" onclick="history.go(-1);">Go Back</button>
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
 <script>
 $(".toggle-password").click(function() {
  $(this).toggleClass("ti-more-alt ti-more");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

$(".toggle-password1").click(function() {
  $(this).toggleClass("ti-more-alt ti-more");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});


 </script> 
 <style>
 .field-icon {
  float: right;
  margin-right: 10px;
  margin-top: -65px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}
 </style> 
                                                 
	
@stop 
