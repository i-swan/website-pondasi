<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class JenisKegiatanSeeder extends Seeder
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
        	DB::table('jenis_kegiatan')->insert([
                'nama_jenis' => array_rand(array('ini jenis ke 1'=>'ini jenis ke 1','ini jenis ke 2'=>'ini jenis ke 2','ini jenis ke 3'=>'ini jenis ke 3')),
	        	]);
 
        }
    }
}
