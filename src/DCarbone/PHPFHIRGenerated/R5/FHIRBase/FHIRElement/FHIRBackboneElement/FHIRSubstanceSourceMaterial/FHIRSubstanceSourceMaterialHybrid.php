<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: May 3rd, 2024 22:35+0000
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
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Source material shall capture information on the taxonomic and anatomical
 * origins as well as the fraction of a material that can result in or can be
 * modified to form a substance. This set of data elements shall be used to define
 * polymer substances isolated from biological matrices. Taxonomic and anatomical
 * origins shall be described using a controlled vocabulary as required. This
 * information is captured for naturally derived polymers ( . starch) and
 * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
 * the Substance level defines the fresh material of a single species or
 * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
 * preparations, the fraction information will be captured at the Substance
 * information level and additional information for herbal extracts will be
 * captured at the Specified Substance Group 1 information level. See for further
 * explanation the Substance Class: Structurally Diverse and the herbal annex.
 *
 * Class FHIRSubstanceSourceMaterialHybrid
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial
 */
class FHIRSubstanceSourceMaterialHybrid extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID;

    const FIELD_MATERNAL_ORGANISM_ID = 'maternalOrganismId';
    const FIELD_MATERNAL_ORGANISM_ID_EXT = '_maternalOrganismId';
    const FIELD_MATERNAL_ORGANISM_NAME = 'maternalOrganismName';
    const FIELD_MATERNAL_ORGANISM_NAME_EXT = '_maternalOrganismName';
    const FIELD_PATERNAL_ORGANISM_ID = 'paternalOrganismId';
    const FIELD_PATERNAL_ORGANISM_ID_EXT = '_paternalOrganismId';
    const FIELD_PATERNAL_ORGANISM_NAME = 'paternalOrganismName';
    const FIELD_PATERNAL_ORGANISM_NAME_EXT = '_paternalOrganismName';
    const FIELD_HYBRID_TYPE = 'hybridType';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $maternalOrganismId = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $maternalOrganismName = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $paternalOrganismId = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $paternalOrganismName = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $hybridType = null;

    /**
     * Validation map for fields in type SubstanceSourceMaterial.Hybrid
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRSubstanceSourceMaterialHybrid Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_MATERNAL_ORGANISM_ID, $data) || array_key_exists(self::FIELD_MATERNAL_ORGANISM_ID_EXT, $data)) {
            $value = $data[self::FIELD_MATERNAL_ORGANISM_ID] ?? null;
            $ext = (isset($data[self::FIELD_MATERNAL_ORGANISM_ID_EXT]) && is_array($data[self::FIELD_MATERNAL_ORGANISM_ID_EXT])) ? $data[self::FIELD_MATERNAL_ORGANISM_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMaternalOrganismId($value);
                } else if (is_array($value)) {
                    $this->setMaternalOrganismId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMaternalOrganismId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaternalOrganismId(new FHIRString($ext));
            } else {
                $this->setMaternalOrganismId(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_MATERNAL_ORGANISM_NAME, $data) || array_key_exists(self::FIELD_MATERNAL_ORGANISM_NAME_EXT, $data)) {
            $value = $data[self::FIELD_MATERNAL_ORGANISM_NAME] ?? null;
            $ext = (isset($data[self::FIELD_MATERNAL_ORGANISM_NAME_EXT]) && is_array($data[self::FIELD_MATERNAL_ORGANISM_NAME_EXT])) ? $data[self::FIELD_MATERNAL_ORGANISM_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMaternalOrganismName($value);
                } else if (is_array($value)) {
                    $this->setMaternalOrganismName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMaternalOrganismName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaternalOrganismName(new FHIRString($ext));
            } else {
                $this->setMaternalOrganismName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PATERNAL_ORGANISM_ID, $data) || array_key_exists(self::FIELD_PATERNAL_ORGANISM_ID_EXT, $data)) {
            $value = $data[self::FIELD_PATERNAL_ORGANISM_ID] ?? null;
            $ext = (isset($data[self::FIELD_PATERNAL_ORGANISM_ID_EXT]) && is_array($data[self::FIELD_PATERNAL_ORGANISM_ID_EXT])) ? $data[self::FIELD_PATERNAL_ORGANISM_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPaternalOrganismId($value);
                } else if (is_array($value)) {
                    $this->setPaternalOrganismId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPaternalOrganismId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPaternalOrganismId(new FHIRString($ext));
            } else {
                $this->setPaternalOrganismId(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PATERNAL_ORGANISM_NAME, $data) || array_key_exists(self::FIELD_PATERNAL_ORGANISM_NAME_EXT, $data)) {
            $value = $data[self::FIELD_PATERNAL_ORGANISM_NAME] ?? null;
            $ext = (isset($data[self::FIELD_PATERNAL_ORGANISM_NAME_EXT]) && is_array($data[self::FIELD_PATERNAL_ORGANISM_NAME_EXT])) ? $data[self::FIELD_PATERNAL_ORGANISM_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPaternalOrganismName($value);
                } else if (is_array($value)) {
                    $this->setPaternalOrganismName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPaternalOrganismName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPaternalOrganismName(new FHIRString($ext));
            } else {
                $this->setPaternalOrganismName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_HYBRID_TYPE, $data)) {
            if ($data[self::FIELD_HYBRID_TYPE] instanceof FHIRCodeableConcept) {
                $this->setHybridType($data[self::FIELD_HYBRID_TYPE]);
            } else {
                $this->setHybridType(new FHIRCodeableConcept($data[self::FIELD_HYBRID_TYPE]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getMaternalOrganismId(): null|FHIRString
    {
        return $this->maternalOrganismId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $maternalOrganismId
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaternalOrganismId(null|string|FHIRStringPrimitive|FHIRString $maternalOrganismId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maternalOrganismId && !($maternalOrganismId instanceof FHIRString)) {
            $maternalOrganismId = new FHIRString($maternalOrganismId);
        }
        $this->_trackValueSet($this->maternalOrganismId, $maternalOrganismId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MATERNAL_ORGANISM_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_MATERNAL_ORGANISM_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MATERNAL_ORGANISM_ID][0] = $xmlLocation;
        $this->maternalOrganismId = $maternalOrganismId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getMaternalOrganismName(): null|FHIRString
    {
        return $this->maternalOrganismName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $maternalOrganismName
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaternalOrganismName(null|string|FHIRStringPrimitive|FHIRString $maternalOrganismName = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maternalOrganismName && !($maternalOrganismName instanceof FHIRString)) {
            $maternalOrganismName = new FHIRString($maternalOrganismName);
        }
        $this->_trackValueSet($this->maternalOrganismName, $maternalOrganismName);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MATERNAL_ORGANISM_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_MATERNAL_ORGANISM_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MATERNAL_ORGANISM_NAME][0] = $xmlLocation;
        $this->maternalOrganismName = $maternalOrganismName;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPaternalOrganismId(): null|FHIRString
    {
        return $this->paternalOrganismId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $paternalOrganismId
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPaternalOrganismId(null|string|FHIRStringPrimitive|FHIRString $paternalOrganismId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $paternalOrganismId && !($paternalOrganismId instanceof FHIRString)) {
            $paternalOrganismId = new FHIRString($paternalOrganismId);
        }
        $this->_trackValueSet($this->paternalOrganismId, $paternalOrganismId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATERNAL_ORGANISM_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_PATERNAL_ORGANISM_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATERNAL_ORGANISM_ID][0] = $xmlLocation;
        $this->paternalOrganismId = $paternalOrganismId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPaternalOrganismName(): null|FHIRString
    {
        return $this->paternalOrganismName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $paternalOrganismName
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPaternalOrganismName(null|string|FHIRStringPrimitive|FHIRString $paternalOrganismName = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $paternalOrganismName && !($paternalOrganismName instanceof FHIRString)) {
            $paternalOrganismName = new FHIRString($paternalOrganismName);
        }
        $this->_trackValueSet($this->paternalOrganismName, $paternalOrganismName);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATERNAL_ORGANISM_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_PATERNAL_ORGANISM_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATERNAL_ORGANISM_NAME][0] = $xmlLocation;
        $this->paternalOrganismName = $paternalOrganismName;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getHybridType(): null|FHIRCodeableConcept
    {
        return $this->hybridType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $hybridType
     * @return static
     */
    public function setHybridType(null|FHIRCodeableConcept $hybridType = null): self
    {
        if (null === $hybridType) {
            $hybridType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->hybridType, $hybridType);
        $this->hybridType = $hybridType;
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
        if (null !== ($v = $this->getMaternalOrganismId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MATERNAL_ORGANISM_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaternalOrganismName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MATERNAL_ORGANISM_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPaternalOrganismId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATERNAL_ORGANISM_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPaternalOrganismName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATERNAL_ORGANISM_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHybridType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HYBRID_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_MATERNAL_ORGANISM_ID])) {
            $v = $this->getMaternalOrganismId();
            foreach($validationRules[self::FIELD_MATERNAL_ORGANISM_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID, self::FIELD_MATERNAL_ORGANISM_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MATERNAL_ORGANISM_ID])) {
                        $errs[self::FIELD_MATERNAL_ORGANISM_ID] = [];
                    }
                    $errs[self::FIELD_MATERNAL_ORGANISM_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MATERNAL_ORGANISM_NAME])) {
            $v = $this->getMaternalOrganismName();
            foreach($validationRules[self::FIELD_MATERNAL_ORGANISM_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID, self::FIELD_MATERNAL_ORGANISM_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MATERNAL_ORGANISM_NAME])) {
                        $errs[self::FIELD_MATERNAL_ORGANISM_NAME] = [];
                    }
                    $errs[self::FIELD_MATERNAL_ORGANISM_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATERNAL_ORGANISM_ID])) {
            $v = $this->getPaternalOrganismId();
            foreach($validationRules[self::FIELD_PATERNAL_ORGANISM_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID, self::FIELD_PATERNAL_ORGANISM_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATERNAL_ORGANISM_ID])) {
                        $errs[self::FIELD_PATERNAL_ORGANISM_ID] = [];
                    }
                    $errs[self::FIELD_PATERNAL_ORGANISM_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATERNAL_ORGANISM_NAME])) {
            $v = $this->getPaternalOrganismName();
            foreach($validationRules[self::FIELD_PATERNAL_ORGANISM_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID, self::FIELD_PATERNAL_ORGANISM_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATERNAL_ORGANISM_NAME])) {
                        $errs[self::FIELD_PATERNAL_ORGANISM_NAME] = [];
                    }
                    $errs[self::FIELD_PATERNAL_ORGANISM_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HYBRID_TYPE])) {
            $v = $this->getHybridType();
            foreach($validationRules[self::FIELD_HYBRID_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID, self::FIELD_HYBRID_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HYBRID_TYPE])) {
                        $errs[self::FIELD_HYBRID_TYPE] = [];
                    }
                    $errs[self::FIELD_HYBRID_TYPE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
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
        } else if (!($type instanceof FHIRSubstanceSourceMaterialHybrid)) {
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
            if (self::FIELD_MATERNAL_ORGANISM_ID === $childName) {
                $type->setMaternalOrganismId(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MATERNAL_ORGANISM_NAME === $childName) {
                $type->setMaternalOrganismName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATERNAL_ORGANISM_ID === $childName) {
                $type->setPaternalOrganismId(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATERNAL_ORGANISM_NAME === $childName) {
                $type->setPaternalOrganismName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_HYBRID_TYPE === $childName) {
                $type->setHybridType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_MATERNAL_ORGANISM_ID])) {
            $pt = $type->getMaternalOrganismId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MATERNAL_ORGANISM_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaternalOrganismId((string)$attributes[self::FIELD_MATERNAL_ORGANISM_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MATERNAL_ORGANISM_NAME])) {
            $pt = $type->getMaternalOrganismName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MATERNAL_ORGANISM_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaternalOrganismName((string)$attributes[self::FIELD_MATERNAL_ORGANISM_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATERNAL_ORGANISM_ID])) {
            $pt = $type->getPaternalOrganismId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATERNAL_ORGANISM_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPaternalOrganismId((string)$attributes[self::FIELD_PATERNAL_ORGANISM_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATERNAL_ORGANISM_NAME])) {
            $pt = $type->getPaternalOrganismName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATERNAL_ORGANISM_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPaternalOrganismName((string)$attributes[self::FIELD_PATERNAL_ORGANISM_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'SubstanceSourceMaterialHybrid', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MATERNAL_ORGANISM_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaternalOrganismId())) {
            $xw->writeAttribute(self::FIELD_MATERNAL_ORGANISM_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MATERNAL_ORGANISM_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaternalOrganismName())) {
            $xw->writeAttribute(self::FIELD_MATERNAL_ORGANISM_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATERNAL_ORGANISM_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPaternalOrganismId())) {
            $xw->writeAttribute(self::FIELD_PATERNAL_ORGANISM_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATERNAL_ORGANISM_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPaternalOrganismName())) {
            $xw->writeAttribute(self::FIELD_PATERNAL_ORGANISM_NAME, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_MATERNAL_ORGANISM_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaternalOrganismId())) {
            $xw->startElement(self::FIELD_MATERNAL_ORGANISM_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MATERNAL_ORGANISM_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaternalOrganismName())) {
            $xw->startElement(self::FIELD_MATERNAL_ORGANISM_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATERNAL_ORGANISM_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPaternalOrganismId())) {
            $xw->startElement(self::FIELD_PATERNAL_ORGANISM_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATERNAL_ORGANISM_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPaternalOrganismName())) {
            $xw->startElement(self::FIELD_PATERNAL_ORGANISM_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getHybridType())) {
            $xw->startElement(self::FIELD_HYBRID_TYPE);
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
        if (null !== ($v = $this->getMaternalOrganismId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MATERNAL_ORGANISM_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MATERNAL_ORGANISM_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaternalOrganismName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MATERNAL_ORGANISM_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MATERNAL_ORGANISM_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPaternalOrganismId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATERNAL_ORGANISM_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATERNAL_ORGANISM_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPaternalOrganismName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATERNAL_ORGANISM_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATERNAL_ORGANISM_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getHybridType())) {
            $out->{self::FIELD_HYBRID_TYPE} = $v;
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