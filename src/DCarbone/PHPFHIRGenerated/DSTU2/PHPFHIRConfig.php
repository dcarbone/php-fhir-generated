<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU2;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

/**
 * Class PHPFHIRConfig
 * @package \DCarbone\PHPFHIRGenerated\DSTU2
 */
class PHPFHIRConfig implements \JsonSerializable
{
    /** @var bool */
    private bool $registerAutoloader = false;

    /** @var int */
    private int $libxmlOpts;

    /** @var string */
    private string $rootXmlns;

    /** @var bool */
    private bool $overrideSourceXmlns;

    /**
     * PHPFHIRConfig Constructor
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        foreach(PHPFHIRConfigKeyEnum::cases() as $k) {
            if (isset($config[$k->value]) || array_key_exists($k->value, $config)) {
                $this->setKey($k->value, $config[$k->value]);
            }
        }
    }

    /**
     * Set arbitrary key on this config
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfigKeyEnum|string $key
     * @param mixed $value
     * @return static
     */
    public function setKey(PHPFHIRConfigKeyEnum|string $key, mixed $value): self
    {
        if (!is_string($key)) {
            $key = $key->value;
        }
        $this->{'set'.$key}($value);
        return $this;
    }

    /**
     * @param bool $registerAutoloader
     * @return static
     */
    public function setRegisterAutoloader(bool $registerAutoloader): self
    {
        $this->registerAutoloader = $registerAutoloader;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRegisterAutoloader(): bool
    {
        return $this->registerAutoloader;
    }

    /**
     * Sets the option flags to provide to libxml when unserializing XML
     *
     * @param int $libxmlOpts
     * @return static
     */
    public function setLibxmlOpts(int $libxmlOpts): self
    {
        $this->libxmlOpts = $libxmlOpts;
        return $this;
    }

    /**
     * Returns set libxml option flags
     *
     * @return int
     */
    public function getLibxmlOpts(): int
    {
        return $this->libxmlOpts ?? PHPFHIRConstants::DEFAULT_LIBXML_OPTS;
    }

    /**
     * Default root xmlns to use.
     *
     * @param string $rootXmlns
     * @return static
     */
    public function setRootXmlns(string $rootXmlns): self
    {
        $this->rootXmlns = $rootXmlns;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRootXmlns(): null|string
    {
        return $this->rootXmlns ?? null;
    }

    /**
     * If true, overrides the xmlns entry found at the root of a source document, if there was one.
     *
     * @param bool $overrideSourceXmlns
     * @return static
     */
    public function setOverrideSourceXmlns(bool $overrideSourceXmlns): self
    {
        $this->overrideSourceXmlns = $overrideSourceXmlns;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOverrideSourceXmlns(): bool
    {
        return $this->overrideSourceXmlns ?? false;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): \stdClass
    {
        $out = new \stdClass();
        foreach(PHPFHIRConfigKeyEnum::cases() as $key) {
            $out->{$k} = $this->{$key->getter()}();
        }
        return $out;
    }
}
