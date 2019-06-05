<?php
use Illuminate\Database\Seeder;
use App\Backend;
class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Backend::create([
        	'name'	=> 'heinthu',
        	'email'	=> 'heinthu@gmail.com',
        	'password'	=> \Hash::make("123456")
        ]);
    }
}