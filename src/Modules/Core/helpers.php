<?php
function makeMoneyHumanReadable($amount): string
{
    return number_format($amount, 3, '.', ',');
}
