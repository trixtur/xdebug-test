<?php

class container
{
    private $_value, $_result;

    /*
     * Constructor
     * Initializes the value. Accepts an integer or an ascii encoded integer.
     * Initializes the result to an empty string.
     * Result: The object is instantiated.
     */
    public function __construct($value) {
        $this->_value = $value + 0;
        $this->_result = '';
    }

    /*
     * Function: set_value
     * Parameters: $value (int or string)
     * Result: Object property "_value" is set to the integer version of
     * the parameter.
     */
    public function set_value($value) {
        $this->_value = $value + 0;
    }

    /*
     * Function: get_value
     * Result: Object property "_value" is set returned.
     */
    public function get_value() {
        return $this->_value;
    }

    /*
     * Function: set_result
     * Parameters: $result (int or string)
     * Result: Object property "_result" is set to the string version of
     * the parameter.
     */
    public function set_result($result) {
        $this->_result = "$result";
    }

    /*
     * Function: append_result
     * Parameters: $result_append (int or string)
     * Result: Object property "_result" is appended with the string
     * version of the parameter.
     */
    public function append_result($result_append) {
        $this->_result .= $result_append;
    }

    /*
     * Function: get_result
     * Result: Object property "_result" is set returned.
     */
    public function get_result() {
        return $this->_result;
    }
}