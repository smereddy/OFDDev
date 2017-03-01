@extends('layouts.app')
@section('content')

    <div class="container-fluid">

        <div class="jumbotron" style="margin-bottom: 5px; ">

            <h1>Biological Exposure</h1>

            <div class="row">
                <table class="col-sm-12 form-group">
                    <tbody>
                    <tr class="bg-info">
                    <tr>
                        <td>Exposed Employee Name</td>
                        <td><?php echo ($biologicals['exposedEmployeeName']); ?></td>
                    </tr>
                    <tr>
                        <td>Date Of Exposure</td>
                        <td><?php echo ($biologicals['dateOfExposure']); ?></td>
                    </tr>
                    <tr>
                        <td>Employee ID</td>
                        <td><?php echo ($biologicals['employeeID_1']); ?></td>
                    </tr>
                    <tr>
                        <td>Assignment Biological </td>
                        <td><?php echo ($biologicals['assignmentBiological']); ?></td>
                    </tr>
                    <tr>
                        <td>shift</td>
                        <td><?php echo ($biologicals['shift']); ?></td>
                    </tr>
                    <tr>
                        <td>idco Number </td>
                        <td><?php echo ($biologicals['idcoNumber']); ?></td>
                    </tr>
                    <tr>
                        <td>epcr Incident Number</td>
                        <td><?php echo ($biologicals['epcrIncidentNum']); ?></td>
                    </tr>
                    <tr>
                        <td>Todays Date</td>
                        <td><?php echo ($biologicals['todaysDate']); ?></td>
                    </tr>
                    <tr>
                        <td>Decontaminate</td>
                        <td><?php echo ($biologicals['decontaminate']); ?></td>
                    </tr>
                    <tr>
                        <td>callChi</td>
                        <td><?php echo ($biologicals['callChi']); ?></td>
                    </tr>
                    <tr>
                        <td>confirmSource</td>
                        <td><?php echo ($biologicals['confirmSource']); ?></td>
                    </tr>
                    <tr>
                        <td>trueOFD184</td>
                        <td><?php echo ($biologicals['trueOFD184']); ?></td>
                    </tr>
                    <tr>
                        <td>blood Report</td>
                        <td><?php echo ($biologicals['bloodReport']); ?></td>
                    </tr>
                    <tr>
                        <td>Exposure Tab</td>
                        <td><?php echo ($biologicals['exposureTab']); ?></td>
                    </tr>
                    <tr>
                        <td>trueBag Tag</td>
                        <td><?php echo ($biologicals['trueBagTag']); ?></td>
                    </tr>
                    <tr>
                        <td>notifyPSS</td>
                        <td><?php echo ($biologicals['notifyPSS']); ?></td>
                    </tr>
                    <tr>
                        <td>truePPE</td>
                        <td><?php echo ($biologicals['truePPE']); ?></td>
                    </tr>
                    <tr>
                        <td>trueDocumentDayBook</td>
                        <td><?php echo ($biologicals['trueDocumentDayBook']); ?></td>
                    </tr>
                    <tr>
                        <td>pot Decontaminate</td>
                        <td><?php echo ($biologicals['potDecontaminate']); ?></td>
                    </tr>
                    <tr>
                        <td>potBag Tag</td>
                        <td><?php echo ($biologicals['potBagTag']); ?></td>
                    </tr>
                    <tr>
                        <td>potOFD184</td>
                        <td><?php echo ($biologicals['potOFD184']); ?></td>
                    </tr>
                    <tr>
                        <td>potPPE</td>
                        <td><?php echo ($biologicals['potPPE']); ?></td>
                    </tr>
                    <tr>
                        <td>potDocumentDayBook</td>
                        <td><?php echo ($biologicals['potDocumentDayBook']); ?></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop