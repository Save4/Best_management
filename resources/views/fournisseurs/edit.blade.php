@extends('layouts.layout')
@section('content')

  @section('title','Fournisseur | '.config('app.name'))


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Modification des fournisseurs</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/fournisseurs/{{$Fournisseur->id}}" method="post">

                      @csrf
                      @method('PUT')
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Societe: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="nom_societe" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess2" class="@error('nom_societe') is-invalid @enderror"
                                     placeholder="" value="{{ $Fournisseur->nom_societe }}">
                                     @error('nom_societe')

                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="email" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess4" class="@error('email') is-invalid @enderror"
                                     placeholder="" value="{{ $Fournisseur->email }}">
                                     <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                     @error('email')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Telephone: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="telephone" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess4" class="@error('telephone') is-invalid @enderror"
                                     placeholder="" value="{{ $Fournisseur->telephone }}">
                                     <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                     @error('telephone')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Province: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="province" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess4" class="@error('province') is-invalid @enderror"
                                     placeholder="" value="{{ $Fournisseur->province }}">
                                     @error('province')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Commune: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="commune" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess4" class="@error('commune') is-invalid @enderror"
                                     placeholder="" value="{{ $Fournisseur->commune }}">
                                     @error('commune')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Colline: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="colline" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess4" class="@error('colline') is-invalid @enderror"
                                     placeholder="" value="{{ $Fournisseur->colline }}">
                                     @error('colline')
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
