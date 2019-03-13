<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\News;
use Auth;
use Flashy;
use Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['viewNews']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $medicines = Medicine::where('userid', Auth::user()->id)->paginate(10);
        return view('home', compact('medicines'));
    }

    public function addMedicine()
    {
        return view('medicines.addMedicine');
    }

    public function storeMedicine()
    {
        $req = Request::all();
        $req['userid'] = Auth::user()->id;
        Medicine::create($req);
        return redirect('home');
    }

    // edit  medicine//
    public function editMedicine($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('medicines.editMedicine', compact('medicine'));
    }

    /*
     * Update medicine
     */
    public function updateMedicine($id)
    {
        $medicine = Medicine::findOrFail($id);
        $req = Request::all();
        $medicine->update($req);
        Flashy::message('Message updated successfully!!!');
        return redirect('/home');
    }

    public function deleteMedicine($id)
    {
        $medicine = Medicine::findOrFail($id);
        $medicine->delete();
        Flashy::message("Message removed successfully!!!!");
        return redirect('/home');
    }

    // news view  to user
    public function viewNews()
    {
        $news = News::all();
        return view('medicines.newsView', compact('news'));
    }

    
}
