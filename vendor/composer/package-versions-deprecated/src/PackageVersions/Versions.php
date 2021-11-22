<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'cadot.info/twigbundle';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'cadot.info/entitybundle' => 'dev-master@39781a6042aff3d39e8abb9290c12d4d42cf0bc5',
  'cadot.info/filebundle' => 'dev-master@8b71d6378835681f2244f163058dd395703e8ede',
  'composer/package-versions-deprecated' => 'dev-master@1927b0a81e48643ca45c4a55b34a7645b04f3acc',
  'doctrine/annotations' => '1.14.x-dev@2da982ad3c26da81b91db8d7b54abf3a5922e73c',
  'doctrine/cache' => '2.1.x-dev@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.7.x-dev@0163afb2587fa0a443a2735da3f1b807e68cbe94',
  'doctrine/common' => '3.2.x-dev@6d970a11479275300b5144e9373ce5feacfa9b91',
  'doctrine/dbal' => '2.13.x-dev@029caa1061acb1f4f07748c0baf92a4cbff4f7e8',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.2.x-dev@e70ba7c7b9843cdfef183d9df0c851ff2f494f7b',
  'doctrine/inflector' => '2.1.x-dev@3249de584daab089c823ddc3f8efb108cee85a10',
  'doctrine/instantiator' => '1.5.x-dev@6410c4b8352cb64218641457cef64997e6b784fb',
  'doctrine/lexer' => '1.3.x-dev@59bfb3b9be04237be4cd1afea9bbb58794c25ce8',
  'doctrine/orm' => '2.9.0@99d67cb77d3626c52f4d5feb5caed58948ea5577',
  'doctrine/persistence' => '2.3.x-dev@d22ea9208fa44137f887ba55ce867233a5666250',
  'durlecode/editorjs-simple-html-parser' => 'dev-master@e3063a02d6f88f6863b4edaab09b42a43ae5a618',
  'imagine/imagine' => '1.2.4@d2e18be6e930ca169e4f921ef73ebfc061bf55d8',
  'liip/imagine-bundle' => '2.6.0@afa4193c7fde027426ebb19e73878cd026438bbd',
  'masterminds/html5' => 'dev-master@f640ac1bdddff06ea333a920c95bbad8872429ab',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.x-dev@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => 'dev-master@aa4f89e91c423b516ff226c50dc83f824011c253',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'symfony/asset' => 'v5.2.0@19c59713f750642206b21a1edec5c18dea80f979',
  'symfony/cache' => '5.4.x-dev@2d325e49c95419bd863db2ebb81c29e56313c351',
  'symfony/cache-contracts' => '2.5.x-dev@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => '5.4.x-dev@f93c5bca91f008698a51c5712970d5101d058227',
  'symfony/console' => '5.4.x-dev@4c10d71a5184a4de70eb3ad9c3e38d37b5ff3947',
  'symfony/dependency-injection' => '5.4.x-dev@94c278ccd78ba1710725449e4d6d7feb39e03330',
  'symfony/deprecation-contracts' => '2.5.x-dev@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/error-handler' => '5.4.x-dev@734f2b6d49196c9d876d62a25e4c1b08c2223f8e',
  'symfony/event-dispatcher' => '5.4.x-dev@9748a8d4529750bc22e9e9ec6d8597caa147952d',
  'symfony/event-dispatcher-contracts' => '2.5.x-dev@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/filesystem' => '5.4.x-dev@731f917dc31edcffec2c6a777f3698c33bea8f01',
  'symfony/finder' => '5.4.x-dev@76673e9f82bb6c2fb3b6e9b1673832edb55eee1a',
  'symfony/framework-bundle' => 'v5.1.0@db39e29cf3a99692390e6d18fdc57d42e9e5a3c9',
  'symfony/http-client-contracts' => '2.5.x-dev@ec82e57b5b714dbb69300d348bd840b345e24166',
  'symfony/http-foundation' => '5.4.x-dev@6c88b0b9705adb48718b1a9e958bd959c9332fc5',
  'symfony/http-kernel' => '5.4.x-dev@39b56b7c97d3156e39b461cb71603994cbf5216e',
  'symfony/mime' => '5.4.x-dev@f200675327f0d62a5bbfb77f258bc18391e0a768',
  'symfony/options-resolver' => '5.4.x-dev@0a1224805d925ee078867ace14f87eb8dd447a1b',
  'symfony/password-hasher' => '5.4.x-dev@60c4aba11e2ce4140a5a9cbc13733da4b8333e2d',
  'symfony/polyfill-ctype' => 'dev-main@30885182c981ab175d4d034db0f6f469898070ab',
  'symfony/polyfill-intl-grapheme' => 'dev-main@5911fe42c266a5917aef12e45fbd3a640a9e3b18',
  'symfony/polyfill-intl-idn' => 'dev-main@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'dev-main@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'dev-main@11b9acb5e8619aef6455735debf77dde8825795c',
  'symfony/polyfill-php72' => 'dev-main@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'dev-main@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'dev-main@57b712b08eddb97c762a8caa32c84e037892d2e9',
  'symfony/polyfill-php81' => 'dev-main@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/process' => '5.4.x-dev@956acb321f471255cced3098e0c7e4f1444b5485',
  'symfony/property-access' => '5.4.x-dev@c5c851f220776d27961af5aeb6e853696895a672',
  'symfony/property-info' => '5.4.x-dev@c90616491913d4ed428e77ef858bc4d07a07dcd6',
  'symfony/routing' => '5.4.x-dev@c15fd164525234abeb05bfc296ddc4471029937f',
  'symfony/security-bundle' => 'v5.2.0@6f05ceafa23cf7170dfe62c4aaf920a353aa7a25',
  'symfony/security-core' => '5.4.x-dev@b6ff1332564b39c6c4c0f9e99d5a8053b612b0d1',
  'symfony/security-csrf' => '5.4.x-dev@06c10c6f426dbc163d43fd1c0518f4b48b5188c1',
  'symfony/security-guard' => 'v5.3.0-BETA4@732917baae3e226f4683a72bea46743a357040f5',
  'symfony/security-http' => '5.2.x-dev@8d6fb4fb1bb0d4a11b30de85cbf77914c71175bc',
  'symfony/service-contracts' => '2.5.x-dev@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/string' => '5.4.x-dev@dad92b16d84cb661f39c85a5dbb6e4792b92e90f',
  'symfony/var-dumper' => '5.4.x-dev@8dcd0b137b3fb45df7df6f06f0ef6a9fad7f587d',
  'symfony/var-exporter' => '5.4.x-dev@d59446d6166b1643a8a3c30c2fa8e16e51cdbde7',
  'twig/twig' => 'v3.0.0@9b58bb8ac7a41d72fbb5a7dc643e07923e5ccc26',
  'cadot.info/twigbundle' => 'dev-master@bf7dcc5f03c1e1425b4312e4a45a0db5d6c35abd',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
