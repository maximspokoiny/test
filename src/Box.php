<?php
declare(strict_types=1);


final class Box
{
    protected $height;
    protected $width;
    protected $length;

    protected static $instance;

    public function setHeight(int $height)
    {
         $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    private function __construct()
    {
    }

    public static function instance()
    {
        if(!self::$instance instanceof self) {
            self::$instance = new self;
        }

         return self::$instance;
    }

}


$box = Box::instance();
$box->setHeight(5);
