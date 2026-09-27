<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Encoding;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: September 27th, 2026 01:45+0000
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

class UnserializeConfig
{
    private int $_libxmlOpts = LIBXML_NONET | LIBXML_BIGLINES | LIBXML_PARSEHUGE | LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOXMLDECL;
    private int $_jsonDecodeMaxDepth = 512;
    private int $_jsonDecodeOpts = JSON_BIGINT_AS_STRING;

    public function __construct(null|int $libxmlOpts = null,
                                null|int $jsonDecodeMaxDepth = null,
                                null|int $jsonDecodeOpts = null)
    {
        if (null !== $libxmlOpts) {
            $this->setLibxmlOpts($libxmlOpts);
        }
        if (null !== $jsonDecodeMaxDepth) {
            $this->setJSONDecodeMaxDepth($jsonDecodeMaxDepth);
        }
        if (null !== $jsonDecodeOpts) {
            $this->setJSONDecodeOpts($jsonDecodeOpts);
        }
    }

    /**
     * The option mask to use when decoding serialied XML.
     *
     * @see https://www.php.net/manual/en/libxml.constants.php for details.
     */
    public function setLibxmlOpts(int $libxmlOpts): self
    {
        $this->_libxmlOpts = $libxmlOpts;
        return $this;
    }

    public function getLibxmlOpts(): int
    {
        return $this->_libxmlOpts;
    }

    /**
     * Maximum depth of nested
     */
    public function setJSONDecodeMaxDepth(int $jsonDecodeMaxDepth): self
    {
        $this->_jsonDecodeMaxDepth = $jsonDecodeMaxDepth;
        return $this;
    }

    public function getJSONDecodeMaxDepth(): int
    {
        return $this->_jsonDecodeMaxDepth;
    }

    /**
     * The option mask to use when decoding serialized JSON.
     *
     * @see https://www.php.net/manual/en/json.constants.php under the "json_decode" section for details.
     *
     * @param int $jsonDecodeOpts JSON decode options mask
     */
    public function setJSONDecodeOpts(int $jsonDecodeOpts): self
    {
        $this->_jsonDecodeOpts = $jsonDecodeOpts;
        return $this;
    }

    /**
     * Return the current option mask to use when decoding serialized JSON
     */
    public function getJSONDecodeOpts(): int
    {
        return $this->_jsonDecodeOpts;
    }
}
