<?php

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

/**
* Entidade Telefone
*/
class Telefone extends Model
{
	protected $table = 'telefones';

	protected $fillable = [
		'descrição',
		'codpais',
		'ddd',
		'prefixo',
		'sufixo'
	];
	//

	public function getNumeroAttribute()
	{
		return "{$this->codpaís} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
	}
}