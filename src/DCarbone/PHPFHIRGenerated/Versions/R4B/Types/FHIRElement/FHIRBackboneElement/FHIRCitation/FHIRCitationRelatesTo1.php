<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 22nd, 2025 19:32+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 */
class FHIRCitationRelatesTo1 extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CITATION_DOT_RELATES_TO_1;


    public const FIELD_RELATIONSHIP_TYPE = 'relationshipType';
    public const FIELD_TARGET_CLASSIFIER = 'targetClassifier';
    public const FIELD_TARGET_URI = 'targetUri';
    public const FIELD_TARGET_URI_EXT = '_targetUri';
    public const FIELD_TARGET_IDENTIFIER = 'targetIdentifier';
    public const FIELD_TARGET_REFERENCE = 'targetReference';
    public const FIELD_TARGET_ATTACHMENT = 'targetAttachment';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the cited artifact relates to the target artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $relationshipType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $targetClassifier;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $targetUri;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $targetIdentifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $targetReference;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $targetAttachment;

    /** Default validation map for fields in type Citation.RelatesTo1 */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_RELATIONSHIP_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TARGET_URI => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TARGET_IDENTIFIER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TARGET_REFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TARGET_ATTACHMENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRCitationRelatesTo1 Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $relationshipType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $targetClassifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $targetUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $targetIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $targetReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAttachment $targetAttachment
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $relationshipType = null,
                                null|iterable $targetClassifier = null,
                                null|string|FHIRUriPrimitive|FHIRUri $targetUri = null,
                                null|FHIRIdentifier $targetIdentifier = null,
                                null|FHIRReference $targetReference = null,
                                null|FHIRAttachment $targetAttachment = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $relationshipType) {
            $this->setRelationshipType($relationshipType);
        }
        if (null !== $targetClassifier) {
            $this->setTargetClassifier(...$targetClassifier);
        }
        if (null !== $targetUri) {
            $this->setTargetUri($targetUri);
        }
        if (null !== $targetIdentifier) {
            $this->setTargetIdentifier($targetIdentifier);
        }
        if (null !== $targetReference) {
            $this->setTargetReference($targetReference);
        }
        if (null !== $targetAttachment) {
            $this->setTargetAttachment($targetAttachment);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationshipType(): null|FHIRCodeableConcept
    {
        return $this->relationshipType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the cited artifact relates to the target artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $relationshipType
     * @return static
     */
    public function setRelationshipType(null|FHIRCodeableConcept $relationshipType): self
    {
        if (null === $relationshipType) {
            unset($this->relationshipType);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTargetClassifier(): array
    {
        return $this->targetClassifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getTargetClassifierIterator(): iterable
    {
        if (!isset($this->targetClassifier) || [] === $this->targetClassifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->targetClassifier);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $targetClassifier
     * @return static
     */
    public function addTargetClassifier(FHIRCodeableConcept $targetClassifier): self
    {
        if (!isset($this->targetClassifier)) {
            $this->targetClassifier = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$targetClassifier
     * @return static
     */
    public function setTargetClassifier(FHIRCodeableConcept ...$targetClassifier): self
    {
        $this->targetClassifier = $targetClassifier;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri
     */
    public function getTargetUri(): null|FHIRUri
    {
        return $this->targetUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $targetUri
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTargetUri(null|string|FHIRUriPrimitive|FHIRUri $targetUri,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $targetUri) {
            unset($this->targetUri);
            return $this;
        }
        if (!($targetUri instanceof FHIRUri)) {
            $targetUri = new FHIRUri(value: $targetUri);
        }
        if (null !== $valueXMLLocation) {
            $targetUri->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $targetUri->_getValueXMLLocation()) {
            $targetUri->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier
     */
    public function getTargetIdentifier(): null|FHIRIdentifier
    {
        return $this->targetIdentifier ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $targetIdentifier
     * @return static
     */
    public function setTargetIdentifier(null|FHIRIdentifier $targetIdentifier): self
    {
        if (null === $targetIdentifier) {
            unset($this->targetIdentifier);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getTargetReference(): null|FHIRReference
    {
        return $this->targetReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $targetReference
     * @return static
     */
    public function setTargetReference(null|FHIRReference $targetReference): self
    {
        if (null === $targetReference) {
            unset($this->targetReference);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAttachment
     */
    public function getTargetAttachment(): null|FHIRAttachment
    {
        return $this->targetAttachment ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the cited artifact is related to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAttachment $targetAttachment
     * @return static
     */
    public function setTargetAttachment(null|FHIRAttachment $targetAttachment): self
    {
        if (null === $targetAttachment) {
            unset($this->targetAttachment);
            return $this;
        }
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATIONSHIP_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_CLASSIFIER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_URI, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_IDENTIFIER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_REFERENCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_ATTACHMENT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1 $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationRelatesTo1)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATIONSHIP_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setRelationshipType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_CLASSIFIER === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addTargetClassifier(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_URI === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTargetUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setTargetIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setTargetReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_ATTACHMENT === $childName) {
                $v = new FHIRAttachment();
                $type->setTargetAttachment(FHIRAttachment::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TARGET_URI])) {
            $pt = $type->getTargetUri();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TARGET_URI]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTargetUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_TARGET_URI],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('CitationRelatesTo1', $this->_getSourceXMLNS());
        }
        if (isset($this->targetUri) && $this->targetUri->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TARGET_URI, $this->targetUri->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->relationshipType)) {
            $xw->startElement(self::FIELD_RELATIONSHIP_TYPE);
            $this->relationshipType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetClassifier)) {
            foreach ($this->targetClassifier as $v) {
                $xw->startElement(self::FIELD_TARGET_CLASSIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->targetUri) && $this->targetUri->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TARGET_URI);
            $this->targetUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetIdentifier)) {
            $xw->startElement(self::FIELD_TARGET_IDENTIFIER);
            $this->targetIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetReference)) {
            $xw->startElement(self::FIELD_TARGET_REFERENCE);
            $this->targetReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetAttachment)) {
            $xw->startElement(self::FIELD_TARGET_ATTACHMENT);
            $this->targetAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1 $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationRelatesTo1)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_RELATIONSHIP_TYPE]) || array_key_exists(self::FIELD_RELATIONSHIP_TYPE, $json)) {
            $type->setRelationshipType(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_RELATIONSHIP_TYPE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TARGET_CLASSIFIER]) || array_key_exists(self::FIELD_TARGET_CLASSIFIER, $json)) {
            $vs = $json[self::FIELD_TARGET_CLASSIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addTargetClassifier(FHIRCodeableConcept::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_TARGET_URI]) || isset($json[self::FIELD_TARGET_URI_EXT]) || array_key_exists(self::FIELD_TARGET_URI, $json) || array_key_exists(self::FIELD_TARGET_URI_EXT, $json)) {
            $value = $json[self::FIELD_TARGET_URI] ?? null;
            $ext = (array)($json[self::FIELD_TARGET_URI_EXT] ?? []);
            $type->setTargetUri(FHIRUri::jsonUnserialize(
                json: [FHIRUri::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TARGET_IDENTIFIER]) || array_key_exists(self::FIELD_TARGET_IDENTIFIER, $json)) {
            $type->setTargetIdentifier(FHIRIdentifier::jsonUnserialize(
                json: $json[self::FIELD_TARGET_IDENTIFIER],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TARGET_REFERENCE]) || array_key_exists(self::FIELD_TARGET_REFERENCE, $json)) {
            $type->setTargetReference(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_TARGET_REFERENCE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TARGET_ATTACHMENT]) || array_key_exists(self::FIELD_TARGET_ATTACHMENT, $json)) {
            $type->setTargetAttachment(FHIRAttachment::jsonUnserialize(
                json: $json[self::FIELD_TARGET_ATTACHMENT],
                config: $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->relationshipType)) {
            $out->relationshipType = $this->relationshipType;
        }
        if (isset($this->targetClassifier) && [] !== $this->targetClassifier) {
            $out->targetClassifier = $this->targetClassifier;
        }
        if (isset($this->targetUri)) {
            if (null !== ($val = $this->targetUri->getValue())) {
                $out->targetUri = $val;
            }
            $ext = $this->targetUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_targetUri = $ext;
            }
        }
        if (isset($this->targetIdentifier)) {
            $out->targetIdentifier = $this->targetIdentifier;
        }
        if (isset($this->targetReference)) {
            $out->targetReference = $this->targetReference;
        }
        if (isset($this->targetAttachment)) {
            $out->targetAttachment = $this->targetAttachment;
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