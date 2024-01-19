<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Blog;
use App\Service;
use App\Team;
use App\Team_task;
use App\Testimonial;
use App\User;
use App\Washing_plan;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        $u_count = User::count();
        $teams = Team::count();
        $washing_plan = Washing_plan::count();
        $team_task = Team_task::count();
        $appointment = Appointment::count();
        $services = Service::count();
        $blogs = Blog::count();
        $testimonials = Testimonial::count();

        return view('admin.index', ['users' => $users, 'u_count' => $u_count, 'teams' => $teams, 'washing_plan' => $washing_plan, 'team_task' => $team_task, 'appointment' => $appointment, 'services' => $services, 'blogs' => $blogs, 'testimonials' => $testimonials]);
    }
}
