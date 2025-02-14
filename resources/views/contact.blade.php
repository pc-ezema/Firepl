@extends('layouts.frontend', ['title' => 'Managing Projects, Delivering Excellence.'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb')
@endsection

@section('page-content')
	<main>
		<!-- section content begin -->
		<div class="uk-section in-contact-9">
			<div class="uk-container">
				<div class="uk-grid">
					<div class="uk-width-1-1">
						<h1 class="uk-margin-remove-bottom">Get In Touch</h1>
						<p class="uk-text-lead uk-text-muted uk-margin-small-top">Ready to get your project off the ground? Let’s start the conversation.</p>
						<div class="uk-card uk-card-default uk-border-rounded uk-margin-medium-top">
							<div class="uk-card-body">
								<div class="uk-grid-divider uk-child-width-1-3" data-uk-grid="">
									<div>
										<h5 class="uk-h6 uk-text-uppercase uk-margin-small-bottom">Email Us</h5>
										<div class="uk-flex">
											<span class="uk-label uk-label-success uk-border-pill uk-margin-small-right"><i class="fa fa-envelope"></i></span>
											<a href="mailto:ontact@firepl.com<" class="uk-text-small uk-text-primary">contact@firepl.com</a>
										</div>
									</div>
									<div>
										<h5 class="uk-h6 uk-text-uppercase uk-margin-small-bottom">Visit Us</h5>
										<div class="uk-flex">
											<span class="uk-label uk-label-success uk-border-pill uk-margin-small-right"><i class="fa fa-address-book"></i></span>
											<a href="mailto:#" class="uk-text-small uk-text-primary">132A, Akin Ogunlewe Road, Off Ligali Ayorinde, VI</a>
										</div>
									</div>
									<div>
										<h5 class="uk-h6 uk-text-uppercase uk-margin-small-bottom">Call Us</h5>
										<div class="uk-flex">
											<span class="uk-label uk-label-success uk-border-pill uk-margin-small-right"><i class="fa fa-phone"></i></span>
											<a href="mailto:#" class="uk-text-small uk-text-primary">+2347037734639</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="uk-grid uk-grid-large uk-margin-large-top" data-uk-grid="">
							<div class="uk-width-1-2@m">
                                <iframe class="uk-width-1-1 uk-height-large" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7506902479527!2d3.438543373992102!3d6.4260685935649615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf517c82e5f01%3A0x59be1272a9bb019!2sAkin%20Ogunlewe%20Rd%20%26%20Ligali%20Ayorinde%20St%2C%20Victoria%20Island%2C%20Lagos%20106104%2C%20Lagos!5e0!3m2!1sen!2sng!4v1739231180110!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
							<div class="uk-width-1-2@m">
								<h3>Drop Us a line</h3>
								<form id="contact-form" class="uk-form uk-grid-small uk-margin-bottom" data-uk-grid="">
									<div class="uk-width-2-3">
										<input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="Full name">
									</div>
									<div class="uk-width-2-3">
										<input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Email address">
									</div>
									<div class="uk-width-2-3">
										<input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="Subject">
									</div>
									<div class="uk-width-1-1">
										<textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
									</div>
									<div class="uk-width-1-1">
										<button class="uk-button uk-button-primary uk-border-rounded" id="sendemail" type="submit" name="submit">Send Message</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
	</main>
@endsection
