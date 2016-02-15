<?php

/**
 * Class Bucket
 */
class Bucket
{
    /**
     * @var
     */
    private $maxVolume;

    /**
     * @var
     */
    private $currentVolume;

    /**
     * @var
     */
    private $name;

    /**
     * Bucket constructor.
     * @param $maxVolume
     * @param $currentVolume
     * @param $name
     */
    public function __construct($maxVolume, $currentVolume, $name)
    {
        $this->maxVolume = $maxVolume;
        $this->currentVolume = $currentVolume;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCurrentVolume()
    {
        return $this->currentVolume;
    }

    /**
     * @return mixed
     */
    public function getMaxVolume()
    {
        return $this->maxVolume;
    }

    /**
     *
     */
    public function emptyDrain()
    {
        $this->currentVolume = 0;
    }

    /**
     * @return mixed
     */
    public function fill()
    {
        return $this->currentVolume = $this->maxVolume;
    }

    /**
     * @param $bucket
     */
    public function transfer($bucket)
    {
        $transferredVolume = $bucket->getCurrentVolume();
        if ($bucket->getCurrentVolume() > $this->getRemainingSpace()) {
            $transferredVolume = $this->getRemainingSpace();
        }
        $this->addLiquid($transferredVolume);
        $bucket->addLiquid(-$transferredVolume);
    }

    /**
     * @return mixed
     */
    public function getRemainingSpace()
    {
        return $this->maxVolume - $this->currentVolume;
    }

    /**
     * @param $volume
     */
    public function addLiquid($volume)
    {
        $this->currentVolume += $volume;
    }

}