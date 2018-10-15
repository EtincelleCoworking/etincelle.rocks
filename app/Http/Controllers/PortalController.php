<?php

namespace App\Http\Controllers;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal.index', [
            'cities' => $this->getCities(),
            'users' => $this->getUsers(),
            'jobs' => $this->getJobs(),
        ]);
    }

    public function city($city_slug)
    {
        return view('portal.city', [
            'city' => ucfirst($city_slug),
            'cities' => $this->getCities(),
            'jobs' => $this->getJobs(),
            'users' => $this->getUsers(['city' => $city_slug]),
        ]);
    }

    public function job($job_slug)
    {
        $jobs = $this->getJobs();
        foreach($jobs as $job){
            if($job['slug'] == $job_slug){
                $active_job = $job['name'];
            }
        }
        return view('portal.job', [
            'cities' => $this->getCities(),
            'jobs' => $jobs,
            'job' => $active_job,
            'users' => $this->getUsers(['job' => $job_slug]),
        ]);
    }
}
