<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Immunisation_recorder;
use Illuminate\Support\Facades\Auth;
use Execption;
/*
send sms 
*/
class DashboardController extends Controller
{ 
    public function sendsms(){
        $children = DB::table('immunisation_recorders')->get()->toArray();
        $vaccine=[];
        foreach($children as $ch):
        $vaccine=[
            'HepB'=>$ch->HepB,
            'HepB1'=>$ch->HepB1,
            'RV'=>$ch->RV,
            'RV2'=>$ch->RV2,
            'RV3'=>$ch->RV3,
            'DTap1'=>$ch->DTap1,
            'DTap2'=>$ch->DTap2,
            'DTap3'=>$ch->DTap3,
            'Hib1' => $ch->Hib1,
            'Hib2' => $ch->Hib2,
            'Hib3' => $ch->Hib3,
            'PCV1' => $ch->PCV1,
            'PCV2' => $ch->PCV2,
            'PCV3' => $ch->PCV3,
            'IPV1' => $ch->IPV1,
            'IPV2' =>$ch->IPV2,
            'IPV3' =>$ch->IPV3,
            'Influenza' => $ch->Influenza
        ];
        if(in_array('',$vaccine)){
            $age =$this->calculate_age($ch->dob);
            $map_vaccine_on_time= [
                '0'=>'HepB',
                '1'=>'HepB1',
                '2'=>'RV,DTAP,Hib,PCV,IPV',
                '4'=>'RV,DTap,Hib,PCV,IPV',
                '6'=> 'HepB,RV,DTap,Hib,PCV,IPV,Influenza'
            ];
            $vacine_time = ['0','1','2','4','6'];
            if(in_array($age,$vacine_time)){
                $sid    =  'AC4a464a0c545b441e7917fdccb8f49827'; //env('TWILIO_ACCOUNT_SID');
                $token  = '800db3a4caf111225cb31e991e326bed'; //env('TWILIO_AUTH_TOKEN');
                $twilio = new Client($sid, $token);
                $check = $twilio->messages->create(
                    $ch->phone_no,
                        [
                            'from' => "+16813666429", 
                            'body' => 'Reminder for your child vaccination - '.$map_vaccine_on_time[$age]. " visit Your nearest Paediatrician",
                        ]
                    );
                    $message = $twilio->messages->create(
                        'whatsapp:+916386550905',
                        array(
                            'from' => 'whatsapp:+14155238886',
                            'body' => 'Reminder for your child vaccination - '.$map_vaccine_on_time[$age]. " visit Your nearest Paediatrician",
                        )
                    );
            } 
        }
        endforeach;
    }

    public function calculate_age($dob){

        $birthdate = Carbon::createFromFormat('Y-m-d', $dob);
        $currentDate = Carbon::now();
        $diff = $currentDate->diffInMonths($birthdate);
        return $diff ;
    }

    public function immunisation_table($id=""){
        $child= DB::table('immunisation_recorders')->where('id',$id)->get()->toArray();
        return view('immunisation_form',['id'=>$id,'child'=>$child]);
    }

    public function save_immunisation_table(Request $request){
        $validatedData = $request->validate([
            'child_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:immunisation_recorders',
            'phone_no'=> 'required',
            'dob' => 'required',
            'father_name'=> 'required',
            'mother_name'=> 'required'
        ]);
        $data= $request->all();
        $check=$child= DB::table('immunisation_recorders')->insert($data);
        if($check){
            return redirect('child-registration')->with('success', 'Child Registration successfull');
        }else{
            return redirect('child-registration')->with('success', 'Child Registration Failed');
        }
    }

    public function update_immunisation_table(Request $request,$id){
        $data= $request->all();
        $check= DB::table('immunisation_recorders')->where('id',$id)->update($data);
        if($check){
            return redirect('dashboard')->with('success', 'Child Registration successfull');
        }else{
            return redirect('dashboard')->with('success', 'Child Registration Failed');
        }
    }
    
    public function search(Request $request){
        return view('search_card');
    }
    public function search_db(Request $request){
        $phone = $request->only('phone');
        $child= DB::table('immunisation_recorders')->where('phone_no',$phone)->get()->toArray();
        if(count($child)>0){
            return view('immunisation_card',['child'=>$child]);    
        }else{
            return redirect('search-immunisation-card')->with('error', 'Record Not Found!');
        }   
    }

    public function dashboard_search(Request $request){
        $user = Auth::user();
        $phone=$request->get('phone');
        $childs = DB::table('immunisation_recorders')->where('phone_no',$phone)->get()->toArray();
        return view('dashboard',['user'=>$user,'childs'=>$childs]);
    }
}
