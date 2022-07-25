@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
<table class="table table-dark table-striped">

    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Cover Image</th>
        <th>description </th>
        <th>Control</th>
      </tr>
      @foreach ($gallery as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->title }}</td>
                <td><img src="{{ asset('images/category/'.$cat->alboum_cover) }}"width="100"height="100" alt=""></td>
                <td>{{ $cat->description }}</td>
                <td><a href="{{ url('editCat/'.$cat->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ url('DeleteCat/'.$cat->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ url('showCatImage/'.$cat->id) }}" class="btn btn-info">View</a>
                </td>
            </tr>
        @endforeach

</table>
</div>

@endsection
