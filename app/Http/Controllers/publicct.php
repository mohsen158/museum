<?php

namespace App\Http\Controllers;

use App\Paint;
use App\Artwork;
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
     public function artistspage()
    {
        
        $p = Artist::all();
        return view ('artists',['paints'=>$p]);
    }
 public function sculptpage()
    {
       $p = Sculpture::all();
        return view ('scluptures',['paints'=>$p]);
       
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
        $art->date = $request->cdate;     
        $art->save();   


        if ($request->paintStyle != '') {
            # code...
            $paintt = new Paint;
            $paintt->style = $request->paintStyle;
            $paintt->save();
            $paintt->artworks()->save($art);
            //$art->paint()->save($paintt);
           
        }
        else if ($request->calligStyle != '') {
            # code...
            $callig = new Calligraphy;
            $callig->style = $request->calligStyle;
            $callig->save();
            $collig->artworks()->save($art);
        }
        else if ($request->substance != '') {
            # code...
            $sclup = new Sculpture;
            $sculp->substance = $request->substance;
            $sculp->save();
            $sculp->artworks()->save($art);
        }

        if ($request->recievedDate != '') {
            # code...
            $loan = new Loan;
            $loan->date = $request->recievedDate;
            $loan->save();
            $loan->artworks()->save($art);
            //$art->loan()->save($loan);
        }

        else if ($request->Collection != '') {
            # code...
            $perm = new Permanent_collection;
            if ($request->Collection == 'store') {
            

                $perm->ExposeOrStore = 'store';
            }
            else if ($request->Collection == 'exposed') {
                # code...
                $perm->ExposeOrStore = 'exposed';
            }
            $perm->save();
            $perm->artworks()->save($art);
             

            //$art->permanent()->save($perm);
        }
        return redirect('/addArtwork');
    }

    public function addArtworkview(){
        return view('/addArtwork');
    }

    //Queries
    public function getartworkwithExname(Request $exname){
        $ex=Exhibition::where('name', '=', $exname->name)->firstOrFail();
        $arts=$ex->artworks()->get();
        return view('quaries',['tasks' => $arts,'subject' => 'Art of the Exhibition']);
    } 
    public function getartworkwithArtistname(Request $artistname){
        $artist=Artist::where('name', '=', $artistname->name)->
        firstOrFail();
        $arts=$artist->artworks()->get();
        return view('quaries',['tasks' => $arts, 'subject' => 'Art of the Artist']);
        
    }
    public function getartworkwithPaintstyle(Request $paintstyle){
        $paintstyle=Paint::where('style', '=', $paintstyle->name)->firstOrFail();
        $arts=$paintstyle->artworks()->get();
        return view('quaries',['tasks' => $arts, 'subject' => 'Arts with the Style']);
    }
    public function getartworkwithCalligstyle(Request $callistyle){
        $callistyle=Calligraphy::where('style', '=', $callistyle->name)->firstOrFail();
        $arts=$callistyle->artworks()->get();
        return view('quaries',['tasks' => $arts, 'subject' => 'Arts with the Style']);
    }

    public function getartworkwithsclupturestyle(Request $sclupstyle){
        $sclupstyle=Sculpture::where('substance', '=', $sclupstyle->name)->firstOrFail();
        $arts=$sclupstyle->artworks();
        return view('quaries',['$tasks' => $arts]);
    }
}
