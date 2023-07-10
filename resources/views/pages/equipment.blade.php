@extends("partials.main")

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
      <i class="bi bi-justify fs-3"></i>
    </a>
  </header>

  <div class="page-heading">
    <h3>Gestion du parc d'equipement</h3>
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
                >Parc d'equipement</a
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
                >Liste des ensembles</a
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
                >Statistiques</a
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
              @include("pages.equipment.index")
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