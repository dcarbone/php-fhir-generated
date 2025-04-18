<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRClaimResponseItem extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ITEM;

    /* class_default.php:56 */
    public const FIELD_ITEM_SEQUENCE = 'itemSequence';
    public const FIELD_ITEM_SEQUENCE_EXT = '_itemSequence';
    public const FIELD_TRACE_NUMBER = 'traceNumber';
    public const FIELD_NOTE_NUMBER = 'noteNumber';
    public const FIELD_NOTE_NUMBER_EXT = '_noteNumber';
    public const FIELD_REVIEW_OUTCOME = 'reviewOutcome';
    public const FIELD_ADJUDICATION = 'adjudication';
    public const FIELD_DETAIL = 'detail';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ITEM_SEQUENCE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_ITEM_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely reference the claim item entries.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    #[FHIRPositiveInt]
    protected FHIRPositiveInt $itemSequence;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $traceNumber;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> 
     */
    #[FHIRPositiveInt]
    protected array $noteNumber;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome 
     */
    #[FHIRClaimResponseReviewOutcome]
    protected FHIRClaimResponseReviewOutcome $reviewOutcome;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * If this item is a group then the values here are a summary of the adjudication
     * of the detail items. If this item is a simple product or service then this is
     * the result of the adjudication of this item.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication> 
     */
    #[FHIRClaimResponseAdjudication]
    protected array $adjudication;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A claim detail. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail> 
     */
    #[FHIRClaimResponseDetail]
    protected array $detail;

    /* constructor.php:61 */
    /**
     * FHIRClaimResponseItem Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $itemSequence
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> $traceNumber
     * @param null|iterable<string>|iterable<float>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> $noteNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome $reviewOutcome
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication> $adjudication
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail> $detail
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $itemSequence = null,
                                null|iterable $traceNumber = null,
                                null|iterable $noteNumber = null,
                                null|FHIRClaimResponseReviewOutcome $reviewOutcome = null,
                                null|iterable $adjudication = null,
                                null|iterable $detail = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $itemSequence) {
            $this->setItemSequence($itemSequence);
        }
        if (null !== $traceNumber) {
            $this->setTraceNumber(...$traceNumber);
        }
        if (null !== $noteNumber) {
            $this->setNoteNumber(...$noteNumber);
        }
        if (null !== $reviewOutcome) {
            $this->setReviewOutcome($reviewOutcome);
        }
        if (null !== $adjudication) {
            $this->setAdjudication(...$adjudication);
        }
        if (null !== $detail) {
            $this->setDetail(...$detail);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely reference the claim item entries.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getItemSequence(): null|FHIRPositiveInt
    {
        return $this->itemSequence ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely reference the claim item entries.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $itemSequence
     * @return static
     */
    public function setItemSequence(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $itemSequence): self
    {
        if (null === $itemSequence) {
            unset($this->itemSequence);
            return $this;
        }
        if (!($itemSequence instanceof FHIRPositiveInt)) {
            $itemSequence = new FHIRPositiveInt(value: $itemSequence);
        }
        $this->itemSequence = $itemSequence;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getTraceNumber(): array
    {
        return $this->traceNumber ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getTraceNumberIterator(): iterable
    {
        if (!isset($this->traceNumber)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->traceNumber);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $traceNumber
     * @return static
     */
    public function addTraceNumber(FHIRIdentifier $traceNumber): self
    {
        if (!isset($this->traceNumber)) {
            $this->traceNumber = [];
        }
        $this->traceNumber[] = $traceNumber;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$traceNumber
     * @return static
     */
    public function setTraceNumber(FHIRIdentifier ...$traceNumber): self
    {
        if ([] === $traceNumber) {
            unset($this->traceNumber);
            return $this;
        }
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
     */
    public function getNoteNumber(): array
    {
        return $this->noteNumber ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
     */
    public function getNoteNumberIterator(): iterable
    {
        if (!isset($this->noteNumber)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->noteNumber);
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $noteNumber
     * @return static
     */
    public function addNoteNumber(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $noteNumber): self
    {
        if (!($noteNumber instanceof FHIRPositiveInt)) {
            $noteNumber = new FHIRPositiveInt(value: $noteNumber);
        }
        if (!isset($this->noteNumber)) {
            $this->noteNumber = [];
        }
        $this->noteNumber[] = $noteNumber;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt ...$noteNumber
     * @return static
     */
    public function setNoteNumber(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt ...$noteNumber): self
    {
        if ([] === $noteNumber) {
            unset($this->noteNumber);
            return $this;
        }
        $this->noteNumber = [];
        foreach($noteNumber as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->noteNumber[] = $v;
            } else {
                $this->noteNumber[] = new FHIRPositiveInt(value: $v);
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome
     */
    public function getReviewOutcome(): null|FHIRClaimResponseReviewOutcome
    {
        return $this->reviewOutcome ?? null;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseReviewOutcome $reviewOutcome
     * @return static
     */
    public function setReviewOutcome(null|FHIRClaimResponseReviewOutcome $reviewOutcome): self
    {
        if (null === $reviewOutcome) {
            unset($this->reviewOutcome);
            return $this;
        }
        $this->reviewOutcome = $reviewOutcome;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * If this item is a group then the values here are a summary of the adjudication
     * of the detail items. If this item is a simple product or service then this is
     * the result of the adjudication of this item.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication>
     */
    public function getAdjudication(): array
    {
        return $this->adjudication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication>
     */
    public function getAdjudicationIterator(): iterable
    {
        if (!isset($this->adjudication)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->adjudication);
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * If this item is a group then the values here are a summary of the adjudication
     * of the detail items. If this item is a simple product or service then this is
     * the result of the adjudication of this item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication $adjudication
     * @return static
     */
    public function addAdjudication(FHIRClaimResponseAdjudication $adjudication): self
    {
        if (!isset($this->adjudication)) {
            $this->adjudication = [];
        }
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * If this item is a group then the values here are a summary of the adjudication
     * of the detail items. If this item is a simple product or service then this is
     * the result of the adjudication of this item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication ...$adjudication
     * @return static
     */
    public function setAdjudication(FHIRClaimResponseAdjudication ...$adjudication): self
    {
        if ([] === $adjudication) {
            unset($this->adjudication);
            return $this;
        }
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A claim detail. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail>
     */
    public function getDetail(): array
    {
        return $this->detail ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail>
     */
    public function getDetailIterator(): iterable
    {
        if (!isset($this->detail)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->detail);
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A claim detail. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail $detail
     * @return static
     */
    public function addDetail(FHIRClaimResponseDetail $detail): self
    {
        if (!isset($this->detail)) {
            $this->detail = [];
        }
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A claim detail. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail ...$detail
     * @return static
     */
    public function setDetail(FHIRClaimResponseDetail ...$detail): self
    {
        if ([] === $detail) {
            unset($this->detail);
            return $this;
        }
        $this->detail = $detail;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseItem)) {
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
            } else if (self::FIELD_ITEM_SEQUENCE === $cen) {
                $type->setItemSequence(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRACE_NUMBER === $cen) {
                $type->addTraceNumber(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE_NUMBER === $cen) {
                $type->addNoteNumber(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REVIEW_OUTCOME === $cen) {
                $type->setReviewOutcome(FHIRClaimResponseReviewOutcome::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADJUDICATION === $cen) {
                $type->addAdjudication(FHIRClaimResponseAdjudication::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL === $cen) {
                $type->addDetail(FHIRClaimResponseDetail::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ITEM_SEQUENCE])) {
            if (isset($type->itemSequence)) {
                $type->itemSequence->setValue((string)$attributes[self::FIELD_ITEM_SEQUENCE]);
            } else {
                $type->setItemSequence((string)$attributes[self::FIELD_ITEM_SEQUENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ITEM_SEQUENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->itemSequence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ITEM_SEQUENCE]) {
            $xw->writeAttribute(self::FIELD_ITEM_SEQUENCE, $this->itemSequence->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->itemSequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ITEM_SEQUENCE]
                || $this->itemSequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ITEM_SEQUENCE);
            $this->itemSequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ITEM_SEQUENCE]);
            $xw->endElement();
        }
        if (isset($this->traceNumber)) {
            foreach ($this->traceNumber as $v) {
                $xw->startElement(self::FIELD_TRACE_NUMBER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->noteNumber) && [] !== $this->noteNumber) {
            foreach($this->noteNumber as $v) {
                $xw->startElement(self::FIELD_NOTE_NUMBER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reviewOutcome)) {
            $xw->startElement(self::FIELD_REVIEW_OUTCOME);
            $this->reviewOutcome->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->adjudication)) {
            foreach ($this->adjudication as $v) {
                $xw->startElement(self::FIELD_ADJUDICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->detail)) {
            foreach ($this->detail as $v) {
                $xw->startElement(self::FIELD_DETAIL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseItem)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->itemSequence)
            || isset($decoded->_itemSequence)
            || property_exists($decoded, self::FIELD_ITEM_SEQUENCE)
            || property_exists($decoded, self::FIELD_ITEM_SEQUENCE_EXT)) {
            $v = $decoded->_itemSequence ?? new \stdClass();
            $v->value = $decoded->itemSequence ?? null;
            $type->setItemSequence(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->traceNumber) || property_exists($decoded, self::FIELD_TRACE_NUMBER)) {
            if (is_object($decoded->traceNumber)) {
                $vals = [$decoded->traceNumber];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TRACE_NUMBER, true);
            } else {
                $vals = $decoded->traceNumber;
            }
            foreach($vals as $v) {
                $type->addTraceNumber(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->noteNumber)
            || isset($decoded->_noteNumber)
            || property_exists($decoded, self::FIELD_NOTE_NUMBER)
            || property_exists($decoded, self::FIELD_NOTE_NUMBER_EXT)) {
            $vals = (array)($decoded->noteNumber ?? []);
            $exts = (array)($decoded->FIELD_NOTE_NUMBER_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addNoteNumber(FHIRPositiveInt::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->reviewOutcome) || property_exists($decoded, self::FIELD_REVIEW_OUTCOME)) {
            if (is_array($decoded->reviewOutcome)) {
                $type->setReviewOutcome(FHIRClaimResponseReviewOutcome::jsonUnserialize(reset($decoded->reviewOutcome), $config));
            } else {
                $type->setReviewOutcome(FHIRClaimResponseReviewOutcome::jsonUnserialize($decoded->reviewOutcome, $config));
            }
        }
        if (isset($decoded->adjudication) || property_exists($decoded, self::FIELD_ADJUDICATION)) {
            if (is_object($decoded->adjudication)) {
                $vals = [$decoded->adjudication];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ADJUDICATION, true);
            } else {
                $vals = $decoded->adjudication;
            }
            foreach($vals as $v) {
                $type->addAdjudication(FHIRClaimResponseAdjudication::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->detail) || property_exists($decoded, self::FIELD_DETAIL)) {
            if (is_object($decoded->detail)) {
                $vals = [$decoded->detail];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DETAIL, true);
            } else {
                $vals = $decoded->detail;
            }
            foreach($vals as $v) {
                $type->addDetail(FHIRClaimResponseDetail::jsonUnserialize($v, $config));
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
        if (isset($this->itemSequence)) {
            if (null !== ($val = $this->itemSequence->getValue())) {
                $out->itemSequence = $val;
            }
            if ($this->itemSequence->_nonValueFieldDefined()) {
                $ext = $this->itemSequence->jsonSerialize();
                unset($ext->value);
                $out->_itemSequence = $ext;
            }
        }
        if (isset($this->traceNumber) && [] !== $this->traceNumber) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TRACE_NUMBER) && 1 === count($this->traceNumber)) {
                $out->traceNumber = $this->traceNumber[0];
            } else {
                $out->traceNumber = $this->traceNumber;
            }
        }
        if (isset($this->noteNumber) && [] !== $this->noteNumber) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->noteNumber as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->noteNumber = $vals;
            }
            if ($hasExts) {
                $out->_noteNumber = $exts;
            }
        }
        if (isset($this->reviewOutcome)) {
            $out->reviewOutcome = $this->reviewOutcome;
        }
        if (isset($this->adjudication) && [] !== $this->adjudication) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ADJUDICATION) && 1 === count($this->adjudication)) {
                $out->adjudication = $this->adjudication[0];
            } else {
                $out->adjudication = $this->adjudication;
            }
        }
        if (isset($this->detail) && [] !== $this->detail) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DETAIL) && 1 === count($this->detail)) {
                $out->detail = $this->detail[0];
            } else {
                $out->detail = $this->detail;
            }
        }
        return $out;
    }
}