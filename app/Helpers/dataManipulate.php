<?php
declare(strict_types=1);

use Illuminate\Http\Request;

/**
 * Sanitizing input
 *
 * @param string $request
 * @return array <int, string>
 */
function sanitiseRequest(string $request): array
{
    return explode(' ', (string) preg_replace("/\s+/", " ", $request));
}

/**
 * Validate request parameters, headers and method
 *
 * @param Request $request
 * @return int
 */
function validate(Request $request): int
{
    if (!isset($_GET['words_stream_1']) || !isset($_GET['words_stream_2'])) {
        return 400;
    }

    if ($request->getMethod() !== 'GET') {
        return 405;
    }

    if ($request->header('key') === null) {
        return 401;
    }

    return 200;
}
