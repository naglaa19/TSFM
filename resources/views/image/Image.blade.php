@extends('layouts.app')

@section('content')


<div class="container">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <div>
<form action="{{ route('storeImage') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="" name="name" aria-describedby="emailHelp">
    @error('Name')
        <span class="text-danger"> {{ $message }}</span>
    @enderror
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Date</label>
    <input type="date" class="form-control"name="date" id="">
    @error('date')
        <span class="text-danger"> {{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Location</label>
    <input type="text" class="form-control" name="location" id="">
    @error('location')
        <span class="text-danger"> {{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Notes</label>
    <input type="text" class="form-control" name=notes id="">
    @error('notes')
        <span class="text-danger"> {{ $message }}</span>
    @enderror
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="">
    @error('image')
        <span class="text-danger"> {{ $message }}</span>
    @enderror
  </div> <br>

 <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Type</label>
 <select name="type" class="form-control">
    @foreach ($type as $t)
    <option value="{{ $t->id }}">{{ $t->name }}</option>
    @endforeach
</select>
@error('type')
        <span class="text-danger"> {{ $message }}</span>
    @enderror
  </div> <br>

<div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Category</label>
 <select name="cat"class="form-control">
    @foreach ($gallery as $G)
    <option value="{{ $G->id }}">{{ $G->title }}</option>
    @endforeach
</select>
@error('cat')
        <span class="text-danger"> {{ $message }}</span>
    @enderror
  </div>




<input type="submit" class="btn btn-success">
</form>
</div>
@endsection
