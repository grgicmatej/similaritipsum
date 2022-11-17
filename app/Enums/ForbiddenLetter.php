<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Here's a little twist, this value can't be added to the $result value.
 * This ASCII code corresponds to lowercase l (L) it is decided
 * by random choice, no other reasons, just for fun :)
 *
 * @method static static forbiddenLetterValue()
 */

final class ForbiddenLetter extends Enum
{
    const FORBIDDEN_LETTER_VALUE = 108;
}
