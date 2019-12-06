<?php

namespace CloudyCity\KuaishouMarketingSDK\Kernel\Traits;

use CloudyCity\KuaishouMarketingSDK\Kernel\Contracts\Arrayable;
use CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException;
use CloudyCity\KuaishouMarketingSDK\Kernel\Http\Response;
use CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection;
use Psr\Http\Message\ResponseInterface;

trait ResponseCastable
{
    /**
     * @var string
     */
    protected $responseType;

    /**
     * @return string
     */
    protected function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * @param string $responseType
     */
    protected function setResponseType($responseType)
    {
        $this->responseType = $responseType;
    }

    /**
     * @param ResponseInterface $response
     * @param string            $type
     *
     * @throws InvalidArgumentException
     *
     * @return array|Response|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|ResponseInterface
     */
    protected function castResponseToType(ResponseInterface $response, $type = 'array')
    {
        $response = Response::buildFromPsrResponse($response);
        $response->getBody()->rewind();

        switch ($type) {
            case 'collection':
                return $response->toCollection();
            case 'array':
                return $response->toArray();
            case 'object':
                return $response->toObject();
            case 'raw':
                return $response;
            default:
                if (!is_subclass_of($type, Arrayable::class)) {
                    throw new InvalidArgumentException(sprintf(
                        '"$responseType" classname must be an instanceof %s',
                        Arrayable::class
                    ));
                }

                return new $type($response);
        }
    }

    /**
     * @param mixed  $response
     * @param string $type
     *
     * @throws InvalidArgumentException
     *
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    protected function detectAndCastResponseToType($response, $type = 'array')
    {
        switch (true) {
            case $response instanceof ResponseInterface:
                $response = Response::buildFromPsrResponse($response);

                break;
            case $response instanceof Arrayable:
                $response = new Response(200, [], json_encode($response->toArray()));

                break;
            case ($response instanceof Collection) || is_array($response) || is_object($response):
                $response = new Response(200, [], json_encode($response));

                break;
            case is_scalar($response):
                $response = new Response(200, [], (string) $response);

                break;
            default:
                throw new InvalidArgumentException(sprintf('Unsupported response type "%s"', gettype($response)));
        }

        return $this->castResponseToType($response, $type);
    }
}
