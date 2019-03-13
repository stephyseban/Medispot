<?php

namespace App\Http\Controllers;

use App\User;

class PageController extends Controller
{

    public function search()
    {

        $users = User::all();
        return view('medicines.searchView', compact('users'));

    }

    public function searchResult($id)
    {
        $user = User::findOrFail($id);
        // $medicines = Medicines::where('userid', $user->id)->get();
        return view('medicines.searchResult', compact('user'));
    }

}
