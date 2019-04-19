<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\News;
use App\User;
use Auth;
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
        if (Auth::user()->isadmin == 0) {
            die('Access denied');
        }

    }
    public function medicine_shop($id)
    {
        $this->verifyAdmin();

        $medicines = Medicine::where('userid', $id)->paginate(10);
        return view('admin.medicines', compact('medicines'));
    }

    public function editMedicine($id)
    {
        $this->verifyAdmin();

        $medicines = Medicine::findOrFail($id);
        return view('admin.editMedicines', compact('medicines'));
    }

    public function updateadminMedicine($id)
    {
        $this->verifyAdmin();

        $medicines = Medicine::findOrFail($id);
        $req = Request::all();
        $medicines->update($req);
        Flashy::message('Message updated successfully!!!');
        return redirect('admin/users/medicines/' . $medicines->userid);
    }

    public function addMedicines()
    {
        $this->verifyAdmin();

        return view('admin.medicines');

    }

    // code for delete medicine from user account @ADMIN//
    public function deleteadminMedicine($id)
    {
        $this->verifyAdmin();

        $medicines = Medicine::findOrfail($id);
        $req = Request::all();
        $medicines->delete($req);
        Flashy::message('Message deleteted successfully!!!');
        return redirect('admin/users/medicines/' . $medicines->userid);
    }

//------------user controll details for admin
    public function users()
    {
        $this->verifyAdmin();

        $users = User::paginate(10);
        return view('admin.users', compact('users'));
    }

    public function editUsers($id)
    {
        $this->verifyAdmin();

        $user = User::findOrFail($id);
        return view('admin.editusers', compact('user'));
    }

    public function updateUsers($id)
    {
        $this->verifyAdmin();

        $user = User::findOrfail($id);
        $req = request::all();
        $user->update($req);
        Flashy::message('Message updated successfully!!!');
        return redirect('admin/users');
    }

    public function deleteUsers($id)
    {
        $this->verifyAdmin();

        $user = User::findOrfail($id);
        $req = request::all();
        $user->delete($req);
        Flashy::message('Message deleteted successfully!!!');
        return redirect('admin/users');
    }

    // news controlls from admin
    public function news()
    {
        $this->verifyAdmin();

        $news = News::paginate(10);
        return view('admin.news', compact('news'));
    }

    public function addNews()
    {
        $this->verifyAdmin();

        return view('admin.addNews');
    }

    public function storeNews()
    {
        $this->verifyAdmin();

        $req = Request::all();
        News::create($req);
        Flashy::message('News Added Successfully!!!!');
        return redirect('admin/news');
    }

    public function editNews($id)
    {
        $this->verifyAdmin();

        $news = News::findOrFail($id);
        return view('admin.editNews', compact('news'));
    }
    public function updateNews($id)
    {
        $this->verifyAdmin();

        $news = News::findOrfail($id);
        $req = request::all();
        $news->update($req);
        Flashy::message('Message updated successfully!!!');
        return redirect('admin/news');
    }

    public function deleteNews($id)
    {
        $this->verifyAdmin();

        $news = News::findOrfail($id);
        $req = request::all();
        $news->delete($req);
        flashy::message('message deleted......');
        return redirect('admin/news');
    }

    //====admin view------//
    public function adminView()
    {
        $this->verifyAdmin();

        $users = User::count();
        $medicines = Medicine::count();

        $latest_users = User::orderBy('id', 'DESC')->get()->take(5);
        $latest_medicines = Medicine::orderBy('id', 'DESC')->get()->take(4);
        return view('admin.adminView', compact('users', 'medicines', 'latest_users', 'latest_medicines'));
    }

}
