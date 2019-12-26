<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdministrativeGender;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Demographics and other administrative information about an individual or animal
 * receiving care or other health-related services.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRPatient
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRPatient extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PATIENT;
    const FIELD_ACTIVE = 'active';
    const FIELD_ACTIVE_EXT = '_active';
    const FIELD_ADDRESS = 'address';
    const FIELD_BIRTH_DATE = 'birthDate';
    const FIELD_BIRTH_DATE_EXT = '_birthDate';
    const FIELD_COMMUNICATION = 'communication';
    const FIELD_CONTACT = 'contact';
    const FIELD_DECEASED_BOOLEAN = 'deceasedBoolean';
    const FIELD_DECEASED_BOOLEAN_EXT = '_deceasedBoolean';
    const FIELD_DECEASED_DATE_TIME = 'deceasedDateTime';
    const FIELD_DECEASED_DATE_TIME_EXT = '_deceasedDateTime';
    const FIELD_GENDER = 'gender';
    const FIELD_GENDER_EXT = '_gender';
    const FIELD_GENERAL_PRACTITIONER = 'generalPractitioner';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LINK = 'link';
    const FIELD_MANAGING_ORGANIZATION = 'managingOrganization';
    const FIELD_MARITAL_STATUS = 'maritalStatus';
    const FIELD_MULTIPLE_BIRTH_BOOLEAN = 'multipleBirthBoolean';
    const FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT = '_multipleBirthBoolean';
    const FIELD_MULTIPLE_BIRTH_INTEGER = 'multipleBirthInteger';
    const FIELD_MULTIPLE_BIRTH_INTEGER_EXT = '_multipleBirthInteger';
    const FIELD_NAME = 'name';
    const FIELD_PHOTO = 'photo';
    const FIELD_TELECOM = 'telecom';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this patient record is in active use. Many systems use this property to
     * mark as non-current patients, such as those that have not been seen for a period
     * of time based on an organization's business rules. It is often used to filter
     * patient lists to exclude inactive patients Deceased patients may also be marked
     * as inactive for the same reasons, but may be active for some time after death.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $active = null;

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An address for the individual.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress[]
     */
    protected $address = [];

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date of birth for the individual.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $birthDate = null;

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * A language which may be used to communicate with the patient about his or her
     * health.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication[]
     */
    protected $communication = [];

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact[]
     */
    protected $contact = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $deceasedBoolean = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $deceasedDateTime = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the patient is considered to have for
     * administration and record keeping purposes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdministrativeGender
     */
    protected $gender = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient's nominated care provider.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $generalPractitioner = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for this patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * Link to another patient resource that concerns the same actual patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink[]
     */
    protected $link = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization that is the custodian of the patient record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $managingOrganization = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This field contains a patient's most recent marital (civil) status.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $maritalStatus = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple (boolean) or indicates the
     * actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $multipleBirthBoolean = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple (boolean) or indicates the
     * actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $multipleBirthInteger = null;

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName[]
     */
    protected $name = [];

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Image of the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment[]
     */
    protected $photo = [];

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail (e.g. a telephone number or an email address) by which the
     * individual may be contacted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[]
     */
    protected $telecom = [];

    /**
     * Validation map for fields in type Patient
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRPatient Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTIVE]) || isset($data[self::FIELD_ACTIVE_EXT])) {
            if (isset($data[self::FIELD_ACTIVE])) {
                $value = $data[self::FIELD_ACTIVE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ACTIVE_EXT]) && is_array($data[self::FIELD_ACTIVE_EXT])) {
                $ext = $data[self::FIELD_ACTIVE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setActive($value);
                } else if (is_array($value)) {
                    $this->setActive(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setActive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setActive(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_ADDRESS])) {
            if (is_array($data[self::FIELD_ADDRESS])) {
                foreach($data[self::FIELD_ADDRESS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAddress) {
                        $this->addAddress($v);
                    } else {
                        $this->addAddress(new FHIRAddress($v));
                    }
                }
            } else if ($data[self::FIELD_ADDRESS] instanceof FHIRAddress) {
                $this->addAddress($data[self::FIELD_ADDRESS]);
            } else {
                $this->addAddress(new FHIRAddress($data[self::FIELD_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_BIRTH_DATE]) || isset($data[self::FIELD_BIRTH_DATE_EXT])) {
            if (isset($data[self::FIELD_BIRTH_DATE])) {
                $value = $data[self::FIELD_BIRTH_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_BIRTH_DATE_EXT]) && is_array($data[self::FIELD_BIRTH_DATE_EXT])) {
                $ext = $data[self::FIELD_BIRTH_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setBirthDate($value);
                } else if (is_array($value)) {
                    $this->setBirthDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setBirthDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setBirthDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_COMMUNICATION])) {
            if (is_array($data[self::FIELD_COMMUNICATION])) {
                foreach($data[self::FIELD_COMMUNICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPatientCommunication) {
                        $this->addCommunication($v);
                    } else {
                        $this->addCommunication(new FHIRPatientCommunication($v));
                    }
                }
            } else if ($data[self::FIELD_COMMUNICATION] instanceof FHIRPatientCommunication) {
                $this->addCommunication($data[self::FIELD_COMMUNICATION]);
            } else {
                $this->addCommunication(new FHIRPatientCommunication($data[self::FIELD_COMMUNICATION]));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPatientContact) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRPatientContact($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIRPatientContact) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRPatientContact($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_DECEASED_BOOLEAN]) || isset($data[self::FIELD_DECEASED_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_DECEASED_BOOLEAN])) {
                $value = $data[self::FIELD_DECEASED_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DECEASED_BOOLEAN_EXT]) && is_array($data[self::FIELD_DECEASED_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_DECEASED_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDeceasedBoolean($value);
                } else if (is_array($value)) {
                    $this->setDeceasedBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDeceasedBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDeceasedBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_DECEASED_DATE_TIME]) || isset($data[self::FIELD_DECEASED_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_DECEASED_DATE_TIME])) {
                $value = $data[self::FIELD_DECEASED_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DECEASED_DATE_TIME_EXT]) && is_array($data[self::FIELD_DECEASED_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_DECEASED_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDeceasedDateTime($value);
                } else if (is_array($value)) {
                    $this->setDeceasedDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDeceasedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDeceasedDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_GENDER]) || isset($data[self::FIELD_GENDER_EXT])) {
            if (isset($data[self::FIELD_GENDER])) {
                $value = $data[self::FIELD_GENDER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_GENDER_EXT]) && is_array($data[self::FIELD_GENDER_EXT])) {
                $ext = $data[self::FIELD_GENDER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRAdministrativeGender) {
                    $this->setGender($value);
                } else if (is_array($value)) {
                    $this->setGender(new FHIRAdministrativeGender(array_merge($ext, $value)));
                } else {
                    $this->setGender(new FHIRAdministrativeGender([FHIRAdministrativeGender::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setGender(new FHIRAdministrativeGender($ext));
            }
        }
        if (isset($data[self::FIELD_GENERAL_PRACTITIONER])) {
            if (is_array($data[self::FIELD_GENERAL_PRACTITIONER])) {
                foreach($data[self::FIELD_GENERAL_PRACTITIONER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addGeneralPractitioner($v);
                    } else {
                        $this->addGeneralPractitioner(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_GENERAL_PRACTITIONER] instanceof FHIRReference) {
                $this->addGeneralPractitioner($data[self::FIELD_GENERAL_PRACTITIONER]);
            } else {
                $this->addGeneralPractitioner(new FHIRReference($data[self::FIELD_GENERAL_PRACTITIONER]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LINK])) {
            if (is_array($data[self::FIELD_LINK])) {
                foreach($data[self::FIELD_LINK] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPatientLink) {
                        $this->addLink($v);
                    } else {
                        $this->addLink(new FHIRPatientLink($v));
                    }
                }
            } else if ($data[self::FIELD_LINK] instanceof FHIRPatientLink) {
                $this->addLink($data[self::FIELD_LINK]);
            } else {
                $this->addLink(new FHIRPatientLink($data[self::FIELD_LINK]));
            }
        }
        if (isset($data[self::FIELD_MANAGING_ORGANIZATION])) {
            if ($data[self::FIELD_MANAGING_ORGANIZATION] instanceof FHIRReference) {
                $this->setManagingOrganization($data[self::FIELD_MANAGING_ORGANIZATION]);
            } else {
                $this->setManagingOrganization(new FHIRReference($data[self::FIELD_MANAGING_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_MARITAL_STATUS])) {
            if ($data[self::FIELD_MARITAL_STATUS] instanceof FHIRCodeableConcept) {
                $this->setMaritalStatus($data[self::FIELD_MARITAL_STATUS]);
            } else {
                $this->setMaritalStatus(new FHIRCodeableConcept($data[self::FIELD_MARITAL_STATUS]));
            }
        }
        if (isset($data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN]) || isset($data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN])) {
                $value = $data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT]) && is_array($data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setMultipleBirthBoolean($value);
                } else if (is_array($value)) {
                    $this->setMultipleBirthBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setMultipleBirthBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMultipleBirthBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_MULTIPLE_BIRTH_INTEGER]) || isset($data[self::FIELD_MULTIPLE_BIRTH_INTEGER_EXT])) {
            if (isset($data[self::FIELD_MULTIPLE_BIRTH_INTEGER])) {
                $value = $data[self::FIELD_MULTIPLE_BIRTH_INTEGER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MULTIPLE_BIRTH_INTEGER_EXT]) && is_array($data[self::FIELD_MULTIPLE_BIRTH_INTEGER_EXT])) {
                $ext = $data[self::FIELD_MULTIPLE_BIRTH_INTEGER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMultipleBirthInteger($value);
                } else if (is_array($value)) {
                    $this->setMultipleBirthInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMultipleBirthInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMultipleBirthInteger(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            if (is_array($data[self::FIELD_NAME])) {
                foreach($data[self::FIELD_NAME] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRHumanName) {
                        $this->addName($v);
                    } else {
                        $this->addName(new FHIRHumanName($v));
                    }
                }
            } else if ($data[self::FIELD_NAME] instanceof FHIRHumanName) {
                $this->addName($data[self::FIELD_NAME]);
            } else {
                $this->addName(new FHIRHumanName($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PHOTO])) {
            if (is_array($data[self::FIELD_PHOTO])) {
                foreach($data[self::FIELD_PHOTO] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAttachment) {
                        $this->addPhoto($v);
                    } else {
                        $this->addPhoto(new FHIRAttachment($v));
                    }
                }
            } else if ($data[self::FIELD_PHOTO] instanceof FHIRAttachment) {
                $this->addPhoto($data[self::FIELD_PHOTO]);
            } else {
                $this->addPhoto(new FHIRAttachment($data[self::FIELD_PHOTO]));
            }
        }
        if (isset($data[self::FIELD_TELECOM])) {
            if (is_array($data[self::FIELD_TELECOM])) {
                foreach($data[self::FIELD_TELECOM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactPoint) {
                        $this->addTelecom($v);
                    } else {
                        $this->addTelecom(new FHIRContactPoint($v));
                    }
                }
            } else if ($data[self::FIELD_TELECOM] instanceof FHIRContactPoint) {
                $this->addTelecom($data[self::FIELD_TELECOM]);
            } else {
                $this->addTelecom(new FHIRContactPoint($data[self::FIELD_TELECOM]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Patient{$xmlns}></Patient>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this patient record is in active use. Many systems use this property to
     * mark as non-current patients, such as those that have not been seen for a period
     * of time based on an organization's business rules. It is often used to filter
     * patient lists to exclude inactive patients Deceased patients may also be marked
     * as inactive for the same reasons, but may be active for some time after death.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this patient record is in active use. Many systems use this property to
     * mark as non-current patients, such as those that have not been seen for a period
     * of time based on an organization's business rules. It is often used to filter
     * patient lists to exclude inactive patients Deceased patients may also be marked
     * as inactive for the same reasons, but may be active for some time after death.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $active
     * @return static
     */
    public function setActive($active = null)
    {
        if (null === $active) {
            $this->active = null;
            return $this;
        }
        if ($active instanceof FHIRBoolean) {
            $this->active = $active;
            return $this;
        }
        $this->active = new FHIRBoolean($active);
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An address for the individual.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An address for the individual.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress $address
     * @return static
     */
    public function addAddress(FHIRAddress $address = null)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An address for the individual.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress[] $address
     * @return static
     */
    public function setAddress(array $address = [])
    {
        $this->address = [];
        if ([] === $address) {
            return $this;
        }
        foreach($address as $v) {
            if ($v instanceof FHIRAddress) {
                $this->addAddress($v);
            } else {
                $this->addAddress(new FHIRAddress($v));
            }
        }
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date of birth for the individual.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date of birth for the individual.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $birthDate
     * @return static
     */
    public function setBirthDate($birthDate = null)
    {
        if (null === $birthDate) {
            $this->birthDate = null;
            return $this;
        }
        if ($birthDate instanceof FHIRDate) {
            $this->birthDate = $birthDate;
            return $this;
        }
        $this->birthDate = new FHIRDate($birthDate);
        return $this;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * A language which may be used to communicate with the patient about his or her
     * health.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * A language which may be used to communicate with the patient about his or her
     * health.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication $communication
     * @return static
     */
    public function addCommunication(FHIRPatientCommunication $communication = null)
    {
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * A language which may be used to communicate with the patient about his or her
     * health.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication[] $communication
     * @return static
     */
    public function setCommunication(array $communication = [])
    {
        $this->communication = [];
        if ([] === $communication) {
            return $this;
        }
        foreach($communication as $v) {
            if ($v instanceof FHIRPatientCommunication) {
                $this->addCommunication($v);
            } else {
                $this->addCommunication(new FHIRPatientCommunication($v));
            }
        }
        return $this;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact $contact
     * @return static
     */
    public function addContact(FHIRPatientContact $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact[] $contact
     * @return static
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRPatientContact) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRPatientContact($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $deceasedBoolean
     * @return static
     */
    public function setDeceasedBoolean($deceasedBoolean = null)
    {
        if (null === $deceasedBoolean) {
            $this->deceasedBoolean = null;
            return $this;
        }
        if ($deceasedBoolean instanceof FHIRBoolean) {
            $this->deceasedBoolean = $deceasedBoolean;
            return $this;
        }
        $this->deceasedBoolean = new FHIRBoolean($deceasedBoolean);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getDeceasedDateTime()
    {
        return $this->deceasedDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $deceasedDateTime
     * @return static
     */
    public function setDeceasedDateTime($deceasedDateTime = null)
    {
        if (null === $deceasedDateTime) {
            $this->deceasedDateTime = null;
            return $this;
        }
        if ($deceasedDateTime instanceof FHIRDateTime) {
            $this->deceasedDateTime = $deceasedDateTime;
            return $this;
        }
        $this->deceasedDateTime = new FHIRDateTime($deceasedDateTime);
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the patient is considered to have for
     * administration and record keeping purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the patient is considered to have for
     * administration and record keeping purposes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdministrativeGender $gender
     * @return static
     */
    public function setGender(FHIRAdministrativeGender $gender = null)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient's nominated care provider.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getGeneralPractitioner()
    {
        return $this->generalPractitioner;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient's nominated care provider.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $generalPractitioner
     * @return static
     */
    public function addGeneralPractitioner(FHIRReference $generalPractitioner = null)
    {
        $this->generalPractitioner[] = $generalPractitioner;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient's nominated care provider.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $generalPractitioner
     * @return static
     */
    public function setGeneralPractitioner(array $generalPractitioner = [])
    {
        $this->generalPractitioner = [];
        if ([] === $generalPractitioner) {
            return $this;
        }
        foreach($generalPractitioner as $v) {
            if ($v instanceof FHIRReference) {
                $this->addGeneralPractitioner($v);
            } else {
                $this->addGeneralPractitioner(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for this patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for this patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for this patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * Link to another patient resource that concerns the same actual patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * Link to another patient resource that concerns the same actual patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink $link
     * @return static
     */
    public function addLink(FHIRPatientLink $link = null)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     *
     * Link to another patient resource that concerns the same actual patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink[] $link
     * @return static
     */
    public function setLink(array $link = [])
    {
        $this->link = [];
        if ([] === $link) {
            return $this;
        }
        foreach($link as $v) {
            if ($v instanceof FHIRPatientLink) {
                $this->addLink($v);
            } else {
                $this->addLink(new FHIRPatientLink($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization that is the custodian of the patient record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization that is the custodian of the patient record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $managingOrganization
     * @return static
     */
    public function setManagingOrganization(FHIRReference $managingOrganization = null)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This field contains a patient's most recent marital (civil) status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This field contains a patient's most recent marital (civil) status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $maritalStatus
     * @return static
     */
    public function setMaritalStatus(FHIRCodeableConcept $maritalStatus = null)
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple (boolean) or indicates the
     * actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getMultipleBirthBoolean()
    {
        return $this->multipleBirthBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple (boolean) or indicates the
     * actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $multipleBirthBoolean
     * @return static
     */
    public function setMultipleBirthBoolean($multipleBirthBoolean = null)
    {
        if (null === $multipleBirthBoolean) {
            $this->multipleBirthBoolean = null;
            return $this;
        }
        if ($multipleBirthBoolean instanceof FHIRBoolean) {
            $this->multipleBirthBoolean = $multipleBirthBoolean;
            return $this;
        }
        $this->multipleBirthBoolean = new FHIRBoolean($multipleBirthBoolean);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple (boolean) or indicates the
     * actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getMultipleBirthInteger()
    {
        return $this->multipleBirthInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple (boolean) or indicates the
     * actual birth order (integer). (choose any one of multipleBirth*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $multipleBirthInteger
     * @return static
     */
    public function setMultipleBirthInteger($multipleBirthInteger = null)
    {
        if (null === $multipleBirthInteger) {
            $this->multipleBirthInteger = null;
            return $this;
        }
        if ($multipleBirthInteger instanceof FHIRInteger) {
            $this->multipleBirthInteger = $multipleBirthInteger;
            return $this;
        }
        $this->multipleBirthInteger = new FHIRInteger($multipleBirthInteger);
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName $name
     * @return static
     */
    public function addName(FHIRHumanName $name = null)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRHumanName[] $name
     * @return static
     */
    public function setName(array $name = [])
    {
        $this->name = [];
        if ([] === $name) {
            return $this;
        }
        foreach($name as $v) {
            if ($v instanceof FHIRHumanName) {
                $this->addName($v);
            } else {
                $this->addName(new FHIRHumanName($v));
            }
        }
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Image of the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment[]
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Image of the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment $photo
     * @return static
     */
    public function addPhoto(FHIRAttachment $photo = null)
    {
        $this->photo[] = $photo;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Image of the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment[] $photo
     * @return static
     */
    public function setPhoto(array $photo = [])
    {
        $this->photo = [];
        if ([] === $photo) {
            return $this;
        }
        foreach($photo as $v) {
            if ($v instanceof FHIRAttachment) {
                $this->addPhoto($v);
            } else {
                $this->addPhoto(new FHIRAttachment($v));
            }
        }
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail (e.g. a telephone number or an email address) by which the
     * individual may be contacted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail (e.g. a telephone number or an email address) by which the
     * individual may be contacted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint $telecom
     * @return static
     */
    public function addTelecom(FHIRContactPoint $telecom = null)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail (e.g. a telephone number or an email address) by which the
     * individual may be contacted.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[] $telecom
     * @return static
     */
    public function setTelecom(array $telecom = [])
    {
        $this->telecom = [];
        if ([] === $telecom) {
            return $this;
        }
        foreach($telecom as $v) {
            if ($v instanceof FHIRContactPoint) {
                $this->addTelecom($v);
            } else {
                $this->addTelecom(new FHIRContactPoint($v));
            }
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getActive())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTIVE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAddress())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDRESS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getBirthDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BIRTH_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCommunication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMMUNICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DECEASED_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeceasedDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DECEASED_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGender())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GENDER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getGeneralPractitioner())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GENERAL_PRACTITIONER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINK, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANAGING_ORGANIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaritalStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MARITAL_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMultipleBirthBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MULTIPLE_BIRTH_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMultipleBirthInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MULTIPLE_BIRTH_INTEGER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPhoto())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PHOTO, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTelecom())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TELECOM, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTIVE])) {
            $v = $this->getActive();
            foreach($validationRules[self::FIELD_ACTIVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_ACTIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTIVE])) {
                        $errs[self::FIELD_ACTIVE] = [];
                    }
                    $errs[self::FIELD_ACTIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS])) {
            $v = $this->getAddress();
            foreach($validationRules[self::FIELD_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS])) {
                        $errs[self::FIELD_ADDRESS] = [];
                    }
                    $errs[self::FIELD_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BIRTH_DATE])) {
            $v = $this->getBirthDate();
            foreach($validationRules[self::FIELD_BIRTH_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_BIRTH_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BIRTH_DATE])) {
                        $errs[self::FIELD_BIRTH_DATE] = [];
                    }
                    $errs[self::FIELD_BIRTH_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMUNICATION])) {
            $v = $this->getCommunication();
            foreach($validationRules[self::FIELD_COMMUNICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_COMMUNICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMUNICATION])) {
                        $errs[self::FIELD_COMMUNICATION] = [];
                    }
                    $errs[self::FIELD_COMMUNICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_BOOLEAN])) {
            $v = $this->getDeceasedBoolean();
            foreach($validationRules[self::FIELD_DECEASED_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_DECEASED_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_BOOLEAN])) {
                        $errs[self::FIELD_DECEASED_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_DECEASED_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_DATE_TIME])) {
            $v = $this->getDeceasedDateTime();
            foreach($validationRules[self::FIELD_DECEASED_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_DECEASED_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_DATE_TIME])) {
                        $errs[self::FIELD_DECEASED_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_DECEASED_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENDER])) {
            $v = $this->getGender();
            foreach($validationRules[self::FIELD_GENDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_GENDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENDER])) {
                        $errs[self::FIELD_GENDER] = [];
                    }
                    $errs[self::FIELD_GENDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENERAL_PRACTITIONER])) {
            $v = $this->getGeneralPractitioner();
            foreach($validationRules[self::FIELD_GENERAL_PRACTITIONER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_GENERAL_PRACTITIONER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENERAL_PRACTITIONER])) {
                        $errs[self::FIELD_GENERAL_PRACTITIONER] = [];
                    }
                    $errs[self::FIELD_GENERAL_PRACTITIONER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK])) {
            $v = $this->getLink();
            foreach($validationRules[self::FIELD_LINK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_LINK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK])) {
                        $errs[self::FIELD_LINK] = [];
                    }
                    $errs[self::FIELD_LINK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANAGING_ORGANIZATION])) {
            $v = $this->getManagingOrganization();
            foreach($validationRules[self::FIELD_MANAGING_ORGANIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_MANAGING_ORGANIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANAGING_ORGANIZATION])) {
                        $errs[self::FIELD_MANAGING_ORGANIZATION] = [];
                    }
                    $errs[self::FIELD_MANAGING_ORGANIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MARITAL_STATUS])) {
            $v = $this->getMaritalStatus();
            foreach($validationRules[self::FIELD_MARITAL_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_MARITAL_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MARITAL_STATUS])) {
                        $errs[self::FIELD_MARITAL_STATUS] = [];
                    }
                    $errs[self::FIELD_MARITAL_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MULTIPLE_BIRTH_BOOLEAN])) {
            $v = $this->getMultipleBirthBoolean();
            foreach($validationRules[self::FIELD_MULTIPLE_BIRTH_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_MULTIPLE_BIRTH_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MULTIPLE_BIRTH_BOOLEAN])) {
                        $errs[self::FIELD_MULTIPLE_BIRTH_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_MULTIPLE_BIRTH_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MULTIPLE_BIRTH_INTEGER])) {
            $v = $this->getMultipleBirthInteger();
            foreach($validationRules[self::FIELD_MULTIPLE_BIRTH_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_MULTIPLE_BIRTH_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MULTIPLE_BIRTH_INTEGER])) {
                        $errs[self::FIELD_MULTIPLE_BIRTH_INTEGER] = [];
                    }
                    $errs[self::FIELD_MULTIPLE_BIRTH_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PHOTO])) {
            $v = $this->getPhoto();
            foreach($validationRules[self::FIELD_PHOTO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_PHOTO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PHOTO])) {
                        $errs[self::FIELD_PHOTO] = [];
                    }
                    $errs[self::FIELD_PHOTO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TELECOM])) {
            $v = $this->getTelecom();
            foreach($validationRules[self::FIELD_TELECOM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PATIENT, self::FIELD_TELECOM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TELECOM])) {
                        $errs[self::FIELD_TELECOM] = [];
                    }
                    $errs[self::FIELD_TELECOM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPatient $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPatient
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRPatient::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRPatient::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRPatient;
        } elseif (!is_object($type) || !($type instanceof FHIRPatient)) {
            throw new \RuntimeException(sprintf(
                'FHIRPatient::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRPatient or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->active)) {
            $type->setActive(FHIRBoolean::xmlUnserialize($children->active));
        }
        if (isset($attributes->active)) {
            $pt = $type->getActive();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->active);
            } else {
                $type->setActive((string)$attributes->active);
            }
        }
        if (isset($children->address)) {
            foreach($children->address as $child) {
                $type->addAddress(FHIRAddress::xmlUnserialize($child));
            }
        }
        if (isset($children->birthDate)) {
            $type->setBirthDate(FHIRDate::xmlUnserialize($children->birthDate));
        }
        if (isset($attributes->birthDate)) {
            $pt = $type->getBirthDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->birthDate);
            } else {
                $type->setBirthDate((string)$attributes->birthDate);
            }
        }
        if (isset($children->communication)) {
            foreach($children->communication as $child) {
                $type->addCommunication(FHIRPatientCommunication::xmlUnserialize($child));
            }
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRPatientContact::xmlUnserialize($child));
            }
        }
        if (isset($children->deceasedBoolean)) {
            $type->setDeceasedBoolean(FHIRBoolean::xmlUnserialize($children->deceasedBoolean));
        }
        if (isset($attributes->deceasedBoolean)) {
            $pt = $type->getDeceasedBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->deceasedBoolean);
            } else {
                $type->setDeceasedBoolean((string)$attributes->deceasedBoolean);
            }
        }
        if (isset($children->deceasedDateTime)) {
            $type->setDeceasedDateTime(FHIRDateTime::xmlUnserialize($children->deceasedDateTime));
        }
        if (isset($attributes->deceasedDateTime)) {
            $pt = $type->getDeceasedDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->deceasedDateTime);
            } else {
                $type->setDeceasedDateTime((string)$attributes->deceasedDateTime);
            }
        }
        if (isset($children->gender)) {
            $type->setGender(FHIRAdministrativeGender::xmlUnserialize($children->gender));
        }
        if (isset($children->generalPractitioner)) {
            foreach($children->generalPractitioner as $child) {
                $type->addGeneralPractitioner(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->link)) {
            foreach($children->link as $child) {
                $type->addLink(FHIRPatientLink::xmlUnserialize($child));
            }
        }
        if (isset($children->managingOrganization)) {
            $type->setManagingOrganization(FHIRReference::xmlUnserialize($children->managingOrganization));
        }
        if (isset($children->maritalStatus)) {
            $type->setMaritalStatus(FHIRCodeableConcept::xmlUnserialize($children->maritalStatus));
        }
        if (isset($children->multipleBirthBoolean)) {
            $type->setMultipleBirthBoolean(FHIRBoolean::xmlUnserialize($children->multipleBirthBoolean));
        }
        if (isset($attributes->multipleBirthBoolean)) {
            $pt = $type->getMultipleBirthBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->multipleBirthBoolean);
            } else {
                $type->setMultipleBirthBoolean((string)$attributes->multipleBirthBoolean);
            }
        }
        if (isset($children->multipleBirthInteger)) {
            $type->setMultipleBirthInteger(FHIRInteger::xmlUnserialize($children->multipleBirthInteger));
        }
        if (isset($attributes->multipleBirthInteger)) {
            $pt = $type->getMultipleBirthInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->multipleBirthInteger);
            } else {
                $type->setMultipleBirthInteger((string)$attributes->multipleBirthInteger);
            }
        }
        if (isset($children->name)) {
            foreach($children->name as $child) {
                $type->addName(FHIRHumanName::xmlUnserialize($child));
            }
        }
        if (isset($children->photo)) {
            foreach($children->photo as $child) {
                $type->addPhoto(FHIRAttachment::xmlUnserialize($child));
            }
        }
        if (isset($children->telecom)) {
            foreach($children->telecom as $child) {
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getActive())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTIVE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getAddress())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADDRESS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getBirthDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BIRTH_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCommunication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMMUNICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DECEASED_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDeceasedDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DECEASED_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGender())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GENDER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getGeneralPractitioner())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GENERAL_PRACTITIONER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINK, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANAGING_ORGANIZATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaritalStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MARITAL_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMultipleBirthBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MULTIPLE_BIRTH_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMultipleBirthInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MULTIPLE_BIRTH_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPhoto())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PHOTO, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getTelecom())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TELECOM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getActive())) {
            $a[self::FIELD_ACTIVE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_ACTIVE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getAddress())) {
            $a[self::FIELD_ADDRESS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ADDRESS][] = $v;
            }
        }
        if (null !== ($v = $this->getBirthDate())) {
            $a[self::FIELD_BIRTH_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_BIRTH_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getCommunication())) {
            $a[self::FIELD_COMMUNICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_COMMUNICATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTACT][] = $v;
            }
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            $a[self::FIELD_DECEASED_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_DECEASED_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDeceasedDateTime())) {
            $a[self::FIELD_DECEASED_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DECEASED_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getGender())) {
            $a[self::FIELD_GENDER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRAdministrativeGender::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRAdministrativeGender::FIELD_VALUE]);
                $a[self::FIELD_GENDER_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getGeneralPractitioner())) {
            $a[self::FIELD_GENERAL_PRACTITIONER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_GENERAL_PRACTITIONER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            $a[self::FIELD_LINK] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LINK][] = $v;
            }
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $a[self::FIELD_MANAGING_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getMaritalStatus())) {
            $a[self::FIELD_MARITAL_STATUS] = $v;
        }
        if (null !== ($v = $this->getMultipleBirthBoolean())) {
            $a[self::FIELD_MULTIPLE_BIRTH_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMultipleBirthInteger())) {
            $a[self::FIELD_MULTIPLE_BIRTH_INTEGER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_MULTIPLE_BIRTH_INTEGER_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getName())) {
            $a[self::FIELD_NAME] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NAME][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPhoto())) {
            $a[self::FIELD_PHOTO] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PHOTO][] = $v;
            }
        }
        if ([] !== ($vs = $this->getTelecom())) {
            $a[self::FIELD_TELECOM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TELECOM][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}