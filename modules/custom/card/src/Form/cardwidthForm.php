<?php

namespace Drupal\card\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class cardwidthForm.
 */
class cardwidthForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $cardwidth = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $cardwidth->label(),
      '#description' => $this->t("Label for the Cardwidth."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $cardwidth->id(),
      '#machine_name' => [
        'exists' => '\Drupal\card\Entity\cardwidth::load',
      ],
      '#disabled' => !$cardwidth->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $cardwidth = $this->entity;
    $status = $cardwidth->save();

    switch ($status) {
      case SAVED_NEW:
        $this->messenger()->addMessage($this->t('Created the %label Cardwidth.', [
          '%label' => $cardwidth->label(),
        ]));
        break;

      default:
        $this->messenger()->addMessage($this->t('Saved the %label Cardwidth.', [
          '%label' => $cardwidth->label(),
        ]));
    }
    $form_state->setRedirectUrl($cardwidth->toUrl('collection'));
  }

}
