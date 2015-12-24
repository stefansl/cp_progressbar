<?php
/* Coded with Slayer at max volume */

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   cp_progressbar
 * @author    Stefan Schulz-Lauterbach
 * @license   GNU/LGPL
 * @copyright CLICKPRESS Internetagentur 2015
 */

namespace CLICKPRESS;


/**
 * Front end module "ModuleProgressbar".
 */
class ModuleProgressbar extends \Module
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_progressbar';


    /**
     * Display a login form
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            /** @var \BackendTemplate|object $objTemplate */
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### PROGRESSBAR ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        return parent::generate();
    }


    /**
     * Generate the module
     */
    protected function compile()
    {
        if (!isset($GLOBALS['TL_CSS']['progressbar'])) {
            $GLOBALS['TL_CSS']['progressbar'] = 'system/modules/cp_progressbar/assets/cp_progressbar.min.css|static';
            $GLOBALS['TL_JQUERY'][] = '<script src="system/modules/cp_progressbar/assets/cp_progressbar.min.js"></script>';
        }

        $this->Template->cp_formatted =  sprintf($this->cp_formatted, $this->cp_progress);
    }
}
