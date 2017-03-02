@extends('layouts.app')
@section('content')

    {!! Form::open(['method' => 'POST', 'route' => ['injuries.store'], 'files' => true,]) !!}
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="jumbotron" style="margin-bottom: 5px; ">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('img/login.png')}}">
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-12">
                            <div class="page-header1">
                                <h3><strong>HAZARDOUS MATERIAL EXPOSURE REPORTING INSTRUCTIONS</strong></h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h6><i><strong>Used for future tracking purposes only</strong></i></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="row">
                    <div class="col-sm-4 form-group">
                        {!! Form::label('createDate', 'Todays Date:', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('createDate', old('createDate'), array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                            <p class="help-block"></p>
                            @if($errors->has('createDate'))
                                <p class="help-block">
                                    {{ $errors->first('createDate') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Personnel ID #', ['class' => 'col-sm-4 control-label']) !!}
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
                        {!! Form::label('station_name', 'Primary IDCO #', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('idconumber', old('station_name'), ['class' => 'form-control','placeholder'=>'Enter IDCO Badge ID'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Exposed Employee Name', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('exposedEmployeeName', old('station_name'), ['class' => 'form-control'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Date of Exposure', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('dateOfExposure', old('station_name'), array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Employee ID#', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('employeeID_1', old('station_name'), ['class' => 'form-control','placeholder'=>'Enter Badge ID'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Assignment', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('assignmentBiological', old('station_name'), ['class' => 'form-control'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Shift', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::select('shift',[
                          'A' => 'A',
                          'B' => 'B',
                          'C' => 'C',
                          'DIV' => 'DIV'], ['class' => 'form-control'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'EPCR Incident#', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('epcrIncidentNum', old('station_name'), ['class' => 'form-control','placeholder'=>'Enter Incident Num'])!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Contact CorVel Enterprise Comp @ 877-764-3574.
                                Tell them you have a Hazardous Material Exposure and the call is for reporting ONLY.</strong>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label class="checkbox-inline col-sm-4"><input type="checkbox">
                            <strong>Once you have completed the call, record CorVel Claim #</strong>
                        </label>
                        <div class="col-sm-4">
                            {!! Form::text('corvelID', '', array('class'=>'form-control', 'required'=>'required'))!!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label class="checkbox-inline col-sm-4"><input type="checkbox">
                            <strong>Fill out OFD-006d Hazmat Exposure Report form</strong></label>
                        <div class="col-sm-2">
                            <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                                <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                        </div>
                        <div class="col-sm-2">
                            <div class="fileUpload upload btn btn-success">
                                {!! Form::file('attachOFD6d', old('attachOFD6d'), ['id' => 'upload' ,'class' => 'form-control','required'=>'required']) !!}
                                {!! Form::hidden('attachOFD6d_max_size', 20) !!}
                                @if($errors->has('attachOFD6d'))
                                    <p class="help-block">
                                        {{ $errors->first('attachOFD6d') }}
                                    </p>
                                @endif
                            </div>
                            <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                    data-target="#myModal">
                                <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label class="col-sm-4">Do you have any symptoms of illness or injury and require treatment</label>
                        <div class="col-sm-2">
                            <form name="cityselect">
                                <select name="menu" onChange="window.document.location.href=this.options[this.selectedIndex].value;" value="GO">
                                    <option selected="selected">Select One</option>
                                    <option value="http://localhost/OFDDEV/public/injuries">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                {!! Form::submit('Submit',['class' => 'btn btn-success']) !!}
                <a href="{{ route('hazmat.index') }}" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>
    <!--pop-up-grid-->
    {{--<div id="myModal" class="modal fade" role="dialog">--}}
    {{--<div class="modal-dialog">--}}
    {{--<!-- Modal content-->--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header">--}}
    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
    {{--<h4 class="modal-title">Corvel Work Ability Report - Upload Form</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-12 form-group">--}}
    {{--{!! Form::file('station_document', old('station_document'), ['class' => 'form-control']) !!}--}}
    {{--{!! Form::hidden('station_document_max_size', 20) !!}--}}
    {{--<p class="help-block">up to 20mb</p>--}}
    {{--@if($errors->has('station_document'))--}}
    {{--<p class="help-block">--}}
    {{--{{ $errors->first('station_document') }}--}}
    {{--</p>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--{!! Form::submit('upload',['class' => 'btn btn-success']) !!}--}}
    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!--pop-up-grid-->
    {!! Form::close() !!}
@stop