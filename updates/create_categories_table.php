<?php namespace Quangtrong\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('quangtrong_news_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->longText('content')->nullable();
            $table->string('image', 200)->nullable();
            $table->string('hidden', 1)->default(2);
            $table->string('status', 1)->default(1);
            $table->integer('parent_id')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->timestamps();
        });

        Schema::create('quangtrong_news_relations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('subscriber_id')->unsigned();
            $table->integer('categories_id')->unsigned();
            $table->primary(['subscriber_id', 'categories_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('quangtrong_news_categories');
        Schema::dropIfExists('quangtrong_news_relations');
    }
}