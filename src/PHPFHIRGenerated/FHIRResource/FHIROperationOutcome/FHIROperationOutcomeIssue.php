<?php namespace PHPFHIRGenerated\FHIRResource\FHIROperationOutcome;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A collection of error, warning or information messages that result from a system action.
 */
class FHIROperationOutcomeIssue extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Indicates whether the issue indicates a variation from successful processing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIssueSeverity
     */
    public $severity = null;

    /**
     * Describes the type of the issue. The system that creates an OperationOutcome SHALL choose the most applicable code from the IssueType value set, and may additional provide its own code for the error in the details element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIssueType
     */
    public $code = null;

    /**
     * Additional details about the error. This may be a text description of the error, or a system code that identifies the error.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $details = null;

    /**
     * Additional diagnostic information about the issue.  Typically, this may be a description of how a value is erroneous, or a stack dump to help trace the issue.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $diagnostics = null;

    /**
     * A simple XPath limited to element names, repetition indicators and the default child access that identifies one of the elements in the resource that caused this issue to be raised.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $location = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'OperationOutcome.Issue';

    /**
     * Indicates whether the issue indicates a variation from successful processing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIssueSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Indicates whether the issue indicates a variation from successful processing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIssueSeverity $severity
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Describes the type of the issue. The system that creates an OperationOutcome SHALL choose the most applicable code from the IssueType value set, and may additional provide its own code for the error in the details element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIssueType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Describes the type of the issue. The system that creates an OperationOutcome SHALL choose the most applicable code from the IssueType value set, and may additional provide its own code for the error in the details element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIssueType $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Additional details about the error. This may be a text description of the error, or a system code that identifies the error.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Additional details about the error. This may be a text description of the error, or a system code that identifies the error.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Additional diagnostic information about the issue.  Typically, this may be a description of how a value is erroneous, or a stack dump to help trace the issue.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDiagnostics()
    {
        return $this->diagnostics;
    }

    /**
     * Additional diagnostic information about the issue.  Typically, this may be a description of how a value is erroneous, or a stack dump to help trace the issue.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $diagnostics
     * @return $this
     */
    public function setDiagnostics($diagnostics)
    {
        $this->diagnostics = $diagnostics;
        return $this;
    }

    /**
     * A simple XPath limited to element names, repetition indicators and the default child access that identifies one of the elements in the resource that caused this issue to be raised.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A simple XPath limited to element names, repetition indicators and the default child access that identifies one of the elements in the resource that caused this issue to be raised.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $location
     * @return $this
     */
    public function addLocation($location)
    {
        $this->location[] = $location;
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
        if (null !== $this->severity) $json['severity'] = json_encode($this->severity);
        if (null !== $this->code) $json['code'] = json_encode($this->code);
        if (null !== $this->details) $json['details'] = json_encode($this->details);
        if (null !== $this->diagnostics) $json['diagnostics'] = json_encode($this->diagnostics);
        if (0 < count($this->location)) {
            $json['location'] = [];
            foreach($this->location as $location) {
                $json['location'][] = json_encode($location);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OperationOutcomeIssue xmlns="http://hl7.org/fhir"></OperationOutcomeIssue>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->severity) $this->severity->xmlSerialize(true, $sxe->addChild('severity'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->details) $this->details->xmlSerialize(true, $sxe->addChild('details'));
        if (null !== $this->diagnostics) $this->diagnostics->xmlSerialize(true, $sxe->addChild('diagnostics'));
        if (0 < count($this->location)) {
            foreach($this->location as $location) {
                $location->xmlSerialize(true, $sxe->addChild('location'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}