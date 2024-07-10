<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection;

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
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A selection of DICOM SOP instances and/or frames within a single Study and
 * Series. This might include additional specifics such as an image region, an
 * Observation UID or a Segmentation Number, allowing linkage to an Observation
 * Resource or transferring this information along with the ImagingStudy Resource.
 *
 * Class FHIRImagingSelectionInstance
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection
 */
class FHIRImagingSelectionInstance extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMAGING_SELECTION_DOT_INSTANCE;

    const FIELD_UID = 'uid';
    const FIELD_UID_EXT = '_uid';
    const FIELD_NUMBER = 'number';
    const FIELD_NUMBER_EXT = '_number';
    const FIELD_SOP_CLASS = 'sopClass';
    const FIELD_SUBSET = 'subset';
    const FIELD_SUBSET_EXT = '_subset';
    const FIELD_IMAGE_REGION_2D = 'imageRegion2D';
    const FIELD_IMAGE_REGION_3D = 'imageRegion3D';

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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId
     */
    protected null|FHIRId $uid = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The Instance Number for the selected DICOM instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $number = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The SOP Class UID for the selected DICOM instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $sopClass = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $subset = [];
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D[]
     */
    protected null|array $imageRegion2D = [];
    /**
     * A selection of DICOM SOP instances and/or frames within a single Study and
     * Series. This might include additional specifics such as an image region, an
     * Observation UID or a Segmentation Number, allowing linkage to an Observation
     * Resource or transferring this information along with the ImagingStudy Resource.
     *
     * Each imaging selection might includes a 3D image region, specified by a region
     * type and a set of 3D coordinates.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion3D[]
     */
    protected null|array $imageRegion3D = [];

    /**
     * Validation map for fields in type ImagingSelection.Instance
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRImagingSelectionInstance Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_UID, $data) || array_key_exists(self::FIELD_UID_EXT, $data)) {
            $value = $data[self::FIELD_UID] ?? null;
            $ext = (isset($data[self::FIELD_UID_EXT]) && is_array($data[self::FIELD_UID_EXT])) ? $data[self::FIELD_UID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setUid($value);
                } else if (is_array($value)) {
                    $this->setUid(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setUid(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUid(new FHIRId($ext));
            } else {
                $this->setUid(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_NUMBER, $data) || array_key_exists(self::FIELD_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_NUMBER_EXT]) && is_array($data[self::FIELD_NUMBER_EXT])) ? $data[self::FIELD_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setNumber($value);
                } else if (is_array($value)) {
                    $this->setNumber(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNumber(new FHIRUnsignedInt($ext));
            } else {
                $this->setNumber(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_SOP_CLASS, $data)) {
            if ($data[self::FIELD_SOP_CLASS] instanceof FHIRCoding) {
                $this->setSopClass($data[self::FIELD_SOP_CLASS]);
            } else {
                $this->setSopClass(new FHIRCoding($data[self::FIELD_SOP_CLASS]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSET, $data) || array_key_exists(self::FIELD_SUBSET_EXT, $data)) {
            $value = $data[self::FIELD_SUBSET] ?? null;
            $ext = (isset($data[self::FIELD_SUBSET_EXT]) && is_array($data[self::FIELD_SUBSET_EXT])) ? $data[self::FIELD_SUBSET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addSubset($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addSubset($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSubset(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addSubset(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSubset(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addSubset(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSubset(new FHIRString($iext));
                }
            } else {
                $this->addSubset(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_IMAGE_REGION_2D, $data)) {
            if (is_array($data[self::FIELD_IMAGE_REGION_2D])) {
                foreach($data[self::FIELD_IMAGE_REGION_2D] as $v) {
                    if ($v instanceof FHIRImagingSelectionImageRegion2D) {
                        $this->addImageRegion2D($v);
                    } else {
                        $this->addImageRegion2D(new FHIRImagingSelectionImageRegion2D($v));
                    }
                }
            } elseif ($data[self::FIELD_IMAGE_REGION_2D] instanceof FHIRImagingSelectionImageRegion2D) {
                $this->addImageRegion2D($data[self::FIELD_IMAGE_REGION_2D]);
            } else {
                $this->addImageRegion2D(new FHIRImagingSelectionImageRegion2D($data[self::FIELD_IMAGE_REGION_2D]));
            }
        }
        if (array_key_exists(self::FIELD_IMAGE_REGION_3D, $data)) {
            if (is_array($data[self::FIELD_IMAGE_REGION_3D])) {
                foreach($data[self::FIELD_IMAGE_REGION_3D] as $v) {
                    if ($v instanceof FHIRImagingSelectionImageRegion3D) {
                        $this->addImageRegion3D($v);
                    } else {
                        $this->addImageRegion3D(new FHIRImagingSelectionImageRegion3D($v));
                    }
                }
            } elseif ($data[self::FIELD_IMAGE_REGION_3D] instanceof FHIRImagingSelectionImageRegion3D) {
                $this->addImageRegion3D($data[self::FIELD_IMAGE_REGION_3D]);
            } else {
                $this->addImageRegion3D(new FHIRImagingSelectionImageRegion3D($data[self::FIELD_IMAGE_REGION_3D]));
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The SOP Instance UID for the selected DICOM instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId
     */
    public function getUid(): null|FHIRId
    {
        return $this->uid;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId $uid
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setUid(null|string|FHIRIdPrimitive|FHIRId $uid = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $uid && !($uid instanceof FHIRId)) {
            $uid = new FHIRId($uid);
        }
        $this->_trackValueSet($this->uid, $uid);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_UID])) {
            $this->_primitiveXmlLocations[self::FIELD_UID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_UID][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getNumber(): null|FHIRUnsignedInt
    {
        return $this->number;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The Instance Number for the selected DICOM instance.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt $number
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setNumber(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $number = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $number && !($number instanceof FHIRUnsignedInt)) {
            $number = new FHIRUnsignedInt($number);
        }
        $this->_trackValueSet($this->number, $number);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_NUMBER])) {
            $this->_primitiveXmlLocations[self::FIELD_NUMBER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_NUMBER][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getSopClass(): null|FHIRCoding
    {
        return $this->sopClass;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The SOP Class UID for the selected DICOM instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $sopClass
     * @return static
     */
    public function setSopClass(null|FHIRCoding $sopClass = null): self
    {
        if (null === $sopClass) {
            $sopClass = new FHIRCoding();
        }
        $this->_trackValueSet($this->sopClass, $sopClass);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getSubset(): null|array
    {
        return $this->subset;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $subset
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addSubset(null|string|FHIRStringPrimitive|FHIRString $subset = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $subset && !($subset instanceof FHIRString)) {
            $subset = new FHIRString($subset);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SUBSET])) {
            $this->_primitiveXmlLocations[self::FIELD_SUBSET] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SUBSET][] = $xmlLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[] $subset
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSubset(array $subset = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_SUBSET]);
        if ([] !== $this->subset) {
            $this->_trackValuesRemoved(count($this->subset));
            $this->subset = [];
        }
        if ([] === $subset) {
            return $this;
        }
        foreach($subset as $v) {
            if ($v instanceof FHIRString) {
                $this->addSubset($v, $xmlLocation);
            } else {
                $this->addSubset(new FHIRString($v), $xmlLocation);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D[]
     */
    public function getImageRegion2D(): null|array
    {
        return $this->imageRegion2D;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D $imageRegion2D
     * @return static
     */
    public function addImageRegion2D(null|FHIRImagingSelectionImageRegion2D $imageRegion2D = null): self
    {
        if (null === $imageRegion2D) {
            $imageRegion2D = new FHIRImagingSelectionImageRegion2D();
        }
        $this->_trackValueAdded();
        $this->imageRegion2D[] = $imageRegion2D;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion3D[]
     */
    public function getImageRegion3D(): null|array
    {
        return $this->imageRegion3D;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion3D $imageRegion3D
     * @return static
     */
    public function addImageRegion3D(null|FHIRImagingSelectionImageRegion3D $imageRegion3D = null): self
    {
        if (null === $imageRegion3D) {
            $imageRegion3D = new FHIRImagingSelectionImageRegion3D();
        }
        $this->_trackValueAdded();
        $this->imageRegion3D[] = $imageRegion3D;
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
        if (null !== ($v = $this->getUid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSopClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOP_CLASS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubset())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBSET, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getImageRegion2D())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMAGE_REGION_2D, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getImageRegion3D())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMAGE_REGION_3D, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UID])) {
            $v = $this->getUid();
            foreach($validationRules[self::FIELD_UID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_SELECTION_DOT_INSTANCE, self::FIELD_UID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_SELECTION_DOT_INSTANCE, self::FIELD_NUMBER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_SELECTION_DOT_INSTANCE, self::FIELD_SOP_CLASS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_SELECTION_DOT_INSTANCE, self::FIELD_SUBSET, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_SELECTION_DOT_INSTANCE, self::FIELD_IMAGE_REGION_2D, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_SELECTION_DOT_INSTANCE, self::FIELD_IMAGE_REGION_3D, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionInstance $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionInstance
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
        } else if (!($type instanceof FHIRImagingSelectionInstance)) {
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
            if (self::FIELD_UID === $childName) {
                $type->setUid(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_NUMBER === $childName) {
                $type->setNumber(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SOP_CLASS === $childName) {
                $type->setSopClass(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSET === $childName) {
                $type->addSubset(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IMAGE_REGION_2D === $childName) {
                $type->addImageRegion2D(FHIRImagingSelectionImageRegion2D::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMAGE_REGION_3D === $childName) {
                $type->addImageRegion3D(FHIRImagingSelectionImageRegion3D::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_UID])) {
            $pt = $type->getUid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_UID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setUid((string)$attributes[self::FIELD_UID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NUMBER])) {
            $pt = $type->getNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setNumber((string)$attributes[self::FIELD_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SUBSET])) {
            $type->addSubset((string)$attributes[self::FIELD_SUBSET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ImagingSelectionInstance', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_UID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getUid())) {
            $xw->writeAttribute(self::FIELD_UID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getNumber())) {
            $xw->writeAttribute(self::FIELD_NUMBER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SUBSET] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getSubset())) {
            $xw->writeAttribute(self::FIELD_SUBSET, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getSubset()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_SUBSET, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_UID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getUid())) {
            $xw->startElement(self::FIELD_UID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getNumber())) {
            $xw->startElement(self::FIELD_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSopClass())) {
            $xw->startElement(self::FIELD_SOP_CLASS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SUBSET] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getSubset())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_SUBSET);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        foreach ($this->getImageRegion2D() as $v) {
            $xw->startElement(self::FIELD_IMAGE_REGION_2D);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getImageRegion3D() as $v) {
            $xw->startElement(self::FIELD_IMAGE_REGION_3D);
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
        if (null !== ($v = $this->getUid())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_UID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_UID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSopClass())) {
            $out->{self::FIELD_SOP_CLASS} = $v;
        }
        if ([] !== ($vs = $this->getSubset())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SUBSET} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUBSET_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getImageRegion2D())) {
            $out->{self::FIELD_IMAGE_REGION_2D} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IMAGE_REGION_2D}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getImageRegion3D())) {
            $out->{self::FIELD_IMAGE_REGION_3D} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IMAGE_REGION_3D}[] = $v;
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