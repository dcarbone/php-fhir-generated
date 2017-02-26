<?php namespace PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A record of a clinical assessment performed to determine what problem(s) may affect the patient and before planning the treatments or management strategies that are best to manage a patient's condition. Assessments are often 1:1 with a clinical consultation / encounter,  but this varies greatly depending on the clinical workflow. This resource is called "ClinicalImpression" rather than "ClinicalAssessment" to avoid confusion with the recording of assessment tools such as Apgar score.
 */
class FHIRClinicalImpressionFinding extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $itemCodeableConcept = null;

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $itemReference = null;

    /**
     * Which investigations support finding or diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $basis = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ClinicalImpression.Finding';

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $itemCodeableConcept
     * @return $this
     */
    public function setItemCodeableConcept($itemCodeableConcept)
    {
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $itemReference
     * @return $this
     */
    public function setItemReference($itemReference)
    {
        $this->itemReference = $itemReference;
        return $this;
    }

    /**
     * Which investigations support finding or diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBasis()
    {
        return $this->basis;
    }

    /**
     * Which investigations support finding or diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $basis
     * @return $this
     */
    public function setBasis($basis)
    {
        $this->basis = $basis;
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
        if (null !== $this->itemCodeableConcept) $json['itemCodeableConcept'] = json_encode($this->itemCodeableConcept);
        if (null !== $this->itemReference) $json['itemReference'] = json_encode($this->itemReference);
        if (null !== $this->basis) $json['basis'] = json_encode($this->basis);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClinicalImpressionFinding xmlns="http://hl7.org/fhir"></ClinicalImpressionFinding>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->itemCodeableConcept) $this->itemCodeableConcept->xmlSerialize(true, $sxe->addChild('itemCodeableConcept'));
        if (null !== $this->itemReference) $this->itemReference->xmlSerialize(true, $sxe->addChild('itemReference'));
        if (null !== $this->basis) $this->basis->xmlSerialize(true, $sxe->addChild('basis'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}