<?php namespace Quangtrong\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateSubscribersTable extends Migration
{
    public function up()
    {
        Schema::create('quangtrong_news_subscribers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 100);
            $table->text('common')->nullable();
            $table->string('created', 1)->default(1);
            $table->integer('statistics')->default(0);
            $table->timestamps();
            $table->string('status',1)->default(1);
            $table->string('locale',5)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quangtrong_news_subscribers');
    }
}
