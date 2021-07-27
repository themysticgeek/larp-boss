<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }
    
    /**
     * Export Users as JSON for API
     *
     * @param  none
     * @return JSON $users
     */
    public function apiIndex()
    {
        $users = User::get()->toJson(JSON_PRETTY_PRINT);
        return response($users, 200);
    }
}
