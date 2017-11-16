<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Adress;
use App\Http\Controllers\Controller;
use App\Http\Requests;


class AdressController extends Controller
{
    public function showAdressList()
    {
        $adresses = Adress::all();
        //$maVar =  'I love NBA';
        //$data = array(
        //'names' => 'Rakesh', 'email' => 'sharmarakesh378@gmail.com');
        return view('adressFiles.adress',['adresses' => $adresses]);
    }
    
    public function getAdress(){
        return view('adressFiles.new_adress');
    }

    public function updateGetAdress($n){
        $adress = Adress::find($n);
        return view('adressFiles.update_adress',['adressRow' => $adress]);
    }

    public function updatePostAdress(Request $request){
        
        $adress = Adress::find($request->id);
        $adress->name = $request->lastname;
        $adress->strasse_hausNr = $request->strasse;
        $adress->plz = $request->plz;
        $adress->stadt = $request->stadt;
        $adress->save();
        return redirect()->route('all');
        /*
        $tab = ['larequete' => $request->id];
        return view('adressFiles.postAdress',$tab);
        */
    }


    public function addAdress(Request $request){
        $adress = new Adress;
        $adress->name = $request->lastname;
        $adress->strasse_hausNr = $request->strasse;
        $adress->plz = $request->plz;
        $adress->stadt = $request->stadt;
        $adress->save();
        //return view('adressFiles.postAdress', ['thema' => $nom]);
        return redirect()->route('all');
             
    }

    public function deleteAdress($id){
       $adress = Adress::find($id); 
       $adress->delete();
       return redirect()->route('all');
    }

}
