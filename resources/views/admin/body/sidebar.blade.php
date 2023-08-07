<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/.svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold">ALAA ELDIN</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Banner">Banner</div>
                {{-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> --}}
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.banner.view') ? 'active open' : '' }}">
                    <a href="{{ route('admin.banner.view') }}" class="menu-link">
                        <div data-i18n="Banner Edit">Banner Update</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('admin.banner.skills.icon.view') ? 'active open' : '' }}">
                    <a href="{{ route('admin.banner.skills.icon.view') }}" class="menu-link">
                        <div data-i18n="Banner Skills Icon">Banner Skills Icone</div>
                    </a>
                </li>

                <li
                    class="menu-item {{ request()->routeIs('admin.banner.social.media.icon.view') ? 'active open' : '' }}">
                    <a href="{{ route('admin.banner.social.media.icon.view') }}" class="menu-link">
                        <div data-i18n="Social Media Icons">Social Media Icons</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('admin_feature_card_view') ? 'active open' : '' }}">
                    <a href="{{ route('admin_feature_card_view') }}" class="menu-link">
                        <div data-i18n="Feature Cards">Feature Cards</div>
                    </a>
                </li>



            </ul>
        </li>


        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Features Card">Features Card</div>
                {{-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> --}}
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin_feature_card_view') ? 'active open' : '' }}">
                    <a href="{{ route('admin_feature_card_view') }}" class="menu-link">
                        <div data-i18n="Features Card">Features Card</div>
                    </a>
                </li>





            </ul>
        </li>



        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="My Portfolio">My Portfolio</div>
                {{-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> --}}
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin_my_portfolio_view') ? 'active open' : '' }}">
                    <a href="{{ route('admin_my_portfolio_view') }}" class="menu-link">
                        <div data-i18n="My Portfolio">My Portfolio</div>
                    </a>
                </li>
            </ul>
        </li>



        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="My Resume">My Resume</div>
                {{-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> --}}
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ request()->routeIs('admin_my_resume_education_job_view') ? 'active open' : '' }}">
                    <a href="{{ route('admin_my_resume_education_job_view') }}" class="menu-link">
                        <div data-i18n="Education / Job">Education / Job</div>
                    </a>
                </li>

                <li
                    class="menu-item {{ request()->routeIs('admin_my_resume_professional_skills_view') ? 'active open' : '' }}">
                    <a href="{{ route('admin_my_resume_professional_skills_view') }}" class="menu-link">
                        <div data-i18n="professional Skills">professional Skills</div>
                    </a>
                </li>

            </ul>
        </li>







        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Testimonial">Testimonial</div>
                {{-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> --}}
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin_testimonial_view') ? 'active open' : '' }}">
                    <a href="{{ route('admin_testimonial_view') }}" class="menu-link">
                        <div data-i18n="Testimonial">Testimonial</div>
                    </a>
                </li>



            </ul>
        </li>




        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Package Prices">Package Prices</div>

            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('view_admin_PricingPackage') ? 'active open' : '' }}">
                    <a href="{{ route('view_admin_PricingPackage') }}" class="menu-link">
                        <div data-i18n="Packages Titles">Packages Offer</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ request()->routeIs('view_admin_PricingPackageDetails') ? 'active open' : '' }}">
                    <a href="{{ route('view_admin_PricingPackageDetails') }}" class="menu-link">
                        <div data-i18n="Package Prices Details">Package Prices Details</div>
                    </a>
                </li>



                <li class="menu-item {{ request()->routeIs('view_admin_blogs') ? 'active open' : '' }}">
                    <a href="{{ route('view_admin_blogs') }}" class="menu-link">
                        <div data-i18n="Blogs">Blogs</div>
                    </a>
                </li>

            </ul>
        </li>




        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Contact">Contact</div>

            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin_ContactWithMe_view') ? 'active open' : '' }}">
                    <a href="{{ route('admin_ContactWithMe_view') }}" class="menu-link">
                        <div data-i18n="Contact With Me">Contact With Me</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('admin_ContactWithMeForm_view') ? 'active open' : '' }}">
                    <a href="{{ route('admin_ContactWithMeForm_view') }}" class="menu-link">
                        <div data-i18n="Contact With Me Form">Contact With Me Form</div>
                    </a>
                </li>

            </ul>
        </li>



        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="WebSite Setting">WebSite Setting</div>

            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin_WebSetting_view') ? 'active open' : '' }}">
                    <a href="{{ route('admin_WebSetting_view') }}" class="menu-link">
                        <div data-i18n="WebSite Setting">WebSite Setting</div>
                    </a>
                </li>

            </ul>
        </li>






    </ul>
</aside>
