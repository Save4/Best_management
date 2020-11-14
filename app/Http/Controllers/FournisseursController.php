<?php
namespace App\Http\Controllers;
use App\Fournisseur;
use Illuminate\Http\Request;

class FournisseursController extends Controller{
  function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $fournisseurs = Fournisseur::all();
        return view('fournisseurs/index',[
            'fournisseurs' => $fournisseurs
        ]);
    }



    public function create(){
        return view('chauffeurs/create');
    }

  public function store(Request $request)
  {

     //validation
     $request->validate([
       'nom_societe' =>'required',
       'email' =>'required',
       'telephone' =>'required',
       'province' =>'required',
       'commune' =>'required',
       'colline' =>'required'

            ]);

     $Fournisseur= new Fournisseur();
     $Fournisseur->nom_societe= $request->nom_societe;
     $Fournisseur->email= $request->email;
     $Fournisseur->telephone= $request->telephone;
     $Fournisseur->province= $request->province;
     $Fournisseur->commune= $request->commune;
     $Fournisseur->colline= $request->colline;
     $Fournisseur->save();
     return redirect('fournisseurs');
}
  //dependance injection
  public function edit(Fournisseur $Fournisseur)
  {
      $Fournisseur=Fournisseur::find($Fournisseur->id);
      return view('fournisseurs/edit',[
        'Fournisseur' => $Fournisseur]);
  }
  public function show()
  {
      $fournisseurs = Fournisseur::all();
    return view('fournisseurs/show',[
        'fournisseurs' => $fournisseurs
    ]);
  }


  public function update(Request $request,Fournisseur $Fournisseur)
  {
    $Fournisseur->nom_societe= $request->nom_societe;
    $Fournisseur->email= $request->email;
    $Fournisseur->telephone= $request->telephone;
    $Fournisseur->province= $request->province;
    $Fournisseur->commune= $request->commune;
    $Fournisseur->colline= $request->colline;
      $Fournisseur->save();
      return redirect('fournisseurs');
  }

  public function destroy(Fournisseur $Fournisseur)
  {
      $Fournisseur=Fournisseur::find($Fournisseur->id);
      $Fournisseur->delete();
      return redirect('fournisseurs');
  }


}
