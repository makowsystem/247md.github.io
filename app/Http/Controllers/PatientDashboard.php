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

class PatientDashboard extends Controller
{
    // sched appointment
    // appointments today
    public function appointmentToday() {
        $schedules = DB::select(
            "SELECT DAY(appointment_date) AS today_consultation
            FROM patient_appointments
            WHERE DAY(appointment_date) = DAY(CURRENT_DATE);"
        );
        $not = DB::select(
            "SELECT DAY(CURRENT_DATE()) AS today;"
        );

        // scheduled appointments
        $appointments = DB::select(
            "SELECT pa.first_name, pa.last_name, pa.birthdate, FLOOR((CURRENT_DATE() - pa.birthdate) / 10000) AS age, complaint, allergies, s.start_time
            FROM `patient_appointments` AS pa
            INNER JOIN doctor_accounts AS da ON pa.doctor_id = da.doctor_id
            INNER JOIN schedules AS s ON da.sched_id = s.sched_id
            WHERE DAY(appointment_date) = DAY(CURRENT_DATE())"
        );

        // recent consultations
        $consultations = DB::select(
            "SELECT pa.first_name, pa.last_name, pa.birthdate, FLOOR((CURRENT_DATE() - pa.birthdate) / 10000) AS age, appointment_date, complaint, allergies, doctors_note
            FROM `patient_appointments` AS pa
            INNER JOIN doctor_accounts AS da ON pa.doctor_id = da.doctor_id
            INNER JOIN schedules AS s ON da.sched_id = s.sched_id
            WHERE DAY(appointment_date) < DAY(CURRENT_DATE())"
        );


        return view('patient-dashboard', compact('appointments', 'consultations', 'schedules', 'not'));
    }

    // new appointment
    public function newAppointment(Request $request) {

        // new appointment
        // $new_app = new PatientAppointment;
        // $new_app ->

        // recent consultations
        $consultations = DB::select(
            "SELECT pa.first_name, pa.last_name, pa.birthdate, FLOOR((CURRENT_DATE() - pa.birthdate) / 10000) AS age, appointment_date, complaint, allergies, doctors_note
            FROM `patient_appointments` AS pa
            INNER JOIN doctor_accounts AS da ON pa.doctor_id = da.doctor_id
            INNER JOIN schedules AS s ON da.sched_id = s.sched_id
            WHERE DAY(appointment_date) < DAY(CURRENT_DATE());"
        );

        return view('patient-newappointment', compact('consultations'));
    }
}
