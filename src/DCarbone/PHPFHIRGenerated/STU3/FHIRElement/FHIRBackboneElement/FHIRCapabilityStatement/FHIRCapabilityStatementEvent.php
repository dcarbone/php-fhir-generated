<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventCapabilityMode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMessageSignificanceCategory;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server that may be used as a statement of actual server functionality or a
 * statement of required or desired server implementation.
 *
 * Class FHIRCapabilityStatementEvent
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementEvent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_EVENT;

    const FIELD_CATEGORY = 'category';
    const FIELD_CODE = 'code';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_FOCUS = 'focus';
    const FIELD_MODE = 'mode';
    const FIELD_REQUEST = 'request';
    const FIELD_RESPONSE = 'response';

    /**
     * The impact of the content of a message.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The impact of the content of the message.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMessageSignificanceCategory
     */
    private $category = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A coded identifier of a supported messaging event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    private $code = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Guidance on how this event is handled, such as internal system trigger points,
     * business rules, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $documentation = null;
    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A resource associated with the event. This is the resource that defines the
     * event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType
     */
    private $focus = null;
    /**
     * The mode of a message capability statement.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The mode of this event declaration - whether an application is a sender or
     * receiver.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventCapabilityMode
     */
    private $mode = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information about the request for this event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $request = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information about the response for this event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $response = null;

    /**
     * FHIRCapabilityStatementEvent Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementEvent::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRMessageSignificanceCategory) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRMessageSignificanceCategory($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCoding) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCoding($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION])) {
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT]))
                ? $data[self::FIELD_DOCUMENTATION_EXT]
                : null;
            if ($data[self::FIELD_DOCUMENTATION] instanceof FHIRString) {
                $this->setDocumentation($data[self::FIELD_DOCUMENTATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOCUMENTATION])) {
                $this->setDocumentation(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DOCUMENTATION]] + $ext));
            } else {
                $this->setDocumentation(new FHIRString($data[self::FIELD_DOCUMENTATION]));
            }
        }
        if (isset($data[self::FIELD_FOCUS])) {
            $this->setFocus($data[self::FIELD_FOCUS]);
        }
        if (isset($data[self::FIELD_MODE])) {
            if ($data[self::FIELD_MODE] instanceof FHIREventCapabilityMode) {
                $this->setMode($data[self::FIELD_MODE]);
            } else {
                $this->setMode(new FHIREventCapabilityMode($data[self::FIELD_MODE]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_RESPONSE])) {
            if ($data[self::FIELD_RESPONSE] instanceof FHIRReference) {
                $this->setResponse($data[self::FIELD_RESPONSE]);
            } else {
                $this->setResponse(new FHIRReference($data[self::FIELD_RESPONSE]));
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
     * The impact of the content of a message.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The impact of the content of the message.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMessageSignificanceCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The impact of the content of a message.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The impact of the content of the message.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMessageSignificanceCategory $category
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent
     */
    public function setCategory(FHIRMessageSignificanceCategory $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A coded identifier of a supported messaging event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A coded identifier of a supported messaging event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $code
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent
     */
    public function setCode(FHIRCoding $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Guidance on how this event is handled, such as internal system trigger points,
     * business rules, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Guidance on how this event is handled, such as internal system trigger points,
     * business rules, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $documentation
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent
     */
    public function setDocumentation($documentation = null)
    {
        if (null === $documentation) {
            $this->documentation = null;
            return $this;
        }
        if ($documentation instanceof FHIRString) {
            $this->documentation = $documentation;
            return $this;
        }
        $this->documentation = new FHIRString($documentation);
        return $this;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A resource associated with the event. This is the resource that defines the
     * event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A resource associated with the event. This is the resource that defines the
     * event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType $focus
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent
     */
    public function setFocus($focus = null)
    {
        if (null === $focus) {
            $this->focus = null;
            return $this;
        }
        if ($focus instanceof FHIRResourceType) {
            $this->focus = $focus;
            return $this;
        }
        $this->focus = new FHIRResourceType($focus);
        return $this;
    }

    /**
     * The mode of a message capability statement.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The mode of this event declaration - whether an application is a sender or
     * receiver.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventCapabilityMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The mode of a message capability statement.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The mode of this event declaration - whether an application is a sender or
     * receiver.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventCapabilityMode $mode
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent
     */
    public function setMode(FHIREventCapabilityMode $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information about the request for this event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information about the request for this event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $request
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent
     */
    public function setRequest(FHIRReference $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information about the response for this event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information about the response for this event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $response
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent
     */
    public function setResponse(FHIRReference $response = null)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent
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
                throw new \DomainException(sprintf('FHIRCapabilityStatementEvent::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCapabilityStatementEvent::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRCapabilityStatementEvent);
        } elseif (!is_object($type) || !($type instanceof FHIRCapabilityStatementEvent)) {
            throw new \RuntimeException(sprintf(
                'FHIRCapabilityStatementEvent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->category)) {
            $type->setCategory(FHIRMessageSignificanceCategory::xmlUnserialize($children->category));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCoding::xmlUnserialize($children->code));
        }
        if (isset($attributes->documentation)) {
            $type->setDocumentation((string)$attributes->documentation);
        }
        if (isset($children->documentation)) {
            $type->setDocumentation(FHIRString::xmlUnserialize($children->documentation));
        }
        if (isset($attributes->focus)) {
            $type->setFocus((string)$attributes->focus);
        }
        if (isset($children->focus)) {
            $type->setFocus(FHIRResourceType::xmlUnserialize($children->focus));
        }
        if (isset($children->mode)) {
            $type->setMode(FHIREventCapabilityMode::xmlUnserialize($children->mode));
        }
        if (isset($children->request)) {
            $type->setRequest(FHIRReference::xmlUnserialize($children->request));
        }
        if (isset($children->response)) {
            $type->setResponse(FHIRReference::xmlUnserialize($children->response));
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
            $sxe = new \SimpleXMLElement('<CapabilityStatementEvent xmlns="http://hl7.org/fhir"></CapabilityStatementEvent>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY));
        }

        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
        }
        if (null !== ($v = $this->getDocumentation())) {
            $sxe->addAttribute(self::FIELD_DOCUMENTATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENTATION));
            }
        }
        if (null !== ($v = $this->getFocus())) {
            $sxe->addAttribute(self::FIELD_FOCUS, (string)$v);
            $v->xmlSerialize($sxe->addChild(self::FIELD_FOCUS));
        }

        if (null !== ($v = $this->getMode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MODE));
        }

        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST));
        }

        if (null !== ($v = $this->getResponse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a[self::FIELD_DOCUMENTATION] = (string)$v;
            $a[self::FIELD_DOCUMENTATION_EXT] = $v;
        }
        if (null !== ($v = $this->getFocus())) {
            $a[self::FIELD_FOCUS] = $v;
        }
        if (null !== ($v = $this->getMode())) {
            $a[self::FIELD_MODE] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a[self::FIELD_RESPONSE] = $v;
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