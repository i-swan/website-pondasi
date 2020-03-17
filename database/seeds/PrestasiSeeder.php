<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PrestasiSeeder extends Seeder
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
        	DB::table('prestasi')->insert([
                'nama' => array_rand(array('prestasi 1'=>'prestasi 1','prestasi 2'=>'prestasi 2','prestasi 3'=>'prestasi 3')),
                'jenis_prestasi_id' => array_rand(array('1'=>'1','2'=>'2','3'=>'3')),
                'ketua_in' => array_rand(array('1'=>'1','2'=>'2','3'=>'','4'=>'')),
                'ketua_ex' => array_rand(array('anto'=>'anto','budi'=>'budi','cileng'=>'','dobleh'=>'')),
                'host' => array_rand(array('UI'=>'Universitas Indonesia','ITB'=>'Institut Teknologi Bandung','UGM'=>'Universitas Gadjah Mada')),
                'lokasi' => $faker->address,
                'tanggal' => $faker->dateTimeBetween('now','+1 years'),
                'judul_karya' => array_rand(array('karya 1'=>'karya 1','karya 2'=>'karya 2','karya 3'=>'karya 3')),
                'juara_ke' => array_rand(array('1'=>'1','2'=>'2','3'=>'','4'=>'')),
                'hadiah' => array_rand(array('juara 1'=>'juara1','harapan 2'=>'harapan 2','3'=>'','4'=>'')),
                'file_foto' => array_rand(array('foto A'=>'foto A','foto B'=>'foto B','foto AB'=>'foto AB','foto O'=>'foto O')),
	        	]);
 
        }
    }
}
