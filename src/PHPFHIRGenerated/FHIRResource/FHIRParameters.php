<?php

namespace PHPFHIRGenerated\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter;
use PHPFHIRGenerated\FHIRResource;

/**
 * This special resource type is used to represent an operation request and response (operations.html). It has no other use, and there is no RESTful endpoint associated with it.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRParameters
 * @package PHPFHIRGenerated\FHIRResource
 */
class FHIRParameters extends FHIRResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Parameters';

    /**
     * A parameter passed to or received from the operation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter[]
     */
    private $parameter = [];

    /**
     * FHIRParameters Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['parameter'])) {
                $value = $data['parameter'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRParametersParameter($v);
                        } 
                        if (!($v instanceof FHIRParametersParameter)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRParameters::__construct - Collection field \"parameter\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter or data to construct type, saw ".gettype($v));
                        }
                        $this->addParameter($v);
                    }
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRParameters::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * A parameter passed to or received from the operation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter
     * @return $this
     */
    public function addParameter(FHIRParametersParameter $parameter = null)
    {
        if (null === $parameter) {
            return $this; 
        }
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * A parameter passed to or received from the operation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (0 < count($values = $this->getParameter())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['parameter'] = $vs;
            }
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
            $sxe = new \SimpleXMLElement('<Parameters xmlns="http://hl7.org/fhir"></Parameters>');
        }
        if (0 < count($values = $this->getParameter())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('parameter'));
                }
            }
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}