<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 05.02.16
 * Time: 13:35
 */
abstract class Shape
{
    /**
     * @var double
     */
    protected $height;

    /**
     * @var double
     */
    protected $width;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    private $image;

    /**
     * Shape constructor.
     * @param double $height
     * @param double $width
     * @param string $image
     */
    public function __construct($height, $width, $image)
    {
        $this->height = $height;
        $this->width = $width;
        $this->image = $image;
    }

    public function resize($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    /**
     *
     */
    public function display()
    {
        return sprintf('<img src="%s" width="%d" height="%d">',
            $this->image,
            $this->height,
            $this->width);
    }

    abstract public function getArea();
}