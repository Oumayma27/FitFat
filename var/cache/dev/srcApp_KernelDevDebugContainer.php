<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSJKWHbl\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSJKWHbl/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSJKWHbl.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSJKWHbl\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSJKWHbl\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'SJKWHbl',
    'container.build_id' => '4741923c',
    'container.build_time' => 1627387675,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSJKWHbl');
