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
    <div id="particles" class="landing-screen">
      <div id="intro">
        <div class="container">
          <div class="row">
            <div class="brand-middle">
                <?= $this->Html->image('logo-white.png', ['class'=>'logo']) ?>
                <h1> Cercle des Elèves de TELECOM Nancy </h1>
                <p> <a href="#start"><button class="btn-style">Découvrir</button></a> </p>
                    <p class="social-network">
                      <a href="https://www.facebook.com/bde.c.telecomnancy" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="https://twitter.com/bdetelecomnancy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="https://telecom-nancy.slack.com/" target="_blank"><i class="fa fa-slack" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="https://github.com/bdeceten/" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="mailto:bde@telecomnancy.net"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </p>
            </div>
          </div> <!-- row -->
        </div>
      </div>
    </div>
    <div id="start">
      <div id="nav-wrapper">
        <nav id="nav" class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
        <div class="span3">
            <h2>some lorem ipsum for scrolling:</h2>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
           <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
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
              <a href="https://www.facebook.com/bde.c.telecomnancy" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://twitter.com/bdetelecomnancy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://telecom-nancy.slack.com/" target="_blank"><i class="fa fa-slack" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://github.com/bdeceten/" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="mailto:bde@telecomnancy.net"><i class="fa fa-envelope" aria-hidden="true"></i></a>
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
  <?= $this->Html->script('jquery.particleground.min.js'); ?>
  <?= $this->Html->script('particles.js'); ?>
  <script>
  $('#particles').particleground();

  </script>
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
