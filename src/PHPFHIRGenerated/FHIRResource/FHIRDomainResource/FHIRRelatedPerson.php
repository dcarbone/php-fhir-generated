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

use PHPFHIRGenerated\FHIRElement\FHIRAddress;
use PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender;
use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Information about a person that is involved in the care for a patient, but who is not the target of healthcare, nor has a formal responsibility in the care process.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRRelatedPerson
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRRelatedPerson extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'RelatedPerson';

    /**
     * Whether this related person record is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * Address where the related person can be contacted or visited.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $address = null;

    /**
     * The date on which the related person was born.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $birthDate = null;

    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public $gender = null;

    /**
     * Identifier for a person within a particular scope.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A name associated with the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $name = null;

    /**
     * The patient this person is related to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The period of time during which this relationship is or was active. If there are no dates defined, then the interval is unknown.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Image of the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $photo = null;

    /**
     * The nature of the relationship between a patient and the related person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $relationship = null;

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $telecom = null;

    /**
     * FHIRRelatedPerson Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['active'])) {
                $this->setActive($data['active']);
            }
            if (isset($data['address'])) {
                $this->setAddress($data['address']);
            }
            if (isset($data['birthDate'])) {
                $this->setBirthDate($data['birthDate']);
            }
            if (isset($data['gender'])) {
                $this->setGender($data['gender']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['photo'])) {
                $this->setPhoto($data['photo']);
            }
            if (isset($data['relationship'])) {
                $this->setRelationship($data['relationship']);
            }
            if (isset($data['telecom'])) {
                $this->setTelecom($data['telecom']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRelatedPerson::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Whether this related person record is in active use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setActive($active)
    {
        if (null === $active) {
            return $this; 
        }
        if (is_scalar($active)) {
            $active = new FHIRBoolean($active);
        }
        if (!($active instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRelatedPerson::setActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($active)
            ));
        }
        $this->active = $active;
        return $this;
    }

    /**
     * Whether this related person record is in active use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }


    /**
     * Address where the related person can be contacted or visited.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     * @return $this
     */
    public function setAddress(FHIRAddress $address = null)
    {
        if (null === $address) {
            return $this; 
        }
        $this->address = $address;
        return $this;
    }

    /**
     * Address where the related person can be contacted or visited.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getAddress()
    {
        return $this->address;
    }


    /**
     * The date on which the related person was born.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        if (null === $birthDate) {
            return $this; 
        }
        if (is_scalar($birthDate)) {
            $birthDate = new FHIRDate($birthDate);
        }
        if (!($birthDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRelatedPerson::setBirthDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($birthDate)
            ));
        }
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * The date on which the related person was born.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }


    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     * @return $this
     */
    public function setGender($gender)
    {
        if (null === $gender) {
            return $this; 
        }
        if (is_scalar($gender)) {
            $gender = new FHIRAdministrativeGender($gender);
        }
        if (!($gender instanceof FHIRAdministrativeGender)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRelatedPerson::setGender - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender or appropriate scalar value, %s seen.',
                gettype($gender)
            ));
        }
        $this->gender = $gender;
        return $this;
    }

    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender()
    {
        return $this->gender;
    }


    /**
     * Identifier for a person within a particular scope.
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
     * Identifier for a person within a particular scope.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * A name associated with the person.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     * @return $this
     */
    public function setName(FHIRHumanName $name = null)
    {
        if (null === $name) {
            return $this; 
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A name associated with the person.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * The patient this person is related to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatient(FHIRReference $patient = null)
    {
        if (null === $patient) {
            return $this; 
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * The patient this person is related to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * The period of time during which this relationship is or was active. If there are no dates defined, then the interval is unknown.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * The period of time during which this relationship is or was active. If there are no dates defined, then the interval is unknown.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * Image of the person.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setPhoto(FHIRAttachment $photo = null)
    {
        if (null === $photo) {
            return $this; 
        }
        $this->photo = $photo;
        return $this;
    }

    /**
     * Image of the person.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPhoto()
    {
        return $this->photo;
    }


    /**
     * The nature of the relationship between a patient and the related person.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRelationship(FHIRCodeableConcept $relationship = null)
    {
        if (null === $relationship) {
            return $this; 
        }
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * The nature of the relationship between a patient and the related person.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship()
    {
        return $this->relationship;
    }


    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setTelecom(FHIRContactPoint $telecom = null)
    {
        if (null === $telecom) {
            return $this; 
        }
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getTelecom()
    {
        return $this->telecom;
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
        if (null !== ($v = $this->getActive())) {
            $a['active'] = $v;
        }
        if (null !== ($v = $this->getAddress())) {
            $a['address'] = $v;
        }
        if (null !== ($v = $this->getBirthDate())) {
            $a['birthDate'] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a['gender'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPhoto())) {
            $a['photo'] = $v;
        }
        if (null !== ($v = $this->getRelationship())) {
            $a['relationship'] = $v;
        }
        if (null !== ($v = $this->getTelecom())) {
            $a['telecom'] = $v;
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
            $sxe = new \SimpleXMLElement('<RelatedPerson xmlns="http://hl7.org/fhir"></RelatedPerson>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}