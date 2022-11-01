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

require_once($CFG->dirroot . "/local/empexport/classes/admin/proctor/edit.php");


// Get Parameters.
$proctoremailid = optional_param('proctoremailid', null, PARAM_TEXT);

// Page Content.
$mform = new edit();

if ($mform->is_cancelled()) {
    // Go Back to home page.
    redirect($CFG->wwwroot . '/local/empexport/admin/proctor/index.php');
} else if ($sfrom = $mform->get_data()) {
    // Saveform block.

    if ($proctoremailid != null) {
        $formfieldarray = array("FirstName" => $sfrom->firstname, "LastName" => $sfrom->lastname,
        "EmailID" => $sfrom->proctoremailid, "MobileNo" => $sfrom->mobileno, "Password" => $sfrom->password, "IsEdit" => 1);
        $datatosend = array("CreateProctorInputObj" => $formfieldarray);
        $posturl = $apiurl . '/SplashService.svc/CreateProctorWebAPI';
        $response = $ahc->get_api_result($posturl, $datatosend);
        $rv['isok'] = $response['CreateProctorWebAPIResult']['objStatusCodes'];
        $rv['msg'] = $response['CreateProctorWebAPIResult']['Message'];

        if ($rv['isok']) {
            redirect($CFG->wwwroot . '/local/empexport/admin/proctor/index.php', $rv['msg']);
        } else {
            \core\notification::add($rv['msg'], \core\notification::WARNING);
        }


    } else {
        $formfieldarray = array("FirstName" => $sfrom->firstname, "LastName" => $sfrom->lastname,
        "EmailID" => $sfrom->email, "MobileNo" => $sfrom->mobileno, "Password" => $sfrom->password, "IsEdit" => 0);
        $datatosend = array("CreateProctorInputObj" => $formfieldarray);
        $posturl = $apiurl . '/SplashService.svc/CreateProctorWebAPI';
        $response = $ahc->get_api_result($posturl, $datatosend);
        $rv['isok'] = $response['CreateProctorWebAPIResult']['objStatusCodes'];
        $rv['msg'] = $response['CreateProctorWebAPIResult']['Message'];

        if ($rv['isok']) {
            redirect($CFG->wwwroot . '/local/empexport/admin/proctor/index.php', $rv['msg']);
        }


    }

    // End of Saveform block.
} else {
    echo "ok1";
    $mform->set_data($toform);
}

if ($proctoremailid != null) {

    // Load data from url.
    $datatosend = array("obj" => array("EmailID" => $proctoremailid));
    $posturl = $apiurl . '/SplashService.svc/GetProctorDetailsByEmailIDWebAPI';
    $responsearray = $ahc->get_api_result($posturl, $datatosend);
    $procdetailsresponse = $responsearray['GetProctorDetailsByEmailIDWebAPIResult'];

    $formdata = new stdClass();

    $formdata->proctoremailid = $proctoremailid;

    $formdata->firstname = $procdetailsresponse['FirstName'];

    $formdata->lastname = $procdetailsresponse['LastName'];

    $formdata->mobileno = $procdetailsresponse['MobileNo'];

    $formdata->email = $procdetailsresponse['ProctorEmailID'];

    $formdata->password = $procdetailsresponse['Password'];

    $formdata->confpassword = $procdetailsresponse['Password'];

    $mform->set_data($formdata);

} else {
    $mform->isedit = 0;
    $formdata = new stdClass();

    $formdata->$proctoremailid = null;
    $mform->set_data($formdata);

}

echo $OUTPUT->header();

echo $OUTPUT->render_from_template('local_empexport/navbar', $navbardata);

$mform->display();

echo $OUTPUT->footer();
