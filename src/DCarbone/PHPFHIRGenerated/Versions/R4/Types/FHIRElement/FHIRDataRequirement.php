<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRDataRequirement extends FHIRElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DATA_REQUIREMENT;

    /* class_default.php:50 */
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_PROFILE = 'profile';
    public const FIELD_PROFILE_EXT = '_profile';
    public const FIELD_SUBJECT_CODEABLE_CONCEPT = 'subjectCodeableConcept';
    public const FIELD_SUBJECT_REFERENCE = 'subjectReference';
    public const FIELD_MUST_SUPPORT = 'mustSupport';
    public const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    public const FIELD_CODE_FILTER = 'codeFilter';
    public const FIELD_DATE_FILTER = 'dateFilter';
    public const FIELD_LIMIT = 'limit';
    public const FIELD_LIMIT_EXT = '_limit';
    public const FIELD_SORT = 'sort';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LIMIT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $type;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical[] 
     */
    protected array $profile;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $subjectCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $subjectReference;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] 
     */
    protected array $mustSupport;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[] 
     */
    protected array $codeFilter;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[] 
     */
    protected array $dateFilter;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a maximum number of results that are required (uses the _count search
     * parameter).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $limit;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort[] 
     */
    protected array $sort;

    /* constructor.php:61 */
    /**
     * FHIRDataRequirement Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $type
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical[] $profile
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $subjectCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $subjectReference
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] $mustSupport
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[] $codeFilter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[] $dateFilter
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $limit
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort[] $sort
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|string|FHIRCodePrimitive|FHIRCode $type = null,
                                null|iterable $profile = null,
                                null|FHIRCodeableConcept $subjectCodeableConcept = null,
                                null|FHIRReference $subjectReference = null,
                                null|iterable $mustSupport = null,
                                null|iterable $codeFilter = null,
                                null|iterable $dateFilter = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $limit = null,
                                null|iterable $sort = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $profile) {
            $this->setProfile(...$profile);
        }
        if (null !== $subjectCodeableConcept) {
            $this->setSubjectCodeableConcept($subjectCodeableConcept);
        }
        if (null !== $subjectReference) {
            $this->setSubjectReference($subjectReference);
        }
        if (null !== $mustSupport) {
            $this->setMustSupport(...$mustSupport);
        }
        if (null !== $codeFilter) {
            $this->setCodeFilter(...$codeFilter);
        }
        if (null !== $dateFilter) {
            $this->setDateFilter(...$dateFilter);
        }
        if (null !== $limit) {
            $this->setLimit($limit);
        }
        if (null !== $sort) {
            $this->setSort(...$sort);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode
     */
    public function getType(): null|FHIRCode
    {
        return $this->type ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $type
     * @return static
     */
    public function setType(null|string|FHIRCodePrimitive|FHIRCode $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRCode)) {
            $type = new FHIRCode(value: $type);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical[]
     */
    public function getProfile(): array
    {
        return $this->profile ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical>
     */
    public function getProfileIterator(): iterable
    {
        if (!isset($this->profile)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->profile);
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical $profile
     * @return static
     */
    public function addProfile(string|FHIRCanonicalPrimitive|FHIRCanonical $profile): self
    {
        if (!($profile instanceof FHIRCanonical)) {
            $profile = new FHIRCanonical(value: $profile);
        }
        if (!isset($this->profile)) {
            $this->profile = [];
        }
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical ...$profile
     * @return static
     */
    public function setProfile(string|FHIRCanonicalPrimitive|FHIRCanonical ...$profile): self
    {
        if ([] === $profile) {
            unset($this->profile);
            return $this;
        }
        $this->profile = [];
        foreach($profile as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->profile[] = $v;
            } else {
                $this->profile[] = new FHIRCanonical(value: $v);
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->subjectCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $subjectCodeableConcept
     * @return static
     */
    public function setSubjectCodeableConcept(null|FHIRCodeableConcept $subjectCodeableConcept): self
    {
        if (null === $subjectCodeableConcept) {
            unset($this->subjectCodeableConcept);
            return $this;
        }
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getSubjectReference(): null|FHIRReference
    {
        return $this->subjectReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $subjectReference
     * @return static
     */
    public function setSubjectReference(null|FHIRReference $subjectReference): self
    {
        if (null === $subjectReference) {
            unset($this->subjectReference);
            return $this;
        }
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[]
     */
    public function getMustSupport(): array
    {
        return $this->mustSupport ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString>
     */
    public function getMustSupportIterator(): iterable
    {
        if (!isset($this->mustSupport)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->mustSupport);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $mustSupport
     * @return static
     */
    public function addMustSupport(string|FHIRStringPrimitive|FHIRString $mustSupport): self
    {
        if (!($mustSupport instanceof FHIRString)) {
            $mustSupport = new FHIRString(value: $mustSupport);
        }
        if (!isset($this->mustSupport)) {
            $this->mustSupport = [];
        }
        $this->mustSupport[] = $mustSupport;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString ...$mustSupport
     * @return static
     */
    public function setMustSupport(string|FHIRStringPrimitive|FHIRString ...$mustSupport): self
    {
        if ([] === $mustSupport) {
            unset($this->mustSupport);
            return $this;
        }
        $this->mustSupport = [];
        foreach($mustSupport as $v) {
            if ($v instanceof FHIRString) {
                $this->mustSupport[] = $v;
            } else {
                $this->mustSupport[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[]
     */
    public function getCodeFilter(): array
    {
        return $this->codeFilter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter>
     */
    public function getCodeFilterIterator(): iterable
    {
        if (!isset($this->codeFilter)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->codeFilter);
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $codeFilter
     * @return static
     */
    public function addCodeFilter(FHIRDataRequirementCodeFilter $codeFilter): self
    {
        if (!isset($this->codeFilter)) {
            $this->codeFilter = [];
        }
        $this->codeFilter[] = $codeFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter ...$codeFilter
     * @return static
     */
    public function setCodeFilter(FHIRDataRequirementCodeFilter ...$codeFilter): self
    {
        if ([] === $codeFilter) {
            unset($this->codeFilter);
            return $this;
        }
        $this->codeFilter = $codeFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[]
     */
    public function getDateFilter(): array
    {
        return $this->dateFilter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter>
     */
    public function getDateFilterIterator(): iterable
    {
        if (!isset($this->dateFilter)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dateFilter);
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter $dateFilter
     * @return static
     */
    public function addDateFilter(FHIRDataRequirementDateFilter $dateFilter): self
    {
        if (!isset($this->dateFilter)) {
            $this->dateFilter = [];
        }
        $this->dateFilter[] = $dateFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter ...$dateFilter
     * @return static
     */
    public function setDateFilter(FHIRDataRequirementDateFilter ...$dateFilter): self
    {
        if ([] === $dateFilter) {
            unset($this->dateFilter);
            return $this;
        }
        $this->dateFilter = $dateFilter;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a maximum number of results that are required (uses the _count search
     * parameter).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt
     */
    public function getLimit(): null|FHIRPositiveInt
    {
        return $this->limit ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a maximum number of results that are required (uses the _count search
     * parameter).
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $limit
     * @return static
     */
    public function setLimit(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $limit): self
    {
        if (null === $limit) {
            unset($this->limit);
            return $this;
        }
        if (!($limit instanceof FHIRPositiveInt)) {
            $limit = new FHIRPositiveInt(value: $limit);
        }
        $this->limit = $limit;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort[]
     */
    public function getSort(): array
    {
        return $this->sort ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort>
     */
    public function getSortIterator(): iterable
    {
        if (!isset($this->sort)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->sort);
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort $sort
     * @return static
     */
    public function addSort(FHIRDataRequirementSort $sort): self
    {
        if (!isset($this->sort)) {
            $this->sort = [];
        }
        $this->sort[] = $sort;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort ...$sort
     * @return static
     */
    public function setSort(FHIRDataRequirementSort ...$sort): self
    {
        if ([] === $sort) {
            unset($this->sort);
            return $this;
        }
        $this->sort = $sort;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDataRequirement)) {
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
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROFILE === $cen) {
                $type->addProfile(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT_CODEABLE_CONCEPT === $cen) {
                $type->setSubjectCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT_REFERENCE === $cen) {
                $type->setSubjectReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MUST_SUPPORT === $cen) {
                $type->addMustSupport(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE_FILTER === $cen) {
                $type->addCodeFilter(FHIRDataRequirementCodeFilter::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_FILTER === $cen) {
                $type->addDateFilter(FHIRDataRequirementDateFilter::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LIMIT === $cen) {
                $type->setLimit(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SORT === $cen) {
                $type->addSort(FHIRDataRequirementSort::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LIMIT])) {
            if (isset($type->limit)) {
                $type->limit->setValue((string)$attributes[self::FIELD_LIMIT]);
            } else {
                $type->setLimit((string)$attributes[self::FIELD_LIMIT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LIMIT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getValueAsString());
        }
        if (isset($this->limit) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LIMIT]) {
            $xw->writeAttribute(self::FIELD_LIMIT, $this->limit->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->profile) && [] !== $this->profile) {
            foreach($this->profile as $v) {
                $xw->startElement(self::FIELD_PROFILE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->subjectCodeableConcept)) {
            $xw->startElement(self::FIELD_SUBJECT_CODEABLE_CONCEPT);
            $this->subjectCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subjectReference)) {
            $xw->startElement(self::FIELD_SUBJECT_REFERENCE);
            $this->subjectReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->mustSupport) && [] !== $this->mustSupport) {
            foreach($this->mustSupport as $v) {
                $xw->startElement(self::FIELD_MUST_SUPPORT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->codeFilter)) {
            foreach ($this->codeFilter as $v) {
                $xw->startElement(self::FIELD_CODE_FILTER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dateFilter)) {
            foreach ($this->dateFilter as $v) {
                $xw->startElement(self::FIELD_DATE_FILTER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->limit)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LIMIT]
                || $this->limit->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LIMIT);
            $this->limit->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LIMIT]);
            $xw->endElement();
        }
        if (isset($this->sort)) {
            foreach ($this->sort as $v) {
                $xw->startElement(self::FIELD_SORT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDataRequirement)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->type)
            || isset($json->_type)
            || property_exists($json, self::FIELD_TYPE)
            || property_exists($json, self::FIELD_TYPE_EXT)) {
            $v = $json->_type ?? new \stdClass();
            $v->value = $json->type ?? null;
            $type->setType(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($json->profile)
            || isset($json->_profile)
            || property_exists($json, self::FIELD_PROFILE)
            || property_exists($json, self::FIELD_PROFILE_EXT)) {
            $vals = (array)($json->profile ?? []);
            $exts = (array)($json->FIELD_PROFILE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addProfile(FHIRCanonical::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->subjectCodeableConcept) || property_exists($json, self::FIELD_SUBJECT_CODEABLE_CONCEPT)) {
            if (is_array($json->subjectCodeableConcept)) {
                $type->setSubjectCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->subjectCodeableConcept), $config));
            } else {
                $type->setSubjectCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->subjectCodeableConcept, $config));
            }
        }
        if (isset($json->subjectReference) || property_exists($json, self::FIELD_SUBJECT_REFERENCE)) {
            if (is_array($json->subjectReference)) {
                $type->setSubjectReference(FHIRReference::jsonUnserialize(reset($json->subjectReference), $config));
            } else {
                $type->setSubjectReference(FHIRReference::jsonUnserialize($json->subjectReference, $config));
            }
        }
        if (isset($json->mustSupport)
            || isset($json->_mustSupport)
            || property_exists($json, self::FIELD_MUST_SUPPORT)
            || property_exists($json, self::FIELD_MUST_SUPPORT_EXT)) {
            $vals = (array)($json->mustSupport ?? []);
            $exts = (array)($json->FIELD_MUST_SUPPORT_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addMustSupport(FHIRString::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->codeFilter) || property_exists($json, self::FIELD_CODE_FILTER)) {
            if (is_object($json->codeFilter)) {
                $vals = [$json->codeFilter];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CODE_FILTER, true);
            } else {
                $vals = $json->codeFilter;
            }
            foreach($vals as $v) {
                $type->addCodeFilter(FHIRDataRequirementCodeFilter::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->dateFilter) || property_exists($json, self::FIELD_DATE_FILTER)) {
            if (is_object($json->dateFilter)) {
                $vals = [$json->dateFilter];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DATE_FILTER, true);
            } else {
                $vals = $json->dateFilter;
            }
            foreach($vals as $v) {
                $type->addDateFilter(FHIRDataRequirementDateFilter::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->limit)
            || isset($json->_limit)
            || property_exists($json, self::FIELD_LIMIT)
            || property_exists($json, self::FIELD_LIMIT_EXT)) {
            $v = $json->_limit ?? new \stdClass();
            $v->value = $json->limit ?? null;
            $type->setLimit(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($json->sort) || property_exists($json, self::FIELD_SORT)) {
            if (is_object($json->sort)) {
                $vals = [$json->sort];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SORT, true);
            } else {
                $vals = $json->sort;
            }
            foreach($vals as $v) {
                $type->addSort(FHIRDataRequirementSort::jsonUnserialize($v, $config));
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
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->profile) && [] !== $this->profile) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->profile as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->profile = $vals;
            }
            if ($hasExts) {
                $out->_profile = $exts;
            }
        }
        if (isset($this->subjectCodeableConcept)) {
            $out->subjectCodeableConcept = $this->subjectCodeableConcept;
        }
        if (isset($this->subjectReference)) {
            $out->subjectReference = $this->subjectReference;
        }
        if (isset($this->mustSupport) && [] !== $this->mustSupport) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->mustSupport as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->mustSupport = $vals;
            }
            if ($hasExts) {
                $out->_mustSupport = $exts;
            }
        }
        if (isset($this->codeFilter) && [] !== $this->codeFilter) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CODE_FILTER) && 1 === count($this->codeFilter)) {
                $out->codeFilter = $this->codeFilter[0];
            } else {
                $out->codeFilter = $this->codeFilter;
            }
        }
        if (isset($this->dateFilter) && [] !== $this->dateFilter) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DATE_FILTER) && 1 === count($this->dateFilter)) {
                $out->dateFilter = $this->dateFilter[0];
            } else {
                $out->dateFilter = $this->dateFilter;
            }
        }
        if (isset($this->limit)) {
            if (null !== ($val = $this->limit->getValue())) {
                $out->limit = $val;
            }
            if ($this->limit->_nonValueFieldDefined()) {
                $ext = $this->limit->jsonSerialize();
                unset($ext->value);
                $out->_limit = $ext;
            }
        }
        if (isset($this->sort) && [] !== $this->sort) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SORT) && 1 === count($this->sort)) {
                $out->sort = $this->sort[0];
            } else {
                $out->sort = $this->sort;
            }
        }
        return $out;
    }
}