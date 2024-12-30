@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registered Students</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
