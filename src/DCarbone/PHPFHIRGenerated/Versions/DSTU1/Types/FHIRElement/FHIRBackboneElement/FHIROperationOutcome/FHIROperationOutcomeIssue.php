<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome;

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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIssueSeverity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRIssueSeverityList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A collection of error, warning or information messages that result from a system
 * action.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIROperationOutcomeIssue extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE;

    /* class_default.php:56 */
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_SEVERITY_EXT = '_severity';
    public const FIELD_TYPE = 'type';
    public const FIELD_DETAILS = 'details';
    public const FIELD_DETAILS_EXT = '_details';
    public const FIELD_LOCATION = 'location';
    public const FIELD_LOCATION_EXT = '_location';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_SEVERITY => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_SEVERITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DETAILS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * How the issue affects the success of the action
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIssueSeverity 
     */
    #[FHIRIssueSeverity]
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
    #[FHIRCoding]
    protected FHIRCoding $type;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional description of the issue.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $details;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A simple XPath limited to element names, repetition indicators and the default
     * child access that identifies one of the elements in the resource that caused
     * this issue to be raised.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString> 
     */
    #[FHIRString]
    protected array $location;

    /* constructor.php:61 */
    /**
     * FHIROperationOutcomeIssue Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRIssueSeverityList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIssueSeverity $severity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $details
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString> $location
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRIssueSeverityList|FHIRIssueSeverity $severity = null,
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

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRIssueSeverityList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIssueSeverity $severity
     * @return static
     */
    public function setSeverity(null|string|FHIRIssueSeverityList|FHIRIssueSeverity $severity): self
    {
        if (null === $severity) {
            unset($this->severity);
            return $this;
        }
        if (!($severity instanceof FHIRIssueSeverity)) {
            $severity = new FHIRIssueSeverity(value: $severity);
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
     * @return static
     */
    public function setDetails(null|string|FHIRStringPrimitive|FHIRString $details): self
    {
        if (null === $details) {
            unset($this->details);
            return $this;
        }
        if (!($details instanceof FHIRString)) {
            $details = new FHIRString(value: $details);
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString>
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
        if (!isset($this->location)) {
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
        if ([] === $location) {
            unset($this->location);
            return $this;
        }
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

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEVERITY === $cen) {
                $type->setSeverity(FHIRIssueSeverity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAILS === $cen) {
                $type->setDetails(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->addLocation(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEVERITY])) {
            if (isset($type->severity)) {
                $type->severity->setValue((string)$attributes[self::FIELD_SEVERITY]);
            } else {
                $type->setSeverity((string)$attributes[self::FIELD_SEVERITY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SEVERITY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DETAILS])) {
            if (isset($type->details)) {
                $type->details->setValue((string)$attributes[self::FIELD_DETAILS]);
            } else {
                $type->setDetails((string)$attributes[self::FIELD_DETAILS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DETAILS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->severity) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SEVERITY]) {
            $xw->writeAttribute(self::FIELD_SEVERITY, $this->severity->_getValueAsString());
        }
        if (isset($this->details) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAILS]) {
            $xw->writeAttribute(self::FIELD_DETAILS, $this->details->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->severity)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEVERITY]
                || $this->severity->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEVERITY);
            $this->severity->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEVERITY]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->details)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DETAILS]
                || $this->details->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DETAILS);
            $this->details->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DETAILS]);
            $xw->endElement();
        }
        if (isset($this->location) && [] !== $this->location) {
            foreach($this->location as $v) {
                $xw->startElement(self::FIELD_LOCATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->severity)
            || isset($decoded->_severity)
            || property_exists($decoded, self::FIELD_SEVERITY)
            || property_exists($decoded, self::FIELD_SEVERITY_EXT)) {
            $v = $decoded->_severity ?? new \stdClass();
            $v->value = $decoded->severity ?? null;
            $type->setSeverity(FHIRIssueSeverity::jsonUnserialize($v, $config));
        }
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_array($decoded->type)) {
                $type->setType(FHIRCoding::jsonUnserialize(reset($decoded->type), $config));
            } else {
                $type->setType(FHIRCoding::jsonUnserialize($decoded->type, $config));
            }
        }
        if (isset($decoded->details)
            || isset($decoded->_details)
            || property_exists($decoded, self::FIELD_DETAILS)
            || property_exists($decoded, self::FIELD_DETAILS_EXT)) {
            $v = $decoded->_details ?? new \stdClass();
            $v->value = $decoded->details ?? null;
            $type->setDetails(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->location)
            || isset($decoded->_location)
            || property_exists($decoded, self::FIELD_LOCATION)
            || property_exists($decoded, self::FIELD_LOCATION_EXT)) {
            $vals = (array)($decoded->location ?? []);
            $exts = (array)($decoded->FIELD_LOCATION_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addLocation(FHIRString::jsonUnserialize($v, $config));
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
            if ($this->severity->_nonValueFieldDefined()) {
                $ext = $this->severity->jsonSerialize();
                unset($ext->value);
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
            if ($this->details->_nonValueFieldDefined()) {
                $ext = $this->details->jsonSerialize();
                unset($ext->value);
                $out->_details = $ext;
            }
        }
        if (isset($this->location) && [] !== $this->location) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->location as $v) {
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
                $out->location = $vals;
            }
            if ($hasExts) {
                $out->_location = $exts;
            }
        }
        return $out;
    }
}