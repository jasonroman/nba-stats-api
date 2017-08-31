<?php

namespace JasonRoman\NbaApi\Request;

use JasonRoman\NbaApi\Client\AbstractDataClient;
use JasonRoman\NbaApi\Response\ResponseType;

/**
 * Base class which any Data API-specific requests must extend from.
 */
abstract class AbstractDataRequest extends AbstractNbaApiRequest
{
    const BASE_URI = AbstractDataClient::BASE_URI;
    const CLIENT   = AbstractDataClient::class;

    // default response type for most requests - override for non-JSON requests
    const DEFAULT_RESPONSE_TYPE = ResponseType::JSON;
}