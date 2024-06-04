<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application as BaseApplication;

class IndexController extends Controller
{
    public function index(): Application|Factory|View|BaseApplication
    {
        return view('index');
    }

    public function employees(): Application|Factory|View|BaseApplication
    {
        return view('employees');
    }

    public function aboutUs(): Application|Factory|View|BaseApplication
    {
        return view('about-us');
    }

    public function services(): Application|Factory|View|BaseApplication
    {
        return view('services');
    }

    public function pricing(): Application|Factory|View|BaseApplication
    {
        return view('pricing');
    }

    public function contact(): Application|Factory|View|BaseApplication
    {
        return view('contact');
    }

    public function faq(): Application|Factory|View|BaseApplication
    {
        return view('faq');
    }

    public function privacyStatement(): Application|Factory|View|BaseApplication
    {
        return view('privacy-statement');
    }

    public function terms(): Application|Factory|View|BaseApplication
    {
        return view('terms');
    }
}
