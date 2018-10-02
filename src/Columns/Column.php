<?php
declare(strict_types=1);

namespace Nettrid\DataGrid\Columns;

use Nettrid\DataGrid\IColumn;

abstract class Column implements IColumn
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $label;

    /**
     * @var IColumn[]
     */
    private $children;

    public function __construct(string $name, string $label, array $children = [])
    {
        $this->name = $name;
        $this->label = $label;
        $this->children = $children;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    private function addChild(IColumn $column): void
    {
        $this->children[] = $column;
    }

    /**
     * @return IColumn[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param IColumn[] $children
     */
    public function setChildren(array $children): void
    {
        foreach ($children as $child) {
            $this->addChild($child);
        }
    }
}