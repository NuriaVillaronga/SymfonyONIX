<?php

namespace ContainerX7y9Rat;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9eb0c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf9950 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties61c57 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getConnection', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getMetadataFactory', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getExpressionBuilder', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'beginTransaction', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getCache', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'transactional', array('func' => $func), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'commit', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->commit();
    }

    public function rollback()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'rollback', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getClassMetadata', array('className' => $className), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'createQuery', array('dql' => $dql), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'createNamedQuery', array('name' => $name), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'createQueryBuilder', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'flush', array('entity' => $entity), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'clear', array('entityName' => $entityName), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->clear($entityName);
    }

    public function close()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'close', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->close();
    }

    public function persist($entity)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'persist', array('entity' => $entity), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'remove', array('entity' => $entity), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'refresh', array('entity' => $entity), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'detach', array('entity' => $entity), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'merge', array('entity' => $entity), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'contains', array('entity' => $entity), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getEventManager', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getConfiguration', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'isOpen', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getUnitOfWork', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getProxyFactory', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'initializeObject', array('obj' => $obj), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'getFilters', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'isFiltersStateClean', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'hasFilters', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return $this->valueHolder9eb0c->hasFilters();
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

        $instance->initializerf9950 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9eb0c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9eb0c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9eb0c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, '__get', ['name' => $name], $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        if (isset(self::$publicProperties61c57[$name])) {
            return $this->valueHolder9eb0c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9eb0c;

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

        $targetObject = $this->valueHolder9eb0c;
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
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9eb0c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9eb0c;
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
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, '__isset', array('name' => $name), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9eb0c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9eb0c;
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
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, '__unset', array('name' => $name), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9eb0c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9eb0c;
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
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, '__clone', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        $this->valueHolder9eb0c = clone $this->valueHolder9eb0c;
    }

    public function __sleep()
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, '__sleep', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        return array('valueHolder9eb0c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf9950 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf9950;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'initializeProxy', array(), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9eb0c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9eb0c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
