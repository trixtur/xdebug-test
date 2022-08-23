<?php

require_once('container.class.php');

/*
 * Function: fizzbuzz
 * Purpose: execute the function specified in the User Story.
 * Parameters: Accepts a reference to a fizzbuzz_container object.
 * Result: Modifies the result of the fizzbuzz_container object based upon User Acceptance Criteria.
 */
function fizzbuzz (container &$fizzbuzz_container) {
    // Handles Item 2 from the UAC.
    if (($fizzbuzz_container->get_value() % 3) == 0) $fizzbuzz_container->set_result('fizz');
    // Handles Item 3 from the UAC.
    // Handles the additional considerations specified in the UAC because it appends to the result.
    if (($fizzbuzz_container->get_value() % 5) == 0) $fizzbuzz_container->append_result('buzz');
    // Handles Item 1 from the UAC.
    if ((($fizzbuzz_container->get_value() % 3) != 0) && (($fizzbuzz_container->get_value() % 5) != 0))
        $fizzbuzz_container->append_result($fizzbuzz_container->get_value());
}