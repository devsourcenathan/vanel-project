@extends("partials.main")

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
      <i class="bi bi-justify fs-3"></i>
    </a>
  </header>

  <div class="page-heading">
    <h3>Employes</h3>
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
                >Liste des employes</a
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
                >Couts employes</a
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
                >Fournisseurs</a
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
                >Sous traitance</a
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
            Ajouter un employes
        </button>
        
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Ajouter un stock</h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                      <form action="/ressources" method="POST">
                        @method("POST")
                        @csrf
                        <div class="modal-body">
                            <label>Matricule: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Matricule" name="matricule"
                                    class="form-control">
                            </div>
                            <label>Nom: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Nom" name="nom"
                                    class="form-control">
                            </div>
        
                            <label>Prenom: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Prenom" name="prenom"
                                    class="form-control">
                            </div>
                            <label>Mobile: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Mobile" name="mobile"
                                    class="form-control">
                            </div>
        
                            <label>Email: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Email" name="email"
                                    class="form-control">
                            </div>
                            <label>Civilite: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Civilite" name="civilite"
                                    class="form-control">
                            </div>
        
                            <label>Fonction: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Fonction" name="fonction"
                                    class="form-control">
                            </div>
                            <label>Departement: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Departement" name="departement"
                                    class="form-control">
                            </div>
        
                            <label>Type de contrat: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Type_contrat" name="type_contrat"
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
              <th>Matricule</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Civilite</th>
              <th>Fonctions</th>
              <th>Departement</th>
              <th>Type de contrat</th>
              <th>Mobile</th>
              <th>Mail</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($ressources as $ressource)
            <tr>
                <td>{{$ressource->matricule}}</td>
                <td>{{$ressource->nom}}</td>
                <td>{{$ressource->prenom}}</td>
                <td>{{$ressource->mobile}}</td>
                <td>{{$ressource->email}}</td>
                <td>{{$ressource->civilite}}</td>
                <td>{{$ressource->fonction}}</td>
                <td>{{$ressource->departement}}</td>
                <td>{{$ressource->type_contrat}}</td>
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

