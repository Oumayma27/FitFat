<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFMLVhpY\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFMLVhpY/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFMLVhpY.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFMLVhpY\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerFMLVhpY\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'FMLVhpY',
    'container.build_id' => '811dde60',
    'container.build_time' => 1627161671,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFMLVhpY');
