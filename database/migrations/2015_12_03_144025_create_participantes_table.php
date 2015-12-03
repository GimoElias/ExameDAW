<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participantes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome')->nullable();
			$table->string('apelido')->nullable();
			$table->string('grauacademico')->nullable();
			$table->string('empresa')->nullable();
			$table->date('datanascimento');
			$table->string('sexo')->nullable();
			$table->integer('telefone')->nullable();
			$table->string('email')->unique()->required();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participantes');
	}

}
