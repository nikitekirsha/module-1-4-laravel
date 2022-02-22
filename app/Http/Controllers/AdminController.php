<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller {
    public function dashboard() {
        return View::make('pages.admin.dashboard');
    }
}