<?php  

namespace App\Controllers;

class HomeController extends Controller{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
		$data['title'] = "Welcome!";
        $this->view->loadPage("home",$data);
    }
    
}