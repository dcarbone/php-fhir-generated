<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRSequenceType;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Raw data describing a biological sequence.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSequence
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSequence extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Sequence';

    /**
     * Whether the sequence is numbered starting at 0 (0-based numbering or coordinates, inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive start and inclusive end).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $coordinateSystem = null;

    /**
     * The method for sequencing, for example, chip information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Sequence that was observed. It is the result marked by referenceSeq along with variant records on referenceSeq. This shall starts from referenceSeq.windowStart and end by referenceSeq.windowEnd.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $observedSeq = null;

    /**
     * The patient whose sequencing results are described by this resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The organization or lab that should be responsible for this result.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Pointer to next atomic sequence which at most contains one variant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $pointer = null;

    /**
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public $quality = null;

    /**
     * The number of copies of the seqeunce of interest. (RNASeq).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Coverage (read depth or depth) is the average number of reads representing a given nucleotide in the reconstructed sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $readCoverage = null;

    /**
     * A sequence that is used as a reference to describe variants that are present in a sequence analyzed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public $referenceSeq = null;

    /**
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository
     */
    public $repository = null;

    /**
     * Specimen used for sequencing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $specimen = null;

    /**
     * Information about chromosome structure variation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant
     */
    public $structureVariant = null;

    /**
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSequenceType
     */
    public $type = null;

    /**
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.)  It can represent some complex mutation or segment variation with the assist of CIGAR string.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
     */
    public $variant = null;

    /**
     * FHIRSequence Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['coordinateSystem'])) {
                $this->setCoordinateSystem($data['coordinateSystem']);
            }
            if (isset($data['device'])) {
                $this->setDevice($data['device']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['observedSeq'])) {
                $this->setObservedSeq($data['observedSeq']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['pointer'])) {
                $this->setPointer($data['pointer']);
            }
            if (isset($data['quality'])) {
                $this->setQuality($data['quality']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['readCoverage'])) {
                $this->setReadCoverage($data['readCoverage']);
            }
            if (isset($data['referenceSeq'])) {
                $this->setReferenceSeq($data['referenceSeq']);
            }
            if (isset($data['repository'])) {
                $this->setRepository($data['repository']);
            }
            if (isset($data['specimen'])) {
                $this->setSpecimen($data['specimen']);
            }
            if (isset($data['structureVariant'])) {
                $this->setStructureVariant($data['structureVariant']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['variant'])) {
                $this->setVariant($data['variant']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSequence::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Whether the sequence is numbered starting at 0 (0-based numbering or coordinates, inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive start and inclusive end).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setCoordinateSystem($coordinateSystem)
    {
        if (null === $coordinateSystem) {
            return $this; 
        }
        if (is_scalar($coordinateSystem)) {
            $coordinateSystem = new FHIRInteger($coordinateSystem);
        }
        if (!($coordinateSystem instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequence::setCoordinateSystem - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($coordinateSystem)
            ));
        }
        $this->coordinateSystem = $coordinateSystem;
        return $this;
    }

    /**
     * Whether the sequence is numbered starting at 0 (0-based numbering or coordinates, inclusive start, exclusive end) or starting at 1 (1-based numbering, inclusive start and inclusive end).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getCoordinateSystem()
    {
        return $this->coordinateSystem;
    }


    /**
     * The method for sequencing, for example, chip information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDevice(FHIRReference $device = null)
    {
        if (null === $device) {
            return $this; 
        }
        $this->device = $device;
        return $this;
    }

    /**
     * The method for sequencing, for example, chip information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }


    /**
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A unique identifier for this particular sequence instance. This is a FHIR-defined id.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Sequence that was observed. It is the result marked by referenceSeq along with variant records on referenceSeq. This shall starts from referenceSeq.windowStart and end by referenceSeq.windowEnd.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setObservedSeq($observedSeq)
    {
        if (null === $observedSeq) {
            return $this; 
        }
        if (is_scalar($observedSeq)) {
            $observedSeq = new FHIRString($observedSeq);
        }
        if (!($observedSeq instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequence::setObservedSeq - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($observedSeq)
            ));
        }
        $this->observedSeq = $observedSeq;
        return $this;
    }

    /**
     * Sequence that was observed. It is the result marked by referenceSeq along with variant records on referenceSeq. This shall starts from referenceSeq.windowStart and end by referenceSeq.windowEnd.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getObservedSeq()
    {
        return $this->observedSeq;
    }


    /**
     * The patient whose sequencing results are described by this resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatient(FHIRReference $patient = null)
    {
        if (null === $patient) {
            return $this; 
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * The patient whose sequencing results are described by this resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * The organization or lab that should be responsible for this result.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPerformer(FHIRReference $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * The organization or lab that should be responsible for this result.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * Pointer to next atomic sequence which at most contains one variant.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPointer(FHIRReference $pointer = null)
    {
        if (null === $pointer) {
            return $this; 
        }
        $this->pointer = $pointer;
        return $this;
    }

    /**
     * Pointer to next atomic sequence which at most contains one variant.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPointer()
    {
        return $this->pointer;
    }


    /**
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     * @return $this
     */
    public function setQuality(FHIRSequenceQuality $quality = null)
    {
        if (null === $quality) {
            return $this; 
        }
        $this->quality = $quality;
        return $this;
    }

    /**
     * An experimental feature attribute that defines the quality of the feature in a quantitative way, such as a phred quality score ([SO:0001686](http://www.sequenceontology.org/browser/current_svn/term/SO:0001686)).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function getQuality()
    {
        return $this->quality;
    }


    /**
     * The number of copies of the seqeunce of interest. (RNASeq).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        if (null === $quantity) {
            return $this; 
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * The number of copies of the seqeunce of interest. (RNASeq).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Coverage (read depth or depth) is the average number of reads representing a given nucleotide in the reconstructed sequence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setReadCoverage($readCoverage)
    {
        if (null === $readCoverage) {
            return $this; 
        }
        if (is_scalar($readCoverage)) {
            $readCoverage = new FHIRInteger($readCoverage);
        }
        if (!($readCoverage instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequence::setReadCoverage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($readCoverage)
            ));
        }
        $this->readCoverage = $readCoverage;
        return $this;
    }

    /**
     * Coverage (read depth or depth) is the average number of reads representing a given nucleotide in the reconstructed sequence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getReadCoverage()
    {
        return $this->readCoverage;
    }


    /**
     * A sequence that is used as a reference to describe variants that are present in a sequence analyzed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     * @return $this
     */
    public function setReferenceSeq(FHIRSequenceReferenceSeq $referenceSeq = null)
    {
        if (null === $referenceSeq) {
            return $this; 
        }
        $this->referenceSeq = $referenceSeq;
        return $this;
    }

    /**
     * A sequence that is used as a reference to describe variants that are present in a sequence analyzed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public function getReferenceSeq()
    {
        return $this->referenceSeq;
    }


    /**
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository
     * @return $this
     */
    public function setRepository(FHIRSequenceRepository $repository = null)
    {
        if (null === $repository) {
            return $this; 
        }
        $this->repository = $repository;
        return $this;
    }

    /**
     * Configurations of the external repository. The repository shall store target's observedSeq or records related with target's observedSeq.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }


    /**
     * Specimen used for sequencing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSpecimen(FHIRReference $specimen = null)
    {
        if (null === $specimen) {
            return $this; 
        }
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Specimen used for sequencing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }


    /**
     * Information about chromosome structure variation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant
     * @return $this
     */
    public function setStructureVariant(FHIRSequenceStructureVariant $structureVariant = null)
    {
        if (null === $structureVariant) {
            return $this; 
        }
        $this->structureVariant = $structureVariant;
        return $this;
    }

    /**
     * Information about chromosome structure variation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant
     */
    public function getStructureVariant()
    {
        return $this->structureVariant;
    }


    /**
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSequenceType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRSequenceType($type);
        }
        if (!($type instanceof FHIRSequenceType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequence::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSequenceType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Amino Acid Sequence/ DNA Sequence / RNA Sequence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSequenceType
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.)  It can represent some complex mutation or segment variation with the assist of CIGAR string.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
     * @return $this
     */
    public function setVariant(FHIRSequenceVariant $variant = null)
    {
        if (null === $variant) {
            return $this; 
        }
        $this->variant = $variant;
        return $this;
    }

    /**
     * The definition of variant here originates from Sequence ontology ([variant_of](http://www.sequenceontology.org/browser/current_svn/term/variant_of)). This element can represent amino acid or nucleic sequence change(including insertion,deletion,SNP,etc.)  It can represent some complex mutation or segment variation with the assist of CIGAR string.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
     */
    public function getVariant()
    {
        return $this->variant;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getCoordinateSystem())) {
            $a['coordinateSystem'] = $v;
        }
        if (null !== ($v = $this->getDevice())) {
            $a['device'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getObservedSeq())) {
            $a['observedSeq'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getPointer())) {
            $a['pointer'] = $v;
        }
        if (null !== ($v = $this->getQuality())) {
            $a['quality'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getReadCoverage())) {
            $a['readCoverage'] = $v;
        }
        if (null !== ($v = $this->getReferenceSeq())) {
            $a['referenceSeq'] = $v;
        }
        if (null !== ($v = $this->getRepository())) {
            $a['repository'] = $v;
        }
        if (null !== ($v = $this->getSpecimen())) {
            $a['specimen'] = $v;
        }
        if (null !== ($v = $this->getStructureVariant())) {
            $a['structureVariant'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getVariant())) {
            $a['variant'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Sequence xmlns="http://hl7.org/fhir"></Sequence>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}