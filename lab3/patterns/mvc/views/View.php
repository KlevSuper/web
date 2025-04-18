<?php
namespace MVC\Views;

interface View
{
    public function render(array $data): string;
}