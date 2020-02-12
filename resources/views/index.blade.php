@extends('layouts.app')

@section('seo_title', 'Bug Bounty - Hacker Powered Security Testing | HackerOne');
@section('seo_description', 'HackerOne develops bug bounty solutions to help organizations reduce the risk of a security incident by working with the world’s largest community of ethical hackers to conduct discreet penetration tests, and operate a vulnerability disclosure or bug bounty program.');

@section('content')
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-wrapper">
                        <div class="hero-text-wrapper">
                            <h1 class="hero-title">
                                The most <span>trusted</span> hacked-powered security platform
                            </h1><!-- hero-title -->
                            <div class="hero-caption">
                                More Fortune 500 and Forbes Global 1,000 companies trust HackerOne to test and secure the applications they depend on to run their business.
                            </div><!-- hero-caption -->
                        </div><!-- hero-text-wrapper -->
                    </div><!-- hero-wrapper -->
                </div><!-- col-lg-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- hero-area -->

    <div class="intro-area intro-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>HackerOne Solutions</h3>
                </div><!-- col-md-6 -->
                <div class="col-lg-6">
                    <p>From implementing the basics of a vulnerability disclosure process to supercharging your existing security programs via a bug bounty program, HackerOne has you covered.</p>
                </div><!-- col-md-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- intro-heding -->
    
    <div class="intro-area intro-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-wrapper" style="background-image: url('/img/intro-image-1.png');">
                        <img src="/img/intro-image-1.png" class="overlay-img" >
                        <img src="/img/intro-image-2.jpg" alt="Establish a compliant process">
                    </div>
                </div><!-- col-md-6 -->
                <div class="col-lg-6">
                    <div class="text-wrapper">
                        <div class="text-grid first">
                            <h3><span>Establish</span> a compliant process</h3>
                        <p>For receiving and acting on vulnerabilities discovered by third-parties. Ensure bugs found by security researchers, ethical hackers, or other external parties reach the right people in your organization.</p>
                        </div>
                        <div class="text-grid center">
                            <h3><span>Improve</span> your Pen Test results</h3>
                        <p>With a project-based vulnerability assessment program. Capture the intelligence of our trusted community in a time-bound program that consistently outperforms traditional penetration testing.</p>
                        </div>
                        <div class="text-grid last">
                            <h3><span>Private</span>, fully-managed bug bounty program</h3>
                        <p>Launch a private, fully-managed bug bounty program for continuous coverage. Take a proactive approach to finding critical vulnerabilities across your critical surfaces with the full support of HackerOne’s security experts.</p>
                        </div>
                    </div>
                </div><!-- col-md-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- intro-main -->

    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-wrapper text-placeholder">
                        <div class="hero-text-wrapper">
                            <h1 class="hero-title">
                                <span>Trusted</span> by 1000+ Businesses
                            </h1><!-- hero-title -->
                            <h1 class="hero-title">
                                10 Years' <span>Experience</span>
                            </h1><!-- hero-title -->
                        </div><!-- hero-text-wrapper -->
                    </div><!-- hero-wrapper -->
                </div><!-- col-lg-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- hero-area -->

    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-wrapper">
                        <h2>In Theirs <span>Words</span></h2>
                        
                        <div class="testimonial-grid">
                            <div class="testimonial-quote">
                                The triage team is like an extension of our own team. Worth every penny.
                                Hackers have become an essential part of our security ecosystem.”
                            </div><!-- testimonial-quote -->
                            <div class="testimonial-credit">
                                Jeffrey Massimilla - General Motors
                            </div><!-- testimonial-credit -->
                        </div><!-- testimonial-grid -->

                        
                        <div class="slick">
                            <div class="customer-grid">
                                <img src="/img/snapchat-grey.png" alt="">
                            </div>
                            <div class="customer-grid">
                                <img src="/img/gm-grey.png" alt="">
                            </div>
                            <div class="customer-grid">
                                <img src="/img/starbucks-grey.png" alt="">
                            </div>
                            <div class="customer-grid">
                                <img src="/img/oath-grey.png" alt="">
                            </div>
                            <div class="customer-grid">
                                <img src="/img/dod-grey.png" alt="">
                            </div>
                            <div class="customer-grid">
                                <img src="/img/european-commission-grey.png" alt="">
                            </div>
                            <div class="customer-grid">
                                <img src="/img/saturn-grey.png" alt="">
                            </div>
                            <div class="customer-grid">
                                <img src="/img/shopify-grey.png" alt="">
                            </div>
                        </div><!-- slick -->
                    </div><!-- testimonial-wrapper -->
                </div><!-- col-lg-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- testimonial-area -->
@endsection