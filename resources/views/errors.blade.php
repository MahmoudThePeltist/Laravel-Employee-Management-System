@if($errors->any())
<div class="form-group">
    @foreach ($errors->all() as $error)
        <div class="h5 text-danger">{{ $error }}</div>
    @endforeach
</div>
@endif