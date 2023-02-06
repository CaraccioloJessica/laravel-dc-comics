<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class MainController extends Controller
{

  // index
  public function home()
  {

    $people = Person::orderBy('created_at', 'DESC')->get();

    return view('home', compact('people'));
  }

  // delete
  public function personDelete(Person $person)
  {

    $person->delete();

    return redirect()->route('home');
  }

  // create
  public function personCreate()
  {

    return view('personCreate');
  }

  // store
  public function personStore(Request $request)
  {

    $data = $request->all();

    $person = new Person();

    $person->firstName = $data['firstName'];
    $person->lastName = $data['lastName'];
    $person->dateOfBirth = $data['dateOfBirth'];
    $person->height = $data['height'];

    $person->save();

    return redirect()->route('home');
  }
}