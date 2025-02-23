<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 23rd, 2025 20:44+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Record details about an anatomical structure. This resource may be used when a
 * coded concept does not provide the necessary detail needed for the use case.
 */
class FHIRBodyStructureIncludedStructure extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_BODY_STRUCTURE_DOT_INCLUDED_STRUCTURE;

    /* class_default.php:56 */
    public const FIELD_STRUCTURE = 'structure';
    public const FIELD_LATERALITY = 'laterality';
    public const FIELD_BODY_LANDMARK_ORIENTATION = 'bodyLandmarkOrientation';
    public const FIELD_SPATIAL_REFERENCE = 'spatialReference';
    public const FIELD_QUALIFIER = 'qualifier';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STRUCTURE => [
            MinOccursRule::NAME => 1,
        ],
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
     * Code that represents the included structure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $structure;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure laterality.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $laterality;
    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body
     * structure).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation[] 
     */
    protected array $bodyLandmarkOrientation;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $spatialReference;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure qualifier.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $qualifier;

    /* constructor.php:61 */
    /**
     * FHIRBodyStructureIncludedStructure Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $structure
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $laterality
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation[] $bodyLandmarkOrientation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $spatialReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $qualifier
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $structure = null,
                                null|FHIRCodeableConcept $laterality = null,
                                null|iterable $bodyLandmarkOrientation = null,
                                null|iterable $spatialReference = null,
                                null|iterable $qualifier = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $structure) {
            $this->setStructure($structure);
        }
        if (null !== $laterality) {
            $this->setLaterality($laterality);
        }
        if (null !== $bodyLandmarkOrientation) {
            $this->setBodyLandmarkOrientation(...$bodyLandmarkOrientation);
        }
        if (null !== $spatialReference) {
            $this->setSpatialReference(...$spatialReference);
        }
        if (null !== $qualifier) {
            $this->setQualifier(...$qualifier);
        }
    }

    /* class_default.php:144 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:173 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStructure(): null|FHIRCodeableConcept
    {
        return $this->structure ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $structure
     * @return static
     */
    public function setStructure(null|FHIRCodeableConcept $structure): self
    {
        if (null === $structure) {
            unset($this->structure);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getLaterality(): null|FHIRCodeableConcept
    {
        return $this->laterality ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure laterality.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $laterality
     * @return static
     */
    public function setLaterality(null|FHIRCodeableConcept $laterality): self
    {
        if (null === $laterality) {
            unset($this->laterality);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation[]
     */
    public function getBodyLandmarkOrientation(): array
    {
        return $this->bodyLandmarkOrientation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation>
     */
    public function getBodyLandmarkOrientationIterator(): iterable
    {
        if (!isset($this->bodyLandmarkOrientation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->bodyLandmarkOrientation);
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body
     * structure).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation $bodyLandmarkOrientation
     * @return static
     */
    public function addBodyLandmarkOrientation(FHIRBodyStructureBodyLandmarkOrientation $bodyLandmarkOrientation): self
    {
        if (!isset($this->bodyLandmarkOrientation)) {
            $this->bodyLandmarkOrientation = [];
        }
        $this->bodyLandmarkOrientation[] = $bodyLandmarkOrientation;
        return $this;
    }

    /**
     * Record details about an anatomical structure. This resource may be used when a
     * coded concept does not provide the necessary detail needed for the use case.
     *
     * Body locations in relation to a specific body landmark (tatoo, scar, other body
     * structure).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureBodyLandmarkOrientation ...$bodyLandmarkOrientation
     * @return static
     */
    public function setBodyLandmarkOrientation(FHIRBodyStructureBodyLandmarkOrientation ...$bodyLandmarkOrientation): self
    {
        if ([] === $bodyLandmarkOrientation) {
            unset($this->bodyLandmarkOrientation);
            return $this;
        }
        $this->bodyLandmarkOrientation = $bodyLandmarkOrientation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSpatialReference(): array
    {
        return $this->spatialReference ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSpatialReferenceIterator(): iterable
    {
        if (!isset($this->spatialReference)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->spatialReference);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $spatialReference
     * @return static
     */
    public function addSpatialReference(FHIRReference $spatialReference): self
    {
        if (!isset($this->spatialReference)) {
            $this->spatialReference = [];
        }
        $this->spatialReference[] = $spatialReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * XY or XYZ-coordinate orientation for structure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$spatialReference
     * @return static
     */
    public function setSpatialReference(FHIRReference ...$spatialReference): self
    {
        if ([] === $spatialReference) {
            unset($this->spatialReference);
            return $this;
        }
        $this->spatialReference = $spatialReference;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getQualifier(): array
    {
        return $this->qualifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getQualifierIterator(): iterable
    {
        if (!isset($this->qualifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->qualifier);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that represents the included structure qualifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $qualifier
     * @return static
     */
    public function addQualifier(FHIRCodeableConcept $qualifier): self
    {
        if (!isset($this->qualifier)) {
            $this->qualifier = [];
        }
        $this->qualifier[] = $qualifier;
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$qualifier
     * @return static
     */
    public function setQualifier(FHIRCodeableConcept ...$qualifier): self
    {
        if ([] === $qualifier) {
            unset($this->qualifier);
            return $this;
        }
        $this->qualifier = $qualifier;
        return $this;
    }

    /* class_default.php:200 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureIncludedStructure $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureIncludedStructure
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBodyStructureIncludedStructure)) {
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
            } else if (self::FIELD_STRUCTURE === $cen) {
                $type->setStructure(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LATERALITY === $cen) {
                $type->setLaterality(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BODY_LANDMARK_ORIENTATION === $cen) {
                $type->addBodyLandmarkOrientation(FHIRBodyStructureBodyLandmarkOrientation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPATIAL_REFERENCE === $cen) {
                $type->addSpatialReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUALIFIER === $cen) {
                $type->addQualifier(FHIRCodeableConcept::xmlUnserialize($ce, $config));
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
        if (isset($this->structure)) {
            $xw->startElement(self::FIELD_STRUCTURE);
            $this->structure->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->laterality)) {
            $xw->startElement(self::FIELD_LATERALITY);
            $this->laterality->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->bodyLandmarkOrientation)) {
            foreach ($this->bodyLandmarkOrientation as $v) {
                $xw->startElement(self::FIELD_BODY_LANDMARK_ORIENTATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->spatialReference)) {
            foreach ($this->spatialReference as $v) {
                $xw->startElement(self::FIELD_SPATIAL_REFERENCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->qualifier)) {
            foreach ($this->qualifier as $v) {
                $xw->startElement(self::FIELD_QUALIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureIncludedStructure $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBodyStructure\FHIRBodyStructureIncludedStructure
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBodyStructureIncludedStructure)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->structure) || property_exists($json, self::FIELD_STRUCTURE)) {
            if (is_array($json->structure)) {
                $type->setStructure(FHIRCodeableConcept::jsonUnserialize(reset($json->structure), $config));
            } else {
                $type->setStructure(FHIRCodeableConcept::jsonUnserialize($json->structure, $config));
            }
        }
        if (isset($json->laterality) || property_exists($json, self::FIELD_LATERALITY)) {
            if (is_array($json->laterality)) {
                $type->setLaterality(FHIRCodeableConcept::jsonUnserialize(reset($json->laterality), $config));
            } else {
                $type->setLaterality(FHIRCodeableConcept::jsonUnserialize($json->laterality, $config));
            }
        }
        if (isset($json->bodyLandmarkOrientation) || property_exists($json, self::FIELD_BODY_LANDMARK_ORIENTATION)) {
            if (is_object($json->bodyLandmarkOrientation)) {
                $vals = [$json->bodyLandmarkOrientation];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_BODY_LANDMARK_ORIENTATION, true);
            } else {
                $vals = $json->bodyLandmarkOrientation;
            }
            foreach($vals as $v) {
                $type->addBodyLandmarkOrientation(FHIRBodyStructureBodyLandmarkOrientation::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->spatialReference) || property_exists($json, self::FIELD_SPATIAL_REFERENCE)) {
            if (is_object($json->spatialReference)) {
                $vals = [$json->spatialReference];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SPATIAL_REFERENCE, true);
            } else {
                $vals = $json->spatialReference;
            }
            foreach($vals as $v) {
                $type->addSpatialReference(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->qualifier) || property_exists($json, self::FIELD_QUALIFIER)) {
            if (is_object($json->qualifier)) {
                $vals = [$json->qualifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_QUALIFIER, true);
            } else {
                $vals = $json->qualifier;
            }
            foreach($vals as $v) {
                $type->addQualifier(FHIRCodeableConcept::jsonUnserialize($v, $config));
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
        if (isset($this->structure)) {
            $out->structure = $this->structure;
        }
        if (isset($this->laterality)) {
            $out->laterality = $this->laterality;
        }
        if (isset($this->bodyLandmarkOrientation) && [] !== $this->bodyLandmarkOrientation) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_BODY_LANDMARK_ORIENTATION) && 1 === count($this->bodyLandmarkOrientation)) {
                $out->bodyLandmarkOrientation = $this->bodyLandmarkOrientation[0];
            } else {
                $out->bodyLandmarkOrientation = $this->bodyLandmarkOrientation;
            }
        }
        if (isset($this->spatialReference) && [] !== $this->spatialReference) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SPATIAL_REFERENCE) && 1 === count($this->spatialReference)) {
                $out->spatialReference = $this->spatialReference[0];
            } else {
                $out->spatialReference = $this->spatialReference;
            }
        }
        if (isset($this->qualifier) && [] !== $this->qualifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_QUALIFIER) && 1 === count($this->qualifier)) {
                $out->qualifier = $this->qualifier[0];
            } else {
                $out->qualifier = $this->qualifier;
            }
        }
        return $out;
    }
}