<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSequenceType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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
    const FIELD_TYPE_EXT = '_type';
    const FIELD_VARIANT = 'variant';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the sequence is numbered starting at (0-based numbering or coordinates,
     * inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive
     * start and inclusive end).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $coordinateSystem = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method for sequencing, for example, chip information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $device = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence that was observed. It is the result marked by referenceSeq along with
     * variant records on referenceSeq. This shall start from referenceSeq.windowStart
     * and end by referenceSeq.windowEnd.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $observedSeq = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient whose sequencing results are described by this resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization or lab that should be responsible for this result.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $performer = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $pointer = [];

    /**
     * Raw data describing a biological sequence.
     *
     * An experimental feature attribute that defines the quality of the feature in a
     * quantitative way, such as a phred quality score
     * ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality[]
     */
    protected $quality = [];

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of copies of the sequence of interest. (RNASeq).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $quantity = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Coverage (read depth or depth) is the average number of reads representing a
     * given nucleotide in the reconstructed sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $readCoverage = null;

    /**
     * Raw data describing a biological sequence.
     *
     * A sequence that is used as a reference to describe variants that are present in
     * a sequence analyzed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq
     */
    protected $referenceSeq = null;

    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository[]
     */
    protected $repository = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specimen used for sequencing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $specimen = null;

    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant[]
     */
    protected $structureVariant = [];

    /**
     * Type if a sequence -- DNA, RNA, or amino acid sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSequenceType
     */
    protected $type = null;

    /**
     * Raw data describing a biological sequence.
     *
     * The definition of variant here originates from Sequence ontology
     * ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)).
     * This element can represent amino acid or nucleic sequence change(including
     * insertion,deletion,SNP,etc.) It can represent some complex mutation or segment
     * variation with the assist of CIGAR string.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant[]
     */
    protected $variant = [];

    /**
     * Validation map for fields in type MolecularSequence
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMolecularSequence Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMolecularSequence::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COORDINATE_SYSTEM]) || isset($data[self::FIELD_COORDINATE_SYSTEM_EXT])) {
            if (isset($data[self::FIELD_COORDINATE_SYSTEM])) {
                $value = $data[self::FIELD_COORDINATE_SYSTEM];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COORDINATE_SYSTEM_EXT]) && is_array($data[self::FIELD_COORDINATE_SYSTEM_EXT])) {
                $ext = $data[self::FIELD_COORDINATE_SYSTEM_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setCoordinateSystem($value);
                } else if (is_array($value)) {
                    $this->setCoordinateSystem(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setCoordinateSystem(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCoordinateSystem(new FHIRInteger($ext));
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
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_OBSERVED_SEQ]) || isset($data[self::FIELD_OBSERVED_SEQ_EXT])) {
            if (isset($data[self::FIELD_OBSERVED_SEQ])) {
                $value = $data[self::FIELD_OBSERVED_SEQ];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OBSERVED_SEQ_EXT]) && is_array($data[self::FIELD_OBSERVED_SEQ_EXT])) {
                $ext = $data[self::FIELD_OBSERVED_SEQ_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setObservedSeq($value);
                } else if (is_array($value)) {
                    $this->setObservedSeq(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setObservedSeq(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setObservedSeq(new FHIRString($ext));
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMolecularSequenceQuality) {
                        $this->addQuality($v);
                    } else {
                        $this->addQuality(new FHIRMolecularSequenceQuality($v));
                    }
                }
            } else if ($data[self::FIELD_QUALITY] instanceof FHIRMolecularSequenceQuality) {
                $this->addQuality($data[self::FIELD_QUALITY]);
            } else {
                $this->addQuality(new FHIRMolecularSequenceQuality($data[self::FIELD_QUALITY]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_READ_COVERAGE]) || isset($data[self::FIELD_READ_COVERAGE_EXT])) {
            if (isset($data[self::FIELD_READ_COVERAGE])) {
                $value = $data[self::FIELD_READ_COVERAGE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_READ_COVERAGE_EXT]) && is_array($data[self::FIELD_READ_COVERAGE_EXT])) {
                $ext = $data[self::FIELD_READ_COVERAGE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setReadCoverage($value);
                } else if (is_array($value)) {
                    $this->setReadCoverage(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setReadCoverage(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setReadCoverage(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_SEQ])) {
            if ($data[self::FIELD_REFERENCE_SEQ] instanceof FHIRMolecularSequenceReferenceSeq) {
                $this->setReferenceSeq($data[self::FIELD_REFERENCE_SEQ]);
            } else {
                $this->setReferenceSeq(new FHIRMolecularSequenceReferenceSeq($data[self::FIELD_REFERENCE_SEQ]));
            }
        }
        if (isset($data[self::FIELD_REPOSITORY])) {
            if (is_array($data[self::FIELD_REPOSITORY])) {
                foreach($data[self::FIELD_REPOSITORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMolecularSequenceRepository) {
                        $this->addRepository($v);
                    } else {
                        $this->addRepository(new FHIRMolecularSequenceRepository($v));
                    }
                }
            } else if ($data[self::FIELD_REPOSITORY] instanceof FHIRMolecularSequenceRepository) {
                $this->addRepository($data[self::FIELD_REPOSITORY]);
            } else {
                $this->addRepository(new FHIRMolecularSequenceRepository($data[self::FIELD_REPOSITORY]));
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
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMolecularSequenceStructureVariant) {
                        $this->addStructureVariant($v);
                    } else {
                        $this->addStructureVariant(new FHIRMolecularSequenceStructureVariant($v));
                    }
                }
            } else if ($data[self::FIELD_STRUCTURE_VARIANT] instanceof FHIRMolecularSequenceStructureVariant) {
                $this->addStructureVariant($data[self::FIELD_STRUCTURE_VARIANT]);
            } else {
                $this->addStructureVariant(new FHIRMolecularSequenceStructureVariant($data[self::FIELD_STRUCTURE_VARIANT]));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            if (isset($data[self::FIELD_TYPE])) {
                $value = $data[self::FIELD_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) {
                $ext = $data[self::FIELD_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRSequenceType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRSequenceType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRSequenceType([FHIRSequenceType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setType(new FHIRSequenceType($ext));
            }
        }
        if (isset($data[self::FIELD_VARIANT])) {
            if (is_array($data[self::FIELD_VARIANT])) {
                foreach($data[self::FIELD_VARIANT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMolecularSequenceVariant) {
                        $this->addVariant($v);
                    } else {
                        $this->addVariant(new FHIRMolecularSequenceVariant($v));
                    }
                }
            } else if ($data[self::FIELD_VARIANT] instanceof FHIRMolecularSequenceVariant) {
                $this->addVariant($data[self::FIELD_VARIANT]);
            } else {
                $this->addVariant(new FHIRMolecularSequenceVariant($data[self::FIELD_VARIANT]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<MolecularSequence{$xmlns}></MolecularSequence>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
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
    public function getCoordinateSystem()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $coordinateSystem
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method for sequencing, for example, chip information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $device
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence that was observed. It is the result marked by referenceSeq along with
     * variant records on referenceSeq. This shall start from referenceSeq.windowStart
     * and end by referenceSeq.windowEnd.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $observedSeq
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient whose sequencing results are described by this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
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
    public function getPerformer()
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
    public function setPerformer(FHIRReference $performer = null)
    {
        $this->performer = $performer;
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
    public function getPointer()
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
    public function addPointer(FHIRReference $pointer = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $pointer
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality $quality
     * @return static
     */
    public function addQuality(FHIRMolecularSequenceQuality $quality = null)
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality[] $quality
     * @return static
     */
    public function setQuality(array $quality = [])
    {
        $this->quality = [];
        if ([] === $quality) {
            return $this;
        }
        foreach($quality as $v) {
            if ($v instanceof FHIRMolecularSequenceQuality) {
                $this->addQuality($v);
            } else {
                $this->addQuality(new FHIRMolecularSequenceQuality($v));
            }
        }
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
    public function getQuantity()
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
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        $this->quantity = $quantity;
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
    public function getReadCoverage()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $readCoverage
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq $referenceSeq
     * @return static
     */
    public function setReferenceSeq(FHIRMolecularSequenceReferenceSeq $referenceSeq = null)
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository $repository
     * @return static
     */
    public function addRepository(FHIRMolecularSequenceRepository $repository = null)
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository[] $repository
     * @return static
     */
    public function setRepository(array $repository = [])
    {
        $this->repository = [];
        if ([] === $repository) {
            return $this;
        }
        foreach($repository as $v) {
            if ($v instanceof FHIRMolecularSequenceRepository) {
                $this->addRepository($v);
            } else {
                $this->addRepository(new FHIRMolecularSequenceRepository($v));
            }
        }
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
    public function getSpecimen()
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant $structureVariant
     * @return static
     */
    public function addStructureVariant(FHIRMolecularSequenceStructureVariant $structureVariant = null)
    {
        $this->structureVariant[] = $structureVariant;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant[] $structureVariant
     * @return static
     */
    public function setStructureVariant(array $structureVariant = [])
    {
        $this->structureVariant = [];
        if ([] === $structureVariant) {
            return $this;
        }
        foreach($structureVariant as $v) {
            if ($v instanceof FHIRMolecularSequenceStructureVariant) {
                $this->addStructureVariant($v);
            } else {
                $this->addStructureVariant(new FHIRMolecularSequenceStructureVariant($v));
            }
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
    public function getType()
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant $variant
     * @return static
     */
    public function addVariant(FHIRMolecularSequenceVariant $variant = null)
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant[] $variant
     * @return static
     */
    public function setVariant(array $variant = [])
    {
        $this->variant = [];
        if ([] === $variant) {
            return $this;
        }
        foreach($variant as $v) {
            if ($v instanceof FHIRMolecularSequenceVariant) {
                $this->addVariant($v);
            } else {
                $this->addVariant(new FHIRMolecularSequenceVariant($v));
            }
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCoordinateSystem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COORDINATE_SYSTEM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDevice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getObservedSeq())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OBSERVED_SEQ] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPointer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_POINTER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getQuality())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_QUALITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReadCoverage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_READ_COVERAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceSeq())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_SEQ] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRepository())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPOSITORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSpecimen())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPECIMEN] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStructureVariant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STRUCTURE_VARIANT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getVariant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VARIANT, $i)] = $fieldErrs;
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
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMolecularSequence $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMolecularSequence
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRMolecularSequence::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMolecularSequence::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMolecularSequence;
        } elseif (!is_object($type) || !($type instanceof FHIRMolecularSequence)) {
            throw new \RuntimeException(sprintf(
                'FHIRMolecularSequence::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMolecularSequence or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->coordinateSystem)) {
            $type->setCoordinateSystem(FHIRInteger::xmlUnserialize($children->coordinateSystem));
        }
        if (isset($attributes->coordinateSystem)) {
            $pt = $type->getCoordinateSystem();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->coordinateSystem);
            } else {
                $type->setCoordinateSystem((string)$attributes->coordinateSystem);
            }
        }
        if (isset($children->device)) {
            $type->setDevice(FHIRReference::xmlUnserialize($children->device));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->observedSeq)) {
            $type->setObservedSeq(FHIRString::xmlUnserialize($children->observedSeq));
        }
        if (isset($attributes->observedSeq)) {
            $pt = $type->getObservedSeq();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->observedSeq);
            } else {
                $type->setObservedSeq((string)$attributes->observedSeq);
            }
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
                $type->addQuality(FHIRMolecularSequenceQuality::xmlUnserialize($child));
            }
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($children->readCoverage)) {
            $type->setReadCoverage(FHIRInteger::xmlUnserialize($children->readCoverage));
        }
        if (isset($attributes->readCoverage)) {
            $pt = $type->getReadCoverage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->readCoverage);
            } else {
                $type->setReadCoverage((string)$attributes->readCoverage);
            }
        }
        if (isset($children->referenceSeq)) {
            $type->setReferenceSeq(FHIRMolecularSequenceReferenceSeq::xmlUnserialize($children->referenceSeq));
        }
        if (isset($children->repository)) {
            foreach($children->repository as $child) {
                $type->addRepository(FHIRMolecularSequenceRepository::xmlUnserialize($child));
            }
        }
        if (isset($children->specimen)) {
            $type->setSpecimen(FHIRReference::xmlUnserialize($children->specimen));
        }
        if (isset($children->structureVariant)) {
            foreach($children->structureVariant as $child) {
                $type->addStructureVariant(FHIRMolecularSequenceStructureVariant::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRSequenceType::xmlUnserialize($children->type));
        }
        if (isset($children->variant)) {
            foreach($children->variant as $child) {
                $type->addVariant(FHIRMolecularSequenceVariant::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getCoordinateSystem())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COORDINATE_SYSTEM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDevice())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getObservedSeq())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OBSERVED_SEQ, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPerformer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPointer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_POINTER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getQuality())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_QUALITY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReadCoverage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_READ_COVERAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReferenceSeq())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_SEQ, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRepository())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPOSITORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSpecimen())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIMEN, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getStructureVariant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STRUCTURE_VARIANT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getVariant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VARIANT, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_COORDINATE_SYSTEM] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_COORDINATE_SYSTEM_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDevice())) {
            $a[self::FIELD_DEVICE] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getObservedSeq())) {
            $a[self::FIELD_OBSERVED_SEQ] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_OBSERVED_SEQ_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $v;
        }
        if ([] !== ($vs = $this->getPointer())) {
            $a[self::FIELD_POINTER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_POINTER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getQuality())) {
            $a[self::FIELD_QUALITY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_QUALITY][] = $v;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getReadCoverage())) {
            $a[self::FIELD_READ_COVERAGE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_READ_COVERAGE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReferenceSeq())) {
            $a[self::FIELD_REFERENCE_SEQ] = $v;
        }
        if ([] !== ($vs = $this->getRepository())) {
            $a[self::FIELD_REPOSITORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REPOSITORY][] = $v;
            }
        }
        if (null !== ($v = $this->getSpecimen())) {
            $a[self::FIELD_SPECIMEN] = $v;
        }
        if ([] !== ($vs = $this->getStructureVariant())) {
            $a[self::FIELD_STRUCTURE_VARIANT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_STRUCTURE_VARIANT][] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRSequenceType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRSequenceType::FIELD_VALUE]);
                $a[self::FIELD_TYPE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getVariant())) {
            $a[self::FIELD_VARIANT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VARIANT][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}