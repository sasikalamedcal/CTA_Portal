@extends('layouts.app')
@section('content')


<div class="main-body">
    <div class="page-wrapper">
     
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
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
                    
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                                         
                            <div class="card-block">
                                <h4 class="sub-title">UPDATE PROFILE</h4>
                                
                                 <form id="demo-bvd-notempty" action="{{ url('password/update', $user->id) }}" method="POST" >
                                 @csrf
                                 @method('PATCH')
                                
                                    <div class="row">
                                    	
                                         <div class="col-sm-12">
                                            <div class="form-group ">
                                                <label class="col-sm-12 col-form-label">Current Password *</label>
                                                <div class="col-sm-12">
                                                    <input type="password" id="password-field" class="form-control" name="current_password" required="">
                                                     <p style="font-size:10px">
                                                    Minimum of 6 characters including at least 1 number. Please note, passwords are case sensitive.
                                                    </p>
                                                    <span toggle="#password-field" class="ti-more-alt field-icon toggle-password">                                                    </span>
                                                    
                                                  </div>
                                            </div>
                                         </div>  
                                     </div>    
                                     
                                     
                                     <div class="row">    
                                         <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">New Password *</label>
                                                <div class="col-sm-12">
                                                    <input type="password"  id="password-field1" class="form-control" name="password" required="">
                                                     <p style="font-size:10px">
                                                    Minimum of 6 characters including at least 1 number. Please note, passwords are case sensitive.
                                                    </p>
                                                     <span toggle="#password-field1" class="ti-more-alt field-icon toggle-password1">
                                                     </span>
                                                 </div>
                                            </div>
                                         </div> 
                                        
                                      </div>
                                      
                                      
                                       <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Confirm Password *</label>
                                                <div class="col-sm-12">
												<input type="password"  id="password-field2" class="form-control" name="password_confirmation" required=""> 
                                                <p style="font-size:10px">
                                                    Minimum of 6 characters including at least 1 number. Please note, passwords are case sensitive.
                                                    </p> 
                                                     <span toggle="#password-field2" class="ti-more-alt field-icon toggle-password2">
                                                     </span>
                                                </div>
                                            </div>
                                         </div>   
                                      </div>
                                      
                                 
                                      
                                      
                                    
                                       <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                            <label class="col-sm-12 col-form-label">  </label>
                                            <div class="col-sm-12">
                                               <input type="submit" class="btn btn-primary"  value="Update"></button>
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


 $(".toggle-password2").click(function() {
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
 
@endsection 
