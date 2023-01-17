<?php
namespace Jerickcm\Inspire\Controllers;

use Illuminate\Http\Request;
use Jerickcm\Inspire\Inspire;
class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        // return $quote;
        return view('inspire::index', compact('quote'));
    }
}


