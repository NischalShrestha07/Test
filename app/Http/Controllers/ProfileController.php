<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    // OOP=>Pbject oriented programming
    public function index()
    {
        return view('profile');
    }


    public function store(Request $request)
    {
        // return $request;
        // return "haha";


        $request->validate(
            [
                'name' => 'required|string|min:5',
                'age' => 'required|numeric|max:120',
                'fatherName' => 'required|string|min:5',
                'motherName' => 'required|string|min:5'
            ],
            // [
            //     'name.required' => 'taila data halinas ',
            //     'name.min' => 'taila 5 ota vanda kam letter halis',
            //     'age.numeric' => 'taila integer age halinas integer data chainxa'
            // ]
        );

        $profile = new Profile();
        $profile->name = $request->name;
        $profile->age = $request->age;
        $profile->fatherName = $request->fatherName;
        $profile->motherName = $request->motherName;
        $profile->save();

        return redirect()->route('user.index');
        // return redirect()->back();

        //create complete vayo

        // return "Validation Passed successfully.....";

    }
}
