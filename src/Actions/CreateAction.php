<?php

namespace SchultenMedia\FilamentFullCalendar\Actions;

use Filament\Actions\CreateAction as BaseCreateAction;
use SchultenMedia\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CreateAction extends BaseCreateAction
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->model(
            fn (FullCalendarWidget $livewire) => $livewire->getModel()
        );

        $this->form(
            fn (FullCalendarWidget $livewire) => $livewire->getFormSchema()
        );

        $this->after(
            fn (FullCalendarWidget $livewire) => $livewire->refreshRecords()
        );

        $this->cancelParentActions();
    }
}
