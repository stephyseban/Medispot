<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Request;

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

        return view('medicines.searchResult', compact('user'));
    }

    public function searchNearBy()
    {
        $request = Request::all();
        // select medicine
        // join shop
        // check distance

        $circle_radius = 3959 * 2;
        $max_distance = 1200;

        $lat = $request['lat'];
        $lon = $request['lon'];

        $shops = DB::select(
            'SELECT *  FROM
                 (SELECT *,
                 (' . $circle_radius . ' * acos(cos(radians(' . $lat . ')) * cos(radians(lat)) *
                 cos(radians(lon) - radians(' . $lon . ')) +
                 sin(radians(' . $lat . ')) * sin(radians(lat))))
                 AS distance
                 FROM users LEFT JOIN medicines on users.id = medicines.userid ) AS distances
             WHERE distance < ' . $max_distance . ' AND  "medicines.name" LIKE "%' . $request['search'] . '%"
             ORDER BY distance LIMIT 1;
        ');

        dd($shops);
    }
}
