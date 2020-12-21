<?php

/**
 * Class Validator
 */
class Validator
{
    /** @var string|null */
    private $start;

    /** @var string|null */
    private $end;

    /**
     * @var array
     */
    private $errors = [];

    /**
     * Validator constructor.
     *
     * @param $start
     * @param $end
     */
    public function __construct($start, $end)
    {
        $this->start = $start;

        $this->end = $end;
    }

    /**
     * @return bool
     */
    public function validate()
    {
        if (empty($this->start))
        {
            $this->errors[] = 'Empty parameter start';
            return false;
        }

        if (empty($this->end))
        {
            $this->errors[] = 'Empty parameter end';
            return false;
        }

        if (strlen($this->start) != 6){
            $this->errors[] = 'The length of start must be 6';
            return false;
        }

        if (strlen($this->end) != 6){
            $this->errors[] = 'The length of end must be 6';
            return false;
        }

        if ($this->start > $this->end)
        {
                $this->errors[] = 'Start must be biggest end';
                return false;
        }

        return true;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}