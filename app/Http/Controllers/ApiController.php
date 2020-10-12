<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use App\Validators\ApiValidator;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected $service;
    use ApiValidator;

    public function __construct(ApiService $service)
    {
        $this->service=$service;
    }

}
