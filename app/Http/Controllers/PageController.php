<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\User;
use DB;
use Flashy;
use Illuminate\Support\Facades\Input;
use Request;

class PageController extends Controller
{

    public function search()
    {

        $users = User::all();

        return view('medicines.searchView', compact('users '));

    }

    public function searchResult($id)
    {
        $user = User::findOrFail($id);

        $search = Input::get('q');
        $medicine = '';

        $medicine = Medicine::where('name', 'LIKE', '%' . $search . '%')->where('userid', $id)->get();
        $medicine = Medicine::where('userid', $id)->paginate(1);

        return view('medicines.searchResult', compact('user', 'search', 'medicine'));
    }

    public function searchNearBy()
    {

        $request = Request::all();
        $circle_radius = 3959 * 2;
        $max_distance = 1200;
        $lat = $request['lat'];
        $lon = $request['lon'];

        try {
            $shops = DB::select('SELECT *  FROM
        (SELECT users.id,medicines.name,shopname,location,
        (' . $circle_radius . ' * acos(cos(radians(' . $lat . ')) * cos(radians(lat)) *
        cos(radians(lon) - radians(' . $lon . ')) +
        sin(radians(' . $lat . ')) * sin(radians(lat))))
        AS distance
        FROM users LEFT JOIN medicines on users.id = medicines.userid ) AS distances
    WHERE distance < ' . $max_distance . ' AND name LIKE "%' . $request['search'] . '%"
    ORDER BY distance ASC;
');

        } catch (\Exception $e) {
            Flashy::error('Geolocation is not supported by this browser.');
            return redirect('/');
        }
        $search = $request['search'];
        return view('medicines.searchView', compact('shops', 'search'));
    }
}
