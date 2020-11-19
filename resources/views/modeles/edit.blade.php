@extends('layouts.layout')
@section('content')

  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Modification des modeles</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/modeles/{{$Modele->id}}" method="post">

                      @csrf
                      @method('PUT')
                      <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align ">Marque :</label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="marque_id" id="" class="select2_single form-control" tabindex="-1" class="@error('marque_id') is-invalid @enderror">
                          <option></option>
                                     @foreach($marques as $Marque)
                                            <option value="{{$Marque->id}}" {!! $Modele->marque_id==$Marque->id ?'selected="selected"':''  !!}>{{$Marque->nom_marque}}</option>

                                              @endforeach
                                   </select>
                                              @error('modele_id')
                               <button class="btn-danger">{{$message}}</button>
                                              @enderror
                           </div>
                           </div>
  										<div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Modele: </label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="nom_modele" id="first-name" required="required" class="form-control "class="@error('nom_modele') is-invalid @enderror" placeholder=""
                            value="{{ $Modele->nom_modele }}">
                        @error('nom_modele')
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
