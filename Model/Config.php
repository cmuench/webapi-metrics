<?php
declare(strict_types=1);

namespace FireGento\WebapiMetrics\Model;

use FireGento\WebapiMetrics\Api\ConfigInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Config implements ConfigInterface
{
    private const XML_METRICS_ENABLE = 'webapi/firegento_restapi_metrics/logging_enable';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;

    /**
     * Config constructor.
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return bool
     */
    public function isMetricLoggingEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(self::XML_METRICS_ENABLE);
    }
}
