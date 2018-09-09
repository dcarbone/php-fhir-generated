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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A person who is directly or indirectly involved in the provisioning of healthcare.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRPractitioner
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRPractitioner extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Practitioner';

    /**
     * Whether this practitioner's record is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * Address(es) of the practitioner that are not role specific (typically home address). 
Work addresses are not typically entered in this property as they are usually role dependent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $address = null;

    /**
     * The date of birth for the practitioner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $birthDate = null;

    /**
     * A language the practitioner can use in patient communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $communication = null;

    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public $gender = null;

    /**
     * An identifier that applies to this person in this role.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The name(s) associated with the practitioner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $name = null;

    /**
     * Image of the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $photo = null;

    /**
     * The official certifications, training, and licenses that authorize or otherwise pertain to the provision of care by the practitioner.  For example, a medical license issued by a medical board authorizing the practitioner to practice medicine within a certian locality.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification
     */
    public $qualification = null;

    /**
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $telecom = null;

    /**
     * FHIRPractitioner Constructor
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
            if (isset($data['communication'])) {
                $this->setCommunication($data['communication']);
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
            if (isset($data['photo'])) {
                $this->setPhoto($data['photo']);
            }
            if (isset($data['qualification'])) {
                $this->setQualification($data['qualification']);
            }
            if (isset($data['telecom'])) {
                $this->setTelecom($data['telecom']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPractitioner::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Whether this practitioner's record is in active use.
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
                'FHIRPractitioner::setActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($active)
            ));
        }
        $this->active = $active;
        return $this;
    }

    /**
     * Whether this practitioner's record is in active use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }


    /**
     * Address(es) of the practitioner that are not role specific (typically home address). 
Work addresses are not typically entered in this property as they are usually role dependent.
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
     * Address(es) of the practitioner that are not role specific (typically home address). 
Work addresses are not typically entered in this property as they are usually role dependent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getAddress()
    {
        return $this->address;
    }


    /**
     * The date of birth for the practitioner.
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
                'FHIRPractitioner::setBirthDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($birthDate)
            ));
        }
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * The date of birth for the practitioner.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }


    /**
     * A language the practitioner can use in patient communication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCommunication(FHIRCodeableConcept $communication = null)
    {
        if (null === $communication) {
            return $this; 
        }
        $this->communication = $communication;
        return $this;
    }

    /**
     * A language the practitioner can use in patient communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCommunication()
    {
        return $this->communication;
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
                'FHIRPractitioner::setGender - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender or appropriate scalar value, %s seen.',
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
     * An identifier that applies to this person in this role.
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
     * An identifier that applies to this person in this role.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The name(s) associated with the practitioner.
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
     * The name(s) associated with the practitioner.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getName()
    {
        return $this->name;
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
     * The official certifications, training, and licenses that authorize or otherwise pertain to the provision of care by the practitioner.  For example, a medical license issued by a medical board authorizing the practitioner to practice medicine within a certian locality.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification
     * @return $this
     */
    public function setQualification(FHIRPractitionerQualification $qualification = null)
    {
        if (null === $qualification) {
            return $this; 
        }
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * The official certifications, training, and licenses that authorize or otherwise pertain to the provision of care by the practitioner.  For example, a medical license issued by a medical board authorizing the practitioner to practice medicine within a certian locality.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification
     */
    public function getQualification()
    {
        return $this->qualification;
    }


    /**
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
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
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
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
        if (null !== ($v = $this->getCommunication())) {
            $a['communication'] = $v;
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
        if (null !== ($v = $this->getPhoto())) {
            $a['photo'] = $v;
        }
        if (null !== ($v = $this->getQualification())) {
            $a['qualification'] = $v;
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
            $sxe = new \SimpleXMLElement('<Practitioner xmlns="http://hl7.org/fhir"></Practitioner>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}