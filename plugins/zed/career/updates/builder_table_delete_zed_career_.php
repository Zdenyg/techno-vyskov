<?php namespace Zed\Career\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteZedCareer extends Migration
{
    public function up()
    {
        Schema::dropIfExists('zed_career_');
    }
    
    public function down()
    {
        Schema::create('zed_career_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('job_name')->nullable()->default('NULL');
            $table->text('job_description')->nullable()->default('NULL');
            $table->text('require')->nullable()->default('NULL');
            $table->text('offer')->nullable()->default('NULL');
            $table->string('created_at', 191)->nullable()->default('\'null\'');
            $table->boolean('published')->nullable()->default(NULL);
            $table->string('updated_at', 191)->nullable()->default('\'null\'');
            $table->string('deleted_at', 191)->nullable()->default('\'null\'');
            $table->string('sort_order', 191)->nullable()->default('\'null\'');
        });
    }
}
