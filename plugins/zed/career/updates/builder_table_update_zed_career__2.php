<?php namespace Zed\Career\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZedCareer2 extends Migration
{
    public function up()
    {
        Schema::table('zed_career_', function($table)
        {
            $table->text('job_name')->default('null')->change();
            $table->text('job_description')->default('null')->change();
            $table->text('require')->default('null')->change();
            $table->text('offer')->default('null')->change();
            $table->string('created_at')->nullable()->unsigned(false)->default('null')->change();
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->dropColumn('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('zed_career_', function($table)
        {
            $table->text('job_name')->default('NULL')->change();
            $table->text('job_description')->default('NULL')->change();
            $table->text('require')->default('NULL')->change();
            $table->text('offer')->default('NULL')->change();
            $table->timestamp('created_at')->nullable()->unsigned(false)->default('NULL')->change();
            $table->timestamp('updated_at')->nullable()->default('NULL');
            $table->timestamp('deleted_at')->nullable()->default('NULL');
            $table->integer('sort_order')->default(1);
        });
    }
}
