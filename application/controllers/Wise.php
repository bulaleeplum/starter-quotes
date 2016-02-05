<?php

/**
 * Fix #8: Wisdom
 * Controller demonstrating routing rule using regular expression.
 * Renders "wisdom" quote.
 *
 * controllers/Wise.php
 *
 * ------------------------------------------------------------------------
 */
class Wise extends Application
{
    function __construct() {
        parent::__construct();
    }

    function bingo() {
        $this->data['pagebody'] = 'justone';   // this is the view we want shown
        // build the list of authors, to pass on to our view
        $record = $this->quotes->get(6);
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
}

/* End of file Wise.php */
/* Location: application/controllers/Wise.php */