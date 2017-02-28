@extends('layouts.app')
@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['hazmat.store'], 'files' => true,]) !!}
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
    </div>
    <br>
    <br>
    <div class="panel-body">
        <form class="form-horizontal">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger" align="center">
                        <strong>NOTE: If you have symptoms and require treatment you must also complete the Injury/OFD6 tab.</strong>
                    </div>
                </div>
            </div>
        <form class="form-horizontal">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Today's Date</label>
                    <div class="col-sm-6">
                        {!! Form::text('accidentdate', '', array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Employee ID#</label>
                    <div class="col-sm-6">
                        {!! Form::text('driverid', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br>

            <form class="form-horizontal">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>   Contact CorVel Enterprise Comp @ 877-764-3574.  Tell them you have a Hazardous Material Exposure and the call is for reporting ONLY. </strong></label>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Once you have completed the call, record CorVel Claim #.</strong></label>
                        <div class="col-sm-4">
                            {!! Form::text('FrmsCas', '', array('class'=>'form-control'))!!}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Fill out OFD-006d Hazmat Exposure Report form</strong>
                           </label>
                        <div class="col-sm-2">

                            <a class="btn btn-success dropdown-toggle col-sm-12" type="button"
                               href="Fillable_PDFs\Exposure Module\Exposure\(Exposure PDF - Updated OFD 006d) OFD 025 - HazMat Exposure Report.pdf"
                               download="(Exposure PDF - Updated OFD 006d) OFD 025 - HazMat Exposure Report.pdf">
                                <span class="glyphicon glyphicon-save"></span> Download</a>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-cloud-upload"></span> Upload
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary dropdown-toggle col-sm-12" type="button" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-search"></span> Retrieve
                        </div>
                    </div>
                </div>
                    </div>
            </form>
        <div class="row">
            <div class="col-sm-12 form-group">
                <label class="col-sm-4">In case of symptoms</label>
                <div class="col-sm-2">
                    {{ Form::select('shift', [
                    'yes' => 'YES',
                    'no' => 'NO']
                    ), array('class'=>'btn btn-primary dropdown-toggle col-sm-12') }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 form-group" align="center">
                <label>If you should have any other questions, please feel free to contact the PSS for assistance at 402-660-1060.
                    </label>
            </div>
        </div>

    <!--pop-up-grid-->
    <div id="myModal" class="modal fade" role="dialog">
        {!! Form::open(['method' => 'POST', 'route' => ['accidents.store'], 'files' => true,]) !!}
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