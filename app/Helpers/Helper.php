<?php

namespace App\Helpers;

use App\User;
use Illuminate\Support\Facades\Hash;

class Helper
{
    public const date_format = 'd/m/y';

    function admin_add_user($response)
    {
        $user = User::where('email', $response['email'])->first();
        if (!$user) {

            $user = User::create([
                'name'        => $response['name'],
                'nik'         => $response['nik'],
                'email'       => $response['email'],
                'password'    => Hash::make('jafar123'),
                'photo'       => $response['photo'],
                'grade'       => $response['grade'],
                'division'    => $response['division'],
                'department'  => $response['department'],
                'designation' => $response['designation'],
            ]);
        }

        return $user;
    }

    function convertToIndonesiaCurrency($number)
    {
        return "Rp " . strrev(implode('.', str_split(strrev($number), 3)));
    }

}
