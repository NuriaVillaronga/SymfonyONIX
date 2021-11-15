<?php

namespace ContainerYGDGOL1;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        if ($this->valueHolder54536 === $returnValue = $this->valueHolder54536->paginate($target, $page, $limit, $options)) {
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

        $instance->initializere6523 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder54536) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder54536 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializere6523 && ($this->initializere6523->__invoke($valueHolder54536, $this, '__get', ['name' => $name], $this->initializere6523) || 1) && $this->valueHolder54536 = $valueHolder54536;

        if (isset(self::$publicProperties5e1b3[$name])) {
            return $this->valueHolder54536->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
