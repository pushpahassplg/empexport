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



 // API Helper  to curl operations.
class apihelper {

    public function getapisettings() {
        $candidateurl = get_config('local_empexport', 'eklavvyacandidateapiurlsetting');
        $apikey = get_config('local_empexport', 'eklavvyaauthenticationkey');
        $timezone = get_config('local_empexport', 'eklavvyatimezone');
        $s = $candidateurl . '<br>' . $apikey . '<br>' . $timezone  . ' <br> From FUNC';
        return $s;
    }

    public function get_api_result($apiurl, $datatosend) {

        global $USER, $DB, $CFG;

        $candidateurl = get_config('local_empexport', 'eklavvyacandidateapiurlsetting');
        $apikey = get_config('local_empexport', 'eklavvyaauthenticationkey');
        $timezone = get_config('local_empexport', 'eklavvyatimezone');

        $posturl = $candidateurl.$apiurl;

        $postdata1 = json_encode($datatosend);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $posturl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);

        $headers  = [
            'authenticationkey: ' . $apikey,
            'Content-Type: application/json'
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $serveroutput = curl_exec($ch);

        $response = json_decode($serveroutput, true);

        curl_close($ch);

        return $response;
    }



    public function get_url_result($urltopost, $datatosend) {

        global $USER, $DB, $CFG;

        $candidateurl = get_config('local_empexport', 'eklavvyacandidateapiurlsetting');
        $apikey = get_config('local_empexport', 'eklavvyaauthenticationkey');
        $timezone = get_config('local_empexport', 'eklavvyatimezone');

        $posturl = $urltopost;

        $postdata1 = json_encode($datatosend);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $posturl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);

        $headers  = [
            'authenticationkey: ' . $apikey,
            'Content-Type: application/json'
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $serveroutput = curl_exec($ch);

        $response = json_decode($serveroutput, true);

        curl_close($ch);

        return $response;
    }

}
