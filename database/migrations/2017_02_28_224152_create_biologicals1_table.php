<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiologicals1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biologicals', function (Blueprint $table) {
            $table->string('exposedEmployeeName');
            $table->date('dateOfExposure');
            $table->integer('employeeID_1');
            $table->string('assignmentBiological');
            $table->string('shift');
            $table->integer('idcoNumber');
            $table->string('epcrIncidentNum');
            $table->date('todaysDate');
            $table->boolean('decontaminate');
            $table->boolean('callChi');
            $table->boolean('confirmSource');
            $table->boolean('trueOFD184');
            $table->boolean('bloodReport');
            $table->boolean('exposureTab');
            $table->boolean('trueBagTag');
            $table->boolean('notifyPSS');
            $table->boolean('truePPE');
            $table->boolean('trueDocumentDayBook');
            $table->boolean('potDecontaminate');
            $table->boolean('potBagTag');
            $table->boolean('potOFD184');
            $table->boolean('potPPE');
            $table->boolean('potDocumentDayBook');
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
        Schema::drop('biologicals');
    }
}
