<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 21:57+0000
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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTypeRestfulInteraction;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server for a particular version of FHIR that may be used as a statement of
 * actual server functionality or a statement of required or desired server
 * implementation.
 *
 * Class FHIRCapabilityStatementInteraction
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementInteraction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_INTERACTION;

    const FIELD_CODE = 'code';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';

    /**
     * Operations supported by REST at the type or instance level.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Coded identifier of the operation, supported by the system resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTypeRestfulInteraction
     */
    private $code = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Guidance specific to the implementation of this operation, such as 'delete is a
     * logical delete' or 'updates are only allowed with version id' or 'creates
     * permitted from pre-authorized certificates only'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $documentation = null;

    /**
     * FHIRCapabilityStatementInteraction Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementInteraction::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRTypeRestfulInteraction) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRTypeRestfulInteraction($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION])) {
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT]))
                ? $data[self::FIELD_DOCUMENTATION_EXT]
                : null;
            if ($data[self::FIELD_DOCUMENTATION] instanceof FHIRMarkdown) {
                $this->setDocumentation($data[self::FIELD_DOCUMENTATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOCUMENTATION])) {
                $this->setDocumentation(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DOCUMENTATION]] + $ext));
            } else {
                $this->setDocumentation(new FHIRMarkdown($data[self::FIELD_DOCUMENTATION]));
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
     * Operations supported by REST at the type or instance level.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Coded identifier of the operation, supported by the system resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTypeRestfulInteraction
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Operations supported by REST at the type or instance level.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Coded identifier of the operation, supported by the system resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTypeRestfulInteraction $code
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction
     */
    public function setCode(FHIRTypeRestfulInteraction $code = null)
    {
        $this->code = $code;
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
     * Guidance specific to the implementation of this operation, such as 'delete is a
     * logical delete' or 'updates are only allowed with version id' or 'creates
     * permitted from pre-authorized certificates only'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation()
    {
        return $this->documentation;
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
     * Guidance specific to the implementation of this operation, such as 'delete is a
     * logical delete' or 'updates are only allowed with version id' or 'creates
     * permitted from pre-authorized certificates only'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown $documentation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction
     */
    public function setDocumentation($documentation = null)
    {
        if (null === $documentation) {
            $this->documentation = null;
            return $this;
        }
        if ($documentation instanceof FHIRMarkdown) {
            $this->documentation = $documentation;
            return $this;
        }
        $this->documentation = new FHIRMarkdown($documentation);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction
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
                throw new \DomainException(sprintf('FHIRCapabilityStatementInteraction::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCapabilityStatementInteraction::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRCapabilityStatementInteraction);
        } elseif (!is_object($type) || !($type instanceof FHIRCapabilityStatementInteraction)) {
            throw new \RuntimeException(sprintf(
                'FHIRCapabilityStatementInteraction::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->code)) {
            $type->setCode(FHIRTypeRestfulInteraction::xmlUnserialize($children->code));
        }
        if (isset($attributes->documentation)) {
            $type->setDocumentation((string)$attributes->documentation);
        }
        if (isset($children->documentation)) {
            $type->setDocumentation(FHIRMarkdown::xmlUnserialize($children->documentation));
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
            $sxe = new \SimpleXMLElement('<CapabilityStatementInteraction xmlns="http://hl7.org/fhir"></CapabilityStatementInteraction>');
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
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a[self::FIELD_DOCUMENTATION] = (string)$v;
            $a[self::FIELD_DOCUMENTATION_EXT] = $v;
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