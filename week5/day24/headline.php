<?php

function headline($headline, $level = 1) {
    return "<h{$level}>{$headline}</h{$level}>\n";
}

echo headline('foo', 2);
echo headline('some headline', 'blebleble')
echo headline('<h1')
