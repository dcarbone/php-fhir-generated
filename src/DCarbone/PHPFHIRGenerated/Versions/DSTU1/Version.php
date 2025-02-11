<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */
use DCarbone\PHPFHIRGenerated\Client\ClientInterface;
use DCarbone\PHPFHIRGenerated\Versions\VersionConfig;
use DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;
use DCarbone\PHPFHIRGenerated\Versions\VersionTypeMapInterface;

class Version implements VersionInterface
{
    public const NAME = 'DSTU1';
    public const SOURCE_VERSION = 'v0.0.82';
    public const SOURCE_GENERATION_DATE = 'Tue, Sep 30, 2014 18:08+1000';

    private const _GENERATED_CONFIG = [];

    /** @var \DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface */
    private VersionConfigInterface $_config;

    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap */
    private static VersionTypeMapInterface $_typeMap;

    /**
     * Version Constructor
     * @param null|array|\DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface $config
     */
    public function __construct(null|array|VersionConfigInterface $config = null)
    {
        if (!is_object($config)) {
            $config = new VersionConfig(array_merge(self::_GENERATED_CONFIG, (array)$config));
        } else if (!($config instanceof VersionConfig)) {
            throw new \InvalidArgumentException(sprintf(
                '$config must be an instance of \\%s, %s given',
                VersionConfig::class,
                get_class($config)
            ));
        }
        $this->_config = $config;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }

    /**
     * @return string
     */
    public function getSourceVersion(): string
    {
        return self::SOURCE_VERSION;
    }

    /**
     * @return string
     */
    public function getSourceGenerationDate(): string
    {
        return self::SOURCE_GENERATION_DATE;
    }

    /**
     * @return \DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface
     */
    public function getConfig(): VersionConfigInterface
    {
        return $this->_config;
    }

    /**
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap
     */
    public function getTypeMap(): VersionTypeMapInterface
    {
        if (!isset(self::$_typeMap)) {
            self::$_typeMap = new VersionTypeMap();
        }
        return self::$_typeMap;
    }
}
