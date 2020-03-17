<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class KegiatanSeeder extends Seeder
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
        	DB::table('kegiatan')->insert([
                'nama' => array_rand(array('kegiatan 1'=>'kegiatan 1','kegiatan 2'=>'kegiatan 2','kegiatan 3'=>'kegiatan 3')),
                'jenis_kegiatan_id' => array_rand(array('1'=>'1','2'=>'2','3'=>'3')),
                'tanggal' => $faker->dateTimeBetween('now','+1 years'),
                'lokasi' => $faker->address,
                'file_foto' => array_rand(array('foto A'=>'foto A','foto B'=>'foto B','foto AB'=>'foto AB','foto O'=>'foto O')),
                'ringkasan' => array_rand(array('ringkasan 1'=>'ringkasan 1','ringkasan 2'=>'ringkasan 2','ringkasan 3'=>'ringkasan 3')),
                'pj' => $faker->name,
                'anggota_id' => array_rand(array('1'=>'1','2'=>'2','3'=>'3')),
	        	]);
 
        }
    }
}
