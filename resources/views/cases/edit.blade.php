@extends('layouts.app')
@section('content')

	    <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">Units</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->
                
                

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
					<div class="row">
					    <div class="col-lg-12">
		
					        <div class="panel">
					            <div class="panel-heading">
					                <h3 class="panel-title">Edit Unit</h3>
					            </div>
                                
                                
                                 @if ($errors->any())
                                  <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                  </div>
                                @endif
                                

					            <form id="demo-bvd-notempty" method="post" action="{{ url('admin/units/update', $unit->id) }}" class="form-horizontal">
                                 @csrf
                                 @method('PATCH')
					                <div class="panel-body">
					                   
					                    <!--NOT EMPTY VALIDATOR-->
					                    <!--===================================================-->
					                    <fieldset>
					                        <div class="form-group">
					                            <label class="col-lg-3 control-label">Unit name</label>
					                            <div class="col-lg-7">
					                                <input type="text" class="form-control" name="unit_name" value="{{ $unit->unit_name }}">
					                            </div>
					                        </div>
                                            
                                            <div class="form-group">
					                            <label class="col-lg-3 control-label">Percent</label>
					                            <div class="col-lg-7">
					                                <input type="text" class="form-control" name="unit_code" value="{{ $unit->unit_code }}">
					                            </div> 
					                        </div>
					                        
					                    </fieldset>
					                    <!--===================================================-->
					
					                </div>
					                <div class="panel-footer">
					                    <div class="row">
					                        <div class="col-sm-7 col-sm-offset-3">
                                           		  <button class="btn btn-success" type="submit">Save</button>
                                            	  <button class="btn btn-danger"  type="button" onclick="history.go(-1);">Cancel</button>
					                        </div>
					                    </div>
					                </div>
					            </form>

					        </div>
					    
					
					    </div>
					    
					</div>
					
                </div>
                <!--===================================================-->
                <!--End page content-->

								
@endsection 
