<?php
namespace App\Http\Controllers;
use App\Chauffeur;
use Illuminate\Http\Request;

class ChauffeursController extends Controller{
  function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $chauffeurs = Chauffeur::all();
        return view('chauffeurs/index',[
            'chauffeurs' => $chauffeurs
        ]);
    }



    public function create(){
        return view('chauffeurs/create');
    }

  public function store(Request $request)
  {

     //validation
     $request->validate([
       'nom' =>'required',
       'prenom' =>'required',
       'email' =>'required',
       'telephone' =>'required',
       'id_permis_conduire' =>'required',

            ]);

     $Chauffeur= new Chauffeur();
     $Chauffeur->nom= $request->nom;
     $Chauffeur->prenom= $request->prenom;
     $Chauffeur->email= $request->email;
     $Chauffeur->telephone= $request->telephone;
     $Chauffeur->id_permis_conduire= $request->id_permis_conduire;

     $Chauffeur->save();
     return redirect('chauffeurs');
}
  //dependance injection
  public function edit(Chauffeur $Chauffeur)
  {
      $Chauffeur=Chauffeur::find($Chauffeur->id);
      return view('chauffeurs/edit',[
        'Chauffeur' => $Chauffeur]);
  }
  public function show()
  {
      $chauffeurs = Chauffeur::all();
    return view('chauffeurs/show',[
        'chauffeurs' => $chauffeurs
    ]);
  }


  public function update(Request $request,Chauffeur $Chauffeur)
  {

    $Chauffeur->nom= $request->nom;
    $Chauffeur->prenom= $request->prenom;
    $Chauffeur->email= $request->email;
    $Chauffeur->telephone= $request->telephone;
    $Chauffeur->id_permis_conduire= $request->id_permis_conduire;

      $Chauffeur->save();
      return redirect('chauffeurs');
  }

  public function destroy(Chauffeur $Chauffeur)
  {
      $Chauffeur=Chauffeur::find($Chauffeur->id);
      $Chauffeur->delete();
      return redirect('chauffeurs');
  }


}
