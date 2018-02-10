<?php namespace PHPFHIRGenerated\FHIRResource\FHIRVerificationResult;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Describes validation requirements, source(s), status and dates for one or more elements.
 */
class FHIRVerificationResultPrimarySource extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * URI of the primary source for validation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Reference to the primary source.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = [];

    /**
     * Method for communicating with the primary source (manual; API; Push).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $validationProcess = [];

    /**
     * Status of the validation of the target against the primary source (successful; failed; unknown).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRValidationStatus
     */
    public $validationStatus = null;

    /**
     * When the target was validated against the primary source.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $validationDate = null;

    /**
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanPushUpdates
     */
    public $canPushUpdates = null;

    /**
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPushTypeAvailable[]
     */
    public $pushTypeAvailable = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'VerificationResult.PrimarySource';

    /**
     * URI of the primary source for validation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * URI of the primary source for validation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Reference to the primary source.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization() {
        return $this->organization;
    }

    /**
     * Reference to the primary source.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization) {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Type of primary source (License Board; Primary Education; Continuing Education; Postal Service; Relationship owner; Registration Authority; legal source; issuing source; authoritative source).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function addType($type) {
        $this->type[] = $type;
        return $this;
    }

    /**
     * Method for communicating with the primary source (manual; API; Push).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getValidationProcess() {
        return $this->validationProcess;
    }

    /**
     * Method for communicating with the primary source (manual; API; Push).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $validationProcess
     * @return $this
     */
    public function addValidationProcess($validationProcess) {
        $this->validationProcess[] = $validationProcess;
        return $this;
    }

    /**
     * Status of the validation of the target against the primary source (successful; failed; unknown).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRValidationStatus
     */
    public function getValidationStatus() {
        return $this->validationStatus;
    }

    /**
     * Status of the validation of the target against the primary source (successful; failed; unknown).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRValidationStatus $validationStatus
     * @return $this
     */
    public function setValidationStatus($validationStatus) {
        $this->validationStatus = $validationStatus;
        return $this;
    }

    /**
     * When the target was validated against the primary source.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValidationDate() {
        return $this->validationDate;
    }

    /**
     * When the target was validated against the primary source.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $validationDate
     * @return $this
     */
    public function setValidationDate($validationDate) {
        $this->validationDate = $validationDate;
        return $this;
    }

    /**
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCanPushUpdates
     */
    public function getCanPushUpdates() {
        return $this->canPushUpdates;
    }

    /**
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCanPushUpdates $canPushUpdates
     * @return $this
     */
    public function setCanPushUpdates($canPushUpdates) {
        $this->canPushUpdates = $canPushUpdates;
        return $this;
    }

    /**
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPushTypeAvailable[]
     */
    public function getPushTypeAvailable() {
        return $this->pushTypeAvailable;
    }

    /**
     * Type of alerts/updates the primary source can send (specific requested changes; any changes; as defined by source).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPushTypeAvailable $pushTypeAvailable
     * @return $this
     */
    public function addPushTypeAvailable($pushTypeAvailable) {
        $this->pushTypeAvailable[] = $pushTypeAvailable;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['type'])) {
                if (is_array($data['type'])) {
                    foreach($data['type'] as $d) {
                        $this->addType($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"type" must be array of objects or null, '.gettype($data['type']).' seen.');
                }
            }
            if (isset($data['validationProcess'])) {
                if (is_array($data['validationProcess'])) {
                    foreach($data['validationProcess'] as $d) {
                        $this->addValidationProcess($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"validationProcess" must be array of objects or null, '.gettype($data['validationProcess']).' seen.');
                }
            }
            if (isset($data['validationStatus'])) {
                $this->setValidationStatus($data['validationStatus']);
            }
            if (isset($data['validationDate'])) {
                $this->setValidationDate($data['validationDate']);
            }
            if (isset($data['canPushUpdates'])) {
                $this->setCanPushUpdates($data['canPushUpdates']);
            }
            if (isset($data['pushTypeAvailable'])) {
                if (is_array($data['pushTypeAvailable'])) {
                    foreach($data['pushTypeAvailable'] as $d) {
                        $this->addPushTypeAvailable($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"pushTypeAvailable" must be array of objects or null, '.gettype($data['pushTypeAvailable']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->organization)) $json['organization'] = $this->organization;
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                if (null !== $type) $json['type'][] = $type;
            }
        }
        if (0 < count($this->validationProcess)) {
            $json['validationProcess'] = [];
            foreach($this->validationProcess as $validationProcess) {
                if (null !== $validationProcess) $json['validationProcess'][] = $validationProcess;
            }
        }
        if (isset($this->validationStatus)) $json['validationStatus'] = $this->validationStatus;
        if (isset($this->validationDate)) $json['validationDate'] = $this->validationDate;
        if (isset($this->canPushUpdates)) $json['canPushUpdates'] = $this->canPushUpdates;
        if (0 < count($this->pushTypeAvailable)) {
            $json['pushTypeAvailable'] = [];
            foreach($this->pushTypeAvailable as $pushTypeAvailable) {
                if (null !== $pushTypeAvailable) $json['pushTypeAvailable'][] = $pushTypeAvailable;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<VerificationResultPrimarySource xmlns="http://hl7.org/fhir"></VerificationResultPrimarySource>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->organization)) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (0 < count($this->validationProcess)) {
            foreach($this->validationProcess as $validationProcess) {
                $validationProcess->xmlSerialize(true, $sxe->addChild('validationProcess'));
            }
        }
        if (isset($this->validationStatus)) $this->validationStatus->xmlSerialize(true, $sxe->addChild('validationStatus'));
        if (isset($this->validationDate)) $this->validationDate->xmlSerialize(true, $sxe->addChild('validationDate'));
        if (isset($this->canPushUpdates)) $this->canPushUpdates->xmlSerialize(true, $sxe->addChild('canPushUpdates'));
        if (0 < count($this->pushTypeAvailable)) {
            foreach($this->pushTypeAvailable as $pushTypeAvailable) {
                $pushTypeAvailable->xmlSerialize(true, $sxe->addChild('pushTypeAvailable'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}