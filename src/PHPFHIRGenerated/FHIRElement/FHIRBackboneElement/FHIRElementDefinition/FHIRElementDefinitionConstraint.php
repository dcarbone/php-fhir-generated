<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition;

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
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRConstraintSeverity;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionConstraint
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition
 */
class FHIRElementDefinitionConstraint extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ElementDefinition.Constraint';

    /**
     * A [FHIRPath](fhirpath.html) expression of constraint that can be executed to see if this constraint is met.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $expression = null;

    /**
     * Text that can be used to describe the constraint in messages identifying that the constraint has been violated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $human = null;

    /**
     * Allows identification of which elements have their cardinalities impacted by the constraint.  Will not be referenced for constraints that do not affect cardinality.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $key = null;

    /**
     * Description of why this constraint is necessary or appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requirements = null;

    /**
     * Identifies the impact constraint violation has on the conformance of the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConstraintSeverity
     */
    public $severity = null;

    /**
     * A reference to the original source of the constraint, for traceability purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $source = null;

    /**
     * An XPath expression of constraint that can be executed to see if this constraint is met.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $xpath = null;

    /**
     * FHIRElementDefinitionConstraint Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['expression'])) {
                $this->setExpression($data['expression']);
            }
            if (isset($data['human'])) {
                $this->setHuman($data['human']);
            }
            if (isset($data['key'])) {
                $this->setKey($data['key']);
            }
            if (isset($data['requirements'])) {
                $this->setRequirements($data['requirements']);
            }
            if (isset($data['severity'])) {
                $this->setSeverity($data['severity']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['xpath'])) {
                $this->setXpath($data['xpath']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A [FHIRPath](fhirpath.html) expression of constraint that can be executed to see if this constraint is met.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setExpression($expression)
    {
        if (null === $expression) {
            return $this; 
        }
        if (is_scalar($expression)) {
            $expression = new FHIRString($expression);
        }
        if (!($expression instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionConstraint::setExpression - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($expression)
            ));
        }
        $this->expression = $expression;
        return $this;
    }

    /**
     * A [FHIRPath](fhirpath.html) expression of constraint that can be executed to see if this constraint is met.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExpression()
    {
        return $this->expression;
    }


    /**
     * Text that can be used to describe the constraint in messages identifying that the constraint has been violated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setHuman($human)
    {
        if (null === $human) {
            return $this; 
        }
        if (is_scalar($human)) {
            $human = new FHIRString($human);
        }
        if (!($human instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionConstraint::setHuman - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($human)
            ));
        }
        $this->human = $human;
        return $this;
    }

    /**
     * Text that can be used to describe the constraint in messages identifying that the constraint has been violated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getHuman()
    {
        return $this->human;
    }


    /**
     * Allows identification of which elements have their cardinalities impacted by the constraint.  Will not be referenced for constraints that do not affect cardinality.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setKey($key)
    {
        if (null === $key) {
            return $this; 
        }
        if (is_scalar($key)) {
            $key = new FHIRId($key);
        }
        if (!($key instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionConstraint::setKey - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($key)
            ));
        }
        $this->key = $key;
        return $this;
    }

    /**
     * Allows identification of which elements have their cardinalities impacted by the constraint.  Will not be referenced for constraints that do not affect cardinality.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getKey()
    {
        return $this->key;
    }


    /**
     * Description of why this constraint is necessary or appropriate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setRequirements($requirements)
    {
        if (null === $requirements) {
            return $this; 
        }
        if (is_scalar($requirements)) {
            $requirements = new FHIRString($requirements);
        }
        if (!($requirements instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionConstraint::setRequirements - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($requirements)
            ));
        }
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * Description of why this constraint is necessary or appropriate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }


    /**
     * Identifies the impact constraint violation has on the conformance of the instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRConstraintSeverity
     * @return $this
     */
    public function setSeverity($severity)
    {
        if (null === $severity) {
            return $this; 
        }
        if (is_scalar($severity)) {
            $severity = new FHIRConstraintSeverity($severity);
        }
        if (!($severity instanceof FHIRConstraintSeverity)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionConstraint::setSeverity - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRConstraintSeverity or appropriate scalar value, %s seen.',
                gettype($severity)
            ));
        }
        $this->severity = $severity;
        return $this;
    }

    /**
     * Identifies the impact constraint violation has on the conformance of the instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRConstraintSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }


    /**
     * A reference to the original source of the constraint, for traceability purposes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setSource($source)
    {
        if (null === $source) {
            return $this; 
        }
        if (is_scalar($source)) {
            $source = new FHIRCanonical($source);
        }
        if (!($source instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionConstraint::setSource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($source)
            ));
        }
        $this->source = $source;
        return $this;
    }

    /**
     * A reference to the original source of the constraint, for traceability purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getSource()
    {
        return $this->source;
    }


    /**
     * An XPath expression of constraint that can be executed to see if this constraint is met.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setXpath($xpath)
    {
        if (null === $xpath) {
            return $this; 
        }
        if (is_scalar($xpath)) {
            $xpath = new FHIRString($xpath);
        }
        if (!($xpath instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionConstraint::setXpath - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($xpath)
            ));
        }
        $this->xpath = $xpath;
        return $this;
    }

    /**
     * An XPath expression of constraint that can be executed to see if this constraint is met.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getXpath()
    {
        return $this->xpath;
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
        if (null !== ($v = $this->getExpression())) {
            $a['expression'] = $v;
        }
        if (null !== ($v = $this->getHuman())) {
            $a['human'] = $v;
        }
        if (null !== ($v = $this->getKey())) {
            $a['key'] = $v;
        }
        if (null !== ($v = $this->getRequirements())) {
            $a['requirements'] = $v;
        }
        if (null !== ($v = $this->getSeverity())) {
            $a['severity'] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
        }
        if (null !== ($v = $this->getXpath())) {
            $a['xpath'] = $v;
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
            $sxe = new \SimpleXMLElement('<ElementDefinitionConstraint xmlns="http://hl7.org/fhir"></ElementDefinitionConstraint>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}