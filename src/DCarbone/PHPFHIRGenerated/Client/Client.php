<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Client;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 30th, 2026 00:59+0000
 *
 * PHPFHIR Copyright:
 *
 * Copyright 2016-2026 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum;
use DCarbone\PHPFHIRGenerated\FHIRVersion;

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
        CURLOPT_USERAGENT => 'php-fhir client (build: October 30th, 2026 00:59+0000;)',
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

    public function exec(Request $request): Response
    {
        $queryParams = array_merge($this->_config->getDefaultQueryParams(), $request->queryParams ?? []);
        $format = $request->format ?? $this->_config->getDefaultFormat();
        $parseResponseHeaders = match(true) {
            isset($request->parseResponseHeaders) => $request->parseResponseHeaders,
            default => $this->_config->getParseResponseHeaders(),
        };

        $queryParams[self::_PARAM_FORMAT] = $format->value;
        if (isset($request->sort)) {
            $queryParams[self::_PARAM_SORT] = $request->sort;
        }
        if (isset($request->count)) {
            $queryParams[self::_PARAM_COUNT] = $request->count;
        }

        $url = "{$this->_config->getAddress()}{$request->path}?" . http_build_query($queryParams, '', '&', PHP_QUERY_RFC3986);

        $rc = new Response($request->method, $url, $format);

        $curlOpts = $this->_buildCurlOpts($request, $rc, $format, $parseResponseHeaders);

        $ch = curl_init($url);
        if (!curl_setopt_array($ch, $curlOpts)) {
            throw new \DomainException(sprintf(
                'curl_setopt_array returned false for "%s" with options: %s',
                $url,
                var_export($curlOpts, true),
            ));
        }

        $resp = curl_exec($ch);
        $rc->code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $rc->err = curl_error($ch);
        $rc->errno = curl_errno($ch);

        if (0 === $rc->errno) {
            if ($parseResponseHeaders) {
                $rc->resp = substr($resp, $rc->headers->getLength());
            } else {
                $rc->resp = $resp;
            }
        }

        return $rc;
    }

    /**
     * Builds the final curl options array for a request.
     *
     * Precedence, lowest to highest: built-in defaults, client config options, per-request options.
     * CURLOPT_RETURNTRANSFER is required by exec() and is always forced to true.
     * CURLOPT_HTTPHEADER is merged by header name rather than replaced wholesale.
     */
    protected function _buildCurlOpts(Request $request,
                                      Response $rc,
                                      SerializeFormatEnum $format,
                                      bool $parseResponseHeaders): array
    {
        $configOpts = $this->_config->getCurlOpts();
        $requestOpts = $request->clientOptions ?? [];

        $curlOpts = array_replace(self::_BASE_CURL_OPTS, $configOpts, $requestOpts);
        $curlOpts[CURLOPT_RETURNTRANSFER] = true;

        $curlOpts[CURLOPT_HTTPHEADER] = $this->_mergeHttpHeaders(
            $configOpts[CURLOPT_HTTPHEADER] ?? [],
            $requestOpts[CURLOPT_HTTPHEADER] ?? [],
        );

        if ($parseResponseHeaders) {
            $rc->headers = new ResponseHeaders();
            $curlOpts[CURLOPT_HEADER] = 1;
            $curlOpts[CURLOPT_HEADERFUNCTION] = function($ch, string $line) use (&$rc): int {
                    return $rc->headers->addLine($line);
                };
        }

        if (HTTPMethodEnum::GET !== $request->method) {
            $curlOpts[CURLOPT_CUSTOMREQUEST] = $request->method->value;
            $curlOpts[CURLOPT_HTTPHEADER][] = "X-HTTP-Method-Override: {$request->method->value}";
        }

        $curlOpts[CURLOPT_HTTPHEADER][] = $this->_buildAcceptHeader($request, $format);

        if (isset($request->resource)) {
            $curlOpts[CURLOPT_HTTPHEADER][] = $this->_buildContentTypeHeader($request, $format);
        }

        return $curlOpts;
    }

    /**
     * Merges config-level and request-level CURLOPT_HTTPHEADER lists.
     *
     * Headers are grouped by case-insensitive name within each layer, preserving every occurrence and their
     * relative order.  A request group replaces the config group of the same name (in the config group's original
     * position); config groups with no request counterpart are retained, and request-only groups are appended.
     *
     * @param string[] $configHeaders
     * @param string[] $requestHeaders
     * @return string[]
     */
    protected function _mergeHttpHeaders(array $configHeaders, array $requestHeaders): array
    {
        $groups = self::_groupHttpHeaders($configHeaders, 'c');
        foreach (self::_groupHttpHeaders($requestHeaders, 'r') as $name => $headers) {
            $groups[$name] = $headers;
        }
        return array_merge([], ...array_values($groups));
    }

    /**
     * Groups a header list by lower-cased header name, preserving occurrence order.  Headers with no
     * discernible name are kept in their own single-entry groups.
     *
     * @param string[] $headers
     * @param string $unnamedPrefix Distinguishes placeholder keys for nameless headers between layers.
     * @return array<string, string[]>
     */
    private static function _groupHttpHeaders(array $headers, string $unnamedPrefix): array
    {
        $groups = [];
        foreach ($headers as $i => $header) {
            $header = (string)$header;
            $name = self::_httpHeaderName($header) ?? "\0{$unnamedPrefix}{$i}";
            $groups[$name][] = $header;
        }
        return $groups;
    }

    /**
     * Extracts the lower-cased header name from a curl-style header line, or null if there is none.
     *
     * Supports the curl "Name:" (unset header) and "Name;" (send header with empty value) forms.
     */
    private static function _httpHeaderName(string $header): null|string
    {
        $len = strcspn($header, ':;');
        if (0 === $len || $len === strlen($header)) {
            return null;
        }
        return strtolower(trim(substr($header, 0, $len)));
    }

    protected function _buildAcceptHeader(Request $request,
                                          SerializeFormatEnum $format): string
    {
        $ver = match(true) {
            isset($request->version) => $request->version,
            isset($request->resource) => $request->resource->_getFHIRVersion(),
            default => null,
        };
        if (null === $ver) {
            return "Accept: application/{$format->value}+json, application/json+{$format->value}";
        } else if ($ver->getFHIRVersionInteger() < FHIRVersion::STU3_MIN_VERSION_INTEGER) {
            return "Accept: application/{$format->value}+fhir; fhirVersion={$ver->getFHIRShortVersion()}";
        } else {
            return "Accept: application/fhir+{$format->value}; fhirVersion={$ver->getFHIRShortVersion()}";
        }
    }

    protected function _buildContentTypeHeader(Request $request,
                                               SerializeFormatEnum $format): string
    {
        $ver = $request->resource->_getFHIRVersion();
        if (HTTPMethodEnum::PATCH === $request->method) {
            return "Content-Type: application/{$format->value}-patch+{$format->value}; fhirVersion={$ver->getFHIRShortVersion()}";
        } else if ($ver->getFHIRVersionInteger() < FHIRVersion::STU3_MIN_VERSION_INTEGER) {
            return "Content-Type: application/{$format->value}+fhir; fhirVersion={$ver->getFHIRShortVersion()}";
        } else {
            return "Content-Type: application/fhir+{$format->value}; fhirVersion={$ver->getFHIRShortVersion()}";
        }
    }
}
