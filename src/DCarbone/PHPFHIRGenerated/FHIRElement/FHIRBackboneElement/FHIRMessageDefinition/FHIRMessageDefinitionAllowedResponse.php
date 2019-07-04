<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 22:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Defines the characteristics of a message that can be shared between systems,
 * including the type of event that initiates the message, the content to be
 * transmitted and what response(s), if any, are permitted.
 *
 * Class FHIRMessageDefinitionAllowedResponse
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition
 */
class FHIRMessageDefinitionAllowedResponse extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MESSAGE_DEFINITION_DOT_ALLOWED_RESPONSE;

    const FIELD_MESSAGE = 'message';
    const FIELD_MESSAGE_EXT = '_message';
    const FIELD_SITUATION = 'situation';
    const FIELD_SITUATION_EXT = '_situation';

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to the message definition that must be adhered to by this supported
     * response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    private $message = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Provides a description of the circumstances in which this response should be
     * used (as opposed to one of the alternative responses).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $situation = null;

    /**
     * FHIRMessageDefinitionAllowedResponse Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageDefinitionAllowedResponse::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_MESSAGE])) {
            $ext = (isset($data[self::FIELD_MESSAGE_EXT]) && is_array($data[self::FIELD_MESSAGE_EXT]))
                ? $data[self::FIELD_MESSAGE_EXT]
                : null;
            if ($data[self::FIELD_MESSAGE] instanceof FHIRCanonical) {
                $this->setMessage($data[self::FIELD_MESSAGE]);
            } elseif ($ext && is_scalar($data[self::FIELD_MESSAGE])) {
                $this->setMessage(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_MESSAGE]] + $ext));
            } else {
                $this->setMessage(new FHIRCanonical($data[self::FIELD_MESSAGE]));
            }
        }
        if (isset($data[self::FIELD_SITUATION])) {
            $ext = (isset($data[self::FIELD_SITUATION_EXT]) && is_array($data[self::FIELD_SITUATION_EXT]))
                ? $data[self::FIELD_SITUATION_EXT]
                : null;
            if ($data[self::FIELD_SITUATION] instanceof FHIRMarkdown) {
                $this->setSituation($data[self::FIELD_SITUATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_SITUATION])) {
                $this->setSituation(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_SITUATION]] + $ext));
            } else {
                $this->setSituation(new FHIRMarkdown($data[self::FIELD_SITUATION]));
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
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to the message definition that must be adhered to by this supported
     * response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to the message definition that must be adhered to by this supported
     * response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $message
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse
     */
    public function setMessage($message = null)
    {
        if (null === $message) {
            $this->message = null;
            return $this;
        }
        if ($message instanceof FHIRCanonical) {
            $this->message = $message;
            return $this;
        }
        $this->message = new FHIRCanonical($message);
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Provides a description of the circumstances in which this response should be
     * used (as opposed to one of the alternative responses).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Provides a description of the circumstances in which this response should be
     * used (as opposed to one of the alternative responses).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown $situation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse
     */
    public function setSituation($situation = null)
    {
        if (null === $situation) {
            $this->situation = null;
            return $this;
        }
        if ($situation instanceof FHIRMarkdown) {
            $this->situation = $situation;
            return $this;
        }
        $this->situation = new FHIRMarkdown($situation);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse
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
                throw new \DomainException(sprintf('FHIRMessageDefinitionAllowedResponse::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMessageDefinitionAllowedResponse::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRMessageDefinitionAllowedResponse);
        } elseif (!is_object($type) || !($type instanceof FHIRMessageDefinitionAllowedResponse)) {
            throw new \RuntimeException(sprintf(
                'FHIRMessageDefinitionAllowedResponse::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->message)) {
            $type->setMessage((string)$attributes->message);
        }
        if (isset($children->message)) {
            $type->setMessage(FHIRCanonical::xmlUnserialize($children->message));
        }
        if (isset($attributes->situation)) {
            $type->setSituation((string)$attributes->situation);
        }
        if (isset($children->situation)) {
            $type->setSituation(FHIRMarkdown::xmlUnserialize($children->situation));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<MessageDefinitionAllowedResponse xmlns="http://hl7.org/fhir"></MessageDefinitionAllowedResponse>');
        }
        if (null !== ($v = $this->getMessage())) {
            $sxe->addAttribute(self::FIELD_MESSAGE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MESSAGE));
            }
        }
        if (null !== ($v = $this->getSituation())) {
            $sxe->addAttribute(self::FIELD_SITUATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SITUATION));
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
        if (null !== ($v = $this->getMessage())) {
            $a[self::FIELD_MESSAGE] = (string)$v;
            $a[self::FIELD_MESSAGE_EXT] = $v;
        }
        if (null !== ($v = $this->getSituation())) {
            $a[self::FIELD_SITUATION] = (string)$v;
            $a[self::FIELD_SITUATION_EXT] = $v;
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