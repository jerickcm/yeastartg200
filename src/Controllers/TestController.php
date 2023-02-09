<?php

namespace Jerickcm\Yeastartg200\Controllers;

use Illuminate\Http\Request;
use Jerickcm\Inspire\Inspire;

class TestController
{
    public function __invoke(Inspire $inspire)
    {
        dd("hello");
    }
}
