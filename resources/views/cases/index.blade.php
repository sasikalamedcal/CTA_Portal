@extends('layouts.app')
@section('content')

	    <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">Units</h1>

                    <!--Searchbox-->
                    <div class="searchbox">
                        <div class="form-inline">
                            <div class="row">
                                <div class="col-sm-6 text-xs-center">
                                    <div class="form-group">
                                        <a id="" class="btn btn-purple" href="{{url('admin/units/create')}}"><i class="demo-pli-plus"></i> Add New</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->
                
                

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                   
                    @include('layouts.notify')
                      
					<div class="row">
					    <div class="col-lg-12">
							
                       <div class="panel">
					    <div class="panel-heading">
					        <h3 class="panel-title">Unit List</h3>
					    </div>
					
					    <!-- Foo Table - Add & Remove Rows -->
					    <!--===================================================-->
					    <div class="panel-body">
					        <table id="alt-pg-dt" class="table table-striped table-bordered nowrap" data-page-size="7">
					            <thead>
					                <tr>
                                        <th data-sort-initial="true" data-toggle="true">#</th>
					                    <th>Name</th>
					                    <th>Code</th>
                                        <th data-sort-ignore="false" class="min-width"></th>
                                        <th data-sort-ignore="false" class="min-width"></th>
					                </tr>
					            </thead>
					            
					            <tbody>
                                <?php 
									$i=1;
								    foreach($units as $unit)  { ?>
					                <tr>
					                    <td>{{$i}}</td>
					                    <td>{{$unit->unit_name}}</td>
					                    <td>{{$unit->unit_code}}</td>
                                        <td><a class="btn btn-success btn-xs" href="{{ url('admin/units/edit',$unit->id)}}">
                                        <i class="demo-psi-pen-5"></i></a></td>
                                        <td>
                                            <form action="{{ url('admin/units/destroy', $unit->id)}}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-xs" type="submit"><i class="demo-pli-cross"></i></button>
                                            </form>
                                        </td>
                                        
					                </tr>
					             <?php $i++; } ?>   
					            </tbody>
					            
					        </table>
					    </div>
					    <!--===================================================-->
					
							</div>
					
					    </div>
					    
					</div>
			
                </div>
                <!--===================================================-->
                <!--End page content-->
								
@endsection 
