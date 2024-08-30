<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSequenceType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * Raw data describing a biological sequence.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMolecularSequence
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMolecularSequence extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_COORDINATE_SYSTEM = 'coordinateSystem';
    const FIELD_COORDINATE_SYSTEM_EXT = '_coordinateSystem';
    const FIELD_PATIENT = 'patient';
    const FIELD_SPECIMEN = 'specimen';
    const FIELD_DEVICE = 'device';
    const FIELD_PERFORMER = 'performer';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_REFERENCE_SEQ = 'referenceSeq';
    const FIELD_VARIANT = 'variant';
    const FIELD_OBSERVED_SEQ = 'observedSeq';
    const FIELD_OBSERVED_SEQ_EXT = '_observedSeq';
    const FIELD_QUALITY = 'quality';
    const FIELD_READ_COVERAGE = 'readCoverage';
    const FIELD_READ_COVERAGE_EXT = '_readCoverage';
    const FIELD_REPOSITORY = 'repository';
    const FIELD_POINTER = 'pointer';
    const FIELD_STRUCTURE_VARIANT = 'structureVariant';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * Type if a sequence -- DNA, RNA, or amino acid sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSequenceType
     */
    protected null|FHIRSequenceType $type = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the sequence is numbered starting at (0-based numbering or coordinates,
     * inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive
     * start and inclusive end).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $coordinateSystem = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient whose sequencing results are described by this resource.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specimen used for sequencing.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $specimen = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method for sequencing, for example, chip information.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $device = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization or lab that should be responsible for this result.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $performer = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of copies of the sequence of interest. (RNASeq).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $quantity = null;
    /**
     * Raw data describing a biological sequence.
     *
     * A sequence that is used as a reference to describe variants that are present in
     * a sequence analyzed.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq
     */
    protected null|FHIRMolecularSequenceReferenceSeq $referenceSeq = null;
    /**
     * Raw data describing a biological sequence.
     *
     * The definition of variant here originates from Sequence ontology
     * ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)).
     * This element can represent amino acid or nucleic sequence change(including
     * insertion,deletion,SNP,etc.) It can represent some complex mutation or segment
     * variation with the assist of CIGAR string.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant[]
     */
    protected null|array $variant = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence that was observed. It is the result marked by referenceSeq along with
     * variant records on referenceSeq. This shall start from referenceSeq.windowStart
     * and end by referenceSeq.windowEnd.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $observedSeq = null;
    /**
     * Raw data describing a biological sequence.
     *
     * An experimental feature attribute that defines the quality of the feature in a
     * quantitative way, such as a phred quality score
     * ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality[]
     */
    protected null|array $quality = [];
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Coverage (read depth or depth) is the average number of reads representing a
     * given nucleotide in the reconstructed sequence.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $readCoverage = null;
    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository[]
     */
    protected null|array $repository = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $pointer = [];
    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant[]
     */
    protected null|array $structureVariant = [];

    /**
     * Validation map for fields in type MolecularSequence
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_COORDINATE_SYSTEM => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRMolecularSequence Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSequenceType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRSequenceType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRSequenceType([FHIRSequenceType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRSequenceType($ext));
            } else {
                $this->setType(new FHIRSequenceType(null));
            }
        }
        if (array_key_exists(self::FIELD_COORDINATE_SYSTEM, $data) || array_key_exists(self::FIELD_COORDINATE_SYSTEM_EXT, $data)) {
            $value = $data[self::FIELD_COORDINATE_SYSTEM] ?? null;
            $ext = (isset($data[self::FIELD_COORDINATE_SYSTEM_EXT]) && is_array($data[self::FIELD_COORDINATE_SYSTEM_EXT])) ? $data[self::FIELD_COORDINATE_SYSTEM_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setCoordinateSystem($value);
                } else if (is_array($value)) {
                    $this->setCoordinateSystem(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setCoordinateSystem(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCoordinateSystem(new FHIRInteger($ext));
            } else {
                $this->setCoordinateSystem(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_PATIENT, $data)) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (array_key_exists(self::FIELD_SPECIMEN, $data)) {
            if ($data[self::FIELD_SPECIMEN] instanceof FHIRReference) {
                $this->setSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->setSpecimen(new FHIRReference($data[self::FIELD_SPECIMEN]));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE, $data)) {
            if ($data[self::FIELD_DEVICE] instanceof FHIRReference) {
                $this->setDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->setDevice(new FHIRReference($data[self::FIELD_DEVICE]));
            }
        }
        if (array_key_exists(self::FIELD_PERFORMER, $data)) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (array_key_exists(self::FIELD_QUANTITY, $data)) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE_SEQ, $data)) {
            if ($data[self::FIELD_REFERENCE_SEQ] instanceof FHIRMolecularSequenceReferenceSeq) {
                $this->setReferenceSeq($data[self::FIELD_REFERENCE_SEQ]);
            } else {
                $this->setReferenceSeq(new FHIRMolecularSequenceReferenceSeq($data[self::FIELD_REFERENCE_SEQ]));
            }
        }
        if (array_key_exists(self::FIELD_VARIANT, $data)) {
            if (is_array($data[self::FIELD_VARIANT])) {
                foreach($data[self::FIELD_VARIANT] as $v) {
                    if ($v instanceof FHIRMolecularSequenceVariant) {
                        $this->addVariant($v);
                    } else {
                        $this->addVariant(new FHIRMolecularSequenceVariant($v));
                    }
                }
            } elseif ($data[self::FIELD_VARIANT] instanceof FHIRMolecularSequenceVariant) {
                $this->addVariant($data[self::FIELD_VARIANT]);
            } else {
                $this->addVariant(new FHIRMolecularSequenceVariant($data[self::FIELD_VARIANT]));
            }
        }
        if (array_key_exists(self::FIELD_OBSERVED_SEQ, $data) || array_key_exists(self::FIELD_OBSERVED_SEQ_EXT, $data)) {
            $value = $data[self::FIELD_OBSERVED_SEQ] ?? null;
            $ext = (isset($data[self::FIELD_OBSERVED_SEQ_EXT]) && is_array($data[self::FIELD_OBSERVED_SEQ_EXT])) ? $data[self::FIELD_OBSERVED_SEQ_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setObservedSeq($value);
                } else if (is_array($value)) {
                    $this->setObservedSeq(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setObservedSeq(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setObservedSeq(new FHIRString($ext));
            } else {
                $this->setObservedSeq(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_QUALITY, $data)) {
            if (is_array($data[self::FIELD_QUALITY])) {
                foreach($data[self::FIELD_QUALITY] as $v) {
                    if ($v instanceof FHIRMolecularSequenceQuality) {
                        $this->addQuality($v);
                    } else {
                        $this->addQuality(new FHIRMolecularSequenceQuality($v));
                    }
                }
            } elseif ($data[self::FIELD_QUALITY] instanceof FHIRMolecularSequenceQuality) {
                $this->addQuality($data[self::FIELD_QUALITY]);
            } else {
                $this->addQuality(new FHIRMolecularSequenceQuality($data[self::FIELD_QUALITY]));
            }
        }
        if (array_key_exists(self::FIELD_READ_COVERAGE, $data) || array_key_exists(self::FIELD_READ_COVERAGE_EXT, $data)) {
            $value = $data[self::FIELD_READ_COVERAGE] ?? null;
            $ext = (isset($data[self::FIELD_READ_COVERAGE_EXT]) && is_array($data[self::FIELD_READ_COVERAGE_EXT])) ? $data[self::FIELD_READ_COVERAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setReadCoverage($value);
                } else if (is_array($value)) {
                    $this->setReadCoverage(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setReadCoverage(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReadCoverage(new FHIRInteger($ext));
            } else {
                $this->setReadCoverage(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_REPOSITORY, $data)) {
            if (is_array($data[self::FIELD_REPOSITORY])) {
                foreach($data[self::FIELD_REPOSITORY] as $v) {
                    if ($v instanceof FHIRMolecularSequenceRepository) {
                        $this->addRepository($v);
                    } else {
                        $this->addRepository(new FHIRMolecularSequenceRepository($v));
                    }
                }
            } elseif ($data[self::FIELD_REPOSITORY] instanceof FHIRMolecularSequenceRepository) {
                $this->addRepository($data[self::FIELD_REPOSITORY]);
            } else {
                $this->addRepository(new FHIRMolecularSequenceRepository($data[self::FIELD_REPOSITORY]));
            }
        }
        if (array_key_exists(self::FIELD_POINTER, $data)) {
            if (is_array($data[self::FIELD_POINTER])) {
                foreach($data[self::FIELD_POINTER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPointer($v);
                    } else {
                        $this->addPointer(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_POINTER] instanceof FHIRReference) {
                $this->addPointer($data[self::FIELD_POINTER]);
            } else {
                $this->addPointer(new FHIRReference($data[self::FIELD_POINTER]));
            }
        }
        if (array_key_exists(self::FIELD_STRUCTURE_VARIANT, $data)) {
            if (is_array($data[self::FIELD_STRUCTURE_VARIANT])) {
                foreach($data[self::FIELD_STRUCTURE_VARIANT] as $v) {
                    if ($v instanceof FHIRMolecularSequenceStructureVariant) {
                        $this->addStructureVariant($v);
                    } else {
                        $this->addStructureVariant(new FHIRMolecularSequenceStructureVariant($v));
                    }
                }
            } elseif ($data[self::FIELD_STRUCTURE_VARIANT] instanceof FHIRMolecularSequenceStructureVariant) {
                $this->addStructureVariant($data[self::FIELD_STRUCTURE_VARIANT]);
            } else {
                $this->addStructureVariant(new FHIRMolecularSequenceStructureVariant($data[self::FIELD_STRUCTURE_VARIANT]));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * Type if a sequence -- DNA, RNA, or amino acid sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSequenceType
     */
    public function getType(): null|FHIRSequenceType
    {
        return $this->type;
    }

    /**
     * Type if a sequence -- DNA, RNA, or amino acid sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSequenceType $type
     * @return static
     */
    public function setType(null|FHIRSequenceType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRSequenceType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the sequence is numbered starting at (0-based numbering or coordinates,
     * inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive
     * start and inclusive end).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getCoordinateSystem(): null|FHIRInteger
    {
        return $this->coordinateSystem;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the sequence is numbered starting at (0-based numbering or coordinates,
     * inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive
     * start and inclusive end).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $coordinateSystem
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCoordinateSystem(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $coordinateSystem = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $coordinateSystem && !($coordinateSystem instanceof FHIRInteger)) {
            $coordinateSystem = new FHIRInteger($coordinateSystem);
        }
        $this->_trackValueSet($this->coordinateSystem, $coordinateSystem);
        if (!isset($this->_xmlLocations[self::FIELD_COORDINATE_SYSTEM])) {
            $this->_xmlLocations[self::FIELD_COORDINATE_SYSTEM] = [];
        }
        $this->_xmlLocations[self::FIELD_COORDINATE_SYSTEM][0] = $xmlLocation;
        $this->coordinateSystem = $coordinateSystem;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient whose sequencing results are described by this resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient whose sequencing results are described by this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRReference();
        }
        $this->_trackValueSet($this->patient, $patient);
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specimen used for sequencing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSpecimen(): null|FHIRReference
    {
        return $this->specimen;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specimen used for sequencing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $specimen
     * @return static
     */
    public function setSpecimen(null|FHIRReference $specimen = null): self
    {
        if (null === $specimen) {
            $specimen = new FHIRReference();
        }
        $this->_trackValueSet($this->specimen, $specimen);
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method for sequencing, for example, chip information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getDevice(): null|FHIRReference
    {
        return $this->device;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method for sequencing, for example, chip information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $device
     * @return static
     */
    public function setDevice(null|FHIRReference $device = null): self
    {
        if (null === $device) {
            $device = new FHIRReference();
        }
        $this->_trackValueSet($this->device, $device);
        $this->device = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization or lab that should be responsible for this result.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPerformer(): null|FHIRReference
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization or lab that should be responsible for this result.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function setPerformer(null|FHIRReference $performer = null): self
    {
        if (null === $performer) {
            $performer = new FHIRReference();
        }
        $this->_trackValueSet($this->performer, $performer);
        $this->performer = $performer;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of copies of the sequence of interest. (RNASeq).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of copies of the sequence of interest. (RNASeq).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity = null): self
    {
        if (null === $quantity) {
            $quantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->quantity, $quantity);
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * A sequence that is used as a reference to describe variants that are present in
     * a sequence analyzed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq
     */
    public function getReferenceSeq(): null|FHIRMolecularSequenceReferenceSeq
    {
        return $this->referenceSeq;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * A sequence that is used as a reference to describe variants that are present in
     * a sequence analyzed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq $referenceSeq
     * @return static
     */
    public function setReferenceSeq(null|FHIRMolecularSequenceReferenceSeq $referenceSeq = null): self
    {
        if (null === $referenceSeq) {
            $referenceSeq = new FHIRMolecularSequenceReferenceSeq();
        }
        $this->_trackValueSet($this->referenceSeq, $referenceSeq);
        $this->referenceSeq = $referenceSeq;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * The definition of variant here originates from Sequence ontology
     * ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)).
     * This element can represent amino acid or nucleic sequence change(including
     * insertion,deletion,SNP,etc.) It can represent some complex mutation or segment
     * variation with the assist of CIGAR string.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant[]
     */
    public function getVariant(): null|array
    {
        return $this->variant;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * The definition of variant here originates from Sequence ontology
     * ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)).
     * This element can represent amino acid or nucleic sequence change(including
     * insertion,deletion,SNP,etc.) It can represent some complex mutation or segment
     * variation with the assist of CIGAR string.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant $variant
     * @return static
     */
    public function addVariant(null|FHIRMolecularSequenceVariant $variant = null): self
    {
        if (null === $variant) {
            $variant = new FHIRMolecularSequenceVariant();
        }
        $this->_trackValueAdded();
        $this->variant[] = $variant;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * The definition of variant here originates from Sequence ontology
     * ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)).
     * This element can represent amino acid or nucleic sequence change(including
     * insertion,deletion,SNP,etc.) It can represent some complex mutation or segment
     * variation with the assist of CIGAR string.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant ...$variant
     * @return static
     */
    public function setVariant(FHIRMolecularSequenceVariant ...$variant): self
    {
        if ([] !== $this->variant) {
            $this->_trackValuesRemoved(count($this->variant));
            $this->variant = [];
        }
        if ([] === $variant) {
            return $this;
        }
        foreach($variant as $v) {
            $this->addVariant($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence that was observed. It is the result marked by referenceSeq along with
     * variant records on referenceSeq. This shall start from referenceSeq.windowStart
     * and end by referenceSeq.windowEnd.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getObservedSeq(): null|FHIRString
    {
        return $this->observedSeq;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence that was observed. It is the result marked by referenceSeq along with
     * variant records on referenceSeq. This shall start from referenceSeq.windowStart
     * and end by referenceSeq.windowEnd.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $observedSeq
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setObservedSeq(null|string|FHIRStringPrimitive|FHIRString $observedSeq = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $observedSeq && !($observedSeq instanceof FHIRString)) {
            $observedSeq = new FHIRString($observedSeq);
        }
        $this->_trackValueSet($this->observedSeq, $observedSeq);
        if (!isset($this->_xmlLocations[self::FIELD_OBSERVED_SEQ])) {
            $this->_xmlLocations[self::FIELD_OBSERVED_SEQ] = [];
        }
        $this->_xmlLocations[self::FIELD_OBSERVED_SEQ][0] = $xmlLocation;
        $this->observedSeq = $observedSeq;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * An experimental feature attribute that defines the quality of the feature in a
     * quantitative way, such as a phred quality score
     * ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality[]
     */
    public function getQuality(): null|array
    {
        return $this->quality;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * An experimental feature attribute that defines the quality of the feature in a
     * quantitative way, such as a phred quality score
     * ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality $quality
     * @return static
     */
    public function addQuality(null|FHIRMolecularSequenceQuality $quality = null): self
    {
        if (null === $quality) {
            $quality = new FHIRMolecularSequenceQuality();
        }
        $this->_trackValueAdded();
        $this->quality[] = $quality;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * An experimental feature attribute that defines the quality of the feature in a
     * quantitative way, such as a phred quality score
     * ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality ...$quality
     * @return static
     */
    public function setQuality(FHIRMolecularSequenceQuality ...$quality): self
    {
        if ([] !== $this->quality) {
            $this->_trackValuesRemoved(count($this->quality));
            $this->quality = [];
        }
        if ([] === $quality) {
            return $this;
        }
        foreach($quality as $v) {
            $this->addQuality($v);
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Coverage (read depth or depth) is the average number of reads representing a
     * given nucleotide in the reconstructed sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getReadCoverage(): null|FHIRInteger
    {
        return $this->readCoverage;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Coverage (read depth or depth) is the average number of reads representing a
     * given nucleotide in the reconstructed sequence.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $readCoverage
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setReadCoverage(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $readCoverage = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $readCoverage && !($readCoverage instanceof FHIRInteger)) {
            $readCoverage = new FHIRInteger($readCoverage);
        }
        $this->_trackValueSet($this->readCoverage, $readCoverage);
        if (!isset($this->_xmlLocations[self::FIELD_READ_COVERAGE])) {
            $this->_xmlLocations[self::FIELD_READ_COVERAGE] = [];
        }
        $this->_xmlLocations[self::FIELD_READ_COVERAGE][0] = $xmlLocation;
        $this->readCoverage = $readCoverage;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository[]
     */
    public function getRepository(): null|array
    {
        return $this->repository;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository $repository
     * @return static
     */
    public function addRepository(null|FHIRMolecularSequenceRepository $repository = null): self
    {
        if (null === $repository) {
            $repository = new FHIRMolecularSequenceRepository();
        }
        $this->_trackValueAdded();
        $this->repository[] = $repository;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository ...$repository
     * @return static
     */
    public function setRepository(FHIRMolecularSequenceRepository ...$repository): self
    {
        if ([] !== $this->repository) {
            $this->_trackValuesRemoved(count($this->repository));
            $this->repository = [];
        }
        if ([] === $repository) {
            return $this;
        }
        foreach($repository as $v) {
            $this->addRepository($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getPointer(): null|array
    {
        return $this->pointer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $pointer
     * @return static
     */
    public function addPointer(null|FHIRReference $pointer = null): self
    {
        if (null === $pointer) {
            $pointer = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->pointer[] = $pointer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference ...$pointer
     * @return static
     */
    public function setPointer(FHIRReference ...$pointer): self
    {
        if ([] !== $this->pointer) {
            $this->_trackValuesRemoved(count($this->pointer));
            $this->pointer = [];
        }
        if ([] === $pointer) {
            return $this;
        }
        foreach($pointer as $v) {
            $this->addPointer($v);
        }
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant[]
     */
    public function getStructureVariant(): null|array
    {
        return $this->structureVariant;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant $structureVariant
     * @return static
     */
    public function addStructureVariant(null|FHIRMolecularSequenceStructureVariant $structureVariant = null): self
    {
        if (null === $structureVariant) {
            $structureVariant = new FHIRMolecularSequenceStructureVariant();
        }
        $this->_trackValueAdded();
        $this->structureVariant[] = $structureVariant;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant ...$structureVariant
     * @return static
     */
    public function setStructureVariant(FHIRMolecularSequenceStructureVariant ...$structureVariant): self
    {
        if ([] !== $this->structureVariant) {
            $this->_trackValuesRemoved(count($this->structureVariant));
            $this->structureVariant = [];
        }
        if ([] === $structureVariant) {
            return $this;
        }
        foreach($structureVariant as $v) {
            $this->addStructureVariant($v);
        }
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCoordinateSystem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COORDINATE_SYSTEM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSpecimen())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPECIMEN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDevice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceSeq())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_SEQ] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getVariant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VARIANT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getObservedSeq())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OBSERVED_SEQ] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getQuality())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_QUALITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getReadCoverage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_READ_COVERAGE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRepository())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPOSITORY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPointer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_POINTER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getStructureVariant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STRUCTURE_VARIANT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COORDINATE_SYSTEM])) {
            $v = $this->getCoordinateSystem();
            foreach($validationRules[self::FIELD_COORDINATE_SYSTEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_COORDINATE_SYSTEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COORDINATE_SYSTEM])) {
                        $errs[self::FIELD_COORDINATE_SYSTEM] = [];
                    }
                    $errs[self::FIELD_COORDINATE_SYSTEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIMEN])) {
            $v = $this->getSpecimen();
            foreach($validationRules[self::FIELD_SPECIMEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_SPECIMEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIMEN])) {
                        $errs[self::FIELD_SPECIMEN] = [];
                    }
                    $errs[self::FIELD_SPECIMEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_SEQ])) {
            $v = $this->getReferenceSeq();
            foreach($validationRules[self::FIELD_REFERENCE_SEQ] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_REFERENCE_SEQ, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_SEQ])) {
                        $errs[self::FIELD_REFERENCE_SEQ] = [];
                    }
                    $errs[self::FIELD_REFERENCE_SEQ][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIANT])) {
            $v = $this->getVariant();
            foreach($validationRules[self::FIELD_VARIANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_VARIANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIANT])) {
                        $errs[self::FIELD_VARIANT] = [];
                    }
                    $errs[self::FIELD_VARIANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OBSERVED_SEQ])) {
            $v = $this->getObservedSeq();
            foreach($validationRules[self::FIELD_OBSERVED_SEQ] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_OBSERVED_SEQ, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OBSERVED_SEQ])) {
                        $errs[self::FIELD_OBSERVED_SEQ] = [];
                    }
                    $errs[self::FIELD_OBSERVED_SEQ][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUALITY])) {
            $v = $this->getQuality();
            foreach($validationRules[self::FIELD_QUALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_QUALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUALITY])) {
                        $errs[self::FIELD_QUALITY] = [];
                    }
                    $errs[self::FIELD_QUALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_READ_COVERAGE])) {
            $v = $this->getReadCoverage();
            foreach($validationRules[self::FIELD_READ_COVERAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_READ_COVERAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_READ_COVERAGE])) {
                        $errs[self::FIELD_READ_COVERAGE] = [];
                    }
                    $errs[self::FIELD_READ_COVERAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPOSITORY])) {
            $v = $this->getRepository();
            foreach($validationRules[self::FIELD_REPOSITORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_REPOSITORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPOSITORY])) {
                        $errs[self::FIELD_REPOSITORY] = [];
                    }
                    $errs[self::FIELD_REPOSITORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POINTER])) {
            $v = $this->getPointer();
            foreach($validationRules[self::FIELD_POINTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_POINTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POINTER])) {
                        $errs[self::FIELD_POINTER] = [];
                    }
                    $errs[self::FIELD_POINTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE_VARIANT])) {
            $v = $this->getStructureVariant();
            foreach($validationRules[self::FIELD_STRUCTURE_VARIANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE, self::FIELD_STRUCTURE_VARIANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE_VARIANT])) {
                        $errs[self::FIELD_STRUCTURE_VARIANT] = [];
                    }
                    $errs[self::FIELD_STRUCTURE_VARIANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMolecularSequence $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMolecularSequence
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
        } else if (!($type instanceof FHIRMolecularSequence)) {
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
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRSequenceType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COORDINATE_SYSTEM === $childName) {
                $type->setCoordinateSystem(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATIENT === $childName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPECIMEN === $childName) {
                $type->setSpecimen(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEVICE === $childName) {
                $type->setDevice(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PERFORMER === $childName) {
                $type->setPerformer(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_QUANTITY === $childName) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REFERENCE_SEQ === $childName) {
                $type->setReferenceSeq(FHIRMolecularSequenceReferenceSeq::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VARIANT === $childName) {
                $type->addVariant(FHIRMolecularSequenceVariant::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OBSERVED_SEQ === $childName) {
                $type->setObservedSeq(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_QUALITY === $childName) {
                $type->addQuality(FHIRMolecularSequenceQuality::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_READ_COVERAGE === $childName) {
                $type->setReadCoverage(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REPOSITORY === $childName) {
                $type->addRepository(FHIRMolecularSequenceRepository::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_POINTER === $childName) {
                $type->addPointer(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STRUCTURE_VARIANT === $childName) {
                $type->addStructureVariant(FHIRMolecularSequenceStructureVariant::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_COORDINATE_SYSTEM])) {
            $pt = $type->getCoordinateSystem();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COORDINATE_SYSTEM], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCoordinateSystem((string)$attributes[self::FIELD_COORDINATE_SYSTEM], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OBSERVED_SEQ])) {
            $pt = $type->getObservedSeq();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_OBSERVED_SEQ], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setObservedSeq((string)$attributes[self::FIELD_OBSERVED_SEQ], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_READ_COVERAGE])) {
            $pt = $type->getReadCoverage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_READ_COVERAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setReadCoverage((string)$attributes[self::FIELD_READ_COVERAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'MolecularSequence', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_COORDINATE_SYSTEM] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCoordinateSystem())) {
            $xw->writeAttribute(self::FIELD_COORDINATE_SYSTEM, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_OBSERVED_SEQ] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getObservedSeq())) {
            $xw->writeAttribute(self::FIELD_OBSERVED_SEQ, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_READ_COVERAGE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getReadCoverage())) {
            $xw->writeAttribute(self::FIELD_READ_COVERAGE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_COORDINATE_SYSTEM] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCoordinateSystem())) {
            $xw->startElement(self::FIELD_COORDINATE_SYSTEM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatient())) {
            $xw->startElement(self::FIELD_PATIENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSpecimen())) {
            $xw->startElement(self::FIELD_SPECIMEN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDevice())) {
            $xw->startElement(self::FIELD_DEVICE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPerformer())) {
            $xw->startElement(self::FIELD_PERFORMER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getQuantity())) {
            $xw->startElement(self::FIELD_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getReferenceSeq())) {
            $xw->startElement(self::FIELD_REFERENCE_SEQ);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getVariant() as $v) {
            $xw->startElement(self::FIELD_VARIANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_OBSERVED_SEQ] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getObservedSeq())) {
            $xw->startElement(self::FIELD_OBSERVED_SEQ);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getQuality() as $v) {
            $xw->startElement(self::FIELD_QUALITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_READ_COVERAGE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getReadCoverage())) {
            $xw->startElement(self::FIELD_READ_COVERAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRepository() as $v) {
            $xw->startElement(self::FIELD_REPOSITORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPointer() as $v) {
            $xw->startElement(self::FIELD_POINTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getStructureVariant() as $v) {
            $xw->startElement(self::FIELD_STRUCTURE_VARIANT);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSequenceType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCoordinateSystem())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COORDINATE_SYSTEM} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COORDINATE_SYSTEM_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getSpecimen())) {
            $out->{self::FIELD_SPECIMEN} = $v;
        }
        if (null !== ($v = $this->getDevice())) {
            $out->{self::FIELD_DEVICE} = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $out->{self::FIELD_PERFORMER} = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $out->{self::FIELD_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getReferenceSeq())) {
            $out->{self::FIELD_REFERENCE_SEQ} = $v;
        }
        if ([] !== ($vs = $this->getVariant())) {
            $out->{self::FIELD_VARIANT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_VARIANT}[] = $v;
            }
        }
        if (null !== ($v = $this->getObservedSeq())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OBSERVED_SEQ} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OBSERVED_SEQ_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getQuality())) {
            $out->{self::FIELD_QUALITY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_QUALITY}[] = $v;
            }
        }
        if (null !== ($v = $this->getReadCoverage())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_READ_COVERAGE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_READ_COVERAGE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getRepository())) {
            $out->{self::FIELD_REPOSITORY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REPOSITORY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPointer())) {
            $out->{self::FIELD_POINTER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_POINTER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getStructureVariant())) {
            $out->{self::FIELD_STRUCTURE_VARIANT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_STRUCTURE_VARIANT}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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