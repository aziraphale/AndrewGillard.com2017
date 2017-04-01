<?php

//namespace App\Http;

function activeSegment($segmentNumber, $match, $cssClassIfTrue = 'active', $cssClassIfFalse = '') {
    return Request::segment($segmentNumber) === $match ? $cssClassIfTrue : $cssClassIfFalse;
}
