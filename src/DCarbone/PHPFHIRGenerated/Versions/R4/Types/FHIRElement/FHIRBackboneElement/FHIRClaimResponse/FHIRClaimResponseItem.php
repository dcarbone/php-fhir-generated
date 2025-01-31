<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 */
class FHIRClaimResponseItem extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ITEM;

    /* class_default.php:48 */
    public const FIELD_ITEM_SEQUENCE = 'itemSequence';
    public const FIELD_ITEM_SEQUENCE_EXT = '_itemSequence';
    public const FIELD_NOTE_NUMBER = 'noteNumber';
    public const FIELD_NOTE_NUMBER_EXT = '_noteNumber';
    public const FIELD_ADJUDICATION = 'adjudication';
    public const FIELD_ADJUDICATION_EXT = '_adjudication';
    public const FIELD_DETAIL = 'detail';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_ITEM_SEQUENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ADJUDICATION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_ITEM_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely reference the claim item entries.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $itemSequence;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numbers associated with notes below which apply to the adjudication of this
     * item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt[] 
     */
    protected array $noteNumber;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * If this item is a group then the values here are a summary of the adjudication
     * of the detail items. If this item is a simple product or service then this is
     * the result of the adjudication of this item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[] 
     */
    protected array $adjudication;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A claim detail. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail[] 
     */
    protected array $detail;

    /* constructor.php:63 */
    /**
     * FHIRClaimResponseItem Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $itemSequence
     * @param null|string[]|int[]|float[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt[] $noteNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[] $adjudication
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail[] $detail
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $itemSequence = null,
                                null|iterable $noteNumber = null,
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
        if (null !== $noteNumber) {
            $this->setNoteNumber(...$noteNumber);
        }
        if (null !== $adjudication) {
            $this->setAdjudication(...$adjudication);
        }
        if (null !== $detail) {
            $this->setDetail(...$detail);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely reference the claim item entries.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $itemSequence
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setItemSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $itemSequence,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $itemSequence) {
            unset($this->itemSequence);
            return $this;
        }
        if (!($itemSequence instanceof FHIRPositiveInt)) {
            $itemSequence = new FHIRPositiveInt(value: $itemSequence);
        }
        $this->itemSequence = $itemSequence;
        if ($this->_valueXMLLocations[self::FIELD_ITEM_SEQUENCE] !== $valueXMLLocation) {
            $this->_setItemSequenceValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the itemSequence element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getItemSequenceValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ITEM_SEQUENCE];
    }

    /**
     * Set the location the "value" field of the itemSequence element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setItemSequenceValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ITEM_SEQUENCE] = $valueXMLLocation;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumber(): array
    {
        return $this->noteNumber ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt>
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
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $noteNumber
     * @return static
     */
    public function addNoteNumber(string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $noteNumber): self
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
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt ...$noteNumber
     * @return static
     */
    public function setNoteNumber(string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt ...$noteNumber): self
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
     * If this item is a group then the values here are a summary of the adjudication
     * of the detail items. If this item is a simple product or service then this is
     * the result of the adjudication of this item.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public function getAdjudication(): array
    {
        return $this->adjudication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication $adjudication
     * @return static
     */
    public function addAdjudication(FHIRDecimal|FHIRClaimResponseAdjudication $adjudication): self
    {
        if (!($adjudication instanceof FHIRClaimResponseAdjudication)) {
            $adjudication = new FHIRClaimResponseAdjudication(value: $adjudication);
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication ...$adjudication
     * @return static
     */
    public function setAdjudication(FHIRDecimal|FHIRClaimResponseAdjudication ...$adjudication): self
    {
        if ([] === $adjudication) {
            unset($this->adjudication);
            return $this;
        }
        $this->adjudication = [];
        foreach($adjudication as $v) {
            if ($v instanceof FHIRClaimResponseAdjudication) {
                $this->adjudication[] = $v;
            } else {
                $this->adjudication[] = new FHIRClaimResponseAdjudication(value: $v);
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A claim detail. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail[]
     */
    public function getDetail(): array
    {
        return $this->detail ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail $detail
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail ...$detail
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

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (null !== ($v = $this->getItemSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ITEM_SEQUENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAdjudication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADJUDICATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM_SEQUENCE])) {
            $v = $this->getItemSequence();
            foreach($validationRules[self::FIELD_ITEM_SEQUENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ITEM_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM_SEQUENCE])) {
                        $errs[self::FIELD_ITEM_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_ITEM_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE_NUMBER])) {
            $v = $this->getNoteNumber();
            foreach($validationRules[self::FIELD_NOTE_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE_NUMBER])) {
                        $errs[self::FIELD_NOTE_NUMBER] = [];
                    }
                    $errs[self::FIELD_NOTE_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADJUDICATION])) {
            $v = $this->getAdjudication();
            foreach($validationRules[self::FIELD_ADJUDICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADJUDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADJUDICATION])) {
                        $errs[self::FIELD_ADJUDICATION] = [];
                    }
                    $errs[self::FIELD_ADJUDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL])) {
            $v = $this->getDetail();
            foreach($validationRules[self::FIELD_DETAIL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL])) {
                        $errs[self::FIELD_DETAIL] = [];
                    }
                    $errs[self::FIELD_DETAIL][$rule] = $err;
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

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ITEM_SEQUENCE === $cen) {
                $type->setItemSequence(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE_NUMBER === $cen) {
                $type->addNoteNumber(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADJUDICATION === $cen) {
                $type->addAdjudication(FHIRClaimResponseAdjudication::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL === $cen) {
                $type->addDetail(FHIRClaimResponseDetail::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ITEM_SEQUENCE])) {
            if (isset($type->itemSequence)) {
                $type->itemSequence->setValue((string)$attributes[self::FIELD_ITEM_SEQUENCE]);
                $type->_setItemSequenceValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setItemSequence((string)$attributes[self::FIELD_ITEM_SEQUENCE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
            $xw->writeAttribute(self::FIELD_ITEM_SEQUENCE, $this->itemSequence->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->itemSequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ITEM_SEQUENCE]
                || $this->itemSequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ITEM_SEQUENCE);
            $this->itemSequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ITEM_SEQUENCE]);
            $xw->endElement();
        }
        if (isset($this->noteNumber) && [] !== $this->noteNumber) {
            foreach($this->noteNumber as $v) {
                $xw->startElement(self::FIELD_NOTE_NUMBER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->adjudication) && [] !== $this->adjudication) {
            foreach($this->adjudication as $v) {
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
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_ITEM_SEQUENCE])
            || isset($json[self::FIELD_ITEM_SEQUENCE_EXT])
            || array_key_exists(self::FIELD_ITEM_SEQUENCE, $json)
            || array_key_exists(self::FIELD_ITEM_SEQUENCE_EXT, $json)) {
            $value = $json[self::FIELD_ITEM_SEQUENCE] ?? null;
            $type->setItemSequence(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_ITEM_SEQUENCE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_NOTE_NUMBER])
            || isset($json[self::FIELD_NOTE_NUMBER_EXT])
            || array_key_exists(self::FIELD_NOTE_NUMBER, $json)
            || array_key_exists(self::FIELD_NOTE_NUMBER_EXT, $json)) {
            $value = (array)($json[self::FIELD_NOTE_NUMBER] ?? []);
            $ext = (array)($json[self::FIELD_NOTE_NUMBER_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addNoteNumber(FHIRPositiveInt::jsonUnserialize(
                    [FHIRPositiveInt::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ADJUDICATION])
            || isset($json[self::FIELD_ADJUDICATION_EXT])
            || array_key_exists(self::FIELD_ADJUDICATION, $json)
            || array_key_exists(self::FIELD_ADJUDICATION_EXT, $json)) {
            $value = (array)($json[self::FIELD_ADJUDICATION] ?? []);
            $ext = (array)($json[self::FIELD_ADJUDICATION_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addAdjudication(FHIRClaimResponseAdjudication::jsonUnserialize(
                    [FHIRClaimResponseAdjudication::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_DETAIL]) || array_key_exists(self::FIELD_DETAIL, $json)) {
            $vs = $json[self::FIELD_DETAIL];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
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
            $ext = $this->itemSequence->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_itemSequence = $ext;
            }
        }
        if (isset($this->noteNumber) && [] !== $this->noteNumber) {
            $vals = [];
            $exts = [];
            foreach ($this->noteNumber as $v) {
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
                $out->noteNumber = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_noteNumber = $exts;
            }
        }
        if (isset($this->adjudication) && [] !== $this->adjudication) {
            $vals = [];
            $exts = [];
            foreach ($this->adjudication as $v) {
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
                $out->adjudication = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_adjudication = $exts;
            }
        }
        if (isset($this->detail) && [] !== $this->detail) {
            $out->detail = $this->detail;
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}