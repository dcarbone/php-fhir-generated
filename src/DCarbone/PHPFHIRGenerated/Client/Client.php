<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Client;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 */


/**
 * Class Client
 *
 * Basic implementation of the ClientInterface interface.
 */
class Client implements ClientInterface
{
    private const _PARAM_FORMAT = '_format';
    private const _PARAM_SORT = '_sort';
    private const _PARAM_COUNT = '_count';

    private const _BASE_CURL_OPTS = [
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERAGENT => 'php-fhir client (build: January 31st, 2025 02:55+0000;)',
    ];

    protected Config $_config;

    /**
     * Client Constructor
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Client\Config $config Fully qualified address of FHIR server, or configuration object.
     */
    public function __construct(string|Config $config)
    {
        if (is_string($config)) {
            $config = new Config(address: $config);
        }
        $this->_config = $config;
    }

    public function getConfig(): Config
    {
        return $this->_config;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Client\Request $request
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function exec(Request $request): Response
    {
        $queryParams = array_merge($this->_config->getQueryParams(), $request->queryParams ?? []);

        $format = $request->format ?? $this->_config->getDefaultFormat();
        if (null !== $format) {
            $queryParams[self::_PARAM_FORMAT] = $format;
        }
        if (isset($request->sort)) {
            $queryParams[self::_PARAM_SORT] = $request->sort;
        }
        if (isset($request->count)) {
            $queryParams[self::_PARAM_COUNT] = $request->count;
        }

        $rc = new Response();

        $url = "{$this->_config->getAddress()}{$request->path}?" . http_build_query($queryParams, '', '&', PHP_QUERY_RFC3986);

        $curlOpts = self::_BASE_CURL_OPTS
            + [CURLOPT_CUSTOMREQUEST => $request->method]
            + array_merge($this->_config->getCurlOpts(), $request->options ?? []);

        $parseResponseHeaders = ($this->_config->getParseResponseHeaders()
            && (!isset($req->parseResponseHeaders) || $req->parseResponseHeaders))
            || (isset($req->parseResponseHeaders) && $req->parseResponseHeaders);

        if ($parseResponseHeaders) {
            $curlOpts[CURLOPT_HEADER] = 1;
            $curlOpts[CURLOPT_HEADERFUNCTION] = function($ch, string $line) use (&$rc): int {
                    return $rc->headers->addLine($line);
                };
        } else {
            $curlOpts[CURLOPT_HEADER] = 0;
        }

        $ch = curl_init($url);
        if (!curl_setopt_array($ch, $curlOpts)) {
            throw new \DomainException(sprintf(
                'Error setting curl opts for query "%s" with value: %s',
                $url,
                var_export($curlOpts, true),
            ));
        }

        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err = curl_error($ch);
        $errno = curl_errno($ch);
        curl_close($ch);

        $rc->method = $request->method;
        $rc->url = $url;
        $rc->code = $code;
        $rc->err = $err;
        $rc->errno = $errno;

        if ($parseResponseHeaders) {
            $rc->resp = substr($resp, $rc->headers->getLength());
        } else {
            $rc->resp = $resp;
        }

        return $rc;
    }
}
