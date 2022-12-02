<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddElectionIdColomnToCandidateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidate_infos', function (Blueprint $table) {
            //

            $table->unsignedBigInteger('election_id')->nullable();
            $table->foreign('election_id')->references('id')->on('new_elections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidate_infos', function (Blueprint $table) {
            //
        });
    }
}
