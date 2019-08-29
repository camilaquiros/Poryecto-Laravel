<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

class ServicesController extends Controller
{
    public function services()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function show($id)
    {
        $serviceToFind = Service::find($id);
        return view('services', compact('serviceToFind'));
    }

    public function servicesUs()
    {
        $services = Service::all();
        return view('nosotros', compact('services'));
    }
}
