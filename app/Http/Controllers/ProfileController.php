<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'user' => auth()->user()
        ]);
    }

    public function update(ProfileRequest $request)
    {
        /** @var User $user */
        $user = auth()->user();

        $data = $request->validated();

        if ($file = $request->file('photo')) {
            $data['photo'] = $file->store('photos');
        }

        $user->fill($data)->save();

        return back()->with('message', 'Profile updated successfully.');
    }
}
