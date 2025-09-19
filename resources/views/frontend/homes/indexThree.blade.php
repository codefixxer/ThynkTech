@extends('frontend.layouts.app')
@section('title', 'Index Three')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerThree')
    <!-- header area end -->

    <div id="smooth-content">

        <!-- Banner Three Section start -->
        <section class="banner-three gradient-bg-five position-relative z-1 overflow-hidden">
            <img src="{{asset('assets/images/shapes/cloud-sky.png')}}" alt="Cloud Shape"
                class="position-absolute top-50 tw-end-0 left-right-scale-animation d-sm-block d-none z-n1">

            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="banner-three-content max-w-570-px">
                            <h1 class="splitTextStyleOne text-white text-capitalize tw-leading-none">
                                Simplify task
                                <span class="text-gradient-teal font-dm-serif fst-italic fw-normal">management</span>
                                and prioritize work
                            </h1>
                            <p class="splitTextStyleOne text-white tw-text-lg tw-mt-8">Sassly-<span
                                    class="text-yellow">CRM</span> in the past allowing you to focus more on your business
                                or simply enjoy your newfound legal time to reflect leaving</p>

                            <div class="d-flex align-items-center tw-gap-7 tw-mt-11" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <a href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Start Free Trial</span>
                                        <span class="icon">
                                            <img src="{{asset('assets/images/icons/download-cloud-icon.png')}}" alt="Icon">
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div class="d-flex align-items-center tw-gap-7 tw-mt-10">
                                <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span
                                        class="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                                        <i class="ph-bold ph-check"></i>
                                    </span>
                                    <span class="text-white">3-Day Free Trial</span>
                                </div>
                                <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span
                                        class="tw-w-7 tw-h-7 bg-white-08 rounded-circle d-flex justify-content-center align-items-center tw-text-sm text-white">
                                        <i class="ph-bold ph-check"></i>
                                    </span>
                                    <span class="text-white">No Credit Card</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-three-thumb position-lg-absolute tw-end-0 bottom-0 max-w-58-percent">
                            <img src="{{asset('assets/images/thumbs/banner-three-img.png')}}" alt="Thumb" data-aos="fade-left"
                                data-aos-duration="700">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Three Section End -->

        <!-- Brand Three section start -->
        <div class="brand-three pt-120">
            <div class="container">

                <div class="text-center tw-mb-16">
                    <h5 class="mb-0 line-clamp-1">Loved by next-gen B2B <span class="text-gradient-teal">SaaS</span>
                        compnaies.....</h5>
                </div>
                <div class="brand-three-slider swiper left-right-gradient gradient-width-200">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img1.png')}}" alt="Logo">
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img2.png')}}" alt="Logo">
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img3.png')}}" alt="Logo">
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img4.png')}}" alt="Logo">
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img5.png')}}" alt="Logo">
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img6.png')}}" alt="Logo">
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img7.png')}}" alt="Logo">
                            </div>
                        </div>
                        <div class="swiper-slide d-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="">
                                <img src="{{asset('assets/images/thumbs/brand-three-img5.png')}}" alt="Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Three section end -->

        <!-- Features Three section start -->
        <section class="features-three py-120 position-relative z-1">
            <img src="{{asset('assets/images/shapes/gradient-blue-yellow.png')}}" alt="Gradient"
                class="position-absolute tw-end-0 bottom-0 z-n1">

            <div class="container">
                <div class="d-flex align-items-center justify-content-between tw-gap-6 tw-mb-12">
                    <div class="max-w-620-px">
                        <h2 class="splitTextStyleOne text-heading text-capitalize"> Task management
                            <span class="font-dm-serif fst-italic fw-normal text-gradient-teal"> features </span>
                            & capabilities
                        </h2>
                    </div>
                    <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-490-px fw-medium">Sassly-CRM in the past
                            allowing you to focus more on your business simply enjoy your newfound legal time to reflect
                            leaving pen</p>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="tw-rounded-xl bg-goldenrod tw-p-7 h-100">
                            <div class="tw-pt-8 tw-pb-10 tw-ps-4">
                                <div class="position-relative h-100 d-flex flex-column">
                                    <span
                                        class="z-3 position-relative tw-px-11 tw-py-205 fw-bold text-white gradient-bg-six rounded-pill transform-rotate--14-deg">Project
                                        management</span>
                                    <span
                                        class="z-2 position-relative tw-px-11 tw-py-205 fw-bold text-heading bg-yellow rounded-pill">Performance
                                        tracking</span>
                                    <span
                                        class="z-1 position-relative tw-px-6 tw-py-205 fw-bold text-white gradient-bg-five rounded-pill transform-rotate-8-deg">Seamless
                                        integrations tools</span>
                                </div>
                            </div>

                            <div class="bg-white tw-rounded-lg common-shadow-twelve tw-py-5 tw-px-6">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="fw-bold tw-text-sm">Labels</span>
                                    <div class="dropdown">
                                        <button type="button" class="text-neutral-400" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="ph-fill ph-dots-three-outline"></i>
                                        </button>
                                        <ul class="dropdown-menu border-0 min-w-max tw-p-4 common-shadow-eight">
                                            <li class="p-0">
                                                <a href="javascript:void(0)"
                                                    class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">Action</a>
                                            </li>
                                            <li class="p-0">
                                                <a href="javascript:void(0)"
                                                    class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">Another
                                                    action</a>
                                            </li>
                                            <li class="p-0">
                                                <a href="javascript:void(0)"
                                                    class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">Something
                                                    else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tw-mt-7">
                                    <div
                                        class="d-flex align-items-center justify-content-between tw-pb-3 tw-mb-3 border-bottom border-neutral-100">
                                        <label for="Copywriting" class="d-flex align-items-center tw-gap-405">
                                            <span class="text-neutral-400 d-flex"><i class="ph-fill ph-tag"></i></span>
                                            <span class="text-heading fw-medium tw-text-sm">Copywriting</span>
                                        </label>
                                        <div class="form-check common-check-two">
                                            <input
                                                class="form-check-input me-0 float-none tw-w-6 tw-h-6 tw-rounded shadow-none bg-main-50"
                                                type="checkbox" id="Copywriting">
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-between tw-pb-3 tw-mb-3 border-bottom border-neutral-100">
                                        <label for="UIDesign" class="d-flex align-items-center tw-gap-405">
                                            <span class="text-neutral-400 d-flex"><i class="ph-fill ph-tag"></i></span>
                                            <span class="text-heading fw-medium tw-text-sm">UI Design</span>
                                        </label>
                                        <div class="form-check common-check-two">
                                            <input
                                                class="form-check-input me-0 float-none tw-w-6 tw-h-6 tw-rounded shadow-none bg-main-50"
                                                type="checkbox" id="UIDesign">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="Illustrations" class="d-flex align-items-center tw-gap-405">
                                            <span class="text-neutral-400 d-flex"><i class="ph-fill ph-tag"></i></span>
                                            <span class="text-heading fw-medium tw-text-sm">Illustrations</span>
                                        </label>
                                        <div class="form-check common-check-two">
                                            <input
                                                class="form-check-input me-0 float-none tw-w-6 tw-h-6 tw-rounded shadow-none bg-main-50"
                                                type="checkbox" id="Illustrations">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between tw-gap-3 tw-mt-4">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative z-2 border border-white border-3">
                                            <img src="{{asset('assets/images/thumbs/client-img1.png')}}" alt="Client Image"
                                                class="w-100 h-100 object-fit-cover">
                                        </div>
                                        <div
                                            class="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px z-1 border border-white border-3">
                                            <img src="{{asset('assets/images/thumbs/client-img2.png')}}" alt="Client Image"
                                                class="w-100 h-100 object-fit-cover">
                                        </div>
                                        <div
                                            class="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px border border-white border-3">
                                            <img src="{{asset('assets/images/thumbs/client-img3.png')}}" alt="Client Image"
                                                class="w-100 h-100 object-fit-cover">
                                        </div>
                                    </div>
                                    <span class="text-neutral-600 tw-text-sm">+ 15 people</span>
                                </div>
                                <div class="">
                                    <input type="file" id="uploadPhoto" hidden>
                                    <label for="uploadPhoto"
                                        class="tw-w-7 tw-h-7 rounded-circle d-flex justify-content-center align-items-center border border-neutral-300 border-dashed border-2 tw-text-sm bg-white text-neutral-300 cursor-pointer hover-bg-main-600 hover-text-white hover-border-main-600">
                                        <i class="ph-bold ph-plus"></i>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="700">
                        <div class="row gy-4">
                            <div class="col-lg-12">
                                <div
                                    class="group-item tw-rounded-xl border border-neutral-200 tw-pt-12 tw-pb-15 tw-px-9 bg-neutral-50 hover-gradient-bg-five group animation-item tw-duration-300 position-relative z-1">
                                    <div class="d-flex align-items-center justify-content-between tw-gap-2">
                                        <h5 class="group-hover-text-white tw-duration-300 max-w-194-px splitTextStyleOne">
                                            Asynchronous Meetings</h5>
                                        <span class="group-hover-item-text-invert tw-duration-300 animate__heartBeat">
                                            <img src="{{asset('assets/images/icons/features-three-icon1.svg')}}" alt="Icon">
                                        </span>
                                    </div>
                                    <p
                                        class="text-neutral-500 max-w-278-px tw-mt-10 group-hover-text-white tw-duration-300">
                                        We are committed to your success. Our platform is built to drive</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div
                                    class="group-item tw-rounded-xl border border-neutral-200 tw-pt-12 tw-pb-15 tw-px-9 bg-neutral-50 hover-gradient-bg-five group animation-item tw-duration-300 position-relative z-1">
                                    <div class="d-flex align-items-center justify-content-between tw-gap-2">
                                        <h5 class="group-hover-text-white tw-duration-300 max-w-194-px splitTextStyleOne">
                                            Monitoring your Time</h5>
                                        <span class="group-hover-item-text-invert tw-duration-300 animate__heartBeat">
                                            <img src="{{asset('assets/images/icons/features-three-icon2.svg')}}" alt="Icon">
                                        </span>
                                    </div>
                                    <p
                                        class="text-neutral-500 max-w-278-px tw-mt-10 group-hover-text-white tw-duration-300">
                                        We are committed to your success. Our platform is built to drive</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <div class="row gy-4">
                            <div class="col-lg-12 col-sm-6">
                                <div
                                    class="group-item tw-rounded-xl border border-neutral-200 tw-pt-12 tw-pb-15 tw-px-9 bg-neutral-50 hover-gradient-bg-five group animation-item tw-duration-300 position-relative z-1">
                                    <div class="d-flex align-items-center justify-content-between tw-gap-2">
                                        <h5 class="group-hover-text-white tw-duration-300 max-w-194-px splitTextStyleOne">
                                            built-in Automation</h5>
                                        <span class="group-hover-item-text-invert tw-duration-300 animate__heartBeat">
                                            <img src="{{asset('assets/images/icons/features-three-icon3.svg')}}" alt="Icon">
                                        </span>
                                    </div>
                                    <p
                                        class="text-neutral-500 max-w-278-px tw-mt-10 group-hover-text-white tw-duration-300">
                                        We are committed to your success. Our platform is built to drive</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div
                                    class="group-item tw-rounded-xl border border-neutral-200 tw-pt-12 tw-pb-15 tw-px-9 bg-neutral-50 hover-gradient-bg-five group animation-item tw-duration-300 position-relative z-1">
                                    <div class="d-flex align-items-center justify-content-between tw-gap-2">
                                        <h5 class="group-hover-text-white tw-duration-300 max-w-194-px splitTextStyleOne">
                                            Remote-Friendly Collaboration</h5>
                                        <span class="group-hover-item-text-invert tw-duration-300 animate__heartBeat">
                                            <img src="{{asset('assets/images/icons/features-three-icon4.svg')}}" alt="Icon">
                                        </span>
                                    </div>
                                    <p
                                        class="text-neutral-500 max-w-278-px tw-mt-10 group-hover-text-white tw-duration-300">
                                        We are committed to your success. Our platform is built to drive</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Three section End -->



        <!-- Work place team section start -->
        <section class="workplace-team py-120 gradient-bg-five position-relative z-1">
            <img src="{{asset('assets/images/shapes/curve-way.png')}}" alt="Shape"
                class="position-absolute tw-start-0 bottom-0 z-n1 w-100">

            <div class="container">
                <div class="tw-mb-8 text-center max-w-570-px mx-auto">
                    <div class="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                        <div class="text-gradient-teal">
                            Up to <span class="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                        </div>
                    </div>
                    <h2 class="splitTextStyleOne text-white">
                        Essential for
                        <span class="font-dm-serif fst-italic fw-normal">workplaces.</span>
                        Great for any team.
                    </h2>
                    <p class="splitTextStyleOne text-neutral-300 tw-mt-8 max-w-570-px fw-medium tw-text-lg">Sassly-CRM in
                        the past allowing you to focus more on your business simply enjoy your newfound legal time to
                        reflect leaving pen</p>
                </div>

                <div class="border border-white-01 tw-rounded-2xl p-sm-4" data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom" data-aos-duration="900">
                    <div class="background-img bg-img tw-rounded-2xl bg-position-top-center"
                        data-background-image="{{asset('assets/images/shapes/dashboard-screen.png')}}">
                        <div class="tw-p-7 tw-pt-16 d-flex tw-gap-13 flex-lg-row flex-column">

                            <!-- Sidebar Start -->
                            <div class="bg-neutral-100 tw-rounded-2xl tw-p-4 max-w-330-px flex-shrink-0">
                                <div class="tw-ps-4 tw-pt-2 tw-mb-10 tw-pb-10">
                                    <a href="{{route('indexThree')}}" class="">
                                        <img src="{{asset('assets/images/logo/logo-two.png')}}" alt="Logo">
                                    </a>
                                </div>
                                <div class="">
                                    <div class="nav flex-column gradient-bg nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button
                                            class="nav-link animation-item tw-py-505 tw-px-9 tw-text-lg fw-bold text-heading tw-rounded-xl d-flex align-items-center tw-gap-4 active"
                                            id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                                            type="button" role="tab" aria-controls="v-pills-home"
                                            aria-selected="true">
                                            <span class="icon active-white animate__heartBeat">
                                                <img src="{{asset('assets/images/icons/workplace-tab-icon1.svg')}}" alt="Icon">
                                            </span>
                                            All Teams
                                        </button>
                                        <button
                                            class="nav-link animation-item tw-py-505 tw-px-9 tw-text-lg fw-bold text-heading tw-rounded-xl d-flex align-items-center tw-gap-4"
                                            id="v-pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profile" type="button" role="tab"
                                            aria-controls="v-pills-profile" aria-selected="false">
                                            <span class="icon active-white animate__heartBeat">
                                                <img src="{{asset('assets/images/icons/workplace-tab-icon2.svg')}}" alt="Icon">
                                            </span>
                                            Security
                                        </button>
                                        <button
                                            class="nav-link animation-item tw-py-505 tw-px-9 tw-text-lg fw-bold text-heading tw-rounded-xl d-flex align-items-center tw-gap-4"
                                            id="v-pills-disabled-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-disabled" type="button" role="tab"
                                            aria-controls="v-pills-disabled" aria-selected="false">
                                            <span class="icon active-white animate__heartBeat">
                                                <img src="{{asset('assets/images/icons/workplace-tab-icon3.svg')}}" alt="Icon">
                                            </span>
                                            Technology
                                        </button>
                                        <button
                                            class="nav-link animation-item tw-py-505 tw-px-9 tw-text-lg fw-bold text-heading tw-rounded-xl d-flex align-items-center tw-gap-4"
                                            id="v-pills-messages-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-messages" type="button" role="tab"
                                            aria-controls="v-pills-messages" aria-selected="false">
                                            <span class="icon active-white animate__heartBeat">
                                                <img src="{{asset('assets/images/icons/workplace-tab-icon4.svg')}}" alt="Icon">
                                            </span>
                                            Infrastructure
                                        </button>
                                        <button
                                            class="nav-link animation-item tw-py-505 tw-px-9 tw-text-lg fw-bold text-heading tw-rounded-xl d-flex align-items-center tw-gap-4"
                                            id="v-pills-settings-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-settings" type="button" role="tab"
                                            aria-controls="v-pills-settings" aria-selected="false">
                                            <span class="icon active-white animate__heartBeat">
                                                <img src="{{asset('assets/images/icons/workplace-tab-icon5.svg')}}" alt="Icon">
                                            </span>
                                            Engineering
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar End -->

                            <!-- Contents Start -->
                            <div class="flex-grow-1">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab" tabindex="0">
                                        <div class="tw-rounded-2xl">
                                            <img src="{{asset('assets/images/thumbs/workplace-tab-thumb.png')}}" alt="Thumbs"
                                                class="w-100 h-100">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab" tabindex="0">
                                        <div class="tw-rounded-2xl">
                                            <img src="{{asset('assets/images/thumbs/workplace-tab-thumb.png')}}" alt="Thumbs"
                                                class="w-100 h-100">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                        aria-labelledby="v-pills-disabled-tab" tabindex="0">
                                        <div class="tw-rounded-2xl">
                                            <img src="{{asset('assets/images/thumbs/workplace-tab-thumb.png')}}" alt="Thumbs"
                                                class="w-100 h-100">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab" tabindex="0">
                                        <div class="tw-rounded-2xl">
                                            <img src="{{asset('assets/images/thumbs/workplace-tab-thumb.png')}}" alt="Thumbs"
                                                class="w-100 h-100">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                        aria-labelledby="v-pills-settings-tab" tabindex="0">
                                        <div class="tw-rounded-2xl">
                                            <img src="{{asset('assets/images/thumbs/workplace-tab-thumb.png')}}" alt="Thumbs"
                                                class="w-100 h-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Contents End -->

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Work place team section End -->



        <!-- Automation Section start -->
        <section class="automation pt-120 position-relative z-1 tw-pb-94-px">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="automation-content">
                            <div class="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <div class="text-gradient-teal">
                                    Up to <span class="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                                </div>
                            </div>
                            <h2 class="splitTextStyleOne text-heading text-capitalize">
                                Supercharge
                                <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">daily work</span>
                                with built-in automation
                            </h2>
                            <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                Sassly-CRM in the past allowing you to focus more on your business simply enjoy your
                                newfound legal time to reflect leaving pen</p>

                            <div class="tw-mt-9 d-flex flex-column align-items-start tw-gap-6">
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">Workflow streamlining</span>
                                </div>
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">Expedite onboarding with clear prioritization</span>
                                </div>
                                <div class="tw-ps-5 tw-pe-12 tw-py-3 d-flex align-items-center tw-gap-4 bg-neutral-100 rounded-pill animation-item"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                                    <img src="{{asset('assets/images/icons/check-star.png')}}" alt="Check Icon"
                                        class="animate__bounce">
                                    <span class="fw-bold text-heading">Collaborate on ideas 7x faster</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center tw-gap-7 tw-mt-12" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <a href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Start Free Trial</span>
                                        <span class="icon">
                                            <img src="{{asset('assets/images/icons/download-cloud-icon.png')}}" alt="Icon">
                                        </span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="automation-thumb position-lg-absolute tw-end-0 bottom-0 me-lg-5 pe-xl-5 max-w-58-percent">
                            <img src="{{asset('assets/images/thumbs/automation-thumb.png')}}" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Automation Section End -->

        <!-- Task manager Section start -->
        <section class="task-manager pt-120">
            <div class="container">
                <div class="row gy-4 flex-wrap-reverse">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <div class="task-manager__thumb tw--ms-110-px">
                            <img src="{{asset('assets/images/thumbs/task-manager-thumb.png')}}" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <div class="task-manager__content">
                            <div class="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <div class="text-gradient-teal">
                                    Up to <span class="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                                </div>
                            </div>
                            <h2 class="splitTextStyleOne text-heading text-capitalize">
                                Powerful & life-saving
                                <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">task manager</span>
                            </h2>
                            <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                Sassly-CRM in the past allowing you to focus more on your business simply enjoy your
                                newfound legal time to reflect leaving pen</p>

                            <div class="tw-mt-13 d-flex flex-column tw-gap-12">
                                <div class="d-flex align-items-start tw-gap-10 animation-item" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <span class="tw-mt-105 animate__wobble">
                                        <img src="{{asset('assets/images/icons/task-manager-icon1.svg')}}" alt="Icon">
                                    </span>
                                    <div class="">
                                        <h5 class="tw-mb-6">Automate Task Creation</h5>
                                        <p class="text-neutral-600 max-w-432-px">In today's competitive business, the
                                            demand for efficient cost-effective IT solutions has never been more critic.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start tw-gap-10 animation-item" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <span class="tw-mt-105 animate__wobble">
                                        <img src="{{asset('assets/images/icons/task-manager-icon2.svg')}}" alt="Icon">
                                    </span>
                                    <div class="">
                                        <h5 class="tw-mb-6">Simplify your daily routines</h5>
                                        <p class="text-neutral-600 max-w-432-px">In today's competitive business, the
                                            demand for efficient cost-effective IT solutions has never been more critic.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Task manager Section End -->

        <div class="position-relative gradient-bg-80-percent z-1">
            <!-- Plan Execute Section Start -->
            <section class="plan-execute py-120">
                <div class="container max-w-1570-px">

                    <div class="max-w-602-px text-center mx-auto tw-mb-13">
                        <div class="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="text-gradient-teal">
                                Up to <span class="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                            </div>
                        </div>
                        <h2 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
                            Plan, execute and
                            <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">track projects</span>
                            of any size
                        </h2>
                    </div>

                    <div class="plan-execute-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600">
                                <div class="plan-execute-item">
                                    <div class="tw-rounded-2xl overflow-hidden">
                                        <img src="{{asset('assets/images/thumbs/plan-execute-img1.png')}}" alt="thumbnail"
                                            class="w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="tw-mt-8 text-center">
                                        <h6 class="tw-mb-205">Custom templates</h6>
                                        <p class="text-neutral-600 max-w-278-px mx-auto">Web hosting provides everything
                                            you idea online. From where your</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="700">
                                <div class="plan-execute-item">
                                    <div class="tw-rounded-2xl overflow-hidden">
                                        <img src="{{asset('assets/images/thumbs/plan-execute-img3.png')}}" alt="thumbnail"
                                            class="w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="tw-mt-8 text-center">
                                        <h6 class="tw-mb-205">Collaboration tools</h6>
                                        <p class="text-neutral-600 max-w-278-px mx-auto">Web hosting provides everything
                                            you idea online. From where your</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="800">
                                <div class="plan-execute-item">
                                    <div class="tw-rounded-2xl overflow-hidden">
                                        <img src="{{asset('assets/images/thumbs/plan-execute-img2.png')}}" alt="thumbnail"
                                            class="w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="tw-mt-8 text-center">
                                        <h6 class="tw-mb-205">Operations teams</h6>
                                        <p class="text-neutral-600 max-w-278-px mx-auto">Web hosting provides everything
                                            you idea online. From where your</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="900">
                                <div class="plan-execute-item">
                                    <div class="tw-rounded-2xl overflow-hidden">
                                        <img src="{{asset('assets/images/thumbs/plan-execute-img4.png')}}" alt="thumbnail"
                                            class="w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="tw-mt-8 text-center">
                                        <h6 class="tw-mb-205">Project Management</h6>
                                        <p class="text-neutral-600 max-w-278-px mx-auto">Web hosting provides everything
                                            you idea online. From where your</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="700">
                                <div class="plan-execute-item">
                                    <div class="tw-rounded-2xl overflow-hidden">
                                        <img src="{{asset('assets/images/thumbs/plan-execute-img3.png')}}" alt="thumbnail"
                                            class="w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="tw-mt-8 text-center">
                                        <h6 class="tw-mb-205">Collaboration tools</h6>
                                        <p class="text-neutral-600 max-w-278-px mx-auto">Web hosting provides everything
                                            you idea online. From where your</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="plan-execute-pagination pagination-style-three pb-1 d-flex align-items-center justify-content-center tw-mt-15">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Plan Execute Section End -->

            <!-- Testimonials Three section start -->
            <section class="testimonials-three">
                <div class="container max-w-1290-px">
                    <div
                        class="bg-main-three tw-rounded-2xl overflow-hidden tw-py-16 tw-px-11 d-flex align-items-center flex-md-row flex-column tw-gap-74-px">
                        <div class="max-w-400-px w-100">
                            <img src="{{asset('assets/images/thumbs/testimonials-three-thumbs.png')}}" alt="Testimonials Thumb"
                                data-aos="zoom-in" data-aos-duration="800">
                        </div>


                        <div class="testimonials-three-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="600">
                                    <div class="">
                                        <span class="tw-mb-705">
                                            <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="img" class="">
                                        </span>
                                        <p class="text-30-px fw-normal text-white max-w-672-px tw-leading-145">Sasstech
                                            hires great people from a widely variety of backgrounds, which simply makes our
                                            company stronger, and we couldn't be prouder of that. elevating your optimizing
                                            Business Growth.</p>
                                        <span class="d-block w-100 tw-h-px tw-mt-12 tw-mb-4 bg-white-08"></span>
                                        <div
                                            class="tw-px-705 tw-py-2 bg-white-06 d-inline-flex align-items-center tw-gap-6">
                                            <div class="tw-w-17 tw-h-17 rounded-circle overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/client-img.png')}}" alt="Client Thumb">
                                            </div>
                                            <div class="">
                                                <h6 class="text-white fw-medium tw-mb-1">James anderson </h6>
                                                <div class="text-white fw-medium tw-text-base">
                                                    <strong class="text-spring-green">Ceo</strong> and Founder
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="600">
                                    <div class="">
                                        <span class="tw-mb-705">
                                            <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="img" class="">
                                        </span>
                                        <p class="text-30-px fw-normal text-white max-w-672-px tw-leading-145">Sasstech
                                            hires great people from a widely variety of backgrounds, which simply makes our
                                            company stronger, and we couldn't be prouder of that. elevating your optimizing
                                            Business Growth.</p>
                                        <span class="d-block w-100 tw-h-px tw-mt-12 tw-mb-4 bg-white-08"></span>
                                        <div
                                            class="tw-px-705 tw-py-2 bg-white-06 d-inline-flex align-items-center tw-gap-6">
                                            <div class="tw-w-17 tw-h-17 rounded-circle overflow-hidden">
                                                <img src="{{asset('assets/images/thumbs/client-img.png')}}" alt="Client Thumb">
                                            </div>
                                            <div class="">
                                                <h6 class="text-white fw-medium tw-mb-1">James anderson </h6>
                                                <div class="text-white fw-medium tw-text-base">
                                                    <strong class="text-spring-green">Ceo</strong> and Founder
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Testimonials Three section End -->
        </div>

        <!-- Distraction section start -->
        <section class="distraction">
            <div class="container max-w-1290-px">
                <div class="position-relative distraction__inner">

                    <div
                        class="max-w-602-px w-100 text-center mx-auto position-absolute z-1 tw-start-50 translate-middle-x top-0 mt-5 pt-lg-5 pt-4">
                        <h2 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
                            Avoid
                            <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">distractions</span>
                            with app integrations
                        </h2>
                    </div>


                    <div class="">
                        <img src="{{asset('assets/images/shapes/net-shape.png')}}" alt="Net Shape" data-aos="zoom-in"
                            data-aos-duration="1500">
                    </div>
                    <div class="">
                        <div class="distraction-icon one position-absolute z-1 animation-scalation">
                            <img src="{{asset('assets/images/thumbs/distraction-icon1.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon two position-absolute z-1 animation-upDown">
                            <img src="{{asset('assets/images/thumbs/distraction-icon2.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon three position-absolute z-1 animation-upDown animation-delay-1">
                            <img src="{{asset('assets/images/thumbs/distraction-icon3.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon four position-absolute z-1 animation-upDown animation-delay-2">
                            <img src="{{asset('assets/images/thumbs/distraction-icon4.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon five position-absolute z-1 animation-scalation animation-delay-1">
                            <img src="{{asset('assets/images/thumbs/distraction-icon5.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon six position-absolute z-1 animation-scalation animation-delay-2">
                            <img src="{{asset('assets/images/thumbs/distraction-icon6.png')}}" alt="Icon Image">
                        </div>
                        <div class="distraction-icon seven position-absolute z-1">
                            <img src="{{asset('assets/images/thumbs/distraction-icon7.png')}}" alt="Icon Image" class="">
                        </div>
                    </div>


                    <div class="d-flex align-items-center justify-content-center tw-gap-7 position-absolute z-1 tw-start-50 translate-middle-x bottom-0 mb-2 w-100"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                        <a href="javascript:void(0)"
                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                            data-block="button">
                            <span class="button__flair"></span>
                            <div class="d-flex align-items-center tw-gap-2 z-1">
                                <span class="button__label">Start Free Trial</span>
                                <span class="icon">
                                    <img src="{{asset('assets/images/icons/download-cloud-icon.png')}}" alt="Icon">
                                </span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Distraction section End -->

        <!-- Pricing Plan three start -->
        <section class="pricing-plan-three py-120">
            <div class="container">
                <div class="max-w-602-px text-center mx-auto tw-mb-13">
                    <div class="bg-white tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max border border-spring-green"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                        <div class="text-gradient-teal">
                            Up to <span class="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                        </div>
                    </div>
                    <h2 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
                        flexible pricing
                        <span class="font-dm-serif fst-italic fw-normal text-gradient-teal">plan</span>
                        that include business
                    </h2>
                </div>

                <div class="row gy-4">
                    <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div class="position-relative bg-neutral-100 tw-px-7 tw-py-16 bg-white hover-border-main-600">
                            <div class="">
                                <div class="tw-ps-205">
                                    <h5 class="tw-mb-1">Basic plan</h5>
                                    <p class="text-neutral-500">Customized anything in anytime</p>
                                    <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                    <div class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10">
                                        <h2 class="mb-0">$1.99<span class="tw-text-xl fw-medium">/Yearly</span> </h2>
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
                                            <span class="text-heading fw-semibold tw-text-base">Real-time tracking and
                                                notifications</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Real-time analytics</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="640">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Drag and drop
                                                templates</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="660">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Project Management</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="680">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">24/7 email and chat
                                                support</span>
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
                                    <h5 class="tw-mb-1">Premium plan</h5>
                                    <p class="text-neutral-500">Customized anything in anytime</p>
                                    <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                    <div class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10">
                                        <h2 class="mb-0">$9.99<span class="tw-text-xl fw-medium">/Yearly</span> </h2>
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
                                            <span class="text-heading fw-semibold tw-text-base">Real-time tracking and
                                                notifications</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Real-time analytics</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="640">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Drag and drop
                                                templates</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="660">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Project Management</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="680">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">24/7 email and chat
                                                support</span>
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
                                    <h5 class="tw-mb-1">Pro plan</h5>
                                    <p class="text-neutral-500">Customized anything in anytime</p>
                                    <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                    <div class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10">
                                        <h2 class="mb-0">$19.99<span class="tw-text-xl fw-medium">/Yearly</span> </h2>
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
                                            <span class="text-heading fw-semibold tw-text-base">Real-time tracking and
                                                notifications</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="620">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Real-time analytics</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="640">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Drag and drop
                                                templates</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="660">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">Project Management</span>
                                        </div>
                                        <div class="d-flex align-items-center tw-gap-305" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="680">
                                            <span
                                                class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm">
                                                <i class="text-gradient-teal ph-bold ph-check"></i>
                                            </span>
                                            <span class="text-heading fw-semibold tw-text-base">24/7 email and chat
                                                support</span>
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
        <section class="task-management bg-pink-more-light-half drag-rotate-element-section bg-pink-more-light-half">
            <div class="container">
                <div class="text-end tw--mb-40-px position-relative z-2">
                    <img src="{{asset('assets/images/thumbs/laptop-man.png')}}" alt="Image" class="tw-me-84-px">
                </div>

                <div class="bg-green-deep tw-rounded-3xl bg-green-deep tw-pt-100-px position-relative z-1">
                    <img src="{{asset('assets/images/shapes/hill-shape.png')}}" alt="Hill Shape"
                        class="position-absolute w-100 h-100 top-0 tw-start-0 z-n1">
                    <img src="{{asset('assets/images/thumbs/task-management-img.png')}}" alt="Image"
                        class="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none">

                    <div class="tw-mb-8 text-center max-w-570-px mx-auto">
                        <div class="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="">
                                Up to <span class="text-yellow text-stroke-yellow">70%</span> off managed cloud hosting
                            </div>
                        </div>
                        <h3 class="splitTextStyleOne text-white">
                            Ready to revolutionize our service?
                        </h3>

                        <div class="d-block">
                            <a href="javascript:void(0)"
                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold tw-mt-7"
                                data-block="button">
                                <span class="button__flair"></span>
                                <div class="d-flex align-items-center tw-gap-2 z-1">
                                    <span class="button__label">Download for free</span>
                                </div>
                            </a>
                        </div>
                        <div class="d-none">
                            <div class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">
                                <a href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Get Started Trial</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0)"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <div class="d-flex align-items-center tw-gap-2 z-1">
                                        <span class="button__label">Get Started Trial</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="tw-pt-8 text-center">
                        <div
                            class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">Project
                                management</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Technology</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Technology</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill">Project
                                management</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Technology</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Technology</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Project
                                management</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Technology</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Project
                                management</span>
                            <span
                                class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill">Technology</span>
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
    </div>

@endsection
