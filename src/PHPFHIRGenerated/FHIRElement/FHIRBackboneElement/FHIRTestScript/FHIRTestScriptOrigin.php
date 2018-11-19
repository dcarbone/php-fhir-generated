<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;

/**
 * A structured set of tests against a FHIR server implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptOrigin
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptOrigin extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TestScript.Origin';

    /**
     * Abstract name given to an origin server in this test script.  The name is provided as a number starting at 1.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $index = null;

    /**
     * The type of origin profile the test system supports.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $profile = null;

    /**
     * FHIRTestScriptOrigin Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['index'])) {
                $value = $data['index'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOrigin::__construct - Property \"index\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value)); 
                }
                $this->setIndex($value);
            }
            if (isset($data['profile'])) {
                $value = $data['profile'];
                if (is_array($value)) {
                    $value = new FHIRCoding($value);
                } 
                if (!($value instanceof FHIRCoding)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOrigin::__construct - Property \"profile\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($value)); 
                }
                $this->setProfile($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOrigin::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Abstract name given to an origin server in this test script.  The name is provided as a number starting at 1.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setIndex($index)
    {
        if (null === $index) {
            return $this; 
        }
        if (is_scalar($index)) {
            $index = new FHIRInteger($index);
        }
        if (!($index instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOrigin::setIndex - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($index)
            ));
        }
        $this->index = $index;
        return $this;
    }

    /**
     * Abstract name given to an origin server in this test script.  The name is provided as a number starting at 1.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * The type of origin profile the test system supports.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setProfile(FHIRCoding $profile = null)
    {
        if (null === $profile) {
            return $this; 
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * The type of origin profile the test system supports.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getProfile()
    {
        return $this->profile;
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
        if (null !== ($v = $this->getIndex())) {
            $a['index'] = $v;
        }
        if (null !== ($v = $this->getProfile())) {
            $a['profile'] = $v;
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
            $sxe = new \SimpleXMLElement('<TestScriptOrigin xmlns="http://hl7.org/fhir"></TestScriptOrigin>');
        }
        if (null !== ($v = $this->getIndex())) {
            $v->xmlSerialize(true, $sxe->addChild('index'));
        }
        if (null !== ($v = $this->getProfile())) {
            $v->xmlSerialize(true, $sxe->addChild('profile'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}