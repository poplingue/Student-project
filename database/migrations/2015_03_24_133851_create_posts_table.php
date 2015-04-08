<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->integer('category_id')->unsigned()->nullable();
			$table->text('content');
			$table->enum('status',['publish','unpublish'])->default('unpublish');
			$table->timestamps();
                        
                        $table->foreign('category_id')
                              ->references('id')
                              ->on('categories')
                              ->onDelete('SET NULL');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
