<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 29th, 2019 23:11+0000
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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREventCapabilityMode;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server for a particular version of FHIR that may be used as a statement of
 * actual server functionality or a statement of required or desired server
 * implementation.
 *
 * Class FHIRCapabilityStatementSupportedMessage
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementSupportedMessage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SUPPORTED_MESSAGE;
    const FIELD_DEFINITION = 'definition';
    const FIELD_DEFINITION_EXT = '_definition';
    const FIELD_MODE = 'mode';
    const FIELD_MODE_EXT = '_mode';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Points to a message definition that identifies the messaging event, message
     * structure, allowed responses, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    protected $definition = null;

    /**
     * The mode of a message capability statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mode of this event declaration - whether application is sender or receiver.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREventCapabilityMode
     */
    protected $mode = null;

    /**
     * Validation map for fields in type CapabilityStatement.SupportedMessage
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRCapabilityStatementSupportedMessage Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementSupportedMessage::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DEFINITION])) {
            $ext = (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT]))
                ? $data[self::FIELD_DEFINITION_EXT]
                : null;
            if ($data[self::FIELD_DEFINITION] instanceof FHIRCanonical) {
                $this->setDefinition($data[self::FIELD_DEFINITION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFINITION])) {
                    $this->setDefinition(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_DEFINITION]] + $ext));
                } else if (is_array($data[self::FIELD_DEFINITION])) {
                    $this->setDefinition(new FHIRCanonical(array_merge($ext, $data[self::FIELD_DEFINITION])));
                }
            } else {
                $this->setDefinition(new FHIRCanonical($data[self::FIELD_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_MODE])) {
            $ext = (isset($data[self::FIELD_MODE_EXT]) && is_array($data[self::FIELD_MODE_EXT]))
                ? $data[self::FIELD_MODE_EXT]
                : null;
            if ($data[self::FIELD_MODE] instanceof FHIREventCapabilityMode) {
                $this->setMode($data[self::FIELD_MODE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MODE])) {
                    $this->setMode(new FHIREventCapabilityMode([FHIREventCapabilityMode::FIELD_VALUE => $data[self::FIELD_MODE]] + $ext));
                } else if (is_array($data[self::FIELD_MODE])) {
                    $this->setMode(new FHIREventCapabilityMode(array_merge($ext, $data[self::FIELD_MODE])));
                }
            } else {
                $this->setMode(new FHIREventCapabilityMode($data[self::FIELD_MODE]));
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
        return "<CapabilityStatementSupportedMessage{$xmlns}></CapabilityStatementSupportedMessage>";
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Points to a message definition that identifies the messaging event, message
     * structure, allowed responses, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Points to a message definition that identifies the messaging event, message
     * structure, allowed responses, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $definition
     * @return static
     */
    public function setDefinition($definition = null)
    {
        if (null === $definition) {
            $this->definition = null;
            return $this;
        }
        if ($definition instanceof FHIRCanonical) {
            $this->definition = $definition;
            return $this;
        }
        $this->definition = new FHIRCanonical($definition);
        return $this;
    }

    /**
     * The mode of a message capability statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mode of this event declaration - whether application is sender or receiver.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREventCapabilityMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The mode of a message capability statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The mode of this event declaration - whether application is sender or receiver.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIREventCapabilityMode $mode
     * @return static
     */
    public function setMode(FHIREventCapabilityMode $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage
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
                throw new \DomainException(sprintf('FHIRCapabilityStatementSupportedMessage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCapabilityStatementSupportedMessage::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCapabilityStatementSupportedMessage;
        } elseif (!is_object($type) || !($type instanceof FHIRCapabilityStatementSupportedMessage)) {
            throw new \RuntimeException(sprintf(
                'FHIRCapabilityStatementSupportedMessage::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage or null, %s seen.',
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
        if (isset($attributes->definition)) {
            $type->setDefinition((string)$attributes->definition);
        }
        if (isset($children->definition)) {
            $type->setDefinition(FHIRCanonical::xmlUnserialize($children->definition));
        }
        if (isset($children->mode)) {
            $type->setMode(FHIREventCapabilityMode::xmlUnserialize($children->mode));
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

        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MODE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DEFINITION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMode())) {
            $a[self::FIELD_MODE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_MODE_EXT] = $enc;
            }
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