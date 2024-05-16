<?php

namespace App\Http\Controllers;

use App\Notifications\SendContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.index');
    }

    public function sendEmail(Request $request)
    {
        $data = $request->all();

        Notification::route('mail', 'guilhermeieski@gmail.com')
            ->notify(new SendContact($data));


        return redirect()->route('home');
    }
}
