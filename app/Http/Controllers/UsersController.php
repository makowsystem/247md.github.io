<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdminAccount;
use App\Models\DoctorAccount;
use App\Models\PatientAccount;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;

class UsersController extends Controller
{
    public function registerAsPatient(Request $request) {
        $this -> validate($request, [
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required | same:password'
        ]);

        // patient account register
        $patient = new PatientAccount;
        $patient -> first_name = $request -> input('first_name');
        $patient -> last_name = $request -> input('last_name');
        $patient -> birthdate -> $request -> input('birthdate');
        $patient -> email = $request -> input('email');
        // $new_patient -> password = Hash::make($request -> input('password'));
        $patient -> password = $request -> input('password');
        $patient -> save();

        return redirect('/login');
    }

    public function registerAsDoctor(Request $request) {
        $this -> validate($request, [
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required | same:password'
        ]);
        
        // doctor account register
        $doctor = new DoctorAccount;
        $doctor -> first_name = $request -> input('first_name');
        $doctor -> last_name = $request -> input('last_name');
        $doctor -> birthdate -> $request -> input('birthdate');
        $doctor -> email = $request -> input('email');
        // $new_patient -> password = Hash::make($request -> input('password'));
        $doctor -> password = $request -> input('password');
        $doctor -> prc_identification = $request -> input('prc_identification');
        $doctor -> days = $request -> input('days');
        $doctor -> time = $request -> input('time');
        $doctor -> save();

        return redirect('/login');
    }

    public function login(Request $request) {
        $patient = PatientAccount::where("email", "=", $request -> email) -> first();
        $doctor = DoctorAccount::where("email", "=", $request -> email) -> first();

        if ($patient) {
            if (Hash::check($request -> password, $patient -> password)) {
                $request -> session() -> put('id', patient_id);
                $request -> session() -> put('first_name', first_name);
                $request -> session() -> put('birthdate', birthdate);
                $request -> session() -> put('email', email);
                $request -> session() -> put('password', password);

                return redirect('/patient-dashboard');
            }
        }

        if ($doctor) {
            if (Hash::check($request -> password, $doctor -> password)) {
                $request -> session() -> put('id', doctor_id);
                $request -> session() -> put('first_name', first_name);
                $request -> session() -> put('last_name', last_name);
                $request -> session() -> put('birthdate', birthdate);
                $request -> session() -> put('email', email);
                $request -> session() -> put('password', password);
                $request -> session() -> put('prc_identification', prc_identification);
                $request -> session() -> put('department', department);
                $request -> session() -> put('days', days);
                $request -> session() -> put('time', time);

                return redirect('/dashboard');
            }
        }
    }

    public function showRegister() {
        return view('register');
    }

    public function showLogin() {
        return view('login');
    }

    public function userLogin(Request $request){
        $user = PatientAccount::where("email", "=", $request->email)->first();
        if ($user){
            if ($request -> pw == $user -> password){
                $request->session()->put('id', $user -> patient_id);
                $request->session()->put('email', $user -> email);
                $request->session()->put('first_name', $user -> first_name);
                $request->session()->put('last_name', $user -> last_name);

                return redirect('/patient-dashboard');
            }else{
                return redirect("/login")->with('fail', 'Incorrect password');
            }
        }else{
            $user = DoctorAccount::where("email", "=", $request->email)->first();
            if ($user){
                if ($request -> pw == $user -> pass){
                    $request->session()->put('id', $user -> doctor_id);
                    $request->session()->put('email', $user -> email);
                    $request->session()->put('first_name', $user -> first_name);
                    $request->session()->put('last_name', $user -> last_name);
    
                    return redirect('/dashboard');
                }else{
                    return redirect("/login")->with('fail', 'Incorrect password');
                }
            } else {
                return redirect("/login")->with('fail', 'Account does not exist');
            }
        }
    }

    public function showProfile(){
        if (Session::get("id")){
            return view('profile');
        }else{
            return "Not logged in!";
        }
    }


    public function logout(){
        if (Session::has('id')){
            Session::pull('id');
            Session::pull('email');
            Session::pull('role');
            Session::pull('first_name');
            Session::pull('last_name');
            return redirect('/');
        }
    }

}
