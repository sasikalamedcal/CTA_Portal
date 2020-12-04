@extends('layouts.app')
@section('content')
<div class="main-body">
    <div class="page-wrapper">
     
 <!-- Page-body start -->
<div class="page-body">
@include('layouts.notify')
<!-- Basic table card start -->
<div class="card">
    <div class="card-header">
        <h5>LOA INFORMATION</h5>
        <div class="card-header-right">
               <form action="{{ url('loas/create')}}" method="post" style="display: inline-block">
                @csrf
                @method('GET')
                <button class="btn btn-success btn-sm" type="submit"> Add New</button>
                </form>		 
        </div>
    </div>
    
    <div class="card-block">
        <div class="table-responsive">
<table id="alt-pg-dt" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
<thead>
<tr>
    <th>#</th>
    <th>Name</th>
    <th>DOB</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Status</th>
</tr>
</thead>

<tbody>
<?php 
$i=1;
foreach($loas as $loa)  { ?>
<tr>
    <td>{{$i}}</td>
   	<td>{{$loa->title}} {{$loa->forename}} {{$loa->surname}}</td>
    <td>{{$loa->dob}}</td>
    <td>{{$loa->phone}}</td>
    <td>{{$loa->email}}</td>
    <td>
    <?php if($loa->is_download==0){ ?>
    <a href="{{ url('loas/download',$loa->fastdox_id)}}" class="btn btn-danger btn-sm" style="color:#fff;">Download</a>
    <?php }else if($loa->is_vtiger==0){ ?>
     <a href="{{ url('loas/vtiger',$loa->fastdox_id)}}" class="btn btn-warning btn-sm" style="color:#fff;">Send Vtiger</a></td>
     <?php }else { ?>
     <a class="btn btn-success btn-sm" style="color:#fff;">Completed</a></td>
     <?php } ?>
  </tr>
<?php $i++; } ?>   
</tbody>


</table>
            
        </div>
    </div>
</div>
<!-- Basic table card end -->

</div>

</div>
</div>
@stop 
