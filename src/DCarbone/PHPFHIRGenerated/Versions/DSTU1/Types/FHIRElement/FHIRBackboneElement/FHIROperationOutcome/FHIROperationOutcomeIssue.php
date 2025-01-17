<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIssueSeverity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A collection of error, warning or information messages that result from a system
 * action.
 */
class FHIROperationOutcomeIssue extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE;


    public const FIELD_SEVERITY = 'severity';
    public const FIELD_SEVERITY_EXT = '_severity';
    public const FIELD_TYPE = 'type';
    public const FIELD_DETAILS = 'details';
    public const FIELD_DETAILS_EXT = '_details';
    public const FIELD_LOCATION = 'location';
    public const FIELD_LOCATION_EXT = '_location';

    /**
     * How the issue affects the success of the action
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIssueSeverity 
     */
    protected FHIRIssueSeverity $severity;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the type of error, warning or information message.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $type;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional description of the issue.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $details;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A simple XPath limited to element names, repetition indicators and the default
     * child access that identifies one of the elements in the resource that caused
     * this issue to be raised.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString[] 
     */
    protected array $location;

    /** Default validation map for fields in type OperationOutcome.Issue */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_SEVERITY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIROperationOutcomeIssue Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIssueSeverity $severity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $details
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString[] $location
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRIssueSeverity $severity = null,
                                null|FHIRCoding $type = null,
                                null|string|FHIRStringPrimitive|FHIRString $details = null,
                                null|iterable $location = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $severity) {
            $this->setSeverity($severity);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $details) {
            $this->setDetails($details);
        }
        if (null !== $location) {
            $this->setLocation(...$location);
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
     * How the issue affects the success of the action
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIssueSeverity
     */
    public function getSeverity(): null|FHIRIssueSeverity
    {
        return $this->severity ?? null;
    }

    /**
     * How the issue affects the success of the action
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIssueSeverity $severity
     * @return static
     */
    public function setSeverity(null|FHIRIssueSeverity $severity): self
    {
        if (null === $severity) {
            unset($this->severity);
            return $this;
        }
        $this->severity = $severity;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the type of error, warning or information message.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding
     */
    public function getType(): null|FHIRCoding
    {
        return $this->type ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the type of error, warning or information message.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(null|FHIRCoding $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional description of the issue.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDetails(): null|FHIRString
    {
        return $this->details ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional description of the issue.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $details
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDetails(null|string|FHIRStringPrimitive|FHIRString $details,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $details) {
            unset($this->details);
            return $this;
        }
        if (!($details instanceof FHIRString)) {
            $details = new FHIRString(value: $details);
        }
        if (null !== $valueXMLLocation) {
            $details->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $details->_getValueXMLLocation()) {
            $details->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->details = $details;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A simple XPath limited to element names, repetition indicators and the default
     * child access that identifies one of the elements in the resource that caused
     * this issue to be raised.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString[]
     */
    public function getLocation(): array
    {
        return $this->location ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString>
     */
    public function getLocationIterator(): iterable
    {
        if (!isset($this->location) || [] === $this->location) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->location);
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A simple XPath limited to element names, repetition indicators and the default
     * child access that identifies one of the elements in the resource that caused
     * this issue to be raised.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $location
     * @return static
     */
    public function addLocation(string|FHIRStringPrimitive|FHIRString $location): self
    {
        if (!($location instanceof FHIRString)) {
            $location = new FHIRString(value: $location);
        }
        if (!isset($this->location)) {
            $this->location = [];
        }
        $this->location[] = $location;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A simple XPath limited to element names, repetition indicators and the default
     * child access that identifies one of the elements in the resource that caused
     * this issue to be raised.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString ...$location
     * @return static
     */
    public function setLocation(string|FHIRStringPrimitive|FHIRString ...$location): self
    {
        $this->location = [];
        foreach($location as $v) {
            if ($v instanceof FHIRString) {
                $this->location[] = $v;
            } else {
                $this->location[] = new FHIRString(value: $v);
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
        if (null !== ($v = $this->getSeverity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEVERITY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SEVERITY])) {
            $v = $this->getSeverity();
            foreach($validationRules[self::FIELD_SEVERITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEVERITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEVERITY])) {
                        $errs[self::FIELD_SEVERITY] = [];
                    }
                    $errs[self::FIELD_SEVERITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAILS])) {
            $v = $this->getDetails();
            foreach($validationRules[self::FIELD_DETAILS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETAILS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAILS])) {
                        $errs[self::FIELD_DETAILS] = [];
                    }
                    $errs[self::FIELD_DETAILS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIROperationOutcomeIssue)) {
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
                $valueAttr = $n->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
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
            } else if (self::FIELD_SEVERITY === $childName) {
                $v = new FHIRIssueSeverity(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSeverity(FHIRIssueSeverity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCoding();
                $type->setType(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DETAILS === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDetails(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LOCATION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addLocation(FHIRString::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DETAILS])) {
            $pt = $type->getDetails();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DETAILS]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDetails(new FHIRString(
                    value: (string)$attributes[self::FIELD_DETAILS],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LOCATION])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_LOCATION],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addLocation($v);
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
            $xw->openRootNode('OperationOutcomeIssue', $this->_getSourceXMLNS());
        }
        if (isset($this->details) && $this->details->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DETAILS, $this->details->getValue()?->_getFormattedValue());
        }
        if (isset($this->location)) {
           foreach($this->location as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_LOCATION, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->severity)) {
            $xw->startElement(self::FIELD_SEVERITY);
            $this->severity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->details) && $this->details->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DETAILS);
            $this->details->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->location)) {
            foreach($this->location as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_LOCATION);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIROperationOutcomeIssue)) {
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
        if (isset($json[self::FIELD_SEVERITY]) || isset($json[self::FIELD_SEVERITY_EXT]) || array_key_exists(self::FIELD_SEVERITY, $json) || array_key_exists(self::FIELD_SEVERITY_EXT, $json)) {
            $value = $json[self::FIELD_SEVERITY] ?? null;
            $ext = (isset($json[self::FIELD_SEVERITY_EXT]) && is_array($json[self::FIELD_SEVERITY_EXT])) ? $json[self::FIELD_SEVERITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRIssueSeverity) {
                    $type->setSeverity($value);
                } else if (is_array($value)) {
                    $type->setSeverity(new FHIRIssueSeverity(array_merge($ext, $value)));
                } else {
                    $type->setSeverity(new FHIRIssueSeverity([FHIRIssueSeverity::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSeverity(new FHIRIssueSeverity($ext));
            } else {
                $type->setSeverity(new FHIRIssueSeverity(null));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if ($json[self::FIELD_TYPE] instanceof FHIRCoding) {
                $type->setType($json[self::FIELD_TYPE]);
            } else {
                $type->setType(new FHIRCoding($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_DETAILS]) || isset($json[self::FIELD_DETAILS_EXT]) || array_key_exists(self::FIELD_DETAILS, $json) || array_key_exists(self::FIELD_DETAILS_EXT, $json)) {
            $value = $json[self::FIELD_DETAILS] ?? null;
            $ext = (isset($json[self::FIELD_DETAILS_EXT]) && is_array($json[self::FIELD_DETAILS_EXT])) ? $json[self::FIELD_DETAILS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDetails($value);
                } else if (is_array($value)) {
                    $type->setDetails(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDetails(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDetails(new FHIRString($ext));
            } else {
                $type->setDetails(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_LOCATION]) || isset($json[self::FIELD_LOCATION_EXT]) || array_key_exists(self::FIELD_LOCATION, $json) || array_key_exists(self::FIELD_LOCATION_EXT, $json)) {
            $value = $json[self::FIELD_LOCATION] ?? null;
            $ext = (isset($json[self::FIELD_LOCATION_EXT]) && is_array($json[self::FIELD_LOCATION_EXT])) ? $json[self::FIELD_LOCATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addLocation($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addLocation($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addLocation(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addLocation(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addLocation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addLocation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addLocation(new FHIRString($iext));
                }
            } else {
                $type->addLocation(new FHIRString(null));
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
        if (isset($this->severity)) {
            if (null !== ($val = $this->severity->getValue())) {
                $out->severity = $val;
            }
            $ext = $this->severity->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_severity = $ext;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->details)) {
            if (null !== ($val = $this->details->getValue())) {
                $out->details = $val;
            }
            $ext = $this->details->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_details = $ext;
            }
        }
        if (isset($this->location) && [] !== $this->location) {
            $vals = [];
            $exts = [];
            foreach ($this->location as $v) {
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
                $out->location = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_location = $exts;
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