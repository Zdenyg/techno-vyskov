<?php namespace Zed\Career\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZedCareer extends Migration
{
    public function up()
    {
        Schema::create('zed_career_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('job_name')->nullable();
            $table->text('job_description')->nullable();
            $table->text('require')->nullable();
            $table->text('offer')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zed_career_');
    }
}
