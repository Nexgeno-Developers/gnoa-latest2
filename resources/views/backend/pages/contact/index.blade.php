@extends('backend.layouts.app') 

@section('page.name', 'contact')

@section('page.content')
<div class="card">
   <div class="card-body">
      <form method="GET" class="row g-2 mb-3">
         <div class="col-md-3">
            <label class="form-label">Search</label>
            <input type="text" name="search" class="form-control" placeholder="Search name, email or phone" value="{{ $filters['search'] }}">
         </div>
         <div class="col-md-2">
            <label class="form-label">Gender</label>
            <select name="gender" class="form-select" @if($roleGender) disabled @endif>
               <option value="">All</option>
               <option value="male" {{ $filters['gender'] === 'male' ? 'selected' : '' }}>Male</option>
               <option value="female" {{ $filters['gender'] === 'female' ? 'selected' : '' }}>Female</option>
            </select>
            @if($roleGender)
               <input type="hidden" name="gender" value="{{ $roleGender }}">
            @endif
         </div>
         <div class="col-md-2">
            <label class="form-label">From Date</label>
            <input type="date" name="from_date" class="form-control" value="{{ $filters['from_date'] }}">
         </div>
         <div class="col-md-2">
            <label class="form-label">To Date</label>
            <input type="date" name="to_date" class="form-control" value="{{ $filters['to_date'] }}">
         </div>
         <div class="col-md-3">
            <label class="form-label">Section</label>
            <select name="section" class="form-select">
               <option value="">All Sections</option>
               @foreach($sections as $section)
                  <option value="{{ $section }}" {{ $filters['section'] === $section ? 'selected' : '' }}>{{ $section }}</option>
               @endforeach
            </select>
         </div>
         <div class="col-12 text-end mt-2">
            <button type="submit" class="btn btn-primary">Apply Filters</button>
            <a href="{{ route('contact.index') }}" class="btn btn-light">Reset</a>
         </div>
      </form>

      <div class="table-responsive">
      <table id="leads-table" class="table table-striped align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Date</th>
                <th>Services as Courses</th>
                <th>Page</th>
                <th>Section</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $row)
            <tr class="table-rwap">
                <td>{{ $contacts->firstItem() ? $contacts->firstItem() + $loop->index : $loop->iteration }}</td>
                <td>{{$row->name}}</td>
                <td>{{ $row->gender ? ucfirst(strtolower($row->gender)) : '-' }}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->phone}}</td>
                <td>{{datetimeFormatter($row->created_at)}}</td>
                <td>{{$row->services}}</td>
                <td>
                  <a target="_blank" href="{{$row->url}}">
                     {{$row->url}}
                  </a>
               </td>
               <td>{{$row->section}}</td>
               <td>
                  <div class="d-flex">
                     <a href="javascript:void(0);" class="action-icon" onclick="largeModal('{{ url(route('contact.view',['id' => $row->id])) }}', 'View')">
                        <i class="mdi mdi-account-eye"></i>
                     </a>
                     <a href="javascript:void(0);" class="action-icon" onclick="confirmModal('{{ url(route('contact.delete', $row->id)) }}', responseHandler)">
                        <i class="mdi mdi-delete"></i>
                     </a>
                  </div>
               </td>
            </tr>
            @empty
            <tr>
                <td colspan="10" class="text-center">No leads found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
      </div>
      <div class="mt-3">
        {{ $contacts->links() }}
      </div>
   </div>
   <!-- end card-body-->
</div>
@endsection

@section("page.scripts")
<script>
    var responseHandler = function(response) {
        location.reload();
    }
</script>
@endsection

<style>
    .table-rwap td:nth-child(2) {
        white-space: normal !important;   /* allow text to wrap */
        word-wrap: break-word !important; /* break long words if needed */
        word-break: break-word !important;
        max-width: 70px !important;
    }
</style>
