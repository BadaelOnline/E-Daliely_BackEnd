<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//     public function sendMail()
//     {
//         $details=[
//           'title'=>'test',
//           'bode'=>'test'
//         ];
//         Mail::to('fahed8592@gmail.com',)->send(new SendRequest($details));
//     }
}
