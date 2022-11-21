<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ComparatorController extends Controller
{
    /**
     * Get ratio result and return to blade
     *
     * @param Request $request
     * @return Factory|View|Application
     */
    public function getResult(Request $request): Factory|View|Application
    {
        return view('result', [
            'result' => $this->compare($request)
        ]);
    }

    /**
     * Get ratio result and return as API endpoint
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function getResultApi(Request $request): JsonResponse
    {
        if (validate($request) !== 200) {
            return response()->json(validate($request));
        }

        return response()->json($this->compare($request));
    }

    /**
     * Compare ASCII values of first letters from each word of each stream/string
     *
     * @param Request $request
     * @return float
     */
    public function compare(Request $request): float
    {
        $arrayStreamOne = sanitize((string) $request['words_stream_1']);
        $arrayStreamTwo = sanitize((string) $request['words_stream_2']);

        $limit = (int) min(count($arrayStreamOne), count($arrayStreamTwo));

        $streamOneAsciiValue = getAsciiValue($limit, $arrayStreamOne);
        $streamTwoAsciiValue = getAsciiValue($limit, $arrayStreamTwo);

        if (!$streamOneAsciiValue || !$streamTwoAsciiValue) {
            return floatval(0);
        }

        return compare($streamOneAsciiValue, $streamTwoAsciiValue);
    }
}
