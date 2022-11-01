<?php
// This file is part of Moodle - http://moodle.org/local/empexport/
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
 * Version information
 *
 * @package    local_empexport
 * @copyright  2022 Splashgain Technology Solutions Pvt. Ltd., India.
 * @license    http://www.eklavvya.com/terms-of-use/
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_empexport';    // Full name of the plugin (used for diagnostics).
$plugin->version   = 2019031101;           // The current module version (Date: YYYYMMDDXX).
$plugin->Requires  = 2016052300;           // Requires this Moodle version.
$plugin->release   = '1.0.0';              // Human-friendly version name.
$plugin->maturity  = MATURITY_STABLE;      // This versions's maturity level.
