<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\PatientAccount;
use App\Models\PatientAppointment;
use App\Models\Schedule;
use App\Models\DoctorAccount;
use DB;

class DoctorDashboard extends Controller
{

    // dashboard
    public function doctorDashboard() {

        // next consultant
        $consultants = DB::select(
            "SELECT pa.first_name, pa.last_name, s.start_time 
            FROM `patient_appointments` AS pa
            INNER JOIN doctor_accounts AS da ON pa.doctor_id = da.doctor_id
            INNER JOIN schedules AS s ON da.sched_id = s.sched_id;"
        );

        // pending requests
        $pending_reqs = DB::select(
            "SELECT COUNT(appointment_id) - 1 AS pending_requests
            FROM patient_appointments;");

        // patients overview
        $patients = DB::select(
            "SELECT first_name, last_name, birthdate, FLOOR((CURRENT_DATE() - birthdate) / 10000) AS age, complaint, allergies
            FROM `patient_appointments`;"
        );

        return view('dashboard', compact('patients', 'pending_reqs', 'consultants'));
    }

    // Patients List
    public function patientsList() {
        $patients = DB::select(
            "SELECT pa.first_name, pa.last_name, pa.birthdate, FLOOR((CURRENT_DATE() - pa.birthdate) / 10000) AS age, pa.appointment_date, s.services 
            FROM `patient_accounts` AS pc
            INNER JOIN patient_appointments AS pa ON pc.patient_id = pa.patient_id
            INNER JOIN services AS s ON pa.service_id = s.service_id"
        );
        return view('tables', compact('patients'));
  }

    // Patients Chart
    public function patientChart() {
        $patients = DB::select(
            "SELECT first_name, last_name, birthdate, FLOOR((CURRENT_DATE() - birthdate) / 10000) AS age, complaint, allergies
            FROM `patient_appointments`"
        );
        return view('patient-chart', compact('patients'));
  }

    // Consultation schedule
    public function consultationSched() {
        $patients = DB::select(
            "SELECT pa.first_name, pa.last_name, pa.birthdate, FLOOR((CURRENT_DATE() - pa.birthdate) / 10000) AS age, pa.appointment_date, s.start_time
            FROM `patient_appointments` AS pa
            INNER JOIN doctor_accounts AS da ON pa.doctor_id = da.doctor_id
            INNER JOIN schedules AS s ON da.sched_id = s.sched_id;"
        );
        return view('consultation-schedule', compact('patients'));
    }
}
