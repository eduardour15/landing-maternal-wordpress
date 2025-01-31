<?php

namespace Aquila_Theme\Inc\Traits;

trait Singleton
{
    public function __construct()
    {

    }

    final public static function get_instance()
    {
        static $instance = [];
        $called_class = get_called_class();
        if(!isset($instance[$called_class])) {
            $instance[$called_class] = new static();

            do_action(sprintf('aquila_theme_singleton_init%s', $called_class));
        }
        return $instance[$called_class];
    }

    public function __clone()
    {

    }
}