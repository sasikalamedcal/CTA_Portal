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
        <h5>CAMPAIGN INFORMATION</h5>
        <div class="card-header-right">
               <form action="{{ url('campaigns/create')}}" method="post" style="display: inline-block">
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
    <th>Status</th>
    <th></th>
    <th></th>
</tr>
</thead>

<tbody>
<?php 
$i=1;
foreach($campaigns as $campaign)  { ?>
<tr>
    <td>{{$i}}</td>
    <td>{{$campaign->name}}</td>
    <td>
    @if($campaign->status==1)
    <button class="btn btn-success btn-sm"> <i class="ti-check"></i> Active  </button>
    @else
    <button class="btn btn-danger btn-sm"> Inactive  </button>
    @endif
    </td>
    
     <td>
    <form action="{{ url('campaigns/edit', $campaign->id)}}" method="post" style="display: inline-block">
        @csrf
        @method('GET')
        <button class="btn btn-success btn-sm" type="submit"><i class="ti-pencil-alt"></i> Edit</button>
        </form>
    </td>
    <td>
        <form action="{{ url('campaigns/destroy', $campaign->id)}}" method="post" style="display: inline-block">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" type="submit"><i class="ti-close"></i> Delete</button>
        </form>
    </td>
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
