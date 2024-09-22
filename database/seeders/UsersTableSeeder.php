<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'nancy',
                'image' => '',
                'first_name' => 'nancy',
                'last_name' => 'abdullah',
                'role' => 'admin',
                'email' => 'nancyabdo857@gmail.com',
                'password' => bcrypt('admin123'),
                'status' => '1',
                'phone' => '01279424259',
                'address' => 'egypt',
                'gender' => 'female',
                'dob' => '2002-11-07',
                'join_date' => '2024-09-12',
                'job_type' => 'IT',
                'city' => 'Cairo',
                'age' => '22',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'aser',
                'image' => '',
                'first_name' => 'aser',
                'last_name' => 'abdullah',
                'role' => 'employee',
                'email' => 'aser@gmail.com',
                'password' => bcrypt('employee123'),
                'status' => '1',
                'phone' => '01223871812',
                'address' => 'egypt',
                'gender' => 'male',
                'dob' => '2020-04-09',
                'join_date' => '2024-09-30',
                'job_type' => 'sales',
                'city' => 'cairo',
                'age' => '20',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'mazen',
                'image' => '',
                'first_name' => 'mazen',
                'last_name' => 'abdullah',
                'role' => 'admin',
                'email' => 'mazen@gmail.com',
                'password' => bcrypt('admin123'),
                'status' => '1',
                'phone' => '01150005249',
                'address' => 'cairo',
                'gender' => 'male',
                'dob' => '2005-10-09',
                'join_date' => '2024-09-15',
                'job_type' => 'Developer',
                'city' => 'cairo',
                'age' => '19',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'mohammed',
                'image' => '',
                'first_name' => 'mohammed',
                'last_name' => 'abdullah',
                'role' => 'employee',
                'email' => 'mohammed@gmail.com',
                'password' => bcrypt('employee123'),
                'status' => '1',
                'phone' => '01237594830',
                'address' => 'egypt',
                'gender' => 'male',
                'dob' => '2002-11-07',
                'join_date' => '2024-09-20',
                'job_type' => 'Lawyer',
                'city' => 'cairo',
                'age' => '22',
            ],

        ]);
    }
}
