<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUzonnOi\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUzonnOi/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUzonnOi.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUzonnOi\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUzonnOi\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'UzonnOi',
    'container.build_id' => '9a86a855',
    'container.build_time' => 1627344929,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUzonnOi');
