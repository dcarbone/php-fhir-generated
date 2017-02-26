<?php namespace PHPFHIRGenerated\FHIRResource;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * Sample for analysis.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSpecimen extends FHIRResource implements \JsonSerializable
{
    /**
     * Id for specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Kind of material that forms the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Parent specimen from which the focal specimen was a component.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenSource[]
     */
    public $source = array();

    /**
     * Where the specimen came from. This may be the patient(s) or from the environment or  a device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $accessionIdentifier = null;

    /**
     * Time when specimen was received for processing or testing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $receivedTime = null;

    /**
     * Details concerning the specimen collection.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenCollection
     */
    public $collection = null;

    /**
     * Details concerning treatment and processing steps for the specimen.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenTreatment[]
     */
    public $treatment = array();

    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenContainer[]
     */
    public $container = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Specimen';

    /**
     * Id for specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Id for specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Kind of material that forms the specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Kind of material that forms the specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Parent specimen from which the focal specimen was a component.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenSource[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Parent specimen from which the focal specimen was a component.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenSource $source
     * @return $this
     */
    public function addSource($source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * Where the specimen came from. This may be the patient(s) or from the environment or  a device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Where the specimen came from. This may be the patient(s) or from the environment or  a device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getAccessionIdentifier()
    {
        return $this->accessionIdentifier;
    }

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $accessionIdentifier
     * @return $this
     */
    public function setAccessionIdentifier($accessionIdentifier)
    {
        $this->accessionIdentifier = $accessionIdentifier;
        return $this;
    }

    /**
     * Time when specimen was received for processing or testing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getReceivedTime()
    {
        return $this->receivedTime;
    }

    /**
     * Time when specimen was received for processing or testing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $receivedTime
     * @return $this
     */
    public function setReceivedTime($receivedTime)
    {
        $this->receivedTime = $receivedTime;
        return $this;
    }

    /**
     * Details concerning the specimen collection.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Details concerning the specimen collection.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenCollection $collection
     * @return $this
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
        return $this;
    }

    /**
     * Details concerning treatment and processing steps for the specimen.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenTreatment[]
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * Details concerning treatment and processing steps for the specimen.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenTreatment $treatment
     * @return $this
     */
    public function addTreatment($treatment)
    {
        $this->treatment[] = $treatment;
        return $this;
    }

    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenContainer[]
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenContainer $container
     * @return $this
     */
    public function addContainer($container)
    {
        $this->container[] = $container;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (0 < count($this->source)) {
            $json['source'] = [];
            foreach($this->source as $source) {
                $json['source'][] = json_encode($source);
            }
        }
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (null !== $this->accessionIdentifier) $json['accessionIdentifier'] = json_encode($this->accessionIdentifier);
        if (null !== $this->receivedTime) $json['receivedTime'] = json_encode($this->receivedTime);
        if (null !== $this->collection) $json['collection'] = json_encode($this->collection);
        if (0 < count($this->treatment)) {
            $json['treatment'] = [];
            foreach($this->treatment as $treatment) {
                $json['treatment'][] = json_encode($treatment);
            }
        }
        if (0 < count($this->container)) {
            $json['container'] = [];
            foreach($this->container as $container) {
                $json['container'][] = json_encode($container);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Specimen xmlns="http://hl7.org/fhir"></Specimen>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->source)) {
            foreach($this->source as $source) {
                $source->xmlSerialize(true, $sxe->addChild('source'));
            }
        }
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->accessionIdentifier) $this->accessionIdentifier->xmlSerialize(true, $sxe->addChild('accessionIdentifier'));
        if (null !== $this->receivedTime) $this->receivedTime->xmlSerialize(true, $sxe->addChild('receivedTime'));
        if (null !== $this->collection) $this->collection->xmlSerialize(true, $sxe->addChild('collection'));
        if (0 < count($this->treatment)) {
            foreach($this->treatment as $treatment) {
                $treatment->xmlSerialize(true, $sxe->addChild('treatment'));
            }
        }
        if (0 < count($this->container)) {
            foreach($this->container as $container) {
                $container->xmlSerialize(true, $sxe->addChild('container'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}