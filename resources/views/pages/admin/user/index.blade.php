@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table id="User_table" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th> 
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->roles }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('user.destroy', $item->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    @if($item->roles == 'ADMIN') 
                                        <form action="{{ route('changeRoles', $item->id) }}" method="POST">
                                            @csrf                          
                                            <button title="Click button to change roles to be User" type="submit" class="btn btn-success" name="roles" value="USER">Admin</button>
                                        </form>                    
                                    @else
                                        <form action="{{ route('changeRoles', $item->id) }}" method="POST">
                                            @csrf                              
                                            <button title="Click button to change roles to be Admin" type="submit" class="btn btn-default" name="roles" value="ADMIN">User</button>     
                                        </form>                                                 
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
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
        $('#User_table').DataTable( {
            "columnDefs": [
                { 
                    "orderable": false, 
                    "targets": 5,
                    "searchable": false 
                }
            ]
        });
    } );
</script>
@endpush
