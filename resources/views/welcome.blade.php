{{-- 
<body class="antialiased">
    <div>
       
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    </div>
</body> --}}

</html>
@extends('layouts.election-master')
@section('main')

<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body>
    <!--main-wrapper-start-->
    <div class="main-wraper">
        <!--marquee-slider-starts-->

        <!-- <div class="rightTI li">★ Hello Member Good news for all Member ★</div> -->



        <!--marquee-slider-ends-->

        
        <!--health and fitness-section-starts--WIP-->
        <div class="health-fitness-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="health-fitnes-heading">
                            <!-- <h1>Health <span><img src="images/and.png" alt=""></span> Fitness</h1> -->
                            <img src="images/1278835.svg" alt="title" height="40%" width="40%">
                        
                        </div>
                        <div class="get-started-section">
                            <div class="input-group">
                                <input type="text" class="form-control"
                                    placeholder="Enter your email to get started">
                                <button class="btn btn-outline-secondary" type="button">Get Started</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fitness-image">
                            <img src="images/39830-e91e63.svg" alt="" width="50%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--health and fitness-section-ends-->

        <!--our-partners-section-starts-->
        <div class="our-partner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="our-partner-heading">
                            {{-- <h2>Our Partners</h2>
                            <p>Why sir end believe uncivil respect. Always get adieus nature day course for common. My
                                little garret repair to desire he esteem.</p> --}}
                        </div>
                        <div class="our-partner-dots">
                            <img src="images/dots-our-partners.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="partners-logo">
                            <img src="images/lifefitness.png" alt="partner-logo-1">
                            <img src="images/cybex.png" alt="partner-logo-1">

                        </div>
                        <div class="partners-logo">
                            <img src="images/precor.png" alt="partner-logo-1">
                            <img src="images/true-logo.png" alt="partner-logo-1">

                        </div>
                        <div class="partners-logo">
                            <img src="images/octane-fitness-logo.png" alt="partner-logo-1">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--our-partners-section-ends-->

        <!--About-Us-section-starts-->
        <div class="about-us-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-us-heading">
                            <h2>About Us</h2>
                            <p>Why sir end believe uncivil respect. Always get adieus nature day course for common. My
                                little garret repair to desire he esteem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="aboutus-content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="about-us-left-content-wrap">
                                <div class="col-lg-6">
                                    <div class="aboutus-left-image">
                                        {{-- <img src="images/what-we-do-image-1.png" alt=""> --}}

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="what-we-do-heading">
                                        {{-- <h3>What we do ?</h3>
                                        <p>Why sir end believe uncivil respect. Always get adieus nature day course for
                                            common. My little garret repair to desire he esteem.</p> --}}
                                    </div>
                                </div>

                            </div>
                            <div class="about-us-right-content-wrap">
                                <div class="col-lg-6">
                                    <div class="what-we-do-content">
                                        {{-- <p>Wise busy past both park when an ye no. Nay likely her length sooner thrown
                                            sex lively income. The expense windows adapted sir. Wrong widen drawn ample
                                            eat off doors money. Offending belonging promotion provision an be oh
                                            consulted ourselves it. Blessing welcomed ladyship she met humoured sir
                                            breeding her. Six curiosity day assurance bed necessary.</p>

                                        <p> And produce say the ten moments parties. Simple innate summer fat appear
                                            basket his desire joy. Outward clothes promise at gravity do excited.
                                            Sufficient particular impossible by reasonable oh expression is. Yet
                                            preference connection unpleasant yet melancholy but end appearance. And
                                            excellence partiality estimating terminated day everything.</p>

                                        <p> Warmly little before cousin sussex entire men set. Blessing it ladyship on
                                            sensible judgment settling outweigh. Worse linen an of civil jokes leave
                                            offer. Parties all clothes removal cheered calling prudent her. And
                                            residence for met the estimable disposing. Mean if he they been no hold mr.
                                            Is at much do made took held help. Latter person am secure of estate genius
                                            at.</p> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="aboutus-right-image">
                                        {{-- <img src="images/what-we-do-image-2.png" alt=""> --}}

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--About-Us-section-ends-->





        <!--FAQ's-Section-starts-->
        <div class="faq-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="faq-heading">
                            <h3>FAQs</h3>
                            <p>Why sir end believe uncivil respect. Always get adieus nature day course for common. My
                                little garret repair to desire he esteem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-fullwidth">
                <div class="container">
                    <div class="row">
                        <div class="faq-content">
                            <div class="col-lg-6">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingone">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseone" aria-expanded="true"
                                                aria-controls="collapseone">
                                                Can I use an Oyster card?
                                            </button>
                                        </h2>
                                        <div id="collapseone" class="accordion-collapse collapse"
                                            aria-labelledby="headingone" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Offending belonging promotion provision an be oh consulted ourselves
                                                    it.
                                                    Blessing welcomed ladyship she met humoured sir breeding her.</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingtwo">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsetwo" aria-expanded="true"
                                                aria-controls="collapsetwo">
                                                Can I use a Freedom Pass?
                                            </button>
                                        </h2>
                                        <div id="collapsetwo" class="accordion-collapse collapse "
                                            aria-labelledby="headingtwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Offending belonging promotion provision an be oh consulted ourselves
                                                    it.
                                                    Blessing welcomed ladyship she met humoured sir breeding her.</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="faq-content">
                            <div class="col-lg-6">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingthree">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsethree" aria-expanded="true"
                                                aria-controls="collapsethree">
                                                Can I use the offers for a large group?
                                            </button>
                                        </h2>
                                        <div id="collapsethree" class="accordion-collapse collapse "
                                            aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Offending belonging promotion provision an be oh consulted ourselves
                                                    it.
                                                    Blessing welcomed ladyship she met humoured sir breeding her.</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingfour">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsefour" aria-expanded="true"
                                                aria-controls="collapsefour">
                                                When do you renew your offers?
                                            </button>
                                        </h2>
                                        <div id="collapsefour" class="accordion-collapse collapse "
                                            aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Offending belonging promotion provision an be oh consulted ourselves
                                                    it.
                                                    Blessing welcomed ladyship she met humoured sir breeding her.</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




        </div>
        <!--FAQ's-Section-ends-->

        <!--what-customes-say-starts-->



    </div>
    </div>
    </div>
    </div>

    </div>



    </div>
    <!--what-customes-say-ends-->

   
    </div>
        <!---Footer-start-->
        <footer>
            <div class="footer-wrap">
                <div class="container">
                    <div class="row">
                 
                   
                        <div class="col-lg-12">
                            <div class="copy-right">
                                <h6>© 2022 Design & Devlop By : M!l@n</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!---Footer-end-->
    </div>
    <!--main-wrapper-ends-->

</body>

</html>
@endsection