@extends('layouts.app')

@section('seo_title', 'The #1 Hacker-Powered AppSec Testing Platform Connecting Organizations to the Largest Community of Ethical Hackers.')
@section('seo_description', 'HackerOne is the #1 hacker-powered security platform, helping organizations find and fix critical vulnerabilities before they can be criminally exploited and resolve critical security vulnerabilities by working with the largest hacker community through vulnerability disclosure, bug bounty programs and penetration testing services.')

@section('content')
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-wrapper">
                        <div class="hero-text-wrapper">
                            <h1 class="hero-title">
                                <span>Empowering</span> the world to build <span>safe</span> internet
                            </h1><!-- hero-title -->
                            <div class="hero-caption">
                                All of us HackerOnies are driven by a passion for our mission, and a strong urge to work together to make the world a better place.
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
                    <h3>About HackerOne</h3>
                </div><!-- col-md-6 -->
                <div class="col-lg-6">
                    <p>HackerOne was started by hackers and security leaders who are driven by a passion to make the internet safer. Our platform is the industry standard for hacker-powered security. We partner with the global hacker community to surface the most relevant security issues of our customers before they can be exploited by criminals. HackerOne is headquartered in San Francisco with offices in London, New York City, Singapore, and the Netherlands. Investors include Benchmark, New Enterprise Associates, Dragoneer Investments, and EQT Ventures.</p>
                </div><!-- col-md-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- intro-heding -->
    
    <div class="intro-area intro-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-wrapper" style="background-image: url('/img/about-image-1.jpf');">
                        <img src="/img/about-image-1.jpf" class="overlay-img" >
                    </div>
                </div><!-- col-md-6 -->
                <div class="col-lg-6">
                    <div class="text-wrapper">
                        <div class="text-grid last">
                            <h3>HackerOne are part of something much <span>bigger</span></h3>
                            <p>HackerOne’s mission is to empower the world to build a safer internet.</p>
                            <p>All of us HackerOnies are driven by a passion for our mission, and a strong urge to work together to make the world a better place. We recently held our inaugural all-company meeting where we built on top of this mission, documenting the values we embrace.</p>
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
                    <div class="hero-wrapper text-placeholder style2">
                        <div class="hero-text-wrapper">
                            <h1 class="hero-title">
                                Meet our <span>Team</span>
                            </h1><!-- hero-title -->
                        </div><!-- hero-text-wrapper -->
                    </div><!-- hero-wrapper -->
                </div><!-- col-lg-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- hero-area -->

    <div class="team-area">
        <div class="container">
            <div class="member-row row">
                <div class="col-lg-4 text-center">
                    <img src="/img/marten_mickos.jpf" alt="Marten Mickos">
                </div>
                <div class="col-lg-7">
                    <div class="title">Mårten Mickos - <span>CEO</span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis alias porro corporis fugit laborum et error nesciunt pariatur incidunt, doloribus provident quia dolore accusamus odio quaerat quos suscipit nemo cupiditate.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum alias labore ratione ipsam? Perferendis, dolorem earum mollitia fugit nulla praesentium! Ad optio delectus error, perspiciatis minima eius? Inventore, debitis excepturi?</p>
                </div>
            </div>
            <div class="member-row row second-row">
                <div class="col-lg-4 col-lg-push-6 text-center img-section">
                    <img src="/img/alex_120.jpf" alt="Alex">
                </div>
                <div class="col-lg-6 col-lg-pull-4 offset-lg-1 text-section">
                    <div class="title">Alex Rice - <span>Co-founder & CTO</span></div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam consequuntur quisquam nostrum repudiandae, reiciendis iusto corporis sit a eligendi exercitationem iure, culpa sunt. Aliquam ea eos veritatis architecto quia quo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae est ducimus fugiat enim omnis molestiae hic nulla. </p>
                </div>
            </div>
            <div class="member-row row">
                <div class="col-lg-4 text-center">
                    <img src="/img/liz_brittain.jpf" alt="Brittain">
                </div>
                <div class="col-lg-8">
                    <div class="title">Liz Brittain - <span>CFO</span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis alias porro corporis fugit laborum et error nesciunt pariatur incidunt, doloribus provident quia dolore accusamus odio quaerat quos suscipit nemo cupiditate.</p>
                </div>
            </div>
        </div>
    </div>

    <apicomponent></apicomponent>
@endsection