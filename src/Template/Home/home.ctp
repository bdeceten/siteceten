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
    <?= $this->element('navbar'); ?>
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
                  <li>Proposer des services et activités à l'ensemble des adhérents</li>
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
    <?= $this->element('footer'); ?>
  </body>
  <?= $this->element('scripts'); ?>
</html>
