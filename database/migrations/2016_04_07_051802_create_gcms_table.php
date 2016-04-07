<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGcmsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gcms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('reg_id');
			$table->text('device_id');
			$table->integer('user_id');
			$table->boolean('is_allow');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gcms');
	}

}
