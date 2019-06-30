<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference;

include_once __DIR__.'/../../../constants.php';

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 30th, 2019 14:05+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding;

/**
 * A reference to a document of any kind for any purpose. Provides metadata about
 * the document so that the document can be discovered and managed. The scope of a
 * document is any seralized object with a mime-type, so includes formal patient
 * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
 * documents like policy text.
 *
 * Class FHIRDocumentReferenceContent
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference
 */
class FHIRDocumentReferenceContent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = FHIR_TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTENT;

    const FIELD_ATTACHMENT = 'attachment';
    const FIELD_FORMAT = 'format';

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The document or URL of the document along with critical metadata to prove
     * content has integrity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    private $attachment = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An identifier of the document encoding, structure, and template that the
     * document conforms to beyond the base format indicated in the mimeType.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $format = null;

    /**
     * FHIRDocumentReferenceContent Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDocumentReferenceContent::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ATTACHMENT])) {
            if ($data[self::FIELD_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setAttachment($data[self::FIELD_ATTACHMENT]);
            } else {
                $this->setAttachment(new FHIRAttachment($data[self::FIELD_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_FORMAT])) {
            if ($data[self::FIELD_FORMAT] instanceof FHIRCoding) {
                $this->setFormat($data[self::FIELD_FORMAT]);
            } else {
                $this->setFormat(new FHIRCoding($data[self::FIELD_FORMAT]));
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
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The document or URL of the document along with critical metadata to prove
     * content has integrity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The document or URL of the document along with critical metadata to prove
     * content has integrity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment $attachment
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent
     */
    public function setAttachment(FHIRAttachment $attachment = null)
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An identifier of the document encoding, structure, and template that the
     * document conforms to beyond the base format indicated in the mimeType.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An identifier of the document encoding, structure, and template that the
     * document conforms to beyond the base format indicated in the mimeType.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding $format
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent
     */
    public function setFormat(FHIRCoding $format = null)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent
     */
    public static function xmlUnserialize($sxe = null, $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDocumentReferenceContent::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDocumentReferenceContent::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRDocumentReferenceContent);
        } elseif (!is_object($type) || !($type instanceof FHIRDocumentReferenceContent)) {
            throw new \RuntimeException(sprintf(
                'FHIRDocumentReferenceContent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->attachment)) {
            $type->setAttachment(FHIRAttachment::xmlUnserialize($children->attachment));
        }
        if (isset($children->format)) {
            $type->setFormat(FHIRCoding::xmlUnserialize($children->format));
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
            $sxe = new \SimpleXMLElement('<DocumentReferenceContent xmlns="http://hl7.org/fhir"></DocumentReferenceContent>');
        }
        if (null !== ($v = $this->getAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ATTACHMENT));
        }
        if (null !== ($v = $this->getFormat())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FORMAT));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAttachment())) {
            $a[self::FIELD_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getFormat())) {
            $a[self::FIELD_FORMAT] = $v;
        }
        return [FHIR_JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}