<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition;

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
use PHPFHIRGenerated\FHIRElement\FHIRDocumentRelationshipType;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * A set of healthcare-related information that is assembled together into a single logical package that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. A Composition defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document. Rather, the Composition must be the first entry in a Bundle where Bundle.type=document, and any other resources referenced from Composition must be included as subsequent entries in the Bundle (for example Patient, Practitioner, Encounter, etc.).
 *
 * Class FHIRCompositionRelatesTo
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition
 */
class FHIRCompositionRelatesTo extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Composition.RelatesTo';

    /**
     * The type of relationship that this composition has with anther composition or document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDocumentRelationshipType
     */
    public $code = null;

    /**
     * The target composition/document of this relationship.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $targetIdentifier = null;

    /**
     * The target composition/document of this relationship.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $targetReference = null;

    /**
     * FHIRCompositionRelatesTo Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['targetIdentifier'])) {
                $this->setTargetIdentifier($data['targetIdentifier']);
            }
            if (isset($data['targetReference'])) {
                $this->setTargetReference($data['targetReference']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionRelatesTo::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The type of relationship that this composition has with anther composition or document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDocumentRelationshipType
     * @return $this
     */
    public function setCode($code)
    {
        if (null === $code) {
            return $this; 
        }
        if (is_scalar($code)) {
            $code = new FHIRDocumentRelationshipType($code);
        }
        if (!($code instanceof FHIRDocumentRelationshipType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCompositionRelatesTo::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDocumentRelationshipType or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * The type of relationship that this composition has with anther composition or document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDocumentRelationshipType
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * The target composition/document of this relationship.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setTargetIdentifier(FHIRIdentifier $targetIdentifier = null)
    {
        if (null === $targetIdentifier) {
            return $this; 
        }
        $this->targetIdentifier = $targetIdentifier;
        return $this;
    }

    /**
     * The target composition/document of this relationship.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getTargetIdentifier()
    {
        return $this->targetIdentifier;
    }


    /**
     * The target composition/document of this relationship.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTargetReference(FHIRReference $targetReference = null)
    {
        if (null === $targetReference) {
            return $this; 
        }
        $this->targetReference = $targetReference;
        return $this;
    }

    /**
     * The target composition/document of this relationship.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTargetReference()
    {
        return $this->targetReference;
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
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getTargetIdentifier())) {
            $a['targetIdentifier'] = $v;
        }
        if (null !== ($v = $this->getTargetReference())) {
            $a['targetReference'] = $v;
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
            $sxe = new \SimpleXMLElement('<CompositionRelatesTo xmlns="http://hl7.org/fhir"></CompositionRelatesTo>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}