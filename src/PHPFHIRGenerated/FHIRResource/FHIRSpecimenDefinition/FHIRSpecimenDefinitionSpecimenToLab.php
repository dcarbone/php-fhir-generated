<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSpecimenDefinition;

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
 * A kind of specimen with associated set of requirements.
 */
class FHIRSpecimenDefinitionSpecimenToLab extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Primary of secondary specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isDerived = null;

    /**
     * The kind of specimen conditioned for testing expected by lab.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The preference for this type of conditioned specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSpecimenContainedPreference
     */
    public $preference = null;

    /**
     * The type of material of the container.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $containerMaterial = null;

    /**
     * The type of container used to contain this kind of specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $containerType = null;

    /**
     * Color of container cap.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $containerCap = null;

    /**
     * The textual description of the kind of container.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $containerDescription = null;

    /**
     * The capacity (volume or other measure) of this kind of container.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $containerCapacity = null;

    /**
     * The minimum volume to be conditioned in the container.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $containerMinimumVolume = null;

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainerAdditive[]
     */
    public $containerAdditive = [];

    /**
     * Special processing that should be applied to the container for this kind of specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $containerPreparation = null;

    /**
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requirement = null;

    /**
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $retentionTime = null;

    /**
     * Criterion for rejection of the specimen in its container by the laboratory.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $rejectionCriterion = [];

    /**
     * Set of instructions for conservation/transport of the specimen at a defined temperature interval, prior the testing process.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[]
     */
    public $handling = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'SpecimenDefinition.SpecimenToLab';

    /**
     * Primary of secondary specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsDerived() {
        return $this->isDerived;
    }

    /**
     * Primary of secondary specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $isDerived
     * @return $this
     */
    public function setIsDerived($isDerived) {
        $this->isDerived = $isDerived;
        return $this;
    }

    /**
     * The kind of specimen conditioned for testing expected by lab.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The kind of specimen conditioned for testing expected by lab.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * The preference for this type of conditioned specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSpecimenContainedPreference
     */
    public function getPreference() {
        return $this->preference;
    }

    /**
     * The preference for this type of conditioned specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSpecimenContainedPreference $preference
     * @return $this
     */
    public function setPreference($preference) {
        $this->preference = $preference;
        return $this;
    }

    /**
     * The type of material of the container.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getContainerMaterial() {
        return $this->containerMaterial;
    }

    /**
     * The type of material of the container.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $containerMaterial
     * @return $this
     */
    public function setContainerMaterial($containerMaterial) {
        $this->containerMaterial = $containerMaterial;
        return $this;
    }

    /**
     * The type of container used to contain this kind of specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getContainerType() {
        return $this->containerType;
    }

    /**
     * The type of container used to contain this kind of specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $containerType
     * @return $this
     */
    public function setContainerType($containerType) {
        $this->containerType = $containerType;
        return $this;
    }

    /**
     * Color of container cap.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getContainerCap() {
        return $this->containerCap;
    }

    /**
     * Color of container cap.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $containerCap
     * @return $this
     */
    public function setContainerCap($containerCap) {
        $this->containerCap = $containerCap;
        return $this;
    }

    /**
     * The textual description of the kind of container.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getContainerDescription() {
        return $this->containerDescription;
    }

    /**
     * The textual description of the kind of container.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $containerDescription
     * @return $this
     */
    public function setContainerDescription($containerDescription) {
        $this->containerDescription = $containerDescription;
        return $this;
    }

    /**
     * The capacity (volume or other measure) of this kind of container.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getContainerCapacity() {
        return $this->containerCapacity;
    }

    /**
     * The capacity (volume or other measure) of this kind of container.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $containerCapacity
     * @return $this
     */
    public function setContainerCapacity($containerCapacity) {
        $this->containerCapacity = $containerCapacity;
        return $this;
    }

    /**
     * The minimum volume to be conditioned in the container.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getContainerMinimumVolume() {
        return $this->containerMinimumVolume;
    }

    /**
     * The minimum volume to be conditioned in the container.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $containerMinimumVolume
     * @return $this
     */
    public function setContainerMinimumVolume($containerMinimumVolume) {
        $this->containerMinimumVolume = $containerMinimumVolume;
        return $this;
    }

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainerAdditive[]
     */
    public function getContainerAdditive() {
        return $this->containerAdditive;
    }

    /**
     * Substance introduced in the kind of container to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainerAdditive $containerAdditive
     * @return $this
     */
    public function addContainerAdditive($containerAdditive) {
        $this->containerAdditive[] = $containerAdditive;
        return $this;
    }

    /**
     * Special processing that should be applied to the container for this kind of specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getContainerPreparation() {
        return $this->containerPreparation;
    }

    /**
     * Special processing that should be applied to the container for this kind of specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $containerPreparation
     * @return $this
     */
    public function setContainerPreparation($containerPreparation) {
        $this->containerPreparation = $containerPreparation;
        return $this;
    }

    /**
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirement() {
        return $this->requirement;
    }

    /**
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $requirement
     * @return $this
     */
    public function setRequirement($requirement) {
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getRetentionTime() {
        return $this->retentionTime;
    }

    /**
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $retentionTime
     * @return $this
     */
    public function setRetentionTime($retentionTime) {
        $this->retentionTime = $retentionTime;
        return $this;
    }

    /**
     * Criterion for rejection of the specimen in its container by the laboratory.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRejectionCriterion() {
        return $this->rejectionCriterion;
    }

    /**
     * Criterion for rejection of the specimen in its container by the laboratory.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $rejectionCriterion
     * @return $this
     */
    public function addRejectionCriterion($rejectionCriterion) {
        $this->rejectionCriterion[] = $rejectionCriterion;
        return $this;
    }

    /**
     * Set of instructions for conservation/transport of the specimen at a defined temperature interval, prior the testing process.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[]
     */
    public function getHandling() {
        return $this->handling;
    }

    /**
     * Set of instructions for conservation/transport of the specimen at a defined temperature interval, prior the testing process.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling $handling
     * @return $this
     */
    public function addHandling($handling) {
        $this->handling[] = $handling;
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
            if (isset($data['isDerived'])) {
                $this->setIsDerived($data['isDerived']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['preference'])) {
                $this->setPreference($data['preference']);
            }
            if (isset($data['containerMaterial'])) {
                $this->setContainerMaterial($data['containerMaterial']);
            }
            if (isset($data['containerType'])) {
                $this->setContainerType($data['containerType']);
            }
            if (isset($data['containerCap'])) {
                $this->setContainerCap($data['containerCap']);
            }
            if (isset($data['containerDescription'])) {
                $this->setContainerDescription($data['containerDescription']);
            }
            if (isset($data['containerCapacity'])) {
                $this->setContainerCapacity($data['containerCapacity']);
            }
            if (isset($data['containerMinimumVolume'])) {
                $this->setContainerMinimumVolume($data['containerMinimumVolume']);
            }
            if (isset($data['containerAdditive'])) {
                if (is_array($data['containerAdditive'])) {
                    foreach($data['containerAdditive'] as $d) {
                        $this->addContainerAdditive($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"containerAdditive" must be array of objects or null, '.gettype($data['containerAdditive']).' seen.');
                }
            }
            if (isset($data['containerPreparation'])) {
                $this->setContainerPreparation($data['containerPreparation']);
            }
            if (isset($data['requirement'])) {
                $this->setRequirement($data['requirement']);
            }
            if (isset($data['retentionTime'])) {
                $this->setRetentionTime($data['retentionTime']);
            }
            if (isset($data['rejectionCriterion'])) {
                if (is_array($data['rejectionCriterion'])) {
                    foreach($data['rejectionCriterion'] as $d) {
                        $this->addRejectionCriterion($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"rejectionCriterion" must be array of objects or null, '.gettype($data['rejectionCriterion']).' seen.');
                }
            }
            if (isset($data['handling'])) {
                if (is_array($data['handling'])) {
                    foreach($data['handling'] as $d) {
                        $this->addHandling($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"handling" must be array of objects or null, '.gettype($data['handling']).' seen.');
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
        if (isset($this->isDerived)) $json['isDerived'] = $this->isDerived;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->preference)) $json['preference'] = $this->preference;
        if (isset($this->containerMaterial)) $json['containerMaterial'] = $this->containerMaterial;
        if (isset($this->containerType)) $json['containerType'] = $this->containerType;
        if (isset($this->containerCap)) $json['containerCap'] = $this->containerCap;
        if (isset($this->containerDescription)) $json['containerDescription'] = $this->containerDescription;
        if (isset($this->containerCapacity)) $json['containerCapacity'] = $this->containerCapacity;
        if (isset($this->containerMinimumVolume)) $json['containerMinimumVolume'] = $this->containerMinimumVolume;
        if (0 < count($this->containerAdditive)) {
            $json['containerAdditive'] = [];
            foreach($this->containerAdditive as $containerAdditive) {
                if (null !== $containerAdditive) $json['containerAdditive'][] = $containerAdditive;
            }
        }
        if (isset($this->containerPreparation)) $json['containerPreparation'] = $this->containerPreparation;
        if (isset($this->requirement)) $json['requirement'] = $this->requirement;
        if (isset($this->retentionTime)) $json['retentionTime'] = $this->retentionTime;
        if (0 < count($this->rejectionCriterion)) {
            $json['rejectionCriterion'] = [];
            foreach($this->rejectionCriterion as $rejectionCriterion) {
                if (null !== $rejectionCriterion) $json['rejectionCriterion'][] = $rejectionCriterion;
            }
        }
        if (0 < count($this->handling)) {
            $json['handling'] = [];
            foreach($this->handling as $handling) {
                if (null !== $handling) $json['handling'][] = $handling;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SpecimenDefinitionSpecimenToLab xmlns="http://hl7.org/fhir"></SpecimenDefinitionSpecimenToLab>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->isDerived)) $this->isDerived->xmlSerialize(true, $sxe->addChild('isDerived'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->preference)) $this->preference->xmlSerialize(true, $sxe->addChild('preference'));
        if (isset($this->containerMaterial)) $this->containerMaterial->xmlSerialize(true, $sxe->addChild('containerMaterial'));
        if (isset($this->containerType)) $this->containerType->xmlSerialize(true, $sxe->addChild('containerType'));
        if (isset($this->containerCap)) $this->containerCap->xmlSerialize(true, $sxe->addChild('containerCap'));
        if (isset($this->containerDescription)) $this->containerDescription->xmlSerialize(true, $sxe->addChild('containerDescription'));
        if (isset($this->containerCapacity)) $this->containerCapacity->xmlSerialize(true, $sxe->addChild('containerCapacity'));
        if (isset($this->containerMinimumVolume)) $this->containerMinimumVolume->xmlSerialize(true, $sxe->addChild('containerMinimumVolume'));
        if (0 < count($this->containerAdditive)) {
            foreach($this->containerAdditive as $containerAdditive) {
                $containerAdditive->xmlSerialize(true, $sxe->addChild('containerAdditive'));
            }
        }
        if (isset($this->containerPreparation)) $this->containerPreparation->xmlSerialize(true, $sxe->addChild('containerPreparation'));
        if (isset($this->requirement)) $this->requirement->xmlSerialize(true, $sxe->addChild('requirement'));
        if (isset($this->retentionTime)) $this->retentionTime->xmlSerialize(true, $sxe->addChild('retentionTime'));
        if (0 < count($this->rejectionCriterion)) {
            foreach($this->rejectionCriterion as $rejectionCriterion) {
                $rejectionCriterion->xmlSerialize(true, $sxe->addChild('rejectionCriterion'));
            }
        }
        if (0 < count($this->handling)) {
            foreach($this->handling as $handling) {
                $handling->xmlSerialize(true, $sxe->addChild('handling'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}