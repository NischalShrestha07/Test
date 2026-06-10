<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{



    public function index()
    {
        $users = Profile::all(); //ORM->Object Relation Mapping
        // return $users;
        return view('profileIndex', compact('users'));
    }

    // OOP=>Pbject oriented programming
    public function create()
    {
        return view('create');
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
        // $profile->name = $request->name;
        // $profile->age = $request->age;
        // $profile->fatherName = $request->fatherName;
        // $profile->motherName = $request->motherName;
        // $profile->save();

        $profile->create([
            'name' => $request->name,
            'age' => $request->age,
            'fatherName' => $request->fatherName,
            'motherName' => $request->motherName,
        ]);

        return redirect()->route('profile.index')->with('message', 'Profile Created Successfully....');
        // return redirect()->back();

        //create complete vayo

        // return "Validation Passed successfully.....";

    }


    public function show($id)
    {

        // return $id;

        $profile = Profile::find($id);
        // return $profile;

        return view('show', compact('profile'));
    }

    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        // return 'Update function call vayo.';
        // return $id;
        $request->validate([
            'name' => 'required|string|min:4',
            'age' => 'required|numeric|max:120',
            'fatherName' => 'required|string|min:4',
            'motherName' => 'required|string|min:4'
        ], [
            'name.required' => 'nam hal vai'
        ]);

        // return 'Valdiated successsfully./...';
        $profile = Profile::find($id);
        // $profile->name = $request->name;
        // $profile->age = $request->age;
        // $profile->fatherName = $request->fatherName;
        // $profile->motherName = $request->motherName;
        // $profile->save();

        $profile->update([
            'name' => $request->name,
            'age' => $request->age,
            'fatherName' => $request->fatherName,
            'motherName' => $request->motherName,
        ]);

        return redirect()->route('profile.index');
        // return $profile;
    }

    public function delete($id)
    {

        $haha = Profile::find($id);
        $haha->delete();

        return redirect()->route('profile.index')->with('message', 'Profile Deleted Sucessfully.');
        // return $haha;
    }
}
