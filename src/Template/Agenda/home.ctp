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
    <div class="container">
      <div class="embed-responsive embed-responsive-16by9 agenda">
          <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;hl=fr&amp;bgcolor=%23FFFFFF&amp;src=esial.net_og2ar8u1hdq3mh4v8komg5sbpg%40group.calendar.google.com&amp;color=%23853104&amp;ctz=Europe%2FParis" style="border-width:0" width="960" height="600" frameborder="0" scrolling="no"></iframe>
      </div>
    </div>
    <?= $this->element('footer'); ?>
  </body>
  <?= $this->element('scripts'); ?>
</html>
