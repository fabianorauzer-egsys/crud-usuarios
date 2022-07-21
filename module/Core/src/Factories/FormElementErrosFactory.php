<?php

namespace Core\Factories;

use Interop\Container\ContainerInterface;
use Zend\Form\View\Helper\FormElementErrors;
use Zend\ServiceManager\Factory\FactoryInterface;

class FormElementErrorsFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $helpers = new FormElementErrors();

        $config = $container->get('config');
        if (isset($config['view_helper_config']['form_element_errors'])) {
            $configHelper = $config['view_helper_config']['form_element_errors'];
            if (isset($configHelper['message_open_format'])) {
                $helpers->setMessageOpenFormat($configHelper['message_open_format']);
            }
            if (isset($configHelper['message_separator_string'])) {
                $helpers->setMessageSeparatorString($configHelper['message_separator_string']);
            }
            if (isset($configHelper['message_close_string'])) {
                $helpers->setMessageCloseString($configHelper['message_close_string']);
            }
        }

        return $helpers;
    }
}