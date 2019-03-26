<?php
namespace Core\Media\Templator;

interface TemplatorInterface
{
    public function rendered(string $name, iterable $context): string;
}
