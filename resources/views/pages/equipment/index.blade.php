
<button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalScrollable">
    Ajouter un equipement
</button>

<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Ajouter un equipement</h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                
              <form action="/equipment/store" method="POST">
                @method("POST")
                @csrf
                <div class="modal-body">
                  <label>Image: </label>
                    <div class="form-group">
                        <input type="file" name="image"
                            class="form-control">
                    </div>
                    <label>Code: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Code" name="code"
                            class="form-control">
                    </div>
                    <label>Nom: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Nom" name="nom"
                            class="form-control">
                    </div>

                    <label>Marque: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Marque" name="marque"
                            class="form-control">
                    </div>
                    <label>Description: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Description" name="description"
                            class="form-control">
                    </div>

                    <label>Prix Unitaire: </label>
                    <div class="form-group">
                        <input type="number" placeholder="Prix Unitaire" name="prix_unitaire"
                            class="form-control">
                    </div>
                    <label>Localisation: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Localisation" name="localisation"
                            class="form-control">
                    </div>

                    <label>Duree de vie: </label>
                    <div class="form-group">
                        <input type="number" placeholder="Duree de vie" name="vie"
                            class="form-control">
                    </div>
                    <label>Nbr d'heures/Jours: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Nbr d'heures/Jours" name="heures"
                            class="form-control">
                    </div>

                    <label>Date 1ere exploitation: </label>
                    <div class="form-group">
                        <input type="date" placeholder="Date 1ere exploitation" name="date_exploitation"
                            class="form-control">
                    </div>
                    <label>Date achat: </label>
                    <div class="form-group">
                        <input type="date" placeholder="Date achat" name="date_achat"
                            class="form-control">
                    </div>

                    <label>Etat du stock: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Etat du stock" name="etat"
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
        <th>Nom</th>
        <th>Marque</th>
        <th>Description</th>
        <th>Prix unitaire</th>
        <th>Localisation</th>
        <th>Duree de vie (ans)</th>
        <th>Nbr d'heures/Jours</th>
        <th>Date 1ere exploitation</th>
        <th>Date achat</th>
        <th>Etat</th>
      </tr>
    </thead>

    
    <tbody>
      @foreach ($equipments as $equipment)
    <tr>
      <td>{{ $equipment->code}}</td>
      <td>{{ $equipment->nom}}</td>
      <td>{{ $equipment->marque}}</td>
      <td>{{ $equipment->description}}</td>
      <td>{{ $equipment->prix_unitaire}}</td>
      <td>{{ $equipment->localisation}}</td>
      <td>{{ $equipment->vie}}</td>
      <td>{{ $equipment->heures}}</td>
      <td>{{ $equipment->date_exploitation}}</td>
      <td>{{ $equipment->date_achat}}</td>
      <td>{{ $equipment->etat}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>