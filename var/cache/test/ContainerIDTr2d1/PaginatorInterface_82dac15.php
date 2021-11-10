<?php

namespace ContainerIDTr2d1;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        if ($this->valueHoldere13fd === $returnValue = $this->valueHoldere13fd->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerba972 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere13fd) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldere13fd = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerba972 && ($this->initializerba972->__invoke($valueHoldere13fd, $this, '__get', ['name' => $name], $this->initializerba972) || 1) && $this->valueHoldere13fd = $valueHoldere13fd;

        if (isset(self::$publicProperties3378a[$name])) {
            return $this->valueHoldere13fd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
