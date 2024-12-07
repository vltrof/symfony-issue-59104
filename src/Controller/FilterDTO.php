<?php

namespace App\Controller;

readonly class FilterDTO {
    public function __construct(
        public ?int $id = null,
    )
    {
    }
}