<?php
/**
 * CQRS Module for Zend Framework V2.x
 *
 * Config file.
 *
 * @link      https://github.com/carnage/cqrs for the canonical source repository
 * @license   http://blog.mongodb.org/post/103832439/the-agpl AGPL
 */
use Carnage\Cqrs\Command;
use Carnage\Cqrs\Event;

/**
 * CQRS Module for Zend Framework V2.x
 *
 * Config file.
 *
 * @link      https://github.com/carnage/cqrs for the canonical source repository
 * @license   http://blog.mongodb.org/post/103832439/the-agpl AGPL
 */
return array(
    'service_manager' => array(
        'factories' => [
            Command\Handler\PluginManager::class  => Command\Handler\PluginManagerFactory::class,
            Command\Bus\LazyBus::class            => Command\Bus\LazyBusFactory::class,
            Event\Listener\PluginManager::class   => Event\Listener\PluginManagerFactory::class,
            Event\Manager\LazyEventManager::class => Event\Manager\LazyEventManagerFactory::class,
        ]
    ),
    'command_handlers' => [
    ],
    'command_subscriptions' => [
    ],
    'domain_event_listeners' => [
    ],
    'domain_event_subscriptions' => [
    ],
);
