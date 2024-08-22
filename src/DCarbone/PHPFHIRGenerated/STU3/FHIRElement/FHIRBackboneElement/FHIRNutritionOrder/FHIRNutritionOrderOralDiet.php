<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional
 * supplement to a patient/resident.
 *
 * Class FHIRNutritionOrderOralDiet
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder
 */
class FHIRNutritionOrderOralDiet extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET;

    const FIELD_TYPE = 'type';
    const FIELD_SCHEDULE = 'schedule';
    const FIELD_NUTRIENT = 'nutrient';
    const FIELD_TEXTURE = 'texture';
    const FIELD_FLUID_CONSISTENCY_TYPE = 'fluidConsistencyType';
    const FIELD_INSTRUCTION = 'instruction';
    const FIELD_INSTRUCTION_EXT = '_instruction';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or
     * diabetic diet.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $type = [];
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period and frequency at which the diet should be given. The diet should
     * be given for the combination of all schedules if more than one schedule is
     * present.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming[]
     */
    protected null|array $schedule = [];
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that defines the quantity and type of nutrient modifications (for example
     * carbohydrate, fiber or sodium) required for the oral diet.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient[]
     */
    protected null|array $nutrient = [];
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that describes any texture modifications required for the patient to
     * safely consume various types of solid foods.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture[]
     */
    protected null|array $texture = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of
     * liquids or fluids served to the patient.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $fluidConsistencyType = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text or additional instructions or information pertaining to the oral diet.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $instruction = null;

    /**
     * Validation map for fields in type NutritionOrder.OralDiet
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRNutritionOrderOralDiet Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_SCHEDULE, $data)) {
            if (is_array($data[self::FIELD_SCHEDULE])) {
                foreach($data[self::FIELD_SCHEDULE] as $v) {
                    if ($v instanceof FHIRTiming) {
                        $this->addSchedule($v);
                    } else {
                        $this->addSchedule(new FHIRTiming($v));
                    }
                }
            } elseif ($data[self::FIELD_SCHEDULE] instanceof FHIRTiming) {
                $this->addSchedule($data[self::FIELD_SCHEDULE]);
            } else {
                $this->addSchedule(new FHIRTiming($data[self::FIELD_SCHEDULE]));
            }
        }
        if (array_key_exists(self::FIELD_NUTRIENT, $data)) {
            if (is_array($data[self::FIELD_NUTRIENT])) {
                foreach($data[self::FIELD_NUTRIENT] as $v) {
                    if ($v instanceof FHIRNutritionOrderNutrient) {
                        $this->addNutrient($v);
                    } else {
                        $this->addNutrient(new FHIRNutritionOrderNutrient($v));
                    }
                }
            } elseif ($data[self::FIELD_NUTRIENT] instanceof FHIRNutritionOrderNutrient) {
                $this->addNutrient($data[self::FIELD_NUTRIENT]);
            } else {
                $this->addNutrient(new FHIRNutritionOrderNutrient($data[self::FIELD_NUTRIENT]));
            }
        }
        if (array_key_exists(self::FIELD_TEXTURE, $data)) {
            if (is_array($data[self::FIELD_TEXTURE])) {
                foreach($data[self::FIELD_TEXTURE] as $v) {
                    if ($v instanceof FHIRNutritionOrderTexture) {
                        $this->addTexture($v);
                    } else {
                        $this->addTexture(new FHIRNutritionOrderTexture($v));
                    }
                }
            } elseif ($data[self::FIELD_TEXTURE] instanceof FHIRNutritionOrderTexture) {
                $this->addTexture($data[self::FIELD_TEXTURE]);
            } else {
                $this->addTexture(new FHIRNutritionOrderTexture($data[self::FIELD_TEXTURE]));
            }
        }
        if (array_key_exists(self::FIELD_FLUID_CONSISTENCY_TYPE, $data)) {
            if (is_array($data[self::FIELD_FLUID_CONSISTENCY_TYPE])) {
                foreach($data[self::FIELD_FLUID_CONSISTENCY_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addFluidConsistencyType($v);
                    } else {
                        $this->addFluidConsistencyType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_FLUID_CONSISTENCY_TYPE] instanceof FHIRCodeableConcept) {
                $this->addFluidConsistencyType($data[self::FIELD_FLUID_CONSISTENCY_TYPE]);
            } else {
                $this->addFluidConsistencyType(new FHIRCodeableConcept($data[self::FIELD_FLUID_CONSISTENCY_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_INSTRUCTION, $data) || array_key_exists(self::FIELD_INSTRUCTION_EXT, $data)) {
            $value = $data[self::FIELD_INSTRUCTION] ?? null;
            $ext = (isset($data[self::FIELD_INSTRUCTION_EXT]) && is_array($data[self::FIELD_INSTRUCTION_EXT])) ? $data[self::FIELD_INSTRUCTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setInstruction($value);
                } else if (is_array($value)) {
                    $this->setInstruction(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setInstruction(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInstruction(new FHIRString($ext));
            } else {
                $this->setInstruction(new FHIRString(null));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or
     * diabetic diet.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType(): null|array
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or
     * diabetic diet.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function addType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or
     * diabetic diet.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept ...$type
     * @return static
     */
    public function setType(FHIRCodeableConcept ...$type): self
    {
        if ([] !== $this->type) {
            $this->_trackValuesRemoved(count($this->type));
            $this->type = [];
        }
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            $this->addType($v);
        }
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period and frequency at which the diet should be given. The diet should
     * be given for the combination of all schedules if more than one schedule is
     * present.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming[]
     */
    public function getSchedule(): null|array
    {
        return $this->schedule;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period and frequency at which the diet should be given. The diet should
     * be given for the combination of all schedules if more than one schedule is
     * present.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $schedule
     * @return static
     */
    public function addSchedule(null|FHIRTiming $schedule = null): self
    {
        if (null === $schedule) {
            $schedule = new FHIRTiming();
        }
        $this->_trackValueAdded();
        $this->schedule[] = $schedule;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period and frequency at which the diet should be given. The diet should
     * be given for the combination of all schedules if more than one schedule is
     * present.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming ...$schedule
     * @return static
     */
    public function setSchedule(FHIRTiming ...$schedule): self
    {
        if ([] !== $this->schedule) {
            $this->_trackValuesRemoved(count($this->schedule));
            $this->schedule = [];
        }
        if ([] === $schedule) {
            return $this;
        }
        foreach($schedule as $v) {
            $this->addSchedule($v);
        }
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that defines the quantity and type of nutrient modifications (for example
     * carbohydrate, fiber or sodium) required for the oral diet.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient[]
     */
    public function getNutrient(): null|array
    {
        return $this->nutrient;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that defines the quantity and type of nutrient modifications (for example
     * carbohydrate, fiber or sodium) required for the oral diet.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient $nutrient
     * @return static
     */
    public function addNutrient(null|FHIRNutritionOrderNutrient $nutrient = null): self
    {
        if (null === $nutrient) {
            $nutrient = new FHIRNutritionOrderNutrient();
        }
        $this->_trackValueAdded();
        $this->nutrient[] = $nutrient;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that defines the quantity and type of nutrient modifications (for example
     * carbohydrate, fiber or sodium) required for the oral diet.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient ...$nutrient
     * @return static
     */
    public function setNutrient(FHIRNutritionOrderNutrient ...$nutrient): self
    {
        if ([] !== $this->nutrient) {
            $this->_trackValuesRemoved(count($this->nutrient));
            $this->nutrient = [];
        }
        if ([] === $nutrient) {
            return $this;
        }
        foreach($nutrient as $v) {
            $this->addNutrient($v);
        }
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that describes any texture modifications required for the patient to
     * safely consume various types of solid foods.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture[]
     */
    public function getTexture(): null|array
    {
        return $this->texture;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that describes any texture modifications required for the patient to
     * safely consume various types of solid foods.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture $texture
     * @return static
     */
    public function addTexture(null|FHIRNutritionOrderTexture $texture = null): self
    {
        if (null === $texture) {
            $texture = new FHIRNutritionOrderTexture();
        }
        $this->_trackValueAdded();
        $this->texture[] = $texture;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Class that describes any texture modifications required for the patient to
     * safely consume various types of solid foods.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture ...$texture
     * @return static
     */
    public function setTexture(FHIRNutritionOrderTexture ...$texture): self
    {
        if ([] !== $this->texture) {
            $this->_trackValuesRemoved(count($this->texture));
            $this->texture = [];
        }
        if ([] === $texture) {
            return $this;
        }
        foreach($texture as $v) {
            $this->addTexture($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of
     * liquids or fluids served to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFluidConsistencyType(): null|array
    {
        return $this->fluidConsistencyType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of
     * liquids or fluids served to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $fluidConsistencyType
     * @return static
     */
    public function addFluidConsistencyType(null|FHIRCodeableConcept $fluidConsistencyType = null): self
    {
        if (null === $fluidConsistencyType) {
            $fluidConsistencyType = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->fluidConsistencyType[] = $fluidConsistencyType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of
     * liquids or fluids served to the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept ...$fluidConsistencyType
     * @return static
     */
    public function setFluidConsistencyType(FHIRCodeableConcept ...$fluidConsistencyType): self
    {
        if ([] !== $this->fluidConsistencyType) {
            $this->_trackValuesRemoved(count($this->fluidConsistencyType));
            $this->fluidConsistencyType = [];
        }
        if ([] === $fluidConsistencyType) {
            return $this;
        }
        foreach($fluidConsistencyType as $v) {
            $this->addFluidConsistencyType($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text or additional instructions or information pertaining to the oral diet.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getInstruction(): null|FHIRString
    {
        return $this->instruction;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text or additional instructions or information pertaining to the oral diet.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $instruction
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setInstruction(null|string|FHIRStringPrimitive|FHIRString $instruction = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $instruction && !($instruction instanceof FHIRString)) {
            $instruction = new FHIRString($instruction);
        }
        $this->_trackValueSet($this->instruction, $instruction);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_INSTRUCTION])) {
            $this->_primitiveXmlLocations[self::FIELD_INSTRUCTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_INSTRUCTION][0] = $xmlLocation;
        $this->instruction = $instruction;
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
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSchedule())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SCHEDULE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNutrient())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NUTRIENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTexture())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TEXTURE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getFluidConsistencyType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FLUID_CONSISTENCY_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getInstruction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTRUCTION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCHEDULE])) {
            $v = $this->getSchedule();
            foreach($validationRules[self::FIELD_SCHEDULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_SCHEDULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCHEDULE])) {
                        $errs[self::FIELD_SCHEDULE] = [];
                    }
                    $errs[self::FIELD_SCHEDULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUTRIENT])) {
            $v = $this->getNutrient();
            foreach($validationRules[self::FIELD_NUTRIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_NUTRIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUTRIENT])) {
                        $errs[self::FIELD_NUTRIENT] = [];
                    }
                    $errs[self::FIELD_NUTRIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXTURE])) {
            $v = $this->getTexture();
            foreach($validationRules[self::FIELD_TEXTURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_TEXTURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXTURE])) {
                        $errs[self::FIELD_TEXTURE] = [];
                    }
                    $errs[self::FIELD_TEXTURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FLUID_CONSISTENCY_TYPE])) {
            $v = $this->getFluidConsistencyType();
            foreach($validationRules[self::FIELD_FLUID_CONSISTENCY_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_FLUID_CONSISTENCY_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FLUID_CONSISTENCY_TYPE])) {
                        $errs[self::FIELD_FLUID_CONSISTENCY_TYPE] = [];
                    }
                    $errs[self::FIELD_FLUID_CONSISTENCY_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTRUCTION])) {
            $v = $this->getInstruction();
            foreach($validationRules[self::FIELD_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET, self::FIELD_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTRUCTION])) {
                        $errs[self::FIELD_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_INSTRUCTION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet
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
        } else if (!($type instanceof FHIRNutritionOrderOralDiet)) {
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
            if (self::FIELD_TYPE === $childName) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SCHEDULE === $childName) {
                $type->addSchedule(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NUTRIENT === $childName) {
                $type->addNutrient(FHIRNutritionOrderNutrient::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXTURE === $childName) {
                $type->addTexture(FHIRNutritionOrderTexture::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FLUID_CONSISTENCY_TYPE === $childName) {
                $type->addFluidConsistencyType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INSTRUCTION === $childName) {
                $type->setInstruction(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_INSTRUCTION])) {
            $pt = $type->getInstruction();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_INSTRUCTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setInstruction((string)$attributes[self::FIELD_INSTRUCTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'NutritionOrderOralDiet', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_INSTRUCTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getInstruction())) {
            $xw->writeAttribute(self::FIELD_INSTRUCTION, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getType() as $v) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSchedule() as $v) {
            $xw->startElement(self::FIELD_SCHEDULE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNutrient() as $v) {
            $xw->startElement(self::FIELD_NUTRIENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTexture() as $v) {
            $xw->startElement(self::FIELD_TEXTURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getFluidConsistencyType() as $v) {
            $xw->startElement(self::FIELD_FLUID_CONSISTENCY_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_INSTRUCTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getInstruction())) {
            $xw->startElement(self::FIELD_INSTRUCTION);
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
        if ([] !== ($vs = $this->getType())) {
            $out->{self::FIELD_TYPE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TYPE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSchedule())) {
            $out->{self::FIELD_SCHEDULE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SCHEDULE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getNutrient())) {
            $out->{self::FIELD_NUTRIENT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NUTRIENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTexture())) {
            $out->{self::FIELD_TEXTURE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TEXTURE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getFluidConsistencyType())) {
            $out->{self::FIELD_FLUID_CONSISTENCY_TYPE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_FLUID_CONSISTENCY_TYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getInstruction())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INSTRUCTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INSTRUCTION_EXT} = $ext;
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