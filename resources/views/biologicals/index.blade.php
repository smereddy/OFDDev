@extends('layouts.app')
@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['biologicals.store'], 'files' => true,]) !!}
    <div class="container-fluid">

        <div class="jumbotron" style="margin-bottom: 5px; ">

            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset('img/login.png')}}">
                </div>
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class="page-header1">
                            <h3><strong>Exposure Tracking Document OFD006B</strong></h3>
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
            <br>
            <br>
        
        <form class="form-horizontal">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Exposure Employee Name</label>
                    <div class="col-sm-6">
                        {!! Form::text('exposedEmployeeName', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Date of Exposure</label>
                    <div class="col-sm-6">
                        {!! Form::text('dateOfExposure', '', array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Employee ID#</label>
                    <div class="col-sm-6">
                        {!! Form::text('employeeid_1', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
    </form>
    
        <form class="form-horizontal">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Assignment</label>
                    <div class="col-sm-6">
                        {!! Form::text('assignmentBiological', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-6">Shift</label>
                    <div class="col-sm-6">
                        {{ Form::select('shift', [
                        'A' => 'A',
                        'B' => 'B',
                        'C' => 'C',
                        'DIV' => 'DIV']
                        ), array('class'=>'btn btn-primary dropdown-toggle col-sm-12') }}
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Primary IDCO</label>
                    <div class="col-sm-6">
                        {!! Form::text('idconumber', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
        </form>

        <form class="form-horizontal">
             <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">EPCR Incident#</label>
                    <div class="col-sm-6">
                        {!! Form::text('epcrIncidentNum', '', array('class'=>'form-control'))!!}
                    </div>
                </div>
            </div>
           <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Date</label>
                    <div class="col-sm-6">
                        {!! Form::text('todaysDate', '', array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                    </div>
                </div>
            </div>
             <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-sm-6 control-label">Date</label>
                    <div class="col-sm-6">
                        {!! Form::text('todaysDate', '', array('class'=>'datepicker form-control','placeholder'=>'MM/DD/YYYY'))!!}
                    </div>
                </div>
            </div>

        </form>

        <h4 style="text-align:left;"><u><strong>The following Checklist will follow:</strong></u> </h4>
        <form class="form-horizontal">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Decontaminate</strong></label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Call CHI OUCH Nurse to determine type of exposure</strong></label>
                </div>
            </div>

            <div class="container">
            <h4>True Exposure</h4>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#id">True Exposure</button>
            <div id="id" class="collapse">

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Confirm Source- Patient blood draw with OUCH Nurse</strong></label>
                </div>
            </div>


            <div class="col-sm-12">
                <div class="form-group">
                    <label class= "col-sm-2 control-label"><strong>Complete OFD 184</strong></label>
                    <div class="col-sm-2">
                        <button class="btn btn-success dropdown-toggle col-sm-12" type="button" data-toggle="dropdown"
                                href="Fillable_PDFs\Accident Module\Accident\(Accident PDF) OFD 295 Vehicle Accident Witness Statement.pdf"
                                download="(Accident PDF) OFD 295 Vehicle Accident Witness Statement">
                            <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt"> 
                            <i class="fa fa-download" aria-hidden="true"></i> Download</a></button>
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
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Report for blood draw as directed by OUCH Nurse</strong></label>
                </div>
            </div>

             <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Complete Exposure tab in ePCR </strong></label>
                </div>
            </div>
            
             <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Bag & Tag clothing if applicable - send email to PSS with pick-up location</strong></label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Notify the on-duty PSS via phone at 402-660-1060 </strong></label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>PPE has been cleaned per SOP SWD 1-0 </strong></label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Document in Company Day Book and on your Personnel Record </strong></label>
                </div>
            </div>
        </div>

         <div class="container">
            <h4>Potential Exposure</h4>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#id1">Potential Exposure</button>
            <div id="id1" class="collapse">

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Decontaminate self- wash, flush as soon as possible</strong></label>
                </div>
            </div>
            
             <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Bag & Tag clothing if applicable - send email to PSS with pick-up location</strong></label>
                </div>
            </div>
            
             <div class="col-sm-12">
                <div class="form-group">
                    <label class= "col-sm-2 control-label"><strong>Complete OFD 184</strong></label>
                    <div class="col-sm-2">
                        <button class="btn btn-success dropdown-toggle col-sm-12" type="button" data-toggle="dropdown"
                                href="Fillable_PDFs\Accident Module\Accident\(Accident PDF) OFD 295 Vehicle Accident Witness Statement.pdf"
                                download="(Accident PDF) OFD 295 Vehicle Accident Witness Statement">
                            <a class="btn btn-success dropdown-toggle col-sm-12" type="button" href="/download/a.txt">                             <i class="fa fa-download" aria-hidden="true"></i> Download</a></button>
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
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>PPE has been cleaned per SOP SWD 1-0 </strong></label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="checkbox-inline col-sm-4"><input type="checkbox"><strong>Document in Company Day Book and on your Personnel Record </strong>
                    </label>
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
    </div>
    
    @stop