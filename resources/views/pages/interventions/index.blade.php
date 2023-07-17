@extends("partials.main")

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
      <i class="bi bi-justify fs-3"></i>
    </a>
  </header>

  <div class="page-heading">
    <h3>Gestion de intervetions</h3>
  </div>
  <div class="page-content">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a
                class="nav-link active"
                id="home-tab"
                data-bs-toggle="tab"
                href="#home"
                role="tab"
                aria-controls="home"
                aria-selected="true"
                >Liste des anomalies</a
              >
            </li>
            <li class="nav-item" role="presentation">
              <a
                class="nav-link"
                id="profile-tab"
                data-bs-toggle="tab"
                href="#profile"
                role="tab"
                aria-controls="profile"
                aria-selected="false"
                >Interventions en cours</a
              >
            </li>
            <li class="nav-item" role="presentation">
              <a
                class="nav-link"
                id="contact-tab"
                data-bs-toggle="tab"
                href="#contact"
                role="tab"
                aria-controls="contact"
                aria-selected="false"
                >Historiques des interventions</a
              >
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div
              class="tab-pane fade show active py-2"
              id="home"
              role="tabpanel"
              aria-labelledby="home-tab"
            >
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#exampleModalScrollable">
            Lancer une intervention
        </button>
        
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Lancer une intervention</h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                      <form action="/interventions" method="POST">
                        @method("POST")
                        @csrf
                        <div class="modal-body">
                            <label>anomalie: </label>
                            <div class="form-group">
                                <input type="text" placeholder="anomalie" name="anomalie"
                                    class="form-control">
                            </div>
                            <label>description: </label>
                            <div class="form-group">
                                <input type="text" placeholder="description" name="description"
                                    class="form-control">
                            </div>
        
                            <label>Designation: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Designation" name="designation"
                                    class="form-control">
                            </div>
                            <label>type: </label>
                            <div class="form-group">
                                <input type="text" placeholder="type" name="type"
                                    class="form-control">
                            </div>
        
                            <label>code: </label>
                            <div class="form-group">
                                <input type="text" placeholder="code" name="code"
                                    class="form-control">
                            </div>
                            <label>nom: </label>
                            <div class="form-group">
                                <input type="text" placeholder="nom" name="nom"
                                    class="form-control">
                            </div>
        
                            <label>sous_module: </label>
                            <div class="form-group">
                                <input type="text" placeholder="sous_module" name="sous_module"
                                    class="form-control">
                            </div>
                            <label>Status: </label>
                            <div class="form-group">
                                <input type="text" placeholder="status" name="status"
                                    class="form-control">
                            </div>
        
                            <label>Commentaire: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Commentaire" name="Commentaire"
                                    class="form-control">
                            </div>

                            <label>matricule: </label>
                            <div class="form-group">
                                <input type="text" placeholder="matricule" name="matricule"
                                    class="form-control">
                            </div>
        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary"
                                data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Annuler</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Enregistrer</span>
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        
        <table class="table table-striped" id="table1">   
             <thead>
            <tr>
              <th>Anomalie</th>
              <th>Description</th>
              <th>Type</th>
              <th>Code</th>
              <th>Nom</th>
              <th>Sous_module</th>
              <th>Status</th>
              <th>Commentaire</th>
              <th>Matricule</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($interventions as $intervention)
            <tr>
                <td>{{$intervention->anomalie}}</td>
                <td>{{$intervention->description}}</td>
                <td>{{$intervention->type}}</td>
                <td>{{$intervention->code}}</td>
                <td>{{$intervention->nom}}</td>
                <td>{{$intervention->sous_module}}</td>
                <td>{{$intervention->status}}</td>
                <td>{{$intervention->Commentaire}}</td>
                <td>{{$intervention->matricule}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
            </div>
            <div
              class="tab-pane fade"
              id="profile"
              role="tabpanel"
              aria-labelledby="profile-tab"
            >
            @include("pages.equipment.ensemble")
            </div>
            <div
              class="tab-pane fade"
              id="contact"
              role="tabpanel"
              aria-labelledby="contact-tab"
            >
            @include("pages.equipment.statistique")
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

