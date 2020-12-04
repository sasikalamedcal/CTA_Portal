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
                                         
                            <div class="card-block">
                                <h4 class="sub-title">CAMPAIGN INFORMATION</h4>
                            
                                 <form action="{{ url('campaigns/update',$campaign->id) }}" method="post" enctype="multipart/form-data">
                                     @csrf
                                     @method('PATCH')
                                     
                                      <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Name *</label>
                                                <div class="col-sm-12">
													<input type="text" class="form-control" name="name" maxlength="50" data-label="" value="{{$campaign->name}}"> 
                                                 </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Status *</label>
                                                <div class="col-sm-12">
                                                	<select class="form-control" name="status">
                                                    	<option value="1" <?php if($campaign->ip==1){echo "checked";}?>>Active</option>
                                                        <option value="0" <?php if($campaign->ip==0){echo "checked";}?>>Inactive</option>
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
                                               <input type="submit" class="btn btn-primary"  value="update"></button>
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
