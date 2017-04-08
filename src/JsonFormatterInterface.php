<?php
namespace laxertu\GeoJSON;

use laxertu\DataTree\Processor\ProcessableInterface;

interface JsonFormatterInterface
{

    public function buildContent(ProcessableInterface $processableInterface);

}
