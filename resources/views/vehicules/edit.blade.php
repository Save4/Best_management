@extends('layouts.layout')
@section('content')

  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Modification des identifications du vehicule</small></h2>
  									<ul class="nav navbar-right panel_toolbox">
  										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
  										</li>
  										<li class="dropdown">
  											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>

  										</li>
  										<li><a class="close-link"><i class="fa fa-close"></i></a>
  										</li>
  									</ul>
  									<div class="clearfix"></div>
  								</div>
  								<div class="x_content">
  									<br />
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/vehicules/{{$Vehicule->id}}" method="post">

                      @csrf
                      @method('PUT')
                      <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align ">Selectionne la marque :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="modele_id" id="" class="form-control" class="@error('modele_id') is-invalid @enderror">
                                   @foreach($modeles as $Modele)
                                          <option value="{{$Modele->id}} {!! $Vehicule->modele_id==$Modele->id ? 'selected="selected"':''!!}">{{$Modele->nom_modele}}</option>
                                            @endforeach
                       </select>
                                            @error('modele_id')
                             <button class="btn-danger">{{$message}}</button>
                                            @enderror

                         </div>
                  </div>
                           <div class="form-group row">
                           <label class="col-form-label col-md-3 col-sm-3 label-align ">Categorie :</label>
                             <div class="col-md-6 col-sm-6 ">
                             <select name="categorie_id" id="" class="form-control" class="@error('categorie_id') is-invalid @enderror">
                                          @foreach($categories as $Categorie)
                                                 <option value="{{$Categorie->id}} {!! $Vehicule->categorie_id==$Categorie->id ? 'selected="selected"':''!!}">{{$Categorie->nom_categorie}}</option>
                                                   @endforeach
                                        </select>
                                                   @error('categorie_id')
                                    <button class="btn-danger">{{$message}}</button>
                                                   @enderror
                                </div>
                            </div>

                                <div class="item form-group">
                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Plaque :<span class="required"></span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="plaque" id="first-name" required="required" class="form-control " class="@error('plaque') is-invalid @enderror"
                                               placeholder="" value="{{ $Vehicule->plaque }}">
                                               @error('plaque')
                                        <button class="btn-danger">{{$message}}</button>
                                        @enderror
                                  </div>
                                </div>

                                <div class="item form-group">
                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Boite de vitesse :<span class="required"></span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 ">
                                     <select name="boite_vitesse" id="" class="form-control">

                                       <option>{{ $Vehicule->boite_vitesse }}</option>
                                       <option>Manuel</option>
                                      <option>Automatique</option>
                                    </select>

                                  </div>
                                </div>

                                <div class="item form-group">
                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Type de moteur :<span class="required"></span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 ">
                                     <select name="type_moteur" id="" class="form-control" >

                                       <option>{{ $Vehicule->type_moteur }}</option>
                                       <option>Moteur a essance</option>
                                       <option>Moteur a diesel</option>
                                      <option>Moteur electrique</option>

                                  </select>
                                  </div>
                                </div>
                                <div class="item form-group">
                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre de place :<span class="required"></span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 ">
                                    <input type="number" name="nombre_place" id="first-name" required="required" class="form-control " class="@error('nombre_place') is-invalid @enderror"
                                               placeholder="" value="{{ $Vehicule->nombre_place }}">
                                               @error('nombre_place')
                                        <button class="btn-danger">{{$message}}</button>
                                        @enderror
                                  </div>
                                </div>


                      <div class="item form-group">
  											<div class="col-md-6 col-sm-6 offset-md-3">

  												<button class="btn btn-round btn-primary btn-xs" type="reset">Reset</button>
  												<button type="submit" id="submit" class="btn btn-round btn-success btn-xs">Modify</button>
  											</div>
  										</div>


  										</div>
  										<div class="ln_solid"></div>


  									</form>
  								</div>
  							</div>
  						</div>

@endsection()
