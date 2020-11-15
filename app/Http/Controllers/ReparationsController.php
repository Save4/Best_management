<?php

namespace App\Http\Controllers;
use App\Reparation;
use App\Marque;
use App\Modele;
use App\Vehicule;
use App\Chauffeur;
use App\Fournisseur;
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
           ->join('modeles', 'vehicules.modele_id', 'modeles.id')
           ->join('marques', 'modeles.marque_id', 'marques.id')
           ->select('marques.*','modeles.*','vehicules.*','chauffeurs.*','reparations.*')
           ->get();
           $chauffeurs = Chauffeur::all();
           $vehicules = Vehicule::all();
           $fournisseurs = Fournisseur::all();
           $marques = Marque::all();
           $modeles = Modele::all();


  return view('reparations/index',[

    'marques'=> $marques,
    '$modeles'=> $modeles,
    'reparations'=> $reparations,
    'vehicules'=> $vehicules,
    'fournisseurs'=> $fournisseurs,
    'chauffeurs'=>$chauffeurs
  ]);

}

public function create()
{
  $fournisseurs = Fournisseur::all();
  $chauffeurs = Chauffeur::all();
  $vehicules = Vehicule::all();
  $reparations= DB::table('reparations')
         ->join('vehicules', 'reparations.vehicule_id', 'vehicules.id')
         ->join('chauffeurs', 'reparations.chauffeur_id', 'chauffeurs.id')
         ->join('fournisseurs', 'reparations.fournisseur_id', 'fournisseurs.id')
         ->select('vehicules.*','chauffeurs.*','reparations.*')
         ->get();
     return view('reparations/create',[

       'reparations'=> $reparations,
       'vehicules'=> $vehicules,
       'fournisseurs'=> $fournisseurs,
       'chauffeurs'=>$chauffeurs
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
         'prix_total' =>'required',
         'main_oevre' =>'required',
         'montant_total' =>'required'
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

     $Reparation->save();
     return redirect('reparations');
}

public function edit(Reparation $Reparation)
{
    # code...
    $chauffeurs = Chauffeur::all();
    $vehicules = Vehicule::all();
    $fournisseurs = Fournisseur::all();
    $Reparation=Reparation::find($Reparation->id);

    return view('reparations/edit',[
        'reparations'=>$reparations,
        'vehicules'=> $vehicules,
        'fournisseurs'=> $fournisseurs,
        'chauffeurs'=> $chauffeurs


    ]);

 }
 public function show()
{
  $reparations= DB::table('reparations')
         ->join('vehicules', 'reparations.vehicule_id', 'vehicules.id')
         ->join('chauffeurs', 'reparations.chauffeur_id', 'chauffeurs.id')
         ->join('fournisseurs', 'reparations.fournisseur_id', 'fournisseurs.id')
         ->join('modeles', 'vehicules.modele_id', 'modeles.id')
         ->join('marques', 'modeles.marque_id', 'marques.id')
         ->select('marques.*','modeles.*','vehicules.*','chauffeurs.*','reparations.*')
         ->get();
         $chauffeurs = Chauffeur::all();
         $vehicules = Vehicule::all();
         $fournisseurs = Fournisseur::all();
         $marques = Marque::all();
         $modeles = Modele::all();

return view('reparations/show',[
  'marques'=> $marques,
  '$modeles'=> $modeles,
  'reparations'=> $reparations,
  'vehicules'=> $vehicules,
  'fournisseurs'=> $fournisseurs,
  'chauffeurs'=>$chauffeurs
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
       'prix_total' =>'required',
       'main_oevre' =>'required',
       'montant_total' =>'required'
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
    $Reparation->save();
    return redirect('reparations');

 }

 public function destroy(Reparation $Reparation)
 {
     # code...
     $Reparation= Reparation::find($Reparation->id);
     $Reparation->delete();
     return redirect('reparations');

 }




}
