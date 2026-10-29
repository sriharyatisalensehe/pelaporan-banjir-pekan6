<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function profile() {
        $user = Auth::user();
        return view('petugas.profile', compact('user'));
    }
}