<?php

class PagesController extends BaseController {

    public function index()
    {
        return View::make('site/home');
    }

    public function pricing()
    {
        return View::make('site/pricing');
    }

    public function testimonials()
    {
        return View::make('site/testimonials');
    }

    public function examples()
    {
        return View::make('site/examples');
    }

    public function about()
    {
        return View::make('site/about');
    }

    public function services()
    {
        return View::make('site/services');
    }

}