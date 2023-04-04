<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class UserListController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');  
    // }

    public function index()
    {
        $users = User::All();
        return view('admin.userlist', compact('users'));  //変更
    }

    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->route('userlist')->with('success', '削除しました。');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('userlist')->with('error', '削除するユーザーが見つかりませんでした。');
        }
    }
}
