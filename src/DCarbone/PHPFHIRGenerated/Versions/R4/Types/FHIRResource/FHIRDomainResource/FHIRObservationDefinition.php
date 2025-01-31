<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 23:45+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRObservationDataTypeList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRObservationDataType;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRObservationDefinition extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OBSERVATION_DEFINITION;

    /* class_default.php:47 */
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CODE = 'code';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_PERMITTED_DATA_TYPE = 'permittedDataType';
    public const FIELD_PERMITTED_DATA_TYPE_EXT = '_permittedDataType';
    public const FIELD_MULTIPLE_RESULTS_ALLOWED = 'multipleResultsAllowed';
    public const FIELD_MULTIPLE_RESULTS_ALLOWED_EXT = '_multipleResultsAllowed';
    public const FIELD_METHOD = 'method';
    public const FIELD_PREFERRED_REPORT_NAME = 'preferredReportName';
    public const FIELD_PREFERRED_REPORT_NAME_EXT = '_preferredReportName';
    public const FIELD_QUANTITATIVE_DETAILS = 'quantitativeDetails';
    public const FIELD_QUALIFIED_INTERVAL = 'qualifiedInterval';
    public const FIELD_VALID_CODED_VALUE_SET = 'validCodedValueSet';
    public const FIELD_NORMAL_CODED_VALUE_SET = 'normalCodedValueSet';
    public const FIELD_ABNORMAL_CODED_VALUE_SET = 'abnormalCodedValueSet';
    public const FIELD_CRITICAL_CODED_VALUE_SET = 'criticalCodedValueSet';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_MULTIPLE_RESULTS_ALLOWED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PREFERRED_REPORT_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of observation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $category;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what will be observed. Sometimes this is called the observation
     * "name".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * Permitted data type for observation value.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRObservationDataType[] 
     */
    protected array $permittedDataType;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Multiple results allowed for observations conforming to this
     * ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $multipleResultsAllowed;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method or technique used to perform the observation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $method;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preferred name to be used when reporting the results of observations
     * conforming to this ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $preferredReportName;
    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Characteristics for quantitative results of this observation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails 
     */
    protected FHIRObservationDefinitionQuantitativeDetails $quantitativeDetails;
    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Multiple ranges of results qualified by different contexts for ordinal or
     * continuous observations conforming to this ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval[] 
     */
    protected array $qualifiedInterval;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of valid coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $validCodedValueSet;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of normal coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $normalCodedValueSet;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of abnormal coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $abnormalCodedValueSet;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of critical coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $criticalCodedValueSet;

    /* constructor.php:63 */
    /**
     * FHIRObservationDefinition Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRObservationDataTypeList[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRObservationDataType[] $permittedDataType
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $multipleResultsAllowed
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $method
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $preferredReportName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails $quantitativeDetails
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval[] $qualifiedInterval
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $validCodedValueSet
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $normalCodedValueSet
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $abnormalCodedValueSet
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $criticalCodedValueSet
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $category = null,
                                null|FHIRCodeableConcept $code = null,
                                null|iterable $identifier = null,
                                null|iterable $permittedDataType = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $multipleResultsAllowed = null,
                                null|FHIRCodeableConcept $method = null,
                                null|string|FHIRStringPrimitive|FHIRString $preferredReportName = null,
                                null|FHIRObservationDefinitionQuantitativeDetails $quantitativeDetails = null,
                                null|iterable $qualifiedInterval = null,
                                null|FHIRReference $validCodedValueSet = null,
                                null|FHIRReference $normalCodedValueSet = null,
                                null|FHIRReference $abnormalCodedValueSet = null,
                                null|FHIRReference $criticalCodedValueSet = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $category) {
            $this->setCategory(...$category);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $permittedDataType) {
            $this->setPermittedDataType(...$permittedDataType);
        }
        if (null !== $multipleResultsAllowed) {
            $this->setMultipleResultsAllowed($multipleResultsAllowed);
        }
        if (null !== $method) {
            $this->setMethod($method);
        }
        if (null !== $preferredReportName) {
            $this->setPreferredReportName($preferredReportName);
        }
        if (null !== $quantitativeDetails) {
            $this->setQuantitativeDetails($quantitativeDetails);
        }
        if (null !== $qualifiedInterval) {
            $this->setQualifiedInterval(...$qualifiedInterval);
        }
        if (null !== $validCodedValueSet) {
            $this->setValidCodedValueSet($validCodedValueSet);
        }
        if (null !== $normalCodedValueSet) {
            $this->setNormalCodedValueSet($normalCodedValueSet);
        }
        if (null !== $abnormalCodedValueSet) {
            $this->setAbnormalCodedValueSet($abnormalCodedValueSet);
        }
        if (null !== $criticalCodedValueSet) {
            $this->setCriticalCodedValueSet($criticalCodedValueSet);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:148 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of observation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory(): array
    {
        return $this->category ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCategoryIterator(): iterable
    {
        if (!isset($this->category)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->category);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of observation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(FHIRCodeableConcept $category): self
    {
        if (!isset($this->category)) {
            $this->category = [];
        }
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of observation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept ...$category): self
    {
        if ([] === $category) {
            unset($this->category);
            return $this;
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what will be observed. Sometimes this is called the observation
     * "name".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what will be observed. Sometimes this is called the observation
     * "name".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
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
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRString|FHIRIdentifier $identifier): self
    {
        if (!($identifier instanceof FHIRIdentifier)) {
            $identifier = new FHIRIdentifier(value: $identifier);
        }
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
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRString|FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Permitted data type for observation value.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRObservationDataType[]
     */
    public function getPermittedDataType(): array
    {
        return $this->permittedDataType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRObservationDataType>
     */
    public function getPermittedDataTypeIterator(): iterable
    {
        if (!isset($this->permittedDataType)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->permittedDataType);
    }

    /**
     * Permitted data type for observation value.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRObservationDataTypeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRObservationDataType $permittedDataType
     * @return static
     */
    public function addPermittedDataType(string|FHIRObservationDataTypeList|FHIRObservationDataType $permittedDataType): self
    {
        if (!($permittedDataType instanceof FHIRObservationDataType)) {
            $permittedDataType = new FHIRObservationDataType(value: $permittedDataType);
        }
        if (!isset($this->permittedDataType)) {
            $this->permittedDataType = [];
        }
        $this->permittedDataType[] = $permittedDataType;
        return $this;
    }

    /**
     * Permitted data type for observation value.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRObservationDataTypeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRObservationDataType ...$permittedDataType
     * @return static
     */
    public function setPermittedDataType(string|FHIRObservationDataTypeList|FHIRObservationDataType ...$permittedDataType): self
    {
        if ([] === $permittedDataType) {
            unset($this->permittedDataType);
            return $this;
        }
        $this->permittedDataType = [];
        foreach($permittedDataType as $v) {
            if ($v instanceof FHIRObservationDataType) {
                $this->permittedDataType[] = $v;
            } else {
                $this->permittedDataType[] = new FHIRObservationDataType(value: $v);
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Multiple results allowed for observations conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getMultipleResultsAllowed(): null|FHIRBoolean
    {
        return $this->multipleResultsAllowed ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Multiple results allowed for observations conforming to this
     * ObservationDefinition.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $multipleResultsAllowed
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMultipleResultsAllowed(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $multipleResultsAllowed,
                                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $multipleResultsAllowed) {
            unset($this->multipleResultsAllowed);
            return $this;
        }
        if (!($multipleResultsAllowed instanceof FHIRBoolean)) {
            $multipleResultsAllowed = new FHIRBoolean(value: $multipleResultsAllowed);
        }
        $this->multipleResultsAllowed = $multipleResultsAllowed;
        if ($this->_valueXMLLocations[self::FIELD_MULTIPLE_RESULTS_ALLOWED] !== $valueXMLLocation) {
            $this->_setMultipleResultsAllowedValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the multipleResultsAllowed element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMultipleResultsAllowedValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MULTIPLE_RESULTS_ALLOWED];
    }

    /**
     * Set the location the "value" field of the multipleResultsAllowed element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMultipleResultsAllowedValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MULTIPLE_RESULTS_ALLOWED] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method or technique used to perform the observation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod(): null|FHIRCodeableConcept
    {
        return $this->method ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method or technique used to perform the observation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(null|FHIRCodeableConcept $method): self
    {
        if (null === $method) {
            unset($this->method);
            return $this;
        }
        $this->method = $method;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preferred name to be used when reporting the results of observations
     * conforming to this ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getPreferredReportName(): null|FHIRString
    {
        return $this->preferredReportName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preferred name to be used when reporting the results of observations
     * conforming to this ObservationDefinition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $preferredReportName
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPreferredReportName(null|string|FHIRStringPrimitive|FHIRString $preferredReportName,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $preferredReportName) {
            unset($this->preferredReportName);
            return $this;
        }
        if (!($preferredReportName instanceof FHIRString)) {
            $preferredReportName = new FHIRString(value: $preferredReportName);
        }
        $this->preferredReportName = $preferredReportName;
        if ($this->_valueXMLLocations[self::FIELD_PREFERRED_REPORT_NAME] !== $valueXMLLocation) {
            $this->_setPreferredReportNameValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the preferredReportName element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPreferredReportNameValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PREFERRED_REPORT_NAME];
    }

    /**
     * Set the location the "value" field of the preferredReportName element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPreferredReportNameValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PREFERRED_REPORT_NAME] = $valueXMLLocation;
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Characteristics for quantitative results of this observation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     */
    public function getQuantitativeDetails(): null|FHIRObservationDefinitionQuantitativeDetails
    {
        return $this->quantitativeDetails ?? null;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Characteristics for quantitative results of this observation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails $quantitativeDetails
     * @return static
     */
    public function setQuantitativeDetails(null|FHIRObservationDefinitionQuantitativeDetails $quantitativeDetails): self
    {
        if (null === $quantitativeDetails) {
            unset($this->quantitativeDetails);
            return $this;
        }
        $this->quantitativeDetails = $quantitativeDetails;
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Multiple ranges of results qualified by different contexts for ordinal or
     * continuous observations conforming to this ObservationDefinition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval[]
     */
    public function getQualifiedInterval(): array
    {
        return $this->qualifiedInterval ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval>
     */
    public function getQualifiedIntervalIterator(): iterable
    {
        if (!isset($this->qualifiedInterval)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->qualifiedInterval);
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Multiple ranges of results qualified by different contexts for ordinal or
     * continuous observations conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval $qualifiedInterval
     * @return static
     */
    public function addQualifiedInterval(FHIRObservationDefinitionQualifiedInterval $qualifiedInterval): self
    {
        if (!isset($this->qualifiedInterval)) {
            $this->qualifiedInterval = [];
        }
        $this->qualifiedInterval[] = $qualifiedInterval;
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Multiple ranges of results qualified by different contexts for ordinal or
     * continuous observations conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval ...$qualifiedInterval
     * @return static
     */
    public function setQualifiedInterval(FHIRObservationDefinitionQualifiedInterval ...$qualifiedInterval): self
    {
        if ([] === $qualifiedInterval) {
            unset($this->qualifiedInterval);
            return $this;
        }
        $this->qualifiedInterval = $qualifiedInterval;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of valid coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getValidCodedValueSet(): null|FHIRReference
    {
        return $this->validCodedValueSet ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of valid coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $validCodedValueSet
     * @return static
     */
    public function setValidCodedValueSet(null|FHIRReference $validCodedValueSet): self
    {
        if (null === $validCodedValueSet) {
            unset($this->validCodedValueSet);
            return $this;
        }
        $this->validCodedValueSet = $validCodedValueSet;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of normal coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getNormalCodedValueSet(): null|FHIRReference
    {
        return $this->normalCodedValueSet ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of normal coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $normalCodedValueSet
     * @return static
     */
    public function setNormalCodedValueSet(null|FHIRReference $normalCodedValueSet): self
    {
        if (null === $normalCodedValueSet) {
            unset($this->normalCodedValueSet);
            return $this;
        }
        $this->normalCodedValueSet = $normalCodedValueSet;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of abnormal coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getAbnormalCodedValueSet(): null|FHIRReference
    {
        return $this->abnormalCodedValueSet ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of abnormal coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $abnormalCodedValueSet
     * @return static
     */
    public function setAbnormalCodedValueSet(null|FHIRReference $abnormalCodedValueSet): self
    {
        if (null === $abnormalCodedValueSet) {
            unset($this->abnormalCodedValueSet);
            return $this;
        }
        $this->abnormalCodedValueSet = $abnormalCodedValueSet;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of critical coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getCriticalCodedValueSet(): null|FHIRReference
    {
        return $this->criticalCodedValueSet ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The set of critical coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $criticalCodedValueSet
     * @return static
     */
    public function setCriticalCodedValueSet(null|FHIRReference $criticalCodedValueSet): self
    {
        if (null === $criticalCodedValueSet) {
            unset($this->criticalCodedValueSet);
            return $this;
        }
        $this->criticalCodedValueSet = $criticalCodedValueSet;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PERMITTED_DATA_TYPE])) {
            $v = $this->getPermittedDataType();
            foreach($validationRules[self::FIELD_PERMITTED_DATA_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERMITTED_DATA_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERMITTED_DATA_TYPE])) {
                        $errs[self::FIELD_PERMITTED_DATA_TYPE] = [];
                    }
                    $errs[self::FIELD_PERMITTED_DATA_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MULTIPLE_RESULTS_ALLOWED])) {
            $v = $this->getMultipleResultsAllowed();
            foreach($validationRules[self::FIELD_MULTIPLE_RESULTS_ALLOWED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MULTIPLE_RESULTS_ALLOWED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MULTIPLE_RESULTS_ALLOWED])) {
                        $errs[self::FIELD_MULTIPLE_RESULTS_ALLOWED] = [];
                    }
                    $errs[self::FIELD_MULTIPLE_RESULTS_ALLOWED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREFERRED_REPORT_NAME])) {
            $v = $this->getPreferredReportName();
            foreach($validationRules[self::FIELD_PREFERRED_REPORT_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PREFERRED_REPORT_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREFERRED_REPORT_NAME])) {
                        $errs[self::FIELD_PREFERRED_REPORT_NAME] = [];
                    }
                    $errs[self::FIELD_PREFERRED_REPORT_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITATIVE_DETAILS])) {
            $v = $this->getQuantitativeDetails();
            foreach($validationRules[self::FIELD_QUANTITATIVE_DETAILS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_QUANTITATIVE_DETAILS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITATIVE_DETAILS])) {
                        $errs[self::FIELD_QUANTITATIVE_DETAILS] = [];
                    }
                    $errs[self::FIELD_QUANTITATIVE_DETAILS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUALIFIED_INTERVAL])) {
            $v = $this->getQualifiedInterval();
            foreach($validationRules[self::FIELD_QUALIFIED_INTERVAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_QUALIFIED_INTERVAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUALIFIED_INTERVAL])) {
                        $errs[self::FIELD_QUALIFIED_INTERVAL] = [];
                    }
                    $errs[self::FIELD_QUALIFIED_INTERVAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALID_CODED_VALUE_SET])) {
            $v = $this->getValidCodedValueSet();
            foreach($validationRules[self::FIELD_VALID_CODED_VALUE_SET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALID_CODED_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALID_CODED_VALUE_SET])) {
                        $errs[self::FIELD_VALID_CODED_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_VALID_CODED_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NORMAL_CODED_VALUE_SET])) {
            $v = $this->getNormalCodedValueSet();
            foreach($validationRules[self::FIELD_NORMAL_CODED_VALUE_SET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NORMAL_CODED_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NORMAL_CODED_VALUE_SET])) {
                        $errs[self::FIELD_NORMAL_CODED_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_NORMAL_CODED_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABNORMAL_CODED_VALUE_SET])) {
            $v = $this->getAbnormalCodedValueSet();
            foreach($validationRules[self::FIELD_ABNORMAL_CODED_VALUE_SET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABNORMAL_CODED_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABNORMAL_CODED_VALUE_SET])) {
                        $errs[self::FIELD_ABNORMAL_CODED_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_ABNORMAL_CODED_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CRITICAL_CODED_VALUE_SET])) {
            $v = $this->getCriticalCodedValueSet();
            foreach($validationRules[self::FIELD_CRITICAL_CODED_VALUE_SET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CRITICAL_CODED_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CRITICAL_CODED_VALUE_SET])) {
                        $errs[self::FIELD_CRITICAL_CODED_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_CRITICAL_CODED_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /* class_default.php:212 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRObservationDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinition)) {
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERMITTED_DATA_TYPE === $cen) {
                $type->addPermittedDataType(FHIRObservationDataType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MULTIPLE_RESULTS_ALLOWED === $cen) {
                $type->setMultipleResultsAllowed(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_METHOD === $cen) {
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PREFERRED_REPORT_NAME === $cen) {
                $type->setPreferredReportName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITATIVE_DETAILS === $cen) {
                $type->setQuantitativeDetails(FHIRObservationDefinitionQuantitativeDetails::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUALIFIED_INTERVAL === $cen) {
                $type->addQualifiedInterval(FHIRObservationDefinitionQualifiedInterval::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALID_CODED_VALUE_SET === $cen) {
                $type->setValidCodedValueSet(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NORMAL_CODED_VALUE_SET === $cen) {
                $type->setNormalCodedValueSet(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABNORMAL_CODED_VALUE_SET === $cen) {
                $type->setAbnormalCodedValueSet(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CRITICAL_CODED_VALUE_SET === $cen) {
                $type->setCriticalCodedValueSet(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MULTIPLE_RESULTS_ALLOWED])) {
            if (isset($type->multipleResultsAllowed)) {
                $type->multipleResultsAllowed->setValue((string)$attributes[self::FIELD_MULTIPLE_RESULTS_ALLOWED]);
                $type->_setMultipleResultsAllowedValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMultipleResultsAllowed((string)$attributes[self::FIELD_MULTIPLE_RESULTS_ALLOWED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PREFERRED_REPORT_NAME])) {
            if (isset($type->preferredReportName)) {
                $type->preferredReportName->setValue((string)$attributes[self::FIELD_PREFERRED_REPORT_NAME]);
                $type->_setPreferredReportNameValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPreferredReportName((string)$attributes[self::FIELD_PREFERRED_REPORT_NAME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('ObservationDefinition', $this->_getSourceXMLNS());
        }
        if (isset($this->multipleResultsAllowed) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MULTIPLE_RESULTS_ALLOWED]) {
            $xw->writeAttribute(self::FIELD_MULTIPLE_RESULTS_ALLOWED, $this->multipleResultsAllowed->_getFormattedValue());
        }
        if (isset($this->preferredReportName) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PREFERRED_REPORT_NAME]) {
            $xw->writeAttribute(self::FIELD_PREFERRED_REPORT_NAME, $this->preferredReportName->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->category)) {
            foreach ($this->category as $v) {
                $xw->startElement(self::FIELD_CATEGORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->permittedDataType) && [] !== $this->permittedDataType) {
            foreach($this->permittedDataType as $v) {
                $xw->startElement(self::FIELD_PERMITTED_DATA_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->multipleResultsAllowed)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MULTIPLE_RESULTS_ALLOWED]
                || $this->multipleResultsAllowed->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MULTIPLE_RESULTS_ALLOWED);
            $this->multipleResultsAllowed->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MULTIPLE_RESULTS_ALLOWED]);
            $xw->endElement();
        }
        if (isset($this->method)) {
            $xw->startElement(self::FIELD_METHOD);
            $this->method->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->preferredReportName)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PREFERRED_REPORT_NAME]
                || $this->preferredReportName->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PREFERRED_REPORT_NAME);
            $this->preferredReportName->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PREFERRED_REPORT_NAME]);
            $xw->endElement();
        }
        if (isset($this->quantitativeDetails)) {
            $xw->startElement(self::FIELD_QUANTITATIVE_DETAILS);
            $this->quantitativeDetails->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->qualifiedInterval)) {
            foreach ($this->qualifiedInterval as $v) {
                $xw->startElement(self::FIELD_QUALIFIED_INTERVAL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->validCodedValueSet)) {
            $xw->startElement(self::FIELD_VALID_CODED_VALUE_SET);
            $this->validCodedValueSet->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->normalCodedValueSet)) {
            $xw->startElement(self::FIELD_NORMAL_CODED_VALUE_SET);
            $this->normalCodedValueSet->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->abnormalCodedValueSet)) {
            $xw->startElement(self::FIELD_ABNORMAL_CODED_VALUE_SET);
            $this->abnormalCodedValueSet->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->criticalCodedValueSet)) {
            $xw->startElement(self::FIELD_CRITICAL_CODED_VALUE_SET);
            $this->criticalCodedValueSet->xmlSerialize($xw, $config);
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRObservationDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinition)) {
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CATEGORY]) || array_key_exists(self::FIELD_CATEGORY, $json)) {
            $vs = $json[self::FIELD_CATEGORY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCategory(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CODE], $config));
        }
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            $vs = $json[self::FIELD_IDENTIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PERMITTED_DATA_TYPE])
            || isset($json[self::FIELD_PERMITTED_DATA_TYPE_EXT])
            || array_key_exists(self::FIELD_PERMITTED_DATA_TYPE, $json)
            || array_key_exists(self::FIELD_PERMITTED_DATA_TYPE_EXT, $json)) {
            $value = (array)($json[self::FIELD_PERMITTED_DATA_TYPE] ?? []);
            $ext = (array)($json[self::FIELD_PERMITTED_DATA_TYPE_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addPermittedDataType(FHIRObservationDataType::jsonUnserialize(
                    [FHIRObservationDataType::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_MULTIPLE_RESULTS_ALLOWED])
            || isset($json[self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT])
            || array_key_exists(self::FIELD_MULTIPLE_RESULTS_ALLOWED, $json)
            || array_key_exists(self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT, $json)) {
            $value = $json[self::FIELD_MULTIPLE_RESULTS_ALLOWED] ?? null;
            $type->setMultipleResultsAllowed(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_METHOD]) || array_key_exists(self::FIELD_METHOD, $json)) {
            $type->setMethod(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_METHOD], $config));
        }
        if (isset($json[self::FIELD_PREFERRED_REPORT_NAME])
            || isset($json[self::FIELD_PREFERRED_REPORT_NAME_EXT])
            || array_key_exists(self::FIELD_PREFERRED_REPORT_NAME, $json)
            || array_key_exists(self::FIELD_PREFERRED_REPORT_NAME_EXT, $json)) {
            $value = $json[self::FIELD_PREFERRED_REPORT_NAME] ?? null;
            $type->setPreferredReportName(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PREFERRED_REPORT_NAME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_QUANTITATIVE_DETAILS]) || array_key_exists(self::FIELD_QUANTITATIVE_DETAILS, $json)) {
            $type->setQuantitativeDetails(FHIRObservationDefinitionQuantitativeDetails::jsonUnserialize($json[self::FIELD_QUANTITATIVE_DETAILS], $config));
        }
        if (isset($json[self::FIELD_QUALIFIED_INTERVAL]) || array_key_exists(self::FIELD_QUALIFIED_INTERVAL, $json)) {
            $vs = $json[self::FIELD_QUALIFIED_INTERVAL];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addQualifiedInterval(FHIRObservationDefinitionQualifiedInterval::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_VALID_CODED_VALUE_SET]) || array_key_exists(self::FIELD_VALID_CODED_VALUE_SET, $json)) {
            $type->setValidCodedValueSet(FHIRReference::jsonUnserialize($json[self::FIELD_VALID_CODED_VALUE_SET], $config));
        }
        if (isset($json[self::FIELD_NORMAL_CODED_VALUE_SET]) || array_key_exists(self::FIELD_NORMAL_CODED_VALUE_SET, $json)) {
            $type->setNormalCodedValueSet(FHIRReference::jsonUnserialize($json[self::FIELD_NORMAL_CODED_VALUE_SET], $config));
        }
        if (isset($json[self::FIELD_ABNORMAL_CODED_VALUE_SET]) || array_key_exists(self::FIELD_ABNORMAL_CODED_VALUE_SET, $json)) {
            $type->setAbnormalCodedValueSet(FHIRReference::jsonUnserialize($json[self::FIELD_ABNORMAL_CODED_VALUE_SET], $config));
        }
        if (isset($json[self::FIELD_CRITICAL_CODED_VALUE_SET]) || array_key_exists(self::FIELD_CRITICAL_CODED_VALUE_SET, $json)) {
            $type->setCriticalCodedValueSet(FHIRReference::jsonUnserialize($json[self::FIELD_CRITICAL_CODED_VALUE_SET], $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->category) && [] !== $this->category) {
            $out->category = $this->category;
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->permittedDataType) && [] !== $this->permittedDataType) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->permittedDataType as $v) {
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
                $out->permittedDataType = $vals;
            }
            if ($hasExts) {
                $out->_permittedDataType = $exts;
            }
        }
        if (isset($this->multipleResultsAllowed)) {
            if (null !== ($val = $this->multipleResultsAllowed->getValue())) {
                $out->multipleResultsAllowed = $val;
            }
            if ($this->multipleResultsAllowed->_nonValueFieldDefined()) {
                $ext = $this->multipleResultsAllowed->jsonSerialize();
                unset($ext->value);
                $out->_multipleResultsAllowed = $ext;
            }
        }
        if (isset($this->method)) {
            $out->method = $this->method;
        }
        if (isset($this->preferredReportName)) {
            if (null !== ($val = $this->preferredReportName->getValue())) {
                $out->preferredReportName = $val;
            }
            if ($this->preferredReportName->_nonValueFieldDefined()) {
                $ext = $this->preferredReportName->jsonSerialize();
                unset($ext->value);
                $out->_preferredReportName = $ext;
            }
        }
        if (isset($this->quantitativeDetails)) {
            $out->quantitativeDetails = $this->quantitativeDetails;
        }
        if (isset($this->qualifiedInterval) && [] !== $this->qualifiedInterval) {
            $out->qualifiedInterval = $this->qualifiedInterval;
        }
        if (isset($this->validCodedValueSet)) {
            $out->validCodedValueSet = $this->validCodedValueSet;
        }
        if (isset($this->normalCodedValueSet)) {
            $out->normalCodedValueSet = $this->normalCodedValueSet;
        }
        if (isset($this->abnormalCodedValueSet)) {
            $out->abnormalCodedValueSet = $this->abnormalCodedValueSet;
        }
        if (isset($this->criticalCodedValueSet)) {
            $out->criticalCodedValueSet = $this->criticalCodedValueSet;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
    /* class_default.php:236 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}