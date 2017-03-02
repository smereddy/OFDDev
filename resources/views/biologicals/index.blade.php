@extends('layouts.app')
@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['biologicals.store'], 'files' => true,]) !!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

        <h4 style="padding-left:12px;"><u><strong>The following Checklist will follow:</strong></u></h4>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group" , style="padding-left:12px;">
                    {{ Form::checkbox('decontaminate', 1, null, ['id'=>'decontaminate', 'class' => 'className']) }}
                    {{ Form::label('decontaminate', 'Decontaminate') }}
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group" , style="padding-left:12px;">
                    {{ Form::checkbox('callChi', 1, null, ['id'=>'callChi', 'class' => 'className' ]) }}
                    {{ Form::label('callChi', 'Call CHI OUCH Nurse to determine type of exposure') }}
                </div>
            </div>
        </div>

        <div class="panel-group" id="accordion">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Please Click Here In Case
                            of True Exposure</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('confirmSource', 1, null, ['id'=>'confirmSource', 'class' => 'className' ]) }}
                                {{ Form::label('confirmSource', 'Confirm Source - Patient blood draw with OUCH Nurse') }}
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('trueOFD184', 1, null, ['id' => 'trueOFD184', 'class'=>'className']) }}
                                {{Form::label('trueOFD184','Complete OFD 184')}}
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-success dropdown-toggle col-sm-12" type="button"
                               href="fillablepdfs\(Exposure PDF) OFD 184 State Infectious Disease Exposure Report.pdf"
                               download="(Exposure PDF) OFD 184 State Infectious Disease Exposure Report.pdf">
                                <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                        </div>
                        <div class="col-sm-2">
                            <div class="fileUpload upload btn btn-success">
                                {!! Form::file('trueOFD184', old('trueOFD184'), ['id' => 'upload' ,'class' => 'form-control']) !!}
                                {!! Form::hidden('trueOFD184_max_size', 20) !!}
                                @if($errors->has('trueOFD184'))
                                    <p class="help-block">
                                        {{ $errors->first('trueOFD184') }}
                                    </p>
                                @endif
                            </div>
                            <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                    data-target="#myModal">
                                <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload
                            </button>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('bloodReport', 1, null, ['id' => 'bloodReport', 'class'=>'className']) }}
                                {{Form::label('bloodReport','Report for blood draw as directed by OUCH Nurse')}}

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('exposureTab', 1, null, ['id' => 'exposureTab', 'class'=>'className']) }}
                                {{Form::label('exposureTab','Complete Exposure tab in ePCR ')}}

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('trueBagTag', 1, null, ['id' => 'trueBagTag', 'class'=>'className']) }}
                                {{Form::label('trueBagTag','Bag & Tag clothing if applicable - send email to PSS with pick-up location ')}}

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('notifyPSS', 1, null, ['id' => 'notifyPSS', 'class'=>'className']) }}
                                {{Form::label('notifyPSS','Notify the on-duty PSS via phone at 402-660-1060 ')}}

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('truePPE', 1, null, ['id' => 'truePPE', 'class'=>'className']) }}
                                {{Form::label('truePPE','PPE has been cleaned per SOP SWD 1-0  ')}}

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('trueDocumentDayBook', 1, null, ['id' => 'trueDocumentDayBook', 'class'=>'className']) }}
                                {{Form::label('trueDocumentDayBook','Document in Company Day Book and on your Personnel Record   ')}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Please Click Here In Case
                            Of Potential Exposure</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">

                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('potDecontaminate', 1, null, ['id' => 'selfDecontaminate', 'class'=>'className']) }}
                                {{Form::label('selfDecontaminate','Decontaminate self- wash, flush as soon as possible  ')}}

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('potBagTag', 1, null, ['id' => 'potBagTag', 'class'=>'className']) }}
                                {{Form::label('potBagTag','Bag & Tag clothing if applicable - send email to PSS with pick-up location')}}

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('potOFD184', 1, null, ['id' => 'potOFD184', 'class'=>'className']) }}
                                {{Form::label('potOFD184','Complete OFD 184')}}
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-success dropdown-toggle col-sm-12" type="button"
                                   href="fillablepdfs\(Exposure PDF) OFD 184 State Infectious Disease Exposure Report.pdf"
                                   download="(Exposure PDF) OFD 184 State Infectious Disease Exposure Report.pdf">
                                    <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                            </div>
                            <div class="col-sm-2">
                                <div class="fileUpload upload btn btn-success">
                                    {!! Form::file('trueOFD184', old('trueOFD184'), ['id' => 'upload' ,'class' => 'form-control']) !!}
                                    {!! Form::hidden('trueOFD184_max_size', 20) !!}
                                    @if($errors->has('trueOFD184'))
                                        <p class="help-block">
                                            {{ $errors->first('trueOFD184') }}
                                        </p>
                                    @endif
                                </div>
                                <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                        data-target="#myModal">
                                    <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-success dropdown-toggle col-sm-12" type="button"
                               href="/download/a.txt">
                                <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-info dropdown-toggle col-sm-12" type="button"
                                    data-toggle="modal"
                                    data-target="#myModal">
                                <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload
                            </button>
                        </div>
                        <div class="col-sm-2">
                            <a href="uploads/OFD6a">Uploads/firefighters3/january/OFD6a.pdf </a>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('potPPE', 1, null, ['id' => 'potPPE', 'class'=>'className']) }}
                                {{Form::label('potPPE','PPE has been cleaned per SOP SWD 1-0')}}

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('potDocumentDayBook', 1, null, ['id' => 'potDocumentDayBook', 'class'=>'className']) }}
                                {{Form::label('potDocumentDayBook','Document in Company Day Book and on your Personnel Record   ')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <label class="col-sm-5"></label>
                <div class="btn-bottom">
                    {!! Form::submit('Submit',['class' => 'btn btn-success']) !!}
                    <a href="{{ route('biologicals.index') }}" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    {!! Form::close() !!}
@stop