<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRSpecimenStatus;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A sample to be used for analysis.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSpecimen
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSpecimen extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Specimen';

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $accessionIdentifier = null;

    /**
     * Details concerning the specimen collection.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public $collection = null;

    /**
     * A mode or state of being that describes the nature of the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $condition = null;

    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer
     */
    public $container = null;

    /**
     * Id for specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * To communicate any details or issues about the specimen or during the specimen collection. (for example: broken vial, sent with patient, frozen).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $parent = null;

    /**
     * Details concerning processing and processing steps for the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing
     */
    public $processing = null;

    /**
     * Time when specimen was received for processing or testing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $receivedTime = null;

    /**
     * Details concerning a service request that required a specimen to be collected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * The availability of the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSpecimenStatus
     */
    public $status = null;

    /**
     * Where the specimen came from. This may be from patient(s),from a location (e.g., the source of an environmental sample), or a sampling of a substance or a device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The kind of material that forms the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRSpecimen Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['accessionIdentifier'])) {
                $this->setAccessionIdentifier($data['accessionIdentifier']);
            }
            if (isset($data['collection'])) {
                $this->setCollection($data['collection']);
            }
            if (isset($data['condition'])) {
                $this->setCondition($data['condition']);
            }
            if (isset($data['container'])) {
                $this->setContainer($data['container']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['parent'])) {
                $this->setParent($data['parent']);
            }
            if (isset($data['processing'])) {
                $this->setProcessing($data['processing']);
            }
            if (isset($data['receivedTime'])) {
                $this->setReceivedTime($data['receivedTime']);
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimen::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setAccessionIdentifier(FHIRIdentifier $accessionIdentifier = null)
    {
        if (null === $accessionIdentifier) {
            return $this; 
        }
        $this->accessionIdentifier = $accessionIdentifier;
        return $this;
    }

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getAccessionIdentifier()
    {
        return $this->accessionIdentifier;
    }


    /**
     * Details concerning the specimen collection.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     * @return $this
     */
    public function setCollection(FHIRSpecimenCollection $collection = null)
    {
        if (null === $collection) {
            return $this; 
        }
        $this->collection = $collection;
        return $this;
    }

    /**
     * Details concerning the specimen collection.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }


    /**
     * A mode or state of being that describes the nature of the specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCondition(FHIRCodeableConcept $condition = null)
    {
        if (null === $condition) {
            return $this; 
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * A mode or state of being that describes the nature of the specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCondition()
    {
        return $this->condition;
    }


    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer
     * @return $this
     */
    public function setContainer(FHIRSpecimenContainer $container = null)
    {
        if (null === $container) {
            return $this; 
        }
        $this->container = $container;
        return $this;
    }

    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer
     */
    public function getContainer()
    {
        return $this->container;
    }


    /**
     * Id for specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Id for specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * To communicate any details or issues about the specimen or during the specimen collection. (for example: broken vial, sent with patient, frozen).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * To communicate any details or issues about the specimen or during the specimen collection. (for example: broken vial, sent with patient, frozen).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setParent(FHIRReference $parent = null)
    {
        if (null === $parent) {
            return $this; 
        }
        $this->parent = $parent;
        return $this;
    }

    /**
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParent()
    {
        return $this->parent;
    }


    /**
     * Details concerning processing and processing steps for the specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing
     * @return $this
     */
    public function setProcessing(FHIRSpecimenProcessing $processing = null)
    {
        if (null === $processing) {
            return $this; 
        }
        $this->processing = $processing;
        return $this;
    }

    /**
     * Details concerning processing and processing steps for the specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing
     */
    public function getProcessing()
    {
        return $this->processing;
    }


    /**
     * Time when specimen was received for processing or testing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setReceivedTime($receivedTime)
    {
        if (null === $receivedTime) {
            return $this; 
        }
        if (is_scalar($receivedTime)) {
            $receivedTime = new FHIRDateTime($receivedTime);
        }
        if (!($receivedTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimen::setReceivedTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($receivedTime)
            ));
        }
        $this->receivedTime = $receivedTime;
        return $this;
    }

    /**
     * Time when specimen was received for processing or testing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getReceivedTime()
    {
        return $this->receivedTime;
    }


    /**
     * Details concerning a service request that required a specimen to be collected.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRequest(FHIRReference $request = null)
    {
        if (null === $request) {
            return $this; 
        }
        $this->request = $request;
        return $this;
    }

    /**
     * Details concerning a service request that required a specimen to be collected.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }


    /**
     * The availability of the specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSpecimenStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRSpecimenStatus($status);
        }
        if (!($status instanceof FHIRSpecimenStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimen::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSpecimenStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The availability of the specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSpecimenStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Where the specimen came from. This may be from patient(s),from a location (e.g., the source of an environmental sample), or a sampling of a substance or a device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * Where the specimen came from. This may be from patient(s),from a location (e.g., the source of an environmental sample), or a sampling of a substance or a device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * The kind of material that forms the specimen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The kind of material that forms the specimen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAccessionIdentifier())) {
            $a['accessionIdentifier'] = $v;
        }
        if (null !== ($v = $this->getCollection())) {
            $a['collection'] = $v;
        }
        if (null !== ($v = $this->getCondition())) {
            $a['condition'] = $v;
        }
        if (null !== ($v = $this->getContainer())) {
            $a['container'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getParent())) {
            $a['parent'] = $v;
        }
        if (null !== ($v = $this->getProcessing())) {
            $a['processing'] = $v;
        }
        if (null !== ($v = $this->getReceivedTime())) {
            $a['receivedTime'] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a['request'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<Specimen xmlns="http://hl7.org/fhir"></Specimen>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}