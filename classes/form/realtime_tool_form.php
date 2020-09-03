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

namespace tool_realtime\form;

/**
 * Class realtime_tool_form
 *
 * @package     tool_realtime
 * @copyright  2020 Daniel Conquit, Matthew Gray, Nicholas Parker, Dan Thistlewaite
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot . '/lib/formslib.php');


/**
 * Class realtime_tool_form
 *
 * @package     realtimeplugin_phppoll
 * @copyright  2020 Daniel Conquit, Matthew Gray, Nicholas Parker, Dan Thistlewaite
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class realtime_tool_form extends \moodleform {
    /**
     * Form to add channel subsciption
     */
    public function definition() {
        global $CFG;
        $mform = $this->_form;

        $mform->addElement('text', 'component', 'Component:');
        $mform->setType('component', PARAM_TEXT);

        $mform->addElement('text', 'area', 'Area:');
        $mform->setType('area', PARAM_TEXT);

        $mform->addElement('text', 'itemid', 'Item ID:');
        $mform->setType('itemid', PARAM_INT);

        $this->add_action_buttons();
    }

    // Perform some validation
    function validation($data, $files) {
        $errors= array();
        $errors['component'] = 'crap';
        return $errors;
    }
}