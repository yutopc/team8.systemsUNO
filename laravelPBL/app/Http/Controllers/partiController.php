<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class partiController extends Controller{


    public function A007(){
        return view('participant.A007');
    }

    public function A008(){
        return view('participant.A008');
    }

    public function A009(){
        return view('participant.A009');
    }

    public function A010(){
        return view('participant.A010');
    }

    public function A011(){
        return view('participant.A011');
    }

    public function A012(){
        return view('participant.A012');
    }


    public function A012_1(Request $request){

        $Name = $request -> Name;
        $Entry = $request -> Entry;
        $Course = $request -> Course;
        $Scyear = $request -> Scyear;
        $sc = $request -> sc;
        $School = $request -> School;
        $Department = $request -> Department;
        $area = $request -> area;
        $area2 = $request -> area2;
        $area3 = $request -> area3;

        return view('participant.A013',['Name'=>$Name,
                                        'Entry'=>$Entry,
                                        'Course'=>$Course,
                                        'Scyear'=>$Scyear,
                                        'School'=>$School,
                                        'Department'=>$Department,
                                        'area'=>$area,
                                        'area2'=>$area2,
                                        'area3'=>$area3]);
    }
    public function A013(){
        return view('participant.A013');
    }

    public function A013_1(Request $request){
        //受付番号発行
        $now_date = date('md');
        $count = 0;
        $EntrantNo = "A".$now_date.$count;

        $parti = [
                    'Name'=>$request->Name,
                    'School'=>$request->School,
                    'Department'=>$request->Department,
                    'Scyear'=>$request->Scyear,
                    'EntrantNo' => $EntrantNo
                ];
        $parm = [
                    'EntrantNo' => $EntrantNo,
                    'Entry'=>$request->Entry,
                    'Course'=>$request->Course
                ];
                
        DB::insert('insert into participant (Name,EntrantNo,School,Department,Scyear) values (:Name,:EntrantNo,:School,:Department,:Scyear)', $parti);
        DB::insert('insert into participantinfo (EntrantNo,Entry,Course) values (:EntrantNo,:Entry,:Course)',$parm);
        return view('participant.A014',['count'=>$count]);
    }


    public function A014(){
        return view('participant.A014');
    }
}

