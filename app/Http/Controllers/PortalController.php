<?php

namespace App\Http\Controllers;

use App\Http\Layout;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal.index', [
            'users' => $this->getUsers(),
        ]);
    }

    public function city($city_slug)
    {
        if (!in_array($city_slug, array('albi', 'toulouse'))) {
            abort(404);
        }
        return view('portal.city', [
            'city' => ucfirst($city_slug),
            'users' => $this->getUsers(['city' => $city_slug]),
        ]);
    }

    public function job($job_slug)
    {
        $jobs = Layout::getJobs();
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
            'users' => $this->getUsers(['job' => $job_slug]),
        ]);
    }
}
