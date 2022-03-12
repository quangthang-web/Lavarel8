<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $user=new User;
        $user->name="quangthang";
        $user->email="quangthang@gmail.com";
        $user->password=Hash::make('123456');
        $user->created_at= now();		
        $user->updated_at= now();		
        $user->save();
    }
}
