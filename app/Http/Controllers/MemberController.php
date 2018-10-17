<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function profile($slug)
    {
        $uri = env('API_URL') . '/user/' . $slug;
        $content = @file_get_contents($uri);
        if (false === $content) {
            abort(404);
        }
        $result = json_decode($content, true);
        //var_dump($result['data']);exit;

        return view('member.profile', [
            'user' => $result['data'],
        ]);
    }
}
