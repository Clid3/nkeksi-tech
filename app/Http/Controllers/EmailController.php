<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //

    public function send(Request $request, $id)
    {
        $user = User::findOrFail($id);

        Mail::send('emails.welcome', ['user' => $user], function ($m) use ($user)
        {

            $m->from('nkeksi2017@gmail.com', 'Nkeksi Tech');

            $m->to($user->email, $user->name);

        });
    }

}
