<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  public function about()
  {
    $first = 'Anton';
    $last = 'Halim';

    $things = [];
    return view('pages.about', compact('first', 'last', 'things'));
  }

  public function contact()
  {
    return view('pages.contact');
  }

  public function basic()
  {
    return view('pages.basic');
  }
  public function welcome()
  {
    return view('welcome');
  }
}
