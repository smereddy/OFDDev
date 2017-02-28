<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accident extends Model
{
    protected $fillable = [
        'ofd6aID',
        'accidentDate',
        'driverName',
        'driverID',
        'assignmentAccident',
        'appratus',
        'swdLimit35',
        'officerName',
        'officerDepartment',
        'officerBadgeNum',
        'officerRbNum',
        'User_Login_employeeID',
        'OFD6_ofd6ID',
        'createdAt',
        'updatedAt',
        'createdBy',
        'updatedBy',
        'captainID',
        'battalionChiefID',
        'acOnDutyID',
        'attachOFD25InterDept',
        'pathOFD025InnterDept',
        'attachLRS101',
        'pathLRS101',
        'attachOFD295',
        'pathOFD295',
        'attachOFD25aDriver',
        'pathOFD25aDriver',
        'attachOFD25aSupervisor',
        'pathOFD25aSupervisor',
        'attachOFD25aOthrPersnl',
        'pathOFD25aOthrPrsnl',
        'attachOFD31',
        'pathOFD31',
        'attachOFD127',
        'pathOFD127',
        'attachLawDeptInv',
        'pathLawDeptInv',
        'attachCompanyDayBk',
        'pathCompanyDayBk',
        'attachVehicleReport',
        'pathVehicleReport'
    ];
}
