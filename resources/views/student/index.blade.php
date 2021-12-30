
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
          @if (session('status'))
              <h6 class="alert alert-success">{{ session('status') }}</h6>
          @endif
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                  <form action="" method="POST">
                      @csrf
                      @method('DELETE')
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Section</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->course }}</td>
                                <td>{{ $item->section }}</td>
                                <td>
                                    <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
