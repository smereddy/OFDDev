@extends('layouts.app')
@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['injuries.store'], 'files' => true,]) !!}
    <div class="container-fluid">

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
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" align="center">
                    <strong>COMPLETE ALL FORMS AND FORWARD VIA CHAIN-OF-COMMAND WITHIN 48 HOURS
                    </strong>
                </div>
            </div>
        </div>
        <form class="form-horizontal">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4">Today's Date:</label>
                    <div class="col-sm-6">
                        {!! Form::text('createdate', '', array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4">Date of Injury:</label>
                    <div class="col-sm-6">
                        {!! Form::text('injurydate', '', array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4">Assignment</label>
                    <div class="col-sm-8">
                        {!! Form::text('assignmentinjury', '', array('class'=>'form-control'))!!}

                    </div>
                </div>
            </div>
        </form>
        <br>
        <form class="form-horizontal">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4">Injured Name</label>
                    <div class="col-sm-6">
                        {!! Form::text('injuredemployeename', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4">Personnel ID #</label>
                    <div class="col-sm-6">
                        {!! Form::text('injuredemployeeid', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4">Shift</label>
                    <div class="col-sm-8">
                        {{ Form::select('shift', [
                        'A' => 'A',
                        'B' => 'B',
                        'C' => 'C',
                        'DIV' => 'DIV']
                        ), array('class'=>'btn btn-primary dropdown-toggle col-sm-12') }}
                    </div>
                </div>
            </div>
        </form>
        <form class="form-horizontal">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Captain #</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Battalion Chief #</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Assistant Chief#</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </form>
        <form class="form-horizontal">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">FRMS Incident #</label>
                    <div class="col-sm-6">
                        {!! Form::text('frmsincidentnum', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">
                    <label class="col-sm-2 control-label">CorVel ID #</label>
                    <div class="col-sm-3">
                        {!! Form::text('corvelid', '', array('class'=>'form-control'))!!}
                    </div>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label class="checkbox-inline">(Corvel TMC will initiate at time of call)</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline">All injuries must have FRMS incident ID#- if non-incident
                        related,inform dispatch of your injury
                        and needs for an FRMS ID#</label>
                </div>
            </div>
        </form>
        <form class="form-horizontal">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Call CorVel at
                            800-825-9543</strong>
                        - CorVel will complete First Notification of Injury(NWCC) and submit NE Workman's Compensation
                        Court Form.</label>
                    <div class="col-sm-2">
                        {!! Form::text('corvelcallnum', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>CorVel Work Ability
                            Report</strong>
                        - Only if seeking medical attention. Complete "Employee Section" and sign at bottom.</label>
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
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Investigation Report for
                            Occupational Injury or Illness</strong>
                        - Both employee and supervisor must complete and sign.</label>
                    <div class="col-sm-2">
                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button"
                           href="Fillable_PDFs\Injury Module\Injury\(Injury PDF) OFD Investigation Report for Occupational Injury or Illness.pdf"
                           download="(Injury PDF) OFD Investigation Report for Occupational Injury or Illness">
                            <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-info dropdown-toggle col-sm-12" data-toggle="modal"
                                data-target="#myModal">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary dropdown-toggle col-sm-12" type="button">
                            <i class="fa fa-search" aria-hidden="true"></i> Retrieve</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Statement of Witness of
                            Accident</strong></label>
                    <div class="col-sm-2">
                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button"
                           href="Fillable_PDFs\Injury Module\Injury\(Injury PDF) OFD 295a Injury Witness Statement.pdf"
                           download="(Injury PDF) OFD 295a Injury Witness Statement">
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
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Employee's Choice of
                            Physician or Doctor Form</strong>
                        - Two signatures required - both section A & B.</label>
                    <div class="col-sm-2">
                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button"
                           href="Fillable_PDFs\Injury Module\Injury\(Injury PDF) OFD Employee's Choice of Physician or Doctor.pdf"
                           download="(Injury PDF) OFD Employee's Choice of Physician or Doctor">
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
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>OFD - 25 Injury on
                            Job</strong>
                        - Send an attachment electronically to OmafIOD@cityofomaha.org</label>
                    <div class="col-sm-2">
                        <a class="btn btn-success dropdown-toggle col-sm-12" type="button"
                           href="Fillable_PDFs\Injury Module\Injury\(Injury PDF) OFD 025 Injury Intradepartmental Communication.pdf"
                           download="(Injury PDF) OFD 025 Injury Intradepartmental Communication">
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
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4 num"><input type="checkbox"><strong>Complete FRMS Casuality &
                            Narrative Tab</strong>
                        - Fire Service and Fire Service Injury.</label>
                    <div class="col-sm-4">
                        {!! Form::text('FrmsCas', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete in EPCR</strong>
                        - All cases.</label>
                    <div class="col-sm-4">
                        {!! Form::text('EPCR', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Document IOD in
                            Workforce</strong>
                        - Only if seeking medical attention.</label>
                    <div class="col-sm-4">
                        {!! Form::text('DocIOD', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Document in Operational Day
                            Book and Personnel Record</strong></label>
                    <div class="col-sm-4">
                        {!! Form::text('DocOPPR', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
        </form>
        <form class="form-horizontal">
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="dropdown">
                        <label class="col-sm-4">In case attend Omaha Police Academy - Training Assigned</label>
                        <div class="col-sm-2">
                            {{ Form::select('shift', [
                            'yes' => 'YES',
                            'no' => 'NO']
                            ), array('class'=>'btn btn-primary dropdown-toggle col-sm-12') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label><u>For Fire Omaha Police Recruits: Use normal Chain-of-Command for Tracking
                            Document</u></label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline"><input type="checkbox">Have Police Supervisor Complete and Sign
                        Supervisor section on Investigation Report
                        and Witness Statement</label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline"><input type="checkbox">Call Fire Supervisor or SWD B/C immediately
                        and notify CorVel by phone</label>
                </div>
            </div>
        </form>
        <div class="col-sm-12">
            <label class="col-sm-6"></label>
            <div class="btn-bottom">
                <div class="btn btn-primary">Save & Exit &raquo;</div>
                <div class="btn btn-primary">Submit &raquo;</div>
            </div>
        </div>
        <!--<div>-->
        <!--    <div class="navbar navbar-default navbar-fixed-bottom">-->
        <!--        <div class="container">-->
        <!--            <div class="navbar-collapse collapse" id="footer-body">-->
        <!--                <ul class="nav navbar-nav">-->
        <!---->
        <!--                </ul>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
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