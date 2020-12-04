@extends('layouts.app')
@section('content')

	    <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">Account</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->
                
                

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
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
                    
					<div class="row">
					    <div class="col-lg-12">
					        <div class="panel">
					            <div class="panel-heading">
					                <h3 class="panel-title">Account Details</h3>
					            </div>
                              
					            <!--Block Styled Form -->
					            <!--===================================================-->
					            <form id="demo-bvd-notempty" method="post" action="{{ route('update', $user->id) }}">
                                 @csrf
                                 @method('PATCH')

					                <div class="panel-body">
					                    <div class="row">
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">First Name</label>
					                                <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}">
					                            </div>
					                        </div>
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Last Name</label>
					                                <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}">
					                            </div>
					                        </div>
					                    </div>
                                        
                                        <div class="row">
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Phone Number</label>
					                                <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
					                            </div>
					                        </div>
                                            
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Email Address</label>
					                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
					                            </div>
					                        </div>
					                    </div>
                                        
                                      
                                     
                                        <div class="row">
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Address Line 1</label>
					                                <input type="text" class="form-control" name="address_line" value="{{$user->address_line}}">
					                            </div>
					                        </div>
                                            
                                             <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Address Line 2</label>
					                                <input type="text" class="form-control" name="address_line_extended" 
                                                    value="{{$user->address_line_extended}}">
					                            </div>
					                        </div>
					                       
					                    </div>
                                        
                                        <div class="row">
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">City</label>
					                                <input type="text" class="form-control" name="city" value="{{$user->city}}">
					                            </div>
					                        </div>
                                            
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">State</label>
					                                <input type="text" class="form-control" name="state" value="{{$user->state}}">
					                            </div>
					                        </div>
					                    </div>
                                        
                                        <div class="row">
					                        <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Country</label>
					                                <input type="text" class="form-control" name="country" value="{{$user->country}}" />
					                            </div>
					                        </div>
                                            
                                             <div class="col-sm-6">
					                            <div class="form-group">
					                                <label class="control-label">Zipcode</label>
					                                <input type="text" class="form-control" name="zipcode" value="{{$user->zipcode}}">
					                            </div>
					                        </div>
					                    </div>
                         
					                </div>
                                    
					                <div class="panel-footer">
					                    <button class="btn btn-success" type="submit">Update</button>
                                         <button class="btn btn-danger"  type="button" onclick="history.go(-1);">Cancel</button>
					                </div>
					            </form>
					            <!--===================================================-->
					            <!--End Block Styled Form -->
					
					        </div>
			
					
					    </div>
					    
					</div>
							
                </div>
                <!--===================================================-->
                <!--End page content-->
			
@endsection 
