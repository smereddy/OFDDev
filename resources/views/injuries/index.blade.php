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
                                <h3><strong>I.O.D. Report Tracking Document (OFD-6)</strong></h3>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h6><i><strong>Issue Date: 8/17/16</strong></i></h6>
                        </div>
                        <div class="col-md-2">
                            <h6><i><strong>Effective Date: 8/17/16</strong></i></h6>
                        </div>
                        <div class="col-md-12">
                            <h6><i><strong>Amends, Replaces, Rescinds: Replaces OFD-6 (Rev. 05-15)</strong></i></h6>
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
                        <strong>COMPLETE ALL FORMS AND FORWARD VIA CHAIN-OF-COMMAND WITHIN 48 HOURS
                        </strong>
                    </div>
                </div>
            </div>
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
                        {!! Form::label('station_name', 'Date of Injury:', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6 ">
                            {!! Form::text('createdate', old('station_name'), array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                            <p class="help-block"></p>
                            @if($errors->has('station_name'))
                                <p class="help-block">
                                    {{ $errors->first('station_name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4 form-group">
                        {!! Form::label('station_name', 'Assignment', ['class' => 'col-sm-4 control-label']) !!}
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
              <div class="row">
                  <div class="col-sm-4 form-group">
                      {!! Form::label('station_name', 'Injured Name', ['class' => 'col-sm-4 control-label']) !!}
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
              </div>
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
              <div class="row">
                  <div class="col-sm-4 form-group">
                      {!! Form::label('station_name', 'FRMS Incident #', ['class' => 'col-sm-4 control-label']) !!}
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
                  <div class="col-sm-8 form-group">
                      {!! Form::label('station_name', 'CorVel ID #', ['class' => 'col-sm-2 control-label']) !!}
                      <div class="col-sm-3">
                          {!! Form::text('createdate', old('station_name'), ['class' => 'form-control'])!!}
                          <p class="help-block"></p>
                          @if($errors->has('station_name'))
                              <p class="help-block">
                                  {{ $errors->first('station_name') }}
                              </p>
                          @endif
                      </div>
                      {!! Form::label('station_name', '(Corvel TMC will initiate at time of call)', ['class' => 'col-sm-7 control-label']) !!}
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                  {!! Form::label('station_name','All injuries must have FRMS incident ID#- if non-incident
                        related,inform dispatch of your injury
                        and needs for an FRMS ID#', ['class' => 'col-sm-12 control-label']) !!}
                      </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>CorVel Work Ability
                              Report</strong>
                          - Only if seeking medical attention. Complete "Employee Section" and sign at bottom.</label>
                      <div class="col-sm-2">
                              <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                              <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                      </div>
                      {{--<div class="col-sm-2">--}}
                          {{--<div class="fileinput-button btn btn-success col-sm-12">--}}
                          {{--{!! Form::file('station_document', old('station_document'), ['<i class="glyphicon glyphicon-delete"></i>',array('class' => 'form-control', 'style' => 'display:none;')]) !!}--}}
                          {{--{!! Form::hidden('station_document_max_size', 20) !!}--}}
                          {{--@if($errors->has('station_document'))--}}
                              {{--<p class="help-block">--}}
                                  {{--{{ $errors->first('station_document') }}--}}
                              {{--</p>--}}
                          {{--@endif--}}
                          {{--<span class="btn btn-info fileinput-button col-sm-12">--}}
       {{--<i class="fa fa-cloud-upload" aria-hidden="true"></i> <span>Upload</span>--}}

    {{--<input type="file" class="uploadFile" name="station_document" id="station_document">--}}

    {{--</span>--}}
                          {{--<button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"--}}
                                  {{--data-target="#myModal">--}}
                              {{--<i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>--}}
                      {{--</div>--}}
                 <div class="col-sm-3">
                     <div class="input-group">
                         <label class="input-group-btn">
                    <span class="btn btn-info">
                        <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload<input type="file" name="station_document" style="display: none;" multiple>
                    </span>
                         </label>
                         <input type="text" id="upload-file-info" class="form-control" readonly>
                     </div>
                     {{--<label class="btn btn-primary" for="my-file-selector">--}}
                         {{--<input id="my-file-selector" type="file" style="display:none;" onchange="$('#upload-file-info').html($(this).val());">--}}
                         {{--Button Text Here--}}
                     {{--</label>--}}
                     {{--<span class='label label-info' id="upload-file-info"></span>--}}
                     {{--<div class="col-sm-2">--}}
                         {{--<span class='label label-info' id="upload-file-info"></span>--}}

                     {{--</div>--}}
                 </div>

                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Investigation Report for
                              Occupational Injury or Illness</strong>
                          - Both employee and supervisor must complete and sign.</label>
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
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Statement of Witness of
                              Accident</strong></label>
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
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Employee's Choice of
                              Physician or Doctor Form</strong>
                          - Two signatures required - both section A & B.</label>
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
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>OFD - 25 Injury on
                              Job</strong>
                          - Send an attachment electronically to OmafIOD@cityofomaha.org</label>
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
                      <label class="checkbox-inline col-sm-4 num"><input type="checkbox"><strong>Complete FRMS Casuality &
                              Narrative Tab</strong>
                          - Fire Service and Fire Service Injury.</label>
                      <div class="col-sm-4">
                          {!! Form::text('FrmsCas', '', array('class'=>'form-control'))!!}
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete in EPCR</strong>
                          - All cases.</label>
                      <div class="col-sm-4">
                          {!! Form::text('FrmsCas', '', array('class'=>'form-control'))!!}
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Document IOD in
                              Workforce</strong>
                          - Only if seeking medical attention.</label>
                      <div class="col-sm-4">
                          {!! Form::text('FrmsCas', '', array('class'=>'form-control'))!!}
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Document in Operational Day
                              Book and Personnel Record</strong></label>
                      <div class="col-sm-4">
                          {!! Form::text('FrmsCas', '', array('class'=>'form-control'))!!}
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="col-sm-4">In case attend Omaha Police Academy - Training Assigned</label>
                      <div class="col-sm-2">
                          {{ Form::select('shift', [
                          'yes' => 'YES',
                          'no' => 'NO']
                          ), array('class'=>'btn btn-primary dropdown-toggle col-sm-12') }}
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label><u>For Fire Omaha Police Recruits: Use normal Chain-of-Command for Tracking
                              Document</u></label></div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline"><input type="checkbox">Have Police Supervisor Complete and Sign
                          Supervisor section on Investigation Report
                          and Witness Statement</label>

                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                      <label class="checkbox-inline"><input type="checkbox">Call Fire Supervisor or SWD B/C immediately
                          and notify CorVel by phone</label>
                  </div>
              </div>
                  {!! Form::submit('Submit',['class' => 'btn btn-success']) !!}
              <a href="{{ route('injuries.index') }}" class="btn btn-default">Cancel</a>
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
