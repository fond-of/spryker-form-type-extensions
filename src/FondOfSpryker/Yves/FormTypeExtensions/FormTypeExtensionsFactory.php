<?php

namespace FondOfSpryker\Yves\FormTypeExtensions;

use FondOfSpryker\Shared\FormTypeExtensions\Form\Type\Extension\ChoiceTypeExtension;
use Spryker\Yves\Kernel\AbstractFactory;
use Symfony\Component\Form\FormTypeExtensionInterface;

class FormTypeExtensionsFactory extends AbstractFactory
{
    /**
     * @return \Symfony\Component\Form\FormTypeExtensionInterface
     */
    public function createChoiceTypeExtension(): FormTypeExtensionInterface
    {
        return new ChoiceTypeExtension();
    }
}
