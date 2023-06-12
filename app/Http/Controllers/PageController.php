<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{

    public function users()
    {
        $users = User::whereIn('type', [3, 2, 1])->get();

    return view('admin.users.index', compact('users'));
    }

    public function categoriesIndex()
    {
        return view('admin.categories.index');
    }

    public function categoriesCreate()
    {
        return view('admin.categories.create');
    }

    public function threadsIndex()
    {
        return view('admin.threads.index');
    }

    
}
