<!-- Overlay Start -->
<div class="overlay"></div>
<!-- Overlay End -->

<!-- Sidebar Overlay End -->
<div class="side-overlay"></div>
<!-- Sidebar Overlay End -->

<!-- Custom Toast Message start -->
<div id="toast-container"></div>
<!-- Custom Toast Message End -->

<!--  Scroll to Top End Here  -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Scroll to Top End Here -->

<!-- Custom Cursor Start -->
<div class="cursor"></div>
<span class="dot"></span>
<!-- Custom Cursor End -->

<!-- Mobile Menu Start Here -->
<div
    class="mobile-menu d-lg-none d-block scroll-sm position-fixed bg-white tw-w-300-px tw-h-screen overflow-y-auto tw-p-6 tw-z-999 tw--translate-x-full tw-pb-68 ">

    <button type="button"
        class="close-button position-absolute tw-end-0 top-0 tw-me-2 tw-mt-2 tw-w-605 tw-h-605 rounded-circle d-flex justify-content-center align-items-center text-neutral-900 bg-neutral-200 hover-bg-neutral-900 hover-text-white">
        <i class="ph ph-x"></i>
    </button>

    <div class="mobile-menu__inner">
        <a href="{{route('home')}}" class="mobile-menu__logo">
            <img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav menu Start -->
            <ul class="nav-menu d-lg-flex align-items-center nav-menu--mobile d-block tw-mt-8">
                <li class="nav-menu__item">
                    <a href="{{ route('home') }}"
                        class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100">Home</a>
                </li>
                <li class="nav-menu__item has-submenu position-relative">
                    <a href="javascript:void(0)"
                        class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Pages</a>
                    <ul
                        class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('pricing')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('about')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                About Us
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('app.intigration')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                App Integration
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('intigration.details')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                Integration Details
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('policy.privacy')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                Privacy Policy
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('faq')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                FAQ
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('project.details')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                Project Details
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('service.details')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                Service Details
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item has-submenu position-relative">
                    <a href="javascript:void(0)"
                        class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Shop</a>
                    <ul
                        class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('shop')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                Shop
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('shop.details')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                Shop Details
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('cart')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                Cart
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('checkout')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                Checkout
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item has-submenu position-relative">
                    <a href="javascript:void(0)"
                        class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Blog</a>
                    <ul
                        class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('blog')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                Blog
                            </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="{{route('blog.details')}}"
                                class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                Blog Details
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item">
                    <a href=""
                        class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100">Contact</a>
                </li>
            </ul>
            <!-- Nav menu End -->

        </div>
        <a href="{{route('register')}}"
            class="btn btn-main-two hover-style-two button--stroke d-sm-none d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-8 rounded-pill tw-mt-6"
            data-block="button">
            <span class="button__flair"></span>
            <span class="button__label">Sign Up Now</span>
        </a>
    </div>
</div>
<!-- Mobile Menu End Here -->
