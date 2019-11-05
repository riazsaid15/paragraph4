<?php

namespace Drupal\card\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Cardwidth entity.
 *
 * @ConfigEntityType(
 *   id = "cardwidth",
 *   label = @Translation("Cardwidth"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\card\cardwidthListBuilder",
 *     "form" = {
 *       "add" = "Drupal\card\Form\cardwidthForm",
 *       "edit" = "Drupal\card\Form\cardwidthForm",
 *       "delete" = "Drupal\card\Form\cardwidthDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\card\cardwidthHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "cardwidth",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/cardwidth/{cardwidth}",
 *     "add-form" = "/admin/structure/cardwidth/add",
 *     "edit-form" = "/admin/structure/cardwidth/{cardwidth}/edit",
 *     "delete-form" = "/admin/structure/cardwidth/{cardwidth}/delete",
 *     "collection" = "/admin/structure/cardwidth"
 *   }
 * )
 */
class cardwidth extends ConfigEntityBase implements cardwidthInterface {

  /**
   * The Cardwidth ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Cardwidth label.
   *
   * @var string
   */
  protected $label;

}
