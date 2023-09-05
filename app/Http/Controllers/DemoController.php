<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\sendTestMail;

class DemoController extends Controller
{
    public function sendMailFunction(){
            $userMail = 'shnarute96@gmail.com';
            dispatch(new sendTestMail($userMail));
            echo"Mail has been successfully";
            // dd('send mail successfully');
    }
}
