<?php 
	// header("Refresh:0; url=./");
	// exit();


 ?>

<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Nuad,Abdos,lagord,La Rochelle,de gasquet,Nuad Abdos">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Nuad Abdos</title>

    <!-- Material Design Lite CSS -->
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-orange.min.css">
    <!-- Font Awesome CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=fr">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/icone_Nuad.png" />

    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="images/logo_Nuad_banniere_2.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <!-- <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div> -->
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="./">Site</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="./article.php">Articles</a>
              
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/logo_Nuad_banniere_2.png">
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect " for="more-button">
            <a href="./"><li class="mdl-menu__item" href="">Site</li></a>
            <a href="./article.php"><li class="mdl-menu__item" href="">Articles</li></a>
            <li disabled class="mdl-menu__item" href="">Connexion</li>
          </ul>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="images/logo_Nuad_banniere_2.png">
        </span>
        <nav class="mdl-navigation">
        <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Récents</span>
          <a class="mdl-navigation__link" href="">Article 1</a>
          <a class="mdl-navigation__link" href="">Article 2</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Les plus lus</span>
          <a class="mdl-navigation__link" href="">Article 1</a>
          <a class="mdl-navigation__link" href="">Article 2</a>
        </nav>
      </div>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Articles Récents</div>
          <div class="android-card-container mdl-grid">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Article recent 1</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">intérieur de l'article le plus récent</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Lire
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Article recent 2</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">intérieur de l'article le plus récent</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Lire
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Article recent 3</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">intérieur de l'article le plus récent</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Lire
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Article recent 4</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">intérieur de l'article le plus récent</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Lire
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div><div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Article recent 5</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">intérieur de l'article le plus récent</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Lire
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
          </div>
        </div>

        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Articles les plus lus</div>
          <div class="android-card-container mdl-grid">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Article le plus lu 1</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">intérieur de l'article le plus lu</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Lire
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
          </div>
        </div>

        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
             <!-- Facebook -->
            <a href="https://www.facebook.com/NuadAbdosLagord/" title="Share on Facebook" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--facebook"><i class="fa fa-facebook fa-fw"></i>Facebook</a>
            </div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">&copy; 2017 <a href="http://www.antoninprouteau.fr" target="_blank">Prouteau Antonin</a>. All Rights Reserved.</p>
          </div>

        </footer>
      </div>
    </div>
    <a href="#top" id="view-source" class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect"><i class="material-icons">expand_less</i></a>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
