<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Accident extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'ofd6aID',
        'accidentDate',
        'driverName',
        'driverID',
        'assignmentAccident',
        'appratus',
        'captainID',
        'battalionChiefID ',
        'acOnDutyID'
      ];

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateAccidentDate($input)
    {
        if ($input != null) {
            $this->attributes['accidentDate'] = Carbon::createFromFormat('Y-m-d', $input)->format('Y-m-d');
        } else {
            $this->attributes['accidentDate'] = null;
        }
    }

}
