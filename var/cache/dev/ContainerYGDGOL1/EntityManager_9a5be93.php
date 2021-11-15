<?php

namespace ContainerYGDGOL1;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder54536 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere6523 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5e1b3 = [
        
    ];

    public function getConnection()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getConnection', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getMetadataFactory', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getExpressionBuilder', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'beginTransaction', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getCache', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getCache();
    }

    public function transactional($func)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'transactional', array('func' => $func), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'wrapInTransaction', array('func' => $func), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'commit', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->commit();
    }

    public function rollback()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'rollback', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getClassMetadata', array('className' => $className), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'createQuery', array('dql' => $dql), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'createNamedQuery', array('name' => $name), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'createQueryBuilder', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'flush', array('entity' => $entity), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'clear', array('entityName' => $entityName), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->clear($entityName);
    }

    public function close()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'close', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->close();
    }

    public function persist($entity)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'persist', array('entity' => $entity), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'remove', array('entity' => $entity), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'refresh', array('entity' => $entity), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'detach', array('entity' => $entity), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'merge', array('entity' => $entity), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getRepository', array('entityName' => $entityName), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'contains', array('entity' => $entity), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getEventManager', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getConfiguration', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'isOpen', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getUnitOfWork', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getProxyFactory', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'initializeObject', array('obj' => $obj), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'getFilters', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'isFiltersStateClean', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'hasFilters', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return $this->valueHolder54536->hasFilters();
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

        $instance->initializere6523 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder54536) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder54536 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder54536->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, '__get', ['name' => $name], $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        if (isset(self::$publicProperties5e1b3[$name])) {
            return $this->valueHolder54536->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54536;

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

        $targetObject = $this->valueHolder54536;
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
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54536;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder54536;
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
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, '__isset', array('name' => $name), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54536;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder54536;
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
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, '__unset', array('name' => $name), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54536;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder54536;
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
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, '__clone', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        $this->valueHolder54536 = clone $this->valueHolder54536;
    }

    public function __sleep()
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, '__sleep', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        return array('valueHolder54536');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere6523 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere6523;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'initializeProxy', array(), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54536;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54536;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
