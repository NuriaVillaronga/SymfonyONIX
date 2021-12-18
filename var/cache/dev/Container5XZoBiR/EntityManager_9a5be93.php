<?php

namespace Container5XZoBiR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera4ce0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer545a0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties77ebf = [
        
    ];

    public function getConnection()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getConnection', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getMetadataFactory', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getExpressionBuilder', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'beginTransaction', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getCache', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'transactional', array('func' => $func), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'wrapInTransaction', array('func' => $func), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'commit', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->commit();
    }

    public function rollback()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'rollback', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getClassMetadata', array('className' => $className), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'createQuery', array('dql' => $dql), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'createNamedQuery', array('name' => $name), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'createQueryBuilder', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'flush', array('entity' => $entity), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'clear', array('entityName' => $entityName), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->clear($entityName);
    }

    public function close()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'close', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->close();
    }

    public function persist($entity)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'persist', array('entity' => $entity), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'remove', array('entity' => $entity), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'refresh', array('entity' => $entity), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'detach', array('entity' => $entity), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'merge', array('entity' => $entity), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'contains', array('entity' => $entity), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getEventManager', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getConfiguration', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'isOpen', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getUnitOfWork', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getProxyFactory', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'initializeObject', array('obj' => $obj), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'getFilters', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'isFiltersStateClean', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'hasFilters', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return $this->valueHoldera4ce0->hasFilters();
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

        $instance->initializer545a0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera4ce0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera4ce0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera4ce0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, '__get', ['name' => $name], $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        if (isset(self::$publicProperties77ebf[$name])) {
            return $this->valueHoldera4ce0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4ce0;

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

        $targetObject = $this->valueHoldera4ce0;
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
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4ce0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera4ce0;
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
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, '__isset', array('name' => $name), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4ce0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera4ce0;
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
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, '__unset', array('name' => $name), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4ce0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera4ce0;
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
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, '__clone', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        $this->valueHoldera4ce0 = clone $this->valueHoldera4ce0;
    }

    public function __sleep()
    {
        $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, '__sleep', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;

        return array('valueHoldera4ce0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer545a0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer545a0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer545a0 && ($this->initializer545a0->__invoke($valueHoldera4ce0, $this, 'initializeProxy', array(), $this->initializer545a0) || 1) && $this->valueHoldera4ce0 = $valueHoldera4ce0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera4ce0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera4ce0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
