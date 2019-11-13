<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
        {
            $title = 'Welcome to index page!!!';
            return view ('pages.index')->with('title', $title);
        }


        public function menu()
        {

            $data=array(
                'title' => 'This is Services Page',
                'services' => ['Web Design', 'Programming', 'SEO']
            );
            return view ('pages.menu')-> with( $data);        
        }

        public function about()
        {
            $data=array(
                'title' => 'This is Services Page',
                'services' => ['Web Design', 'Programming', 'SEO']
            );
            return view ('pages.about')-> with( $data);
        }


        public function gallery()
        {

            $data=array(
                'title' => 'This is Services Page',
                'services' => ['Web Design', 'Programming', 'SEO']
            );
            return view ('pages.gallery')-> with( $data);        
        }
    
        public function contact()
        {

            $data=array(
                'title' => 'This is Services Page',
                'services' => ['Web Design', 'Programming', 'SEO']
            );
            return view ('pages.contact')-> with( $data);        
        }


        public function blog()
        {

            $data=array(
                'title' => 'This is Services Page',
                'services' => ['Web Design', 'Programming', 'SEO']
            );
            return view ('pages.blog')-> with( $data);        
        }
    //
}
