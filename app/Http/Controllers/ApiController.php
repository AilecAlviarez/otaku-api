<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected $service;
    public function __construct(ApiService $service)
    {
        $this->service=$service;

    }
}
