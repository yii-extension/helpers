<?php

declare(strict_types=1);

namespace Yii\Extension\Widgets\Tests\Stubs;

use Yii\Extension\Widgets\Widget;

class ImmutableWidget extends Widget
{
    private string $id = 'original';

    protected function run(): string
    {
        return '<run-' . $this->id . '>';
    }

    public function id(string $value): self
    {
        $new = clone $this;
        $new->id = $value;

        return $new;
    }
}
