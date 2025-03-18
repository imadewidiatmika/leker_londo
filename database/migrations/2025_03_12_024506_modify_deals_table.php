<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('deals', function (Blueprint $table) {
            $table->dropUnique(['email']);
            $table->dropUnique(['nowa']);
        });
    }
    
    public function down()
    {
        Schema::table('deals', function (Blueprint $table) {
            $table->string('email', 191)->unique()->change();
            $table->string('nowa', 20)->unique()->change();
        });
    }
    
};
