@extends('layouts.frontend', ['title' => 'Managing Projects, Delivering Excellence.'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb')
@endsection

@section('page-content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="">
                <div class="accordion uk-accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button uk-accordion-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What services does {{config('app.name')}} offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{config('app.name')}} specializes in project management and consulting services, including:
                                <ul>
                                    <li>Construction Project Management</li>
                                    <li>Facility Management</li>
                                    <li>Event Management</li>
                                    <li>Engineering Project Management</li>
                                    <li>IT Project Management</li>
                                    <li>Property Due Diligence</li>
                                    <li>Project Monitoring</li>
                                    <li>Documentation Services (Survey, CofO)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button uk-accordion-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How does {{config('app.name')}} ensure successful project completion?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We meticulously plan, execute, and monitor each project to ensure timely completion within budget and to the highest standards. Our team manages risks, oversees stakeholders, and ensures quality control at every stage.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button uk-accordion-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What industries does {{config('app.name')}} serve?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{config('app.name')}} provides services to businesses, property developers, and organizations across various sectors, including construction, real estate, events, engineering, and technology.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button uk-accordion-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How does {{config('app.name')}} handle facility management?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our facility management services ensure properties are well-maintained, compliant with regulations, and fully functional, allowing businesses to focus on their core operations.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button uk-accordion-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What is {{config('app.name')}}’s approach to IT project management?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We manage IT projects from inception to deployment, ensuring seamless integration, system upgrades, and digital transformation to enhance business efficiency.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button uk-accordion-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How does {{config('app.name')}} assist with property due diligence?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We conduct in-depth property assessments, evaluating legal standing, physical conditions, and potential value, ensuring informed investment decisions.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button uk-accordion-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                What project monitoring services do you provide?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We provide real-time oversight of project progress, ensuring budget compliance and risk mitigation while keeping stakeholders informed.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button uk-accordion-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Can {{config('app.name')}} assist with legal documentation for properties?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we manage property documentation, including surveys and Certificates of Occupancy (CofO), ensuring all legal compliance and approvals.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button uk-accordion-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                What makes {{config('app.name')}} different from other project management firms?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{config('app.name')}} is more than just a project management firm—we act as your **eyes and mind**, ensuring every project is executed with precision, dedication, and a results-driven approach.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button uk-accordion-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                How can I get started with {{config('app.name')}}’s services?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can contact us via our website, email, or phone to schedule a consultation. We will discuss your needs and tailor a strategy to achieve your project goals.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
    /* Override Bootstrap's default accordion styles */
    .uk-accordion .accordion-button {
        background-color: #f8f9fa !important;
        /* Change background */
        color: #37474F !important;
        /* Change text color */
        font-weight: bold;
        /* Make text bold */
        border: none !important;
    }

    .uk-accordion .accordion-button:hover {
        background-color: #e0e0e0 !important;
        color: #60666A !important;
    }

    .uk-accordion .accordion-body {
        background-color: #ffffff !important;
        color: #444 !important;
        padding: 15px;
        border-top: 1px solid #ddd;
    }

    .uk-accordion .accordion-item {
        border: none !important;
        background: transparent !important;
        box-shadow: none !important;
    }

    .uk-accordion .accordion-button {
        border: none !important;
        background: transparent !important;
        box-shadow: none !important;
    }

    a {
        text-decoration: none !important;
    }
</style>
@endsection
