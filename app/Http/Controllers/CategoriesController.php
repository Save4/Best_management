<?php
namespace App\Http\Controllers;
use App\Categorie;
use Illuminate\Http\Request;

class CategoriesController extends Controller{
  function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories = Categorie::all();
        return view('categories/index',[
            'categories' => $categories
        ]);
    }



    public function create(){
        return view('categories/create');
    }

  public function store(Request $request)
  {

     //validation
     $request->validate([
         'nom_categorie' =>'required',

            ]);

     $Categorie= new Categorie();
     $Categorie->nom_categorie= $request->nom_categorie;

     $Categorie->save();
     return redirect('categories');
}
  //dependance injection
  public function edit(Categorie $Categorie)
  {
      $Categorie=Categorie::find($Categorie->id);
      return view('categories/edit',[
        'Categorie' => $Categorie]);
  }
  public function show()
  {
      $categories = Categorie::all();
    return view('categories/show',[
        'categories' => $categories
    ]);
  }


  public function update(Request $request,Categorie $Categorie)
  {
      $Categorie->nom_categorie=$request->nom_categorie;

      $Categorie->save();
      return redirect('categories');
  }

  public function destroy(Categorie $Categorie)
  {
      $Categorie=Categorie::find($Categorie->id);
      $Categorie->delete();
      return redirect('categories');
  }


}
