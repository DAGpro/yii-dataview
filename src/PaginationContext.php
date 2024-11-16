<?php

declare(strict_types=1);

namespace Yiisoft\Yii\DataView;

final class PaginationContext
{
    /**
     * @internal
     *
     * @param array<string, string> $overrideOrderFields
     */
    public function __construct(
        public readonly array $overrideOrderFields,
    ) {
    }
}
