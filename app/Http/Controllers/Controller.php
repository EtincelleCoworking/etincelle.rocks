<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getUsers($filter = null)
    {
        $uri = env('API_URL') . '/users?' . http_build_query(['filter' => $filter]);

        //var_dump($uri);
        $result = json_decode(file_get_contents($uri), true);
        return $result['data'];
    }

    protected function getCities()
    {
        $result = json_decode(file_get_contents(env('API_URL') . '/cities'), true);
        return $result['data'];
    }

    protected function getJobs()
    {
        $result = json_decode(file_get_contents(env('API_URL') . '/jobs'), true);
        return $result['data'];
    }


}
