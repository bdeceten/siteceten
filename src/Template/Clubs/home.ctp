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
    <?= $this->element('navbar'); ?>
    <div class="container top-space">
        <div class="col-md-10 col-md-offset-1 text-justify">
            <div class="row">
              <h2>Les différents Clubs</h2>
            </div>
            <div class="row top-space">
              <div class="col-md-4 clubs">
                <div class="panel panel-default">
                  <div class="panel-heading integration">
                    <h3 class="panel-title">Intégration</h3>
                    <span class="clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
                  </div>
                  <div class="panel-body" style="display: none">
                    <p class="overview"><em>Le club intégration a pour but d'accompagner les nouveaux élèves de TELECOM Nancy
                    dans leur rentrée en leur proposant une série d'événements divers et variés tous plus sympa les uns que les autres.</em></p>
                    <hr>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:club-integration@telecomnancy.net">club-integration</a></li>
                      <li><i class="fa fa-users" aria-hidden="true"></i> 6 membres</li>
                      <li><i class="fa fa-clock-o" aria-hidden="true"></i> Date de création : 1991</li>
                    </ul>
                    <hr>
                    <button class="btn btn-default pull-right" type="submit"><i class="fa fa-info" aria-hidden="true"></i> &nbsp;En savoir plus</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clubs">
                <div class="panel panel-default">
                  <div class="panel-heading studio">
                    <h3 class="panel-title">Studio</h3>
                    <span class="clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
                  </div>
                  <div class="panel-body" style="display: none">
                    <p class="overview"><em>Le club studio est la pour prendre des photos, faire des retouches, faire des vidéos...</em></p>
                    <hr>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:club-studio@telecomnancy.net">club-studio</a></li>
                      <li><i class="fa fa-users" aria-hidden="true"></i> 5 membres</li>
                      <li><i class="fa fa-clock-o" aria-hidden="true"></i> Date de création : 2007</li>
                    </ul>
                  <hr>
                    <button class="btn btn-default pull-right" type="submit"><i class="fa fa-info" aria-hidden="true"></i> &nbsp;En savoir plus</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clubs">
                <div class="panel panel-default">
                  <div class="panel-heading bar">
                    <h3 class="panel-title">Bar</h3>
                    <span class="clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
                  </div>
                  <div class="panel-body" style="display: none">
                    <p class="overview"><em>Le club bar tient le bar de l'école est propose des boissons, gourmandises et repas au élèves pour
                      un moindre coup.</em></p>
                    <hr>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:club-bar@telecomnancy.net">club-bar</a></li>
                      <li><i class="fa fa-users" aria-hidden="true"></i> 110 membres</li>
                      <li><i class="fa fa-clock-o" aria-hidden="true"></i> Date de création : 2009</li>
                    </ul>
                  <hr>
                    <button class="btn btn-default pull-right" type="submit"><i class="fa fa-info" aria-hidden="true"></i> &nbsp;En savoir plus</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row top-space">
              <div class="col-md-4 clubs">
                <div class="panel panel-default">
                  <div class="panel-heading madpad">
                    <h3 class="panel-title">MadPad</h3>
                    <span class="clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
                  </div>
                  <div class="panel-body" style="display: none">
                    <p class="overview"><em>Le club intégration a pour but d'accompagner les nouveaux élèves de TELECOM Nancy
                    dans leur rentrée en leur proposant une série d'événements divers et variés tous plus sympa les uns que les autres.</em></p>
                    <hr>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:club-integration@telecomnancy.net">club-integration</a></li>
                      <li><i class="fa fa-users" aria-hidden="true"></i> 6 membres</li>
                      <li><i class="fa fa-clock-o" aria-hidden="true"></i> Date de création : 1991</li>
                    </ul>
                    <hr>
                    <button class="btn btn-default pull-right" type="submit"><i class="fa fa-info" aria-hidden="true"></i> &nbsp;En savoir plus</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clubs">
                <div class="panel panel-default">
                  <div class="panel-heading tektn">
                    <h3 class="panel-title">Tek TN</h3>
                    <span class="clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
                  </div>
                  <div class="panel-body" style="display: none">
                    <p class="overview"><em>Le club studio est la pour prendre des photos, faire des retouches, faire des vidéos...</em></p>
                    <hr>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:club-studio@telecomnancy.net">club-studio</a></li>
                      <li><i class="fa fa-users" aria-hidden="true"></i> 5 membres</li>
                      <li><i class="fa fa-clock-o" aria-hidden="true"></i> Date de création : 2007</li>
                    </ul>
                  <hr>
                    <button class="btn btn-default pull-right" type="submit"><i class="fa fa-info" aria-hidden="true"></i> &nbsp;En savoir plus</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clubs">
                <div class="panel panel-default">
                  <div class="panel-heading jig">
                    <h3 class="panel-title">Jeux Inter Groupes</h3>
                    <span class="clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
                  </div>
                  <div class="panel-body" style="display: none">
                    <p class="overview"><em>Le club bar tient le bar de l'école est propose des boissons, gourmandises et repas au élèves pour
                      un moindre coup.</em></p>
                    <hr>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:club-bar@telecomnancy.net">club-bar</a></li>
                      <li><i class="fa fa-users" aria-hidden="true"></i> 110 membres</li>
                      <li><i class="fa fa-clock-o" aria-hidden="true"></i> Date de création : 2009</li>
                    </ul>
                  <hr>
                    <button class="btn btn-default pull-right" type="submit"><i class="fa fa-info" aria-hidden="true"></i> &nbsp;En savoir plus</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <?= $this->element('footer'); ?>
  </body>
  <?= $this->element('scripts'); ?>
  <script>
  $(document).on('click', '.panel-heading span.clickable', function(e){
      var $this = $(this);
  	if(!$this.hasClass('panel-collapsed')) {
  		$this.parents('.panel').find('.panel-body').slideUp();
  		$this.addClass('panel-collapsed');
  		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
  	} else {
  		$this.parents('.panel').find('.panel-body').slideDown();
  		$this.removeClass('panel-collapsed');
  		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
  	}
  })
  </script>
</html>
