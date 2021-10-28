<?php

namespace Database\Seeders;

use App\Http\Library\Tokenize\Token;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DefaultAdminSeeder extends Seeder
{
    function __construct()
    {
        return $this->run();
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email = "utyemma@gmail.com";
        if (!User::where('email', $email)->first()) {
            DB::table('users')->insert([
                'unique_id' => Token::unique('users'),
                'email' => $email,
                'firstname' => "Utibe-Abasi",
                'lastname' => "Emmanuel",
                'password' => Hash::make(123456)
            ]);
            return true;
        }
    }
}
