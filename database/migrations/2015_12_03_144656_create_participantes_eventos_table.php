<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesEventosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participantes_eventos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('orador')->unsigned();
			$table->integer('palestrante')->unsigned();
			$table->string('convidados')->nullable();
			$table->string('platea')->nullable();
			$table->timestamps();
			$table->foreign('orador')
                    ->references('id')->on('participantes')
                    ->onDelete('cascade');
					$table->foreign('palestrante')
                    ->references('id')->on('participantes')
                    ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participantes_eventos');
	}

}
