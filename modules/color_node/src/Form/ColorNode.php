<?php

namespace Drupal\color_node\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;


/**
 * Class ColorNode.
 */
class ColorNode extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'color_node';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['css_class'] = [
      '#type' => 'textfield',
      '#title' => $this->t('css Class'),
      '#description' => $this->t('css classes'),
      '#weight' => '0',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add Class'),
    ];
    return $form;
  }



  /**
    * (@inheritdoc)
    */
  public function validateForm(array &$form,FormStateInterface $form_state) {
   $value = $form_state->getValue('css_class');
     // Check if mail already is set for this node
     $select = Database::getConnection()->select('color_node', 'r');
     $select->fields('r', array('name'));
     $select->condition('name', $value);
     $results = $select->execute();
     if(!empty($results->fetchCol())) {
      // We found a id with this node id and email
      $form_state->setErrorByName('value', t('css class %value already exist, try anothe one.', array('%value' => $value )));
     }
     else if(empty($form_state->getValue('css_class'))){
       // $form_state->setErrorByName(t('css class already exist %path_from.'));
       $form_state->setErrorByName('value', t('%value Class name is Empty Please Enter Class in textfield.', array('%value' => $value )));
     }
}


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    if(db_insert('color_node')
       ->fields(array(
           'name' => $form_state->getValue('css_class'),
       ))
       ->execute()){
    drupal_set_message(t('Successfuly Added'));
}else{
  drupal_set_message(t('Enter value'));

}
    $config = \Drupal::service('config.factory')->getEditable('example.settings');

    // Set and save new message value.
    $config->set('message', 'Hi')->save();

    // Now will print 'Hi'.
    print $config->get('message');

  }

}
