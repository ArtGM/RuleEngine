<?php

class RuleEngine
{
    public function __construct(private readonly array $rules)
    {
    }

    public function validate($value): bool
    {
        foreach ($this->rules as $rule) {
            if ($rule->when($value)) {
                return $rule->then($value);
            }
        }
    }

}