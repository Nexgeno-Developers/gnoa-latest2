@php
    $courses = DB::table('courses')
        ->where('status', 1)
        ->get();
@endphp

<!-----------================= Footer form start =============--------------->

<div class="col-lg-4 col-md-12">
    <h3 class="title">Enquire Now</h3>
    <form class="contact_form" id="add_footer_form" action="{{ url(route('contact.create')) }}" method="post"
        enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="section" value="Footer Form" data-aos-once="true" data-aos="fade-up" />
        <input type="hidden" name="url" value="{{ url()->current() }}" data-aos-once="true" data-aos="fade-up" />

        <input type="text" name="name"  class="form-control" placeholder="Your Name" required>
        <input type="email" name="email" class="form-control" placeholder="Your Email"  required>

        <input type="tel" name="phone" class="form-control" placeholder="Your Phone No"  required>
        
        <select class="form-select select_drp_image select2" name="gender" required>
            <option value="">Gender (Student)</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <select class="form-select select_drp_image select2" name="services" aria-label="Default select example" required>
            <option selected value="">Select Course</option>
            @foreach ($courses as $row)
                <option value="{{ $row->title }}">{{ $row->title }}</option>
            @endforeach
        </select>
        <input class="form-control" name="description" type="text" placeholder="Message" />

        <input type="hidden" name="ref_url" value="{{ url()->previous() }}" data-aos-once="true" data-aos="fade-up" />

        <div class="text-center">
            <button type="submit">Send a Message</button>
        </div>
    </form>
</div>

<!-------------------============= Footer Form end ===============-------------->
