@extends('layouts.app')

@section('content')


<div class="container">
<div>
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <form action="{{ route('updateImage') }}" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            @csrf
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="" name="name" value="{{ $images->name}}" aria-describedby="emailHelp">
            @error('name')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date</label>
            <input type="date" class="form-control"name="date" value="{{ $images->date}}" id="">
            @error('date')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Location</label>
            <input type="text" class="form-control" name="location" id="" value="{{ $images->location}}">
            @error('location')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Notes</label>
    <input type="text" class="form-control" name=notes id=""value="{{ $images->notes}}">
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
            <option value="{{$images->id}}">{{ $type->name}}</option>
            <option value="{{$type->id}}">{{ $images->type}}</option>
        </select>
        @error('type')
            <span class="text-danger"> {{ $message }}</span>
        @enderror
    </div> <br>
    <div class="mb-3">
        <label for="exampleInputPassword1"  class="form-label">Category</label>
        <select name="cat"class="form-control">
            <option value="{{ $gallery->id }}">{{ $gallery->title }}</option>
        </select>
        @error('cat')
            <span class="text-danger"> {{ $message }}</span>
        @enderror
    </div>




    <input type="submit" class="btn btn-success">
</form>
</div>
@endsection
