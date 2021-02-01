<?php namespace Zed\Career\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZedCareer6 extends Migration
{
    public function up()
    {
        Schema::table('zed_career_', function($table)
        {
            $table->string('sort_order')->nullable();
            $table->text('job_name')->default('null')->change();
            $table->text('job_description')->default('null')->change();
            $table->text('require')->default('null')->change();
            $table->text('offer')->default('null')->change();
            $table->string('created_at', 191)->default('null')->change();
            $table->boolean('published')->nullable()->change();
            $table->string('updated_at', 191)->default('null')->change();
            $table->string('deleted_at', 191)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('zed_career_', function($table)
        {
            $table->dropColumn('sort_order');
            $table->text('job_name')->default('NULL')->change();
            $table->text('job_description')->default('NULL')->change();
            $table->text('require')->default('NULL')->change();
            $table->text('offer')->default('NULL')->change();
            $table->string('created_at', 191)->default('\'null\'')->change();
            $table->boolean('published')->nullable(false)->change();
            $table->string('updated_at', 191)->default('\'null\'')->change();
            $table->string('deleted_at', 191)->default('NULL')->change();
        });
    }
}
