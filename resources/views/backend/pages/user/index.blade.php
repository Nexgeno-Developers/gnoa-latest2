@extends('backend.layouts.app')

@section('page.name', 'Users')

@section('page.content')
<div class="card">
   <div class="card-body">
      <div class="row mb-2">
         <div class="col-sm-6">
         </div>
         <div class="col-sm-6 text-sm-end">
            <a href="javascript:void(0);" class="btn btn-danger mb-2" onclick="largeModal('{{ url(route('users.add')) }}', 'Add User')"><i class="mdi mdi-plus-circle me-2"></i> Add User</a>
         </div>
      </div>
      <div class="table-responsive">
        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Designation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach($users as $user)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name ?? '-' }}</td>
                    <td>{{ $user->designation }}</td>
                    <td>
                        <a href="javascript:void(0);" class="action-icon" onclick="largeModal('{{ url(route('users.edit',['id' => $user->id])) }}', 'Edit User')"> <i class="mdi mdi-square-edit-outline"></i></a>
                        <a href="javascript:void(0);" class="action-icon" onclick="largeModal('{{ url(route('user.password',['id' => $user->id])) }}', 'Reset Password')"> <i class="mdi mdi-lock-reset"></i></a>
                        <a href="javascript:void(0);" class="action-icon" onclick="confirmModal('{{ url(route('users.delete', $user->id)) }}', responseHandler)"><i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
   </div>
</div>
@endsection

@section("page.scripts")
<script>
    var responseHandler = function(response) {
        location.reload();
    }
</script>
@endsection
