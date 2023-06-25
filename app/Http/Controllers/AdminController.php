<?php

namespace App\Http\Controllers;

use App\Models\Dekan;
use App\Models\Profile;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Storage;
use illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $user = Auth::user();
        return view('home',compact('user'));
    }
     
}