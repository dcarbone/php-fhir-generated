<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdministrativeGender;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Demographics and administrative information about a person independent of a
 * specific health-related context.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRPerson
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRPerson extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PERSON;

    const FIELD_ACTIVE = 'active';
    const FIELD_ACTIVE_EXT = '_active';
    const FIELD_ADDRESS = 'address';
    const FIELD_BIRTH_DATE = 'birthDate';
    const FIELD_BIRTH_DATE_EXT = '_birthDate';
    const FIELD_GENDER = 'gender';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LINK = 'link';
    const FIELD_MANAGING_ORGANIZATION = 'managingOrganization';
    const FIELD_NAME = 'name';
    const FIELD_PHOTO = 'photo';
    const FIELD_TELECOM = 'telecom';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this person's record is in active use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $active = null;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * One or more addresses for the person.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress[]
     */
    private $address = [];
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The birth date for the person.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    private $birthDate = null;
    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Administrative Gender.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdministrativeGender
     */
    private $gender = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for a person within a particular scope.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * Demographics and administrative information about a person independent of a
     * specific health-related context.
     *
     * Link to a resource that concerns the same actual person.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink[]
     */
    private $link = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that is the custodian of the person record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $managingOrganization = null;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A name associated with the person.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName[]
     */
    private $name = [];
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An image that can be displayed as a thumbnail of the person to enhance the
     * identification of the individual.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    private $photo = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint[]
     */
    private $telecom = [];

    /**
     * FHIRPerson Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPerson::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTIVE])) {
            $ext = (isset($data[self::FIELD_ACTIVE_EXT]) && is_array($data[self::FIELD_ACTIVE_EXT]))
                ? $data[self::FIELD_ACTIVE_EXT]
                : null;
            if ($data[self::FIELD_ACTIVE] instanceof FHIRBoolean) {
                $this->setActive($data[self::FIELD_ACTIVE]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACTIVE])) {
                $this->setActive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ACTIVE]] + $ext));
            } else {
                $this->setActive(new FHIRBoolean($data[self::FIELD_ACTIVE]));
            }
        }
        if (isset($data[self::FIELD_ADDRESS])) {
            if (is_array($data[self::FIELD_ADDRESS])) {
                foreach($data[self::FIELD_ADDRESS] as $v) {
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
        if (isset($data[self::FIELD_BIRTH_DATE])) {
            $ext = (isset($data[self::FIELD_BIRTH_DATE_EXT]) && is_array($data[self::FIELD_BIRTH_DATE_EXT]))
                ? $data[self::FIELD_BIRTH_DATE_EXT]
                : null;
            if ($data[self::FIELD_BIRTH_DATE] instanceof FHIRDate) {
                $this->setBirthDate($data[self::FIELD_BIRTH_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_BIRTH_DATE])) {
                $this->setBirthDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_BIRTH_DATE]] + $ext));
            } else {
                $this->setBirthDate(new FHIRDate($data[self::FIELD_BIRTH_DATE]));
            }
        }
        if (isset($data[self::FIELD_GENDER])) {
            if ($data[self::FIELD_GENDER] instanceof FHIRAdministrativeGender) {
                $this->setGender($data[self::FIELD_GENDER]);
            } else {
                $this->setGender(new FHIRAdministrativeGender($data[self::FIELD_GENDER]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
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
                    if ($v instanceof FHIRPersonLink) {
                        $this->addLink($v);
                    } else {
                        $this->addLink(new FHIRPersonLink($v));
                    }
                }
            } else if ($data[self::FIELD_LINK] instanceof FHIRPersonLink) {
                $this->addLink($data[self::FIELD_LINK]);
            } else {
                $this->addLink(new FHIRPersonLink($data[self::FIELD_LINK]));
            }
        }
        if (isset($data[self::FIELD_MANAGING_ORGANIZATION])) {
            if ($data[self::FIELD_MANAGING_ORGANIZATION] instanceof FHIRReference) {
                $this->setManagingOrganization($data[self::FIELD_MANAGING_ORGANIZATION]);
            } else {
                $this->setManagingOrganization(new FHIRReference($data[self::FIELD_MANAGING_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            if (is_array($data[self::FIELD_NAME])) {
                foreach($data[self::FIELD_NAME] as $v) {
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
            if ($data[self::FIELD_PHOTO] instanceof FHIRAttachment) {
                $this->setPhoto($data[self::FIELD_PHOTO]);
            } else {
                $this->setPhoto(new FHIRAttachment($data[self::FIELD_PHOTO]));
            }
        }
        if (isset($data[self::FIELD_TELECOM])) {
            if (is_array($data[self::FIELD_TELECOM])) {
                foreach($data[self::FIELD_TELECOM] as $v) {
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
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this person's record is in active use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this person's record is in active use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $active
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * One or more addresses for the person.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress[]
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * One or more addresses for the person.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress $address
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * One or more addresses for the person.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress[] $address
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The birth date for the person.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The birth date for the person.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $birthDate
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Administrative Gender.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Administrative Gender.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdministrativeGender $gender
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    public function setGender(FHIRAdministrativeGender $gender = null)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for a person within a particular scope.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for a person within a particular scope.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for a person within a particular scope.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
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
     * Demographics and administrative information about a person independent of a
     * specific health-related context.
     *
     * Link to a resource that concerns the same actual person.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Demographics and administrative information about a person independent of a
     * specific health-related context.
     *
     * Link to a resource that concerns the same actual person.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink $link
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    public function addLink(FHIRPersonLink $link = null)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * Demographics and administrative information about a person independent of a
     * specific health-related context.
     *
     * Link to a resource that concerns the same actual person.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink[] $link
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    public function setLink(array $link = [])
    {
        $this->link = [];
        if ([] === $link) {
            return $this;
        }
        foreach($link as $v) {
            if ($v instanceof FHIRPersonLink) {
                $this->addLink($v);
            } else {
                $this->addLink(new FHIRPersonLink($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that is the custodian of the person record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that is the custodian of the person record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $managingOrganization
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    public function setManagingOrganization(FHIRReference $managingOrganization = null)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A name associated with the person.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A name associated with the person.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName $name
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    public function addName(FHIRHumanName $name = null)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A name associated with the person.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName[] $name
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An image that can be displayed as a thumbnail of the person to enhance the
     * identification of the individual.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An image that can be displayed as a thumbnail of the person to enhance the
     * identification of the individual.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $photo
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    public function setPhoto(FHIRAttachment $photo = null)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint $telecom
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A contact detail for the person, e.g. a telephone number or an email address.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint[] $telecom
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRPerson::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRPerson::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRPerson);
        } elseif (!is_object($type) || !($type instanceof FHIRPerson)) {
            throw new \RuntimeException(sprintf(
                'FHIRPerson::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->active)) {
            $type->setActive((string)$attributes->active);
        }
        if (isset($children->active)) {
            $type->setActive(FHIRBoolean::xmlUnserialize($children->active));
        }
        if (isset($children->address)) {
            foreach($children->address as $child) {
                $type->addAddress(FHIRAddress::xmlUnserialize($child));
            }
        }
        if (isset($attributes->birthDate)) {
            $type->setBirthDate((string)$attributes->birthDate);
        }
        if (isset($children->birthDate)) {
            $type->setBirthDate(FHIRDate::xmlUnserialize($children->birthDate));
        }
        if (isset($children->gender)) {
            $type->setGender(FHIRAdministrativeGender::xmlUnserialize($children->gender));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->link)) {
            foreach($children->link as $child) {
                $type->addLink(FHIRPersonLink::xmlUnserialize($child));
            }
        }
        if (isset($children->managingOrganization)) {
            $type->setManagingOrganization(FHIRReference::xmlUnserialize($children->managingOrganization));
        }
        if (isset($children->name)) {
            foreach($children->name as $child) {
                $type->addName(FHIRHumanName::xmlUnserialize($child));
            }
        }
        if (isset($children->photo)) {
            $type->setPhoto(FHIRAttachment::xmlUnserialize($children->photo));
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
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Person xmlns="http://hl7.org/fhir"></Person>');
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getActive())) {
            $sxe->addAttribute(self::FIELD_ACTIVE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTIVE));
            }
        }

        if ([] !== ($vs = $this->getAddress())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADDRESS));
            }
        }
        if (null !== ($v = $this->getBirthDate())) {
            $sxe->addAttribute(self::FIELD_BIRTH_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_BIRTH_DATE));
            }
        }

        if (null !== ($v = $this->getGender())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GENDER));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }

        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINK));
            }
        }

        if (null !== ($v = $this->getManagingOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANAGING_ORGANIZATION));
        }

        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }

        if (null !== ($v = $this->getPhoto())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PHOTO));
        }

        if ([] !== ($vs = $this->getTelecom())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TELECOM));
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
            $a[self::FIELD_ACTIVE] = (string)$v;
            $a[self::FIELD_ACTIVE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getAddress())) {
            $a[self::FIELD_ADDRESS] = $vs;
        }
        if (null !== ($v = $this->getBirthDate())) {
            $a[self::FIELD_BIRTH_DATE] = (string)$v;
            $a[self::FIELD_BIRTH_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a[self::FIELD_GENDER] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getLink())) {
            $a[self::FIELD_LINK] = $vs;
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $a[self::FIELD_MANAGING_ORGANIZATION] = $v;
        }
        if ([] !== ($vs = $this->getName())) {
            $a[self::FIELD_NAME] = $vs;
        }
        if (null !== ($v = $this->getPhoto())) {
            $a[self::FIELD_PHOTO] = $v;
        }
        if ([] !== ($vs = $this->getTelecom())) {
            $a[self::FIELD_TELECOM] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}