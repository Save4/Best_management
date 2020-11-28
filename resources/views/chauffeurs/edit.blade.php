@extends('layouts.layout')
@section('content')

  @section('title','Chauffeur | 'config('app.name'))


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Modification des chauffeurs</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/chauffeurs/{{$Chauffeur->id}}" method="post">

                      @csrf
                      @method('PUT')
  										<div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nom: </label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="nom" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess2" class="@error('nom') is-invalid @enderror" placeholder=""
                            value="{{ $Chauffeur->nom }}">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                        @error('nom')
                        <button class="btn-danger">{{ $message }}</button>
                        @enderror
  											</div>
  										</div>

                      <div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Prenom: </label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="prenom" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess2" class="@error('prenom') is-invalid @enderror" placeholder=""
                            value="{{ $Chauffeur->prenom }}">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                        @error('prenom')
                        <button class="btn-danger">{{ $message }}</button>
                        @enderror
  											</div>
  										</div>

                      <div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email: </label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="email" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess2" class="@error('email') is-invalid @enderror" placeholder=""
                            value="{{ $Chauffeur->email }}">
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>

                        @error('email')
                        <button class="btn-danger">{{ $message }}</button>
                        @enderror
  											</div>
  										</div>

                      <div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Telephone: </label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="telephone" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess2" class="@error('telephone') is-invalid @enderror" placeholder=""
                            value="{{ $Chauffeur->telephone }}">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>


                        @error('telephone')
                        <button class="btn-danger">{{ $message }}</button>
                        @enderror
  											</div>
  										</div>

                      <div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID permis de conduire: </label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="id_permis_conduire" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess2" class="@error('id_permis_conduire') is-invalid @enderror" placeholder=""
                            value="{{ $Chauffeur->id_permis_conduire }}">

                        @error('id_permis_conduire')
                        <button class="btn-danger">{{ $message }}</button>
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
