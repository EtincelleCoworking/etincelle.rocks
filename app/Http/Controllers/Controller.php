<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const API_URI = 'http://intranet.coworking-toulouse.local/api/1.0';

    protected function getUsers($filter = null)
    {
        $uri = self::API_URI . '/users?' . http_build_query(['filter' => $filter]);
        $result = json_decode(file_get_contents($uri), true);
        return $result['data'];
    }

    protected function getCities()
    {
        $result = json_decode(file_get_contents(self::API_URI . '/cities'), true);
        return $result['data'];
    }


}
