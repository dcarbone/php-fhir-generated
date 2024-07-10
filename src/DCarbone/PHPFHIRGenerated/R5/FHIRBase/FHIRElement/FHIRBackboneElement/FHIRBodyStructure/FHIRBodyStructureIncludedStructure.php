<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
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
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
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
 * Class FHIRBodyStructureIncludedStructure
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure
 */
class FHIRBodyStructureIncludedStructure extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE;

    const FIELD_STRUCTURE = 'structure';
    const FIELD_LATERALITY = 'laterality';
    const FIELD_BODY_LANDMARK_ORIENTATION = 'bodyLandmarkOrientation';
    const FIELD_SPATIAL_REFERENCE = 'spatialReference';
    const FIELD_QUALIFIER = 'qualifier';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $structure = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure laterality.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $laterality = null;
    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body
     * structure).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation[]
     */
    protected null|array $bodyLandmarkOrientation = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $spatialReference = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure qualifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $qualifier = [];

    /**
     * Validation map for fields in type BodyStructure.IncludedStructure
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRBodyStructureIncludedStructure Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_STRUCTURE, $data)) {
            if ($data[self::FIELD_STRUCTURE] instanceof FHIRCodeableConcept) {
                $this->setStructure($data[self::FIELD_STRUCTURE]);
            } else {
                $this->setStructure(new FHIRCodeableConcept($data[self::FIELD_STRUCTURE]));
            }
        }
        if (array_key_exists(self::FIELD_LATERALITY, $data)) {
            if ($data[self::FIELD_LATERALITY] instanceof FHIRCodeableConcept) {
                $this->setLaterality($data[self::FIELD_LATERALITY]);
            } else {
                $this->setLaterality(new FHIRCodeableConcept($data[self::FIELD_LATERALITY]));
            }
        }
        if (array_key_exists(self::FIELD_BODY_LANDMARK_ORIENTATION, $data)) {
            if (is_array($data[self::FIELD_BODY_LANDMARK_ORIENTATION])) {
                foreach($data[self::FIELD_BODY_LANDMARK_ORIENTATION] as $v) {
                    if ($v instanceof FHIRBodyStructureBodyLandmarkOrientation) {
                        $this->addBodyLandmarkOrientation($v);
                    } else {
                        $this->addBodyLandmarkOrientation(new FHIRBodyStructureBodyLandmarkOrientation($v));
                    }
                }
            } elseif ($data[self::FIELD_BODY_LANDMARK_ORIENTATION] instanceof FHIRBodyStructureBodyLandmarkOrientation) {
                $this->addBodyLandmarkOrientation($data[self::FIELD_BODY_LANDMARK_ORIENTATION]);
            } else {
                $this->addBodyLandmarkOrientation(new FHIRBodyStructureBodyLandmarkOrientation($data[self::FIELD_BODY_LANDMARK_ORIENTATION]));
            }
        }
        if (array_key_exists(self::FIELD_SPATIAL_REFERENCE, $data)) {
            if (is_array($data[self::FIELD_SPATIAL_REFERENCE])) {
                foreach($data[self::FIELD_SPATIAL_REFERENCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSpatialReference($v);
                    } else {
                        $this->addSpatialReference(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SPATIAL_REFERENCE] instanceof FHIRReference) {
                $this->addSpatialReference($data[self::FIELD_SPATIAL_REFERENCE]);
            } else {
                $this->addSpatialReference(new FHIRReference($data[self::FIELD_SPATIAL_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_QUALIFIER, $data)) {
            if (is_array($data[self::FIELD_QUALIFIER])) {
                foreach($data[self::FIELD_QUALIFIER] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addQualifier($v);
                    } else {
                        $this->addQualifier(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_QUALIFIER] instanceof FHIRCodeableConcept) {
                $this->addQualifier($data[self::FIELD_QUALIFIER]);
            } else {
                $this->addQualifier(new FHIRCodeableConcept($data[self::FIELD_QUALIFIER]));
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
     * Code that represents the included structure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStructure(): null|FHIRCodeableConcept
    {
        return $this->structure;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $structure
     * @return static
     */
    public function setStructure(null|FHIRCodeableConcept $structure = null): self
    {
        if (null === $structure) {
            $structure = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->structure, $structure);
        $this->structure = $structure;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure laterality.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getLaterality(): null|FHIRCodeableConcept
    {
        return $this->laterality;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure laterality.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $laterality
     * @return static
     */
    public function setLaterality(null|FHIRCodeableConcept $laterality = null): self
    {
        if (null === $laterality) {
            $laterality = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->laterality, $laterality);
        $this->laterality = $laterality;
        return $this;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body
     * structure).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation[]
     */
    public function getBodyLandmarkOrientation(): null|array
    {
        return $this->bodyLandmarkOrientation;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body
     * structure).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation $bodyLandmarkOrientation
     * @return static
     */
    public function addBodyLandmarkOrientation(null|FHIRBodyStructureBodyLandmarkOrientation $bodyLandmarkOrientation = null): self
    {
        if (null === $bodyLandmarkOrientation) {
            $bodyLandmarkOrientation = new FHIRBodyStructureBodyLandmarkOrientation();
        }
        $this->_trackValueAdded();
        $this->bodyLandmarkOrientation[] = $bodyLandmarkOrientation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSpatialReference(): null|array
    {
        return $this->spatialReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $spatialReference
     * @return static
     */
    public function addSpatialReference(null|FHIRReference $spatialReference = null): self
    {
        if (null === $spatialReference) {
            $spatialReference = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->spatialReference[] = $spatialReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure qualifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getQualifier(): null|array
    {
        return $this->qualifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure qualifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $qualifier
     * @return static
     */
    public function addQualifier(null|FHIRCodeableConcept $qualifier = null): self
    {
        if (null === $qualifier) {
            $qualifier = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->qualifier[] = $qualifier;
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
        if (null !== ($v = $this->getStructure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRUCTURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLaterality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LATERALITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBodyLandmarkOrientation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BODY_LANDMARK_ORIENTATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSpatialReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPATIAL_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getQualifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_QUALIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE])) {
            $v = $this->getStructure();
            foreach($validationRules[self::FIELD_STRUCTURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE, self::FIELD_STRUCTURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE])) {
                        $errs[self::FIELD_STRUCTURE] = [];
                    }
                    $errs[self::FIELD_STRUCTURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LATERALITY])) {
            $v = $this->getLaterality();
            foreach($validationRules[self::FIELD_LATERALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE, self::FIELD_LATERALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LATERALITY])) {
                        $errs[self::FIELD_LATERALITY] = [];
                    }
                    $errs[self::FIELD_LATERALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_LANDMARK_ORIENTATION])) {
            $v = $this->getBodyLandmarkOrientation();
            foreach($validationRules[self::FIELD_BODY_LANDMARK_ORIENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE, self::FIELD_BODY_LANDMARK_ORIENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_LANDMARK_ORIENTATION])) {
                        $errs[self::FIELD_BODY_LANDMARK_ORIENTATION] = [];
                    }
                    $errs[self::FIELD_BODY_LANDMARK_ORIENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPATIAL_REFERENCE])) {
            $v = $this->getSpatialReference();
            foreach($validationRules[self::FIELD_SPATIAL_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE, self::FIELD_SPATIAL_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPATIAL_REFERENCE])) {
                        $errs[self::FIELD_SPATIAL_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SPATIAL_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUALIFIER])) {
            $v = $this->getQualifier();
            foreach($validationRules[self::FIELD_QUALIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE, self::FIELD_QUALIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUALIFIER])) {
                        $errs[self::FIELD_QUALIFIER] = [];
                    }
                    $errs[self::FIELD_QUALIFIER][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureIncludedStructure $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureIncludedStructure
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
        } else if (!($type instanceof FHIRBodyStructureIncludedStructure)) {
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
            if (self::FIELD_STRUCTURE === $childName) {
                $type->setStructure(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LATERALITY === $childName) {
                $type->setLaterality(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BODY_LANDMARK_ORIENTATION === $childName) {
                $type->addBodyLandmarkOrientation(FHIRBodyStructureBodyLandmarkOrientation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPATIAL_REFERENCE === $childName) {
                $type->addSpatialReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_QUALIFIER === $childName) {
                $type->addQualifier(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
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
            $xw->openRootNode($config, 'BodyStructureIncludedStructure', $this->_getSourceXmlns());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getStructure())) {
            $xw->startElement(self::FIELD_STRUCTURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getLaterality())) {
            $xw->startElement(self::FIELD_LATERALITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getBodyLandmarkOrientation() as $v) {
            $xw->startElement(self::FIELD_BODY_LANDMARK_ORIENTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSpatialReference() as $v) {
            $xw->startElement(self::FIELD_SPATIAL_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getQualifier() as $v) {
            $xw->startElement(self::FIELD_QUALIFIER);
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
        if (null !== ($v = $this->getStructure())) {
            $out->{self::FIELD_STRUCTURE} = $v;
        }
        if (null !== ($v = $this->getLaterality())) {
            $out->{self::FIELD_LATERALITY} = $v;
        }
        if ([] !== ($vs = $this->getBodyLandmarkOrientation())) {
            $out->{self::FIELD_BODY_LANDMARK_ORIENTATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_BODY_LANDMARK_ORIENTATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpatialReference())) {
            $out->{self::FIELD_SPATIAL_REFERENCE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SPATIAL_REFERENCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getQualifier())) {
            $out->{self::FIELD_QUALIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_QUALIFIER}[] = $v;
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