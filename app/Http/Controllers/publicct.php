<?php

namespace App\Http\Controllers;

use App\Paint;
use App\Museum;
use App\Loan;
use App\Permanent_collection;
use App\Sculpture;
use App\Calligraphy;
use Illuminate\Http\Request;
use App\Exhibition;
use App\Artist;
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
    public function addsculptpage()
    {
        return view('addsculpt');
    }
    public function addsculp(Request $request)
    {
        $p=new Sculpture;
        $p->substance=$request->text;
        $p->save();
        return redirect('/addsculpture');
    }
    public function addcalligpage()
    {
        return view('addcallig');
    }
     public function calligraphies()
    {
        $var = Calligraphy::all();
        return view('calligraphies',['allcalig' => $var]);
    }
    public function addcallig(Request $request)
    {
        $p=new Calligraphy;
        $p->style=$request->text;
        $p->save();
        return redirect('/addcalligraphy');
    }
    public  function calligraphyupdatepage(Calligraphy $calligraphy)
    {
        return view('updatecalligraphypage',['ex' => $calligraphy]);
    }
    public  function calligraphyupdate(Request $request,Calligraphy $calligraphy)
    {
        $calligraphy->style=$request->name;
        $calligraphy->save();
        return redirect('/calligraphies');
        //return view('updateexhibitionpage',['ex'=>$exhibition]);
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
    public function addartistpage()
    {
        return view('add',['title'=>'Add Artist','action'=>'/addartist','inputarr'=>['name']]);
    }
    public function addartist(Request $req)
    {
        $arti= new Artist;
        $arti->name=$req->name;
        $arti->save();
        return redirect('addartist');
    }

    //New Amir

    //permanent collection functions

    public function addmuseum(Request $req){
        return view('add',['title'=>'Add Museum','action'=>'/addmuseum','inputarr'=>['name','reception']]);
    }

    public function addnewmuseum(Request $request){
        $var = new Museum;
        $var->name = $request->name;
        $var->reception = $request->reception;
        $var->save();
        return redirect('addmuseum');
    }

    public function museums(Request $request){
        $museums = Museum::all();
        return view('museums',['ex'=>$museums]);
    }

    public  function updatemuseum(Museum $museum){
        return view('updatemuseumpage',['ex' => $museum]);
    }
    public  function museumupdate(Request $request,Museum $museum)
    {
        $museum->name=$request->name;
        $museum->reception = $request->reception;
        $museum->save();
        return redirect('/museums');
        //return view('updateexhibitionpage',['ex'=>$exhibition]);
    }

    public function museumdelete(Museum $museum){
        $museum->delete();
        return redirect('/museums');
    }

    //AddArtWork
    public function AddArtWork(Request $request){
        $art = new Artwork;
        $art->name = $request->name;
        $art->date = $request->date;        

        if ($request->paintStyle) {
            # code...
            $paint = new Paint;
            $paint->style = $request->paintStyle;
            $art->paint()->save($paint);
        }
        else if ($request->calligStyle) {
            # code...
            $callig = new Calligraphy;
            $callig->style = $request->calligStyle;
            $art->calligraphie()->save($callig);
        }
        else if ($requst->substance) {
            # code...
            $sclup = new Sculpture;
            $sculp->substance = $request->substance;
            $art->sculpture()->save($sculp);
        }

        if ($request->recievedDate) {
            # code...
            $loan = new Loan;
            $loan->date = $request->loanDate;
            $art->loan()->save($loan);
        }
        else if ($request->storeOrexpose) {
            # code...
            $perm = new Permanent_collection;
            $perm->ExposeOrStore = $request->storeOrexpose;
            $art->permanent()->save($perm);
        }

        $art->save();
        return redirect('addartwork');
    }






}
