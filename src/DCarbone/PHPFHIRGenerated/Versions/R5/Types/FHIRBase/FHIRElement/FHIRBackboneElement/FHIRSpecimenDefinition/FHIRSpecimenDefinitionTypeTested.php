<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:49+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSpecimenContainedPreferenceEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A kind of specimen with associated set of requirements.
 */
class FHIRSpecimenDefinitionTypeTested extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED;

    /* class_default.php:50 */
    public const FIELD_IS_DERIVED = 'isDerived';
    public const FIELD_IS_DERIVED_EXT = '_isDerived';
    public const FIELD_TYPE = 'type';
    public const FIELD_PREFERENCE = 'preference';
    public const FIELD_PREFERENCE_EXT = '_preference';
    public const FIELD_CONTAINER = 'container';
    public const FIELD_REQUIREMENT = 'requirement';
    public const FIELD_REQUIREMENT_EXT = '_requirement';
    public const FIELD_RETENTION_TIME = 'retentionTime';
    public const FIELD_SINGLE_USE = 'singleUse';
    public const FIELD_SINGLE_USE_EXT = '_singleUse';
    public const FIELD_REJECTION_CRITERION = 'rejectionCriterion';
    public const FIELD_HANDLING = 'handling';
    public const FIELD_TESTING_DESTINATION = 'testingDestination';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_PREFERENCE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_IS_DERIVED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PREFERENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REQUIREMENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SINGLE_USE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $isDerived;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of specimen conditioned for testing expected by lab.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference 
     */
    protected FHIRSpecimenContainedPreference $preference;
    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer 
     */
    protected FHIRSpecimenDefinitionContainer $container;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $requirement;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The usual time that a specimen of this kind is retained after the ordered tests
     * are completed, for the purpose of additional testing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $retentionTime;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specimen can be used by only one test or panel if the value is "true".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $singleUse;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $rejectionCriterion;
    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[] 
     */
    protected array $handling;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination
     * of these.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $testingDestination;

    /* constructor.php:61 */
    /**
     * FHIRSpecimenDefinitionTypeTested Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $isDerived
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSpecimenContainedPreferenceEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference $preference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer $container
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $requirement
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $retentionTime
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $singleUse
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $rejectionCriterion
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[] $handling
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $testingDestination
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isDerived = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|FHIRSpecimenContainedPreferenceEnum|FHIRSpecimenContainedPreference $preference = null,
                                null|FHIRSpecimenDefinitionContainer $container = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $requirement = null,
                                null|FHIRDuration $retentionTime = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $singleUse = null,
                                null|iterable $rejectionCriterion = null,
                                null|iterable $handling = null,
                                null|iterable $testingDestination = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $isDerived) {
            $this->setIsDerived($isDerived);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $preference) {
            $this->setPreference($preference);
        }
        if (null !== $container) {
            $this->setContainer($container);
        }
        if (null !== $requirement) {
            $this->setRequirement($requirement);
        }
        if (null !== $retentionTime) {
            $this->setRetentionTime($retentionTime);
        }
        if (null !== $singleUse) {
            $this->setSingleUse($singleUse);
        }
        if (null !== $rejectionCriterion) {
            $this->setRejectionCriterion(...$rejectionCriterion);
        }
        if (null !== $handling) {
            $this->setHandling(...$handling);
        }
        if (null !== $testingDestination) {
            $this->setTestingDestination(...$testingDestination);
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getIsDerived(): null|FHIRBoolean
    {
        return $this->isDerived ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $isDerived
     * @return static
     */
    public function setIsDerived(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isDerived): self
    {
        if (null === $isDerived) {
            unset($this->isDerived);
            return $this;
        }
        if (!($isDerived instanceof FHIRBoolean)) {
            $isDerived = new FHIRBoolean(value: $isDerived);
        }
        $this->isDerived = $isDerived;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of specimen conditioned for testing expected by lab.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of specimen conditioned for testing expected by lab.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference
     */
    public function getPreference(): null|FHIRSpecimenContainedPreference
    {
        return $this->preference ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSpecimenContainedPreferenceEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference $preference
     * @return static
     */
    public function setPreference(null|string|FHIRSpecimenContainedPreferenceEnum|FHIRSpecimenContainedPreference $preference): self
    {
        if (null === $preference) {
            unset($this->preference);
            return $this;
        }
        if (!($preference instanceof FHIRSpecimenContainedPreference)) {
            $preference = new FHIRSpecimenContainedPreference(value: $preference);
        }
        $this->preference = $preference;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function getContainer(): null|FHIRSpecimenDefinitionContainer
    {
        return $this->container ?? null;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer $container
     * @return static
     */
    public function setContainer(null|FHIRSpecimenDefinitionContainer $container): self
    {
        if (null === $container) {
            unset($this->container);
            return $this;
        }
        $this->container = $container;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getRequirement(): null|FHIRMarkdown
    {
        return $this->requirement ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $requirement
     * @return static
     */
    public function setRequirement(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $requirement): self
    {
        if (null === $requirement) {
            unset($this->requirement);
            return $this;
        }
        if (!($requirement instanceof FHIRMarkdown)) {
            $requirement = new FHIRMarkdown(value: $requirement);
        }
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The usual time that a specimen of this kind is retained after the ordered tests
     * are completed, for the purpose of additional testing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getRetentionTime(): null|FHIRDuration
    {
        return $this->retentionTime ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The usual time that a specimen of this kind is retained after the ordered tests
     * are completed, for the purpose of additional testing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $retentionTime
     * @return static
     */
    public function setRetentionTime(null|FHIRDuration $retentionTime): self
    {
        if (null === $retentionTime) {
            unset($this->retentionTime);
            return $this;
        }
        $this->retentionTime = $retentionTime;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specimen can be used by only one test or panel if the value is "true".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getSingleUse(): null|FHIRBoolean
    {
        return $this->singleUse ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specimen can be used by only one test or panel if the value is "true".
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $singleUse
     * @return static
     */
    public function setSingleUse(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $singleUse): self
    {
        if (null === $singleUse) {
            unset($this->singleUse);
            return $this;
        }
        if (!($singleUse instanceof FHIRBoolean)) {
            $singleUse = new FHIRBoolean(value: $singleUse);
        }
        $this->singleUse = $singleUse;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getRejectionCriterion(): array
    {
        return $this->rejectionCriterion ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getRejectionCriterionIterator(): iterable
    {
        if (!isset($this->rejectionCriterion)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->rejectionCriterion);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $rejectionCriterion
     * @return static
     */
    public function addRejectionCriterion(FHIRCodeableConcept $rejectionCriterion): self
    {
        if (!isset($this->rejectionCriterion)) {
            $this->rejectionCriterion = [];
        }
        $this->rejectionCriterion[] = $rejectionCriterion;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$rejectionCriterion
     * @return static
     */
    public function setRejectionCriterion(FHIRCodeableConcept ...$rejectionCriterion): self
    {
        if ([] === $rejectionCriterion) {
            unset($this->rejectionCriterion);
            return $this;
        }
        $this->rejectionCriterion = $rejectionCriterion;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[]
     */
    public function getHandling(): array
    {
        return $this->handling ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling>
     */
    public function getHandlingIterator(): iterable
    {
        if (!isset($this->handling)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->handling);
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling $handling
     * @return static
     */
    public function addHandling(FHIRSpecimenDefinitionHandling $handling): self
    {
        if (!isset($this->handling)) {
            $this->handling = [];
        }
        $this->handling[] = $handling;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling ...$handling
     * @return static
     */
    public function setHandling(FHIRSpecimenDefinitionHandling ...$handling): self
    {
        if ([] === $handling) {
            unset($this->handling);
            return $this;
        }
        $this->handling = $handling;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination
     * of these.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getTestingDestination(): array
    {
        return $this->testingDestination ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getTestingDestinationIterator(): iterable
    {
        if (!isset($this->testingDestination)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->testingDestination);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination
     * of these.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $testingDestination
     * @return static
     */
    public function addTestingDestination(FHIRCodeableConcept $testingDestination): self
    {
        if (!isset($this->testingDestination)) {
            $this->testingDestination = [];
        }
        $this->testingDestination[] = $testingDestination;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination
     * of these.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$testingDestination
     * @return static
     */
    public function setTestingDestination(FHIRCodeableConcept ...$testingDestination): self
    {
        if ([] === $testingDestination) {
            unset($this->testingDestination);
            return $this;
        }
        $this->testingDestination = $testingDestination;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSpecimenDefinitionTypeTested)) {
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
            } else if (self::FIELD_IS_DERIVED === $cen) {
                $type->setIsDerived(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PREFERENCE === $cen) {
                $type->setPreference(FHIRSpecimenContainedPreference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINER === $cen) {
                $type->setContainer(FHIRSpecimenDefinitionContainer::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUIREMENT === $cen) {
                $type->setRequirement(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RETENTION_TIME === $cen) {
                $type->setRetentionTime(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SINGLE_USE === $cen) {
                $type->setSingleUse(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REJECTION_CRITERION === $cen) {
                $type->addRejectionCriterion(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HANDLING === $cen) {
                $type->addHandling(FHIRSpecimenDefinitionHandling::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TESTING_DESTINATION === $cen) {
                $type->addTestingDestination(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IS_DERIVED])) {
            if (isset($type->isDerived)) {
                $type->isDerived->setValue((string)$attributes[self::FIELD_IS_DERIVED]);
            } else {
                $type->setIsDerived((string)$attributes[self::FIELD_IS_DERIVED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IS_DERIVED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PREFERENCE])) {
            if (isset($type->preference)) {
                $type->preference->setValue((string)$attributes[self::FIELD_PREFERENCE]);
            } else {
                $type->setPreference((string)$attributes[self::FIELD_PREFERENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PREFERENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_REQUIREMENT])) {
            if (isset($type->requirement)) {
                $type->requirement->setValue((string)$attributes[self::FIELD_REQUIREMENT]);
            } else {
                $type->setRequirement((string)$attributes[self::FIELD_REQUIREMENT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_REQUIREMENT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SINGLE_USE])) {
            if (isset($type->singleUse)) {
                $type->singleUse->setValue((string)$attributes[self::FIELD_SINGLE_USE]);
            } else {
                $type->setSingleUse((string)$attributes[self::FIELD_SINGLE_USE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SINGLE_USE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->isDerived) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_IS_DERIVED]) {
            $xw->writeAttribute(self::FIELD_IS_DERIVED, $this->isDerived->_getValueAsString());
        }
        if (isset($this->preference) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PREFERENCE]) {
            $xw->writeAttribute(self::FIELD_PREFERENCE, $this->preference->_getValueAsString());
        }
        if (isset($this->requirement) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REQUIREMENT]) {
            $xw->writeAttribute(self::FIELD_REQUIREMENT, $this->requirement->_getValueAsString());
        }
        if (isset($this->singleUse) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SINGLE_USE]) {
            $xw->writeAttribute(self::FIELD_SINGLE_USE, $this->singleUse->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->isDerived)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_IS_DERIVED]
                || $this->isDerived->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_IS_DERIVED);
            $this->isDerived->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_IS_DERIVED]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->preference)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PREFERENCE]
                || $this->preference->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PREFERENCE);
            $this->preference->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PREFERENCE]);
            $xw->endElement();
        }
        if (isset($this->container)) {
            $xw->startElement(self::FIELD_CONTAINER);
            $this->container->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requirement)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REQUIREMENT]
                || $this->requirement->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REQUIREMENT);
            $this->requirement->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REQUIREMENT]);
            $xw->endElement();
        }
        if (isset($this->retentionTime)) {
            $xw->startElement(self::FIELD_RETENTION_TIME);
            $this->retentionTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->singleUse)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SINGLE_USE]
                || $this->singleUse->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SINGLE_USE);
            $this->singleUse->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SINGLE_USE]);
            $xw->endElement();
        }
        if (isset($this->rejectionCriterion)) {
            foreach ($this->rejectionCriterion as $v) {
                $xw->startElement(self::FIELD_REJECTION_CRITERION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->handling)) {
            foreach ($this->handling as $v) {
                $xw->startElement(self::FIELD_HANDLING);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->testingDestination)) {
            foreach ($this->testingDestination as $v) {
                $xw->startElement(self::FIELD_TESTING_DESTINATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSpecimenDefinitionTypeTested)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->isDerived)
            || isset($json->_isDerived)
            || property_exists($json, self::FIELD_IS_DERIVED)
            || property_exists($json, self::FIELD_IS_DERIVED_EXT)) {
            $v = $json->_isDerived ?? new \stdClass();
            $v->value = $json->isDerived ?? null;
            $type->setIsDerived(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->type) || property_exists($json, self::FIELD_TYPE)) {
            if (is_array($json->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($json->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($json->type, $config));
            }
        }
        if (isset($json->preference)
            || isset($json->_preference)
            || property_exists($json, self::FIELD_PREFERENCE)
            || property_exists($json, self::FIELD_PREFERENCE_EXT)) {
            $v = $json->_preference ?? new \stdClass();
            $v->value = $json->preference ?? null;
            $type->setPreference(FHIRSpecimenContainedPreference::jsonUnserialize($v, $config));
        }
        if (isset($json->container) || property_exists($json, self::FIELD_CONTAINER)) {
            if (is_array($json->container)) {
                $type->setContainer(FHIRSpecimenDefinitionContainer::jsonUnserialize(reset($json->container), $config));
            } else {
                $type->setContainer(FHIRSpecimenDefinitionContainer::jsonUnserialize($json->container, $config));
            }
        }
        if (isset($json->requirement)
            || isset($json->_requirement)
            || property_exists($json, self::FIELD_REQUIREMENT)
            || property_exists($json, self::FIELD_REQUIREMENT_EXT)) {
            $v = $json->_requirement ?? new \stdClass();
            $v->value = $json->requirement ?? null;
            $type->setRequirement(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($json->retentionTime) || property_exists($json, self::FIELD_RETENTION_TIME)) {
            if (is_array($json->retentionTime)) {
                $type->setRetentionTime(FHIRDuration::jsonUnserialize(reset($json->retentionTime), $config));
            } else {
                $type->setRetentionTime(FHIRDuration::jsonUnserialize($json->retentionTime, $config));
            }
        }
        if (isset($json->singleUse)
            || isset($json->_singleUse)
            || property_exists($json, self::FIELD_SINGLE_USE)
            || property_exists($json, self::FIELD_SINGLE_USE_EXT)) {
            $v = $json->_singleUse ?? new \stdClass();
            $v->value = $json->singleUse ?? null;
            $type->setSingleUse(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->rejectionCriterion) || property_exists($json, self::FIELD_REJECTION_CRITERION)) {
            if (is_object($json->rejectionCriterion)) {
                $vals = [$json->rejectionCriterion];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REJECTION_CRITERION, true);
            } else {
                $vals = $json->rejectionCriterion;
            }
            foreach($vals as $v) {
                $type->addRejectionCriterion(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->handling) || property_exists($json, self::FIELD_HANDLING)) {
            if (is_object($json->handling)) {
                $vals = [$json->handling];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_HANDLING, true);
            } else {
                $vals = $json->handling;
            }
            foreach($vals as $v) {
                $type->addHandling(FHIRSpecimenDefinitionHandling::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->testingDestination) || property_exists($json, self::FIELD_TESTING_DESTINATION)) {
            if (is_object($json->testingDestination)) {
                $vals = [$json->testingDestination];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TESTING_DESTINATION, true);
            } else {
                $vals = $json->testingDestination;
            }
            foreach($vals as $v) {
                $type->addTestingDestination(FHIRCodeableConcept::jsonUnserialize($v, $config));
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
        if (isset($this->isDerived)) {
            if (null !== ($val = $this->isDerived->getValue())) {
                $out->isDerived = $val;
            }
            if ($this->isDerived->_nonValueFieldDefined()) {
                $ext = $this->isDerived->jsonSerialize();
                unset($ext->value);
                $out->_isDerived = $ext;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->preference)) {
            if (null !== ($val = $this->preference->getValue())) {
                $out->preference = $val;
            }
            if ($this->preference->_nonValueFieldDefined()) {
                $ext = $this->preference->jsonSerialize();
                unset($ext->value);
                $out->_preference = $ext;
            }
        }
        if (isset($this->container)) {
            $out->container = $this->container;
        }
        if (isset($this->requirement)) {
            if (null !== ($val = $this->requirement->getValue())) {
                $out->requirement = $val;
            }
            if ($this->requirement->_nonValueFieldDefined()) {
                $ext = $this->requirement->jsonSerialize();
                unset($ext->value);
                $out->_requirement = $ext;
            }
        }
        if (isset($this->retentionTime)) {
            $out->retentionTime = $this->retentionTime;
        }
        if (isset($this->singleUse)) {
            if (null !== ($val = $this->singleUse->getValue())) {
                $out->singleUse = $val;
            }
            if ($this->singleUse->_nonValueFieldDefined()) {
                $ext = $this->singleUse->jsonSerialize();
                unset($ext->value);
                $out->_singleUse = $ext;
            }
        }
        if (isset($this->rejectionCriterion) && [] !== $this->rejectionCriterion) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REJECTION_CRITERION) && 1 === count($this->rejectionCriterion)) {
                $out->rejectionCriterion = $this->rejectionCriterion[0];
            } else {
                $out->rejectionCriterion = $this->rejectionCriterion;
            }
        }
        if (isset($this->handling) && [] !== $this->handling) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_HANDLING) && 1 === count($this->handling)) {
                $out->handling = $this->handling[0];
            } else {
                $out->handling = $this->handling;
            }
        }
        if (isset($this->testingDestination) && [] !== $this->testingDestination) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TESTING_DESTINATION) && 1 === count($this->testingDestination)) {
                $out->testingDestination = $this->testingDestination[0];
            } else {
                $out->testingDestination = $this->testingDestination;
            }
        }
        return $out;
    }
}