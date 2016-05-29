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
        return redirect('/paints');
    }
    public function addexhibition(Request $request)
    {
        $p= new Exhibition;
        $p->name=$request->name;
        $p->time=$request->time;
        $p->save();
        return redirect('/exhibitions');
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
    public function exhibitiondel(Exhibition $exhibition)
    {
        $exhibition->delete();
        return redirect('/exhibitions');
    }
    public function paints()
    {
        $p = Paint::all();
        return view ('paints',['paints'=>$p]);
    }

    public  function paintupdatepage(Paint $paint)
    {
return view ('paintupdatepage',['paint'=>$paint]);
    }
    public function paintupdate(Request $request, Paint $paint)
    {
        $paint->style=$request->name;
        $paint->save();
        return redirect ('/paints');

    }
    public function paintdel(Paint $paint)
    {
        $paint->delete();
        return redirect('/paints');
    }
}
