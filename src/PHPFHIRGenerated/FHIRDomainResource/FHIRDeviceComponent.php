<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceComponent extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The component type as defined in the object-oriented or metric nomenclature partition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The timestamp for the most recent system change which includes device configuration or setting change.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $lastSystemChange = null;

    /**
     * The link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * The link to the parent resource. For example: Channel is linked to its VMD parent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $parent = null;

    /**
     * The current operational status of the device. For example: On, Off, Standby, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $operationalStatus = [];

    /**
     * The parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $parameterGroup = null;

    /**
     * The physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeasmntPrinciple
     */
    public $measurementPrinciple = null;

    /**
     * The production specification such as component revision, serial number, etc.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    public $productionSpecification = [];

    /**
     * The language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $languageCode = null;

    /**
     * Other device properties expressed as a `type` which identifies the property and a value(s) either as a quantity or a code.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProperty[]
     */
    public $property = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceComponent';

    /**
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The component type as defined in the object-oriented or metric nomenclature partition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The component type as defined in the object-oriented or metric nomenclature partition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * The timestamp for the most recent system change which includes device configuration or setting change.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getLastSystemChange() {
        return $this->lastSystemChange;
    }

    /**
     * The timestamp for the most recent system change which includes device configuration or setting change.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $lastSystemChange
     * @return $this
     */
    public function setLastSystemChange($lastSystemChange) {
        $this->lastSystemChange = $lastSystemChange;
        return $this;
    }

    /**
     * The link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * The link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    /**
     * The link to the parent resource. For example: Channel is linked to its VMD parent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * The link to the parent resource. For example: Channel is linked to its VMD parent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $parent
     * @return $this
     */
    public function setParent($parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * The current operational status of the device. For example: On, Off, Standby, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOperationalStatus() {
        return $this->operationalStatus;
    }

    /**
     * The current operational status of the device. For example: On, Off, Standby, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $operationalStatus
     * @return $this
     */
    public function addOperationalStatus($operationalStatus) {
        $this->operationalStatus[] = $operationalStatus;
        return $this;
    }

    /**
     * The parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getParameterGroup() {
        return $this->parameterGroup;
    }

    /**
     * The parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $parameterGroup
     * @return $this
     */
    public function setParameterGroup($parameterGroup) {
        $this->parameterGroup = $parameterGroup;
        return $this;
    }

    /**
     * The physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeasmntPrinciple
     */
    public function getMeasurementPrinciple() {
        return $this->measurementPrinciple;
    }

    /**
     * The physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeasmntPrinciple $measurementPrinciple
     * @return $this
     */
    public function setMeasurementPrinciple($measurementPrinciple) {
        $this->measurementPrinciple = $measurementPrinciple;
        return $this;
    }

    /**
     * The production specification such as component revision, serial number, etc.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    public function getProductionSpecification() {
        return $this->productionSpecification;
    }

    /**
     * The production specification such as component revision, serial number, etc.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification $productionSpecification
     * @return $this
     */
    public function addProductionSpecification($productionSpecification) {
        $this->productionSpecification[] = $productionSpecification;
        return $this;
    }

    /**
     * The language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getLanguageCode() {
        return $this->languageCode;
    }

    /**
     * The language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $languageCode
     * @return $this
     */
    public function setLanguageCode($languageCode) {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * Other device properties expressed as a `type` which identifies the property and a value(s) either as a quantity or a code.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProperty[]
     */
    public function getProperty() {
        return $this->property;
    }

    /**
     * Other device properties expressed as a `type` which identifies the property and a value(s) either as a quantity or a code.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProperty $property
     * @return $this
     */
    public function addProperty($property) {
        $this->property[] = $property;
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
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['lastSystemChange'])) {
                $this->setLastSystemChange($data['lastSystemChange']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['parent'])) {
                $this->setParent($data['parent']);
            }
            if (isset($data['operationalStatus'])) {
                if (is_array($data['operationalStatus'])) {
                    foreach($data['operationalStatus'] as $d) {
                        $this->addOperationalStatus($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"operationalStatus" must be array of objects or null, '.gettype($data['operationalStatus']).' seen.');
                }
            }
            if (isset($data['parameterGroup'])) {
                $this->setParameterGroup($data['parameterGroup']);
            }
            if (isset($data['measurementPrinciple'])) {
                $this->setMeasurementPrinciple($data['measurementPrinciple']);
            }
            if (isset($data['productionSpecification'])) {
                if (is_array($data['productionSpecification'])) {
                    foreach($data['productionSpecification'] as $d) {
                        $this->addProductionSpecification($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"productionSpecification" must be array of objects or null, '.gettype($data['productionSpecification']).' seen.');
                }
            }
            if (isset($data['languageCode'])) {
                $this->setLanguageCode($data['languageCode']);
            }
            if (isset($data['property'])) {
                if (is_array($data['property'])) {
                    foreach($data['property'] as $d) {
                        $this->addProperty($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"property" must be array of objects or null, '.gettype($data['property']).' seen.');
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
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->lastSystemChange)) $json['lastSystemChange'] = $this->lastSystemChange;
        if (isset($this->source)) $json['source'] = $this->source;
        if (isset($this->parent)) $json['parent'] = $this->parent;
        if (0 < count($this->operationalStatus)) {
            $json['operationalStatus'] = [];
            foreach($this->operationalStatus as $operationalStatus) {
                if (null !== $operationalStatus) $json['operationalStatus'][] = $operationalStatus;
            }
        }
        if (isset($this->parameterGroup)) $json['parameterGroup'] = $this->parameterGroup;
        if (isset($this->measurementPrinciple)) $json['measurementPrinciple'] = $this->measurementPrinciple;
        if (0 < count($this->productionSpecification)) {
            $json['productionSpecification'] = [];
            foreach($this->productionSpecification as $productionSpecification) {
                if (null !== $productionSpecification) $json['productionSpecification'][] = $productionSpecification;
            }
        }
        if (isset($this->languageCode)) $json['languageCode'] = $this->languageCode;
        if (0 < count($this->property)) {
            $json['property'] = [];
            foreach($this->property as $property) {
                if (null !== $property) $json['property'][] = $property;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceComponent xmlns="http://hl7.org/fhir"></DeviceComponent>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->lastSystemChange)) $this->lastSystemChange->xmlSerialize(true, $sxe->addChild('lastSystemChange'));
        if (isset($this->source)) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (isset($this->parent)) $this->parent->xmlSerialize(true, $sxe->addChild('parent'));
        if (0 < count($this->operationalStatus)) {
            foreach($this->operationalStatus as $operationalStatus) {
                $operationalStatus->xmlSerialize(true, $sxe->addChild('operationalStatus'));
            }
        }
        if (isset($this->parameterGroup)) $this->parameterGroup->xmlSerialize(true, $sxe->addChild('parameterGroup'));
        if (isset($this->measurementPrinciple)) $this->measurementPrinciple->xmlSerialize(true, $sxe->addChild('measurementPrinciple'));
        if (0 < count($this->productionSpecification)) {
            foreach($this->productionSpecification as $productionSpecification) {
                $productionSpecification->xmlSerialize(true, $sxe->addChild('productionSpecification'));
            }
        }
        if (isset($this->languageCode)) $this->languageCode->xmlSerialize(true, $sxe->addChild('languageCode'));
        if (0 < count($this->property)) {
            foreach($this->property as $property) {
                $property->xmlSerialize(true, $sxe->addChild('property'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}