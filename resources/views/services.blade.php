@extends('layouts.frontend', ['title' => 'Managing Projects, Delivering Excellence.'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb')
@endsection

@section('page-content')
<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
                <div class="uk-width-1-1">
                    <h1 class="uk-margin-remove-top uk-margin-small-bottom">Our Services</h1>
                    <h3 class="uk-text-light uk-margin-remove">We’re here to turn your vision into reality, step by step.</h3>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-green">
                        <div class="in-icon-wrap circle uk-margin-medium-bottom">
                            <i class="fas fa-hard-hat fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="#">Construction Project Management<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>
                            From groundbreaking to ribbon-cutting, we handle all aspects of your construction project with precision.
                            Our experts oversee timelines, budgets, quality control, and contractor coordination to ensure your project is built on time and to the highest standards.
                        </p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-blue">
                        <div class="in-icon-wrap circle uk-margin-medium-bottom">
                            <i class="fas fa-building fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="#">Facility Management<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>We provide comprehensive facility management services that enhance the functionality and longevity of your properties.
                            Our team ensures that your buildings are well-maintained, safe, and compliant with all regulations, enabling you to focus on your core business.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-purple">
                        <div class="in-icon-wrap circle uk-margin-medium-bottom">
                            <i class="fas fa-calendar-check fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="#">Event Management<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Planning and executing an event can be a daunting task. Our event management team handles every detail—from logistics and vendor coordination ensuring your event runs smoothly and exceeds expectations.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-navy">
                        <div class="in-icon-wrap circle uk-margin-medium-bottom">
                            <i class="fas fa-cogs fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="#">Engineering Project Management<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Our team has extensive experience in managing engineering projects across various sectors. We ensure that all engineering solutions are delivered on time, within scope, and are fully aligned with the project objectives.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-grey">
                        <div class="in-icon-wrap circle uk-margin-medium-bottom">
                            <i class="fas fa-laptop-code fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="#">IT Project Management<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Technology is an integral part of modern business, and we provide expert IT project management services. Whether you're upgrading systems, implementing new software, or overseeing digital transformation, we manage the complexities of IT projects to ensure seamless integration and optimal outcomes.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-orange">
                        <div class="in-icon-wrap circle uk-margin-medium-bottom">
                            <i class="fas fa-search-location fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="#">Property Due Diligence<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Before making any property investment, it's crucial to ensure it meets your expectations and requirements. We provide thorough due diligence services to assess the condition, legal standing, and potential of properties, helping you make informed decisions.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-teal">
                        <div class="in-icon-wrap circle uk-margin-medium-bottom">
                            <i class="fas fa-tasks fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="#">Project Monitoring<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Our project monitoring services offer real-time oversight of your projects to ensure progress aligns with planned schedules and budgets. We identify risks early and implement corrective actions to keep everything on track.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-black">
                        <div class="in-icon-wrap circle uk-margin-medium-bottom">
                            <i class="fas fa-file-signature fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="#">Documentation Services<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>We handle the processing of all the essential title documents including surveys and Certificates of Occupancy (CofO), ensuring that your projects meet all legal requirements and are ready for approval.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-card-16">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                        <div class="uk-grid uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-expand@m">
                                <h3>Ready to get your project off the ground? Let’s start the conversation.</h3>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-button uk-button-primary uk-border-rounded" href="/contact-us">Talk With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
@endsection
