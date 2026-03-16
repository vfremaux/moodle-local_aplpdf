<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   local_vflibs
 * @category  local
 * @author    Valery Fremaux (valery.fremaux@gmail.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    // Needs this condition or there is error on login page.
    $settings = new admin_settingpage('local_aplpdf', get_string('pluginname', 'local_aplpdf'));
    $ADMIN->add('localplugins', $settings);

    $key = 'local_aplpdf/enablelocalpdf';
    $label = get_string('configenablelocalpdf', 'local_aplpdf');
    $desc = get_string('configenablelocalpdf_desc', 'local_aplpdf');
    $settings->add(new admin_setting_configcheckbox($key, $label, $desc, 0));
}