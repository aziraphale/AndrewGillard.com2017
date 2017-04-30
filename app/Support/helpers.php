<?php

function activeSegment($segmentNumber, $match, $cssClassIfTrue = 'active', $cssClassIfFalse = '') {
    return Request::segment($segmentNumber) === $match ? $cssClassIfTrue : $cssClassIfFalse;
}

function obstart($name = 'default') {
    $GLOBALS['_obuffers'][$name] = '';
    ob_start(function($buffer, $phase) use ($name) {
        $GLOBALS['_obuffers'][$name] .= $buffer;
        return '';
    });
}
function obend() {
    ob_end_clean();
}
function obget($name = 'default') {
    return $GLOBALS['_obuffers'][$name];
}
