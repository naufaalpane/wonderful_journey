<?php

namespace App\Http\Controllers;

use App\Articles;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function viewAll(){
        $users = User::paginate(6);

        return view('viewalluser')->with('users', $users);
    }

    public function viewUpdate($userId)
    {
        $users = User::where('id', $userId);

        return view('updateuser')->with('users', $users);
    }
    
    public function delete($userId)
    {
        DB::table('users')->where('id', $userId)->delete();

        return redirect('/');
    }

    public function update(Request $request, $userID)
    {
        $request->validate([
            'userName' => 'required',
            'userEmail' => 'required',
            'userPhone' => 'required|numeric',
        ]);

        DB::table('users')->where('id', $userID)->update([
            'name' => $request->userName,
            'email' => $request->userEmail,
            'phone' => $request->userPhone,
        ]);

        return redirect('/');
    }
}
