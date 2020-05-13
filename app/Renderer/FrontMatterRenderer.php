<?php


namespace App\Renderer;


use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Renderer\BlockRendererInterface;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\HtmlElement;
use Symfony\Component\Yaml\Yaml;

class FrontMatterRenderer implements BlockRendererInterface
{
    /**
     * {@inheritdoc}
     */
    public function render(AbstractBlock $block, ElementRendererInterface $htmlRenderer, $inTightList = FALSE): HtmlElement {
        $content = [];
        $yaml_array = Yaml::parse($block->getStringContent());

        foreach ($yaml_array as $key => $value) {
            $content[$key] = $value;
        }

        // We use div instead of script, for safety and problems with DOMDocument.
        // If we create here script, it will be put on <head> while we crawl DOM,
        // and additionally all content parsed as well as DOMDocument.
        // @see https://github.com/symfony/symfony/issues/14542
        return new HtmlElement(
            'div',
            ['data-druki-element' => 'front-matter'],
            json_encode($content)
        );
    }
}
