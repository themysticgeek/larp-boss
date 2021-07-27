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
    
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
         
     }
     
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
         
     }
     
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, User $user)
     {
         
     }
     
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(User $user)
     {
         
     }
}
