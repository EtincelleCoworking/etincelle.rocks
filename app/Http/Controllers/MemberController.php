<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function profile($slug)
    {
        $uri = env('API_URL') . '/' . $slug;
        $result = json_decode(file_get_contents($uri), true);
        $result['data'];

        return view('member.profile', [
            'user' => $result['data'],
            'cities' => $this->getCities(),
        ]);
    }
}
