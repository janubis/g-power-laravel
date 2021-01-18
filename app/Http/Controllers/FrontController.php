<?php

namespace App\Http\Controllers;

use Auth;

use App\News;
use App\Project;
use App\General;
use App\Team;
use App\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
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

    public function index()
    {
        //return view('undercons');
        $data['cookielanguage'] = Cookie::get('language');
        //dd(Cookie::get('language'));
        //$data['cookielanguage'] = $request->cookie('language');
        $data['general'] = General::findOrFail(1);
        $data['generalmn'] = General::findOrFail(2);
        $data['projects'] = Project::orderBy('id','desc')->paginate(100);
        $data['projects_operation'] = Project::where('category', '=', 'operation')->orderBy('delivered_date','desc')->paginate(100);
        $data['news'] = News::where('language', '=', 'eng')->orderBy('id','desc')->paginate(3);
        $data['newsmn'] = News::where('language', '=', 'mon')->orderBy('id','desc')->paginate(3);
        $data['contactInfo'] = DB::table('contacts')->first();
        
        $summapdata = 0;
        foreach ($data['projects'] as $eachdata1) {
            $summapdata = $summapdata + floatval($eachdata1->capacity);
        }

        $sumproj = Project::count();
        $sumpanel = 0;
        $sumyield = 0;
        $sumcapacity = 0;
        foreach ($data['projects_operation'] as $eachdata2) {
            $sumpanel = $sumpanel + floatval($eachdata2->panel_count);
            $sumyield = $sumyield + floatval($eachdata2->yield_forecast);
            $sumcapacity = $sumcapacity + floatval($eachdata2->capacity);
        }
        $data['summapdata'] = $summapdata;
        $data['sumproj'] = $sumproj;
        $data['sumpanel'] = $sumpanel;
        $data['sumyield'] = $sumyield;
        $data['sumcapacity'] = $sumcapacity;

        //dd($test);

        return view('index', $data);
    }
    
    public function teams()
    {
        $data['general'] = General::findOrFail(1);
        $data['generalmn'] = General::findOrFail(2);
        $data['teams'] = Team::orderBy('id','desc')->paginate(10);
        return view('teams', $data);
    }

    public function about()
    {
        $data['projects'] = Project::orderBy('id','desc')->paginate(100);
        $data['projects_operation'] = Project::where('category', '=', 'operation')->orderBy('delivered_date','desc')->paginate(100);
        $summapdata = 0;
        foreach ($data['projects'] as $eachdata1) {
            $summapdata = $summapdata + floatval($eachdata1->capacity);
        }
        $sumprojepc = Project::where('category', '=', 'operation')->count();
        $sumprojconsult = Project::where('category', '=', 'consulting')->count();
        $sumprojresearch = Project::where('category', '=', 'research')->count();
        $sumproj = Project::count();
        $sumpanel = 0;
        $sumyield = 0;
        $sumcapacity = 0;
        foreach ($data['projects_operation'] as $eachdata2) {
            $sumpanel = $sumpanel + floatval($eachdata2->panel_count);
            $sumyield = $sumyield + floatval($eachdata2->yield_forecast);
            $sumcapacity = $sumcapacity + floatval($eachdata2->capacity);
        }
        $data['summapdata'] = $summapdata;
        $data['sumproj'] = $sumproj;
        $data['sumprojepc'] = $sumprojepc;
        $data['sumprojconsult'] = $sumprojconsult;
        $data['sumprojresearch'] = $sumprojresearch;
        $data['sumpanel'] = $sumpanel;
        $data['sumyield'] = $sumyield;
        $data['sumcapacity'] = $sumcapacity;

        $data['testimonials'] = Testimonial::orderBy('id','desc')->paginate(5);
        $data['general'] = General::findOrFail(1);
        $data['generalmn'] = General::findOrFail(2);
        return view('about', $data);
    }

    public function contact()
    {
        $data['general'] = General::findOrFail(1);
        $data['generalmn'] = General::findOrFail(2);
        $data['contactInfo'] = DB::table('contacts')->first();
        return view('contact', $data);
    }
    public function saveContact(Request $request) { 
        $data['general'] = General::findOrFail(1);
        $data['generalmn'] = General::findOrFail(2);
        $data['contactInfo'] = DB::table('contacts')->first();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        \Mail::send('contact_email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => 'Email come from CONTACT FORM',
            'phone_number' => $request->get('phone_number'),
            'user_message' => $request->get('message'),
        ), function($message) use ($request)
            {
               $message->from($request->email);
               $message->to('contact@g-power.mn');
            });
        
        return view('contact', $data);

    }

    public function projects()
    {
        $data['projects'] = Project::orderBy('delivered_date','desc')->paginate(100);
        $data['projects_operation'] = Project::where('category', '=', 'operation')->orderBy('delivered_date','desc')->paginate(100);
        $summapdata = 0;
        foreach ($data['projects'] as $eachdata1) {
            $summapdata = $summapdata + floatval($eachdata1->capacity);
        }
        $sumprojepc = Project::where('category', '=', 'operation')->count();
        $sumprojconsult = Project::where('category', '=', 'consulting')->count();
        $sumprojresearch = Project::where('category', '=', 'research')->count();
        $sumproj = Project::count();
        $sumpanel = 0;
        $sumyield = 0;
        $sumcapacity = 0;
        foreach ($data['projects_operation'] as $eachdata2) {
            $sumpanel = $sumpanel + floatval($eachdata2->panel_count);
            $sumyield = $sumyield + floatval($eachdata2->yield_forecast);
            $sumcapacity = $sumcapacity + floatval($eachdata2->capacity);
        }
        $data['summapdata'] = $summapdata;
        $data['sumproj'] = $sumproj;
        $data['sumprojepc'] = $sumprojepc;
        $data['sumprojconsult'] = $sumprojconsult;
        $data['sumprojresearch'] = $sumprojresearch;
        $data['sumpanel'] = $sumpanel;
        $data['sumyield'] = $sumyield;
        $data['sumcapacity'] = $sumcapacity;

        $data['general'] = General::findOrFail(1);
        $data['generalmn'] = General::findOrFail(2);
        $data['projects'] = Project::orderBy('id','desc')->paginate(100);
        return view('projects', $data);
    }

    public function singleProjects($key)
    {
        $data['general'] = General::findOrFail(1);
        $data['generalmn'] = General::findOrFail(2);
        $data['currentproject'] = Project::findOrFail($key);
        $data['gallery']=json_decode($data['currentproject']->gallery);
        //$data['gallery'] = $data['currentproject']->items()->get();
        return view('portfolio-single', $data);
    }

    public function news()
    {
        $data['general'] = General::findOrFail(1);
        $data['generalmn'] = General::findOrFail(2);
        $data['news'] = News::where('language', '=', 'eng')->orderBy('id','desc')->paginate(10);
        $data['newsmn'] = News::where('language', '=', 'mon')->orderBy('id','desc')->paginate(10);
        return view('news',$data);
    }

    public function singleNews($key)
    {
        $data['general'] = General::findOrFail(1);
        $data['generalmn'] = General::findOrFail(2);
        $data['currentnews'] = News::findOrFail($key);
        $data['othernews'] = News::where('language', '=', 'eng')->orderBy('id','desc')->paginate(4);
        $data['othernewsmn'] = News::where('language', '=', 'mon')->orderBy('id','desc')->paginate(4);
        //dd($Post);
        return view('news-single', $data);
    }
    
}
