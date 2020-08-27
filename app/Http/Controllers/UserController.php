<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    //$title = 'Welcome To Laravel';
        return view('Pages.index', compact('title'));
        //return view('Pages.index')->with('title',$title);

    }

    public function about(){
        $title = 'About Us';
        return view('Pages.about')->with('title',$title);
    }

    public function landing(){
        $title = 'Landing';
        return view('Pages.landing')->with('title',$title);
    }

    public function home(){
        $titles = 'Home';
        return view('Pages.home')->with('title',$titles);
        //return view('Pages.home', compact('title'));
    }

    public function test(){
        $titles = 'test';
        return view('Pages.test')->with('title',$titles);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design','Programming','SEO']

        );
        return view('Pages.services')->with($data);
    }
}
