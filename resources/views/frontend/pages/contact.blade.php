@extends('frontend.layouts.app')
@section('title', 'Contact Us')
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
                                        Get In Touch
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->

                <!-- Contact box section Start -->
                <section class="bg-neutral-light-half style-two">
                    <div class="container">
                        <div class="bg-white tw-py-9 tw-px-8">
                            <div class="row gy-4">
                                <div class="col-lg-4 col-sm-6">
                                    <div
                                        class="bg-white tw-rounded-lg tw-py-15 tw-px-5 common-shadow-thirteen hover-bg-main-600 group group-item text-center animation-item tw-transition tw-duration-200 h-100"
                                    >
                                        <span class="tw-mb-705">
                                            <img
                                                src="{{asset('assets/images/icons/contact-icon1.svg')}}"
                                                alt="Icon"
                                                class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat"
                                            />
                                        </span>
                                        <h5
                                            class="group-hover-text-white tw-transition tw-duration-200 tw-mb-5 text-capitalize splitTextStyleOne"
                                        >
                                            address line
                                        </h5>
                                        <div class="max-w-250-px mx-auto">
                                            <p
                                                class="group-hover-text-white tw-transition tw-duration-200 text-neutral-600 fw-medium tw-text-lg splitTextStyleOne"
                                            >
                                                Bowery St, New York, 37 USA NY
                                                10013,USA
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div
                                        class="bg-white tw-rounded-lg tw-py-15 tw-px-5 common-shadow-thirteen hover-bg-main-600 group group-item text-center animation-item tw-transition tw-duration-200 h-100"
                                    >
                                        <span class="tw-mb-705">
                                            <img
                                                src="{{asset('assets/images/icons/contact-icon2.svg')}}"
                                                alt="Icon"
                                                class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat"
                                            />
                                        </span>
                                        <h5
                                            class="group-hover-text-white tw-transition tw-duration-200 tw-mb-5 text-capitalize splitTextStyleOne"
                                        >
                                            Phone Number
                                        </h5>
                                        <div class="max-w-250-px mx-auto">
                                            <a
                                                href="tel:+125556865234374221"
                                                class="group-hover-text-white tw-transition tw-duration-200 text-neutral-600 fw-medium tw-text-lg splitTextStyleOne"
                                                >+1255 - 568 - 6523 4374-221</a
                                            >
                                            <a
                                                href="tel:+12555686523"
                                                class="group-hover-text-white tw-transition tw-duration-200 text-neutral-600 fw-medium tw-text-lg splitTextStyleOne tw-mt-1"
                                                >+1255 - 568 - 6523</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div
                                        class="bg-white tw-rounded-lg tw-py-15 tw-px-5 common-shadow-thirteen hover-bg-main-600 group group-item text-center animation-item tw-transition tw-duration-200 h-100"
                                    >
                                        <span class="tw-mb-705">
                                            <img
                                                src="{{asset('assets/images/icons/contact-icon3.svg')}}"
                                                alt="Icon"
                                                class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat"
                                            />
                                        </span>
                                        <h5
                                            class="group-hover-text-white tw-transition tw-duration-200 tw-mb-5 text-capitalize splitTextStyleOne"
                                        >
                                            Mail Address
                                        </h5>
                                        <div class="max-w-250-px mx-auto">
                                            <a
                                                href="mailto:email@example.com"
                                                class="group-hover-text-white tw-transition tw-duration-200 text-neutral-600 fw-medium tw-text-lg splitTextStyleOne"
                                                >email@example.com</a
                                            >
                                            <a
                                                href="mailto:info@yourdomain.com"
                                                class="group-hover-text-white tw-transition tw-duration-200 text-neutral-600 fw-medium tw-text-lg splitTextStyleOne"
                                                >info@yourdomain.com</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact box section End -->

                <!-- Contact Page section start= -->
                <section class="py-120">
                    <div class="container">
                        <div class="row gy-5">
                            <div class="col-lg-6">
                                <div class="pe-xl-5 pe-lg-4">
                                    <div class="">
                                        <span
                                            class="splitTextStyleTwo tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305"
                                            >Get In Touch</span
                                        >
                                        <h3 class="splitTextStyleOne tw-mb-4">
                                            Contact Us
                                        </h3>
                                        <p class="text-neutral-900">
                                            Sed ut perspiciatis unde omnis iste
                                            natus error sit voluptatem
                                            accusantium doloremque laudantium,
                                            totam rem aperiam, eaque inventore
                                        </p>
                                    </div>
                                    <div
                                        class="xs-grid-cols-2 d-grid tw-mt-16 tw-gap-74-px"
                                    >
                                        <div
                                            class="d-flex align-items-start tw-gap-6"
                                        >
                                            <span
                                                class="tw-text-3xl text-main-600 d-flex"
                                            >
                                                <i
                                                    class="ph-bold ph-map-pin"
                                                ></i>
                                            </span>
                                            <div class="">
                                                <h6 class="tw-mb-4">
                                                    Location
                                                </h6>
                                                <p class="text-neutral-600">
                                                    55 Main street, 2nd block,
                                                    Melbourne, Australia
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-start tw-gap-6"
                                        >
                                            <span
                                                class="tw-text-3xl text-main-600 d-flex"
                                            >
                                                <i class="ph-bold ph-phone"></i>
                                            </span>
                                            <div class="">
                                                <h6 class="tw-mb-4">Phone</h6>
                                                <a
                                                    href="tel:+1(368)5678954"
                                                    class="text-neutral-600 hover-text-main-600"
                                                    >+1 (368) 567 89 54</a
                                                >
                                                <a
                                                    href="tel:+236(456)89622"
                                                    class="text-neutral-600 hover-text-main-600 tw-mt-1"
                                                    >+236 (456) 896 22</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-start tw-gap-6"
                                        >
                                            <span
                                                class="tw-text-3xl text-main-600 d-flex"
                                            >
                                                <i
                                                    class="ph-bold ph-envelope-simple"
                                                ></i>
                                            </span>
                                            <div class="">
                                                <h6 class="tw-mb-4">
                                                    Location
                                                </h6>
                                                <a
                                                    href="mailto:wiatechinfo@gmail.com"
                                                    class="text-neutral-600 hover-text-main-600"
                                                    >wiatechinfo@gmail.com</a
                                                >
                                                <a
                                                    href="mailto:www.wiatech.com"
                                                    class="text-neutral-600 hover-text-main-600"
                                                    >www.wiatech.com</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex align-items-start tw-gap-6"
                                        >
                                            <span
                                                class="tw-text-3xl text-main-600 d-flex"
                                            >
                                                <i
                                                    class="ph-bold ph-share-network"
                                                ></i>
                                            </span>
                                            <div class="">
                                                <h6 class="tw-mb-4">Social</h6>
                                                <ul
                                                    class="d-flex align-items-center tw-gap-3 justify-content-center tw-mt-6"
                                                >
                                                    <li>
                                                        <a
                                                            href="https://www.facebook.com"
                                                            class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"
                                                        >
                                                            <i
                                                                class="ph ph-facebook-logo"
                                                            ></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://www.twitter.com"
                                                            class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"
                                                        >
                                                            <i
                                                                class="ph ph-x-logo"
                                                            ></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://www.instagram.com"
                                                            class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"
                                                        >
                                                            <i
                                                                class="ph ph-instagram-logo"
                                                            ></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://www.youtube.com"
                                                            class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"
                                                        >
                                                            <i
                                                                class="ph ph-youtube-logo"
                                                            ></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- map Start -->
                                    <div class="map tw-mt-15">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5591642.125572935!2d-118.45027922609367!3d46.81821123121407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5343f19fafa367dd%3A0xe0a08a08122c4da1!2sHelena-Lewis%20and%20Clark%20National%20Forest!5e0!3m2!1sen!2sbd!4v1731480188813!5m2!1sen!2sbd"
                                            class="w-100"
                                            height="240"
                                            allowfullscreen=""
                                            loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"
                                        ></iframe>
                                    </div>
                                    <!-- map End -->
                                </div>
                            </div>

                            <div class="col-lg-6 ps-lg-5">
                                <div class="bg-neutral-50 tw-py-17 tw-px-705">
                                    <h4 class="tw-mb-4">Fill Up The Form</h4>
                                    <p class="text-neutral-600 max-w-444-px">
                                        Your email address will not be
                                        published. Required fields are marked *
                                    </p>
                                    <form
                                        action="#"
                                        class="tw-mt-70-px d-flex flex-column tw-gap-12 form-submit"
                                    >
                                        <div class="position-relative">
                                            <input
                                                type="text"
                                                class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600"
                                                placeholder="Your Name*"
                                                required
                                            />
                                            <span
                                                class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0"
                                            >
                                                <i class="ph-bold ph-user"></i>
                                            </span>
                                        </div>
                                        <div class="position-relative">
                                            <input
                                                type="email"
                                                class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600"
                                                placeholder="Email Address*"
                                                required
                                            />
                                            <span
                                                class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0"
                                            >
                                                <i
                                                    class="ph-bold ph-envelope"
                                                ></i>
                                            </span>
                                        </div>
                                        <div class="position-relative">
                                            <textarea
                                                class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600 tw-h-108-px"
                                                placeholder="Enter Your Message here"
                                            ></textarea>
                                            <span
                                                class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0"
                                            >
                                                <i
                                                    class="ph-bold ph-note-pencil"
                                                ></i>
                                            </span>
                                        </div>
                                        <div class="">
                                            <button
                                                type="submit"
                                                class="btn btn-main hover--translate-y-1 active--translate-y-scale-9 hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <span
                                                    class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative"
                                                >
                                                    <i
                                                        class="ph-bold ph-paper-plane-tilt"
                                                    ></i>
                                                </span>
                                                <span class="button__label"
                                                    >Get In Touch</span
                                                >
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact Page section End= -->

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
