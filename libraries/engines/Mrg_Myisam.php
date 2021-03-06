<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * The MERGE storage engine
 *
 * @package PhpMyAdmin-Engines
 */
namespace PMA\libraries\engines;

if (!defined('PHPMYADMIN')) {
    exit;
}

/**
 * The MERGE storage engine
 *
 * @package PhpMyAdmin-Engines
 */
class Mrg_Myisam extends Merge
{
    /**
     * returns string with filename for the MySQL helppage
     * about this storage engine
     *
     * @return string  mysql helppage filename
     */
    public function getMysqlHelpPage()
    {
        return 'merge-storage-engine';
    }
}

