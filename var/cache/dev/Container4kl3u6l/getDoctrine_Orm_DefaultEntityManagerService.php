<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ObjectManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerAwareEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';

$a = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'};

$b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'/src/GsbFrais/ConnexionBundle/Entity'), 1 => ($this->targetDirs[3].'/src/GsbFrais/ProfilBundle/Entity')));

$c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$c->addDriver($b, 'GsbFrais\\ConnexionBundle\\Entity');
$c->addDriver($b, 'GsbFrais\\ProfilBundle\\Entity');

$d = new \Doctrine\ORM\Configuration();
$d->setEntityNamespaces(array('GsbFraisConnexionBundle' => 'GsbFrais\\ConnexionBundle\\Entity', 'GsbFraisProfilBundle' => 'GsbFrais\\ProfilBundle\\Entity'));
$d->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php')) && false ?: '_'});
$d->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php')) && false ?: '_'});
$d->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php')) && false ?: '_'});
$d->setMetadataDriverImpl($c);
$d->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$d->setProxyNamespace('Proxies');
$d->setAutoGenerateProxyClasses(true);
$d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$d->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$d->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this)) && false ?: '_'});
$d->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(${($_ = isset($this->services['service_locator.sr6ctxe']) ? $this->services['service_locator.sr6ctxe'] : $this->services['service_locator.sr6ctxe'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array())) && false ?: '_'}));
$d->addCustomDatetimeFunction('DAY', 'DoctrineExtensions\\Query\\Mysql\\Day');
$d->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\\Query\\Mysql\\Month');
$d->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\\Query\\Mysql\\Year');

$this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->load(__DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php')) && false ?: '_'}, $d);

${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array())) && false ?: '_'}->configure($instance);

return $instance;
