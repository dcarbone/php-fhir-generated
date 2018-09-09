<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAddress;
use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBase;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBinding;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionSlicing;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType;
use PHPFHIRGenerated\FHIRElement\FHIRBase64Binary;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRContributor;
use PHPFHIRGenerated\FHIRElement\FHIRDataRequirement;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRExpression;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIROid;
use PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRRatio;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact;
use PHPFHIRGenerated\FHIRElement\FHIRSampledData;
use PHPFHIRGenerated\FHIRElement\FHIRSignature;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTime;
use PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRUrl;
use PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use PHPFHIRGenerated\FHIRElement\FHIRUuid;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinition
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement
 */
class FHIRElementDefinition extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ElementDefinition';

    /**
     * Identifies additional names by which this element might also be known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $alias = null;

    /**
     * Information about the base definition of the element, provided to make it unnecessary for tools to trace the deviation of the element through the derived and related profiles. When the element definition is not the original definition of an element - i.g. either in a constraint on another type, or for elements from a super type in a snap shot - then the information in provided in the element definition may be different to the base definition. On the original definition of the element, it will be same.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public $base = null;

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept, Quantity), or the data types (string, uri).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public $binding = null;

    /**
     * A code that has the same meaning as the element in a particular terminology.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $code = null;

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc. (Note: The text you are reading is specified in ElementDefinition.comment).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $comment = null;

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $condition = null;

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint
     */
    public $constraint = null;

    /**
     * Identifies an element defined elsewhere in the definition whose content rules should be applied to the current element. ContentReferences bring across all the rules that are in the ElementDefinition for the element, including definitions, cardinality constraints, bindings, invariants etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $contentReference = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $defaultValueAddress = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $defaultValueAge = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $defaultValueAnnotation = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $defaultValueAttachment = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $defaultValueBase64Binary = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $defaultValueBoolean = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $defaultValueCanonical = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $defaultValueCode = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $defaultValueCodeableConcept = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $defaultValueCoding = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $defaultValueContactDetail = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $defaultValueContactPoint = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContributor
     */
    public $defaultValueContributor = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $defaultValueCount = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public $defaultValueDataRequirement = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $defaultValueDate = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $defaultValueDateTime = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $defaultValueDecimal = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $defaultValueDistance = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public $defaultValueDosage = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $defaultValueDuration = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public $defaultValueExpression = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $defaultValueHumanName = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $defaultValueId = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $defaultValueIdentifier = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $defaultValueInstant = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $defaultValueInteger = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $defaultValueMarkdown = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $defaultValueMoney = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $defaultValueOid = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     */
    public $defaultValueParameterDefinition = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $defaultValuePeriod = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $defaultValuePositiveInt = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $defaultValueQuantity = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $defaultValueRange = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $defaultValueRatio = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $defaultValueReference = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public $defaultValueRelatedArtifact = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $defaultValueSampledData = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $defaultValueSignature = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $defaultValueString = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $defaultValueTime = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $defaultValueTiming = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public $defaultValueTriggerDefinition = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $defaultValueUnsignedInt = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $defaultValueUri = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $defaultValueUrl = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $defaultValueUsageContext = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $defaultValueUuid = null;

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource. (Note: The text you are reading is specified in ElementDefinition.definition).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $definition = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be found in the element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample
     */
    public $example = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $fixedAddress = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $fixedAge = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $fixedAnnotation = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $fixedAttachment = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $fixedBase64Binary = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $fixedBoolean = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $fixedCanonical = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $fixedCode = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $fixedCodeableConcept = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $fixedCoding = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $fixedContactDetail = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $fixedContactPoint = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContributor
     */
    public $fixedContributor = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $fixedCount = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public $fixedDataRequirement = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $fixedDate = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $fixedDateTime = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $fixedDecimal = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $fixedDistance = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public $fixedDosage = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $fixedDuration = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public $fixedExpression = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $fixedHumanName = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $fixedId = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $fixedIdentifier = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $fixedInstant = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $fixedInteger = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $fixedMarkdown = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $fixedMoney = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $fixedOid = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     */
    public $fixedParameterDefinition = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $fixedPeriod = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $fixedPositiveInt = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $fixedQuantity = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $fixedRange = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $fixedRatio = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $fixedReference = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public $fixedRelatedArtifact = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $fixedSampledData = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $fixedSignature = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $fixedString = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $fixedTime = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $fixedTiming = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public $fixedTriggerDefinition = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $fixedUnsignedInt = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $fixedUri = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $fixedUrl = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $fixedUsageContext = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $fixedUuid = null;

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isModifier = null;

    /**
     * Explains how that element affects the interpretation of the resource or element that contains it.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $isModifierReason = null;

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isSummary = null;

    /**
     * A single preferred label which is the text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping
     */
    public $mapping = null;

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $maxLength = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $maxValueDate = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $maxValueDateTime = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $maxValueDecimal = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $maxValueInstant = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $maxValueInteger = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $maxValuePositiveInt = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $maxValueQuantity = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $maxValueTime = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $maxValueUnsignedInt = null;

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $meaningWhenMissing = null;

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $min = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $minValueDate = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $minValueDateTime = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $minValueDecimal = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $minValueInstant = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $minValueInteger = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $minValuePositiveInt = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $minValueQuantity = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $minValueTime = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $minValueUnsignedInt = null;

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported. If false, whether to populate or use the data element in any way is at the discretion of the implementation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $mustSupport = null;

    /**
     * If present, indicates that the order of the repeating element has meaning and describes what that meaning is.  If absent, it means that the order of the element has no meaning.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $orderMeaning = null;

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $patternAddress = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $patternAge = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $patternAnnotation = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $patternAttachment = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $patternBase64Binary = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $patternBoolean = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $patternCanonical = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $patternCode = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $patternCodeableConcept = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $patternCoding = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $patternContactDetail = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $patternContactPoint = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContributor
     */
    public $patternContributor = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $patternCount = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public $patternDataRequirement = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $patternDate = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $patternDateTime = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $patternDecimal = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $patternDistance = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public $patternDosage = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $patternDuration = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public $patternExpression = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $patternHumanName = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $patternId = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $patternIdentifier = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $patternInstant = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $patternInteger = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $patternMarkdown = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $patternMoney = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $patternOid = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     */
    public $patternParameterDefinition = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $patternPeriod = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $patternPositiveInt = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $patternQuantity = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $patternRange = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $patternRatio = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patternReference = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public $patternRelatedArtifact = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $patternSampledData = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $patternSignature = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $patternString = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $patternTime = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $patternTiming = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public $patternTriggerDefinition = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $patternUnsignedInt = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $patternUri = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $patternUrl = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $patternUsageContext = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $patternUuid = null;

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation
     */
    public $representation = null;

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $requirements = null;

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $short = null;

    /**
     * If true, indicates that this slice definition is constraining a slice definition with the same name in an inherited profile. If false, the slice is not overriding any slice in an inherited profile. If missing, the slice might or might not be overriding a slice in an inherited profile, depending on the sliceName.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $sliceIsConstraining = null;

    /**
     * The name of this element definition slice, when slicing is working. The name must be a token with no dots or spaces. This is a unique name referring to a specific set of constraints applied to this element, used to provide a name to different slices of the same element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $sliceName = null;

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public $slicing = null;

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public $type = null;

    /**
     * FHIRElementDefinition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['alias'])) {
                $this->setAlias($data['alias']);
            }
            if (isset($data['base'])) {
                $this->setBase($data['base']);
            }
            if (isset($data['binding'])) {
                $this->setBinding($data['binding']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['condition'])) {
                $this->setCondition($data['condition']);
            }
            if (isset($data['constraint'])) {
                $this->setConstraint($data['constraint']);
            }
            if (isset($data['contentReference'])) {
                $this->setContentReference($data['contentReference']);
            }
            if (isset($data['defaultValueAddress'])) {
                $this->setDefaultValueAddress($data['defaultValueAddress']);
            }
            if (isset($data['defaultValueAge'])) {
                $this->setDefaultValueAge($data['defaultValueAge']);
            }
            if (isset($data['defaultValueAnnotation'])) {
                $this->setDefaultValueAnnotation($data['defaultValueAnnotation']);
            }
            if (isset($data['defaultValueAttachment'])) {
                $this->setDefaultValueAttachment($data['defaultValueAttachment']);
            }
            if (isset($data['defaultValueBase64Binary'])) {
                $this->setDefaultValueBase64Binary($data['defaultValueBase64Binary']);
            }
            if (isset($data['defaultValueBoolean'])) {
                $this->setDefaultValueBoolean($data['defaultValueBoolean']);
            }
            if (isset($data['defaultValueCanonical'])) {
                $this->setDefaultValueCanonical($data['defaultValueCanonical']);
            }
            if (isset($data['defaultValueCode'])) {
                $this->setDefaultValueCode($data['defaultValueCode']);
            }
            if (isset($data['defaultValueCodeableConcept'])) {
                $this->setDefaultValueCodeableConcept($data['defaultValueCodeableConcept']);
            }
            if (isset($data['defaultValueCoding'])) {
                $this->setDefaultValueCoding($data['defaultValueCoding']);
            }
            if (isset($data['defaultValueContactDetail'])) {
                $this->setDefaultValueContactDetail($data['defaultValueContactDetail']);
            }
            if (isset($data['defaultValueContactPoint'])) {
                $this->setDefaultValueContactPoint($data['defaultValueContactPoint']);
            }
            if (isset($data['defaultValueContributor'])) {
                $this->setDefaultValueContributor($data['defaultValueContributor']);
            }
            if (isset($data['defaultValueCount'])) {
                $this->setDefaultValueCount($data['defaultValueCount']);
            }
            if (isset($data['defaultValueDataRequirement'])) {
                $this->setDefaultValueDataRequirement($data['defaultValueDataRequirement']);
            }
            if (isset($data['defaultValueDate'])) {
                $this->setDefaultValueDate($data['defaultValueDate']);
            }
            if (isset($data['defaultValueDateTime'])) {
                $this->setDefaultValueDateTime($data['defaultValueDateTime']);
            }
            if (isset($data['defaultValueDecimal'])) {
                $this->setDefaultValueDecimal($data['defaultValueDecimal']);
            }
            if (isset($data['defaultValueDistance'])) {
                $this->setDefaultValueDistance($data['defaultValueDistance']);
            }
            if (isset($data['defaultValueDosage'])) {
                $this->setDefaultValueDosage($data['defaultValueDosage']);
            }
            if (isset($data['defaultValueDuration'])) {
                $this->setDefaultValueDuration($data['defaultValueDuration']);
            }
            if (isset($data['defaultValueExpression'])) {
                $this->setDefaultValueExpression($data['defaultValueExpression']);
            }
            if (isset($data['defaultValueHumanName'])) {
                $this->setDefaultValueHumanName($data['defaultValueHumanName']);
            }
            if (isset($data['defaultValueId'])) {
                $this->setDefaultValueId($data['defaultValueId']);
            }
            if (isset($data['defaultValueIdentifier'])) {
                $this->setDefaultValueIdentifier($data['defaultValueIdentifier']);
            }
            if (isset($data['defaultValueInstant'])) {
                $this->setDefaultValueInstant($data['defaultValueInstant']);
            }
            if (isset($data['defaultValueInteger'])) {
                $this->setDefaultValueInteger($data['defaultValueInteger']);
            }
            if (isset($data['defaultValueMarkdown'])) {
                $this->setDefaultValueMarkdown($data['defaultValueMarkdown']);
            }
            if (isset($data['defaultValueMoney'])) {
                $this->setDefaultValueMoney($data['defaultValueMoney']);
            }
            if (isset($data['defaultValueOid'])) {
                $this->setDefaultValueOid($data['defaultValueOid']);
            }
            if (isset($data['defaultValueParameterDefinition'])) {
                $this->setDefaultValueParameterDefinition($data['defaultValueParameterDefinition']);
            }
            if (isset($data['defaultValuePeriod'])) {
                $this->setDefaultValuePeriod($data['defaultValuePeriod']);
            }
            if (isset($data['defaultValuePositiveInt'])) {
                $this->setDefaultValuePositiveInt($data['defaultValuePositiveInt']);
            }
            if (isset($data['defaultValueQuantity'])) {
                $this->setDefaultValueQuantity($data['defaultValueQuantity']);
            }
            if (isset($data['defaultValueRange'])) {
                $this->setDefaultValueRange($data['defaultValueRange']);
            }
            if (isset($data['defaultValueRatio'])) {
                $this->setDefaultValueRatio($data['defaultValueRatio']);
            }
            if (isset($data['defaultValueReference'])) {
                $this->setDefaultValueReference($data['defaultValueReference']);
            }
            if (isset($data['defaultValueRelatedArtifact'])) {
                $this->setDefaultValueRelatedArtifact($data['defaultValueRelatedArtifact']);
            }
            if (isset($data['defaultValueSampledData'])) {
                $this->setDefaultValueSampledData($data['defaultValueSampledData']);
            }
            if (isset($data['defaultValueSignature'])) {
                $this->setDefaultValueSignature($data['defaultValueSignature']);
            }
            if (isset($data['defaultValueString'])) {
                $this->setDefaultValueString($data['defaultValueString']);
            }
            if (isset($data['defaultValueTime'])) {
                $this->setDefaultValueTime($data['defaultValueTime']);
            }
            if (isset($data['defaultValueTiming'])) {
                $this->setDefaultValueTiming($data['defaultValueTiming']);
            }
            if (isset($data['defaultValueTriggerDefinition'])) {
                $this->setDefaultValueTriggerDefinition($data['defaultValueTriggerDefinition']);
            }
            if (isset($data['defaultValueUnsignedInt'])) {
                $this->setDefaultValueUnsignedInt($data['defaultValueUnsignedInt']);
            }
            if (isset($data['defaultValueUri'])) {
                $this->setDefaultValueUri($data['defaultValueUri']);
            }
            if (isset($data['defaultValueUrl'])) {
                $this->setDefaultValueUrl($data['defaultValueUrl']);
            }
            if (isset($data['defaultValueUsageContext'])) {
                $this->setDefaultValueUsageContext($data['defaultValueUsageContext']);
            }
            if (isset($data['defaultValueUuid'])) {
                $this->setDefaultValueUuid($data['defaultValueUuid']);
            }
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['example'])) {
                $this->setExample($data['example']);
            }
            if (isset($data['fixedAddress'])) {
                $this->setFixedAddress($data['fixedAddress']);
            }
            if (isset($data['fixedAge'])) {
                $this->setFixedAge($data['fixedAge']);
            }
            if (isset($data['fixedAnnotation'])) {
                $this->setFixedAnnotation($data['fixedAnnotation']);
            }
            if (isset($data['fixedAttachment'])) {
                $this->setFixedAttachment($data['fixedAttachment']);
            }
            if (isset($data['fixedBase64Binary'])) {
                $this->setFixedBase64Binary($data['fixedBase64Binary']);
            }
            if (isset($data['fixedBoolean'])) {
                $this->setFixedBoolean($data['fixedBoolean']);
            }
            if (isset($data['fixedCanonical'])) {
                $this->setFixedCanonical($data['fixedCanonical']);
            }
            if (isset($data['fixedCode'])) {
                $this->setFixedCode($data['fixedCode']);
            }
            if (isset($data['fixedCodeableConcept'])) {
                $this->setFixedCodeableConcept($data['fixedCodeableConcept']);
            }
            if (isset($data['fixedCoding'])) {
                $this->setFixedCoding($data['fixedCoding']);
            }
            if (isset($data['fixedContactDetail'])) {
                $this->setFixedContactDetail($data['fixedContactDetail']);
            }
            if (isset($data['fixedContactPoint'])) {
                $this->setFixedContactPoint($data['fixedContactPoint']);
            }
            if (isset($data['fixedContributor'])) {
                $this->setFixedContributor($data['fixedContributor']);
            }
            if (isset($data['fixedCount'])) {
                $this->setFixedCount($data['fixedCount']);
            }
            if (isset($data['fixedDataRequirement'])) {
                $this->setFixedDataRequirement($data['fixedDataRequirement']);
            }
            if (isset($data['fixedDate'])) {
                $this->setFixedDate($data['fixedDate']);
            }
            if (isset($data['fixedDateTime'])) {
                $this->setFixedDateTime($data['fixedDateTime']);
            }
            if (isset($data['fixedDecimal'])) {
                $this->setFixedDecimal($data['fixedDecimal']);
            }
            if (isset($data['fixedDistance'])) {
                $this->setFixedDistance($data['fixedDistance']);
            }
            if (isset($data['fixedDosage'])) {
                $this->setFixedDosage($data['fixedDosage']);
            }
            if (isset($data['fixedDuration'])) {
                $this->setFixedDuration($data['fixedDuration']);
            }
            if (isset($data['fixedExpression'])) {
                $this->setFixedExpression($data['fixedExpression']);
            }
            if (isset($data['fixedHumanName'])) {
                $this->setFixedHumanName($data['fixedHumanName']);
            }
            if (isset($data['fixedId'])) {
                $this->setFixedId($data['fixedId']);
            }
            if (isset($data['fixedIdentifier'])) {
                $this->setFixedIdentifier($data['fixedIdentifier']);
            }
            if (isset($data['fixedInstant'])) {
                $this->setFixedInstant($data['fixedInstant']);
            }
            if (isset($data['fixedInteger'])) {
                $this->setFixedInteger($data['fixedInteger']);
            }
            if (isset($data['fixedMarkdown'])) {
                $this->setFixedMarkdown($data['fixedMarkdown']);
            }
            if (isset($data['fixedMoney'])) {
                $this->setFixedMoney($data['fixedMoney']);
            }
            if (isset($data['fixedOid'])) {
                $this->setFixedOid($data['fixedOid']);
            }
            if (isset($data['fixedParameterDefinition'])) {
                $this->setFixedParameterDefinition($data['fixedParameterDefinition']);
            }
            if (isset($data['fixedPeriod'])) {
                $this->setFixedPeriod($data['fixedPeriod']);
            }
            if (isset($data['fixedPositiveInt'])) {
                $this->setFixedPositiveInt($data['fixedPositiveInt']);
            }
            if (isset($data['fixedQuantity'])) {
                $this->setFixedQuantity($data['fixedQuantity']);
            }
            if (isset($data['fixedRange'])) {
                $this->setFixedRange($data['fixedRange']);
            }
            if (isset($data['fixedRatio'])) {
                $this->setFixedRatio($data['fixedRatio']);
            }
            if (isset($data['fixedReference'])) {
                $this->setFixedReference($data['fixedReference']);
            }
            if (isset($data['fixedRelatedArtifact'])) {
                $this->setFixedRelatedArtifact($data['fixedRelatedArtifact']);
            }
            if (isset($data['fixedSampledData'])) {
                $this->setFixedSampledData($data['fixedSampledData']);
            }
            if (isset($data['fixedSignature'])) {
                $this->setFixedSignature($data['fixedSignature']);
            }
            if (isset($data['fixedString'])) {
                $this->setFixedString($data['fixedString']);
            }
            if (isset($data['fixedTime'])) {
                $this->setFixedTime($data['fixedTime']);
            }
            if (isset($data['fixedTiming'])) {
                $this->setFixedTiming($data['fixedTiming']);
            }
            if (isset($data['fixedTriggerDefinition'])) {
                $this->setFixedTriggerDefinition($data['fixedTriggerDefinition']);
            }
            if (isset($data['fixedUnsignedInt'])) {
                $this->setFixedUnsignedInt($data['fixedUnsignedInt']);
            }
            if (isset($data['fixedUri'])) {
                $this->setFixedUri($data['fixedUri']);
            }
            if (isset($data['fixedUrl'])) {
                $this->setFixedUrl($data['fixedUrl']);
            }
            if (isset($data['fixedUsageContext'])) {
                $this->setFixedUsageContext($data['fixedUsageContext']);
            }
            if (isset($data['fixedUuid'])) {
                $this->setFixedUuid($data['fixedUuid']);
            }
            if (isset($data['isModifier'])) {
                $this->setIsModifier($data['isModifier']);
            }
            if (isset($data['isModifierReason'])) {
                $this->setIsModifierReason($data['isModifierReason']);
            }
            if (isset($data['isSummary'])) {
                $this->setIsSummary($data['isSummary']);
            }
            if (isset($data['label'])) {
                $this->setLabel($data['label']);
            }
            if (isset($data['mapping'])) {
                $this->setMapping($data['mapping']);
            }
            if (isset($data['max'])) {
                $this->setMax($data['max']);
            }
            if (isset($data['maxLength'])) {
                $this->setMaxLength($data['maxLength']);
            }
            if (isset($data['maxValueDate'])) {
                $this->setMaxValueDate($data['maxValueDate']);
            }
            if (isset($data['maxValueDateTime'])) {
                $this->setMaxValueDateTime($data['maxValueDateTime']);
            }
            if (isset($data['maxValueDecimal'])) {
                $this->setMaxValueDecimal($data['maxValueDecimal']);
            }
            if (isset($data['maxValueInstant'])) {
                $this->setMaxValueInstant($data['maxValueInstant']);
            }
            if (isset($data['maxValueInteger'])) {
                $this->setMaxValueInteger($data['maxValueInteger']);
            }
            if (isset($data['maxValuePositiveInt'])) {
                $this->setMaxValuePositiveInt($data['maxValuePositiveInt']);
            }
            if (isset($data['maxValueQuantity'])) {
                $this->setMaxValueQuantity($data['maxValueQuantity']);
            }
            if (isset($data['maxValueTime'])) {
                $this->setMaxValueTime($data['maxValueTime']);
            }
            if (isset($data['maxValueUnsignedInt'])) {
                $this->setMaxValueUnsignedInt($data['maxValueUnsignedInt']);
            }
            if (isset($data['meaningWhenMissing'])) {
                $this->setMeaningWhenMissing($data['meaningWhenMissing']);
            }
            if (isset($data['min'])) {
                $this->setMin($data['min']);
            }
            if (isset($data['minValueDate'])) {
                $this->setMinValueDate($data['minValueDate']);
            }
            if (isset($data['minValueDateTime'])) {
                $this->setMinValueDateTime($data['minValueDateTime']);
            }
            if (isset($data['minValueDecimal'])) {
                $this->setMinValueDecimal($data['minValueDecimal']);
            }
            if (isset($data['minValueInstant'])) {
                $this->setMinValueInstant($data['minValueInstant']);
            }
            if (isset($data['minValueInteger'])) {
                $this->setMinValueInteger($data['minValueInteger']);
            }
            if (isset($data['minValuePositiveInt'])) {
                $this->setMinValuePositiveInt($data['minValuePositiveInt']);
            }
            if (isset($data['minValueQuantity'])) {
                $this->setMinValueQuantity($data['minValueQuantity']);
            }
            if (isset($data['minValueTime'])) {
                $this->setMinValueTime($data['minValueTime']);
            }
            if (isset($data['minValueUnsignedInt'])) {
                $this->setMinValueUnsignedInt($data['minValueUnsignedInt']);
            }
            if (isset($data['mustSupport'])) {
                $this->setMustSupport($data['mustSupport']);
            }
            if (isset($data['orderMeaning'])) {
                $this->setOrderMeaning($data['orderMeaning']);
            }
            if (isset($data['path'])) {
                $this->setPath($data['path']);
            }
            if (isset($data['patternAddress'])) {
                $this->setPatternAddress($data['patternAddress']);
            }
            if (isset($data['patternAge'])) {
                $this->setPatternAge($data['patternAge']);
            }
            if (isset($data['patternAnnotation'])) {
                $this->setPatternAnnotation($data['patternAnnotation']);
            }
            if (isset($data['patternAttachment'])) {
                $this->setPatternAttachment($data['patternAttachment']);
            }
            if (isset($data['patternBase64Binary'])) {
                $this->setPatternBase64Binary($data['patternBase64Binary']);
            }
            if (isset($data['patternBoolean'])) {
                $this->setPatternBoolean($data['patternBoolean']);
            }
            if (isset($data['patternCanonical'])) {
                $this->setPatternCanonical($data['patternCanonical']);
            }
            if (isset($data['patternCode'])) {
                $this->setPatternCode($data['patternCode']);
            }
            if (isset($data['patternCodeableConcept'])) {
                $this->setPatternCodeableConcept($data['patternCodeableConcept']);
            }
            if (isset($data['patternCoding'])) {
                $this->setPatternCoding($data['patternCoding']);
            }
            if (isset($data['patternContactDetail'])) {
                $this->setPatternContactDetail($data['patternContactDetail']);
            }
            if (isset($data['patternContactPoint'])) {
                $this->setPatternContactPoint($data['patternContactPoint']);
            }
            if (isset($data['patternContributor'])) {
                $this->setPatternContributor($data['patternContributor']);
            }
            if (isset($data['patternCount'])) {
                $this->setPatternCount($data['patternCount']);
            }
            if (isset($data['patternDataRequirement'])) {
                $this->setPatternDataRequirement($data['patternDataRequirement']);
            }
            if (isset($data['patternDate'])) {
                $this->setPatternDate($data['patternDate']);
            }
            if (isset($data['patternDateTime'])) {
                $this->setPatternDateTime($data['patternDateTime']);
            }
            if (isset($data['patternDecimal'])) {
                $this->setPatternDecimal($data['patternDecimal']);
            }
            if (isset($data['patternDistance'])) {
                $this->setPatternDistance($data['patternDistance']);
            }
            if (isset($data['patternDosage'])) {
                $this->setPatternDosage($data['patternDosage']);
            }
            if (isset($data['patternDuration'])) {
                $this->setPatternDuration($data['patternDuration']);
            }
            if (isset($data['patternExpression'])) {
                $this->setPatternExpression($data['patternExpression']);
            }
            if (isset($data['patternHumanName'])) {
                $this->setPatternHumanName($data['patternHumanName']);
            }
            if (isset($data['patternId'])) {
                $this->setPatternId($data['patternId']);
            }
            if (isset($data['patternIdentifier'])) {
                $this->setPatternIdentifier($data['patternIdentifier']);
            }
            if (isset($data['patternInstant'])) {
                $this->setPatternInstant($data['patternInstant']);
            }
            if (isset($data['patternInteger'])) {
                $this->setPatternInteger($data['patternInteger']);
            }
            if (isset($data['patternMarkdown'])) {
                $this->setPatternMarkdown($data['patternMarkdown']);
            }
            if (isset($data['patternMoney'])) {
                $this->setPatternMoney($data['patternMoney']);
            }
            if (isset($data['patternOid'])) {
                $this->setPatternOid($data['patternOid']);
            }
            if (isset($data['patternParameterDefinition'])) {
                $this->setPatternParameterDefinition($data['patternParameterDefinition']);
            }
            if (isset($data['patternPeriod'])) {
                $this->setPatternPeriod($data['patternPeriod']);
            }
            if (isset($data['patternPositiveInt'])) {
                $this->setPatternPositiveInt($data['patternPositiveInt']);
            }
            if (isset($data['patternQuantity'])) {
                $this->setPatternQuantity($data['patternQuantity']);
            }
            if (isset($data['patternRange'])) {
                $this->setPatternRange($data['patternRange']);
            }
            if (isset($data['patternRatio'])) {
                $this->setPatternRatio($data['patternRatio']);
            }
            if (isset($data['patternReference'])) {
                $this->setPatternReference($data['patternReference']);
            }
            if (isset($data['patternRelatedArtifact'])) {
                $this->setPatternRelatedArtifact($data['patternRelatedArtifact']);
            }
            if (isset($data['patternSampledData'])) {
                $this->setPatternSampledData($data['patternSampledData']);
            }
            if (isset($data['patternSignature'])) {
                $this->setPatternSignature($data['patternSignature']);
            }
            if (isset($data['patternString'])) {
                $this->setPatternString($data['patternString']);
            }
            if (isset($data['patternTime'])) {
                $this->setPatternTime($data['patternTime']);
            }
            if (isset($data['patternTiming'])) {
                $this->setPatternTiming($data['patternTiming']);
            }
            if (isset($data['patternTriggerDefinition'])) {
                $this->setPatternTriggerDefinition($data['patternTriggerDefinition']);
            }
            if (isset($data['patternUnsignedInt'])) {
                $this->setPatternUnsignedInt($data['patternUnsignedInt']);
            }
            if (isset($data['patternUri'])) {
                $this->setPatternUri($data['patternUri']);
            }
            if (isset($data['patternUrl'])) {
                $this->setPatternUrl($data['patternUrl']);
            }
            if (isset($data['patternUsageContext'])) {
                $this->setPatternUsageContext($data['patternUsageContext']);
            }
            if (isset($data['patternUuid'])) {
                $this->setPatternUuid($data['patternUuid']);
            }
            if (isset($data['representation'])) {
                $this->setRepresentation($data['representation']);
            }
            if (isset($data['requirements'])) {
                $this->setRequirements($data['requirements']);
            }
            if (isset($data['short'])) {
                $this->setShort($data['short']);
            }
            if (isset($data['sliceIsConstraining'])) {
                $this->setSliceIsConstraining($data['sliceIsConstraining']);
            }
            if (isset($data['sliceName'])) {
                $this->setSliceName($data['sliceName']);
            }
            if (isset($data['slicing'])) {
                $this->setSlicing($data['slicing']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAlias($alias)
    {
        if (null === $alias) {
            return $this; 
        }
        if (is_scalar($alias)) {
            $alias = new FHIRString($alias);
        }
        if (!($alias instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setAlias - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($alias)
            ));
        }
        $this->alias = $alias;
        return $this;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAlias()
    {
        return $this->alias;
    }


    /**
     * Information about the base definition of the element, provided to make it unnecessary for tools to trace the deviation of the element through the derived and related profiles. When the element definition is not the original definition of an element - i.g. either in a constraint on another type, or for elements from a super type in a snap shot - then the information in provided in the element definition may be different to the base definition. On the original definition of the element, it will be same.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBase
     * @return $this
     */
    public function setBase(FHIRElementDefinitionBase $base = null)
    {
        if (null === $base) {
            return $this; 
        }
        $this->base = $base;
        return $this;
    }

    /**
     * Information about the base definition of the element, provided to make it unnecessary for tools to trace the deviation of the element through the derived and related profiles. When the element definition is not the original definition of an element - i.g. either in a constraint on another type, or for elements from a super type in a snap shot - then the information in provided in the element definition may be different to the base definition. On the original definition of the element, it will be same.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public function getBase()
    {
        return $this->base;
    }


    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept, Quantity), or the data types (string, uri).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBinding
     * @return $this
     */
    public function setBinding(FHIRElementDefinitionBinding $binding = null)
    {
        if (null === $binding) {
            return $this; 
        }
        $this->binding = $binding;
        return $this;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept, Quantity), or the data types (string, uri).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function getBinding()
    {
        return $this->binding;
    }


    /**
     * A code that has the same meaning as the element in a particular terminology.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setCode(FHIRCoding $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A code that has the same meaning as the element in a particular terminology.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc. (Note: The text you are reading is specified in ElementDefinition.comment).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setComment($comment)
    {
        if (null === $comment) {
            return $this; 
        }
        if (is_scalar($comment)) {
            $comment = new FHIRMarkdown($comment);
        }
        if (!($comment instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setComment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($comment)
            ));
        }
        $this->comment = $comment;
        return $this;
    }

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc. (Note: The text you are reading is specified in ElementDefinition.comment).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setCondition($condition)
    {
        if (null === $condition) {
            return $this; 
        }
        if (is_scalar($condition)) {
            $condition = new FHIRId($condition);
        }
        if (!($condition instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setCondition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($condition)
            ));
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getCondition()
    {
        return $this->condition;
    }


    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint
     * @return $this
     */
    public function setConstraint(FHIRElementDefinitionConstraint $constraint = null)
    {
        if (null === $constraint) {
            return $this; 
        }
        $this->constraint = $constraint;
        return $this;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint
     */
    public function getConstraint()
    {
        return $this->constraint;
    }


    /**
     * Identifies an element defined elsewhere in the definition whose content rules should be applied to the current element. ContentReferences bring across all the rules that are in the ElementDefinition for the element, including definitions, cardinality constraints, bindings, invariants etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setContentReference($contentReference)
    {
        if (null === $contentReference) {
            return $this; 
        }
        if (is_scalar($contentReference)) {
            $contentReference = new FHIRUri($contentReference);
        }
        if (!($contentReference instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setContentReference - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($contentReference)
            ));
        }
        $this->contentReference = $contentReference;
        return $this;
    }

    /**
     * Identifies an element defined elsewhere in the definition whose content rules should be applied to the current element. ContentReferences bring across all the rules that are in the ElementDefinition for the element, including definitions, cardinality constraints, bindings, invariants etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getContentReference()
    {
        return $this->contentReference;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     * @return $this
     */
    public function setDefaultValueAddress(FHIRAddress $defaultValueAddress = null)
    {
        if (null === $defaultValueAddress) {
            return $this; 
        }
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress()
    {
        return $this->defaultValueAddress;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setDefaultValueAge(FHIRAge $defaultValueAge = null)
    {
        if (null === $defaultValueAge) {
            return $this; 
        }
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge()
    {
        return $this->defaultValueAge;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setDefaultValueAnnotation(FHIRAnnotation $defaultValueAnnotation = null)
    {
        if (null === $defaultValueAnnotation) {
            return $this; 
        }
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation()
    {
        return $this->defaultValueAnnotation;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setDefaultValueAttachment(FHIRAttachment $defaultValueAttachment = null)
    {
        if (null === $defaultValueAttachment) {
            return $this; 
        }
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment()
    {
        return $this->defaultValueAttachment;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setDefaultValueBase64Binary($defaultValueBase64Binary)
    {
        if (null === $defaultValueBase64Binary) {
            return $this; 
        }
        if (is_scalar($defaultValueBase64Binary)) {
            $defaultValueBase64Binary = new FHIRBase64Binary($defaultValueBase64Binary);
        }
        if (!($defaultValueBase64Binary instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueBase64Binary - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($defaultValueBase64Binary)
            ));
        }
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary()
    {
        return $this->defaultValueBase64Binary;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setDefaultValueBoolean($defaultValueBoolean)
    {
        if (null === $defaultValueBoolean) {
            return $this; 
        }
        if (is_scalar($defaultValueBoolean)) {
            $defaultValueBoolean = new FHIRBoolean($defaultValueBoolean);
        }
        if (!($defaultValueBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($defaultValueBoolean)
            ));
        }
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean()
    {
        return $this->defaultValueBoolean;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setDefaultValueCanonical($defaultValueCanonical)
    {
        if (null === $defaultValueCanonical) {
            return $this; 
        }
        if (is_scalar($defaultValueCanonical)) {
            $defaultValueCanonical = new FHIRCanonical($defaultValueCanonical);
        }
        if (!($defaultValueCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($defaultValueCanonical)
            ));
        }
        $this->defaultValueCanonical = $defaultValueCanonical;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getDefaultValueCanonical()
    {
        return $this->defaultValueCanonical;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setDefaultValueCode($defaultValueCode)
    {
        if (null === $defaultValueCode) {
            return $this; 
        }
        if (is_scalar($defaultValueCode)) {
            $defaultValueCode = new FHIRCode($defaultValueCode);
        }
        if (!($defaultValueCode instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($defaultValueCode)
            ));
        }
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode()
    {
        return $this->defaultValueCode;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDefaultValueCodeableConcept(FHIRCodeableConcept $defaultValueCodeableConcept = null)
    {
        if (null === $defaultValueCodeableConcept) {
            return $this; 
        }
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept()
    {
        return $this->defaultValueCodeableConcept;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setDefaultValueCoding(FHIRCoding $defaultValueCoding = null)
    {
        if (null === $defaultValueCoding) {
            return $this; 
        }
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding()
    {
        return $this->defaultValueCoding;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setDefaultValueContactDetail(FHIRContactDetail $defaultValueContactDetail = null)
    {
        if (null === $defaultValueContactDetail) {
            return $this; 
        }
        $this->defaultValueContactDetail = $defaultValueContactDetail;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getDefaultValueContactDetail()
    {
        return $this->defaultValueContactDetail;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setDefaultValueContactPoint(FHIRContactPoint $defaultValueContactPoint = null)
    {
        if (null === $defaultValueContactPoint) {
            return $this; 
        }
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint()
    {
        return $this->defaultValueContactPoint;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContributor
     * @return $this
     */
    public function setDefaultValueContributor(FHIRContributor $defaultValueContributor = null)
    {
        if (null === $defaultValueContributor) {
            return $this; 
        }
        $this->defaultValueContributor = $defaultValueContributor;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContributor
     */
    public function getDefaultValueContributor()
    {
        return $this->defaultValueContributor;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     * @return $this
     */
    public function setDefaultValueCount(FHIRCount $defaultValueCount = null)
    {
        if (null === $defaultValueCount) {
            return $this; 
        }
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getDefaultValueCount()
    {
        return $this->defaultValueCount;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     * @return $this
     */
    public function setDefaultValueDataRequirement(FHIRDataRequirement $defaultValueDataRequirement = null)
    {
        if (null === $defaultValueDataRequirement) {
            return $this; 
        }
        $this->defaultValueDataRequirement = $defaultValueDataRequirement;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function getDefaultValueDataRequirement()
    {
        return $this->defaultValueDataRequirement;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setDefaultValueDate($defaultValueDate)
    {
        if (null === $defaultValueDate) {
            return $this; 
        }
        if (is_scalar($defaultValueDate)) {
            $defaultValueDate = new FHIRDate($defaultValueDate);
        }
        if (!($defaultValueDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($defaultValueDate)
            ));
        }
        $this->defaultValueDate = $defaultValueDate;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate()
    {
        return $this->defaultValueDate;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDefaultValueDateTime($defaultValueDateTime)
    {
        if (null === $defaultValueDateTime) {
            return $this; 
        }
        if (is_scalar($defaultValueDateTime)) {
            $defaultValueDateTime = new FHIRDateTime($defaultValueDateTime);
        }
        if (!($defaultValueDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($defaultValueDateTime)
            ));
        }
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime()
    {
        return $this->defaultValueDateTime;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setDefaultValueDecimal($defaultValueDecimal)
    {
        if (null === $defaultValueDecimal) {
            return $this; 
        }
        if (is_scalar($defaultValueDecimal)) {
            $defaultValueDecimal = new FHIRDecimal($defaultValueDecimal);
        }
        if (!($defaultValueDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($defaultValueDecimal)
            ));
        }
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal()
    {
        return $this->defaultValueDecimal;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     * @return $this
     */
    public function setDefaultValueDistance(FHIRDistance $defaultValueDistance = null)
    {
        if (null === $defaultValueDistance) {
            return $this; 
        }
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance()
    {
        return $this->defaultValueDistance;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     * @return $this
     */
    public function setDefaultValueDosage(FHIRDosage $defaultValueDosage = null)
    {
        if (null === $defaultValueDosage) {
            return $this; 
        }
        $this->defaultValueDosage = $defaultValueDosage;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getDefaultValueDosage()
    {
        return $this->defaultValueDosage;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setDefaultValueDuration(FHIRDuration $defaultValueDuration = null)
    {
        if (null === $defaultValueDuration) {
            return $this; 
        }
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration()
    {
        return $this->defaultValueDuration;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     * @return $this
     */
    public function setDefaultValueExpression(FHIRExpression $defaultValueExpression = null)
    {
        if (null === $defaultValueExpression) {
            return $this; 
        }
        $this->defaultValueExpression = $defaultValueExpression;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public function getDefaultValueExpression()
    {
        return $this->defaultValueExpression;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     * @return $this
     */
    public function setDefaultValueHumanName(FHIRHumanName $defaultValueHumanName = null)
    {
        if (null === $defaultValueHumanName) {
            return $this; 
        }
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName()
    {
        return $this->defaultValueHumanName;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setDefaultValueId($defaultValueId)
    {
        if (null === $defaultValueId) {
            return $this; 
        }
        if (is_scalar($defaultValueId)) {
            $defaultValueId = new FHIRId($defaultValueId);
        }
        if (!($defaultValueId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($defaultValueId)
            ));
        }
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getDefaultValueId()
    {
        return $this->defaultValueId;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setDefaultValueIdentifier(FHIRIdentifier $defaultValueIdentifier = null)
    {
        if (null === $defaultValueIdentifier) {
            return $this; 
        }
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier()
    {
        return $this->defaultValueIdentifier;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setDefaultValueInstant($defaultValueInstant)
    {
        if (null === $defaultValueInstant) {
            return $this; 
        }
        if (is_scalar($defaultValueInstant)) {
            $defaultValueInstant = new FHIRInstant($defaultValueInstant);
        }
        if (!($defaultValueInstant instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueInstant - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($defaultValueInstant)
            ));
        }
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant()
    {
        return $this->defaultValueInstant;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setDefaultValueInteger($defaultValueInteger)
    {
        if (null === $defaultValueInteger) {
            return $this; 
        }
        if (is_scalar($defaultValueInteger)) {
            $defaultValueInteger = new FHIRInteger($defaultValueInteger);
        }
        if (!($defaultValueInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($defaultValueInteger)
            ));
        }
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger()
    {
        return $this->defaultValueInteger;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDefaultValueMarkdown($defaultValueMarkdown)
    {
        if (null === $defaultValueMarkdown) {
            return $this; 
        }
        if (is_scalar($defaultValueMarkdown)) {
            $defaultValueMarkdown = new FHIRMarkdown($defaultValueMarkdown);
        }
        if (!($defaultValueMarkdown instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueMarkdown - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($defaultValueMarkdown)
            ));
        }
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown()
    {
        return $this->defaultValueMarkdown;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setDefaultValueMoney(FHIRMoney $defaultValueMoney = null)
    {
        if (null === $defaultValueMoney) {
            return $this; 
        }
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getDefaultValueMoney()
    {
        return $this->defaultValueMoney;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIROid
     * @return $this
     */
    public function setDefaultValueOid($defaultValueOid)
    {
        if (null === $defaultValueOid) {
            return $this; 
        }
        if (is_scalar($defaultValueOid)) {
            $defaultValueOid = new FHIROid($defaultValueOid);
        }
        if (!($defaultValueOid instanceof FHIROid)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueOid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIROid or appropriate scalar value, %s seen.',
                gettype($defaultValueOid)
            ));
        }
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getDefaultValueOid()
    {
        return $this->defaultValueOid;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     * @return $this
     */
    public function setDefaultValueParameterDefinition(FHIRParameterDefinition $defaultValueParameterDefinition = null)
    {
        if (null === $defaultValueParameterDefinition) {
            return $this; 
        }
        $this->defaultValueParameterDefinition = $defaultValueParameterDefinition;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     */
    public function getDefaultValueParameterDefinition()
    {
        return $this->defaultValueParameterDefinition;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setDefaultValuePeriod(FHIRPeriod $defaultValuePeriod = null)
    {
        if (null === $defaultValuePeriod) {
            return $this; 
        }
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod()
    {
        return $this->defaultValuePeriod;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setDefaultValuePositiveInt($defaultValuePositiveInt)
    {
        if (null === $defaultValuePositiveInt) {
            return $this; 
        }
        if (is_scalar($defaultValuePositiveInt)) {
            $defaultValuePositiveInt = new FHIRPositiveInt($defaultValuePositiveInt);
        }
        if (!($defaultValuePositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValuePositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($defaultValuePositiveInt)
            ));
        }
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt()
    {
        return $this->defaultValuePositiveInt;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDefaultValueQuantity(FHIRQuantity $defaultValueQuantity = null)
    {
        if (null === $defaultValueQuantity) {
            return $this; 
        }
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity()
    {
        return $this->defaultValueQuantity;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setDefaultValueRange(FHIRRange $defaultValueRange = null)
    {
        if (null === $defaultValueRange) {
            return $this; 
        }
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange()
    {
        return $this->defaultValueRange;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setDefaultValueRatio(FHIRRatio $defaultValueRatio = null)
    {
        if (null === $defaultValueRatio) {
            return $this; 
        }
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio()
    {
        return $this->defaultValueRatio;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDefaultValueReference(FHIRReference $defaultValueReference = null)
    {
        if (null === $defaultValueReference) {
            return $this; 
        }
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference()
    {
        return $this->defaultValueReference;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     * @return $this
     */
    public function setDefaultValueRelatedArtifact(FHIRRelatedArtifact $defaultValueRelatedArtifact = null)
    {
        if (null === $defaultValueRelatedArtifact) {
            return $this; 
        }
        $this->defaultValueRelatedArtifact = $defaultValueRelatedArtifact;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function getDefaultValueRelatedArtifact()
    {
        return $this->defaultValueRelatedArtifact;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     * @return $this
     */
    public function setDefaultValueSampledData(FHIRSampledData $defaultValueSampledData = null)
    {
        if (null === $defaultValueSampledData) {
            return $this; 
        }
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData()
    {
        return $this->defaultValueSampledData;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     * @return $this
     */
    public function setDefaultValueSignature(FHIRSignature $defaultValueSignature = null)
    {
        if (null === $defaultValueSignature) {
            return $this; 
        }
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature()
    {
        return $this->defaultValueSignature;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDefaultValueString($defaultValueString)
    {
        if (null === $defaultValueString) {
            return $this; 
        }
        if (is_scalar($defaultValueString)) {
            $defaultValueString = new FHIRString($defaultValueString);
        }
        if (!($defaultValueString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($defaultValueString)
            ));
        }
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDefaultValueString()
    {
        return $this->defaultValueString;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setDefaultValueTime($defaultValueTime)
    {
        if (null === $defaultValueTime) {
            return $this; 
        }
        if (is_scalar($defaultValueTime)) {
            $defaultValueTime = new FHIRTime($defaultValueTime);
        }
        if (!($defaultValueTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($defaultValueTime)
            ));
        }
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime()
    {
        return $this->defaultValueTime;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setDefaultValueTiming(FHIRTiming $defaultValueTiming = null)
    {
        if (null === $defaultValueTiming) {
            return $this; 
        }
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getDefaultValueTiming()
    {
        return $this->defaultValueTiming;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     * @return $this
     */
    public function setDefaultValueTriggerDefinition(FHIRTriggerDefinition $defaultValueTriggerDefinition = null)
    {
        if (null === $defaultValueTriggerDefinition) {
            return $this; 
        }
        $this->defaultValueTriggerDefinition = $defaultValueTriggerDefinition;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function getDefaultValueTriggerDefinition()
    {
        return $this->defaultValueTriggerDefinition;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setDefaultValueUnsignedInt($defaultValueUnsignedInt)
    {
        if (null === $defaultValueUnsignedInt) {
            return $this; 
        }
        if (is_scalar($defaultValueUnsignedInt)) {
            $defaultValueUnsignedInt = new FHIRUnsignedInt($defaultValueUnsignedInt);
        }
        if (!($defaultValueUnsignedInt instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueUnsignedInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($defaultValueUnsignedInt)
            ));
        }
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt()
    {
        return $this->defaultValueUnsignedInt;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setDefaultValueUri($defaultValueUri)
    {
        if (null === $defaultValueUri) {
            return $this; 
        }
        if (is_scalar($defaultValueUri)) {
            $defaultValueUri = new FHIRUri($defaultValueUri);
        }
        if (!($defaultValueUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($defaultValueUri)
            ));
        }
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri()
    {
        return $this->defaultValueUri;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setDefaultValueUrl($defaultValueUrl)
    {
        if (null === $defaultValueUrl) {
            return $this; 
        }
        if (is_scalar($defaultValueUrl)) {
            $defaultValueUrl = new FHIRUrl($defaultValueUrl);
        }
        if (!($defaultValueUrl instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($defaultValueUrl)
            ));
        }
        $this->defaultValueUrl = $defaultValueUrl;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getDefaultValueUrl()
    {
        return $this->defaultValueUrl;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     * @return $this
     */
    public function setDefaultValueUsageContext(FHIRUsageContext $defaultValueUsageContext = null)
    {
        if (null === $defaultValueUsageContext) {
            return $this; 
        }
        $this->defaultValueUsageContext = $defaultValueUsageContext;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getDefaultValueUsageContext()
    {
        return $this->defaultValueUsageContext;
    }


    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUuid
     * @return $this
     */
    public function setDefaultValueUuid($defaultValueUuid)
    {
        if (null === $defaultValueUuid) {
            return $this; 
        }
        if (is_scalar($defaultValueUuid)) {
            $defaultValueUuid = new FHIRUuid($defaultValueUuid);
        }
        if (!($defaultValueUuid instanceof FHIRUuid)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefaultValueUuid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUuid or appropriate scalar value, %s seen.',
                gettype($defaultValueUuid)
            ));
        }
        $this->defaultValueUuid = $defaultValueUuid;
        return $this;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getDefaultValueUuid()
    {
        return $this->defaultValueUuid;
    }


    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource. (Note: The text you are reading is specified in ElementDefinition.definition).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDefinition($definition)
    {
        if (null === $definition) {
            return $this; 
        }
        if (is_scalar($definition)) {
            $definition = new FHIRMarkdown($definition);
        }
        if (!($definition instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setDefinition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($definition)
            ));
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource. (Note: The text you are reading is specified in ElementDefinition.definition).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefinition()
    {
        return $this->definition;
    }


    /**
     * A sample value for this element demonstrating the type of information that would typically be found in the element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample
     * @return $this
     */
    public function setExample(FHIRElementDefinitionExample $example = null)
    {
        if (null === $example) {
            return $this; 
        }
        $this->example = $example;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be found in the element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample
     */
    public function getExample()
    {
        return $this->example;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     * @return $this
     */
    public function setFixedAddress(FHIRAddress $fixedAddress = null)
    {
        if (null === $fixedAddress) {
            return $this; 
        }
        $this->fixedAddress = $fixedAddress;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getFixedAddress()
    {
        return $this->fixedAddress;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setFixedAge(FHIRAge $fixedAge = null)
    {
        if (null === $fixedAge) {
            return $this; 
        }
        $this->fixedAge = $fixedAge;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getFixedAge()
    {
        return $this->fixedAge;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setFixedAnnotation(FHIRAnnotation $fixedAnnotation = null)
    {
        if (null === $fixedAnnotation) {
            return $this; 
        }
        $this->fixedAnnotation = $fixedAnnotation;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getFixedAnnotation()
    {
        return $this->fixedAnnotation;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setFixedAttachment(FHIRAttachment $fixedAttachment = null)
    {
        if (null === $fixedAttachment) {
            return $this; 
        }
        $this->fixedAttachment = $fixedAttachment;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getFixedAttachment()
    {
        return $this->fixedAttachment;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setFixedBase64Binary($fixedBase64Binary)
    {
        if (null === $fixedBase64Binary) {
            return $this; 
        }
        if (is_scalar($fixedBase64Binary)) {
            $fixedBase64Binary = new FHIRBase64Binary($fixedBase64Binary);
        }
        if (!($fixedBase64Binary instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedBase64Binary - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($fixedBase64Binary)
            ));
        }
        $this->fixedBase64Binary = $fixedBase64Binary;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getFixedBase64Binary()
    {
        return $this->fixedBase64Binary;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setFixedBoolean($fixedBoolean)
    {
        if (null === $fixedBoolean) {
            return $this; 
        }
        if (is_scalar($fixedBoolean)) {
            $fixedBoolean = new FHIRBoolean($fixedBoolean);
        }
        if (!($fixedBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($fixedBoolean)
            ));
        }
        $this->fixedBoolean = $fixedBoolean;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getFixedBoolean()
    {
        return $this->fixedBoolean;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setFixedCanonical($fixedCanonical)
    {
        if (null === $fixedCanonical) {
            return $this; 
        }
        if (is_scalar($fixedCanonical)) {
            $fixedCanonical = new FHIRCanonical($fixedCanonical);
        }
        if (!($fixedCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($fixedCanonical)
            ));
        }
        $this->fixedCanonical = $fixedCanonical;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getFixedCanonical()
    {
        return $this->fixedCanonical;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setFixedCode($fixedCode)
    {
        if (null === $fixedCode) {
            return $this; 
        }
        if (is_scalar($fixedCode)) {
            $fixedCode = new FHIRCode($fixedCode);
        }
        if (!($fixedCode instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($fixedCode)
            ));
        }
        $this->fixedCode = $fixedCode;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getFixedCode()
    {
        return $this->fixedCode;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setFixedCodeableConcept(FHIRCodeableConcept $fixedCodeableConcept = null)
    {
        if (null === $fixedCodeableConcept) {
            return $this; 
        }
        $this->fixedCodeableConcept = $fixedCodeableConcept;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFixedCodeableConcept()
    {
        return $this->fixedCodeableConcept;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setFixedCoding(FHIRCoding $fixedCoding = null)
    {
        if (null === $fixedCoding) {
            return $this; 
        }
        $this->fixedCoding = $fixedCoding;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getFixedCoding()
    {
        return $this->fixedCoding;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setFixedContactDetail(FHIRContactDetail $fixedContactDetail = null)
    {
        if (null === $fixedContactDetail) {
            return $this; 
        }
        $this->fixedContactDetail = $fixedContactDetail;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getFixedContactDetail()
    {
        return $this->fixedContactDetail;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setFixedContactPoint(FHIRContactPoint $fixedContactPoint = null)
    {
        if (null === $fixedContactPoint) {
            return $this; 
        }
        $this->fixedContactPoint = $fixedContactPoint;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getFixedContactPoint()
    {
        return $this->fixedContactPoint;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContributor
     * @return $this
     */
    public function setFixedContributor(FHIRContributor $fixedContributor = null)
    {
        if (null === $fixedContributor) {
            return $this; 
        }
        $this->fixedContributor = $fixedContributor;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContributor
     */
    public function getFixedContributor()
    {
        return $this->fixedContributor;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     * @return $this
     */
    public function setFixedCount(FHIRCount $fixedCount = null)
    {
        if (null === $fixedCount) {
            return $this; 
        }
        $this->fixedCount = $fixedCount;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getFixedCount()
    {
        return $this->fixedCount;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     * @return $this
     */
    public function setFixedDataRequirement(FHIRDataRequirement $fixedDataRequirement = null)
    {
        if (null === $fixedDataRequirement) {
            return $this; 
        }
        $this->fixedDataRequirement = $fixedDataRequirement;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function getFixedDataRequirement()
    {
        return $this->fixedDataRequirement;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setFixedDate($fixedDate)
    {
        if (null === $fixedDate) {
            return $this; 
        }
        if (is_scalar($fixedDate)) {
            $fixedDate = new FHIRDate($fixedDate);
        }
        if (!($fixedDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($fixedDate)
            ));
        }
        $this->fixedDate = $fixedDate;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getFixedDate()
    {
        return $this->fixedDate;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setFixedDateTime($fixedDateTime)
    {
        if (null === $fixedDateTime) {
            return $this; 
        }
        if (is_scalar($fixedDateTime)) {
            $fixedDateTime = new FHIRDateTime($fixedDateTime);
        }
        if (!($fixedDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($fixedDateTime)
            ));
        }
        $this->fixedDateTime = $fixedDateTime;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getFixedDateTime()
    {
        return $this->fixedDateTime;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setFixedDecimal($fixedDecimal)
    {
        if (null === $fixedDecimal) {
            return $this; 
        }
        if (is_scalar($fixedDecimal)) {
            $fixedDecimal = new FHIRDecimal($fixedDecimal);
        }
        if (!($fixedDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($fixedDecimal)
            ));
        }
        $this->fixedDecimal = $fixedDecimal;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFixedDecimal()
    {
        return $this->fixedDecimal;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     * @return $this
     */
    public function setFixedDistance(FHIRDistance $fixedDistance = null)
    {
        if (null === $fixedDistance) {
            return $this; 
        }
        $this->fixedDistance = $fixedDistance;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getFixedDistance()
    {
        return $this->fixedDistance;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     * @return $this
     */
    public function setFixedDosage(FHIRDosage $fixedDosage = null)
    {
        if (null === $fixedDosage) {
            return $this; 
        }
        $this->fixedDosage = $fixedDosage;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getFixedDosage()
    {
        return $this->fixedDosage;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setFixedDuration(FHIRDuration $fixedDuration = null)
    {
        if (null === $fixedDuration) {
            return $this; 
        }
        $this->fixedDuration = $fixedDuration;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getFixedDuration()
    {
        return $this->fixedDuration;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     * @return $this
     */
    public function setFixedExpression(FHIRExpression $fixedExpression = null)
    {
        if (null === $fixedExpression) {
            return $this; 
        }
        $this->fixedExpression = $fixedExpression;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public function getFixedExpression()
    {
        return $this->fixedExpression;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     * @return $this
     */
    public function setFixedHumanName(FHIRHumanName $fixedHumanName = null)
    {
        if (null === $fixedHumanName) {
            return $this; 
        }
        $this->fixedHumanName = $fixedHumanName;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getFixedHumanName()
    {
        return $this->fixedHumanName;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setFixedId($fixedId)
    {
        if (null === $fixedId) {
            return $this; 
        }
        if (is_scalar($fixedId)) {
            $fixedId = new FHIRId($fixedId);
        }
        if (!($fixedId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($fixedId)
            ));
        }
        $this->fixedId = $fixedId;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getFixedId()
    {
        return $this->fixedId;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setFixedIdentifier(FHIRIdentifier $fixedIdentifier = null)
    {
        if (null === $fixedIdentifier) {
            return $this; 
        }
        $this->fixedIdentifier = $fixedIdentifier;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getFixedIdentifier()
    {
        return $this->fixedIdentifier;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setFixedInstant($fixedInstant)
    {
        if (null === $fixedInstant) {
            return $this; 
        }
        if (is_scalar($fixedInstant)) {
            $fixedInstant = new FHIRInstant($fixedInstant);
        }
        if (!($fixedInstant instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedInstant - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($fixedInstant)
            ));
        }
        $this->fixedInstant = $fixedInstant;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getFixedInstant()
    {
        return $this->fixedInstant;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setFixedInteger($fixedInteger)
    {
        if (null === $fixedInteger) {
            return $this; 
        }
        if (is_scalar($fixedInteger)) {
            $fixedInteger = new FHIRInteger($fixedInteger);
        }
        if (!($fixedInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($fixedInteger)
            ));
        }
        $this->fixedInteger = $fixedInteger;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getFixedInteger()
    {
        return $this->fixedInteger;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setFixedMarkdown($fixedMarkdown)
    {
        if (null === $fixedMarkdown) {
            return $this; 
        }
        if (is_scalar($fixedMarkdown)) {
            $fixedMarkdown = new FHIRMarkdown($fixedMarkdown);
        }
        if (!($fixedMarkdown instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedMarkdown - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($fixedMarkdown)
            ));
        }
        $this->fixedMarkdown = $fixedMarkdown;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getFixedMarkdown()
    {
        return $this->fixedMarkdown;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setFixedMoney(FHIRMoney $fixedMoney = null)
    {
        if (null === $fixedMoney) {
            return $this; 
        }
        $this->fixedMoney = $fixedMoney;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getFixedMoney()
    {
        return $this->fixedMoney;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIROid
     * @return $this
     */
    public function setFixedOid($fixedOid)
    {
        if (null === $fixedOid) {
            return $this; 
        }
        if (is_scalar($fixedOid)) {
            $fixedOid = new FHIROid($fixedOid);
        }
        if (!($fixedOid instanceof FHIROid)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedOid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIROid or appropriate scalar value, %s seen.',
                gettype($fixedOid)
            ));
        }
        $this->fixedOid = $fixedOid;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getFixedOid()
    {
        return $this->fixedOid;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     * @return $this
     */
    public function setFixedParameterDefinition(FHIRParameterDefinition $fixedParameterDefinition = null)
    {
        if (null === $fixedParameterDefinition) {
            return $this; 
        }
        $this->fixedParameterDefinition = $fixedParameterDefinition;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     */
    public function getFixedParameterDefinition()
    {
        return $this->fixedParameterDefinition;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setFixedPeriod(FHIRPeriod $fixedPeriod = null)
    {
        if (null === $fixedPeriod) {
            return $this; 
        }
        $this->fixedPeriod = $fixedPeriod;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getFixedPeriod()
    {
        return $this->fixedPeriod;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setFixedPositiveInt($fixedPositiveInt)
    {
        if (null === $fixedPositiveInt) {
            return $this; 
        }
        if (is_scalar($fixedPositiveInt)) {
            $fixedPositiveInt = new FHIRPositiveInt($fixedPositiveInt);
        }
        if (!($fixedPositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedPositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($fixedPositiveInt)
            ));
        }
        $this->fixedPositiveInt = $fixedPositiveInt;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFixedPositiveInt()
    {
        return $this->fixedPositiveInt;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setFixedQuantity(FHIRQuantity $fixedQuantity = null)
    {
        if (null === $fixedQuantity) {
            return $this; 
        }
        $this->fixedQuantity = $fixedQuantity;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getFixedQuantity()
    {
        return $this->fixedQuantity;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setFixedRange(FHIRRange $fixedRange = null)
    {
        if (null === $fixedRange) {
            return $this; 
        }
        $this->fixedRange = $fixedRange;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getFixedRange()
    {
        return $this->fixedRange;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setFixedRatio(FHIRRatio $fixedRatio = null)
    {
        if (null === $fixedRatio) {
            return $this; 
        }
        $this->fixedRatio = $fixedRatio;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getFixedRatio()
    {
        return $this->fixedRatio;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setFixedReference(FHIRReference $fixedReference = null)
    {
        if (null === $fixedReference) {
            return $this; 
        }
        $this->fixedReference = $fixedReference;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFixedReference()
    {
        return $this->fixedReference;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     * @return $this
     */
    public function setFixedRelatedArtifact(FHIRRelatedArtifact $fixedRelatedArtifact = null)
    {
        if (null === $fixedRelatedArtifact) {
            return $this; 
        }
        $this->fixedRelatedArtifact = $fixedRelatedArtifact;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function getFixedRelatedArtifact()
    {
        return $this->fixedRelatedArtifact;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     * @return $this
     */
    public function setFixedSampledData(FHIRSampledData $fixedSampledData = null)
    {
        if (null === $fixedSampledData) {
            return $this; 
        }
        $this->fixedSampledData = $fixedSampledData;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getFixedSampledData()
    {
        return $this->fixedSampledData;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     * @return $this
     */
    public function setFixedSignature(FHIRSignature $fixedSignature = null)
    {
        if (null === $fixedSignature) {
            return $this; 
        }
        $this->fixedSignature = $fixedSignature;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getFixedSignature()
    {
        return $this->fixedSignature;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setFixedString($fixedString)
    {
        if (null === $fixedString) {
            return $this; 
        }
        if (is_scalar($fixedString)) {
            $fixedString = new FHIRString($fixedString);
        }
        if (!($fixedString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($fixedString)
            ));
        }
        $this->fixedString = $fixedString;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getFixedString()
    {
        return $this->fixedString;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setFixedTime($fixedTime)
    {
        if (null === $fixedTime) {
            return $this; 
        }
        if (is_scalar($fixedTime)) {
            $fixedTime = new FHIRTime($fixedTime);
        }
        if (!($fixedTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($fixedTime)
            ));
        }
        $this->fixedTime = $fixedTime;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getFixedTime()
    {
        return $this->fixedTime;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setFixedTiming(FHIRTiming $fixedTiming = null)
    {
        if (null === $fixedTiming) {
            return $this; 
        }
        $this->fixedTiming = $fixedTiming;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getFixedTiming()
    {
        return $this->fixedTiming;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     * @return $this
     */
    public function setFixedTriggerDefinition(FHIRTriggerDefinition $fixedTriggerDefinition = null)
    {
        if (null === $fixedTriggerDefinition) {
            return $this; 
        }
        $this->fixedTriggerDefinition = $fixedTriggerDefinition;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function getFixedTriggerDefinition()
    {
        return $this->fixedTriggerDefinition;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setFixedUnsignedInt($fixedUnsignedInt)
    {
        if (null === $fixedUnsignedInt) {
            return $this; 
        }
        if (is_scalar($fixedUnsignedInt)) {
            $fixedUnsignedInt = new FHIRUnsignedInt($fixedUnsignedInt);
        }
        if (!($fixedUnsignedInt instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedUnsignedInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($fixedUnsignedInt)
            ));
        }
        $this->fixedUnsignedInt = $fixedUnsignedInt;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getFixedUnsignedInt()
    {
        return $this->fixedUnsignedInt;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setFixedUri($fixedUri)
    {
        if (null === $fixedUri) {
            return $this; 
        }
        if (is_scalar($fixedUri)) {
            $fixedUri = new FHIRUri($fixedUri);
        }
        if (!($fixedUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($fixedUri)
            ));
        }
        $this->fixedUri = $fixedUri;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getFixedUri()
    {
        return $this->fixedUri;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setFixedUrl($fixedUrl)
    {
        if (null === $fixedUrl) {
            return $this; 
        }
        if (is_scalar($fixedUrl)) {
            $fixedUrl = new FHIRUrl($fixedUrl);
        }
        if (!($fixedUrl instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($fixedUrl)
            ));
        }
        $this->fixedUrl = $fixedUrl;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getFixedUrl()
    {
        return $this->fixedUrl;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     * @return $this
     */
    public function setFixedUsageContext(FHIRUsageContext $fixedUsageContext = null)
    {
        if (null === $fixedUsageContext) {
            return $this; 
        }
        $this->fixedUsageContext = $fixedUsageContext;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getFixedUsageContext()
    {
        return $this->fixedUsageContext;
    }


    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUuid
     * @return $this
     */
    public function setFixedUuid($fixedUuid)
    {
        if (null === $fixedUuid) {
            return $this; 
        }
        if (is_scalar($fixedUuid)) {
            $fixedUuid = new FHIRUuid($fixedUuid);
        }
        if (!($fixedUuid instanceof FHIRUuid)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setFixedUuid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUuid or appropriate scalar value, %s seen.',
                gettype($fixedUuid)
            ));
        }
        $this->fixedUuid = $fixedUuid;
        return $this;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getFixedUuid()
    {
        return $this->fixedUuid;
    }


    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setIsModifier($isModifier)
    {
        if (null === $isModifier) {
            return $this; 
        }
        if (is_scalar($isModifier)) {
            $isModifier = new FHIRBoolean($isModifier);
        }
        if (!($isModifier instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setIsModifier - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($isModifier)
            ));
        }
        $this->isModifier = $isModifier;
        return $this;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsModifier()
    {
        return $this->isModifier;
    }


    /**
     * Explains how that element affects the interpretation of the resource or element that contains it.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setIsModifierReason($isModifierReason)
    {
        if (null === $isModifierReason) {
            return $this; 
        }
        if (is_scalar($isModifierReason)) {
            $isModifierReason = new FHIRString($isModifierReason);
        }
        if (!($isModifierReason instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setIsModifierReason - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($isModifierReason)
            ));
        }
        $this->isModifierReason = $isModifierReason;
        return $this;
    }

    /**
     * Explains how that element affects the interpretation of the resource or element that contains it.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIsModifierReason()
    {
        return $this->isModifierReason;
    }


    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setIsSummary($isSummary)
    {
        if (null === $isSummary) {
            return $this; 
        }
        if (is_scalar($isSummary)) {
            $isSummary = new FHIRBoolean($isSummary);
        }
        if (!($isSummary instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setIsSummary - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($isSummary)
            ));
        }
        $this->isSummary = $isSummary;
        return $this;
    }

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsSummary()
    {
        return $this->isSummary;
    }


    /**
     * A single preferred label which is the text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setLabel($label)
    {
        if (null === $label) {
            return $this; 
        }
        if (is_scalar($label)) {
            $label = new FHIRString($label);
        }
        if (!($label instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setLabel - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($label)
            ));
        }
        $this->label = $label;
        return $this;
    }

    /**
     * A single preferred label which is the text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }


    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping
     * @return $this
     */
    public function setMapping(FHIRElementDefinitionMapping $mapping = null)
    {
        if (null === $mapping) {
            return $this; 
        }
        $this->mapping = $mapping;
        return $this;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping
     */
    public function getMapping()
    {
        return $this->mapping;
    }


    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setMax($max)
    {
        if (null === $max) {
            return $this; 
        }
        if (is_scalar($max)) {
            $max = new FHIRString($max);
        }
        if (!($max instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMax - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($max)
            ));
        }
        $this->max = $max;
        return $this;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }


    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        if (null === $maxLength) {
            return $this; 
        }
        if (is_scalar($maxLength)) {
            $maxLength = new FHIRInteger($maxLength);
        }
        if (!($maxLength instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMaxLength - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($maxLength)
            ));
        }
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }


    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setMaxValueDate($maxValueDate)
    {
        if (null === $maxValueDate) {
            return $this; 
        }
        if (is_scalar($maxValueDate)) {
            $maxValueDate = new FHIRDate($maxValueDate);
        }
        if (!($maxValueDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMaxValueDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($maxValueDate)
            ));
        }
        $this->maxValueDate = $maxValueDate;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getMaxValueDate()
    {
        return $this->maxValueDate;
    }


    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setMaxValueDateTime($maxValueDateTime)
    {
        if (null === $maxValueDateTime) {
            return $this; 
        }
        if (is_scalar($maxValueDateTime)) {
            $maxValueDateTime = new FHIRDateTime($maxValueDateTime);
        }
        if (!($maxValueDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMaxValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($maxValueDateTime)
            ));
        }
        $this->maxValueDateTime = $maxValueDateTime;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getMaxValueDateTime()
    {
        return $this->maxValueDateTime;
    }


    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setMaxValueDecimal($maxValueDecimal)
    {
        if (null === $maxValueDecimal) {
            return $this; 
        }
        if (is_scalar($maxValueDecimal)) {
            $maxValueDecimal = new FHIRDecimal($maxValueDecimal);
        }
        if (!($maxValueDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMaxValueDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($maxValueDecimal)
            ));
        }
        $this->maxValueDecimal = $maxValueDecimal;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getMaxValueDecimal()
    {
        return $this->maxValueDecimal;
    }


    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setMaxValueInstant($maxValueInstant)
    {
        if (null === $maxValueInstant) {
            return $this; 
        }
        if (is_scalar($maxValueInstant)) {
            $maxValueInstant = new FHIRInstant($maxValueInstant);
        }
        if (!($maxValueInstant instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMaxValueInstant - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($maxValueInstant)
            ));
        }
        $this->maxValueInstant = $maxValueInstant;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getMaxValueInstant()
    {
        return $this->maxValueInstant;
    }


    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setMaxValueInteger($maxValueInteger)
    {
        if (null === $maxValueInteger) {
            return $this; 
        }
        if (is_scalar($maxValueInteger)) {
            $maxValueInteger = new FHIRInteger($maxValueInteger);
        }
        if (!($maxValueInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMaxValueInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($maxValueInteger)
            ));
        }
        $this->maxValueInteger = $maxValueInteger;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMaxValueInteger()
    {
        return $this->maxValueInteger;
    }


    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setMaxValuePositiveInt($maxValuePositiveInt)
    {
        if (null === $maxValuePositiveInt) {
            return $this; 
        }
        if (is_scalar($maxValuePositiveInt)) {
            $maxValuePositiveInt = new FHIRPositiveInt($maxValuePositiveInt);
        }
        if (!($maxValuePositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMaxValuePositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($maxValuePositiveInt)
            ));
        }
        $this->maxValuePositiveInt = $maxValuePositiveInt;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getMaxValuePositiveInt()
    {
        return $this->maxValuePositiveInt;
    }


    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setMaxValueQuantity(FHIRQuantity $maxValueQuantity = null)
    {
        if (null === $maxValueQuantity) {
            return $this; 
        }
        $this->maxValueQuantity = $maxValueQuantity;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMaxValueQuantity()
    {
        return $this->maxValueQuantity;
    }


    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setMaxValueTime($maxValueTime)
    {
        if (null === $maxValueTime) {
            return $this; 
        }
        if (is_scalar($maxValueTime)) {
            $maxValueTime = new FHIRTime($maxValueTime);
        }
        if (!($maxValueTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMaxValueTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($maxValueTime)
            ));
        }
        $this->maxValueTime = $maxValueTime;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getMaxValueTime()
    {
        return $this->maxValueTime;
    }


    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setMaxValueUnsignedInt($maxValueUnsignedInt)
    {
        if (null === $maxValueUnsignedInt) {
            return $this; 
        }
        if (is_scalar($maxValueUnsignedInt)) {
            $maxValueUnsignedInt = new FHIRUnsignedInt($maxValueUnsignedInt);
        }
        if (!($maxValueUnsignedInt instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMaxValueUnsignedInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($maxValueUnsignedInt)
            ));
        }
        $this->maxValueUnsignedInt = $maxValueUnsignedInt;
        return $this;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMaxValueUnsignedInt()
    {
        return $this->maxValueUnsignedInt;
    }


    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setMeaningWhenMissing($meaningWhenMissing)
    {
        if (null === $meaningWhenMissing) {
            return $this; 
        }
        if (is_scalar($meaningWhenMissing)) {
            $meaningWhenMissing = new FHIRMarkdown($meaningWhenMissing);
        }
        if (!($meaningWhenMissing instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMeaningWhenMissing - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($meaningWhenMissing)
            ));
        }
        $this->meaningWhenMissing = $meaningWhenMissing;
        return $this;
    }

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getMeaningWhenMissing()
    {
        return $this->meaningWhenMissing;
    }


    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setMin($min)
    {
        if (null === $min) {
            return $this; 
        }
        if (is_scalar($min)) {
            $min = new FHIRUnsignedInt($min);
        }
        if (!($min instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMin - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($min)
            ));
        }
        $this->min = $min;
        return $this;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMin()
    {
        return $this->min;
    }


    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setMinValueDate($minValueDate)
    {
        if (null === $minValueDate) {
            return $this; 
        }
        if (is_scalar($minValueDate)) {
            $minValueDate = new FHIRDate($minValueDate);
        }
        if (!($minValueDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMinValueDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($minValueDate)
            ));
        }
        $this->minValueDate = $minValueDate;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getMinValueDate()
    {
        return $this->minValueDate;
    }


    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setMinValueDateTime($minValueDateTime)
    {
        if (null === $minValueDateTime) {
            return $this; 
        }
        if (is_scalar($minValueDateTime)) {
            $minValueDateTime = new FHIRDateTime($minValueDateTime);
        }
        if (!($minValueDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMinValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($minValueDateTime)
            ));
        }
        $this->minValueDateTime = $minValueDateTime;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getMinValueDateTime()
    {
        return $this->minValueDateTime;
    }


    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setMinValueDecimal($minValueDecimal)
    {
        if (null === $minValueDecimal) {
            return $this; 
        }
        if (is_scalar($minValueDecimal)) {
            $minValueDecimal = new FHIRDecimal($minValueDecimal);
        }
        if (!($minValueDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMinValueDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($minValueDecimal)
            ));
        }
        $this->minValueDecimal = $minValueDecimal;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getMinValueDecimal()
    {
        return $this->minValueDecimal;
    }


    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setMinValueInstant($minValueInstant)
    {
        if (null === $minValueInstant) {
            return $this; 
        }
        if (is_scalar($minValueInstant)) {
            $minValueInstant = new FHIRInstant($minValueInstant);
        }
        if (!($minValueInstant instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMinValueInstant - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($minValueInstant)
            ));
        }
        $this->minValueInstant = $minValueInstant;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getMinValueInstant()
    {
        return $this->minValueInstant;
    }


    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setMinValueInteger($minValueInteger)
    {
        if (null === $minValueInteger) {
            return $this; 
        }
        if (is_scalar($minValueInteger)) {
            $minValueInteger = new FHIRInteger($minValueInteger);
        }
        if (!($minValueInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMinValueInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($minValueInteger)
            ));
        }
        $this->minValueInteger = $minValueInteger;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMinValueInteger()
    {
        return $this->minValueInteger;
    }


    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setMinValuePositiveInt($minValuePositiveInt)
    {
        if (null === $minValuePositiveInt) {
            return $this; 
        }
        if (is_scalar($minValuePositiveInt)) {
            $minValuePositiveInt = new FHIRPositiveInt($minValuePositiveInt);
        }
        if (!($minValuePositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMinValuePositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($minValuePositiveInt)
            ));
        }
        $this->minValuePositiveInt = $minValuePositiveInt;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getMinValuePositiveInt()
    {
        return $this->minValuePositiveInt;
    }


    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setMinValueQuantity(FHIRQuantity $minValueQuantity = null)
    {
        if (null === $minValueQuantity) {
            return $this; 
        }
        $this->minValueQuantity = $minValueQuantity;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMinValueQuantity()
    {
        return $this->minValueQuantity;
    }


    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setMinValueTime($minValueTime)
    {
        if (null === $minValueTime) {
            return $this; 
        }
        if (is_scalar($minValueTime)) {
            $minValueTime = new FHIRTime($minValueTime);
        }
        if (!($minValueTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMinValueTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($minValueTime)
            ));
        }
        $this->minValueTime = $minValueTime;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getMinValueTime()
    {
        return $this->minValueTime;
    }


    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setMinValueUnsignedInt($minValueUnsignedInt)
    {
        if (null === $minValueUnsignedInt) {
            return $this; 
        }
        if (is_scalar($minValueUnsignedInt)) {
            $minValueUnsignedInt = new FHIRUnsignedInt($minValueUnsignedInt);
        }
        if (!($minValueUnsignedInt instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMinValueUnsignedInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($minValueUnsignedInt)
            ));
        }
        $this->minValueUnsignedInt = $minValueUnsignedInt;
        return $this;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMinValueUnsignedInt()
    {
        return $this->minValueUnsignedInt;
    }


    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported. If false, whether to populate or use the data element in any way is at the discretion of the implementation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setMustSupport($mustSupport)
    {
        if (null === $mustSupport) {
            return $this; 
        }
        if (is_scalar($mustSupport)) {
            $mustSupport = new FHIRBoolean($mustSupport);
        }
        if (!($mustSupport instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setMustSupport - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($mustSupport)
            ));
        }
        $this->mustSupport = $mustSupport;
        return $this;
    }

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported. If false, whether to populate or use the data element in any way is at the discretion of the implementation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }


    /**
     * If present, indicates that the order of the repeating element has meaning and describes what that meaning is.  If absent, it means that the order of the element has no meaning.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setOrderMeaning($orderMeaning)
    {
        if (null === $orderMeaning) {
            return $this; 
        }
        if (is_scalar($orderMeaning)) {
            $orderMeaning = new FHIRString($orderMeaning);
        }
        if (!($orderMeaning instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setOrderMeaning - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($orderMeaning)
            ));
        }
        $this->orderMeaning = $orderMeaning;
        return $this;
    }

    /**
     * If present, indicates that the order of the repeating element has meaning and describes what that meaning is.  If absent, it means that the order of the element has no meaning.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOrderMeaning()
    {
        return $this->orderMeaning;
    }


    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPath($path)
    {
        if (null === $path) {
            return $this; 
        }
        if (is_scalar($path)) {
            $path = new FHIRString($path);
        }
        if (!($path instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPath - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($path)
            ));
        }
        $this->path = $path;
        return $this;
    }

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     * @return $this
     */
    public function setPatternAddress(FHIRAddress $patternAddress = null)
    {
        if (null === $patternAddress) {
            return $this; 
        }
        $this->patternAddress = $patternAddress;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getPatternAddress()
    {
        return $this->patternAddress;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setPatternAge(FHIRAge $patternAge = null)
    {
        if (null === $patternAge) {
            return $this; 
        }
        $this->patternAge = $patternAge;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getPatternAge()
    {
        return $this->patternAge;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setPatternAnnotation(FHIRAnnotation $patternAnnotation = null)
    {
        if (null === $patternAnnotation) {
            return $this; 
        }
        $this->patternAnnotation = $patternAnnotation;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getPatternAnnotation()
    {
        return $this->patternAnnotation;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setPatternAttachment(FHIRAttachment $patternAttachment = null)
    {
        if (null === $patternAttachment) {
            return $this; 
        }
        $this->patternAttachment = $patternAttachment;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPatternAttachment()
    {
        return $this->patternAttachment;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setPatternBase64Binary($patternBase64Binary)
    {
        if (null === $patternBase64Binary) {
            return $this; 
        }
        if (is_scalar($patternBase64Binary)) {
            $patternBase64Binary = new FHIRBase64Binary($patternBase64Binary);
        }
        if (!($patternBase64Binary instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternBase64Binary - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($patternBase64Binary)
            ));
        }
        $this->patternBase64Binary = $patternBase64Binary;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getPatternBase64Binary()
    {
        return $this->patternBase64Binary;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setPatternBoolean($patternBoolean)
    {
        if (null === $patternBoolean) {
            return $this; 
        }
        if (is_scalar($patternBoolean)) {
            $patternBoolean = new FHIRBoolean($patternBoolean);
        }
        if (!($patternBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($patternBoolean)
            ));
        }
        $this->patternBoolean = $patternBoolean;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPatternBoolean()
    {
        return $this->patternBoolean;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setPatternCanonical($patternCanonical)
    {
        if (null === $patternCanonical) {
            return $this; 
        }
        if (is_scalar($patternCanonical)) {
            $patternCanonical = new FHIRCanonical($patternCanonical);
        }
        if (!($patternCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($patternCanonical)
            ));
        }
        $this->patternCanonical = $patternCanonical;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getPatternCanonical()
    {
        return $this->patternCanonical;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setPatternCode($patternCode)
    {
        if (null === $patternCode) {
            return $this; 
        }
        if (is_scalar($patternCode)) {
            $patternCode = new FHIRCode($patternCode);
        }
        if (!($patternCode instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($patternCode)
            ));
        }
        $this->patternCode = $patternCode;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getPatternCode()
    {
        return $this->patternCode;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPatternCodeableConcept(FHIRCodeableConcept $patternCodeableConcept = null)
    {
        if (null === $patternCodeableConcept) {
            return $this; 
        }
        $this->patternCodeableConcept = $patternCodeableConcept;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPatternCodeableConcept()
    {
        return $this->patternCodeableConcept;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setPatternCoding(FHIRCoding $patternCoding = null)
    {
        if (null === $patternCoding) {
            return $this; 
        }
        $this->patternCoding = $patternCoding;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getPatternCoding()
    {
        return $this->patternCoding;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setPatternContactDetail(FHIRContactDetail $patternContactDetail = null)
    {
        if (null === $patternContactDetail) {
            return $this; 
        }
        $this->patternContactDetail = $patternContactDetail;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getPatternContactDetail()
    {
        return $this->patternContactDetail;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setPatternContactPoint(FHIRContactPoint $patternContactPoint = null)
    {
        if (null === $patternContactPoint) {
            return $this; 
        }
        $this->patternContactPoint = $patternContactPoint;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getPatternContactPoint()
    {
        return $this->patternContactPoint;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContributor
     * @return $this
     */
    public function setPatternContributor(FHIRContributor $patternContributor = null)
    {
        if (null === $patternContributor) {
            return $this; 
        }
        $this->patternContributor = $patternContributor;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContributor
     */
    public function getPatternContributor()
    {
        return $this->patternContributor;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     * @return $this
     */
    public function setPatternCount(FHIRCount $patternCount = null)
    {
        if (null === $patternCount) {
            return $this; 
        }
        $this->patternCount = $patternCount;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getPatternCount()
    {
        return $this->patternCount;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     * @return $this
     */
    public function setPatternDataRequirement(FHIRDataRequirement $patternDataRequirement = null)
    {
        if (null === $patternDataRequirement) {
            return $this; 
        }
        $this->patternDataRequirement = $patternDataRequirement;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function getPatternDataRequirement()
    {
        return $this->patternDataRequirement;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setPatternDate($patternDate)
    {
        if (null === $patternDate) {
            return $this; 
        }
        if (is_scalar($patternDate)) {
            $patternDate = new FHIRDate($patternDate);
        }
        if (!($patternDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($patternDate)
            ));
        }
        $this->patternDate = $patternDate;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getPatternDate()
    {
        return $this->patternDate;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setPatternDateTime($patternDateTime)
    {
        if (null === $patternDateTime) {
            return $this; 
        }
        if (is_scalar($patternDateTime)) {
            $patternDateTime = new FHIRDateTime($patternDateTime);
        }
        if (!($patternDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($patternDateTime)
            ));
        }
        $this->patternDateTime = $patternDateTime;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPatternDateTime()
    {
        return $this->patternDateTime;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setPatternDecimal($patternDecimal)
    {
        if (null === $patternDecimal) {
            return $this; 
        }
        if (is_scalar($patternDecimal)) {
            $patternDecimal = new FHIRDecimal($patternDecimal);
        }
        if (!($patternDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($patternDecimal)
            ));
        }
        $this->patternDecimal = $patternDecimal;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPatternDecimal()
    {
        return $this->patternDecimal;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     * @return $this
     */
    public function setPatternDistance(FHIRDistance $patternDistance = null)
    {
        if (null === $patternDistance) {
            return $this; 
        }
        $this->patternDistance = $patternDistance;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getPatternDistance()
    {
        return $this->patternDistance;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     * @return $this
     */
    public function setPatternDosage(FHIRDosage $patternDosage = null)
    {
        if (null === $patternDosage) {
            return $this; 
        }
        $this->patternDosage = $patternDosage;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getPatternDosage()
    {
        return $this->patternDosage;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setPatternDuration(FHIRDuration $patternDuration = null)
    {
        if (null === $patternDuration) {
            return $this; 
        }
        $this->patternDuration = $patternDuration;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getPatternDuration()
    {
        return $this->patternDuration;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     * @return $this
     */
    public function setPatternExpression(FHIRExpression $patternExpression = null)
    {
        if (null === $patternExpression) {
            return $this; 
        }
        $this->patternExpression = $patternExpression;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public function getPatternExpression()
    {
        return $this->patternExpression;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     * @return $this
     */
    public function setPatternHumanName(FHIRHumanName $patternHumanName = null)
    {
        if (null === $patternHumanName) {
            return $this; 
        }
        $this->patternHumanName = $patternHumanName;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getPatternHumanName()
    {
        return $this->patternHumanName;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setPatternId($patternId)
    {
        if (null === $patternId) {
            return $this; 
        }
        if (is_scalar($patternId)) {
            $patternId = new FHIRId($patternId);
        }
        if (!($patternId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($patternId)
            ));
        }
        $this->patternId = $patternId;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getPatternId()
    {
        return $this->patternId;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setPatternIdentifier(FHIRIdentifier $patternIdentifier = null)
    {
        if (null === $patternIdentifier) {
            return $this; 
        }
        $this->patternIdentifier = $patternIdentifier;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getPatternIdentifier()
    {
        return $this->patternIdentifier;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setPatternInstant($patternInstant)
    {
        if (null === $patternInstant) {
            return $this; 
        }
        if (is_scalar($patternInstant)) {
            $patternInstant = new FHIRInstant($patternInstant);
        }
        if (!($patternInstant instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternInstant - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($patternInstant)
            ));
        }
        $this->patternInstant = $patternInstant;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getPatternInstant()
    {
        return $this->patternInstant;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setPatternInteger($patternInteger)
    {
        if (null === $patternInteger) {
            return $this; 
        }
        if (is_scalar($patternInteger)) {
            $patternInteger = new FHIRInteger($patternInteger);
        }
        if (!($patternInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($patternInteger)
            ));
        }
        $this->patternInteger = $patternInteger;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getPatternInteger()
    {
        return $this->patternInteger;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setPatternMarkdown($patternMarkdown)
    {
        if (null === $patternMarkdown) {
            return $this; 
        }
        if (is_scalar($patternMarkdown)) {
            $patternMarkdown = new FHIRMarkdown($patternMarkdown);
        }
        if (!($patternMarkdown instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternMarkdown - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($patternMarkdown)
            ));
        }
        $this->patternMarkdown = $patternMarkdown;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPatternMarkdown()
    {
        return $this->patternMarkdown;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setPatternMoney(FHIRMoney $patternMoney = null)
    {
        if (null === $patternMoney) {
            return $this; 
        }
        $this->patternMoney = $patternMoney;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getPatternMoney()
    {
        return $this->patternMoney;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIROid
     * @return $this
     */
    public function setPatternOid($patternOid)
    {
        if (null === $patternOid) {
            return $this; 
        }
        if (is_scalar($patternOid)) {
            $patternOid = new FHIROid($patternOid);
        }
        if (!($patternOid instanceof FHIROid)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternOid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIROid or appropriate scalar value, %s seen.',
                gettype($patternOid)
            ));
        }
        $this->patternOid = $patternOid;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getPatternOid()
    {
        return $this->patternOid;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     * @return $this
     */
    public function setPatternParameterDefinition(FHIRParameterDefinition $patternParameterDefinition = null)
    {
        if (null === $patternParameterDefinition) {
            return $this; 
        }
        $this->patternParameterDefinition = $patternParameterDefinition;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     */
    public function getPatternParameterDefinition()
    {
        return $this->patternParameterDefinition;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPatternPeriod(FHIRPeriod $patternPeriod = null)
    {
        if (null === $patternPeriod) {
            return $this; 
        }
        $this->patternPeriod = $patternPeriod;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPatternPeriod()
    {
        return $this->patternPeriod;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setPatternPositiveInt($patternPositiveInt)
    {
        if (null === $patternPositiveInt) {
            return $this; 
        }
        if (is_scalar($patternPositiveInt)) {
            $patternPositiveInt = new FHIRPositiveInt($patternPositiveInt);
        }
        if (!($patternPositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternPositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($patternPositiveInt)
            ));
        }
        $this->patternPositiveInt = $patternPositiveInt;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getPatternPositiveInt()
    {
        return $this->patternPositiveInt;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setPatternQuantity(FHIRQuantity $patternQuantity = null)
    {
        if (null === $patternQuantity) {
            return $this; 
        }
        $this->patternQuantity = $patternQuantity;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getPatternQuantity()
    {
        return $this->patternQuantity;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setPatternRange(FHIRRange $patternRange = null)
    {
        if (null === $patternRange) {
            return $this; 
        }
        $this->patternRange = $patternRange;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getPatternRange()
    {
        return $this->patternRange;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setPatternRatio(FHIRRatio $patternRatio = null)
    {
        if (null === $patternRatio) {
            return $this; 
        }
        $this->patternRatio = $patternRatio;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getPatternRatio()
    {
        return $this->patternRatio;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatternReference(FHIRReference $patternReference = null)
    {
        if (null === $patternReference) {
            return $this; 
        }
        $this->patternReference = $patternReference;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatternReference()
    {
        return $this->patternReference;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     * @return $this
     */
    public function setPatternRelatedArtifact(FHIRRelatedArtifact $patternRelatedArtifact = null)
    {
        if (null === $patternRelatedArtifact) {
            return $this; 
        }
        $this->patternRelatedArtifact = $patternRelatedArtifact;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function getPatternRelatedArtifact()
    {
        return $this->patternRelatedArtifact;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     * @return $this
     */
    public function setPatternSampledData(FHIRSampledData $patternSampledData = null)
    {
        if (null === $patternSampledData) {
            return $this; 
        }
        $this->patternSampledData = $patternSampledData;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getPatternSampledData()
    {
        return $this->patternSampledData;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     * @return $this
     */
    public function setPatternSignature(FHIRSignature $patternSignature = null)
    {
        if (null === $patternSignature) {
            return $this; 
        }
        $this->patternSignature = $patternSignature;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getPatternSignature()
    {
        return $this->patternSignature;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPatternString($patternString)
    {
        if (null === $patternString) {
            return $this; 
        }
        if (is_scalar($patternString)) {
            $patternString = new FHIRString($patternString);
        }
        if (!($patternString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($patternString)
            ));
        }
        $this->patternString = $patternString;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPatternString()
    {
        return $this->patternString;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setPatternTime($patternTime)
    {
        if (null === $patternTime) {
            return $this; 
        }
        if (is_scalar($patternTime)) {
            $patternTime = new FHIRTime($patternTime);
        }
        if (!($patternTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($patternTime)
            ));
        }
        $this->patternTime = $patternTime;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getPatternTime()
    {
        return $this->patternTime;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setPatternTiming(FHIRTiming $patternTiming = null)
    {
        if (null === $patternTiming) {
            return $this; 
        }
        $this->patternTiming = $patternTiming;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getPatternTiming()
    {
        return $this->patternTiming;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     * @return $this
     */
    public function setPatternTriggerDefinition(FHIRTriggerDefinition $patternTriggerDefinition = null)
    {
        if (null === $patternTriggerDefinition) {
            return $this; 
        }
        $this->patternTriggerDefinition = $patternTriggerDefinition;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function getPatternTriggerDefinition()
    {
        return $this->patternTriggerDefinition;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setPatternUnsignedInt($patternUnsignedInt)
    {
        if (null === $patternUnsignedInt) {
            return $this; 
        }
        if (is_scalar($patternUnsignedInt)) {
            $patternUnsignedInt = new FHIRUnsignedInt($patternUnsignedInt);
        }
        if (!($patternUnsignedInt instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternUnsignedInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($patternUnsignedInt)
            ));
        }
        $this->patternUnsignedInt = $patternUnsignedInt;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getPatternUnsignedInt()
    {
        return $this->patternUnsignedInt;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setPatternUri($patternUri)
    {
        if (null === $patternUri) {
            return $this; 
        }
        if (is_scalar($patternUri)) {
            $patternUri = new FHIRUri($patternUri);
        }
        if (!($patternUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($patternUri)
            ));
        }
        $this->patternUri = $patternUri;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getPatternUri()
    {
        return $this->patternUri;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setPatternUrl($patternUrl)
    {
        if (null === $patternUrl) {
            return $this; 
        }
        if (is_scalar($patternUrl)) {
            $patternUrl = new FHIRUrl($patternUrl);
        }
        if (!($patternUrl instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($patternUrl)
            ));
        }
        $this->patternUrl = $patternUrl;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getPatternUrl()
    {
        return $this->patternUrl;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     * @return $this
     */
    public function setPatternUsageContext(FHIRUsageContext $patternUsageContext = null)
    {
        if (null === $patternUsageContext) {
            return $this; 
        }
        $this->patternUsageContext = $patternUsageContext;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getPatternUsageContext()
    {
        return $this->patternUsageContext;
    }


    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUuid
     * @return $this
     */
    public function setPatternUuid($patternUuid)
    {
        if (null === $patternUuid) {
            return $this; 
        }
        if (is_scalar($patternUuid)) {
            $patternUuid = new FHIRUuid($patternUuid);
        }
        if (!($patternUuid instanceof FHIRUuid)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setPatternUuid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUuid or appropriate scalar value, %s seen.',
                gettype($patternUuid)
            ));
        }
        $this->patternUuid = $patternUuid;
        return $this;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getPatternUuid()
    {
        return $this->patternUuid;
    }


    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation
     * @return $this
     */
    public function setRepresentation($representation)
    {
        if (null === $representation) {
            return $this; 
        }
        if (is_scalar($representation)) {
            $representation = new FHIRPropertyRepresentation($representation);
        }
        if (!($representation instanceof FHIRPropertyRepresentation)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setRepresentation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation or appropriate scalar value, %s seen.',
                gettype($representation)
            ));
        }
        $this->representation = $representation;
        return $this;
    }

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation
     */
    public function getRepresentation()
    {
        return $this->representation;
    }


    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setRequirements($requirements)
    {
        if (null === $requirements) {
            return $this; 
        }
        if (is_scalar($requirements)) {
            $requirements = new FHIRMarkdown($requirements);
        }
        if (!($requirements instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setRequirements - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($requirements)
            ));
        }
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getRequirements()
    {
        return $this->requirements;
    }


    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setShort($short)
    {
        if (null === $short) {
            return $this; 
        }
        if (is_scalar($short)) {
            $short = new FHIRString($short);
        }
        if (!($short instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setShort - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($short)
            ));
        }
        $this->short = $short;
        return $this;
    }

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getShort()
    {
        return $this->short;
    }


    /**
     * If true, indicates that this slice definition is constraining a slice definition with the same name in an inherited profile. If false, the slice is not overriding any slice in an inherited profile. If missing, the slice might or might not be overriding a slice in an inherited profile, depending on the sliceName.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setSliceIsConstraining($sliceIsConstraining)
    {
        if (null === $sliceIsConstraining) {
            return $this; 
        }
        if (is_scalar($sliceIsConstraining)) {
            $sliceIsConstraining = new FHIRBoolean($sliceIsConstraining);
        }
        if (!($sliceIsConstraining instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setSliceIsConstraining - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($sliceIsConstraining)
            ));
        }
        $this->sliceIsConstraining = $sliceIsConstraining;
        return $this;
    }

    /**
     * If true, indicates that this slice definition is constraining a slice definition with the same name in an inherited profile. If false, the slice is not overriding any slice in an inherited profile. If missing, the slice might or might not be overriding a slice in an inherited profile, depending on the sliceName.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getSliceIsConstraining()
    {
        return $this->sliceIsConstraining;
    }


    /**
     * The name of this element definition slice, when slicing is working. The name must be a token with no dots or spaces. This is a unique name referring to a specific set of constraints applied to this element, used to provide a name to different slices of the same element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSliceName($sliceName)
    {
        if (null === $sliceName) {
            return $this; 
        }
        if (is_scalar($sliceName)) {
            $sliceName = new FHIRString($sliceName);
        }
        if (!($sliceName instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinition::setSliceName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($sliceName)
            ));
        }
        $this->sliceName = $sliceName;
        return $this;
    }

    /**
     * The name of this element definition slice, when slicing is working. The name must be a token with no dots or spaces. This is a unique name referring to a specific set of constraints applied to this element, used to provide a name to different slices of the same element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSliceName()
    {
        return $this->sliceName;
    }


    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     * @return $this
     */
    public function setSlicing(FHIRElementDefinitionSlicing $slicing = null)
    {
        if (null === $slicing) {
            return $this; 
        }
        $this->slicing = $slicing;
        return $this;
    }

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function getSlicing()
    {
        return $this->slicing;
    }


    /**
     * The data type or resource that the value of this element is permitted to be.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType
     * @return $this
     */
    public function setType(FHIRElementDefinitionType $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAlias())) {
            $a['alias'] = $v;
        }
        if (null !== ($v = $this->getBase())) {
            $a['base'] = $v;
        }
        if (null !== ($v = $this->getBinding())) {
            $a['binding'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getComment())) {
            $a['comment'] = $v;
        }
        if (null !== ($v = $this->getCondition())) {
            $a['condition'] = $v;
        }
        if (null !== ($v = $this->getConstraint())) {
            $a['constraint'] = $v;
        }
        if (null !== ($v = $this->getContentReference())) {
            $a['contentReference'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            $a['defaultValueAddress'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            $a['defaultValueAge'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            $a['defaultValueAnnotation'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            $a['defaultValueAttachment'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueBase64Binary())) {
            $a['defaultValueBase64Binary'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            $a['defaultValueBoolean'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCanonical())) {
            $a['defaultValueCanonical'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            $a['defaultValueCode'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $a['defaultValueCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $a['defaultValueCoding'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContactDetail())) {
            $a['defaultValueContactDetail'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $a['defaultValueContactPoint'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContributor())) {
            $a['defaultValueContributor'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            $a['defaultValueCount'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDataRequirement())) {
            $a['defaultValueDataRequirement'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            $a['defaultValueDate'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            $a['defaultValueDateTime'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            $a['defaultValueDecimal'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            $a['defaultValueDistance'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDosage())) {
            $a['defaultValueDosage'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            $a['defaultValueDuration'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueExpression())) {
            $a['defaultValueExpression'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $a['defaultValueHumanName'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            $a['defaultValueId'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            $a['defaultValueIdentifier'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            $a['defaultValueInstant'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            $a['defaultValueInteger'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            $a['defaultValueMarkdown'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            $a['defaultValueMoney'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            $a['defaultValueOid'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueParameterDefinition())) {
            $a['defaultValueParameterDefinition'] = $v;
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $a['defaultValuePeriod'] = $v;
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            $a['defaultValuePositiveInt'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            $a['defaultValueQuantity'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueRange())) {
            $a['defaultValueRange'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueRatio())) {
            $a['defaultValueRatio'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueReference())) {
            $a['defaultValueReference'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueRelatedArtifact())) {
            $a['defaultValueRelatedArtifact'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            $a['defaultValueSampledData'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            $a['defaultValueSignature'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueString())) {
            $a['defaultValueString'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            $a['defaultValueTime'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            $a['defaultValueTiming'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueTriggerDefinition())) {
            $a['defaultValueTriggerDefinition'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $a['defaultValueUnsignedInt'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            $a['defaultValueUri'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUrl())) {
            $a['defaultValueUrl'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUsageContext())) {
            $a['defaultValueUsageContext'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUuid())) {
            $a['defaultValueUuid'] = $v;
        }
        if (null !== ($v = $this->getDefinition())) {
            $a['definition'] = $v;
        }
        if (null !== ($v = $this->getExample())) {
            $a['example'] = $v;
        }
        if (null !== ($v = $this->getFixedAddress())) {
            $a['fixedAddress'] = $v;
        }
        if (null !== ($v = $this->getFixedAge())) {
            $a['fixedAge'] = $v;
        }
        if (null !== ($v = $this->getFixedAnnotation())) {
            $a['fixedAnnotation'] = $v;
        }
        if (null !== ($v = $this->getFixedAttachment())) {
            $a['fixedAttachment'] = $v;
        }
        if (null !== ($v = $this->getFixedBase64Binary())) {
            $a['fixedBase64Binary'] = $v;
        }
        if (null !== ($v = $this->getFixedBoolean())) {
            $a['fixedBoolean'] = $v;
        }
        if (null !== ($v = $this->getFixedCanonical())) {
            $a['fixedCanonical'] = $v;
        }
        if (null !== ($v = $this->getFixedCode())) {
            $a['fixedCode'] = $v;
        }
        if (null !== ($v = $this->getFixedCodeableConcept())) {
            $a['fixedCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getFixedCoding())) {
            $a['fixedCoding'] = $v;
        }
        if (null !== ($v = $this->getFixedContactDetail())) {
            $a['fixedContactDetail'] = $v;
        }
        if (null !== ($v = $this->getFixedContactPoint())) {
            $a['fixedContactPoint'] = $v;
        }
        if (null !== ($v = $this->getFixedContributor())) {
            $a['fixedContributor'] = $v;
        }
        if (null !== ($v = $this->getFixedCount())) {
            $a['fixedCount'] = $v;
        }
        if (null !== ($v = $this->getFixedDataRequirement())) {
            $a['fixedDataRequirement'] = $v;
        }
        if (null !== ($v = $this->getFixedDate())) {
            $a['fixedDate'] = $v;
        }
        if (null !== ($v = $this->getFixedDateTime())) {
            $a['fixedDateTime'] = $v;
        }
        if (null !== ($v = $this->getFixedDecimal())) {
            $a['fixedDecimal'] = $v;
        }
        if (null !== ($v = $this->getFixedDistance())) {
            $a['fixedDistance'] = $v;
        }
        if (null !== ($v = $this->getFixedDosage())) {
            $a['fixedDosage'] = $v;
        }
        if (null !== ($v = $this->getFixedDuration())) {
            $a['fixedDuration'] = $v;
        }
        if (null !== ($v = $this->getFixedExpression())) {
            $a['fixedExpression'] = $v;
        }
        if (null !== ($v = $this->getFixedHumanName())) {
            $a['fixedHumanName'] = $v;
        }
        if (null !== ($v = $this->getFixedId())) {
            $a['fixedId'] = $v;
        }
        if (null !== ($v = $this->getFixedIdentifier())) {
            $a['fixedIdentifier'] = $v;
        }
        if (null !== ($v = $this->getFixedInstant())) {
            $a['fixedInstant'] = $v;
        }
        if (null !== ($v = $this->getFixedInteger())) {
            $a['fixedInteger'] = $v;
        }
        if (null !== ($v = $this->getFixedMarkdown())) {
            $a['fixedMarkdown'] = $v;
        }
        if (null !== ($v = $this->getFixedMoney())) {
            $a['fixedMoney'] = $v;
        }
        if (null !== ($v = $this->getFixedOid())) {
            $a['fixedOid'] = $v;
        }
        if (null !== ($v = $this->getFixedParameterDefinition())) {
            $a['fixedParameterDefinition'] = $v;
        }
        if (null !== ($v = $this->getFixedPeriod())) {
            $a['fixedPeriod'] = $v;
        }
        if (null !== ($v = $this->getFixedPositiveInt())) {
            $a['fixedPositiveInt'] = $v;
        }
        if (null !== ($v = $this->getFixedQuantity())) {
            $a['fixedQuantity'] = $v;
        }
        if (null !== ($v = $this->getFixedRange())) {
            $a['fixedRange'] = $v;
        }
        if (null !== ($v = $this->getFixedRatio())) {
            $a['fixedRatio'] = $v;
        }
        if (null !== ($v = $this->getFixedReference())) {
            $a['fixedReference'] = $v;
        }
        if (null !== ($v = $this->getFixedRelatedArtifact())) {
            $a['fixedRelatedArtifact'] = $v;
        }
        if (null !== ($v = $this->getFixedSampledData())) {
            $a['fixedSampledData'] = $v;
        }
        if (null !== ($v = $this->getFixedSignature())) {
            $a['fixedSignature'] = $v;
        }
        if (null !== ($v = $this->getFixedString())) {
            $a['fixedString'] = $v;
        }
        if (null !== ($v = $this->getFixedTime())) {
            $a['fixedTime'] = $v;
        }
        if (null !== ($v = $this->getFixedTiming())) {
            $a['fixedTiming'] = $v;
        }
        if (null !== ($v = $this->getFixedTriggerDefinition())) {
            $a['fixedTriggerDefinition'] = $v;
        }
        if (null !== ($v = $this->getFixedUnsignedInt())) {
            $a['fixedUnsignedInt'] = $v;
        }
        if (null !== ($v = $this->getFixedUri())) {
            $a['fixedUri'] = $v;
        }
        if (null !== ($v = $this->getFixedUrl())) {
            $a['fixedUrl'] = $v;
        }
        if (null !== ($v = $this->getFixedUsageContext())) {
            $a['fixedUsageContext'] = $v;
        }
        if (null !== ($v = $this->getFixedUuid())) {
            $a['fixedUuid'] = $v;
        }
        if (null !== ($v = $this->getIsModifier())) {
            $a['isModifier'] = $v;
        }
        if (null !== ($v = $this->getIsModifierReason())) {
            $a['isModifierReason'] = $v;
        }
        if (null !== ($v = $this->getIsSummary())) {
            $a['isSummary'] = $v;
        }
        if (null !== ($v = $this->getLabel())) {
            $a['label'] = $v;
        }
        if (null !== ($v = $this->getMapping())) {
            $a['mapping'] = $v;
        }
        if (null !== ($v = $this->getMax())) {
            $a['max'] = $v;
        }
        if (null !== ($v = $this->getMaxLength())) {
            $a['maxLength'] = $v;
        }
        if (null !== ($v = $this->getMaxValueDate())) {
            $a['maxValueDate'] = $v;
        }
        if (null !== ($v = $this->getMaxValueDateTime())) {
            $a['maxValueDateTime'] = $v;
        }
        if (null !== ($v = $this->getMaxValueDecimal())) {
            $a['maxValueDecimal'] = $v;
        }
        if (null !== ($v = $this->getMaxValueInstant())) {
            $a['maxValueInstant'] = $v;
        }
        if (null !== ($v = $this->getMaxValueInteger())) {
            $a['maxValueInteger'] = $v;
        }
        if (null !== ($v = $this->getMaxValuePositiveInt())) {
            $a['maxValuePositiveInt'] = $v;
        }
        if (null !== ($v = $this->getMaxValueQuantity())) {
            $a['maxValueQuantity'] = $v;
        }
        if (null !== ($v = $this->getMaxValueTime())) {
            $a['maxValueTime'] = $v;
        }
        if (null !== ($v = $this->getMaxValueUnsignedInt())) {
            $a['maxValueUnsignedInt'] = $v;
        }
        if (null !== ($v = $this->getMeaningWhenMissing())) {
            $a['meaningWhenMissing'] = $v;
        }
        if (null !== ($v = $this->getMin())) {
            $a['min'] = $v;
        }
        if (null !== ($v = $this->getMinValueDate())) {
            $a['minValueDate'] = $v;
        }
        if (null !== ($v = $this->getMinValueDateTime())) {
            $a['minValueDateTime'] = $v;
        }
        if (null !== ($v = $this->getMinValueDecimal())) {
            $a['minValueDecimal'] = $v;
        }
        if (null !== ($v = $this->getMinValueInstant())) {
            $a['minValueInstant'] = $v;
        }
        if (null !== ($v = $this->getMinValueInteger())) {
            $a['minValueInteger'] = $v;
        }
        if (null !== ($v = $this->getMinValuePositiveInt())) {
            $a['minValuePositiveInt'] = $v;
        }
        if (null !== ($v = $this->getMinValueQuantity())) {
            $a['minValueQuantity'] = $v;
        }
        if (null !== ($v = $this->getMinValueTime())) {
            $a['minValueTime'] = $v;
        }
        if (null !== ($v = $this->getMinValueUnsignedInt())) {
            $a['minValueUnsignedInt'] = $v;
        }
        if (null !== ($v = $this->getMustSupport())) {
            $a['mustSupport'] = $v;
        }
        if (null !== ($v = $this->getOrderMeaning())) {
            $a['orderMeaning'] = $v;
        }
        if (null !== ($v = $this->getPath())) {
            $a['path'] = $v;
        }
        if (null !== ($v = $this->getPatternAddress())) {
            $a['patternAddress'] = $v;
        }
        if (null !== ($v = $this->getPatternAge())) {
            $a['patternAge'] = $v;
        }
        if (null !== ($v = $this->getPatternAnnotation())) {
            $a['patternAnnotation'] = $v;
        }
        if (null !== ($v = $this->getPatternAttachment())) {
            $a['patternAttachment'] = $v;
        }
        if (null !== ($v = $this->getPatternBase64Binary())) {
            $a['patternBase64Binary'] = $v;
        }
        if (null !== ($v = $this->getPatternBoolean())) {
            $a['patternBoolean'] = $v;
        }
        if (null !== ($v = $this->getPatternCanonical())) {
            $a['patternCanonical'] = $v;
        }
        if (null !== ($v = $this->getPatternCode())) {
            $a['patternCode'] = $v;
        }
        if (null !== ($v = $this->getPatternCodeableConcept())) {
            $a['patternCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getPatternCoding())) {
            $a['patternCoding'] = $v;
        }
        if (null !== ($v = $this->getPatternContactDetail())) {
            $a['patternContactDetail'] = $v;
        }
        if (null !== ($v = $this->getPatternContactPoint())) {
            $a['patternContactPoint'] = $v;
        }
        if (null !== ($v = $this->getPatternContributor())) {
            $a['patternContributor'] = $v;
        }
        if (null !== ($v = $this->getPatternCount())) {
            $a['patternCount'] = $v;
        }
        if (null !== ($v = $this->getPatternDataRequirement())) {
            $a['patternDataRequirement'] = $v;
        }
        if (null !== ($v = $this->getPatternDate())) {
            $a['patternDate'] = $v;
        }
        if (null !== ($v = $this->getPatternDateTime())) {
            $a['patternDateTime'] = $v;
        }
        if (null !== ($v = $this->getPatternDecimal())) {
            $a['patternDecimal'] = $v;
        }
        if (null !== ($v = $this->getPatternDistance())) {
            $a['patternDistance'] = $v;
        }
        if (null !== ($v = $this->getPatternDosage())) {
            $a['patternDosage'] = $v;
        }
        if (null !== ($v = $this->getPatternDuration())) {
            $a['patternDuration'] = $v;
        }
        if (null !== ($v = $this->getPatternExpression())) {
            $a['patternExpression'] = $v;
        }
        if (null !== ($v = $this->getPatternHumanName())) {
            $a['patternHumanName'] = $v;
        }
        if (null !== ($v = $this->getPatternId())) {
            $a['patternId'] = $v;
        }
        if (null !== ($v = $this->getPatternIdentifier())) {
            $a['patternIdentifier'] = $v;
        }
        if (null !== ($v = $this->getPatternInstant())) {
            $a['patternInstant'] = $v;
        }
        if (null !== ($v = $this->getPatternInteger())) {
            $a['patternInteger'] = $v;
        }
        if (null !== ($v = $this->getPatternMarkdown())) {
            $a['patternMarkdown'] = $v;
        }
        if (null !== ($v = $this->getPatternMoney())) {
            $a['patternMoney'] = $v;
        }
        if (null !== ($v = $this->getPatternOid())) {
            $a['patternOid'] = $v;
        }
        if (null !== ($v = $this->getPatternParameterDefinition())) {
            $a['patternParameterDefinition'] = $v;
        }
        if (null !== ($v = $this->getPatternPeriod())) {
            $a['patternPeriod'] = $v;
        }
        if (null !== ($v = $this->getPatternPositiveInt())) {
            $a['patternPositiveInt'] = $v;
        }
        if (null !== ($v = $this->getPatternQuantity())) {
            $a['patternQuantity'] = $v;
        }
        if (null !== ($v = $this->getPatternRange())) {
            $a['patternRange'] = $v;
        }
        if (null !== ($v = $this->getPatternRatio())) {
            $a['patternRatio'] = $v;
        }
        if (null !== ($v = $this->getPatternReference())) {
            $a['patternReference'] = $v;
        }
        if (null !== ($v = $this->getPatternRelatedArtifact())) {
            $a['patternRelatedArtifact'] = $v;
        }
        if (null !== ($v = $this->getPatternSampledData())) {
            $a['patternSampledData'] = $v;
        }
        if (null !== ($v = $this->getPatternSignature())) {
            $a['patternSignature'] = $v;
        }
        if (null !== ($v = $this->getPatternString())) {
            $a['patternString'] = $v;
        }
        if (null !== ($v = $this->getPatternTime())) {
            $a['patternTime'] = $v;
        }
        if (null !== ($v = $this->getPatternTiming())) {
            $a['patternTiming'] = $v;
        }
        if (null !== ($v = $this->getPatternTriggerDefinition())) {
            $a['patternTriggerDefinition'] = $v;
        }
        if (null !== ($v = $this->getPatternUnsignedInt())) {
            $a['patternUnsignedInt'] = $v;
        }
        if (null !== ($v = $this->getPatternUri())) {
            $a['patternUri'] = $v;
        }
        if (null !== ($v = $this->getPatternUrl())) {
            $a['patternUrl'] = $v;
        }
        if (null !== ($v = $this->getPatternUsageContext())) {
            $a['patternUsageContext'] = $v;
        }
        if (null !== ($v = $this->getPatternUuid())) {
            $a['patternUuid'] = $v;
        }
        if (null !== ($v = $this->getRepresentation())) {
            $a['representation'] = $v;
        }
        if (null !== ($v = $this->getRequirements())) {
            $a['requirements'] = $v;
        }
        if (null !== ($v = $this->getShort())) {
            $a['short'] = $v;
        }
        if (null !== ($v = $this->getSliceIsConstraining())) {
            $a['sliceIsConstraining'] = $v;
        }
        if (null !== ($v = $this->getSliceName())) {
            $a['sliceName'] = $v;
        }
        if (null !== ($v = $this->getSlicing())) {
            $a['slicing'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ElementDefinition xmlns="http://hl7.org/fhir"></ElementDefinition>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}