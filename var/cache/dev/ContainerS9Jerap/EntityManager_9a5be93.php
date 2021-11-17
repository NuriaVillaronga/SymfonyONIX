<?php

namespace ContainerS9Jerap;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbe4be = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer82f94 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesccfe9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getConnection', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getMetadataFactory', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getExpressionBuilder', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'beginTransaction', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getCache', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getCache();
    }

    public function transactional($func)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'transactional', array('func' => $func), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'wrapInTransaction', array('func' => $func), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'commit', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->commit();
    }

    public function rollback()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'rollback', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getClassMetadata', array('className' => $className), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'createQuery', array('dql' => $dql), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'createNamedQuery', array('name' => $name), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'createQueryBuilder', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'flush', array('entity' => $entity), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'clear', array('entityName' => $entityName), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->clear($entityName);
    }

    public function close()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'close', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->close();
    }

    public function persist($entity)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'persist', array('entity' => $entity), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'remove', array('entity' => $entity), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'refresh', array('entity' => $entity), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'detach', array('entity' => $entity), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'merge', array('entity' => $entity), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getRepository', array('entityName' => $entityName), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'contains', array('entity' => $entity), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getEventManager', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getConfiguration', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'isOpen', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getUnitOfWork', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getProxyFactory', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'initializeObject', array('obj' => $obj), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'getFilters', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'isFiltersStateClean', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'hasFilters', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return $this->valueHolderbe4be->hasFilters();
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

        $instance->initializer82f94 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbe4be) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbe4be = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbe4be->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, '__get', ['name' => $name], $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        if (isset(self::$publicPropertiesccfe9[$name])) {
            return $this->valueHolderbe4be->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe4be;

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

        $targetObject = $this->valueHolderbe4be;
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
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe4be;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbe4be;
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
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, '__isset', array('name' => $name), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe4be;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbe4be;
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
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, '__unset', array('name' => $name), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe4be;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbe4be;
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
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, '__clone', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        $this->valueHolderbe4be = clone $this->valueHolderbe4be;
    }

    public function __sleep()
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, '__sleep', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        return array('valueHolderbe4be');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82f94 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82f94;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'initializeProxy', array(), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbe4be;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbe4be;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
