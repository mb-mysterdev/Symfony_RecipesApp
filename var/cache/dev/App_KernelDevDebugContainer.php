<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXlOrzIv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXlOrzIv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXlOrzIv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXlOrzIv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXlOrzIv\App_KernelDevDebugContainer([
    'container.build_hash' => 'XlOrzIv',
    'container.build_id' => '9ada500d',
    'container.build_time' => 1598297016,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXlOrzIv');
