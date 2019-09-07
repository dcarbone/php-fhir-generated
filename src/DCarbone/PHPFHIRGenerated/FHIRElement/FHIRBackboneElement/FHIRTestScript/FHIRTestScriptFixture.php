<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 7th, 2019 20:23+0000
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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A structured set of tests against a FHIR server or client implementation to
 * determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptFixture
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptFixture extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_FIXTURE;

    const FIELD_AUTOCREATE = 'autocreate';
    const FIELD_AUTOCREATE_EXT = '_autocreate';
    const FIELD_AUTODELETE = 'autodelete';
    const FIELD_AUTODELETE_EXT = '_autodelete';
    const FIELD_RESOURCE = 'resource';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not to implicitly create the fixture during setup. If true, the
     * fixture is automatically created on each server being tested during setup,
     * therefore no create operation is required for this fixture in the
     * TestScript.setup section.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $autocreate = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not to implicitly delete the fixture during teardown. If true, the
     * fixture is automatically deleted on each server being tested during teardown,
     * therefore no delete operation is required for this fixture in the
     * TestScript.teardown section.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $autodelete = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the resource (containing the contents of the resource needed for
     * operations).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $resource = null;

    /**
     * FHIRTestScriptFixture Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptFixture::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTOCREATE])) {
            $ext = (isset($data[self::FIELD_AUTOCREATE_EXT]) && is_array($data[self::FIELD_AUTOCREATE_EXT]))
                ? $data[self::FIELD_AUTOCREATE_EXT]
                : null;
            if ($data[self::FIELD_AUTOCREATE] instanceof FHIRBoolean) {
                $this->setAutocreate($data[self::FIELD_AUTOCREATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_AUTOCREATE])) {
                $this->setAutocreate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_AUTOCREATE]] + $ext));
            } else {
                $this->setAutocreate(new FHIRBoolean($data[self::FIELD_AUTOCREATE]));
            }
        }
        if (isset($data[self::FIELD_AUTODELETE])) {
            $ext = (isset($data[self::FIELD_AUTODELETE_EXT]) && is_array($data[self::FIELD_AUTODELETE_EXT]))
                ? $data[self::FIELD_AUTODELETE_EXT]
                : null;
            if ($data[self::FIELD_AUTODELETE] instanceof FHIRBoolean) {
                $this->setAutodelete($data[self::FIELD_AUTODELETE]);
            } elseif ($ext && is_scalar($data[self::FIELD_AUTODELETE])) {
                $this->setAutodelete(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_AUTODELETE]] + $ext));
            } else {
                $this->setAutodelete(new FHIRBoolean($data[self::FIELD_AUTODELETE]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            if ($data[self::FIELD_RESOURCE] instanceof FHIRReference) {
                $this->setResource($data[self::FIELD_RESOURCE]);
            } else {
                $this->setResource(new FHIRReference($data[self::FIELD_RESOURCE]));
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
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not to implicitly create the fixture during setup. If true, the
     * fixture is automatically created on each server being tested during setup,
     * therefore no create operation is required for this fixture in the
     * TestScript.setup section.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAutocreate()
    {
        return $this->autocreate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not to implicitly create the fixture during setup. If true, the
     * fixture is automatically created on each server being tested during setup,
     * therefore no create operation is required for this fixture in the
     * TestScript.setup section.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $autocreate
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture
     */
    public function setAutocreate($autocreate = null)
    {
        if (null === $autocreate) {
            $this->autocreate = null;
            return $this;
        }
        if ($autocreate instanceof FHIRBoolean) {
            $this->autocreate = $autocreate;
            return $this;
        }
        $this->autocreate = new FHIRBoolean($autocreate);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not to implicitly delete the fixture during teardown. If true, the
     * fixture is automatically deleted on each server being tested during teardown,
     * therefore no delete operation is required for this fixture in the
     * TestScript.teardown section.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAutodelete()
    {
        return $this->autodelete;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not to implicitly delete the fixture during teardown. If true, the
     * fixture is automatically deleted on each server being tested during teardown,
     * therefore no delete operation is required for this fixture in the
     * TestScript.teardown section.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $autodelete
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture
     */
    public function setAutodelete($autodelete = null)
    {
        if (null === $autodelete) {
            $this->autodelete = null;
            return $this;
        }
        if ($autodelete instanceof FHIRBoolean) {
            $this->autodelete = $autodelete;
            return $this;
        }
        $this->autodelete = new FHIRBoolean($autodelete);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the resource (containing the contents of the resource needed for
     * operations).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the resource (containing the contents of the resource needed for
     * operations).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $resource
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture
     */
    public function setResource(FHIRReference $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture
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
                throw new \DomainException(sprintf('FHIRTestScriptFixture::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTestScriptFixture::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRTestScriptFixture);
        } elseif (!is_object($type) || !($type instanceof FHIRTestScriptFixture)) {
            throw new \RuntimeException(sprintf(
                'FHIRTestScriptFixture::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->autocreate)) {
            $type->setAutocreate((string)$attributes->autocreate);
        }
        if (isset($children->autocreate)) {
            $type->setAutocreate(FHIRBoolean::xmlUnserialize($children->autocreate));
        }
        if (isset($attributes->autodelete)) {
            $type->setAutodelete((string)$attributes->autodelete);
        }
        if (isset($children->autodelete)) {
            $type->setAutodelete(FHIRBoolean::xmlUnserialize($children->autodelete));
        }
        if (isset($children->resource)) {
            $type->setResource(FHIRReference::xmlUnserialize($children->resource));
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
            $sxe = new \SimpleXMLElement('<TestScriptFixture xmlns="http://hl7.org/fhir"></TestScriptFixture>');
        }
        if (null !== ($v = $this->getAutocreate())) {
            $sxe->addAttribute(self::FIELD_AUTOCREATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTOCREATE));
            }
        }
        if (null !== ($v = $this->getAutodelete())) {
            $sxe->addAttribute(self::FIELD_AUTODELETE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTODELETE));
            }
        }
        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAutocreate())) {
            $a[self::FIELD_AUTOCREATE] = (string)$v;
            $a[self::FIELD_AUTOCREATE_EXT] = $v;
        }
        if (null !== ($v = $this->getAutodelete())) {
            $a[self::FIELD_AUTODELETE] = (string)$v;
            $a[self::FIELD_AUTODELETE_EXT] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = $v;
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