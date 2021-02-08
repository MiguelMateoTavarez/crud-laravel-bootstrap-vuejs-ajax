<?php

namespace App\Http\Controllers;

use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('create');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit', ['user' => $user]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'profession' => 'required',
        ]);

        User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'profession' => $request->input('profession'),
        ]);

        return redirect('/');
    }

    public function update(User $user, Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'profession' => 'required',
        ]);

        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'profession' => $request->input('profession'),
            'update_at' =>now()
        ]);

        return redirect("/");
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect('/');
    }
}
