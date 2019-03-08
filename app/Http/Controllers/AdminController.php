<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\News;
use App\User;
use Flashy;
use Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function verifyAdmin()
    {
        if (Auth::user()->isAdmin == 0) {
            dd(exit);
        }

    }
//----------------medicine controll details for admin
    public function medicine_shop($id)
    {
        $medicines = Medicine::where('userid', $id)->get();
        return view('admin.medicines', compact('medicines'));
    }

    public function editMedicine($id)
    {
        $medicines = Medicine::findOrFail($id);
        return view('admin.editMedicines', compact('medicines'));
    }

    public function updateadminMedicine($id)
    {
        $medicines = Medicine::findOrFail($id);
        $req = Request::all();
        $medicines->update($req);
        Flashy::message('Message updated successfully!!!');
        return redirect('admin/users/medicines/' . $medicines->userid);
    }

    public function addMedicines()
    {
        return view('admin.medicines');

    }

    // code for delete medicine from user account @ADMIN//
    public function deleteadminMedicine($id)
    {

        $medicines = Medicine::findOrfail($id);
        $req = Request::all();
        $medicines->delete($req);
        Flashy::message('Message deleteted successfully!!!');
        return redirect('admin/users/medicines/' . $medicines->userid);
    }

//------------user controll details for admin
    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function editUsers($id)
    {
        $user = User::findOrFail($id);
        return view('admin.editusers', compact('user'));
    }

    public function updateUsers($id)
    {
        $user = User::findOrfail($id);
        $req = request::all();
        $user->update($req);
        Flashy::message('Message updated successfully!!!');
        return redirect('admin/users');
    }

    public function deleteUsers($id)
    {
        $user = User::findOrfail($id);
        $req = request::all();
        $user->delete($req);
        Flashy::message('Message deleteted successfully!!!');
        return redirect('admin/users');
    }

    // news controlls from admin
    public function news()
    {
        $news = News::all();
        return view('admin.news', compact('news'));
    }

    public function addNews()
    {
        return view('admin.addNews');
    }

    public function storeNews()
    {
        $req = Request::all();
        News::create($req);
        Flashy::message('News Added Successfully!!!!');
        return redirect('admin/news');
    }

    public function editNews($id)
    {
        $news = News::findOrFail($id);
        return view('admin.editNews', compact('news'));
    }
    public function updateNews($id)
    {
        $news = News::findOrfail($id);
        $req = request::all();
        $news->update($req);
        Flashy::message('Message updated successfully!!!');
        return redirect('admin/news');
    }

    public function deleteNews($id)
    {
        $news = News::findOrfail($id);
        $req = request::all();
        $news->delete($req);
        flashy::message('message deleted......');
        return redirect('admin/news');
    }

    //====admin view------//
    public function adminView()
    {
        $users = User::count();
        $medicines = Medicine::count();

        $latest_users = User::orderBy('id', 'DESC')->get()->take(5);
        $latest_medicines = Medicine::orderBy('id', 'DESC')->get()->take(4);
        return view('admin.adminView', compact('users', 'medicines', 'latest_users', 'latest_medicines'));
    }

}
