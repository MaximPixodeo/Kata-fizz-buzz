<?php

declare(strict_types = 1);

namespace App;

// class Wall
// {
//     private $totalLength;

//     public function __construct()
//     {
//         $this->totalLength = 250;
//     }

//     public function totalLength(): int
//     {
//         return $this->totalLength;
//     }

//     public function getOneCombinationElement(int $elementSize): int|float
//     {
//         return $this->totalLength / $elementSize;
//     }

//     public function calculate(array $elements)
//     {
//         $result = [];

//         foreach ($elements as $size) {
//             if (is_int($this->getOneCombinationElement($size))) {
//                 $result[] = [$this->getOneCombinationElement($size) => $size];
//             }
//         }

//         return $result;
//     }

// } 