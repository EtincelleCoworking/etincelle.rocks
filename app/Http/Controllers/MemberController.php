<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function profile($slug)
    {
        $uri = 'http://intranet.coworking-toulouse.local/api/1.0/user/' . $slug;
        $result = json_decode(file_get_contents($uri), true);
        $result['data'];

        return view('member.profile', [
            'user' => $result['data'],
            'cities' => $this->getCities(),
        ]);
    }
}
