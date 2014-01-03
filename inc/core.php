<?php
/**
 * This file is part of GUI Post Revisions
 *
 * Copyright (c) 2014 PMG <http://pmg.co>
 *
 * For full copyright and license information please see the LICENSE
 * file that was distributed with this source code.
 *
 * @package     PMG\GuiPostRevisions
 * @category    WordPress
 * @copyright   2014 PMG <http://pmg.co>
 * @license     http://opensource.org/licenses/Apache-2.0 Apache-2.0
 */

function pmg_guir_get_setting()
{
    $val = get_option(PMG_GUIR_SETTING);
    return '__null' === $val ? null : $val;
}

function pmg_guir_revision_callback($val)
{
    if (null !== $_val =pmg_guir_get_setting()) {
        $val = $_val;
    }

    return $val;
}
