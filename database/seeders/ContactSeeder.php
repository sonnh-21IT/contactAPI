<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('username','test')->first();
        Contact::created([
            'first_name'=>'test',
            'last_name'=>'test',
            'email'=>'test@pzn.com',
            'phone'=>'111111',
            'user_id'=>$user->id
        ]);
    }
}
