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
        <th>Name</th>
        <th>Image</th>
        <th>Notes</th>
        <th>Date</th>
        <th>Location</th>
        <th>type</th>
        {{-- <th>Gallery</th> --}}
        <th>Control</th>
      </tr>
      @foreach ($imgs as $img)
            <tr>
                <td>{{ $img->id }}</td>
                <td>{{ $img->name }}</td>
                <td><img src="{{ asset('images/img/'.$img->image) }}"width="100"height="100" alt=""></td>
                <td>{{ $img->notes }}</td>
                <td>{{ $img->date}}</td>
                <td>{{ $img->location}}</td>
                {{-- <td>{{ $img->type}}</td> --}}
                <td> <?php
                    $type=App\Models\Type::select('name')->where('id',$img->type)->get();
                    foreach ($type as $t) {
                        echo $t->name;
                    }
                    ?></td>

                    {{-- <td>{{ $type->name }}</td> --}}
                <td><a href="{{ url('edit/'.$img->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ url('DeleteImage/'.$img->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach

</table>
</div>

@endsection
