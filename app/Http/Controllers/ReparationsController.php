<?php

namespace App\Http\Controllers;
use App\Reparation;
use App\Vehicule;
use App\Fournisseur;
use App\Chauffeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReparationsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
{
    $reparations= DB::table('reparations')
           ->join('vehicules', 'reparations.vehicule_id', 'vehicules.id')
           ->join('chauffeurs', 'reparations.chauffeur_id', 'chauffeurs.id')
           ->join('fournisseurs', 'reparations.fournisseur_id', 'fournisseurs.id')
           ->select('vehicules.*','chauffeurs.*','fournisseurs.*','reparations.*')
           ->get();
           $vehicules = Vehicule::all();
           $chauffeurs = Chauffeur::all();
           $fournisseurs = Fournisseur::all();

  return view('reparations/index',[

    'reparations'=> $reparations,
    'vehicules'=> $vehicules,
    'chauffeurs'=> $chauffeurs,
    'fournisseurs'=>$fournisseurs
  ]);

}

public function create()
{
    $vehicules = Vehicule::all();
    $chauffeurs = Chauffeur::all();
    $fournisseurs = Fournisseur::all();
     return view('reparations/create',[

    'vehicules'=> $vehicules,
    'chauffeurs'=> $chauffeurs,
    'fournisseurs'=>$fournisseurs
        ]);



     }

public function store(Request $request)
{

     //validation
     $request->validate([
         'vehicule_id' =>'required',
         'chauffeur_id' =>'required',
         'fournisseur_id' =>'required',
         'type_reparation'=>'required',
         'piece' =>'required',
         'nombre_piece' =>'required',
         'prix_unitaire' =>'required',
         'main_oeuvre' =>'required',
         'monaie' =>'required'

     ]);

     $Reparation= new Reparation();
     $Reparation->vehicule_id= $request->vehicule_id;
     $Reparation->chauffeur_id= $request->chauffeur_id;
     $Reparation->fournisseur_id= $request->fournisseur_id;
     $Reparation->type_reparation= $request->type_reparation;
     $Reparation->piece= $request->piece;
     $Reparation->nombre_piece= $request->nombre_piece;
     $Reparation->prix_unitaire= $request->prix_unitaire;
     $Reparation->prix_total= $request->nombre_piece*$request->prix_unitaire;
     $Reparation->main_oeuvre= $request->main_oeuvre;
     $Reparation->montant_total= $request->prix_total+$request->main_oeuvre;
     $Reparation->monaie= $request->monaie;

     $Reparation->save();
     return redirect('reparations');
}

public function show()
{
 $reparations= DB::table('reparations')
           ->join('vehicules', 'reparations.vehicule_id', 'vehicules.id')
           ->join('chauffeurs', 'reparations.chauffeur_id', 'chauffeurs.id')
           ->join('fournisseurs', 'reparations.fournisseur_id', 'fournisseurs.id')
           ->select('vehicules.*','chauffeurs.*','fournisseurs.*','reparations.*')
           ->get();
           $vehicules = Vehicule::all();
           $chauffeurs = Chauffeur::all();
           $fournisseurs = Fournisseur::all();

return view('reparations/show',[

'reparations'=> $reparations,
    'vehicules'=> $vehicules,
    'chauffeurs'=> $chauffeurs,
    'fournisseurs'=>$fournisseurs
]);

}

public function edit(Carburant $Carburant)
{
    # code...
   $vehicules = Vehicule::all();
   $chauffeurs = Chauffeur::all();
   $fournisseurs = Fournisseur::all();

   $Reparations=Reparations::find($Reparations->id);

    return view('reparations/edit',[
    'reparations'=> $reparations,
    'vehicules'=> $vehicules,
    'chauffeurs'=> $chauffeurs,
    'fournisseurs'=>$fournisseurs


    ]);

 }

 public function update(Request $request, Reparation $Reparation)
 {
     # code...
     $request->validate([
       'vehicule_id' =>'required',
         'chauffeur_id' =>'required',
         'fournisseur_id' =>'required',
         'type_reparation'=>'required',
         'piece' =>'required',
         'nombre_piece' =>'required',
         'prix_unitaire' =>'required',
         'main_oeuvre' =>'required',
         'monaie' =>'required'

     ]);

    $Reparation->vehicule_id= $request->vehicule_id;
     $Reparation->chauffeur_id= $request->chauffeur_id;
     $Reparation->fournisseur_id= $request->fournisseur_id;
     $Reparation->type_reparation= $request->type_reparation;
     $Reparation->piece= $request->piece;
     $Reparation->nombre_piece= $request->nombre_piece;
     $Reparation->prix_unitaire= $request->prix_unitaire;
     $Reparation->prix_total= $request->nombre_piece*$request->prix_unitaire;
     $Reparation->main_oeuvre= $request->main_oeuvre;
     $Reparation->montant_total= $request->prix_total+$request->main_oeuvre;
     $Reparation->monaie= $request->monaie;

    $Reparation->save();
    return redirect('carburants');

 }

 public function destroy(Reparation $Reparation)
 {
     # code...
     $Reparation= Reparation::find($Reparation->id);
     $Reparation->delete();
     return redirect('reparations');

 }


}
