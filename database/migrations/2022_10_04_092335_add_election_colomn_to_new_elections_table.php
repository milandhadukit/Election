<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddElectionColomnToNewElectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('new_elections', function (Blueprint $table) {
            //
            $table->tinyInteger('status')->default('1')->nullable()->after('title');
            $table->integer('candidate_1')->nullable()->after('status');
            $table->integer('candidate_2')->nullable()->after('candidate_1');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_elections', function (Blueprint $table) {
            //
        });
    }
}
