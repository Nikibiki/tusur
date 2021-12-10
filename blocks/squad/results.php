<?php

require_once(__DIR__ . '/../../config.php');
global $DB, $OUTPUT, $PAGE;

$PAGE->set_url(new moodle_url('/blocks/squad/results.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('Результаты вычислений');

$results = array_values($DB->get_records('block_squad'));

echo $OUTPUT->header();

$templatecontext = (object)[
    'results' => $results,
];

echo $OUTPUT->render_from_template('block_squad/results', $templatecontext);

echo $OUTPUT->footer();
