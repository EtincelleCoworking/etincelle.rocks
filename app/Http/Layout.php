<?php

namespace App\Http;

class Layout{

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


}