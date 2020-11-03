@extends('layouts.layout')
@section('content')


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Add modele</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('modeles')}}" method="POST">

                                             @csrf
  										<div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nom du modele <span class="required">*</span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="nom_modele" id="first-name" required="required" class="form-control " class="@error('nom_modele') is-invalid @enderror"
                                     placeholder="Entre le modele" value="">
                                     @error('nom_modele')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>

  										<div class="item form-group">
  											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Date d'enregistrement</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input name="temp_actuel" id="middle-name" class="form-control" type="date" name="middle-name" class="@error('temp_actuel') is-invalid @enderror"
                                     placeholder="Entre le temps d'enregistrement du modele" value="">
                                     @error('temp_actuel')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>


  										</div>
  										<div class="ln_solid"></div>
  										<div class="item form-group">
  											<div class="col-md-6 col-sm-6 offset-md-3">

  												<button class="btn btn-primary" type="reset">Reset</button>
  												<button type="submit" id="submit" class="btn btn-success">Save</button>
  											</div>
  										</div>

  									</form>
  								</div>
  							</div>
  						</div>
  					</div>





<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modele</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Modele</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modele <small> Add</small></h3>
              </div>


    <!--/.row--><div class="card-body">

              <div class="row">
                <div class="col-md-6">
                    <form role="form" action="{{url('modeles')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Modele :</label>
                            <input type="text" name="nom_modele" class="form-control" class="@error('nom_modele') is-invalid @enderror"
                                   placeholder="Entre le modele" value="">
                            @error('nom_modele')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                </div>
                <div class="col-md-6">

                        <div class="form-group">
                            <label>Temp :</label>
                            <input type="date" name="temp_actuel" class="form-control" class="@error('temp_actuel') is-invalid @enderror"
                                   placeholder="Entre le temp_actuel du chauffeur" value="">
                            @error('temp_actuel')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                      </div>
                </div>

              </div>
                <div class="card-footer">


                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>

       <div class="card justify-content-center">
              <div class="card-header">
                <h3 class="card-title"><strong>Modeles des vehicule</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body col-md-8">
                <table id="tb1" class="table table-bordered table-striped"style="font-size:12px;font-family:'Times New Roman'">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Modele</th>
                        <th>Temp</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($modeles as $Modele)
                    <tr>
                        <td>{{$Modele->id}}</td>
                        <td>{{$Modele->nom_modele}}</td>
                        <td>{{$Modele->temp_actuel}}</td>

                      <!--  <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a> -->

                         <td>
                            <a href="modeles/edit/{{$Modele->id}}" class="btn btn-info btn"><i class="fas fa-pencil-alt">
                              </i>Edit</a>
                        </td>
                        <td>

                          <form action="modeles/destroy/{{$Modele->id}}" method="post" class="form-inline">
                          @csrf
                           <button type="submit" onclick="return confirm('Supprimer?')" class="btn btn-danger btn"><i class="fas fa-trash">
                              </i>delete</button>
                         </form>

                        </td>

                    </tr>
                        @endforeach
                    </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- /.control-sidebar -->
</div>
</div>



@endsection()
