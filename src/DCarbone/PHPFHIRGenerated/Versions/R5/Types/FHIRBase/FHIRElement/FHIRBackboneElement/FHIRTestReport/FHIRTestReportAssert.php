<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestReport;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTestReportActionResult;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRTestReportActionResultEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A summary of information based on the results of executing a TestScript.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRTestReportAssert extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT;

    /* class_default.php:56 */
    public const FIELD_RESULT = 'result';
    public const FIELD_RESULT_EXT = '_result';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_MESSAGE_EXT = '_message';
    public const FIELD_DETAIL = 'detail';
    public const FIELD_DETAIL_EXT = '_detail';
    public const FIELD_REQUIREMENT = 'requirement';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_RESULT => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_RESULT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MESSAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DETAIL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * The results of executing an action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The result of this assertion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTestReportActionResult 
     */
    #[FHIRTestReportActionResult]
    protected FHIRTestReportActionResult $result;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An explanatory message associated with the result.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $message;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A link to further details on the result.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $detail;
    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportRequirement> 
     */
    #[FHIRTestReportRequirement]
    protected array $requirement;

    /* constructor.php:61 */
    /**
     * FHIRTestReportAssert Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRTestReportActionResultEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTestReportActionResult $result
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $message
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $detail
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportRequirement> $requirement
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRTestReportActionResultEnum|FHIRTestReportActionResult $result = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $message = null,
                                null|string|FHIRStringPrimitive|FHIRString $detail = null,
                                null|iterable $requirement = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $result) {
            $this->setResult($result);
        }
        if (null !== $message) {
            $this->setMessage($message);
        }
        if (null !== $detail) {
            $this->setDetail($detail);
        }
        if (null !== $requirement) {
            $this->setRequirement(...$requirement);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * The results of executing an action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The result of this assertion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTestReportActionResult
     */
    public function getResult(): null|FHIRTestReportActionResult
    {
        return $this->result ?? null;
    }

    /**
     * The results of executing an action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The result of this assertion.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRTestReportActionResultEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTestReportActionResult $result
     * @return static
     */
    public function setResult(null|string|FHIRTestReportActionResultEnum|FHIRTestReportActionResult $result): self
    {
        if (null === $result) {
            unset($this->result);
            return $this;
        }
        if (!($result instanceof FHIRTestReportActionResult)) {
            $result = new FHIRTestReportActionResult(value: $result);
        }
        $this->result = $result;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An explanatory message associated with the result.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getMessage(): null|FHIRMarkdown
    {
        return $this->message ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An explanatory message associated with the result.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $message
     * @return static
     */
    public function setMessage(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $message): self
    {
        if (null === $message) {
            unset($this->message);
            return $this;
        }
        if (!($message instanceof FHIRMarkdown)) {
            $message = new FHIRMarkdown(value: $message);
        }
        $this->message = $message;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A link to further details on the result.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDetail(): null|FHIRString
    {
        return $this->detail ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A link to further details on the result.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $detail
     * @return static
     */
    public function setDetail(null|string|FHIRStringPrimitive|FHIRString $detail): self
    {
        if (null === $detail) {
            unset($this->detail);
            return $this;
        }
        if (!($detail instanceof FHIRString)) {
            $detail = new FHIRString(value: $detail);
        }
        $this->detail = $detail;
        return $this;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportRequirement>
     */
    public function getRequirement(): array
    {
        return $this->requirement ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportRequirement>
     */
    public function getRequirementIterator(): iterable
    {
        if (!isset($this->requirement)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->requirement);
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportRequirement $requirement
     * @return static
     */
    public function addRequirement(FHIRTestReportRequirement $requirement): self
    {
        if (!isset($this->requirement)) {
            $this->requirement = [];
        }
        $this->requirement[] = $requirement;
        return $this;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     *
     * Links or references providing traceability to the testing requirements for this
     * assert.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportRequirement ...$requirement
     * @return static
     */
    public function setRequirement(FHIRTestReportRequirement ...$requirement): self
    {
        if ([] === $requirement) {
            unset($this->requirement);
            return $this;
        }
        $this->requirement = $requirement;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTestReportAssert)) {
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
            } else if (self::FIELD_RESULT === $cen) {
                $type->setResult(FHIRTestReportActionResult::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MESSAGE === $cen) {
                $type->setMessage(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL === $cen) {
                $type->setDetail(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUIREMENT === $cen) {
                $type->addRequirement(FHIRTestReportRequirement::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_RESULT])) {
            if (isset($type->result)) {
                $type->result->setValue((string)$attributes[self::FIELD_RESULT]);
            } else {
                $type->setResult((string)$attributes[self::FIELD_RESULT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_RESULT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MESSAGE])) {
            if (isset($type->message)) {
                $type->message->setValue((string)$attributes[self::FIELD_MESSAGE]);
            } else {
                $type->setMessage((string)$attributes[self::FIELD_MESSAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MESSAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DETAIL])) {
            if (isset($type->detail)) {
                $type->detail->setValue((string)$attributes[self::FIELD_DETAIL]);
            } else {
                $type->setDetail((string)$attributes[self::FIELD_DETAIL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DETAIL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->result) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RESULT]) {
            $xw->writeAttribute(self::FIELD_RESULT, $this->result->_getValueAsString());
        }
        if (isset($this->message) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MESSAGE]) {
            $xw->writeAttribute(self::FIELD_MESSAGE, $this->message->_getValueAsString());
        }
        if (isset($this->detail) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAIL]) {
            $xw->writeAttribute(self::FIELD_DETAIL, $this->detail->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->result)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RESULT]
                || $this->result->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RESULT);
            $this->result->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RESULT]);
            $xw->endElement();
        }
        if (isset($this->message)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MESSAGE]
                || $this->message->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MESSAGE);
            $this->message->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MESSAGE]);
            $xw->endElement();
        }
        if (isset($this->detail)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DETAIL]
                || $this->detail->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DETAIL);
            $this->detail->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DETAIL]);
            $xw->endElement();
        }
        if (isset($this->requirement)) {
            foreach ($this->requirement as $v) {
                $xw->startElement(self::FIELD_REQUIREMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTestReportAssert)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->result)
            || isset($decoded->_result)
            || property_exists($decoded, self::FIELD_RESULT)
            || property_exists($decoded, self::FIELD_RESULT_EXT)) {
            $v = $decoded->_result ?? new \stdClass();
            $v->value = $decoded->result ?? null;
            $type->setResult(FHIRTestReportActionResult::jsonUnserialize($v, $config));
        }
        if (isset($decoded->message)
            || isset($decoded->_message)
            || property_exists($decoded, self::FIELD_MESSAGE)
            || property_exists($decoded, self::FIELD_MESSAGE_EXT)) {
            $v = $decoded->_message ?? new \stdClass();
            $v->value = $decoded->message ?? null;
            $type->setMessage(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->detail)
            || isset($decoded->_detail)
            || property_exists($decoded, self::FIELD_DETAIL)
            || property_exists($decoded, self::FIELD_DETAIL_EXT)) {
            $v = $decoded->_detail ?? new \stdClass();
            $v->value = $decoded->detail ?? null;
            $type->setDetail(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->requirement) || property_exists($decoded, self::FIELD_REQUIREMENT)) {
            if (is_object($decoded->requirement)) {
                $vals = [$decoded->requirement];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REQUIREMENT, true);
            } else {
                $vals = $decoded->requirement;
            }
            foreach($vals as $v) {
                $type->addRequirement(FHIRTestReportRequirement::jsonUnserialize($v, $config));
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
        if (isset($this->result)) {
            if (null !== ($val = $this->result->getValue())) {
                $out->result = $val;
            }
            if ($this->result->_nonValueFieldDefined()) {
                $ext = $this->result->jsonSerialize();
                unset($ext->value);
                $out->_result = $ext;
            }
        }
        if (isset($this->message)) {
            if (null !== ($val = $this->message->getValue())) {
                $out->message = $val;
            }
            if ($this->message->_nonValueFieldDefined()) {
                $ext = $this->message->jsonSerialize();
                unset($ext->value);
                $out->_message = $ext;
            }
        }
        if (isset($this->detail)) {
            if (null !== ($val = $this->detail->getValue())) {
                $out->detail = $val;
            }
            if ($this->detail->_nonValueFieldDefined()) {
                $ext = $this->detail->jsonSerialize();
                unset($ext->value);
                $out->_detail = $ext;
            }
        }
        if (isset($this->requirement) && [] !== $this->requirement) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REQUIREMENT) && 1 === count($this->requirement)) {
                $out->requirement = $this->requirement[0];
            } else {
                $out->requirement = $this->requirement;
            }
        }
        return $out;
    }
}