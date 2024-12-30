@extends('layout')

@section('content')

    <div class="card1">
        <div class="card-header">Notice Management</div>

        <div class="class-body">
           
            <div class="row">
                <div class="col-md-1">
                 </div>
                <div class="col-md-8">
                    <div class="form-area"></div>

                    @if(auth()->user() && auth()->user()->is_teacher)
                        <a href="{{url('/students/create')}}" class="btn btn-success btn-sm mt-4" title="Add New Student">
                            <i class="fa fa-plus mt-4" aria-hidden="true"></i> Add New
                        </a>
                    @else
                        <button class="btn btn-success btn-sm mt-4" onclick="alert('This action is allowed only for teachers!')">
                            <i class="fa fa-plus mt-4" aria-hidden="true"></i> Add New
                        </button>
                    @endif

                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Topic</th>
                                <th scope="col">Description</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $key => $employee)
                                <tr>
                                    <td scope="col">{{ ++$key }}</td>
                                    <td scope="col">{{ $employee->name }}</td>
                                    <td scope="col">{{ $employee->address }}</td>
                                    <td scope="col">{{ $employee->mobile }}</td>
                                    <td scope="col">
                                        <div class="d-inline-flex align-items-center">
                                            {{-- Show Button --}}
                                            <a href="{{ route('students.show', $employee->id) }}" class="btn btn-info btn-sm mx-1">
                                                Show
                                            </a>

                                            {{-- Edit Button --}}
                                            @if(auth()->user() && auth()->user()->is_teacher)
                                                <a href="{{ route('students.edit', $employee->id) }}" class="btn btn-primary btn-sm mx-1">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </a>
                                            @else
                                                <button class="btn btn-primary btn-sm mx-1" onclick="alert('This action is allowed only for teachers!')">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            @endif

                                            {{-- Delete Button --}}
                                            @if(auth()->user() && auth()->user()->is_teacher)
                                                <form action="{{ route('students.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
                                                </form>
                                            @else
                                                <button class="btn btn-danger btn-sm mx-1" onclick="alert('This action is allowed only for teachers!')">
                                                    Delete
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('css')
    <style>
        .form-area {
            padding: 20px;
            margin-top: 20px;
            background-color: #020d12;
           
        }

        .bi-trash-fill {
            color: red;
            font-size: 18px;
        }

        .bi-pencil {
            color: green;
            font-size: 18px;
            margin-left: 20px;
        }
       




        /* .card1 {
            width: 1000px;
        } */
    </style>
@endpush

@push('scripts')
    <script>
        // Function to show popup alert for non-teachers
        function showTeacherOnlyAlert() {
            alert("This action is allowed only for teachers!");
        }
    </script>
@endpush
