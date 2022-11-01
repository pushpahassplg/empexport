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
 * Version information
 *
 * @package    local_empexport
 * @copyright  2022 Splashgain Technology Solutions Pvt. Ltd., India.
 * @license    http://www.eklavvya.com/terms-of-use/
 */

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/formslib.php");

class edit extends moodleform {




    public function definition() {
        global $CFG;

        $formtitle = get_string('editproctorformtitle', 'local_empexport');

        $mform = $this->_form;

        $this->isedit = 1;

        $mform->addElement('hidden', 'proctoremailid');

        $mform->addElement('html', '<h4>'.$formtitle.'</H4>');

        $mform->addElement('text', 'firstname', get_string('firstnamefieldtitle', 'local_empexport'));
        $mform->setType('firstname', PARAM_NOTAGS);
        $mform->setDefault('firstname', '');
        $mform->addRule('firstname', 'Required', 'required', null, 'client');

        $mform->addElement('text', 'lastname', get_string('lastnamefieldtitle', 'local_empexport'));
        $mform->setType('lastname', PARAM_NOTAGS);
        $mform->setDefault('lastname', '');
        $mform->addRule('lastname', 'Required', 'required', null, 'client');

        $mform->addElement('text', 'mobileno', get_string('mobilenofieldtitle', 'local_empexport'));
        $mform->setType('mobileno', PARAM_NOTAGS);
        $mform->setDefault('mobileno', '');
        $mform->addRule('mobileno', 'Required', 'required', null, 'client');
        $mform->addRule('mobileno', 'Invalid Mobile Number', 'regex', '/^[0-9]{10,14}+$/', 'client');

        $mform->addElement('text', 'email', get_string('emailidfieldtitle', 'local_empexport'));
        $mform->setType('email', PARAM_NOTAGS);
        $mform->setDefault('email', '');
        $mform->addRule('email', 'Email', 'email', null, 'client');
        $mform->addRule('email', 'Email Required', 'required', null, 'client');

        $mform->addElement('password', 'password', get_string('passwordfieldtitle', 'local_empexport'));
        $mform->setType('password', PARAM_NOTAGS);
        $mform->setDefault('password', '');
        $mform->addRule('password', 'Password must be 8-15 characters long with at least one numeric,
        one upper case, one lower case and one special character.', 'regex',
        '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,15}$/', 'client');

        $mform->addElement('password', 'confpassword', get_string('confpasswordfieldtitle', 'local_empexport'));
        $mform->setType('confpassword', PARAM_NOTAGS);
        $mform->setDefault('confpassword', '');

        $buttonarray = array();
        $buttonarray[] = $mform->createElement('submit', 'submitbutton', get_string('savechanges'));
        $buttonarray[] = $mform->createElement('cancel');
        $mform->addGroup($buttonarray, 'buttonar', '', ' ', false);

    }


    public function validation($data, $files) {

        return array();
    }
}
