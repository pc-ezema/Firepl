<!-- header begin -->
<header>
    <div class="uk-section uk-section-default uk-padding-remove-vertical uk-background-contain uk-background-top-left">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s in-top-header" data-uk-grid>
                <div class="uk-flex uk-flex-center uk-flex-left@s">
                    <a class="uk-logo" href="/">
                        <img src="{{URL::asset('img/firepl-logo.png')}}" data-src="{{URL::asset('img/firepl-logo.png')}}" alt="logo" width="130" height="36" data-uk-img>
                    </a>
                </div>
                <div class="uk-grid-collapse uk-flex uk-flex-middle uk-flex-right uk-visible@s" data-uk-grid>
                    <div class="uk-margin-right in-language-select uk-visible@m">
                        <button class="uk-button uk-button-link" type="button"><i class="fas fa-globe"></i>English</button>
                        <div class="uk-box-shadow-medium">
                        </div>
                    </div>
                    <div>
                        <h2 class="in-header-phone">1-800-123-4567</h2>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left uk-visible@m">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="/about-us" class="{{ (request()->is('about-us')) ? 'active' : '' }}">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="{{ (request()->is('/service*')) ? 'active' : '' }}">Our Services<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3">
                                <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                    <div>
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="/service/construction-project-management">Construction Project Management<i class="fas fa-square-arrow-up-right fa-sm"></i></a></li>
                                            <li><a href="/service/facility-management">Facility Management</a></li>
                                            <li><a href="/service/event-management">Event Management</a></li>
                                            <li><a href="/service/engineering-project-management">Engineering Project Management</a></li>
                                            <li><a href="/service/property-due-diligence">Property Due Diligence</a></li>
                                            <li><a href="/service/project-monitoring">Project Monitoring</a></li>
                                            <li><a href="/service/documentation-services">Documentation Services (Survey, CofO)</a></li>
                                            <li><a href="/service/information-technology">Information Technology Management<i class="fas fa-gavel fa-sm"></i></a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a class="uk-disabled" href="#">We specialize in a broad range of project management and consulting services, designed to meet the diverse needs of businesses, property developers, and organizations across various industries. Whether you’re constructing a new building, planning an event, or looking for expert advice on a technology initiative, we’ve got you covered.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="/contact-us" class="{{ (request()->is('contact-us')) ? 'active' : '' }}">Contact Us</a>
                        </li>
                        <li>
                            <a href="/faqs" class="{{ (request()->is('fqqs')) ? 'active' : '' }}">FAQs</a>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-right" data-logo-inverse="filename: img/firepl-logo.png; width: 70; height: 70; inject: true">
                    <div class="uk-navbar-item in-optional-nav">
                        <div>
                            <a href="/about-us#why-choose-us" class="uk-button uk-button-primary uk-border-rounded">Why Choose Us?</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- header end -->
