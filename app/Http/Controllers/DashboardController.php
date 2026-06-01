<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /** @var User $user */
        $user = auth()->user();

        $user->links()->get();

        return view('dashboard',
        [
            'links' => $user->links()->get()
        ]);
    }
}
