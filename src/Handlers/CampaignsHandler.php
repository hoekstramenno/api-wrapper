<?php
namespace Czim\HelloDialog\Handlers;

use Czim\HelloDialog\Contracts\campaigns\CampaignsInterface;
use Czim\HelloDialog\HelloDialogHandler;
use Exception;
use Log;
use Psr\Log\LoggerInterface;
use UnexpectedValueException;

class CampaignsHandler extends HelloDialogHandler implements CampaignsInterface
{
    const API_CAMPAIGNS      = 'campaigns';

    /**
     * @param string|int $campaignId
     * @return array|object    Campaign object
     * @throws Exception
     */
    public function getCampaign($campaignId)
    {
        // TODO: Implement getCampaign() method.
    }

    /**
     * @return array|object    Campaigns array
     * @throws Exception
     */
    public function getCampaigns()
    {
        $call = $this->getApiInstance(static::API_CAMPAIGNS);

        return $call->get() ?: [];
    }

}