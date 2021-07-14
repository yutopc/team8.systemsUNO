<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Log;

class teacherController extends Controller{
    public function A003(){
        $items = DB::select('select i.Entrant,p.EntrantNo,p.Name,p.School,p.Scyear,i.TargetAge,p.Entrant,i.Entry,i.Course from participant p,participantinfo i where p.EntrantNo=i.EntrantNo');

        return view('teacher.A003',['items'=>$items]);
    }
    public function A003_post(Request $request){
        if(Request::get('details')){
            $E_No=Request::get('details');
            $items=DB::select('select p.Name,i.Entrant,p.EntrantNo,p.Age,p.Bdate,p.School,p.Scyear,pi.Email,pi.Addr,pi.Post,pi.Tel,i.Entry,p.Entrant,i.Course,i.TargetAge,pa.ItemSub from participant p,participantinfo i,personalinfo pi,passfail pa where p.EntrantNo=i.EntrantNo AND p.EntrantNo=pi.EntrantNo AND pi.EntrantNo=i.EntrantNo AND pa.EntrantNo=i.EntrantNo AND pa.EntrantNo=pi.EntrantNo AND pa.EntrantNo=p.EntrantNo AND p.EntrantNo=:E_No',array('E_No' => $E_No));
           $memo_text=DB::select('select memo from participantinfo where EntrantNo=:E_No',array('E_No' => $E_No));
           return view('teacher.A005',['items'=>$items],['memo'=>$memo_text]);
        }
        else if(Request::get('registration')){
            $E_No=Request::get('registration');
            $pass_memo=DB::select('select FailureMemo from passfail where EntrantNo=:E_No',array('E_No' => $E_No));

            $items=DB::select('select EntrantNo,Item1,Item2,Item3,Item4,Item5,ItemSub from passfail where EntrantNo=:E_No',array('E_No' => $E_No));
            return view('teacher.A006',['items'=>$items],['pass'=>$pass_memo]);
        }  
        else if(Request::get('A005')){
            $param =[
                'id'=>Request::get('A005'),
                'memo'=>Request::get('memo')];
            DB::update('update participantinfo set Memo =:memo where EntrantNo = :id',$param);

            $items = DB::select('select i.Entrant,p.EntrantNo,p.Name,p.School,p.Scyear,i.TargetAge,p.Entrant,i.Entry,i.Course from participant p,participantinfo i where p.EntrantNo=i.EntrantNo');

            return view('teacher.A003',['items'=>$items]);
        }
        else{
            $sum=(int)Request::get('q1')+(int)Request::get('q2')+(int)Request::get('q3')+(int)Request::get('q4')+(int)Request::get('q5');
            $param =[
                'id'=>Request::get('A006'),
                'pass'=>Request::get('Pass'),
                'item1'=>Request::get('q1'),
                'item2'=>Request::get('q2'),
                'item3'=>Request::get('q3'),
                'item4'=>Request::get('q4'),
            'item5'=>Request::get('q5'),
        'itemsub'=>$sum ];
            
          
            DB::update('update passfail set FailureMemo =:pass,Item1=:item1,Item2=:item2,Item3=:item3,Item4=:item4,Item5=:item5,ItemSub=:itemsub where EntrantNo = :id',$param);

            $items = DB::select('select i.Entrant,p.EntrantNo,p.Name,p.School,p.Scyear,i.TargetAge,p.Entrant,i.Entry,i.Course from participant p,participantinfo i where p.EntrantNo=i.EntrantNo');

            return view('teacher.A003',['items'=>$items]);
        }
    
       
    }
    public function A005(){
        return view('teacher.A005');
    }
    public function A006(){
        return view('teacher.A006');
    }
}
