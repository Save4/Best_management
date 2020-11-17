<?php

namespace App\Http\Controllers;
use App\Autre_consommation;
use App\Vehicule;
use App\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Autre_consommationsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
{
    $autre_consommations= DB::table('autre_consommations')
           ->join('vehicules', 'autre_consommations.vehicule_id', 'vehicules.id')
           ->join('fournisseurs', 'autre_consommations.fournisseur_id', 'fournisseurs.id')
           ->select('vehicules.*','fournisseurs.*','autre_consommations.*')
           ->get();
           $vehicules = Vehicule::all();
           $fournisseurs = Fournisseur::all();

  return view('autre_consommations/index',[

    'autre_consommations'=> $autre_consommations,
    'vehicules'=> $vehicules,
    'fournisseurs'=>$fournisseurs
  ]);

}

public function create()
{
    $vehicules = Vehicule::all();
    $fournisseurs = Fournisseur::all();
    $autre_consommations= DB::table('autre_consommations')
           ->join('vehicules', 'vehicules.vehicule_id', 'vehicules.id')
           ->join('fournisseurs', 'vehicules.fournisseur_id', 'fournisseurs.id')
           ->select('vehicules.*','fournisseurs.*','autre_consommations.*')
           ->get();
     return view('autre_consommations/create',[

       'vehicules'=>$vehicules,
        'fournisseurs'=>$fournisseurs
        ]);



     }

public function store(Request $request)
{

     //validation
     $request->validate([

         'vehicule_id' =>'required',
         'fournisseur_id' =>'required',
         'type_consommation'=>'required',
         'montant' =>'required',
         'monaie' =>'required',
         'date_fin' =>'required'

     ]);

     $Autre_consommation= new Autre_consommation();

     $Autre_consommation->vehicule_id= $request->vehicule_id;
     $Autre_consommation->fournisseur_id= $request->fournisseur_id;
     $Autre_consommation->type_consommation= $request->type_consommation;
     $Autre_consommation->montant= $request->montant;
     $Autre_consommation->monaie= $request->monaie;

     $Autre_consommation->date_fin= $request->date_fin;

     $Autre_consommation->save();
     return redirect('autre_consommation');
}

public function edit(Autre_consommation $Autre_consommation)
{
    # code...
    $vehicules= Vehicule::all();
    $fournisseurs= Fournisseur::all();
    $Autre_consommation=Autre_consommation::find($Autre_consommation->id);

    return view('autre_consommations/edit',[
        'Autre_consommation'=>$Autre_consommation,
        'vehicules'=> $vehicules,
        'fournisseurs'=> $fournisseurs


    ]);

 }
 public function show()
{
  $autre_consommations= DB::table('autre_consommations')
         ->join('vehicules', 'autre_consommations.vehicule_id', 'vehicules.id')
         ->join('fournisseurs', 'autre_consommations.fournisseur_id', 'fournisseurs.id')
         ->select('vehicules.*','fournisseurs.*','autre_consommations.*')
         ->get();
         $vehicules = Vehicule::all();
         $fournisseurs = Fournisseur::all();

return view('autre_consommations/show',[

  'autre_consommations'=> $autre_consommations,
  'vehicules'=> $vehicules,
  'fournisseurs'=>$fournisseurs
]);

}

 public function update(Request $request, Autre_consommation $Autre_consommation)
 {
     # code...
     $request->validate([
       'fournisseur_id' =>'required',
       'type_consommation'=>'required',
       'montant' =>'required',
       'monaie' =>'required',
       'date_fin' =>'required'
     ]);

     $Autre_consommation->vehicule_id= $request->vehicule_id;
     $Autre_consommation->fournisseur_id= $request->fournisseur_id;
     $Autre_consommation->type_consommation= $request->type_consommation;
     $Autre_consommation->montant= $request->montant;
     $Autre_consommation->monaie= $request->monaie;
    $Autre_consommation->save();
    return redirect('autre_consommations');

 }

 public function destroy(Autre_consommation $Autre_consommation)
 {
     # code...
     $Autre_consommation= Autre_consommation::find($Autre_consommation->id);
     $Autre_consommation->delete();
     return redirect('autre_consommations');

 }




}
