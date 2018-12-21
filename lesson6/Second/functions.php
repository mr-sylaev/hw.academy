<?php

    class TwoDimensional
    {
        public $array;
        public $startKey;
        public $endKey;

        public function __construct(array $array, $startKey, $endKey)
        {
            $this->array = $array;
            $this->startKey = $startKey;
            $this->endKey = $endKey;
        }

        public function getSortedArray() {
            $start = array_column($this->array, $this->startKey);
            $end = array_column($this->array, $this->endKey);

            array_multisort($start, SORT_DESC, $end, SORT_DESC, $this->array);

            return $this->array;
        }

    }