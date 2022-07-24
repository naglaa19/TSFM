@extends('layouts.app')

@section('content')


<div class="container">

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div>
<form action="{{ route('storecat') }}" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" id="" name="title" aria-describedby="emailHelp">
    @error('title')
        <span class="text-danger"> {{ $message }}</span>
    @enderror
@csrf
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alboum Cover</label>
    <input type="file" name="alboum_cover" class="form-control" id="">
    @error('cover')
        <span class="text-danger"> {{ $message }}</span>
    @enderror
</div> <br>


    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" id="">
    @error('description')
        <span class="text-danger"> {{ $message }}</span>
    @enderror
</div> <br>



<input type="submit" class="btn btn-success">
</form>
</div>
@endsection
