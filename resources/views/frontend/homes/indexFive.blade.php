@extends('frontend.layouts.app')
@section('title', 'Index Five')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerFive')
    <!-- header area end -->

    <div id="smooth-content">

        <!-- Banner Five section start -->
        <section class="banner-five">
            <div class="tw-pt-100-px tw-mx-48-px position-relative gradient-bg-seven rounded-top-30-px z-1">
                <img src="{{asset('assets/images/shapes/wave-line-shadow.png')}}" alt="Wave Line shape"
                    class="position-absolute tw-start-0 w-100 bottom-0 z-n1 pb-120">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-10">
                            <div class="text-center">
                                <div class="max-w-780-px text-center mx-auto">
                                    <div class="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyEight"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                        what we offering
                                    </div>
                                    <h1 class="splitTextStyleOne text-heading text-capitalize tw-leading-none">Invest
                                        with confidence Grow your future </h1>
                                    <p
                                        class="text-neutral-600 tw-text-xl tw-mt-605 splitTextStyleOne max-w-5 mx-auto fw-medium tw-leading-145 max-w-548-px">
                                        In today's competitive business, the demand for efficient and cost-effective IT
                                        solutions has never been more critical.</p>
                                    <div class="d-flex align-items-center justify-content-center tw-gap-405 tw-mt-10">
                                        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800">
                                            <a href="https://play.google.com/store/apps"
                                                class="hover--translate-y-1 active--translate-y-scale-9 tw-rounded-2xl common-shadow-twentyEight">
                                                <img src="{{asset('assets/images/icons/store-two1.png')}}" alt="App Store">
                                            </a>
                                        </div>
                                        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800">
                                            <a href="https://www.apple.com/app-store"
                                                class="hover--translate-y-1 active--translate-y-scale-9 tw-rounded-2xl common-shadow-twentyEight">
                                                <img src="{{asset('assets/images/icons/store-two2.png')}}" alt="Google Store">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="tw-mt-14 d-inline-flex">
                                    <img src="{{asset('assets/images/thumbs/banner-five-thumb.png')}}" alt="Thumbnail" data-aos="zoom-in"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Five section End -->

        <!-- Brand Five section start -->
        <div class="brand-three pt-120">
            <div class="container">

                <div class="tw-py-13 position-relative">
                    <span class="gradient-line w-100 tw-h-px position-absolute top-0 tw-start-0"></span>
                    <span class="gradient-line w-100 tw-h-px position-absolute bottom-0 tw-start-0"></span>

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
        </div>
        <!-- Brand Five section end -->

        <!-- Work process five section start -->
        <section class="work-process-five py-120">
            <div class="container">
                <div class="text-center mx-auto tw-pb-15">
                    <div class="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"> what we
                        offering
                    </div>
                    <h2 class="splitTextStyleOne text-heading text-capitalize tw-leading-none">Simplifying your
                        investment journey</h2>
                </div>

                <div class="position-relative tw-mt-17 stair-bg tw-rounded-28-px">
                    <div
                        class="tw-px-40-px d-flex tw-pt-14 gradient-bg-eight tw-rounded-28-px position-relative flex-md-nowrap flex-wrap tw-gap-6">
                        <div class="max-w-780-px mx-auto">
                            <div class="text-center ">
                                <div class="bg-transparent border border-blue text-blue tw-py-2 tw-px-7 rounded-pill fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyEight"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    what we offering
                                </div>
                                <h2
                                    class="splitTextStyleOne text-heading text-capitalize tw-leading-none max-w-500-px mx-auto">
                                    Sign up and secure your account</h2>
                                <p
                                    class="text-neutral-600 tw-text-xl tw-mt-605 splitTextStyleOne max-w-5 mx-auto fw-medium tw-leading-145 max-w-548-px">
                                    In today's competitive business, the demand for efficient and cost-effective IT
                                    solutions has never been more critical.</p>
                            </div>

                            <div
                                class="tw-mt-80-px d-flex justify-content-between position-relative z-1 tw-gap-2 tw-pb-10">
                                <span
                                    class="tw-w-100--40-px tw-h-px bg-white position-absolute tw-start-50 translate-middle-x top-0 z-n1 tw-mt-2"></span>

                                <div class="text-center">
                                    <span class="tw-w-405 tw-h-405 bg-deep-green rounded-circle"></span>
                                    <span class="text-heading fw-semibold d-block tw-mt-4 text-capitalize">Sign
                                        up</span>
                                </div>
                                <div class="text-center">
                                    <span
                                        class="tw-w-405 tw-h-405 rounded-circle bg-white common-shadow-twentyEight"></span>
                                    <span class="text-heading fw-semibold d-block tw-mt-4 text-capitalize">investment
                                        goals</span>
                                </div>
                                <div class="text-center">
                                    <span class="tw-w-405 tw-h-405 rounded-circle bg-main-600"></span>
                                    <span class="text-heading fw-semibold d-block tw-mt-4 text-capitalize">start
                                        investing</span>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column justify-content-end">
                            <img src="{{asset('assets/images/thumbs/work-process-five-thumb.png')}}" alt="Thumbnail"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work process five section End -->

        <!-- Offer Five section start -->
        <section class="offer-five py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row gy-5 flex-wrap-reverse">
                            <div class="col-md-6">
                                <div class="pe-lg-5 d-flex h-100">
                                    <img src="{{asset('assets/images/thumbs/offer-five-thumb.png')}}" alt="Thumbnail" class="w-100">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <div class="max-w-780-px text-start mx-auto">
                                        <div class="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="600">
                                            what we offering
                                        </div>
                                        <h2 class="splitTextStyleOne text-heading text-capitalize tw-leading-none">Why
                                            should you choose Sassly mobile app.</h2>
                                        <p
                                            class="text-neutral-600 tw-text-lg tw-mt-605 splitTextStyleOne max-w-5 fw-medium tw-leading-145 max-w-570-px">
                                            Sassly-CRM in the past allowing you to focus more on your business simply
                                            enjoy your newfound legal time to reflect leaving pen</p>
                                    </div>
                                    <div class="tw-mt-11 d-flex flex-column tw-gap-7">
                                        <div
                                            class="tw-rounded-3xl border border-neutral-100 tw-py-8 tw-px-9 hover-bg-neutral-100 tw-duration-300 d-flex align-items-start tw-gap-605">
                                            <div class="">
                                                <img src="{{asset('assets/images/icons/offer-five-icon1.png')}}" alt="icon">
                                            </div>
                                            <div class="">
                                                <h6 class="tw-mb-405 splitTextStyleOne">240K+ Download worldwide</h6>
                                                <p
                                                    class="tw-text-lg text-neutral-600 max-w-278-px tw-leading-153 splitTextStyleOne">
                                                    Analytics refers to the systematic collection interpretation.</p>
                                            </div>
                                        </div>
                                        <div
                                            class="tw-rounded-3xl border border-neutral-100 tw-py-8 tw-px-9 hover-bg-neutral-100 tw-duration-300 d-flex align-items-start tw-gap-605">
                                            <div class="">
                                                <img src="{{asset('assets/images/icons/offer-five-icon2.png')}}" alt="icon">
                                            </div>
                                            <div class="">
                                                <h6 class="tw-mb-405 splitTextStyleOne">Average 5 star rating</h6>
                                                <p
                                                    class="tw-text-lg text-neutral-600 max-w-278-px tw-leading-153 splitTextStyleOne">
                                                    Analytics refers to the systematic collection interpretation.</p>
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
        <!-- Offer Five section End -->

        <!-- About Features section Start -->
        <section class="about-features">
            <div class="container">
                <div class="text-center mx-auto tw-pb-15 max-w-910-px">
                    <div class="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"> what we
                        offering
                    </div>
                    <h2 class="splitTextStyleOne text-heading text-capitalize tw-leading-none">Simplifying your
                        investment journey</h2>
                    <p class="splitTextStyleOne text-neutral-500 max-w-602-px mx-auto fw-medium tw-mt-5">Discover how
                        Upshift not only simplifies your investment process but also empowers you to make smarter,
                        data-driven decisions.</p>
                </div>

                <div class="row gy-4">
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="600">
                        <div
                            class="tw-rounded-2xl bg-neutral-50 bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-100 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-two-icon1.svg')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                            </span>
                            <h4 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                Comprehensive Education</h4>
                            <p
                                class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                Web hosting provides everything idea online. From where your</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="800">
                        <div
                            class="tw-rounded-2xl bg-neutral-50 bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-100 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-two-icon2.svg')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                            </span>
                            <h4 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                User-friendly Interface</h4>
                            <p
                                class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                Web hosting provides everything idea online. From where your</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1000">
                        <div
                            class="tw-rounded-2xl bg-neutral-50 bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-100 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-two-icon3.svg')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                            </span>
                            <h4 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                Bookkeeping & Cash Flow</h4>
                            <p
                                class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                Web hosting provides everything idea online. From where your</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1200">
                        <div
                            class="tw-rounded-2xl bg-neutral-50 bg-hover-app-landing tw-py-14 tw-px-7 border border-neutral-100 group animation-item group-item tw-transition tw-duration-200 h-100">
                            <span
                                class="tw-w-92-px tw-h-92-px rounded-circle d-flex align-items-center justify-content-center common-shadow-fifteen tw-mb-11">
                                <img src="{{asset('assets/images/icons/about-features-two-icon4.svg')}}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                            </span>
                            <h4 class="splitTextStyleOne tw-mb-7 group-hover-text-white tw-transition tw-duration-200">
                                Customized reminder alerts</h4>
                            <p
                                class="splitTextStyleOne group-hover-text-white fw-medium text-neutral-500 tw-transition tw-duration-200">
                                Web hosting provides everything idea online. From where your</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- About Features section End -->

        <!-- Counter Up section Start -->
        <section class="pt-120">
            <div class="container">
                <div class="text-center mx-auto tw-pb-15 max-w-548-px">
                    <div class="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"> what we
                        offering
                    </div>
                    <h2 class="splitTextStyleOne text-heading text-capitalize tw-leading-none">Trueted CRM tools by the
                        happy users</h2>
                </div>

                <div class="border-top border-bottom d-flex justify-content-center flex-sm-nowrap flex-wrap tw-gap-148-px">
                    <div
                        class="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
                        <h2 class="h1 text-main-600">
                            <span class="counter">282</span><span class="">+</span>
                        </h2>
                        <span class="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
                    </div>

                    <div class="d-flex">
                        <div class="tw-w-1-px h-100 bg-neutral-200"></div>
                    </div>

                    <div
                        class="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
                        <h2 class="h1 text-main-600">
                            <span class="counter">95</span><span class="">%</span>
                        </h2>
                        <span class="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
                    </div>

                    <div class="d-flex">
                        <div class="tw-w-1-px h-100 bg-neutral-200"></div>
                    </div>

                    <div
                        class="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
                        <h2 class="h1 text-main-600">
                            <span class="counter">282</span><span class="">+</span>
                        </h2>
                        <span class="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
                    </div>
                </div>

            </div>
        </section>
        <!-- Counter Up section End -->

        <!-- Download App section start -->
        <section class="download-app py-120">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-md-6">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/download-app-thumb.png')}}" alt="Thumbnail">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <div class="max-w-780-px text-start mx-auto">
                                <div class="bg-main-600 tw-py-2 tw-px-7 rounded-pill text-white fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-6 min-w-max common-shadow-twentyNine"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    what we offering
                                </div>
                                <h2 class="splitTextStyleOne text-heading text-capitalize tw-leading-none">Why should
                                    you choose Sassly mobile app.</h2>
                                <p
                                    class="text-neutral-600 tw-text-lg tw-mt-605 splitTextStyleOne max-w-5 fw-medium tw-leading-145 max-w-570-px">
                                    Sassly-CRM in the past allowing you to focus more on your business simply enjoy your
                                    newfound legal time to reflect leaving pen</p>
                            </div>


                            <div class="d-flex flex-column tw-gap-5 tw-mt-12">
                                <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                    <span
                                        class="tw-w-8 tw-h-8 bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center tw-text-lg text-heading">
                                        <i class="ph-bold ph-check"></i>
                                    </span>
                                    <span class="text-heading tw-text-lg fw-semibold">Registration and
                                        onboarding</span>
                                </div>
                                <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="900">
                                    <span
                                        class="tw-w-8 tw-h-8 bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center tw-text-lg text-heading">
                                        <i class="ph-bold ph-check"></i>
                                    </span>
                                    <span class="text-heading tw-text-lg fw-semibold">Transaction management</span>
                                </div>
                                <div class="d-flex align-items-center tw-gap-205" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="1100">
                                    <span
                                        class="tw-w-8 tw-h-8 bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center tw-text-lg text-heading">
                                        <i class="ph-bold ph-check"></i>
                                    </span>
                                    <span class="text-heading tw-text-lg fw-semibold"> Standard banking layout</span>
                                </div>
                            </div>
                            <div class="tw-mt-13" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                data-aos-duration="1200">
                                <a href="{{route('register')}}"
                                    class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-505 fw-semibold common-shadow-inset-one"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Download app now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Download App section end -->

        <!-- App screenshot section start -->
        <section class="app-screenshot position-relative gradient-bg-nine z-1 overflow-hidden">
            <img src="{{asset('assets/images/shapes/arrow-synchronize.png')}}" alt="Arrow Synchronize Shape"
                class="position-absolute top-0 tw-start-0 tw-ms-17 tw-mt-160-px animation-rotate-center d-md-block d-none">
            <img src="{{asset('assets/images/shapes/pattern-shape1.png')}}" alt="Pattern Shape"
                class="position-absolute top-0 tw-start-0 z-n1">

            <div class="container">
                <div class="text-center mx-auto tw-pb-15 max-w-910-px">
                    <div class="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"> what we
                        offering
                    </div>
                    <h2 class="splitTextStyleOne text-heading text-capitalize tw-leading-none">Simplifying your
                        investment journey</h2>
                    <p class="splitTextStyleOne text-neutral-500 max-w-602-px tw-text-lg mx-auto fw-medium tw-mt-5">
                        Discover how Upshift not only simplifies your investment process but also empowers you to make
                        smarter, data-driven decisions.</p>
                </div>

                <div class="text-center">
                    <img src="{{asset('assets/images/thumbs/app-download-thumb.png')}}" alt="Screenshot Images" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
                </div>
            </div>
        </section>
        <!-- App screenshot section End -->

        <!-- Testimonials Five section start -->
        <section class="py-120 bg-black">
            <div class="text-center mx-auto tw-pb-15 max-w-548-px">
                <div class="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine"
                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"> what we
                    offering
                </div>
                <h2 class="splitTextStyleOne text-white text-capitalize tw-leading-none">Trusted CRM tools by the happy
                    users</h2>
            </div>

            <div class="">

                <div class="swiper testimonials-five-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div class="">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-60-px bg-white h-100 animation-item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="">
                                            <h5 class="tw-mb-2 text-capitalize">william camel</h5>
                                            <span class="text-neutral-500 fw-medium">Head of Design at Zazoo </span>
                                        </div>
                                        <div class="">
                                            <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="Star Rating">
                                        </div>
                                    </div>
                                    <h4 class="max-w-288-px tw-mt-8 tw-mb-9">I had a great experience with printSpace!
                                    </h4>
                                    <p class="text-neutral-600 tw-text-2xl tw-leading-153">Good Time is very good in
                                        what they're doing and more than happy to challenge and push you to think about
                                        your decisions both from usable</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div class="">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-60-px bg-white h-100 animation-item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="">
                                            <h5 class="tw-mb-2 text-capitalize">Robiul Hasan</h5>
                                            <span class="text-neutral-500 fw-medium">Head of Design at Zazoo </span>
                                        </div>
                                        <div class="">
                                            <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="Star Rating">
                                        </div>
                                    </div>
                                    <h4 class="max-w-288-px tw-mt-8 tw-mb-9">I had a great experience with printSpace!
                                    </h4>
                                    <p class="text-neutral-600 tw-text-2xl tw-leading-153">Good Time is very good in
                                        what they're doing and more than happy to challenge and push you to think about
                                        your decisions both from usable</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div class="">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-60-px bg-white h-100 animation-item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="">
                                            <h5 class="tw-mb-2 text-capitalize">John Doe</h5>
                                            <span class="text-neutral-500 fw-medium">Head of Design at Zazoo </span>
                                        </div>
                                        <div class="">
                                            <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="Star Rating">
                                        </div>
                                    </div>
                                    <h4 class="max-w-288-px tw-mt-8 tw-mb-9">I had a great experience with printSpace!
                                    </h4>
                                    <p class="text-neutral-600 tw-text-2xl tw-leading-153">Good Time is very good in
                                        what they're doing and more than happy to challenge and push you to think about
                                        your decisions both from usable</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div class="">
                                <div class="common-shadow-ten tw-rounded-2xl tw-p-60-px bg-white h-100 animation-item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="">
                                            <h5 class="tw-mb-2 text-capitalize">John Smith</h5>
                                            <span class="text-neutral-500 fw-medium">Head of Design at Zazoo </span>
                                        </div>
                                        <div class="">
                                            <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="Star Rating">
                                        </div>
                                    </div>
                                    <h4 class="max-w-288-px tw-mt-8 tw-mb-9">I had a great experience with printSpace!
                                    </h4>
                                    <p class="text-neutral-600 tw-text-2xl tw-leading-153">Good Time is very good in
                                        what they're doing and more than happy to challenge and push you to think about
                                        your decisions both from usable</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testimonials-five-slider-pagination pagination-style-four d-flex align-items-center justify-content-center tw-gap-6 tw-mt-15 tw-pb-3">
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Five section End -->




        <!-- Pricing plan five section start -->
        <section class="pricing-five py-120 bg-white">
            <div class="container">
                <div class="max-w-570-px text-start tw-mb-10">
                    <div class="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                        Pricing Plan
                    </div>
                    <h2 class="splitTextStyleOne text-heading text-capitalize tw-leading-none">Affordable pricing plan
                        for your business</h2>
                </div>


                <div class="swiper pricing-five-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div
                                class="border border-neutral-200 tw-rounded-xl position-relative tw-p-44-px animation-item group-item group hover-border-main-600 tw-duration-200 d-flex align-items-center tw-gap-48-px">
                                <h3 class="position-absolute top-0 tw-end-0 tw-mt-10 tw-me-10">$129.<span
                                        class="tw-text-xl">99</span></h3>
                                <span
                                    class="tw-w-16 tw-h-16 bg-main-50 tw-rounded-md d-flex justify-content-center align-items-center group-hover-bg-main-600 tw-duration-200 flex-shrink-0">
                                    <img src="{{asset('assets/images/icons/pricing-five-icon1.svg')}}" alt="Icon"
                                        class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                                </span>
                                <div class="flex-grow-1">
                                    <span
                                        class="text-heading fw-medium tw-py-05 tw-px-6 border border-neutral-600 rounded-pill tw-text-sm">20%
                                        off</span>
                                    <h4 class="tw-mt-4"> Weekly package </h4>
                                    <p class="text-neutral-600 tw-text-lg tw-mt-3 fw-medium max-w-432-px">Subscription
                                        fee is $129.99 USD and automatically renews each year.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div
                                class="border border-neutral-200 tw-rounded-xl position-relative tw-p-44-px animation-item group-item group hover-border-main-600 tw-duration-200 d-flex align-items-center tw-gap-48-px">
                                <h3 class="position-absolute top-0 tw-end-0 tw-mt-10 tw-me-10">$329.<span
                                        class="tw-text-xl">99</span></h3>
                                <span
                                    class="tw-w-16 tw-h-16 bg-main-50 tw-rounded-md d-flex justify-content-center align-items-center group-hover-bg-main-600 tw-duration-200 flex-shrink-0">
                                    <img src="{{asset('assets/images/icons/pricing-five-icon1.svg')}}" alt="Icon"
                                        class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                                </span>
                                <div class="flex-grow-1">
                                    <span
                                        class="text-heading fw-medium tw-py-05 tw-px-6 border border-neutral-600 rounded-pill tw-text-sm">20%
                                        off</span>
                                    <h4 class="tw-mt-4">Monthly package</h4>
                                    <p class="text-neutral-600 tw-text-lg tw-mt-3 fw-medium max-w-432-px">Subscription
                                        fee is $129.99 USD and automatically renews each year.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div
                                class="border border-neutral-200 tw-rounded-xl position-relative tw-p-44-px animation-item group-item group hover-border-main-600 tw-duration-200 d-flex align-items-center tw-gap-48-px">
                                <h3 class="position-absolute top-0 tw-end-0 tw-mt-10 tw-me-10">$629.<span
                                        class="tw-text-xl">99</span></h3>
                                <span
                                    class="tw-w-16 tw-h-16 bg-main-50 tw-rounded-md d-flex justify-content-center align-items-center group-hover-bg-main-600 tw-duration-200 flex-shrink-0">
                                    <img src="{{asset('assets/images/icons/pricing-five-icon1.svg')}}" alt="Icon"
                                        class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                                </span>
                                <div class="flex-grow-1">
                                    <span
                                        class="text-heading fw-medium tw-py-05 tw-px-6 border border-neutral-600 rounded-pill tw-text-sm">20%
                                        off</span>
                                    <h4 class="tw-mt-4">Yearly package</h4>
                                    <p class="text-neutral-600 tw-text-lg tw-mt-3 fw-medium max-w-432-px">Subscription
                                        fee is $129.99 USD and automatically renews each year.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="pricing-five-slider-pagination pagination-style-four pagination-style-five d-flex align-items-center justify-content-center tw-gap-4 tw-mt-15 tw-pb-3">
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing plan five section End -->

        <!-- footer area -->
        @include('frontend.includes.footers.footerFive')
        <!-- footer area end -->

    </div>
    </div>


@endsection
