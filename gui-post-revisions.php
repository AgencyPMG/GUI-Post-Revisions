<?php
/**
 * Plugin Name: GUI Post Revisions
 * Plugin URI: https://github.com/AgencyPMG/GUI-Post-Revisions
 * Description: Adds a field in the WP Admin area to control the number of revisions kept.
 * Version: 1.0
 * Text Domain: pmg-gui-revisions
 * Author: Christopher Davis
 * Author URI: http://pmg.co/people/chris
 * License: Apache-2.0
 *
 * Copyright 2014 PMG <http://pmg.co>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package     PMG\GuiPostRevisions
 * @category    WordPress
 * @copyright   2013 PMG <http://pmg.co>
 * @license     http://opensource.org/licenses/Apache-2.0 Apache-2.0
 */

!defined('ABSPATH') && exit;

define('PMG_GUIR_PATH', dirname(__FILE__));
define('PMG_GUIR_SETTING', 'pmg_gui_revisions_val');

require_once PMG_GUIR_PATH . '/inc/core.php';
add_action('wp_revisions_to_keep', 'pmg_guir_revision_callback');

if (is_admin()) {
    require_once PMG_GUIR_PATH . '/inc/admin.php';
    add_action('admin_init', 'pmg_guir_register_settings', 100);
}
