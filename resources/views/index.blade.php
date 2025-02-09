@extends('layouts.frontend', ['title' => 'Managing Projects, Delivering Excellence.'])

@section('page-content')
<main>

    @section('banner')
    @includeIf('layouts.banner')
    @endsection

    <div class="uk-section uk-section-secondary uk-padding-small in-ticker-prices">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                </div>
            </div>
        </div>
    </div>
    <!-- section content begin -->
    <div class="uk-section uk-padding-remove-vertical in-fina-2">
        <div class="uk-container uk-background-contain" style="background-image: url(img/in-fina-2-bg.png);">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-width-2-4@s">
                    <div class="uk-grid-match uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
                        <div class="uk-width-1-1 uk-margin-bottom">
                            <h1 class="uk-margin-remove-top uk-margin-small-bottom">Welcome To {{config('app.name')}}</h1>
                            <h3 class="uk-margin-remove uk-text-light">Your Trusted Project Management and Consulting Partner</h3>
                            <p>At {{config('app.name')}}, we are more than just project managers; we are your eyes and mind. <br> From concept to completion, we ensure that every project is meticulously planned, <br> executed, and delivered on time, within budget, and to your satisfaction.</p>
                        </div>
                        <div>
                            <a class="uk-link-reset" href="#">
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-green">
                                    <h6 class="uk-margin-remove uk-text-uppercase">Construction Project Management</h6>
                                    <p class="uk-margin-small-top">From groundbreaking to ribbon-cutting, we handle all aspects of your construction project with precision.</p>
                                    <i class="fas fa-chevron-right uk-float-right uk-position-bottom-right"></i>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="uk-link-reset" href="#">
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-blue">
                                    <h6 class="uk-margin-remove uk-text-uppercase">Facility Management</h6>
                                    <p class="uk-margin-small-top">We provide comprehensive facility management services that enhance the functionality and longevity of your properties.</p>
                                    <i class="fas fa-chevron-right uk-float-right uk-position-bottom-right"></i>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="uk-link-reset" href="#">
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-purple">
                                    <h6 class="uk-margin-remove uk-text-uppercase">Event Management</h6>
                                    <p class="uk-margin-small-top">We handles every detail—from logistics and vendor coordination ensuring your event runs smoothly and exceeds expectations.</p>
                                    <i class="fas fa-chevron-right uk-float-right uk-position-bottom-right"></i>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="uk-link-reset" href="#">
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-navy">
                                    <h6 class="uk-margin-remove uk-text-uppercase">Engineering Project Management</h6>
                                    <p class="uk-margin-small-top">Our team has extensive experience in managing engineering projects across various sectors.</p>
                                    <i class="fas fa-chevron-right uk-float-right uk-position-bottom-right"></i>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="uk-link-reset" href="#">
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-grey">
                                    <h6 class="uk-margin-remove uk-text-uppercase">Information Technology Management</h6>
                                    <p class="uk-margin-small-top">Technology is an integral part of modern business, and we provide expert IT project management services.</p>
                                    <i class="fas fa-chevron-right uk-float-right uk-position-bottom-right"></i>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="uk-link-reset" href="#">
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-orange">
                                    <h6 class="uk-margin-remove uk-text-uppercase">Property Due Diligence</h6>
                                    <p class="uk-margin-small-top">We provide thorough due diligence services to assess the condition, legal standing, and potential of properties, helping you make informed decisions.</p>
                                    <i class="fas fa-chevron-right uk-float-right uk-position-bottom-right"></i>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="uk-link-reset" href="#">
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-orange">
                                    <h6 class="uk-margin-remove uk-text-uppercase">Project Monitoring</h6>
                                    <p class="uk-margin-small-top">Our project monitoring services offer real-time oversight of your projects to ensure progress aligns with planned schedules and budgets.</p>
                                    <i class="fas fa-chevron-right uk-float-right uk-position-bottom-right"></i>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="uk-link-reset" href="#">
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-orange">
                                    <h6 class="uk-margin-remove uk-text-uppercase">Documentation Services (Survey, CofO)</h6>
                                    <p class="uk-margin-small-top">We handle the processing of all the essential title documents including surveys and Certificates of Occupancy (CofO), ensuring that your projects meet all legal requirements and are ready for approval.</p>
                                    <i class="fas fa-chevron-right uk-float-right uk-position-bottom-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-section-primary in-fina-8 uk-padding-large">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-1-1 uk-width-3-4@m uk-text-center">
                    <div class="uk-flex uk-flex-middle in-flex-responsive">
                        </div>
                        <div>
                            <h2 class="uk-text-center uk-margin-remove-top uk-margin-bottom">We’re here to turn your vision into reality, <br> step by step.</h2>
                            <p class="uk-text-lead uk-margin-remove" style="color: #fff !important;">We specialize in a broad range of project management and consulting services, designed to meet the diverse needs of businesses,
                                property developers, and organizations across various industries. Whether you’re constructing a new building, planning an event,
                                or looking for expert advice on a technology initiative, we’ve got you covered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section in-fina-4">
        <div class="uk-container">
            <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin-bottom" data-uk-grid>
                <div class="uk-width-1-1 uk-margin-small-bottom">
                    <h2 class="uk-text-center">Our Partnerships</h2>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <i class="fas fa-book"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove uk-text-secondary uk-text-uppercase">Real Estate Companies</h6>
                                <p class="uk-margin-small-top uk-text-small">We assist real estate firms with project planning, execution, and management, ensuring properties are developed efficiently and within budget.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove uk-text-secondary uk-text-uppercase">Facility Management Companies</h6>
                                <p class="uk-margin-small-top uk-text-small">We collaborate with facility management companies to ensure the smooth operation of commercial and residential properties.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light">
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <i class="fas fa-calculator"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove uk-text-secondary uk-text-uppercase">Consultation for Effect Management</h6>
                                <p class="uk-margin-small-top uk-text-small">Our consultancy services extend to advising management companies on how to streamline processes and improve operational efficiency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-section-default in-fina-5 in-offset-bottom-40 uk-background-contain uk-background-top-right" style="background-image: url(img/in-fina-5-bg.png);">
        <div class="uk-container">
            <div class="uk-width-3-4@m">
                <p class="uk-text-lead uk-margin-small-top">We work closely with real estate companies, facility management firms, and various other industry leaders to deliver successful projects.</p>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
@endsection
