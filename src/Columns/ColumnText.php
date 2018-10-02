<?php
declare(strict_types=1);

namespace Nettrid\DataGrid\Columns;

class ColumnText extends Column
{
    public static function create(string $name, string $label = '')
    {
        $column = new self;
        $column->setName($name);
        $column->setName($label);

        return $column;
    }
}