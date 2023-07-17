<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tableau de bord - Vanel project</title>

    <link rel="stylesheet" href="{{asset("assets/css/main/app.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/main/app-dark.css")}}" />
    <link
      rel="shortcut icon"
      href="{{asset("assets/images/logo/favicon.svg")}}"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="{{asset("assets/images/logo/favicon.png")}}"
      type="image/png"
    />

    <link rel="stylesheet" href="{{asset("assets/css/shared/iconly.css")}}" />
    <link
      rel="stylesheet"
      href="{{asset("assets/extensions/simple-datatables/style.css")}}"
    />
    <link rel="stylesheet" href="{{asset("assets/css/pages/simple-datatables.css")}}" />
  </head>

  <body>
    <div id="app">
      <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
              <div class="logo">
                <a href="/">Vanel Project</a>
              </div>
              <div class="sidebar-toggler x">
                <a href="#" class="sidebar-hide d-xl-none d-block"
                  ><i class="bi bi-x bi-middle"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-item">
                  <a href="/" class="sidebar-link">
                      <i class="bi bi-grid-fill"></i>
                      <span>Accueil</span>
                  </a>
              </li>
          
              <li class="sidebar-item">
                  <a href="/equipments" class="sidebar-link">
                      <i class="bi bi-collection-fill"></i>
                      <span>Equipements</span>
                  </a>
              </li>
          
              <li class="sidebar-item">
                  <a href="/stock" class="sidebar-link">
                      <i class="bi bi-pentagon-fill"></i>
                      <span>Stock</span>
                  </a>
              </li>
          
              <li class="sidebar-item">
                  <a href="/ressources" class="sidebar-link">
                      <i class="bi bi-cash"></i>
                      <span>Ressources</span>
                  </a>
              </li>
          
              <li class="sidebar-item">
                  <a href="/interventions" class="sidebar-link">
                      <i class="bi bi-bar-chart-fill"></i>
                      <span>Interventions</span>
                  </a>
              </li>
          
              <li class="sidebar-item">
                  <a href="/help" class="sidebar-link">
                      <i class="bi bi-journal-check"></i>
                      <span>Aide decision</span>
                  </a>
              </li>
          </ul>
          </div>
        </div>
      </div>
      <div id="main">