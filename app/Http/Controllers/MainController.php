<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class MainController extends Controller
{

  // index
  public function home()
  {

    $people = Person::all();

    return view('home', compact('people'));
  }

  // delete
  public function personDelete(Person $person)
  {

    $person->delete();

    return redirect()->route('home');
  }
}