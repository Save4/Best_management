<?php

namespace App\Http\Controllers;
use App\Mission;
use App\Vehicule;
use App\Modele;
use App\Marque;
use App\Chauffeur;
use App\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MissionsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
{
    $missions= DB::table('missions')
           ->join('vehicules', 'missions.vehicule_id', 'vehicules.id')
           ->join('chauffeurs', 'missions.chauffeur_id', 'chauffeurs.id')
           ->join('departements', 'missions.departement_id', 'departements.id')
           ->join('modeles', 'vehicules.modele_id', 'modeles.id')
           ->join('marques', 'modeles.marque_id', 'marques.id')
           ->select('marques.*','modeles.*','vehicules.*','departements.*','chauffeurs.*','missions.*')
           ->get();
           $modeles = Modele::all();
           $marques = Marque::all();
           $departements = Departement::all();
           $chauffeurs = Chauffeur::all();
           $vehicules = Vehicule::all();


  return view('missions/index',[

    'missions'=> $missions,
    'vehicules'=> $vehicules,
    'modeles'=>$modeles,
    'marques'=>$marques,
    'chauffeurs'=>$chauffeurs,
    'departements'=>$departements
  ]);

}

public function create()
{
  $modeles = Modele::all();
  $marques = Marque::all();
  $departements = Departement::all();
  $chauffeurs = Chauffeur::all();
  $vehicules = Vehicule::all();
  $missions= DB::table('missions')
         ->join('vehicules', 'missions.vehicule_id', 'vehicules.id')
         ->join('chauffeurs', 'missions.chauffeur_id', 'chauffeurs.id')
         ->join('departements', 'missions.departement_id', 'departements.id')
         ->join('modeles', 'vehicules.modele_id', 'modeles.id')
         ->join('marques', 'modeles.marque_id', 'marques.id')
         ->select('marques.*','modeles.*','vehicules.*','departements.*','chauffeurs.*','missions.*')
         ->get();
     return view('missions/create',[

       'missions'=> $missions,
       'vehicules'=> $vehicules,
       'modeles'=>$modeles,
       'marques'=>$marques,
       'chauffeurs'=>$chauffeurs,
       'departements'=>$departements
        ]);



     }

public function store(Request $request)
{

     //validation
     $request->validate([
         'vehicule_id' =>'required',
         'chauffeur_id' =>'required',
         'departement_id' =>'required',
         'type_mission'=>'required',
         'date_debut' =>'required',
         'date_fin' =>'required',
         'etat' =>'required'

     ]);

     $Mission= new Mission();
     $Mission->vehicule_id= $request->vehicule_id;
     $Mission->chauffeur_id= $request->chauffeur_id;
     $Mission->departement_id= $request->departement_id;
     $Mission->type_mission= $request->type_mission;
     $Mission->date_debut= $request->date_debut;
     $Mission->date_fin= $request->date_fin;
     $Mission->etat= $request->etat;

     $Mission->save();
     return redirect('missions');
}

public function edit(Mission $Mission)
{
    # code...
    $departements = Departement::all();
    $chauffeurs = Chauffeur::all();
    $vehicules = Vehicule::all();
    $Mission=Mission::find($Mission->id);

    return view('missions/edit',[
        'Mission'=>$Mission,
        'departements'=> $departements,
        'vehicules'=> $vehicules,
        'chauffeurs'=> $chauffeurs


    ]);

 }
 public function show()
{
  $missions= DB::table('missions')
         ->join('vehicules', 'missions.vehicule_id', 'vehicules.id')
         ->join('chauffeurs', 'missions.chauffeur_id', 'chauffeurs.id')
         ->join('departements', 'missions.departement_id', 'departements.id')
         ->join('modeles', 'vehicules.modele_id', 'modeles.id')
         ->join('marques', 'modeles.marque_id', 'marques.id')
         ->select('marques.*','modeles.*','vehicules.*','departements.*','chauffeurs.*','missions.*')
         ->get();
         $modeles = Modele::all();
         $marques = Marque::all();
         $departements = Departement::all();
         $chauffeurs = Chauffeur::all();
         $vehicules = Vehicule::all();

return view('misssions/show',[

  'missions'=> $missions,
  'vehicules'=> $vehicules,
  'modeles'=>$modeles,
  'marques'=>$marques,
  'chauffeurs'=>$chauffeurs,
  'departements'=>$departements
]);

}

 public function update(Request $request, Mission $Mission)
 {
     # code...
     $request->validate([
       'vehicule_id' =>'required',
       'chauffeur_id' =>'required',
       'departement_id' =>'required',
       'type_mission'=>'required',
       'date_debut' =>'required',
       'date_fin' =>'required',
       'etat' =>'required'
     ]);

     $Mission->vehicule_id= $request->vehicule_id;
     $Mission->chauffeur_id= $request->chauffeur_id;
     $Mission->departement_id= $request->departement_id;
     $Mission->type_mission= $request->type_mission;
     $Mission->date_debut= $request->date_debut;
     $Mission->date_fin= $request->date_fin;
     $Mission->etat= $request->etat;

    $Mission->save();
    return redirect('missions');

 }

 public function destroy(Mission $Mission)
 {
     # code...
     $Mission= Mission::find($Mission->id);
     $Mission->delete();
     return redirect('missions');

 }




}
