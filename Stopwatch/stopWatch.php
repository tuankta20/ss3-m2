<?php
class StopWatch
{
    private $startTime;
    private $endTime;
    public function get_startTime()
    {
        return $this->startTime;
    }
    public function get_endTime()
    {
        return $this->endTime;
    }
    public function __construct()
    {
        $this->startTime;
    }
    public function start()
    {
        $this->startTime = microtime(true);
    }
    public function stop()
    {
        $this->endTime = microtime(true);
    }
    public function getElapsedTime()
    {
        return ($this->stop() - $this->start());
    }
}
