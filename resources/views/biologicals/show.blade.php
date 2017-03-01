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
                        <td><?php echo ($ofd6b['exposedEmployeeName']); ?></td>
                    </tr>
                    <tr>
                        <td>Date Of Exposure</td>
                        <td><?php echo ($ofd6b['dateOfExposure']); ?></td>
                    </tr>
                    <tr>
                        <td>Employee ID</td>
                        <td><?php echo ($ofd6b['employeeID_1']); ?></td>
                    </tr>
                    <tr>
                        <td>Assignment Biological </td>
                        <td><?php echo ($ofd6b['assignmentBiological']); ?></td>
                    </tr>
                    <tr>
                        <td>shift</td>
                        <td><?php echo ($ofd6b['shift']); ?></td>
                    </tr>
                    <tr>
                        <td>idco Number </td>
                        <td><?php echo ($ofd6b['idcoNumber']); ?></td>
                    </tr>
                    <tr>
                        <td>epcr Incident Number</td>
                        <td><?php echo ($ofd6b['epcrIncidentNum']); ?></td>
                    </tr>
                    <tr>
                        <td>Todays Date</td>
                        <td><?php echo ($ofd6b['todaysDate']); ?></td>
                    </tr>
                    <tr>
                        <td>Decontaminate</td>
                        <td><?php echo ($ofd6b['decontaminate']); ?></td>
                    </tr>
                    <tr>
                        <td>callChi</td>
                        <td><?php echo ($ofd6b['callChi']); ?></td>
                    </tr>
                    <tr>
                        <td>confirmSource</td>
                        <td><?php echo ($ofd6b['confirmSource']); ?></td>
                    </tr>
                    <tr>
                        <td>trueOFD184</td>
                        <td><?php echo ($ofd6b['trueOFD184']); ?></td>
                    </tr>
                    <tr>
                        <td>blood Report</td>
                        <td><?php echo ($ofd6b['bloodReport']); ?></td>
                    </tr>
                    <tr>
                        <td>Exposure Tab</td>
                        <td><?php echo ($ofd6b['exposureTab']); ?></td>
                    </tr>
                    <tr>
                        <td>trueBag Tag</td>
                        <td><?php echo ($ofd6b['trueBagTag']); ?></td>
                    </tr>
                    <tr>
                        <td>notifyPSS</td>
                        <td><?php echo ($ofd6b['notifyPSS']); ?></td>
                    </tr>
                    <tr>
                        <td>truePPE</td>
                        <td><?php echo ($ofd6b['truePPE']); ?></td>
                    </tr>
                    <tr>
                        <td>trueDocumentDayBook</td>
                        <td><?php echo ($ofd6b['trueDocumentDayBook']); ?></td>
                    </tr>
                    <tr>
                        <td>pot Decontaminate</td>
                        <td><?php echo ($ofd6b['potDecontaminate']); ?></td>
                    </tr>
                    <tr>
                        <td>potBag Tag</td>
                        <td><?php echo ($ofd6b['potBagTag']); ?></td>
                    </tr>
                    <tr>
                        <td>potOFD184</td>
                        <td><?php echo ($ofd6b['potOFD184']); ?></td>
                    </tr>
                    <tr>
                        <td>potPPE</td>
                        <td><?php echo ($ofd6b['potPPE']); ?></td>
                    </tr>
                    <tr>
                        <td>potDocumentDayBook</td>
                        <td><?php echo ($ofd6b['potDocumentDayBook']); ?></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop