<?php


namespace App\Helper;


class LoggerTrait
{
    /**
     * @var LoggerInterface|null
     */
    private $logger;

    /**
     * @required
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function logInfo(string $message, array $context = []){
        if ($this->logger) {
            $this->logger->info($message, $context);
        }
    }
}