<?php

namespace Jerickcm\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire
{
    public function justDoIt()
    {
        // testchange
        $response = Http::get('https://inspiration.goprogram.ai/');
        return $response['quote'] . ' -' . $response['author'];
    }
}
