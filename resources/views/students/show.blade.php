@extends('layout')
@section('content')


<div class="card">
    <div class="card-header">Notice Page</div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Topic : {{ $students->name }} </h5>
            <p class="card-text">Description : {{ $students->address }} </p>
            <p class="card-text">Deadline : {{ $students->mobile }} </p>


        </div>

    </div>
    </div>
</div>

@endsection