<?php

namespace App\Http;

class EtincelleApi
{

    public static function getCities()
    {
        $result = json_decode(file_get_contents(env('API_URL') . '/cities'), true);
        return $result['data'];
    }

    public static function getJobs()
    {
        $result = json_decode(file_get_contents(env('API_URL') . '/jobs'), true);
        return $result['data'];
    }

    public static function getUsers($filter = null)
    {
        $uri = env('API_URL') . '/users?' . http_build_query(['filter' => $filter]);

        //var_dump($uri);
        $result = json_decode(file_get_contents($uri), true);
        return $result['data'];
    }


}