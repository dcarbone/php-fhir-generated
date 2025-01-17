<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 */
class FHIRCitationEntry extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CITATION_DOT_ENTRY;


    public const FIELD_NAME = 'name';
    public const FIELD_INITIALS = 'initials';
    public const FIELD_INITIALS_EXT = '_initials';
    public const FIELD_COLLECTIVE_NAME = 'collectiveName';
    public const FIELD_COLLECTIVE_NAME_EXT = '_collectiveName';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_AFFILIATION_INFO = 'affiliationInfo';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_TELECOM = 'telecom';
    public const FIELD_CONTRIBUTION_TYPE = 'contributionType';
    public const FIELD_ROLE = 'role';
    public const FIELD_CONTRIBUTION_INSTANCE = 'contributionInstance';
    public const FIELD_CORRESPONDING_CONTACT = 'correspondingContact';
    public const FIELD_CORRESPONDING_CONTACT_EXT = '_correspondingContact';
    public const FIELD_LIST_ORDER = 'listOrder';
    public const FIELD_LIST_ORDER_EXT = '_listOrder';

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRHumanName 
     */
    protected FHIRHumanName $name;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Initials for forename.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $initials;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for collective or corporate name as an author.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $collectiveName;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique person identifier.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Organization affiliated with the entity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo[] 
     */
    protected array $affiliationInfo;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress[] 
     */
    protected array $address;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Email or telephone contact methods for the author or contributor.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint[] 
     */
    protected array $telecom;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $contributionType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $role;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[] 
     */
    protected array $contributionInstance;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of which contributor is the corresponding contributor for the role.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $correspondingContact;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used to code order of authors.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $listOrder;

    /** Default validation map for fields in type Citation.Entry */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRCitationEntry Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRHumanName $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $initials
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $collectiveName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo[] $affiliationInfo
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress[] $address
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint[] $telecom
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $contributionType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $role
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[] $contributionInstance
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $correspondingContact
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt $listOrder
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRHumanName $name = null,
                                null|string|FHIRStringPrimitive|FHIRString $initials = null,
                                null|string|FHIRStringPrimitive|FHIRString $collectiveName = null,
                                null|iterable $identifier = null,
                                null|iterable $affiliationInfo = null,
                                null|iterable $address = null,
                                null|iterable $telecom = null,
                                null|iterable $contributionType = null,
                                null|FHIRCodeableConcept $role = null,
                                null|iterable $contributionInstance = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $correspondingContact = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $listOrder = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $initials) {
            $this->setInitials($initials);
        }
        if (null !== $collectiveName) {
            $this->setCollectiveName($collectiveName);
        }
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $affiliationInfo) {
            $this->setAffiliationInfo(...$affiliationInfo);
        }
        if (null !== $address) {
            $this->setAddress(...$address);
        }
        if (null !== $telecom) {
            $this->setTelecom(...$telecom);
        }
        if (null !== $contributionType) {
            $this->setContributionType(...$contributionType);
        }
        if (null !== $role) {
            $this->setRole($role);
        }
        if (null !== $contributionInstance) {
            $this->setContributionInstance(...$contributionInstance);
        }
        if (null !== $correspondingContact) {
            $this->setCorrespondingContact($correspondingContact);
        }
        if (null !== $listOrder) {
            $this->setListOrder($listOrder);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRHumanName
     */
    public function getName(): null|FHIRHumanName
    {
        return $this->name ?? null;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRHumanName $name
     * @return static
     */
    public function setName(null|FHIRHumanName $name): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getInitials(): null|FHIRString
    {
        return $this->initials ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Initials for forename.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $initials
     * @return static
     */
    public function setInitials(null|string|FHIRStringPrimitive|FHIRString $initials): self
    {
        if (null === $initials) {
            unset($this->initials);
            return $this;
        }
        if (!($initials instanceof FHIRString)) {
            $initials = new FHIRString(value: $initials);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getCollectiveName(): null|FHIRString
    {
        return $this->collectiveName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for collective or corporate name as an author.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $collectiveName
     * @return static
     */
    public function setCollectiveName(null|string|FHIRStringPrimitive|FHIRString $collectiveName): self
    {
        if (null === $collectiveName) {
            unset($this->collectiveName);
            return $this;
        }
        if (!($collectiveName instanceof FHIRString)) {
            $collectiveName = new FHIRString(value: $collectiveName);
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique person identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo[]
     */
    public function getAffiliationInfo(): array
    {
        return $this->affiliationInfo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo>
     */
    public function getAffiliationInfoIterator(): iterable
    {
        if (!isset($this->affiliationInfo) || [] === $this->affiliationInfo) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->affiliationInfo);
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Organization affiliated with the entity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo $affiliationInfo
     * @return static
     */
    public function addAffiliationInfo(FHIRCitationAffiliationInfo $affiliationInfo): self
    {
        if (!isset($this->affiliationInfo)) {
            $this->affiliationInfo = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo ...$affiliationInfo
     * @return static
     */
    public function setAffiliationInfo(FHIRCitationAffiliationInfo ...$affiliationInfo): self
    {
        $this->affiliationInfo = $affiliationInfo;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress[]
     */
    public function getAddress(): array
    {
        return $this->address ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress>
     */
    public function getAddressIterator(): iterable
    {
        if (!isset($this->address) || [] === $this->address) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->address);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress $address
     * @return static
     */
    public function addAddress(FHIRAddress $address): self
    {
        if (!isset($this->address)) {
            $this->address = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress ...$address
     * @return static
     */
    public function setAddress(FHIRAddress ...$address): self
    {
        $this->address = $address;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom(): array
    {
        return $this->telecom ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint>
     */
    public function getTelecomIterator(): iterable
    {
        if (!isset($this->telecom) || [] === $this->telecom) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->telecom);
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Email or telephone contact methods for the author or contributor.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint $telecom
     * @return static
     */
    public function addTelecom(FHIRContactPoint $telecom): self
    {
        if (!isset($this->telecom)) {
            $this->telecom = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint ...$telecom
     * @return static
     */
    public function setTelecom(FHIRContactPoint ...$telecom): self
    {
        $this->telecom = $telecom;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getContributionType(): array
    {
        return $this->contributionType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getContributionTypeIterator(): iterable
    {
        if (!isset($this->contributionType) || [] === $this->contributionType) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contributionType);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $contributionType
     * @return static
     */
    public function addContributionType(FHIRCodeableConcept $contributionType): self
    {
        if (!isset($this->contributionType)) {
            $this->contributionType = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$contributionType
     * @return static
     */
    public function setContributionType(FHIRCodeableConcept ...$contributionType): self
    {
        $this->contributionType = $contributionType;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRole(): null|FHIRCodeableConcept
    {
        return $this->role ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $role
     * @return static
     */
    public function setRole(null|FHIRCodeableConcept $role): self
    {
        if (null === $role) {
            unset($this->role);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[]
     */
    public function getContributionInstance(): array
    {
        return $this->contributionInstance ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance>
     */
    public function getContributionInstanceIterator(): iterable
    {
        if (!isset($this->contributionInstance) || [] === $this->contributionInstance) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contributionInstance);
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance $contributionInstance
     * @return static
     */
    public function addContributionInstance(FHIRCitationContributionInstance $contributionInstance): self
    {
        if (!isset($this->contributionInstance)) {
            $this->contributionInstance = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance ...$contributionInstance
     * @return static
     */
    public function setContributionInstance(FHIRCitationContributionInstance ...$contributionInstance): self
    {
        $this->contributionInstance = $contributionInstance;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of which contributor is the corresponding contributor for the role.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
     */
    public function getCorrespondingContact(): null|FHIRBoolean
    {
        return $this->correspondingContact ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of which contributor is the corresponding contributor for the role.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $correspondingContact
     * @return static
     */
    public function setCorrespondingContact(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $correspondingContact): self
    {
        if (null === $correspondingContact) {
            unset($this->correspondingContact);
            return $this;
        }
        if (!($correspondingContact instanceof FHIRBoolean)) {
            $correspondingContact = new FHIRBoolean(value: $correspondingContact);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt
     */
    public function getListOrder(): null|FHIRPositiveInt
    {
        return $this->listOrder ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used to code order of authors.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt $listOrder
     * @return static
     */
    public function setListOrder(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $listOrder): self
    {
        if (null === $listOrder) {
            unset($this->listOrder);
            return $this;
        }
        if (!($listOrder instanceof FHIRPositiveInt)) {
            $listOrder = new FHIRPositiveInt(value: $listOrder);
        }
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INITIALS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COLLECTIVE_NAME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AFFILIATION_INFO, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDRESS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TELECOM, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTRIBUTION_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ROLE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTRIBUTION_INSTANCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CORRESPONDING_CONTACT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LIST_ORDER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationEntry)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRHumanName();
                $type->setName(FHIRHumanName::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INITIALS === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setInitials(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COLLECTIVE_NAME === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCollectiveName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AFFILIATION_INFO === $childName) {
                $v = new FHIRCitationAffiliationInfo();
                $type->addAffiliationInfo(FHIRCitationAffiliationInfo::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ADDRESS === $childName) {
                $v = new FHIRAddress();
                $type->addAddress(FHIRAddress::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TELECOM === $childName) {
                $v = new FHIRContactPoint();
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTRIBUTION_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addContributionType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ROLE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setRole(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTRIBUTION_INSTANCE === $childName) {
                $v = new FHIRCitationContributionInstance();
                $type->addContributionInstance(FHIRCitationContributionInstance::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CORRESPONDING_CONTACT === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCorrespondingContact(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LIST_ORDER === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setListOrder(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_INITIALS])) {
            $pt = $type->getInitials();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_INITIALS]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setInitials(new FHIRString(
                    value: (string)$attributes[self::FIELD_INITIALS],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COLLECTIVE_NAME])) {
            $pt = $type->getCollectiveName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COLLECTIVE_NAME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCollectiveName(new FHIRString(
                    value: (string)$attributes[self::FIELD_COLLECTIVE_NAME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CORRESPONDING_CONTACT])) {
            $pt = $type->getCorrespondingContact();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CORRESPONDING_CONTACT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCorrespondingContact(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_CORRESPONDING_CONTACT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LIST_ORDER])) {
            $pt = $type->getListOrder();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LIST_ORDER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setListOrder(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_LIST_ORDER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('CitationEntry', $this->_getSourceXMLNS());
        }
        if (isset($this->initials) && $this->initials->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_INITIALS, $this->initials->getValue()?->getFormattedValue());
        }
        if (isset($this->collectiveName) && $this->collectiveName->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COLLECTIVE_NAME, $this->collectiveName->getValue()?->getFormattedValue());
        }
        if (isset($this->correspondingContact) && $this->correspondingContact->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CORRESPONDING_CONTACT, $this->correspondingContact->getValue()?->getFormattedValue());
        }
        if (isset($this->listOrder) && $this->listOrder->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LIST_ORDER, $this->listOrder->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->name)) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->initials) && $this->initials->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_INITIALS);
            $this->initials->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->collectiveName) && $this->collectiveName->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COLLECTIVE_NAME);
            $this->collectiveName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->affiliationInfo)) {
            foreach ($this->affiliationInfo as $v) {
                $xw->startElement(self::FIELD_AFFILIATION_INFO);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->address)) {
            foreach ($this->address as $v) {
                $xw->startElement(self::FIELD_ADDRESS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->telecom)) {
            foreach ($this->telecom as $v) {
                $xw->startElement(self::FIELD_TELECOM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->contributionType)) {
            foreach ($this->contributionType as $v) {
                $xw->startElement(self::FIELD_CONTRIBUTION_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->role)) {
            $xw->startElement(self::FIELD_ROLE);
            $this->role->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contributionInstance)) {
            foreach ($this->contributionInstance as $v) {
                $xw->startElement(self::FIELD_CONTRIBUTION_INSTANCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->correspondingContact) && $this->correspondingContact->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CORRESPONDING_CONTACT);
            $this->correspondingContact->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->listOrder) && $this->listOrder->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LIST_ORDER);
            $this->listOrder->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationEntry)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_NAME]) || array_key_exists(self::FIELD_NAME, $json)) {
            if ($json[self::FIELD_NAME] instanceof FHIRHumanName) {
                $type->setName($json[self::FIELD_NAME]);
            } else {
                $type->setName(new FHIRHumanName($json[self::FIELD_NAME]));
            }
        }
        if (isset($json[self::FIELD_INITIALS]) || isset($json[self::FIELD_INITIALS_EXT]) || array_key_exists(self::FIELD_INITIALS, $json) || array_key_exists(self::FIELD_INITIALS_EXT, $json)) {
            $value = $json[self::FIELD_INITIALS] ?? null;
            $ext = (isset($json[self::FIELD_INITIALS_EXT]) && is_array($json[self::FIELD_INITIALS_EXT])) ? $json[self::FIELD_INITIALS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setInitials($value);
                } else if (is_array($value)) {
                    $type->setInitials(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setInitials(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setInitials(new FHIRString($ext));
            } else {
                $type->setInitials(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_COLLECTIVE_NAME]) || isset($json[self::FIELD_COLLECTIVE_NAME_EXT]) || array_key_exists(self::FIELD_COLLECTIVE_NAME, $json) || array_key_exists(self::FIELD_COLLECTIVE_NAME_EXT, $json)) {
            $value = $json[self::FIELD_COLLECTIVE_NAME] ?? null;
            $ext = (isset($json[self::FIELD_COLLECTIVE_NAME_EXT]) && is_array($json[self::FIELD_COLLECTIVE_NAME_EXT])) ? $json[self::FIELD_COLLECTIVE_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCollectiveName($value);
                } else if (is_array($value)) {
                    $type->setCollectiveName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCollectiveName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCollectiveName(new FHIRString($ext));
            } else {
                $type->setCollectiveName(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_AFFILIATION_INFO]) || array_key_exists(self::FIELD_AFFILIATION_INFO, $json)) {
            if (is_array($json[self::FIELD_AFFILIATION_INFO])) {
                foreach($json[self::FIELD_AFFILIATION_INFO] as $v) {
                    if ($v instanceof FHIRCitationAffiliationInfo) {
                        $type->addAffiliationInfo($v);
                    } else {
                        $type->addAffiliationInfo(new FHIRCitationAffiliationInfo($v));
                    }
                }
            } elseif ($json[self::FIELD_AFFILIATION_INFO] instanceof FHIRCitationAffiliationInfo) {
                $type->addAffiliationInfo($json[self::FIELD_AFFILIATION_INFO]);
            } else {
                $type->addAffiliationInfo(new FHIRCitationAffiliationInfo($json[self::FIELD_AFFILIATION_INFO]));
            }
        }
        if (isset($json[self::FIELD_ADDRESS]) || array_key_exists(self::FIELD_ADDRESS, $json)) {
            if (is_array($json[self::FIELD_ADDRESS])) {
                foreach($json[self::FIELD_ADDRESS] as $v) {
                    if ($v instanceof FHIRAddress) {
                        $type->addAddress($v);
                    } else {
                        $type->addAddress(new FHIRAddress($v));
                    }
                }
            } elseif ($json[self::FIELD_ADDRESS] instanceof FHIRAddress) {
                $type->addAddress($json[self::FIELD_ADDRESS]);
            } else {
                $type->addAddress(new FHIRAddress($json[self::FIELD_ADDRESS]));
            }
        }
        if (isset($json[self::FIELD_TELECOM]) || array_key_exists(self::FIELD_TELECOM, $json)) {
            if (is_array($json[self::FIELD_TELECOM])) {
                foreach($json[self::FIELD_TELECOM] as $v) {
                    if ($v instanceof FHIRContactPoint) {
                        $type->addTelecom($v);
                    } else {
                        $type->addTelecom(new FHIRContactPoint($v));
                    }
                }
            } elseif ($json[self::FIELD_TELECOM] instanceof FHIRContactPoint) {
                $type->addTelecom($json[self::FIELD_TELECOM]);
            } else {
                $type->addTelecom(new FHIRContactPoint($json[self::FIELD_TELECOM]));
            }
        }
        if (isset($json[self::FIELD_CONTRIBUTION_TYPE]) || array_key_exists(self::FIELD_CONTRIBUTION_TYPE, $json)) {
            if (is_array($json[self::FIELD_CONTRIBUTION_TYPE])) {
                foreach($json[self::FIELD_CONTRIBUTION_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addContributionType($v);
                    } else {
                        $type->addContributionType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_CONTRIBUTION_TYPE] instanceof FHIRCodeableConcept) {
                $type->addContributionType($json[self::FIELD_CONTRIBUTION_TYPE]);
            } else {
                $type->addContributionType(new FHIRCodeableConcept($json[self::FIELD_CONTRIBUTION_TYPE]));
            }
        }
        if (isset($json[self::FIELD_ROLE]) || array_key_exists(self::FIELD_ROLE, $json)) {
            if ($json[self::FIELD_ROLE] instanceof FHIRCodeableConcept) {
                $type->setRole($json[self::FIELD_ROLE]);
            } else {
                $type->setRole(new FHIRCodeableConcept($json[self::FIELD_ROLE]));
            }
        }
        if (isset($json[self::FIELD_CONTRIBUTION_INSTANCE]) || array_key_exists(self::FIELD_CONTRIBUTION_INSTANCE, $json)) {
            if (is_array($json[self::FIELD_CONTRIBUTION_INSTANCE])) {
                foreach($json[self::FIELD_CONTRIBUTION_INSTANCE] as $v) {
                    if ($v instanceof FHIRCitationContributionInstance) {
                        $type->addContributionInstance($v);
                    } else {
                        $type->addContributionInstance(new FHIRCitationContributionInstance($v));
                    }
                }
            } elseif ($json[self::FIELD_CONTRIBUTION_INSTANCE] instanceof FHIRCitationContributionInstance) {
                $type->addContributionInstance($json[self::FIELD_CONTRIBUTION_INSTANCE]);
            } else {
                $type->addContributionInstance(new FHIRCitationContributionInstance($json[self::FIELD_CONTRIBUTION_INSTANCE]));
            }
        }
        if (isset($json[self::FIELD_CORRESPONDING_CONTACT]) || isset($json[self::FIELD_CORRESPONDING_CONTACT_EXT]) || array_key_exists(self::FIELD_CORRESPONDING_CONTACT, $json) || array_key_exists(self::FIELD_CORRESPONDING_CONTACT_EXT, $json)) {
            $value = $json[self::FIELD_CORRESPONDING_CONTACT] ?? null;
            $ext = (isset($json[self::FIELD_CORRESPONDING_CONTACT_EXT]) && is_array($json[self::FIELD_CORRESPONDING_CONTACT_EXT])) ? $json[self::FIELD_CORRESPONDING_CONTACT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setCorrespondingContact($value);
                } else if (is_array($value)) {
                    $type->setCorrespondingContact(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setCorrespondingContact(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCorrespondingContact(new FHIRBoolean($ext));
            } else {
                $type->setCorrespondingContact(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_LIST_ORDER]) || isset($json[self::FIELD_LIST_ORDER_EXT]) || array_key_exists(self::FIELD_LIST_ORDER, $json) || array_key_exists(self::FIELD_LIST_ORDER_EXT, $json)) {
            $value = $json[self::FIELD_LIST_ORDER] ?? null;
            $ext = (isset($json[self::FIELD_LIST_ORDER_EXT]) && is_array($json[self::FIELD_LIST_ORDER_EXT])) ? $json[self::FIELD_LIST_ORDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setListOrder($value);
                } else if (is_array($value)) {
                    $type->setListOrder(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setListOrder(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setListOrder(new FHIRPositiveInt($ext));
            } else {
                $type->setListOrder(new FHIRPositiveInt(null));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->name)) {
            $out->name = $this->name;
        }
        if (isset($this->initials)) {
            if (null !== ($val = $this->initials->getValue())) {
                $out->initials = $val;
            }
            $ext = $this->initials->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_initials = $ext;
            }
        }
        if (isset($this->collectiveName)) {
            if (null !== ($val = $this->collectiveName->getValue())) {
                $out->collectiveName = $val;
            }
            $ext = $this->collectiveName->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_collectiveName = $ext;
            }
        }
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->affiliationInfo) && [] !== $this->affiliationInfo) {
            $out->affiliationInfo = $this->affiliationInfo;
        }
        if (isset($this->address) && [] !== $this->address) {
            $out->address = $this->address;
        }
        if (isset($this->telecom) && [] !== $this->telecom) {
            $out->telecom = $this->telecom;
        }
        if (isset($this->contributionType) && [] !== $this->contributionType) {
            $out->contributionType = $this->contributionType;
        }
        if (isset($this->role)) {
            $out->role = $this->role;
        }
        if (isset($this->contributionInstance) && [] !== $this->contributionInstance) {
            $out->contributionInstance = $this->contributionInstance;
        }
        if (isset($this->correspondingContact)) {
            if (null !== ($val = $this->correspondingContact->getValue())) {
                $out->correspondingContact = $val;
            }
            $ext = $this->correspondingContact->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_correspondingContact = $ext;
            }
        }
        if (isset($this->listOrder)) {
            if (null !== ($val = $this->listOrder->getValue())) {
                $out->listOrder = $val;
            }
            $ext = $this->listOrder->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_listOrder = $ext;
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