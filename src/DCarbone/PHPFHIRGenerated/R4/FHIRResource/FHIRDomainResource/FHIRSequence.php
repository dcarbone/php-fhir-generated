<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSequenceType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Raw data describing a biological sequence.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSequence
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSequence extends FHIRDomainResource
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SEQUENCE;

    const FIELD_COORDINATE_SYSTEM = 'coordinateSystem';
    const FIELD_COORDINATE_SYSTEM_EXT = '_coordinateSystem';
    const FIELD_DEVICE = 'device';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_OBSERVED_SEQ = 'observedSeq';
    const FIELD_OBSERVED_SEQ_EXT = '_observedSeq';
    const FIELD_PATIENT = 'patient';
    const FIELD_PERFORMER = 'performer';
    const FIELD_POINTER = 'pointer';
    const FIELD_QUALITY = 'quality';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_READ_COVERAGE = 'readCoverage';
    const FIELD_READ_COVERAGE_EXT = '_readCoverage';
    const FIELD_REFERENCE_SEQ = 'referenceSeq';
    const FIELD_REPOSITORY = 'repository';
    const FIELD_SPECIMEN = 'specimen';
    const FIELD_STRUCTURE_VARIANT = 'structureVariant';
    const FIELD_TYPE = 'type';
    const FIELD_VARIANT = 'variant';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the sequence is numbered starting at (0-based numbering or coordinates,
     * inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive
     * start and inclusive end).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $coordinateSystem = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The method for sequencing, for example, chip information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $device = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Sequence that was observed. It is the result marked by referenceSeq along with
     * variant records on referenceSeq. This shall start from referenceSeq.windowStart
     * and end by referenceSeq.windowEnd.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $observedSeq = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient whose sequencing results are described by this resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $patient = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization or lab that should be responsible for this result.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $performer = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $pointer = [];
    /**
     * Raw data describing a biological sequence.
     *
     * An experimental feature attribute that defines the quality of the feature in a
     * quantitative way, such as a phred quality score
     * ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality[]
     */
    private $quality = [];
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The number of copies of the sequence of interest. (RNASeq).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    private $quantity = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Coverage (read depth or depth) is the average number of reads representing a
     * given nucleotide in the reconstructed sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $readCoverage = null;
    /**
     * Raw data describing a biological sequence.
     *
     * A sequence that is used as a reference to describe variants that are present in
     * a sequence analyzed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    private $referenceSeq = null;
    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository[]
     */
    private $repository = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specimen used for sequencing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $specimen = null;
    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant[]
     */
    private $structureVariant = [];
    /**
     * Type if a sequence -- DNA, RNA, or amino acid sequence.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSequenceType
     */
    private $type = null;
    /**
     * Raw data describing a biological sequence.
     *
     * The definition of variant here originates from Sequence ontology
     * ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)).
     * This element can represent amino acid or nucleic sequence change(including
     * insertion,deletion,SNP,etc.) It can represent some complex mutation or segment
     * variation with the assist of CIGAR string.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant[]
     */
    private $variant = [];

    /**
     * FHIRSequence Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequence::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COORDINATE_SYSTEM])) {
            $ext = (isset($data[self::FIELD_COORDINATE_SYSTEM_EXT]) && is_array($data[self::FIELD_COORDINATE_SYSTEM_EXT]))
                ? $data[self::FIELD_COORDINATE_SYSTEM_EXT]
                : null;
            if ($data[self::FIELD_COORDINATE_SYSTEM] instanceof FHIRInteger) {
                $this->setCoordinateSystem($data[self::FIELD_COORDINATE_SYSTEM]);
            } elseif ($ext && is_scalar($data[self::FIELD_COORDINATE_SYSTEM])) {
                $this->setCoordinateSystem(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_COORDINATE_SYSTEM]] + $ext));
            } else {
                $this->setCoordinateSystem(new FHIRInteger($data[self::FIELD_COORDINATE_SYSTEM]));
            }
        }
        if (isset($data[self::FIELD_DEVICE])) {
            if ($data[self::FIELD_DEVICE] instanceof FHIRReference) {
                $this->setDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->setDevice(new FHIRReference($data[self::FIELD_DEVICE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_OBSERVED_SEQ])) {
            $ext = (isset($data[self::FIELD_OBSERVED_SEQ_EXT]) && is_array($data[self::FIELD_OBSERVED_SEQ_EXT]))
                ? $data[self::FIELD_OBSERVED_SEQ_EXT]
                : null;
            if ($data[self::FIELD_OBSERVED_SEQ] instanceof FHIRString) {
                $this->setObservedSeq($data[self::FIELD_OBSERVED_SEQ]);
            } elseif ($ext && is_scalar($data[self::FIELD_OBSERVED_SEQ])) {
                $this->setObservedSeq(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_OBSERVED_SEQ]] + $ext));
            } else {
                $this->setObservedSeq(new FHIRString($data[self::FIELD_OBSERVED_SEQ]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_POINTER])) {
            if (is_array($data[self::FIELD_POINTER])) {
                foreach($data[self::FIELD_POINTER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPointer($v);
                    } else {
                        $this->addPointer(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_POINTER] instanceof FHIRReference) {
                $this->addPointer($data[self::FIELD_POINTER]);
            } else {
                $this->addPointer(new FHIRReference($data[self::FIELD_POINTER]));
            }
        }
        if (isset($data[self::FIELD_QUALITY])) {
            if (is_array($data[self::FIELD_QUALITY])) {
                foreach($data[self::FIELD_QUALITY] as $v) {
                    if ($v instanceof FHIRSequenceQuality) {
                        $this->addQuality($v);
                    } else {
                        $this->addQuality(new FHIRSequenceQuality($v));
                    }
                }
            } else if ($data[self::FIELD_QUALITY] instanceof FHIRSequenceQuality) {
                $this->addQuality($data[self::FIELD_QUALITY]);
            } else {
                $this->addQuality(new FHIRSequenceQuality($data[self::FIELD_QUALITY]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_READ_COVERAGE])) {
            $ext = (isset($data[self::FIELD_READ_COVERAGE_EXT]) && is_array($data[self::FIELD_READ_COVERAGE_EXT]))
                ? $data[self::FIELD_READ_COVERAGE_EXT]
                : null;
            if ($data[self::FIELD_READ_COVERAGE] instanceof FHIRInteger) {
                $this->setReadCoverage($data[self::FIELD_READ_COVERAGE]);
            } elseif ($ext && is_scalar($data[self::FIELD_READ_COVERAGE])) {
                $this->setReadCoverage(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_READ_COVERAGE]] + $ext));
            } else {
                $this->setReadCoverage(new FHIRInteger($data[self::FIELD_READ_COVERAGE]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_SEQ])) {
            if ($data[self::FIELD_REFERENCE_SEQ] instanceof FHIRSequenceReferenceSeq) {
                $this->setReferenceSeq($data[self::FIELD_REFERENCE_SEQ]);
            } else {
                $this->setReferenceSeq(new FHIRSequenceReferenceSeq($data[self::FIELD_REFERENCE_SEQ]));
            }
        }
        if (isset($data[self::FIELD_REPOSITORY])) {
            if (is_array($data[self::FIELD_REPOSITORY])) {
                foreach($data[self::FIELD_REPOSITORY] as $v) {
                    if ($v instanceof FHIRSequenceRepository) {
                        $this->addRepository($v);
                    } else {
                        $this->addRepository(new FHIRSequenceRepository($v));
                    }
                }
            } else if ($data[self::FIELD_REPOSITORY] instanceof FHIRSequenceRepository) {
                $this->addRepository($data[self::FIELD_REPOSITORY]);
            } else {
                $this->addRepository(new FHIRSequenceRepository($data[self::FIELD_REPOSITORY]));
            }
        }
        if (isset($data[self::FIELD_SPECIMEN])) {
            if ($data[self::FIELD_SPECIMEN] instanceof FHIRReference) {
                $this->setSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->setSpecimen(new FHIRReference($data[self::FIELD_SPECIMEN]));
            }
        }
        if (isset($data[self::FIELD_STRUCTURE_VARIANT])) {
            if (is_array($data[self::FIELD_STRUCTURE_VARIANT])) {
                foreach($data[self::FIELD_STRUCTURE_VARIANT] as $v) {
                    if ($v instanceof FHIRSequenceStructureVariant) {
                        $this->addStructureVariant($v);
                    } else {
                        $this->addStructureVariant(new FHIRSequenceStructureVariant($v));
                    }
                }
            } else if ($data[self::FIELD_STRUCTURE_VARIANT] instanceof FHIRSequenceStructureVariant) {
                $this->addStructureVariant($data[self::FIELD_STRUCTURE_VARIANT]);
            } else {
                $this->addStructureVariant(new FHIRSequenceStructureVariant($data[self::FIELD_STRUCTURE_VARIANT]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRSequenceType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRSequenceType($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_VARIANT])) {
            if (is_array($data[self::FIELD_VARIANT])) {
                foreach($data[self::FIELD_VARIANT] as $v) {
                    if ($v instanceof FHIRSequenceVariant) {
                        $this->addVariant($v);
                    } else {
                        $this->addVariant(new FHIRSequenceVariant($v));
                    }
                }
            } else if ($data[self::FIELD_VARIANT] instanceof FHIRSequenceVariant) {
                $this->addVariant($data[self::FIELD_VARIANT]);
            } else {
                $this->addVariant(new FHIRSequenceVariant($data[self::FIELD_VARIANT]));
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the sequence is numbered starting at (0-based numbering or coordinates,
     * inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive
     * start and inclusive end).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getCoordinateSystem()
    {
        return $this->coordinateSystem;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the sequence is numbered starting at (0-based numbering or coordinates,
     * inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive
     * start and inclusive end).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $coordinateSystem
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setCoordinateSystem($coordinateSystem = null)
    {
        if (null === $coordinateSystem) {
            $this->coordinateSystem = null;
            return $this;
        }
        if ($coordinateSystem instanceof FHIRInteger) {
            $this->coordinateSystem = $coordinateSystem;
            return $this;
        }
        $this->coordinateSystem = new FHIRInteger($coordinateSystem);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The method for sequencing, for example, chip information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The method for sequencing, for example, chip information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $device
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setDevice(FHIRReference $device = null)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Sequence that was observed. It is the result marked by referenceSeq along with
     * variant records on referenceSeq. This shall start from referenceSeq.windowStart
     * and end by referenceSeq.windowEnd.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getObservedSeq()
    {
        return $this->observedSeq;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Sequence that was observed. It is the result marked by referenceSeq along with
     * variant records on referenceSeq. This shall start from referenceSeq.windowStart
     * and end by referenceSeq.windowEnd.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $observedSeq
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setObservedSeq($observedSeq = null)
    {
        if (null === $observedSeq) {
            $this->observedSeq = null;
            return $this;
        }
        if ($observedSeq instanceof FHIRString) {
            $this->observedSeq = $observedSeq;
            return $this;
        }
        $this->observedSeq = new FHIRString($observedSeq);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient whose sequencing results are described by this resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient whose sequencing results are described by this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization or lab that should be responsible for this result.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization or lab that should be responsible for this result.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $performer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setPerformer(FHIRReference $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getPointer()
    {
        return $this->pointer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $pointer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function addPointer(FHIRReference $pointer = null)
    {
        $this->pointer[] = $pointer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $pointer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setPointer(array $pointer = [])
    {
        $this->pointer = [];
        if ([] === $pointer) {
            return $this;
        }
        foreach($pointer as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPointer($v);
            } else {
                $this->addPointer(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * An experimental feature attribute that defines the quality of the feature in a
     * quantitative way, such as a phred quality score
     * ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality[]
     */
    public function getQuality()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality $quality
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function addQuality(FHIRSequenceQuality $quality = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality[] $quality
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setQuality(array $quality = [])
    {
        $this->quality = [];
        if ([] === $quality) {
            return $this;
        }
        foreach($quality as $v) {
            if ($v instanceof FHIRSequenceQuality) {
                $this->addQuality($v);
            } else {
                $this->addQuality(new FHIRSequenceQuality($v));
            }
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The number of copies of the sequence of interest. (RNASeq).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The number of copies of the sequence of interest. (RNASeq).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $quantity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Coverage (read depth or depth) is the average number of reads representing a
     * given nucleotide in the reconstructed sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getReadCoverage()
    {
        return $this->readCoverage;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Coverage (read depth or depth) is the average number of reads representing a
     * given nucleotide in the reconstructed sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $readCoverage
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setReadCoverage($readCoverage = null)
    {
        if (null === $readCoverage) {
            $this->readCoverage = null;
            return $this;
        }
        if ($readCoverage instanceof FHIRInteger) {
            $this->readCoverage = $readCoverage;
            return $this;
        }
        $this->readCoverage = new FHIRInteger($readCoverage);
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * A sequence that is used as a reference to describe variants that are present in
     * a sequence analyzed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public function getReferenceSeq()
    {
        return $this->referenceSeq;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * A sequence that is used as a reference to describe variants that are present in
     * a sequence analyzed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq $referenceSeq
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setReferenceSeq(FHIRSequenceReferenceSeq $referenceSeq = null)
    {
        $this->referenceSeq = $referenceSeq;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository[]
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository $repository
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function addRepository(FHIRSequenceRepository $repository = null)
    {
        $this->repository[] = $repository;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository[] $repository
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setRepository(array $repository = [])
    {
        $this->repository = [];
        if ([] === $repository) {
            return $this;
        }
        foreach($repository as $v) {
            if ($v instanceof FHIRSequenceRepository) {
                $this->addRepository($v);
            } else {
                $this->addRepository(new FHIRSequenceRepository($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specimen used for sequencing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specimen used for sequencing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $specimen
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setSpecimen(FHIRReference $specimen = null)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant[]
     */
    public function getStructureVariant()
    {
        return $this->structureVariant;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant $structureVariant
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function addStructureVariant(FHIRSequenceStructureVariant $structureVariant = null)
    {
        $this->structureVariant[] = $structureVariant;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant[] $structureVariant
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setStructureVariant(array $structureVariant = [])
    {
        $this->structureVariant = [];
        if ([] === $structureVariant) {
            return $this;
        }
        foreach($structureVariant as $v) {
            if ($v instanceof FHIRSequenceStructureVariant) {
                $this->addStructureVariant($v);
            } else {
                $this->addStructureVariant(new FHIRSequenceStructureVariant($v));
            }
        }
        return $this;
    }

    /**
     * Type if a sequence -- DNA, RNA, or amino acid sequence.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSequenceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type if a sequence -- DNA, RNA, or amino acid sequence.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSequenceType $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setType(FHIRSequenceType $type = null)
    {
        $this->type = $type;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant[]
     */
    public function getVariant()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant $variant
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function addVariant(FHIRSequenceVariant $variant = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant[] $variant
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function setVariant(array $variant = [])
    {
        $this->variant = [];
        if ([] === $variant) {
            return $this;
        }
        foreach($variant as $v) {
            if ($v instanceof FHIRSequenceVariant) {
                $this->addVariant($v);
            } else {
                $this->addVariant(new FHIRSequenceVariant($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSequence::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSequence::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRSequence);
        } elseif (!is_object($type) || !($type instanceof FHIRSequence)) {
            throw new \RuntimeException(sprintf(
                'FHIRSequence::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSequence or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->coordinateSystem)) {
            $type->setCoordinateSystem((string)$attributes->coordinateSystem);
        }
        if (isset($children->coordinateSystem)) {
            $type->setCoordinateSystem(FHIRInteger::xmlUnserialize($children->coordinateSystem));
        }
        if (isset($children->device)) {
            $type->setDevice(FHIRReference::xmlUnserialize($children->device));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($attributes->observedSeq)) {
            $type->setObservedSeq((string)$attributes->observedSeq);
        }
        if (isset($children->observedSeq)) {
            $type->setObservedSeq(FHIRString::xmlUnserialize($children->observedSeq));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->performer)) {
            $type->setPerformer(FHIRReference::xmlUnserialize($children->performer));
        }
        if (isset($children->pointer)) {
            foreach($children->pointer as $child) {
                $type->addPointer(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->quality)) {
            foreach($children->quality as $child) {
                $type->addQuality(FHIRSequenceQuality::xmlUnserialize($child));
            }
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($attributes->readCoverage)) {
            $type->setReadCoverage((string)$attributes->readCoverage);
        }
        if (isset($children->readCoverage)) {
            $type->setReadCoverage(FHIRInteger::xmlUnserialize($children->readCoverage));
        }
        if (isset($children->referenceSeq)) {
            $type->setReferenceSeq(FHIRSequenceReferenceSeq::xmlUnserialize($children->referenceSeq));
        }
        if (isset($children->repository)) {
            foreach($children->repository as $child) {
                $type->addRepository(FHIRSequenceRepository::xmlUnserialize($child));
            }
        }
        if (isset($children->specimen)) {
            $type->setSpecimen(FHIRReference::xmlUnserialize($children->specimen));
        }
        if (isset($children->structureVariant)) {
            foreach($children->structureVariant as $child) {
                $type->addStructureVariant(FHIRSequenceStructureVariant::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRSequenceType::xmlUnserialize($children->type));
        }
        if (isset($children->variant)) {
            foreach($children->variant as $child) {
                $type->addVariant(FHIRSequenceVariant::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Sequence xmlns="http://hl7.org/fhir"></Sequence>');
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getCoordinateSystem())) {
            $sxe->addAttribute(self::FIELD_COORDINATE_SYSTEM, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COORDINATE_SYSTEM));
            }
        }

        if (null !== ($v = $this->getDevice())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getObservedSeq())) {
            $sxe->addAttribute(self::FIELD_OBSERVED_SEQ, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_OBSERVED_SEQ));
            }
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT));
        }

        if (null !== ($v = $this->getPerformer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER));
        }

        if ([] !== ($vs = $this->getPointer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_POINTER));
            }
        }

        if ([] !== ($vs = $this->getQuality())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_QUALITY));
            }
        }

        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY));
        }
        if (null !== ($v = $this->getReadCoverage())) {
            $sxe->addAttribute(self::FIELD_READ_COVERAGE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_READ_COVERAGE));
            }
        }

        if (null !== ($v = $this->getReferenceSeq())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_SEQ));
        }

        if ([] !== ($vs = $this->getRepository())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPOSITORY));
            }
        }

        if (null !== ($v = $this->getSpecimen())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIMEN));
        }

        if ([] !== ($vs = $this->getStructureVariant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STRUCTURE_VARIANT));
            }
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }

        if ([] !== ($vs = $this->getVariant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VARIANT));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCoordinateSystem())) {
            $a[self::FIELD_COORDINATE_SYSTEM] = (string)$v;
            $a[self::FIELD_COORDINATE_SYSTEM_EXT] = $v;
        }
        if (null !== ($v = $this->getDevice())) {
            $a[self::FIELD_DEVICE] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getObservedSeq())) {
            $a[self::FIELD_OBSERVED_SEQ] = (string)$v;
            $a[self::FIELD_OBSERVED_SEQ_EXT] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $v;
        }
        if ([] !== ($vs = $this->getPointer())) {
            $a[self::FIELD_POINTER] = $vs;
        }
        if ([] !== ($vs = $this->getQuality())) {
            $a[self::FIELD_QUALITY] = $vs;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getReadCoverage())) {
            $a[self::FIELD_READ_COVERAGE] = (string)$v;
            $a[self::FIELD_READ_COVERAGE_EXT] = $v;
        }
        if (null !== ($v = $this->getReferenceSeq())) {
            $a[self::FIELD_REFERENCE_SEQ] = $v;
        }
        if ([] !== ($vs = $this->getRepository())) {
            $a[self::FIELD_REPOSITORY] = $vs;
        }
        if (null !== ($v = $this->getSpecimen())) {
            $a[self::FIELD_SPECIMEN] = $v;
        }
        if ([] !== ($vs = $this->getStructureVariant())) {
            $a[self::FIELD_STRUCTURE_VARIANT] = $vs;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getVariant())) {
            $a[self::FIELD_VARIANT] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}