<?php
namespace Core\Media\Chunk;

interface RendarableInterface
{
    /**
     * Returns a rendered template as a string
     *
     * @param string $name a template's name
     * @param iterable $context a data for a template
     * @return string
     */
    public function rendered(string $name, iterable $context): string;
}
