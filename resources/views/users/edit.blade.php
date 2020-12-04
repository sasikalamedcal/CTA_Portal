@extends('layouts.app')
@section('content')
<div class="main-body">
    <div class="page-wrapper">
     
        <!-- Page body start -->
        <div class="page-body">
        @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div><br />
            @endif
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                                         
                            <div class="card-block">
                                <h4 class="sub-title">User Information</h4>

                                <form id="demo-bvd-notempty" method="post" action="{{ url('users/update', $user->id) }}">
                                 @csrf
                                 @method('PATCH')
					
                            
                                    <div class="row">
                                    	
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">First Name *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="firstname" maxlength="40" data-label="" 
                                                    value="{{$user->firstname}}" required=""> 
                                                </div>
                                            </div>
                                         </div>  
                                         
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Last Name *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="lastname" maxlength="80" data-label="" 
                                                    value="{{$user->lastname}}" required="">  
                                                </div>
                                            </div>
                                         </div> 
                                        
                                      </div>
                                      
                                      
                                       <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Phone Number *</label>
                                                <div class="col-sm-12">
												<input type="number" class="form-control" name="phone" data-label="" 
                                                value="{{$user->phone}}" required="" />                                                
                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Email Address *</label>
                                                <div class="col-sm-12">
                                                	<input type="email" class="form-control" name="email" maxlength="50" data-label="" 
                                                    value="{{$user->email}}"> 
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                      
                                      <div class="row">
                                       
                                         
                                           
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Password </label>
                                                <div class="col-sm-12">
                                                	<input type="password" class="form-control"  id="password-field"  name="password" maxlength="50" 
                                                    data-label="" value="">
                                                      <p style="line-height:18px">
                                                    The Password must 6 characters; should contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character, but cannot contain whitespace.
                                                    </p>
                                                    <span toggle="#password-field" class="ti-more-alt field-icon toggle-password">                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Confirm Password </label>
                                                <div class="col-sm-12">
                                                	<input type="password" class="form-control"  id="password-field1" name="password_confirmation" > 
                                                    <p style="line-height:18px">
                                                    The Password must 6 characters; should contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character, but cannot contain whitespace.
                                                    </p>
                                                    <span toggle="#password-field1" class="ti-more-alt field-icon toggle-password1">                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                      </div>
                                      
                                      <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Role *</label>
                                                <div class="col-sm-12">
													<select class="form-control" name="role">
                                                    	<option value="2" <?php if($user->role==2) {  echo "checked";}?>>User</option>
                                                        <option value="1" <?php if($user->role==1) {  echo "checked";}?>>Admin</option>
                                                    </select>
                                                 </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Status *</label>
                                                <div class="col-sm-12">
                                                	<select class="form-control" name="status">
                                                    	<option value="1" <?php if($user->active==1) {  echo "checked";}?>>Active</option>
                                                        <option value="0" <?php if($user->active==0) {  echo "checked";}?>>Inactive</option>
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
  margin-top: -94px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}
 </style> 
                                                       
	
@stop 
