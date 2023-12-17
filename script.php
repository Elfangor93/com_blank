<?php
defined('_JEXEC') or die();

/**
 * Script file of Blank component.
 * 
 * @subpackage  com_blank
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
class com_blankInstallerScript extends InstallerScript
{
    /**
     * Runs just before any installation action is performed on the component.
     * Verifications and pre-requisites should run in this function.
     *
     * @param  string     $type    Type of PreFlight action. Possible values are install, update, discover_install
     * @param  \stdClass  $parent  Parent object calling object.
     *
     * @return void
     */
    public function preflight($type, $parent) 
    {
        $result = parent::preflight($type, $parent);

        if (!$result)
        {
          return $result;
        }

        // Prepare for migration
        if($type == 'install' || ($type == 'update'))
        {
          // remove old files and folders
          foreach($this->detectOldFolders() as $folder)
          {
            if(Folder::exists($folder))
            {
              Folder::delete($folder);
            }
          }
          foreach($this->detectOldFiles() as $file)
          {
            if(is_file($file))
            {
              File::delete($file);
            }
          }
        }

        echo '<p>' . Text::_('Preflight of com_blank. Usage for testing purposes...') . '</p>';
    }

  /**
	 * Detect old com_blank folders
	 *
	 * @return  array|bool   List of folder paths or false if no folders detected
	 */
	private function detectOldFolders()
	{
    $folders = array(
      JPATH_ROOT.'/components/com_blank',
      JPATH_ROOT.'/media/blank',
      JPATH_ROOT.'/administrator/components/com_blank',
      JPATH_ROOT.'/layouts/blank'
    );

    return $folders;
  }

  /**
	 * Detect old com_blank files
	 *
	 * @return  array|bool   List of file paths or false if no folders detected
	 */
	private function detectOldFiles()
	{
    $files = array();

    $folders = array(
      '/administrator/language',
      '/administrator/logs',
      '/language',      
    );

    // Search folder for files containing "com_blank"
    foreach($folders as $folder)
    {
      $files = array_merge($files, glob(JPATH_ROOT.$folder.'/*com*[b,B]lank*'));
      $files = array_merge($files, glob(JPATH_ROOT.$folder.'/*/*com*[b,B]lank*'));
      $files = array_merge($files, glob(JPATH_ROOT.$folder.'/*/*/*com*[b,B]lank*'));
    }

    // Cache file of the newsfeed for the update checker
    $files[] = JPATH_ADMINISTRATOR.'/cache/'.md5('http://www.example.org/components/com_newversion/rss/extensions2.rss').'.spc';
    $files[] = JPATH_ADMINISTRATOR.'/cache/'.md5('http://www.en.example.org/components/com_newversion/rss/extensions2.rss').'.spc';
    $files[] = JPATH_ADMINISTRATOR.'/cache/'.md5('http://www.example.org/components/com_newversion/rss/extensions3.rss').'.spc';
    $files[] = JPATH_ADMINISTRATOR.'/cache/'.md5('http://www.en.example.org/components/com_newversion/rss/extensions3.rss').'.spc';
    
    return $files;
  }
}