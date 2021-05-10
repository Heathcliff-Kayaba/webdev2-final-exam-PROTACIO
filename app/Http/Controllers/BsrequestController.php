<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bsrequest;

class BsrequestController extends Controller
{
    function show() {

        $data = Bsrequest::all();
        return view('bible-study-requests',['bsrequest'=>$data]);
    }

    function index(){

        return view('bible-study-request-form');
    }

    function redirect(){

        return view('thank-you');
    }

    function addRequest(Request $req) {

        $bsrequest = new Bsrequest;
        $bsrequest->name=$req->name;
        $bsrequest->email=$req->email;
        $bsrequest->contact=$req->contact;
        $bsrequest->birthdate=$req->birthdate;
        $bsrequest->religion=$req->religion;
        $bsrequest->bsdate=$req->bsdate;
        $bsrequest->bstime=$req->bstime;
        $bsrequest->bsaddress=$req->bsaddress;
        $bsrequest->save();

        return redirect('/thank-you');
    }
}
