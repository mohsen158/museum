<?php

namespace App\Http\Controllers;

use App\Paint;
use Illuminate\Http\Request;
use App\Exhibition;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class publicct extends Controller
{
    //
    public function addpaintpage()
    {
        return view('addpaint');
    }
    public function addpaint(Request $request)
    {
        $p=new Paint;
        $p->style=$request->name;
        $p->save();
        return redirect('/addpaint');
    }
    public function addexhibition(Request $request)
    {
        $p= new Exhibition;
        $p->name=$request->name;
        $p->time=$request->time;
        $p->save();
        return redirect('/addexhibition');
    }
    public function addexhibitionpage()
    {
        return view('addexhibitionpage');
    }
    public function exhibitions()
    {
        $ex=Exhibition::all();

return view('exhibitions',['ex' => $ex]);
    }

    public  function exhibitionupdatepage(Exhibition $exhibition)
    {
        return view('updateexhibitionpage',['ex'=>$exhibition]);
    }
    public  function exhibitionupdate(Request $request,Exhibition $exhibition)
    {
        $exhibition->name=$request->name;
        $exhibition->time=$request->time;
        $exhibition->save();
        return redirect('/exhibitions');
        //return view('updateexhibitionpage',['ex'=>$exhibition]);
    }
}
