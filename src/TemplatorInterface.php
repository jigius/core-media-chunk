<?php
namespace Core\Media\Chunk;

interface TemplatorInterface
{
    public function rendered(string $name, iterable $context): string;
}
