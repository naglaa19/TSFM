@extends('layouts.app')

@section('content')

    @foreach ($type as $img)

        {{ $img }}

    @endforeach

@endsection
