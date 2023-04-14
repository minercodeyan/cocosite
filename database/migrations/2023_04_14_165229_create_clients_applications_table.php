<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_applications', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_phone');
            $table->string('client_comment')->nullable();
            $table->string('application_status');
            $table->unsignedBigInteger('applications_type_id')->nullable();
            $table->foreign('applications_type_id')
                ->references('id')->on('applications_type');
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
        Schema::dropIfExists('clients_applications');
    }
}
