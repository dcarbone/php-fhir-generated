<?php namespace PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRElementDefinition extends FHIRElement implements \JsonSerializable
{
    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation[]
     */
    public $representation = array();

    /**
     * The name of this element definition slice, when slicing is working. The name must be a token with no dots or spaces. This is a unique name referring to a specific set of constraints applied to this element, used to provide a name to different slices of the same element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $sliceName = null;

    /**
     * A single preferred label which is the text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * A code that has the same meaning as the element in a particular terminology.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $code = array();

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public $slicing = null;

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $short = null;

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $definition = null;

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $comment = null;

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $requirements = null;

    /**
     * Identifies additional names by which this element might also be known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $alias = array();

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $min = null;

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Information about the base definition of the element, provided to make it unnecessary for tools to trace the deviation of the element through the derived and related profiles. This information is provided when the element definition is not the original definition of an element - i.g. either in a constraint on another type, or for elements from a super type in a snap shot.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public $base = null;

    /**
     * Identifies the identity of an element defined elsewhere in the profile whose content rules should be applied to the current element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $contentReference = null;

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public $type = array();

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $defaultValueBase64Binary = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $defaultValueBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $defaultValueCode = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $defaultValueDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $defaultValueDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $defaultValueDecimal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $defaultValueId = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $defaultValueInstant = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $defaultValueInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $defaultValueMarkdown = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $defaultValueOid = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $defaultValuePositiveInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $defaultValueString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $defaultValueTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $defaultValueUnsignedInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $defaultValueUri = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $defaultValueAddress = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $defaultValueAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $defaultValueAnnotation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $defaultValueAttachment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $defaultValueCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $defaultValueCoding = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $defaultValueContactPoint = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $defaultValueCount = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $defaultValueDistance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $defaultValueDuration = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $defaultValueHumanName = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $defaultValueIdentifier = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $defaultValueMoney = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $defaultValuePeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $defaultValueQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $defaultValueRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $defaultValueRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $defaultValueReference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $defaultValueSampledData = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $defaultValueSignature = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $defaultValueTiming = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $defaultValueMeta = null;

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $meaningWhenMissing = null;

    /**
     * If present, indicates that the order of the repeating element has meaning and describes what that meaning is.  If absent, it means that the order of the element has no meaning.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $orderMeaning = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $fixedBase64Binary = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $fixedBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $fixedCode = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $fixedDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $fixedDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $fixedDecimal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $fixedId = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $fixedInstant = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $fixedInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $fixedMarkdown = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $fixedOid = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $fixedPositiveInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $fixedString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $fixedTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $fixedUnsignedInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $fixedUri = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $fixedAddress = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $fixedAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $fixedAnnotation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $fixedAttachment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $fixedCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $fixedCoding = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $fixedContactPoint = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $fixedCount = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $fixedDistance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $fixedDuration = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $fixedHumanName = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $fixedIdentifier = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $fixedMoney = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $fixedPeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $fixedQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $fixedRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $fixedRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $fixedReference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $fixedSampledData = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $fixedSignature = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $fixedTiming = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $fixedMeta = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $patternBase64Binary = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $patternBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $patternCode = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $patternDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $patternDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $patternDecimal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $patternId = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $patternInstant = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $patternInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $patternMarkdown = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $patternOid = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $patternPositiveInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $patternString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $patternTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $patternUnsignedInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $patternUri = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $patternAddress = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $patternAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $patternAnnotation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $patternAttachment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $patternCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $patternCoding = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $patternContactPoint = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $patternCount = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $patternDistance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $patternDuration = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $patternHumanName = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $patternIdentifier = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $patternMoney = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $patternPeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $patternQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $patternRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $patternRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patternReference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $patternSampledData = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $patternSignature = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $patternTiming = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $patternMeta = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be found in the element.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionExample[]
     */
    public $example = array();

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $minValueDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $minValueDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $minValueInstant = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $minValueTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $minValueDecimal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $minValueInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $minValuePositiveInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $minValueUnsignedInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $minValueQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $maxValueDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $maxValueDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $maxValueInstant = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $maxValueTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $maxValueDecimal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $maxValueInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $maxValuePositiveInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $maxValueUnsignedInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $maxValueQuantity = null;

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $maxLength = null;

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    public $condition = array();

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public $constraint = array();

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $mustSupport = null;

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isModifier = null;

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isSummary = null;

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept, Quantity), or the data types (string, uri).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public $binding = null;

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public $mapping = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ElementDefinition';

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation[]
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation $representation
     * @return $this
     */
    public function addRepresentation($representation)
    {
        $this->representation[] = $representation;
        return $this;
    }

    /**
     * The name of this element definition slice, when slicing is working. The name must be a token with no dots or spaces. This is a unique name referring to a specific set of constraints applied to this element, used to provide a name to different slices of the same element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSliceName()
    {
        return $this->sliceName;
    }

    /**
     * The name of this element definition slice, when slicing is working. The name must be a token with no dots or spaces. This is a unique name referring to a specific set of constraints applied to this element, used to provide a name to different slices of the same element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $sliceName
     * @return $this
     */
    public function setSliceName($sliceName)
    {
        $this->sliceName = $sliceName;
        return $this;
    }

    /**
     * A single preferred label which is the text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * A single preferred label which is the text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * A code that has the same meaning as the element in a particular terminology.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code that has the same meaning as the element in a particular terminology.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $code
     * @return $this
     */
    public function addCode($code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function getSlicing()
    {
        return $this->slicing;
    }

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
     * @return $this
     */
    public function setSlicing($slicing)
    {
        $this->slicing = $slicing;
        return $this;
    }

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $short
     * @return $this
     */
    public function setShort($short)
    {
        $this->short = $short;
        return $this;
    }

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $definition
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $alias
     * @return $this
     */
    public function addAlias($alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $min
     * @return $this
     */
    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $max
     * @return $this
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Information about the base definition of the element, provided to make it unnecessary for tools to trace the deviation of the element through the derived and related profiles. This information is provided when the element definition is not the original definition of an element - i.g. either in a constraint on another type, or for elements from a super type in a snap shot.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Information about the base definition of the element, provided to make it unnecessary for tools to trace the deviation of the element through the derived and related profiles. This information is provided when the element definition is not the original definition of an element - i.g. either in a constraint on another type, or for elements from a super type in a snap shot.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase $base
     * @return $this
     */
    public function setBase($base)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * Identifies the identity of an element defined elsewhere in the profile whose content rules should be applied to the current element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getContentReference()
    {
        return $this->contentReference;
    }

    /**
     * Identifies the identity of an element defined elsewhere in the profile whose content rules should be applied to the current element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $contentReference
     * @return $this
     */
    public function setContentReference($contentReference)
    {
        $this->contentReference = $contentReference;
        return $this;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType $type
     * @return $this
     */
    public function addType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary()
    {
        return $this->defaultValueBase64Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @return $this
     */
    public function setDefaultValueBase64Binary($defaultValueBase64Binary)
    {
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean()
    {
        return $this->defaultValueBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @return $this
     */
    public function setDefaultValueBoolean($defaultValueBoolean)
    {
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode()
    {
        return $this->defaultValueCode;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $defaultValueCode
     * @return $this
     */
    public function setDefaultValueCode($defaultValueCode)
    {
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate()
    {
        return $this->defaultValueDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $defaultValueDate
     * @return $this
     */
    public function setDefaultValueDate($defaultValueDate)
    {
        $this->defaultValueDate = $defaultValueDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime()
    {
        return $this->defaultValueDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @return $this
     */
    public function setDefaultValueDateTime($defaultValueDateTime)
    {
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal()
    {
        return $this->defaultValueDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @return $this
     */
    public function setDefaultValueDecimal($defaultValueDecimal)
    {
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getDefaultValueId()
    {
        return $this->defaultValueId;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $defaultValueId
     * @return $this
     */
    public function setDefaultValueId($defaultValueId)
    {
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant()
    {
        return $this->defaultValueInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $defaultValueInstant
     * @return $this
     */
    public function setDefaultValueInstant($defaultValueInstant)
    {
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger()
    {
        return $this->defaultValueInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $defaultValueInteger
     * @return $this
     */
    public function setDefaultValueInteger($defaultValueInteger)
    {
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown()
    {
        return $this->defaultValueMarkdown;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @return $this
     */
    public function setDefaultValueMarkdown($defaultValueMarkdown)
    {
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getDefaultValueOid()
    {
        return $this->defaultValueOid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $defaultValueOid
     * @return $this
     */
    public function setDefaultValueOid($defaultValueOid)
    {
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt()
    {
        return $this->defaultValuePositiveInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @return $this
     */
    public function setDefaultValuePositiveInt($defaultValuePositiveInt)
    {
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDefaultValueString()
    {
        return $this->defaultValueString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $defaultValueString
     * @return $this
     */
    public function setDefaultValueString($defaultValueString)
    {
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime()
    {
        return $this->defaultValueTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $defaultValueTime
     * @return $this
     */
    public function setDefaultValueTime($defaultValueTime)
    {
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt()
    {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @return $this
     */
    public function setDefaultValueUnsignedInt($defaultValueUnsignedInt)
    {
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri()
    {
        return $this->defaultValueUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $defaultValueUri
     * @return $this
     */
    public function setDefaultValueUri($defaultValueUri)
    {
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress()
    {
        return $this->defaultValueAddress;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $defaultValueAddress
     * @return $this
     */
    public function setDefaultValueAddress($defaultValueAddress)
    {
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge()
    {
        return $this->defaultValueAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
     * @return $this
     */
    public function setDefaultValueAge($defaultValueAge)
    {
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation()
    {
        return $this->defaultValueAnnotation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @return $this
     */
    public function setDefaultValueAnnotation($defaultValueAnnotation)
    {
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment()
    {
        return $this->defaultValueAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @return $this
     */
    public function setDefaultValueAttachment($defaultValueAttachment)
    {
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept()
    {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @return $this
     */
    public function setDefaultValueCodeableConcept($defaultValueCodeableConcept)
    {
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding()
    {
        return $this->defaultValueCoding;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $defaultValueCoding
     * @return $this
     */
    public function setDefaultValueCoding($defaultValueCoding)
    {
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint()
    {
        return $this->defaultValueContactPoint;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @return $this
     */
    public function setDefaultValueContactPoint($defaultValueContactPoint)
    {
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getDefaultValueCount()
    {
        return $this->defaultValueCount;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
     * @return $this
     */
    public function setDefaultValueCount($defaultValueCount)
    {
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance()
    {
        return $this->defaultValueDistance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
     * @return $this
     */
    public function setDefaultValueDistance($defaultValueDistance)
    {
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration()
    {
        return $this->defaultValueDuration;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
     * @return $this
     */
    public function setDefaultValueDuration($defaultValueDuration)
    {
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName()
    {
        return $this->defaultValueHumanName;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @return $this
     */
    public function setDefaultValueHumanName($defaultValueHumanName)
    {
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier()
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @return $this
     */
    public function setDefaultValueIdentifier($defaultValueIdentifier)
    {
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getDefaultValueMoney()
    {
        return $this->defaultValueMoney;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $defaultValueMoney
     * @return $this
     */
    public function setDefaultValueMoney($defaultValueMoney)
    {
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod()
    {
        return $this->defaultValuePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @return $this
     */
    public function setDefaultValuePeriod($defaultValuePeriod)
    {
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity()
    {
        return $this->defaultValueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @return $this
     */
    public function setDefaultValueQuantity($defaultValueQuantity)
    {
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange()
    {
        return $this->defaultValueRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $defaultValueRange
     * @return $this
     */
    public function setDefaultValueRange($defaultValueRange)
    {
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio()
    {
        return $this->defaultValueRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $defaultValueRatio
     * @return $this
     */
    public function setDefaultValueRatio($defaultValueRatio)
    {
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference()
    {
        return $this->defaultValueReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $defaultValueReference
     * @return $this
     */
    public function setDefaultValueReference($defaultValueReference)
    {
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData()
    {
        return $this->defaultValueSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @return $this
     */
    public function setDefaultValueSampledData($defaultValueSampledData)
    {
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature()
    {
        return $this->defaultValueSignature;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $defaultValueSignature
     * @return $this
     */
    public function setDefaultValueSignature($defaultValueSignature)
    {
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getDefaultValueTiming()
    {
        return $this->defaultValueTiming;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $defaultValueTiming
     * @return $this
     */
    public function setDefaultValueTiming($defaultValueTiming)
    {
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta()
    {
        return $this->defaultValueMeta;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $defaultValueMeta
     * @return $this
     */
    public function setDefaultValueMeta($defaultValueMeta)
    {
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getMeaningWhenMissing()
    {
        return $this->meaningWhenMissing;
    }

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $meaningWhenMissing
     * @return $this
     */
    public function setMeaningWhenMissing($meaningWhenMissing)
    {
        $this->meaningWhenMissing = $meaningWhenMissing;
        return $this;
    }

    /**
     * If present, indicates that the order of the repeating element has meaning and describes what that meaning is.  If absent, it means that the order of the element has no meaning.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOrderMeaning()
    {
        return $this->orderMeaning;
    }

    /**
     * If present, indicates that the order of the repeating element has meaning and describes what that meaning is.  If absent, it means that the order of the element has no meaning.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $orderMeaning
     * @return $this
     */
    public function setOrderMeaning($orderMeaning)
    {
        $this->orderMeaning = $orderMeaning;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getFixedBase64Binary()
    {
        return $this->fixedBase64Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $fixedBase64Binary
     * @return $this
     */
    public function setFixedBase64Binary($fixedBase64Binary)
    {
        $this->fixedBase64Binary = $fixedBase64Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getFixedBoolean()
    {
        return $this->fixedBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $fixedBoolean
     * @return $this
     */
    public function setFixedBoolean($fixedBoolean)
    {
        $this->fixedBoolean = $fixedBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getFixedCode()
    {
        return $this->fixedCode;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $fixedCode
     * @return $this
     */
    public function setFixedCode($fixedCode)
    {
        $this->fixedCode = $fixedCode;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getFixedDate()
    {
        return $this->fixedDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $fixedDate
     * @return $this
     */
    public function setFixedDate($fixedDate)
    {
        $this->fixedDate = $fixedDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getFixedDateTime()
    {
        return $this->fixedDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $fixedDateTime
     * @return $this
     */
    public function setFixedDateTime($fixedDateTime)
    {
        $this->fixedDateTime = $fixedDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFixedDecimal()
    {
        return $this->fixedDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $fixedDecimal
     * @return $this
     */
    public function setFixedDecimal($fixedDecimal)
    {
        $this->fixedDecimal = $fixedDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getFixedId()
    {
        return $this->fixedId;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $fixedId
     * @return $this
     */
    public function setFixedId($fixedId)
    {
        $this->fixedId = $fixedId;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getFixedInstant()
    {
        return $this->fixedInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $fixedInstant
     * @return $this
     */
    public function setFixedInstant($fixedInstant)
    {
        $this->fixedInstant = $fixedInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getFixedInteger()
    {
        return $this->fixedInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $fixedInteger
     * @return $this
     */
    public function setFixedInteger($fixedInteger)
    {
        $this->fixedInteger = $fixedInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getFixedMarkdown()
    {
        return $this->fixedMarkdown;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $fixedMarkdown
     * @return $this
     */
    public function setFixedMarkdown($fixedMarkdown)
    {
        $this->fixedMarkdown = $fixedMarkdown;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getFixedOid()
    {
        return $this->fixedOid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $fixedOid
     * @return $this
     */
    public function setFixedOid($fixedOid)
    {
        $this->fixedOid = $fixedOid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFixedPositiveInt()
    {
        return $this->fixedPositiveInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $fixedPositiveInt
     * @return $this
     */
    public function setFixedPositiveInt($fixedPositiveInt)
    {
        $this->fixedPositiveInt = $fixedPositiveInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getFixedString()
    {
        return $this->fixedString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $fixedString
     * @return $this
     */
    public function setFixedString($fixedString)
    {
        $this->fixedString = $fixedString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getFixedTime()
    {
        return $this->fixedTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $fixedTime
     * @return $this
     */
    public function setFixedTime($fixedTime)
    {
        $this->fixedTime = $fixedTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getFixedUnsignedInt()
    {
        return $this->fixedUnsignedInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $fixedUnsignedInt
     * @return $this
     */
    public function setFixedUnsignedInt($fixedUnsignedInt)
    {
        $this->fixedUnsignedInt = $fixedUnsignedInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getFixedUri()
    {
        return $this->fixedUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $fixedUri
     * @return $this
     */
    public function setFixedUri($fixedUri)
    {
        $this->fixedUri = $fixedUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getFixedAddress()
    {
        return $this->fixedAddress;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $fixedAddress
     * @return $this
     */
    public function setFixedAddress($fixedAddress)
    {
        $this->fixedAddress = $fixedAddress;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getFixedAge()
    {
        return $this->fixedAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $fixedAge
     * @return $this
     */
    public function setFixedAge($fixedAge)
    {
        $this->fixedAge = $fixedAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getFixedAnnotation()
    {
        return $this->fixedAnnotation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $fixedAnnotation
     * @return $this
     */
    public function setFixedAnnotation($fixedAnnotation)
    {
        $this->fixedAnnotation = $fixedAnnotation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getFixedAttachment()
    {
        return $this->fixedAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $fixedAttachment
     * @return $this
     */
    public function setFixedAttachment($fixedAttachment)
    {
        $this->fixedAttachment = $fixedAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFixedCodeableConcept()
    {
        return $this->fixedCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $fixedCodeableConcept
     * @return $this
     */
    public function setFixedCodeableConcept($fixedCodeableConcept)
    {
        $this->fixedCodeableConcept = $fixedCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getFixedCoding()
    {
        return $this->fixedCoding;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $fixedCoding
     * @return $this
     */
    public function setFixedCoding($fixedCoding)
    {
        $this->fixedCoding = $fixedCoding;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getFixedContactPoint()
    {
        return $this->fixedContactPoint;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $fixedContactPoint
     * @return $this
     */
    public function setFixedContactPoint($fixedContactPoint)
    {
        $this->fixedContactPoint = $fixedContactPoint;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getFixedCount()
    {
        return $this->fixedCount;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount $fixedCount
     * @return $this
     */
    public function setFixedCount($fixedCount)
    {
        $this->fixedCount = $fixedCount;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getFixedDistance()
    {
        return $this->fixedDistance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance $fixedDistance
     * @return $this
     */
    public function setFixedDistance($fixedDistance)
    {
        $this->fixedDistance = $fixedDistance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getFixedDuration()
    {
        return $this->fixedDuration;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $fixedDuration
     * @return $this
     */
    public function setFixedDuration($fixedDuration)
    {
        $this->fixedDuration = $fixedDuration;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getFixedHumanName()
    {
        return $this->fixedHumanName;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $fixedHumanName
     * @return $this
     */
    public function setFixedHumanName($fixedHumanName)
    {
        $this->fixedHumanName = $fixedHumanName;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getFixedIdentifier()
    {
        return $this->fixedIdentifier;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $fixedIdentifier
     * @return $this
     */
    public function setFixedIdentifier($fixedIdentifier)
    {
        $this->fixedIdentifier = $fixedIdentifier;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getFixedMoney()
    {
        return $this->fixedMoney;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $fixedMoney
     * @return $this
     */
    public function setFixedMoney($fixedMoney)
    {
        $this->fixedMoney = $fixedMoney;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getFixedPeriod()
    {
        return $this->fixedPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $fixedPeriod
     * @return $this
     */
    public function setFixedPeriod($fixedPeriod)
    {
        $this->fixedPeriod = $fixedPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getFixedQuantity()
    {
        return $this->fixedQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $fixedQuantity
     * @return $this
     */
    public function setFixedQuantity($fixedQuantity)
    {
        $this->fixedQuantity = $fixedQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getFixedRange()
    {
        return $this->fixedRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $fixedRange
     * @return $this
     */
    public function setFixedRange($fixedRange)
    {
        $this->fixedRange = $fixedRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getFixedRatio()
    {
        return $this->fixedRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $fixedRatio
     * @return $this
     */
    public function setFixedRatio($fixedRatio)
    {
        $this->fixedRatio = $fixedRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFixedReference()
    {
        return $this->fixedReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $fixedReference
     * @return $this
     */
    public function setFixedReference($fixedReference)
    {
        $this->fixedReference = $fixedReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getFixedSampledData()
    {
        return $this->fixedSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $fixedSampledData
     * @return $this
     */
    public function setFixedSampledData($fixedSampledData)
    {
        $this->fixedSampledData = $fixedSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getFixedSignature()
    {
        return $this->fixedSignature;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $fixedSignature
     * @return $this
     */
    public function setFixedSignature($fixedSignature)
    {
        $this->fixedSignature = $fixedSignature;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getFixedTiming()
    {
        return $this->fixedTiming;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $fixedTiming
     * @return $this
     */
    public function setFixedTiming($fixedTiming)
    {
        $this->fixedTiming = $fixedTiming;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getFixedMeta()
    {
        return $this->fixedMeta;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $fixedMeta
     * @return $this
     */
    public function setFixedMeta($fixedMeta)
    {
        $this->fixedMeta = $fixedMeta;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getPatternBase64Binary()
    {
        return $this->patternBase64Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $patternBase64Binary
     * @return $this
     */
    public function setPatternBase64Binary($patternBase64Binary)
    {
        $this->patternBase64Binary = $patternBase64Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPatternBoolean()
    {
        return $this->patternBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $patternBoolean
     * @return $this
     */
    public function setPatternBoolean($patternBoolean)
    {
        $this->patternBoolean = $patternBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getPatternCode()
    {
        return $this->patternCode;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $patternCode
     * @return $this
     */
    public function setPatternCode($patternCode)
    {
        $this->patternCode = $patternCode;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getPatternDate()
    {
        return $this->patternDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $patternDate
     * @return $this
     */
    public function setPatternDate($patternDate)
    {
        $this->patternDate = $patternDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPatternDateTime()
    {
        return $this->patternDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $patternDateTime
     * @return $this
     */
    public function setPatternDateTime($patternDateTime)
    {
        $this->patternDateTime = $patternDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPatternDecimal()
    {
        return $this->patternDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $patternDecimal
     * @return $this
     */
    public function setPatternDecimal($patternDecimal)
    {
        $this->patternDecimal = $patternDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getPatternId()
    {
        return $this->patternId;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $patternId
     * @return $this
     */
    public function setPatternId($patternId)
    {
        $this->patternId = $patternId;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getPatternInstant()
    {
        return $this->patternInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $patternInstant
     * @return $this
     */
    public function setPatternInstant($patternInstant)
    {
        $this->patternInstant = $patternInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getPatternInteger()
    {
        return $this->patternInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $patternInteger
     * @return $this
     */
    public function setPatternInteger($patternInteger)
    {
        $this->patternInteger = $patternInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPatternMarkdown()
    {
        return $this->patternMarkdown;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $patternMarkdown
     * @return $this
     */
    public function setPatternMarkdown($patternMarkdown)
    {
        $this->patternMarkdown = $patternMarkdown;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getPatternOid()
    {
        return $this->patternOid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $patternOid
     * @return $this
     */
    public function setPatternOid($patternOid)
    {
        $this->patternOid = $patternOid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getPatternPositiveInt()
    {
        return $this->patternPositiveInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $patternPositiveInt
     * @return $this
     */
    public function setPatternPositiveInt($patternPositiveInt)
    {
        $this->patternPositiveInt = $patternPositiveInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPatternString()
    {
        return $this->patternString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $patternString
     * @return $this
     */
    public function setPatternString($patternString)
    {
        $this->patternString = $patternString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getPatternTime()
    {
        return $this->patternTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $patternTime
     * @return $this
     */
    public function setPatternTime($patternTime)
    {
        $this->patternTime = $patternTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getPatternUnsignedInt()
    {
        return $this->patternUnsignedInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $patternUnsignedInt
     * @return $this
     */
    public function setPatternUnsignedInt($patternUnsignedInt)
    {
        $this->patternUnsignedInt = $patternUnsignedInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getPatternUri()
    {
        return $this->patternUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $patternUri
     * @return $this
     */
    public function setPatternUri($patternUri)
    {
        $this->patternUri = $patternUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getPatternAddress()
    {
        return $this->patternAddress;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $patternAddress
     * @return $this
     */
    public function setPatternAddress($patternAddress)
    {
        $this->patternAddress = $patternAddress;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getPatternAge()
    {
        return $this->patternAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $patternAge
     * @return $this
     */
    public function setPatternAge($patternAge)
    {
        $this->patternAge = $patternAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getPatternAnnotation()
    {
        return $this->patternAnnotation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $patternAnnotation
     * @return $this
     */
    public function setPatternAnnotation($patternAnnotation)
    {
        $this->patternAnnotation = $patternAnnotation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPatternAttachment()
    {
        return $this->patternAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $patternAttachment
     * @return $this
     */
    public function setPatternAttachment($patternAttachment)
    {
        $this->patternAttachment = $patternAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPatternCodeableConcept()
    {
        return $this->patternCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $patternCodeableConcept
     * @return $this
     */
    public function setPatternCodeableConcept($patternCodeableConcept)
    {
        $this->patternCodeableConcept = $patternCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getPatternCoding()
    {
        return $this->patternCoding;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $patternCoding
     * @return $this
     */
    public function setPatternCoding($patternCoding)
    {
        $this->patternCoding = $patternCoding;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getPatternContactPoint()
    {
        return $this->patternContactPoint;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $patternContactPoint
     * @return $this
     */
    public function setPatternContactPoint($patternContactPoint)
    {
        $this->patternContactPoint = $patternContactPoint;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getPatternCount()
    {
        return $this->patternCount;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount $patternCount
     * @return $this
     */
    public function setPatternCount($patternCount)
    {
        $this->patternCount = $patternCount;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getPatternDistance()
    {
        return $this->patternDistance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance $patternDistance
     * @return $this
     */
    public function setPatternDistance($patternDistance)
    {
        $this->patternDistance = $patternDistance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getPatternDuration()
    {
        return $this->patternDuration;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $patternDuration
     * @return $this
     */
    public function setPatternDuration($patternDuration)
    {
        $this->patternDuration = $patternDuration;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getPatternHumanName()
    {
        return $this->patternHumanName;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $patternHumanName
     * @return $this
     */
    public function setPatternHumanName($patternHumanName)
    {
        $this->patternHumanName = $patternHumanName;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getPatternIdentifier()
    {
        return $this->patternIdentifier;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $patternIdentifier
     * @return $this
     */
    public function setPatternIdentifier($patternIdentifier)
    {
        $this->patternIdentifier = $patternIdentifier;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPatternMoney()
    {
        return $this->patternMoney;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $patternMoney
     * @return $this
     */
    public function setPatternMoney($patternMoney)
    {
        $this->patternMoney = $patternMoney;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPatternPeriod()
    {
        return $this->patternPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $patternPeriod
     * @return $this
     */
    public function setPatternPeriod($patternPeriod)
    {
        $this->patternPeriod = $patternPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getPatternQuantity()
    {
        return $this->patternQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $patternQuantity
     * @return $this
     */
    public function setPatternQuantity($patternQuantity)
    {
        $this->patternQuantity = $patternQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getPatternRange()
    {
        return $this->patternRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $patternRange
     * @return $this
     */
    public function setPatternRange($patternRange)
    {
        $this->patternRange = $patternRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getPatternRatio()
    {
        return $this->patternRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $patternRatio
     * @return $this
     */
    public function setPatternRatio($patternRatio)
    {
        $this->patternRatio = $patternRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatternReference()
    {
        return $this->patternReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patternReference
     * @return $this
     */
    public function setPatternReference($patternReference)
    {
        $this->patternReference = $patternReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getPatternSampledData()
    {
        return $this->patternSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $patternSampledData
     * @return $this
     */
    public function setPatternSampledData($patternSampledData)
    {
        $this->patternSampledData = $patternSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getPatternSignature()
    {
        return $this->patternSignature;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $patternSignature
     * @return $this
     */
    public function setPatternSignature($patternSignature)
    {
        $this->patternSignature = $patternSignature;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getPatternTiming()
    {
        return $this->patternTiming;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $patternTiming
     * @return $this
     */
    public function setPatternTiming($patternTiming)
    {
        $this->patternTiming = $patternTiming;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getPatternMeta()
    {
        return $this->patternMeta;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $patternMeta
     * @return $this
     */
    public function setPatternMeta($patternMeta)
    {
        $this->patternMeta = $patternMeta;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be found in the element.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionExample[]
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be found in the element.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionExample $example
     * @return $this
     */
    public function addExample($example)
    {
        $this->example[] = $example;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getMinValueDate()
    {
        return $this->minValueDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $minValueDate
     * @return $this
     */
    public function setMinValueDate($minValueDate)
    {
        $this->minValueDate = $minValueDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getMinValueDateTime()
    {
        return $this->minValueDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $minValueDateTime
     * @return $this
     */
    public function setMinValueDateTime($minValueDateTime)
    {
        $this->minValueDateTime = $minValueDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getMinValueInstant()
    {
        return $this->minValueInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $minValueInstant
     * @return $this
     */
    public function setMinValueInstant($minValueInstant)
    {
        $this->minValueInstant = $minValueInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getMinValueTime()
    {
        return $this->minValueTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $minValueTime
     * @return $this
     */
    public function setMinValueTime($minValueTime)
    {
        $this->minValueTime = $minValueTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getMinValueDecimal()
    {
        return $this->minValueDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $minValueDecimal
     * @return $this
     */
    public function setMinValueDecimal($minValueDecimal)
    {
        $this->minValueDecimal = $minValueDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMinValueInteger()
    {
        return $this->minValueInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $minValueInteger
     * @return $this
     */
    public function setMinValueInteger($minValueInteger)
    {
        $this->minValueInteger = $minValueInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getMinValuePositiveInt()
    {
        return $this->minValuePositiveInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $minValuePositiveInt
     * @return $this
     */
    public function setMinValuePositiveInt($minValuePositiveInt)
    {
        $this->minValuePositiveInt = $minValuePositiveInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMinValueUnsignedInt()
    {
        return $this->minValueUnsignedInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
     * @return $this
     */
    public function setMinValueUnsignedInt($minValueUnsignedInt)
    {
        $this->minValueUnsignedInt = $minValueUnsignedInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMinValueQuantity()
    {
        return $this->minValueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $minValueQuantity
     * @return $this
     */
    public function setMinValueQuantity($minValueQuantity)
    {
        $this->minValueQuantity = $minValueQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getMaxValueDate()
    {
        return $this->maxValueDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $maxValueDate
     * @return $this
     */
    public function setMaxValueDate($maxValueDate)
    {
        $this->maxValueDate = $maxValueDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getMaxValueDateTime()
    {
        return $this->maxValueDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $maxValueDateTime
     * @return $this
     */
    public function setMaxValueDateTime($maxValueDateTime)
    {
        $this->maxValueDateTime = $maxValueDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getMaxValueInstant()
    {
        return $this->maxValueInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $maxValueInstant
     * @return $this
     */
    public function setMaxValueInstant($maxValueInstant)
    {
        $this->maxValueInstant = $maxValueInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getMaxValueTime()
    {
        return $this->maxValueTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $maxValueTime
     * @return $this
     */
    public function setMaxValueTime($maxValueTime)
    {
        $this->maxValueTime = $maxValueTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getMaxValueDecimal()
    {
        return $this->maxValueDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $maxValueDecimal
     * @return $this
     */
    public function setMaxValueDecimal($maxValueDecimal)
    {
        $this->maxValueDecimal = $maxValueDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMaxValueInteger()
    {
        return $this->maxValueInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $maxValueInteger
     * @return $this
     */
    public function setMaxValueInteger($maxValueInteger)
    {
        $this->maxValueInteger = $maxValueInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getMaxValuePositiveInt()
    {
        return $this->maxValuePositiveInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
     * @return $this
     */
    public function setMaxValuePositiveInt($maxValuePositiveInt)
    {
        $this->maxValuePositiveInt = $maxValuePositiveInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMaxValueUnsignedInt()
    {
        return $this->maxValueUnsignedInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
     * @return $this
     */
    public function setMaxValueUnsignedInt($maxValueUnsignedInt)
    {
        $this->maxValueUnsignedInt = $maxValueUnsignedInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMaxValueQuantity()
    {
        return $this->maxValueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $maxValueQuantity
     * @return $this
     */
    public function setMaxValueQuantity($maxValueQuantity)
    {
        $this->maxValueQuantity = $maxValueQuantity;
        return $this;
    }

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $condition
     * @return $this
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint $constraint
     * @return $this
     */
    public function addConstraint($constraint)
    {
        $this->constraint[] = $constraint;
        return $this;
    }

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $mustSupport
     * @return $this
     */
    public function setMustSupport($mustSupport)
    {
        $this->mustSupport = $mustSupport;
        return $this;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsModifier()
    {
        return $this->isModifier;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $isModifier
     * @return $this
     */
    public function setIsModifier($isModifier)
    {
        $this->isModifier = $isModifier;
        return $this;
    }

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsSummary()
    {
        return $this->isSummary;
    }

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $isSummary
     * @return $this
     */
    public function setIsSummary($isSummary)
    {
        $this->isSummary = $isSummary;
        return $this;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept, Quantity), or the data types (string, uri).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept, Quantity), or the data types (string, uri).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
     * @return $this
     */
    public function setBinding($binding)
    {
        $this->binding = $binding;
        return $this;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping $mapping
     * @return $this
     */
    public function addMapping($mapping)
    {
        $this->mapping[] = $mapping;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->path) $json['path'] = $this->path;
        if (0 < count($this->representation)) {
            $json['representation'] = [];
            foreach($this->representation as $representation) {
                $json['representation'][] = $representation;
            }
        }
        if (null !== $this->sliceName) $json['sliceName'] = $this->sliceName;
        if (null !== $this->label) $json['label'] = $this->label;
        if (0 < count($this->code)) {
            $json['code'] = [];
            foreach($this->code as $code) {
                $json['code'][] = $code;
            }
        }
        if (null !== $this->slicing) $json['slicing'] = $this->slicing;
        if (null !== $this->short) $json['short'] = $this->short;
        if (null !== $this->definition) $json['definition'] = $this->definition;
        if (null !== $this->comment) $json['comment'] = $this->comment;
        if (null !== $this->requirements) $json['requirements'] = $this->requirements;
        if (0 < count($this->alias)) {
            $json['alias'] = [];
            foreach($this->alias as $alias) {
                $json['alias'][] = $alias;
            }
        }
        if (null !== $this->min) $json['min'] = $this->min;
        if (null !== $this->max) $json['max'] = $this->max;
        if (null !== $this->base) $json['base'] = $this->base;
        if (null !== $this->contentReference) $json['contentReference'] = $this->contentReference;
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                $json['type'][] = $type;
            }
        }
        if (null !== $this->defaultValueBase64Binary) $json['defaultValueBase64Binary'] = $this->defaultValueBase64Binary;
        if (null !== $this->defaultValueBoolean) $json['defaultValueBoolean'] = $this->defaultValueBoolean;
        if (null !== $this->defaultValueCode) $json['defaultValueCode'] = $this->defaultValueCode;
        if (null !== $this->defaultValueDate) $json['defaultValueDate'] = $this->defaultValueDate;
        if (null !== $this->defaultValueDateTime) $json['defaultValueDateTime'] = $this->defaultValueDateTime;
        if (null !== $this->defaultValueDecimal) $json['defaultValueDecimal'] = $this->defaultValueDecimal;
        if (null !== $this->defaultValueId) $json['defaultValueId'] = $this->defaultValueId;
        if (null !== $this->defaultValueInstant) $json['defaultValueInstant'] = $this->defaultValueInstant;
        if (null !== $this->defaultValueInteger) $json['defaultValueInteger'] = $this->defaultValueInteger;
        if (null !== $this->defaultValueMarkdown) $json['defaultValueMarkdown'] = $this->defaultValueMarkdown;
        if (null !== $this->defaultValueOid) $json['defaultValueOid'] = $this->defaultValueOid;
        if (null !== $this->defaultValuePositiveInt) $json['defaultValuePositiveInt'] = $this->defaultValuePositiveInt;
        if (null !== $this->defaultValueString) $json['defaultValueString'] = $this->defaultValueString;
        if (null !== $this->defaultValueTime) $json['defaultValueTime'] = $this->defaultValueTime;
        if (null !== $this->defaultValueUnsignedInt) $json['defaultValueUnsignedInt'] = $this->defaultValueUnsignedInt;
        if (null !== $this->defaultValueUri) $json['defaultValueUri'] = $this->defaultValueUri;
        if (null !== $this->defaultValueAddress) $json['defaultValueAddress'] = $this->defaultValueAddress;
        if (null !== $this->defaultValueAge) $json['defaultValueAge'] = $this->defaultValueAge;
        if (null !== $this->defaultValueAnnotation) $json['defaultValueAnnotation'] = $this->defaultValueAnnotation;
        if (null !== $this->defaultValueAttachment) $json['defaultValueAttachment'] = $this->defaultValueAttachment;
        if (null !== $this->defaultValueCodeableConcept) $json['defaultValueCodeableConcept'] = $this->defaultValueCodeableConcept;
        if (null !== $this->defaultValueCoding) $json['defaultValueCoding'] = $this->defaultValueCoding;
        if (null !== $this->defaultValueContactPoint) $json['defaultValueContactPoint'] = $this->defaultValueContactPoint;
        if (null !== $this->defaultValueCount) $json['defaultValueCount'] = $this->defaultValueCount;
        if (null !== $this->defaultValueDistance) $json['defaultValueDistance'] = $this->defaultValueDistance;
        if (null !== $this->defaultValueDuration) $json['defaultValueDuration'] = $this->defaultValueDuration;
        if (null !== $this->defaultValueHumanName) $json['defaultValueHumanName'] = $this->defaultValueHumanName;
        if (null !== $this->defaultValueIdentifier) $json['defaultValueIdentifier'] = $this->defaultValueIdentifier;
        if (null !== $this->defaultValueMoney) $json['defaultValueMoney'] = $this->defaultValueMoney;
        if (null !== $this->defaultValuePeriod) $json['defaultValuePeriod'] = $this->defaultValuePeriod;
        if (null !== $this->defaultValueQuantity) $json['defaultValueQuantity'] = $this->defaultValueQuantity;
        if (null !== $this->defaultValueRange) $json['defaultValueRange'] = $this->defaultValueRange;
        if (null !== $this->defaultValueRatio) $json['defaultValueRatio'] = $this->defaultValueRatio;
        if (null !== $this->defaultValueReference) $json['defaultValueReference'] = $this->defaultValueReference;
        if (null !== $this->defaultValueSampledData) $json['defaultValueSampledData'] = $this->defaultValueSampledData;
        if (null !== $this->defaultValueSignature) $json['defaultValueSignature'] = $this->defaultValueSignature;
        if (null !== $this->defaultValueTiming) $json['defaultValueTiming'] = $this->defaultValueTiming;
        if (null !== $this->defaultValueMeta) $json['defaultValueMeta'] = $this->defaultValueMeta;
        if (null !== $this->meaningWhenMissing) $json['meaningWhenMissing'] = $this->meaningWhenMissing;
        if (null !== $this->orderMeaning) $json['orderMeaning'] = $this->orderMeaning;
        if (null !== $this->fixedBase64Binary) $json['fixedBase64Binary'] = $this->fixedBase64Binary;
        if (null !== $this->fixedBoolean) $json['fixedBoolean'] = $this->fixedBoolean;
        if (null !== $this->fixedCode) $json['fixedCode'] = $this->fixedCode;
        if (null !== $this->fixedDate) $json['fixedDate'] = $this->fixedDate;
        if (null !== $this->fixedDateTime) $json['fixedDateTime'] = $this->fixedDateTime;
        if (null !== $this->fixedDecimal) $json['fixedDecimal'] = $this->fixedDecimal;
        if (null !== $this->fixedId) $json['fixedId'] = $this->fixedId;
        if (null !== $this->fixedInstant) $json['fixedInstant'] = $this->fixedInstant;
        if (null !== $this->fixedInteger) $json['fixedInteger'] = $this->fixedInteger;
        if (null !== $this->fixedMarkdown) $json['fixedMarkdown'] = $this->fixedMarkdown;
        if (null !== $this->fixedOid) $json['fixedOid'] = $this->fixedOid;
        if (null !== $this->fixedPositiveInt) $json['fixedPositiveInt'] = $this->fixedPositiveInt;
        if (null !== $this->fixedString) $json['fixedString'] = $this->fixedString;
        if (null !== $this->fixedTime) $json['fixedTime'] = $this->fixedTime;
        if (null !== $this->fixedUnsignedInt) $json['fixedUnsignedInt'] = $this->fixedUnsignedInt;
        if (null !== $this->fixedUri) $json['fixedUri'] = $this->fixedUri;
        if (null !== $this->fixedAddress) $json['fixedAddress'] = $this->fixedAddress;
        if (null !== $this->fixedAge) $json['fixedAge'] = $this->fixedAge;
        if (null !== $this->fixedAnnotation) $json['fixedAnnotation'] = $this->fixedAnnotation;
        if (null !== $this->fixedAttachment) $json['fixedAttachment'] = $this->fixedAttachment;
        if (null !== $this->fixedCodeableConcept) $json['fixedCodeableConcept'] = $this->fixedCodeableConcept;
        if (null !== $this->fixedCoding) $json['fixedCoding'] = $this->fixedCoding;
        if (null !== $this->fixedContactPoint) $json['fixedContactPoint'] = $this->fixedContactPoint;
        if (null !== $this->fixedCount) $json['fixedCount'] = $this->fixedCount;
        if (null !== $this->fixedDistance) $json['fixedDistance'] = $this->fixedDistance;
        if (null !== $this->fixedDuration) $json['fixedDuration'] = $this->fixedDuration;
        if (null !== $this->fixedHumanName) $json['fixedHumanName'] = $this->fixedHumanName;
        if (null !== $this->fixedIdentifier) $json['fixedIdentifier'] = $this->fixedIdentifier;
        if (null !== $this->fixedMoney) $json['fixedMoney'] = $this->fixedMoney;
        if (null !== $this->fixedPeriod) $json['fixedPeriod'] = $this->fixedPeriod;
        if (null !== $this->fixedQuantity) $json['fixedQuantity'] = $this->fixedQuantity;
        if (null !== $this->fixedRange) $json['fixedRange'] = $this->fixedRange;
        if (null !== $this->fixedRatio) $json['fixedRatio'] = $this->fixedRatio;
        if (null !== $this->fixedReference) $json['fixedReference'] = $this->fixedReference;
        if (null !== $this->fixedSampledData) $json['fixedSampledData'] = $this->fixedSampledData;
        if (null !== $this->fixedSignature) $json['fixedSignature'] = $this->fixedSignature;
        if (null !== $this->fixedTiming) $json['fixedTiming'] = $this->fixedTiming;
        if (null !== $this->fixedMeta) $json['fixedMeta'] = $this->fixedMeta;
        if (null !== $this->patternBase64Binary) $json['patternBase64Binary'] = $this->patternBase64Binary;
        if (null !== $this->patternBoolean) $json['patternBoolean'] = $this->patternBoolean;
        if (null !== $this->patternCode) $json['patternCode'] = $this->patternCode;
        if (null !== $this->patternDate) $json['patternDate'] = $this->patternDate;
        if (null !== $this->patternDateTime) $json['patternDateTime'] = $this->patternDateTime;
        if (null !== $this->patternDecimal) $json['patternDecimal'] = $this->patternDecimal;
        if (null !== $this->patternId) $json['patternId'] = $this->patternId;
        if (null !== $this->patternInstant) $json['patternInstant'] = $this->patternInstant;
        if (null !== $this->patternInteger) $json['patternInteger'] = $this->patternInteger;
        if (null !== $this->patternMarkdown) $json['patternMarkdown'] = $this->patternMarkdown;
        if (null !== $this->patternOid) $json['patternOid'] = $this->patternOid;
        if (null !== $this->patternPositiveInt) $json['patternPositiveInt'] = $this->patternPositiveInt;
        if (null !== $this->patternString) $json['patternString'] = $this->patternString;
        if (null !== $this->patternTime) $json['patternTime'] = $this->patternTime;
        if (null !== $this->patternUnsignedInt) $json['patternUnsignedInt'] = $this->patternUnsignedInt;
        if (null !== $this->patternUri) $json['patternUri'] = $this->patternUri;
        if (null !== $this->patternAddress) $json['patternAddress'] = $this->patternAddress;
        if (null !== $this->patternAge) $json['patternAge'] = $this->patternAge;
        if (null !== $this->patternAnnotation) $json['patternAnnotation'] = $this->patternAnnotation;
        if (null !== $this->patternAttachment) $json['patternAttachment'] = $this->patternAttachment;
        if (null !== $this->patternCodeableConcept) $json['patternCodeableConcept'] = $this->patternCodeableConcept;
        if (null !== $this->patternCoding) $json['patternCoding'] = $this->patternCoding;
        if (null !== $this->patternContactPoint) $json['patternContactPoint'] = $this->patternContactPoint;
        if (null !== $this->patternCount) $json['patternCount'] = $this->patternCount;
        if (null !== $this->patternDistance) $json['patternDistance'] = $this->patternDistance;
        if (null !== $this->patternDuration) $json['patternDuration'] = $this->patternDuration;
        if (null !== $this->patternHumanName) $json['patternHumanName'] = $this->patternHumanName;
        if (null !== $this->patternIdentifier) $json['patternIdentifier'] = $this->patternIdentifier;
        if (null !== $this->patternMoney) $json['patternMoney'] = $this->patternMoney;
        if (null !== $this->patternPeriod) $json['patternPeriod'] = $this->patternPeriod;
        if (null !== $this->patternQuantity) $json['patternQuantity'] = $this->patternQuantity;
        if (null !== $this->patternRange) $json['patternRange'] = $this->patternRange;
        if (null !== $this->patternRatio) $json['patternRatio'] = $this->patternRatio;
        if (null !== $this->patternReference) $json['patternReference'] = $this->patternReference;
        if (null !== $this->patternSampledData) $json['patternSampledData'] = $this->patternSampledData;
        if (null !== $this->patternSignature) $json['patternSignature'] = $this->patternSignature;
        if (null !== $this->patternTiming) $json['patternTiming'] = $this->patternTiming;
        if (null !== $this->patternMeta) $json['patternMeta'] = $this->patternMeta;
        if (0 < count($this->example)) {
            $json['example'] = [];
            foreach($this->example as $example) {
                $json['example'][] = $example;
            }
        }
        if (null !== $this->minValueDate) $json['minValueDate'] = $this->minValueDate;
        if (null !== $this->minValueDateTime) $json['minValueDateTime'] = $this->minValueDateTime;
        if (null !== $this->minValueInstant) $json['minValueInstant'] = $this->minValueInstant;
        if (null !== $this->minValueTime) $json['minValueTime'] = $this->minValueTime;
        if (null !== $this->minValueDecimal) $json['minValueDecimal'] = $this->minValueDecimal;
        if (null !== $this->minValueInteger) $json['minValueInteger'] = $this->minValueInteger;
        if (null !== $this->minValuePositiveInt) $json['minValuePositiveInt'] = $this->minValuePositiveInt;
        if (null !== $this->minValueUnsignedInt) $json['minValueUnsignedInt'] = $this->minValueUnsignedInt;
        if (null !== $this->minValueQuantity) $json['minValueQuantity'] = $this->minValueQuantity;
        if (null !== $this->maxValueDate) $json['maxValueDate'] = $this->maxValueDate;
        if (null !== $this->maxValueDateTime) $json['maxValueDateTime'] = $this->maxValueDateTime;
        if (null !== $this->maxValueInstant) $json['maxValueInstant'] = $this->maxValueInstant;
        if (null !== $this->maxValueTime) $json['maxValueTime'] = $this->maxValueTime;
        if (null !== $this->maxValueDecimal) $json['maxValueDecimal'] = $this->maxValueDecimal;
        if (null !== $this->maxValueInteger) $json['maxValueInteger'] = $this->maxValueInteger;
        if (null !== $this->maxValuePositiveInt) $json['maxValuePositiveInt'] = $this->maxValuePositiveInt;
        if (null !== $this->maxValueUnsignedInt) $json['maxValueUnsignedInt'] = $this->maxValueUnsignedInt;
        if (null !== $this->maxValueQuantity) $json['maxValueQuantity'] = $this->maxValueQuantity;
        if (null !== $this->maxLength) $json['maxLength'] = $this->maxLength;
        if (0 < count($this->condition)) {
            $json['condition'] = [];
            foreach($this->condition as $condition) {
                $json['condition'][] = $condition;
            }
        }
        if (0 < count($this->constraint)) {
            $json['constraint'] = [];
            foreach($this->constraint as $constraint) {
                $json['constraint'][] = $constraint;
            }
        }
        if (null !== $this->mustSupport) $json['mustSupport'] = $this->mustSupport;
        if (null !== $this->isModifier) $json['isModifier'] = $this->isModifier;
        if (null !== $this->isSummary) $json['isSummary'] = $this->isSummary;
        if (null !== $this->binding) $json['binding'] = $this->binding;
        if (0 < count($this->mapping)) {
            $json['mapping'] = [];
            foreach($this->mapping as $mapping) {
                $json['mapping'][] = $mapping;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ElementDefinition xmlns="http://hl7.org/fhir"></ElementDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->path) $this->path->xmlSerialize(true, $sxe->addChild('path'));
        if (0 < count($this->representation)) {
            foreach($this->representation as $representation) {
                $representation->xmlSerialize(true, $sxe->addChild('representation'));
            }
        }
        if (null !== $this->sliceName) $this->sliceName->xmlSerialize(true, $sxe->addChild('sliceName'));
        if (null !== $this->label) $this->label->xmlSerialize(true, $sxe->addChild('label'));
        if (0 < count($this->code)) {
            foreach($this->code as $code) {
                $code->xmlSerialize(true, $sxe->addChild('code'));
            }
        }
        if (null !== $this->slicing) $this->slicing->xmlSerialize(true, $sxe->addChild('slicing'));
        if (null !== $this->short) $this->short->xmlSerialize(true, $sxe->addChild('short'));
        if (null !== $this->definition) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if (null !== $this->comment) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if (null !== $this->requirements) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (0 < count($this->alias)) {
            foreach($this->alias as $alias) {
                $alias->xmlSerialize(true, $sxe->addChild('alias'));
            }
        }
        if (null !== $this->min) $this->min->xmlSerialize(true, $sxe->addChild('min'));
        if (null !== $this->max) $this->max->xmlSerialize(true, $sxe->addChild('max'));
        if (null !== $this->base) $this->base->xmlSerialize(true, $sxe->addChild('base'));
        if (null !== $this->contentReference) $this->contentReference->xmlSerialize(true, $sxe->addChild('contentReference'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (null !== $this->defaultValueBase64Binary) $this->defaultValueBase64Binary->xmlSerialize(true, $sxe->addChild('defaultValueBase64Binary'));
        if (null !== $this->defaultValueBoolean) $this->defaultValueBoolean->xmlSerialize(true, $sxe->addChild('defaultValueBoolean'));
        if (null !== $this->defaultValueCode) $this->defaultValueCode->xmlSerialize(true, $sxe->addChild('defaultValueCode'));
        if (null !== $this->defaultValueDate) $this->defaultValueDate->xmlSerialize(true, $sxe->addChild('defaultValueDate'));
        if (null !== $this->defaultValueDateTime) $this->defaultValueDateTime->xmlSerialize(true, $sxe->addChild('defaultValueDateTime'));
        if (null !== $this->defaultValueDecimal) $this->defaultValueDecimal->xmlSerialize(true, $sxe->addChild('defaultValueDecimal'));
        if (null !== $this->defaultValueId) $this->defaultValueId->xmlSerialize(true, $sxe->addChild('defaultValueId'));
        if (null !== $this->defaultValueInstant) $this->defaultValueInstant->xmlSerialize(true, $sxe->addChild('defaultValueInstant'));
        if (null !== $this->defaultValueInteger) $this->defaultValueInteger->xmlSerialize(true, $sxe->addChild('defaultValueInteger'));
        if (null !== $this->defaultValueMarkdown) $this->defaultValueMarkdown->xmlSerialize(true, $sxe->addChild('defaultValueMarkdown'));
        if (null !== $this->defaultValueOid) $this->defaultValueOid->xmlSerialize(true, $sxe->addChild('defaultValueOid'));
        if (null !== $this->defaultValuePositiveInt) $this->defaultValuePositiveInt->xmlSerialize(true, $sxe->addChild('defaultValuePositiveInt'));
        if (null !== $this->defaultValueString) $this->defaultValueString->xmlSerialize(true, $sxe->addChild('defaultValueString'));
        if (null !== $this->defaultValueTime) $this->defaultValueTime->xmlSerialize(true, $sxe->addChild('defaultValueTime'));
        if (null !== $this->defaultValueUnsignedInt) $this->defaultValueUnsignedInt->xmlSerialize(true, $sxe->addChild('defaultValueUnsignedInt'));
        if (null !== $this->defaultValueUri) $this->defaultValueUri->xmlSerialize(true, $sxe->addChild('defaultValueUri'));
        if (null !== $this->defaultValueAddress) $this->defaultValueAddress->xmlSerialize(true, $sxe->addChild('defaultValueAddress'));
        if (null !== $this->defaultValueAge) $this->defaultValueAge->xmlSerialize(true, $sxe->addChild('defaultValueAge'));
        if (null !== $this->defaultValueAnnotation) $this->defaultValueAnnotation->xmlSerialize(true, $sxe->addChild('defaultValueAnnotation'));
        if (null !== $this->defaultValueAttachment) $this->defaultValueAttachment->xmlSerialize(true, $sxe->addChild('defaultValueAttachment'));
        if (null !== $this->defaultValueCodeableConcept) $this->defaultValueCodeableConcept->xmlSerialize(true, $sxe->addChild('defaultValueCodeableConcept'));
        if (null !== $this->defaultValueCoding) $this->defaultValueCoding->xmlSerialize(true, $sxe->addChild('defaultValueCoding'));
        if (null !== $this->defaultValueContactPoint) $this->defaultValueContactPoint->xmlSerialize(true, $sxe->addChild('defaultValueContactPoint'));
        if (null !== $this->defaultValueCount) $this->defaultValueCount->xmlSerialize(true, $sxe->addChild('defaultValueCount'));
        if (null !== $this->defaultValueDistance) $this->defaultValueDistance->xmlSerialize(true, $sxe->addChild('defaultValueDistance'));
        if (null !== $this->defaultValueDuration) $this->defaultValueDuration->xmlSerialize(true, $sxe->addChild('defaultValueDuration'));
        if (null !== $this->defaultValueHumanName) $this->defaultValueHumanName->xmlSerialize(true, $sxe->addChild('defaultValueHumanName'));
        if (null !== $this->defaultValueIdentifier) $this->defaultValueIdentifier->xmlSerialize(true, $sxe->addChild('defaultValueIdentifier'));
        if (null !== $this->defaultValueMoney) $this->defaultValueMoney->xmlSerialize(true, $sxe->addChild('defaultValueMoney'));
        if (null !== $this->defaultValuePeriod) $this->defaultValuePeriod->xmlSerialize(true, $sxe->addChild('defaultValuePeriod'));
        if (null !== $this->defaultValueQuantity) $this->defaultValueQuantity->xmlSerialize(true, $sxe->addChild('defaultValueQuantity'));
        if (null !== $this->defaultValueRange) $this->defaultValueRange->xmlSerialize(true, $sxe->addChild('defaultValueRange'));
        if (null !== $this->defaultValueRatio) $this->defaultValueRatio->xmlSerialize(true, $sxe->addChild('defaultValueRatio'));
        if (null !== $this->defaultValueReference) $this->defaultValueReference->xmlSerialize(true, $sxe->addChild('defaultValueReference'));
        if (null !== $this->defaultValueSampledData) $this->defaultValueSampledData->xmlSerialize(true, $sxe->addChild('defaultValueSampledData'));
        if (null !== $this->defaultValueSignature) $this->defaultValueSignature->xmlSerialize(true, $sxe->addChild('defaultValueSignature'));
        if (null !== $this->defaultValueTiming) $this->defaultValueTiming->xmlSerialize(true, $sxe->addChild('defaultValueTiming'));
        if (null !== $this->defaultValueMeta) $this->defaultValueMeta->xmlSerialize(true, $sxe->addChild('defaultValueMeta'));
        if (null !== $this->meaningWhenMissing) $this->meaningWhenMissing->xmlSerialize(true, $sxe->addChild('meaningWhenMissing'));
        if (null !== $this->orderMeaning) $this->orderMeaning->xmlSerialize(true, $sxe->addChild('orderMeaning'));
        if (null !== $this->fixedBase64Binary) $this->fixedBase64Binary->xmlSerialize(true, $sxe->addChild('fixedBase64Binary'));
        if (null !== $this->fixedBoolean) $this->fixedBoolean->xmlSerialize(true, $sxe->addChild('fixedBoolean'));
        if (null !== $this->fixedCode) $this->fixedCode->xmlSerialize(true, $sxe->addChild('fixedCode'));
        if (null !== $this->fixedDate) $this->fixedDate->xmlSerialize(true, $sxe->addChild('fixedDate'));
        if (null !== $this->fixedDateTime) $this->fixedDateTime->xmlSerialize(true, $sxe->addChild('fixedDateTime'));
        if (null !== $this->fixedDecimal) $this->fixedDecimal->xmlSerialize(true, $sxe->addChild('fixedDecimal'));
        if (null !== $this->fixedId) $this->fixedId->xmlSerialize(true, $sxe->addChild('fixedId'));
        if (null !== $this->fixedInstant) $this->fixedInstant->xmlSerialize(true, $sxe->addChild('fixedInstant'));
        if (null !== $this->fixedInteger) $this->fixedInteger->xmlSerialize(true, $sxe->addChild('fixedInteger'));
        if (null !== $this->fixedMarkdown) $this->fixedMarkdown->xmlSerialize(true, $sxe->addChild('fixedMarkdown'));
        if (null !== $this->fixedOid) $this->fixedOid->xmlSerialize(true, $sxe->addChild('fixedOid'));
        if (null !== $this->fixedPositiveInt) $this->fixedPositiveInt->xmlSerialize(true, $sxe->addChild('fixedPositiveInt'));
        if (null !== $this->fixedString) $this->fixedString->xmlSerialize(true, $sxe->addChild('fixedString'));
        if (null !== $this->fixedTime) $this->fixedTime->xmlSerialize(true, $sxe->addChild('fixedTime'));
        if (null !== $this->fixedUnsignedInt) $this->fixedUnsignedInt->xmlSerialize(true, $sxe->addChild('fixedUnsignedInt'));
        if (null !== $this->fixedUri) $this->fixedUri->xmlSerialize(true, $sxe->addChild('fixedUri'));
        if (null !== $this->fixedAddress) $this->fixedAddress->xmlSerialize(true, $sxe->addChild('fixedAddress'));
        if (null !== $this->fixedAge) $this->fixedAge->xmlSerialize(true, $sxe->addChild('fixedAge'));
        if (null !== $this->fixedAnnotation) $this->fixedAnnotation->xmlSerialize(true, $sxe->addChild('fixedAnnotation'));
        if (null !== $this->fixedAttachment) $this->fixedAttachment->xmlSerialize(true, $sxe->addChild('fixedAttachment'));
        if (null !== $this->fixedCodeableConcept) $this->fixedCodeableConcept->xmlSerialize(true, $sxe->addChild('fixedCodeableConcept'));
        if (null !== $this->fixedCoding) $this->fixedCoding->xmlSerialize(true, $sxe->addChild('fixedCoding'));
        if (null !== $this->fixedContactPoint) $this->fixedContactPoint->xmlSerialize(true, $sxe->addChild('fixedContactPoint'));
        if (null !== $this->fixedCount) $this->fixedCount->xmlSerialize(true, $sxe->addChild('fixedCount'));
        if (null !== $this->fixedDistance) $this->fixedDistance->xmlSerialize(true, $sxe->addChild('fixedDistance'));
        if (null !== $this->fixedDuration) $this->fixedDuration->xmlSerialize(true, $sxe->addChild('fixedDuration'));
        if (null !== $this->fixedHumanName) $this->fixedHumanName->xmlSerialize(true, $sxe->addChild('fixedHumanName'));
        if (null !== $this->fixedIdentifier) $this->fixedIdentifier->xmlSerialize(true, $sxe->addChild('fixedIdentifier'));
        if (null !== $this->fixedMoney) $this->fixedMoney->xmlSerialize(true, $sxe->addChild('fixedMoney'));
        if (null !== $this->fixedPeriod) $this->fixedPeriod->xmlSerialize(true, $sxe->addChild('fixedPeriod'));
        if (null !== $this->fixedQuantity) $this->fixedQuantity->xmlSerialize(true, $sxe->addChild('fixedQuantity'));
        if (null !== $this->fixedRange) $this->fixedRange->xmlSerialize(true, $sxe->addChild('fixedRange'));
        if (null !== $this->fixedRatio) $this->fixedRatio->xmlSerialize(true, $sxe->addChild('fixedRatio'));
        if (null !== $this->fixedReference) $this->fixedReference->xmlSerialize(true, $sxe->addChild('fixedReference'));
        if (null !== $this->fixedSampledData) $this->fixedSampledData->xmlSerialize(true, $sxe->addChild('fixedSampledData'));
        if (null !== $this->fixedSignature) $this->fixedSignature->xmlSerialize(true, $sxe->addChild('fixedSignature'));
        if (null !== $this->fixedTiming) $this->fixedTiming->xmlSerialize(true, $sxe->addChild('fixedTiming'));
        if (null !== $this->fixedMeta) $this->fixedMeta->xmlSerialize(true, $sxe->addChild('fixedMeta'));
        if (null !== $this->patternBase64Binary) $this->patternBase64Binary->xmlSerialize(true, $sxe->addChild('patternBase64Binary'));
        if (null !== $this->patternBoolean) $this->patternBoolean->xmlSerialize(true, $sxe->addChild('patternBoolean'));
        if (null !== $this->patternCode) $this->patternCode->xmlSerialize(true, $sxe->addChild('patternCode'));
        if (null !== $this->patternDate) $this->patternDate->xmlSerialize(true, $sxe->addChild('patternDate'));
        if (null !== $this->patternDateTime) $this->patternDateTime->xmlSerialize(true, $sxe->addChild('patternDateTime'));
        if (null !== $this->patternDecimal) $this->patternDecimal->xmlSerialize(true, $sxe->addChild('patternDecimal'));
        if (null !== $this->patternId) $this->patternId->xmlSerialize(true, $sxe->addChild('patternId'));
        if (null !== $this->patternInstant) $this->patternInstant->xmlSerialize(true, $sxe->addChild('patternInstant'));
        if (null !== $this->patternInteger) $this->patternInteger->xmlSerialize(true, $sxe->addChild('patternInteger'));
        if (null !== $this->patternMarkdown) $this->patternMarkdown->xmlSerialize(true, $sxe->addChild('patternMarkdown'));
        if (null !== $this->patternOid) $this->patternOid->xmlSerialize(true, $sxe->addChild('patternOid'));
        if (null !== $this->patternPositiveInt) $this->patternPositiveInt->xmlSerialize(true, $sxe->addChild('patternPositiveInt'));
        if (null !== $this->patternString) $this->patternString->xmlSerialize(true, $sxe->addChild('patternString'));
        if (null !== $this->patternTime) $this->patternTime->xmlSerialize(true, $sxe->addChild('patternTime'));
        if (null !== $this->patternUnsignedInt) $this->patternUnsignedInt->xmlSerialize(true, $sxe->addChild('patternUnsignedInt'));
        if (null !== $this->patternUri) $this->patternUri->xmlSerialize(true, $sxe->addChild('patternUri'));
        if (null !== $this->patternAddress) $this->patternAddress->xmlSerialize(true, $sxe->addChild('patternAddress'));
        if (null !== $this->patternAge) $this->patternAge->xmlSerialize(true, $sxe->addChild('patternAge'));
        if (null !== $this->patternAnnotation) $this->patternAnnotation->xmlSerialize(true, $sxe->addChild('patternAnnotation'));
        if (null !== $this->patternAttachment) $this->patternAttachment->xmlSerialize(true, $sxe->addChild('patternAttachment'));
        if (null !== $this->patternCodeableConcept) $this->patternCodeableConcept->xmlSerialize(true, $sxe->addChild('patternCodeableConcept'));
        if (null !== $this->patternCoding) $this->patternCoding->xmlSerialize(true, $sxe->addChild('patternCoding'));
        if (null !== $this->patternContactPoint) $this->patternContactPoint->xmlSerialize(true, $sxe->addChild('patternContactPoint'));
        if (null !== $this->patternCount) $this->patternCount->xmlSerialize(true, $sxe->addChild('patternCount'));
        if (null !== $this->patternDistance) $this->patternDistance->xmlSerialize(true, $sxe->addChild('patternDistance'));
        if (null !== $this->patternDuration) $this->patternDuration->xmlSerialize(true, $sxe->addChild('patternDuration'));
        if (null !== $this->patternHumanName) $this->patternHumanName->xmlSerialize(true, $sxe->addChild('patternHumanName'));
        if (null !== $this->patternIdentifier) $this->patternIdentifier->xmlSerialize(true, $sxe->addChild('patternIdentifier'));
        if (null !== $this->patternMoney) $this->patternMoney->xmlSerialize(true, $sxe->addChild('patternMoney'));
        if (null !== $this->patternPeriod) $this->patternPeriod->xmlSerialize(true, $sxe->addChild('patternPeriod'));
        if (null !== $this->patternQuantity) $this->patternQuantity->xmlSerialize(true, $sxe->addChild('patternQuantity'));
        if (null !== $this->patternRange) $this->patternRange->xmlSerialize(true, $sxe->addChild('patternRange'));
        if (null !== $this->patternRatio) $this->patternRatio->xmlSerialize(true, $sxe->addChild('patternRatio'));
        if (null !== $this->patternReference) $this->patternReference->xmlSerialize(true, $sxe->addChild('patternReference'));
        if (null !== $this->patternSampledData) $this->patternSampledData->xmlSerialize(true, $sxe->addChild('patternSampledData'));
        if (null !== $this->patternSignature) $this->patternSignature->xmlSerialize(true, $sxe->addChild('patternSignature'));
        if (null !== $this->patternTiming) $this->patternTiming->xmlSerialize(true, $sxe->addChild('patternTiming'));
        if (null !== $this->patternMeta) $this->patternMeta->xmlSerialize(true, $sxe->addChild('patternMeta'));
        if (0 < count($this->example)) {
            foreach($this->example as $example) {
                $example->xmlSerialize(true, $sxe->addChild('example'));
            }
        }
        if (null !== $this->minValueDate) $this->minValueDate->xmlSerialize(true, $sxe->addChild('minValueDate'));
        if (null !== $this->minValueDateTime) $this->minValueDateTime->xmlSerialize(true, $sxe->addChild('minValueDateTime'));
        if (null !== $this->minValueInstant) $this->minValueInstant->xmlSerialize(true, $sxe->addChild('minValueInstant'));
        if (null !== $this->minValueTime) $this->minValueTime->xmlSerialize(true, $sxe->addChild('minValueTime'));
        if (null !== $this->minValueDecimal) $this->minValueDecimal->xmlSerialize(true, $sxe->addChild('minValueDecimal'));
        if (null !== $this->minValueInteger) $this->minValueInteger->xmlSerialize(true, $sxe->addChild('minValueInteger'));
        if (null !== $this->minValuePositiveInt) $this->minValuePositiveInt->xmlSerialize(true, $sxe->addChild('minValuePositiveInt'));
        if (null !== $this->minValueUnsignedInt) $this->minValueUnsignedInt->xmlSerialize(true, $sxe->addChild('minValueUnsignedInt'));
        if (null !== $this->minValueQuantity) $this->minValueQuantity->xmlSerialize(true, $sxe->addChild('minValueQuantity'));
        if (null !== $this->maxValueDate) $this->maxValueDate->xmlSerialize(true, $sxe->addChild('maxValueDate'));
        if (null !== $this->maxValueDateTime) $this->maxValueDateTime->xmlSerialize(true, $sxe->addChild('maxValueDateTime'));
        if (null !== $this->maxValueInstant) $this->maxValueInstant->xmlSerialize(true, $sxe->addChild('maxValueInstant'));
        if (null !== $this->maxValueTime) $this->maxValueTime->xmlSerialize(true, $sxe->addChild('maxValueTime'));
        if (null !== $this->maxValueDecimal) $this->maxValueDecimal->xmlSerialize(true, $sxe->addChild('maxValueDecimal'));
        if (null !== $this->maxValueInteger) $this->maxValueInteger->xmlSerialize(true, $sxe->addChild('maxValueInteger'));
        if (null !== $this->maxValuePositiveInt) $this->maxValuePositiveInt->xmlSerialize(true, $sxe->addChild('maxValuePositiveInt'));
        if (null !== $this->maxValueUnsignedInt) $this->maxValueUnsignedInt->xmlSerialize(true, $sxe->addChild('maxValueUnsignedInt'));
        if (null !== $this->maxValueQuantity) $this->maxValueQuantity->xmlSerialize(true, $sxe->addChild('maxValueQuantity'));
        if (null !== $this->maxLength) $this->maxLength->xmlSerialize(true, $sxe->addChild('maxLength'));
        if (0 < count($this->condition)) {
            foreach($this->condition as $condition) {
                $condition->xmlSerialize(true, $sxe->addChild('condition'));
            }
        }
        if (0 < count($this->constraint)) {
            foreach($this->constraint as $constraint) {
                $constraint->xmlSerialize(true, $sxe->addChild('constraint'));
            }
        }
        if (null !== $this->mustSupport) $this->mustSupport->xmlSerialize(true, $sxe->addChild('mustSupport'));
        if (null !== $this->isModifier) $this->isModifier->xmlSerialize(true, $sxe->addChild('isModifier'));
        if (null !== $this->isSummary) $this->isSummary->xmlSerialize(true, $sxe->addChild('isSummary'));
        if (null !== $this->binding) $this->binding->xmlSerialize(true, $sxe->addChild('binding'));
        if (0 < count($this->mapping)) {
            foreach($this->mapping as $mapping) {
                $mapping->xmlSerialize(true, $sxe->addChild('mapping'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}