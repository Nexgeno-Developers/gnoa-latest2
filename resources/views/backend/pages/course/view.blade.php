<div id="course-details">

    <div class="card">
         <div class="card-body">
         <div class="row">
             <div class="col-md-12"><h4 class="header-title"><b>Overview</b></h4><hr></div>
             <div class="col-md-4"><p><strong>Title:</strong> {{ $course->title }}</p></div>
             <div class="col-md-4"><p><strong>Short Description:</strong> {{ $course->short_description }}</p></div>
             {{--<div class="col-md-4"><p><strong>Slug:</strong> <a target="_blank" href="{{url(route('course-detail', $course->slug))}}">{{ $course->slug }}</a></p></div>--}}
             <hr>
             <div class="col-md-12"><p><strong>Content:</strong> @php echo html_entity_decode($course->content) @endphp</p></div>
             
             
         </div>
         </div>
     </div>
     
     <div class="card">
         <div class="card-body">
             <div class="row">
             <div class="col-md-12"><h4 class="header-title"><b>IMAGE</b></h4><hr></div>
             <div class="col-md-12"><p><strong>Image :</strong></p> @if($course->image) <img src="{{ asset('storage/' . $course->image) }}" class="img-thumbnail"> @endif</div>
             </div>
         </div>
     </div>
</div>