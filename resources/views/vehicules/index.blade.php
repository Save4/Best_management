@extends('layouts.layout')
@section('content')


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Add vehicule</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('vehicules')}}" method="POST">

                                             @csrf

                 <div class="form-group row">
                     <label class="col-form-label col-md-3 col-sm-3 label-align ">Marque :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="modele_id" id="" class="form-control">

       @foreach($marques as $Marque)
       <option value="{{$Marque->id}}">{{$Marque->nom_marque}}</option>
      @endforeach
      @error('marque_id')

      <div class="alert alert-danger">{{$message}}</div>
      @enderror
</select>

                            </div>
                        </div>

                    <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 label-align ">Modele :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="modele_id" id="" class="form-control" class="@error('modele_id') is-invalid @enderror">
                                   @foreach($modeles as $Modele)
                                          <option value="{{$Modele->id}}">{{$Modele->nom_modele}}</option>
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
                                               <option value="{{$Categorie->id}}">{{$Categorie->nom_categorie}}</option>
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
                                     placeholder="Entre le plaque" value="">
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

                             <option>Manuel</option>
                            <option>Automatique</option>
                          </select>

                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Type de moteur :<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <select name="type_moteur" id="" class="form-control">

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
                                     placeholder="Entre le nombre de place" value="">
                                     @error('nombre_place')
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
                                  <h2>Liste des vehicules</small></h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

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
                        <th>Marque</th>
                        <th>Modele</th>
                        <th>Categorie</th>
                        <th>Type de moteur</th>
                        <th>Boite de vitesse</th>
                        <th>Plaque</th>
                        <th>Nombre de place</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>


                      <tbody>
                    @foreach($vehicules as $Vehicule)
                    <tr>
                        <td>{{$Vehicule->id}}</td>
                        <td>{{$Vehicule->nom_marque}}</td>
                        <td>{{$Vehicule->nom_modele}}</td>
                        <td>{{$Vehicule->nom_categorie}}</td>
                        <td>{{$Vehicule->type_moteur}}</td>
                        <td>{{$Vehicule->boite_vitesse}}</td>
                        <td>{{$Vehicule->plaque}}</td>
                        <td>{{$Vehicule->nombre_place}}</td>
                        <td>
                          <button>  <a href="vehicules/edit/{{$Vehicule->id}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </button></td>
                        <td>

                          <form action="vehicules/destroy/{{$Vehicule->id}}" method="post" class="form-inline">
                          @csrf
                           <button type="submit" onclick="return confirm('Supprimer?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                         </form>

                        </td>

                    </tr>

                        @endforeach
                        <a href="{{url('vehicules/show/{Vehicule}')}}" class="btn btn-round btn-success btn-xs">Rapport</a>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>




@endsection()
