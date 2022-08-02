<?php

namespace Lotr\Sdk\Builder;

class QueryParamsBuilder
{
    private array $orderBy = [];
    private array $where = [];
    private ?int $limit = null;
    private ?int $page = null;
    private ?int $offset = null;

    public function orderBy(string $column, string $direction): self
    {
        $this->orderBy = ['column' => $column, 'direction' => $direction];

        return $this;
    }

    public function where(string $column, string $condition): self
    {
        $this->where = [];
        $this->andWhere($column, $condition);

        return $this;
    }

    public function andWhere(string $column, string $condition): self
    {
        $this->where[$column] = $condition;

        return $this;
    }

    public function limit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function offset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    public function toArray(): array
    {
        $result = [];

        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->offset !== null) {
            $result['offset'] = $this->offset;
        }

        if (!empty($this->orderBy)) {
            $result['sort'] = $this->orderBy['column'].':'.$this->orderBy['direction'];
        }

        foreach ($this->where as $column => $condition) {
            $result[$column] = $condition;
        }

        return $result;
    }
}