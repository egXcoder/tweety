<?php

namespace App\Enum;

use App\Enum\Contract\Enum;

class ImpressionsEnum extends Enum{
    private const LIKE = 'like';
    private const DISLIKE = 'dislike';
    private const LOVE = 'love';
    private const LAUGH = 'laugh';
    private const CRY = 'cry';
}