<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHzlnxev\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHzlnxev/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerHzlnxev.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerHzlnxev\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerHzlnxev\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Hzlnxev',
    'container.build_id' => 'bdc9e575',
    'container.build_time' => 1526858258,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerHzlnxev');
