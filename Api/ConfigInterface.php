<?php
declare(strict_types=1);

namespace FireGento\WebapiMetrics\Api;

interface ConfigInterface
{
    /**
     * @return bool
     */
    public function isMetricLoggingEnabled(): bool;
}
