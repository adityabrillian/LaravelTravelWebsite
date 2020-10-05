@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Employee</h1>
        <a href="{{ route('employee.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Employee
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table id="travelPackage_table" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>employeeNumber</th>
                            <th>lastName</th>
                            <th>firstName</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->employeeNumber }}</td>
                                <td>{{ $item->lastName }}</td>
                                <td>{{ $item->firstName }}</td>
                                <td>
                                    <a href="{{ route('employee.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('employee.destroy', $item->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    

</div>
<!-- /.container-fluid -->
@endsection

@push('addon-script')
<script>
    $(document).ready(function() {
        $('#travelPackage_table').DataTable( {
            "columnDefs": [
                { 
                    "orderable": false, 
                    "targets": 4,
                    "searchable": false 
                }
            ]
        });
    } );
</script>
@endpush
