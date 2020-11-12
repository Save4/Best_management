<?php
namespace App\Http\Controllers;
use App\Departement;
use Illuminate\Http\Request;

class DepartementsController extends Controller{
  function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $departements = Departement::all();
        return view('departements/index',[
            'departements' => $departements
        ]);
    }



    public function create(){
        return view('departements/create');
    }

  public function store(Request $request)
  {

     //validation
     $request->validate([
         'nom_departement' =>'required',

            ]);

     $Departement= new Departement();
     $Departement->nom_departement= $request->nom_departement;

     $Departement->save();
     return redirect('departements');
}
  //dependance injection
  public function edit(Departement $Departement)
  {
      $Departement=Departement::find($Departement->id);
      return view('departements/edit',[
        'Departement' => $Departement]);
  }
  public function show()
  {
      $departements = Departement::all();
    return view('departements/show',[
        'departements' => $departements
    ]);
  }


  public function update(Request $request,Departement $Departement)
  {
      $Departement->nom_departement=$request->nom_departement;

      $Departement->save();
      return redirect('departements');
  }

  public function destroy(Departement $Departement)
  {
      $Departement=Departement::find($Departement->id);
      $Departement->delete();
      return redirect('departement');
  }


}
