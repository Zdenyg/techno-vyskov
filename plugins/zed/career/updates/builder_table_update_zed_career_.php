<?php namespace Zed\Career\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZedCareer extends Migration
{
    public function up()
    {
        Schema::table('zed_career_', function($table)
        {
            $table->integer('sort_order')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('zed_career_', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
