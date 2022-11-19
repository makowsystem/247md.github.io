<!DOCTYPE html>
<html lang="en">

<head>
    @include('FrontEnd/dashboardHead')
    <title>24/7 MD - Patient Database</title>
</head>

<body id="page-top">

@include('FrontEnd/patientdbSide')

@include('FrontEnd/dashTopBar')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Patient Database</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color:#1b2f45"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>


<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Patient List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>Consultation Date</th>
                            <th>Service</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>Kevin Pastores</td>
                            <td>June 2, 1998</td>
                            <td>24</td>
                            <td>Sept 25, 2022</td>
                            <td>Request for Medical Certificate</td>
                        </tr>

                        <tr>
                            <td>John Doe</td>
                            <td>August 2, 1998</td>
                            <td>24</td>
                            <td>Sept 25, 2022</td>
                            <td>Online Consultation</td>
                        </tr>

                        <tr>
                            <td>Mary Jane</td>
                            <td>August 24, 1998</td>
                            <td>24</td>
                            <td>Sept 25, 2022</td>
                            <td>Online Consultation</td>
                        </tr>

                        <tr>
                            <td>Chris Monroe</td>
                            <td>August 24, 1992</td>
                            <td>30</td>
                            <td>Sept 25, 2022</td>
                            <td>Follow-Up Check Up</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('FrontEnd/dashFooter')

</body>

</html>