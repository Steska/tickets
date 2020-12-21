<?php

class TicketsCounter
{
    /** @var string */
    private $start;

    /** @var string */
    private $end;


    const START = 1001;

    private $count = 0;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;

        $this->counter();
    }

    private function counter()
    {
        if ($this->start < self::START){
            $this->start = self::START;
        }
        for ($i = $this->start; $i < $this->end; $i++){
            $second = (int) $i % 1000;
            $first =  $i / 1000;
            $first = $first % 9; $second = $second % 9;
            if ($first == $second) $this->count++;

        }
    }

    public function getCount()
    {
        return $this->count;
    }
}