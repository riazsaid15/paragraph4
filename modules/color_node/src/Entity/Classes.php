<?php

namespace Drupal\color_node\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Classes entity.
 *
 * @ConfigEntityType(
 *   id = "classes",
 *   label = @Translation("Classes"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\color_node\ClassesListBuilder",
 *     "form" = {
 *       "add" = "Drupal\color_node\Form\ClassesForm",
 *       "edit" = "Drupal\color_node\Form\ClassesForm",
 *       "delete" = "Drupal\color_node\Form\ClassesDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\color_node\ClassesHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "classes",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/classes/{classes}",
 *     "add-form" = "/admin/structure/classes/add",
 *     "edit-form" = "/admin/structure/classes/{classes}/edit",
 *     "delete-form" = "/admin/structure/classes/{classes}/delete",
 *     "collection" = "/admin/structure/classes"
 *   }
 * )
 */
class Classes extends ConfigEntityBase implements ClassesInterface {

  /**
   * The Classes ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Classes label.
   *
   * @var string
   */
  protected $label;

}
