<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class JenisRekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x = 1; $x <= 3; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('jenis_rekening')->insert([
                'bank' => array_rand(array('BRI Syariah'=>'BRI Syariah','Syariah Mandiri'=>'Syariah Mandiri','Muammalat'=>'Muammalat')),
                'nama' => $faker->name,
                'no_rek' => $faker->PhoneNumber,
                'created_by' => array_rand(array('1'=>'1','2'=>'2','3'=>'3')),
	        	]);
 
        }
    }
}
