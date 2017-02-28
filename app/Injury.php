<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Injury extends Model
{
    protected $fillable = [

        'createDate',
        'injuryDate',
        'injuredEmployeeName',
        'injuredEmployeeID',
        'assignmentInjury',
        'shift',
        'corVelID',
        'frmsIncidentNum',
        'epcrNumber',
        'docIOD_isChecked',
        'docOpDayBook_isChecked',
        'callFireSupervisor_isChecked',
        'policeOfficer_isChecked',
        'station_document',
        'attachInvestigationReport',
        'attachStmtWitness',
        'attachEmpPhyscian',
        'attachOFD25IOJ',
        'trainingAssigned',
        'createdby',
        'updatedby',

    ];
}
