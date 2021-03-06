<?php

namespace ContainerVHexNyF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7cb03 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8c347 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties08455 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getConnection', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getMetadataFactory', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getExpressionBuilder', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'beginTransaction', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getCache', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'transactional', array('func' => $func), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'commit', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->commit();
    }

    public function rollback()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'rollback', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getClassMetadata', array('className' => $className), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'createQuery', array('dql' => $dql), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'createNamedQuery', array('name' => $name), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'createQueryBuilder', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'flush', array('entity' => $entity), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'clear', array('entityName' => $entityName), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->clear($entityName);
    }

    public function close()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'close', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->close();
    }

    public function persist($entity)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'persist', array('entity' => $entity), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'remove', array('entity' => $entity), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'refresh', array('entity' => $entity), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'detach', array('entity' => $entity), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'merge', array('entity' => $entity), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'contains', array('entity' => $entity), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getEventManager', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getConfiguration', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'isOpen', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getUnitOfWork', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getProxyFactory', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'initializeObject', array('obj' => $obj), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'getFilters', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'isFiltersStateClean', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'hasFilters', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return $this->valueHolder7cb03->hasFilters();
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

        $instance->initializer8c347 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7cb03) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7cb03 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7cb03->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, '__get', ['name' => $name], $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        if (isset(self::$publicProperties08455[$name])) {
            return $this->valueHolder7cb03->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cb03;

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

        $targetObject = $this->valueHolder7cb03;
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
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cb03;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7cb03;
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
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, '__isset', array('name' => $name), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cb03;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7cb03;
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
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, '__unset', array('name' => $name), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cb03;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7cb03;
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
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, '__clone', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        $this->valueHolder7cb03 = clone $this->valueHolder7cb03;
    }

    public function __sleep()
    {
        $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, '__sleep', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;

        return array('valueHolder7cb03');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8c347 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8c347;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8c347 && ($this->initializer8c347->__invoke($valueHolder7cb03, $this, 'initializeProxy', array(), $this->initializer8c347) || 1) && $this->valueHolder7cb03 = $valueHolder7cb03;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7cb03;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7cb03;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
