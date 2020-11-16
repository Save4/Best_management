 <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Generale</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Home <span ></span></a>

                  </li>
                  <li><a><i class="fa fa-car"></i> Vehicule <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('marques')}}">Marques</a></li>
                      <li><a href="{{url('modeles')}}">Modeles</a></li>
                      <li><a href="{{url('categories')}}">Categories</a></li>
                      <li><a href="{{url('vehicules')}}">Vehicules</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-university"></i>Departement <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('departements')}}">Departements</a></li>


                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i>Mission <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('chauffeurs')}}">Chauffeurs</a></li>
                      <li><a href="{{url('missions')}}">Mission</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Consommations</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i> Consommation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('fournisseurs')}}">Fournisseurs</a></li>
                      <li><a href="{{url('reparations')}}">Reparation</a></li>
                      <li><a href="{{url('carburents')}}">Carburent</a></li>
                      <li><a href="{{url('assurences')}}">Impot ou taxe ou assurence</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-laptop"></i> Rapports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                    </ul>
                  </li>



                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
