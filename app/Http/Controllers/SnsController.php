<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnsController extends Controller
{
   public function index()
   {
      return view("sns.index");
   }
   public function login()
   {
      return view("sns.login");
   }
}
