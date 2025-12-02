@extends('frontend.layouts.app')

@section('page.title', 'Garib Nawaz Online Academy')

@section('page.description', 'Garib Nawaz Online Academy')

@section('page.type', 'website')

@section('page.content')


    <section class="innertitle aboutus">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="inner_titles text-center">Career</h4>
                <nav aria-label="breadcrumb" class="breadcrumb mb-0">
                    <ol class="breadcrumb d-flex justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">Career</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

    <section class="career-page pt-5 pb-5">
        <div class="container">
            <div class="career-lm">
                <div class="row">

                    <div class="col-md-8 cnt-c">
                        <div class="contact_from" data-aos-once="true" data-aos="fade-up">

                            @include('frontend.component.career_form')

                </div>
            </div>
        </div>
        </div>
        </div>


    </section>

@endsection
