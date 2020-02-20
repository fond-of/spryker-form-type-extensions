<?php

namespace FondOfSpryker\Yves\FormTypeExtensions\Plugin\Form;

use Spryker\Service\Container\ContainerInterface;
use Spryker\Shared\FormExtension\Dependency\Plugin\FormPluginInterface;
use Spryker\Yves\Kernel\AbstractPlugin;
use Symfony\Component\Form\FormFactoryBuilderInterface;

/**
 * @method \FondOfSpryker\Yves\FormTypeExtensions\FormTypeExtensionsFactory getFactory()
 */
class ChoiceTypeExtensionFormPlugin extends AbstractPlugin implements FormPluginInterface
{
    /**
     * @api
     *
     * @param \Symfony\Component\Form\FormFactoryBuilderInterface $formFactoryBuilder
     * @param \Spryker\Service\Container\ContainerInterface $container
     *
     * @return \Symfony\Component\Form\FormFactoryBuilderInterface
     */
    public function extend(FormFactoryBuilderInterface $formFactoryBuilder, ContainerInterface $container): FormFactoryBuilderInterface
    {
        $formFactoryBuilder->addTypeExtension($this->getFactory()->createChoiceTypeExtension());

        return $formFactoryBuilder;
    }
}
