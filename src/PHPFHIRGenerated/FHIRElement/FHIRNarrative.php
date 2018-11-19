<?php

namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;
use PHPFHIRGenerated\PHPFHIRHelper;

/**
 * A human-readable formatted text, including images.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRNarrative
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRNarrative extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Narrative';

    /**
     * @var string
     */
    private $div = null;

    /**
     * The status of the narrative - whether it's entirely generated (from just the defined data or the extensions too), or whether a human authored it and it may contain additional data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRNarrativeStatus
     */
    private $status = null;

    /**
     * FHIRNarrative Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['div'])) {
                $value = $data['div'];
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRNarrativeStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRNarrativeStatus($value);
                }
                if (!($value instanceof FHIRNarrativeStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRNarrative::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRNarrativeStatus or data to construct type, saw ".gettype($value));
                }
                $this->setStatus($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRNarrative::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The status of the narrative - whether it's entirely generated (from just the defined data or the extensions too), or whether a human authored it and it may contain additional data.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRNarrativeStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRNarrativeStatus($status);
        }
        if (!($status instanceof FHIRNarrativeStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNarrative::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRNarrativeStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the narrative - whether it's entirely generated (from just the defined data or the extensions too), or whether a human authored it and it may contain additional data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRNarrativeStatus
     */
    public function getStatus()
    {
        return $this->status;
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
        if (null !== ($v = $this->getDiv())) {
            $a['div'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<Narrative xmlns="http://hl7.org/fhir"></Narrative>');
        }
        if (null !== ($v = $this->getDiv())) {
            $v->xmlSerialize(true, $sxe->addChild('div'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}