<?php

declare(strict_types=1);

namespace Yii\Extension\Widgets\Tests\Stubs;

use Yii\Extension\Widgets\Widget;

class TestWidget extends Widget
{
    private string $id;

    public function run(): string
    {
        return '<run-' . $this->id . '>';
    }

    public function id(string $value): Widget
    {
        $this->id = $value;

        return $this;
    }
}
