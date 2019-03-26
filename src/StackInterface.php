<?php
namespace Core\Media\Chunk;

interface StackInterface
{
    public function push(string $name, string $content, int $weight = 99);
}
