<!DOCTYPE html>
<html lang="en">

<head>
    @include('FrontEnd/dashboardHead')
    <title>24/7 MD - Dashboard</title>
</head>

<body id="page-top">

@include('FrontEnd/patientdashSide')

@include('FrontEnd/dashTopBar')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color:#1b2f45"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    
        <!-- DataTable-->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Scheduled Appointment for Sept 27, 2022</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date of Birth</th>
                                <th>Age</th>
                                <th>Chief Complaint</th>
                                <th>Allergies</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>Jericho Agudo</td>
                                <td>June 2, 1998</td>
                                <td>24</td>
                                <td>LBM</td>
                                <td>NKA</td>
                                <td>8:00AM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    
        <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Most Recent Consultation</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>Date of Consultation</th>
                            <th>Chief Complaint</th>
                            <th>Allergies</th>
                            <th>Doctor's Note</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>Jericho Agudo</td>
                            <td>June 2, 1998</td>
                            <td>24</td>
                            <td>July 06, 2022</td>
                            <td>LBM</td>
                            <td>NKA</td>
                            <td><a href="#" style="color:gray;">Click to View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</div>
<!-- End of Main Content -->

@incldue('FrontEnd/dashFooter')

</body>

</html>