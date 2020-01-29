<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransferRequest;
use App\ContactUs;
use App\Course;
use App\Tutorial;
use Mail;

class PagesController extends Controller
{
    // This will display the home page
    public function index() {
        $courses = Course::take(3)->inRandomOrder()->get();
        $chapter_number = 1;
        return view('pages.index')->with([
            'courses'=> $courses,
            'chapter_number'=> $chapter_number
        ]);
    }

    // This will display the about page
    public function about(){
        return view('pages.about');
    }

    // This will display the services page
    public function services(){
        return view('pages.services');
    }

    // This will display the tutorials page
    public function tutorials(){
        $courses = Course::take(16)->inRandomOrder()->get();
        $chapter_number = 1;
        return view('pages.tutorials.main')->with([
            'courses'=> $courses,
            'chapter_number'=> $chapter_number
        ]);
    }

    // This will display the contact page
    public function contact(){
        return view('pages.contact');
    }

    // This will display the contact page
    public function store_contact_us(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact_message = new ContactUs;
        $contact_message->name = $request->input('name');
        $contact_message->phone = $request->input('phone');
        $contact_message->email = $request->input('email');
        $contact_message->message = $request->input('message');
        $contact_message->save();

        $data = array(
            'name'=>$request->get('name'),
            'phone'=>$request->get('phone'),
            'email'=>$request->get('email'),
            'messageBody'=>$request->get('message')
        );

        Mail::send('emails.contact_us',$data, function($message){
            $message->from('ayennew@gmail.com');// Needs Modification
            $message->to('contactlifelinetechs@gmail.com','Lifeline Technologies')->subject('Contact Us Message');
        });

        return back()->with('success','Thanks for contacting us!');

        // ContactUs::create($request->all());
    }
}
