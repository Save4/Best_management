@extends('layouts.layout')
@section('content')
  @section('title','Impot , Taxe ou Assurence  |'.config('app.name'))


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Modification la consommation du carburant</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/autre_consommations/{{$Autre_consommation->id}}" method="post">

                      @csrf
                      @method('PUT')
                      <div class="form-group row">
                     <label class="col-form-label col-md-3 col-sm-3 label-align ">Vehicule :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="vehicule_id" id="marque_id" class="form-control">
                        @foreach($vehicules as $Vehicule)
                        <option value="{{$Vehicule->id}}" {!! $Autre_consommation->vehicule_id==$Vehicule->id ?'selected="selected"':'' !!}>{{$Vehicule->plaque}}</option>


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
                                 @foreach($fournisseurs as $Fournisseur)
                                          <option value="{{$Fournisseur->id}}" {!! $Autre_consommation->fournisseur_id==$Fournisseur->id ?'selected="selected"':''  !!} >{{$Fournisseur->nom_societe}}</option>
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
                                     placeholder="" value="{{$Autre_consommation->type_consommation}}">
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
                                     placeholder="" value="{{$Autre_consommation->montant}}">
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
                          <input type="text" name="date_fin" id="first-name" required="required" class="form-control " class="@error('date_fin') is-invalid @enderror"
                                     placeholder="" value="{{$Autre_consommation->date_fin}}">
                                     @error('date_fin')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>



                      <div class="item form-group">
  											<div class="col-md-6 col-sm-6 offset-md-3">

                          <button type="submit" id="submit" class="btn btn-round btn-success btn-xs">Modify</button>
  												<button class="btn btn-round btn-primary btn-xs" type="reset">Reset</button>
  											</div>
  										</div>


  										</div>
  										<div class="ln_solid"></div>


  									</form>
  								</div>
  							</div>
  						</div>

@endsection()
