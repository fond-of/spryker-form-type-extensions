<?php

namespace FondOfSpryker\Zed\FormTypeExtensions\Communication;

use FondOfSpryker\Shared\FormTypeExtensions\Form\Type\Extension\ChoiceTypeExtension;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Symfony\Component\Form\FormTypeExtensionInterface;

/**
 * @method \FondOfSpryker\Zed\FormTypeExtensions\FormTypeExtensionsConfig getConfig()
 */
class FormTypeExtensionsCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return \Symfony\Component\Form\FormTypeExtensionInterface
     */
    public function createChoiceTypeExtension(): FormTypeExtensionInterface
    {
        return new ChoiceTypeExtension();
    }
}
