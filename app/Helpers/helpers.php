<?php
declare(strict_types=1);

use App\Enums\ForbiddenLetter;

/**
 * Take first letter/byte of each word, convert it to ASCII value and sum it to total score
 *
 * @param int $limit
 * @param array<int, string> $request
 * @return int
 */
function getAsciiValue(int $limit, array $request): int
{
    $asciiValue = 0;

    for ($i = 0; $i < $limit; $i++) {
        if (ord($request[$i]) !== ForbiddenLetter::FORBIDDEN_LETTER_VALUE) {
            $asciiValue += ord($request[$i]);
        }
    }

    return $asciiValue;
}

/**
 * Calculate ratio between two stream results
 *
 * @param float $streamOneResults
 * @param float $streamTwoResults
 * @return float
 */
function compare(float $streamOneResults, float $streamTwoResults): float
{
    return (float) number_format(($streamOneResults / $streamTwoResults), 2, '.') ;
}
