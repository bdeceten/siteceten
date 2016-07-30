<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
  <head>
      <?= $this->Html->charset() ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>
          <?= $cakeDescription ?>
      </title>
      <?= $this->Html->meta('icon') ?>
      <?= $this->Html->css('bootstrap.min.css') ?>
      <?= $this->Html->css('font-awesome.min.css') ?>
      <?= $this->Html->css('main.css') ?>
      <?= $this->Html->css('navbar.css') ?>
  </head>
  <body>
    <div class="landing-screen">
      <div class="container">
        <div class="row">
          <div class="brand-middle">
              <?= $this->Html->image('logo-white.png', ['class'=>'logo']) ?>
              <h1> Cercle des Elèves de TELECOM Nancy </h1>
              <p> <a href="#start"><button class="btn-style">Découvrir</button></a> </p>
              <p class="social-network">
                <a href="https://www.facebook.com/bde.c.telecomnancy" target="_blank">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://twitter.com/bdetelecomnancy" target="_blank">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://telecom-nancy.slack.com/" target="_blank">
                  <i class="fa fa-slack" aria-hidden="true"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://github.com/bdeceten/" target="_blank">
                  <i class="fa fa-github" aria-hidden="true"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="mailto:bde@telecomnancy.net">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
              </p>
          </div>
        </div> <!-- row -->
      </div>
    </div>
    <div id="start">
      <div id="nav-wrapper">
        <nav id="nav" class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false"
              >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <?= $this->Html->image('logo-purple.svg', ['class' => 'pull-left', 'width'=>'20px']) ?>
                <span class="pull-right">&nbsp;CETEN</span>
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">L'association</a></li>
                <li><a href="#">Les clubs</a></li>
                <li><a href="#">Nos partenaires</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Se connecter</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </div>
    <div class="container">
        <div class="col-md-8 col-md-offset-2 text-justify">
        <?= $this->Html->image('newCeten.png', ['class' => 'assos-logo']) ?>
            <h2>L'association</h2>
              <p>
                Créé en 1991, le Cercle des Elèves de TELECOM Nancy (précédemment CDE Esial) a pour objectif d'encadrer
                la vie extra-scolaire à <a href="http://telecomnancy.univ-lorraine.fr/">TELECOM Nancy</a>. Comptant plus de 300 adhérants en 2016, une poignée d'étudiants
                est élu chaque année civile pour les représenter. Ces derniers constituent le Bureau des Elèves.<br />
                Parmis les différentes actions du Cercle, on retrouve :
                <ul>
                  <li>Proposer des services et activités à l'ensemble de ses adhérents</li>
                  <li>Favoriser l'entraide et la solidarité entre ses membres</li>
                  <li>Représenter l'école lors des différents événements étudiants de Nancy</li>
                </ul>
                <div class="text-center">
                  <h1>¾</h1><p>C'est le ratio d'élèves de l'école adhérants<br /> au CETEN en 2016.</p>
                </div>
              </p>
            <hr class="divide">
            <h2>Les différents clubs</h2>
              <p>
                L'association compte plus d'une vingtaine de clubs. Chaque membre de l'association peut rejoindre les clubs
                qu'il apprécie. Qu'il s'agisse de se placer derrière le bar de l'école, de concevoir des jeux vidéos, de
                s'occuper de l'organisation des soirées ou de chanter avec la chorale, il y en a pour tous les goûts et il est
                bien sûr possible de créer de nouveaux clubs.
              </p>
                <p class="text-center">
                  <button type="button" class="btn btn-default btn-lg">Détail de tous les clubs <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                </p>
            <hr class="divide">
            <h2>Nos partenaires</h2>
              <p>
                Adhérer au Cercle, cela permet également de bénéficier des différents avantages que propose nos partenaires.
                Réduction dans les bars, tarifs préférentiels pour les personnes qui passent le permis de conduire,
                avantages lors de l'ouverture d'un compte bancaire...
              </p>
              <p class="text-center">
                <button type="button" class="btn btn-default btn-lg"> <i class="fa fa-eur" aria-hidden="true"></i> Découvrez de quoi profiter</button>
              </p>
        </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-2 col-md-offset-3">
            <h4>Plan du site</h4><hr>
            <ul class="sitemap list-group list-unstyled">
              <li><a href="/">Accueil</a></li>
              <li><a href="/">L'association</a></li>
              <li><a href="/">Les clubs</a></li>
              <li><a href="/">Nos partenaires</a></li>
              <li><a href="/">Agenda</a></li>
              <li><a href="/">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4>Réseaux sociaux</h4><hr>
            <p class="social-network">
              <a href="https://www.facebook.com/bde.c.telecomnancy" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://twitter.com/bdetelecomnancy" target="_blank">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://telecom-nancy.slack.com/" target="_blank">
                <i class="fa fa-slack" aria-hidden="true"></i>
              </a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://github.com/bdeceten/" target="_blank">
                <i class="fa fa-github" aria-hidden="true"></i>
              </a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="mailto:bde@telecomnancy.net">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </a>
            </p>
          </div>
          <div class="col-md-2">
            <h4>Légal</h4><hr>
            <p>Copyright &copy; 2016<br /> Tous droits réservés
          </div>
        </div>
      </div>
    </footer>
  </body>

  <?= $this->Html->script('jquery-3.1.0.min.js'); ?>
  <?= $this->Html->script('jquery-ui.min.js'); ?>
  <?= $this->Html->script('bootstrap.min.js'); ?>

  <script>
    /* ----- Navbar Affixed ----- */
    $(function() {
      $('#nav-wrapper').height($("#nav").height());

      $('#nav').affix({
          offset: { top: $('#nav').offset().top }
      });
  });
  </script>
  <script>
    /* ----- Smooth Scroll ----- */
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, 'easeInOutCubic');
            return false;
          }
        }
      });
    });
  </script>
</html>
