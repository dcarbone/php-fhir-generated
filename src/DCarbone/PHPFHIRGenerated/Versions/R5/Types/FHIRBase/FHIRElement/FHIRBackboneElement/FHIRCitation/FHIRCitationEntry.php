<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation;

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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

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

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the individual contributor.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
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
    protected FHIRString $forenameInitials;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization affiliated with the contributor.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
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
    protected FHIRCodeableConcept $role;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[] 
     */
    protected array $contributionInstance;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
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
    protected FHIRPositiveInt $rankingOrder;

    /** Default validation map for fields in type Citation.Entry */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_CONTRIBUTOR => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRCitationEntry Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $contributor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $forenameInitials
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $affiliation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $contributionType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $role
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[] $contributionInstance
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $correspondingContact
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $rankingOrder
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
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $rankingOrder = null,
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
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
        if (!isset($this->affiliation) || [] === $this->affiliation) {
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[]
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $rankingOrder
     * @return static
     */
    public function setRankingOrder(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $rankingOrder): self
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
        if (null !== ($v = $this->getContributor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTRIBUTOR] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTOR])) {
            $v = $this->getContributor();
            foreach($validationRules[self::FIELD_CONTRIBUTOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTRIBUTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTOR])) {
                        $errs[self::FIELD_CONTRIBUTOR] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORENAME_INITIALS])) {
            $v = $this->getForenameInitials();
            foreach($validationRules[self::FIELD_FORENAME_INITIALS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FORENAME_INITIALS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORENAME_INITIALS])) {
                        $errs[self::FIELD_FORENAME_INITIALS] = [];
                    }
                    $errs[self::FIELD_FORENAME_INITIALS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AFFILIATION])) {
            $v = $this->getAffiliation();
            foreach($validationRules[self::FIELD_AFFILIATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AFFILIATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AFFILIATION])) {
                        $errs[self::FIELD_AFFILIATION] = [];
                    }
                    $errs[self::FIELD_AFFILIATION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_RANKING_ORDER])) {
            $v = $this->getRankingOrder();
            foreach($validationRules[self::FIELD_RANKING_ORDER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RANKING_ORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RANKING_ORDER])) {
                        $errs[self::FIELD_RANKING_ORDER] = [];
                    }
                    $errs[self::FIELD_RANKING_ORDER][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry
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
            } else if (self::FIELD_CONTRIBUTOR === $childName) {
                $v = new FHIRReference();
                $type->setContributor(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FORENAME_INITIALS === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setForenameInitials(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AFFILIATION === $childName) {
                $v = new FHIRReference();
                $type->addAffiliation(FHIRReference::xmlUnserialize($n, $v, $config));
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
            } else if (self::FIELD_RANKING_ORDER === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setRankingOrder(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_FORENAME_INITIALS])) {
            $pt = $type->getForenameInitials();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FORENAME_INITIALS]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setForenameInitials(new FHIRString(
                    value: (string)$attributes[self::FIELD_FORENAME_INITIALS],
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
        if (isset($attributes[self::FIELD_RANKING_ORDER])) {
            $pt = $type->getRankingOrder();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RANKING_ORDER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRankingOrder(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_RANKING_ORDER],
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
        if (isset($this->forenameInitials) && $this->forenameInitials->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FORENAME_INITIALS, $this->forenameInitials->getValue()?->getFormattedValue());
        }
        if (isset($this->correspondingContact) && $this->correspondingContact->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CORRESPONDING_CONTACT, $this->correspondingContact->getValue()?->getFormattedValue());
        }
        if (isset($this->rankingOrder) && $this->rankingOrder->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RANKING_ORDER, $this->rankingOrder->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->contributor)) {
            $xw->startElement(self::FIELD_CONTRIBUTOR);
            $this->contributor->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->forenameInitials) && $this->forenameInitials->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FORENAME_INITIALS);
            $this->forenameInitials->xmlSerialize($xw, $config);
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
        if (isset($this->correspondingContact) && $this->correspondingContact->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CORRESPONDING_CONTACT);
            $this->correspondingContact->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->rankingOrder) && $this->rankingOrder->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RANKING_ORDER);
            $this->rankingOrder->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry
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
        if (isset($json[self::FIELD_CONTRIBUTOR]) || array_key_exists(self::FIELD_CONTRIBUTOR, $json)) {
            if ($json[self::FIELD_CONTRIBUTOR] instanceof FHIRReference) {
                $type->setContributor($json[self::FIELD_CONTRIBUTOR]);
            } else {
                $type->setContributor(new FHIRReference($json[self::FIELD_CONTRIBUTOR]));
            }
        }
        if (isset($json[self::FIELD_FORENAME_INITIALS]) || isset($json[self::FIELD_FORENAME_INITIALS_EXT]) || array_key_exists(self::FIELD_FORENAME_INITIALS, $json) || array_key_exists(self::FIELD_FORENAME_INITIALS_EXT, $json)) {
            $value = $json[self::FIELD_FORENAME_INITIALS] ?? null;
            $ext = (isset($json[self::FIELD_FORENAME_INITIALS_EXT]) && is_array($json[self::FIELD_FORENAME_INITIALS_EXT])) ? $json[self::FIELD_FORENAME_INITIALS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setForenameInitials($value);
                } else if (is_array($value)) {
                    $type->setForenameInitials(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setForenameInitials(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setForenameInitials(new FHIRString($ext));
            } else {
                $type->setForenameInitials(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_AFFILIATION]) || array_key_exists(self::FIELD_AFFILIATION, $json)) {
            if (is_array($json[self::FIELD_AFFILIATION])) {
                foreach($json[self::FIELD_AFFILIATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addAffiliation($v);
                    } else {
                        $type->addAffiliation(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_AFFILIATION] instanceof FHIRReference) {
                $type->addAffiliation($json[self::FIELD_AFFILIATION]);
            } else {
                $type->addAffiliation(new FHIRReference($json[self::FIELD_AFFILIATION]));
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
        if (isset($json[self::FIELD_RANKING_ORDER]) || isset($json[self::FIELD_RANKING_ORDER_EXT]) || array_key_exists(self::FIELD_RANKING_ORDER, $json) || array_key_exists(self::FIELD_RANKING_ORDER_EXT, $json)) {
            $value = $json[self::FIELD_RANKING_ORDER] ?? null;
            $ext = (isset($json[self::FIELD_RANKING_ORDER_EXT]) && is_array($json[self::FIELD_RANKING_ORDER_EXT])) ? $json[self::FIELD_RANKING_ORDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setRankingOrder($value);
                } else if (is_array($value)) {
                    $type->setRankingOrder(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setRankingOrder(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRankingOrder(new FHIRPositiveInt($ext));
            } else {
                $type->setRankingOrder(new FHIRPositiveInt(null));
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
        if (isset($this->contributor)) {
            $out->contributor = $this->contributor;
        }
        if (isset($this->forenameInitials)) {
            if (null !== ($val = $this->forenameInitials->getValue())) {
                $out->forenameInitials = $val;
            }
            $ext = $this->forenameInitials->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_forenameInitials = $ext;
            }
        }
        if (isset($this->affiliation) && [] !== $this->affiliation) {
            $out->affiliation = $this->affiliation;
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
        if (isset($this->rankingOrder)) {
            if (null !== ($val = $this->rankingOrder->getValue())) {
                $out->rankingOrder = $val;
            }
            $ext = $this->rankingOrder->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_rankingOrder = $ext;
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