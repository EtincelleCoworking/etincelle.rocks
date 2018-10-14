<?php

namespace App\Http\Controllers;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal.index', [
            'cities' => $this->getCities(),
            'users' => $this->getUsers(),
        ]);
    }

    public function city($city_slug)
    {
        return view('portal.city', [
            'cities' => $this->getCities(),
            'city' => ucfirst($city_slug),
            'users' => $this->getUsers(['city' => $city_slug]),
        ]);
    }

    public function job($job_slug)
    {
        return view('portal.job', []);
    }
}
