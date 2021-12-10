<?php
require_once(__DIR__ . '/classes/forms/squad_form.php');
require_once(__DIR__ . '/lib.php');
global $DB, $OUTPUT, $PAGE;
class block_squad extends block_base {

    public function init()
    {
        $this->title = get_string('squad', 'block_squad');
    }

    public function get_content()
    {
        global $DB;
        if ($this->content !== null) {
            return $this->content;
        }

        $mform = new squad_form();
        if ($fromform = $mform->get_data()) {

            $a = (int)$fromform->a_value;
            $b= (int)$fromform->b_value;
            $c = (int)$fromform->c_value;

            $x = eq_roots($a, $b, $c);
            $recordtoinsert = new stdClass();
            $recordtoinsert->a_value = $fromform->a_value;
            $recordtoinsert->b_value = $fromform->b_value;
            $recordtoinsert->c_value = $fromform->c_value;
            $recordtoinsert->x_value = $x;

            $record_id = $DB->insert_record('block_squad', $recordtoinsert);

            $mform->set_data($recordtoinsert);
        }
        $this->content = new stdClass();
        $this->content->text = '<p>a*X<sup>2</sup> + b*X + c = 0<p>';
        $this->content->footer = $mform->render();

        return $this->content;
    }
}