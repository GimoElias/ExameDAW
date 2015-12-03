<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tipo_id')->unsigned();
			$table->string('titulo')->nullable();
			$table->text('descricao')->nullable();
			$table->text('local')->nullable();
			$table->text('programa')->nullable();
			$table->timestamps();
			$table->foreign('tipo_id')
                    ->references('id')->on('tipos')
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
		Schema::drop('eventos');
	}

}
