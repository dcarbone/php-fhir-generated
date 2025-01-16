<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4B\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4B\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationEntry
 * @package \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationEntry extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY;

    const FIELD_NAME = 'name';
    const FIELD_INITIALS = 'initials';
    const FIELD_INITIALS_EXT = '_initials';
    const FIELD_COLLECTIVE_NAME = 'collectiveName';
    const FIELD_COLLECTIVE_NAME_EXT = '_collectiveName';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_AFFILIATION_INFO = 'affiliationInfo';
    const FIELD_ADDRESS = 'address';
    const FIELD_TELECOM = 'telecom';
    const FIELD_CONTRIBUTION_TYPE = 'contributionType';
    const FIELD_ROLE = 'role';
    const FIELD_CONTRIBUTION_INSTANCE = 'contributionInstance';
    const FIELD_CORRESPONDING_CONTACT = 'correspondingContact';
    const FIELD_CORRESPONDING_CONTACT_EXT = '_correspondingContact';
    const FIELD_LIST_ORDER = 'listOrder';
    const FIELD_LIST_ORDER_EXT = '_listOrder';

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRHumanName
     */
    protected null|FHIRHumanName $name = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Initials for forename.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $initials = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for collective or corporate name as an author.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $collectiveName = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique person identifier.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Organization affiliated with the entity.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo[]
     */
    protected null|array $affiliationInfo = [];
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical mailing address for the author or contributor.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAddress[]
     */
    protected null|array $address = [];
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Email or telephone contact methods for the author or contributor.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactPoint[]
     */
    protected null|array $telecom = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $contributionType = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer).
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $role = null;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[]
     */
    protected null|array $contributionInstance = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of which contributor is the corresponding contributor for the role.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $correspondingContact = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used to code order of authors.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $listOrder = null;

    /**
     * Validation map for fields in type Citation.Entry
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRCitationEntry Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_NAME, $data)) {
            if ($data[self::FIELD_NAME] instanceof FHIRHumanName) {
                $this->setName($data[self::FIELD_NAME]);
            } else {
                $this->setName(new FHIRHumanName($data[self::FIELD_NAME]));
            }
        }
        if (array_key_exists(self::FIELD_INITIALS, $data) || array_key_exists(self::FIELD_INITIALS_EXT, $data)) {
            $value = $data[self::FIELD_INITIALS] ?? null;
            $ext = (isset($data[self::FIELD_INITIALS_EXT]) && is_array($data[self::FIELD_INITIALS_EXT])) ? $data[self::FIELD_INITIALS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setInitials($value);
                } else if (is_array($value)) {
                    $this->setInitials(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setInitials(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitials(new FHIRString($ext));
            } else {
                $this->setInitials(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_COLLECTIVE_NAME, $data) || array_key_exists(self::FIELD_COLLECTIVE_NAME_EXT, $data)) {
            $value = $data[self::FIELD_COLLECTIVE_NAME] ?? null;
            $ext = (isset($data[self::FIELD_COLLECTIVE_NAME_EXT]) && is_array($data[self::FIELD_COLLECTIVE_NAME_EXT])) ? $data[self::FIELD_COLLECTIVE_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCollectiveName($value);
                } else if (is_array($value)) {
                    $this->setCollectiveName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCollectiveName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCollectiveName(new FHIRString($ext));
            } else {
                $this->setCollectiveName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_AFFILIATION_INFO, $data)) {
            if (is_array($data[self::FIELD_AFFILIATION_INFO])) {
                foreach($data[self::FIELD_AFFILIATION_INFO] as $v) {
                    if ($v instanceof FHIRCitationAffiliationInfo) {
                        $this->addAffiliationInfo($v);
                    } else {
                        $this->addAffiliationInfo(new FHIRCitationAffiliationInfo($v));
                    }
                }
            } elseif ($data[self::FIELD_AFFILIATION_INFO] instanceof FHIRCitationAffiliationInfo) {
                $this->addAffiliationInfo($data[self::FIELD_AFFILIATION_INFO]);
            } else {
                $this->addAffiliationInfo(new FHIRCitationAffiliationInfo($data[self::FIELD_AFFILIATION_INFO]));
            }
        }
        if (array_key_exists(self::FIELD_ADDRESS, $data)) {
            if (is_array($data[self::FIELD_ADDRESS])) {
                foreach($data[self::FIELD_ADDRESS] as $v) {
                    if ($v instanceof FHIRAddress) {
                        $this->addAddress($v);
                    } else {
                        $this->addAddress(new FHIRAddress($v));
                    }
                }
            } elseif ($data[self::FIELD_ADDRESS] instanceof FHIRAddress) {
                $this->addAddress($data[self::FIELD_ADDRESS]);
            } else {
                $this->addAddress(new FHIRAddress($data[self::FIELD_ADDRESS]));
            }
        }
        if (array_key_exists(self::FIELD_TELECOM, $data)) {
            if (is_array($data[self::FIELD_TELECOM])) {
                foreach($data[self::FIELD_TELECOM] as $v) {
                    if ($v instanceof FHIRContactPoint) {
                        $this->addTelecom($v);
                    } else {
                        $this->addTelecom(new FHIRContactPoint($v));
                    }
                }
            } elseif ($data[self::FIELD_TELECOM] instanceof FHIRContactPoint) {
                $this->addTelecom($data[self::FIELD_TELECOM]);
            } else {
                $this->addTelecom(new FHIRContactPoint($data[self::FIELD_TELECOM]));
            }
        }
        if (array_key_exists(self::FIELD_CONTRIBUTION_TYPE, $data)) {
            if (is_array($data[self::FIELD_CONTRIBUTION_TYPE])) {
                foreach($data[self::FIELD_CONTRIBUTION_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addContributionType($v);
                    } else {
                        $this->addContributionType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTRIBUTION_TYPE] instanceof FHIRCodeableConcept) {
                $this->addContributionType($data[self::FIELD_CONTRIBUTION_TYPE]);
            } else {
                $this->addContributionType(new FHIRCodeableConcept($data[self::FIELD_CONTRIBUTION_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_ROLE, $data)) {
            if ($data[self::FIELD_ROLE] instanceof FHIRCodeableConcept) {
                $this->setRole($data[self::FIELD_ROLE]);
            } else {
                $this->setRole(new FHIRCodeableConcept($data[self::FIELD_ROLE]));
            }
        }
        if (array_key_exists(self::FIELD_CONTRIBUTION_INSTANCE, $data)) {
            if (is_array($data[self::FIELD_CONTRIBUTION_INSTANCE])) {
                foreach($data[self::FIELD_CONTRIBUTION_INSTANCE] as $v) {
                    if ($v instanceof FHIRCitationContributionInstance) {
                        $this->addContributionInstance($v);
                    } else {
                        $this->addContributionInstance(new FHIRCitationContributionInstance($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTRIBUTION_INSTANCE] instanceof FHIRCitationContributionInstance) {
                $this->addContributionInstance($data[self::FIELD_CONTRIBUTION_INSTANCE]);
            } else {
                $this->addContributionInstance(new FHIRCitationContributionInstance($data[self::FIELD_CONTRIBUTION_INSTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_CORRESPONDING_CONTACT, $data) || array_key_exists(self::FIELD_CORRESPONDING_CONTACT_EXT, $data)) {
            $value = $data[self::FIELD_CORRESPONDING_CONTACT] ?? null;
            $ext = (isset($data[self::FIELD_CORRESPONDING_CONTACT_EXT]) && is_array($data[self::FIELD_CORRESPONDING_CONTACT_EXT])) ? $data[self::FIELD_CORRESPONDING_CONTACT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setCorrespondingContact($value);
                } else if (is_array($value)) {
                    $this->setCorrespondingContact(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setCorrespondingContact(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCorrespondingContact(new FHIRBoolean($ext));
            } else {
                $this->setCorrespondingContact(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_LIST_ORDER, $data) || array_key_exists(self::FIELD_LIST_ORDER_EXT, $data)) {
            $value = $data[self::FIELD_LIST_ORDER] ?? null;
            $ext = (isset($data[self::FIELD_LIST_ORDER_EXT]) && is_array($data[self::FIELD_LIST_ORDER_EXT])) ? $data[self::FIELD_LIST_ORDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setListOrder($value);
                } else if (is_array($value)) {
                    $this->setListOrder(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setListOrder(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setListOrder(new FHIRPositiveInt($ext));
            } else {
                $this->setListOrder(new FHIRPositiveInt(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRHumanName
     */
    public function getName(): null|FHIRHumanName
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRHumanName $name
     * @return static
     */
    public function setName(null|FHIRHumanName $name = null): self
    {
        if (null === $name) {
            $name = new FHIRHumanName();
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Initials for forename.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getInitials(): null|FHIRString
    {
        return $this->initials;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Initials for forename.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $initials
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setInitials(null|string|FHIRStringPrimitive|FHIRString $initials = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $initials && !($initials instanceof FHIRString)) {
            $initials = new FHIRString($initials);
        }
        $this->_trackValueSet($this->initials, $initials);
        if (!isset($this->_xmlLocations[self::FIELD_INITIALS])) {
            $this->_xmlLocations[self::FIELD_INITIALS] = [];
        }
        $this->_xmlLocations[self::FIELD_INITIALS][0] = $xmlLocation;
        $this->initials = $initials;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for collective or corporate name as an author.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getCollectiveName(): null|FHIRString
    {
        return $this->collectiveName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for collective or corporate name as an author.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $collectiveName
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCollectiveName(null|string|FHIRStringPrimitive|FHIRString $collectiveName = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $collectiveName && !($collectiveName instanceof FHIRString)) {
            $collectiveName = new FHIRString($collectiveName);
        }
        $this->_trackValueSet($this->collectiveName, $collectiveName);
        if (!isset($this->_xmlLocations[self::FIELD_COLLECTIVE_NAME])) {
            $this->_xmlLocations[self::FIELD_COLLECTIVE_NAME] = [];
        }
        $this->_xmlLocations[self::FIELD_COLLECTIVE_NAME][0] = $xmlLocation;
        $this->collectiveName = $collectiveName;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique person identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique person identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique person identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Organization affiliated with the entity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo[]
     */
    public function getAffiliationInfo(): null|array
    {
        return $this->affiliationInfo;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Organization affiliated with the entity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo $affiliationInfo
     * @return static
     */
    public function addAffiliationInfo(null|FHIRCitationAffiliationInfo $affiliationInfo = null): self
    {
        if (null === $affiliationInfo) {
            $affiliationInfo = new FHIRCitationAffiliationInfo();
        }
        $this->_trackValueAdded();
        $this->affiliationInfo[] = $affiliationInfo;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Organization affiliated with the entity.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo ...$affiliationInfo
     * @return static
     */
    public function setAffiliationInfo(FHIRCitationAffiliationInfo ...$affiliationInfo): self
    {
        if ([] !== $this->affiliationInfo) {
            $this->_trackValuesRemoved(count($this->affiliationInfo));
            $this->affiliationInfo = [];
        }
        if ([] === $affiliationInfo) {
            return $this;
        }
        foreach($affiliationInfo as $v) {
            $this->addAffiliationInfo($v);
        }
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
     * Physical mailing address for the author or contributor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAddress[]
     */
    public function getAddress(): null|array
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
     * Physical mailing address for the author or contributor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAddress $address
     * @return static
     */
    public function addAddress(null|FHIRAddress $address = null): self
    {
        if (null === $address) {
            $address = new FHIRAddress();
        }
        $this->_trackValueAdded();
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
     * Physical mailing address for the author or contributor.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAddress ...$address
     * @return static
     */
    public function setAddress(FHIRAddress ...$address): self
    {
        if ([] !== $this->address) {
            $this->_trackValuesRemoved(count($this->address));
            $this->address = [];
        }
        if ([] === $address) {
            return $this;
        }
        foreach($address as $v) {
            $this->addAddress($v);
        }
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Email or telephone contact methods for the author or contributor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom(): null|array
    {
        return $this->telecom;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Email or telephone contact methods for the author or contributor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactPoint $telecom
     * @return static
     */
    public function addTelecom(null|FHIRContactPoint $telecom = null): self
    {
        if (null === $telecom) {
            $telecom = new FHIRContactPoint();
        }
        $this->_trackValueAdded();
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Email or telephone contact methods for the author or contributor.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRContactPoint ...$telecom
     * @return static
     */
    public function setTelecom(FHIRContactPoint ...$telecom): self
    {
        if ([] !== $this->telecom) {
            $this->_trackValuesRemoved(count($this->telecom));
            $this->telecom = [];
        }
        if ([] === $telecom) {
            return $this;
        }
        foreach($telecom as $v) {
            $this->addTelecom($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getContributionType(): null|array
    {
        return $this->contributionType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $contributionType
     * @return static
     */
    public function addContributionType(null|FHIRCodeableConcept $contributionType = null): self
    {
        if (null === $contributionType) {
            $contributionType = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->contributionType[] = $contributionType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept ...$contributionType
     * @return static
     */
    public function setContributionType(FHIRCodeableConcept ...$contributionType): self
    {
        if ([] !== $this->contributionType) {
            $this->_trackValuesRemoved(count($this->contributionType));
            $this->contributionType = [];
        }
        if ([] === $contributionType) {
            return $this;
        }
        foreach($contributionType as $v) {
            $this->addContributionType($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getRole(): null|FHIRCodeableConcept
    {
        return $this->role;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $role
     * @return static
     */
    public function setRole(null|FHIRCodeableConcept $role = null): self
    {
        if (null === $role) {
            $role = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->role, $role);
        $this->role = $role;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[]
     */
    public function getContributionInstance(): null|array
    {
        return $this->contributionInstance;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance $contributionInstance
     * @return static
     */
    public function addContributionInstance(null|FHIRCitationContributionInstance $contributionInstance = null): self
    {
        if (null === $contributionInstance) {
            $contributionInstance = new FHIRCitationContributionInstance();
        }
        $this->_trackValueAdded();
        $this->contributionInstance[] = $contributionInstance;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance ...$contributionInstance
     * @return static
     */
    public function setContributionInstance(FHIRCitationContributionInstance ...$contributionInstance): self
    {
        if ([] !== $this->contributionInstance) {
            $this->_trackValuesRemoved(count($this->contributionInstance));
            $this->contributionInstance = [];
        }
        if ([] === $contributionInstance) {
            return $this;
        }
        foreach($contributionInstance as $v) {
            $this->addContributionInstance($v);
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of which contributor is the corresponding contributor for the role.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean
     */
    public function getCorrespondingContact(): null|FHIRBoolean
    {
        return $this->correspondingContact;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of which contributor is the corresponding contributor for the role.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R4B\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean $correspondingContact
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCorrespondingContact(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $correspondingContact = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $correspondingContact && !($correspondingContact instanceof FHIRBoolean)) {
            $correspondingContact = new FHIRBoolean($correspondingContact);
        }
        $this->_trackValueSet($this->correspondingContact, $correspondingContact);
        if (!isset($this->_xmlLocations[self::FIELD_CORRESPONDING_CONTACT])) {
            $this->_xmlLocations[self::FIELD_CORRESPONDING_CONTACT] = [];
        }
        $this->_xmlLocations[self::FIELD_CORRESPONDING_CONTACT][0] = $xmlLocation;
        $this->correspondingContact = $correspondingContact;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used to code order of authors.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPositiveInt
     */
    public function getListOrder(): null|FHIRPositiveInt
    {
        return $this->listOrder;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used to code order of authors.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4B\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPositiveInt $listOrder
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setListOrder(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $listOrder = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $listOrder && !($listOrder instanceof FHIRPositiveInt)) {
            $listOrder = new FHIRPositiveInt($listOrder);
        }
        $this->_trackValueSet($this->listOrder, $listOrder);
        if (!isset($this->_xmlLocations[self::FIELD_LIST_ORDER])) {
            $this->_xmlLocations[self::FIELD_LIST_ORDER] = [];
        }
        $this->_xmlLocations[self::FIELD_LIST_ORDER][0] = $xmlLocation;
        $this->listOrder = $listOrder;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitials())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIALS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCollectiveName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COLLECTIVE_NAME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAffiliationInfo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AFFILIATION_INFO, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAddress())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDRESS, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getContributionType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRIBUTION_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRole())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROLE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContributionInstance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRIBUTION_INSTANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCorrespondingContact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CORRESPONDING_CONTACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getListOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LIST_ORDER] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIALS])) {
            $v = $this->getInitials();
            foreach($validationRules[self::FIELD_INITIALS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_INITIALS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIALS])) {
                        $errs[self::FIELD_INITIALS] = [];
                    }
                    $errs[self::FIELD_INITIALS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COLLECTIVE_NAME])) {
            $v = $this->getCollectiveName();
            foreach($validationRules[self::FIELD_COLLECTIVE_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_COLLECTIVE_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COLLECTIVE_NAME])) {
                        $errs[self::FIELD_COLLECTIVE_NAME] = [];
                    }
                    $errs[self::FIELD_COLLECTIVE_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AFFILIATION_INFO])) {
            $v = $this->getAffiliationInfo();
            foreach($validationRules[self::FIELD_AFFILIATION_INFO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_AFFILIATION_INFO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AFFILIATION_INFO])) {
                        $errs[self::FIELD_AFFILIATION_INFO] = [];
                    }
                    $errs[self::FIELD_AFFILIATION_INFO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS])) {
            $v = $this->getAddress();
            foreach($validationRules[self::FIELD_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS])) {
                        $errs[self::FIELD_ADDRESS] = [];
                    }
                    $errs[self::FIELD_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TELECOM])) {
            $v = $this->getTelecom();
            foreach($validationRules[self::FIELD_TELECOM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_TELECOM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TELECOM])) {
                        $errs[self::FIELD_TELECOM] = [];
                    }
                    $errs[self::FIELD_TELECOM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTION_TYPE])) {
            $v = $this->getContributionType();
            foreach($validationRules[self::FIELD_CONTRIBUTION_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_CONTRIBUTION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTION_TYPE])) {
                        $errs[self::FIELD_CONTRIBUTION_TYPE] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROLE])) {
            $v = $this->getRole();
            foreach($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_ROLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROLE])) {
                        $errs[self::FIELD_ROLE] = [];
                    }
                    $errs[self::FIELD_ROLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTION_INSTANCE])) {
            $v = $this->getContributionInstance();
            foreach($validationRules[self::FIELD_CONTRIBUTION_INSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_CONTRIBUTION_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTION_INSTANCE])) {
                        $errs[self::FIELD_CONTRIBUTION_INSTANCE] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTION_INSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CORRESPONDING_CONTACT])) {
            $v = $this->getCorrespondingContact();
            foreach($validationRules[self::FIELD_CORRESPONDING_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_CORRESPONDING_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CORRESPONDING_CONTACT])) {
                        $errs[self::FIELD_CORRESPONDING_CONTACT] = [];
                    }
                    $errs[self::FIELD_CORRESPONDING_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LIST_ORDER])) {
            $v = $this->getListOrder();
            foreach($validationRules[self::FIELD_LIST_ORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_LIST_ORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LIST_ORDER])) {
                        $errs[self::FIELD_LIST_ORDER] = [];
                    }
                    $errs[self::FIELD_LIST_ORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRCitationEntry)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_NAME === $childName) {
                $type->setName(FHIRHumanName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INITIALS === $childName) {
                $type->setInitials(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COLLECTIVE_NAME === $childName) {
                $type->setCollectiveName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AFFILIATION_INFO === $childName) {
                $type->addAffiliationInfo(FHIRCitationAffiliationInfo::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ADDRESS === $childName) {
                $type->addAddress(FHIRAddress::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TELECOM === $childName) {
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTRIBUTION_TYPE === $childName) {
                $type->addContributionType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ROLE === $childName) {
                $type->setRole(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTRIBUTION_INSTANCE === $childName) {
                $type->addContributionInstance(FHIRCitationContributionInstance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CORRESPONDING_CONTACT === $childName) {
                $type->setCorrespondingContact(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LIST_ORDER === $childName) {
                $type->setListOrder(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_INITIALS])) {
            $pt = $type->getInitials();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_INITIALS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setInitials((string)$attributes[self::FIELD_INITIALS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COLLECTIVE_NAME])) {
            $pt = $type->getCollectiveName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COLLECTIVE_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCollectiveName((string)$attributes[self::FIELD_COLLECTIVE_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CORRESPONDING_CONTACT])) {
            $pt = $type->getCorrespondingContact();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CORRESPONDING_CONTACT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCorrespondingContact((string)$attributes[self::FIELD_CORRESPONDING_CONTACT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LIST_ORDER])) {
            $pt = $type->getListOrder();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LIST_ORDER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setListOrder((string)$attributes[self::FIELD_LIST_ORDER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'CitationEntry', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_INITIALS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getInitials())) {
            $xw->writeAttribute(self::FIELD_INITIALS, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_COLLECTIVE_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCollectiveName())) {
            $xw->writeAttribute(self::FIELD_COLLECTIVE_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_CORRESPONDING_CONTACT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCorrespondingContact())) {
            $xw->writeAttribute(self::FIELD_CORRESPONDING_CONTACT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_LIST_ORDER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getListOrder())) {
            $xw->writeAttribute(self::FIELD_LIST_ORDER, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getName())) {
            $xw->startElement(self::FIELD_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_INITIALS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getInitials())) {
            $xw->startElement(self::FIELD_INITIALS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_COLLECTIVE_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCollectiveName())) {
            $xw->startElement(self::FIELD_COLLECTIVE_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAffiliationInfo() as $v) {
            $xw->startElement(self::FIELD_AFFILIATION_INFO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAddress() as $v) {
            $xw->startElement(self::FIELD_ADDRESS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTelecom() as $v) {
            $xw->startElement(self::FIELD_TELECOM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getContributionType() as $v) {
            $xw->startElement(self::FIELD_CONTRIBUTION_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRole())) {
            $xw->startElement(self::FIELD_ROLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getContributionInstance() as $v) {
            $xw->startElement(self::FIELD_CONTRIBUTION_INSTANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CORRESPONDING_CONTACT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCorrespondingContact())) {
            $xw->startElement(self::FIELD_CORRESPONDING_CONTACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_LIST_ORDER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getListOrder())) {
            $xw->startElement(self::FIELD_LIST_ORDER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getName())) {
            $out->{self::FIELD_NAME} = $v;
        }
        if (null !== ($v = $this->getInitials())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INITIALS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INITIALS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCollectiveName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COLLECTIVE_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COLLECTIVE_NAME_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAffiliationInfo())) {
            $out->{self::FIELD_AFFILIATION_INFO} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_AFFILIATION_INFO}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAddress())) {
            $out->{self::FIELD_ADDRESS} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ADDRESS}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTelecom())) {
            $out->{self::FIELD_TELECOM} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TELECOM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getContributionType())) {
            $out->{self::FIELD_CONTRIBUTION_TYPE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONTRIBUTION_TYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getRole())) {
            $out->{self::FIELD_ROLE} = $v;
        }
        if ([] !== ($vs = $this->getContributionInstance())) {
            $out->{self::FIELD_CONTRIBUTION_INSTANCE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONTRIBUTION_INSTANCE}[] = $v;
            }
        }
        if (null !== ($v = $this->getCorrespondingContact())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CORRESPONDING_CONTACT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CORRESPONDING_CONTACT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getListOrder())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LIST_ORDER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LIST_ORDER_EXT} = $ext;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}