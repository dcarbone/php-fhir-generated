<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMeasureReportStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMeasureReportType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubmitDataUpdateType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * The MeasureReport resource contains the results of the calculation of a measure;
 * and optionally a reference to the resources involved in that calculation.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMeasureReport extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEASURE_REPORT;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_DATA_UPDATE_TYPE = 'dataUpdateType';
    public const FIELD_DATA_UPDATE_TYPE_EXT = '_dataUpdateType';
    public const FIELD_MEASURE = 'measure';
    public const FIELD_MEASURE_EXT = '_measure';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_REPORTER = 'reporter';
    public const FIELD_REPORTING_VENDOR = 'reportingVendor';
    public const FIELD_LOCATION = 'location';
    public const FIELD_PERIOD = 'period';
    public const FIELD_INPUT_PARAMETERS = 'inputParameters';
    public const FIELD_SCORING = 'scoring';
    public const FIELD_IMPROVEMENT_NOTATION = 'improvementNotation';
    public const FIELD_GROUP = 'group';
    public const FIELD_SUPPLEMENTAL_DATA = 'supplementalData';
    public const FIELD_EVALUATED_RESOURCE = 'evaluatedResource';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this MeasureReport when it is
     * represented in other formats or referenced in a specification, model, design or
     * an instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * The status of the measure report.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The MeasureReport status. No data will be available until the MeasureReport
     * status is complete.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMeasureReportStatus 
     */
    protected FHIRMeasureReportStatus $status;
    /**
     * The type of the measure report.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of measure report. This may be an individual report, which provides the
     * score for the measure for an individual member of the population; a
     * subject-listing, which returns the list of members that meet the various
     * criteria in the measure; a summary report, which returns a population count for
     * each of the criteria in the measure; or a data-collection, which enables the
     * MeasureReport to be used to exchange the data-of-interest for a quality measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMeasureReportType 
     */
    protected FHIRMeasureReportType $type;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the data submitted in a data-exchange report represents a
     * snapshot or incremental update. A snapshot update replaces all previously
     * submitted data for the receiver, whereas an incremental update represents only
     * updated and/or changed data and should be applied as a differential update to
     * the existing submitted data for the receiver.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubmitDataUpdateType 
     */
    protected FHIRSubmitDataUpdateType $dataUpdateType;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to the Measure that was calculated to produce this report.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $measure;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $subject;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this measure was calculated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization that is reporting the data.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $reporter;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the vendor who queried the data, calculated results and/or
     * generated the report. The ‘reporting vendor’ is intended to represent the
     * submitting entity when it is not the same as the reporting entity. This
     * extension is used when the Receiver is interested in getting vendor information
     * in the report.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $reportingVendor;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the location for which the data is being reported.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $location;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reporting period for which the report was calculated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $period;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Parameters resource (typically represented using a contained
     * resource) that represents any input parameters that were provided to the
     * operation that generated the report.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $inputParameters;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the calculation is performed for the measure, including
     * proportion, ratio, continuous-variable, and cohort. The value set is extensible,
     * allowing additional measure scoring types to be represented. It is expected to
     * be the same as the scoring element on the referenced Measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $scoring;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether improvement in the measure is noted by an increase or decrease in the
     * measure score.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $improvementNotation;
    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup[] 
     */
    protected array $group;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Resource that represents additional information collected for
     * the report. If the value of the supplemental data is not a Resource (i.e.
     * evaluating the supplementalData expression for this case in the measure results
     * in a value that is not a FHIR Resource), it is reported as a reference to a
     * contained Observation resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $supplementalData;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Evaluated resources are used to capture what data was involved in the
     * calculation of a measure. This usage is only allowed for individual reports to
     * ensure that the size of the MeasureReport resource is bounded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $evaluatedResource;

    /** Default validation map for fields in type MeasureReport */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PERIOD => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMeasureReport Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMeasureReportStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMeasureReportType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubmitDataUpdateType $dataUpdateType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $measure
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $date
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $reporter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $reportingVendor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $location
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $inputParameters
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $scoring
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $improvementNotation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup[] $group
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $supplementalData
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $evaluatedResource
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRMeasureReportStatus $status = null,
                                null|FHIRMeasureReportType $type = null,
                                null|FHIRSubmitDataUpdateType $dataUpdateType = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $measure = null,
                                null|FHIRReference $subject = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|FHIRReference $reporter = null,
                                null|FHIRReference $reportingVendor = null,
                                null|FHIRReference $location = null,
                                null|FHIRPeriod $period = null,
                                null|FHIRReference $inputParameters = null,
                                null|FHIRCodeableConcept $scoring = null,
                                null|FHIRCodeableConcept $improvementNotation = null,
                                null|iterable $group = null,
                                null|iterable $supplementalData = null,
                                null|iterable $evaluatedResource = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $dataUpdateType) {
            $this->setDataUpdateType($dataUpdateType);
        }
        if (null !== $measure) {
            $this->setMeasure($measure);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $reporter) {
            $this->setReporter($reporter);
        }
        if (null !== $reportingVendor) {
            $this->setReportingVendor($reportingVendor);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $period) {
            $this->setPeriod($period);
        }
        if (null !== $inputParameters) {
            $this->setInputParameters($inputParameters);
        }
        if (null !== $scoring) {
            $this->setScoring($scoring);
        }
        if (null !== $improvementNotation) {
            $this->setImprovementNotation($improvementNotation);
        }
        if (null !== $group) {
            $this->setGroup(...$group);
        }
        if (null !== $supplementalData) {
            $this->setSupplementalData(...$supplementalData);
        }
        if (null !== $evaluatedResource) {
            $this->setEvaluatedResource(...$evaluatedResource);
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this MeasureReport when it is
     * represented in other formats or referenced in a specification, model, design or
     * an instance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this MeasureReport when it is
     * represented in other formats or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this MeasureReport when it is
     * represented in other formats or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The status of the measure report.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The MeasureReport status. No data will be available until the MeasureReport
     * status is complete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMeasureReportStatus
     */
    public function getStatus(): null|FHIRMeasureReportStatus
    {
        return $this->status ?? null;
    }

    /**
     * The status of the measure report.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The MeasureReport status. No data will be available until the MeasureReport
     * status is complete.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMeasureReportStatus $status
     * @return static
     */
    public function setStatus(null|FHIRMeasureReportStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The type of the measure report.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of measure report. This may be an individual report, which provides the
     * score for the measure for an individual member of the population; a
     * subject-listing, which returns the list of members that meet the various
     * criteria in the measure; a summary report, which returns a population count for
     * each of the criteria in the measure; or a data-collection, which enables the
     * MeasureReport to be used to exchange the data-of-interest for a quality measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMeasureReportType
     */
    public function getType(): null|FHIRMeasureReportType
    {
        return $this->type ?? null;
    }

    /**
     * The type of the measure report.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of measure report. This may be an individual report, which provides the
     * score for the measure for an individual member of the population; a
     * subject-listing, which returns the list of members that meet the various
     * criteria in the measure; a summary report, which returns a population count for
     * each of the criteria in the measure; or a data-collection, which enables the
     * MeasureReport to be used to exchange the data-of-interest for a quality measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMeasureReportType $type
     * @return static
     */
    public function setType(null|FHIRMeasureReportType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the data submitted in a data-exchange report represents a
     * snapshot or incremental update. A snapshot update replaces all previously
     * submitted data for the receiver, whereas an incremental update represents only
     * updated and/or changed data and should be applied as a differential update to
     * the existing submitted data for the receiver.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubmitDataUpdateType
     */
    public function getDataUpdateType(): null|FHIRSubmitDataUpdateType
    {
        return $this->dataUpdateType ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the data submitted in a data-exchange report represents a
     * snapshot or incremental update. A snapshot update replaces all previously
     * submitted data for the receiver, whereas an incremental update represents only
     * updated and/or changed data and should be applied as a differential update to
     * the existing submitted data for the receiver.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubmitDataUpdateType $dataUpdateType
     * @return static
     */
    public function setDataUpdateType(null|FHIRSubmitDataUpdateType $dataUpdateType): self
    {
        if (null === $dataUpdateType) {
            unset($this->dataUpdateType);
            return $this;
        }
        $this->dataUpdateType = $dataUpdateType;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to the Measure that was calculated to produce this report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getMeasure(): null|FHIRCanonical
    {
        return $this->measure ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to the Measure that was calculated to produce this report.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $measure
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMeasure(null|string|FHIRCanonicalPrimitive|FHIRCanonical $measure,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $measure) {
            unset($this->measure);
            return $this;
        }
        if (!($measure instanceof FHIRCanonical)) {
            $measure = new FHIRCanonical(value: $measure);
        }
        if (null !== $valueXMLLocation) {
            $measure->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $measure->_getValueXMLLocation()) {
            $measure->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->measure = $measure;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject): self
    {
        if (null === $subject) {
            unset($this->subject);
            return $this;
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this measure was calculated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this measure was calculated.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $date
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime(value: $date);
        }
        if (null !== $valueXMLLocation) {
            $date->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $date->_getValueXMLLocation()) {
            $date->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization that is reporting the data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getReporter(): null|FHIRReference
    {
        return $this->reporter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or organization that is reporting the data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $reporter
     * @return static
     */
    public function setReporter(null|FHIRReference $reporter): self
    {
        if (null === $reporter) {
            unset($this->reporter);
            return $this;
        }
        $this->reporter = $reporter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the vendor who queried the data, calculated results and/or
     * generated the report. The ‘reporting vendor’ is intended to represent the
     * submitting entity when it is not the same as the reporting entity. This
     * extension is used when the Receiver is interested in getting vendor information
     * in the report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getReportingVendor(): null|FHIRReference
    {
        return $this->reportingVendor ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the vendor who queried the data, calculated results and/or
     * generated the report. The ‘reporting vendor’ is intended to represent the
     * submitting entity when it is not the same as the reporting entity. This
     * extension is used when the Receiver is interested in getting vendor information
     * in the report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $reportingVendor
     * @return static
     */
    public function setReportingVendor(null|FHIRReference $reportingVendor): self
    {
        if (null === $reportingVendor) {
            unset($this->reportingVendor);
            return $this;
        }
        $this->reportingVendor = $reportingVendor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the location for which the data is being reported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the location for which the data is being reported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reporting period for which the report was calculated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reporting period for which the report was calculated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        $this->period = $period;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Parameters resource (typically represented using a contained
     * resource) that represents any input parameters that were provided to the
     * operation that generated the report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getInputParameters(): null|FHIRReference
    {
        return $this->inputParameters ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Parameters resource (typically represented using a contained
     * resource) that represents any input parameters that were provided to the
     * operation that generated the report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $inputParameters
     * @return static
     */
    public function setInputParameters(null|FHIRReference $inputParameters): self
    {
        if (null === $inputParameters) {
            unset($this->inputParameters);
            return $this;
        }
        $this->inputParameters = $inputParameters;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the calculation is performed for the measure, including
     * proportion, ratio, continuous-variable, and cohort. The value set is extensible,
     * allowing additional measure scoring types to be represented. It is expected to
     * be the same as the scoring element on the referenced Measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getScoring(): null|FHIRCodeableConcept
    {
        return $this->scoring ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the calculation is performed for the measure, including
     * proportion, ratio, continuous-variable, and cohort. The value set is extensible,
     * allowing additional measure scoring types to be represented. It is expected to
     * be the same as the scoring element on the referenced Measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $scoring
     * @return static
     */
    public function setScoring(null|FHIRCodeableConcept $scoring): self
    {
        if (null === $scoring) {
            unset($this->scoring);
            return $this;
        }
        $this->scoring = $scoring;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether improvement in the measure is noted by an increase or decrease in the
     * measure score.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getImprovementNotation(): null|FHIRCodeableConcept
    {
        return $this->improvementNotation ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether improvement in the measure is noted by an increase or decrease in the
     * measure score.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $improvementNotation
     * @return static
     */
    public function setImprovementNotation(null|FHIRCodeableConcept $improvementNotation): self
    {
        if (null === $improvementNotation) {
            unset($this->improvementNotation);
            return $this;
        }
        $this->improvementNotation = $improvementNotation;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup[]
     */
    public function getGroup(): array
    {
        return $this->group ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup>
     */
    public function getGroupIterator(): iterable
    {
        if (!isset($this->group) || [] === $this->group) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->group);
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup $group
     * @return static
     */
    public function addGroup(FHIRMeasureReportGroup $group): self
    {
        if (!isset($this->group)) {
            $this->group = [];
        }
        $this->group[] = $group;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup ...$group
     * @return static
     */
    public function setGroup(FHIRMeasureReportGroup ...$group): self
    {
        $this->group = $group;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Resource that represents additional information collected for
     * the report. If the value of the supplemental data is not a Resource (i.e.
     * evaluating the supplementalData expression for this case in the measure results
     * in a value that is not a FHIR Resource), it is reported as a reference to a
     * contained Observation resource.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSupplementalData(): array
    {
        return $this->supplementalData ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSupplementalDataIterator(): iterable
    {
        if (!isset($this->supplementalData) || [] === $this->supplementalData) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supplementalData);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Resource that represents additional information collected for
     * the report. If the value of the supplemental data is not a Resource (i.e.
     * evaluating the supplementalData expression for this case in the measure results
     * in a value that is not a FHIR Resource), it is reported as a reference to a
     * contained Observation resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $supplementalData
     * @return static
     */
    public function addSupplementalData(FHIRReference $supplementalData): self
    {
        if (!isset($this->supplementalData)) {
            $this->supplementalData = [];
        }
        $this->supplementalData[] = $supplementalData;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Resource that represents additional information collected for
     * the report. If the value of the supplemental data is not a Resource (i.e.
     * evaluating the supplementalData expression for this case in the measure results
     * in a value that is not a FHIR Resource), it is reported as a reference to a
     * contained Observation resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$supplementalData
     * @return static
     */
    public function setSupplementalData(FHIRReference ...$supplementalData): self
    {
        $this->supplementalData = $supplementalData;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Evaluated resources are used to capture what data was involved in the
     * calculation of a measure. This usage is only allowed for individual reports to
     * ensure that the size of the MeasureReport resource is bounded.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getEvaluatedResource(): array
    {
        return $this->evaluatedResource ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getEvaluatedResourceIterator(): iterable
    {
        if (!isset($this->evaluatedResource) || [] === $this->evaluatedResource) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->evaluatedResource);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Evaluated resources are used to capture what data was involved in the
     * calculation of a measure. This usage is only allowed for individual reports to
     * ensure that the size of the MeasureReport resource is bounded.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $evaluatedResource
     * @return static
     */
    public function addEvaluatedResource(FHIRReference $evaluatedResource): self
    {
        if (!isset($this->evaluatedResource)) {
            $this->evaluatedResource = [];
        }
        $this->evaluatedResource[] = $evaluatedResource;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Evaluated resources are used to capture what data was involved in the
     * calculation of a measure. This usage is only allowed for individual reports to
     * ensure that the size of the MeasureReport resource is bounded.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$evaluatedResource
     * @return static
     */
    public function setEvaluatedResource(FHIRReference ...$evaluatedResource): self
    {
        $this->evaluatedResource = $evaluatedResource;
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_UPDATE_TYPE])) {
            $v = $this->getDataUpdateType();
            foreach($validationRules[self::FIELD_DATA_UPDATE_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_UPDATE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_UPDATE_TYPE])) {
                        $errs[self::FIELD_DATA_UPDATE_TYPE] = [];
                    }
                    $errs[self::FIELD_DATA_UPDATE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASURE])) {
            $v = $this->getMeasure();
            foreach($validationRules[self::FIELD_MEASURE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASURE])) {
                        $errs[self::FIELD_MEASURE] = [];
                    }
                    $errs[self::FIELD_MEASURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORTER])) {
            $v = $this->getReporter();
            foreach($validationRules[self::FIELD_REPORTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REPORTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORTER])) {
                        $errs[self::FIELD_REPORTER] = [];
                    }
                    $errs[self::FIELD_REPORTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORTING_VENDOR])) {
            $v = $this->getReportingVendor();
            foreach($validationRules[self::FIELD_REPORTING_VENDOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REPORTING_VENDOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORTING_VENDOR])) {
                        $errs[self::FIELD_REPORTING_VENDOR] = [];
                    }
                    $errs[self::FIELD_REPORTING_VENDOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INPUT_PARAMETERS])) {
            $v = $this->getInputParameters();
            foreach($validationRules[self::FIELD_INPUT_PARAMETERS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INPUT_PARAMETERS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INPUT_PARAMETERS])) {
                        $errs[self::FIELD_INPUT_PARAMETERS] = [];
                    }
                    $errs[self::FIELD_INPUT_PARAMETERS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCORING])) {
            $v = $this->getScoring();
            foreach($validationRules[self::FIELD_SCORING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SCORING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCORING])) {
                        $errs[self::FIELD_SCORING] = [];
                    }
                    $errs[self::FIELD_SCORING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPROVEMENT_NOTATION])) {
            $v = $this->getImprovementNotation();
            foreach($validationRules[self::FIELD_IMPROVEMENT_NOTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPROVEMENT_NOTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPROVEMENT_NOTATION])) {
                        $errs[self::FIELD_IMPROVEMENT_NOTATION] = [];
                    }
                    $errs[self::FIELD_IMPROVEMENT_NOTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP])) {
            $v = $this->getGroup();
            foreach($validationRules[self::FIELD_GROUP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP])) {
                        $errs[self::FIELD_GROUP] = [];
                    }
                    $errs[self::FIELD_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPLEMENTAL_DATA])) {
            $v = $this->getSupplementalData();
            foreach($validationRules[self::FIELD_SUPPLEMENTAL_DATA] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUPPLEMENTAL_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPLEMENTAL_DATA])) {
                        $errs[self::FIELD_SUPPLEMENTAL_DATA] = [];
                    }
                    $errs[self::FIELD_SUPPLEMENTAL_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVALUATED_RESOURCE])) {
            $v = $this->getEvaluatedResource();
            foreach($validationRules[self::FIELD_EVALUATED_RESOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EVALUATED_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVALUATED_RESOURCE])) {
                        $errs[self::FIELD_EVALUATED_RESOURCE] = [];
                    }
                    $errs[self::FIELD_EVALUATED_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMeasureReport $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasureReport)) {
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
            if (self::FIELD_ID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRMeasureReportStatus(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRMeasureReportStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRMeasureReportType(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setType(FHIRMeasureReportType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA_UPDATE_TYPE === $childName) {
                $v = new FHIRSubmitDataUpdateType(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDataUpdateType(FHIRSubmitDataUpdateType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MEASURE === $childName) {
                $v = new FHIRCanonical(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMeasure(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBJECT === $childName) {
                $v = new FHIRReference();
                $type->setSubject(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REPORTER === $childName) {
                $v = new FHIRReference();
                $type->setReporter(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REPORTING_VENDOR === $childName) {
                $v = new FHIRReference();
                $type->setReportingVendor(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LOCATION === $childName) {
                $v = new FHIRReference();
                $type->setLocation(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INPUT_PARAMETERS === $childName) {
                $v = new FHIRReference();
                $type->setInputParameters(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SCORING === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setScoring(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPROVEMENT_NOTATION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setImprovementNotation(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GROUP === $childName) {
                $v = new FHIRMeasureReportGroup();
                $type->addGroup(FHIRMeasureReportGroup::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUPPLEMENTAL_DATA === $childName) {
                $v = new FHIRReference();
                $type->addSupplementalData(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EVALUATED_RESOURCE === $childName) {
                $v = new FHIRReference();
                $type->addEvaluatedResource(FHIRReference::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MEASURE])) {
            $pt = $type->getMeasure();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_MEASURE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMeasure(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_MEASURE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DATE],
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
            $xw->openRootNode('MeasureReport', $this->_getSourceXMLNS());
        }
        if (isset($this->measure) && $this->measure->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MEASURE, $this->measure->getValue()?->_getFormattedValue());
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataUpdateType)) {
            $xw->startElement(self::FIELD_DATA_UPDATE_TYPE);
            $this->dataUpdateType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->measure) && $this->measure->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MEASURE);
            $this->measure->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reporter)) {
            $xw->startElement(self::FIELD_REPORTER);
            $this->reporter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reportingVendor)) {
            $xw->startElement(self::FIELD_REPORTING_VENDOR);
            $this->reportingVendor->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->inputParameters)) {
            $xw->startElement(self::FIELD_INPUT_PARAMETERS);
            $this->inputParameters->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->scoring)) {
            $xw->startElement(self::FIELD_SCORING);
            $this->scoring->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->improvementNotation)) {
            $xw->startElement(self::FIELD_IMPROVEMENT_NOTATION);
            $this->improvementNotation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->group)) {
            foreach ($this->group as $v) {
                $xw->startElement(self::FIELD_GROUP);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->supplementalData)) {
            foreach ($this->supplementalData as $v) {
                $xw->startElement(self::FIELD_SUPPLEMENTAL_DATA);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->evaluatedResource)) {
            foreach ($this->evaluatedResource as $v) {
                $xw->startElement(self::FIELD_EVALUATED_RESOURCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMeasureReport $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasureReport)) {
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
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMeasureReportStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRMeasureReportStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRMeasureReportStatus([FHIRMeasureReportStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRMeasureReportStatus($ext));
            } else {
                $type->setStatus(new FHIRMeasureReportStatus(null));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || isset($json[self::FIELD_TYPE_EXT]) || array_key_exists(self::FIELD_TYPE, $json) || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_TYPE_EXT]) && is_array($json[self::FIELD_TYPE_EXT])) ? $json[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMeasureReportType) {
                    $type->setType($value);
                } else if (is_array($value)) {
                    $type->setType(new FHIRMeasureReportType(array_merge($ext, $value)));
                } else {
                    $type->setType(new FHIRMeasureReportType([FHIRMeasureReportType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setType(new FHIRMeasureReportType($ext));
            } else {
                $type->setType(new FHIRMeasureReportType(null));
            }
        }
        if (isset($json[self::FIELD_DATA_UPDATE_TYPE]) || isset($json[self::FIELD_DATA_UPDATE_TYPE_EXT]) || array_key_exists(self::FIELD_DATA_UPDATE_TYPE, $json) || array_key_exists(self::FIELD_DATA_UPDATE_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_DATA_UPDATE_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_DATA_UPDATE_TYPE_EXT]) && is_array($json[self::FIELD_DATA_UPDATE_TYPE_EXT])) ? $json[self::FIELD_DATA_UPDATE_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSubmitDataUpdateType) {
                    $type->setDataUpdateType($value);
                } else if (is_array($value)) {
                    $type->setDataUpdateType(new FHIRSubmitDataUpdateType(array_merge($ext, $value)));
                } else {
                    $type->setDataUpdateType(new FHIRSubmitDataUpdateType([FHIRSubmitDataUpdateType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDataUpdateType(new FHIRSubmitDataUpdateType($ext));
            } else {
                $type->setDataUpdateType(new FHIRSubmitDataUpdateType(null));
            }
        }
        if (isset($json[self::FIELD_MEASURE]) || isset($json[self::FIELD_MEASURE_EXT]) || array_key_exists(self::FIELD_MEASURE, $json) || array_key_exists(self::FIELD_MEASURE_EXT, $json)) {
            $value = $json[self::FIELD_MEASURE] ?? null;
            $ext = (isset($json[self::FIELD_MEASURE_EXT]) && is_array($json[self::FIELD_MEASURE_EXT])) ? $json[self::FIELD_MEASURE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setMeasure($value);
                } else if (is_array($value)) {
                    $type->setMeasure(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setMeasure(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMeasure(new FHIRCanonical($ext));
            } else {
                $type->setMeasure(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            if ($json[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $type->setSubject($json[self::FIELD_SUBJECT]);
            } else {
                $type->setSubject(new FHIRReference($json[self::FIELD_SUBJECT]));
            }
        }
        if (isset($json[self::FIELD_DATE]) || isset($json[self::FIELD_DATE_EXT]) || array_key_exists(self::FIELD_DATE, $json) || array_key_exists(self::FIELD_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATE] ?? null;
            $ext = (isset($json[self::FIELD_DATE_EXT]) && is_array($json[self::FIELD_DATE_EXT])) ? $json[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setDate($value);
                } else if (is_array($value)) {
                    $type->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDate(new FHIRDateTime($ext));
            } else {
                $type->setDate(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_REPORTER]) || array_key_exists(self::FIELD_REPORTER, $json)) {
            if ($json[self::FIELD_REPORTER] instanceof FHIRReference) {
                $type->setReporter($json[self::FIELD_REPORTER]);
            } else {
                $type->setReporter(new FHIRReference($json[self::FIELD_REPORTER]));
            }
        }
        if (isset($json[self::FIELD_REPORTING_VENDOR]) || array_key_exists(self::FIELD_REPORTING_VENDOR, $json)) {
            if ($json[self::FIELD_REPORTING_VENDOR] instanceof FHIRReference) {
                $type->setReportingVendor($json[self::FIELD_REPORTING_VENDOR]);
            } else {
                $type->setReportingVendor(new FHIRReference($json[self::FIELD_REPORTING_VENDOR]));
            }
        }
        if (isset($json[self::FIELD_LOCATION]) || array_key_exists(self::FIELD_LOCATION, $json)) {
            if ($json[self::FIELD_LOCATION] instanceof FHIRReference) {
                $type->setLocation($json[self::FIELD_LOCATION]);
            } else {
                $type->setLocation(new FHIRReference($json[self::FIELD_LOCATION]));
            }
        }
        if (isset($json[self::FIELD_PERIOD]) || array_key_exists(self::FIELD_PERIOD, $json)) {
            if ($json[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $type->setPeriod($json[self::FIELD_PERIOD]);
            } else {
                $type->setPeriod(new FHIRPeriod($json[self::FIELD_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_INPUT_PARAMETERS]) || array_key_exists(self::FIELD_INPUT_PARAMETERS, $json)) {
            if ($json[self::FIELD_INPUT_PARAMETERS] instanceof FHIRReference) {
                $type->setInputParameters($json[self::FIELD_INPUT_PARAMETERS]);
            } else {
                $type->setInputParameters(new FHIRReference($json[self::FIELD_INPUT_PARAMETERS]));
            }
        }
        if (isset($json[self::FIELD_SCORING]) || array_key_exists(self::FIELD_SCORING, $json)) {
            if ($json[self::FIELD_SCORING] instanceof FHIRCodeableConcept) {
                $type->setScoring($json[self::FIELD_SCORING]);
            } else {
                $type->setScoring(new FHIRCodeableConcept($json[self::FIELD_SCORING]));
            }
        }
        if (isset($json[self::FIELD_IMPROVEMENT_NOTATION]) || array_key_exists(self::FIELD_IMPROVEMENT_NOTATION, $json)) {
            if ($json[self::FIELD_IMPROVEMENT_NOTATION] instanceof FHIRCodeableConcept) {
                $type->setImprovementNotation($json[self::FIELD_IMPROVEMENT_NOTATION]);
            } else {
                $type->setImprovementNotation(new FHIRCodeableConcept($json[self::FIELD_IMPROVEMENT_NOTATION]));
            }
        }
        if (isset($json[self::FIELD_GROUP]) || array_key_exists(self::FIELD_GROUP, $json)) {
            if (is_array($json[self::FIELD_GROUP])) {
                foreach($json[self::FIELD_GROUP] as $v) {
                    if ($v instanceof FHIRMeasureReportGroup) {
                        $type->addGroup($v);
                    } else {
                        $type->addGroup(new FHIRMeasureReportGroup($v));
                    }
                }
            } elseif ($json[self::FIELD_GROUP] instanceof FHIRMeasureReportGroup) {
                $type->addGroup($json[self::FIELD_GROUP]);
            } else {
                $type->addGroup(new FHIRMeasureReportGroup($json[self::FIELD_GROUP]));
            }
        }
        if (isset($json[self::FIELD_SUPPLEMENTAL_DATA]) || array_key_exists(self::FIELD_SUPPLEMENTAL_DATA, $json)) {
            if (is_array($json[self::FIELD_SUPPLEMENTAL_DATA])) {
                foreach($json[self::FIELD_SUPPLEMENTAL_DATA] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addSupplementalData($v);
                    } else {
                        $type->addSupplementalData(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_SUPPLEMENTAL_DATA] instanceof FHIRReference) {
                $type->addSupplementalData($json[self::FIELD_SUPPLEMENTAL_DATA]);
            } else {
                $type->addSupplementalData(new FHIRReference($json[self::FIELD_SUPPLEMENTAL_DATA]));
            }
        }
        if (isset($json[self::FIELD_EVALUATED_RESOURCE]) || array_key_exists(self::FIELD_EVALUATED_RESOURCE, $json)) {
            if (is_array($json[self::FIELD_EVALUATED_RESOURCE])) {
                foreach($json[self::FIELD_EVALUATED_RESOURCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addEvaluatedResource($v);
                    } else {
                        $type->addEvaluatedResource(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_EVALUATED_RESOURCE] instanceof FHIRReference) {
                $type->addEvaluatedResource($json[self::FIELD_EVALUATED_RESOURCE]);
            } else {
                $type->addEvaluatedResource(new FHIRReference($json[self::FIELD_EVALUATED_RESOURCE]));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            $ext = $this->status->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_status = $ext;
            }
        }
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            $ext = $this->type->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_type = $ext;
            }
        }
        if (isset($this->dataUpdateType)) {
            if (null !== ($val = $this->dataUpdateType->getValue())) {
                $out->dataUpdateType = $val;
            }
            $ext = $this->dataUpdateType->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dataUpdateType = $ext;
            }
        }
        if (isset($this->measure)) {
            if (null !== ($val = $this->measure->getValue())) {
                $out->measure = $val;
            }
            $ext = $this->measure->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_measure = $ext;
            }
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            $ext = $this->date->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_date = $ext;
            }
        }
        if (isset($this->reporter)) {
            $out->reporter = $this->reporter;
        }
        if (isset($this->reportingVendor)) {
            $out->reportingVendor = $this->reportingVendor;
        }
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        if (isset($this->inputParameters)) {
            $out->inputParameters = $this->inputParameters;
        }
        if (isset($this->scoring)) {
            $out->scoring = $this->scoring;
        }
        if (isset($this->improvementNotation)) {
            $out->improvementNotation = $this->improvementNotation;
        }
        if (isset($this->group) && [] !== $this->group) {
            $out->group = $this->group;
        }
        if (isset($this->supplementalData) && [] !== $this->supplementalData) {
            $out->supplementalData = $this->supplementalData;
        }
        if (isset($this->evaluatedResource) && [] !== $this->evaluatedResource) {
            $out->evaluatedResource = $this->evaluatedResource;
        }
        $out->resourceType = $this->_getResourceType();
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