<form id="edit_author_form" action="{{url(route('users.update'))}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <div class="col-sm-12">
        <input type="hidden" name="id" value="{{ $author->id }}">
            <div class="form-group mb-3">
                <label>Username <span class="red">*</span></label>
                <input type="text" class="form-control" name="name" value="{{ $author->name }}" required>
            </div>
        </div>        
        <div class="col-sm-12">
            <div class="form-group mb-3">
                <label>Email <span class="red">*</span></label>
                <input type="email" class="form-control" name="email" value="{{ $author->email }}" required>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group mb-3">
                <label>Designation</label>
                <input type="text" class="form-control" name="designation" value="{{ $author->designation }}">
            </div>
        </div>  

        @if($canEditRole)
        <div class="col-sm-12">
            <div class="form-group mb-3">
                <label>Role <span class="red">*</span></label>
                <select name="role_id" class="form-select" required>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $author->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @else
            <input type="hidden" name="role_id" value="{{ $author->role_id }}">
        @endif

        <div class="col-sm-12">
            <div class="form-group mb-3 text-end">
                <button type="submit" class="btn btn-block btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    initValidate('#edit_author_form');
});

$("#edit_author_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

var responseHandler = function(response) {
    location.reload();
}
</script>
