<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A selection of DICOM SOP instances and/or frames within a single Study and
 * Series. This might include additional specifics such as an image region, an
 * Observation UID or a Segmentation Number, allowing linkage to an Observation
 * Resource or transferring this information along with the ImagingStudy Resource.
 */
class FHIRImagingSelectionInstance extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMAGING_SELECTION_DOT_INSTANCE;


    public const FIELD_UID = 'uid';
    public const FIELD_UID_EXT = '_uid';
    public const FIELD_NUMBER = 'number';
    public const FIELD_NUMBER_EXT = '_number';
    public const FIELD_SOP_CLASS = 'sopClass';
    public const FIELD_SUBSET = 'subset';
    public const FIELD_SUBSET_EXT = '_subset';
    public const FIELD_IMAGE_REGION_2D = 'imageRegion2D';
    public const FIELD_IMAGE_REGION_3D = 'imageRegion3D';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The SOP Instance UID for the selected DICOM instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    protected FHIRId $uid;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The Instance Number for the selected DICOM instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $number;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The SOP Class UID for the selected DICOM instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    protected FHIRCoding $sopClass;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Selected subset of the SOP Instance. The content and format of the subset item
     * is determined by the SOP Class of the selected instance. May be one of: - A list
     * of frame numbers selected from a multiframe SOP Instance. - A list of Content
     * Item Observation UID values selected from a DICOM SR or other structured
     * document SOP Instance. - A list of segment numbers selected from a segmentation
     * SOP Instance. - A list of Region of Interest (ROI) numbers selected from a
     * radiotherapy structure set SOP Instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[] 
     */
    protected array $subset;
    /**
     * A selection of DICOM SOP instances and/or frames within a single Study and
     * Series. This might include additional specifics such as an image region, an
     * Observation UID or a Segmentation Number, allowing linkage to an Observation
     * Resource or transferring this information along with the ImagingStudy Resource.
     *
     * Each imaging selection instance or frame list might includes an image region,
     * specified by a region type and a set of 2D coordinates. If the parent
     * imagingSelection.instance contains a subset element of type frame, the image
     * region applies to all frames in the subset list.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D[] 
     */
    protected array $imageRegion2D;
    /**
     * A selection of DICOM SOP instances and/or frames within a single Study and
     * Series. This might include additional specifics such as an image region, an
     * Observation UID or a Segmentation Number, allowing linkage to an Observation
     * Resource or transferring this information along with the ImagingStudy Resource.
     *
     * Each imaging selection might includes a 3D image region, specified by a region
     * type and a set of 3D coordinates.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion3D[] 
     */
    protected array $imageRegion3D;

    /** Default validation map for fields in type ImagingSelection.Instance */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_UID => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImagingSelectionInstance Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $uid
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $number
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $sopClass
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[] $subset
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D[] $imageRegion2D
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion3D[] $imageRegion3D
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRIdPrimitive|FHIRId $uid = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $number = null,
                                null|FHIRCoding $sopClass = null,
                                null|iterable $subset = null,
                                null|iterable $imageRegion2D = null,
                                null|iterable $imageRegion3D = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $uid) {
            $this->setUid($uid);
        }
        if (null !== $number) {
            $this->setNumber($number);
        }
        if (null !== $sopClass) {
            $this->setSopClass($sopClass);
        }
        if (null !== $subset) {
            $this->setSubset(...$subset);
        }
        if (null !== $imageRegion2D) {
            $this->setImageRegion2D(...$imageRegion2D);
        }
        if (null !== $imageRegion3D) {
            $this->setImageRegion3D(...$imageRegion3D);
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The SOP Instance UID for the selected DICOM instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
     */
    public function getUid(): null|FHIRId
    {
        return $this->uid ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The SOP Instance UID for the selected DICOM instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $uid
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUid(null|string|FHIRIdPrimitive|FHIRId $uid,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $uid) {
            unset($this->uid);
            return $this;
        }
        if (!($uid instanceof FHIRId)) {
            $uid = new FHIRId(value: $uid);
        }
        if (null !== $valueXMLLocation) {
            $uid->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $uid->_getValueXMLLocation()) {
            $uid->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->uid = $uid;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The Instance Number for the selected DICOM instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getNumber(): null|FHIRUnsignedInt
    {
        return $this->number ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The Instance Number for the selected DICOM instance.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $number
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNumber(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $number,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $number) {
            unset($this->number);
            return $this;
        }
        if (!($number instanceof FHIRUnsignedInt)) {
            $number = new FHIRUnsignedInt(value: $number);
        }
        if (null !== $valueXMLLocation) {
            $number->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $number->_getValueXMLLocation()) {
            $number->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->number = $number;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The SOP Class UID for the selected DICOM instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getSopClass(): null|FHIRCoding
    {
        return $this->sopClass ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The SOP Class UID for the selected DICOM instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $sopClass
     * @return static
     */
    public function setSopClass(null|FHIRCoding $sopClass): self
    {
        if (null === $sopClass) {
            unset($this->sopClass);
            return $this;
        }
        $this->sopClass = $sopClass;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Selected subset of the SOP Instance. The content and format of the subset item
     * is determined by the SOP Class of the selected instance. May be one of: - A list
     * of frame numbers selected from a multiframe SOP Instance. - A list of Content
     * Item Observation UID values selected from a DICOM SR or other structured
     * document SOP Instance. - A list of segment numbers selected from a segmentation
     * SOP Instance. - A list of Region of Interest (ROI) numbers selected from a
     * radiotherapy structure set SOP Instance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getSubset(): array
    {
        return $this->subset ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString>
     */
    public function getSubsetIterator(): iterable
    {
        if (!isset($this->subset) || [] === $this->subset) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->subset);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Selected subset of the SOP Instance. The content and format of the subset item
     * is determined by the SOP Class of the selected instance. May be one of: - A list
     * of frame numbers selected from a multiframe SOP Instance. - A list of Content
     * Item Observation UID values selected from a DICOM SR or other structured
     * document SOP Instance. - A list of segment numbers selected from a segmentation
     * SOP Instance. - A list of Region of Interest (ROI) numbers selected from a
     * radiotherapy structure set SOP Instance.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $subset
     * @return static
     */
    public function addSubset(string|FHIRStringPrimitive|FHIRString $subset): self
    {
        if (!($subset instanceof FHIRString)) {
            $subset = new FHIRString(value: $subset);
        }
        if (!isset($this->subset)) {
            $this->subset = [];
        }
        $this->subset[] = $subset;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Selected subset of the SOP Instance. The content and format of the subset item
     * is determined by the SOP Class of the selected instance. May be one of: - A list
     * of frame numbers selected from a multiframe SOP Instance. - A list of Content
     * Item Observation UID values selected from a DICOM SR or other structured
     * document SOP Instance. - A list of segment numbers selected from a segmentation
     * SOP Instance. - A list of Region of Interest (ROI) numbers selected from a
     * radiotherapy structure set SOP Instance.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString ...$subset
     * @return static
     */
    public function setSubset(string|FHIRStringPrimitive|FHIRString ...$subset): self
    {
        $this->subset = [];
        foreach($subset as $v) {
            if ($v instanceof FHIRString) {
                $this->subset[] = $v;
            } else {
                $this->subset[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * A selection of DICOM SOP instances and/or frames within a single Study and
     * Series. This might include additional specifics such as an image region, an
     * Observation UID or a Segmentation Number, allowing linkage to an Observation
     * Resource or transferring this information along with the ImagingStudy Resource.
     *
     * Each imaging selection instance or frame list might includes an image region,
     * specified by a region type and a set of 2D coordinates. If the parent
     * imagingSelection.instance contains a subset element of type frame, the image
     * region applies to all frames in the subset list.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D[]
     */
    public function getImageRegion2D(): array
    {
        return $this->imageRegion2D ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D>
     */
    public function getImageRegion2DIterator(): iterable
    {
        if (!isset($this->imageRegion2D) || [] === $this->imageRegion2D) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->imageRegion2D);
    }

    /**
     * A selection of DICOM SOP instances and/or frames within a single Study and
     * Series. This might include additional specifics such as an image region, an
     * Observation UID or a Segmentation Number, allowing linkage to an Observation
     * Resource or transferring this information along with the ImagingStudy Resource.
     *
     * Each imaging selection instance or frame list might includes an image region,
     * specified by a region type and a set of 2D coordinates. If the parent
     * imagingSelection.instance contains a subset element of type frame, the image
     * region applies to all frames in the subset list.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D $imageRegion2D
     * @return static
     */
    public function addImageRegion2D(FHIRImagingSelectionImageRegion2D $imageRegion2D): self
    {
        if (!isset($this->imageRegion2D)) {
            $this->imageRegion2D = [];
        }
        $this->imageRegion2D[] = $imageRegion2D;
        return $this;
    }

    /**
     * A selection of DICOM SOP instances and/or frames within a single Study and
     * Series. This might include additional specifics such as an image region, an
     * Observation UID or a Segmentation Number, allowing linkage to an Observation
     * Resource or transferring this information along with the ImagingStudy Resource.
     *
     * Each imaging selection instance or frame list might includes an image region,
     * specified by a region type and a set of 2D coordinates. If the parent
     * imagingSelection.instance contains a subset element of type frame, the image
     * region applies to all frames in the subset list.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D ...$imageRegion2D
     * @return static
     */
    public function setImageRegion2D(FHIRImagingSelectionImageRegion2D ...$imageRegion2D): self
    {
        $this->imageRegion2D = $imageRegion2D;
        return $this;
    }

    /**
     * A selection of DICOM SOP instances and/or frames within a single Study and
     * Series. This might include additional specifics such as an image region, an
     * Observation UID or a Segmentation Number, allowing linkage to an Observation
     * Resource or transferring this information along with the ImagingStudy Resource.
     *
     * Each imaging selection might includes a 3D image region, specified by a region
     * type and a set of 3D coordinates.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion3D[]
     */
    public function getImageRegion3D(): array
    {
        return $this->imageRegion3D ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion3D>
     */
    public function getImageRegion3DIterator(): iterable
    {
        if (!isset($this->imageRegion3D) || [] === $this->imageRegion3D) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->imageRegion3D);
    }

    /**
     * A selection of DICOM SOP instances and/or frames within a single Study and
     * Series. This might include additional specifics such as an image region, an
     * Observation UID or a Segmentation Number, allowing linkage to an Observation
     * Resource or transferring this information along with the ImagingStudy Resource.
     *
     * Each imaging selection might includes a 3D image region, specified by a region
     * type and a set of 3D coordinates.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion3D $imageRegion3D
     * @return static
     */
    public function addImageRegion3D(FHIRImagingSelectionImageRegion3D $imageRegion3D): self
    {
        if (!isset($this->imageRegion3D)) {
            $this->imageRegion3D = [];
        }
        $this->imageRegion3D[] = $imageRegion3D;
        return $this;
    }

    /**
     * A selection of DICOM SOP instances and/or frames within a single Study and
     * Series. This might include additional specifics such as an image region, an
     * Observation UID or a Segmentation Number, allowing linkage to an Observation
     * Resource or transferring this information along with the ImagingStudy Resource.
     *
     * Each imaging selection might includes a 3D image region, specified by a region
     * type and a set of 3D coordinates.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion3D ...$imageRegion3D
     * @return static
     */
    public function setImageRegion3D(FHIRImagingSelectionImageRegion3D ...$imageRegion3D): self
    {
        $this->imageRegion3D = $imageRegion3D;
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
        if (null !== ($v = $this->getUid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UID] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_UID])) {
            $v = $this->getUid();
            foreach($validationRules[self::FIELD_UID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UID])) {
                        $errs[self::FIELD_UID] = [];
                    }
                    $errs[self::FIELD_UID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER])) {
            $v = $this->getNumber();
            foreach($validationRules[self::FIELD_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER])) {
                        $errs[self::FIELD_NUMBER] = [];
                    }
                    $errs[self::FIELD_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOP_CLASS])) {
            $v = $this->getSopClass();
            foreach($validationRules[self::FIELD_SOP_CLASS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOP_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOP_CLASS])) {
                        $errs[self::FIELD_SOP_CLASS] = [];
                    }
                    $errs[self::FIELD_SOP_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSET])) {
            $v = $this->getSubset();
            foreach($validationRules[self::FIELD_SUBSET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBSET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSET])) {
                        $errs[self::FIELD_SUBSET] = [];
                    }
                    $errs[self::FIELD_SUBSET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMAGE_REGION_2D])) {
            $v = $this->getImageRegion2D();
            foreach($validationRules[self::FIELD_IMAGE_REGION_2D] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMAGE_REGION_2D, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMAGE_REGION_2D])) {
                        $errs[self::FIELD_IMAGE_REGION_2D] = [];
                    }
                    $errs[self::FIELD_IMAGE_REGION_2D][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMAGE_REGION_3D])) {
            $v = $this->getImageRegion3D();
            foreach($validationRules[self::FIELD_IMAGE_REGION_3D] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMAGE_REGION_3D, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMAGE_REGION_3D])) {
                        $errs[self::FIELD_IMAGE_REGION_3D] = [];
                    }
                    $errs[self::FIELD_IMAGE_REGION_3D][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionInstance $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionInstance
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImagingSelectionInstance)) {
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
            } else if (self::FIELD_UID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUid(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NUMBER === $childName) {
                $v = new FHIRUnsignedInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setNumber(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOP_CLASS === $childName) {
                $v = new FHIRCoding();
                $type->setSopClass(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBSET === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addSubset(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMAGE_REGION_2D === $childName) {
                $v = new FHIRImagingSelectionImageRegion2D();
                $type->addImageRegion2D(FHIRImagingSelectionImageRegion2D::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMAGE_REGION_3D === $childName) {
                $v = new FHIRImagingSelectionImageRegion3D();
                $type->addImageRegion3D(FHIRImagingSelectionImageRegion3D::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_UID])) {
            $pt = $type->getUid();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_UID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUid(new FHIRId(
                    value: (string)$attributes[self::FIELD_UID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NUMBER])) {
            $pt = $type->getNumber();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_NUMBER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNumber(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_NUMBER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SUBSET])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_SUBSET],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addSubset($v);
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
            $xw->openRootNode('ImagingSelectionInstance', $this->_getSourceXMLNS());
        }
        if (isset($this->uid) && $this->uid->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_UID, $this->uid->getValue()?->_getFormattedValue());
        }
        if (isset($this->number) && $this->number->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NUMBER, $this->number->getValue()?->_getFormattedValue());
        }
        if (isset($this->subset)) {
           foreach($this->subset as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_SUBSET, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->uid) && $this->uid->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_UID);
            $this->uid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->number) && $this->number->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NUMBER);
            $this->number->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sopClass)) {
            $xw->startElement(self::FIELD_SOP_CLASS);
            $this->sopClass->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subset)) {
            foreach($this->subset as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_SUBSET);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->imageRegion2D)) {
            foreach ($this->imageRegion2D as $v) {
                $xw->startElement(self::FIELD_IMAGE_REGION_2D);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->imageRegion3D)) {
            foreach ($this->imageRegion3D as $v) {
                $xw->startElement(self::FIELD_IMAGE_REGION_3D);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionInstance $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionInstance
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImagingSelectionInstance)) {
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
        if (isset($json[self::FIELD_UID]) || isset($json[self::FIELD_UID_EXT]) || array_key_exists(self::FIELD_UID, $json) || array_key_exists(self::FIELD_UID_EXT, $json)) {
            $value = $json[self::FIELD_UID] ?? null;
            $ext = (isset($json[self::FIELD_UID_EXT]) && is_array($json[self::FIELD_UID_EXT])) ? $json[self::FIELD_UID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setUid($value);
                } else if (is_array($value)) {
                    $type->setUid(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setUid(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUid(new FHIRId($ext));
            } else {
                $type->setUid(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_NUMBER]) || isset($json[self::FIELD_NUMBER_EXT]) || array_key_exists(self::FIELD_NUMBER, $json) || array_key_exists(self::FIELD_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER] ?? null;
            $ext = (isset($json[self::FIELD_NUMBER_EXT]) && is_array($json[self::FIELD_NUMBER_EXT])) ? $json[self::FIELD_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setNumber($value);
                } else if (is_array($value)) {
                    $type->setNumber(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNumber(new FHIRUnsignedInt($ext));
            } else {
                $type->setNumber(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_SOP_CLASS]) || array_key_exists(self::FIELD_SOP_CLASS, $json)) {
            if ($json[self::FIELD_SOP_CLASS] instanceof FHIRCoding) {
                $type->setSopClass($json[self::FIELD_SOP_CLASS]);
            } else {
                $type->setSopClass(new FHIRCoding($json[self::FIELD_SOP_CLASS]));
            }
        }
        if (isset($json[self::FIELD_SUBSET]) || isset($json[self::FIELD_SUBSET_EXT]) || array_key_exists(self::FIELD_SUBSET, $json) || array_key_exists(self::FIELD_SUBSET_EXT, $json)) {
            $value = $json[self::FIELD_SUBSET] ?? null;
            $ext = (isset($json[self::FIELD_SUBSET_EXT]) && is_array($json[self::FIELD_SUBSET_EXT])) ? $json[self::FIELD_SUBSET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addSubset($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addSubset($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addSubset(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addSubset(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addSubset(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addSubset(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addSubset(new FHIRString($iext));
                }
            } else {
                $type->addSubset(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_IMAGE_REGION_2D]) || array_key_exists(self::FIELD_IMAGE_REGION_2D, $json)) {
            if (is_array($json[self::FIELD_IMAGE_REGION_2D])) {
                foreach($json[self::FIELD_IMAGE_REGION_2D] as $v) {
                    if ($v instanceof FHIRImagingSelectionImageRegion2D) {
                        $type->addImageRegion2D($v);
                    } else {
                        $type->addImageRegion2D(new FHIRImagingSelectionImageRegion2D($v));
                    }
                }
            } elseif ($json[self::FIELD_IMAGE_REGION_2D] instanceof FHIRImagingSelectionImageRegion2D) {
                $type->addImageRegion2D($json[self::FIELD_IMAGE_REGION_2D]);
            } else {
                $type->addImageRegion2D(new FHIRImagingSelectionImageRegion2D($json[self::FIELD_IMAGE_REGION_2D]));
            }
        }
        if (isset($json[self::FIELD_IMAGE_REGION_3D]) || array_key_exists(self::FIELD_IMAGE_REGION_3D, $json)) {
            if (is_array($json[self::FIELD_IMAGE_REGION_3D])) {
                foreach($json[self::FIELD_IMAGE_REGION_3D] as $v) {
                    if ($v instanceof FHIRImagingSelectionImageRegion3D) {
                        $type->addImageRegion3D($v);
                    } else {
                        $type->addImageRegion3D(new FHIRImagingSelectionImageRegion3D($v));
                    }
                }
            } elseif ($json[self::FIELD_IMAGE_REGION_3D] instanceof FHIRImagingSelectionImageRegion3D) {
                $type->addImageRegion3D($json[self::FIELD_IMAGE_REGION_3D]);
            } else {
                $type->addImageRegion3D(new FHIRImagingSelectionImageRegion3D($json[self::FIELD_IMAGE_REGION_3D]));
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
        if (isset($this->uid)) {
            if (null !== ($val = $this->uid->getValue())) {
                $out->uid = $val;
            }
            $ext = $this->uid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_uid = $ext;
            }
        }
        if (isset($this->number)) {
            if (null !== ($val = $this->number->getValue())) {
                $out->number = $val;
            }
            $ext = $this->number->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_number = $ext;
            }
        }
        if (isset($this->sopClass)) {
            $out->sopClass = $this->sopClass;
        }
        if (isset($this->subset) && [] !== $this->subset) {
            $vals = [];
            $exts = [];
            foreach ($this->subset as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->subset = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_subset = $exts;
            }
        }
        if (isset($this->imageRegion2D) && [] !== $this->imageRegion2D) {
            $out->imageRegion2D = $this->imageRegion2D;
        }
        if (isset($this->imageRegion3D) && [] !== $this->imageRegion3D) {
            $out->imageRegion3D = $this->imageRegion3D;
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