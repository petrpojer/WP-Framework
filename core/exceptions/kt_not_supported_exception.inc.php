<?php

/**
 * Výjímka, že vyvolaná operace není podporována
 *
 * @author Martin Hlaváč
 * @link http://www.ktstudio.cz
 */
class KT_Not_Supported_Exception extends Exception {

    private $note;

    public function __construct($note, $code = 0, Exception $previous = null) {
        $this->note = $note;
        $message = __("Operace není podporována!", "KT_CORE_DOMAIN");
        parent::__construct($message, $code, $previous);
    }

    public function getNote() {
        return $this->note;
    }

    public function __toString() {
        return sprintf(__("Nepodporovaná operace %s \n %s", "KT_CORE_DOMAIN"), $this->getNote(), parent::__toString());
    }

}
