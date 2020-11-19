@extends('layouts.layout')
@section('content')


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Add reparation</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('reparations')}}" method="POST">

                                             @csrf

                 <div class="form-group row">
                     <label class="col-form-label col-md-3 col-sm-3 label-align ">Vehicule :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="vehicule_id" id="marque_id" class="form-control">
                           <option value="0" disabled="true" selected="true">Selectionner le vehicule</option>
                        @foreach($vehicules as $Vehicule)
                        <option value="{{$Vehicule->id}}">{{$Vehicule->plaque}}</option>
                        @endforeach
                        @error('vehicule_id')

                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror



                         </select>

                            </div>
                        </div>


                 <div class="form-group row">
                     <label class="col-form-label col-md-3 col-sm-3 label-align ">Chauffeur :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="chauffeur_id" id="marque_id" class="form-control">
                           <option value="0" disabled="true" selected="true">Selectionner le chauffeur</option>
                        @foreach($chauffeurs as $Chauffeur)
                        <option value="{{$Chauffeur->id}}">{{$Chauffeur->nom}} {{$Chauffeur->prenom}}</option>
                        @endforeach
                        @error('chauffeur_id')

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
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Type de reparation :<span class="required"></span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="type_reparation" id="first-name" required="required" class="form-control " class="@error('type_reparation') is-invalid @enderror"
                                     placeholder="Entre le type de reparation" value="">
                                     @error('type_reparation')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Piece :<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="piece" id="first-name" required="required" class="form-control " class="@error('piece') is-invalid @enderror"
                                     placeholder="Entre le type de piece" value="">
                                     @error('piece')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>




                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre de piece :<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" name="nombre_piece" id="first-name" required="required" class="form-control " class="@error('nombre_piece') is-invalid @enderror"
                                     placeholder="Entre le nombre de piece" value="">
                                     @error('nombre_piece')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Main d'oeuvre :<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" name="main_oeuvre" id="first-name" required="required" class="form-control " class="@error('main_oeuvre') is-invalid @enderror"
                                     placeholder="Entre le main d'oeuvre" value="">
                                     @error('main_oeuvre')
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
                                  <h2>Liste des reparations</small></h2>
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
                        <th>Chauffeur</th>
                        <th>Fournisseur</th>
                        <th>Type de reparation</th>
                        <th>Piece</th>
                        <th>Nombre de piece</th>
                        <th>Prix</th>
                        <th>Montant total</th>
                        <th>Date d'enregistrement</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>


                      <tbody>
                    @foreach($reparations as $Reparation)
                    <tr>
                        <td>{{$Reparation->id}}</td>
                        <td>{{$Reparation->plaque}}</td>
                        <td>{{$Reparation->nom}} {{$Reparation->prenom}}</td>
                        <td>{{$Reparation->nom_societe}}</td>
                        <td>{{$Reparation->type_reparation}}</td>
                        <td>{{$Reparation->piece}}</td>
                        <td>{{$Reparation->nombre_piece}}</td>
                        <td>{{$Reparation->prix_total}}{{$Reparation->monaie}}</td>
                        <td>{{$Reparation->montant_total}}{{$Reparation->monaie}}</td>
                        <td>{{$Reparation->created_at}}</td>
                        <td>
                          <button>  <a href="reparations/edit/{{$Reparation->id}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </button></td>
                        <td>

                          <form action="reparations/destroy/{{$Reparation->id}}" method="post" class="form-inline">
                          @csrf
                           <button type="submit" onclick="return confirm('Supprimer?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                         </form>

                        </td>

                    </tr>

                        @endforeach
                        <a href="{{url('reparations/show/{Reparation}')}}" class="btn btn-round btn-success btn-xs">Rapport</a>

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
