<?php
declare(strict_types=1);
namespace Hostnet\Bundle\FinancialTwigExtensionBundle\Twig;

class FormatIbanExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('formatIban', [$this, 'formatIbanFilter'])
        ];
    }

    public function formatIbanFilter(string $iban): string
    {
        return implode(' ', str_split($iban, 4));
    }
}
