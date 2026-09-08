<?php

use PSpell\Config;

/**
 * @psalm-import-type Config from types
 */
function getComponentsPath(): string{
    return 'components' . DIRECTORY_SEPARATOR;
}

/**
 * Summary of getRequire
 * @param string $file
 * @param Config $data
 * @return void
 */
function getRequire(string $file, array $data = []): void{
    extract($data);

    require_once COMPONENTS . "$file.php";
}

/**
 * Summary of makePage
 * @param Config $data
 * @return void
 */
function makePage(array $data): void {

   
    getRequire('header', $data);

    getRequire('table', $data);

    getRequire('footer');
}