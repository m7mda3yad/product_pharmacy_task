<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pharmacies', function(Blueprint $table) {
            $table->increments('id');
			$table->string('name')->nullable();
			$table->text('address')->nullable();
			$table->fullText('name');
			$table->fullText('address');

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
		Schema::drop('pharmacies');
	}
};
