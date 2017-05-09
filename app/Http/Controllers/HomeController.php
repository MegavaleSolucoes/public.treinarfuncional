<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use APP\ConfigModel;
use APP\Menus;

use App\Http\Requests\ConfigRequest;

class HomeController extends Controller
{
    public function index()
    {
        $sets = DB::table('config_models')->first();
        $nav  = DB::table('menuses')->first();

        return view('Home', ['sets' => $sets, 'nav' => $nav]);
    }
    public function create()
    {
        //
    }

    public function store(ConfigRequest $request)
    {
        //
    }

    public function show(Config $config)
    {
        //
    }

    public function edit(Config $config)
    {
        //
    }

    public function update(ConfigRequest $request, Config $config)
    {
        //
    }

    public function destroy(Config $config)
    {
        //
    }

    public function upload(Config $config)
    {
        //
    }
}
