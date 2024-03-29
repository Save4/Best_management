<?php

namespace App\Http\Controllers;
use App\Carburant;
use App\Mission;
use App\Vehicule;
use App\Modele;
use App\Marque;
use App\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarburantsController extends Controller
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
           ->join('vehicules', 'missions.vehicule_id', 'vehicules.id')
           ->select('vehicules.*','missions.*','fournisseurs.*','carburants.*')
           ->get();
           $missions = Mission::all();
           $vehicules = Vehicule::all();
           $fournisseurs = Fournisseur::all();

  return view('carburants/index',[

    'carburants'=> $carburants,
    'missions'=> $missions,
    'vehicules'=> $vehicules,
    'fournisseurs'=>$fournisseurs
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
         'unite' =>'required',
         'monaie' =>'required'

     ]);

     $Carburant= new Carburant();
     $Carburant->mission_id= $request->mission_id;
     $Carburant->fournisseur_id= $request->fournisseur_id;
     $Carburant->produit= $request->produit;
     $Carburant->quantite= $request->quantite;
     $Carburant->prix_unitaire= $request->prix_unitaire;
     $Carburant->prix_total= $request->quantite*$request->prix_unitaire;
     $Carburant->unite= $request->unite;
     $Carburant->monaie= $request->monaie;

     $Carburant->save();
     return redirect('carburants');
}

public function show()
{
$carburants= DB::table('carburants')
       ->join('missions', 'carburants.mission_id', 'missions.id')
       ->join('fournisseurs', 'carburants.fournisseur_id', 'fournisseurs.id')
       ->join('vehicules', 'missions.vehicule_id', 'vehicules.id')
       ->join('modeles', 'vehicules.modele_id', 'modeles.id')
       ->join('marques', 'modeles.marque_id', 'marques.id')
       ->select('marques.*','modeles.*','vehicules.*','missions.*','fournisseurs.*','carburants.*')
       ->get();
       $missions = Mission::all();
       $vehicules = Vehicule::all();
       $modeles = Modele::all();
       $marques = Marque::all();
       $fournisseurs = Fournisseur::all();

return view('carburants/show',[

'carburants'=> $carburants,
'missions'=> $missions,
'vehicules'=> $vehicules,
'marques'=> $marques,
'modeles'=> $modeles,
'fournisseurs'=>$fournisseurs
]);

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
        'fournisseurs'=> $fournisseurs


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
       'unite' =>'required',
       'monaie' =>'required'

     ]);

     $Carburant->mission_id= $request->mission_id;
     $Carburant->fournisseur_id= $request->fournisseur_id;
     $Carburant->produit= $request->produit;
     $Carburant->quantite= $request->quantite;
     $Carburant->prix_unitaire= $request->prix_unitaire;
     $Carburant->prix_total= $request->quantite*$request->prix_unitaire;
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
