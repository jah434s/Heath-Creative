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
        $page = 'home';
        View::share('page', $page);
        
        return View::make('site/home');
    }

    public function testimonials()
    {
        $page = 'testimonials';
        View::share('page', $page);

        return View::make('site/testimonials');
    }

    public function examples()
    {
        $page = 'examples';
        View::share('page', $page);
        
        return View::make('site/examples');
    }

    public function about()
    {
        $page = 'about';
        View::share('page', $page);
        
        return View::make('site/about');
    }

    public function services()
    {
        // Get all the services
        $services = $this->service->orderBy('created_at', 'DESC')->get();
        
        $page = 'services';
        View::share('page', $page);

        // Show the page
        return View::make('site/services', compact('services'));
    }

    public function contact()
    {
        $page = 'contact';
        View::share('page', $page);
        
        return View::make('site/contact');
    }

}