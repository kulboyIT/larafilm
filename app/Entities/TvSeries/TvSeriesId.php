<?php

namespace App\Entities\TvSeries;

class TvSeriesId
{
    private ?string $id;

    private function __construct(string $id = null)
    {
        $this->id = $id;
    }

    static public function set(string $id) {
        if (strlen($id) != 36) {
            // throw invalid id
        }

        return new self($id);
    }

    static public function new()
    {
        return new self(null);
    }

    public function getValue(): ?string
    {
        return $this->id;
    }
}