<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class AnggotaPrestasiSeeder extends Seeder
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
        	DB::table('anggota_prestasi')->insert([
                'prestasi_id' => array_rand(array('1'=>'1','2'=>'2','3'=>'3')),
                'anggota_in' => array_rand(array('1'=>'1','2'=>'2','3'=>'3')),
                'anggota_ex' => array_rand(array('zena'=>'zena','xilay'=>'xilay','wong'=>'')),
	        	]);
 
        }
    }
}
