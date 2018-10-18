<?php

namespace App\Http\Controllers;

use App\Http\EtincelleApi;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal.index', [
            'users' => EtincelleApi::getUsers(),
        ]);
    }

    public function city($city_slug)
    {
        if (!in_array($city_slug, array('albi', 'toulouse'))) {
            abort(404);
        }
        return view('portal.city', [
            'city' => ucfirst($city_slug),
            'users' => EtincelleApi::getUsers(['city' => $city_slug]),
        ]);
    }

    public function job($job_slug)
    {
        $jobs = EtincelleApi::getJobs();
        $active_job = null;
        foreach ($jobs as $job) {
            if ($job['slug'] == $job_slug) {
                $active_job = $job['name'];
            }
        }
        if (null == $active_job) {
            abort(404);
        }
        return view('portal.job', [
            'job' => $active_job,
            'users' => EtincelleApi::getUsers(['job' => $job_slug]),
        ]);
    }
}
