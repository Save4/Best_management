@extends('layouts.layout')
@section('content')
  @section('title','Carburant | '.env('APP_NAME'))
  


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Add carburant</small></h2>
  									<ul class="nav navbar-right panel_toolbox">
  										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
  										</li>

  										<li><a class="close-link"><i class="fa fa-close"></i></a>
  										</li>
  									</ul>
  									<div class="clearfix"></div>
  								</div>
  								<div class="x_content">
  									<br />
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('carburants')}}" method="POST">

                                             @csrf

                 <div class="form-group row">
                     <label class="col-form-label col-md-3 col-sm-3 label-align ">Mission :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="mission_id" id="marque_id" class="form-control">
                        <option value="0" disabled="true" selected="true">Selectionner la mission</option>

                        @foreach($missions as $Mission)
                        <option value="{{$Mission->id}}">{{$Mission->type_mission}}</option>
                        @endforeach
                        @error('mission_id')

                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror



                         </select>

                            </div>
                        </div>

                    <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 label-align ">Fournisseur :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="fournisseur_id" id="modele_id" class="select2_single form-control" tabindex="-1" class="@error('fournisseur_id') is-invalid @enderror">
                        <option value="0" disabled="true" selected="true">Selectionner le fournisseur</option>

                                 @foreach($fournisseurs as $Fournisseur)
                                          <option value="{{$Fournisseur->id}}">{{$Fournisseur->nom_societe}}</option>
                                            @endforeach
                                 </select>
                                            @error('fournisseur_id')
                             <button class="btn-danger">{{$message}}</button>
                                            @enderror
                         </div>
                         </div>


  										<div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Produit :<span class="required"></span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="produit" id="first-name" required="required" class="form-control " class="@error('produit') is-invalid @enderror"
                                     placeholder="Entre le produit" value="">
                                     @error('produit')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>


                      <div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Quantite :<span class="required"></span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="number" name="quantite" id="first-name" required="required" class="form-control " class="@error('quantite') is-invalid @enderror"
                                     placeholder="Entre la quantite" value="">
                                     @error('quantite')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Unite :<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <select name="unite" id="" class="form-control">

                             <option>L</option>


                        </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Prix unitaire :<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" name="prix_unitaire" id="first-name" required="required" class="form-control " class="@error('prix_unitaire') is-invalid @enderror"
                                     placeholder="Entre le prix unitaire" value="">
                                     @error('prix_unitaire')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Monaie :<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <select name="monaie" id="" class="form-control">

                             <option>FraBu</option>


                        </select>
                        </div>
                      </div>


                      <div class="item form-group">
  											<div class="col-md-6 col-sm-6 offset-md-3">

                          <button type="submit" id="submit" class="btn btn-round btn-success btn-xs">Save</button>
  												<button class="btn btn-round btn-primary btn-xs" type="reset">Reset</button>
  											</div>
  										</div>


  										</div>
  										<div class="ln_solid"></div>


  									</form>
  								</div>
  							</div>
  						</div>

              <div class="row">


              <div class="col-md-12 col-sm-12 ">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Liste des consommations du carburant</small></h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>

                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                          <div class="card-box table-responsive">

                                  <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">

                      <thead>
                    <tr>
                        <th>ID</th>
                        <th>Plaque</th>
                        <th>Type de mission</th>
                        <th>Fournisseur</th>
                        <th>Produit</th>
                        <th>Quantite</th>
                        <th>Prix</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>


                      <tbody>
                    @foreach($carburants as $Carburant)
                    <tr>
                      <td>{{$Carburant->id}}</td>
                        <td>{{$Carburant->plaque}}</td>
                        <td>{{$Carburant->type_mission}}</td>
                        <td>{{$Carburant->nom_societe}}</td>
                        <td>{{$Carburant->produit}}</td>
                        <td>{{$Carburant->quantite}}{{$Carburant->unite}}</td>
                        <td>{{$Carburant->prix_total}}{{$Carburant->monaie}}</td>
                        <td>
                          <button>  <a href="carburants/edit/{{$Carburant->id}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </button></td>
                        <td>

                          <form action="carburants/destroy/{{$Carburant->id}}" method="post" class="form-inline">
                          @csrf
                           <button type="submit" onclick="return confirm('Supprimer?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                         </form>

                        </td>

                    </tr>

                        @endforeach
                        <a href="{{url('carburants/show/{Carburant}')}}" class="btn btn-round btn-success btn-xs">Rapport</a>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>




@endsection()
