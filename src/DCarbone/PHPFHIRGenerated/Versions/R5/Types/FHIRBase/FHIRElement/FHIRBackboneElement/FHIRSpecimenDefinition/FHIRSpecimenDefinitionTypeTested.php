<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A kind of specimen with associated set of requirements.
 */
class FHIRSpecimenDefinitionTypeTested extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED;


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

    /** Default validation map for fields in type SpecimenDefinition.TypeTested */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_PREFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRSpecimenDefinitionTypeTested Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $isDerived
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference $preference
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
                                null|FHIRSpecimenContainedPreference $preference = null,
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

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
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIsDerived(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isDerived,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $isDerived) {
            unset($this->isDerived);
            return $this;
        }
        if (!($isDerived instanceof FHIRBoolean)) {
            $isDerived = new FHIRBoolean(value: $isDerived);
        }
        if (null !== $valueXMLLocation) {
            $isDerived->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $isDerived->_getValueXMLLocation()) {
            $isDerived->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSpecimenContainedPreference $preference
     * @return static
     */
    public function setPreference(null|FHIRSpecimenContainedPreference $preference): self
    {
        if (null === $preference) {
            unset($this->preference);
            return $this;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRequirement(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $requirement,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $requirement) {
            unset($this->requirement);
            return $this;
        }
        if (!($requirement instanceof FHIRMarkdown)) {
            $requirement = new FHIRMarkdown(value: $requirement);
        }
        if (null !== $valueXMLLocation) {
            $requirement->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $requirement->_getValueXMLLocation()) {
            $requirement->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSingleUse(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $singleUse,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $singleUse) {
            unset($this->singleUse);
            return $this;
        }
        if (!($singleUse instanceof FHIRBoolean)) {
            $singleUse = new FHIRBoolean(value: $singleUse);
        }
        if (null !== $valueXMLLocation) {
            $singleUse->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $singleUse->_getValueXMLLocation()) {
            $singleUse->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
        if (!isset($this->rejectionCriterion) || [] === $this->rejectionCriterion) {
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
        if (!isset($this->handling) || [] === $this->handling) {
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
        if (!isset($this->testingDestination) || [] === $this->testingDestination) {
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
        $this->testingDestination = $testingDestination;
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
        if (null !== ($v = $this->getPreference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREFERENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IS_DERIVED])) {
            $v = $this->getIsDerived();
            foreach($validationRules[self::FIELD_IS_DERIVED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IS_DERIVED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_DERIVED])) {
                        $errs[self::FIELD_IS_DERIVED] = [];
                    }
                    $errs[self::FIELD_IS_DERIVED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREFERENCE])) {
            $v = $this->getPreference();
            foreach($validationRules[self::FIELD_PREFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PREFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREFERENCE])) {
                        $errs[self::FIELD_PREFERENCE] = [];
                    }
                    $errs[self::FIELD_PREFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINER])) {
            $v = $this->getContainer();
            foreach($validationRules[self::FIELD_CONTAINER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINER])) {
                        $errs[self::FIELD_CONTAINER] = [];
                    }
                    $errs[self::FIELD_CONTAINER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIREMENT])) {
            $v = $this->getRequirement();
            foreach($validationRules[self::FIELD_REQUIREMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENT])) {
                        $errs[self::FIELD_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_REQUIREMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RETENTION_TIME])) {
            $v = $this->getRetentionTime();
            foreach($validationRules[self::FIELD_RETENTION_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RETENTION_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RETENTION_TIME])) {
                        $errs[self::FIELD_RETENTION_TIME] = [];
                    }
                    $errs[self::FIELD_RETENTION_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SINGLE_USE])) {
            $v = $this->getSingleUse();
            foreach($validationRules[self::FIELD_SINGLE_USE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SINGLE_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SINGLE_USE])) {
                        $errs[self::FIELD_SINGLE_USE] = [];
                    }
                    $errs[self::FIELD_SINGLE_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REJECTION_CRITERION])) {
            $v = $this->getRejectionCriterion();
            foreach($validationRules[self::FIELD_REJECTION_CRITERION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REJECTION_CRITERION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REJECTION_CRITERION])) {
                        $errs[self::FIELD_REJECTION_CRITERION] = [];
                    }
                    $errs[self::FIELD_REJECTION_CRITERION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HANDLING])) {
            $v = $this->getHandling();
            foreach($validationRules[self::FIELD_HANDLING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_HANDLING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HANDLING])) {
                        $errs[self::FIELD_HANDLING] = [];
                    }
                    $errs[self::FIELD_HANDLING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TESTING_DESTINATION])) {
            $v = $this->getTestingDestination();
            foreach($validationRules[self::FIELD_TESTING_DESTINATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TESTING_DESTINATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TESTING_DESTINATION])) {
                        $errs[self::FIELD_TESTING_DESTINATION] = [];
                    }
                    $errs[self::FIELD_TESTING_DESTINATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IS_DERIVED === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIsDerived(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PREFERENCE === $childName) {
                $v = new FHIRSpecimenContainedPreference(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPreference(FHIRSpecimenContainedPreference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINER === $childName) {
                $v = new FHIRSpecimenDefinitionContainer();
                $type->setContainer(FHIRSpecimenDefinitionContainer::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUIREMENT === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRequirement(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RETENTION_TIME === $childName) {
                $v = new FHIRDuration();
                $type->setRetentionTime(FHIRDuration::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SINGLE_USE === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSingleUse(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REJECTION_CRITERION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addRejectionCriterion(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_HANDLING === $childName) {
                $v = new FHIRSpecimenDefinitionHandling();
                $type->addHandling(FHIRSpecimenDefinitionHandling::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TESTING_DESTINATION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addTestingDestination(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IS_DERIVED])) {
            $pt = $type->getIsDerived();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IS_DERIVED]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsDerived(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_IS_DERIVED],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_REQUIREMENT])) {
            $pt = $type->getRequirement();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_REQUIREMENT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequirement(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_REQUIREMENT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SINGLE_USE])) {
            $pt = $type->getSingleUse();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SINGLE_USE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSingleUse(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_SINGLE_USE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('SpecimenDefinitionTypeTested', $this->_getSourceXMLNS());
        }
        if (isset($this->isDerived) && $this->isDerived->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IS_DERIVED, $this->isDerived->getValue()?->_getFormattedValue());
        }
        if (isset($this->requirement) && $this->requirement->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_REQUIREMENT, $this->requirement->getValue()?->_getFormattedValue());
        }
        if (isset($this->singleUse) && $this->singleUse->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SINGLE_USE, $this->singleUse->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->isDerived) && $this->isDerived->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IS_DERIVED);
            $this->isDerived->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->preference)) {
            $xw->startElement(self::FIELD_PREFERENCE);
            $this->preference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->container)) {
            $xw->startElement(self::FIELD_CONTAINER);
            $this->container->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requirement) && $this->requirement->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_REQUIREMENT);
            $this->requirement->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->retentionTime)) {
            $xw->startElement(self::FIELD_RETENTION_TIME);
            $this->retentionTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->singleUse) && $this->singleUse->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SINGLE_USE);
            $this->singleUse->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_IS_DERIVED]) || isset($json[self::FIELD_IS_DERIVED_EXT]) || array_key_exists(self::FIELD_IS_DERIVED, $json) || array_key_exists(self::FIELD_IS_DERIVED_EXT, $json)) {
            $value = $json[self::FIELD_IS_DERIVED] ?? null;
            $ext = (isset($json[self::FIELD_IS_DERIVED_EXT]) && is_array($json[self::FIELD_IS_DERIVED_EXT])) ? $json[self::FIELD_IS_DERIVED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setIsDerived($value);
                } else if (is_array($value)) {
                    $type->setIsDerived(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setIsDerived(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIsDerived(new FHIRBoolean($ext));
            } else {
                $type->setIsDerived(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if ($json[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $type->setType($json[self::FIELD_TYPE]);
            } else {
                $type->setType(new FHIRCodeableConcept($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_PREFERENCE]) || isset($json[self::FIELD_PREFERENCE_EXT]) || array_key_exists(self::FIELD_PREFERENCE, $json) || array_key_exists(self::FIELD_PREFERENCE_EXT, $json)) {
            $value = $json[self::FIELD_PREFERENCE] ?? null;
            $ext = (isset($json[self::FIELD_PREFERENCE_EXT]) && is_array($json[self::FIELD_PREFERENCE_EXT])) ? $json[self::FIELD_PREFERENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSpecimenContainedPreference) {
                    $type->setPreference($value);
                } else if (is_array($value)) {
                    $type->setPreference(new FHIRSpecimenContainedPreference(array_merge($ext, $value)));
                } else {
                    $type->setPreference(new FHIRSpecimenContainedPreference([FHIRSpecimenContainedPreference::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPreference(new FHIRSpecimenContainedPreference($ext));
            } else {
                $type->setPreference(new FHIRSpecimenContainedPreference(null));
            }
        }
        if (isset($json[self::FIELD_CONTAINER]) || array_key_exists(self::FIELD_CONTAINER, $json)) {
            if ($json[self::FIELD_CONTAINER] instanceof FHIRSpecimenDefinitionContainer) {
                $type->setContainer($json[self::FIELD_CONTAINER]);
            } else {
                $type->setContainer(new FHIRSpecimenDefinitionContainer($json[self::FIELD_CONTAINER]));
            }
        }
        if (isset($json[self::FIELD_REQUIREMENT]) || isset($json[self::FIELD_REQUIREMENT_EXT]) || array_key_exists(self::FIELD_REQUIREMENT, $json) || array_key_exists(self::FIELD_REQUIREMENT_EXT, $json)) {
            $value = $json[self::FIELD_REQUIREMENT] ?? null;
            $ext = (isset($json[self::FIELD_REQUIREMENT_EXT]) && is_array($json[self::FIELD_REQUIREMENT_EXT])) ? $json[self::FIELD_REQUIREMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setRequirement($value);
                } else if (is_array($value)) {
                    $type->setRequirement(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setRequirement(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRequirement(new FHIRMarkdown($ext));
            } else {
                $type->setRequirement(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_RETENTION_TIME]) || array_key_exists(self::FIELD_RETENTION_TIME, $json)) {
            if ($json[self::FIELD_RETENTION_TIME] instanceof FHIRDuration) {
                $type->setRetentionTime($json[self::FIELD_RETENTION_TIME]);
            } else {
                $type->setRetentionTime(new FHIRDuration($json[self::FIELD_RETENTION_TIME]));
            }
        }
        if (isset($json[self::FIELD_SINGLE_USE]) || isset($json[self::FIELD_SINGLE_USE_EXT]) || array_key_exists(self::FIELD_SINGLE_USE, $json) || array_key_exists(self::FIELD_SINGLE_USE_EXT, $json)) {
            $value = $json[self::FIELD_SINGLE_USE] ?? null;
            $ext = (isset($json[self::FIELD_SINGLE_USE_EXT]) && is_array($json[self::FIELD_SINGLE_USE_EXT])) ? $json[self::FIELD_SINGLE_USE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setSingleUse($value);
                } else if (is_array($value)) {
                    $type->setSingleUse(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setSingleUse(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSingleUse(new FHIRBoolean($ext));
            } else {
                $type->setSingleUse(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_REJECTION_CRITERION]) || array_key_exists(self::FIELD_REJECTION_CRITERION, $json)) {
            if (is_array($json[self::FIELD_REJECTION_CRITERION])) {
                foreach($json[self::FIELD_REJECTION_CRITERION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addRejectionCriterion($v);
                    } else {
                        $type->addRejectionCriterion(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_REJECTION_CRITERION] instanceof FHIRCodeableConcept) {
                $type->addRejectionCriterion($json[self::FIELD_REJECTION_CRITERION]);
            } else {
                $type->addRejectionCriterion(new FHIRCodeableConcept($json[self::FIELD_REJECTION_CRITERION]));
            }
        }
        if (isset($json[self::FIELD_HANDLING]) || array_key_exists(self::FIELD_HANDLING, $json)) {
            if (is_array($json[self::FIELD_HANDLING])) {
                foreach($json[self::FIELD_HANDLING] as $v) {
                    if ($v instanceof FHIRSpecimenDefinitionHandling) {
                        $type->addHandling($v);
                    } else {
                        $type->addHandling(new FHIRSpecimenDefinitionHandling($v));
                    }
                }
            } elseif ($json[self::FIELD_HANDLING] instanceof FHIRSpecimenDefinitionHandling) {
                $type->addHandling($json[self::FIELD_HANDLING]);
            } else {
                $type->addHandling(new FHIRSpecimenDefinitionHandling($json[self::FIELD_HANDLING]));
            }
        }
        if (isset($json[self::FIELD_TESTING_DESTINATION]) || array_key_exists(self::FIELD_TESTING_DESTINATION, $json)) {
            if (is_array($json[self::FIELD_TESTING_DESTINATION])) {
                foreach($json[self::FIELD_TESTING_DESTINATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addTestingDestination($v);
                    } else {
                        $type->addTestingDestination(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_TESTING_DESTINATION] instanceof FHIRCodeableConcept) {
                $type->addTestingDestination($json[self::FIELD_TESTING_DESTINATION]);
            } else {
                $type->addTestingDestination(new FHIRCodeableConcept($json[self::FIELD_TESTING_DESTINATION]));
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
            $ext = $this->isDerived->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->preference->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->requirement->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->singleUse->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_singleUse = $ext;
            }
        }
        if (isset($this->rejectionCriterion) && [] !== $this->rejectionCriterion) {
            $out->rejectionCriterion = $this->rejectionCriterion;
        }
        if (isset($this->handling) && [] !== $this->handling) {
            $out->handling = $this->handling;
        }
        if (isset($this->testingDestination) && [] !== $this->testingDestination) {
            $out->testingDestination = $this->testingDestination;
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