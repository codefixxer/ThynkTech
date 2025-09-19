@extends('frontend.layouts.app')
@section('title', 'Shop')
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
                                        Shop Page
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb End Here -->

                <!-- Shop Start -->
                <section class="shop py-120">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <div class="d-flex flex-column tw-gap-705">
                                    <div
                                        class="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize"
                                        >
                                            Search Here
                                        </h5>
                                        <form
                                            action="#"
                                            class="position-relative"
                                        >
                                            <input
                                                type="text"
                                                class="tw-ps-4 tw-pe-12 tw-py-4 bg-white tw-placeholder-text-main-two-600 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden tw-rounded-md shadow-none flex-grow-1 border border-neutral-200 focus-border-main-600 tw-duration-300"
                                                placeholder="Search here..."
                                            />
                                            <button
                                                type="submit"
                                                class="position-absolute top-50 tw--translate-y-50 tw-end-0 text-main-two-600 tw-text-lg d-flex tw-me-5"
                                            >
                                                <i
                                                    class="ph-bold ph-magnifying-glass"
                                                ></i>
                                            </button>
                                        </form>
                                    </div>

                                    <div
                                        class="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize"
                                        >
                                            Categories
                                        </h5>
                                        <div
                                            class="d-flex flex-column tw-gap-6"
                                        >
                                            <a
                                                href="javascript:void(0)"
                                                class="d-flex align-items-center tw-gap-4 fw-medium text-heading hover-text-main-600"
                                            >
                                                <i
                                                    class="ph-bold ph-caret-left"
                                                ></i>
                                                Brochures & Catalogues
                                            </a>
                                            <a
                                                href="javascript:void(0)"
                                                class="d-flex align-items-center tw-gap-4 fw-medium text-heading hover-text-main-600"
                                            >
                                                <i
                                                    class="ph-bold ph-caret-left"
                                                ></i>
                                                Business Cards
                                            </a>
                                            <a
                                                href="javascript:void(0)"
                                                class="d-flex align-items-center tw-gap-4 fw-medium text-heading hover-text-main-600"
                                            >
                                                <i
                                                    class="ph-bold ph-caret-left"
                                                ></i>
                                                Calendars printing
                                            </a>
                                            <a
                                                href="javascript:void(0)"
                                                class="d-flex align-items-center tw-gap-4 fw-medium text-heading hover-text-main-600"
                                            >
                                                <i
                                                    class="ph-bold ph-caret-left"
                                                ></i>
                                                Design Online
                                            </a>
                                            <a
                                                href="javascript:void(0)"
                                                class="d-flex align-items-center tw-gap-4 fw-medium text-heading hover-text-main-600"
                                            >
                                                <i
                                                    class="ph-bold ph-caret-left"
                                                ></i>
                                                Flyers Design
                                            </a>
                                            <a
                                                href="javascript:void(0)"
                                                class="d-flex align-items-center tw-gap-4 fw-medium text-heading hover-text-main-600"
                                            >
                                                <i
                                                    class="ph-bold ph-caret-left"
                                                ></i>
                                                Folded Leaflets
                                            </a>
                                            <a
                                                href="javascript:void(0)"
                                                class="d-flex align-items-center tw-gap-4 fw-medium text-heading hover-text-main-600"
                                            >
                                                <i
                                                    class="ph-bold ph-caret-left"
                                                ></i>
                                                t-shirt printing
                                            </a>
                                            <a
                                                href="javascript:void(0)"
                                                class="d-flex align-items-center tw-gap-4 fw-medium text-heading hover-text-main-600"
                                            >
                                                <i
                                                    class="ph-bold ph-caret-left"
                                                ></i>
                                                Gift item printing
                                            </a>
                                        </div>
                                    </div>

                                    <div
                                        class="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize"
                                        >
                                            Filter By Price
                                        </h5>
                                        <!-- Slider start -->
                                        <div class="slider">
                                            <div class="progress"></div>
                                        </div>
                                        <div class="range-input">
                                            <input
                                                type="range"
                                                class="range-min"
                                                min="0"
                                                max="10000"
                                                value="2500"
                                                step="100"
                                            />
                                            <input
                                                type="range"
                                                class="range-max"
                                                min="0"
                                                max="10000"
                                                value="7500"
                                                step="100"
                                            />
                                        </div>
                                        <div
                                            class="tw-mt-6 d-flex align-items-center justify-content-between"
                                        >
                                            <div
                                                class="price-input d-flex align-items-center tw-gap-1"
                                            >
                                                <div class="field">
                                                    <input
                                                        type="number"
                                                        class="border-0 focus-outline-0 tw-w-11 text-neutral-600 input-min"
                                                        value="2500"
                                                    />
                                                </div>
                                                <span class="">-</span>
                                                <div class="field">
                                                    <input
                                                        type="number"
                                                        class="border-0 focus-outline-0 tw-w-11 text-neutral-600 input-max"
                                                        value="7500"
                                                    />
                                                </div>
                                            </div>
                                            <button
                                                type="button"
                                                class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-6 tw-py-305 tw-text-base fw-semibold tw-rounded-md"
                                                data-block="button"
                                            >
                                                <span
                                                    class="button__flair"
                                                ></span>
                                                <span class="button__label"
                                                    >Filter</span
                                                >
                                            </button>
                                        </div>
                                        <!-- Slider End -->
                                    </div>

                                    <div
                                        class="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize"
                                        >
                                            select by size
                                        </h5>
                                        <div
                                            class="d-flex flex-column tw-gap-3"
                                        >
                                            <div
                                                class="form-check common-check tw-gap-3"
                                            >
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="sizeOne"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="sizeOne"
                                                    >36"x80" (8)</label
                                                >
                                            </div>
                                            <div
                                                class="form-check common-check tw-gap-3"
                                            >
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="sizeTwo"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="sizeTwo"
                                                    >36"x96" (60)</label
                                                >
                                            </div>
                                            <div
                                                class="form-check common-check tw-gap-3"
                                            >
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="sizeThree"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="sizeThree"
                                                    >72"x80" (7)</label
                                                >
                                            </div>
                                            <div
                                                class="form-check common-check tw-gap-3"
                                            >
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="sizeFour"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="sizeFour"
                                                    >72"x96" (21)</label
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize"
                                        >
                                            Filter by Rating
                                        </h5>
                                        <div
                                            class="d-flex flex-column tw-gap-3"
                                        >
                                            <div
                                                class="form-check common-check tw-gap-3"
                                            >
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="starFive"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="starFive"
                                                >
                                                    <span
                                                        class="d-flex align-items-center tw-gap-2"
                                                    >
                                                        <span
                                                            class="d-flex align-items-center tw-gap-1"
                                                        >
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </span>
                                                        <span
                                                            class="text-neutral-600 fw-medium"
                                                            >( 5 Star )</span
                                                        >
                                                    </span>
                                                </label>
                                            </div>
                                            <div
                                                class="form-check common-check tw-gap-3"
                                            >
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="starFour"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="starFour"
                                                >
                                                    <span
                                                        class="d-flex align-items-center tw-gap-2"
                                                    >
                                                        <span
                                                            class="d-flex align-items-center tw-gap-1"
                                                        >
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </span>
                                                        <span
                                                            class="text-neutral-600 fw-medium"
                                                            >( 4 Star )</span
                                                        >
                                                    </span>
                                                </label>
                                            </div>
                                            <div
                                                class="form-check common-check tw-gap-3"
                                            >
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="starThree"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="starThree"
                                                >
                                                    <span
                                                        class="d-flex align-items-center tw-gap-2"
                                                    >
                                                        <span
                                                            class="d-flex align-items-center tw-gap-1"
                                                        >
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </span>
                                                        <span
                                                            class="text-neutral-600 fw-medium"
                                                            >( 3 Star )</span
                                                        >
                                                    </span>
                                                </label>
                                            </div>
                                            <div
                                                class="form-check common-check tw-gap-3"
                                            >
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="starTwo"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="starTwo"
                                                >
                                                    <span
                                                        class="d-flex align-items-center tw-gap-2"
                                                    >
                                                        <span
                                                            class="d-flex align-items-center tw-gap-1"
                                                        >
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </span>
                                                        <span
                                                            class="text-neutral-600 fw-medium"
                                                            >( 2 Star )</span
                                                        >
                                                    </span>
                                                </label>
                                            </div>
                                            <div
                                                class="form-check common-check tw-gap-3"
                                            >
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="starOne"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="starOne"
                                                >
                                                    <span
                                                        class="d-flex align-items-center tw-gap-2"
                                                    >
                                                        <span
                                                            class="d-flex align-items-center tw-gap-1"
                                                        >
                                                            <span
                                                                class="text-star text-main-600 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                            <span
                                                                class="text-star text-neutral-300 tw-text-base d-flex"
                                                                ><i
                                                                    class="ph-fill ph-star"
                                                                ></i
                                                            ></span>
                                                        </span>
                                                        <span
                                                            class="text-neutral-600 fw-medium"
                                                            >( 1 Star )</span
                                                        >
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="tw-px-8 tw-py-8 common-shadow-nineteen tw-rounded-lg"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <h5
                                            class="border-start border-2 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6 text-capitalize"
                                        >
                                            Popular tags
                                        </h5>
                                        <div class="d-flex tw-gap-3 flex-wrap">
                                            <a
                                                href="javascript:void(0)"
                                                class="bg-white tw-py-105 tw-px-4 border border-neutral-200 rounded-pill text-neutral-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block active-scale-09 text-capitalize flex-grow-1 tw-duration-200"
                                                >Sweat Shirt</a
                                            >
                                            <a
                                                href="javascript:void(0)"
                                                class="bg-white tw-py-105 tw-px-4 border border-neutral-200 rounded-pill text-neutral-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block active-scale-09 text-capitalize flex-grow-1 tw-duration-200"
                                                >Banner design</a
                                            >
                                            <a
                                                href="javascript:void(0)"
                                                class="bg-white tw-py-105 tw-px-4 border border-neutral-200 rounded-pill text-neutral-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block active-scale-09 text-capitalize flex-grow-1 tw-duration-200"
                                                >Brochure</a
                                            >
                                            <a
                                                href="javascript:void(0)"
                                                class="bg-white tw-py-105 tw-px-4 border border-neutral-200 rounded-pill text-neutral-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block active-scale-09 text-capitalize flex-grow-1 tw-duration-200"
                                                >Business Card</a
                                            >
                                            <a
                                                href="javascript:void(0)"
                                                class="bg-white tw-py-105 tw-px-4 border border-neutral-200 rounded-pill text-neutral-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block active-scale-09 text-capitalize flex-grow-1 tw-duration-200"
                                                >landing
                                            </a>
                                            <a
                                                href="javascript:void(0)"
                                                class="bg-white tw-py-105 tw-px-4 border border-neutral-200 rounded-pill text-neutral-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block active-scale-09 text-capitalize flex-grow-1 tw-duration-200"
                                                >Brochure</a
                                            >
                                            <a
                                                href="javascript:void(0)"
                                                class="bg-white tw-py-105 tw-px-4 border border-neutral-200 rounded-pill text-neutral-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block active-scale-09 text-capitalize flex-grow-1 tw-duration-200"
                                                >Tryptich Brochure</a
                                            >
                                            <a
                                                href="javascript:void(0)"
                                                class="bg-white tw-py-105 tw-px-4 border border-neutral-200 rounded-pill text-neutral-600 hover-text-white hover-bg-main-600 tw-text-sm fw-medium text-center d-inline-block active-scale-09 text-capitalize flex-grow-1 tw-duration-200"
                                                >Cap</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="">
                                    <!-- Top List Grid start -->
                                    <div
                                        class="border tw-rounded-lg border-neutral-200 tw-p-5 d-flex align-items-center justify-content-between flex-wrap tw-gap-4 tw-mb-6"
                                    >
                                        <div class="text-heading fw-bold">
                                            Showing
                                            <span class="text-main-600"
                                                >12</span
                                            >
                                            of 21 Results
                                        </div>

                                        <div
                                            class="d-flex align-items-center tw-gap-10"
                                        >
                                            <div
                                                class="d-flex align-items-center tw-gap-3"
                                            >
                                                <span
                                                    class="text-heading fw-bold"
                                                    >Sort by:</span
                                                >
                                                <div
                                                    class="d-flex align-items-center"
                                                >
                                                    <span
                                                        class="text-neutral-500"
                                                        ><i
                                                            class="ph-bold ph-arrows-down-up"
                                                        ></i
                                                    ></span>
                                                    <select
                                                        class="form-control form-select fw-semibold fw-semibold border-0 tw-ps-205 tw-pe-1 py-0 text-neutral-500 shadow-none"
                                                    >
                                                        <option value="Price">
                                                            Price
                                                        </option>
                                                        <option value="Sales">
                                                            Sales
                                                        </option>
                                                        <option
                                                            value="Published"
                                                        >
                                                            Published
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center tw-gap-4"
                                            >
                                                <button
                                                    type="button"
                                                    class="tw-text-2xl hover-text-main-600 tw-leading-none text-main-600 list-view-btn"
                                                >
                                                    <i
                                                        class="ph-bold ph-list-bullets"
                                                    ></i>
                                                </button>
                                                <button
                                                    type="button"
                                                    class="tw-text-2xl hover-text-main-600 tw-leading-none text-heading grid-view-btn"
                                                >
                                                    <i
                                                        class="ph-bold ph-squares-four"
                                                    ></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Top List Grid End -->

                                    <div class="row gy-4 product-item-wrapper">
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img1.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >Smart wireless
                                                            headphone</a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img2.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >Go pro hero action
                                                            camera</a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img3.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >Colorful apple
                                                            Ipad</a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img4.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >Humidifiler white
                                                            grow</a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img5.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >Apple Iphone 16
                                                            promax</a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img6.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >Go pro hero action
                                                            camera</a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img7.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >Apple smartwatch
                                                            series</a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img8.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >Instax pro camera
                                                            hero</a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img9.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >Macbook m1 cheap
                                                            pro</a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img10.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >VISION RAC Micro
                                                            Oven </a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img11.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >Folding Keayboard
                                                            display</a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div
                                                class="product-item group-item d-flex flex-column tw-gap-5 hover-common-shadow-four bg-white tw-pb-2 tw-rounded-2xl"
                                            >
                                                <div
                                                    class="product-item__thumb position-relative overflow-hidden d-block border border-neutral-200 tw-rounded-2xl tw-min-h-290-px d-flex justify-content-center align-items-center"
                                                >
                                                    <a
                                                        href="{{route('shop.details')}}"
                                                        class="d-block"
                                                    >
                                                        <img
                                                            src="{{asset('assets/images/thumbs/product-img12.png')}}"
                                                            alt="Product Thumbnail"
                                                            class="group-hover-item-scale-12 tw-duration-300"
                                                        />
                                                    </a>
                                                    <div
                                                        class="d-flex flex-column tw-gap-3 position-absolute top-0 tw-end-0 tw-mt-4 tw-me-4 translate-x-100-16 group-hover-item-translate-x-0 tw-duration-500"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-eye"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-star"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="tw-w-10 tw-h-10 bg-neutral-200 text-heading hover-bg-main-600 hover-text-white tw-text-lg d-flex justify-content-center align-items-center tw-rounded-md tw-duration-200 active-scale-09"
                                                        >
                                                            <i
                                                                class="ph-bold ph-arrows-down-up"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="position-absolute tw-start-0 bottom-0 tw-mb-4 tw-px-6 w-100 tw-scale-04 tw-invisible opacity-0 group-hover-item-opacity-1 group-hover-item-visible group-hover-item-scale-1 tw-duration-500"
                                                    >
                                                        <a
                                                            href="{{route('cart')}}"
                                                            class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-3 tw-py-305 tw-text-sm fw-semibold rounded-pill w-100"
                                                            data-block="button"
                                                        >
                                                            <span
                                                                class="button__flair"
                                                            ></span>
                                                            <span
                                                                class="button__label"
                                                                >Add To
                                                                Cart</span
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="product-item__content text-center tw-px-2"
                                                >
                                                    <div
                                                        class="d-inline-flex align-items-center tw-gap-1"
                                                    >
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-main-600 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            class="text-star text-neutral-300 tw-text-base d-flex"
                                                            ><i
                                                                class="ph-fill ph-star"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <h6
                                                        class="tw-text-base tw-my-205"
                                                    >
                                                        <a
                                                            href="{{route('shop.details')}}"
                                                            class=""
                                                            >Logitech Mouse
                                                            Havit</a
                                                        >
                                                    </h6>
                                                    <span
                                                        class="text-heading fw-medium"
                                                        >$112.00</span
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
                <!-- Shop end -->

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
