<?php

namespace SchultenMedia\FilamentFullCalendar\Widgets\Concerns;

trait IsBackwardCompatible
{
    protected function getHeaderActions(): array
    {
        return $this->headerActions();
    }

    protected function getFormActions(): array
    {
        return $this->modalActions();
    }
}
