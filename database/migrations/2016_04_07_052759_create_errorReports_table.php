<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorReportsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('errorReports', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('package_name');
			$table->string('package_version');
			$table->string('phone_model');
			$table->string('android_version');
			$table->text('stacktrace');
			$table->string('send_email_1');
			$table->string('send_email_2');
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
		Schema::drop('errorReports');
	}

}
