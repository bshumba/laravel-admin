@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="submit" class="close" data-dismiss="alert">x</button>
    <strong>{{$message}}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-success alert-block">
    <button type="submit" class="close" data-dismiss="alert">x</button>
    <strong>{{$message}}</strong>
</div>
@endif