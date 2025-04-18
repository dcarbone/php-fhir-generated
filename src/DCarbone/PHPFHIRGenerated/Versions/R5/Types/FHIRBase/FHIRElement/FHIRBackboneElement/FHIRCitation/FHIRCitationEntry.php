<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRCitationEntry extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CITATION_DOT_ENTRY;

    /* class_default.php:56 */
    public const FIELD_CONTRIBUTOR = 'contributor';
    public const FIELD_FORENAME_INITIALS = 'forenameInitials';
    public const FIELD_FORENAME_INITIALS_EXT = '_forenameInitials';
    public const FIELD_AFFILIATION = 'affiliation';
    public const FIELD_CONTRIBUTION_TYPE = 'contributionType';
    public const FIELD_ROLE = 'role';
    public const FIELD_CONTRIBUTION_INSTANCE = 'contributionInstance';
    public const FIELD_CORRESPONDING_CONTACT = 'correspondingContact';
    public const FIELD_CORRESPONDING_CONTACT_EXT = '_correspondingContact';
    public const FIELD_RANKING_ORDER = 'rankingOrder';
    public const FIELD_RANKING_ORDER_EXT = '_rankingOrder';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_CONTRIBUTOR => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_FORENAME_INITIALS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CORRESPONDING_CONTACT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RANKING_ORDER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the individual contributor.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $contributor;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For citation styles that use initials.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $forenameInitials;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization affiliated with the contributor.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $affiliation;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $contributionType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $role;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance> 
     */
    #[FHIRCitationContributionInstance]
    protected array $contributionInstance;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $correspondingContact;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a numerical ranking to represent the degree of contributorship relative
     * to other contributors, such as 1 for first author and 2 for second author.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    #[FHIRPositiveInt]
    protected FHIRPositiveInt $rankingOrder;

    /* constructor.php:61 */
    /**
     * FHIRCitationEntry Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $contributor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $forenameInitials
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $affiliation
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $contributionType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $role
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance> $contributionInstance
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $correspondingContact
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $rankingOrder
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRReference $contributor = null,
                                null|string|FHIRStringPrimitive|FHIRString $forenameInitials = null,
                                null|iterable $affiliation = null,
                                null|iterable $contributionType = null,
                                null|FHIRCodeableConcept $role = null,
                                null|iterable $contributionInstance = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $correspondingContact = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $rankingOrder = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $contributor) {
            $this->setContributor($contributor);
        }
        if (null !== $forenameInitials) {
            $this->setForenameInitials($forenameInitials);
        }
        if (null !== $affiliation) {
            $this->setAffiliation(...$affiliation);
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
        if (null !== $rankingOrder) {
            $this->setRankingOrder($rankingOrder);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the individual contributor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getContributor(): null|FHIRReference
    {
        return $this->contributor ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the individual contributor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $contributor
     * @return static
     */
    public function setContributor(null|FHIRReference $contributor): self
    {
        if (null === $contributor) {
            unset($this->contributor);
            return $this;
        }
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For citation styles that use initials.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getForenameInitials(): null|FHIRString
    {
        return $this->forenameInitials ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For citation styles that use initials.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $forenameInitials
     * @return static
     */
    public function setForenameInitials(null|string|FHIRStringPrimitive|FHIRString $forenameInitials): self
    {
        if (null === $forenameInitials) {
            unset($this->forenameInitials);
            return $this;
        }
        if (!($forenameInitials instanceof FHIRString)) {
            $forenameInitials = new FHIRString(value: $forenameInitials);
        }
        $this->forenameInitials = $forenameInitials;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization affiliated with the contributor.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getAffiliation(): array
    {
        return $this->affiliation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getAffiliationIterator(): iterable
    {
        if (!isset($this->affiliation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->affiliation);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization affiliated with the contributor.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $affiliation
     * @return static
     */
    public function addAffiliation(FHIRReference $affiliation): self
    {
        if (!isset($this->affiliation)) {
            $this->affiliation = [];
        }
        $this->affiliation[] = $affiliation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization affiliated with the contributor.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$affiliation
     * @return static
     */
    public function setAffiliation(FHIRReference ...$affiliation): self
    {
        if ([] === $affiliation) {
            unset($this->affiliation);
            return $this;
        }
        $this->affiliation = $affiliation;
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getContributionType(): array
    {
        return $this->contributionType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getContributionTypeIterator(): iterable
    {
        if (!isset($this->contributionType)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $contributionType
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$contributionType
     * @return static
     */
    public function setContributionType(FHIRCodeableConcept ...$contributionType): self
    {
        if ([] === $contributionType) {
            unset($this->contributionType);
            return $this;
        }
        $this->contributionType = $contributionType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $role
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance>
     */
    public function getContributionInstance(): array
    {
        return $this->contributionInstance ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance>
     */
    public function getContributionInstanceIterator(): iterable
    {
        if (!isset($this->contributionInstance)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance $contributionInstance
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance ...$contributionInstance
     * @return static
     */
    public function setContributionInstance(FHIRCitationContributionInstance ...$contributionInstance): self
    {
        if ([] === $contributionInstance) {
            unset($this->contributionInstance);
            return $this;
        }
        $this->contributionInstance = $contributionInstance;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getCorrespondingContact(): null|FHIRBoolean
    {
        return $this->correspondingContact ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $correspondingContact
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
     * Provides a numerical ranking to represent the degree of contributorship relative
     * to other contributors, such as 1 for first author and 2 for second author.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getRankingOrder(): null|FHIRPositiveInt
    {
        return $this->rankingOrder ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a numerical ranking to represent the degree of contributorship relative
     * to other contributors, such as 1 for first author and 2 for second author.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $rankingOrder
     * @return static
     */
    public function setRankingOrder(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $rankingOrder): self
    {
        if (null === $rankingOrder) {
            unset($this->rankingOrder);
            return $this;
        }
        if (!($rankingOrder instanceof FHIRPositiveInt)) {
            $rankingOrder = new FHIRPositiveInt(value: $rankingOrder);
        }
        $this->rankingOrder = $rankingOrder;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTRIBUTOR === $cen) {
                $type->setContributor(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FORENAME_INITIALS === $cen) {
                $type->setForenameInitials(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AFFILIATION === $cen) {
                $type->addAffiliation(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTRIBUTION_TYPE === $cen) {
                $type->addContributionType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ROLE === $cen) {
                $type->setRole(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTRIBUTION_INSTANCE === $cen) {
                $type->addContributionInstance(FHIRCitationContributionInstance::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CORRESPONDING_CONTACT === $cen) {
                $type->setCorrespondingContact(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RANKING_ORDER === $cen) {
                $type->setRankingOrder(FHIRPositiveInt::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FORENAME_INITIALS])) {
            if (isset($type->forenameInitials)) {
                $type->forenameInitials->setValue((string)$attributes[self::FIELD_FORENAME_INITIALS]);
            } else {
                $type->setForenameInitials((string)$attributes[self::FIELD_FORENAME_INITIALS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FORENAME_INITIALS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CORRESPONDING_CONTACT])) {
            if (isset($type->correspondingContact)) {
                $type->correspondingContact->setValue((string)$attributes[self::FIELD_CORRESPONDING_CONTACT]);
            } else {
                $type->setCorrespondingContact((string)$attributes[self::FIELD_CORRESPONDING_CONTACT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CORRESPONDING_CONTACT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_RANKING_ORDER])) {
            if (isset($type->rankingOrder)) {
                $type->rankingOrder->setValue((string)$attributes[self::FIELD_RANKING_ORDER]);
            } else {
                $type->setRankingOrder((string)$attributes[self::FIELD_RANKING_ORDER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_RANKING_ORDER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->forenameInitials) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FORENAME_INITIALS]) {
            $xw->writeAttribute(self::FIELD_FORENAME_INITIALS, $this->forenameInitials->_getValueAsString());
        }
        if (isset($this->correspondingContact) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CORRESPONDING_CONTACT]) {
            $xw->writeAttribute(self::FIELD_CORRESPONDING_CONTACT, $this->correspondingContact->_getValueAsString());
        }
        if (isset($this->rankingOrder) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RANKING_ORDER]) {
            $xw->writeAttribute(self::FIELD_RANKING_ORDER, $this->rankingOrder->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->contributor)) {
            $xw->startElement(self::FIELD_CONTRIBUTOR);
            $this->contributor->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->forenameInitials)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FORENAME_INITIALS]
                || $this->forenameInitials->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FORENAME_INITIALS);
            $this->forenameInitials->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FORENAME_INITIALS]);
            $xw->endElement();
        }
        if (isset($this->affiliation)) {
            foreach ($this->affiliation as $v) {
                $xw->startElement(self::FIELD_AFFILIATION);
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
        if (isset($this->correspondingContact)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CORRESPONDING_CONTACT]
                || $this->correspondingContact->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CORRESPONDING_CONTACT);
            $this->correspondingContact->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CORRESPONDING_CONTACT]);
            $xw->endElement();
        }
        if (isset($this->rankingOrder)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RANKING_ORDER]
                || $this->rankingOrder->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RANKING_ORDER);
            $this->rankingOrder->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RANKING_ORDER]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->contributor) || property_exists($decoded, self::FIELD_CONTRIBUTOR)) {
            if (is_array($decoded->contributor)) {
                $type->setContributor(FHIRReference::jsonUnserialize(reset($decoded->contributor), $config));
            } else {
                $type->setContributor(FHIRReference::jsonUnserialize($decoded->contributor, $config));
            }
        }
        if (isset($decoded->forenameInitials)
            || isset($decoded->_forenameInitials)
            || property_exists($decoded, self::FIELD_FORENAME_INITIALS)
            || property_exists($decoded, self::FIELD_FORENAME_INITIALS_EXT)) {
            $v = $decoded->_forenameInitials ?? new \stdClass();
            $v->value = $decoded->forenameInitials ?? null;
            $type->setForenameInitials(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->affiliation) || property_exists($decoded, self::FIELD_AFFILIATION)) {
            if (is_object($decoded->affiliation)) {
                $vals = [$decoded->affiliation];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_AFFILIATION, true);
            } else {
                $vals = $decoded->affiliation;
            }
            foreach($vals as $v) {
                $type->addAffiliation(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->contributionType) || property_exists($decoded, self::FIELD_CONTRIBUTION_TYPE)) {
            if (is_object($decoded->contributionType)) {
                $vals = [$decoded->contributionType];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTRIBUTION_TYPE, true);
            } else {
                $vals = $decoded->contributionType;
            }
            foreach($vals as $v) {
                $type->addContributionType(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->role) || property_exists($decoded, self::FIELD_ROLE)) {
            if (is_array($decoded->role)) {
                $type->setRole(FHIRCodeableConcept::jsonUnserialize(reset($decoded->role), $config));
            } else {
                $type->setRole(FHIRCodeableConcept::jsonUnserialize($decoded->role, $config));
            }
        }
        if (isset($decoded->contributionInstance) || property_exists($decoded, self::FIELD_CONTRIBUTION_INSTANCE)) {
            if (is_object($decoded->contributionInstance)) {
                $vals = [$decoded->contributionInstance];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTRIBUTION_INSTANCE, true);
            } else {
                $vals = $decoded->contributionInstance;
            }
            foreach($vals as $v) {
                $type->addContributionInstance(FHIRCitationContributionInstance::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->correspondingContact)
            || isset($decoded->_correspondingContact)
            || property_exists($decoded, self::FIELD_CORRESPONDING_CONTACT)
            || property_exists($decoded, self::FIELD_CORRESPONDING_CONTACT_EXT)) {
            $v = $decoded->_correspondingContact ?? new \stdClass();
            $v->value = $decoded->correspondingContact ?? null;
            $type->setCorrespondingContact(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->rankingOrder)
            || isset($decoded->_rankingOrder)
            || property_exists($decoded, self::FIELD_RANKING_ORDER)
            || property_exists($decoded, self::FIELD_RANKING_ORDER_EXT)) {
            $v = $decoded->_rankingOrder ?? new \stdClass();
            $v->value = $decoded->rankingOrder ?? null;
            $type->setRankingOrder(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->contributor)) {
            $out->contributor = $this->contributor;
        }
        if (isset($this->forenameInitials)) {
            if (null !== ($val = $this->forenameInitials->getValue())) {
                $out->forenameInitials = $val;
            }
            if ($this->forenameInitials->_nonValueFieldDefined()) {
                $ext = $this->forenameInitials->jsonSerialize();
                unset($ext->value);
                $out->_forenameInitials = $ext;
            }
        }
        if (isset($this->affiliation) && [] !== $this->affiliation) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_AFFILIATION) && 1 === count($this->affiliation)) {
                $out->affiliation = $this->affiliation[0];
            } else {
                $out->affiliation = $this->affiliation;
            }
        }
        if (isset($this->contributionType) && [] !== $this->contributionType) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTRIBUTION_TYPE) && 1 === count($this->contributionType)) {
                $out->contributionType = $this->contributionType[0];
            } else {
                $out->contributionType = $this->contributionType;
            }
        }
        if (isset($this->role)) {
            $out->role = $this->role;
        }
        if (isset($this->contributionInstance) && [] !== $this->contributionInstance) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTRIBUTION_INSTANCE) && 1 === count($this->contributionInstance)) {
                $out->contributionInstance = $this->contributionInstance[0];
            } else {
                $out->contributionInstance = $this->contributionInstance;
            }
        }
        if (isset($this->correspondingContact)) {
            if (null !== ($val = $this->correspondingContact->getValue())) {
                $out->correspondingContact = $val;
            }
            if ($this->correspondingContact->_nonValueFieldDefined()) {
                $ext = $this->correspondingContact->jsonSerialize();
                unset($ext->value);
                $out->_correspondingContact = $ext;
            }
        }
        if (isset($this->rankingOrder)) {
            if (null !== ($val = $this->rankingOrder->getValue())) {
                $out->rankingOrder = $val;
            }
            if ($this->rankingOrder->_nonValueFieldDefined()) {
                $ext = $this->rankingOrder->jsonSerialize();
                unset($ext->value);
                $out->_rankingOrder = $ext;
            }
        }
        return $out;
    }
}