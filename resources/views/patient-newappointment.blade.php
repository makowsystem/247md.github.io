<!DOCTYPE html>
<html lang="en">

<head>
    @include('FrontEnd/dashboardHead')
    <title>24/7 MD - New Appointment</title>
</head>

<body id="page-top">

@include('FrontEnd/pnewappointSide')

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
                <h6 class="m-0 font-weight-bold text-primary">Schedule New Appointment</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            

                        <div class="form-group row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                Date of Appointment:
                                <input type="date" class="form-control form-control-user" id="exampledateofappointment"
                                    placeholder="dateofappointment">
                            </div>
    
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                Time of Appointment:
                                <input type="time" class="form-control form-control-user" id="exampletimeofappointment"
                                    placeholder="timeofappointment">
                            </div>
                            
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                Gender: <br />
                                <input type="radio" name="gender" value="male" /> Male  &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" value="female" /> Female &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" value="other" /> Others
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="First Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Last Name">
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-sm-4">
                                Age:
                                <input type="text" class="form-control form-control-user" id="exampleage"
                                    placeholder="Age">
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                Date of Birth:
                                <input type="date" class="form-control form-control-user" id="exampledateofbirth"
                                    placeholder="dateofappointment">
                            </div>
                            <div class="col-sm-4">
                                Allergies:
                                <input type="text" class="form-control form-control-user" id="exampleAllergies" placeholder="Allergies">
                            </div>    
                        </div>
                        <div class="form-group">
                            
                            <div class="col-sm-12">
                                Chief Complaint:
                                <textarea rows="10" cols="50" class="form-control form-control-user" id="exampledescription"
                                    placeholder="Description">
                                </textarea>
                            </div>
                        </div>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color:#1b2f45"><i
                            class="fas fa-sm text-white-50"></i>Submit Appointment</a>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- DataTables Example -->
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

@include('FrontEnd/dashFooter')

</body>

</html>