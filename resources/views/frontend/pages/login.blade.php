@extends('frontend.layouts.app')
@section('title', 'Login')
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
                                        Sign In
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->

                <!-- Account Section start= -->
                <section class="account py-120">
                    <div class="container">
                        <div
                            class="max-w-514-px bg-white common-shadow-twentyOne tw-rounded-2xl tw-p-60-px mx-auto"
                        >
                            <h4
                                class="tw-mb-8 text-capitalize fst-italic fw-bold text-center max-w-250-px mx-auto"
                            >
                                Start Your Journey with us
                            </h4>
                            <form
                                action="#"
                                class="form-submit d-flex flex-column tw-gap-6"
                            >
                                <div class="">
                                    <label
                                        for="name"
                                        class="fw-semibold text-heading d-block tw-mb-105"
                                        >Enter your name</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-heading fw-medium tw-px-6 tw-py-4 tw-rounded-lg shadow-none"
                                        id="name"
                                        placeholder="Enter your name"
                                    />
                                </div>
                                <div class="">
                                    <label
                                        for="createPassword"
                                        class="fw-medium text-base text-neutral-800 tw-mb-3"
                                    >
                                        Create password</label
                                    >
                                    <div class="position-relative">
                                        <input
                                            type="text"
                                            class="form-control bg-neutral-100 border border-neutral-100 focus-border-main-600 text-heading fw-medium tw-px-6 tw-py-4 tw-rounded-lg shadow-none"
                                            id="createPassword"
                                            placeholder="Enter your name"
                                        />
                                        <span
                                            class="toggle-password position-absolute top-50 tw-end-0 tw-me-4 tw-text-xl text-neutral-600 tw--translate-y-50 ph-bold ph-eye-slash"
                                            id="#createPassword"
                                        ></span>
                                    </div>
                                </div>
                                <div
                                    class="d-flex align-items-center justify-content-between"
                                >
                                    <div
                                        class="common-check d-flex align-items-center tw-gap-2 mb-0"
                                    >
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="remember"
                                        />
                                        <div
                                            class="form-check-label text-neutral-600 fw-medium"
                                        >
                                            <label class="" for="remember"
                                                >Remember me</label
                                            >
                                        </div>
                                    </div>
                                    <a
                                        href="javascript:void(0)"
                                        class="hover-underline text-danger fw-semibold hover--translate-y-1 active-scale-09"
                                        >Forgot Password?</a
                                    >
                                </div>
                                <div class="">
                                    <button
                                        type="submit"
                                        class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-px-4 tw-py-505 fw-medium btn-main hover-style-one w-100 rounded-pill"
                                        data-block="button"
                                    >
                                        <span class="button__flair"></span>
                                        <span class="button__label">Login</span>
                                    </button>
                                </div>
                            </form>
                            <div
                                class="form-check-label text-neutral-600 fw-semibold tw-mt-405 text-center"
                            >
                                <span>Are you new here?</span>
                                <a
                                    href="{{route('register')}}"
                                    class="text-decoration-underline text-neutral-600 fw-semibold hover--translate-y-1 active-scale-09 hover-text-main-600"
                                    >Create an account</a
                                >
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Account Section End = -->

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
