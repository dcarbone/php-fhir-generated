<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;

/**
 * A Terminology Capabilities documents a set of capabilities (behaviors) of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 *
 * Class FHIRTerminologyCapabilitiesCodeSystem
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities
 */
class FHIRTerminologyCapabilitiesCodeSystem extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TerminologyCapabilities.CodeSystem';

    /**
     * True if subsumption is supported for this version of the code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $subsumption = null;

    /**
     * URI for the Code System.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $uri = null;

    /**
     * For the code system, a list of versions that are supported by the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion
     */
    public $version = null;

    /**
     * FHIRTerminologyCapabilitiesCodeSystem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['subsumption'])) {
                $this->setSubsumption($data['subsumption']);
            }
            if (isset($data['uri'])) {
                $this->setUri($data['uri']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * True if subsumption is supported for this version of the code system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setSubsumption($subsumption)
    {
        if (null === $subsumption) {
            return $this; 
        }
        if (is_scalar($subsumption)) {
            $subsumption = new FHIRBoolean($subsumption);
        }
        if (!($subsumption instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTerminologyCapabilitiesCodeSystem::setSubsumption - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($subsumption)
            ));
        }
        $this->subsumption = $subsumption;
        return $this;
    }

    /**
     * True if subsumption is supported for this version of the code system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getSubsumption()
    {
        return $this->subsumption;
    }


    /**
     * URI for the Code System.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setUri($uri)
    {
        if (null === $uri) {
            return $this; 
        }
        if (is_scalar($uri)) {
            $uri = new FHIRCanonical($uri);
        }
        if (!($uri instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTerminologyCapabilitiesCodeSystem::setUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($uri)
            ));
        }
        $this->uri = $uri;
        return $this;
    }

    /**
     * URI for the Code System.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getUri()
    {
        return $this->uri;
    }


    /**
     * For the code system, a list of versions that are supported by the server.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion
     * @return $this
     */
    public function setVersion(FHIRTerminologyCapabilitiesVersion $version = null)
    {
        if (null === $version) {
            return $this; 
        }
        $this->version = $version;
        return $this;
    }

    /**
     * For the code system, a list of versions that are supported by the server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion
     */
    public function getVersion()
    {
        return $this->version;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getSubsumption())) {
            $a['subsumption'] = $v;
        }
        if (null !== ($v = $this->getUri())) {
            $a['uri'] = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            $a['version'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<TerminologyCapabilitiesCodeSystem xmlns="http://hl7.org/fhir"></TerminologyCapabilitiesCodeSystem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}