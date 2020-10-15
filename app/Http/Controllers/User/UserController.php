<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\ApiService;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $rules=[
        'user_name'=>'required|string'  ,
        'user_password'=>'required|min:6',
        'user_email'=>'required'
    ];
    public function __construct(UserService $service)
    {
        parent::__construct($service);
        $this->registerRules($this->rules);

    }

    public function index()
    {
       $users=$this->service->getCollection();
       $user=$this->service->getRelations($users,'roles');
       return $this->responseSuccesfully($user);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=$this->validateRequest($request);
        return (!$validator)?$this->service->store($request):$validator;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $this->service->showOne($user);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validation=$this->validateRequest($request);
        return (!$validation)?$this->service->updateOne($user,$request):$validation;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return $this->service->deleteOne($user);
    }
}
