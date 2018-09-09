<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

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
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRConceptMapEquivalence;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 *
 * Class FHIRConceptMapTarget
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap
 */
class FHIRConceptMapTarget extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ConceptMap.Target';

    /**
     * Identity (code or path) or the element/item that the map refers to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * A description of status/issues in mapping that conveys additional information not represented in  the structured data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified element can be resolved, and it has the specified value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn
     */
    public $dependsOn = null;

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * The equivalence between the source and target concepts (counting for the dependencies and products). The equivalence is read from target to source (e.g. the target is 'wider' than the source).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConceptMapEquivalence
     */
    public $equivalence = null;

    /**
     * A set of additional outcomes from this mapping to other elements. To properly execute this mapping, the specified element must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn
     */
    public $product = null;

    /**
     * FHIRConceptMapTarget Constructor
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
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['dependsOn'])) {
                $this->setDependsOn($data['dependsOn']);
            }
            if (isset($data['display'])) {
                $this->setDisplay($data['display']);
            }
            if (isset($data['equivalence'])) {
                $this->setEquivalence($data['equivalence']);
            }
            if (isset($data['product'])) {
                $this->setProduct($data['product']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Identity (code or path) or the element/item that the map refers to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setCode($code)
    {
        if (null === $code) {
            return $this; 
        }
        if (is_scalar($code)) {
            $code = new FHIRCode($code);
        }
        if (!($code instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapTarget::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Identity (code or path) or the element/item that the map refers to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * A description of status/issues in mapping that conveys additional information not represented in  the structured data.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setComment($comment)
    {
        if (null === $comment) {
            return $this; 
        }
        if (is_scalar($comment)) {
            $comment = new FHIRString($comment);
        }
        if (!($comment instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapTarget::setComment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($comment)
            ));
        }
        $this->comment = $comment;
        return $this;
    }

    /**
     * A description of status/issues in mapping that conveys additional information not represented in  the structured data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified element can be resolved, and it has the specified value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn
     * @return $this
     */
    public function setDependsOn(FHIRConceptMapDependsOn $dependsOn = null)
    {
        if (null === $dependsOn) {
            return $this; 
        }
        $this->dependsOn = $dependsOn;
        return $this;
    }

    /**
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified element can be resolved, and it has the specified value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn
     */
    public function getDependsOn()
    {
        return $this->dependsOn;
    }


    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDisplay($display)
    {
        if (null === $display) {
            return $this; 
        }
        if (is_scalar($display)) {
            $display = new FHIRString($display);
        }
        if (!($display instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapTarget::setDisplay - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($display)
            ));
        }
        $this->display = $display;
        return $this;
    }

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }


    /**
     * The equivalence between the source and target concepts (counting for the dependencies and products). The equivalence is read from target to source (e.g. the target is 'wider' than the source).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRConceptMapEquivalence
     * @return $this
     */
    public function setEquivalence($equivalence)
    {
        if (null === $equivalence) {
            return $this; 
        }
        if (is_scalar($equivalence)) {
            $equivalence = new FHIRConceptMapEquivalence($equivalence);
        }
        if (!($equivalence instanceof FHIRConceptMapEquivalence)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapTarget::setEquivalence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRConceptMapEquivalence or appropriate scalar value, %s seen.',
                gettype($equivalence)
            ));
        }
        $this->equivalence = $equivalence;
        return $this;
    }

    /**
     * The equivalence between the source and target concepts (counting for the dependencies and products). The equivalence is read from target to source (e.g. the target is 'wider' than the source).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRConceptMapEquivalence
     */
    public function getEquivalence()
    {
        return $this->equivalence;
    }


    /**
     * A set of additional outcomes from this mapping to other elements. To properly execute this mapping, the specified element must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn
     * @return $this
     */
    public function setProduct(FHIRConceptMapDependsOn $product = null)
    {
        if (null === $product) {
            return $this; 
        }
        $this->product = $product;
        return $this;
    }

    /**
     * A set of additional outcomes from this mapping to other elements. To properly execute this mapping, the specified element must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn
     */
    public function getProduct()
    {
        return $this->product;
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
        if (null !== ($v = $this->getComment())) {
            $a['comment'] = $v;
        }
        if (null !== ($v = $this->getDependsOn())) {
            $a['dependsOn'] = $v;
        }
        if (null !== ($v = $this->getDisplay())) {
            $a['display'] = $v;
        }
        if (null !== ($v = $this->getEquivalence())) {
            $a['equivalence'] = $v;
        }
        if (null !== ($v = $this->getProduct())) {
            $a['product'] = $v;
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
            $sxe = new \SimpleXMLElement('<ConceptMapTarget xmlns="http://hl7.org/fhir"></ConceptMapTarget>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}