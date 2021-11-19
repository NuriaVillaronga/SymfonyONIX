<?php

namespace ContainerX7y9Rat;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        if ($this->valueHolder9eb0c === $returnValue = $this->valueHolder9eb0c->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerf9950 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9eb0c) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder9eb0c = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerf9950 && ($this->initializerf9950->__invoke($valueHolder9eb0c, $this, '__get', ['name' => $name], $this->initializerf9950) || 1) && $this->valueHolder9eb0c = $valueHolder9eb0c;

        if (isset(self::$publicProperties61c57[$name])) {
            return $this->valueHolder9eb0c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
