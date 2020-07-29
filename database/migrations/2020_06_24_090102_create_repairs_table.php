<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->string('address_desc');
            $table->string('prob_desc');
            $table->string('vehicle_id');
            $table->string('mechanic_id');
            $table->string('vehicle_owner_id');
            $table->string('acceptance_status');
            $table->string('completion_status');
            $table->json('repair_type');
            $table->string('supp_repair');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
