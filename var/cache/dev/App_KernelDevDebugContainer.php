<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE5cZ7u1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE5cZ7u1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE5cZ7u1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE5cZ7u1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerE5cZ7u1\App_KernelDevDebugContainer([
    'container.build_hash' => 'E5cZ7u1',
    'container.build_id' => '1f15b277',
    'container.build_time' => 1636549000,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE5cZ7u1');
