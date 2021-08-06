<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;

use Spatie\Activitylog\Models\Activity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $users = User::get();
        $posts = Post::get();
        $activitiesall = Activity::get();
        $activities = Activity::latest()->take(5)->get();
        return view('dashboard', compact('users', 'posts', 'activitiesall', 'activities'));
    }
}
