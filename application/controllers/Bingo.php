<?php

/**
 * Fix #7: Bingo
 * Controller demonstrating routing rule using regular expression.
 * Renders "bingo" quote.
 *
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
/**
 * Created by PhpStorm.
 * User: krystle
 * Date: 05/02/16
 * Time: 8:47 AM
 */
class Bingo extends Application
{
    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone';   // this is the view we want shown
        // build the list of authors, to pass on to our view
        $record = $this->quotes->get(5);
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */