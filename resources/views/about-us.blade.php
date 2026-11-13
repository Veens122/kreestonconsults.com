@extends('layouts.app')

@push('scripts')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "Person",
    "@id": "https://kreestonconsults.com/about-us#ceo",
    "name": "Echezona Onyinye Christiana",
    "jobTitle": "Chief Executive Officer",
    "worksFor": {
        "@id": "https://kreestonconsults.com/#organization"
    },
    "url": "https://kreestonconsults.com/about-us"
}
</script>
@endpush

@section('title', 'About Kreeston Consulting Services | CEO Echezona Onyinye Christiana')

@section('meta_description', 'Learn about Kreeston Consulting Services, led by CEO Echezona Onyinye Christiana, and our professional business, financial, tax and corporate advisory services in Nigeria.')

@section('content')




    <div class="page-title parallax parallax2">

        <div class="title-heading">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div class="page-title-heading">


                            <h1 class="h1-title">About Kreeston Consulting Services</h1>

                        </div><!-- /.page-title-heading -->

                        <ul class="breadcrumbs">

                            <li><a href="{{ route('home') }}" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>

                            <li>About Us</li>

                        </ul><!-- /.breadcrumbs -->

                    </div>

                </div>

            </div>

        </div>

    </div><!-- /.page-title -->



    <section class="main-about">

        <div class="container">

            <div class="row">

                <div class="wrap-about">

                    <div class="sidebar-about">

                        <div class="widget-nav-tab">

                            <h3>About Kreeston Consulting Services</h3>

                            <ul class="tab-about">

                                <li class="active">Over View</li>

                                <li>Who We Are</li>

                                <li>Meet the CEO</li>

                                <li>Our Partners</li>

                                <li>FAQ</li>

                            </ul>

                        </div>

                    </div>

                    <div class="about-content-tab">

                        <div class="content-inner over-view">

                            <div class="images">

                                <img src="{{ asset('assets/images/about/01.webp') }}" alt="Kreeston Consulting Services business consulting">

                            </div>

                            <div class="text-about">

                                <h3> Want to Know More About Our Financial Consulting Services?</h3>

                                <p>At KREESTON CONSULTING SERVICES, we provide professional financial guidance, business
                                    planning, financial management and reporting support to help individuals and businesses
                                    make informed decisions. Our goal is to simplify financial processes, improve business
                                    performance and support sustainable growth.</p>

                            </div>

                            <div class="text-about">

                                <h3>Professional Solutions, Wherever You Are</h3>

                                <p>At KREESTON CONSULTING SERVICES, we make essential business and documentation services
                                    accessible and convenient. Through our online service delivery, we support individuals,
                                    entrepreneurs and businesses with reliable solutions, professional guidance and timely
                                    assistance, wherever they are.</p>

                            </div>

                            <div class="wrap-imagebox">

                                <div class="one-three">

                                    <div class="imagebox style2">

                                        <div class="imagebox-image">

                                            <img src="{{ asset('assets/images/imagebox/04.webp') }}" alt="Kreeston Consulting Services mission">

                                        </div>

                                        <div class="imagebox-content">

                                            <span class="ion-paper-airplane"></span>

                                            <h3><a href="#" title="">Our Mission</a></h3>

                                            <p>To provide reliable, professional and convenient business, management and
                                                financial solutions that simplify processes, empower individuals and support
                                                business growth.</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="one-three">

                                    <div class="imagebox style2">

                                        <div class="imagebox-image">

                                            <img src="{{ asset('assets/images/imagebox/05.webp') }}" alt="Kreeston Consulting Services vision">

                                        </div>

                                        <div class="imagebox-content">

                                            <span class="ion-star"></span>

                                            <h3><a href="{{ url('/about-us') }}" title="">Our Vision</a></h3>

                                            <p>To become a trusted and recognised consulting service provider, known for
                                                excellence, integrity and innovative solutions that help businesses and
                                                individuals achieve their goals.</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="one-three">

                                    <div class="imagebox style2">

                                        <div class="imagebox-image">

                                            <img src="{{ asset('assets/images/imagebox/06.webp') }}" alt="">

                                        </div>

                                        <div class="imagebox-content">

                                            <span class="ion-heart"></span>

                                            <h3><a href="{{ url('/about-us') }}" title="">We love ideas</a></h3>

                                            <p>We believe every successful business starts with an idea. We are committed to
                                                providing the professional guidance, practical support and tailored
                                                solutions needed to turn ideas into opportunities and opportunities into
                                                success.</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="clearfix"></div>

                            </div>

                            <div class="text-about">

                                <h3>Start Your Business Journey With Us</h3>

                                <p>Whether you are starting a new business or looking to improve an existing one, KCS is
                                    here to help. From business registration and financial consulting to tax compliance and
                                    documentation, we provide reliable solutions to make your business journey easier. Let
                                    us help you take the next step towards success.</p>

                            </div>

                            <div class="we-about">

                                <div class="one-half">

                                    <div class="title">

                                        WE ARE

                                    </div>

                                    <ul>

                                        <li><span class="ion-checkmark-round"></span>Committed to professional and reliable
                                            services.</li>


                                        <li><span class="ion-checkmark-round"></span>Focused on simplifying business
                                            processes.</li>

                                        <li><span class="ion-checkmark-round"></span>Dedicated to client satisfaction and
                                            confidentiality.</li>

                                        <li><span class="ion-checkmark-round"></span>Passionate about supporting business
                                            growth.</li>

                                    </ul>

                                </div>

                                <div class="one-half">

                                    <div class="title">

                                        WE DONT

                                    </div>

                                    <ul>

                                        <li><span class="ion-close-round"></span>Compromise on professionalism and
                                            integrity.</li>

                                        <li><span class="ion-close-round"></span>Make promises we cannot guarantee.</li>

                                        <li><span class="ion-close-round"></span>Overlook our clients' needs and
                                            expectations.</li>

                                        <li><span class="ion-close-round"></span>Believe in one-size-fits-all solutions.
                                        </li>

                                    </ul>

                                </div>

                                <div class="clearfix"></div>

                            </div>

                        </div>

                        <div class="content-inner history">

                            <div class="row-inner">

                                <div class="one-half left">

                                    <div class="image">

                                        <img src="{{ asset('assets/images/about/02.webp') }}" alt="Professional business and financial consulting services in Nigeria">

                                    </div>

                                </div>

                                <div class="one-half text right">

                                    <div class="text-about">

                                        <h3>Making Professional Services Accessible to Everyone</h3>

                                        <p>At KREESTON CONSULTING SERVICES, we believe accessing professional business
                                            support should be simple and convenient.</p>

                                        <p>We provide reliable solutions in business registration, financial consulting, tax
                                            compliance and documentation, helping individuals, entrepreneurs and businesses
                                            handle essential processes with confidence. Through our convenient service
                                            delivery, we make it easier for you to focus on what matters most &mdash; growing your
                                            business.</p>

                                    </div>

                                </div>

                                <div class="clearfix"></div>

                            </div>

                            <div class="row-inner">

                                <div class="one-half text left">

                                    <div class="text-about">

                                        <h3>We are family</h3>

                                        <p>At KREESTON CONSULTING SERVICES, we believe every client deserves personal
                                            attention, respect and reliable support. We build lasting relationships through
                                            professionalism, integrity and a genuine commitment to helping individuals and
                                            businesses succeed.</p>

                                        <ul>

                                            <li><span class="ion-checkmark-round"></span>- We treat every client with care
                                                and respect.</li>

                                            <li><span class="ion-checkmark-round"></span>- We value trust, integrity and
                                                confidentiality.</li>

                                            <li><span class="ion-checkmark-round"></span>- We provide solutions tailored to
                                                your needs.</li>

                                            <li><span class="ion-checkmark-round"></span>- We are committed to your growth
                                                and success.</li>

                                        </ul>

                                    </div>

                                </div>

                                <div class="one-half right">

                                    <div class="image">

                                        <img src="{{ asset('assets/images/about/03.webp') }}" alt="Business support and financial advisory">

                                    </div>

                                </div>

                                <div class="clearfix"></div>

                            </div>

                            <div class="flat-list-year">

                                <ul>

                                    <li>

                                        <div class="one-half">

                                            <div class="year">

                                                KCS

                                            </div>

                                        </div>

                                        <div class="one-half right">

                                            <div class="info-year">

                                                <h4>Start Your Business Journey With KCS</h4>

                                                <p>Every successful business starts with a step. Whether you need business
                                                    registration, financial guidance, tax support or documentation services,
                                                    KCS is ready to help. Let us simplify the process and provide the
                                                    professional support you need to move forward with confidence.</p>

                                            </div>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="one-half right">

                                            <div class="year">

                                                KCS

                                            </div>

                                        </div>

                                        <div class="one-half left">

                                            <div class="info-year">

                                                <h4>Turn Your Ideas Into Reality</h4>

                                                <p>Every great business begins with an idea and the courage to take the
                                                    first step. At KCS, we provide the professional guidance and business
                                                    support you need to turn your ideas into successful ventures.</p>

                                            </div>

                                        </div>



                                    </li>

                                    <li>

                                        <div class="one-half">

                                            <div class="year">

                                                KCS

                                            </div>

                                        </div>

                                        <div class="one-half right">

                                            <div class="info-year">

                                                <h4>Build Today, Secure Tomorrow</h4>

                                                <p>A successful business requires proper planning, sound financial
                                                    management and compliance. We help you establish a strong foundation,
                                                    manage essential business processes and prepare for sustainable growth.
                                                </p>

                                            </div>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="one-half right">

                                            <div class="year">

                                                KCS

                                            </div>

                                        </div>

                                        <div class="one-half left">

                                            <div class="info-year">

                                                <h4>Your Success Is Our Commitment</h4>

                                                <p>Your business goals matter to us. From registration to financial
                                                    consulting and documentation, KCS is committed to making your journey
                                                    easier through reliable solutions and professional support.</p>

                                            </div>

                                        </div>



                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="content-inner team-member">

                            <div class="row">

                                <div class="col-lg-10 col-sm-6">

                                    <div class="team-item">

                                        <div class="team-image">

                                            <img src="{{ asset('assets/images/team/01.jpg') }}" alt="Echezona Onyinye Christiana, Chief Executive Officer of Kreeston Consulting Services">

                                        </div>

                                        <div class="team-content">
                                            <div class="name">
                                                <div class="ceo-bio-box">
                                                    <div class="ceo-bio-content">

                                                        <h3>
                                                            ECHEZONA ONYINYE CHRISTIANA, B.Sc., AAT, ACA <br>
                                                            Chief Executive Officer | Kreeston Consulting Services
														</h3>

                                                        <p>
                                                           Echezona Onyinye Christiana is a Chartered Accountant, business consultant and the Chief Executive Officer of Kreeston Consulting Services, a professional business consulting firm committed to delivering comprehensive accounting, taxation, financial and corporate advisory solutions to individuals, entrepreneurs, small and medium-sized enterprises (SMEs), and corporate organisations.
                                                        </p>

                                                        <p>
                                                            She holds a Bachelor of Science degree (B.Sc.) in Accounting, is an Associate Accounting Technician (AAT), an Associate Chartered Accountant (ACA), and is currently pursuing a Master's degree (MSc) in Finance. Her academic qualifications and professional experience provide her with a strong foundation in financial management, accounting practices, taxation, auditing and business advisory services.
                                                        </p>

                                                        <p>
                                                            Her professional interests and areas of expertise cover a broad range of business and financial services, including Accounting and Financial Management, Auditing and Assurance, Tax Planning and Advisory, Bookkeeping, Outsourced Accounting Services, Financial Advisory, Management Consulting, Business Registration and Corporate Compliance.
                                                        </p>

                                                        <p>
                                                            As the Chief Executive Officer of Kreeston Consulting Services, she provides strategic leadership and direction, driving the firm's commitment to professionalism, integrity, excellence and client satisfaction. She is passionate about helping businesses build effective financial management structures, maintain accurate accounting records, fulfil their statutory and regulatory obligations, and make informed decisions that promote operational efficiency and sustainable business growth.
                                                        </p>

                                                        <p>
                                                            She recognises that every business has unique financial and operational needs. Consequently, her approach to professional service delivery is centred on understanding each client's business, identifying challenges and providing practical, efficient and result-oriented solutions. She is particularly committed to helping individuals and organisations navigate the complexities of taxation, resolve tax and regulatory compliance issues, optimise their financial processes and achieve greater confidence in managing their businesses.
                                                        </p>

                                                        <p>
                                                            Under her leadership, Kreeston Consulting Services continues to uphold the highest standards of professional service delivery, building lasting relationships with clients through reliability, confidentiality, accountability and a genuine commitment to their success.
                                                        </p>

                                                        <p>
                                                            Her professional philosophy is built on the belief that every successful business deserves sound financial management, proper regulatory guidance and access to quality professional advisory services.
                                                        </p>

                                                        <p>
                                                            Through Kreeston Consulting Services, she is dedicated to making professional business and financial solutions accessible, dependable and valuable, empowering businesses to remain compliant, financially organised and positioned for sustainable growth.
                                                        </p>

                                                        <div class="ceo-bio-footer">
                                                            Professionalism <span>|</span> Integrity <span>|</span>
                                                            Excellence <span>|</span> Client Satisfaction
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>

                        <div class="content-inner partner">

                            <div class="row">

                                <div class="col-lg-4 col-sm-6">

                                    <div class="partner-item">

                                        <div class="partner-image">

                                            <img src="{{ asset('assets/images/partner/01.jpeg') }}" alt="">

                                        </div>

                                        <div class="partner-content">

                                            <h3>VeensTech Ltd</h3>

                                            <p>Veenstech Ltd specializes in professional website development, design, and
                                                management. We create modern, responsive, and user-friendly websites while
                                                providing reliable maintenance and support to help businesses build a strong
                                                online presence and grow digitally.</p>

                                            <div class="btn-visit">

                                                <a href="https://wa.me/2349026881244" target="_blank"
                                                    rel="noopener noreferrer" title="Chat with us on WhatsApp">
                                                    Contact Veenstech Ltd +234 9026881244
                                                </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                                {{-- <div class="col-lg-4 col-sm-6">

										<div class="partner-item">

											<div class="partner-image">

												<img src="{{ asset('assets/images/partner/06.jpg') }}" alt="">

											</div>

											<div class="partner-content">

												<h3>Fashion & Blogger</h3>

												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>

												<div class="btn-visit">

													<a href="#" title="">Visit Company<span class="ion-android-arrow-forward"></span></a>

												</div>

											</div>

										</div>

									</div> --}}

                            </div>

                        </div>

                        <div class="content-inner flat-faq">

                            <div class="faq-header">

                                <h2>Frequently Asked Questions</h2>

                                <p>Find answers to common questions about our business registration, financial consulting,
                                    tax compliance, documentation and other professional services. We're committed to making
                                    your experience with KCS simple, convenient and stress-free.</p>

                            </div>

                            <div class="faq-content">

                                <div class="accordion">

                                    <div class="accordion-toggle">

                                        <div class="toggle-title">

                                            <span>1</span>What services does KREESTON CONSULTING SERVICES offer?

                                        </div><!-- /.toggle-title -->

                                        <div class="toggle-content">

                                            <p>

                                                KCS offers a range of professional services, including business and company
                                                registration, CAC post-incorporation services, management and financial
                                                consulting, tax compliance support, online registration and documentation
                                                services.

                                            </p>

                                        </div><!-- /.toggle-content -->

                                    </div><!-- /.accordiontoggle -->

                                    <div class="accordion-toggle">

                                        <div class="toggle-title active">

                                            <span>2</span>Can KCS help me register a new business or company?

                                        </div><!-- /.toggle-title -->

                                        <div class="toggle-content">

                                            <p>

                                                Yes. We assist individuals and entrepreneurs with business name
                                                registration, company registration and other CAC-related services, providing
                                                guidance throughout the registration process.

                                            </p>

                                        </div><!-- /.toggle-content -->

                                    </div><!-- /.accordion-toggle -->

                                    <div class="accordion-toggle">

                                        <div class="toggle-title">

                                            <span>3</span>Do you provide services to existing businesses?

                                        </div><!-- /.toggle-title -->

                                        <div class="toggle-content">

                                            <p>

                                                Absolutely! We support existing businesses with annual returns filing,
                                                company information updates, financial management, business advisory, tax
                                                compliance and other essential business services.

                                            </p>

                                        </div><!-- /.toggle-content -->

                                    </div><!-- /.accordion-toggle -->

                                    <div class="accordion-toggle">

                                        <div class="toggle-title">

                                            <span>4</span>Can I access your services online without visiting your office?

                                        </div><!-- /.toggle-title -->

                                        <div class="toggle-content">

                                            <p>

                                                Yes. KCS provides convenient online service support, allowing clients to
                                                make enquiries, submit necessary information and receive assistance with
                                                available services remotely.

                                            </p>

                                        </div><!-- /.toggle-content -->

                                    </div><!-- /.accordion-toggle -->

                                    <div class="accordion-toggle">

                                        <div class="toggle-title">

                                            <span>5</span>How can I get started or request your services?

                                        </div><!-- /.toggle-title -->

                                        <div class="toggle-content">

                                            <p>

                                                Getting started is easy. Simply contact us through our website, phone or
                                                WhatsApp. Tell us the service you require, and our team will guide you
                                                through the necessary steps, requirements and processing arrangements.

                                            </p>

                                        </div><!-- /.toggle-content -->

                                    </div><!-- /.accordion-toggle -->





                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


@endsection
