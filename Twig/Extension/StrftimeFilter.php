<?php

namespace Evercode\TwigExtensionsBundle\Twig\Extension;

class StrftimeFilter extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            'strftime' => new \Twig_Filter_Method($this, 'onStrftime'),
        );
    }

    /**
     * Format date with strftime function
     *
     * @param DateTime $date
     * @param string $format
     *
     * @return string
     */
    public function onStrftime($date, $format)
    {
        setlocale(LC_ALL, 'ru_RU.UTF-8');

        return strftime($format, $date->getTimestamp());
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'evercode_strftime_filter';
    }
}
