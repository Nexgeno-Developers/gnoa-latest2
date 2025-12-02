@php
    $courses = DB::table('courses')
        ->where('status', 1)
        ->get();
@endphp

<!-----------================= Footer form start =============--------------->

<div class="col-md-12">
    <h3 class="title text-center">Enquire Now</h3>
    <form class="contact_form" id="add_popup_form" action="{{ url(route('contact.create')) }}" method="post"
        enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="section" value="Popup Form" data-aos-once="true" data-aos="fade-up" />
        <input type="hidden" name="url" value="{{ url()->current() }}" data-aos-once="true" data-aos="fade-up" />

        <input type="text" name="name"  class="form-control" placeholder="Your Name" required>
        <input type="email" name="email" class="form-control" placeholder="Your Email"  required>

        <input type="tel" name="phone" class="form-control" placeholder="Write Your Phone No"  required>

        <select class="form-select select_drp_image select2" name="services" aria-label="Default select example" required>
            <option selected value="">Select Courses</option>
            @foreach ($courses as $row)
                <option value="{{ $row->title }}">{{ $row->title }}</option>
            @endforeach
        </select>

         <select class="form-select select_drp_image select2" name="gender" aria-label="Default select example" required>
            <option selected value="">Select Gender</option>
           
                <option value="male">Male</option>
                <option value="female">Female</option>
        </select>
        
        <input type="hidden" name="ref_url" value="{{ url()->previous() }}" data-aos-once="true" data-aos="fade-up" />

        <div class="text-center">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

<!-------------------============= Footer Form end ===============-------------->

<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.enquiry_btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            let courseName = this.getAttribute('data-course');
            let selectField = document.querySelector('#exampleModal select[name="services"]');

            if (selectField) {
        
                selectField.value = courseName;

                if ($(selectField).hasClass('select2')) {
                    $(selectField).val(courseName).trigger('change');
                }
            }
        });
    });
});
</script>

