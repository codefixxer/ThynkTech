@extends('frontend.layouts.app')
@section('title', 'Service Details')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <div id="smooth-content">
                <!-- Breadcrumb Start Here -->
                <section class="breadcrumb section-bg-two mb-0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center">
                                    <span class="tw-mb-4">
                                        <img
                                            src="{{asset('assets/images/logo/favicon-two.png')}}"
                                            alt="Favicon Two"
                                        />
                                    </span>
                                    <h1
                                        class="mb-0 splitTextStyleOne text-capitalize"
                                    >
                                        Service Details
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->

                <!-- Services Details Start -->
                <section class="service-details py-120">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-xl-4 pe-lg-4">
                                <div class="d-flex flex-column tw-gap-4">
                                    <a
                                        href="{{route('service.details')}}"
                                        class="bg-neutral-50 tw-py-3 tw-pe-205 tw-ps-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-bold d-flex align-items-center justify-content-between"
                                    >
                                        Cargo Domestic Service
                                        <span
                                            class="tw-px-205 tw-py-3 text-neutral-600 bg-white-1 group-hover-text-white tw-duration-300 d-flex"
                                        >
                                            <i class="ph ph-arrow-right"></i>
                                        </span>
                                    </a>
                                    <a
                                        href="{{route('service.details')}}"
                                        class="bg-neutral-50 tw-py-3 tw-pe-205 tw-ps-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-bold d-flex align-items-center justify-content-between"
                                    >
                                        Air Freight Services
                                        <span
                                            class="tw-px-205 tw-py-3 text-neutral-600 bg-white-1 group-hover-text-white tw-duration-300 d-flex"
                                        >
                                            <i class="ph ph-arrow-right"></i>
                                        </span>
                                    </a>
                                    <a
                                        href="{{route('service.details')}}"
                                        class="bg-neutral-50 tw-py-3 tw-pe-205 tw-ps-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-bold d-flex align-items-center justify-content-between"
                                    >
                                        Intermodal Shipping
                                        <span
                                            class="tw-px-205 tw-py-3 text-neutral-600 bg-white-1 group-hover-text-white tw-duration-300 d-flex"
                                        >
                                            <i class="ph ph-arrow-right"></i>
                                        </span>
                                    </a>
                                    <a
                                        href="{{route('service.details')}}"
                                        class="bg-neutral-50 tw-py-3 tw-pe-205 tw-ps-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-bold d-flex align-items-center justify-content-between"
                                    >
                                        Freeze product Shipping
                                        <span
                                            class="tw-px-205 tw-py-3 text-neutral-600 bg-white-1 group-hover-text-white tw-duration-300 d-flex"
                                        >
                                            <i class="ph ph-arrow-right"></i>
                                        </span>
                                    </a>
                                    <a
                                        href="{{route('service.details')}}"
                                        class="bg-neutral-50 tw-py-3 tw-pe-205 tw-ps-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-bold d-flex align-items-center justify-content-between"
                                    >
                                        Hot Shot Trucking
                                        <span
                                            class="tw-px-205 tw-py-3 text-neutral-600 bg-white-1 group-hover-text-white tw-duration-300 d-flex"
                                        >
                                            <i class="ph ph-arrow-right"></i>
                                        </span>
                                    </a>
                                    <a
                                        href="{{route('service.details')}}"
                                        class="bg-neutral-50 tw-py-3 tw-pe-205 tw-ps-6 text-main-two-600 hover-text-white hover-bg-main-600 group tw-text-lg fw-bold d-flex align-items-center justify-content-between"
                                    >
                                        Priority Transportation
                                        <span
                                            class="tw-px-205 tw-py-3 text-neutral-600 bg-white-1 group-hover-text-white tw-duration-300 d-flex"
                                        >
                                            <i class="ph ph-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>

                                <div
                                    class="tw-py-10 tw-px-7 text-center bg-main-two-600 tw-mt-11"
                                >
                                    <span
                                        class="tw-w-92-px tw-h-84-px d-inline-flex justify-content-center align-items-center tw-text-9 text-white bg-white-01 tw-rounded-sm"
                                    >
                                        <i class="ph ph-phone-call"></i>
                                    </span>
                                    <h5
                                        class="text-white max-w-260-px mx-auto splitTextStyleOne tw-mt-5"
                                    >
                                        Looking for logistics service Provider?
                                    </h5>

                                    <div class="tw-mt-11">
                                        <span
                                            class="text-uppercase text-white tw-mb-2"
                                            >Call anytime</span
                                        >
                                        <a
                                            href="tel:+(2)871382023"
                                            class="btn btn-main hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-py-505 rounded-pill fw-bold w-100"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <span class="button__label"
                                                >+(2) 871 382 023</span
                                            >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 ps-xl-5">
                                <div class="">
                                    <img
                                        src="{{asset('assets/images/thumbs/service-details-img.png')}}"
                                        alt="Thumb"
                                    />
                                    <div
                                        class="tw-mt-8 d-flex flex-column tw-gap-12"
                                    >
                                        <div class="">
                                            <h4
                                                class="tw-mb-3 splitTextStyleOne"
                                            >
                                                Cargo Transportation service
                                            </h4>
                                            <p class="text-neutral-600">
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit.
                                                Placeat qui ducimus illum modi?
                                                perspiciatis accusamus soluta
                                                perferendis, ad illum, nesciunt,
                                                reiciendis iusto et cupidit
                                                Repudiandae provident to
                                                consectetur, sapiente, libero
                                                iure necessitatibus corporis
                                                nulla voluptate, quisquam aut
                                                perspiciatis? Fugiat labore
                                                aspernatur eius, perspiciatis ut
                                                molestiae, delectus rem.
                                            </p>
                                        </div>
                                        <div class="">
                                            <h5
                                                class="tw-mb-3 splitTextStyleOne"
                                            >
                                                Sed ut perspiciatis unde omnis
                                                iste natus et
                                            </h5>
                                            <p class="text-neutral-600">
                                                Need something changed or is
                                                there something not quite
                                                working the way you envisaged?
                                                Is your van a little old and
                                                tired and need refreshing? Lorem
                                                Ipsum is simply dummy text of
                                                the printing and typesetting
                                                industry. Lorem Ipsum has been
                                                the industry’s standard dummy
                                                text ever since the 1500s, when
                                                an unknown printer took a galley
                                                of type and scrambled it to make
                                                a type specimen book. It has
                                                survived not only five
                                                centuries, but also the leap
                                                into electronic typesetting,
                                                remaining essentially unchanged.
                                            </p>
                                        </div>
                                        <div class="d-flex tw-gap-9">
                                            <div
                                                class="position-relative max-w-390-px w-100"
                                            >
                                                <img
                                                    src="{{asset('assets/images/thumbs/service-details-video-img.jpg')}}"
                                                    alt="Thumb"
                                                    class="w-100 h-100 object-fit-cover"
                                                />
                                                <a
                                                    href="https://www.youtube.com/watch?v=MFLVmAE4cqg"
                                                    class="play-button bg-light-animation tw-w-75-px tw-h-75-px d-inline-flex justify-content-center align-items-center bg-white text-main-600 hover-text-main-two-700 rounded-circle tw-text-xl position-absolute tw-start-50 tw--translate-middle top-50 z-1"
                                                >
                                                    <i
                                                        class="ph-fill ph-play"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class="">
                                                <h4
                                                    class="tw-mb-3 splitTextStyleOne"
                                                >
                                                    Why Security is Important ?
                                                </h4>
                                                <p class="text-neutral-600">
                                                    Lorem ipsum dolor sit amet,
                                                    consectetur adipisici sed do
                                                    eiusmod tempor incididunt ut
                                                    labore et
                                                </p>
                                                <ul
                                                    class="d-flex flex-column tw-gap-4 tw-mt-6"
                                                >
                                                    <li
                                                        class="d-flex align-items-center tw-gap-4"
                                                        data-aos="fade-up"
                                                        data-aos-duration="1000"
                                                        data-aos-delay="200"
                                                    >
                                                        <span
                                                            class="text-main-600 d-flex"
                                                            ><i
                                                                class="ph-bold ph-check"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-neutral-600 fw-medium"
                                                            >Research beyond the
                                                            business plan</span
                                                        >
                                                    </li>
                                                    <li
                                                        class="d-flex align-items-center tw-gap-4"
                                                        data-aos="fade-up"
                                                        data-aos-duration="1000"
                                                        data-aos-delay="400"
                                                    >
                                                        <span
                                                            class="text-main-600 d-flex"
                                                            ><i
                                                                class="ph-bold ph-check"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-neutral-600 fw-medium"
                                                            >Marketing options
                                                            and rates</span
                                                        >
                                                    </li>
                                                    <li
                                                        class="d-flex align-items-center tw-gap-4"
                                                        data-aos="fade-up"
                                                        data-aos-duration="1000"
                                                        data-aos-delay="400"
                                                    >
                                                        <span
                                                            class="text-main-600 d-flex"
                                                            ><i
                                                                class="ph-bold ph-check"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-neutral-600 fw-medium"
                                                            >The ability to
                                                            turnaround
                                                            consulting</span
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p class="text-neutral-600">
                                            There are many variations of
                                            passages of lorem ipsum is simply
                                            free text available in the market,
                                            but the majority time you put aside
                                            to be in our office. Lorem ipsum
                                            dolor sit amet, consectetLorem ipsum
                                            dolor sit amet, consectetur
                                            adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et
                                            dolore magna aliqua. Lorem ipsum
                                            dolor sit amet, consectetur
                                            adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et
                                            dolore magna aliqua.
                                        </p>

                                        <p
                                            class="bg-white border-start border-4 border-main-600 common-shadow-five tw-text-lg fw-medium text-main-two-600 tw-py-405 tw-px-6"
                                        >
                                            Business is the activity of making
                                            one's living or making money by
                                            produ The NDIS Cing or buying and
                                            selling products akes a lifetime
                                        </p>

                                        <div class="">
                                            <h5 class="tw-mb-8">
                                                Eligibility checklist :
                                            </h5>
                                            <div class="row gy-4">
                                                <div class="col-sm-8">
                                                    <img
                                                        src="{{asset('assets/images/thumbs/service-details-img1.jpg')}}"
                                                        alt="Thumb"
                                                        class="w-100 h-100 object-fit-cover"
                                                    />
                                                </div>
                                                <div class="col-sm-4">
                                                    <img
                                                        src="{{asset('assets/images/thumbs/service-details-img2.jpg')}}"
                                                        alt="Thumb"
                                                        class="w-100 h-100 object-fit-cover"
                                                    />
                                                </div>
                                                <div class="col-sm-4">
                                                    <img
                                                        src="{{asset('assets/images/thumbs/service-details-img3.jpg')}}"
                                                        alt="Thumb"
                                                        class="w-100 h-100 object-fit-cover"
                                                    />
                                                </div>
                                                <div class="col-sm-8">
                                                    <img
                                                        src="{{asset('assets/images/thumbs/service-details-img4.jpg')}}"
                                                        alt="Thumb"
                                                        class="w-100 h-100 object-fit-cover"
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="accordion common-accordion style-two arrow-bg-orange"
                                            id="accordionExample"
                                        >
                                            <div
                                                class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="800"
                                            >
                                                <h5
                                                    class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                                >
                                                    <button
                                                        class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo"
                                                        aria-expanded="false"
                                                        aria-controls="collapseTwo"
                                                    >
                                                        What is Sassly?
                                                    </button>
                                                </h5>
                                                <div
                                                    id="collapseTwo"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample"
                                                >
                                                    <div
                                                        class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                    >
                                                        <p
                                                            class="text-neutral-500 tw-leading-212"
                                                        >
                                                            GoDaddy offers more
                                                            than just a platform
                                                            to build your
                                                            website, we offer
                                                            everything you need
                                                            to create an
                                                            effective, memorable
                                                            online presence.
                                                            Already have a site?
                                                            We offer hosting
                                                            plans that will keep
                                                            it fast, secure and
                                                            online. Our
                                                            professional
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="800"
                                            >
                                                <h5
                                                    class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                                >
                                                    <button
                                                        class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne"
                                                        aria-expanded="true"
                                                        aria-controls="collapseOne"
                                                    >
                                                        Why should I choose
                                                        Sassly?
                                                    </button>
                                                </h5>
                                                <div
                                                    id="collapseOne"
                                                    class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample"
                                                >
                                                    <div
                                                        class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                    >
                                                        <p
                                                            class="text-neutral-500 tw-leading-212"
                                                        >
                                                            GoDaddy offers more
                                                            than just a platform
                                                            to build your
                                                            website, we offer
                                                            everything you need
                                                            to create an
                                                            effective, memorable
                                                            online presence.
                                                            Already have a site?
                                                            We offer hosting
                                                            plans that will keep
                                                            it fast, secure and
                                                            online. Our
                                                            professional
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="800"
                                            >
                                                <h5
                                                    class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                                >
                                                    <button
                                                        class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseThree"
                                                        aria-expanded="false"
                                                        aria-controls="collapseThree"
                                                    >
                                                        Can I upgrade to a
                                                        different plan at a
                                                        later time?
                                                    </button>
                                                </h5>
                                                <div
                                                    id="collapseThree"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample"
                                                >
                                                    <div
                                                        class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                    >
                                                        <p
                                                            class="text-neutral-500 tw-leading-212"
                                                        >
                                                            GoDaddy offers more
                                                            than just a platform
                                                            to build your
                                                            website, we offer
                                                            everything you need
                                                            to create an
                                                            effective, memorable
                                                            online presence.
                                                            Already have a site?
                                                            We offer hosting
                                                            plans that will keep
                                                            it fast, secure and
                                                            online. Our
                                                            professional
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="800"
                                            >
                                                <h5
                                                    class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                                >
                                                    <button
                                                        class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseFour"
                                                        aria-expanded="false"
                                                        aria-controls="collapseFour"
                                                    >
                                                        What’s the cost of
                                                        additional users?
                                                    </button>
                                                </h5>
                                                <div
                                                    id="collapseFour"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample"
                                                >
                                                    <div
                                                        class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                    >
                                                        <p
                                                            class="text-neutral-500 tw-leading-212"
                                                        >
                                                            GoDaddy offers more
                                                            than just a platform
                                                            to build your
                                                            website, we offer
                                                            everything you need
                                                            to create an
                                                            effective, memorable
                                                            online presence.
                                                            Already have a site?
                                                            We offer hosting
                                                            plans that will keep
                                                            it fast, secure and
                                                            online. Our
                                                            professional
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="800"
                                            >
                                                <h5
                                                    class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                                >
                                                    <button
                                                        class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseFive"
                                                        aria-expanded="false"
                                                        aria-controls="collapseFive"
                                                    >
                                                        What’s the commitment?
                                                    </button>
                                                </h5>
                                                <div
                                                    id="collapseFive"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample"
                                                >
                                                    <div
                                                        class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                    >
                                                        <p
                                                            class="text-neutral-500 tw-leading-212"
                                                        >
                                                            GoDaddy offers more
                                                            than just a platform
                                                            to build your
                                                            website, we offer
                                                            everything you need
                                                            to create an
                                                            effective, memorable
                                                            online presence.
                                                            Already have a site?
                                                            We offer hosting
                                                            plans that will keep
                                                            it fast, secure and
                                                            online. Our
                                                            professional
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="800"
                                            >
                                                <h5
                                                    class="accordion-header d-flex align-items-center justify-content-between tw-gap-3"
                                                >
                                                    <button
                                                        class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseSix"
                                                        aria-expanded="false"
                                                        aria-controls="collapseSix"
                                                    >
                                                        What languages does
                                                        Sassly AI support?
                                                    </button>
                                                </h5>
                                                <div
                                                    id="collapseSix"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample"
                                                >
                                                    <div
                                                        class="accordion-body p-0 tw-mt-605 max-w-620-px"
                                                    >
                                                        <p
                                                            class="text-neutral-500 tw-leading-212"
                                                        >
                                                            GoDaddy offers more
                                                            than just a platform
                                                            to build your
                                                            website, we offer
                                                            everything you need
                                                            to create an
                                                            effective, memorable
                                                            online presence.
                                                            Already have a site?
                                                            We offer hosting
                                                            plans that will keep
                                                            it fast, secure and
                                                            online. Our
                                                            professional
                                                        </p>
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
                <!-- Services Details end -->

                <!-- Task Management Section Start -->
                <section
                    class="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half"
                >
                    <div class="container">
                        <div
                            class="text-end tw--mb-40-px position-relative z-2"
                        >
                            <img
                                src="{{asset('assets/images/thumbs/laptop-man.png')}}"
                                alt="Image"
                                class="tw-me-84-px"
                            />
                        </div>

                        <div
                            class="bg-green-deep tw-rounded-3xl bg-green-deep tw-pt-100-px position-relative z-1"
                        >
                            <img
                                src="{{asset('assets/images/shapes/hill-shape.png')}}"
                                alt="Hill Shape"
                                class="position-absolute w-100 h-100 top-0 tw-start-0 z-n1"
                            />
                            <img
                                src="{{asset('assets/images/thumbs/task-management-img.png')}}"
                                alt="Image"
                                class="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none"
                            />

                            <div
                                class="tw-mb-8 text-center max-w-570-px mx-auto"
                            >
                                <div
                                    class="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13"
                                    data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="600"
                                >
                                    <div class="">
                                        Up to
                                        <span
                                            class="text-yellow text-stroke-yellow"
                                            >70%</span
                                        >
                                        off managed cloud hosting
                                    </div>
                                </div>
                                <h3 class="splitTextStyleOne text-white">
                                    Ready to revolutionize our service?
                                </h3>

                                <div class="d-none">
                                    <a
                                        href="javascript:void(0)"
                                        class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 rounded-0 tw-py-6 fw-bold tw-mt-7"
                                        data-block="button"
                                    >
                                        <span class="button__flair"></span>
                                        <div
                                            class="d-flex align-items-center tw-gap-2 z-1"
                                        >
                                            <span class="button__label"
                                                >Download for free</span
                                            >
                                        </div>
                                    </a>
                                </div>
                                <div class="d-block">
                                    <div
                                        class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap"
                                    >
                                        <a
                                            href="javascript:void(0)"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <div
                                                class="d-flex align-items-center tw-gap-2 z-1"
                                            >
                                                <span class="button__label"
                                                    >Get Started Trial</span
                                                >
                                            </div>
                                        </a>
                                        <a
                                            href="javascript:void(0)"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <div
                                                class="d-flex align-items-center tw-gap-2 z-1"
                                            >
                                                <span class="button__label"
                                                    >Get Started Trial</span
                                                >
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-pt-8 text-center">
                                <div
                                    class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6"
                                >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill"
                                        >Project management</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill"
                                        >Technology</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                        >Technology</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill"
                                        >Project management</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill"
                                        >Technology</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                        >Technology</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill"
                                        >Project management</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill"
                                        >Technology</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill"
                                        >Project management</span
                                    >
                                    <span
                                        class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill"
                                        >Technology</span
                                    >
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
