<?php namespace Quangtrong\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('quangtrong_news_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->text('introductory')->nullable();
            $table->longText('content')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->string('status', 1)->default(1);
            $table->integer('statistics')->default(0);
            $table->timestamps();
            $table->string('image',200)->nullable();
            $table->string('featured',1)->default(2);
            $table->dateTime('last_send_at')->nullable();
            $table->string('category_id', 3)->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('quangtrong_news_posts');
    }
}
