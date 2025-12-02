<form id="add_user_form" action="{{url(route('users.create'))}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group mb-3">
                <label>Username <span class="red">*</span></label>
                <input type="text" class="form-control" name="name" value="" required>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group mb-3">
                <label>Email <span class="red">*</span></label>
                <input type="email" class="form-control" name="email" value="" required>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group mb-3">
                <label>Designation</label>
                <input type="text" class="form-control" name="designation" value="">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group mb-3">
                <label>Password <span class="red">*</span></label>
                <input type="password" class="form-control" name="password" required>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group mb-3">
                <label>Confirm Password <span class="red">*</span></label>
                <input type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group mb-3">
                <label>Role <span class="red">*</span></label>
                <select name="role_id" class="form-select" required>
                    <option value="">Select Role</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group mb-3 text-end">
                <button type="submit" class="btn btn-block btn-primary">Create</button>
            </div>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    initValidate('#add_user_form');
});

$("#add_user_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

var responseHandler = function(response) {
    location.reload();
}
</script>
