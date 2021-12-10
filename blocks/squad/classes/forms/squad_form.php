<?php
require_once("$CFG->libdir/formslib.php");

class squad_form extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG;

        $mform = $this->_form;

        $mform->addElement('text', 'a_value', 'a = ');
        $mform->setType('a_value', PARAM_NOTAGS);
        $mform->setDefault('a_value', '0');

        $mform->addElement('text', 'b_value', 'b = ');
        $mform->setType('b_value', PARAM_NOTAGS);
        $mform->setDefault('b_value', '0');

        $mform->addElement('text', 'c_value', 'c = ');
        $mform->setType('c_value', PARAM_NOTAGS);
        $mform->setDefault('c_value', '0');

        $mform->addElement('text', 'x_value', 'x1,x2 = ');
        $mform->setType('x_value', PARAM_NOTAGS);
        $mform->setDefault('x_value', '0');

        $this->add_action_buttons('', 'Find');
    }
    //Custom validation should be added here
    public function validation($data, $files) {
        return [];
    }
}