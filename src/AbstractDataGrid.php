<?php
declare(strict_types=1);

namespace Nettrid\DataGrid;

use Nette\Application\UI\Control;

abstract class AbstractDataGrid extends Control
{
    /** @var ITemplate */
    private $gridTemplate;

    /** @var IColumn[] */
    private $columns;

    public function __construct(ITemplate $template)
    {
        parent::__construct();
        $this->gridTemplate = $template;
    }

    public function addColumn(IColumn $column): void
    {
        $this->columns[] = $column;
    }

    public function getGridTemplate(): ITemplate
    {
        return $this->gridTemplate;
    }

    public function setGridTemplate(ITemplate $gridTemplate): void
    {
        $this->gridTemplate = $gridTemplate;
    }

    public function render(): void
    {
        $this->gridTemplate->render();
    }
}