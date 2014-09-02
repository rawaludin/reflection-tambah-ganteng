<?php
class Container {
    public static function build($class) {
        $reflector = new ReflectionClass($class);
        $constructor = $reflector->getConstructor();

        if (is_null($constructor))
        {
            return new $class;
        }

        $dependencies = $constructor->getParameters();

        $args = [];
        foreach ($dependencies as $dependency) {
            array_push($args, self::build($dependency->getClass()->name));
        }

        return $reflector->newInstanceArgs($args);
    }
}
