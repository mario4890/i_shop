<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Producers;

class GeneralController extends Controller {

    public function index() {
        
        return view('indexGeneral');
    }
    
    public function categories() {
        
        $categories         = new Categories();
        $allCategories      = $categories->getAll();
        $categoriesArray    = $allCategories['data']['categories'];
        
        return view('general', compact('categoriesArray'));
    }
    
    public function newProducers() {
        
        $producers          = new Producers();
        
        if (isset($_GET['send'])) {
            $allProducers   = $producers->createProducer($_GET['name'], $_GET['site_url'], $_GET['logo_filename']);
        }
        
        return view('newProducer');
    }
    
    public function getAllProducers() {
        
        $producers          = new Producers();        
        $allProducers       = $producers->getAllProducers();
        $producersArray     = $allProducers['data']['producers'];
        
        return view('allProducers', compact('producersArray'));
    }
}
