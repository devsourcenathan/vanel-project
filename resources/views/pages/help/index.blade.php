@extends("partials.main")

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
      <i class="bi bi-justify fs-3"></i>
    </a>
  </header>

  <div class="page-heading">
    <h3>Gestion de stock</h3>
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
                >Stock</a
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
                >Entrees</a
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
                >Sorties</a
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
            Ajouter un stock
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
                        
                      <form action="/stock/store" method="POST">
                        @method("POST")
                        @csrf
                        <div class="modal-body">
                            <label>Code: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Code" name="code"
                                    class="form-control">
                            </div>
                            <label>Reference: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Reference" name="ref"
                                    class="form-control">
                            </div>
        
                            <label>Designation: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Designation" name="designation"
                                    class="form-control">
                            </div>
                            <label>Categorie: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Categorie" name="categories"
                                    class="form-control">
                            </div>
        
                            <label>Prix Unitaire: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Prix Unitaire" name="prix_unitaire"
                                    class="form-control">
                            </div>
                            <label>Quantite: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Quantite" name="qte"
                                    class="form-control">
                            </div>
        
                            <label>Etat du stock: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Etat du stock" name="stock"
                                    class="form-control">
                            </div>
                            <label>Duree moyenne: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Duree moyenne" name="duree_moyenne"
                                    class="form-control">
                            </div>
        
                            <label>Emplacement: </label>
                            <div class="form-group">
                                <input type="text" placeholder="Emplacement" name="emplacement"
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
              <th>Code</th>
              <th>Reference</th>
              <th>Designation</th>
              <th>Categorie</th>
              <th>Prix unitaire</th>
              <th>Quantite</th>
              <th>Etat stock</th>
              <th>Duree moyenne</th>
              <th>Emplacement</th>
              <th>Duree totale</th>
              <th>Prix total</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($stocks as $stock)
            <tr>
                <td>{{$stock->code}}</td>
                <td>{{$stock->ref}}</td>
                <td>{{$stock->designation}}</td>
                <td>{{$stock->categories}}</td>
                <td>{{$stock->prix_unitaire}}</td>
                <td>{{$stock->qte}}</td>
                <td>{{$stock->stock}}</td>
                <td>{{$stock->duree_moyenne}}</td>
                <td>{{$stock->emplacement}}</td>
                <td>{{$stock->duree_total}}</td>
                <td>{{$stock->prix_total}}</td>
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

