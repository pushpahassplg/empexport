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


require_once('../../config.php');
global $USER, $DB, $CFG;

$PAGE->set_url('/local/empexport/index.php');
$PAGE->set_context(context_system::instance());

require_login();

$strpagetitle = get_string('empexport', 'local_empexport');
$strpageheading = get_string('empexport', 'local_empexport');


$PAGE->set_title($strpagetitle);
$PAGE->set_heading($strpageheading);

$logourl = new moodle_url('/local/empexport/pix/eklavvyalogo.png');

$navbardata = (object)[
    'menulogo' => $logourl,
    'isadmin' => is_siteadmin(),
    'pluginurl' => new moodle_url('/local/empexport/'),
    'navmenuhomelinktitle' => get_string('navmenuhomelinktitle', 'local_empexport'),
    'navmenuexamslinktitle' => get_string('navmenuexamslinktitle', 'local_empexport'),
    'navmenuproctorslinktitle' => get_string('navmenuproctorslinktitle', 'local_empexport'),
    'navmenuexaminerslinktitle' => get_string('navmenuexaminerslinktitle', 'local_empexport'),
    'navmenuresultlinktitle' => get_string('navmenuresultlinktitle', 'local_empexport'),
    'navmenuuserlogslinktitle' => get_string('navmenuuserlogslinktitle', 'local_empexport'),

];


echo $OUTPUT->header();

echo $OUTPUT->render_from_template('local_empexport/admin/navbar', $navbardata);
echo $OUTPUT->render_from_template('local_empexport/admin/home', $navbardata);

echo $OUTPUT->footer();
