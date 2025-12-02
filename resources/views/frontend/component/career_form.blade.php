<!---------================ career Form start =========---------------->
<form class="contact_form" id="add_career_form" action="{{ url(route('contact.create')) }}" method="post"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="section" value="Career Form" data-aos-once="true" data-aos="fade-up" />
    <input type="hidden" name="url" value="{{ url()->current() }}" data-aos-once="true" data-aos="fade-up" />
    <div class="form-group">
        <input id="form_name1" name="name" placeholder="Your Name"class="form-control" type="text" required>

    </div>

    <div class="form-group">
        <input id="form_name2" name="email" class="form-control" placeholder="Email Address" type="email" required>
    </div>

    <div class="form-group">
        <input id="form_name1" name="phone" placeholder="Your Phone"class="form-control" type="Number" required>

    </div>
    
     

    <div class="form-group">
        <input  id="form_name2" class="form-control" type="file" name="cv" id="formFile" required accept=".pdf,.docx">
        <i class="fas fa-paperclip"></i><span class="resume-p">
            <p>Upload Your Resume/CV</p>
        </span>
    </div>

    <input type="hidden" name="ref_url" value="{{ url()->previous() }}" data-aos-once="true" data-aos="fade-up" />

    <div class=" sendbtn text-start">
        <button class="carrer-btn" data-aos-once="true" data-aos="fade-up">SUBMIT</button>
    </div>

    </div>
    </div>

    <div class="col-md-4 mt-lg-0 mt-4">
        <img src="assets/frontend/images/barshi9.jpeg" alt="book" class="carrer-img">
    </div>


</form>

<style>
    .form-controlll{
     appearance: none !important;
    width: 250px !important;
    /*position: absolute !important;*/
    opacity: 1 !important;
    height: auto !important;
    font-size: 15px !important;
    border: none !important;
    color: gray !important;
    /*border-bottom: 1px solid #d8d8d8 !important;*/
    }
    .form-groupp{
        border-bottom: 1px solid #d8d8d8 !important;
    }
    .form-controlll:focus {
        outline: none;
        box-shadow: none;
        border-color: #ced4da; /* Or your preferred border color */
    }
</style>
<!---------================ career Form end =========---------------->

@section('component.scripts')
    <script>
        $(document).ready(function() {
            initValidate('#add_career_form');
            $("#add_career_form").submit(function(e) {
                var form = $(this);
                ajaxSubmit(e, form, responseHandler);
            });

            var responseHandler = function(response) {
                $('input, textarea').val('');
                $("select option:first").prop('selected', true);
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    </script>
@endsection
