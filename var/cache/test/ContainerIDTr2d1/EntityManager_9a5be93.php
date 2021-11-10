<?php

namespace ContainerIDTr2d1;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere13fd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerba972 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3378a = [
        
    ];

    public function getConnection()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getConnection', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getMetadataFactory', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getExpressionBuilder', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'beginTransaction', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getCache', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getCache();
    }

    public function transactional($func)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'transactional', array('func' => $func), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'wrapInTransaction', array('func' => $func), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'commit', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->commit();
    }

    public function rollback()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'rollback', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getClassMetadata', array('className' => $className), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'createQuery', array('dql' => $dql), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'createNamedQuery', array('name' => $name), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'createQueryBuilder', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'flush', array('entity' => $entity), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'clear', array('entityName' => $entityName), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->clear($entityName);
    }

    public function close()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'close', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->close();
    }

    public function persist($entity)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'persist', array('entity' => $entity), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'remove', array('entity' => $entity), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'refresh', array('entity' => $entity), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'detach', array('entity' => $entity), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'merge', array('entity' => $entity), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getRepository', array('entityName' => $entityName), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'contains', array('entity' => $entity), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getEventManager', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getConfiguration', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'isOpen', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getUnitOfWork', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getProxyFactory', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'initializeObject', array('obj' => $obj), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'getFilters', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'isFiltersStateClean', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'hasFilters', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return $this->valueHoldere13fd->hasFilters();
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

        $instance->initializerba972 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere13fd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere13fd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere13fd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, '__get', ['name' => $name], $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        if (isset(self::$publicProperties3378a[$name])) {
            return $this->valueHoldere13fd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere13fd;

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

        $targetObject = $this->valueHoldere13fd;
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
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere13fd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere13fd;
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
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, '__isset', array('name' => $name), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere13fd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere13fd;
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
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, '__unset', array('name' => $name), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere13fd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere13fd;
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
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, '__clone', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        $this->valueHoldere13fd = clone $this->valueHoldere13fd;
    }

    public function __sleep()
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, '__sleep', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        return array('valueHoldere13fd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerba972 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerba972;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'initializeProxy', array(), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere13fd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere13fd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
