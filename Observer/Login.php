<?php

class Login implements SplSubject
{
    const LOGIN_USER_UNKNOWN = 1;
    const LOGIN_WRONG_PASS = 2;
    const LOGIN_ACCESS = 3;

    private $observers = [];
    private $status = [];
    private $isValid = false;
    private $storage;

    public function __construct()
    {
        $this->storage = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->storage->attach($observer);
//        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        $this->storage->detach($observer);
//        $this->observers = array_filter($this->observers, function ($a) use ($observer) {
//            return (! ($a === $observer));
//        });
    }

    public function notify()
    {
        foreach ($this->storage as $observer) {
            $observer->update($this);
        }

//        foreach ($this->observers as $observer) {
//            $observer->update($this);
//        }
    }

    public function handleLogin($user, $pass, $ip)
    {
        switch (rand(1, 3)) {
            case 1:
                $this->setStatus(self::LOGIN_ACCESS, $pass, $ip);
                $this->isValid = true;
                break;
            case 2:
                $this->setStatus(self::LOGIN_WRONG_PASS, $pass, $ip);
                $this->isValid = false;
                break;
            case 3:
                $this->setStatus(self::LOGIN_USER_UNKNOWN, $pass, $ip);
                $this->isValid = false;
                break;
        }

        $this->notify();
        return $this->isValid;
    }

    public function setStatus($user, $pass, $ip)
    {
        $this->status = [$user, $pass, $ip];
    }

    public function getStatus()
    {
        return $this->status;
    }
}