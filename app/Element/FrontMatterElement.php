<?php


namespace App\Element;

use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Element\AbstractStringContainerBlock;
use League\CommonMark\ContextInterface;
use League\CommonMark\Cursor;
use League\CommonMark\Util\RegexHelper;

class FrontMatterElement extends AbstractStringContainerBlock
{
    /**
     * Indicates is meta information closing block found.
     *
     * @var bool
     */
    protected $isCloserFound;

    /**
     * FrontMatter constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->isCloserFound = false;
    }

    /**
     * {@inheritdoc}
     */
    public function canContain(AbstractBlock $block): bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function acceptsLines(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isCode(): bool
    {
        // @see https://github.com/thephpleague/commonmark/issues/358#issuecomment-485248825
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function shouldLastLineBeBlank(Cursor $cursor, $currentLineNumber): bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function matchesNextLine(Cursor $cursor): bool
    {
        if ($this->isCloserFound()) {
            return false;
        }

        return true;
    }

    /**
     * @return bool
     */
    public function isCloserFound(): bool
    {
        return $this->isCloserFound;
    }

    /**
     * @param bool $status
     *   The status is closer found or not.
     */
    public function setIsCloserFound($status): void
    {
        $this->isCloserFound = $status;
    }

    /**
     * {@inheritdoc}
     */
    public function handleRemainingContents(ContextInterface $context, Cursor $cursor): void
    {
        if ($cursor->getNextNonSpaceCharacter() == '-') {
            $match = RegexHelper::matchAll('/^\-{3}$/', $cursor->getLine(), $cursor->getNextNonSpacePosition());
            if (!empty($match)) {
                $this->setIsCloserFound(true);
                return;
            }
        }

        $context->getTip()->addLine($cursor->getRemainder());
    }

    /**
     * {@inheritDoc}
     */
    public function finalize(ContextInterface $context, int $endLineNumber)
    {
        parent::finalize($context, $endLineNumber);

        $this->finalStringContents = implode(PHP_EOL, $this->strings->toArray());
    }
}
