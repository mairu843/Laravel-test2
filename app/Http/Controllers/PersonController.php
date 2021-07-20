<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        // $items = Person::all();
        return view('index.blade');
    }
    public function add(Request $request)
    {
        return view('thanks');
    }
    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $form = $request->all();
        Person::create($form);
        return redirect('/');
    }
}
