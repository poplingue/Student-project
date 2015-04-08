<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagPostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tag_post', function(Blueprint $table)
		{
			$table->integer('tag_id')->unsigned();
			$table->integer('post_id')->unsigned();
                        $table->unique(['tag_id','post_id']);
                        $table->foreign('tag_id')->references('id')->on('tags')->onDelete('CASCADE');
                        $table->foreign('post_id')->references('id')->on('posts')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tag_post');
	}

}
