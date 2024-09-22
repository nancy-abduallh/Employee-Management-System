<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line
use Carbon\Carbon;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
           'created_at' => \Carbon\Carbon::now(),
           'username' => 'nancy',
            'image' => '',
            'first_name' => 'nancy',
            'last_name' => 'abdullah',
            'email' => 'nancyabdo857@gmail.com',
            'password' => bcrypt('admin123'),
            'status' => '1',
        ]);
    }
}
