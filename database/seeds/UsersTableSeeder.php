<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Julia Bergann
		$user = new User;
		$user->email = 'jubergann@gmail.com';
		$user->name = 'Julia Bergann';
		$user->telefone = '38991559851';
		$user->path = 'img/users/';
		$user->filename = 'julia_bergann.png';
		$user->tipo = 'afiliado';
		$user->password = bcrypt('123456');
		$user->save();

		//Leticia Sabatah
		$user = new User;
		$user->email = 'lesabatah@gmail.com';
		$user->name = 'Leticia Sabatah';
		$user->telefone = '38991559851';
		$user->path = 'img/users/';
		$user->filename = 'lesabatah.png';
		$user->tipo = 'afiliado-produtor'; 
		$user->password = bcrypt('123456');
		$user->save();

		//Isabella Ferreira
		$user = new User;
		$user->email = 'isaferreira@gmail.com';
		$user->name = 'Isabella Ferreira';
		$user->telefone = '38991559851';
		$user->path = 'img/users/';
		$user->filename = 'isaferreira.png';
		$user->tipo = 'afiliado-produtor';
		$user->password = bcrypt('123456');
		$user->save();

		//Guilherme Junqueira
		$user = new User;
		$user->email = 'guijunqueira@gmail.com';
		$user->name = 'Guilherme Junqueira';
		$user->telefone = '38991559851';
		$user->path = 'img/users/';
		$user->filename = 'guijunqueira.png';
		$user->tipo = 'produtor';
		$user->password = bcrypt('123456');
		$user->save();

		//Patricia Stelling
		$user = new User;
		$user->email = 'patstell@gmail.com';
		$user->name = 'Patricia Stelling';
		$user->telefone = '38991559851';
		$user->path = 'img/users/';
		$user->filename = 'patstell.png';
		$user->tipo = 'produtor';
		$user->password = bcrypt('123456');
		$user->save();

		//Yago de Castro
		$user = new User;
		$user->email = 'yagodcastro@gmail.com';
		$user->name = 'Yago de Castro';
		$user->telefone = '38991559851';
		$user->path = 'img/users/';
		$user->filename = 'yagodcastro.png';
		$user->tipo = 'afiliado';
		$user->password = bcrypt('123456');
		$user->save();

		//Pablo Holffman
		$user = new User;
		$user->email = 'pabloholff@gmail.com';
		$user->name = 'Pablo Holffman';
		$user->telefone = '38991559851';
		$user->path = 'img/users/';
		$user->filename = 'pabloholff.png';
		$user->tipo = 'afiliado-produtor';
		$user->password = bcrypt('123456');
		$user->save();
    }
}
