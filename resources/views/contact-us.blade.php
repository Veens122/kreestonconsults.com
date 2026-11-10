@extends('layouts.app')

@section('content')

		<div class="page-title">

			<div class="title-heading">

				<div class="container">

					<div class="row">

						<div class="col-md-12">

							<div class="page-title-heading">

								<h1 class="h1-title">Contact Us</h1>

							</div><!-- /.page-title-heading -->

							<ul class="breadcrumbs">

								<li><a href="{{ route('home')}}" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

								<li>Contact Us</li>

							</ul><!-- /.breadcrumbs -->

						</div>

					</div>

				</div>

			</div>

		</div><!-- /.page-title -->



		<section class="flat-row flat-contact">

			<div class="container">

				<div class="row">

					<div class="col-md-12">

						<div class="flat-title style1 center">

							<h2>Get in touch</h2>

						</div>

						<div class="flat-contact-form">

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error message --}}
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    {{-- Validation errors --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="contactform"
          method="POST"
          action="{{ route('contact.send') }}"
          class="form-info">

        @csrf

        <div class="field-row">

            <div class="one-three">
                <p class="input-info">
                    <input
                        type="text"
                        name="your-name"
                        id="name"
                        value="{{ old('your-name') }}"
                        placeholder="Your name *"
                        required
                    >
                </p>
            </div>

            <div class="one-three">
                <p class="input-info">
                    <input
                        type="email"
                        name="your-email"
                        id="email"
                        value="{{ old('your-email') }}"
                        placeholder="Email Address *"
                        required
                    >
                </p>
            </div>

            <div class="one-three">
                <p class="input-info">
                    <input
                        type="tel"
                        name="your-phone"
                        id="phone"
                        value="{{ old('your-phone') }}"
                        placeholder="Phone numbers *"
                        required
                    >
                </p>
            </div>

        </div>

        <div class="input-text">
            <textarea
                id="message-contact"
                name="your-message"
                placeholder="Message *"
                required
            >{{ old('your-message') }}</textarea>
        </div>

        <div class="btn-submit">
            <button type="submit">SEND MESSAGE</button>
        </div>

    </form>
</div>

					</div> <!-- /.col-md-12 -->

				</div><!-- /.row -->

			</div><!-- /.container -->

		</section><!-- /.flat-row-iconbox -->  

        <section class="flat-row flat-contact">
            {{-- Tobe left empty for a reason --}}

		</section><!-- /.flat-row-iconbox -->  
        <br>
         <section class="flat-choose-us">

    

        <div id="slider" class="slider-choose flexslider">

            <ul class="slides">

                <li>

                    <div class="choose-item">

                        <div class="box-top">

                            <div class="title">

                                KCS

                            </div>

                            <span>Call or Whatsapp</span>

                        </div>

                        <div class="box-content">

                            WhatsApp us:
    <a href="https://wa.me/2348028992555" 
       target="_blank" 
       rel="noopener noreferrer" 
       title="Chat with us on WhatsApp">
        +234 8028992555
    </a> <br>
     09157517448 <br>
     08038897618

                        </div>

                    </div>

                </li>

                <li>

                    <div class="choose-item">

                        <div class="box-top">

                            <div class="title">

                                KCS

                            </div>

                            <span>Email</span>

                        </div>

                        <div class="box-content">

                            
                        <a href="mailto:support@kreestonconsults.com" title="email">
                            support@kreestonconsults.com 
                        </a>

                            

                        </div>

                    </div>

                </li>

                <li>

                    <div class="choose-item">

                        <div class="box-top">

                            <div class="title">

                                KCS

                            </div>

                            <span>Address</span>

                        </div>

                        <div class="box-content">

                            <p>5, Adeogun street, off Afariogun Street, Charity bus stop Oshodi Lagos</p>

                        </div>

                    </div>

                </li>

             
            </ul>

        </div>

    </section>

    <section class="flat-row pdmap">
    <div class="container-fluid p-0">
        
</section>



        <!-- Google Map -->
<section class="flat-row pdmap">
    <div class="container-fluid p-0">
        <div class="map-container">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2046.1823187439697!2d3.3366296122570094!3d6.551153825342748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8e0a2107866b%3A0x9519d77b5e5d291!2s5%20Adeogun%20Street%2C%20Orile%20Oshodi%2C%20Lagos%20100261%2C%20Lagos!5e0!3m2!1sen!2sng!4v1793968795954!5m2!1sen!2sng"
             width="100%" 
             height="500" style="border:0;" 
             allowfullscreen="" loading="lazy" 
             referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
    </div>
</section>








    <script type="text/javascript" src="{{ asset('assets/javascript/waypoints.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/javascript/main.js') }}"></script>

@endsection