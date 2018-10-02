<?php
declare(strict_types=1);

namespace TroiaStudio\DataGrid;

use Nettrid\DataGrid\Columns\ColumnText;

class DataGrid extends AbstractDataGrid
{
    public function __construct(ITemplate $template)
    {
        parent::__construct($template);
    }

    public function addColumnText(string $name, string $label = ''): IColumn
    {
        $column = ColumnText::create($name, $label);
        $this->addColumn($column);
        return $column;
    }
}