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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
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
    public $representation = [];

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
    public $code = [];

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
    public $alias = [];

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
    public $type = [];

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
    public $example = [];

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
    public $condition = [];

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public $constraint = [];

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
    public $mapping = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ElementDefinition';

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $path
     * @return $this
     */
    public function setPath($path) {
        $this->path = $path;
        return $this;
    }

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation[]
     */
    public function getRepresentation() {
        return $this->representation;
    }

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation $representation
     * @return $this
     */
    public function addRepresentation($representation) {
        $this->representation[] = $representation;
        return $this;
    }

    /**
     * The name of this element definition slice, when slicing is working. The name must be a token with no dots or spaces. This is a unique name referring to a specific set of constraints applied to this element, used to provide a name to different slices of the same element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSliceName() {
        return $this->sliceName;
    }

    /**
     * The name of this element definition slice, when slicing is working. The name must be a token with no dots or spaces. This is a unique name referring to a specific set of constraints applied to this element, used to provide a name to different slices of the same element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $sliceName
     * @return $this
     */
    public function setSliceName($sliceName) {
        $this->sliceName = $sliceName;
        return $this;
    }

    /**
     * A single preferred label which is the text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * A single preferred label which is the text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $label
     * @return $this
     */
    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    /**
     * A code that has the same meaning as the element in a particular terminology.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * A code that has the same meaning as the element in a particular terminology.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $code
     * @return $this
     */
    public function addCode($code) {
        $this->code[] = $code;
        return $this;
    }

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function getSlicing() {
        return $this->slicing;
    }

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
     * @return $this
     */
    public function setSlicing($slicing) {
        $this->slicing = $slicing;
        return $this;
    }

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getShort() {
        return $this->short;
    }

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $short
     * @return $this
     */
    public function setShort($short) {
        $this->short = $short;
        return $this;
    }

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefinition() {
        return $this->definition;
    }

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $definition
     * @return $this
     */
    public function setDefinition($definition) {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $comment
     * @return $this
     */
    public function setComment($comment) {
        $this->comment = $comment;
        return $this;
    }

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getRequirements() {
        return $this->requirements;
    }

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $requirements
     * @return $this
     */
    public function setRequirements($requirements) {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getAlias() {
        return $this->alias;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $alias
     * @return $this
     */
    public function addAlias($alias) {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMin() {
        return $this->min;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $min
     * @return $this
     */
    public function setMin($min) {
        $this->min = $min;
        return $this;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax() {
        return $this->max;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $max
     * @return $this
     */
    public function setMax($max) {
        $this->max = $max;
        return $this;
    }

    /**
     * Information about the base definition of the element, provided to make it unnecessary for tools to trace the deviation of the element through the derived and related profiles. This information is provided when the element definition is not the original definition of an element - i.g. either in a constraint on another type, or for elements from a super type in a snap shot.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Information about the base definition of the element, provided to make it unnecessary for tools to trace the deviation of the element through the derived and related profiles. This information is provided when the element definition is not the original definition of an element - i.g. either in a constraint on another type, or for elements from a super type in a snap shot.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase $base
     * @return $this
     */
    public function setBase($base) {
        $this->base = $base;
        return $this;
    }

    /**
     * Identifies the identity of an element defined elsewhere in the profile whose content rules should be applied to the current element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getContentReference() {
        return $this->contentReference;
    }

    /**
     * Identifies the identity of an element defined elsewhere in the profile whose content rules should be applied to the current element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $contentReference
     * @return $this
     */
    public function setContentReference($contentReference) {
        $this->contentReference = $contentReference;
        return $this;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType $type
     * @return $this
     */
    public function addType($type) {
        $this->type[] = $type;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary() {
        return $this->defaultValueBase64Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @return $this
     */
    public function setDefaultValueBase64Binary($defaultValueBase64Binary) {
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean() {
        return $this->defaultValueBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @return $this
     */
    public function setDefaultValueBoolean($defaultValueBoolean) {
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode() {
        return $this->defaultValueCode;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $defaultValueCode
     * @return $this
     */
    public function setDefaultValueCode($defaultValueCode) {
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate() {
        return $this->defaultValueDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $defaultValueDate
     * @return $this
     */
    public function setDefaultValueDate($defaultValueDate) {
        $this->defaultValueDate = $defaultValueDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime() {
        return $this->defaultValueDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @return $this
     */
    public function setDefaultValueDateTime($defaultValueDateTime) {
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal() {
        return $this->defaultValueDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @return $this
     */
    public function setDefaultValueDecimal($defaultValueDecimal) {
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getDefaultValueId() {
        return $this->defaultValueId;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $defaultValueId
     * @return $this
     */
    public function setDefaultValueId($defaultValueId) {
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant() {
        return $this->defaultValueInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $defaultValueInstant
     * @return $this
     */
    public function setDefaultValueInstant($defaultValueInstant) {
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger() {
        return $this->defaultValueInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $defaultValueInteger
     * @return $this
     */
    public function setDefaultValueInteger($defaultValueInteger) {
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown() {
        return $this->defaultValueMarkdown;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @return $this
     */
    public function setDefaultValueMarkdown($defaultValueMarkdown) {
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getDefaultValueOid() {
        return $this->defaultValueOid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $defaultValueOid
     * @return $this
     */
    public function setDefaultValueOid($defaultValueOid) {
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt() {
        return $this->defaultValuePositiveInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @return $this
     */
    public function setDefaultValuePositiveInt($defaultValuePositiveInt) {
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDefaultValueString() {
        return $this->defaultValueString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $defaultValueString
     * @return $this
     */
    public function setDefaultValueString($defaultValueString) {
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime() {
        return $this->defaultValueTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $defaultValueTime
     * @return $this
     */
    public function setDefaultValueTime($defaultValueTime) {
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt() {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @return $this
     */
    public function setDefaultValueUnsignedInt($defaultValueUnsignedInt) {
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri() {
        return $this->defaultValueUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $defaultValueUri
     * @return $this
     */
    public function setDefaultValueUri($defaultValueUri) {
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress() {
        return $this->defaultValueAddress;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $defaultValueAddress
     * @return $this
     */
    public function setDefaultValueAddress($defaultValueAddress) {
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge() {
        return $this->defaultValueAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
     * @return $this
     */
    public function setDefaultValueAge($defaultValueAge) {
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation() {
        return $this->defaultValueAnnotation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @return $this
     */
    public function setDefaultValueAnnotation($defaultValueAnnotation) {
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment() {
        return $this->defaultValueAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @return $this
     */
    public function setDefaultValueAttachment($defaultValueAttachment) {
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept() {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @return $this
     */
    public function setDefaultValueCodeableConcept($defaultValueCodeableConcept) {
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding() {
        return $this->defaultValueCoding;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $defaultValueCoding
     * @return $this
     */
    public function setDefaultValueCoding($defaultValueCoding) {
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint() {
        return $this->defaultValueContactPoint;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @return $this
     */
    public function setDefaultValueContactPoint($defaultValueContactPoint) {
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getDefaultValueCount() {
        return $this->defaultValueCount;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
     * @return $this
     */
    public function setDefaultValueCount($defaultValueCount) {
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance() {
        return $this->defaultValueDistance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
     * @return $this
     */
    public function setDefaultValueDistance($defaultValueDistance) {
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration() {
        return $this->defaultValueDuration;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
     * @return $this
     */
    public function setDefaultValueDuration($defaultValueDuration) {
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName() {
        return $this->defaultValueHumanName;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @return $this
     */
    public function setDefaultValueHumanName($defaultValueHumanName) {
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier() {
        return $this->defaultValueIdentifier;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @return $this
     */
    public function setDefaultValueIdentifier($defaultValueIdentifier) {
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getDefaultValueMoney() {
        return $this->defaultValueMoney;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $defaultValueMoney
     * @return $this
     */
    public function setDefaultValueMoney($defaultValueMoney) {
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod() {
        return $this->defaultValuePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @return $this
     */
    public function setDefaultValuePeriod($defaultValuePeriod) {
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity() {
        return $this->defaultValueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @return $this
     */
    public function setDefaultValueQuantity($defaultValueQuantity) {
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange() {
        return $this->defaultValueRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $defaultValueRange
     * @return $this
     */
    public function setDefaultValueRange($defaultValueRange) {
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio() {
        return $this->defaultValueRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $defaultValueRatio
     * @return $this
     */
    public function setDefaultValueRatio($defaultValueRatio) {
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference() {
        return $this->defaultValueReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $defaultValueReference
     * @return $this
     */
    public function setDefaultValueReference($defaultValueReference) {
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData() {
        return $this->defaultValueSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @return $this
     */
    public function setDefaultValueSampledData($defaultValueSampledData) {
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature() {
        return $this->defaultValueSignature;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $defaultValueSignature
     * @return $this
     */
    public function setDefaultValueSignature($defaultValueSignature) {
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getDefaultValueTiming() {
        return $this->defaultValueTiming;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $defaultValueTiming
     * @return $this
     */
    public function setDefaultValueTiming($defaultValueTiming) {
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta() {
        return $this->defaultValueMeta;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $defaultValueMeta
     * @return $this
     */
    public function setDefaultValueMeta($defaultValueMeta) {
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getMeaningWhenMissing() {
        return $this->meaningWhenMissing;
    }

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $meaningWhenMissing
     * @return $this
     */
    public function setMeaningWhenMissing($meaningWhenMissing) {
        $this->meaningWhenMissing = $meaningWhenMissing;
        return $this;
    }

    /**
     * If present, indicates that the order of the repeating element has meaning and describes what that meaning is.  If absent, it means that the order of the element has no meaning.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOrderMeaning() {
        return $this->orderMeaning;
    }

    /**
     * If present, indicates that the order of the repeating element has meaning and describes what that meaning is.  If absent, it means that the order of the element has no meaning.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $orderMeaning
     * @return $this
     */
    public function setOrderMeaning($orderMeaning) {
        $this->orderMeaning = $orderMeaning;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getFixedBase64Binary() {
        return $this->fixedBase64Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $fixedBase64Binary
     * @return $this
     */
    public function setFixedBase64Binary($fixedBase64Binary) {
        $this->fixedBase64Binary = $fixedBase64Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getFixedBoolean() {
        return $this->fixedBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $fixedBoolean
     * @return $this
     */
    public function setFixedBoolean($fixedBoolean) {
        $this->fixedBoolean = $fixedBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getFixedCode() {
        return $this->fixedCode;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $fixedCode
     * @return $this
     */
    public function setFixedCode($fixedCode) {
        $this->fixedCode = $fixedCode;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getFixedDate() {
        return $this->fixedDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $fixedDate
     * @return $this
     */
    public function setFixedDate($fixedDate) {
        $this->fixedDate = $fixedDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getFixedDateTime() {
        return $this->fixedDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $fixedDateTime
     * @return $this
     */
    public function setFixedDateTime($fixedDateTime) {
        $this->fixedDateTime = $fixedDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFixedDecimal() {
        return $this->fixedDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $fixedDecimal
     * @return $this
     */
    public function setFixedDecimal($fixedDecimal) {
        $this->fixedDecimal = $fixedDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getFixedId() {
        return $this->fixedId;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $fixedId
     * @return $this
     */
    public function setFixedId($fixedId) {
        $this->fixedId = $fixedId;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getFixedInstant() {
        return $this->fixedInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $fixedInstant
     * @return $this
     */
    public function setFixedInstant($fixedInstant) {
        $this->fixedInstant = $fixedInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getFixedInteger() {
        return $this->fixedInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $fixedInteger
     * @return $this
     */
    public function setFixedInteger($fixedInteger) {
        $this->fixedInteger = $fixedInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getFixedMarkdown() {
        return $this->fixedMarkdown;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $fixedMarkdown
     * @return $this
     */
    public function setFixedMarkdown($fixedMarkdown) {
        $this->fixedMarkdown = $fixedMarkdown;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getFixedOid() {
        return $this->fixedOid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $fixedOid
     * @return $this
     */
    public function setFixedOid($fixedOid) {
        $this->fixedOid = $fixedOid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFixedPositiveInt() {
        return $this->fixedPositiveInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $fixedPositiveInt
     * @return $this
     */
    public function setFixedPositiveInt($fixedPositiveInt) {
        $this->fixedPositiveInt = $fixedPositiveInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getFixedString() {
        return $this->fixedString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $fixedString
     * @return $this
     */
    public function setFixedString($fixedString) {
        $this->fixedString = $fixedString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getFixedTime() {
        return $this->fixedTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $fixedTime
     * @return $this
     */
    public function setFixedTime($fixedTime) {
        $this->fixedTime = $fixedTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getFixedUnsignedInt() {
        return $this->fixedUnsignedInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $fixedUnsignedInt
     * @return $this
     */
    public function setFixedUnsignedInt($fixedUnsignedInt) {
        $this->fixedUnsignedInt = $fixedUnsignedInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getFixedUri() {
        return $this->fixedUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $fixedUri
     * @return $this
     */
    public function setFixedUri($fixedUri) {
        $this->fixedUri = $fixedUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getFixedAddress() {
        return $this->fixedAddress;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $fixedAddress
     * @return $this
     */
    public function setFixedAddress($fixedAddress) {
        $this->fixedAddress = $fixedAddress;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getFixedAge() {
        return $this->fixedAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $fixedAge
     * @return $this
     */
    public function setFixedAge($fixedAge) {
        $this->fixedAge = $fixedAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getFixedAnnotation() {
        return $this->fixedAnnotation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $fixedAnnotation
     * @return $this
     */
    public function setFixedAnnotation($fixedAnnotation) {
        $this->fixedAnnotation = $fixedAnnotation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getFixedAttachment() {
        return $this->fixedAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $fixedAttachment
     * @return $this
     */
    public function setFixedAttachment($fixedAttachment) {
        $this->fixedAttachment = $fixedAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFixedCodeableConcept() {
        return $this->fixedCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $fixedCodeableConcept
     * @return $this
     */
    public function setFixedCodeableConcept($fixedCodeableConcept) {
        $this->fixedCodeableConcept = $fixedCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getFixedCoding() {
        return $this->fixedCoding;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $fixedCoding
     * @return $this
     */
    public function setFixedCoding($fixedCoding) {
        $this->fixedCoding = $fixedCoding;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getFixedContactPoint() {
        return $this->fixedContactPoint;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $fixedContactPoint
     * @return $this
     */
    public function setFixedContactPoint($fixedContactPoint) {
        $this->fixedContactPoint = $fixedContactPoint;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getFixedCount() {
        return $this->fixedCount;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount $fixedCount
     * @return $this
     */
    public function setFixedCount($fixedCount) {
        $this->fixedCount = $fixedCount;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getFixedDistance() {
        return $this->fixedDistance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance $fixedDistance
     * @return $this
     */
    public function setFixedDistance($fixedDistance) {
        $this->fixedDistance = $fixedDistance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getFixedDuration() {
        return $this->fixedDuration;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $fixedDuration
     * @return $this
     */
    public function setFixedDuration($fixedDuration) {
        $this->fixedDuration = $fixedDuration;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getFixedHumanName() {
        return $this->fixedHumanName;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $fixedHumanName
     * @return $this
     */
    public function setFixedHumanName($fixedHumanName) {
        $this->fixedHumanName = $fixedHumanName;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getFixedIdentifier() {
        return $this->fixedIdentifier;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $fixedIdentifier
     * @return $this
     */
    public function setFixedIdentifier($fixedIdentifier) {
        $this->fixedIdentifier = $fixedIdentifier;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getFixedMoney() {
        return $this->fixedMoney;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $fixedMoney
     * @return $this
     */
    public function setFixedMoney($fixedMoney) {
        $this->fixedMoney = $fixedMoney;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getFixedPeriod() {
        return $this->fixedPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $fixedPeriod
     * @return $this
     */
    public function setFixedPeriod($fixedPeriod) {
        $this->fixedPeriod = $fixedPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getFixedQuantity() {
        return $this->fixedQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $fixedQuantity
     * @return $this
     */
    public function setFixedQuantity($fixedQuantity) {
        $this->fixedQuantity = $fixedQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getFixedRange() {
        return $this->fixedRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $fixedRange
     * @return $this
     */
    public function setFixedRange($fixedRange) {
        $this->fixedRange = $fixedRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getFixedRatio() {
        return $this->fixedRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $fixedRatio
     * @return $this
     */
    public function setFixedRatio($fixedRatio) {
        $this->fixedRatio = $fixedRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFixedReference() {
        return $this->fixedReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $fixedReference
     * @return $this
     */
    public function setFixedReference($fixedReference) {
        $this->fixedReference = $fixedReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getFixedSampledData() {
        return $this->fixedSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $fixedSampledData
     * @return $this
     */
    public function setFixedSampledData($fixedSampledData) {
        $this->fixedSampledData = $fixedSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getFixedSignature() {
        return $this->fixedSignature;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $fixedSignature
     * @return $this
     */
    public function setFixedSignature($fixedSignature) {
        $this->fixedSignature = $fixedSignature;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getFixedTiming() {
        return $this->fixedTiming;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $fixedTiming
     * @return $this
     */
    public function setFixedTiming($fixedTiming) {
        $this->fixedTiming = $fixedTiming;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getFixedMeta() {
        return $this->fixedMeta;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $fixedMeta
     * @return $this
     */
    public function setFixedMeta($fixedMeta) {
        $this->fixedMeta = $fixedMeta;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getPatternBase64Binary() {
        return $this->patternBase64Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $patternBase64Binary
     * @return $this
     */
    public function setPatternBase64Binary($patternBase64Binary) {
        $this->patternBase64Binary = $patternBase64Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPatternBoolean() {
        return $this->patternBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $patternBoolean
     * @return $this
     */
    public function setPatternBoolean($patternBoolean) {
        $this->patternBoolean = $patternBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getPatternCode() {
        return $this->patternCode;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $patternCode
     * @return $this
     */
    public function setPatternCode($patternCode) {
        $this->patternCode = $patternCode;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getPatternDate() {
        return $this->patternDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $patternDate
     * @return $this
     */
    public function setPatternDate($patternDate) {
        $this->patternDate = $patternDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPatternDateTime() {
        return $this->patternDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $patternDateTime
     * @return $this
     */
    public function setPatternDateTime($patternDateTime) {
        $this->patternDateTime = $patternDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPatternDecimal() {
        return $this->patternDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $patternDecimal
     * @return $this
     */
    public function setPatternDecimal($patternDecimal) {
        $this->patternDecimal = $patternDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getPatternId() {
        return $this->patternId;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $patternId
     * @return $this
     */
    public function setPatternId($patternId) {
        $this->patternId = $patternId;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getPatternInstant() {
        return $this->patternInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $patternInstant
     * @return $this
     */
    public function setPatternInstant($patternInstant) {
        $this->patternInstant = $patternInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getPatternInteger() {
        return $this->patternInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $patternInteger
     * @return $this
     */
    public function setPatternInteger($patternInteger) {
        $this->patternInteger = $patternInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPatternMarkdown() {
        return $this->patternMarkdown;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $patternMarkdown
     * @return $this
     */
    public function setPatternMarkdown($patternMarkdown) {
        $this->patternMarkdown = $patternMarkdown;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getPatternOid() {
        return $this->patternOid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $patternOid
     * @return $this
     */
    public function setPatternOid($patternOid) {
        $this->patternOid = $patternOid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getPatternPositiveInt() {
        return $this->patternPositiveInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $patternPositiveInt
     * @return $this
     */
    public function setPatternPositiveInt($patternPositiveInt) {
        $this->patternPositiveInt = $patternPositiveInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPatternString() {
        return $this->patternString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $patternString
     * @return $this
     */
    public function setPatternString($patternString) {
        $this->patternString = $patternString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getPatternTime() {
        return $this->patternTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $patternTime
     * @return $this
     */
    public function setPatternTime($patternTime) {
        $this->patternTime = $patternTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getPatternUnsignedInt() {
        return $this->patternUnsignedInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $patternUnsignedInt
     * @return $this
     */
    public function setPatternUnsignedInt($patternUnsignedInt) {
        $this->patternUnsignedInt = $patternUnsignedInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getPatternUri() {
        return $this->patternUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $patternUri
     * @return $this
     */
    public function setPatternUri($patternUri) {
        $this->patternUri = $patternUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getPatternAddress() {
        return $this->patternAddress;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $patternAddress
     * @return $this
     */
    public function setPatternAddress($patternAddress) {
        $this->patternAddress = $patternAddress;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getPatternAge() {
        return $this->patternAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $patternAge
     * @return $this
     */
    public function setPatternAge($patternAge) {
        $this->patternAge = $patternAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getPatternAnnotation() {
        return $this->patternAnnotation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $patternAnnotation
     * @return $this
     */
    public function setPatternAnnotation($patternAnnotation) {
        $this->patternAnnotation = $patternAnnotation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPatternAttachment() {
        return $this->patternAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $patternAttachment
     * @return $this
     */
    public function setPatternAttachment($patternAttachment) {
        $this->patternAttachment = $patternAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPatternCodeableConcept() {
        return $this->patternCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $patternCodeableConcept
     * @return $this
     */
    public function setPatternCodeableConcept($patternCodeableConcept) {
        $this->patternCodeableConcept = $patternCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getPatternCoding() {
        return $this->patternCoding;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $patternCoding
     * @return $this
     */
    public function setPatternCoding($patternCoding) {
        $this->patternCoding = $patternCoding;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getPatternContactPoint() {
        return $this->patternContactPoint;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $patternContactPoint
     * @return $this
     */
    public function setPatternContactPoint($patternContactPoint) {
        $this->patternContactPoint = $patternContactPoint;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getPatternCount() {
        return $this->patternCount;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount $patternCount
     * @return $this
     */
    public function setPatternCount($patternCount) {
        $this->patternCount = $patternCount;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getPatternDistance() {
        return $this->patternDistance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance $patternDistance
     * @return $this
     */
    public function setPatternDistance($patternDistance) {
        $this->patternDistance = $patternDistance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getPatternDuration() {
        return $this->patternDuration;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $patternDuration
     * @return $this
     */
    public function setPatternDuration($patternDuration) {
        $this->patternDuration = $patternDuration;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getPatternHumanName() {
        return $this->patternHumanName;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $patternHumanName
     * @return $this
     */
    public function setPatternHumanName($patternHumanName) {
        $this->patternHumanName = $patternHumanName;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getPatternIdentifier() {
        return $this->patternIdentifier;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $patternIdentifier
     * @return $this
     */
    public function setPatternIdentifier($patternIdentifier) {
        $this->patternIdentifier = $patternIdentifier;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPatternMoney() {
        return $this->patternMoney;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $patternMoney
     * @return $this
     */
    public function setPatternMoney($patternMoney) {
        $this->patternMoney = $patternMoney;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPatternPeriod() {
        return $this->patternPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $patternPeriod
     * @return $this
     */
    public function setPatternPeriod($patternPeriod) {
        $this->patternPeriod = $patternPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getPatternQuantity() {
        return $this->patternQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $patternQuantity
     * @return $this
     */
    public function setPatternQuantity($patternQuantity) {
        $this->patternQuantity = $patternQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getPatternRange() {
        return $this->patternRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $patternRange
     * @return $this
     */
    public function setPatternRange($patternRange) {
        $this->patternRange = $patternRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getPatternRatio() {
        return $this->patternRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $patternRatio
     * @return $this
     */
    public function setPatternRatio($patternRatio) {
        $this->patternRatio = $patternRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatternReference() {
        return $this->patternReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patternReference
     * @return $this
     */
    public function setPatternReference($patternReference) {
        $this->patternReference = $patternReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getPatternSampledData() {
        return $this->patternSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $patternSampledData
     * @return $this
     */
    public function setPatternSampledData($patternSampledData) {
        $this->patternSampledData = $patternSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getPatternSignature() {
        return $this->patternSignature;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $patternSignature
     * @return $this
     */
    public function setPatternSignature($patternSignature) {
        $this->patternSignature = $patternSignature;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getPatternTiming() {
        return $this->patternTiming;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $patternTiming
     * @return $this
     */
    public function setPatternTiming($patternTiming) {
        $this->patternTiming = $patternTiming;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getPatternMeta() {
        return $this->patternMeta;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $patternMeta
     * @return $this
     */
    public function setPatternMeta($patternMeta) {
        $this->patternMeta = $patternMeta;
        return $this;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be found in the element.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionExample[]
     */
    public function getExample() {
        return $this->example;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be found in the element.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionExample $example
     * @return $this
     */
    public function addExample($example) {
        $this->example[] = $example;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getMinValueDate() {
        return $this->minValueDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $minValueDate
     * @return $this
     */
    public function setMinValueDate($minValueDate) {
        $this->minValueDate = $minValueDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getMinValueDateTime() {
        return $this->minValueDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $minValueDateTime
     * @return $this
     */
    public function setMinValueDateTime($minValueDateTime) {
        $this->minValueDateTime = $minValueDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getMinValueInstant() {
        return $this->minValueInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $minValueInstant
     * @return $this
     */
    public function setMinValueInstant($minValueInstant) {
        $this->minValueInstant = $minValueInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getMinValueTime() {
        return $this->minValueTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $minValueTime
     * @return $this
     */
    public function setMinValueTime($minValueTime) {
        $this->minValueTime = $minValueTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getMinValueDecimal() {
        return $this->minValueDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $minValueDecimal
     * @return $this
     */
    public function setMinValueDecimal($minValueDecimal) {
        $this->minValueDecimal = $minValueDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMinValueInteger() {
        return $this->minValueInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $minValueInteger
     * @return $this
     */
    public function setMinValueInteger($minValueInteger) {
        $this->minValueInteger = $minValueInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getMinValuePositiveInt() {
        return $this->minValuePositiveInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $minValuePositiveInt
     * @return $this
     */
    public function setMinValuePositiveInt($minValuePositiveInt) {
        $this->minValuePositiveInt = $minValuePositiveInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMinValueUnsignedInt() {
        return $this->minValueUnsignedInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
     * @return $this
     */
    public function setMinValueUnsignedInt($minValueUnsignedInt) {
        $this->minValueUnsignedInt = $minValueUnsignedInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMinValueQuantity() {
        return $this->minValueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $minValueQuantity
     * @return $this
     */
    public function setMinValueQuantity($minValueQuantity) {
        $this->minValueQuantity = $minValueQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getMaxValueDate() {
        return $this->maxValueDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $maxValueDate
     * @return $this
     */
    public function setMaxValueDate($maxValueDate) {
        $this->maxValueDate = $maxValueDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getMaxValueDateTime() {
        return $this->maxValueDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $maxValueDateTime
     * @return $this
     */
    public function setMaxValueDateTime($maxValueDateTime) {
        $this->maxValueDateTime = $maxValueDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getMaxValueInstant() {
        return $this->maxValueInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $maxValueInstant
     * @return $this
     */
    public function setMaxValueInstant($maxValueInstant) {
        $this->maxValueInstant = $maxValueInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getMaxValueTime() {
        return $this->maxValueTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $maxValueTime
     * @return $this
     */
    public function setMaxValueTime($maxValueTime) {
        $this->maxValueTime = $maxValueTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getMaxValueDecimal() {
        return $this->maxValueDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $maxValueDecimal
     * @return $this
     */
    public function setMaxValueDecimal($maxValueDecimal) {
        $this->maxValueDecimal = $maxValueDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMaxValueInteger() {
        return $this->maxValueInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $maxValueInteger
     * @return $this
     */
    public function setMaxValueInteger($maxValueInteger) {
        $this->maxValueInteger = $maxValueInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getMaxValuePositiveInt() {
        return $this->maxValuePositiveInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
     * @return $this
     */
    public function setMaxValuePositiveInt($maxValuePositiveInt) {
        $this->maxValuePositiveInt = $maxValuePositiveInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMaxValueUnsignedInt() {
        return $this->maxValueUnsignedInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
     * @return $this
     */
    public function setMaxValueUnsignedInt($maxValueUnsignedInt) {
        $this->maxValueUnsignedInt = $maxValueUnsignedInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMaxValueQuantity() {
        return $this->maxValueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $maxValueQuantity
     * @return $this
     */
    public function setMaxValueQuantity($maxValueQuantity) {
        $this->maxValueQuantity = $maxValueQuantity;
        return $this;
    }

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMaxLength() {
        return $this->maxLength;
    }

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength) {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    public function getCondition() {
        return $this->condition;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $condition
     * @return $this
     */
    public function addCondition($condition) {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public function getConstraint() {
        return $this->constraint;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint $constraint
     * @return $this
     */
    public function addConstraint($constraint) {
        $this->constraint[] = $constraint;
        return $this;
    }

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMustSupport() {
        return $this->mustSupport;
    }

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $mustSupport
     * @return $this
     */
    public function setMustSupport($mustSupport) {
        $this->mustSupport = $mustSupport;
        return $this;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsModifier() {
        return $this->isModifier;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $isModifier
     * @return $this
     */
    public function setIsModifier($isModifier) {
        $this->isModifier = $isModifier;
        return $this;
    }

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsSummary() {
        return $this->isSummary;
    }

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $isSummary
     * @return $this
     */
    public function setIsSummary($isSummary) {
        $this->isSummary = $isSummary;
        return $this;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept, Quantity), or the data types (string, uri).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function getBinding() {
        return $this->binding;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept, Quantity), or the data types (string, uri).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
     * @return $this
     */
    public function setBinding($binding) {
        $this->binding = $binding;
        return $this;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public function getMapping() {
        return $this->mapping;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping $mapping
     * @return $this
     */
    public function addMapping($mapping) {
        $this->mapping[] = $mapping;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['path'])) {
                $this->setPath($data['path']);
            }
            if (isset($data['representation'])) {
                if (is_array($data['representation'])) {
                    foreach($data['representation'] as $d) {
                        $this->addRepresentation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"representation" must be array of objects or null, '.gettype($data['representation']).' seen.');
                }
            }
            if (isset($data['sliceName'])) {
                $this->setSliceName($data['sliceName']);
            }
            if (isset($data['label'])) {
                $this->setLabel($data['label']);
            }
            if (isset($data['code'])) {
                if (is_array($data['code'])) {
                    foreach($data['code'] as $d) {
                        $this->addCode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"code" must be array of objects or null, '.gettype($data['code']).' seen.');
                }
            }
            if (isset($data['slicing'])) {
                $this->setSlicing($data['slicing']);
            }
            if (isset($data['short'])) {
                $this->setShort($data['short']);
            }
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['requirements'])) {
                $this->setRequirements($data['requirements']);
            }
            if (isset($data['alias'])) {
                if (is_array($data['alias'])) {
                    foreach($data['alias'] as $d) {
                        $this->addAlias($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"alias" must be array of objects or null, '.gettype($data['alias']).' seen.');
                }
            }
            if (isset($data['min'])) {
                $this->setMin($data['min']);
            }
            if (isset($data['max'])) {
                $this->setMax($data['max']);
            }
            if (isset($data['base'])) {
                $this->setBase($data['base']);
            }
            if (isset($data['contentReference'])) {
                $this->setContentReference($data['contentReference']);
            }
            if (isset($data['type'])) {
                if (is_array($data['type'])) {
                    foreach($data['type'] as $d) {
                        $this->addType($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"type" must be array of objects or null, '.gettype($data['type']).' seen.');
                }
            }
            if (isset($data['defaultValueBase64Binary'])) {
                $this->setDefaultValueBase64Binary($data['defaultValueBase64Binary']);
            }
            if (isset($data['defaultValueBoolean'])) {
                $this->setDefaultValueBoolean($data['defaultValueBoolean']);
            }
            if (isset($data['defaultValueCode'])) {
                $this->setDefaultValueCode($data['defaultValueCode']);
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
            if (isset($data['defaultValueId'])) {
                $this->setDefaultValueId($data['defaultValueId']);
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
            if (isset($data['defaultValueOid'])) {
                $this->setDefaultValueOid($data['defaultValueOid']);
            }
            if (isset($data['defaultValuePositiveInt'])) {
                $this->setDefaultValuePositiveInt($data['defaultValuePositiveInt']);
            }
            if (isset($data['defaultValueString'])) {
                $this->setDefaultValueString($data['defaultValueString']);
            }
            if (isset($data['defaultValueTime'])) {
                $this->setDefaultValueTime($data['defaultValueTime']);
            }
            if (isset($data['defaultValueUnsignedInt'])) {
                $this->setDefaultValueUnsignedInt($data['defaultValueUnsignedInt']);
            }
            if (isset($data['defaultValueUri'])) {
                $this->setDefaultValueUri($data['defaultValueUri']);
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
            if (isset($data['defaultValueCodeableConcept'])) {
                $this->setDefaultValueCodeableConcept($data['defaultValueCodeableConcept']);
            }
            if (isset($data['defaultValueCoding'])) {
                $this->setDefaultValueCoding($data['defaultValueCoding']);
            }
            if (isset($data['defaultValueContactPoint'])) {
                $this->setDefaultValueContactPoint($data['defaultValueContactPoint']);
            }
            if (isset($data['defaultValueCount'])) {
                $this->setDefaultValueCount($data['defaultValueCount']);
            }
            if (isset($data['defaultValueDistance'])) {
                $this->setDefaultValueDistance($data['defaultValueDistance']);
            }
            if (isset($data['defaultValueDuration'])) {
                $this->setDefaultValueDuration($data['defaultValueDuration']);
            }
            if (isset($data['defaultValueHumanName'])) {
                $this->setDefaultValueHumanName($data['defaultValueHumanName']);
            }
            if (isset($data['defaultValueIdentifier'])) {
                $this->setDefaultValueIdentifier($data['defaultValueIdentifier']);
            }
            if (isset($data['defaultValueMoney'])) {
                $this->setDefaultValueMoney($data['defaultValueMoney']);
            }
            if (isset($data['defaultValuePeriod'])) {
                $this->setDefaultValuePeriod($data['defaultValuePeriod']);
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
            if (isset($data['defaultValueSampledData'])) {
                $this->setDefaultValueSampledData($data['defaultValueSampledData']);
            }
            if (isset($data['defaultValueSignature'])) {
                $this->setDefaultValueSignature($data['defaultValueSignature']);
            }
            if (isset($data['defaultValueTiming'])) {
                $this->setDefaultValueTiming($data['defaultValueTiming']);
            }
            if (isset($data['defaultValueMeta'])) {
                $this->setDefaultValueMeta($data['defaultValueMeta']);
            }
            if (isset($data['meaningWhenMissing'])) {
                $this->setMeaningWhenMissing($data['meaningWhenMissing']);
            }
            if (isset($data['orderMeaning'])) {
                $this->setOrderMeaning($data['orderMeaning']);
            }
            if (isset($data['fixedBase64Binary'])) {
                $this->setFixedBase64Binary($data['fixedBase64Binary']);
            }
            if (isset($data['fixedBoolean'])) {
                $this->setFixedBoolean($data['fixedBoolean']);
            }
            if (isset($data['fixedCode'])) {
                $this->setFixedCode($data['fixedCode']);
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
            if (isset($data['fixedId'])) {
                $this->setFixedId($data['fixedId']);
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
            if (isset($data['fixedOid'])) {
                $this->setFixedOid($data['fixedOid']);
            }
            if (isset($data['fixedPositiveInt'])) {
                $this->setFixedPositiveInt($data['fixedPositiveInt']);
            }
            if (isset($data['fixedString'])) {
                $this->setFixedString($data['fixedString']);
            }
            if (isset($data['fixedTime'])) {
                $this->setFixedTime($data['fixedTime']);
            }
            if (isset($data['fixedUnsignedInt'])) {
                $this->setFixedUnsignedInt($data['fixedUnsignedInt']);
            }
            if (isset($data['fixedUri'])) {
                $this->setFixedUri($data['fixedUri']);
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
            if (isset($data['fixedCodeableConcept'])) {
                $this->setFixedCodeableConcept($data['fixedCodeableConcept']);
            }
            if (isset($data['fixedCoding'])) {
                $this->setFixedCoding($data['fixedCoding']);
            }
            if (isset($data['fixedContactPoint'])) {
                $this->setFixedContactPoint($data['fixedContactPoint']);
            }
            if (isset($data['fixedCount'])) {
                $this->setFixedCount($data['fixedCount']);
            }
            if (isset($data['fixedDistance'])) {
                $this->setFixedDistance($data['fixedDistance']);
            }
            if (isset($data['fixedDuration'])) {
                $this->setFixedDuration($data['fixedDuration']);
            }
            if (isset($data['fixedHumanName'])) {
                $this->setFixedHumanName($data['fixedHumanName']);
            }
            if (isset($data['fixedIdentifier'])) {
                $this->setFixedIdentifier($data['fixedIdentifier']);
            }
            if (isset($data['fixedMoney'])) {
                $this->setFixedMoney($data['fixedMoney']);
            }
            if (isset($data['fixedPeriod'])) {
                $this->setFixedPeriod($data['fixedPeriod']);
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
            if (isset($data['fixedSampledData'])) {
                $this->setFixedSampledData($data['fixedSampledData']);
            }
            if (isset($data['fixedSignature'])) {
                $this->setFixedSignature($data['fixedSignature']);
            }
            if (isset($data['fixedTiming'])) {
                $this->setFixedTiming($data['fixedTiming']);
            }
            if (isset($data['fixedMeta'])) {
                $this->setFixedMeta($data['fixedMeta']);
            }
            if (isset($data['patternBase64Binary'])) {
                $this->setPatternBase64Binary($data['patternBase64Binary']);
            }
            if (isset($data['patternBoolean'])) {
                $this->setPatternBoolean($data['patternBoolean']);
            }
            if (isset($data['patternCode'])) {
                $this->setPatternCode($data['patternCode']);
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
            if (isset($data['patternId'])) {
                $this->setPatternId($data['patternId']);
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
            if (isset($data['patternOid'])) {
                $this->setPatternOid($data['patternOid']);
            }
            if (isset($data['patternPositiveInt'])) {
                $this->setPatternPositiveInt($data['patternPositiveInt']);
            }
            if (isset($data['patternString'])) {
                $this->setPatternString($data['patternString']);
            }
            if (isset($data['patternTime'])) {
                $this->setPatternTime($data['patternTime']);
            }
            if (isset($data['patternUnsignedInt'])) {
                $this->setPatternUnsignedInt($data['patternUnsignedInt']);
            }
            if (isset($data['patternUri'])) {
                $this->setPatternUri($data['patternUri']);
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
            if (isset($data['patternCodeableConcept'])) {
                $this->setPatternCodeableConcept($data['patternCodeableConcept']);
            }
            if (isset($data['patternCoding'])) {
                $this->setPatternCoding($data['patternCoding']);
            }
            if (isset($data['patternContactPoint'])) {
                $this->setPatternContactPoint($data['patternContactPoint']);
            }
            if (isset($data['patternCount'])) {
                $this->setPatternCount($data['patternCount']);
            }
            if (isset($data['patternDistance'])) {
                $this->setPatternDistance($data['patternDistance']);
            }
            if (isset($data['patternDuration'])) {
                $this->setPatternDuration($data['patternDuration']);
            }
            if (isset($data['patternHumanName'])) {
                $this->setPatternHumanName($data['patternHumanName']);
            }
            if (isset($data['patternIdentifier'])) {
                $this->setPatternIdentifier($data['patternIdentifier']);
            }
            if (isset($data['patternMoney'])) {
                $this->setPatternMoney($data['patternMoney']);
            }
            if (isset($data['patternPeriod'])) {
                $this->setPatternPeriod($data['patternPeriod']);
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
            if (isset($data['patternSampledData'])) {
                $this->setPatternSampledData($data['patternSampledData']);
            }
            if (isset($data['patternSignature'])) {
                $this->setPatternSignature($data['patternSignature']);
            }
            if (isset($data['patternTiming'])) {
                $this->setPatternTiming($data['patternTiming']);
            }
            if (isset($data['patternMeta'])) {
                $this->setPatternMeta($data['patternMeta']);
            }
            if (isset($data['example'])) {
                if (is_array($data['example'])) {
                    foreach($data['example'] as $d) {
                        $this->addExample($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"example" must be array of objects or null, '.gettype($data['example']).' seen.');
                }
            }
            if (isset($data['minValueDate'])) {
                $this->setMinValueDate($data['minValueDate']);
            }
            if (isset($data['minValueDateTime'])) {
                $this->setMinValueDateTime($data['minValueDateTime']);
            }
            if (isset($data['minValueInstant'])) {
                $this->setMinValueInstant($data['minValueInstant']);
            }
            if (isset($data['minValueTime'])) {
                $this->setMinValueTime($data['minValueTime']);
            }
            if (isset($data['minValueDecimal'])) {
                $this->setMinValueDecimal($data['minValueDecimal']);
            }
            if (isset($data['minValueInteger'])) {
                $this->setMinValueInteger($data['minValueInteger']);
            }
            if (isset($data['minValuePositiveInt'])) {
                $this->setMinValuePositiveInt($data['minValuePositiveInt']);
            }
            if (isset($data['minValueUnsignedInt'])) {
                $this->setMinValueUnsignedInt($data['minValueUnsignedInt']);
            }
            if (isset($data['minValueQuantity'])) {
                $this->setMinValueQuantity($data['minValueQuantity']);
            }
            if (isset($data['maxValueDate'])) {
                $this->setMaxValueDate($data['maxValueDate']);
            }
            if (isset($data['maxValueDateTime'])) {
                $this->setMaxValueDateTime($data['maxValueDateTime']);
            }
            if (isset($data['maxValueInstant'])) {
                $this->setMaxValueInstant($data['maxValueInstant']);
            }
            if (isset($data['maxValueTime'])) {
                $this->setMaxValueTime($data['maxValueTime']);
            }
            if (isset($data['maxValueDecimal'])) {
                $this->setMaxValueDecimal($data['maxValueDecimal']);
            }
            if (isset($data['maxValueInteger'])) {
                $this->setMaxValueInteger($data['maxValueInteger']);
            }
            if (isset($data['maxValuePositiveInt'])) {
                $this->setMaxValuePositiveInt($data['maxValuePositiveInt']);
            }
            if (isset($data['maxValueUnsignedInt'])) {
                $this->setMaxValueUnsignedInt($data['maxValueUnsignedInt']);
            }
            if (isset($data['maxValueQuantity'])) {
                $this->setMaxValueQuantity($data['maxValueQuantity']);
            }
            if (isset($data['maxLength'])) {
                $this->setMaxLength($data['maxLength']);
            }
            if (isset($data['condition'])) {
                if (is_array($data['condition'])) {
                    foreach($data['condition'] as $d) {
                        $this->addCondition($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"condition" must be array of objects or null, '.gettype($data['condition']).' seen.');
                }
            }
            if (isset($data['constraint'])) {
                if (is_array($data['constraint'])) {
                    foreach($data['constraint'] as $d) {
                        $this->addConstraint($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"constraint" must be array of objects or null, '.gettype($data['constraint']).' seen.');
                }
            }
            if (isset($data['mustSupport'])) {
                $this->setMustSupport($data['mustSupport']);
            }
            if (isset($data['isModifier'])) {
                $this->setIsModifier($data['isModifier']);
            }
            if (isset($data['isSummary'])) {
                $this->setIsSummary($data['isSummary']);
            }
            if (isset($data['binding'])) {
                $this->setBinding($data['binding']);
            }
            if (isset($data['mapping'])) {
                if (is_array($data['mapping'])) {
                    foreach($data['mapping'] as $d) {
                        $this->addMapping($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"mapping" must be array of objects or null, '.gettype($data['mapping']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->path)) $json['path'] = $this->path;
        if (0 < count($this->representation)) {
            $json['representation'] = [];
            foreach($this->representation as $representation) {
                if (null !== $representation) $json['representation'][] = $representation;
            }
        }
        if (isset($this->sliceName)) $json['sliceName'] = $this->sliceName;
        if (isset($this->label)) $json['label'] = $this->label;
        if (0 < count($this->code)) {
            $json['code'] = [];
            foreach($this->code as $code) {
                if (null !== $code) $json['code'][] = $code;
            }
        }
        if (isset($this->slicing)) $json['slicing'] = $this->slicing;
        if (isset($this->short)) $json['short'] = $this->short;
        if (isset($this->definition)) $json['definition'] = $this->definition;
        if (isset($this->comment)) $json['comment'] = $this->comment;
        if (isset($this->requirements)) $json['requirements'] = $this->requirements;
        if (0 < count($this->alias)) {
            $json['alias'] = [];
            foreach($this->alias as $alias) {
                if (null !== $alias) $json['alias'][] = $alias;
            }
        }
        if (isset($this->min)) $json['min'] = $this->min;
        if (isset($this->max)) $json['max'] = $this->max;
        if (isset($this->base)) $json['base'] = $this->base;
        if (isset($this->contentReference)) $json['contentReference'] = $this->contentReference;
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                if (null !== $type) $json['type'][] = $type;
            }
        }
        if (isset($this->defaultValueBase64Binary)) $json['defaultValueBase64Binary'] = $this->defaultValueBase64Binary;
        if (isset($this->defaultValueBoolean)) $json['defaultValueBoolean'] = $this->defaultValueBoolean;
        if (isset($this->defaultValueCode)) $json['defaultValueCode'] = $this->defaultValueCode;
        if (isset($this->defaultValueDate)) $json['defaultValueDate'] = $this->defaultValueDate;
        if (isset($this->defaultValueDateTime)) $json['defaultValueDateTime'] = $this->defaultValueDateTime;
        if (isset($this->defaultValueDecimal)) $json['defaultValueDecimal'] = $this->defaultValueDecimal;
        if (isset($this->defaultValueId)) $json['defaultValueId'] = $this->defaultValueId;
        if (isset($this->defaultValueInstant)) $json['defaultValueInstant'] = $this->defaultValueInstant;
        if (isset($this->defaultValueInteger)) $json['defaultValueInteger'] = $this->defaultValueInteger;
        if (isset($this->defaultValueMarkdown)) $json['defaultValueMarkdown'] = $this->defaultValueMarkdown;
        if (isset($this->defaultValueOid)) $json['defaultValueOid'] = $this->defaultValueOid;
        if (isset($this->defaultValuePositiveInt)) $json['defaultValuePositiveInt'] = $this->defaultValuePositiveInt;
        if (isset($this->defaultValueString)) $json['defaultValueString'] = $this->defaultValueString;
        if (isset($this->defaultValueTime)) $json['defaultValueTime'] = $this->defaultValueTime;
        if (isset($this->defaultValueUnsignedInt)) $json['defaultValueUnsignedInt'] = $this->defaultValueUnsignedInt;
        if (isset($this->defaultValueUri)) $json['defaultValueUri'] = $this->defaultValueUri;
        if (isset($this->defaultValueAddress)) $json['defaultValueAddress'] = $this->defaultValueAddress;
        if (isset($this->defaultValueAge)) $json['defaultValueAge'] = $this->defaultValueAge;
        if (isset($this->defaultValueAnnotation)) $json['defaultValueAnnotation'] = $this->defaultValueAnnotation;
        if (isset($this->defaultValueAttachment)) $json['defaultValueAttachment'] = $this->defaultValueAttachment;
        if (isset($this->defaultValueCodeableConcept)) $json['defaultValueCodeableConcept'] = $this->defaultValueCodeableConcept;
        if (isset($this->defaultValueCoding)) $json['defaultValueCoding'] = $this->defaultValueCoding;
        if (isset($this->defaultValueContactPoint)) $json['defaultValueContactPoint'] = $this->defaultValueContactPoint;
        if (isset($this->defaultValueCount)) $json['defaultValueCount'] = $this->defaultValueCount;
        if (isset($this->defaultValueDistance)) $json['defaultValueDistance'] = $this->defaultValueDistance;
        if (isset($this->defaultValueDuration)) $json['defaultValueDuration'] = $this->defaultValueDuration;
        if (isset($this->defaultValueHumanName)) $json['defaultValueHumanName'] = $this->defaultValueHumanName;
        if (isset($this->defaultValueIdentifier)) $json['defaultValueIdentifier'] = $this->defaultValueIdentifier;
        if (isset($this->defaultValueMoney)) $json['defaultValueMoney'] = $this->defaultValueMoney;
        if (isset($this->defaultValuePeriod)) $json['defaultValuePeriod'] = $this->defaultValuePeriod;
        if (isset($this->defaultValueQuantity)) $json['defaultValueQuantity'] = $this->defaultValueQuantity;
        if (isset($this->defaultValueRange)) $json['defaultValueRange'] = $this->defaultValueRange;
        if (isset($this->defaultValueRatio)) $json['defaultValueRatio'] = $this->defaultValueRatio;
        if (isset($this->defaultValueReference)) $json['defaultValueReference'] = $this->defaultValueReference;
        if (isset($this->defaultValueSampledData)) $json['defaultValueSampledData'] = $this->defaultValueSampledData;
        if (isset($this->defaultValueSignature)) $json['defaultValueSignature'] = $this->defaultValueSignature;
        if (isset($this->defaultValueTiming)) $json['defaultValueTiming'] = $this->defaultValueTiming;
        if (isset($this->defaultValueMeta)) $json['defaultValueMeta'] = $this->defaultValueMeta;
        if (isset($this->meaningWhenMissing)) $json['meaningWhenMissing'] = $this->meaningWhenMissing;
        if (isset($this->orderMeaning)) $json['orderMeaning'] = $this->orderMeaning;
        if (isset($this->fixedBase64Binary)) $json['fixedBase64Binary'] = $this->fixedBase64Binary;
        if (isset($this->fixedBoolean)) $json['fixedBoolean'] = $this->fixedBoolean;
        if (isset($this->fixedCode)) $json['fixedCode'] = $this->fixedCode;
        if (isset($this->fixedDate)) $json['fixedDate'] = $this->fixedDate;
        if (isset($this->fixedDateTime)) $json['fixedDateTime'] = $this->fixedDateTime;
        if (isset($this->fixedDecimal)) $json['fixedDecimal'] = $this->fixedDecimal;
        if (isset($this->fixedId)) $json['fixedId'] = $this->fixedId;
        if (isset($this->fixedInstant)) $json['fixedInstant'] = $this->fixedInstant;
        if (isset($this->fixedInteger)) $json['fixedInteger'] = $this->fixedInteger;
        if (isset($this->fixedMarkdown)) $json['fixedMarkdown'] = $this->fixedMarkdown;
        if (isset($this->fixedOid)) $json['fixedOid'] = $this->fixedOid;
        if (isset($this->fixedPositiveInt)) $json['fixedPositiveInt'] = $this->fixedPositiveInt;
        if (isset($this->fixedString)) $json['fixedString'] = $this->fixedString;
        if (isset($this->fixedTime)) $json['fixedTime'] = $this->fixedTime;
        if (isset($this->fixedUnsignedInt)) $json['fixedUnsignedInt'] = $this->fixedUnsignedInt;
        if (isset($this->fixedUri)) $json['fixedUri'] = $this->fixedUri;
        if (isset($this->fixedAddress)) $json['fixedAddress'] = $this->fixedAddress;
        if (isset($this->fixedAge)) $json['fixedAge'] = $this->fixedAge;
        if (isset($this->fixedAnnotation)) $json['fixedAnnotation'] = $this->fixedAnnotation;
        if (isset($this->fixedAttachment)) $json['fixedAttachment'] = $this->fixedAttachment;
        if (isset($this->fixedCodeableConcept)) $json['fixedCodeableConcept'] = $this->fixedCodeableConcept;
        if (isset($this->fixedCoding)) $json['fixedCoding'] = $this->fixedCoding;
        if (isset($this->fixedContactPoint)) $json['fixedContactPoint'] = $this->fixedContactPoint;
        if (isset($this->fixedCount)) $json['fixedCount'] = $this->fixedCount;
        if (isset($this->fixedDistance)) $json['fixedDistance'] = $this->fixedDistance;
        if (isset($this->fixedDuration)) $json['fixedDuration'] = $this->fixedDuration;
        if (isset($this->fixedHumanName)) $json['fixedHumanName'] = $this->fixedHumanName;
        if (isset($this->fixedIdentifier)) $json['fixedIdentifier'] = $this->fixedIdentifier;
        if (isset($this->fixedMoney)) $json['fixedMoney'] = $this->fixedMoney;
        if (isset($this->fixedPeriod)) $json['fixedPeriod'] = $this->fixedPeriod;
        if (isset($this->fixedQuantity)) $json['fixedQuantity'] = $this->fixedQuantity;
        if (isset($this->fixedRange)) $json['fixedRange'] = $this->fixedRange;
        if (isset($this->fixedRatio)) $json['fixedRatio'] = $this->fixedRatio;
        if (isset($this->fixedReference)) $json['fixedReference'] = $this->fixedReference;
        if (isset($this->fixedSampledData)) $json['fixedSampledData'] = $this->fixedSampledData;
        if (isset($this->fixedSignature)) $json['fixedSignature'] = $this->fixedSignature;
        if (isset($this->fixedTiming)) $json['fixedTiming'] = $this->fixedTiming;
        if (isset($this->fixedMeta)) $json['fixedMeta'] = $this->fixedMeta;
        if (isset($this->patternBase64Binary)) $json['patternBase64Binary'] = $this->patternBase64Binary;
        if (isset($this->patternBoolean)) $json['patternBoolean'] = $this->patternBoolean;
        if (isset($this->patternCode)) $json['patternCode'] = $this->patternCode;
        if (isset($this->patternDate)) $json['patternDate'] = $this->patternDate;
        if (isset($this->patternDateTime)) $json['patternDateTime'] = $this->patternDateTime;
        if (isset($this->patternDecimal)) $json['patternDecimal'] = $this->patternDecimal;
        if (isset($this->patternId)) $json['patternId'] = $this->patternId;
        if (isset($this->patternInstant)) $json['patternInstant'] = $this->patternInstant;
        if (isset($this->patternInteger)) $json['patternInteger'] = $this->patternInteger;
        if (isset($this->patternMarkdown)) $json['patternMarkdown'] = $this->patternMarkdown;
        if (isset($this->patternOid)) $json['patternOid'] = $this->patternOid;
        if (isset($this->patternPositiveInt)) $json['patternPositiveInt'] = $this->patternPositiveInt;
        if (isset($this->patternString)) $json['patternString'] = $this->patternString;
        if (isset($this->patternTime)) $json['patternTime'] = $this->patternTime;
        if (isset($this->patternUnsignedInt)) $json['patternUnsignedInt'] = $this->patternUnsignedInt;
        if (isset($this->patternUri)) $json['patternUri'] = $this->patternUri;
        if (isset($this->patternAddress)) $json['patternAddress'] = $this->patternAddress;
        if (isset($this->patternAge)) $json['patternAge'] = $this->patternAge;
        if (isset($this->patternAnnotation)) $json['patternAnnotation'] = $this->patternAnnotation;
        if (isset($this->patternAttachment)) $json['patternAttachment'] = $this->patternAttachment;
        if (isset($this->patternCodeableConcept)) $json['patternCodeableConcept'] = $this->patternCodeableConcept;
        if (isset($this->patternCoding)) $json['patternCoding'] = $this->patternCoding;
        if (isset($this->patternContactPoint)) $json['patternContactPoint'] = $this->patternContactPoint;
        if (isset($this->patternCount)) $json['patternCount'] = $this->patternCount;
        if (isset($this->patternDistance)) $json['patternDistance'] = $this->patternDistance;
        if (isset($this->patternDuration)) $json['patternDuration'] = $this->patternDuration;
        if (isset($this->patternHumanName)) $json['patternHumanName'] = $this->patternHumanName;
        if (isset($this->patternIdentifier)) $json['patternIdentifier'] = $this->patternIdentifier;
        if (isset($this->patternMoney)) $json['patternMoney'] = $this->patternMoney;
        if (isset($this->patternPeriod)) $json['patternPeriod'] = $this->patternPeriod;
        if (isset($this->patternQuantity)) $json['patternQuantity'] = $this->patternQuantity;
        if (isset($this->patternRange)) $json['patternRange'] = $this->patternRange;
        if (isset($this->patternRatio)) $json['patternRatio'] = $this->patternRatio;
        if (isset($this->patternReference)) $json['patternReference'] = $this->patternReference;
        if (isset($this->patternSampledData)) $json['patternSampledData'] = $this->patternSampledData;
        if (isset($this->patternSignature)) $json['patternSignature'] = $this->patternSignature;
        if (isset($this->patternTiming)) $json['patternTiming'] = $this->patternTiming;
        if (isset($this->patternMeta)) $json['patternMeta'] = $this->patternMeta;
        if (0 < count($this->example)) {
            $json['example'] = [];
            foreach($this->example as $example) {
                if (null !== $example) $json['example'][] = $example;
            }
        }
        if (isset($this->minValueDate)) $json['minValueDate'] = $this->minValueDate;
        if (isset($this->minValueDateTime)) $json['minValueDateTime'] = $this->minValueDateTime;
        if (isset($this->minValueInstant)) $json['minValueInstant'] = $this->minValueInstant;
        if (isset($this->minValueTime)) $json['minValueTime'] = $this->minValueTime;
        if (isset($this->minValueDecimal)) $json['minValueDecimal'] = $this->minValueDecimal;
        if (isset($this->minValueInteger)) $json['minValueInteger'] = $this->minValueInteger;
        if (isset($this->minValuePositiveInt)) $json['minValuePositiveInt'] = $this->minValuePositiveInt;
        if (isset($this->minValueUnsignedInt)) $json['minValueUnsignedInt'] = $this->minValueUnsignedInt;
        if (isset($this->minValueQuantity)) $json['minValueQuantity'] = $this->minValueQuantity;
        if (isset($this->maxValueDate)) $json['maxValueDate'] = $this->maxValueDate;
        if (isset($this->maxValueDateTime)) $json['maxValueDateTime'] = $this->maxValueDateTime;
        if (isset($this->maxValueInstant)) $json['maxValueInstant'] = $this->maxValueInstant;
        if (isset($this->maxValueTime)) $json['maxValueTime'] = $this->maxValueTime;
        if (isset($this->maxValueDecimal)) $json['maxValueDecimal'] = $this->maxValueDecimal;
        if (isset($this->maxValueInteger)) $json['maxValueInteger'] = $this->maxValueInteger;
        if (isset($this->maxValuePositiveInt)) $json['maxValuePositiveInt'] = $this->maxValuePositiveInt;
        if (isset($this->maxValueUnsignedInt)) $json['maxValueUnsignedInt'] = $this->maxValueUnsignedInt;
        if (isset($this->maxValueQuantity)) $json['maxValueQuantity'] = $this->maxValueQuantity;
        if (isset($this->maxLength)) $json['maxLength'] = $this->maxLength;
        if (0 < count($this->condition)) {
            $json['condition'] = [];
            foreach($this->condition as $condition) {
                if (null !== $condition) $json['condition'][] = $condition;
            }
        }
        if (0 < count($this->constraint)) {
            $json['constraint'] = [];
            foreach($this->constraint as $constraint) {
                if (null !== $constraint) $json['constraint'][] = $constraint;
            }
        }
        if (isset($this->mustSupport)) $json['mustSupport'] = $this->mustSupport;
        if (isset($this->isModifier)) $json['isModifier'] = $this->isModifier;
        if (isset($this->isSummary)) $json['isSummary'] = $this->isSummary;
        if (isset($this->binding)) $json['binding'] = $this->binding;
        if (0 < count($this->mapping)) {
            $json['mapping'] = [];
            foreach($this->mapping as $mapping) {
                if (null !== $mapping) $json['mapping'][] = $mapping;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ElementDefinition xmlns="http://hl7.org/fhir"></ElementDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->path)) $this->path->xmlSerialize(true, $sxe->addChild('path'));
        if (0 < count($this->representation)) {
            foreach($this->representation as $representation) {
                $representation->xmlSerialize(true, $sxe->addChild('representation'));
            }
        }
        if (isset($this->sliceName)) $this->sliceName->xmlSerialize(true, $sxe->addChild('sliceName'));
        if (isset($this->label)) $this->label->xmlSerialize(true, $sxe->addChild('label'));
        if (0 < count($this->code)) {
            foreach($this->code as $code) {
                $code->xmlSerialize(true, $sxe->addChild('code'));
            }
        }
        if (isset($this->slicing)) $this->slicing->xmlSerialize(true, $sxe->addChild('slicing'));
        if (isset($this->short)) $this->short->xmlSerialize(true, $sxe->addChild('short'));
        if (isset($this->definition)) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if (isset($this->comment)) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if (isset($this->requirements)) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (0 < count($this->alias)) {
            foreach($this->alias as $alias) {
                $alias->xmlSerialize(true, $sxe->addChild('alias'));
            }
        }
        if (isset($this->min)) $this->min->xmlSerialize(true, $sxe->addChild('min'));
        if (isset($this->max)) $this->max->xmlSerialize(true, $sxe->addChild('max'));
        if (isset($this->base)) $this->base->xmlSerialize(true, $sxe->addChild('base'));
        if (isset($this->contentReference)) $this->contentReference->xmlSerialize(true, $sxe->addChild('contentReference'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (isset($this->defaultValueBase64Binary)) $this->defaultValueBase64Binary->xmlSerialize(true, $sxe->addChild('defaultValueBase64Binary'));
        if (isset($this->defaultValueBoolean)) $this->defaultValueBoolean->xmlSerialize(true, $sxe->addChild('defaultValueBoolean'));
        if (isset($this->defaultValueCode)) $this->defaultValueCode->xmlSerialize(true, $sxe->addChild('defaultValueCode'));
        if (isset($this->defaultValueDate)) $this->defaultValueDate->xmlSerialize(true, $sxe->addChild('defaultValueDate'));
        if (isset($this->defaultValueDateTime)) $this->defaultValueDateTime->xmlSerialize(true, $sxe->addChild('defaultValueDateTime'));
        if (isset($this->defaultValueDecimal)) $this->defaultValueDecimal->xmlSerialize(true, $sxe->addChild('defaultValueDecimal'));
        if (isset($this->defaultValueId)) $this->defaultValueId->xmlSerialize(true, $sxe->addChild('defaultValueId'));
        if (isset($this->defaultValueInstant)) $this->defaultValueInstant->xmlSerialize(true, $sxe->addChild('defaultValueInstant'));
        if (isset($this->defaultValueInteger)) $this->defaultValueInteger->xmlSerialize(true, $sxe->addChild('defaultValueInteger'));
        if (isset($this->defaultValueMarkdown)) $this->defaultValueMarkdown->xmlSerialize(true, $sxe->addChild('defaultValueMarkdown'));
        if (isset($this->defaultValueOid)) $this->defaultValueOid->xmlSerialize(true, $sxe->addChild('defaultValueOid'));
        if (isset($this->defaultValuePositiveInt)) $this->defaultValuePositiveInt->xmlSerialize(true, $sxe->addChild('defaultValuePositiveInt'));
        if (isset($this->defaultValueString)) $this->defaultValueString->xmlSerialize(true, $sxe->addChild('defaultValueString'));
        if (isset($this->defaultValueTime)) $this->defaultValueTime->xmlSerialize(true, $sxe->addChild('defaultValueTime'));
        if (isset($this->defaultValueUnsignedInt)) $this->defaultValueUnsignedInt->xmlSerialize(true, $sxe->addChild('defaultValueUnsignedInt'));
        if (isset($this->defaultValueUri)) $this->defaultValueUri->xmlSerialize(true, $sxe->addChild('defaultValueUri'));
        if (isset($this->defaultValueAddress)) $this->defaultValueAddress->xmlSerialize(true, $sxe->addChild('defaultValueAddress'));
        if (isset($this->defaultValueAge)) $this->defaultValueAge->xmlSerialize(true, $sxe->addChild('defaultValueAge'));
        if (isset($this->defaultValueAnnotation)) $this->defaultValueAnnotation->xmlSerialize(true, $sxe->addChild('defaultValueAnnotation'));
        if (isset($this->defaultValueAttachment)) $this->defaultValueAttachment->xmlSerialize(true, $sxe->addChild('defaultValueAttachment'));
        if (isset($this->defaultValueCodeableConcept)) $this->defaultValueCodeableConcept->xmlSerialize(true, $sxe->addChild('defaultValueCodeableConcept'));
        if (isset($this->defaultValueCoding)) $this->defaultValueCoding->xmlSerialize(true, $sxe->addChild('defaultValueCoding'));
        if (isset($this->defaultValueContactPoint)) $this->defaultValueContactPoint->xmlSerialize(true, $sxe->addChild('defaultValueContactPoint'));
        if (isset($this->defaultValueCount)) $this->defaultValueCount->xmlSerialize(true, $sxe->addChild('defaultValueCount'));
        if (isset($this->defaultValueDistance)) $this->defaultValueDistance->xmlSerialize(true, $sxe->addChild('defaultValueDistance'));
        if (isset($this->defaultValueDuration)) $this->defaultValueDuration->xmlSerialize(true, $sxe->addChild('defaultValueDuration'));
        if (isset($this->defaultValueHumanName)) $this->defaultValueHumanName->xmlSerialize(true, $sxe->addChild('defaultValueHumanName'));
        if (isset($this->defaultValueIdentifier)) $this->defaultValueIdentifier->xmlSerialize(true, $sxe->addChild('defaultValueIdentifier'));
        if (isset($this->defaultValueMoney)) $this->defaultValueMoney->xmlSerialize(true, $sxe->addChild('defaultValueMoney'));
        if (isset($this->defaultValuePeriod)) $this->defaultValuePeriod->xmlSerialize(true, $sxe->addChild('defaultValuePeriod'));
        if (isset($this->defaultValueQuantity)) $this->defaultValueQuantity->xmlSerialize(true, $sxe->addChild('defaultValueQuantity'));
        if (isset($this->defaultValueRange)) $this->defaultValueRange->xmlSerialize(true, $sxe->addChild('defaultValueRange'));
        if (isset($this->defaultValueRatio)) $this->defaultValueRatio->xmlSerialize(true, $sxe->addChild('defaultValueRatio'));
        if (isset($this->defaultValueReference)) $this->defaultValueReference->xmlSerialize(true, $sxe->addChild('defaultValueReference'));
        if (isset($this->defaultValueSampledData)) $this->defaultValueSampledData->xmlSerialize(true, $sxe->addChild('defaultValueSampledData'));
        if (isset($this->defaultValueSignature)) $this->defaultValueSignature->xmlSerialize(true, $sxe->addChild('defaultValueSignature'));
        if (isset($this->defaultValueTiming)) $this->defaultValueTiming->xmlSerialize(true, $sxe->addChild('defaultValueTiming'));
        if (isset($this->defaultValueMeta)) $this->defaultValueMeta->xmlSerialize(true, $sxe->addChild('defaultValueMeta'));
        if (isset($this->meaningWhenMissing)) $this->meaningWhenMissing->xmlSerialize(true, $sxe->addChild('meaningWhenMissing'));
        if (isset($this->orderMeaning)) $this->orderMeaning->xmlSerialize(true, $sxe->addChild('orderMeaning'));
        if (isset($this->fixedBase64Binary)) $this->fixedBase64Binary->xmlSerialize(true, $sxe->addChild('fixedBase64Binary'));
        if (isset($this->fixedBoolean)) $this->fixedBoolean->xmlSerialize(true, $sxe->addChild('fixedBoolean'));
        if (isset($this->fixedCode)) $this->fixedCode->xmlSerialize(true, $sxe->addChild('fixedCode'));
        if (isset($this->fixedDate)) $this->fixedDate->xmlSerialize(true, $sxe->addChild('fixedDate'));
        if (isset($this->fixedDateTime)) $this->fixedDateTime->xmlSerialize(true, $sxe->addChild('fixedDateTime'));
        if (isset($this->fixedDecimal)) $this->fixedDecimal->xmlSerialize(true, $sxe->addChild('fixedDecimal'));
        if (isset($this->fixedId)) $this->fixedId->xmlSerialize(true, $sxe->addChild('fixedId'));
        if (isset($this->fixedInstant)) $this->fixedInstant->xmlSerialize(true, $sxe->addChild('fixedInstant'));
        if (isset($this->fixedInteger)) $this->fixedInteger->xmlSerialize(true, $sxe->addChild('fixedInteger'));
        if (isset($this->fixedMarkdown)) $this->fixedMarkdown->xmlSerialize(true, $sxe->addChild('fixedMarkdown'));
        if (isset($this->fixedOid)) $this->fixedOid->xmlSerialize(true, $sxe->addChild('fixedOid'));
        if (isset($this->fixedPositiveInt)) $this->fixedPositiveInt->xmlSerialize(true, $sxe->addChild('fixedPositiveInt'));
        if (isset($this->fixedString)) $this->fixedString->xmlSerialize(true, $sxe->addChild('fixedString'));
        if (isset($this->fixedTime)) $this->fixedTime->xmlSerialize(true, $sxe->addChild('fixedTime'));
        if (isset($this->fixedUnsignedInt)) $this->fixedUnsignedInt->xmlSerialize(true, $sxe->addChild('fixedUnsignedInt'));
        if (isset($this->fixedUri)) $this->fixedUri->xmlSerialize(true, $sxe->addChild('fixedUri'));
        if (isset($this->fixedAddress)) $this->fixedAddress->xmlSerialize(true, $sxe->addChild('fixedAddress'));
        if (isset($this->fixedAge)) $this->fixedAge->xmlSerialize(true, $sxe->addChild('fixedAge'));
        if (isset($this->fixedAnnotation)) $this->fixedAnnotation->xmlSerialize(true, $sxe->addChild('fixedAnnotation'));
        if (isset($this->fixedAttachment)) $this->fixedAttachment->xmlSerialize(true, $sxe->addChild('fixedAttachment'));
        if (isset($this->fixedCodeableConcept)) $this->fixedCodeableConcept->xmlSerialize(true, $sxe->addChild('fixedCodeableConcept'));
        if (isset($this->fixedCoding)) $this->fixedCoding->xmlSerialize(true, $sxe->addChild('fixedCoding'));
        if (isset($this->fixedContactPoint)) $this->fixedContactPoint->xmlSerialize(true, $sxe->addChild('fixedContactPoint'));
        if (isset($this->fixedCount)) $this->fixedCount->xmlSerialize(true, $sxe->addChild('fixedCount'));
        if (isset($this->fixedDistance)) $this->fixedDistance->xmlSerialize(true, $sxe->addChild('fixedDistance'));
        if (isset($this->fixedDuration)) $this->fixedDuration->xmlSerialize(true, $sxe->addChild('fixedDuration'));
        if (isset($this->fixedHumanName)) $this->fixedHumanName->xmlSerialize(true, $sxe->addChild('fixedHumanName'));
        if (isset($this->fixedIdentifier)) $this->fixedIdentifier->xmlSerialize(true, $sxe->addChild('fixedIdentifier'));
        if (isset($this->fixedMoney)) $this->fixedMoney->xmlSerialize(true, $sxe->addChild('fixedMoney'));
        if (isset($this->fixedPeriod)) $this->fixedPeriod->xmlSerialize(true, $sxe->addChild('fixedPeriod'));
        if (isset($this->fixedQuantity)) $this->fixedQuantity->xmlSerialize(true, $sxe->addChild('fixedQuantity'));
        if (isset($this->fixedRange)) $this->fixedRange->xmlSerialize(true, $sxe->addChild('fixedRange'));
        if (isset($this->fixedRatio)) $this->fixedRatio->xmlSerialize(true, $sxe->addChild('fixedRatio'));
        if (isset($this->fixedReference)) $this->fixedReference->xmlSerialize(true, $sxe->addChild('fixedReference'));
        if (isset($this->fixedSampledData)) $this->fixedSampledData->xmlSerialize(true, $sxe->addChild('fixedSampledData'));
        if (isset($this->fixedSignature)) $this->fixedSignature->xmlSerialize(true, $sxe->addChild('fixedSignature'));
        if (isset($this->fixedTiming)) $this->fixedTiming->xmlSerialize(true, $sxe->addChild('fixedTiming'));
        if (isset($this->fixedMeta)) $this->fixedMeta->xmlSerialize(true, $sxe->addChild('fixedMeta'));
        if (isset($this->patternBase64Binary)) $this->patternBase64Binary->xmlSerialize(true, $sxe->addChild('patternBase64Binary'));
        if (isset($this->patternBoolean)) $this->patternBoolean->xmlSerialize(true, $sxe->addChild('patternBoolean'));
        if (isset($this->patternCode)) $this->patternCode->xmlSerialize(true, $sxe->addChild('patternCode'));
        if (isset($this->patternDate)) $this->patternDate->xmlSerialize(true, $sxe->addChild('patternDate'));
        if (isset($this->patternDateTime)) $this->patternDateTime->xmlSerialize(true, $sxe->addChild('patternDateTime'));
        if (isset($this->patternDecimal)) $this->patternDecimal->xmlSerialize(true, $sxe->addChild('patternDecimal'));
        if (isset($this->patternId)) $this->patternId->xmlSerialize(true, $sxe->addChild('patternId'));
        if (isset($this->patternInstant)) $this->patternInstant->xmlSerialize(true, $sxe->addChild('patternInstant'));
        if (isset($this->patternInteger)) $this->patternInteger->xmlSerialize(true, $sxe->addChild('patternInteger'));
        if (isset($this->patternMarkdown)) $this->patternMarkdown->xmlSerialize(true, $sxe->addChild('patternMarkdown'));
        if (isset($this->patternOid)) $this->patternOid->xmlSerialize(true, $sxe->addChild('patternOid'));
        if (isset($this->patternPositiveInt)) $this->patternPositiveInt->xmlSerialize(true, $sxe->addChild('patternPositiveInt'));
        if (isset($this->patternString)) $this->patternString->xmlSerialize(true, $sxe->addChild('patternString'));
        if (isset($this->patternTime)) $this->patternTime->xmlSerialize(true, $sxe->addChild('patternTime'));
        if (isset($this->patternUnsignedInt)) $this->patternUnsignedInt->xmlSerialize(true, $sxe->addChild('patternUnsignedInt'));
        if (isset($this->patternUri)) $this->patternUri->xmlSerialize(true, $sxe->addChild('patternUri'));
        if (isset($this->patternAddress)) $this->patternAddress->xmlSerialize(true, $sxe->addChild('patternAddress'));
        if (isset($this->patternAge)) $this->patternAge->xmlSerialize(true, $sxe->addChild('patternAge'));
        if (isset($this->patternAnnotation)) $this->patternAnnotation->xmlSerialize(true, $sxe->addChild('patternAnnotation'));
        if (isset($this->patternAttachment)) $this->patternAttachment->xmlSerialize(true, $sxe->addChild('patternAttachment'));
        if (isset($this->patternCodeableConcept)) $this->patternCodeableConcept->xmlSerialize(true, $sxe->addChild('patternCodeableConcept'));
        if (isset($this->patternCoding)) $this->patternCoding->xmlSerialize(true, $sxe->addChild('patternCoding'));
        if (isset($this->patternContactPoint)) $this->patternContactPoint->xmlSerialize(true, $sxe->addChild('patternContactPoint'));
        if (isset($this->patternCount)) $this->patternCount->xmlSerialize(true, $sxe->addChild('patternCount'));
        if (isset($this->patternDistance)) $this->patternDistance->xmlSerialize(true, $sxe->addChild('patternDistance'));
        if (isset($this->patternDuration)) $this->patternDuration->xmlSerialize(true, $sxe->addChild('patternDuration'));
        if (isset($this->patternHumanName)) $this->patternHumanName->xmlSerialize(true, $sxe->addChild('patternHumanName'));
        if (isset($this->patternIdentifier)) $this->patternIdentifier->xmlSerialize(true, $sxe->addChild('patternIdentifier'));
        if (isset($this->patternMoney)) $this->patternMoney->xmlSerialize(true, $sxe->addChild('patternMoney'));
        if (isset($this->patternPeriod)) $this->patternPeriod->xmlSerialize(true, $sxe->addChild('patternPeriod'));
        if (isset($this->patternQuantity)) $this->patternQuantity->xmlSerialize(true, $sxe->addChild('patternQuantity'));
        if (isset($this->patternRange)) $this->patternRange->xmlSerialize(true, $sxe->addChild('patternRange'));
        if (isset($this->patternRatio)) $this->patternRatio->xmlSerialize(true, $sxe->addChild('patternRatio'));
        if (isset($this->patternReference)) $this->patternReference->xmlSerialize(true, $sxe->addChild('patternReference'));
        if (isset($this->patternSampledData)) $this->patternSampledData->xmlSerialize(true, $sxe->addChild('patternSampledData'));
        if (isset($this->patternSignature)) $this->patternSignature->xmlSerialize(true, $sxe->addChild('patternSignature'));
        if (isset($this->patternTiming)) $this->patternTiming->xmlSerialize(true, $sxe->addChild('patternTiming'));
        if (isset($this->patternMeta)) $this->patternMeta->xmlSerialize(true, $sxe->addChild('patternMeta'));
        if (0 < count($this->example)) {
            foreach($this->example as $example) {
                $example->xmlSerialize(true, $sxe->addChild('example'));
            }
        }
        if (isset($this->minValueDate)) $this->minValueDate->xmlSerialize(true, $sxe->addChild('minValueDate'));
        if (isset($this->minValueDateTime)) $this->minValueDateTime->xmlSerialize(true, $sxe->addChild('minValueDateTime'));
        if (isset($this->minValueInstant)) $this->minValueInstant->xmlSerialize(true, $sxe->addChild('minValueInstant'));
        if (isset($this->minValueTime)) $this->minValueTime->xmlSerialize(true, $sxe->addChild('minValueTime'));
        if (isset($this->minValueDecimal)) $this->minValueDecimal->xmlSerialize(true, $sxe->addChild('minValueDecimal'));
        if (isset($this->minValueInteger)) $this->minValueInteger->xmlSerialize(true, $sxe->addChild('minValueInteger'));
        if (isset($this->minValuePositiveInt)) $this->minValuePositiveInt->xmlSerialize(true, $sxe->addChild('minValuePositiveInt'));
        if (isset($this->minValueUnsignedInt)) $this->minValueUnsignedInt->xmlSerialize(true, $sxe->addChild('minValueUnsignedInt'));
        if (isset($this->minValueQuantity)) $this->minValueQuantity->xmlSerialize(true, $sxe->addChild('minValueQuantity'));
        if (isset($this->maxValueDate)) $this->maxValueDate->xmlSerialize(true, $sxe->addChild('maxValueDate'));
        if (isset($this->maxValueDateTime)) $this->maxValueDateTime->xmlSerialize(true, $sxe->addChild('maxValueDateTime'));
        if (isset($this->maxValueInstant)) $this->maxValueInstant->xmlSerialize(true, $sxe->addChild('maxValueInstant'));
        if (isset($this->maxValueTime)) $this->maxValueTime->xmlSerialize(true, $sxe->addChild('maxValueTime'));
        if (isset($this->maxValueDecimal)) $this->maxValueDecimal->xmlSerialize(true, $sxe->addChild('maxValueDecimal'));
        if (isset($this->maxValueInteger)) $this->maxValueInteger->xmlSerialize(true, $sxe->addChild('maxValueInteger'));
        if (isset($this->maxValuePositiveInt)) $this->maxValuePositiveInt->xmlSerialize(true, $sxe->addChild('maxValuePositiveInt'));
        if (isset($this->maxValueUnsignedInt)) $this->maxValueUnsignedInt->xmlSerialize(true, $sxe->addChild('maxValueUnsignedInt'));
        if (isset($this->maxValueQuantity)) $this->maxValueQuantity->xmlSerialize(true, $sxe->addChild('maxValueQuantity'));
        if (isset($this->maxLength)) $this->maxLength->xmlSerialize(true, $sxe->addChild('maxLength'));
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
        if (isset($this->mustSupport)) $this->mustSupport->xmlSerialize(true, $sxe->addChild('mustSupport'));
        if (isset($this->isModifier)) $this->isModifier->xmlSerialize(true, $sxe->addChild('isModifier'));
        if (isset($this->isSummary)) $this->isSummary->xmlSerialize(true, $sxe->addChild('isSummary'));
        if (isset($this->binding)) $this->binding->xmlSerialize(true, $sxe->addChild('binding'));
        if (0 < count($this->mapping)) {
            foreach($this->mapping as $mapping) {
                $mapping->xmlSerialize(true, $sxe->addChild('mapping'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}