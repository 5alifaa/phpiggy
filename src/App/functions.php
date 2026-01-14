<?php

declare(strict_types=1);

function dd(mixed $value): void
{
    echo "<pre>\n";
    var_dump($value);
    echo "</pre>\n";
    die();
}