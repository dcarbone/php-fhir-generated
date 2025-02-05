<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 00:09+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRSequenceTypeList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSequenceType;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * Raw data describing a biological sequence.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMolecularSequence extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE;

    /* class_default.php:50 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_COORDINATE_SYSTEM = 'coordinateSystem';
    public const FIELD_COORDINATE_SYSTEM_EXT = '_coordinateSystem';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_SPECIMEN = 'specimen';
    public const FIELD_DEVICE = 'device';
    public const FIELD_PERFORMER = 'performer';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_REFERENCE_SEQ = 'referenceSeq';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_OBSERVED_SEQ = 'observedSeq';
    public const FIELD_OBSERVED_SEQ_EXT = '_observedSeq';
    public const FIELD_QUALITY = 'quality';
    public const FIELD_READ_COVERAGE = 'readCoverage';
    public const FIELD_READ_COVERAGE_EXT = '_readCoverage';
    public const FIELD_REPOSITORY = 'repository';
    public const FIELD_POINTER = 'pointer';
    public const FIELD_STRUCTURE_VARIANT = 'structureVariant';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_COORDINATE_SYSTEM => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COORDINATE_SYSTEM => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OBSERVED_SEQ => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_READ_COVERAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * Type if a sequence -- DNA, RNA, or amino acid sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSequenceType 
     */
    protected FHIRSequenceType $type;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the sequence is numbered starting at (0-based numbering or coordinates,
     * inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive
     * start and inclusive end).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $coordinateSystem;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient whose sequencing results are described by this resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specimen used for sequencing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $specimen;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method for sequencing, for example, chip information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $device;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization or lab that should be responsible for this result.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $performer;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The number of copies of the sequence of interest. (RNASeq).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $quantity;
    /**
     * Raw data describing a biological sequence.
     *
     * A sequence that is used as a reference to describe variants that are present in
     * a sequence analyzed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq 
     */
    protected FHIRMolecularSequenceReferenceSeq $referenceSeq;
    /**
     * Raw data describing a biological sequence.
     *
     * The definition of variant here originates from Sequence ontology
     * ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)).
     * This element can represent amino acid or nucleic sequence change(including
     * insertion,deletion,SNP,etc.) It can represent some complex mutation or segment
     * variation with the assist of CIGAR string.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant[] 
     */
    protected array $variant;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sequence that was observed. It is the result marked by referenceSeq along with
     * variant records on referenceSeq. This shall start from referenceSeq.windowStart
     * and end by referenceSeq.windowEnd.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $observedSeq;
    /**
     * Raw data describing a biological sequence.
     *
     * An experimental feature attribute that defines the quality of the feature in a
     * quantitative way, such as a phred quality score
     * ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality[] 
     */
    protected array $quality;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Coverage (read depth or depth) is the average number of reads representing a
     * given nucleotide in the reconstructed sequence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $readCoverage;
    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository[] 
     */
    protected array $repository;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $pointer;
    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant[] 
     */
    protected array $structureVariant;

    /* constructor.php:61 */
    /**
     * FHIRMolecularSequence Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRSequenceTypeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSequenceType $type
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $coordinateSystem
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $specimen
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $device
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $performer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq $referenceSeq
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant[] $variant
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $observedSeq
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality[] $quality
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $readCoverage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository[] $repository
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $pointer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant[] $structureVariant
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|string|FHIRSequenceTypeList|FHIRSequenceType $type = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $coordinateSystem = null,
                                null|FHIRReference $patient = null,
                                null|FHIRReference $specimen = null,
                                null|FHIRReference $device = null,
                                null|FHIRReference $performer = null,
                                null|FHIRQuantity $quantity = null,
                                null|FHIRMolecularSequenceReferenceSeq $referenceSeq = null,
                                null|iterable $variant = null,
                                null|string|FHIRStringPrimitive|FHIRString $observedSeq = null,
                                null|iterable $quality = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $readCoverage = null,
                                null|iterable $repository = null,
                                null|iterable $pointer = null,
                                null|iterable $structureVariant = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $coordinateSystem) {
            $this->setCoordinateSystem($coordinateSystem);
        }
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $specimen) {
            $this->setSpecimen($specimen);
        }
        if (null !== $device) {
            $this->setDevice($device);
        }
        if (null !== $performer) {
            $this->setPerformer($performer);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $referenceSeq) {
            $this->setReferenceSeq($referenceSeq);
        }
        if (null !== $variant) {
            $this->setVariant(...$variant);
        }
        if (null !== $observedSeq) {
            $this->setObservedSeq($observedSeq);
        }
        if (null !== $quality) {
            $this->setQuality(...$quality);
        }
        if (null !== $readCoverage) {
            $this->setReadCoverage($readCoverage);
        }
        if (null !== $repository) {
            $this->setRepository(...$repository);
        }
        if (null !== $pointer) {
            $this->setPointer(...$pointer);
        }
        if (null !== $structureVariant) {
            $this->setStructureVariant(...$structureVariant);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:158 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for this particular sequence instance. This is a
     * FHIR-defined id.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Type if a sequence -- DNA, RNA, or amino acid sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSequenceType
     */
    public function getType(): null|FHIRSequenceType
    {
        return $this->type ?? null;
    }

    /**
     * Type if a sequence -- DNA, RNA, or amino acid sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRSequenceTypeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRSequenceType $type
     * @return static
     */
    public function setType(null|string|FHIRSequenceTypeList|FHIRSequenceType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRSequenceType)) {
            $type = new FHIRSequenceType(value: $type);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger
     */
    public function getCoordinateSystem(): null|FHIRInteger
    {
        return $this->coordinateSystem ?? null;
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $coordinateSystem
     * @return static
     */
    public function setCoordinateSystem(null|string|float|FHIRIntegerPrimitive|FHIRInteger $coordinateSystem): self
    {
        if (null === $coordinateSystem) {
            unset($this->coordinateSystem);
            return $this;
        }
        if (!($coordinateSystem instanceof FHIRInteger)) {
            $coordinateSystem = new FHIRInteger(value: $coordinateSystem);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient whose sequencing results are described by this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient): self
    {
        if (null === $patient) {
            unset($this->patient);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getSpecimen(): null|FHIRReference
    {
        return $this->specimen ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specimen used for sequencing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $specimen
     * @return static
     */
    public function setSpecimen(null|FHIRReference $specimen): self
    {
        if (null === $specimen) {
            unset($this->specimen);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getDevice(): null|FHIRReference
    {
        return $this->device ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method for sequencing, for example, chip information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $device
     * @return static
     */
    public function setDevice(null|FHIRReference $device): self
    {
        if (null === $device) {
            unset($this->device);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getPerformer(): null|FHIRReference
    {
        return $this->performer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization or lab that should be responsible for this result.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function setPerformer(null|FHIRReference $performer): self
    {
        if (null === $performer) {
            unset($this->performer);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * A sequence that is used as a reference to describe variants that are present in
     * a sequence analyzed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq
     */
    public function getReferenceSeq(): null|FHIRMolecularSequenceReferenceSeq
    {
        return $this->referenceSeq ?? null;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * A sequence that is used as a reference to describe variants that are present in
     * a sequence analyzed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq $referenceSeq
     * @return static
     */
    public function setReferenceSeq(null|FHIRMolecularSequenceReferenceSeq $referenceSeq): self
    {
        if (null === $referenceSeq) {
            unset($this->referenceSeq);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant[]
     */
    public function getVariant(): array
    {
        return $this->variant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant>
     */
    public function getVariantIterator(): iterable
    {
        if (!isset($this->variant)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->variant);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant $variant
     * @return static
     */
    public function addVariant(FHIRMolecularSequenceVariant $variant): self
    {
        if (!isset($this->variant)) {
            $this->variant = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant ...$variant
     * @return static
     */
    public function setVariant(FHIRMolecularSequenceVariant ...$variant): self
    {
        if ([] === $variant) {
            unset($this->variant);
            return $this;
        }
        $this->variant = $variant;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getObservedSeq(): null|FHIRString
    {
        return $this->observedSeq ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $observedSeq
     * @return static
     */
    public function setObservedSeq(null|string|FHIRStringPrimitive|FHIRString $observedSeq): self
    {
        if (null === $observedSeq) {
            unset($this->observedSeq);
            return $this;
        }
        if (!($observedSeq instanceof FHIRString)) {
            $observedSeq = new FHIRString(value: $observedSeq);
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality[]
     */
    public function getQuality(): array
    {
        return $this->quality ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality>
     */
    public function getQualityIterator(): iterable
    {
        if (!isset($this->quality)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->quality);
    }

    /**
     * Raw data describing a biological sequence.
     *
     * An experimental feature attribute that defines the quality of the feature in a
     * quantitative way, such as a phred quality score
     * ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality $quality
     * @return static
     */
    public function addQuality(FHIRMolecularSequenceQuality $quality): self
    {
        if (!isset($this->quality)) {
            $this->quality = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality ...$quality
     * @return static
     */
    public function setQuality(FHIRMolecularSequenceQuality ...$quality): self
    {
        if ([] === $quality) {
            unset($this->quality);
            return $this;
        }
        $this->quality = $quality;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger
     */
    public function getReadCoverage(): null|FHIRInteger
    {
        return $this->readCoverage ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Coverage (read depth or depth) is the average number of reads representing a
     * given nucleotide in the reconstructed sequence.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $readCoverage
     * @return static
     */
    public function setReadCoverage(null|string|float|FHIRIntegerPrimitive|FHIRInteger $readCoverage): self
    {
        if (null === $readCoverage) {
            unset($this->readCoverage);
            return $this;
        }
        if (!($readCoverage instanceof FHIRInteger)) {
            $readCoverage = new FHIRInteger(value: $readCoverage);
        }
        $this->readCoverage = $readCoverage;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository[]
     */
    public function getRepository(): array
    {
        return $this->repository ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository>
     */
    public function getRepositoryIterator(): iterable
    {
        if (!isset($this->repository)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->repository);
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository $repository
     * @return static
     */
    public function addRepository(FHIRMolecularSequenceRepository $repository): self
    {
        if (!isset($this->repository)) {
            $this->repository = [];
        }
        $this->repository[] = $repository;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Configurations of the external repository. The repository shall store target's
     * observedSeq or records related with target's observedSeq.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository ...$repository
     * @return static
     */
    public function setRepository(FHIRMolecularSequenceRepository ...$repository): self
    {
        if ([] === $repository) {
            unset($this->repository);
            return $this;
        }
        $this->repository = $repository;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getPointer(): array
    {
        return $this->pointer ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getPointerIterator(): iterable
    {
        if (!isset($this->pointer)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->pointer);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pointer to next atomic sequence which at most contains one variant.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $pointer
     * @return static
     */
    public function addPointer(FHIRReference $pointer): self
    {
        if (!isset($this->pointer)) {
            $this->pointer = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$pointer
     * @return static
     */
    public function setPointer(FHIRReference ...$pointer): self
    {
        if ([] === $pointer) {
            unset($this->pointer);
            return $this;
        }
        $this->pointer = $pointer;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant[]
     */
    public function getStructureVariant(): array
    {
        return $this->structureVariant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant>
     */
    public function getStructureVariantIterator(): iterable
    {
        if (!isset($this->structureVariant)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->structureVariant);
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant $structureVariant
     * @return static
     */
    public function addStructureVariant(FHIRMolecularSequenceStructureVariant $structureVariant): self
    {
        if (!isset($this->structureVariant)) {
            $this->structureVariant = [];
        }
        $this->structureVariant[] = $structureVariant;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Information about chromosome structure variation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant ...$structureVariant
     * @return static
     */
    public function setStructureVariant(FHIRMolecularSequenceStructureVariant ...$structureVariant): self
    {
        if ([] === $structureVariant) {
            unset($this->structureVariant);
            return $this;
        }
        $this->structureVariant = $structureVariant;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMolecularSequence $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMolecularSequence
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequence)) {
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRSequenceType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COORDINATE_SYSTEM === $cen) {
                $type->setCoordinateSystem(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPECIMEN === $cen) {
                $type->setSpecimen(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEVICE === $cen) {
                $type->setDevice(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERFORMER === $cen) {
                $type->setPerformer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERENCE_SEQ === $cen) {
                $type->setReferenceSeq(FHIRMolecularSequenceReferenceSeq::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VARIANT === $cen) {
                $type->addVariant(FHIRMolecularSequenceVariant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OBSERVED_SEQ === $cen) {
                $type->setObservedSeq(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUALITY === $cen) {
                $type->addQuality(FHIRMolecularSequenceQuality::xmlUnserialize($ce, $config));
            } else if (self::FIELD_READ_COVERAGE === $cen) {
                $type->setReadCoverage(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REPOSITORY === $cen) {
                $type->addRepository(FHIRMolecularSequenceRepository::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POINTER === $cen) {
                $type->addPointer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRUCTURE_VARIANT === $cen) {
                $type->addStructureVariant(FHIRMolecularSequenceStructureVariant::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IMPLICIT_RULES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COORDINATE_SYSTEM])) {
            if (isset($type->coordinateSystem)) {
                $type->coordinateSystem->setValue((string)$attributes[self::FIELD_COORDINATE_SYSTEM]);
            } else {
                $type->setCoordinateSystem((string)$attributes[self::FIELD_COORDINATE_SYSTEM]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COORDINATE_SYSTEM, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_OBSERVED_SEQ])) {
            if (isset($type->observedSeq)) {
                $type->observedSeq->setValue((string)$attributes[self::FIELD_OBSERVED_SEQ]);
            } else {
                $type->setObservedSeq((string)$attributes[self::FIELD_OBSERVED_SEQ]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_OBSERVED_SEQ, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_READ_COVERAGE])) {
            if (isset($type->readCoverage)) {
                $type->readCoverage->setValue((string)$attributes[self::FIELD_READ_COVERAGE]);
            } else {
                $type->setReadCoverage((string)$attributes[self::FIELD_READ_COVERAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_READ_COVERAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('MolecularSequence', $this->_getSourceXMLNS());
        }
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getValueAsString());
        }
        if (isset($this->coordinateSystem) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COORDINATE_SYSTEM]) {
            $xw->writeAttribute(self::FIELD_COORDINATE_SYSTEM, $this->coordinateSystem->_getValueAsString());
        }
        if (isset($this->observedSeq) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OBSERVED_SEQ]) {
            $xw->writeAttribute(self::FIELD_OBSERVED_SEQ, $this->observedSeq->_getValueAsString());
        }
        if (isset($this->readCoverage) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_READ_COVERAGE]) {
            $xw->writeAttribute(self::FIELD_READ_COVERAGE, $this->readCoverage->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->coordinateSystem)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COORDINATE_SYSTEM]
                || $this->coordinateSystem->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COORDINATE_SYSTEM);
            $this->coordinateSystem->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COORDINATE_SYSTEM]);
            $xw->endElement();
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->specimen)) {
            $xw->startElement(self::FIELD_SPECIMEN);
            $this->specimen->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->device)) {
            $xw->startElement(self::FIELD_DEVICE);
            $this->device->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->performer)) {
            $xw->startElement(self::FIELD_PERFORMER);
            $this->performer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->quantity)) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->referenceSeq)) {
            $xw->startElement(self::FIELD_REFERENCE_SEQ);
            $this->referenceSeq->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->variant)) {
            foreach ($this->variant as $v) {
                $xw->startElement(self::FIELD_VARIANT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->observedSeq)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OBSERVED_SEQ]
                || $this->observedSeq->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OBSERVED_SEQ);
            $this->observedSeq->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OBSERVED_SEQ]);
            $xw->endElement();
        }
        if (isset($this->quality)) {
            foreach ($this->quality as $v) {
                $xw->startElement(self::FIELD_QUALITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->readCoverage)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_READ_COVERAGE]
                || $this->readCoverage->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_READ_COVERAGE);
            $this->readCoverage->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_READ_COVERAGE]);
            $xw->endElement();
        }
        if (isset($this->repository)) {
            foreach ($this->repository as $v) {
                $xw->startElement(self::FIELD_REPOSITORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->pointer)) {
            foreach ($this->pointer as $v) {
                $xw->startElement(self::FIELD_POINTER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->structureVariant)) {
            foreach ($this->structureVariant as $v) {
                $xw->startElement(self::FIELD_STRUCTURE_VARIANT);
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMolecularSequence $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMolecularSequence
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequence)) {
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
            $json = json_decode(json: $json, associative: false, depth: $config->getJSONDecodeMaxDepth());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->identifier) || property_exists($json, self::FIELD_IDENTIFIER)) {
            if (is_object($json->identifier)) {
                $vals = [$json->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $json->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->type)
            || isset($json->_type)
            || property_exists($json, self::FIELD_TYPE)
            || property_exists($json, self::FIELD_TYPE_EXT)) {
            $v = $json->_type ?? new \stdClass();
            $v->value = $json->type ?? null;
            $type->setType(FHIRSequenceType::jsonUnserialize($v, $config));
        }
        if (isset($json->coordinateSystem)
            || isset($json->_coordinateSystem)
            || property_exists($json, self::FIELD_COORDINATE_SYSTEM)
            || property_exists($json, self::FIELD_COORDINATE_SYSTEM_EXT)) {
            $v = $json->_coordinateSystem ?? new \stdClass();
            $v->value = $json->coordinateSystem ?? null;
            $type->setCoordinateSystem(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->patient) || property_exists($json, self::FIELD_PATIENT)) {
            if (is_array($json->patient)) {
                $type->setPatient(FHIRReference::jsonUnserialize(reset($json->patient), $config));
            } else {
                $type->setPatient(FHIRReference::jsonUnserialize($json->patient, $config));
            }
        }
        if (isset($json->specimen) || property_exists($json, self::FIELD_SPECIMEN)) {
            if (is_array($json->specimen)) {
                $type->setSpecimen(FHIRReference::jsonUnserialize(reset($json->specimen), $config));
            } else {
                $type->setSpecimen(FHIRReference::jsonUnserialize($json->specimen, $config));
            }
        }
        if (isset($json->device) || property_exists($json, self::FIELD_DEVICE)) {
            if (is_array($json->device)) {
                $type->setDevice(FHIRReference::jsonUnserialize(reset($json->device), $config));
            } else {
                $type->setDevice(FHIRReference::jsonUnserialize($json->device, $config));
            }
        }
        if (isset($json->performer) || property_exists($json, self::FIELD_PERFORMER)) {
            if (is_array($json->performer)) {
                $type->setPerformer(FHIRReference::jsonUnserialize(reset($json->performer), $config));
            } else {
                $type->setPerformer(FHIRReference::jsonUnserialize($json->performer, $config));
            }
        }
        if (isset($json->quantity) || property_exists($json, self::FIELD_QUANTITY)) {
            if (is_array($json->quantity)) {
                $type->setQuantity(FHIRQuantity::jsonUnserialize(reset($json->quantity), $config));
            } else {
                $type->setQuantity(FHIRQuantity::jsonUnserialize($json->quantity, $config));
            }
        }
        if (isset($json->referenceSeq) || property_exists($json, self::FIELD_REFERENCE_SEQ)) {
            if (is_array($json->referenceSeq)) {
                $type->setReferenceSeq(FHIRMolecularSequenceReferenceSeq::jsonUnserialize(reset($json->referenceSeq), $config));
            } else {
                $type->setReferenceSeq(FHIRMolecularSequenceReferenceSeq::jsonUnserialize($json->referenceSeq, $config));
            }
        }
        if (isset($json->variant) || property_exists($json, self::FIELD_VARIANT)) {
            if (is_object($json->variant)) {
                $vals = [$json->variant];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_VARIANT, true);
            } else {
                $vals = $json->variant;
            }
            foreach($vals as $v) {
                $type->addVariant(FHIRMolecularSequenceVariant::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->observedSeq)
            || isset($json->_observedSeq)
            || property_exists($json, self::FIELD_OBSERVED_SEQ)
            || property_exists($json, self::FIELD_OBSERVED_SEQ_EXT)) {
            $v = $json->_observedSeq ?? new \stdClass();
            $v->value = $json->observedSeq ?? null;
            $type->setObservedSeq(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->quality) || property_exists($json, self::FIELD_QUALITY)) {
            if (is_object($json->quality)) {
                $vals = [$json->quality];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_QUALITY, true);
            } else {
                $vals = $json->quality;
            }
            foreach($vals as $v) {
                $type->addQuality(FHIRMolecularSequenceQuality::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->readCoverage)
            || isset($json->_readCoverage)
            || property_exists($json, self::FIELD_READ_COVERAGE)
            || property_exists($json, self::FIELD_READ_COVERAGE_EXT)) {
            $v = $json->_readCoverage ?? new \stdClass();
            $v->value = $json->readCoverage ?? null;
            $type->setReadCoverage(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->repository) || property_exists($json, self::FIELD_REPOSITORY)) {
            if (is_object($json->repository)) {
                $vals = [$json->repository];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REPOSITORY, true);
            } else {
                $vals = $json->repository;
            }
            foreach($vals as $v) {
                $type->addRepository(FHIRMolecularSequenceRepository::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->pointer) || property_exists($json, self::FIELD_POINTER)) {
            if (is_object($json->pointer)) {
                $vals = [$json->pointer];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_POINTER, true);
            } else {
                $vals = $json->pointer;
            }
            foreach($vals as $v) {
                $type->addPointer(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->structureVariant) || property_exists($json, self::FIELD_STRUCTURE_VARIANT)) {
            if (is_object($json->structureVariant)) {
                $vals = [$json->structureVariant];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_STRUCTURE_VARIANT, true);
            } else {
                $vals = $json->structureVariant;
            }
            foreach($vals as $v) {
                $type->addStructureVariant(FHIRMolecularSequenceStructureVariant::jsonUnserialize($v, $config));
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
        if (isset($this->identifier) && [] !== $this->identifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->coordinateSystem)) {
            if (null !== ($val = $this->coordinateSystem->getValue())) {
                $out->coordinateSystem = $val;
            }
            if ($this->coordinateSystem->_nonValueFieldDefined()) {
                $ext = $this->coordinateSystem->jsonSerialize();
                unset($ext->value);
                $out->_coordinateSystem = $ext;
            }
        }
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->specimen)) {
            $out->specimen = $this->specimen;
        }
        if (isset($this->device)) {
            $out->device = $this->device;
        }
        if (isset($this->performer)) {
            $out->performer = $this->performer;
        }
        if (isset($this->quantity)) {
            $out->quantity = $this->quantity;
        }
        if (isset($this->referenceSeq)) {
            $out->referenceSeq = $this->referenceSeq;
        }
        if (isset($this->variant) && [] !== $this->variant) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_VARIANT) && 1 === count($this->variant)) {
                $out->variant = $this->variant[0];
            } else {
                $out->variant = $this->variant;
            }
        }
        if (isset($this->observedSeq)) {
            if (null !== ($val = $this->observedSeq->getValue())) {
                $out->observedSeq = $val;
            }
            if ($this->observedSeq->_nonValueFieldDefined()) {
                $ext = $this->observedSeq->jsonSerialize();
                unset($ext->value);
                $out->_observedSeq = $ext;
            }
        }
        if (isset($this->quality) && [] !== $this->quality) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_QUALITY) && 1 === count($this->quality)) {
                $out->quality = $this->quality[0];
            } else {
                $out->quality = $this->quality;
            }
        }
        if (isset($this->readCoverage)) {
            if (null !== ($val = $this->readCoverage->getValue())) {
                $out->readCoverage = $val;
            }
            if ($this->readCoverage->_nonValueFieldDefined()) {
                $ext = $this->readCoverage->jsonSerialize();
                unset($ext->value);
                $out->_readCoverage = $ext;
            }
        }
        if (isset($this->repository) && [] !== $this->repository) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REPOSITORY) && 1 === count($this->repository)) {
                $out->repository = $this->repository[0];
            } else {
                $out->repository = $this->repository;
            }
        }
        if (isset($this->pointer) && [] !== $this->pointer) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_POINTER) && 1 === count($this->pointer)) {
                $out->pointer = $this->pointer[0];
            } else {
                $out->pointer = $this->pointer;
            }
        }
        if (isset($this->structureVariant) && [] !== $this->structureVariant) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_STRUCTURE_VARIANT) && 1 === count($this->structureVariant)) {
                $out->structureVariant = $this->structureVariant[0];
            } else {
                $out->structureVariant = $this->structureVariant;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}