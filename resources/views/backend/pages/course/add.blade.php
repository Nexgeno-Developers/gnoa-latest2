<section>
    <form id="add_course_form" action="{{url(route('course.create'))}}" method="post" enctype="multipart/form-data">
        @csrf
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
                                    <input type="text" class="form-control" name="title" value="" required>
                                </div>
                            </div> 
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Short Description <span class="red">*</span></label>
                                    <input type="text" class="form-control" name="short_description" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Slug <span class="red">*</span></label>
                                    <input type="text" class="form-control" name="slug" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Dropdown Practice Area</label>
                                    <select class="form-select select2" name="language[]" multiple>
                                        <option value="">--Select--</option>
                                        <option value="English">English</option>
                                        <option value="Arabic">Arabic</option>
                                        <option value="Urdu">Urdu</option>
                                        <option value="Hindi">Hindi</option>
                                    </select> 
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Rating <span class="red">*</span></label>
                                    <input type="text" class="form-control" name="rating" value="" required>
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
                                    <input type="text" class="form-control" name="cont_title" value="" >
                                </div>
                            </div> 

                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Content</label>
                                    <textarea class="form-control trumbowyg" name="content" rows="2"></textarea>
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
                                    <input type="text" class="form-control" name="period_b" value="" >
                                </div>
                            </div> 

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Duration</label>
                                    <input type="text" class="form-control" name="duration_b" value="" >
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
                                    <input type="text" class="form-control" name="period_s" value="" >
                                </div>
                            </div> 

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Duration</label>
                                    <input type="text" class="form-control" name="duration_s" value="" >
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
                            <hr>
                        </div> 
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Meta Title <span class="red">*</span></label>
                                <input type="text" class="form-control" name="meta_title" value="" required>
                            </div>
                        </div> 
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Meta Description <span class="red">*</span></label>
                                <textarea class="form-control" name="meta_description" rows="3" required></textarea>
                            </div>
                        </div>                    
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <h4 class="header-title"><b>Image</b></h4>
                            <hr>
                        </div>                  
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Image <span class="font-size11">(Max file size 5kb - 70*70)</span></label></label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Alt Image</label>
                                <input type="text" class="form-control" name="alt_image" value="" >
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">

                        <div class="col-sm-12">
                            <div class="form-group d-grid mb-3 text-end">
                                <button type="submit" class="btn btn-block btn-primary">Create</button>
                            </div>
                        </div>                    
                    </div>
                </div>                
            </div>               
        </div>
    </form>
</section>


<script>
$(document).ready(function() {
    initValidate('#add_course_form');
    initSelect2('.select2');
    initTrumbowyg('.trumbowyg');
    initTrumbowyg('#trumbowyg_0');
});

$("#add_course_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

var responseHandler = function(response) {
    location.reload();
}
</script>