<?php

namespace App\Http\Controllers;

use Auth;

use App\News;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //home, teams, about, contact, projects, singleProjects, news, singleNews
    public function index()
    {
        //return view('undercons');
        return view('index');
    }
    public function home()
    {
        //return view('undercons');
        return view('index');
    }
    public function home()
    {
        return view('undercons');
        //return view('index');
    }

    public function teams()
    {
        return view('index');
    }

    public function about()
    {
        return view('index');
    }

    public function contact()
    {
        $contactInfo = DB::table('contacts')->first();
        return view('contact')->with('contactInfo', $contactInfo);
    }
    public function saveContact(Request $request) { 

        $contactInfo = DB::table('contacts')->first();

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        $contact = new ContactInformation;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = 'contact form fill from website';
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;

        $contact->save();

        /* \Mail::send('contact_email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => 'Email come from CONTACT FORM',
            'phone_number' => $request->get('phone_number'),
            'user_message' => $request->get('message'),
        ), function($message) use ($request)
            {
               $message->from($request->email);
               $message->to('r.javkhlan@gmail.com');
            });
        */
        return view('contact')->with('contactInfo', $contactInfo);

    }

    public function projects()
    {
        return view('index');
    }

    public function singleProjects()
    {
        return view('index');
    }

    public function news()
    {
        $data['news'] = News::orderBy('id','desc')->paginate(10);
        return view('news',$data);
    }

    public function singleNews()
    {
        return view('news-single');
    }
    
}
