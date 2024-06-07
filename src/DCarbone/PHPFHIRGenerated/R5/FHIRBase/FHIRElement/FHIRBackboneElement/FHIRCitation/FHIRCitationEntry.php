<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationEntry
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationEntry extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY;

    const FIELD_CONTRIBUTOR = 'contributor';
    const FIELD_FORENAME_INITIALS = 'forenameInitials';
    const FIELD_FORENAME_INITIALS_EXT = '_forenameInitials';
    const FIELD_AFFILIATION = 'affiliation';
    const FIELD_CONTRIBUTION_TYPE = 'contributionType';
    const FIELD_ROLE = 'role';
    const FIELD_CONTRIBUTION_INSTANCE = 'contributionInstance';
    const FIELD_CORRESPONDING_CONTACT = 'correspondingContact';
    const FIELD_CORRESPONDING_CONTACT_EXT = '_correspondingContact';
    const FIELD_RANKING_ORDER = 'rankingOrder';
    const FIELD_RANKING_ORDER_EXT = '_rankingOrder';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the individual contributor.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $contributor = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For citation styles that use initials.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $forenameInitials = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization affiliated with the contributor.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $affiliation = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $contributionType = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $role = null;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[]
     */
    protected null|array $contributionInstance = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $correspondingContact = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a numerical ranking to represent the degree of contributorship relative
     * to other contributors, such as 1 for first author and 2 for second author.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $rankingOrder = null;

    /**
     * Validation map for fields in type Citation.Entry
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

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
        if (array_key_exists(self::FIELD_CONTRIBUTOR, $data)) {
            if ($data[self::FIELD_CONTRIBUTOR] instanceof FHIRReference) {
                $this->setContributor($data[self::FIELD_CONTRIBUTOR]);
            } else {
                $this->setContributor(new FHIRReference($data[self::FIELD_CONTRIBUTOR]));
            }
        }
        if (array_key_exists(self::FIELD_FORENAME_INITIALS, $data) || array_key_exists(self::FIELD_FORENAME_INITIALS_EXT, $data)) {
            $value = $data[self::FIELD_FORENAME_INITIALS] ?? null;
            $ext = (isset($data[self::FIELD_FORENAME_INITIALS_EXT]) && is_array($data[self::FIELD_FORENAME_INITIALS_EXT])) ? $data[self::FIELD_FORENAME_INITIALS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setForenameInitials($value);
                } else if (is_array($value)) {
                    $this->setForenameInitials(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setForenameInitials(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setForenameInitials(new FHIRString($ext));
            } else {
                $this->setForenameInitials(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_AFFILIATION, $data)) {
            if (is_array($data[self::FIELD_AFFILIATION])) {
                foreach($data[self::FIELD_AFFILIATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addAffiliation($v);
                    } else {
                        $this->addAffiliation(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_AFFILIATION] instanceof FHIRReference) {
                $this->addAffiliation($data[self::FIELD_AFFILIATION]);
            } else {
                $this->addAffiliation(new FHIRReference($data[self::FIELD_AFFILIATION]));
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
        if (array_key_exists(self::FIELD_RANKING_ORDER, $data) || array_key_exists(self::FIELD_RANKING_ORDER_EXT, $data)) {
            $value = $data[self::FIELD_RANKING_ORDER] ?? null;
            $ext = (isset($data[self::FIELD_RANKING_ORDER_EXT]) && is_array($data[self::FIELD_RANKING_ORDER_EXT])) ? $data[self::FIELD_RANKING_ORDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setRankingOrder($value);
                } else if (is_array($value)) {
                    $this->setRankingOrder(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setRankingOrder(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRankingOrder(new FHIRPositiveInt($ext));
            } else {
                $this->setRankingOrder(new FHIRPositiveInt(null));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the individual contributor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getContributor(): null|FHIRReference
    {
        return $this->contributor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the individual contributor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $contributor
     * @return static
     */
    public function setContributor(null|FHIRReference $contributor = null): self
    {
        if (null === $contributor) {
            $contributor = new FHIRReference();
        }
        $this->_trackValueSet($this->contributor, $contributor);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getForenameInitials(): null|FHIRString
    {
        return $this->forenameInitials;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For citation styles that use initials.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $forenameInitials
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setForenameInitials(null|string|FHIRStringPrimitive|FHIRString $forenameInitials = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $forenameInitials && !($forenameInitials instanceof FHIRString)) {
            $forenameInitials = new FHIRString($forenameInitials);
        }
        $this->_trackValueSet($this->forenameInitials, $forenameInitials);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FORENAME_INITIALS])) {
            $this->_primitiveXmlLocations[self::FIELD_FORENAME_INITIALS] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FORENAME_INITIALS][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getAffiliation(): null|array
    {
        return $this->affiliation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization affiliated with the contributor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $affiliation
     * @return static
     */
    public function addAffiliation(null|FHIRReference $affiliation = null): self
    {
        if (null === $affiliation) {
            $affiliation = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->affiliation[] = $affiliation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $contributionType
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
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * The role of the contributor (e.g. author, editor, reviewer, funder).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $role
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance $contributionInstance
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getCorrespondingContact(): null|FHIRBoolean
    {
        return $this->correspondingContact;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the contributor is the corresponding contributor for the role.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $correspondingContact
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCorrespondingContact(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $correspondingContact = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $correspondingContact && !($correspondingContact instanceof FHIRBoolean)) {
            $correspondingContact = new FHIRBoolean($correspondingContact);
        }
        $this->_trackValueSet($this->correspondingContact, $correspondingContact);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CORRESPONDING_CONTACT])) {
            $this->_primitiveXmlLocations[self::FIELD_CORRESPONDING_CONTACT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CORRESPONDING_CONTACT][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getRankingOrder(): null|FHIRPositiveInt
    {
        return $this->rankingOrder;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a numerical ranking to represent the degree of contributorship relative
     * to other contributors, such as 1 for first author and 2 for second author.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt $rankingOrder
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRankingOrder(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $rankingOrder = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $rankingOrder && !($rankingOrder instanceof FHIRPositiveInt)) {
            $rankingOrder = new FHIRPositiveInt($rankingOrder);
        }
        $this->_trackValueSet($this->rankingOrder, $rankingOrder);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_RANKING_ORDER])) {
            $this->_primitiveXmlLocations[self::FIELD_RANKING_ORDER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_RANKING_ORDER][0] = $xmlLocation;
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
        if (null !== ($v = $this->getContributor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTRIBUTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getForenameInitials())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FORENAME_INITIALS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAffiliation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AFFILIATION, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getRankingOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RANKING_ORDER] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTOR])) {
            $v = $this->getContributor();
            foreach($validationRules[self::FIELD_CONTRIBUTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_CONTRIBUTOR, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_FORENAME_INITIALS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_AFFILIATION, $rule, $constraint, $v);
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
        if (isset($validationRules[self::FIELD_RANKING_ORDER])) {
            $v = $this->getRankingOrder();
            foreach($validationRules[self::FIELD_RANKING_ORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_RANKING_ORDER, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry
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
            if (self::FIELD_CONTRIBUTOR === $childName) {
                $type->setContributor(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FORENAME_INITIALS === $childName) {
                $type->setForenameInitials(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AFFILIATION === $childName) {
                $type->addAffiliation(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTRIBUTION_TYPE === $childName) {
                $type->addContributionType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ROLE === $childName) {
                $type->setRole(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTRIBUTION_INSTANCE === $childName) {
                $type->addContributionInstance(FHIRCitationContributionInstance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CORRESPONDING_CONTACT === $childName) {
                $type->setCorrespondingContact(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RANKING_ORDER === $childName) {
                $type->setRankingOrder(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_FORENAME_INITIALS])) {
            $pt = $type->getForenameInitials();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FORENAME_INITIALS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setForenameInitials((string)$attributes[self::FIELD_FORENAME_INITIALS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_RANKING_ORDER])) {
            $pt = $type->getRankingOrder();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RANKING_ORDER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRankingOrder((string)$attributes[self::FIELD_RANKING_ORDER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
        $locs = $this->_primitiveXmlLocations[self::FIELD_FORENAME_INITIALS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getForenameInitials())) {
            $xw->writeAttribute(self::FIELD_FORENAME_INITIALS, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CORRESPONDING_CONTACT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCorrespondingContact())) {
            $xw->writeAttribute(self::FIELD_CORRESPONDING_CONTACT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_RANKING_ORDER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRankingOrder())) {
            $xw->writeAttribute(self::FIELD_RANKING_ORDER, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getContributor())) {
            $xw->startElement(self::FIELD_CONTRIBUTOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FORENAME_INITIALS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getForenameInitials())) {
            $xw->startElement(self::FIELD_FORENAME_INITIALS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAffiliation() as $v) {
            $xw->startElement(self::FIELD_AFFILIATION);
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
        $locs = $this->_primitiveXmlLocations[self::FIELD_CORRESPONDING_CONTACT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCorrespondingContact())) {
            $xw->startElement(self::FIELD_CORRESPONDING_CONTACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_RANKING_ORDER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRankingOrder())) {
            $xw->startElement(self::FIELD_RANKING_ORDER);
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
        if (null !== ($v = $this->getContributor())) {
            $out->{self::FIELD_CONTRIBUTOR} = $v;
        }
        if (null !== ($v = $this->getForenameInitials())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FORENAME_INITIALS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FORENAME_INITIALS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getAffiliation())) {
            $out->{self::FIELD_AFFILIATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_AFFILIATION}[] = $v;
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
        if (null !== ($v = $this->getRankingOrder())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RANKING_ORDER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RANKING_ORDER_EXT} = $ext;
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