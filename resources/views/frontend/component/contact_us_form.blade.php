<!----============ Form start =================-------------------->
<form id="add_contact_us_form" action="{{url(route('contact.create'))}}" method="post" enctype="multipart/form-data">
    @csrf

  

    <input type="hidden" name="section" value="Contact us Form" >
    <input type="hidden" name="url" value="{{ url()->current() }}" >

    <div class="form-group">
        <input id="form_name1" name="name" placeholder="Your Name" class="form-control" type="text"
            required>

    </div>

    <div class="form-group">
        <input id="form_name2" name="email" class="form-control" placeholder="Email Address" type="email"
            placeholder="" required>
    </div>

    <div class="form-group">
        <input type="tel" placeholder="Phone" name="phone" 
        required />
    </div>
    
    <div class="form-group form-groupp">
        <select name="gender" class="form-control form-controlll" required>
            <option value="">Gender (Student)</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <!---->
    <div class="form-group form-groupp">
        <select name ="time_Slot" class="form-control form-controlll">
            <option value="">Time Slot</option>
            <option value="30_mint">12:00 AM - 12:30 AM</option>
            <option value="30_mint">12:30 AM - 1:00 AM</option>
            <option value="30_mint">1:00 AM - 1:30 AM</option>
            <option value="30_mint">1:30 AM - 2:00 AM</option>
            <option value="30_mint">2:00 AM - 2:30 AM</option>
            <option value="30_mint">2:30 AM - 3:00 AM</option>
            <option value="30_mint">3:00 AM - 3:30 AM</option>
            <option value="30_mint">3:30 AM - 4:00 AM</option>
            <option value="30_mint">4:00 AM - 4:30 AM</option>
            <option value="30_mint">4:30 AM - 5:00 AM</option>
            <option value="30_mint">5:00 AM - 5:30 AM</option>
            <option value="30_mint">5:30 AM - 6:00 AM</option>
            <option value="30_mint">6:00 AM - 6:30 AM</option>
            <option value="30_mint">6:30 AM - 7:00 AM</option>
            <option value="30_mint">7:00 AM - 7:30 AM</option>
            <option value="30_mint">7:30 AM - 8:00 AM</option>
            <option value="30_mint">8:00 AM - 8:30 AM</option>
            <option value="30_mint">8:30 AM - 9:00 AM</option>
            <option value="30_mint">9:00 AM - 9:30 AM</option>
            <option value="30_mint">9:30 AM - 10:00 AM</option>
            <option value="30_mint">10:00 AM - 10:30 AM</option>
            <option value="30_mint">10:30 AM - 11:00 AM</option>
            <option value="30_mint">11:00 AM - 11:30 AM</option>
            <option value="30_mint">11:30 AM - 12:00 PM</option>
            <option value="30_mint">12:00 PM - 12:30 PM</option>
            <option value="30_mint">12:30 PM - 1:00 PM</option>
            <option value="30_mint">1:00 PM - 1:30 PM</option>
            <option value="30_mint">1:30 PM - 2:00 PM</option>
            <option value="30_mint">2:00 PM - 2:30 PM</option>
            <option value="30_mint">2:30 PM - 3:00 PM</option>
            <option value="30_mint">3:00 PM - 3:30 PM</option>
            <option value="30_mint">3:30 PM - 4:00 PM</option>
            <option value="30_mint">4:00 PM - 4:30 PM</option>
            <option value="30_mint">4:30 PM - 5:00 PM</option>
            <option value="30_mint">5:00 PM - 5:30 PM</option>
            <option value="30_mint">5:30 PM - 6:00 PM</option>
            <option value="30_mint">6:00 PM - 6:30 PM</option>
            <option value="30_mint">6:30 PM - 7:00 PM</option>
            <option value="30_mint">7:00 PM - 7:30 PM</option>
            <option value="30_mint">7:30 PM - 8:00 PM</option>
            <option value="30_mint">8:00 PM - 8:30 PM</option>
            <option value="30_mint">8:30 PM - 9:00 PM</option>
            <option value="30_mint">9:00 PM - 9:30 PM</option>
            <option value="30_mint">9:30 PM - 10:00 PM</option>
            <option value="30_mint">10:00 PM - 10:30 PM</option>
            <option value="30_mint">10:30 PM - 11:00 PM</option>
            <option value="30_mint">11:00 PM - 11:30 PM</option>
        </select>
    </div>

    <div class="form-group">
        <textarea id="form_name3" name="description" class="msgbox" placeholder="Message" rows="2"
            cols="93"></textarea>
    </div>

    <input type="hidden" name="ref_url" value="{{ url()->previous() }}"  />

    <div class=" sendbtn text-start">
        <button type="submit">Send Message</button>
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

<!----============ Form End =================-------------------->
@section('component.scripts')
<script>
$(document).ready(function() {
    initValidate('#add_contact_us_form');
    $("#add_contact_us_form").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, responseHandler);
    });

    var responseHandler = function(response) {
        $('input, textarea').val('');
        $("select option:first").prop('selected', true);
        setTimeout(function() {
            window.location.href = $('#baseUrl').attr('href') + '/thank-you';
        }, 2000);
    }
});
</script>
@endsection