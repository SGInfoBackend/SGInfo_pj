<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Throwable;

class DemoException extends Exception
{
    //
    public function render($request)
    {
        return response('Custom Error');
    }
}
