<?php
// This file is part of Moodle - http://moodle.org/local/empexport/admin/proctor
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


require_once('../../../../config.php');

global $USER, $DB, $CFG;

require_once($CFG->dirroot . "/local/empexport/classes/apihelper.php");

$PAGE->set_url('/local/empexport/admin/index.php');
$PAGE->set_context(context_system::instance());

require_login();


// Prepare navigation data.
$navbardata = (object)[
    'menulogo' => new moodle_url('/local/empexport/pix/eklavvyalogo.png'),
    'isadmin' => is_siteadmin(),
    'pluginurl' => new moodle_url('/local/empexport/'),
    'navmenuhomelinktitle' => get_string('navmenuhomelinktitle', 'local_empexport'),
    'navmenuexamslinktitle' => get_string('navmenuexamslinktitle', 'local_empexport'),
    'navmenuproctorslinktitle' => get_string('navmenuproctorslinktitle', 'local_empexport'),
    'navmenuexaminerslinktitle' => get_string('navmenuexaminerslinktitle', 'local_empexport'),
    'navmenuresultlinktitle' => get_string('navmenuresultlinktitle', 'local_empexport'),
    'navmenuuserlogslinktitle' => get_string('navmenuuserlogslinktitle', 'local_empexport'),
];

// Page headings.
$strpagetitle = get_string('empexport', 'local_empexport');
$strpageheading = get_string('empexport', 'local_empexport');

$PAGE->set_title($strpagetitle);
$PAGE->set_heading($strpageheading);

$ahc = new apihelper();

// Get Parameters.
$pageno = optional_param('pageno', 1, PARAM_INT);
$pagesize = optional_param('pagesize', 5, PARAM_INT);


// Get List of Proctors.
$datatosend = array("obj" => array("Offset" => $pageno, "PageSize" => $pagesize));
$posturl = '/SplashService.svc/GetProctorsListWebAPI';

$proctorlist = $ahc->get_api_result($posturl, $datatosend);

$apiresultarray = $proctorlist["GetProctorsListWebAPIResult"];
$proctorlisttableobject = $apiresultarray["ProctorsListObj"];
$mxp = $apiresultarray["TotalPages"];

$pageindexarray = array();
$i = 1;
while ($i <= $mxp) {
    if ($i == $pageno) {
        $isselected = 1;
    } else {
        $isselected = false;
    }
    $cui = array(
        'pagenoi' => $i,
        'isselected' => $isselected
    );
    array_push($pageindexarray, $cui);
    $i++;
}

$proctorhometabletitle = get_string('proctorhometabletitle', 'local_empexport');
$newproctorlink = get_string('newproctorlink', 'local_empexport');
$proctornamecoltitle = get_string('proctornamecoltitle', 'local_empexport');
$proctoremailcoltitle = get_string('proctoremailcoltitle', 'local_empexport');
$assignedexamcountcoltitle = get_string('assignedexamcountcoltitle', 'local_empexport');
$statuscoltitle = get_string('statuscoltitle', 'local_empexport');
$actionscoltitle = get_string('actionscoltitle', 'local_empexport');
$titleactive = get_string('titleactive', 'local_empexport');
$titleinactive = get_string('titleinactive', 'local_empexport');




// Prepare Template Parameters.
$templatedata = (object)[
    'proctorlist' => $proctorlisttableobject,
    'proctorhometabletitle' => $proctorhometabletitle,
    'newproctorlink' => $newproctorlink,
    'proctornamecoltitle' => $proctornamecoltitle,
    'proctoremailcoltitle' => $proctoremailcoltitle,
    'assignedexamcountcoltitle' => $assignedexamcountcoltitle,
    'statuscoltitle' => $statuscoltitle,
    'actionscoltitle' => $actionscoltitle,
    'titleactive' => $titleactive,
    'titleinactive' => $titleinactive,

    'pageindexarray' => $pageindexarray,
    'pageno' => $pageno,
    'pagesize' => $pagesize,
    'pluginurl' => new moodle_url('/local/empexport/'),
];


echo $OUTPUT->header();

echo $OUTPUT->render_from_template('local_empexport/navbar', $navbardata);

echo $OUTPUT->render_from_template('local_empexport/admin/proctor/home', $templatedata);

echo $OUTPUT->footer();
