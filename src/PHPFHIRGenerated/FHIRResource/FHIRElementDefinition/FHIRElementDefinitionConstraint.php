<?php namespace PHPFHIRGenerated\FHIRResource\FHIRElementDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRElementDefinitionConstraint extends FHIRElement implements \JsonSerializable
{
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
     * Text that can be used to describe the constraint in messages identifying that the constraint has been violated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $human = null;

    /**
     * A [FHIRPath](http://hl7.org/fluentpath) expression of constraint that can be executed to see if this constraint is met.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $expression = null;

    /**
     * An XPath expression of constraint that can be executed to see if this constraint is met.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $xpath = null;

    /**
     * A reference to the original source of the constraint, for traceability purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $source = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ElementDefinition.Constraint';

    /**
     * Allows identification of which elements have their cardinalities impacted by the constraint.  Will not be referenced for constraints that do not affect cardinality.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Allows identification of which elements have their cardinalities impacted by the constraint.  Will not be referenced for constraints that do not affect cardinality.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Description of why this constraint is necessary or appropriate.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Description of why this constraint is necessary or appropriate.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * Identifies the impact constraint violation has on the conformance of the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRConstraintSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Identifies the impact constraint violation has on the conformance of the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRConstraintSeverity $severity
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Text that can be used to describe the constraint in messages identifying that the constraint has been violated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getHuman()
    {
        return $this->human;
    }

    /**
     * Text that can be used to describe the constraint in messages identifying that the constraint has been violated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $human
     * @return $this
     */
    public function setHuman($human)
    {
        $this->human = $human;
        return $this;
    }

    /**
     * A [FHIRPath](http://hl7.org/fluentpath) expression of constraint that can be executed to see if this constraint is met.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * A [FHIRPath](http://hl7.org/fluentpath) expression of constraint that can be executed to see if this constraint is met.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $expression
     * @return $this
     */
    public function setExpression($expression)
    {
        $this->expression = $expression;
        return $this;
    }

    /**
     * An XPath expression of constraint that can be executed to see if this constraint is met.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * An XPath expression of constraint that can be executed to see if this constraint is met.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $xpath
     * @return $this
     */
    public function setXpath($xpath)
    {
        $this->xpath = $xpath;
        return $this;
    }

    /**
     * A reference to the original source of the constraint, for traceability purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * A reference to the original source of the constraint, for traceability purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->key) $json['key'] = json_encode($this->key);
        if (null !== $this->requirements) $json['requirements'] = json_encode($this->requirements);
        if (null !== $this->severity) $json['severity'] = json_encode($this->severity);
        if (null !== $this->human) $json['human'] = json_encode($this->human);
        if (null !== $this->expression) $json['expression'] = json_encode($this->expression);
        if (null !== $this->xpath) $json['xpath'] = json_encode($this->xpath);
        if (null !== $this->source) $json['source'] = json_encode($this->source);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ElementDefinitionConstraint xmlns="http://hl7.org/fhir"></ElementDefinitionConstraint>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->key) $this->key->xmlSerialize(true, $sxe->addChild('key'));
        if (null !== $this->requirements) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (null !== $this->severity) $this->severity->xmlSerialize(true, $sxe->addChild('severity'));
        if (null !== $this->human) $this->human->xmlSerialize(true, $sxe->addChild('human'));
        if (null !== $this->expression) $this->expression->xmlSerialize(true, $sxe->addChild('expression'));
        if (null !== $this->xpath) $this->xpath->xmlSerialize(true, $sxe->addChild('xpath'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}