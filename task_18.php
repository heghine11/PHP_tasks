<?php
    $str = 'the quick brown fox jumps over the lazy dog.';
    $replaceWith = 'That';
    $searchStr = 'the';
    echo preg_replace('/' . $searchStr . '/', $replaceWith, $str, 1);