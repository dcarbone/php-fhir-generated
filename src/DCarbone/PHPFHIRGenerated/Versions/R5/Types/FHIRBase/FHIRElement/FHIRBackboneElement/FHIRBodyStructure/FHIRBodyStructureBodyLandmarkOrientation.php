<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 20th, 2025 13:35+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Record details about an anatomical structure. This resource may be used when a
 * coded concept does not provide the necessary detail needed for the use case.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRBodyStructureBodyLandmarkOrientation extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_BODY_STRUCTURE_DOT_BODY_LANDMARK_ORIENTATION;

    /* class_default.php:56 */
    public const FIELD_LANDMARK_DESCRIPTION = 'landmarkDescription';
    public const FIELD_CLOCK_FACE_POSITION = 'clockFacePosition';
    public const FIELD_DISTANCE_FROM_LANDMARK = 'distanceFromLandmark';
    public const FIELD_SURFACE_ORIENTATION = 'surfaceOrientation';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of a landmark on the body used as a reference to locate something
     * else.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $landmarkDescription;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An description of the direction away from a landmark something is located based
     * on a radial clock dial.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $clockFacePosition;
    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureDistanceFromLandmark> 
     */
    #[FHIRBodyStructureDistanceFromLandmark]
    protected array $distanceFromLandmark;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The surface area a body location is in relation to a landmark.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $surfaceOrientation;

    /* constructor.php:61 */
    /**
     * FHIRBodyStructureBodyLandmarkOrientation Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $landmarkDescription
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $clockFacePosition
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureDistanceFromLandmark> $distanceFromLandmark
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $surfaceOrientation
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $landmarkDescription = null,
                                null|iterable $clockFacePosition = null,
                                null|iterable $distanceFromLandmark = null,
                                null|iterable $surfaceOrientation = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $landmarkDescription) {
            $this->setLandmarkDescription(...$landmarkDescription);
        }
        if (null !== $clockFacePosition) {
            $this->setClockFacePosition(...$clockFacePosition);
        }
        if (null !== $distanceFromLandmark) {
            $this->setDistanceFromLandmark(...$distanceFromLandmark);
        }
        if (null !== $surfaceOrientation) {
            $this->setSurfaceOrientation(...$surfaceOrientation);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of a landmark on the body used as a reference to locate something
     * else.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getLandmarkDescription(): array
    {
        return $this->landmarkDescription ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getLandmarkDescriptionIterator(): iterable
    {
        if (!isset($this->landmarkDescription)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->landmarkDescription);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $landmarkDescription
     * @return static
     */
    public function addLandmarkDescription(FHIRCodeableConcept $landmarkDescription): self
    {
        if (!isset($this->landmarkDescription)) {
            $this->landmarkDescription = [];
        }
        $this->landmarkDescription[] = $landmarkDescription;
        return $this;
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$landmarkDescription
     * @return static
     */
    public function setLandmarkDescription(FHIRCodeableConcept ...$landmarkDescription): self
    {
        if ([] === $landmarkDescription) {
            unset($this->landmarkDescription);
            return $this;
        }
        $this->landmarkDescription = $landmarkDescription;
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getClockFacePosition(): array
    {
        return $this->clockFacePosition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getClockFacePositionIterator(): iterable
    {
        if (!isset($this->clockFacePosition)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->clockFacePosition);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $clockFacePosition
     * @return static
     */
    public function addClockFacePosition(FHIRCodeableConcept $clockFacePosition): self
    {
        if (!isset($this->clockFacePosition)) {
            $this->clockFacePosition = [];
        }
        $this->clockFacePosition[] = $clockFacePosition;
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$clockFacePosition
     * @return static
     */
    public function setClockFacePosition(FHIRCodeableConcept ...$clockFacePosition): self
    {
        if ([] === $clockFacePosition) {
            unset($this->clockFacePosition);
            return $this;
        }
        $this->clockFacePosition = $clockFacePosition;
        return $this;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureDistanceFromLandmark>
     */
    public function getDistanceFromLandmark(): array
    {
        return $this->distanceFromLandmark ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureDistanceFromLandmark>
     */
    public function getDistanceFromLandmarkIterator(): iterable
    {
        if (!isset($this->distanceFromLandmark)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->distanceFromLandmark);
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureDistanceFromLandmark $distanceFromLandmark
     * @return static
     */
    public function addDistanceFromLandmark(FHIRBodyStructureDistanceFromLandmark $distanceFromLandmark): self
    {
        if (!isset($this->distanceFromLandmark)) {
            $this->distanceFromLandmark = [];
        }
        $this->distanceFromLandmark[] = $distanceFromLandmark;
        return $this;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * The distance in centimeters a certain observation is made from a body landmark.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureDistanceFromLandmark ...$distanceFromLandmark
     * @return static
     */
    public function setDistanceFromLandmark(FHIRBodyStructureDistanceFromLandmark ...$distanceFromLandmark): self
    {
        if ([] === $distanceFromLandmark) {
            unset($this->distanceFromLandmark);
            return $this;
        }
        $this->distanceFromLandmark = $distanceFromLandmark;
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getSurfaceOrientation(): array
    {
        return $this->surfaceOrientation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getSurfaceOrientationIterator(): iterable
    {
        if (!isset($this->surfaceOrientation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->surfaceOrientation);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The surface area a body location is in relation to a landmark.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $surfaceOrientation
     * @return static
     */
    public function addSurfaceOrientation(FHIRCodeableConcept $surfaceOrientation): self
    {
        if (!isset($this->surfaceOrientation)) {
            $this->surfaceOrientation = [];
        }
        $this->surfaceOrientation[] = $surfaceOrientation;
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$surfaceOrientation
     * @return static
     */
    public function setSurfaceOrientation(FHIRCodeableConcept ...$surfaceOrientation): self
    {
        if ([] === $surfaceOrientation) {
            unset($this->surfaceOrientation);
            return $this;
        }
        $this->surfaceOrientation = $surfaceOrientation;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBodyStructureBodyLandmarkOrientation)) {
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
            } else if (self::FIELD_LANDMARK_DESCRIPTION === $cen) {
                $type->addLandmarkDescription(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLOCK_FACE_POSITION === $cen) {
                $type->addClockFacePosition(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISTANCE_FROM_LANDMARK === $cen) {
                $type->addDistanceFromLandmark(FHIRBodyStructureDistanceFromLandmark::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SURFACE_ORIENTATION === $cen) {
                $type->addSurfaceOrientation(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        parent::xmlSerialize($xw, $config);
        if (isset($this->landmarkDescription)) {
            foreach ($this->landmarkDescription as $v) {
                $xw->startElement(self::FIELD_LANDMARK_DESCRIPTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->clockFacePosition)) {
            foreach ($this->clockFacePosition as $v) {
                $xw->startElement(self::FIELD_CLOCK_FACE_POSITION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->distanceFromLandmark)) {
            foreach ($this->distanceFromLandmark as $v) {
                $xw->startElement(self::FIELD_DISTANCE_FROM_LANDMARK);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->surfaceOrientation)) {
            foreach ($this->surfaceOrientation as $v) {
                $xw->startElement(self::FIELD_SURFACE_ORIENTATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBodyStructureBodyLandmarkOrientation)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->landmarkDescription) || property_exists($decoded, self::FIELD_LANDMARK_DESCRIPTION)) {
            if (is_object($decoded->landmarkDescription)) {
                $vals = [$decoded->landmarkDescription];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_LANDMARK_DESCRIPTION, true);
            } else {
                $vals = $decoded->landmarkDescription;
            }
            foreach($vals as $v) {
                $type->addLandmarkDescription(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->clockFacePosition) || property_exists($decoded, self::FIELD_CLOCK_FACE_POSITION)) {
            if (is_object($decoded->clockFacePosition)) {
                $vals = [$decoded->clockFacePosition];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CLOCK_FACE_POSITION, true);
            } else {
                $vals = $decoded->clockFacePosition;
            }
            foreach($vals as $v) {
                $type->addClockFacePosition(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->distanceFromLandmark) || property_exists($decoded, self::FIELD_DISTANCE_FROM_LANDMARK)) {
            if (is_object($decoded->distanceFromLandmark)) {
                $vals = [$decoded->distanceFromLandmark];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DISTANCE_FROM_LANDMARK, true);
            } else {
                $vals = $decoded->distanceFromLandmark;
            }
            foreach($vals as $v) {
                $type->addDistanceFromLandmark(FHIRBodyStructureDistanceFromLandmark::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->surfaceOrientation) || property_exists($decoded, self::FIELD_SURFACE_ORIENTATION)) {
            if (is_object($decoded->surfaceOrientation)) {
                $vals = [$decoded->surfaceOrientation];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SURFACE_ORIENTATION, true);
            } else {
                $vals = $decoded->surfaceOrientation;
            }
            foreach($vals as $v) {
                $type->addSurfaceOrientation(FHIRCodeableConcept::jsonUnserialize($v, $config));
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
        if (isset($this->landmarkDescription) && [] !== $this->landmarkDescription) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_LANDMARK_DESCRIPTION) && 1 === count($this->landmarkDescription)) {
                $out->landmarkDescription = $this->landmarkDescription[0];
            } else {
                $out->landmarkDescription = $this->landmarkDescription;
            }
        }
        if (isset($this->clockFacePosition) && [] !== $this->clockFacePosition) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CLOCK_FACE_POSITION) && 1 === count($this->clockFacePosition)) {
                $out->clockFacePosition = $this->clockFacePosition[0];
            } else {
                $out->clockFacePosition = $this->clockFacePosition;
            }
        }
        if (isset($this->distanceFromLandmark) && [] !== $this->distanceFromLandmark) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DISTANCE_FROM_LANDMARK) && 1 === count($this->distanceFromLandmark)) {
                $out->distanceFromLandmark = $this->distanceFromLandmark[0];
            } else {
                $out->distanceFromLandmark = $this->distanceFromLandmark;
            }
        }
        if (isset($this->surfaceOrientation) && [] !== $this->surfaceOrientation) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SURFACE_ORIENTATION) && 1 === count($this->surfaceOrientation)) {
                $out->surfaceOrientation = $this->surfaceOrientation[0];
            } else {
                $out->surfaceOrientation = $this->surfaceOrientation;
            }
        }
        return $out;
    }
}