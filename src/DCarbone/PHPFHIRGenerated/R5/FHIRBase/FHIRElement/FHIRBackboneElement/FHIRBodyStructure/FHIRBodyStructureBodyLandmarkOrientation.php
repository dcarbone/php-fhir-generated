<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 7th, 2024 02:08+0000
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
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Record details about an anatomical structure. This resource may be used when a
 * coded concept does not provide the necessary detail needed for the use case.
 *
 * Class FHIRBodyStructureBodyLandmarkOrientation
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure
 */
class FHIRBodyStructureBodyLandmarkOrientation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_BODY_LANDMARK_ORIENTATION;

    const FIELD_LANDMARK_DESCRIPTION = 'landmarkDescription';
    const FIELD_CLOCK_FACE_POSITION = 'clockFacePosition';
    const FIELD_DISTANCE_FROM_LANDMARK = 'distanceFromLandmark';
    const FIELD_SURFACE_ORIENTATION = 'surfaceOrientation';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of a landmark on the body used as a reference to locate something
     * else.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $landmarkDescription = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An description of the direction away from a landmark something is located based
     * on a radial clock dial.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $clockFacePosition = [];
    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureDistanceFromLandmark[]
     */
    protected null|array $distanceFromLandmark = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The surface area a body location is in relation to a landmark.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $surfaceOrientation = [];

    /**
     * Validation map for fields in type BodyStructure.BodyLandmarkOrientation
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRBodyStructureBodyLandmarkOrientation Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_LANDMARK_DESCRIPTION, $data)) {
            if (is_array($data[self::FIELD_LANDMARK_DESCRIPTION])) {
                foreach($data[self::FIELD_LANDMARK_DESCRIPTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addLandmarkDescription($v);
                    } else {
                        $this->addLandmarkDescription(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_LANDMARK_DESCRIPTION] instanceof FHIRCodeableConcept) {
                $this->addLandmarkDescription($data[self::FIELD_LANDMARK_DESCRIPTION]);
            } else {
                $this->addLandmarkDescription(new FHIRCodeableConcept($data[self::FIELD_LANDMARK_DESCRIPTION]));
            }
        }
        if (array_key_exists(self::FIELD_CLOCK_FACE_POSITION, $data)) {
            if (is_array($data[self::FIELD_CLOCK_FACE_POSITION])) {
                foreach($data[self::FIELD_CLOCK_FACE_POSITION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addClockFacePosition($v);
                    } else {
                        $this->addClockFacePosition(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CLOCK_FACE_POSITION] instanceof FHIRCodeableConcept) {
                $this->addClockFacePosition($data[self::FIELD_CLOCK_FACE_POSITION]);
            } else {
                $this->addClockFacePosition(new FHIRCodeableConcept($data[self::FIELD_CLOCK_FACE_POSITION]));
            }
        }
        if (array_key_exists(self::FIELD_DISTANCE_FROM_LANDMARK, $data)) {
            if (is_array($data[self::FIELD_DISTANCE_FROM_LANDMARK])) {
                foreach($data[self::FIELD_DISTANCE_FROM_LANDMARK] as $v) {
                    if ($v instanceof FHIRBodyStructureDistanceFromLandmark) {
                        $this->addDistanceFromLandmark($v);
                    } else {
                        $this->addDistanceFromLandmark(new FHIRBodyStructureDistanceFromLandmark($v));
                    }
                }
            } elseif ($data[self::FIELD_DISTANCE_FROM_LANDMARK] instanceof FHIRBodyStructureDistanceFromLandmark) {
                $this->addDistanceFromLandmark($data[self::FIELD_DISTANCE_FROM_LANDMARK]);
            } else {
                $this->addDistanceFromLandmark(new FHIRBodyStructureDistanceFromLandmark($data[self::FIELD_DISTANCE_FROM_LANDMARK]));
            }
        }
        if (array_key_exists(self::FIELD_SURFACE_ORIENTATION, $data)) {
            if (is_array($data[self::FIELD_SURFACE_ORIENTATION])) {
                foreach($data[self::FIELD_SURFACE_ORIENTATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSurfaceOrientation($v);
                    } else {
                        $this->addSurfaceOrientation(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SURFACE_ORIENTATION] instanceof FHIRCodeableConcept) {
                $this->addSurfaceOrientation($data[self::FIELD_SURFACE_ORIENTATION]);
            } else {
                $this->addSurfaceOrientation(new FHIRCodeableConcept($data[self::FIELD_SURFACE_ORIENTATION]));
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
     * A description of a landmark on the body used as a reference to locate something
     * else.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getLandmarkDescription(): null|array
    {
        return $this->landmarkDescription;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of a landmark on the body used as a reference to locate something
     * else.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $landmarkDescription
     * @return static
     */
    public function addLandmarkDescription(null|FHIRCodeableConcept $landmarkDescription = null): self
    {
        if (null === $landmarkDescription) {
            $landmarkDescription = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->landmarkDescription[] = $landmarkDescription;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An description of the direction away from a landmark something is located based
     * on a radial clock dial.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getClockFacePosition(): null|array
    {
        return $this->clockFacePosition;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An description of the direction away from a landmark something is located based
     * on a radial clock dial.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $clockFacePosition
     * @return static
     */
    public function addClockFacePosition(null|FHIRCodeableConcept $clockFacePosition = null): self
    {
        if (null === $clockFacePosition) {
            $clockFacePosition = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->clockFacePosition[] = $clockFacePosition;
        return $this;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureDistanceFromLandmark[]
     */
    public function getDistanceFromLandmark(): null|array
    {
        return $this->distanceFromLandmark;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureDistanceFromLandmark $distanceFromLandmark
     * @return static
     */
    public function addDistanceFromLandmark(null|FHIRBodyStructureDistanceFromLandmark $distanceFromLandmark = null): self
    {
        if (null === $distanceFromLandmark) {
            $distanceFromLandmark = new FHIRBodyStructureDistanceFromLandmark();
        }
        $this->_trackValueAdded();
        $this->distanceFromLandmark[] = $distanceFromLandmark;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The surface area a body location is in relation to a landmark.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getSurfaceOrientation(): null|array
    {
        return $this->surfaceOrientation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The surface area a body location is in relation to a landmark.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $surfaceOrientation
     * @return static
     */
    public function addSurfaceOrientation(null|FHIRCodeableConcept $surfaceOrientation = null): self
    {
        if (null === $surfaceOrientation) {
            $surfaceOrientation = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->surfaceOrientation[] = $surfaceOrientation;
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
        if ([] !== ($vs = $this->getLandmarkDescription())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LANDMARK_DESCRIPTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getClockFacePosition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLOCK_FACE_POSITION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDistanceFromLandmark())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DISTANCE_FROM_LANDMARK, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSurfaceOrientation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SURFACE_ORIENTATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANDMARK_DESCRIPTION])) {
            $v = $this->getLandmarkDescription();
            foreach($validationRules[self::FIELD_LANDMARK_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_BODY_LANDMARK_ORIENTATION, self::FIELD_LANDMARK_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANDMARK_DESCRIPTION])) {
                        $errs[self::FIELD_LANDMARK_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_LANDMARK_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLOCK_FACE_POSITION])) {
            $v = $this->getClockFacePosition();
            foreach($validationRules[self::FIELD_CLOCK_FACE_POSITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_BODY_LANDMARK_ORIENTATION, self::FIELD_CLOCK_FACE_POSITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLOCK_FACE_POSITION])) {
                        $errs[self::FIELD_CLOCK_FACE_POSITION] = [];
                    }
                    $errs[self::FIELD_CLOCK_FACE_POSITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISTANCE_FROM_LANDMARK])) {
            $v = $this->getDistanceFromLandmark();
            foreach($validationRules[self::FIELD_DISTANCE_FROM_LANDMARK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_BODY_LANDMARK_ORIENTATION, self::FIELD_DISTANCE_FROM_LANDMARK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISTANCE_FROM_LANDMARK])) {
                        $errs[self::FIELD_DISTANCE_FROM_LANDMARK] = [];
                    }
                    $errs[self::FIELD_DISTANCE_FROM_LANDMARK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SURFACE_ORIENTATION])) {
            $v = $this->getSurfaceOrientation();
            foreach($validationRules[self::FIELD_SURFACE_ORIENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_BODY_LANDMARK_ORIENTATION, self::FIELD_SURFACE_ORIENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SURFACE_ORIENTATION])) {
                        $errs[self::FIELD_SURFACE_ORIENTATION] = [];
                    }
                    $errs[self::FIELD_SURFACE_ORIENTATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation
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
        } else if (!($type instanceof FHIRBodyStructureBodyLandmarkOrientation)) {
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
            if (self::FIELD_LANDMARK_DESCRIPTION === $childName) {
                $type->addLandmarkDescription(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CLOCK_FACE_POSITION === $childName) {
                $type->addClockFacePosition(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DISTANCE_FROM_LANDMARK === $childName) {
                $type->addDistanceFromLandmark(FHIRBodyStructureDistanceFromLandmark::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SURFACE_ORIENTATION === $childName) {
                $type->addSurfaceOrientation(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
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
            $xw->openRootNode($config, 'BodyStructureBodyLandmarkOrientation', $this->_getSourceXmlns());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getLandmarkDescription() as $v) {
            $xw->startElement(self::FIELD_LANDMARK_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getClockFacePosition() as $v) {
            $xw->startElement(self::FIELD_CLOCK_FACE_POSITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDistanceFromLandmark() as $v) {
            $xw->startElement(self::FIELD_DISTANCE_FROM_LANDMARK);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSurfaceOrientation() as $v) {
            $xw->startElement(self::FIELD_SURFACE_ORIENTATION);
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
        if ([] !== ($vs = $this->getLandmarkDescription())) {
            $out->{self::FIELD_LANDMARK_DESCRIPTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_LANDMARK_DESCRIPTION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getClockFacePosition())) {
            $out->{self::FIELD_CLOCK_FACE_POSITION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CLOCK_FACE_POSITION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDistanceFromLandmark())) {
            $out->{self::FIELD_DISTANCE_FROM_LANDMARK} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DISTANCE_FROM_LANDMARK}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSurfaceOrientation())) {
            $out->{self::FIELD_SURFACE_ORIENTATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SURFACE_ORIENTATION}[] = $v;
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