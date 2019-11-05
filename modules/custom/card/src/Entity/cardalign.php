<?php

namespace Drupal\card\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Cardalign entity.
 *
 * @ConfigEntityType(
 *   id = "cardalign",
 *   label = @Translation("Cardalign"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\card\cardalignListBuilder",
 *     "form" = {
 *       "add" = "Drupal\card\Form\cardalignForm",
 *       "edit" = "Drupal\card\Form\cardalignForm",
 *       "delete" = "Drupal\card\Form\cardalignDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\card\cardalignHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "cardalign",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/cardalign/{cardalign}",
 *     "add-form" = "/admin/structure/cardalign/add",
 *     "edit-form" = "/admin/structure/cardalign/{cardalign}/edit",
 *     "delete-form" = "/admin/structure/cardalign/{cardalign}/delete",
 *     "collection" = "/admin/structure/cardalign"
 *   }
 * )
 */
class cardalign extends ConfigEntityBase implements cardalignInterface {

  /**
   * The Cardalign ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Cardalign label.
   *
   * @var string
   */
  protected $label;

}
