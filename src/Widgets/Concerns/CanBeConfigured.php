<?php

namespace SchultenMedia\FilamentFullCalendar\Widgets\Concerns;

use function SchultenMedia\FilamentFullCalendar\array_merge_recursive_unique;

use SchultenMedia\FilamentFullCalendar\FilamentFullCalendarPlugin;

trait CanBeConfigured
{
    public function config(): array
    {
        return [];
    }

    protected function getConfig(): array
    {
        return array_merge_recursive_unique(
            FilamentFullCalendarPlugin::get()->getConfig(),
            $this->config(),
        );
    }
}
