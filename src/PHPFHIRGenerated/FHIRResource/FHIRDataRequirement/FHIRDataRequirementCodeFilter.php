<?php namespace PHPFHIRGenerated\FHIRResource\FHIRDataRequirement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;

/**
 * Describes a required data item for evaluation in terms of the type of data, and optional code- or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRDataRequirementCodeFilter extends FHIRElement implements \JsonSerializable
{
    /**
     * The code-valued attribute of the filter. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant. The path must resolve to an element of type code, Coding, or CodeableConcept.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * The valueset for the code filter. The valueSet and value elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueSetString = null;

    /**
     * The valueset for the code filter. The valueSet and value elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $valueSetReference = null;

    /**
     * The codes for the code filter. Only one of valueSet, valueCode, valueConding, or valueCodeableConcept may be specified. If values are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified codes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public $valueCode = array();

    /**
     * The Codings for the code filter. Only one of valueSet, valueCode, valueConding, or valueCodeableConcept may be specified. If values are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified Codings.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $valueCoding = array();

    /**
     * The CodeableConcepts for the code filter. Only one of valueSet, valueCode, valueConding, or valueCodeableConcept may be specified. If values are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified CodeableConcepts.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $valueCodeableConcept = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'DataRequirement.CodeFilter';

    /**
     * The code-valued attribute of the filter. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant. The path must resolve to an element of type code, Coding, or CodeableConcept.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The code-valued attribute of the filter. The specified path must be resolvable from the type of the required data. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements. Note that the index must be an integer constant. The path must resolve to an element of type code, Coding, or CodeableConcept.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * The valueset for the code filter. The valueSet and value elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueSetString()
    {
        return $this->valueSetString;
    }

    /**
     * The valueset for the code filter. The valueSet and value elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueSetString
     * @return $this
     */
    public function setValueSetString($valueSetString)
    {
        $this->valueSetString = $valueSetString;
        return $this;
    }

    /**
     * The valueset for the code filter. The valueSet and value elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValueSetReference()
    {
        return $this->valueSetReference;
    }

    /**
     * The valueset for the code filter. The valueSet and value elements are exclusive. If valueSet is specified, the filter will return only those data items for which the value of the code-valued element specified in the path is a member of the specified valueset. (choose any one of valueSet*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $valueSetReference
     * @return $this
     */
    public function setValueSetReference($valueSetReference)
    {
        $this->valueSetReference = $valueSetReference;
        return $this;
    }

    /**
     * The codes for the code filter. Only one of valueSet, valueCode, valueConding, or valueCodeableConcept may be specified. If values are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified codes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * The codes for the code filter. Only one of valueSet, valueCode, valueConding, or valueCodeableConcept may be specified. If values are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified codes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $valueCode
     * @return $this
     */
    public function addValueCode($valueCode)
    {
        $this->valueCode[] = $valueCode;
        return $this;
    }

    /**
     * The Codings for the code filter. Only one of valueSet, valueCode, valueConding, or valueCodeableConcept may be specified. If values are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified Codings.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * The Codings for the code filter. Only one of valueSet, valueCode, valueConding, or valueCodeableConcept may be specified. If values are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified Codings.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $valueCoding
     * @return $this
     */
    public function addValueCoding($valueCoding)
    {
        $this->valueCoding[] = $valueCoding;
        return $this;
    }

    /**
     * The CodeableConcepts for the code filter. Only one of valueSet, valueCode, valueConding, or valueCodeableConcept may be specified. If values are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified CodeableConcepts.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * The CodeableConcepts for the code filter. Only one of valueSet, valueCode, valueConding, or valueCodeableConcept may be specified. If values are given, the filter will return only those data items for which the code-valued attribute specified by the path has a value that is one of the specified CodeableConcepts.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return $this
     */
    public function addValueCodeableConcept($valueCodeableConcept)
    {
        $this->valueCodeableConcept[] = $valueCodeableConcept;
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
        if (null !== $this->path) $json['path'] = json_encode($this->path);
        if (null !== $this->valueSetString) $json['valueSetString'] = json_encode($this->valueSetString);
        if (null !== $this->valueSetReference) $json['valueSetReference'] = json_encode($this->valueSetReference);
        if (0 < count($this->valueCode)) {
            $json['valueCode'] = [];
            foreach($this->valueCode as $valueCode) {
                $json['valueCode'][] = json_encode($valueCode);
            }
        }
        if (0 < count($this->valueCoding)) {
            $json['valueCoding'] = [];
            foreach($this->valueCoding as $valueCoding) {
                $json['valueCoding'][] = json_encode($valueCoding);
            }
        }
        if (0 < count($this->valueCodeableConcept)) {
            $json['valueCodeableConcept'] = [];
            foreach($this->valueCodeableConcept as $valueCodeableConcept) {
                $json['valueCodeableConcept'][] = json_encode($valueCodeableConcept);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DataRequirementCodeFilter xmlns="http://hl7.org/fhir"></DataRequirementCodeFilter>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->path) $this->path->xmlSerialize(true, $sxe->addChild('path'));
        if (null !== $this->valueSetString) $this->valueSetString->xmlSerialize(true, $sxe->addChild('valueSetString'));
        if (null !== $this->valueSetReference) $this->valueSetReference->xmlSerialize(true, $sxe->addChild('valueSetReference'));
        if (0 < count($this->valueCode)) {
            foreach($this->valueCode as $valueCode) {
                $valueCode->xmlSerialize(true, $sxe->addChild('valueCode'));
            }
        }
        if (0 < count($this->valueCoding)) {
            foreach($this->valueCoding as $valueCoding) {
                $valueCoding->xmlSerialize(true, $sxe->addChild('valueCoding'));
            }
        }
        if (0 < count($this->valueCodeableConcept)) {
            foreach($this->valueCodeableConcept as $valueCodeableConcept) {
                $valueCodeableConcept->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}