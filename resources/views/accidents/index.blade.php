@extends('layouts.app')
@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['accidents.store'], 'files' => true,]) !!}
<<<<<<< .merge_file_a01996

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script >
    $(document).ready(function () {
        $("#datepicker1").datepicker({
            onClose: function () {
                var date2 = $('#datepicker1').datepicker('getDate');
                date2.setDate(date2.getDate() + 35)
                $("#datepicker2").datepicker("setDate", date2);

            }
        });
        $("#datepicker2").datepicker();
    });
    </script>

=======
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script>
 $(document).ready(function(){
    $( "#datepicker1" ).datepicker({
        onClose: function() {
            var date2 = $('#datepicker1').datepicker('getDate');
            date2.setDate(date2.getDate()+35)
            $( "#datepicker2" ).datepicker("setDate", date2);
			
        }
    });
    $( "#datepicker2" ).datepicker();
});
</script>
	
>>>>>>> .merge_file_a09928
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="jumbotron" style="margin-bottom: 5px; ">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('img/login.png')}}">
<<<<<<< .merge_file_a01996
=======

>>>>>>> .merge_file_a09928
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-12">
                            <div class="page-header1">
                                <h3><strong>Vehicle Accident Report Tracking Document (OFD-6A)</strong></h3>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h6><i><strong>Issue Date: 9/1/16</strong></i></h6>
                        </div>
                        <div class="col-md-2">
                            <h6><i><strong>Effective Date: 9/1/16</strong></i></h6>
                        </div>
                        <div class="col-md-12">
                            <h6><i><strong>Amends, Replaces, Rescinds: Replaces OFD-6A (July 2016) </strong></i></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger" align="center">
                            <strong>
