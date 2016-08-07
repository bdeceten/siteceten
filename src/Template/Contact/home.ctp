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
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6">
            <h2 class="text-center">Formulaire de contact</h2>
            <hr class="divide">

              <?= $this->Form->create($contact, ['class' => 'form-horizontal']) ?>
              <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Prénom</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Prénom">
                </div>
              </div>
              <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Nom</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nom">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Adresse email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="email" name="email" placeholder="exemple@exemple.fr">
                </div>
              </div>
              <div class="form-group">
                <label for="message" class="col-sm-3 control-label">Message</label>
                <div class="col-sm-9">
                  <textarea class="form-control" rows="3" id="message" name="message"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 text-center">
                  <button type="submit" class="btn btn-default">Envoyer</button>
                </div>
              </div>
              <?= $this->Flash->render('success') ?>
              <?= $this->Flash->render('error') ?>
            </form>
          </div>
          <div class="col-md-6 text-center">
            <h2>Nous trouver</h2>
            <hr class="divide">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1906.7052920883505!2d6.1540397580264425!3d48.66914256608801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794a27b958c5c31%3A0xda674138b6da42e7!2sTELECOM+Nancy!5e0!3m2!1sfr!2sfr!4v1469924955462" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <?= $this->element('footer'); ?>
  </body>
  <?= $this->element('scripts'); ?>
</html>
