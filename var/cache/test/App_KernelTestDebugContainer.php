<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIDTr2d1\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIDTr2d1/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerIDTr2d1.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerIDTr2d1\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerIDTr2d1\App_KernelTestDebugContainer([
    'container.build_hash' => 'IDTr2d1',
    'container.build_id' => '550d4949',
    'container.build_time' => 1636560133,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIDTr2d1');
