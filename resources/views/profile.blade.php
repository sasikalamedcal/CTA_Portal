@extends('layouts.app')
@section('content')


<div class="main-body">
    <div class="page-wrapper">
         
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                	@include('layouts.notify')
                    
                    
                 
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                                         
                            <div class="card-block">
                                <h4 class="sub-title">UPDATE PROFILE</h4>

                                <form id="demo-bvd-notempty" method="post" action="{{ url('profile/update', $user->id) }}">
                                 @csrf
                                 @method('PATCH')
					
                            
                                    <div class="row">
                                    	
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">First Name *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="firstname" 
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
                                                <label class="col-sm-12 col-form-label">Role *</label>
                                                <div class="col-sm-12">
													<select class="form-control" name="role">
                                                    	<option value="2" <?php if($user->role==2) {  echo "selected";}?>>User</option>
                                                        <option value="1" <?php if($user->role==1) {  echo "selected";}?>>Admin</option>
                                                    </select>
                                                 </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Status *</label>
                                                <div class="col-sm-12">
                                                	<select class="form-control" name="status">
                                                    	<option value="1" <?php if($user->status==1) {  echo "selected";}?>>Active</option>
                                                        <option value="0" <?php if($user->status==0) {  echo "selected";}?>>Inactive</option>
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

@endsection 
