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

/**
 * Table tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['progressbar'] = '{title_legend},name,type;{config_legend},cp_progress,cp_goal,cp_formatted;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests';
$GLOBALS['TL_DCA']['tl_module']['fields']['cp_progress'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cp_progress'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['cp_goal'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cp_goal'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['cp_formatted'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cp_formatted'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

