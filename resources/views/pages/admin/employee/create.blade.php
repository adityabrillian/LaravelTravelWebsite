@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Employee</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('employee.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="employeeNumber">employeeNumber</label>
                        <input type="text" class="form-control" name="employeeNumber" placeholder="Title" value="{{ old('employeeNumber') }}">
                    </div>
                    <div class="form-group">
                        <label for="lastName">lastName</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Title" value="{{ old('lastName') }}">
                    </div>
                    <div class="form-group">
                        <label for="firstName">firstName</label>
                        <input type="text" class="form-control" name="firstName" placeholder="Title" value="{{ old('firstName') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

        

    </div>
    <!-- /.container-fluid -->

@endsection
