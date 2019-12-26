<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTestReportActionResult;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A summary of information based on the results of executing a TestScript.
 *
 * Class FHIRTestReportAssert
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport
 */
class FHIRTestReportAssert extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT;
    const FIELD_DETAIL = 'detail';
    const FIELD_DETAIL_EXT = '_detail';
    const FIELD_MESSAGE = 'message';
    const FIELD_MESSAGE_EXT = '_message';
    const FIELD_RESULT = 'result';
    const FIELD_RESULT_EXT = '_result';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A link to further details on the result.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $detail = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $message = null;

    /**
     * The results of executing an action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The result of this assertion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTestReportActionResult
     */
    protected $result = null;

    /**
     * Validation map for fields in type TestReport.Assert
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRTestReportAssert Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestReportAssert::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DETAIL]) || isset($data[self::FIELD_DETAIL_EXT])) {
            if (isset($data[self::FIELD_DETAIL])) {
                $value = $data[self::FIELD_DETAIL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DETAIL_EXT]) && is_array($data[self::FIELD_DETAIL_EXT])) {
                $ext = $data[self::FIELD_DETAIL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDetail($value);
                } else if (is_array($value)) {
                    $this->setDetail(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDetail(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDetail(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MESSAGE]) || isset($data[self::FIELD_MESSAGE_EXT])) {
            if (isset($data[self::FIELD_MESSAGE])) {
                $value = $data[self::FIELD_MESSAGE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MESSAGE_EXT]) && is_array($data[self::FIELD_MESSAGE_EXT])) {
                $ext = $data[self::FIELD_MESSAGE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setMessage($value);
                } else if (is_array($value)) {
                    $this->setMessage(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setMessage(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMessage(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_RESULT]) || isset($data[self::FIELD_RESULT_EXT])) {
            if (isset($data[self::FIELD_RESULT])) {
                $value = $data[self::FIELD_RESULT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RESULT_EXT]) && is_array($data[self::FIELD_RESULT_EXT])) {
                $ext = $data[self::FIELD_RESULT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTestReportActionResult) {
                    $this->setResult($value);
                } else if (is_array($value)) {
                    $this->setResult(new FHIRTestReportActionResult(array_merge($ext, $value)));
                } else {
                    $this->setResult(new FHIRTestReportActionResult([FHIRTestReportActionResult::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setResult(new FHIRTestReportActionResult($ext));
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
        return "<TestReportAssert{$xmlns}></TestReportAssert>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A link to further details on the result.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A link to further details on the result.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $detail
     * @return static
     */
    public function setDetail($detail = null)
    {
        if (null === $detail) {
            $this->detail = null;
            return $this;
        }
        if ($detail instanceof FHIRString) {
            $this->detail = $detail;
            return $this;
        }
        $this->detail = new FHIRString($detail);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getMessage()
    {
        return $this->message;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $message
     * @return static
     */
    public function setMessage($message = null)
    {
        if (null === $message) {
            $this->message = null;
            return $this;
        }
        if ($message instanceof FHIRMarkdown) {
            $this->message = $message;
            return $this;
        }
        $this->message = new FHIRMarkdown($message);
        return $this;
    }

    /**
     * The results of executing an action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The result of this assertion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTestReportActionResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The results of executing an action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The result of this assertion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTestReportActionResult $result
     * @return static
     */
    public function setResult(FHIRTestReportActionResult $result = null)
    {
        $this->result = $result;
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
        if (null !== ($v = $this->getDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMessage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MESSAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResult())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESULT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL])) {
            $v = $this->getDetail();
            foreach($validationRules[self::FIELD_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT, self::FIELD_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL])) {
                        $errs[self::FIELD_DETAIL] = [];
                    }
                    $errs[self::FIELD_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MESSAGE])) {
            $v = $this->getMessage();
            foreach($validationRules[self::FIELD_MESSAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT, self::FIELD_MESSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MESSAGE])) {
                        $errs[self::FIELD_MESSAGE] = [];
                    }
                    $errs[self::FIELD_MESSAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULT])) {
            $v = $this->getResult();
            foreach($validationRules[self::FIELD_RESULT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT, self::FIELD_RESULT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULT])) {
                        $errs[self::FIELD_RESULT] = [];
                    }
                    $errs[self::FIELD_RESULT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert
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
                throw new \DomainException(sprintf('FHIRTestReportAssert::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTestReportAssert::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTestReportAssert;
        } elseif (!is_object($type) || !($type instanceof FHIRTestReportAssert)) {
            throw new \RuntimeException(sprintf(
                'FHIRTestReportAssert::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->detail)) {
            $type->setDetail(FHIRString::xmlUnserialize($children->detail));
        }
        if (isset($attributes->detail)) {
            $pt = $type->getDetail();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->detail);
            } else {
                $type->setDetail((string)$attributes->detail);
            }
        }
        if (isset($children->message)) {
            $type->setMessage(FHIRMarkdown::xmlUnserialize($children->message));
        }
        if (isset($attributes->message)) {
            $pt = $type->getMessage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->message);
            } else {
                $type->setMessage((string)$attributes->message);
            }
        }
        if (isset($children->result)) {
            $type->setResult(FHIRTestReportActionResult::xmlUnserialize($children->result));
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
        if (null !== ($v = $this->getDetail())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMessage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MESSAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResult())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESULT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDetail())) {
            $a[self::FIELD_DETAIL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DETAIL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMessage())) {
            $a[self::FIELD_MESSAGE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_MESSAGE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getResult())) {
            $a[self::FIELD_RESULT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTestReportActionResult::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTestReportActionResult::FIELD_VALUE]);
                $a[self::FIELD_RESULT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}