<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        // Symfony \ Component \ HttpFoundation \ File \ Exception\ FileNotFoundException::class
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */

    public function report(Throwable $e)
    {
        // if($e instanceof FileNotFoundException){
        //     dd('ddd');
        // }
        parent::report($e);
    }

    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
            // if($e instanceof FileNotFoundException){
            //     return response('some error',500);
            // }

        });
    }

    // public function render($request, Throwable $e)
    // {
    //     if($e instanceof FileNotFoundException){
    //             return response('some error',500);
    //         }
    //         return parent::render($request,$e);
    // }

    protected function context()
    {
        return array_merge(parent::context(),['name'=>'Tint']);
    }
}
