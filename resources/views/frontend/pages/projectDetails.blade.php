@extends('frontend.layouts.app')
@section('title', 'Project Details')
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
                                        Project Details
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->

                <!-- Project Details Start -->
                <section class="py-120">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-9">
                                <div class="max-w-724-px">
                                    <span
                                        class="splitTextStyleTwo tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305"
                                        >Safe Transportation & Logistics</span
                                    >
                                    <h3 class="splitTextStyleOne tw-mb-8">
                                        Deeper Dive into Our Digital Product
                                        Design Masterpieces
                                    </h3>
                                    <p class="text-neutral-600">
                                        Sed ut perspiciatis unde omniste natus
                                        voluptatem accusantiume rem aperia eaque
                                        ipsa quae abillo inventore veritatis
                                        quasi architecto beatae vitae dicta sunt
                                        explicabo. Nemo enim epsam voluptatem
                                        quia voluptas aspernatur odites sed quia
                                        consequunture
                                    </p>
                                </div>
                                <a
                                    href="skillleo.com"
                                    class="btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-3 group active--translate-y-2 tw-rounded-lg tw-px-13 tw-py-505 tw-mt-14"
                                    data-block="button"
                                >
                                    <span class="button__flair"></span>
                                    <span class="button__label"
                                        >Visit Website</span
                                    >
                                    <span
                                        class="text-white tw-text-lg position-relative group-hover-text-white tw-duration-500"
                                    >
                                        <i class="ph ph-caret-right"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-3">
                                <div
                                    class="bg-neutral-200 tw-p-54-px d-flex flex-column tw-gap-56-px"
                                >
                                    <div class="">
                                        <h6 class="tw-mb-3 fw-semibold">
                                            Clients
                                        </h6>
                                        <span class="text-neutral-600"
                                            >Design Studio In USA
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="tw-mb-3 fw-semibold">
                                            Project Type
                                        </h6>
                                        <span class="text-neutral-600"
                                            >Digital Product Design</span
                                        >
                                    </div>
                                    <div class="">
                                        <h6 class="tw-mb-3 fw-semibold">
                                            Date
                                        </h6>
                                        <span class="text-neutral-600"
                                            >25 October 2023</span
                                        >
                                    </div>
                                    <div class="">
                                        <h6 class="tw-mb-3 fw-semibold">
                                            Website
                                        </h6>
                                        <a
                                            href="https://themeforest.net6ser/wowtheme7"
                                            class="text-main-600 text-decoration-underline"
                                            >WowTheme7.Com</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-mt-80-px">
                            <div class="row gy-4">
                                <div class="col-sm-4">
                                    <div class="h-100">
                                        <img
                                            src="{{asset('assets/images/thumbs/project-details-img1.png')}}"
                                            alt="Thumb"
                                            class="w-100 h-100 object-fit-cover"
                                        />
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="h-100">
                                        <img
                                            src="{{asset('assets/images/thumbs/project-details-img2.png')}}"
                                            alt="Thumb"
                                            class="w-100 h-100 object-fit-cover"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="tw-mt-80-px tw-mb-80-px tw-pb-80-px border-bottom border-neutral-200"
                        >
                            <div
                                class="d-flex flex-wrap justify-content-between align-items-start"
                            >
                                <div class="max-w-444-px">
                                    <h3 class="splitTextStyleOne tw-mb-10">
                                        Interesting facts in Development
                                    </h3>
                                </div>
                                <div class="max-w-548-px">
                                    <p class="text-neutral-600">
                                        Must explain to you how all this
                                        mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give
                                        you a complete account of the system,
                                        and expound the actual teachings of the
                                        great explorer of the truth, the
                                        master-builder of human happiness. No
                                        one rejects, dislikes, or avoids
                                        pleasure itself, because it is pleasure,
                                        but because those who do not know how to
                                        pursue pleasure rationally encounter
                                    </p>

                                    <ul
                                        class="xs-grid-cols-2 d-grid tw-gap-6 tw-mt-14"
                                    >
                                        <li
                                            class="d-flex align-items-center tw-gap-4"
                                            data-aos="fade-up"
                                            data-aos-duration="1000"
                                            data-aos-delay="200"
                                        >
                                            <span class="text-main-600 d-flex"
                                                ><i class="ph-bold ph-check"></i
                                            ></span>
                                            <span
                                                class="text-main-two-600 fw-bold"
                                                >Efficient Sprint Planning</span
                                            >
                                        </li>
                                        <li
                                            class="d-flex align-items-center tw-gap-4"
                                            data-aos="fade-up"
                                            data-aos-duration="1000"
                                            data-aos-delay="400"
                                        >
                                            <span class="text-main-600 d-flex"
                                                ><i class="ph-bold ph-check"></i
                                            ></span>
                                            <span
                                                class="text-main-two-600 fw-bold"
                                                >Iterative Delivery
                                                Approach</span
                                            >
                                        </li>
                                        <li
                                            class="d-flex align-items-center tw-gap-4"
                                            data-aos="fade-up"
                                            data-aos-duration="1000"
                                            data-aos-delay="400"
                                        >
                                            <span class="text-main-600 d-flex"
                                                ><i class="ph-bold ph-check"></i
                                            ></span>
                                            <span
                                                class="text-main-two-600 fw-bold"
                                                >Standups and Demos</span
                                            >
                                        </li>
                                        <li
                                            class="d-flex align-items-center tw-gap-4"
                                            data-aos="fade-up"
                                            data-aos-duration="1000"
                                            data-aos-delay="400"
                                        >
                                            <span class="text-main-600 d-flex"
                                                ><i class="ph-bold ph-check"></i
                                            ></span>
                                            <span
                                                class="text-main-two-600 fw-bold"
                                                >Problem-solving</span
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div
                            class="tw-mt-80-px tw-mb-80-px tw-pb-80-px border-bottom border-neutral-200"
                        >
                            <div
                                class="d-flex flex-wrap justify-content-between align-items-start"
                            >
                                <div class="max-w-444-px">
                                    <h3 class="splitTextStyleOne tw-mb-10">
                                        The Results of Our Project
                                    </h3>
                                </div>
                                <div class="max-w-548-px">
                                    <p class="text-neutral-600">
                                        Will give you a complete account of the
                                        system, and expound the actual teachings
                                        of the great explorer of the truth, the
                                        master-builder of human happiness
                                        rejects, dislikes, or avoids pleasure
                                    </p>

                                    <div class="tw-mt-14">
                                        <div
                                            class="d-flex align-items-center tw-gap-4"
                                            data-aos="fade-up"
                                            data-aos-duration="1000"
                                            data-aos-delay="200"
                                        >
                                            <span
                                                class="text-white tw-w-605 tw-h-605 bg-main-600 d-flex justify-content-center align-items-center rounded-circle"
                                                ><i class="ph-bold ph-check"></i
                                            ></span>
                                            <h6
                                                class="text-main-two-600 fw-bold"
                                            >
                                                Support clients
                                            </h6>
                                        </div>
                                        <p class="text-neutral-600 tw-mt-6">
                                            Sed ut perspiciatis unde omnis natus
                                            voluptatem accusantium doloremque
                                            laudantium, totam rem aperiam
                                            inventore
                                        </p>
                                    </div>
                                    <div class="tw-mt-14">
                                        <div
                                            class="d-flex align-items-center tw-gap-4"
                                            data-aos="fade-up"
                                            data-aos-duration="1000"
                                            data-aos-delay="200"
                                        >
                                            <span
                                                class="text-white tw-w-605 tw-h-605 bg-main-600 d-flex justify-content-center align-items-center rounded-circle"
                                                ><i class="ph-bold ph-check"></i
                                            ></span>
                                            <h6
                                                class="text-main-two-600 fw-bold"
                                            >
                                                Solve problems
                                            </h6>
                                        </div>
                                        <p class="text-neutral-600 tw-mt-6">
                                            To take a trivial example, which of
                                            us ever undertakes laborious
                                            physical exercise, except to obtain
                                            some advantage
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tw-mt-80-px">
                            <div class="row gy-4">
                                <div class="col-sm-6">
                                    <div class="">
                                        <a
                                            href="{{route('project.details')}}"
                                            class="w-100 h-100"
                                        >
                                            <img
                                                src="{{asset('assets/images/thumbs/project-details-img3.png')}}"
                                                alt="Thumb"
                                                class="w-100 h-100 object-fit-cover"
                                            />
                                        </a>
                                        <div class="tw-mt-12">
                                            <a
                                                href="{{route('project.details')}}"
                                                class="text-neutral-600 hover-text-main-600 d-inline-flex align-items-center tw-gap-2 fw-semibold"
                                            >
                                                <span class="tw-text-lg d-flex"
                                                    ><i
                                                        class="ph ph-caret-left"
                                                    ></i
                                                ></span>
                                                Prev
                                            </a>
                                            <h5 class="tw-mt-6">
                                                <a
                                                    href="{{route('project.details')}}"
                                                    class="line-clamp-1 hover-underline"
                                                    >Business Website Design</a
                                                >
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="">
                                        <a
                                            href="{{route('project.details')}}"
                                            class="w-100 h-100"
                                        >
                                            <img
                                                src="{{asset('assets/images/thumbs/project-details-img4.png')}}"
                                                alt="Thumb"
                                                class="w-100 h-100 object-fit-cover"
                                            />
                                        </a>
                                        <div class="tw-mt-12 text-end">
                                            <a
                                                href="{{route('project.details')}}"
                                                class="text-neutral-600 hover-text-main-600 d-inline-flex align-items-center tw-gap-2 fw-semibold"
                                            >
                                                Next
                                                <span class="tw-text-lg d-flex"
                                                    ><i
                                                        class="ph ph-caret-right"
                                                    ></i
                                                ></span>
                                            </a>
                                            <h5 class="tw-mt-6">
                                                <a
                                                    href="{{route('project.details')}}"
                                                    class="line-clamp-1 hover-underline"
                                                    >Mobile Application
                                                    Design</a
                                                >
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Project Details End -->

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
