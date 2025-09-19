@extends('frontend.layouts.app')
@section('title', 'About Us')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">
        <!-- About Banner section Start -->
        <section class="about-banner tw-mt-15">
            <div class="container max-w-1800-px">
                <div class="section-bg-two tw-rounded-3xl tw-pb-84-px tw-pt-134-px">
                    <div class="container">
                        <div class="position-relative tw-pt-180-px tw-pb-200-px z-1">
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-7 col-sm-8">
                                    <div class="text-center">
                                        <img src="{{asset('assets/images/logo/favicon-two.png')}}" alt="Favicon" />
                                        <h1 class="tw-mt-405">
                                            Build profiles, post projects, and hire the right talent — all in one place.
                                        </h1>
                                        <div
                                            class="d-flex align-items-center tw-gap-4 justify-content-center tw-mt-12 flex-wrap">
                                            <a href="{{route('register')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn btn-main hover-style-one"
                                                data-block="button">
                                                <span class="button__flair"></span>
                                                <span class="button__label">Create Profile</span>
                                            </a>
                                            <a href="{{route('register')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two"
                                                data-block="button">
                                                <span class="button__flair"></span>
                                                <span class="button__label">Post a Project</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown one">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img1.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 two">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img2.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown three">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img3.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 four">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img4.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown five">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img5.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 six">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img6.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown seven">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img7.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 eight">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img8.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown nine">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img9.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 ten">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img10.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown eleven">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img11.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                                <div
                                    class="positioned-image tw-rounded-3xl overflow-hidden common-shadow-fifteen d-inline-block position-absolute animation-upDown animation-delay-3 twelve">
                                    <img src="{{asset('assets/images/thumbs/about-banner-img12.png')}}" alt="Image"
                                        class="tw-rounded-3xl w-100 h-100 object-fit-cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Banner section End -->

        <!-- About Counter section Start -->
        <section class="about-counter py-120">
            <div class="container">
                <div class="max-w-830-px text-center tw-mb-12 mx-auto">
                    <div class="text-center tw-mb-3">
                        <img src="{{asset('assets/images/icons/sparkle.png')}}" alt="Icon" />
                    </div>
                    <h3 class="splitTextStyleOne text-capitaliz fw-semibold">
                        Platform by the numbers —
                        <span class="fw-normal">talent, speed, and</span>
                        successful delivery
                    </h3>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div
                            class="max-w-295-px tw-max-h-295-px text-center rounded-circle w-100 h-100 aspect-1 d-flex flex-column justify-content-center align-items-center hover-bg-neutral-100 tw-transition tw-duration-200">
                            <h3 class="h1">
                                <span class="counter">20</span><span class="h2">M</span>
                            </h3>
                            <span class="h6 text-uppercase tw-text-base tw-mt-5">verified professionals</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="700">
                        <div
                            class="max-w-295-px tw-max-h-295-px text-center rounded-circle w-100 h-100 aspect-1 d-flex flex-column justify-content-center align-items-center hover-bg-neutral-100 tw-transition tw-duration-200">
                            <h3 class="h1">
                                <span class="counter">95</span><span class="h2">%</span>
                            </h3>
                            <span class="h6 text-uppercase tw-text-base tw-mt-5">project success rate</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <div
                            class="max-w-295-px tw-max-h-295-px text-center rounded-circle w-100 h-100 aspect-1 d-flex flex-column justify-content-center align-items-center hover-bg-neutral-100 tw-transition tw-duration-200">
                            <h3 class="h1">
                                <span class="counter">3</span><span class="h2">x</span>
                            </h3>
                            <span class="h6 text-uppercase tw-text-base tw-mt-5">faster hiring</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="900">
                        <div
                            class="max-w-295-px tw-max-h-295-px text-center rounded-circle w-100 h-100 aspect-1 d-flex flex-column justify-content-center align-items-center hover-bg-neutral-100 tw-transition tw-duration-200">
                            <h3 class="h1">
                                <span class="counter">99</span><span class="h2">k+</span>
                            </h3>
                            <span class="h6 text-uppercase tw-text-base tw-mt-5">active portfolios</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Counter section End -->

        <!-- About Features section Start -->
        <section class="about-features py-120 section-bg-two">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between flex-wrap tw-gap-6 tw-mb-12">
                    <div class="max-w-532-px">
                        <h3 class="splitTextStyleOne text-capitalize">
                            Everything you need to hire, work, and deliver
                        </h3>
                    </div>
                    <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <p
                            class="splitTextStyleOne text-neutral-500 max-w-490-px fw-medium tw-ps-5 border-start border-app-landing border-2">
                            Create an AI profile by uploading your CV or describing your experience. Clients post briefs
                            and upload PDFs. Our smart matching suggests the best developers, designers, and specialists.
                            Manage orders, projects, and collaboration with your team — all in one workspace.
                        </p>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div
                            class="tw-rounded-2xl bg-white bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-200 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-icon1.svg')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat" />
                            </span>
                            <h5 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                AI CV & Profile Builder
                            </h5>
                            <p
                                class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                Upload your CV or explain your skills — get a polished, hire-ready profile in minutes.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <div
                            class="tw-rounded-2xl bg-white bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-200 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-icon2.svg')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat" />
                            </span>
                            <h5 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                Post Projects & Upload Docs
                            </h5>
                            <p
                                class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                Clients add briefs, PDFs, and requirements to get fast, accurate proposals.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1000">
                        <div
                            class="tw-rounded-2xl bg-white bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-200 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-icon3.svg')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat" />
                            </span>
                            <h5 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                Smart Talent Matching
                            </h5>
                            <p
                                class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                We match each brief to the most suitable developer, designer, or specialist.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1200">
                        <div
                            class="tw-rounded-2xl bg-white bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-200 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-icon4.svg')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat" />
                            </span>
                            <h5 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                Orders & Project Management
                            </h5>
                            <p
                                class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                Create orders, track milestones, and collaborate with teammates in one place.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Features section End -->

        <!-- About Team section Start -->
        <section class="about-team py-120">
            <div class="container">
                <div class="max-w-602-px text-center mx-auto tw-mb-13">
                    <h3 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
                        Meet our experts
                    </h3>
                    <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-500-px fw-medium">
                        We’re building the easiest way to create profiles, post briefs, match the right talent, and manage projects from kickoff to delivery.
                    </p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="about-team group-item">
                            <div class="position-relative tw-rounded-xl overflow-hidden">
                                <img src="{{asset('assets/images/thumbs/about-team-img1.jpg')}}" alt="Thumb"
                                    class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300" />
                                <ul
                                    class="list-social position-absolute top-50 tw-end-0 translate-middle-y d-flex flex-column">
                                    <li>
                                        <a href="https://www.facebook.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-facebook-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-twitter-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-instagram-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-pinterest-logo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tw-mt-705 text-center">
                                <h6 class="tw-mb-2">John Doe</h6>
                                <span class="text-capitalize text-neutral-500 tw-text-sm">Head of Talent Success</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <div class="about-team group-item">
                            <div class="position-relative tw-rounded-xl overflow-hidden">
                                <img src="{{asset('assets/images/thumbs/about-team-img2.jpg')}}" alt="Thumb"
                                    class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300" />
                                <ul
                                    class="list-social position-absolute top-50 tw-end-0 translate-middle-y d-flex flex-column">
                                    <li>
                                        <a href="https://www.facebook.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-facebook-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-twitter-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-instagram-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-pinterest-logo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tw-mt-705 text-center">
                                <h6 class="tw-mb-2">John Milton</h6>
                                <span class="text-capitalize text-neutral-500 tw-text-sm">Lead Product Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1000">
                        <div class="about-team group-item">
                            <div class="position-relative tw-rounded-xl overflow-hidden">
                                <img src="{{asset('assets/images/thumbs/about-team-img3.jpg')}}" alt="Thumb"
                                    class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300" />
                                <ul
                                    class="list-social position-absolute top-50 tw-end-0 translate-middle-y d-flex flex-column">
                                    <li>
                                        <a href="https://www.facebook.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-facebook-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-twitter-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-instagram-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-pinterest-logo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tw-mt-705 text-center">
                                <h6 class="tw-mb-2">Robiul Hasan</h6>
                                <span class="text-capitalize text-neutral-500 tw-text-sm">Matching Algorithm Engineer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1200">
                        <div class="about-team group-item">
                            <div class="position-relative tw-rounded-xl overflow-hidden">
                                <img src="{{asset('assets/images/thumbs/about-team-img4.jpg')}}" alt="Thumb"
                                    class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300" />
                                <ul
                                    class="list-social position-absolute top-50 tw-end-0 translate-middle-y d-flex flex-column">
                                    <li>
                                        <a href="https://www.facebook.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-facebook-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-twitter-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-instagram-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com"
                                            class="tw-w-11 tw-h-10 bg-app-landing hover-bg-main-600 text-white tw-text-lg d-flex justify-content-center align-items-center">
                                            <i class="ph-fill ph-pinterest-logo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tw-mt-705 text-center">
                                <h6 class="tw-mb-2">John Smith</h6>
                                <span class="text-capitalize text-neutral-500 tw-text-sm">Community & Support Lead</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center tw-mt-13">
                    <a href="javascript:void(0)"
                        class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 px-8 tw-rounded-xl tw-py-505 fw-bold text-capitalize"
                        data-block="button">
                        <span class="button__flair"></span>
                        <div class="d-flex align-items-center tw-gap-2 z-1">
                            <span class="button__label">all team members</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- About Team section End -->

        <!-- Testimonials section start= -->
        <section class="testimonials py-120 bg-neutral-50 position-relative z-1">
            <img src="{{asset('assets/images/shapes/faq-bg.png')}}" alt=""
                class="position-absolute tw-start-0 top-0 w-100 h-100 z-n1" />

            <div class="container">
                <div class="max-w-602-px mx-auto text-center tw-mb-15">
                    <span
                        class="tw-py-1 tw-px-705 bg-neutral-100 tw-text-sm fw-medium text-capitalize rounded-pill tw-mb-205">Work
                        Showcase</span>
                    <h3 class="splitTextStyleOne fw-light tw-leading-104 tw-mb-9 d-flex gap-2">
                        <span class="d-inline-block fw-medium">
                            <span class="">What </span>
                            <span class="fw-semibold">
                                Our Client
                            </span>
                            <span class=""> Say</span>
                            <span class="fw-semibold">About Us</span>
                        </span>
                    </h3>
                </div>

                <div class="d-flex tw-gap-6 testimonials-item-wrapper flex-wrap">
                    <!-- Testimonials Item Start -->
                    <div class="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100">
                        <div class="current-content">
                            <div class="tw-max-h-397-px overflow-hidden text-center">
                                <img src="{{asset('assets/images/thumbs/testimonials-img1.png')}}" alt="Image" class="" />
                            </div>
                            <div class="tw-py-8 tw-px-4 text-center">
                                <h6 class="tw-mb-2">Webcly jhonson</h6>
                                <span class="text-neutral-600 fw-medium tw-text-sm">
                                    <span class="fw-semibold text-neutral-600">Tung Phan -</span>
                                    Ceo and Founder
                                </span>
                            </div>
                        </div>

                        <div class="hidden-content tw-px-56-px tw-py-76-px">
                            <div class="">
                                <span class="tw-mb-6 animate-left-right animation-delay-02 tw-duration-200">
                                    <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="" class="" />
                                </span>
                                <div class="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                                    <p
                                        class="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                                        “We posted a brief and uploaded our docs. The platform matched us with two perfect developers within a day — hiring and delivery were seamless.”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                                <div class="tw-h-84-px tw-w-84-px rounded-circle">
                                    <img src="{{asset('assets/images/thumbs/testimonials-short-img1.png')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="">
                                    <h6 class="tw-mb-2">
                                        Webcly jhonson
                                    </h6>
                                    <span class="text-neutral-600">
                                        <span class="fw-semibold text-neutral-600">Tung Phan -
                                        </span>
                                        and Founder
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials Item End -->

                    <!-- Testimonials Item Start -->
                    <div
                        class="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100 active">
                        <div class="current-content">
                            <div class="tw-max-h-397-px overflow-hidden text-center">
                                <img src="{{asset('assets/images/thumbs/testimonials-img3.png')}}" alt="Image" class="" />
                            </div>
                            <div class="tw-py-8 tw-px-4 text-center">
                                <h6 class="tw-mb-2">James anderson</h6>
                                <span class="text-neutral-600 fw-medium tw-text-sm">
                                    <span class="fw-semibold text-main-600">CEO -</span>
                                    and Founder
                                </span>
                            </div>
                        </div>

                        <div class="hidden-content tw-px-56-px tw-py-76-px">
                            <div class="">
                                <span class="tw-mb-6 animate-left-right animation-delay-02 tw-duration-200">
                                    <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="" class="" />
                                </span>
                                <div class="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                                    <p
                                        class="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                                        “Uploading my CV generated a clean profile and portfolio highlights. I connected with a client, created an order, and delivered with clear milestones.”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                                <div class="tw-h-84-px tw-w-84-px rounded-circle">
                                    <img src="{{asset('assets/images/thumbs/testimonials-short-img3.png')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="">
                                    <h6 class="tw-mb-2">
                                        James anderson
                                    </h6>
                                    <span class="text-neutral-600">
                                        <span class="fw-semibold text-main-600">CEO</span>
                                        and Founder
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials Item End -->

                    <!-- Testimonials Item Start -->
                    <div class="testimonials-item cursor-pointer bg-white tw-rounded-28-px border border-neutral-100">
                        <div class="current-content">
                            <div class="tw-max-h-397-px overflow-hidden text-center">
                                <img src="{{asset('assets/images/thumbs/testimonials-img2.png')}}" alt="Image" class="" />
                            </div>
                            <div class="tw-py-8 tw-px-4 text-center">
                                <h6 class="tw-mb-2">John Doe</h6>
                                <span class="text-neutral-600 fw-medium tw-text-sm">
                                    <span class="fw-semibold text-neutral-600">Developer -</span>
                                    Web Developer
                                </span>
                            </div>
                        </div>

                        <div class="hidden-content tw-px-56-px tw-py-76-px">
                            <div class="">
                                <span class="tw-mb-6 animate-left-right animation-delay-02 tw-duration-200">
                                    <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="" class="" />
                                </span>
                                <div class="border-bottom border-neutral-200 tw-pb-10 tw-mb-8">
                                    <p
                                        class="testimonials-item__desc h5 text-heading fw-medium tw-leading-153 animate-left-right animation-delay-03 tw-duration-200 line-clamp-4">
                                        “The smart matching saved me days. The client saw my portfolio, messaged me, and we kicked off with clear tasks and timelines.”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="d-flex align-items-center tw-gap-6 animate-left-right animation-delay-04 tw-duration-200">
                                <div class="tw-h-84-px tw-w-84-px rounded-circle">
                                    <img src="{{asset('assets/images/thumbs/testimonials-short-img2.png')}}" alt="Image"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                                <div class="">
                                    <h6 class="tw-mb-2">
                                        Webcly jhonson
                                    </h6>
                                    <span class="text-neutral-600 fw-medium tw-text-sm">
                                        <span class="fw-semibold text-neutral-600">Developer -</span>
                                        Web Developer
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials Item End -->
                </div>
            </div>
        </section>
        <!-- Testimonials section End= -->

        <!-- Brand Three section start= -->
        <div class="brand-three pt-120">
            <div class="container">
                <div class="text-center tw-mb-16">
                    <h5 class="mb-0 line-clamp-1">
                        Loved by teams hiring faster
                        <span class="text-gradient-teal">worldwide</span>
                        compnaies.....
                    </h5>
                </div>
                <div class="brand-three-slider swiper left-right-gradient gradient-width-200">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img1.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img2.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img3.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img4.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img5.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img6.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img7.png')}}" alt="Logo" />
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img5.png')}}" alt="Logo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Three section end= -->

        <!-- Pricing Plan three start -->
        <section class="pricing-plan-three py-120">
            <div class="container">
                <div class="max-w-602-px text-center mx-auto tw-mb-13">
                    <div class="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                        <div class="text-gradient-teal">
                            Join free —
                            <span class="text-yellow text-stroke-yellow">no</span>
                            upfront fees to get started
                        </div>
                    </div>
                    <h2 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
                        flexible pricing
                        <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">plans</span>
                        for talent & teams
                    </h2>
                </div>

                <div class="row gy-4">
                    <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="position-relative bg-neutral-100 tw-px-7 tw-py-16 bg-white hover-border-main-600">
                            <div class="">
                                <div class="tw-ps-205">
                                    <h5 class="tw-mb-1">Starter</h5>
                                    <p class="text-neutral-500">
                                        Create your profile and explore
                                    </p>
                                    <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                    <div class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10">
                                        <h2 class="mb-0">
                                            $1.99<span class="tw-text-xl fw-medium">/Yearly</span>
                                        </h2>
                                    </div>
                                </div>
                                <a href="{{route('login')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Start Free Trial</span>
                                    </div>
                                </a>
                                <span class="text-heading tw-mt-3 text-center d-block fw-medium">Renews at
                                    $9.88/month</span>

                                <div class="tw-ps-205">
                                    <div class="d-flex flex-column tw-gap-5 tw-mt-10">
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">AI profile & CV parsing</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Post 1 project</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="640">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Basic messaging</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="660">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Simple order tracking</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="680">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Email support</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <div class="position-relative bg-neutral-100 tw-px-7 tw-py-16 bg-white hover-border-main-600">
                            <div class="">
                                <div class="tw-ps-205">
                                    <h5 class="tw-mb-1">
                                        Growth
                                    </h5>
                                    <p class="text-neutral-500">
                                        Scale your hiring and delivery
                                    </p>
                                    <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                    <div class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10">
                                        <h2 class="mb-0">
                                            $9.99<span class="tw-text-xl fw-medium">/Yearly</span>
                                        </h2>
                                    </div>
                                </div>
                                <a href="{{route('login')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Start Free Trial</span>
                                    </div>
                                </a>
                                <span class="text-heading tw-mt-3 text-center d-block fw-medium">Renews at
                                    $9.88/month</span>

                                <div class="tw-ps-205">
                                    <div class="d-flex flex-column tw-gap-5 tw-mt-10">
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Unlimited projects</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Priority matching</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="640">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Team collaboration</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="660">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Milestones & tracking</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="680">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Chat & email support</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="900">
                        <div class="position-relative bg-neutral-100 tw-px-7 tw-py-16 bg-white hover-border-main-600">
                            <div class="">
                                <div class="tw-ps-205">
                                    <h5 class="tw-mb-1">Business</h5>
                                    <p class="text-neutral-500">
                                        For serious scale and teams
                                    </p>
                                    <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                    <div class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10">
                                        <h2 class="mb-0">
                                            $19.99<span class="tw-text-xl fw-medium">/Yearly</span>
                                        </h2>
                                    </div>
                                </div>
                                <a href="{{route('login')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Start Free Trial</span>
                                    </div>
                                </a>
                                <span class="text-heading tw-mt-3 text-center d-block fw-medium">Renews at
                                    $9.88/month</span>

                                <div class="tw-ps-205">
                                    <div class="d-flex flex-column tw-gap-5 tw-mt-10">
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Advanced AI suggestions</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Team workspaces</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="640">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Invoicing & payouts</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="660">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Integrations & exports</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="680">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Priority support</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Plan three End -->

        <!-- Task Management Section Start -->
        <section class="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half">
            <div class="container">
                <div class="text-end tw--mb-40-px position-relative z-2">
                    <img src="{{asset('assets/images/thumbs/laptop-man.png')}}" alt="Image" class="tw-me-84-px" />
                </div>

                <div class="bg-green-deep tw-rounded-3xl bg-green-deep tw-pt-100-px position-relative z-1">
                    <img src="{{asset('assets/images/shapes/hill-shape.png')}}" alt="Hill Shape"
                        class="position-absolute w-100 h-100 top-0 tw-start-0 z-n1" />
                    <img src="{{asset('assets/images/thumbs/task-management-img.png')}}" alt="Image"
                        class="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none" />

                    <div class="tw-mb-8 text-center max-w-570-px mx-auto">
                        <div class="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                Create a profile or post a project in minutes
                            </div>
                        </div>
                        <h3 class="splitTextStyleOne text-white">
                            Ready to hire or get hired?
                        </h3>

                        <div class="d-none">
                            <a href="javascript:void(0)"
                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold tw-mt-7"
                                data-block="button">
                                <span class="button__flair"></span>
                                <div class="d-flex align-items-center tw-gap-2 z-1">
                                    <span class="button__label">Download for free</span>
                                </div>
                            </a>
                        </div>
                        <div class="d-block">
                            <div class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                                <a href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Create Your Profile</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Post a Project</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tw-pt-8 text-center">
                        <div
                            class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">AI
                                Profile</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">CV
                                Parsing</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Smart
                                Matching</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill">Orders
                                & Milestones</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Team
                                Chat</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Portfolios</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Project
                                Docs</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">PDF
                                Briefs</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Secure
                                Contracts</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill">Faster
                                Hiring</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Task Management Section End -->

        <!-- footer area -->
        @include('frontend.includes.footers.footerThree')
        <!-- footer area end -->
    </div>
</div

@endsection
