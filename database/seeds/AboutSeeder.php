<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x = 1; $x <= 10; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('about')->insert([
	            'about' => array_rand(array('satu'=>'baca no 2', 'dua'=>'baca no 3', 'tiga'=>'baca no 4', 'empat'=>'baca no 5')),
	            'tipe' => array_rand(array('profil'=>'profil','visi'=>'visi','misi'=>'misi')),
	        	]);
 
        }
    }
}
