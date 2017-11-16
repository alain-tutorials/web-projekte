<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index()
   {
      $title = 'Welcome to Laravel';
   	return view('pages.index')->with('title',$title);
   }

   public function about()
   {
      $title = 'About Us';
   	return View('pages.about')->with('title',$title);
   }

   public function services()
   {
      $data = [
         'title' => 'Services',
         'services' => ['Web Design', 'Programming', 'SEO']
      ];
      /**
       *  La methode compact compact('data') permet d´acceder au 
       *  tableau associatif directement
       *  return View('pages.services', compact('data'));
       *  tandis que ->with($data) est pratique pour les elements 
       *  du tableau
       */
         return View('pages.services')->with($data);
   }
}
