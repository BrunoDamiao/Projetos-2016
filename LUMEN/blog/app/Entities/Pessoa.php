<?php

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

/**
* Entidade Pessoa
*/
class Pessoa extends Model
{
	protected $table = 'pessoas';

	protected $fillable = [
		'nome',
		'apelido',
		'sexo'
	];
	//

	public function Telefones()
	{
		# code...
	}
}