<?php

namespace App\Http\Controllers;
use App\Carbuant;
use App\Mission;
use App\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsommationsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
{
    $carburants= DB::table('carburants')
           ->join('missions', 'carburants.mission_id', 'missions.id')
           ->join('fournisseurs', 'carburants.fournisseur_id', 'fournisseurs.id')
           ->select('missions.*','fournisseurs.*','carburants.*')
           ->get();
           $missions = Mission::all();
           $fournisseurs = Fournisseur::all();

  return view('carburants/index',[

    'carburants'=> $carburants,
    'missions'=> $missions,
    'fournisseur'=>$fournisseur
  ]);

}

public function create()
{
    $missions = Mission::all();
    $fournisseurs = Fournisseur::all();
     return view('carburants/create',[

        'missions'=>$missions,
        'fournisseurs'=>$fournisseurs
        ]);



     }

public function store(Request $request)
{

     //validation
     $request->validate([
         'mission_id' =>'required',
         'fournisseur_id' =>'required',
         'produit'=>'required',
         'quantite' =>'required',
         'prix_unitaire' =>'required',
         'prix_total' =>'required',
         'unite' =>'required',
         'monaie' =>'required'

     ]);

     $Carburant= new Carburant();
     $Carburant->mission_id= $request->mission_id;
     $Carburant->fournisseur_id= $request->fournisseur_id;
     $Carburant->produit= $request->produit;
     $Carburant->quantite= $request->quantite;
     $Carburant->prix_unitaire= $request->prix_unitaire;
     $Carburant->prix_total= $request->quantite*$request->prix_uniteur;
     $Carburant->unite= $request->unite;
     $Carburant->monaie= $request->monaie;

     $Carburant->save();
     return redirect('carburants');
}

public function edit(Carburant $Carburant)
{
    # code...
    $fournisseurs= Fournisseur::all();
    $missions= Mission::all();
    $Carburant=Carburant::find($Carburant->id);

    return view('carburants/edit',[
        'Carburant'=>$Carburant,
        'missions'=> $missions,
        'missions'=> $missions


    ]);

 }

 public function update(Request $request, Carburant $Carburant)
 {
     # code...
     $request->validate([
       'mission_id' =>'required',
       'fournisseur_id' =>'required',
       'produit'=>'required',
       'quantite' =>'required',
       'prix_unitaire' =>'required',
       'prix_total' =>'required',
       'unite' =>'required',
       'monaie' =>'required'

     ]);

     $Carburant->mission_id= $request->mission_id;
     $Carburant->fournisseur_id= $request->fournisseur_id;
     $Carburant->produit= $request->produit;
     $Carburant->quantite= $request->quantite;
     $Carburant->prix_unitaire= $request->prix_unitaire;
     $Carburant->prix_total= $request->quantite*$request->prix_uniteur;
     $Carburant->unite= $request->unite;
     $Carburant->monaie= $request->monaie;

    $Carburant->save();
    return redirect('carburants');

 }

 public function destroy(Carburant $Carburant)
 {
     # code...
     $Carburant= Carburant::find($Carburant->id);
     $Carburant->delete();
     return redirect('carburants');

 }


}
