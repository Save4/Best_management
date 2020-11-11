<?php

namespace App\Http\Controllers;
use App\Vehicule;
use App\Modele;
use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculesController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
{
    $vehicules= DB::table('vehicules')
           ->join('modeles', 'vehicules.modele_id', 'modeles.id')
           ->join('categories', 'vehicules.categorie_id', 'categories.id')
           ->select('modeles.*','categories.*','vehicules.*')
           ->get();
           $modeles = Modele::all();
           $categories = Categorie::all();

  return view('vehicules/index',[

    'vehicules'=> $vehicules,
    'modeles'=>$modeles,
    'categories'=>$categories
  ]);

}

public function create()
{
    $modeles = Modele::all();
    $categories = Categorie::all();
     return view('vehicules/create',[

        'modeles'=>$modeles,
        'categories'=>$categories
        ]);



     }

public function store(Request $request)
{

     //validation
     $request->validate([
         'modele_id' =>'required',
         'categorie_id' =>'required',
         'plaque'=>'required',
         'boite_vitesse' =>'required',
         'type_moteur' =>'required',
         'nombre_place' =>'required'

     ]);

     $Vehicule= new Vehicule();
     $Vehicule->modele_id= $request->modele_id;
     $Vehicule->categorie_id= $request->categorie_id;
     $Vehicule->plaque= $request->plaque;
     $Vehicule->boite_vitesse= $request->boite_vitesse;
     $Vehicule->type_moteur= $request->type_moteur;
     $Vehicule->nombre_place= $request->nombre_place;

     $Vehicule->save();
     return redirect('vehicules');
}

public function edit(Vehicule $Vehicule)
{
    # code...
    $modeles= Modele::all();
    $categories= Categorie::all();
    $Vehicule=Vehicule::find($Vehicule->id);

    return view('vehicules/edit',[
        'Vehicule'=>$Vehicule,
        'modeles'=> $modeles,
        'categories'=> $categories


    ]);

 }
 public function show()
{
 $vehicules= DB::table('vehicules')
        ->join('modeles', 'vehicules.modele_id', 'modeles.id')
        ->join('categories', 'vehicules.categorie_id', 'categories.id')
        ->select('modeles.*','categories.*','vehicules.*')
        ->get();
        $modeles = Modele::all();
        $categories = Categorie::all();

return view('vehicules/show',[

 'vehicules'=> $vehicules,
 'modeles'=>$modeles,
 'categories'=>$categories
]);

}

 public function update(Request $request, Vehicule $Vehicule)
 {
     # code...
     $request->validate([
        'modele_id' =>'required',
        'categorie_id' =>'required',
         'plaque'=>'required',
         'boite_vitesse' =>'required',
         'type_moteur' =>'required',
         'nombre_place' =>'required'
     ]);

     $Vehicule->modele_id= $request->modele_id;
     $Vehicule->categorie_id= $request->categorie_id;
     $Vehicule->plaque= $request->plaque;
     $Vehicule->boite_vitesse= $request->boite_vitesse;
     $Vehicule->type_moteur= $request->type_moteur;
     $Vehicule->nombre_place= $request->nombre_place;
    $Vehicule->save();
    return redirect('vehicules');

 }

 public function destroy(Vehicule $Vehicule)
 {
     # code...
     $Vehicule= Vehicule::find($Vehicule->id);
     $Vehicule->delete();
     return redirect('vehicules');

 }


}
