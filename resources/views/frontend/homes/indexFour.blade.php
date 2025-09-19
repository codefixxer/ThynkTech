@extends('frontend.layouts.app')
@section('title', 'Index Four')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerFour')
    <!-- header area end -->

        <div id="smooth-content">
            <!-- Banner Four Start -->
            <section class="banner-two position-relative z-1 pb-0">
                <img src="{{asset('assets/images/bg/mash-gradient-bg1.png')}}" alt="Cloud Shape"
                    class="position-absolute top-0 tw-start-0 w-100 z-n1 banner-gradient-bg" />

                <div class="banner-two__inner position-relative">
                    <div class="container">
                        <div class="text-center">
                            <span class="text-capitalize font-caveat fw-bold tw-mb-6 h3">With the world's favorite
                                CRM</span>
                            <div class="">
                                <div class="position-relative d-inline-block">
                                    <h1 class="splitTextStyleOne text-capitalize fw-bold tw-leading-none tw-pb-205">
                                        The next gen of CRM.
                                    </h1>
                                    <div class="text-end svg-line d-sm-block d-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="489" height="18"
                                            viewBox="0 0 489 18" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M207.684 1.72387C184.71 2.31462 162.007 3.04101 139.867 3.83514C108.526 4.95854 77.1964 6.12068 46.056 7.96073C36.2537 8.5418 26.2994 8.90979 16.5584 9.63613C10.4436 10.0913 2.33552 10.7401 1.27144 10.8757C0.714878 10.9531 0.472071 11.0695 0.393613 11.1082C-0.158042 11.3794 -0.0573853 11.6407 0.253993 11.8441C0.379035 11.9313 0.695229 12.1444 1.57297 12.1735C60.274 14.1588 120.299 10.285 179.071 9.87824C280.993 9.18096 386.003 11.9507 487.115 17.9938C487.998 18.0423 488.856 17.8001 488.979 17.4418C489.126 17.0931 488.489 16.7542 487.606 16.7057C386.322 10.6529 281.14 7.87347 179.022 8.58044C124.249 8.95813 68.3944 12.3575 13.5451 11.1953C14.8053 11.0985 16.0411 11.0016 17.1689 10.9144C26.8707 10.1881 36.7833 9.8298 46.5464 9.24873C77.6205 7.40868 108.886 6.24654 140.186 5.13282C179.022 3.73826 219.55 2.53737 260.397 1.97567C275.01 2.06283 289.574 2.15003 304.137 2.25656C335.643 2.48899 367.296 3.16691 398.728 4.07725C408.192 4.3581 417.656 4.64861 427.12 4.9004C430.258 4.98757 438.349 5.23932 439.477 5.21995C440.875 5.20058 441.144 4.73577 441.169 4.65829C441.242 4.48397 441.193 4.24185 440.507 4.03847C440.433 4.00942 439.992 3.91251 439.011 3.85441C381.86 0.426099 320.834 -0.145196 260.446 0.677985C196.749 0.319659 132.806 0.164636 69.2697 0C68.3601 0 67.6172 0.290577 67.6098 0.648903C67.6049 1.00723 68.338 1.29782 69.2476 1.3075C115.253 1.42371 161.492 1.53986 207.684 1.72387Z"
                                                fill="#FF7E3E" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <p
                                class="splitTextStyleOne text-neutral-600 tw-text-lg tw-mt-405 tw-mt-8 max-w-672-px mx-auto fw-medium">
                                Sassly-CRM in the past allowing you to focus
                                more on your business or simply enjoy your
                                newfound legal time to reflect leaving
                                pen-and-paper.
                            </p>

                            <div class="d-inline-flex align-items-center tw-gap-5 tw-mt-8 flex-wrap" data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                <a href="javascript:void(0)"
                                    class="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Schedule a Demo</span>
                                </a>
                                <a href="javascript:void(0)"
                                    class="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-orange-outline hover-style-five hover-text-white button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold bg-white"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="button__label">Contact Sales</span>
                                </a>
                            </div>

                            <div class="tw-mt-132-px">
                                <ul class="nav nav-pills d-inline-flex flex-wrap align-items-center tw-mb-8 tw-gap-4 active-bg-blue active-text-white"
                                    id="pills-tab" role="tablist" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <li class="nav-item" role="presentation">
                                        <button
                                            class="nav-link tw-py-105 text-capitalize tw-px-5 common-shadow-twentyThree bg-white text-heading fw-medium tw-text-base tw-rounded-md active-triangle-arrow position-relative active"
                                            id="pills-data-tab" data-bs-toggle="pill" data-bs-target="#pills-data"
                                            type="button" role="tab" aria-controls="pills-data"
                                            aria-selected="true">
                                            data
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button
                                            class="nav-link tw-py-105 text-capitalize tw-px-5 common-shadow-twentyThree bg-white text-heading fw-medium tw-text-base tw-rounded-md active-triangle-arrow position-relative"
                                            id="pills-Automation-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-Automation" type="button" role="tab"
                                            aria-controls="pills-Automation" aria-selected="false">
                                            Automation
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button
                                            class="nav-link tw-py-105 text-capitalize tw-px-5 common-shadow-twentyThree bg-white text-heading fw-medium tw-text-base tw-rounded-md active-triangle-arrow position-relative"
                                            id="pills-Pipeline-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-Pipeline" type="button" role="tab"
                                            aria-controls="pills-Pipeline" aria-selected="false">
                                            Pipeline
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button
                                            class="nav-link tw-py-105 text-capitalize tw-px-5 common-shadow-twentyThree bg-white text-heading fw-medium tw-text-base tw-rounded-md active-triangle-arrow position-relative"
                                            id="pills-Productivity-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-Productivity" type="button" role="tab"
                                            aria-controls="pills-Productivity" aria-selected="false">
                                            Productivity
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button
                                            class="nav-link tw-py-105 text-capitalize tw-px-5 common-shadow-twentyThree bg-white text-heading fw-medium tw-text-base tw-rounded-md active-triangle-arrow position-relative"
                                            id="pills-Reporting-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-Reporting" type="button" role="tab"
                                            aria-controls="pills-Reporting" aria-selected="false">
                                            Reporting
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                                    <div class="tab-pane fade show active" id="pills-data" role="tabpanel"
                                        aria-labelledby="pills-data-tab" tabindex="0">
                                        <div
                                            class="shadow-lg tw-p-405 tw-rounded-3xl bg-white-gradient common-shadow-eleven backdrop-blur-20 border border-white-02">
                                            <div class="common-shadow-twentyTwo tw-rounded-xl">
                                                <img src="{{asset('assets/images/thumbs/banner-dashboard.png')}}" alt="Dashboard Thumb"
                                                    class="w-100 h-100" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-Automation" role="tabpanel"
                                        aria-labelledby="pills-Automation-tab" tabindex="0">
                                        <div
                                            class="shadow-lg tw-p-405 tw-rounded-3xl bg-white-gradient common-shadow-eleven backdrop-blur-20 border border-white-02">
                                            <div class="common-shadow-twentyTwo tw-rounded-xl">
                                                <img src="{{asset('assets/images/thumbs/banner-dashboard.png')}}" alt="Dashboard Thumb"
                                                    class="w-100 h-100" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-Pipeline" role="tabpanel"
                                        aria-labelledby="pills-Pipeline-tab" tabindex="0">
                                        <div
                                            class="shadow-lg tw-p-405 tw-rounded-3xl bg-white-gradient common-shadow-eleven backdrop-blur-20 border border-white-02">
                                            <div class="common-shadow-twentyTwo tw-rounded-xl">
                                                <img src="{{asset('assets/images/thumbs/banner-dashboard.png')}}" alt="Dashboard Thumb"
                                                    class="w-100 h-100" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-Productivity" role="tabpanel"
                                        aria-labelledby="pills-Productivity-tab" tabindex="0">
                                        <div
                                            class="shadow-lg tw-p-405 tw-rounded-3xl bg-white-gradient common-shadow-eleven backdrop-blur-20 border border-white-02">
                                            <div class="common-shadow-twentyTwo tw-rounded-xl">
                                                <img src="{{asset('assets/images/thumbs/banner-dashboard.png')}}" alt="Dashboard Thumb"
                                                    class="w-100 h-100" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-Reporting" role="tabpanel"
                                        aria-labelledby="pills-Reporting-tab" tabindex="0">
                                        <div
                                            class="shadow-lg tw-p-405 tw-rounded-3xl bg-white-gradient common-shadow-eleven backdrop-blur-20 border border-white-02">
                                            <div class="common-shadow-twentyTwo tw-rounded-xl">
                                                <img src="{{asset('assets/images/thumbs/banner-dashboard.png')}}" alt="Dashboard Thumb"
                                                    class="w-100 h-100" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner Four End -->

            <!-- Brand Three section start -->
            <div class="brand-three">
                <div class="container">
                    <div class="text-center tw-mb-16" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1000">
                        <h4 class="mb-0 fw-bold line-clamp-1 font-caveat">
                            Loved by next-gen B2B
                            <span class="text-orange">SaaS</span>
                            compnaies.....
                        </h4>
                    </div>
                    <div class="brand-three-slider swiper left-right-gradient gradient-width-200 position-relative">
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
            <!-- Brand Three section end -->

            <!-- About Two Section start -->
            <section class="about-two py-120 position-relative z-1 overflow-hidden">
                <img src="{{asset('assets/images/bg/mash-gradient-bg3.png')}}" alt="Gradient"
                    class="position-absolute tw-start-0 top-0 z-n1" />

                <div class="container">
                    <div class="row gy-4 flex-wrap-reverse">
                        <div class="col-lg-6">
                            <div class="position-relative">
                                <div class="tw-ps-14 position-relative">
                                    <img src="{{asset('assets/images/thumbs/about-four-thumb-1.png')}}" alt="Thumb"
                                        class="w-100" />
                                    <img src="{{asset('assets/images/shapes/revenue-shape.png')}}" alt=""
                                        class="flower animate__wobble__two position-absolute tw-start-0 bottom-100 tw--m-24-px z-n1" />
                                </div>

                                <div class="position-absolute bottom-0 tw-start-0 tw-mb-6">
                                    <img src="{{asset('assets/images/thumbs/about-four-thumb-3.png')}}" alt="Thumb"
                                        class="d-sm-block d-none tw-mb-4 animated-upDown" />
                                    <img src="{{asset('assets/images/thumbs/about-four-thumb-2.png')}}" alt="Thumb"
                                        class="d-block common-shadow-twentyFour tw-rounded-2xl animated-upDown animation-delay-1" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="ps-xl-5">
                                <div class="tw-mb-10">
                                    <h4 class="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                                        with the world's favorite CRM
                                    </h4>
                                    <h2 class="splitTextStyleOne text-heading text-capitalize">
                                        improve
                                        <span class="text-crm">customer</span>
                                        relationships today
                                    </h2>
                                    <p
                                        class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                        Sassly-CRM in the past allowing you
                                        to focus more on your business
                                        simply enjoy your newfound legal
                                        time to reflect leaving pen
                                    </p>
                                </div>

                                <div class="accordion common-accordion" id="accordionExample">
                                    <div class="accordion-item tw-px-40-px tw-rounded-xl section-bg-one border-0 tw-mb-6"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5 class="accordion-header">
                                            <button
                                                class="accordion-button tw-py-6 shadow-none px-0 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo"
                                                data-img="{{asset('assets/images/thumbs/faq-thumb2.png')}}">
                                                Automate everything
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body ps-0 pt-0 pe-0 tw-pb-6">
                                                <p class="text-neutral-500">
                                                    ERP provides a complete
                                                    leave management system
                                                    for your HR. Upcoming
                                                    holidays and remaining
                                                    leave balances.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-px-40-px tw-rounded-xl section-bg-one border-0 tw-mb-6"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button tw-py-6 shadow-none px-0 bg-transparent h5"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne"
                                                data-img="{{asset('assets/images/thumbs/faq-thumb1.png')}}">
                                                Deploy AI
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body ps-0 pt-0 pe-0 tw-pb-6">
                                                <p class="text-neutral-500">
                                                    ERP provides a complete
                                                    leave management system
                                                    for your HR. Upcoming
                                                    holidays and remaining
                                                    leave balances.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-px-40-px tw-rounded-xl section-bg-one border-0 tw-mb-6"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <h5 class="accordion-header">
                                            <button
                                                class="accordion-button tw-py-6 shadow-none px-0 bg-transparent h5 collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree"
                                                data-img="{{asset('assets/images/thumbs/faq-thumb3.png')}}">
                                                Powerful reporting
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body ps-0 pt-0 pe-0 tw-pb-6">
                                                <p class="text-neutral-500">
                                                    ERP provides a complete
                                                    leave management system
                                                    for your HR. Upcoming
                                                    holidays and remaining
                                                    leave balances.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Two Section end -->

            <!-- Features Four section start -->
            <section class="features-four">
                <div class="py-120 tw-mx-48-px position-relative">
                    <img src="{{asset('assets/images/bg/mash-gradient-bg2.png')}}" alt="Mash Gradient BG"
                        class="w-100 h-100 position-absolute top-0 tw-start-0 z-n1" />

                    <div class="max-w-1820-px mx-auto">
                        <div class="container">
                            <div class="tw-mb-12 max-w-570-px">
                                <h4 class="tw-mb-4 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                                    with the world's favorite CRM
                                </h4>
                                <h2 class="splitTextStyleOne text-heading text-capitalize">
                                    improve customer relationships today
                                </h2>
                            </div>

                            <div class="row g-32-px">
                                <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="1000">
                                    <div
                                        class="features-four-item bg-white tw-rounded-40-px tw-px-54-px tw-pt-16 tw-pb-180-px position-relative h-100">
                                        <h3 class="tw-mb-4 fw-semibold max-w-250-px splitTextStyleOne">
                                            Lead & Contact Management
                                        </h3>
                                        <p class="text-neutral-600 tw-text-lg fw-medium">
                                            Sassly-CRM in the past allowing
                                            you to
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="hover--translate-y-1 active--translate-y-scale-9 text-crm fw-bold tw-text-base text-blue text-decoration-underline tw-mt-12 hover-underline-none">Transfer
                                            domain</a>
                                        <img src="{{asset('assets/images/thumbs/features-four-thumb101.png')}}" alt="Thumbnail"
                                            class="max-w-40-percent position-absolute top-0 tw-mt-5 tw-end-0 tw-me-5 common-shadow-twentyFive tw-rounded-2xl d-xl-block d-none" />
                                        <img src="{{asset('assets/images/thumbs/features-four-thumb102.png')}}" alt="Thumbnail"
                                            class="max-w-40-percent position-absolute bottom-0 tw-start-45 tw-me-5 common-shadow-twentyFive tw-rounded-2xl" />
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="1200">
                                    <div
                                        class="features-four-item bg-white tw-rounded-40-px tw-px-54-px tw-pt-16 tw-pb-180-px position-relative h-100">
                                        <h3 class="tw-mb-4 fw-semibold max-w-400-px splitTextStyleOne">
                                            Automate Workflows and Monitor
                                            your Sales.
                                        </h3>
                                        <p class="text-neutral-600 tw-text-lg fw-medium">
                                            Sassly-CRM in the past allowing
                                            you to
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="hover--translate-y-1 active--translate-y-scale-9 text-crm fw-bold tw-text-base text-blue text-decoration-underline tw-mt-12 hover-underline-none">Transfer
                                            domain</a>
                                        <img src="{{asset('assets/images/thumbs/features-four-thumb2.png')}}" alt="Thumbnail"
                                            class="max-w-40-percent position-absolute bottom-0 tw-end-0 tw-me-8 tw-rounded-2xl" />
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="1000">
                                    <div
                                        class="features-four-item bg-white tw-rounded-40-px tw-px-54-px tw-pt-16 tw-pb-180-px position-relative h-100">
                                        <h3 class="tw-mb-4 fw-semibold max-w-400-px splitTextStyleOne">
                                            Artificial Intelligence
                                        </h3>
                                        <p class="text-neutral-600 tw-text-lg fw-medium">
                                            Sassly-CRM in the past allowing
                                            you to
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="hover--translate-y-1 active--translate-y-scale-9 text-crm fw-bold tw-text-base text-blue text-decoration-underline tw-mt-12 hover-underline-none">Transfer
                                            domain</a>
                                        <img src="{{asset('assets/images/thumbs/features-four-thumb3.png')}}" alt="Thumbnail"
                                            class="max-w-40-percent position-absolute bottom-0 tw-end-0 tw-me-10 tw-rounded-2xl" />
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="1200">
                                    <div
                                        class="features-four-item bg-white tw-rounded-40-px tw-px-54-px tw-pt-16 tw-pb-180-px position-relative h-100">
                                        <h3 class="tw-mb-4 fw-semibold max-w-432-px splitTextStyleOne">
                                            involves organizing, tracking,
                                            and optimizing sales
                                        </h3>
                                        <p class="text-neutral-600 tw-text-lg fw-medium">
                                            Sassly-CRM in the past allowing
                                            you to
                                        </p>
                                        <a href="javascript:void(0)"
                                            class="hover--translate-y-1 active--translate-y-scale-9 text-crm fw-bold tw-text-base text-blue text-decoration-underline tw-mt-12 hover-underline-none">Transfer
                                            domain</a>
                                        <img src="{{asset('assets/images/thumbs/features-four-thumb4.png')}}" alt="Thumbnail"
                                            class="max-w-40-percent position-absolute bottom-0 tw-end-0 tw-me-8 tw-rounded-2xl" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Features Four section End -->

            <!-- About Four Two Section start -->
            <section class="about-four-two py-120 position-relative z-1 overflow-hidden">
                <img src="{{asset('assets/images/bg/mash-gradient-bg3.png')}}" alt="Gradient"
                    class="position-absolute tw-start-0 top-0 z-n1" />

                <div class="container">
                    <div class="row gy-4 flex-wrap-reverse">
                        <div class="col-lg-6">
                            <div class="position-relative">
                                <div class="tw-ps-14 position-relative">
                                    <img src="{{asset('assets/images/thumbs/about-four-two-thumb.png')}}" alt="Thumb"
                                        class="w-100" />
                                </div>

                                <div
                                    class="position-absolute bottom-0 tw-start-0 d-flex w-100 justify-content-between align-items-end">
                                    <img src="{{asset('assets/images/thumbs/about-four-thumb-2.png')}}" alt="Thumb"
                                        class="d-block common-shadow-twentyFour tw-rounded-2xl animated-upDown" />
                                    <img src="{{asset('assets/images/thumbs/robot-img.png')}}" alt="Thumb"
                                        class="d-block tw-ms-8 tw-rounded-2xl animated-upDown animation-delay-1" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="ps-xl-5">
                                <div class="tw-mb-10">
                                    <h4 class="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-orange">
                                        with the world's favorite CRM
                                    </h4>
                                    <h2 class="splitTextStyleOne text-heading text-capitalize max-w-532-px">
                                        Simple set up,easy to stay organized
                                    </h2>
                                    <p
                                        class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                        Sassly-CRM in the past allowing you
                                        to focus more on your business
                                        simply enjoy your newfound legal
                                        time to reflect leaving pen
                                    </p>
                                </div>

                                <div class="d-flex flex-column tw-gap-5">
                                    <div class="d-flex align-items-center tw-gap-5" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                        <span
                                            class="tw-w-8 tw-h-8 bg-neutral-200 text-heading d-flex justify-content-center align-items-center rounded-circle">
                                            <i class="ph-bold ph-check"></i>
                                        </span>
                                        <p class="fw-bold text-heading tw-text-lg">
                                            Customizable pipeline views
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center tw-gap-5" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                                        <span
                                            class="tw-w-8 tw-h-8 bg-neutral-200 text-heading d-flex justify-content-center align-items-center rounded-circle">
                                            <i class="ph-bold ph-check"></i>
                                        </span>
                                        <p class="fw-bold text-heading tw-text-lg">
                                            Increase your lead-to-deal
                                            conversion rates.
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center tw-gap-5" data-aos="fade-up"
                                        data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <span
                                            class="tw-w-8 tw-h-8 bg-neutral-200 text-heading d-flex justify-content-center align-items-center rounded-circle">
                                            <i class="ph-bold ph-check"></i>
                                        </span>
                                        <p class="fw-bold text-heading tw-text-lg">
                                            Streamline data and tracking
                                            between softwares
                                        </p>
                                    </div>
                                </div>
                                <div class="tw-mt-9" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="900">
                                    <a href="{{route('pricing')}}"
                                        class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 tw-py-505 fw-bold rounded-pill btn-main hover-style-one common-shadow-inset-one"
                                        data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Start your free trial</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Four Two Section end -->

            <!-- About Four Three Section start -->
            <section class="about-four-three position-relative z-1 overflow-hidden">
                <div class="gradient-bg-top-bottom pb-120 tw-mx-48-px">
                    <img src="{{asset('assets/images/bg/mash-gradient-bg4.png')}}" alt="Gradient"
                        class="position-absolute tw-end-0 bottom-100 z-n1" />

                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="pe-xl-5">
                                    <div class="tw-mb-10">
                                        <h4 class="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                                            with the world's favorite CRM
                                        </h4>
                                        <h2 class="splitTextStyleOne text-heading text-capitalize">
                                            Perfectly-timed and personal
                                            outreach
                                        </h2>
                                        <p
                                            class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                            Sassly-CRM in the past allowing
                                            you to focus more on your
                                            business simply enjoy your
                                            newfound legal time to reflect
                                            leaving pen
                                        </p>
                                    </div>

                                    <div class="accordion common-accordion" id="accordionExampleTwo">
                                        <div class="accordion-item tw-px-40-px tw-rounded-xl bg-white border-0 tw-mb-6"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800">
                                            <h5 class="accordion-header">
                                                <button
                                                    class="accordion-button tw-py-6 shadow-none px-0 bg-transparent h5 collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwoo" aria-expanded="false"
                                                    aria-controls="collapseTwoo"
                                                    data-img="{{asset('assets/images/thumbs/faq-thumb2.png')}}">
                                                    Automate everything
                                                </button>
                                            </h5>
                                            <div id="collapseTwoo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleTwo">
                                                <div class="accordion-body ps-0 pt-0 pe-0 tw-pb-6">
                                                    <p class="text-neutral-500">
                                                        ERP provides a
                                                        complete leave
                                                        management system
                                                        for your HR.
                                                        Upcoming holidays
                                                        and remaining leave
                                                        balances.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item tw-px-40-px tw-rounded-xl bg-white border-0 tw-mb-6"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button tw-py-6 shadow-none px-0 bg-transparent h5"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOnee" aria-expanded="true"
                                                    aria-controls="collapseOnee"
                                                    data-img="{{asset('assets/images/thumbs/faq-thumb1.png')}}">
                                                    Deploy AI
                                                </button>
                                            </h5>
                                            <div id="collapseOnee" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionExampleTwo">
                                                <div class="accordion-body ps-0 pt-0 pe-0 tw-pb-6">
                                                    <p class="text-neutral-500">
                                                        ERP provides a
                                                        complete leave
                                                        management system
                                                        for your HR.
                                                        Upcoming holidays
                                                        and remaining leave
                                                        balances.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item tw-px-40-px tw-rounded-xl bg-white border-0 tw-mb-6"
                                            data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800">
                                            <h5 class="accordion-header">
                                                <button
                                                    class="accordion-button tw-py-6 shadow-none px-0 bg-transparent h5 collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThreee" aria-expanded="false"
                                                    aria-controls="collapseThreee"
                                                    data-img="{{asset('assets/images/thumbs/faq-thumb3.png')}}">
                                                    Powerful reporting
                                                </button>
                                            </h5>
                                            <div id="collapseThreee" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExampleTwo">
                                                <div class="accordion-body ps-0 pt-0 pe-0 tw-pb-6">
                                                    <p class="text-neutral-500">
                                                        ERP provides a
                                                        complete leave
                                                        management system
                                                        for your HR.
                                                        Upcoming holidays
                                                        and remaining leave
                                                        balances.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <div class="tw-ps-14 position-relative">
                                        <img src="{{asset('assets/images/thumbs/about-four-three-thumb1.png')}}" alt="Thumb"
                                            class="w-100" />
                                    </div>

                                    <div class="position-absolute bottom-0 tw-start-0 tw-mb-6">
                                        <img src="{{asset('assets/images/thumbs/about-four-three-thumb2.png')}}" alt="Thumb"
                                            class="common-shadow-twentyFour tw-rounded-2xl tw-mb-4 animated-upDown" />
                                        <img src="{{asset('assets/images/thumbs/robot-img.png')}}" alt="Thumb"
                                            class="d-block tw-ms-8 tw-rounded-2xl animated-upDown animation-delay-1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Four Three Section end -->

            <!-- Testimonials Four section start -->
            <section class="testimonials-four py-120 position-relative z-1">
                <img src="{{asset('assets/images/bg/mash-gradient-bg5.png')}}" alt="Gradient BG"
                    class="position-absolute tw-start-0 top-0 w-100 h-100 z-n1" />

                <div class="container">
                    <div class="row gy-5">
                        <div class="col-lg-6">
                            <div class="">
                                <div class="tw-mb-10">
                                    <h4 class="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                                        with the world's favorite CRM
                                    </h4>
                                    <h2 class="splitTextStyleOne text-white text-capitalize">
                                        improve customer relationships today
                                    </h2>
                                    <p
                                        class="splitTextStyleOne text-neutral-300 tw-mt-8 max-w-570-px fw-normal tw-text-lg">
                                        Sassly-CRM in the past allowing you
                                        to focus more on your business
                                        simply enjoy your newfound legal
                                        time to reflect leaving pen
                                    </p>
                                </div>
                                <div class="tw-mt-12 d-flex align-items-center tw-gap-405 flex-sm-nowrap flex-wrap">
                                    <div
                                        class="tw-rounded-xl bg-white-06 tw-py-205 tw-px-5 d-flex align-items-center tw-gap-4">
                                        <span>
                                            <img src="{{asset('assets/images/icons/testimonials-four-icon1.png')}}" alt="Icon" />
                                        </span>
                                        <div class="">
                                            <div class="d-flex align-items-center tw-gap-05">
                                                <span class="text-orange tw-text-lg"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-orange tw-text-lg"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-orange tw-text-lg"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-orange tw-text-lg"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-orange tw-text-lg"><i
                                                        class="ph-fill ph-star"></i></span>
                                            </div>
                                            <div class="d-flex align-items-center tw-gap-2">
                                                <span class="tw-text-xs text-white fw-bold">4.3</span>
                                                <span class="tw-text-xs text-white fw-normal">score, 9 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tw-rounded-xl bg-white-06 tw-py-205 tw-px-5 d-flex align-items-center tw-gap-4">
                                        <span>
                                            <img src="{{asset('assets/images/icons/testimonials-four-icon2.png')}}" alt="Icon" />
                                        </span>
                                        <div class="">
                                            <div class="d-flex align-items-center tw-gap-05">
                                                <span class="text-green tw-text-lg"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-green tw-text-lg"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-green tw-text-lg"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-green tw-text-lg"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-green tw-text-lg"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <div class="d-flex align-items-center tw-gap-2">
                                                <span class="tw-text-xs text-white fw-bold">4.3</span>
                                                <span class="tw-text-xs text-white fw-normal">score, 9 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testimonials-four-slider swiper position-relative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="600">
                                        <div class="bg-white tw-rounded-2xl common-shadow-twentySix box-layer tw-mb-12">
                                            <div class="box-layer-two tw-p-54-px tw-rounded-2xl bg-white">
                                                <span class="tw-mb-5 animate-left-right animation-delay-3 tw-duration-200">
                                                    <img src="{{asset('assets/images/thumbs/website-owner-img1.png')}}" alt="Logo"
                                                        class="animate__flipInY" />
                                                </span>
                                                <p
                                                    class="text-heading h3 fw-medium font-body tw-leading-153 animate-left-right animation-delay-2 tw-duration-200">
                                                    “Sasstech hires great
                                                    people from a widely
                                                    variety of backgrounds,
                                                    which simply makes our
                                                    compan stronger, and we
                                                    couldn't be prouder of
                                                    that.”
                                                </p>
                                                <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                                <div
                                                    class="d-flex align-items-center justify-content-between animate-left-right animation-delay-3">
                                                    <div class="d-flex align-items-center tw-gap-6 tw-duration-200">
                                                        <div class="tw-h-84-px tw-w-84-px rounded-circle">
                                                            <img src="{{asset('assets/images/thumbs/testimonials-short-img1.png')}}"
                                                                alt="Image" class="w-100 h-100 object-fit-cover" />
                                                        </div>
                                                        <div class="">
                                                            <h6 class="tw-mb-2">
                                                                Robiul Hasan
                                                            </h6>
                                                            <span class="text-neutral-600">
                                                                <span class="fw-semibold text-blue">CEO</span>
                                                                and Founder
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="Rating"
                                                            class="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="600">
                                        <div class="bg-white tw-rounded-2xl common-shadow-twentySix box-layer tw-mb-12">
                                            <div class="box-layer-two tw-p-54-px tw-rounded-2xl bg-white">
                                                <span class="tw-mb-5 animate-left-right animation-delay-3 tw-duration-200">
                                                    <img src="{{asset('assets/images/thumbs/website-owner-img2.png')}}" alt="Logo"
                                                        class="animate__flipInY" />
                                                </span>
                                                <p
                                                    class="text-heading h3 fw-medium font-body tw-leading-153 animate-left-right animation-delay-2 tw-duration-200">
                                                    “Sasstech hires great
                                                    people from a wide range
                                                    of backgrounds, which
                                                    simply strengthens our
                                                    company, and we couldn't
                                                    be prouder of that,” the
                                                    company says.
                                                </p>
                                                <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                                <div
                                                    class="d-flex align-items-center justify-content-between animate-left-right animation-delay-3">
                                                    <div class="d-flex align-items-center tw-gap-6 tw-duration-200">
                                                        <div class="tw-h-84-px tw-w-84-px rounded-circle">
                                                            <img src="{{asset('assets/images/thumbs/testimonials-short-img2.png')}}"
                                                                alt="Image" class="w-100 h-100 object-fit-cover" />
                                                        </div>
                                                        <div class="">
                                                            <h6 class="tw-mb-2">
                                                                John Doe
                                                            </h6>
                                                            <span class="text-neutral-600">
                                                                <span class="fw-semibold text-blue">CEO</span>
                                                                and Founder
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="Rating"
                                                            class="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="600">
                                        <div class="bg-white tw-rounded-2xl common-shadow-twentySix box-layer tw-mb-12">
                                            <div class="box-layer-two tw-p-54-px tw-rounded-2xl bg-white">
                                                <span class="tw-mb-5 animate-left-right animation-delay-3 tw-duration-200">
                                                    <img src="{{asset('assets/images/thumbs/website-owner-img3.png')}}" alt="Logo"
                                                        class="animate__flipInY" />
                                                </span>
                                                <p
                                                    class="text-heading h3 fw-medium font-body tw-leading-153 animate-left-right animation-delay-2 tw-duration-200">
                                                    "Sasstech brings
                                                    together talented
                                                    individuals from diverse
                                                    backgrounds,
                                                    strengthening our
                                                    company in the best way
                                                    possible.
                                                </p>
                                                <span class="d-block tw-h-px bg-neutral-200 tw-my-6"></span>
                                                <div
                                                    class="d-flex align-items-center justify-content-between animate-left-right animation-delay-3">
                                                    <div class="d-flex align-items-center tw-gap-6 tw-duration-200">
                                                        <div class="tw-h-84-px tw-w-84-px rounded-circle">
                                                            <img src="{{asset('assets/images/thumbs/testimonials-short-img3.png')}}"
                                                                alt="Image" class="w-100 h-100 object-fit-cover" />
                                                        </div>
                                                        <div class="">
                                                            <h6 class="tw-mb-2">
                                                                James
                                                                anderson
                                                            </h6>
                                                            <span class="text-neutral-600">
                                                                <span class="fw-semibold text-blue">CEO</span>
                                                                and Founder
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <img src="{{asset('assets/images/icons/ratings.svg')}}" alt="Rating"
                                                            class="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="tw-w-84-px tw-h-84-px rounded-circle bg-white d-flex flex-column tw-gap-2 justify-content-center align-items-center position-absolute tw-end-0 top-50 translate-middle-y z-2 common-shadow-twentyFour tw-me-16">
                                <button type="button"
                                    class="tw-text-lg tw-leading-none text-heading hover-text-main-600 tw-px-2 tw-pt-2"
                                    id="testimonials-four-next">
                                    <i class="ph-bold ph-caret-up"></i>
                                </button>
                                <button type="button"
                                    class="tw-text-lg tw-leading-none text-heading hover-text-main-600 tw-px-2 tw-pb-2"
                                    id="testimonials-four-prev">
                                    <i class="ph-bold ph-caret-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonials Four section End -->

            <!-- Integrated apps start -->
            <section class="pt-120 pb-120 overflow-hidden position-relative">
                <img src="{{asset('assets/images/bg/mash-gradient-bg6.png')}}" alt="Gradient BG"
                    class="position-absolute tw-start-0 top-0 w-100 h-100 z-n1" />

                <div class="container max-w-1290-px">
                    <div class="row gy-5 align-items-center flex-wrap-reverse">
                        <div class="col-xl-6" data-aos="zoom-in" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="2000">
                            <div class="position-relative tw-p-12 text-center">
                                <img src="{{asset('assets/images/shapes/rounded-circle.png')}}" alt="Bg Round" />

                                <img src="{{asset('assets/images/shapes/round-icons-big.png')}}" alt="Icons"
                                    class="position-absolute top-50 start-50 animation-rotate-right" />
                                <img src="{{asset('assets/images/shapes/round-icons-small.png')}}" alt="Icons"
                                    class="position-absolute top-50 start-50 animation-rotate-left" />
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <h3 class="">
                                        <span class="counter">2</span>k+
                                    </h3>
                                    <span class="text-heading">Integration</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="">
                                <div class="text-start mx-auto tw-mb-12">
                                    <div class="tw-mb-10">
                                        <h4 class="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-orange">
                                            with the world's favorite CRM
                                        </h4>
                                        <h2 class="splitTextStyleOne text-heading text-capitalize max-w-532-px">
                                            Simple set up,easy to stay
                                            organized
                                        </h2>
                                        <p
                                            class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-570-px fw-medium tw-text-lg">
                                            Sassly-CRM in the past allowing
                                            you to focus more on your
                                            business simply enjoy your
                                            newfound legal time to reflect
                                            leaving pen
                                        </p>
                                    </div>
                                    <div class="tw-mt-9" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="900">
                                        <a href="{{route('pricing')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 tw-py-505 fw-bold rounded-pill btn-main hover-style-one common-shadow-inset-one"
                                            data-block="button">
                                            <span class="button__flair"></span>
                                            <span class="button__label">See all Integrations</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Integrated apps End -->

            <!-- Counter Up section Start -->
            <section class="pt-120">
                <div class="container">
                    <div class="tw-mb-10 max-w-570-px mx-auto text-center">
                        <h4 class="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                            with the world's favorite CRM
                        </h4>
                        <h2 class="splitTextStyleOne text-heading text-capitalize">
                            Trueted CRM tools by the
                            <span class="fw-normal"> happy users</span>
                        </h2>
                    </div>

                    <div
                        class="border-top border-bottom d-flex justify-content-center flex-sm-nowrap flex-wrap tw-gap-148-px">
                        <div
                            class="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
                            <h2 class="h1">
                                <span class="counter">282</span><span class="">+</span>
                            </h2>
                            <span class="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
                        </div>

                        <div class="d-flex">
                            <div class="tw-w-1-px h-100 bg-neutral-200"></div>
                        </div>

                        <div
                            class="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
                            <h2 class="h1">
                                <span class="counter">95</span><span class="">%</span>
                            </h2>
                            <span class="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
                        </div>

                        <div class="d-flex">
                            <div class="tw-w-1-px h-100 bg-neutral-200"></div>
                        </div>

                        <div
                            class="text-center tw-pt-13 tw-pb-9 d-flex flex-column justify-content-center align-items-center tw-transition tw-duration-200">
                            <h2 class="h1">
                                <span class="counter">282</span><span class="">+</span>
                            </h2>
                            <span class="h6 text-uppercase tw-text-base tw-mt-5 d-sm-block d-none">worldwide clients</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Counter Up section End -->

            <!--  Driven section Start -->
            <section class="py-120">
                <div class="container">
                    <div class="">
                        <img src="{{asset('assets/images/thumbs/driven-img.png')}}" alt="Thumb" />
                        <div class="max-w-780-px text-center mx-auto">
                            <div class="tw-mb-10 max-w-672-px mx-auto text-center">
                                <h4 class="tw-mb-2 fw-bold line-clamp-1 font-caveat text-capitalize text-crm">
                                    with the world's favorite CRM
                                </h4>
                                <h2 class="splitTextStyleOne text-heading text-capitalize">
                                    The
                                    <span class="fw-normal">CRM</span>
                                    behind thousand of companies
                                </h2>
                            </div>
                            <div class="d-flex align-items-center tw-gap-4 justify-content-center tw-mt-10">
                                <div class="d-inline-flex align-items-center tw-gap-5 tw-mt-8 flex-wrap"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <a href="javascript:void(0)"
                                        class="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold"
                                        data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Schedule a Demo</span>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="flex-grow-1 hover--translate-y-1 active--translate-y-scale-9 btn btn-orange-outline hover-style-five hover-text-white button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 rounded-pill tw-py-505 fw-bold bg-white"
                                        data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Contact Sales</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Driven section End -->


            <!-- footer area -->
            @include('frontend.includes.footers.footerFour')
            <!-- footer area end -->
        </div>
    </div>

@endsection
