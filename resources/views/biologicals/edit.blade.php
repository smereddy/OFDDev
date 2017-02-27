@extends('layouts.app')
@section('content')
    {!! Form::model($biological,['method' => 'PUT', 'route' => ['biologicals.update', $biological->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Biological
            <div class="jumbotron" style="margin-bottom: 5px; ">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('img/login.png')}}">
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-12">
                            <div class="page-header1">
                                <h3><strong>Biological Exposure Tracking Document (OFD-006B)</strong></h3>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h6><i><strong>Issue Date: 8/17/16</strong></i></h6>
                        </div>
                        <div class="col-md-2">
                            <h6><i><strong>Effective Date: 8/17/16</strong></i></h6>
                        </div>
                        <div class="col-md-12">
                            <h6><i><strong>Amends, Replaces, Rescinds: Replaces OFD-006B (Rev. 05-15)</strong></i></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <br>
            <br>
        <div class="row">
                <div class="col-sm-4 form-group">
                    {!! Form::label('exposedEmployeeName', 'Exposed Employee Name', ['class' => 'col-sm-4 control-label']) !!}
                    <div class="col-sm-6 ">
                        {!! Form::text('exposedEmployeeName', old('exposedEmployeeName'), ['class' => 'form-control'])!!}
                        <p class="help-block"></p>
                        @if($errors->has('exposedEmployeeName'))
                            <p class="help-block">
                                {{ $errors->first('exposedEmployeeName') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 form-group">
                    {!! Form::label('dateOfExposure', 'Date of Exposure', ['class' => 'col-sm-4 control-label']) !!}
                    <div class="col-sm-6 ">
                        {!! Form::text('dateOfExposure', old('dateOfExposure'), array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                        <p class="help-block"></p>
                        @if($errors->has('dateOfExposure'))
                            <p class="help-block">
                                {{ $errors->first('dateOfExposure') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 form-group">
                    {!! Form::label('employeeID_1', 'Employee ID#', ['class' => 'col-sm-4 control-label']) !!}
                    <div class="col-sm-6 ">
                        {!! Form::text('employeeID_1', old('employeeID_1'), ['class' => 'form-control','placeholder'=>'Enter Badge ID'])!!}
                        <p class="help-block"></p>
                        @if($errors->has('employeeID_1'))
                            <p class="help-block">
                                {{ $errors->first('employeeID_1') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 form-group">
                    {!! Form::label('assignmentBiological', 'Assignment', ['class' => 'col-sm-4 control-label']) !!}
                    <div class="col-sm-6 ">
                        {!! Form::text('assignmentBiological', old('assignmentBiological'), ['class' => 'form-control'])!!}
                        <p class="help-block"></p>
                        @if($errors->has('assignmentBiological'))
                            <p class="help-block">
                                {{ $errors->first('assignmentBiological') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="col-sm-4 form-group">
                    {!! Form::label('shift', 'Shift', ['class' => 'col-sm-4 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::select('shift',[
                      'A' => 'A',
                      'B' => 'B',
                      'C' => 'C',
                      'DIV' => 'DIV'], ['class' => 'form-control'])!!}
                        <p class="help-block"></p>
                        @if($errors->has('shift'))
                            <p class="help-block">
                                {{ $errors->first('shift') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 form-group">
                    {!! Form::label('epcrIncidentNum', 'EPCR Incident#', ['class' => 'col-sm-4 control-label']) !!}
                    <div class="col-sm-6 ">
                        {!! Form::text('epcrIncidentNum', old('epcrIncidentNum'), ['class' => 'form-control','placeholder'=>'Enter Incident Num'])!!}
                        <p class="help-block"></p>
                        @if($errors->has('epcrIncidentNum'))
                            <p class="help-block">
                                {{ $errors->first('epcrIncidentNum') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 form-group">
                    {!! Form::label('idcoNumber', 'Primary IDCO #', ['class' => 'col-sm-4 control-label']) !!}
                    <div class="col-sm-6 ">
                        {!! Form::text('idcoNumber', old('idcoNumber'), ['class' => 'form-control','placeholder'=>'Enter IDCO Badge ID'])!!}
                        <p class="help-block"></p>
                        @if($errors->has('idcoNumber'))
                            <p class="help-block">
                                {{ $errors->first('idcoNumber') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 form-group">
                    {!! Form::label('todaysDate', 'Date', ['class' => 'col-sm-4 control-label']) !!}
                    <div class="col-sm-6 ">
                        {!! Form::text('todaysDate', old('todaysDate'), array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                        <p class="help-block"></p>
                        @if($errors->has('todaysDate'))
                            <p class="help-block">
                                {{ $errors->first('todaysDate') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>

            {!! Form::submit('Update',['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
            <a href="{{ route('biologicals.index') }}" class="btn btn-default">Cancel</a>

        </div>
    </div>
@stop








                    