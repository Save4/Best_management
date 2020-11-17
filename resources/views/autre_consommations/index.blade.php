@extends('layouts.layout')
@section('content')


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Add consommation</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('autre_consommations')}}" method="POST">

                                             @csrf

                 <div class="form-group row">
                     <label class="col-form-label col-md-3 col-sm-3 label-align ">Vehicule :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="vehicule_id" id="marque_id" class="form-control">
                          <option></option>
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
                    <label class="col-form-label col-md-3 col-sm-3 label-align ">Fournisseur :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="fournisseur_id" id="modele_id" class="select2_single form-control" tabindex="-1" class="@error('fournisseur_id') is-invalid @enderror">
                        <option></option>
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
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Type de consommation :<span class="required"></span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="type_consommation" id="first-name" required="required" class="form-control " class="@error('type_consommation') is-invalid @enderror"
                                     placeholder="Entre le type de consommation" value="">
                                     @error('type_consommation')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>


                      <div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Montant :<span class="required"></span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="number" name="montant" id="first-name" required="required" class="form-control " class="@error('montant') is-invalid @enderror"
                                     placeholder="Entre le montant" value="">
                                     @error('montant')
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date du fin de validide :<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="date" name="date_fin" id="first-name" required="required" class="form-control " class="@error('date_fin') is-invalid @enderror"
                                     placeholder="Entre la date" value="">
                                     @error('date_fin')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
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



              <div class="col-md-12 col-sm-12 ">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Liste des consommations</small></h2>
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
                        <th>Fournisseur</th>
                        <th>Type de consommation</th>
                        <th>Montant</th>
                        <th>Date d'enregistrement</th>
                        <th>Date de fin de validite</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>


                      <tbody>
                    @foreach($autre_consommations as $Autre_consommation)
                    <tr>

                        <td>{{$Autre_consommation->id}}</td>
                        <td>{{$Autre_consommation->plaque}}</td>
                        <td>{{$Autre_consommation->nom_societe}}</td>
                        <td>{{$Autre_consommation->type_consommation}}</td>
                        <td>{{$Autre_consommation->montant}}{{$Autre_consommation->monaie}}</td>
                        <td>{{$Autre_consommation->created_at}}</td>
                        <td>{{$Autre_consommation->date_fin}}</td>

                        <td>
                          <button>  <a href="autre_consommations/edit/{{$Autre_consommation->id}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </button></td>
                        <td>

                          <form action="autre_consommations/destroy/{{$Autre_consommation->id}}" method="post" class="form-inline">
                          @csrf
                           <button type="submit" onclick="return confirm('Supprimer?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                         </form>

                        </td>

                    </tr>

                        @endforeach
                        <a href="{{url('autre_consommations/show/{Autre_consommation}')}}" class="btn btn-round btn-success btn-xs">Rapport</a>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>




@endsection()
