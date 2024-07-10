<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Kostan;

class KostanController extends Controller
{
    public function index()
    {
        $kostans = Kostan::all();
        if (!Auth::check()) {
            $kostans = $kostans->take(4);
        }
        return view('home', compact('kostans'));
    }

    public function show($uuid)
    {
        $kostan = Kostan::findOrFail($uuid);
        return view('detail', compact('kostan'));
    }
}