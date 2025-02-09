<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOTools;

class HomePageController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Your Trusted Project Management and Consulting Partner');
        SEOTools::setDescription('At FireP, we are more than just project managers; we are your eyes and mind. From concept to completion, we ensure that every project is meticulously planned, executed, and delivered on time, within budget, and to your satisfaction.');

        return view('index');
    }

    public function about()
    {
        SEOTools::setTitle('Your Trusted Project Management and Consulting Partner');
        SEOTools::setDescription('At FireP, we are more than just project managers; we are your eyes and mind. From concept to completion, we ensure that every project is meticulously planned, executed, and delivered on time, within budget, and to your satisfaction.');

        return view('about');
    }

    public function contact()
    {
        SEOTools::setTitle('Get in touch with the right people at FireP.');
        SEOTools::setDescription('If you are requesting a reference please contact contact@firepl.com');

        return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {
        $messages = [
            'service.required' => 'Service is required.',
            'first_name.required' => 'First Name is required.',
            'last_name.required' => 'Last Name is required.',
            'job_title.required' => 'Job Title is required.',
            'company_name.required' => 'Company Name is required.',
            'industry.required' => 'Industry is required.',
            'email.required' => 'Valid email is required.',
            'phone_number.required' => 'Valid Phone Number is required.',
            'country.required' => 'Country is required.',
            'msg.required' => 'Please, leave us a message.',
        ];

        // Form validation
        $this->validate($request, [
            'service' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'job_title' => 'required',
            'company_name' => 'required',
            'industry' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'country'=>'required',
            'msg' => 'required'
         ], $messages);

        //  Store data in database
        Contact::create([
            'service' => $request->get('service'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'job_title' => $request->get('job_title'),
            'company_name' => $request->get('company_name'),
            'industry' => $request->get('industry'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'country'=> $request->get('country'),
            'msg' => $request->get('msg'),
        ]);

        //  Send mail to admin
        Mail::send('emails.contact', array(
            'service' => $request->get('service'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'job_title' => $request->get('job_title'),
            'company_name' => $request->get('company_name'),
            'industry' => $request->get('industry'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'country'=> $request->get('country'),
            'msg' => $request->get('msg'),
            'created_at' => now()
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('info@resourceindeed.com', 'Admin')->subject('Contact Form');
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

    public function faqs()
    {
        SEOTools::setTitle('Frequently Asked Questions (FAQs) | Get Answers to Common Queries');
        SEOTools::setDescription('Find answers to common questions about our services, pricing, policies, and more. Explore our FAQ section for quick and helpful solutions.');

        return view('faqs');
    }

    public function services()
    {
        SEOTools::setTitle('We’re here to turn your vision into reality, step by step.');
        SEOTools::setDescription('We specialize in a broad range of project management and consulting services, designed to meet the diverse needs of businesses, property developers, and organizations across various industries. Whether you’re constructing a new building, planning an event, or looking for expert advice on a technology initiative, we’ve got you covered.');

        return view('services');
    }
}
