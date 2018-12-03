<?php

declare(strict_types=1);

namespace Orchid\Screen\Fields;

use Orchid\Screen\Field;

/**
 * Class MapField.
 *
 * @method $this name($value = true)
 * @method $this popover($value = true)
 */
class MapField extends Field
{
    /**
     * @var string
     */
    public $view = 'platform::fields.map';

    /**
     * @param null $name
     * @return PlaceField
     */
    public static function make($name = null): self
    {
        return (new static)->name($name);
    }
}