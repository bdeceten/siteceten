<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Mailer\Email;

use App\Form\ContactForm;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class ContactController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display()
    {
        $path = func_get_args();

        $contact = new ContactForm();
        if ($this->request->is('post')) {
            if ($contact->execute($this->request->data)) {
                $this->Flash->success('Votre message a bien été envoyé.',['key' => 'success']);
                $senderMail = $this->request->data('firstName') . " " . $this->request->data('lastName');
                $email = new Email('default');
                $email->from([$this->request->data('email') => $senderMail])
                    ->to('guillaume.haben@telecomnancy.net') //Set bde@telecomnancy.net in prod
                    ->emailFormat('html')
                    ->subject('CETEN - Nouveau Message')
                    ->send($this->request->data('message') . "<br /><br />" . $this->request->data('firstName') . " " . $this->request->data('lastName'));
            } else {
                $this->Flash->error('Un problème est survenu.',['key' => 'error']);
            }
        }
        $this->set('contact', $contact);

        try {
            $this->render(implode('/contact', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
}
