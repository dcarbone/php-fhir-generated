<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

include_once __DIR__.'/../../../constants.php';

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 30th, 2019 14:05+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A kind of specimen with associated set of requirements.
 *
 * Class FHIRSpecimenDefinitionContainer
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition
 */
class FHIRSpecimenDefinitionContainer extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = FHIR_TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER;

    const FIELD_ADDITIVE = 'additive';
    const FIELD_CAP = 'cap';
    const FIELD_CAPACITY = 'capacity';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_MATERIAL = 'material';
    const FIELD_MINIMUM_VOLUME_QUANTITY = 'minimumVolumeQuantity';
    const FIELD_MINIMUM_VOLUME_STRING = 'minimumVolumeString';
    const FIELD_MINIMUM_VOLUME_STRING_EXT = '_minimumVolumeString';
    const FIELD_PREPARATION = 'preparation';
    const FIELD_PREPARATION_EXT = '_preparation';
    const FIELD_TYPE = 'type';

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance
     * the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive[]
     */
    private $additive = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Color of container cap.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $cap = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The capacity (volume or other measure) of this kind of container.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $capacity = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The textual description of the kind of container.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of material of the container.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $material = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The minimum volume to be conditioned in the container. (choose any one of
     * minimumVolume*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $minimumVolumeQuantity = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The minimum volume to be conditioned in the container. (choose any one of
     * minimumVolume*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $minimumVolumeString = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Special processing that should be applied to the container for this kind of
     * specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $preparation = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of container used to contain this kind of specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRSpecimenDefinitionContainer Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinitionContainer::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADDITIVE])) {
            if (is_array($data[self::FIELD_ADDITIVE])) {
                foreach($data[self::FIELD_ADDITIVE] as $v) {
                    if ($v instanceof FHIRSpecimenDefinitionAdditive) {
                        $this->addAdditive($v);
                    } else {
                        $this->addAdditive(new FHIRSpecimenDefinitionAdditive($v));
                    }
                }
            } else if ($data[self::FIELD_ADDITIVE] instanceof FHIRSpecimenDefinitionAdditive) {
                $this->addAdditive($data[self::FIELD_ADDITIVE]);
            } else {
                $this->addAdditive(new FHIRSpecimenDefinitionAdditive($data[self::FIELD_ADDITIVE]));
            }
        }
        if (isset($data[self::FIELD_CAP])) {
            if ($data[self::FIELD_CAP] instanceof FHIRCodeableConcept) {
                $this->setCap($data[self::FIELD_CAP]);
            } else {
                $this->setCap(new FHIRCodeableConcept($data[self::FIELD_CAP]));
            }
        }
        if (isset($data[self::FIELD_CAPACITY])) {
            if ($data[self::FIELD_CAPACITY] instanceof FHIRQuantity) {
                $this->setCapacity($data[self::FIELD_CAPACITY]);
            } else {
                $this->setCapacity(new FHIRQuantity($data[self::FIELD_CAPACITY]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_MATERIAL])) {
            if ($data[self::FIELD_MATERIAL] instanceof FHIRCodeableConcept) {
                $this->setMaterial($data[self::FIELD_MATERIAL]);
            } else {
                $this->setMaterial(new FHIRCodeableConcept($data[self::FIELD_MATERIAL]));
            }
        }
        if (isset($data[self::FIELD_MINIMUM_VOLUME_QUANTITY])) {
            if ($data[self::FIELD_MINIMUM_VOLUME_QUANTITY] instanceof FHIRQuantity) {
                $this->setMinimumVolumeQuantity($data[self::FIELD_MINIMUM_VOLUME_QUANTITY]);
            } else {
                $this->setMinimumVolumeQuantity(new FHIRQuantity($data[self::FIELD_MINIMUM_VOLUME_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_MINIMUM_VOLUME_STRING])) {
            $ext = (isset($data[self::FIELD_MINIMUM_VOLUME_STRING_EXT]) && is_array($data[self::FIELD_MINIMUM_VOLUME_STRING_EXT]))
                ? $data[self::FIELD_MINIMUM_VOLUME_STRING_EXT]
                : null;
            if ($data[self::FIELD_MINIMUM_VOLUME_STRING] instanceof FHIRString) {
                $this->setMinimumVolumeString($data[self::FIELD_MINIMUM_VOLUME_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_MINIMUM_VOLUME_STRING])) {
                $this->setMinimumVolumeString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MINIMUM_VOLUME_STRING]] + $ext));
            } else {
                $this->setMinimumVolumeString(new FHIRString($data[self::FIELD_MINIMUM_VOLUME_STRING]));
            }
        }
        if (isset($data[self::FIELD_PREPARATION])) {
            $ext = (isset($data[self::FIELD_PREPARATION_EXT]) && is_array($data[self::FIELD_PREPARATION_EXT]))
                ? $data[self::FIELD_PREPARATION_EXT]
                : null;
            if ($data[self::FIELD_PREPARATION] instanceof FHIRString) {
                $this->setPreparation($data[self::FIELD_PREPARATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_PREPARATION])) {
                $this->setPreparation(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PREPARATION]] + $ext));
            } else {
                $this->setPreparation(new FHIRString($data[self::FIELD_PREPARATION]));
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
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance
     * the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive[]
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance
     * the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive $additive
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function addAdditive(FHIRSpecimenDefinitionAdditive $additive = null)
    {
        $this->additive[] = $additive;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Substance introduced in the kind of container to preserve, maintain or enhance
     * the specimen. Examples: Formalin, Citrate, EDTA.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive[] $additive
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function setAdditive(array $additive = [])
    {
        $this->additive = [];
        if ([] === $additive) {
            return $this;
        }
        foreach($additive as $v) {
            if ($v instanceof FHIRSpecimenDefinitionAdditive) {
                $this->addAdditive($v);
            } else {
                $this->addAdditive(new FHIRSpecimenDefinitionAdditive($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Color of container cap.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Color of container cap.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $cap
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function setCap(FHIRCodeableConcept $cap = null)
    {
        $this->cap = $cap;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The capacity (volume or other measure) of this kind of container.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The capacity (volume or other measure) of this kind of container.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $capacity
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function setCapacity(FHIRQuantity $capacity = null)
    {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The textual description of the kind of container.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The textual description of the kind of container.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of material of the container.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of material of the container.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $material
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function setMaterial(FHIRCodeableConcept $material = null)
    {
        $this->material = $material;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The minimum volume to be conditioned in the container. (choose any one of
     * minimumVolume*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMinimumVolumeQuantity()
    {
        return $this->minimumVolumeQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The minimum volume to be conditioned in the container. (choose any one of
     * minimumVolume*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $minimumVolumeQuantity
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function setMinimumVolumeQuantity(FHIRQuantity $minimumVolumeQuantity = null)
    {
        $this->minimumVolumeQuantity = $minimumVolumeQuantity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The minimum volume to be conditioned in the container. (choose any one of
     * minimumVolume*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMinimumVolumeString()
    {
        return $this->minimumVolumeString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The minimum volume to be conditioned in the container. (choose any one of
     * minimumVolume*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $minimumVolumeString
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function setMinimumVolumeString($minimumVolumeString = null)
    {
        if (null === $minimumVolumeString) {
            $this->minimumVolumeString = null;
            return $this;
        }
        if ($minimumVolumeString instanceof FHIRString) {
            $this->minimumVolumeString = $minimumVolumeString;
            return $this;
        }
        $this->minimumVolumeString = new FHIRString($minimumVolumeString);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Special processing that should be applied to the container for this kind of
     * specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Special processing that should be applied to the container for this kind of
     * specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $preparation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function setPreparation($preparation = null)
    {
        if (null === $preparation) {
            $this->preparation = null;
            return $this;
        }
        if ($preparation instanceof FHIRString) {
            $this->preparation = $preparation;
            return $this;
        }
        $this->preparation = new FHIRString($preparation);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of container used to contain this kind of specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * The type of container used to contain this kind of specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer
     */
    public static function xmlUnserialize($sxe = null, $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSpecimenDefinitionContainer::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSpecimenDefinitionContainer::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRSpecimenDefinitionContainer);
        } elseif (!is_object($type) || !($type instanceof FHIRSpecimenDefinitionContainer)) {
            throw new \RuntimeException(sprintf(
                'FHIRSpecimenDefinitionContainer::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->additive)) {
            foreach($children->additive as $child) {
                $type->addAdditive(FHIRSpecimenDefinitionAdditive::xmlUnserialize($child));
            }
        }
        if (isset($children->cap)) {
            $type->setCap(FHIRCodeableConcept::xmlUnserialize($children->cap));
        }
        if (isset($children->capacity)) {
            $type->setCapacity(FHIRQuantity::xmlUnserialize($children->capacity));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->material)) {
            $type->setMaterial(FHIRCodeableConcept::xmlUnserialize($children->material));
        }
        if (isset($children->minimumVolumeQuantity)) {
            $type->setMinimumVolumeQuantity(FHIRQuantity::xmlUnserialize($children->minimumVolumeQuantity));
        }
        if (isset($attributes->minimumVolumeString)) {
            $type->setMinimumVolumeString((string)$attributes->minimumVolumeString);
        }
        if (isset($children->minimumVolumeString)) {
            $type->setMinimumVolumeString(FHIRString::xmlUnserialize($children->minimumVolumeString));
        }
        if (isset($attributes->preparation)) {
            $type->setPreparation((string)$attributes->preparation);
        }
        if (isset($children->preparation)) {
            $type->setPreparation(FHIRString::xmlUnserialize($children->preparation));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SpecimenDefinitionContainer xmlns="http://hl7.org/fhir"></SpecimenDefinitionContainer>');
        }
        if ([] !== ($vs = $this->getAdditive())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADDITIVE));
            }
        }
        if (null !== ($v = $this->getCap())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CAP));
        }
        if (null !== ($v = $this->getCapacity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CAPACITY));
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if (null !== ($v = $this->getMaterial())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MATERIAL));
        }
        if (null !== ($v = $this->getMinimumVolumeQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MINIMUM_VOLUME_QUANTITY));
        }
        if (null !== ($v = $this->getMinimumVolumeString())) {
            $sxe->addAttribute(self::FIELD_MINIMUM_VOLUME_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MINIMUM_VOLUME_STRING));
            }
        }
        if (null !== ($v = $this->getPreparation())) {
            $sxe->addAttribute(self::FIELD_PREPARATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PREPARATION));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAdditive())) {
            $a[self::FIELD_ADDITIVE] = $vs;
        }
        if (null !== ($v = $this->getCap())) {
            $a[self::FIELD_CAP] = $v;
        }
        if (null !== ($v = $this->getCapacity())) {
            $a[self::FIELD_CAPACITY] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getMaterial())) {
            $a[self::FIELD_MATERIAL] = $v;
        }
        if (null !== ($v = $this->getMinimumVolumeQuantity())) {
            $a[self::FIELD_MINIMUM_VOLUME_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getMinimumVolumeString())) {
            $a[self::FIELD_MINIMUM_VOLUME_STRING] = (string)$v;
            $a[self::FIELD_MINIMUM_VOLUME_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getPreparation())) {
            $a[self::FIELD_PREPARATION] = (string)$v;
            $a[self::FIELD_PREPARATION_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return [FHIR_JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}