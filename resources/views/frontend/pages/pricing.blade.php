@extends('frontend.layouts.app')
@section('title', 'Pricing')
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
                                        Pricing Package
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->

                <!-- Pricing Plan one Start -->
                <section class="pricing-plan-one py-120">
                    <div class="container">
                        <div class="max-w-672-px text-center mx-auto tw-mb-12">
                            <h3
                                class="splitTextStyleOne text-heading text-capitalize"
                            >
                                Seamless Integration for enhancing experience
                            </h3>
                            <p
                                class="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-570-px mx-auto"
                            >
                                Create tasks with various custom statuses to
                                focus more on your keep track of the progress of
                                each why in
                            </p>
                        </div>

                        <div class="row gy-4">
                            <div
                                class="col-xl-4 col-sm-6"
                                data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600"
                            >
                                <div
                                    class="position-relative bg-neutral-100 tw-px-7 tw-py-16 bg-white hover-border-main-600"
                                >
                                    <div class="">
                                        <div class="tw-ps-205">
                                            <h5 class="tw-mb-1">Basic plan</h5>
                                            <p class="text-neutral-500">
                                                Customized anything in anytime
                                            </p>
                                            <span
                                                class="d-block tw-h-px bg-neutral-200 tw-my-6"
                                            ></span>
                                            <div
                                                class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10"
                                            >
                                                <h3 class="mb-0">
                                                    $1.99<span
                                                        class="tw-text-xl fw-medium"
                                                        >/Yearly</span
                                                    >
                                                </h3>
                                            </div>
                                        </div>
                                        <a
                                            href="{{route('login')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <div
                                                class="d-flex align-items-center tw-gap-2 z-1"
                                            >
                                                <span class="button__label"
                                                    >Start Free Trial</span
                                                >
                                            </div>
                                        </a>
                                        <span
                                            class="text-heading tw-mt-3 text-center d-block fw-medium"
                                            >Renews at $9.88/month</span
                                        >

                                        <div class="tw-ps-205">
                                            <div
                                                class="d-flex flex-column tw-gap-5 tw-mt-10"
                                            >
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="600"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Real-time tracking and
                                                        notifications</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="620"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Real-time
                                                        analytics</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="640"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Drag and drop
                                                        templates</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="660"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Project
                                                        Management</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="680"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >24/7 email and chat
                                                        support</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-xl-4 col-sm-6"
                                data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom"
                                data-aos-duration="800"
                            >
                                <div
                                    class="position-relative bg-neutral-100 tw-px-7 tw-py-16 bg-white hover-border-main-600"
                                >
                                    <div class="">
                                        <div class="tw-ps-205">
                                            <h5 class="tw-mb-1">
                                                Premium plan
                                            </h5>
                                            <p class="text-neutral-500">
                                                Customized anything in anytime
                                            </p>
                                            <span
                                                class="d-block tw-h-px bg-neutral-200 tw-my-6"
                                            ></span>
                                            <div
                                                class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10"
                                            >
                                                <h3 class="mb-0">
                                                    $9.99<span
                                                        class="tw-text-xl fw-medium"
                                                        >/Yearly</span
                                                    >
                                                </h3>
                                            </div>
                                        </div>
                                        <a
                                            href="{{route('login')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <div
                                                class="d-flex align-items-center tw-gap-2 z-1"
                                            >
                                                <span class="button__label"
                                                    >Start Free Trial</span
                                                >
                                            </div>
                                        </a>
                                        <span
                                            class="text-heading tw-mt-3 text-center d-block fw-medium"
                                            >Renews at $9.88/month</span
                                        >

                                        <div class="tw-ps-205">
                                            <div
                                                class="d-flex flex-column tw-gap-5 tw-mt-10"
                                            >
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="600"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Real-time tracking and
                                                        notifications</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="620"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Real-time
                                                        analytics</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="640"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Drag and drop
                                                        templates</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="660"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Project
                                                        Management</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="680"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >24/7 email and chat
                                                        support</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-xl-4 col-sm-6"
                                data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom"
                                data-aos-duration="900"
                            >
                                <div
                                    class="position-relative bg-neutral-100 tw-px-7 tw-py-16 bg-white hover-border-main-600"
                                >
                                    <div class="">
                                        <div class="tw-ps-205">
                                            <h5 class="tw-mb-1">Pro plan</h5>
                                            <p class="text-neutral-500">
                                                Customized anything in anytime
                                            </p>
                                            <span
                                                class="d-block tw-h-px bg-neutral-200 tw-my-6"
                                            ></span>
                                            <div
                                                class="d-flex align-items-center justify-content-between tw-gap-1 tw-mb-10"
                                            >
                                                <h3 class="mb-0">
                                                    $19.99<span
                                                        class="tw-text-xl fw-medium"
                                                        >/Yearly</span
                                                    >
                                                </h3>
                                            </div>
                                        </div>
                                        <a
                                            href="{{route('login')}}"
                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-md tw-py-6 fw-bold"
                                            data-block="button"
                                        >
                                            <span class="button__flair"></span>
                                            <div
                                                class="d-flex align-items-center tw-gap-2 z-1"
                                            >
                                                <span class="button__label"
                                                    >Start Free Trial</span
                                                >
                                            </div>
                                        </a>
                                        <span
                                            class="text-heading tw-mt-3 text-center d-block fw-medium"
                                            >Renews at $9.88/month</span
                                        >

                                        <div class="tw-ps-205">
                                            <div
                                                class="d-flex flex-column tw-gap-5 tw-mt-10"
                                            >
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="600"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Real-time tracking and
                                                        notifications</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="620"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Real-time
                                                        analytics</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="640"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Drag and drop
                                                        templates</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="660"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >Project
                                                        Management</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="680"
                                                >
                                                    <span
                                                        class="tw-w-7 tw-h-7 bg-main-50 rounded-circle d-flex justify-content-center align-items-center tw-text-sm"
                                                    >
                                                        <i
                                                            class="text-gradient-teal ph-bold ph-check"
                                                        ></i>
                                                    </span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base"
                                                        >24/7 email and chat
                                                        support</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pricing Plan one End -->

                <!-- Pricing Plan Two Start -->
                <section class="pricing-plan-two section-bg-two py-120">
                    <div class="container">
                        <div class="max-w-672-px text-center mx-auto tw-mb-12">
                            <div
                                class="bg-white tw-py-2 tw-px-705 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max"
                                data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600"
                            >
                                <span class="text-gradient-teal">
                                    what we offering
                                </span>
                            </div>
                            <h3
                                class="splitTextStyleOne text-heading text-capitalize"
                            >
                                Trusted by
                                <span class="text-gradient-teal"
                                    >3+ million</span
                                >
                                website owners worldwide
                            </h3>
                            <p
                                class="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-570-px mx-auto fw-medium"
                            >
                                In today's competitive business, the demand for
                                efficient In today's competitive cost-effective
                                IT solutions has never been more critic.
                                business
                            </p>
                        </div>

                        <div class="row gy-4">
                            <div
                                class="col-lg-4"
                                data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600"
                            >
                                <div
                                    class="tw-rounded-3xl overflow-hidden bg-white bg-hover-crm group group-item tw-px-11 tw-py-14 tw-transition tw-duration-200 position-relative"
                                >
                                    <img
                                        src="{{asset('assets/images/shapes/half-moon-shape.png')}}"
                                        alt="Arrow"
                                        class="position-absolute tw-end-0 top-0 tw-mt-15 tw-me-16 tw-pe-705 group-hover-item-text-invert"
                                    />

                                    <div class="">
                                        <h3
                                            class="tw-mb-5 fw-semibold group-hover-text-white tw-transition tw-duration-200"
                                        >
                                            $19<span
                                                class="tw-text-xl fw-medium"
                                                >/Month</span
                                            >
                                        </h3>
                                        <p
                                            class="text-heading fw-semibold tw-text-base group-hover-text-white tw-transition tw-duration-200"
                                        >
                                            Smart Pricing for good services
                                        </p>
                                        <div class="tw-mt-10">
                                            <a
                                                href="{{route('login')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-three button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-3xl tw-py-6 fw-bold"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2 z-1"
                                                >
                                                    <span class="button__label"
                                                        >Choose Package</span
                                                    >
                                                    <span class="icon"
                                                        ><i
                                                            class="ph-bold ph-arrow-up-right"
                                                        ></i
                                                    ></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tw-mt-12">
                                            <h5
                                                class="tw-mb-9 group-hover-text-white tw-transition tw-duration-200"
                                            >
                                                Regular Plan
                                            </h5>
                                            <div
                                                class="d-flex flex-column tw-gap-5 tw-mt-10"
                                            >
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="600"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Real-time tracking and
                                                        notifications</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="620"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Real-time
                                                        analytics</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="640"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Drag and drop
                                                        templates</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="660"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Project
                                                        Management</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="680"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >24/7 email and chat
                                                        support</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-4"
                                data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom"
                                data-aos-duration="800"
                            >
                                <div
                                    class="tw-rounded-3xl overflow-hidden bg-white bg-hover-crm group group-item tw-px-11 tw-py-14 tw-transition tw-duration-200 position-relative"
                                >
                                    <img
                                        src="{{asset('assets/images/shapes/half-moon-shape.png')}}"
                                        alt="Arrow"
                                        class="position-absolute tw-end-0 top-0 tw-mt-15 tw-me-16 tw-pe-705 group-hover-item-text-invert"
                                    />

                                    <div class="">
                                        <h3
                                            class="tw-mb-5 fw-semibold group-hover-text-white tw-transition tw-duration-200"
                                        >
                                            $19<span
                                                class="tw-text-xl fw-medium"
                                                >/Month</span
                                            >
                                        </h3>
                                        <p
                                            class="text-heading fw-semibold tw-text-base group-hover-text-white tw-transition tw-duration-200"
                                        >
                                            Smart Pricing for good services
                                        </p>
                                        <div class="tw-mt-10">
                                            <a
                                                href="{{route('login')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-three button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-3xl tw-py-6 fw-bold"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2 z-1"
                                                >
                                                    <span class="button__label"
                                                        >Choose Package</span
                                                    >
                                                    <span class="icon"
                                                        ><i
                                                            class="ph-bold ph-arrow-up-right"
                                                        ></i
                                                    ></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tw-mt-12">
                                            <h5
                                                class="tw-mb-9 group-hover-text-white tw-transition tw-duration-200"
                                            >
                                                Regular Plan
                                            </h5>
                                            <div
                                                class="d-flex flex-column tw-gap-5 tw-mt-10"
                                            >
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="600"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Real-time tracking and
                                                        notifications</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="620"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Real-time
                                                        analytics</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="640"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Drag and drop
                                                        templates</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="660"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Project
                                                        Management</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="680"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >24/7 email and chat
                                                        support</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-4"
                                data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom"
                                data-aos-duration="900"
                            >
                                <div
                                    class="tw-rounded-3xl overflow-hidden bg-white bg-hover-crm group group-item tw-px-11 tw-py-14 tw-transition tw-duration-200 position-relative"
                                >
                                    <img
                                        src="{{asset('assets/images/shapes/half-moon-shape.png')}}"
                                        alt="Arrow"
                                        class="position-absolute tw-end-0 top-0 tw-mt-15 tw-me-16 tw-pe-705 group-hover-item-text-invert"
                                    />

                                    <div class="">
                                        <h3
                                            class="tw-mb-5 fw-semibold group-hover-text-white tw-transition tw-duration-200"
                                        >
                                            $19<span
                                                class="tw-text-xl fw-medium"
                                                >/Month</span
                                            >
                                        </h3>
                                        <p
                                            class="text-heading fw-semibold tw-text-base group-hover-text-white tw-transition tw-duration-200"
                                        >
                                            Smart Pricing for good services
                                        </p>
                                        <div class="tw-mt-10">
                                            <a
                                                href="{{route('login')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-three button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-3xl tw-py-6 fw-bold"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2 z-1"
                                                >
                                                    <span class="button__label"
                                                        >Choose Package</span
                                                    >
                                                    <span class="icon"
                                                        ><i
                                                            class="ph-bold ph-arrow-up-right"
                                                        ></i
                                                    ></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tw-mt-12">
                                            <h5
                                                class="tw-mb-9 group-hover-text-white tw-transition tw-duration-200"
                                            >
                                                Regular Plan
                                            </h5>
                                            <div
                                                class="d-flex flex-column tw-gap-5 tw-mt-10"
                                            >
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="600"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Real-time tracking and
                                                        notifications</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="620"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Real-time
                                                        analytics</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="640"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Drag and drop
                                                        templates</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="660"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >Project
                                                        Management</span
                                                    >
                                                </div>
                                                <div
                                                    class="d-flex align-items-center tw-gap-305"
                                                    data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="680"
                                                >
                                                    <span
                                                        class="tw-w-105 tw-h-105 bg-main-600 rounded-circle"
                                                    ></span>
                                                    <span
                                                        class="text-heading fw-semibold tw-text-base tw-transition tw-duration-200 group-hover-text-white"
                                                        >24/7 email and chat
                                                        support</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pricing Plan Two End -->

                <!-- Pricing Plan Three Start -->
                <section class="pricing-plan-three py-120">
                    <div class="container">
                        <div class="max-w-672-px text-center mx-auto tw-mb-12">
                            <div
                                class="bg-white tw-py-2 tw-px-705 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max"
                                data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600"
                            >
                                <span class="text-gradient-teal">
                                    what we offering
                                </span>
                            </div>
                            <h3
                                class="splitTextStyleOne text-heading text-capitalize"
                            >
                                Trusted by
                                <span class="text-gradient-teal"
                                    >3+ million</span
                                >
                                website owners worldwide
                            </h3>
                            <p
                                class="text-neutral-500 tw-mt-5 splitTextStyleOne max-w-570-px mx-auto fw-medium"
                            >
                                In today's competitive business, the demand for
                                efficient In today's competitive cost-effective
                                IT solutions has never been more critic.
                                business
                            </p>
                        </div>

                        <div class="row gy-4">
                            <div
                                class="col-lg-4"
                                data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom"
                                data-aos-duration="600"
                            >
                                <div
                                    class="tw-rounded-xl overflow-hidden bg-neutral-50 border border-neutral-200 hover-border-white hover-bg-white tw-px-11 tw-py-14 tw-transition tw-duration-200 position-relative hover-common-shadow-fourteen"
                                >
                                    <div class="">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap tw-gap-2"
                                        >
                                            <span
                                                class="text-white tw-text-basen tw-py-105 tw-px-4 bg-main-600 tw-rounded-md fw-medium"
                                                >Regular
                                            </span>
                                            <h3
                                                class="fw-semibold group-hover-text-white tw-transition tw-duration-200"
                                            >
                                                $15.<span
                                                    class="tw-text-xl fw-medium"
                                                    >/m</span
                                                >
                                            </h3>
                                        </div>
                                        <span
                                            class="d-block tw-h-px bg-neutral-200 tw-my-6"
                                        ></span>
                                        <p
                                            class="text-neutral-600 fw-medium tw-text-base group-hover-text-white tw-transition tw-duration-200"
                                        >
                                            Data curation involve the careful
                                            election organization, and
                                            maintenance
                                        </p>
                                        <div
                                            class="d-flex flex-column tw-gap-5 tw-mt-10"
                                        >
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="600"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >2 Limited sites
                                                    available</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="620"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >1 GB storage per site</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="640"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >Up to 5 pages per
                                                    site</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="660"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >Free SSL for custom
                                                    domain</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="680"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >Connect custom domain</span
                                                >
                                            </div>
                                        </div>
                                        <div class="tw-mt-10">
                                            <a
                                                href="{{route('login')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-3xl tw-py-6 fw-bold"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2 z-1"
                                                >
                                                    <span class="button__label"
                                                        >Choose Plan</span
                                                    >
                                                    <span class="icon"
                                                        ><i
                                                            class="ph-bold ph-arrow-up-right"
                                                        ></i
                                                    ></span>
                                                </div>
                                            </a>
                                            <span
                                                class="text-neutral-600 tw-mt-3 text-center d-block fw-medium"
                                                >No credit card required</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-4"
                                data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom"
                                data-aos-duration="800"
                            >
                                <div
                                    class="tw-rounded-xl overflow-hidden bg-neutral-50 border border-neutral-200 hover-border-white hover-bg-white tw-px-11 tw-py-14 tw-transition tw-duration-200 position-relative hover-common-shadow-fourteen"
                                >
                                    <div class="">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap tw-gap-2"
                                        >
                                            <span
                                                class="text-white tw-text-basen tw-py-105 tw-px-4 bg-orange tw-rounded-md fw-medium"
                                                >Regular
                                            </span>
                                            <h3
                                                class="fw-semibold group-hover-text-white tw-transition tw-duration-200"
                                            >
                                                $15.<span
                                                    class="tw-text-xl fw-medium"
                                                    >/m</span
                                                >
                                            </h3>
                                        </div>
                                        <span
                                            class="d-block tw-h-px bg-neutral-200 tw-my-6"
                                        ></span>
                                        <p
                                            class="text-neutral-600 fw-medium tw-text-base group-hover-text-white tw-transition tw-duration-200"
                                        >
                                            Data curation involve the careful
                                            election organization, and
                                            maintenance
                                        </p>
                                        <div
                                            class="d-flex flex-column tw-gap-5 tw-mt-10"
                                        >
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="600"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >2 Limited sites
                                                    available</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="620"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >1 GB storage per site</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="640"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >Up to 5 pages per
                                                    site</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="660"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >Free SSL for custom
                                                    domain</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="680"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >Connect custom domain</span
                                                >
                                            </div>
                                        </div>
                                        <div class="tw-mt-10">
                                            <a
                                                href="{{route('login')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-3xl tw-py-6 fw-bold"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2 z-1"
                                                >
                                                    <span class="button__label"
                                                        >Choose Plan</span
                                                    >
                                                    <span class="icon"
                                                        ><i
                                                            class="ph-bold ph-arrow-up-right"
                                                        ></i
                                                    ></span>
                                                </div>
                                            </a>
                                            <span
                                                class="text-neutral-600 tw-mt-3 text-center d-block fw-medium"
                                                >No credit card required</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-4"
                                data-aos="fade-up"
                                data-aos-anchor-placement="top-bottom"
                                data-aos-duration="1000"
                            >
                                <div
                                    class="tw-rounded-xl overflow-hidden bg-neutral-50 border border-neutral-200 hover-border-white hover-bg-white tw-px-11 tw-py-14 tw-transition tw-duration-200 position-relative hover-common-shadow-fourteen"
                                >
                                    <div class="">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap tw-gap-2"
                                        >
                                            <span
                                                class="text-white tw-text-basen tw-py-105 tw-px-4 bg-green tw-rounded-md fw-medium"
                                                >Regular
                                            </span>
                                            <h3
                                                class="fw-semibold group-hover-text-white tw-transition tw-duration-200"
                                            >
                                                $15.<span
                                                    class="tw-text-xl fw-medium"
                                                    >/m</span
                                                >
                                            </h3>
                                        </div>
                                        <span
                                            class="d-block tw-h-px bg-neutral-200 tw-my-6"
                                        ></span>
                                        <p
                                            class="text-neutral-600 fw-medium tw-text-base group-hover-text-white tw-transition tw-duration-200"
                                        >
                                            Data curation involve the careful
                                            election organization, and
                                            maintenance
                                        </p>
                                        <div
                                            class="d-flex flex-column tw-gap-5 tw-mt-10"
                                        >
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="600"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >2 Limited sites
                                                    available</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="620"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >1 GB storage per site</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="640"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >Up to 5 pages per
                                                    site</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="660"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >Free SSL for custom
                                                    domain</span
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-305 aos-init aos-animate"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="680"
                                            >
                                                <span class="tw-text-lg">
                                                    <i
                                                        class="text-gradient-teal ph-bold ph-check"
                                                    ></i>
                                                </span>
                                                <span
                                                    class="text-heading fw-semibold tw-text-base"
                                                    >Connect custom domain</span
                                                >
                                            </div>
                                        </div>
                                        <div class="tw-mt-10">
                                            <a
                                                href="{{route('login')}}"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-rounded-3xl tw-py-6 fw-bold"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <div
                                                    class="d-flex align-items-center tw-gap-2 z-1"
                                                >
                                                    <span class="button__label"
                                                        >Choose Plan</span
                                                    >
                                                    <span class="icon"
                                                        ><i
                                                            class="ph-bold ph-arrow-up-right"
                                                        ></i
                                                    ></span>
                                                </div>
                                            </a>
                                            <span
                                                class="text-neutral-600 tw-mt-3 text-center d-block fw-medium"
                                                >No credit card required</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pricing Plan Three End -->

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
