@if(session()->get('success'))
<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
{{ session()->get('success') }}</p>
</div>


@endif

@if(session()->get('failure'))
<div class="alert alert-danger">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{ session()->get('failure') }}  
</div>
@endif

