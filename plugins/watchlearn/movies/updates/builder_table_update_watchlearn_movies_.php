<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->string('slug')->nullable();
            $table->string('name', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->dropColumn('slug');
            $table->string('name', 191)->default('NULL')->change();
            $table->text('description')->default('NULL')->change();
        });
    }
}
