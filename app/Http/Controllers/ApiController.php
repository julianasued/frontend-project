<?php

namespace App\Http\Controllers;

use App\Models\Generate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        return ('deu certo');
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $response = Http::post('http://54.71.57.117/api/generate', [
            'name' => $request->name,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
        ]);

        return redirect()->route('generate.qrcode', ['name' => $request->name, 'linkedin' => $request->linkedin, 'github' => $request->github]);
    }

    public function qrcode(Request $request, $id)
    {
        $response = Http::get('http://54.71.57.117/api/' . $id . '', [
            'name'
        ]);
        //dd($request->linkedin);
        $response = $response->object();
        //dd($response);
        foreach ($response as $r => $key) {
            if (($request->linkedin == $key->linkedin) && ($request->linkedin == $key->linkedin)) {
                $response = $response[$r];
            }
        }
        //dd($response);
        return view('qrcode', ['id' => $response->id, 'name' => $response->name, 'linkedin' => $response->linkedin, 'github' => $response->github]);
    }

    public function show(Request $request, string $id)
    {

        $response = Http::get('http://54.71.57.117/api/' . $id . '', [
            'name'
        ]);
        $response = $response->object();

        return view('show', [
            'name' => $response[0]->name,
            'linkedin' => $response[0]->linkedin,
            'github' => $response[0]->github,
        ]);
    }
}
