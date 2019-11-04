<?php

namespace Drupal\color_node\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ClassesForm.
 */
class ClassesForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $classes = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $classes->label(),
      '#description' => $this->t("Label for the Classes."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $classes->id(),
      '#machine_name' => [
        'exists' => '\Drupal\color_node\Entity\Classes::load',
      ],
      '#disabled' => !$classes->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $classes = $this->entity;
    $status = $classes->save();

    switch ($status) {
      case SAVED_NEW:
        $this->messenger()->addMessage($this->t('Created the %label Classes.', [
          '%label' => $classes->label(),
        ]));
        break;

      default:
        $this->messenger()->addMessage($this->t('Saved the %label Classes.', [
          '%label' => $classes->label(),
        ]));
    }
    $form_state->setRedirectUrl($classes->toUrl('collection'));
  }

}
