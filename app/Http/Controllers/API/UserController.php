<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Validator;

use App\Http\Resources\User as UserResource;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
    /**
     * Export Users as JSON for API
     *
     * @param  none
     * @return JSON $users
     */
    public function index()
    {
        $users = User::all();
        return $this->sendResponse(UserResource::collection($users), 'Users retrieved successfully.');
    }
}
