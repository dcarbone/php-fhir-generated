<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 8th, 2024 03:16+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenContainedPreference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * A kind of specimen with associated set of requirements.
 *
 * Class FHIRSpecimenDefinitionTypeTested
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition
 */
class FHIRSpecimenDefinitionTypeTested extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED;

    const FIELD_IS_DERIVED = 'isDerived';
    const FIELD_IS_DERIVED_EXT = '_isDerived';
    const FIELD_TYPE = 'type';
    const FIELD_PREFERENCE = 'preference';
    const FIELD_PREFERENCE_EXT = '_preference';
    const FIELD_CONTAINER = 'container';
    const FIELD_REQUIREMENT = 'requirement';
    const FIELD_REQUIREMENT_EXT = '_requirement';
    const FIELD_RETENTION_TIME = 'retentionTime';
    const FIELD_REJECTION_CRITERION = 'rejectionCriterion';
    const FIELD_HANDLING = 'handling';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $isDerived = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of specimen conditioned for testing expected by lab.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * Degree of preference of a type of conditioned specimen.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenContainedPreference
     */
    protected null|FHIRSpecimenContainedPreference $preference = null;
    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    protected null|FHIRSpecimenDefinitionContainer $container = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $requirement = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The usual time that a specimen of this kind is retained after the ordered tests
     * are completed, for the purpose of additional testing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $retentionTime = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $rejectionCriterion = [];
    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[]
     */
    protected null|array $handling = [];

    /**
     * Validation map for fields in type SpecimenDefinition.TypeTested
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRSpecimenDefinitionTypeTested Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IS_DERIVED, $data) || array_key_exists(self::FIELD_IS_DERIVED_EXT, $data)) {
            $value = $data[self::FIELD_IS_DERIVED] ?? null;
            $ext = (isset($data[self::FIELD_IS_DERIVED_EXT]) && is_array($data[self::FIELD_IS_DERIVED_EXT])) ? $data[self::FIELD_IS_DERIVED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsDerived($value);
                } else if (is_array($value)) {
                    $this->setIsDerived(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsDerived(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIsDerived(new FHIRBoolean($ext));
            } else {
                $this->setIsDerived(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_PREFERENCE, $data) || array_key_exists(self::FIELD_PREFERENCE_EXT, $data)) {
            $value = $data[self::FIELD_PREFERENCE] ?? null;
            $ext = (isset($data[self::FIELD_PREFERENCE_EXT]) && is_array($data[self::FIELD_PREFERENCE_EXT])) ? $data[self::FIELD_PREFERENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSpecimenContainedPreference) {
                    $this->setPreference($value);
                } else if (is_array($value)) {
                    $this->setPreference(new FHIRSpecimenContainedPreference(array_merge($ext, $value)));
                } else {
                    $this->setPreference(new FHIRSpecimenContainedPreference([FHIRSpecimenContainedPreference::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPreference(new FHIRSpecimenContainedPreference($ext));
            } else {
                $this->setPreference(new FHIRSpecimenContainedPreference(null));
            }
        }
        if (array_key_exists(self::FIELD_CONTAINER, $data)) {
            if ($data[self::FIELD_CONTAINER] instanceof FHIRSpecimenDefinitionContainer) {
                $this->setContainer($data[self::FIELD_CONTAINER]);
            } else {
                $this->setContainer(new FHIRSpecimenDefinitionContainer($data[self::FIELD_CONTAINER]));
            }
        }
        if (array_key_exists(self::FIELD_REQUIREMENT, $data) || array_key_exists(self::FIELD_REQUIREMENT_EXT, $data)) {
            $value = $data[self::FIELD_REQUIREMENT] ?? null;
            $ext = (isset($data[self::FIELD_REQUIREMENT_EXT]) && is_array($data[self::FIELD_REQUIREMENT_EXT])) ? $data[self::FIELD_REQUIREMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRequirement($value);
                } else if (is_array($value)) {
                    $this->setRequirement(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRequirement(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequirement(new FHIRString($ext));
            } else {
                $this->setRequirement(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_RETENTION_TIME, $data)) {
            if ($data[self::FIELD_RETENTION_TIME] instanceof FHIRDuration) {
                $this->setRetentionTime($data[self::FIELD_RETENTION_TIME]);
            } else {
                $this->setRetentionTime(new FHIRDuration($data[self::FIELD_RETENTION_TIME]));
            }
        }
        if (array_key_exists(self::FIELD_REJECTION_CRITERION, $data)) {
            if (is_array($data[self::FIELD_REJECTION_CRITERION])) {
                foreach($data[self::FIELD_REJECTION_CRITERION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addRejectionCriterion($v);
                    } else {
                        $this->addRejectionCriterion(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REJECTION_CRITERION] instanceof FHIRCodeableConcept) {
                $this->addRejectionCriterion($data[self::FIELD_REJECTION_CRITERION]);
            } else {
                $this->addRejectionCriterion(new FHIRCodeableConcept($data[self::FIELD_REJECTION_CRITERION]));
            }
        }
        if (array_key_exists(self::FIELD_HANDLING, $data)) {
            if (is_array($data[self::FIELD_HANDLING])) {
                foreach($data[self::FIELD_HANDLING] as $v) {
                    if ($v instanceof FHIRSpecimenDefinitionHandling) {
                        $this->addHandling($v);
                    } else {
                        $this->addHandling(new FHIRSpecimenDefinitionHandling($v));
                    }
                }
            } elseif ($data[self::FIELD_HANDLING] instanceof FHIRSpecimenDefinitionHandling) {
                $this->addHandling($data[self::FIELD_HANDLING]);
            } else {
                $this->addHandling(new FHIRSpecimenDefinitionHandling($data[self::FIELD_HANDLING]));
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getIsDerived(): null|FHIRBoolean
    {
        return $this->isDerived;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $isDerived
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIsDerived(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isDerived = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $isDerived && !($isDerived instanceof FHIRBoolean)) {
            $isDerived = new FHIRBoolean($isDerived);
        }
        $this->_trackValueSet($this->isDerived, $isDerived);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_IS_DERIVED])) {
            $this->_primitiveXmlLocations[self::FIELD_IS_DERIVED] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_IS_DERIVED][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of specimen conditioned for testing expected by lab.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * Degree of preference of a type of conditioned specimen.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenContainedPreference
     */
    public function getPreference(): null|FHIRSpecimenContainedPreference
    {
        return $this->preference;
    }

    /**
     * Degree of preference of a type of conditioned specimen.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenContainedPreference $preference
     * @return static
     */
    public function setPreference(null|FHIRSpecimenContainedPreference $preference = null): self
    {
        if (null === $preference) {
            $preference = new FHIRSpecimenContainedPreference();
        }
        $this->_trackValueSet($this->preference, $preference);
        $this->preference = $preference;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function getContainer(): null|FHIRSpecimenDefinitionContainer
    {
        return $this->container;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer $container
     * @return static
     */
    public function setContainer(null|FHIRSpecimenDefinitionContainer $container = null): self
    {
        if (null === $container) {
            $container = new FHIRSpecimenDefinitionContainer();
        }
        $this->_trackValueSet($this->container, $container);
        $this->container = $container;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getRequirement(): null|FHIRString
    {
        return $this->requirement;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $requirement
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRequirement(null|string|FHIRStringPrimitive|FHIRString $requirement = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $requirement && !($requirement instanceof FHIRString)) {
            $requirement = new FHIRString($requirement);
        }
        $this->_trackValueSet($this->requirement, $requirement);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_REQUIREMENT])) {
            $this->_primitiveXmlLocations[self::FIELD_REQUIREMENT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_REQUIREMENT][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getRetentionTime(): null|FHIRDuration
    {
        return $this->retentionTime;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The usual time that a specimen of this kind is retained after the ordered tests
     * are completed, for the purpose of additional testing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $retentionTime
     * @return static
     */
    public function setRetentionTime(null|FHIRDuration $retentionTime = null): self
    {
        if (null === $retentionTime) {
            $retentionTime = new FHIRDuration();
        }
        $this->_trackValueSet($this->retentionTime, $retentionTime);
        $this->retentionTime = $retentionTime;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRejectionCriterion(): null|array
    {
        return $this->rejectionCriterion;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $rejectionCriterion
     * @return static
     */
    public function addRejectionCriterion(null|FHIRCodeableConcept $rejectionCriterion = null): self
    {
        if (null === $rejectionCriterion) {
            $rejectionCriterion = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->rejectionCriterion[] = $rejectionCriterion;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[]
     */
    public function getHandling(): null|array
    {
        return $this->handling;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling $handling
     * @return static
     */
    public function addHandling(null|FHIRSpecimenDefinitionHandling $handling = null): self
    {
        if (null === $handling) {
            $handling = new FHIRSpecimenDefinitionHandling();
        }
        $this->_trackValueAdded();
        $this->handling[] = $handling;
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
        if (null !== ($v = $this->getIsDerived())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_DERIVED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPreference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContainer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTAINER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequirement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIREMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRetentionTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RETENTION_TIME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRejectionCriterion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REJECTION_CRITERION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getHandling())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_HANDLING, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_DERIVED])) {
            $v = $this->getIsDerived();
            foreach($validationRules[self::FIELD_IS_DERIVED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_IS_DERIVED, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_PREFERENCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_CONTAINER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_REQUIREMENT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_RETENTION_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RETENTION_TIME])) {
                        $errs[self::FIELD_RETENTION_TIME] = [];
                    }
                    $errs[self::FIELD_RETENTION_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REJECTION_CRITERION])) {
            $v = $this->getRejectionCriterion();
            foreach($validationRules[self::FIELD_REJECTION_CRITERION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_REJECTION_CRITERION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED, self::FIELD_HANDLING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HANDLING])) {
                        $errs[self::FIELD_HANDLING] = [];
                    }
                    $errs[self::FIELD_HANDLING][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
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
        } else if (!($type instanceof FHIRSpecimenDefinitionTypeTested)) {
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
            if (self::FIELD_IS_DERIVED === $childName) {
                $type->setIsDerived(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PREFERENCE === $childName) {
                $type->setPreference(FHIRSpecimenContainedPreference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINER === $childName) {
                $type->setContainer(FHIRSpecimenDefinitionContainer::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REQUIREMENT === $childName) {
                $type->setRequirement(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RETENTION_TIME === $childName) {
                $type->setRetentionTime(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REJECTION_CRITERION === $childName) {
                $type->addRejectionCriterion(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_HANDLING === $childName) {
                $type->addHandling(FHIRSpecimenDefinitionHandling::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_IS_DERIVED])) {
            $pt = $type->getIsDerived();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IS_DERIVED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsDerived((string)$attributes[self::FIELD_IS_DERIVED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REQUIREMENT])) {
            $pt = $type->getRequirement();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REQUIREMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequirement((string)$attributes[self::FIELD_REQUIREMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'SpecimenDefinitionTypeTested', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_IS_DERIVED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIsDerived())) {
            $xw->writeAttribute(self::FIELD_IS_DERIVED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REQUIREMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRequirement())) {
            $xw->writeAttribute(self::FIELD_REQUIREMENT, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_IS_DERIVED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIsDerived())) {
            $xw->startElement(self::FIELD_IS_DERIVED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPreference())) {
            $xw->startElement(self::FIELD_PREFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getContainer())) {
            $xw->startElement(self::FIELD_CONTAINER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REQUIREMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRequirement())) {
            $xw->startElement(self::FIELD_REQUIREMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRetentionTime())) {
            $xw->startElement(self::FIELD_RETENTION_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRejectionCriterion() as $v) {
            $xw->startElement(self::FIELD_REJECTION_CRITERION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getHandling() as $v) {
            $xw->startElement(self::FIELD_HANDLING);
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
        if (null !== ($v = $this->getIsDerived())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IS_DERIVED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IS_DERIVED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getPreference())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PREFERENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSpecimenContainedPreference::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PREFERENCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getContainer())) {
            $out->{self::FIELD_CONTAINER} = $v;
        }
        if (null !== ($v = $this->getRequirement())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUIREMENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUIREMENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRetentionTime())) {
            $out->{self::FIELD_RETENTION_TIME} = $v;
        }
        if ([] !== ($vs = $this->getRejectionCriterion())) {
            $out->{self::FIELD_REJECTION_CRITERION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REJECTION_CRITERION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getHandling())) {
            $out->{self::FIELD_HANDLING} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_HANDLING}[] = $v;
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