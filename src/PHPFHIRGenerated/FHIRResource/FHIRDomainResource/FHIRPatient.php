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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Demographics and other administrative information about an individual or animal receiving care or other health-related services.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRPatient
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRPatient extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Patient';

    /**
     * Whether this patient record is in active use. 
Many systems use this property to mark as non-current patients, such as those that have not been seen for a period of time based on an organization's business rules.

It is often used to filter patient lists to exclude inactive patients

Deceased patients may also be marked as inactive for the same reasons, but may be active for some time after death.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * An address for the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $address = null;

    /**
     * The date of birth for the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $birthDate = null;

    /**
     * A language which may be used to communicate with the patient about his or her health.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication
     */
    public $communication = null;

    /**
     * A contact party (e.g. guardian, partner, friend) for the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact
     */
    public $contact = null;

    /**
     * Indicates if the individual is deceased or not.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $deceasedBoolean = null;

    /**
     * Indicates if the individual is deceased or not.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $deceasedDateTime = null;

    /**
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public $gender = null;

    /**
     * Patient's nominated care provider.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $generalPractitioner = null;

    /**
     * An identifier for this patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Link to another patient resource that concerns the same actual patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink
     */
    public $link = null;

    /**
     * Organization that is the custodian of the patient record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * This field contains a patient's most recent marital (civil) status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $maritalStatus = null;

    /**
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $multipleBirthBoolean = null;

    /**
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $multipleBirthInteger = null;

    /**
     * A name associated with the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $name = null;

    /**
     * Image of the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $photo = null;

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $telecom = null;

    /**
     * FHIRPatient Constructor
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
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['deceasedBoolean'])) {
                $this->setDeceasedBoolean($data['deceasedBoolean']);
            }
            if (isset($data['deceasedDateTime'])) {
                $this->setDeceasedDateTime($data['deceasedDateTime']);
            }
            if (isset($data['gender'])) {
                $this->setGender($data['gender']);
            }
            if (isset($data['generalPractitioner'])) {
                $this->setGeneralPractitioner($data['generalPractitioner']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['link'])) {
                $this->setLink($data['link']);
            }
            if (isset($data['managingOrganization'])) {
                $this->setManagingOrganization($data['managingOrganization']);
            }
            if (isset($data['maritalStatus'])) {
                $this->setMaritalStatus($data['maritalStatus']);
            }
            if (isset($data['multipleBirthBoolean'])) {
                $this->setMultipleBirthBoolean($data['multipleBirthBoolean']);
            }
            if (isset($data['multipleBirthInteger'])) {
                $this->setMultipleBirthInteger($data['multipleBirthInteger']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['photo'])) {
                $this->setPhoto($data['photo']);
            }
            if (isset($data['telecom'])) {
                $this->setTelecom($data['telecom']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Whether this patient record is in active use. 
Many systems use this property to mark as non-current patients, such as those that have not been seen for a period of time based on an organization's business rules.

It is often used to filter patient lists to exclude inactive patients

Deceased patients may also be marked as inactive for the same reasons, but may be active for some time after death.
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
                'FHIRPatient::setActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($active)
            ));
        }
        $this->active = $active;
        return $this;
    }

    /**
     * Whether this patient record is in active use. 
Many systems use this property to mark as non-current patients, such as those that have not been seen for a period of time based on an organization's business rules.

It is often used to filter patient lists to exclude inactive patients

Deceased patients may also be marked as inactive for the same reasons, but may be active for some time after death.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }


    /**
     * An address for the individual.
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
     * An address for the individual.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getAddress()
    {
        return $this->address;
    }


    /**
     * The date of birth for the individual.
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
                'FHIRPatient::setBirthDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($birthDate)
            ));
        }
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * The date of birth for the individual.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }


    /**
     * A language which may be used to communicate with the patient about his or her health.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication
     * @return $this
     */
    public function setCommunication(FHIRPatientCommunication $communication = null)
    {
        if (null === $communication) {
            return $this; 
        }
        $this->communication = $communication;
        return $this;
    }

    /**
     * A language which may be used to communicate with the patient about his or her health.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication
     */
    public function getCommunication()
    {
        return $this->communication;
    }


    /**
     * A contact party (e.g. guardian, partner, friend) for the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact
     * @return $this
     */
    public function setContact(FHIRPatientContact $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * A contact party (e.g. guardian, partner, friend) for the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact
     */
    public function getContact()
    {
        return $this->contact;
    }


    /**
     * Indicates if the individual is deceased or not.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setDeceasedBoolean($deceasedBoolean)
    {
        if (null === $deceasedBoolean) {
            return $this; 
        }
        if (is_scalar($deceasedBoolean)) {
            $deceasedBoolean = new FHIRBoolean($deceasedBoolean);
        }
        if (!($deceasedBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::setDeceasedBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($deceasedBoolean)
            ));
        }
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * Indicates if the individual is deceased or not.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }


    /**
     * Indicates if the individual is deceased or not.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDeceasedDateTime($deceasedDateTime)
    {
        if (null === $deceasedDateTime) {
            return $this; 
        }
        if (is_scalar($deceasedDateTime)) {
            $deceasedDateTime = new FHIRDateTime($deceasedDateTime);
        }
        if (!($deceasedDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::setDeceasedDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($deceasedDateTime)
            ));
        }
        $this->deceasedDateTime = $deceasedDateTime;
        return $this;
    }

    /**
     * Indicates if the individual is deceased or not.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDeceasedDateTime()
    {
        return $this->deceasedDateTime;
    }


    /**
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
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
                'FHIRPatient::setGender - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender or appropriate scalar value, %s seen.',
                gettype($gender)
            ));
        }
        $this->gender = $gender;
        return $this;
    }

    /**
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender()
    {
        return $this->gender;
    }


    /**
     * Patient's nominated care provider.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setGeneralPractitioner(FHIRReference $generalPractitioner = null)
    {
        if (null === $generalPractitioner) {
            return $this; 
        }
        $this->generalPractitioner = $generalPractitioner;
        return $this;
    }

    /**
     * Patient's nominated care provider.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getGeneralPractitioner()
    {
        return $this->generalPractitioner;
    }


    /**
     * An identifier for this patient.
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
     * An identifier for this patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Link to another patient resource that concerns the same actual patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink
     * @return $this
     */
    public function setLink(FHIRPatientLink $link = null)
    {
        if (null === $link) {
            return $this; 
        }
        $this->link = $link;
        return $this;
    }

    /**
     * Link to another patient resource that concerns the same actual patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink
     */
    public function getLink()
    {
        return $this->link;
    }


    /**
     * Organization that is the custodian of the patient record.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManagingOrganization(FHIRReference $managingOrganization = null)
    {
        if (null === $managingOrganization) {
            return $this; 
        }
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Organization that is the custodian of the patient record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }


    /**
     * This field contains a patient's most recent marital (civil) status.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMaritalStatus(FHIRCodeableConcept $maritalStatus = null)
    {
        if (null === $maritalStatus) {
            return $this; 
        }
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * This field contains a patient's most recent marital (civil) status.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }


    /**
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setMultipleBirthBoolean($multipleBirthBoolean)
    {
        if (null === $multipleBirthBoolean) {
            return $this; 
        }
        if (is_scalar($multipleBirthBoolean)) {
            $multipleBirthBoolean = new FHIRBoolean($multipleBirthBoolean);
        }
        if (!($multipleBirthBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::setMultipleBirthBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($multipleBirthBoolean)
            ));
        }
        $this->multipleBirthBoolean = $multipleBirthBoolean;
        return $this;
    }

    /**
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMultipleBirthBoolean()
    {
        return $this->multipleBirthBoolean;
    }


    /**
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setMultipleBirthInteger($multipleBirthInteger)
    {
        if (null === $multipleBirthInteger) {
            return $this; 
        }
        if (is_scalar($multipleBirthInteger)) {
            $multipleBirthInteger = new FHIRInteger($multipleBirthInteger);
        }
        if (!($multipleBirthInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::setMultipleBirthInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($multipleBirthInteger)
            ));
        }
        $this->multipleBirthInteger = $multipleBirthInteger;
        return $this;
    }

    /**
     * Indicates whether the patient is part of a multiple (boolean) or indicates the actual birth order (integer).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMultipleBirthInteger()
    {
        return $this->multipleBirthInteger;
    }


    /**
     * A name associated with the individual.
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
     * A name associated with the individual.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Image of the patient.
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
     * Image of the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPhoto()
    {
        return $this->photo;
    }


    /**
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
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
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
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
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            $a['deceasedBoolean'] = $v;
        }
        if (null !== ($v = $this->getDeceasedDateTime())) {
            $a['deceasedDateTime'] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a['gender'] = $v;
        }
        if (null !== ($v = $this->getGeneralPractitioner())) {
            $a['generalPractitioner'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLink())) {
            $a['link'] = $v;
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $a['managingOrganization'] = $v;
        }
        if (null !== ($v = $this->getMaritalStatus())) {
            $a['maritalStatus'] = $v;
        }
        if (null !== ($v = $this->getMultipleBirthBoolean())) {
            $a['multipleBirthBoolean'] = $v;
        }
        if (null !== ($v = $this->getMultipleBirthInteger())) {
            $a['multipleBirthInteger'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getPhoto())) {
            $a['photo'] = $v;
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
            $sxe = new \SimpleXMLElement('<Patient xmlns="http://hl7.org/fhir"></Patient>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}