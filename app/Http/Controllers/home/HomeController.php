<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\animals\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        $animals = Animal::paginate(12);

        return view('home.home', ['user' => $user, 'animals' => $animals ?? []]);
    }
}
