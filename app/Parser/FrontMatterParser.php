<?php


namespace App\Parser;


use App\Element\FrontMatterElement;
use League\CommonMark\Block\Parser\BlockParserInterface;
use League\CommonMark\ContextInterface;
use League\CommonMark\Cursor;

class FrontMatterParser implements BlockParserInterface
{
    /**
     * {@inheritdoc}
     */
    public function parse(ContextInterface $context, Cursor $cursor): bool
    {
        // Only works for metadata found at the beginning of the file. Other "---"
        // will be replaced as expected with "<hr />".
        if ($context->getLineNumber() > 1) {
            return false;
        }

        if ($cursor->isIndented()) {
            return false;
        }

        $meta_information = $cursor->match("/^\-{3}$/");
        if (!$meta_information) {
            return false;
        }

        $context->addBlock(new FrontMatterElement());

        return true;
    }
}
