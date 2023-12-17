<?php

defined('_JEXEC') or die('Direct Access to this location is not allowed.');

jimport( 'joomla.application.component.model');

/**
 * Blank Parent Model
 *
 * @package Blank
 * @since   1.5.5
 */
class BlankModel extends JModelLegacy
{
  /**
   * Constructor
   *
   * @access  protected
   * @return  void
   * @since   1.5.5
   */
  function __construct($config = array())
  {
    parent::__construct($config);
  }
}