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

$timezonelist = array(
    "India Standard Time" => "India Standard Time",
    "Dateline Standard Time" => "Dateline Standard Time",
    "UTC-11" => "UTC-11",
    "Aleutian Standard Time" => "Aleutian Standard Time",
    "Hawaiian Standard Time" => "Hawaiian Standard Time",
    "Marquesas Standard Time" => "Marquesas Standard Time",
    "Alaskan Standard Time" => "Alaskan Standard Time",
    "UTC-09" => "UTC-09",
    "Pacific Standard Time (Mexico)" => "Pacific Standard Time (Mexico)",
    "UTC-08" => "UTC-08",
    "Pacific Standard Time" => "Pacific Standard Time",
    "US Mountain Standard Time" => "US Mountain Standard Time",
    "Mountain Standard Time (Mexico)" => "Mountain Standard Time (Mexico)",
    "Mountain Standard Time" => "Mountain Standard Time",
    "Central America Standard Time" => "Central America Standard Time",
    "Central Standard Time" => "Central Standard Time",
    "Easter Island Standard Time" => "Easter Island Standard Time",
    "Central Standard Time (Mexico)" => "Central Standard Time (Mexico)",
    "Canada Central Standard Time" => "Canada Central Standard Time",
    "SA Pacific Standard Time" => "SA Pacific Standard Time",
    "Eastern Standard Time (Mexico)" => "Eastern Standard Time (Mexico)",
    "Eastern Standard Time" => "Eastern Standard Time",
    "Haiti Standard Time" => "Haiti Standard Time",
    "Cuba Standard Time" => "Cuba Standard Time",
    "US Eastern Standard Time" => "US Eastern Standard Time",
    "Paraguay Standard Time" => "Paraguay Standard Time",
    "Atlantic Standard Time" => "Atlantic Standard Time",
    "Venezuela Standard Time" => "Venezuela Standard Time",
    "Central Brazilian Standard Time" => "Central Brazilian Standard Time",
    "SA Western Standard Time" => "SA Western Standard Time",
    "Pacific SA Standard Time" => "Pacific SA Standard Time",
    "Turks And Caicos Standard Time" => "Turks And Caicos Standard Time",
    "Newfoundland Standard Time" => "Newfoundland Standard Time",
    "Tocantins Standard Time" => "Tocantins Standard Time",
    "E. South America Standard Time" => "E. South America Standard Time",
    "SA Eastern Standard Time" => "SA Eastern Standard Time",
    "Argentina Standard Time" => "Argentina Standard Time",
    "Greenland Standard Time" => "Greenland Standard Time",
    "Montevideo Standard Time" => "Montevideo Standard Time",
    "Magallanes Standard Time" => "Magallanes Standard Time",
    "Saint Pierre Standard Time" => "Saint Pierre Standard Time",
    "Bahia Standard Time" => "Bahia Standard Time",
    "UTC-02" => "UTC-02",
    "Mid-Atlantic Standard Time" => "Mid-Atlantic Standard Time",
    "Azores Standard Time" => "Azores Standard Time",
    "Cape Verde Standard Time" => "Cape Verde Standard Time",
    "Morocco Standard Time" => "Morocco Standard Time",
    "GMT Standard Time" => "GMT Standard Time",
    "Greenwich Standard Time" => "Greenwich Standard Time",
    "W. Europe Standard Time" => "W. Europe Standard Time",
    "Central Europe Standard Time" => "Central Europe Standard Time",
    "Romance Standard Time" => "Romance Standard Time",
    "Central European Standard Time" => "Central European Standard Time",
    "W. Central Africa Standard Time" => "W. Central Africa Standard Time",
    "Namibia Standard Time" => "Namibia Standard Time",
    "Jordan Standard Time" => "Jordan Standard Time",
    "GTB Standard Time" => "GTB Standard Time",
    "Middle East Standard Time" => "Middle East Standard Time",
    "Egypt Standard Time" => "Egypt Standard Time",
    "E. Europe Standard Time" => "E. Europe Standard Time",
    "Syria Standard Time" => "Syria Standard Time",
    "West Bank Standard Time" => "West Bank Standard Time",
    "South Africa Standard Time" => "South Africa Standard Time",
    "FLE Standard Time" => "FLE Standard Time",
    "Israel Standard Time" => "Israel Standard Time",
    "Kaliningrad Standard Time" => "Kaliningrad Standard Time",
    "Libya Standard Time" => "Libya Standard Time",
    "Arabic Standard Time" => "Arabic Standard Time",
    "Turkey Standard Time" => "Turkey Standard Time",
    "Arab Standard Time" => "Arab Standard Time",
    "Belarus Standard Time" => "Belarus Standard Time",
    "Russian Standard Time" => "Russian Standard Time",
    "E. Africa Standard Time" => "E. Africa Standard Time",
    "Iran Standard Time" => "Iran Standard Time",
    "Arabian Standard Time" => "Arabian Standard Time",
    "Astrakhan Standard Time" => "Astrakhan Standard Time",
    "Azerbaijan Standard Time" => "Azerbaijan Standard Time",
    "Russia Time Zone 3" => "Russia Time Zone 3",
    "Mauritius Standard Time" => "Mauritius Standard Time",
    "Saratov Standard Time" => "Saratov Standard Time",
    "Georgian Standard Time" => "Georgian Standard Time",
    "Caucasus Standard Time" => "Caucasus Standard Time",
    "Afghanistan Standard Time" => "Afghanistan Standard Time",
    "West Asia Standard Time" => "West Asia Standard Time",
    "Ekaterinburg Standard Time" => "Ekaterinburg Standard Time",
    "Pakistan Standard Time" => "Pakistan Standard Time",
    "India Standard Time" => "India Standard Time",
    "Sri Lanka Standard Time" => "Sri Lanka Standard Time",
    "Nepal Standard Time" => "Nepal Standard Time",
    "Central Asia Standard Time" => "Central Asia Standard Time",
    "Bangladesh Standard Time" => "Bangladesh Standard Time",
    "Omsk Standard Time" => "Omsk Standard Time",
    "Myanmar Standard Time" => "Myanmar Standard Time",
    "SE Asia Standard Time" => "SE Asia Standard Time",
    "China Standard Time" => "China Standard Time",
    "North Asia Standard Time" => "North Asia Standard Time",
    "N. Central Asia Standard Time" => "N. Central Asia Standard Time",
    "Tomsk Standard Time" => "Tomsk Standard Time",
    "North Asia East Standard Time" => "North Asia East Standard Time",
    "Singapore Standard Time" => "Singapore Standard Time",
    "W. Australia Standard Time" => "W. Australia Standard Time",
    "Taipei Standard Time" => "Taipei Standard Time",
    "Ulaanbaatar Standard Time" => "Ulaanbaatar Standard Time",
    "North Korea Standard Time" => "North Korea Standard Time",
    "Aus Central W. Standard Time" => "Aus Central W. Standard Time",
    "Transbaikal Standard Time" => "Transbaikal Standard Time",
    "Tokyo Standard Time" => "Tokyo Standard Time",
    "Korea Standard Time" => "Korea Standard Time",
    "Yakutsk Standard Time" => "Yakutsk Standard Time",
    "Cen. Australia Standard Time" => "Cen. Australia Standard Time",
    "AUS Central Standard Time" => "AUS Central Standard Time",
    "E. Australia Standard Time" => "E. Australia Standard Time",
    "AUS Eastern Standard Time" => "AUS Eastern Standard Time",
    "West Pacific Standard Time" => "West Pacific Standard Time",
    "Tasmania Standard Time" => "Tasmania Standard Time",
    "Vladivostok Standard Time" => "Vladivostok Standard Time",
    "Lord Howe Standard Time" => "Lord Howe Standard Time",
    "Bougainville Standard Time" => "Bougainville Standard Time",
    "Russia Time Zone 10" => "Russia Time Zone 10",
    "Magadan Standard Time" => "Magadan Standard Time",
    "Norfolk Standard Time" => "Norfolk Standard Time",
    "Sakhalin Standard Time" => "Sakhalin Standard Time",
    "Central Pacific Standard Time" => "Central Pacific Standard Time",
    "Russia Time Zone 11" => "Russia Time Zone 11",
    "New Zealand Standard Time" => "New Zealand Standard Time",
    "UTC+12" => "UTC+12",
    "Fiji Standard Time" => "Fiji Standard Time",
    "Kamchatka Standard Time" => "Kamchatka Standard Time",
    "Chatham Islands Standard Time" => "Chatham Islands Standard Time",
    "UTC+13" => "UTC+13",
    "Tonga Standard Time" => "Tonga Standard Time",
    "Samoa Standard Time" => "Samoa Standard Time",
    "Line Islands Standard Time" => "Line Islands Standard Time",
    "AUS Western Standard Time" => "AUS Western Standard Time",
    "Eastern European Time" => "Eastern European Time",
    "Sao Tome Standard Time" => "Sao Tome Standard Time",
    "Hong Kong Time" => "Hong Kong Time"
);

if ( $hassiteconfig ) {

    $settings = new admin_settingpage('local_empexport', get_string('empexportapisettingspage', 'local_empexport'));
    $ADMIN->add('localplugins', $settings);

    $settings->add(new admin_setting_configtext('local_empexport/eklavvyacandidateapiurlsetting',
                   'Candidate API URL', '', ' ', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('local_empexport/eklavvyaauthenticationkey',
    'Authentication Key', '', ' ', PARAM_TEXT));

    $settings->add(new admin_setting_configselect('local_empexport/eklavvyatimezone', 'Time Zone', '', '', $timezonelist));

}


