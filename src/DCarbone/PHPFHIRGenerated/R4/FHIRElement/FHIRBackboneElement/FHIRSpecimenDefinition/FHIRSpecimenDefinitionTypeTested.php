<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenContainedPreference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CONTAINER = 'container';
    const FIELD_HANDLING = 'handling';
    const FIELD_IS_DERIVED = 'isDerived';
    const FIELD_IS_DERIVED_EXT = '_isDerived';
    const FIELD_PREFERENCE = 'preference';
    const FIELD_PREFERENCE_EXT = '_preference';
    const FIELD_REJECTION_CRITERION = 'rejectionCriterion';
    const FIELD_REQUIREMENT = 'requirement';
    const FIELD_REQUIREMENT_EXT = '_requirement';
    const FIELD_RETENTION_TIME = 'retentionTime';
    const FIELD_TYPE = 'type';

    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    private $container = null;
    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[]
     */
    private $handling = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $isDerived = null;
    /**
     * Degree of preference of a type of conditioned specimen.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenContainedPreference
     */
    private $preference = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $rejectionCriterion = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $requirement = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The usual time that a specimen of this kind is retained after the ordered tests
     * are completed, for the purpose of additional testing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $retentionTime = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The kind of specimen conditioned for testing expected by lab.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRSpecimenDefinitionTypeTested Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinitionTypeTested::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTAINER])) {
            if ($data[self::FIELD_CONTAINER] instanceof FHIRSpecimenDefinitionContainer) {
                $this->setContainer($data[self::FIELD_CONTAINER]);
            } else {
                $this->setContainer(new FHIRSpecimenDefinitionContainer($data[self::FIELD_CONTAINER]));
            }
        }
        if (isset($data[self::FIELD_HANDLING])) {
            if (is_array($data[self::FIELD_HANDLING])) {
                foreach($data[self::FIELD_HANDLING] as $v) {
                    if ($v instanceof FHIRSpecimenDefinitionHandling) {
                        $this->addHandling($v);
                    } else {
                        $this->addHandling(new FHIRSpecimenDefinitionHandling($v));
                    }
                }
            } else if ($data[self::FIELD_HANDLING] instanceof FHIRSpecimenDefinitionHandling) {
                $this->addHandling($data[self::FIELD_HANDLING]);
            } else {
                $this->addHandling(new FHIRSpecimenDefinitionHandling($data[self::FIELD_HANDLING]));
            }
        }
        if (isset($data[self::FIELD_IS_DERIVED])) {
            $ext = (isset($data[self::FIELD_IS_DERIVED_EXT]) && is_array($data[self::FIELD_IS_DERIVED_EXT]))
                ? $data[self::FIELD_IS_DERIVED_EXT]
                : null;
            if ($data[self::FIELD_IS_DERIVED] instanceof FHIRBoolean) {
                $this->setIsDerived($data[self::FIELD_IS_DERIVED]);
            } elseif ($ext && is_scalar($data[self::FIELD_IS_DERIVED])) {
                $this->setIsDerived(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_IS_DERIVED]] + $ext));
            } else {
                $this->setIsDerived(new FHIRBoolean($data[self::FIELD_IS_DERIVED]));
            }
        }
        if (isset($data[self::FIELD_PREFERENCE])) {
            $ext = (isset($data[self::FIELD_PREFERENCE_EXT]) && is_array($data[self::FIELD_PREFERENCE_EXT]))
                ? $data[self::FIELD_PREFERENCE_EXT]
                : null;
            if ($data[self::FIELD_PREFERENCE] instanceof FHIRSpecimenContainedPreference) {
                $this->setPreference($data[self::FIELD_PREFERENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PREFERENCE])) {
                $this->setPreference(new FHIRSpecimenContainedPreference([FHIRSpecimenContainedPreference::FIELD_VALUE => $data[self::FIELD_PREFERENCE]] + $ext));
            } else {
                $this->setPreference(new FHIRSpecimenContainedPreference($data[self::FIELD_PREFERENCE]));
            }
        }
        if (isset($data[self::FIELD_REJECTION_CRITERION])) {
            if (is_array($data[self::FIELD_REJECTION_CRITERION])) {
                foreach($data[self::FIELD_REJECTION_CRITERION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addRejectionCriterion($v);
                    } else {
                        $this->addRejectionCriterion(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REJECTION_CRITERION] instanceof FHIRCodeableConcept) {
                $this->addRejectionCriterion($data[self::FIELD_REJECTION_CRITERION]);
            } else {
                $this->addRejectionCriterion(new FHIRCodeableConcept($data[self::FIELD_REJECTION_CRITERION]));
            }
        }
        if (isset($data[self::FIELD_REQUIREMENT])) {
            $ext = (isset($data[self::FIELD_REQUIREMENT_EXT]) && is_array($data[self::FIELD_REQUIREMENT_EXT]))
                ? $data[self::FIELD_REQUIREMENT_EXT]
                : null;
            if ($data[self::FIELD_REQUIREMENT] instanceof FHIRString) {
                $this->setRequirement($data[self::FIELD_REQUIREMENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_REQUIREMENT])) {
                $this->setRequirement(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_REQUIREMENT]] + $ext));
            } else {
                $this->setRequirement(new FHIRString($data[self::FIELD_REQUIREMENT]));
            }
        }
        if (isset($data[self::FIELD_RETENTION_TIME])) {
            if ($data[self::FIELD_RETENTION_TIME] instanceof FHIRDuration) {
                $this->setRetentionTime($data[self::FIELD_RETENTION_TIME]);
            } else {
                $this->setRetentionTime(new FHIRDuration($data[self::FIELD_RETENTION_TIME]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<SpecimenDefinitionTypeTested{$xmlns}></SpecimenDefinitionTypeTested>";
    }


    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * The specimen's container.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer $container
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function setContainer(FHIRSpecimenDefinitionContainer $container = null)
    {
        $this->container = $container;
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
    public function getHandling()
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function addHandling(FHIRSpecimenDefinitionHandling $handling = null)
    {
        $this->handling[] = $handling;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Set of instructions for preservation/transport of the specimen at a defined
     * temperature interval, prior the testing process.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling[] $handling
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function setHandling(array $handling = [])
    {
        $this->handling = [];
        if ([] === $handling) {
            return $this;
        }
        foreach($handling as $v) {
            if ($v instanceof FHIRSpecimenDefinitionHandling) {
                $this->addHandling($v);
            } else {
                $this->addHandling(new FHIRSpecimenDefinitionHandling($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getIsDerived()
    {
        return $this->isDerived;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Primary of secondary specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $isDerived
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function setIsDerived($isDerived = null)
    {
        if (null === $isDerived) {
            $this->isDerived = null;
            return $this;
        }
        if ($isDerived instanceof FHIRBoolean) {
            $this->isDerived = $isDerived;
            return $this;
        }
        $this->isDerived = new FHIRBoolean($isDerived);
        return $this;
    }

    /**
     * Degree of preference of a type of conditioned specimen.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenContainedPreference
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * Degree of preference of a type of conditioned specimen.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The preference for this type of conditioned specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenContainedPreference $preference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function setPreference(FHIRSpecimenContainedPreference $preference = null)
    {
        $this->preference = $preference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRejectionCriterion()
    {
        return $this->rejectionCriterion;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $rejectionCriterion
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function addRejectionCriterion(FHIRCodeableConcept $rejectionCriterion = null)
    {
        $this->rejectionCriterion[] = $rejectionCriterion;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $rejectionCriterion
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function setRejectionCriterion(array $rejectionCriterion = [])
    {
        $this->rejectionCriterion = [];
        if ([] === $rejectionCriterion) {
            return $this;
        }
        foreach($rejectionCriterion as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addRejectionCriterion($v);
            } else {
                $this->addRejectionCriterion(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Requirements for delivery and special handling of this kind of conditioned
     * specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $requirement
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function setRequirement($requirement = null)
    {
        if (null === $requirement) {
            $this->requirement = null;
            return $this;
        }
        if ($requirement instanceof FHIRString) {
            $this->requirement = $requirement;
            return $this;
        }
        $this->requirement = new FHIRString($requirement);
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The usual time that a specimen of this kind is retained after the ordered tests
     * are completed, for the purpose of additional testing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getRetentionTime()
    {
        return $this->retentionTime;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The usual time that a specimen of this kind is retained after the ordered tests
     * are completed, for the purpose of additional testing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $retentionTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function setRetentionTime(FHIRDuration $retentionTime = null)
    {
        $this->retentionTime = $retentionTime;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The kind of specimen conditioned for testing expected by lab.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The kind of specimen conditioned for testing expected by lab.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSpecimenDefinitionTypeTested::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSpecimenDefinitionTypeTested::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSpecimenDefinitionTypeTested;
        } elseif (!is_object($type) || !($type instanceof FHIRSpecimenDefinitionTypeTested)) {
            throw new \RuntimeException(sprintf(
                'FHIRSpecimenDefinitionTypeTested::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->container)) {
            $type->setContainer(FHIRSpecimenDefinitionContainer::xmlUnserialize($children->container));
        }
        if (isset($children->handling)) {
            foreach($children->handling as $child) {
                $type->addHandling(FHIRSpecimenDefinitionHandling::xmlUnserialize($child));
            }
        }
        if (isset($attributes->isDerived)) {
            $type->setIsDerived((string)$attributes->isDerived);
        }
        if (isset($children->isDerived)) {
            $type->setIsDerived(FHIRBoolean::xmlUnserialize($children->isDerived));
        }
        if (isset($children->preference)) {
            $type->setPreference(FHIRSpecimenContainedPreference::xmlUnserialize($children->preference));
        }
        if (isset($children->rejectionCriterion)) {
            foreach($children->rejectionCriterion as $child) {
                $type->addRejectionCriterion(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->requirement)) {
            $type->setRequirement((string)$attributes->requirement);
        }
        if (isset($children->requirement)) {
            $type->setRequirement(FHIRString::xmlUnserialize($children->requirement));
        }
        if (isset($children->retentionTime)) {
            $type->setRetentionTime(FHIRDuration::xmlUnserialize($children->retentionTime));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getContainer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTAINER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getHandling())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_HANDLING, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIsDerived())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IS_DERIVED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPreference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PREFERENCE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getRejectionCriterion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REJECTION_CRITERION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRequirement())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIREMENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRetentionTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RETENTION_TIME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getContainer())) {
            $a[self::FIELD_CONTAINER] = $v;
        }
        if ([] !== ($vs = $this->getHandling())) {
            $a[self::FIELD_HANDLING] = $vs;
        }
        if (null !== ($v = $this->getIsDerived())) {
            $a[self::FIELD_IS_DERIVED] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_IS_DERIVED_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getPreference())) {
            $a[self::FIELD_PREFERENCE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PREFERENCE_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getRejectionCriterion())) {
            $a[self::FIELD_REJECTION_CRITERION] = $vs;
        }
        if (null !== ($v = $this->getRequirement())) {
            $a[self::FIELD_REQUIREMENT] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_REQUIREMENT_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getRetentionTime())) {
            $a[self::FIELD_RETENTION_TIME] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}