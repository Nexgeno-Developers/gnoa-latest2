<form id="edit_course_form" action="{{url(route('course.update'))}}" method="post" enctype="multipart/form-data"> @csrf
	<input type="hidden" name="id" value="{{ $course->id }}">
	<div class="row">
		<div class="col-md-8">
<!---------------------------------------Overview ---------------------------------------------->

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="header-title"><b>Overview</b></h4>
                            <hr>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label>Title <span class="red">*</span></label>
                                <input type="text" class="form-control" name="title" value="{{ $course->title }}" required>
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label>Short Description <span class="red">*</span></label>
                                <input type="text" class="form-control" name="short_description" value="{{ $course->short_description }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label>Slug <span class="red">*</span></label>
                                <input type="text" class="form-control" name="slug" value="{{ $course->slug }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label>Dropdown Practice Area</label>
                                <select class="form-select select2" name="language[]" multiple>
                                    <option value="">--Select--</option>
                                    @php $selectedLanguages = json_decode($course->language) @endphp
                                    @foreach(['English', 'Arabic', 'Urdu', 'Hindi'] as $language)
                                        <option value="{{ $language }}" {{ in_array($language, $selectedLanguages) ? 'selected' : '' }}>
                                            {{ $language }}
                                        </option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label>Rating <span class="red">*</span></label>
                                <input type="text" class="form-control" name="rating" value="{{ $course->rating }}" required>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

<!--------------------------------------overview------------------------------------------------>

            <!------------------------------------- Page content ------------------------------------------->

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="header-title"><b>Page Content</b></h4>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label>Content Title</label>
                                <input type="text" class="form-control" name="cont_title" value="{{ $course->cont_title }}" >
                            </div>
                        </div> 

                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Content</label>
                                <textarea class="form-control trumbowyg" name="content" rows="2">{{ $course->content }}</textarea>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

<!------------------------------------- page content -------------------------------------------->
<!------------------------------------ for brother ----------------------------------------------->

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="header-title"><b>For Brothers</b></h4>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Period</label>
                                <input type="text" class="form-control" name="period_b" value="{{ $course->period_b }}" >
                            </div>
                        </div> 

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Duration</label>
                                <input type="text" class="form-control" name="duration_b" value="{{ $course->duration_b }}" >
                            </div>
                        </div> 
                        
                    </div>
                </div>
            </div>
<!------------------------------------ for brother ----------------------------------------------->

<!------------------------------------ for sisters ----------------------------------------------->

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="header-title"><b>For Sisters</b></h4>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Period</label>
                                <input type="text" class="form-control" name="period_s" value="{{ $course->period_s }}" >
                            </div>
                        </div> 

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Duration</label>
                                <input type="text" class="form-control" name="duration_s" value="{{ $course->duration_s }}" >
                            </div>
                        </div> 
                        
                    </div>
                </div>
            </div>

<!------------------------------------ for sisters ----------------------------------------------->


<!---------------------------------- sco content ------------------------------------------------->


			<div class="card">
				<div class="card-body">
					<div class="col-md-12">
						<h4 class="header-title">SEO</h4>
						<hr> </div>
					<div class="col-sm-12">
						<div class="form-group mb-3">
							<label>Meta Title <span class="red">*</span></label>
							<input type="text" class="form-control" name="meta_title" value="{{ $course->meta_title }}" required> </div>
					</div>
					<div class="col-sm-12">
						<div class="form-group mb-3">
							<label>Meta Description <span class="red">*</span></label>
							<textarea class="form-control" name="meta_description" rows="3" required>{{ $course->meta_description }}</textarea>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<h4 class="header-title"><b>Image</b></h4>
							<hr> </div>
						<div class="col-sm-9">
							<div class="form-group mb-3">
								<label>Image <span class="font-size11">(Max file size 5kb - 70*70)</span></label>
								<input class="form-control mb-1" type="file" id="image" name="image">
								@if($course->image)
							    	<input id="image_check" type="checkbox" name="image_check" value="1"> <label for="image_check">Remove Image</label>
							    @endif
							</div>
						</div>
						<div class="col-md-3">
					    	@if($course->image) 
					    		<img src="{{ asset('storage/' . $course->image) }}" class="img-thumbnail"> 
							@endif
						</div>
						<div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Alt Image</label>
                                <input type="text" class="form-control" name="alt_image" value="{{ $course->alt_image }}">
                            </div>
                        </div>
			
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group d-grid mb-2 text-end">
								<button type="submit" class="btn btn-block btn-primary">Update</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<script>
$(document).ready(function() {
	initValidate('#edit_course_form');
	initTrumbowyg('.trumbowyg');
	initSelect2('.select2');
});
$("#edit_course_form").submit(function(e) {
	var form = $(this);
	ajaxSubmit(e, form, responseHandler);
});
var responseHandler = function(response) {
	location.reload();
}
</script>