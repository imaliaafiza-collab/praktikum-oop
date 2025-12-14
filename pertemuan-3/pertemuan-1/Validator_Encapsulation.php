<?php

class Validator_Encapsulation
{
    protected array $_inputType;
    private array $_errors = [];

    public function __construct(array $input)
    {
        $this->_inputType = $input;
    }

    public function checkRequired(string $field): void
    {
        if (!isset($this->_inputType[$field]) || $this->_inputType[$field] === '') {
            $this->_errors[$field][] = "$field wajib diisi";
        }
    }

    public function fails(): bool
    {
        return !empty($this->_errors);
    }

    public function errors(): array
    {
        return $this->_errors;
    }
}
