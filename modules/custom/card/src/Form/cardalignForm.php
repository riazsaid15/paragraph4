<?php

namespace Drupal\card\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class cardalignForm.
 */
class cardalignForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $cardalign = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $cardalign->label(),
      '#description' => $this->t("Label for the Cardalign."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $cardalign->id(),
      '#machine_name' => [
        'exists' => '\Drupal\card\Entity\cardalign::load',
      ],
      '#disabled' => !$cardalign->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $cardalign = $this->entity;
    $status = $cardalign->save();

    switch ($status) {
      case SAVED_NEW:
        $this->messenger()->addMessage($this->t('Created the %label Cardalign.', [
          '%label' => $cardalign->label(),
        ]));
        break;

      default:
        $this->messenger()->addMessage($this->t('Saved the %label Cardalign.', [
          '%label' => $cardalign->label(),
        ]));
    }
    $form_state->setRedirectUrl($cardalign->toUrl('collection'));
  }

}
