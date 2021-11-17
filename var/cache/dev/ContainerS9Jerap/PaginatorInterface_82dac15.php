<?php

namespace ContainerS9Jerap;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        if ($this->valueHolderbe4be === $returnValue = $this->valueHolderbe4be->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer82f94 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderbe4be) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderbe4be = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer82f94 && ($this->initializer82f94->__invoke($valueHolderbe4be, $this, '__get', ['name' => $name], $this->initializer82f94) || 1) && $this->valueHolderbe4be = $valueHolderbe4be;

        if (isset(self::$publicPropertiesccfe9[$name])) {
            return $this->valueHolderbe4be->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
