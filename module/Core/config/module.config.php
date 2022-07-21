<?php

use Core\Factories\TransportSmtpFactory;
use Zend\Form\View\Helper\FormElementErrors;
use Core\Factories\FormElementErrorsFactory;

return[
    'service_manager' => [
        'factories' => [
            'core.transport.smtp' => TransportSmtpFactory::class,
        ],
    ],

    'view_helpers' => [
        'factories' => [
            FormElementErrors::class => FormElementErrorsFactory::class
        ],
    ],
];