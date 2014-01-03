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

function pmg_guir_register_settings()
{
    register_setting(
        'writing',
        PMG_GUIR_SETTING,
        'pmg_guir_settings_sanitize'
    );

    add_settings_field(
        PMG_GUIR_SETTING,
        __('Post Revision Count', 'pmg-gui-revisions'),
        'pmg_guir_field_callback',
        'writing',
        'default',
        array('label_for' => PMG_GUIR_SETTING)
    );
}

function pmg_guir_field_callback()
{
    printf(
        '<input name="%1$s" id="%1$s" type="number" class="small-text" step="%2$s" min="-1" max="%3$s" value="%4$s" />',
        PMG_GUIR_SETTING,
        apply_filters('pmg_guir_input_step', 1),
        apply_filters('pmg_guir_input_max', 10),
        esc_attr(pmg_guir_get_setting())
    );
}

function pmg_guir_settings_sanitize($val)
{
    $val = $val !== '' ? intval($val) : null;
    return null !== $val && $val >= -1 ? $val : '__null';
}