<<<<<<< .merge_file_a01996
                                Refer to SOP ADM 3-3 Fire Apparatur/Vehicle Accident Investigation
                                <br>
                                COMPLETE ALL FORMS AND FORWARD VIA CHAIN-OF-COMMAND WITHIN 48 HOURS
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        {!! Form::label('accidentDate', 'Date of Accident:', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('accidentDate', old('accidentDate'), array('id'=>'datepicker1','class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                            <p class="help-block"></p>
                            @if($errors->has('accidentDate'))
                                <p class="help-block">
                                    {{ $errors->first('accidentDate') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        {!! Form::label('driverID', 'Driver ID#', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('driverID', old('driverID'), array('class'=>'form-control'))!!}
                            <p class="help-block"></p>
                            @if($errors->has('driverID'))
                                <p class="help-block">
                                    {{ $errors->first('driverID') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        {!! Form::label('assignmentAccident', 'Assignment', ['class' => 'col-sm-4 control-label', 'required' => 'required']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('assignmentAccident', old('station_name'), ['class' => 'form-control'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('assignmentAccident'))
                                <p class="help-block">
                                    {{ $errors->first('assignmentAccident') }}
=======
							Refer to SOP ADM 3-3 Fire Apparatur/Vehicle Accident Investigation
							<br>
							COMPLETE ALL FORMS AND FORWARD VIA CHAIN-OF-COMMAND WITHIN 48 HOURS
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Date of Accident:', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('createdate', old('station_name'), array('id'=>'datepicker1','class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
>>>>>>> .merge_file_a09928
                                </p>
                            @endif
                        </div>
                    </div>
<<<<<<< .merge_file_a01996
                    <div class="col-sm-6 form-group">
                        {!! Form::label('appratus', 'Apparatus', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('appratus', old('station_name'), ['class' => 'form-control'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('appratus'))
                                <p class="help-block">
                                    {{ $errors->first('appratus') }}
=======
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Driver ID#', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('createdate', old('station_name'), array('class'=>'form-control'))!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
>>>>>>> .merge_file_a09928
                                </p>
                            @endif
                        </div>
                    </div>
<<<<<<< .merge_file_a01996
                </div>
                <div class="row">
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Captain #', ['class' => 'col-sm-4 control-label']) !!}
=======
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Driver Name', ['class' => 'col-sm-4 control-label']) !!}
>>>>>>> .merge_file_a09928
                        <div class="col-sm-6 ">
                            {!! Form::text('createdate', old('station_name'), ['class' => 'form-control'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>
<<<<<<< .merge_file_a01996
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Battalion Chief #', ['class' => 'col-sm-4 control-label']) !!}
=======
                </div>
                <div class="row">
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Assignment', ['class' => 'col-sm-4 control-label']) !!}
>>>>>>> .merge_file_a09928
                        <div class="col-sm-6 ">
                            {!! Form::text('createdate', old('station_name'), ['class' => 'form-control'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4 form-group">
<<<<<<< .merge_file_a01996
                        {!! Form::label('station_name', 'Assistant Chief#', ['class' => 'col-sm-4 control-label']) !!}
=======
                        {!! Form::label('station_name', 'Apparatus', ['class' => 'col-sm-4 control-label']) !!}
>>>>>>> .merge_file_a09928
                        <div class="col-sm-6 ">
                            {!! Form::text('createdate', old('station_name'), ['class' => 'form-control'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    
                </div>
<<<<<<< .merge_file_a01996
                <div class="alert alert-danger" align="center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-4">
                                {!! Form::label('35_dte', 'Please Submit all the forms by', ['class' => 'col-sm-12 control-label']) !!}
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="datepicker2" disabled>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">

                            <strong>
                                B/C shall ensure all reports are properly completed and forwarded to Safety Officer
                                within 24 hours of accident.
                                <br>
                                Police Report is REQUIRED on all City vehicles involved in an accident OR property
                                damage whether on public streets, private property, or at the Fire Station
                            </strong>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12" form-group>
                    <h4 style="text-align:left;"><u><strong>ACCIDENT CHECKLIST :</strong></u></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" form-group>
                    <label class="checkbox-inline col-sm-8"><input type="checkbox"><strong>Generate OFD 025
                            Intradepartmental Communication</strong>-Email to <a
                                href="omafaccident_ofd25@cityofomaha.org"> omafaccident_ofd25@cityofomaha.org </a>
                    </label>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete LRS 101 City of
                            Omaha Accident Report</strong>-Include RB#, Officer Name, Badge#</label>
                    <div class="col-sm-2">
                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                            <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                data-target="#myModal">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                            <i class="fa fa-search" aria-hidden="true"></i> Retrieve
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong><strong>Complete OFD 295
                                Vehicle Accident Witness Statement</strong>-This Report is for civilian statements only</strong></label>
                    <div class="col-sm-2">

                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                            <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                data-target="#myModal">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                            <i class="fa fa-search" aria-hidden="true"></i> Retrieve
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete OFD 25a Accident
                            Intradepartmental Communication</strong>-Driver</label>
                    <div class="col-sm-2">

                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                            <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                data-target="#myModal">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                            <i class="fa fa-search" aria-hidden="true"></i> Retrieve
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete OFD 25b Accident
                            Intradepartmental Communication</strong>-Supervisor</label>
                    <div class="col-sm-2">
                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                            <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                data-target="#myModal">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                            <i class="fa fa-search" aria-hidden="true"></i> Retrieve
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete OFD 25c Accident
                            Intradepartmental Communication</strong>-Other Personnel</label>
                    <div class="col-sm-2">

                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                            <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                data-target="#myModal">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                            <i class="fa fa-search" aria-hidden="true"></i> Retrieve
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label class="checkbox-inline col-sm-4 num"><input type="checkbox"><strong> Complete OFD 31-OFD
                            Damaged, Lost, Stolen Equipment Report</strong></label>
                    <div class="col-sm-2">

                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                            <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                data-target="#myModal">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                            <i class="fa fa-search" aria-hidden="true"></i> Retrieve
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong> Complete OFD 127 Request for
                            Services Form</strong></label>
                    <div class="col-sm-2">

                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                            <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                data-target="#myModal">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                            <i class="fa fa-search" aria-hidden="true"></i> Retrieve
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong><strong> Complete DR 41 State
                                of Nebraska DMV Vehicle Accident Report</strong></strong></label>
                    <div class="col-sm-2">

                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                            <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                data-target="#myModal">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                            <i class="fa fa-search" aria-hidden="true"></i> Retrieve
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong> Call Law Department
                            Investigator</strong>- Call 444-5131- Request report be faxed to SWD fax # 444-6378. You can
                        leave a message with rig # address of incident, date, time and RB#</label>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong> Enter in Company Day
                            Book</strong></label></div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <label class="col-sm-6"></label>
                    <div class="btn-bottom">
                        {!! Form::submit('Create',['class' => 'btn btn-success']) !!}
                        <a href="{{ route('accidents.index') }}" class="btn btn-default">Cancel</a>

                    </div>
                </div>
            </div>
            </form>
        </div>
=======
                <div class="row">
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Captain #', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('createdate', old('station_name'), ['class' => 'form-control'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div><div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Battalion Chief #', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('createdate', old('station_name'), ['class' => 'form-control'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div><div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Assistant Chief#', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('createdate', old('station_name'), ['class' => 'form-control'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                
				
				
				<div class="alert alert-danger" align="center">
				<div class="row">
	            <div class="col-md-12">
                
				
				<div class="col-sm-4">
				
                {!! Form::label('35_dte', 'Please Submit all the forms by', ['class' => 'col-sm-12 control-label']) !!}
                 </div>   
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="datepicker2" disabled>
					
                   </div>
                		</div>
						</div>
						
			<br>
		<div class="row">
		
            <div class="col-md-12">
                
				
                    <strong>
					B/C shall ensure all reports are properly completed and forwarded to Safety Officer within 24 hours of accident.
                        <br>
                        Police Report is REQUIRED on all City vehicles involved in an accident OR property damage whether on public streets, private property, or at the Fire Station
                    </strong>
                </div>
            </div>
			</div>
			
        </div>
		<div class="panel-body">
				<div class="row">
				<div class="col-sm-12" form-group>
                <h4 style="text-align:left;"><u><strong>ACCIDENT CHECKLIST :</strong></u> </h4>
				</div>
				</div>
        <div class="row">
            <div class="col-sm-12" form-group>
                
                    <label class="checkbox-inline col-sm-8"><input type="checkbox"><strong>Generate OFD 025 Intradepartmental Communication</strong>-Email to <a href="omafaccident_ofd25@cityofomaha.org" > omafaccident_ofd25@cityofomaha.org </a> </label>
               
            </div>
        </div>
		<br>
            <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete LRS 101 City of Omaha Accident Report</strong>-Include RB#, Officer Name, Badge#</label>
                      <div class="col-sm-2">

                          <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                              <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                      </div>
                      <div class="col-sm-2">
                          <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                  data-target="#myModal">
                              <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                      </div>
                      <div class="col-sm-2">
                          <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                              <i class="fa fa-search" aria-hidden="true"></i> Retrieve</button>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong><strong>Complete OFD 295 Vehicle Accident Witness Statement</strong>-This Report is for civilian statements only</label>
                      <div class="col-sm-2">

                          <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                              <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                      </div>
                      <div class="col-sm-2">
                          <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                  data-target="#myModal">
                              <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                      </div>
                      <div class="col-sm-2">
                          <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                              <i class="fa fa-search" aria-hidden="true"></i> Retrieve</button>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete OFD 25a Accident Intradepartmental Communication</strong>-Driver</label>
                      <div class="col-sm-2">

                          <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                              <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                      </div>
                      <div class="col-sm-2">
                          <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                  data-target="#myModal">
                              <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                      </div>
                      <div class="col-sm-2">
                          <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                              <i class="fa fa-search" aria-hidden="true"></i> Retrieve</button>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete OFD 25b Accident Intradepartmental Communication</strong>-Supervisor</label>
                      <div class="col-sm-2">

                          <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                              <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                      </div>
                      <div class="col-sm-2">
                          <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                  data-target="#myModal">
                              <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                      </div>
                      <div class="col-sm-2">
                          <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                              <i class="fa fa-search" aria-hidden="true"></i> Retrieve</button>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete OFD 25c Accident Intradepartmental Communication</strong>-Other Personnel</label>
                      <div class="col-sm-2">

                          <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                              <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                      </div>
                      <div class="col-sm-2">
                          <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                  data-target="#myModal">
                              <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                      </div>
                      <div class="col-sm-2">
                          <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                              <i class="fa fa-search" aria-hidden="true"></i> Retrieve</button>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4 num"><input type="checkbox"><strong> Complete OFD 31-OFD Damaged, Lost, Stolen Equipment Report</strong></label>
                      <div class="col-sm-2">

                          <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                              <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                      </div>
                      <div class="col-sm-2">
                          <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                  data-target="#myModal">
                              <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                      </div>
                      <div class="col-sm-2">
                          <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                              <i class="fa fa-search" aria-hidden="true"></i> Retrieve</button>
                      </div>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong> Complete OFD 127 Request for Services Form</strong></label>
                      <div class="col-sm-2">

                          <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                              <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                      </div>
                      <div class="col-sm-2">
                          <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                  data-target="#myModal">
                              <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                      </div>
                      <div class="col-sm-2">
                          <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                              <i class="fa fa-search" aria-hidden="true"></i> Retrieve</button>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong><strong> Complete DR 41 State of Nebraska DMV Vehicle Accident Report</strong></label>
                      <div class="col-sm-2">

                          <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                              <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                      </div>
                      <div class="col-sm-2">
                          <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                  data-target="#myModal">
                              <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                      </div>
                      <div class="col-sm-2">
                          <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                              <i class="fa fa-search" aria-hidden="true"></i> Retrieve</button>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong> Call Law Department Investigator</strong>- Call 444-5131- Request report be faxed to SWD fax # 444-6378. You can leave a message with rig # address of incident, date, time and RB#</label>
                      
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong> Enter in Company Day Book</strong></label></div>
              </div>
              
              <div class="row">
                  <div class="col-sm-12">
                      <label class="col-sm-6"></label>
                      <div class="btn-bottom">
                          <div class="btn btn-primary">Save & Exit &raquo;</div>
                          <div class="btn btn-primary">Submit &raquo;</div>
                      </div>
                  </div>
              </div>
          </form>
    </div>
	</div>

>>>>>>> .merge_file_a09928
    </div>

    </div>
    <!--pop-up-grid-->
    <div id="myModal" class="modal fade" role="dialog">
        {!! Form::open(['method' => 'POST', 'route' => ['injuries.store'], 'files' => true,]) !!}
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Corvel Work Ability Report - Upload Form</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            {!! Form::file('station_document', old('station_document'), ['class' => 'form-control']) !!}
                            {!! Form::hidden('station_document_max_size', 20) !!}
                            <p class="help-block">up to 20mb</p>
                            @if($errors->has('station_document'))
                                <p class="help-block">
                                    {{ $errors->first('station_document') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    {!! Form::submit('Upload',['class' => 'btn btn-success']) !!}
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <!--pop-up-grid-->
    


    {!! Form::close() !!}
@stop