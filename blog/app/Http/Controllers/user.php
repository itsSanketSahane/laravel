<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class user extends Controller
{   
   public function valid(Request $request)
   {
        $request->validate([
            'fname'=>'required',
           'lname'=>'required',
            'email'=>'required|email',
            'no'=>'required|min:10|max:10'
        ]);
   }

   public function store(Request $request){
  
    $fn=$request->fname;
    $ln=$request->lname;
    $email=$request->email;
    $no=$request->no;
    $file=$request->myfile;
    $data=array('fname'=>$fn,'lname'=>$ln,'email'=>$email,'no'=>$no,'file'=>$file);
    DB::table('reg')->insert($data); 
    echo "<center><h1>Welcome $fn &nbsp $ln</h1></center>";
    }
}
