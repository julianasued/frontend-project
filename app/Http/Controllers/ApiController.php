<?php

namespace App\Http\Controllers;

use App\Models\Generate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function __invoke()
    {
        $response = Http::get('http://54.71.57.117/api/generate');
        dd($response->json());
    }
}
