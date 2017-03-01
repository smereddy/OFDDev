<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biological extends Model
{
    //
    protected $fillable=[
        'exposedEmployeeName',
        'dateOfExposure',
        'employeeID_1',
        'assignmentBiological',
        'shift',
        'idconumber',
        'epcrIncidentNum',
        'todaysDate'
    ];
}
