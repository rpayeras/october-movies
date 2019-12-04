<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies3 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->text('actors')->nullable();
            $table->string('name', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
            $table->integer('year')->default(null)->change();
            $table->string('slug', 191)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->dropColumn('actors');
            $table->string('name', 191)->default('\'null\'')->change();
            $table->text('description')->default('NULL')->change();
            $table->integer('year')->default(NULL)->change();
            $table->string('slug', 191)->default('\'null\'')->change();
        });
    }
}
