<?php

namespace ContainerIqx4Yl2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6c8a7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerad066 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1bfbe = [
        
    ];

    public function getConnection()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getConnection', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getMetadataFactory', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getExpressionBuilder', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'beginTransaction', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getCache', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getCache();
    }

    public function transactional($func)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'transactional', array('func' => $func), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'wrapInTransaction', array('func' => $func), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'commit', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->commit();
    }

    public function rollback()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'rollback', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getClassMetadata', array('className' => $className), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'createQuery', array('dql' => $dql), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'createNamedQuery', array('name' => $name), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'createQueryBuilder', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'flush', array('entity' => $entity), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'clear', array('entityName' => $entityName), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->clear($entityName);
    }

    public function close()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'close', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->close();
    }

    public function persist($entity)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'persist', array('entity' => $entity), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'remove', array('entity' => $entity), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'refresh', array('entity' => $entity), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'detach', array('entity' => $entity), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'merge', array('entity' => $entity), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'contains', array('entity' => $entity), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getEventManager', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getConfiguration', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'isOpen', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getUnitOfWork', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getProxyFactory', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'initializeObject', array('obj' => $obj), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'getFilters', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'isFiltersStateClean', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'hasFilters', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return $this->valueHolder6c8a7->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerad066 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6c8a7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6c8a7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6c8a7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, '__get', ['name' => $name], $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        if (isset(self::$publicProperties1bfbe[$name])) {
            return $this->valueHolder6c8a7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c8a7;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6c8a7;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c8a7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6c8a7;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, '__isset', array('name' => $name), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c8a7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6c8a7;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, '__unset', array('name' => $name), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c8a7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6c8a7;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, '__clone', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        $this->valueHolder6c8a7 = clone $this->valueHolder6c8a7;
    }

    public function __sleep()
    {
        $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, '__sleep', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;

        return array('valueHolder6c8a7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerad066 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerad066;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerad066 && ($this->initializerad066->__invoke($valueHolder6c8a7, $this, 'initializeProxy', array(), $this->initializerad066) || 1) && $this->valueHolder6c8a7 = $valueHolder6c8a7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6c8a7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6c8a7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
