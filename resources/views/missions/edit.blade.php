@extends('layouts.layout')
@section('content')
  @section('title','Mission | '.config('app.name'))


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Modification la mission</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/missions/{{$Mission->id}}" method="post">

                      @csrf
                      @method('PUT')
                      <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align ">Vehicule :</label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="vehicule_id" id="" class="form-control" class="@error('vehicule_id') is-invalid @enderror">
                                     @foreach($vehicules as $Vehicule)
                                            <option value="{{$Vehicule->id}}" {!! $Mission->vehicule_id==$Vehicule->id ?'selected="selected"':''  !!}>{{$Vehicule->plaque}}</option>
                                              @endforeach
                                   </select>
                                              @error('vehicule_id')
                               <button class="btn-danger">{{$message}}</button>
                                              @enderror
                           </div>
                           </div>
                           <div class="form-group row">
                           <label class="col-form-label col-md-3 col-sm-3 label-align ">Chauffeur :</label>
                             <div class="col-md-6 col-sm-6 ">
                             <select name="chauffeur_id" id="" class="form-control" class="@error('chauffeur_id') is-invalid @enderror">
                                          @foreach($chauffeurs as $Chauffeur)
                                                 <option value="{{$Chauffeur->id}}" {!! $Mission->chauffeur_id==$Chauffeur->id ?'selected="selected"':''  !!}>{{$Chauffeur->nom}} {{$Chauffeur->prenom}}</option>

                                                   @endforeach
                                        </select>
                                                   @error('chauffeur_id')
                                    <button class="btn-danger">{{$message}}</button>
                                                   @enderror
                                </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align ">Departement :</label>
                                  <div class="col-md-6 col-sm-6 ">
                                  <select name="departement_id" id="" class="form-control" class="@error('departement_id') is-invalid @enderror">
                                               @foreach($departements as $Departement)
                                                      <option value="{{$Departement->id}}">{{$Departement->nom_departement}}</option>
                                                        @endforeach
                                             </select>
                                                        @error('departement_id')
                                         <button class="btn-danger">{{$message}}</button>
                                                        @enderror
                                     </div>
                                     </div>
                                     <div class="item form-group">
                                       <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mission :<span class="required"></span>
                                       </label>
                                       <div class="col-md-6 col-sm-6 ">
                                         <input type="text" name="type_mission" id="first-name" required="required" class="form-control " class="@error('type_mission') is-invalid @enderror"
                                                    placeholder="" value="{{$Mission->type_mission}}">
                                                    @error('type_mission')
                                             <button class="btn-danger">{{$message}}</button>
                                             @enderror
                                       </div>
                                     </div>

                                     <div class="item form-group">
                 											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Debut :<span class="required"></span>
                 											</label>
                 											<div class="col-md-6 col-sm-6 ">
                 												<input type="text" name="date_debut" id="first-name" required="required" class="form-control " class="@error('date_debut') is-invalid @enderror"
                                                    placeholder="" value="{{$Mission->date_debut}}">
                                                    @error('date_debut')
                                             <button class="btn-danger">{{$message}}</button>
                                             @enderror
                 											</div>
                 										</div>

                      <div class="item form-group">
                      	<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fin :<span class="required"></span>
                      	</label>
                      	<div class="col-md-6 col-sm-6 ">
                      		<input type="text" name="date_fin" id="first-name" required="required" class="form-control " class="@error('date_fin') is-invalid @enderror"
                                     placeholder="" value="{{$Mission->date_debut}}">
                                     @error('date_fin')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                      	</div>
                      </div>

                      <div class="form-group row{{ $errors->has('etat') ? ' has-error' : '' }}">
                      <label class="col-form-label col-md-3 col-sm-3 label-align ">Etat :</label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="etat" id="etat" class="form-control">
                          <option value="1" @if (old('etat') == 1) selected @endif>Mission en cours</option>
                          <option value="0" @if (old('etat') == 0) selected @endif>Mission termine</option>


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
