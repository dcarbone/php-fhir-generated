<?php

namespace DCarbone\PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:22+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension;

/**
 * Base definition for all elements in a resource.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRElement
 * @package \DCarbone\PHPFHIRGenerated
 */
class FHIRElement implements PHPFHIRTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT;

    const FIELD_EXTENSION = 'extension';
    const FIELD_ID = 'id';

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the element. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    private $extension = [];

    /**
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRStringPrimitive
     */
    private $id = null;

    /**
     * FHIRElement Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElement::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        if (isset($data[self::FIELD_EXTENSION])) {
            if (is_array($data[self::FIELD_EXTENSION])) {
                foreach($data[self::FIELD_EXTENSION] as $v) {
                    if ($v instanceof FHIRExtension) {
                        $this->addExtension($v);
                    } else {
                        $this->addExtension(new FHIRExtension($v));
                    }
                }
            } else if ($data[self::FIELD_EXTENSION] instanceof FHIRExtension) {
                $this->addExtension($data[self::FIELD_EXTENSION]);
            } else {
                $this->addExtension(new FHIRExtension($data[self::FIELD_EXTENSION]));
            }
        }
        if (isset($data[self::FIELD_ID])) {
            $this->setId($data[self::FIELD_ID]);
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
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the element. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the element. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension $extension
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement
     */
    public function addExtension(FHIRExtension $extension = null)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the element. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension[] $extension
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement
     */
    public function setExtension(array $extension = [])
    {
        $this->extension = [];
        if ([] === $extension) {
            return $this;
        }
        foreach($extension as $v) {
            if ($v instanceof FHIRExtension) {
                $this->addExtension($v);
            } else {
                $this->addExtension(new FHIRExtension($v));
            }
        }
        return $this;
    }

    /**
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRStringPrimitive
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRStringPrimitive $id
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement
     */
    public function setId($id = null)
    {
        if (null === $id) {
            $this->id = null;
            return $this;
        }
        if ($id instanceof FHIRStringPrimitive) {
            $this->id = $id;
            return $this;
        }
        $this->id = new FHIRStringPrimitive($id);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement
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
                throw new \DomainException(sprintf('FHIRElement::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRElement::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new static();
        } elseif (!is_object($type) || !($type instanceof FHIRElement)) {
            throw new \RuntimeException(sprintf(
                'FHIRElement::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->extension)) {
            foreach($children->extension as $child) {
                $type->addExtension(FHIRExtension::xmlUnserialize($child));
            }
        }
        if (isset($attributes->id)) {
            $type->setId((string)$attributes->id);
        }
        if (isset($children->id)) {
            $type->setId(FHIRStringPrimitive::xmlUnserialize($children->id));
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
            $sxe = new \SimpleXMLElement('<Element xmlns="http://hl7.org/fhir"></Element>');
        }
        if ([] !== ($vs = $this->getExtension())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXTENSION));
            }
        }
        if (null !== ($v = $this->getId())) {
            $sxe->addAttribute(self::FIELD_ID, (string)$v);
            $v->xmlSerialize($sxe->addChild(self::FIELD_ID));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = [];
        if ([] !== ($vs = $this->getExtension())) {
            $a[self::FIELD_EXTENSION] = $vs;
        }
        if (null !== ($v = $this->getId())) {
            $a[self::FIELD_ID] = $v;
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