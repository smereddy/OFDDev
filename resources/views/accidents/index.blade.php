@extends('layouts.app')
@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['accidents.store'], 'files' => true,]) !!}
    <div class="container-fluid">

        <div class="jumbotron" style="margin-bottom: 5px; ">

            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset('img/login.png')}}">
                </div>
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class="page-header1">
                            <h3><strong>I.O.D. Report Tracking Document (OFD-6A)</strong></h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h6><i><strong>Issue Date: 8/17/16</strong></i></h6>
                    </div>
                    <div class="col-md-2">
                        <h6><i><strong>Effective Date: 8/17/16</strong></i></h6>
                    </div>
                    <div class="col-md-12">
                        <h6><i><strong>Amends, Replaces, Rescinds: Replaces OFD-6A (Rev. 05-15)</strong></i></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" align="center">
                    <strong>Refer to SOP ADM 3-3 Fire Apparatur/Vechicle Accident Investigation</strong>
                        <br>
                        <strong>COMPLETE ALL FORMS AND FORWARD VIA CHAIN-OF-COMMAND WITHIN 48 HOURS
                        </strong>
                </div>
            </div>
        </div>
        <form class="form-horizontal">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Date of Accident</label>
                    <div class="col-sm-6">
                        {!! Form::text('accidentdate', '', array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Driver ID#</label>
                    <div class="col-sm-6">
                        {!! Form::text('driverid', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Driver Name</label>
                    <div class="col-sm-6">
                        {!! Form::text('driverid', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
        </form>

        <form class="form-horizontal">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Assignment</label>
                    <div class="col-sm-6">
                        {!! Form::text('assignmentAccident', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Apparatus</label>
                    <div class="col-sm-6">
                        {!! Form::text('apparatus', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">35 Day Limit</label>
                    <div class="col-sm-6">
                        {!! Form::text('swdLimit35', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
        </form>

        <form class="form-horizontal">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Captain #</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter Badge ID">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Battalion Chief #</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter Badge ID">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Assistant Chief#</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter Badge ID">
                    </div>
                </div>
            </div>
        </form>




        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <strong>B/C shall ensure all reports are properly completed and forwarded to Safety Officer within 24 hours of accident.
                        <br>
                        Police Report is REQUIRED on all City vehicles involved in an accident OR property damage whether on public streets, private property, or at the Fire Station
                    </strong>
                </div>
            </div>
        </div>

        <h4 style="text-align:left;"><u><strong>ACCIDENT CHECKLIST :</strong></u> </h4>
        <form class="form-horizontal">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Generate OFD 025 Intradepartmental Communication</strong>-Email to <a href="omafaccident_ofd25@cityofomaha.org" > omafaccident_ofd25@cityofomaha.org </a> </label>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete LRS 101 City of Omaha Accident Report</strong>-Include RB#, Officer Name, Badge#</label>
                    <div class="col-sm-2">
                        <button class="btn btn-success dropdown-toggle col-sm-12" type="button" data-toggle="dropdown"
                                href="Fillable_PDFs\Accident Module\Accident\(Accident PDF) LRS 101 City of Omaha Vehicle Accident Report.pdf"
                                download="(Accident PDF) LRS 101 City of Omaha Vehicle Accident Report">
                            <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">
                                <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-info dropdown-toggle col-sm-12" type="button" data-toggle="modal"
                                data-target="#myModal">
                            <span class="glyphicon glyphicon-cloud-upload"></span> Upload
                    </div>
                    <div class="col-sm-2">
                        <a href="uploads/OFD6a">Uploads/firefighters1/january/OFD6a.pdf </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete OFD 295 Vehicle Accident Witness Statement</strong>-This Report is for civilian statements only</label>
                    <div class="col-sm-2">
                        <button class="btn btn-success dropdown-toggle col-sm-12" type="button" data-toggle="dropdown"
                                href="Fillable_PDFs\Accident Module\Accident\(Accident PDF) OFD 295 Vehicle Accident Witness Statement.pdf"
                                download="(Accident PDF) OFD 295 Vehicle Accident Witness Statement">
                            <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">                             <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-info dropdown-toggle col-sm-12" type="button" data-toggle="modal"
                                data-target="#myModal">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                    </div>
                    <div class="col-sm-2">
                        <a href="uploads/OFD6a">Uploads/firefighters3/january/OFD6a.pdf </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete OFD 25a Accident Intradepartmental Communication</strong>-Driver</label>
                    <div class="col-sm-2">
                        <button class="btn btn-success dropdown-toggle col-sm-12" type="button" data-toggle="dropdown"
                                href="Fillable_PDFs\Accident Module\Accident\(Accident PDF) OFD 025a Accident Intradepartmental Communication - Driver.pdf"
                                download="(Accident PDF) OFD 025a Accident Intradepartmental Communication - Driver">
                            <span class="glyphicon glyphicon-save"></span> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-info dropdown-toggle col-sm-12" type="button" data-toggle="modal"
                                data-target="#myModal">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload</button>
                    </div>
                    <div class="col-sm-2">
                        <a href="uploads/OFD6a">Uploads/firefighters9/january/OFD6a.pdf </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete OFD 25b Accident Intradepartmental Communication</strong>-Supervisor</label>
                    <div class="col-sm-2">
                        <button class="btn btn-success dropdown-toggle col-sm-12" type="button" data-toggle="dropdown"
                                href="Fillable_PDFs\Accident Module\Accident\(Accident PDF) OFD 025b Accident Intradepartmental Communication - Supervisor.pdf"
                                download="(Accident PDF) OFD 025b Accident Intradepartmental Communication - Supervisor">
                            <span class="glyphicon glyphicon-save"></span> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-info dropdown-toggle col-sm-12" type="button" data-toggle="modal"
                                data-target="#myModal">
                            <span class="glyphicon glyphicon-cloud-upload"></span> Upload
                    </div>
                    <div class="col-sm-2">
                        <a href="uploads/OFD6a">Uploads/firefighters6/january/OFD6a.pdf </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete OFD 25c Accident Intradepartmental Communication</strong>-Other Personnel</label>
                    <div class="col-sm-2">
                        <button class="btn btn-success dropdown-toggle col-sm-12" type="button" data-toggle="dropdown"
                                href="Fillable_PDFs\Accident Module\Accident\(Accident PDF) OFD 025c Accident Intradepartmental Communication - Other Personnel.pdf"
                                download="(Accident PDF) OFD 025c Accident Intradepartmental Communication - Other Personnel">
                            <span class="glyphicon glyphicon-save"></span> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-info dropdown-toggle col-sm-12" type="button" data-toggle="modal"
                                data-target="#myModal">
                            <span class="glyphicon glyphicon-cloud-upload"></span> Upload
                    </div>
                    <div class="col-sm-2">
                        <a href="uploads/OFD6a">Uploads/firefighters7/january/OFD6a.pdf </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong> Complete OFD 31-OFD Damaged, Lost, Stolen Equipment Report</strong></label>
                    <div class="col-sm-2">
                        <button class="btn btn-success dropdown-toggle col-sm-12" type="button" data-toggle="dropdown"
                                href="Fillable_PDFs\Accident Module\Accident\(Accident PDF) OFD 31 Lost, Damaged or Stolen Equipment Report.pdf"
                                download="(Accident PDF) OFD 31 Lost, Damaged or Stolen Equipment Report">
                            <span class="glyphicon glyphicon-save"></span> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-info dropdown-toggle col-sm-12" type="button" data-toggle="modal"
                                data-target="#myModal">
                            <span class="glyphicon glyphicon-cloud-upload"></span> Upload
                    </div>
                    <div class="col-sm-2">
                        <a href="uploads/OFD6a">Uploads/firefighters7/january/OFD6a.pdf </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong> Complete OFD 127 Request for Services Form</strong></label>
                    <div class="col-sm-2">
                        <button class="btn btn-success dropdown-toggle col-sm-12" type="button" data-toggle="dropdown"
                                href="Fillable_PDFs\Accident Module\Accident\(Accident PDF) OFD 127 Request for Services.pdf"
                                download="(Accident PDF) OFD 127 Request for Services">
                            <span class="glyphicon glyphicon-save"></span> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-info dropdown-toggle col-sm-12" type="button" data-toggle="modal"
                                data-target="#myModal">
                            <span class="glyphicon glyphicon-cloud-upload"></span> Upload
                    </div>
                    <div class="col-sm-2">
                        <a href="uploads/OFD6a">Uploads/firefighters7/january/OFD6a.pdf </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong> Complete DR 41 State of Nebraska DMV Vehicle Accident Report</strong></label>
                    <div class="col-sm-2">
                        <button class="btn btn-success dropdown-toggle col-sm-12" type="button" data-toggle="dropdown"
                                href="Fillable_PDFs\Accident Module\Accident\(Accident PDF) DR 41 State of Nebraska DMV Vehicle Accident Report"
                                download="(Accident PDF) DR 41 State of Nebraska DMV Vehicle Accident Report">
                            <span class="glyphicon glyphicon-save"></span> Download</a>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-info dropdown-toggle col-sm-12" type="button" data-toggle="modal"
                                data-target="#myModal">
                            <span class="glyphicon glyphicon-cloud-upload"></span> Upload
                    </div>
                    <div class="col-sm-2">
                        <a href="uploads/OFD6a">Uploads/firefighters7/january/OFD6a.pdf </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong> Call Law Department Investigator</strong>- Call 444-5131- Request report be faxed to SWD fax # 444-6378. You can leave a message with rig # address of incident, date, time and RB#</label>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong> Enter in Company Day Book</strong></label>
                </div>
            </div>
        </form>
        <div class="modal-footer">
            {!! Form::submit('Upload',['class' => 'btn btn-success']) !!}
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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