<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationRelatesTo1
 * @package \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationRelatesTo1 extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO_1;

    const FIELD_RELATIONSHIP_TYPE = 'relationshipType';
    const FIELD_TARGET_CLASSIFIER = 'targetClassifier';
    const FIELD_TARGET_URI = 'targetUri';
    const FIELD_TARGET_URI_EXT = '_targetUri';
    const FIELD_TARGET_IDENTIFIER = 'targetIdentifier';
    const FIELD_TARGET_REFERENCE = 'targetReference';
    const FIELD_TARGET_ATTACHMENT = 'targetAttachment';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the cited artifact relates to the target artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $relationshipType = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $targetClassifier = [];
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $targetUri = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $targetIdentifier = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $targetReference = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAttachment
     */
    protected null|FHIRAttachment $targetAttachment = null;

    /**
     * Validation map for fields in type Citation.RelatesTo1
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_RELATIONSHIP_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TARGET_ATTACHMENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TARGET_IDENTIFIER => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TARGET_REFERENCE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TARGET_URI => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRCitationRelatesTo1 Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_RELATIONSHIP_TYPE, $data)) {
            if ($data[self::FIELD_RELATIONSHIP_TYPE] instanceof FHIRCodeableConcept) {
                $this->setRelationshipType($data[self::FIELD_RELATIONSHIP_TYPE]);
            } else {
                $this->setRelationshipType(new FHIRCodeableConcept($data[self::FIELD_RELATIONSHIP_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_TARGET_CLASSIFIER, $data)) {
            if (is_array($data[self::FIELD_TARGET_CLASSIFIER])) {
                foreach($data[self::FIELD_TARGET_CLASSIFIER] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addTargetClassifier($v);
                    } else {
                        $this->addTargetClassifier(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_TARGET_CLASSIFIER] instanceof FHIRCodeableConcept) {
                $this->addTargetClassifier($data[self::FIELD_TARGET_CLASSIFIER]);
            } else {
                $this->addTargetClassifier(new FHIRCodeableConcept($data[self::FIELD_TARGET_CLASSIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_TARGET_URI, $data) || array_key_exists(self::FIELD_TARGET_URI_EXT, $data)) {
            $value = $data[self::FIELD_TARGET_URI] ?? null;
            $ext = (isset($data[self::FIELD_TARGET_URI_EXT]) && is_array($data[self::FIELD_TARGET_URI_EXT])) ? $data[self::FIELD_TARGET_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setTargetUri($value);
                } else if (is_array($value)) {
                    $this->setTargetUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setTargetUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTargetUri(new FHIRUri($ext));
            } else {
                $this->setTargetUri(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_TARGET_IDENTIFIER, $data)) {
            if ($data[self::FIELD_TARGET_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setTargetIdentifier($data[self::FIELD_TARGET_IDENTIFIER]);
            } else {
                $this->setTargetIdentifier(new FHIRIdentifier($data[self::FIELD_TARGET_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_TARGET_REFERENCE, $data)) {
            if ($data[self::FIELD_TARGET_REFERENCE] instanceof FHIRReference) {
                $this->setTargetReference($data[self::FIELD_TARGET_REFERENCE]);
            } else {
                $this->setTargetReference(new FHIRReference($data[self::FIELD_TARGET_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_TARGET_ATTACHMENT, $data)) {
            if ($data[self::FIELD_TARGET_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setTargetAttachment($data[self::FIELD_TARGET_ATTACHMENT]);
            } else {
                $this->setTargetAttachment(new FHIRAttachment($data[self::FIELD_TARGET_ATTACHMENT]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the cited artifact relates to the target artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationshipType(): null|FHIRCodeableConcept
    {
        return $this->relationshipType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the cited artifact relates to the target artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $relationshipType
     * @return static
     */
    public function setRelationshipType(null|FHIRCodeableConcept $relationshipType = null): self
    {
        if (null === $relationshipType) {
            $relationshipType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->relationshipType, $relationshipType);
        $this->relationshipType = $relationshipType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTargetClassifier(): null|array
    {
        return $this->targetClassifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $targetClassifier
     * @return static
     */
    public function addTargetClassifier(null|FHIRCodeableConcept $targetClassifier = null): self
    {
        if (null === $targetClassifier) {
            $targetClassifier = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->targetClassifier[] = $targetClassifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept ...$targetClassifier
     * @return static
     */
    public function setTargetClassifier(FHIRCodeableConcept ...$targetClassifier): self
    {
        if ([] !== $this->targetClassifier) {
            $this->_trackValuesRemoved(count($this->targetClassifier));
            $this->targetClassifier = [];
        }
        if ([] === $targetClassifier) {
            return $this;
        }
        foreach($targetClassifier as $v) {
            $this->addTargetClassifier($v);
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUri
     */
    public function getTargetUri(): null|FHIRUri
    {
        return $this->targetUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUri $targetUri
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTargetUri(null|string|FHIRUriPrimitive|FHIRUri $targetUri = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $targetUri && !($targetUri instanceof FHIRUri)) {
            $targetUri = new FHIRUri($targetUri);
        }
        $this->_trackValueSet($this->targetUri, $targetUri);
        if (!isset($this->_xmlLocations[self::FIELD_TARGET_URI])) {
            $this->_xmlLocations[self::FIELD_TARGET_URI] = [];
        }
        $this->_xmlLocations[self::FIELD_TARGET_URI][0] = $xmlLocation;
        $this->targetUri = $targetUri;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier
     */
    public function getTargetIdentifier(): null|FHIRIdentifier
    {
        return $this->targetIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier $targetIdentifier
     * @return static
     */
    public function setTargetIdentifier(null|FHIRIdentifier $targetIdentifier = null): self
    {
        if (null === $targetIdentifier) {
            $targetIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->targetIdentifier, $targetIdentifier);
        $this->targetIdentifier = $targetIdentifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference
     */
    public function getTargetReference(): null|FHIRReference
    {
        return $this->targetReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference $targetReference
     * @return static
     */
    public function setTargetReference(null|FHIRReference $targetReference = null): self
    {
        if (null === $targetReference) {
            $targetReference = new FHIRReference();
        }
        $this->_trackValueSet($this->targetReference, $targetReference);
        $this->targetReference = $targetReference;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAttachment
     */
    public function getTargetAttachment(): null|FHIRAttachment
    {
        return $this->targetAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRAttachment $targetAttachment
     * @return static
     */
    public function setTargetAttachment(null|FHIRAttachment $targetAttachment = null): self
    {
        if (null === $targetAttachment) {
            $targetAttachment = new FHIRAttachment();
        }
        $this->_trackValueSet($this->targetAttachment, $targetAttachment);
        $this->targetAttachment = $targetAttachment;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getRelationshipType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONSHIP_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTargetClassifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET_CLASSIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTargetUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTargetIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTargetReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTargetAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_ATTACHMENT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP_TYPE])) {
            $v = $this->getRelationshipType();
            foreach($validationRules[self::FIELD_RELATIONSHIP_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO_1, self::FIELD_RELATIONSHIP_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP_TYPE])) {
                        $errs[self::FIELD_RELATIONSHIP_TYPE] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_CLASSIFIER])) {
            $v = $this->getTargetClassifier();
            foreach($validationRules[self::FIELD_TARGET_CLASSIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO_1, self::FIELD_TARGET_CLASSIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_CLASSIFIER])) {
                        $errs[self::FIELD_TARGET_CLASSIFIER] = [];
                    }
                    $errs[self::FIELD_TARGET_CLASSIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_URI])) {
            $v = $this->getTargetUri();
            foreach($validationRules[self::FIELD_TARGET_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO_1, self::FIELD_TARGET_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_URI])) {
                        $errs[self::FIELD_TARGET_URI] = [];
                    }
                    $errs[self::FIELD_TARGET_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_IDENTIFIER])) {
            $v = $this->getTargetIdentifier();
            foreach($validationRules[self::FIELD_TARGET_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO_1, self::FIELD_TARGET_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_IDENTIFIER])) {
                        $errs[self::FIELD_TARGET_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_TARGET_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_REFERENCE])) {
            $v = $this->getTargetReference();
            foreach($validationRules[self::FIELD_TARGET_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO_1, self::FIELD_TARGET_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_REFERENCE])) {
                        $errs[self::FIELD_TARGET_REFERENCE] = [];
                    }
                    $errs[self::FIELD_TARGET_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_ATTACHMENT])) {
            $v = $this->getTargetAttachment();
            foreach($validationRules[self::FIELD_TARGET_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO_1, self::FIELD_TARGET_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_ATTACHMENT])) {
                        $errs[self::FIELD_TARGET_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_TARGET_ATTACHMENT][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1 $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRCitationRelatesTo1)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_RELATIONSHIP_TYPE === $childName) {
                $type->setRelationshipType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TARGET_CLASSIFIER === $childName) {
                $type->addTargetClassifier(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TARGET_URI === $childName) {
                $type->setTargetUri(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TARGET_IDENTIFIER === $childName) {
                $type->setTargetIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TARGET_REFERENCE === $childName) {
                $type->setTargetReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TARGET_ATTACHMENT === $childName) {
                $type->setTargetAttachment(FHIRAttachment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_TARGET_URI])) {
            $pt = $type->getTargetUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TARGET_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTargetUri((string)$attributes[self::FIELD_TARGET_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'CitationRelatesTo1', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_TARGET_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTargetUri())) {
            $xw->writeAttribute(self::FIELD_TARGET_URI, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getRelationshipType())) {
            $xw->startElement(self::FIELD_RELATIONSHIP_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTargetClassifier() as $v) {
            $xw->startElement(self::FIELD_TARGET_CLASSIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TARGET_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTargetUri())) {
            $xw->startElement(self::FIELD_TARGET_URI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTargetIdentifier())) {
            $xw->startElement(self::FIELD_TARGET_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTargetReference())) {
            $xw->startElement(self::FIELD_TARGET_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTargetAttachment())) {
            $xw->startElement(self::FIELD_TARGET_ATTACHMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getRelationshipType())) {
            $out->{self::FIELD_RELATIONSHIP_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getTargetClassifier())) {
            $out->{self::FIELD_TARGET_CLASSIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TARGET_CLASSIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getTargetUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TARGET_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TARGET_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTargetIdentifier())) {
            $out->{self::FIELD_TARGET_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getTargetReference())) {
            $out->{self::FIELD_TARGET_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getTargetAttachment())) {
            $out->{self::FIELD_TARGET_ATTACHMENT} = $v;
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}