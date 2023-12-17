<?php

defined('_JEXEC') or die('Direct Access to this location is not allowed.');

JHtml::_('behavior.tabstate');

// Require the base controller and the defines
require_once(JPATH_COMPONENT.'/controller.php');

// Access check
if(!JFactory::getUser()->authorise('core.manage', _JOOM_OPTION))
{
  return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Require specific controller if requested
if($controller = JRequest::getCmd('controller', 'control'))
{
  $format = JRequest::getCmd('format', 'html');
  $path = JPATH_COMPONENT.'/controllers/'.$controller.(($format != 'html') ?  '.'.$format : '').'.php';
  if(file_exists($path))
  {
    require_once $path;
  }
  else
  {
    $controller = '';
  }
}

// Create the controller
$classname  = 'BlankController'.$controller;
$controller = new $classname();

// Perform the request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();