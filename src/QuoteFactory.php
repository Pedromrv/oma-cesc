<?php
/**
 * Created by PhpStorm.
 * User: omamac
 * Date: 07/06/2019
 * Time: 12:35
 */

namespace Pedromrv\OmaCesc;


class QuoteFactory
{
    private $quotes = [];
    public function __construct(array $quote = [])
    {
        if (!empty($quote)) {
            $this->quotes[] = $quote;
        } else {
            $this->quotes = include __DIR__ . '/../data/quotes.php';
        }
    }
    /**
     * @return array
     */
    public function getRandomQuote(): array
    {
        $randomQuote = array_rand($this->quotes, 1);
        return $this->quotes[$randomQuote];
    }
}