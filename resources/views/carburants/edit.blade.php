@extends('layouts.layout')
@section('content')


  @section('title','Carburant | '.config('app.name'))



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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/carburants/{{$Carburant->id}}" method="post">

                      @csrf
                      @method('PUT')
                      <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align ">Mission :</label>
                           <div class="col-md-6 col-sm-6 ">
                           <select name="mission_id" id="marque_id" class="form-control">
                             @foreach($missions as $Mission)
                             <option value="{{$Mission->id}}" {!! $Carburant->mission_id==$Mission->id ?'selected="selected"':''  !!}>{{$Mission->type_mission}}</option>

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
                                          @foreach($fournisseurs as $Fournisseur)
                                                   <option value="{{$Fournisseur->id}}" {!! $Carburant->fournisseur_id==$Fournisseur->id ?'selected="selected"':''  !!}>{{$Fournisseur->nom_societe}}</option>
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
                                                 placeholder="" value="{{ $Carburant->produit }}">
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
                                           placeholder="" value="{{ $Carburant->quantite }}">
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
                                           placeholder="" value="{{ $Carburant->prix_unitaire }}">
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
