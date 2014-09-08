<?php

class PagesController extends BaseController {

    /**
     * Service Model
     * @var Service
     */
    protected $service;

    /**
     * Inject the models.
     * @param Service $service
     */
    public function __construct(Service $service)
    {
        parent::__construct();

        $this->service = $service;
    }

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
        // Get all the services
        $services = $this->service->orderBy('created_at', 'DESC')->get();

        // Show the page
        return View::make('site/services', compact('services'));
    }

    public function contact()
    {
        return View::make('site/contact');
    }

}