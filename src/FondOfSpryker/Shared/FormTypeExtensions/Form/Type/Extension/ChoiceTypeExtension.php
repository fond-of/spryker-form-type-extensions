<?php

namespace FondOfSpryker\Shared\FormTypeExtensions\Form\Type\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChoiceTypeExtension extends AbstractTypeExtension
{
    public const OPTION_CHOICES_AS_VALUES = 'choices_as_values';
    public const OPTION_ALLOWED_ATTRIBUTES = 'allowed_attributes';
    public const OPTION_ALLOWED_HTML_TAGS = 'allowed_html_tags';

    /**
     * @return iterable
     */
    public function getExtendedTypes(): iterable
    {
        return [
            ChoiceType::class,
        ];
    }

    /**
     * @param \Symfony\Component\OptionsResolver\OptionsResolver $resolver
     *
     * @return void
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefined([
                static::OPTION_CHOICES_AS_VALUES,
                static::OPTION_ALLOWED_ATTRIBUTES,
                static::OPTION_ALLOWED_HTML_TAGS,
            ])
            ->setDefaults([
                static::OPTION_CHOICES_AS_VALUES => true,
                static::OPTION_ALLOWED_ATTRIBUTES => [],
                static::OPTION_ALLOWED_HTML_TAGS => [],
            ])
            ->setAllowedTypes(static::OPTION_CHOICES_AS_VALUES, ['null', 'bool', 'string']);
    }
}
